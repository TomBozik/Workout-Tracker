<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $user = User::create([
            'username' => 'tombozik',
            'email' => 'tombozik@gmail.com',
            'password' => Hash::make('password'),
        ]);
        $user->assignRole('user');

        $admin = User::create([
            'username' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);
        
        $admin->assignRole('admin');

    }
}
