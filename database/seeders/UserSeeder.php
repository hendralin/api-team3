<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'BosQu',
            'email' => 'bos@team3.fic',
            'phone' => '6285267008081',
            'bio' => 'Big Bos',
            'role' => 'bos',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Wiro Sableng',
            'email' => 'tes@team3.fic',
            'phone' => '628993365406',
            'bio' => 'Sales Jaman Now',
            'role' => 'sales',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
        ]);
    }
}
