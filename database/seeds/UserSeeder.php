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
            'username' => 'User',
            'email' => 'user@user.com',
            'password' => Hash::make('user'),
        ]);
        $user->assignRole('user');

        $admin = User::create([
            'username' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123PassworD123'),
        ]);
        
        $admin->assignRole('admin');

    }
}
