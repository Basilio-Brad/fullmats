<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class NewUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate([
            'email' => 'admin@fullmatsperu.com'
        ],[
            'name' => 'Admin Fullmats',
            'email' => 'admin@fullmatsperu.com',
            'password' => Hash::make('fullmatsperu2024#'),
        ])->assignRole('Admin');
    }
}
