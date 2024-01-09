<?php

namespace Database\Seeders;

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
        // membuat user secara dinamis
        \App\Models\User::factory(10)->create();

        // membuat user secara statis
        \App\Models\User::create([
            'name' => "Admin Renald",
            'email' => "renald@gmail.com",
            'password' => Hash::make('12345678'),
            'roles' => 'ADMIN',
            'phone' => '08961238903',
        ]);
    }
}
