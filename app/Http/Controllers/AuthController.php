<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // 🔒 Cek apakah user diblokir sementara (lebih dari 5 percobaan gagal)
        if (RateLimiter::tooManyAttempts($this->throttleKey($request), 5)) {
            $seconds = RateLimiter::availableIn($this->throttleKey($request));

            return back()
                ->withInput()
                ->with('lockout_seconds', $seconds);
        }

        // ✅ Validasi input
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        // 🔑 Coba login dengan kredensial
        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            // Reset percobaan gagal
            RateLimiter::clear($this->throttleKey($request));

            $request->session()->regenerate();
            $user = Auth::user();

            if (!$user->is_active) {
                Auth::logout();
                return back()
                    ->withInput()
                    ->withErrors(['username' => 'Akun Anda tidak aktif. Hubungi administrator.']);
            }

            $user->update(['last_login' => now()]);

            return redirect()->intended('/');
        }

        // Login gagal → tambah hitungan percobaan
        RateLimiter::hit($this->throttleKey($request), 60);

        return back()
            ->withInput()
            ->withErrors(['username' => 'Username atau password salah.']);
    }


    protected function throttleKey(Request $request)
    {
        return Str::lower($request->input('username')).'|'.$request->ip();
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}