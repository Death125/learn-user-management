<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create(
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'password' => 'password',
            ]
        );

        $user2 = User::create(
            [
                'name' => 'user',
                'email' => 'user@gmail.com',
                'email_verified_at' => now(),
                'password' => 'user',
            ]
        );

        $user3 = User::create(
            [
                'name' => 'user',
                'email' => 'use1r@gmail.com',
                'email_verified_at' => now(),
                'password' => 'user',
            ]
        );

        $user4 = User::create(
            [
                'name' => 'user',
                'email' => 'us3er@gmail.com',
                'email_verified_at' => now(),
                'password' => 'user',
            ]
        );

        $user->assignRole('writer', 'admin');
        $user2->assignRole('writer', 'user');
        $user3->assignRole('writer', 'user');
        $user4->assignRole('writer', 'user');
    }
}
