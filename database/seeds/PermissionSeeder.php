<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Exercises permissions
        Permission::create(['name' => 'create exercises']);
        Permission::create(['name' => 'view exercises']);
        Permission::create(['name' => 'edit exercises']);
        Permission::create(['name' => 'delete exercises']);


        // Routines permissions
        Permission::create(['name' => 'create routines']);

        Permission::create(['name' => 'edit own routines']);
        Permission::create(['name' => 'edit any routines']);

        Permission::create(['name' => 'delete own routines']);
        Permission::create(['name' => 'delete any routines']);


        // Sets permissions
        Permission::create(['name' => 'create sets']);

        Permission::create(['name' => 'edit own sets']);
        Permission::create(['name' => 'edit any sets']);

        Permission::create(['name' => 'delete own sets']);
        Permission::create(['name' => 'delete any sets']);



        $adminRole = Role::create(['name' => 'admin']);
        $adminRole->givePermissionTo([
            'create exercises',
            'edit exercises', 
            'delete exercises',
            'create routines',
            'edit any routines',
            'delete any routines',
            'create sets',
            'edit any sets',
            'delete any sets', 
        ]);

        $userRole = Role::create(['name' => 'user']);
        $userRole->givePermissionTo([
            'create routines',
            'edit own routines',
            'delete own routines',
            'create sets',
            'edit own sets',
            'delete own sets', 
        ]);
    }
}