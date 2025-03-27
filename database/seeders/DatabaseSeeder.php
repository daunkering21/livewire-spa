<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
           'username' => 'superadmin', 
           'status' => 'active', 
           'password' => bcrypt('superadmin123'), 
           'pin' => '212121', 
           'session_token' => Str::random(16), 
        ]);

        User::create([
            'username' => 'dedaunan', 
            'status' => 'active', 
            'password' => bcrypt('hapus123'), 
            'pin' => '789456', 
            'session_token' => Str::random(16), 
        ]);

        User::create([
            'username' => 'wantos', 
            'status' => 'active', 
            'password' => bcrypt('wantos123'), 
            'pin' => '123456', 
            'session_token' => Str::random(16), 
        ]);
    }
}
