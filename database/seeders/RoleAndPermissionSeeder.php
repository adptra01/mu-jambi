<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Step 1: Create Roles
       $adminRole = Role::create(['name' => 'admin']);
       $writerRole = Role::create(['name' => 'writer']);
       
       // Step 2: Create Permissions
       $managePostsPermission = Permission::create(['name' => 'manage-posts']);
       $manageUsersPermission = Permission::create(['name' => 'manage-users']);
      
       // Step 3: Assign Permissions to Roles
       $adminRole->givePermissionTo([$managePostsPermission, $manageUsersPermission]);
       $writerRole->givePermissionTo($managePostsPermission);
       
       // Step 4: Create Users and Assign Roles
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);

        $writer = User::create([
            'name' => 'Writer User',
            'email' => 'writer@example.com',
            'password' => Hash::make('password'),
        ]);

        $admin->assignRole($adminRole);
        $writer->assignRole($writerRole);
    }
}
