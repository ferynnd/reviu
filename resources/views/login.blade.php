<x-layouts.app>
  <div class="flex flex-col lg:flex-row min-h-screen">
    <!-- Bagian kiri: form -->
    <div class="flex flex-1 flex-col items-center justify-center px-6 py-10">
      <div class="w-full max-w-md">
        <div class="flex flex-col items-center justify-center gap-5 mb-6">
          <img class="h-16 w-auto object-contain" src="{{ asset('assets/logo.png') }}" alt="Reviu">
          <span class="text-2xl text-center font-bold tracking-tight text-white">Welcome Back!</span>
        </div>

        <form action="{{ route('login.submit') }}" method="POST" class="flex flex-col gap-4">
          @csrf
          <div>
            <label for="username" class="block text-sm font-medium text-white">Username</label>
            <input type="text" name="username" id="username" required
              class="mt-2 block w-full rounded-lg bg-primary px-4 py-3 text-base text-white placeholder:text-gray-400 border border-cyan-500 focus:border-cyan-400 focus:ring-2 focus:ring-cyan-300 focus:outline-none">
          </div>

          <div>
            <label for="password" class="block text-sm font-medium text-white">Password</label>
            <input type="password" name="password" id="password" required
              class="mt-2 block w-full rounded-lg bg-primary px-4 py-3 text-base text-white placeholder:text-gray-400 border border-cyan-500 focus:border-cyan-400 focus:ring-2 focus:ring-cyan-300 focus:outline-none">
          </div>

          <button type="submit"
            class="w-full rounded-lg bg-gradient-to-b from-cyan-400 to-sky-500 hover:from-sky-500 hover:to-blue-600 px-3 py-3 mt-6 text-sm font-semibold text-white transition-all duration-300 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">
            Login
          </button>
        </form>
      </div>
    </div>

    <!-- Bagian kanan: gambar -->
    <div class="relative hidden lg:flex flex-1 justify-center items-center h-screen">
        <div class="h-[95%] w-[95%] ">
            <img src="{{ asset('assets/loginimg.png') }}" alt=""
                class="h-full w-full object-cover rounded-3xl shadow-lg">
        </div>
    </div>

  </div>
</x-layouts.app>
