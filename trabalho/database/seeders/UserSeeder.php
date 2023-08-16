<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'password' => Hash::make('123'),
            'email' => 'admin@gmail.com',
            'admin' => '1'
        ]);User::create([
            'name' => 'user',
            'password' => Hash::make('123'),
            'email' => 'user@gmail.com',
            'admin' => '0'
        ]);

    }
}
