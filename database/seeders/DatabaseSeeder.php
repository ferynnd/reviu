<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $permissions = [
            'create',
            'edit',
            'delete',
            'view',
        ];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
        $superAdminRole = Role::create(['name' => 'superadmin']);
        $adminRole = Role::create(['name' => 'admin']);
        $staffRole = Role::create(['name' => 'staff']);

        $superAdminRole->givePermissionTo(Permission::all());
        $adminRole->givePermissionTo(['view']);
        $staffRole->givePermissionTo(Permission::all());

        $superadminUser = User::firstOrCreate(
            ['email' => 'superadmin@gmail.com'],
            [
                'fullname' => 'Super Admin',
                'username' => 'superadmin',
                'password' => \Hash::make('123'),
                'is_active' => true,
                'last_login' => now(),
            ]
);
        $adminUser = User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'fullname' => 'Admin',
                'username' => 'admin',
                'password' => \Hash::make('123'),
                'is_active' => true,
                'last_login' => now(),
            ]
);
        $staffUser = User::firstOrCreate(
            ['email' => 'staff@gmail.com'],
            [
                'fullname' => 'Staff',
                'username' => 'staff',
                'password' => \Hash::make('123'),
                'is_active' => true,
                'last_login' => now(),
            ]
);
        $superadminUser->assignRole($superAdminRole);
        $adminUser->assignRole($adminRole);
        $staffUser->assignRole($staffRole);

        // \App\Models\User::factory(10)->create();

    }

}
