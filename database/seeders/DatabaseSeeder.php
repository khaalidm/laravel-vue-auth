<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('1234'),
            'role' => 2
        ]);        
        User::create([
            'name' => 'User',
            'email' => 'user@test.com',
            'password' => Hash::make('1234'),
            'role' => 1
        ]);
    }
}
