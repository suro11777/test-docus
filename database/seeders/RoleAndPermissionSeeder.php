<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RoleAndPermissionSeeder extends Seeder
{
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'edit articles']);
        Permission::create(['name' => 'delete articles']);
        Permission::create(['name' => 'publish articles']);
        Permission::create(['name' => 'unpublish articles']);

        $roleWriter = Role::create(['name' => 'writer']);
        $roleWriter->givePermissionTo('edit articles');
        $roleWriter->givePermissionTo('delete articles');

        $roleAdmin = Role::create(['name' => 'admin']);
        $roleAdmin->givePermissionTo('publish articles');
        $roleAdmin->givePermissionTo('unpublish articles');

        $roleSuperAdmin = Role::create(['name' => 'Super-Admin']);

        $userWriter = User::create([
            'name' => 'User',
            'email' => 'test@example.com',
            'password' => Hash::make('writer'),
        ]);
        $userWriter->assignRole($roleWriter);

        $userAdmin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin'),
        ]);
        $userAdmin->assignRole($roleWriter);
        $userAdmin->assignRole($roleAdmin);

        $userSuperAdmin = User::create([
            'name' => 'Super-Admin User',
            'email' => 'superadmin@example.com',
            'password' => Hash::make('superadmin'),
        ]);
        $userSuperAdmin->assignRole($roleSuperAdmin);
    }
}
