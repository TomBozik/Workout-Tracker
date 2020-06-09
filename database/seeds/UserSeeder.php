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

        User::create([
            'username' => 'test',
            'email' => 'test@test.com',
            'password' => Hash::make('password'),
        ]);
    }
}
