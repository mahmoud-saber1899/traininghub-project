<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Student User',
            'email' => 'student@example.com',
            'password' => Hash::make('Student@12345678'), // Use a secure password
            'is_supervisor' => false, // Student role
        ]);
        // Create a supervisor user
        User::create([
            'name' => 'Supervisor User',
            'email' => 'supervisor@example.com',
            'password' => Hash::make('Supervisor@12345678'), // Use a secure password
            'is_supervisor' => true, // Supervisor role
        ]);
    }
}
