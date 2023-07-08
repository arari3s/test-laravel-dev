<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Super Admin',
                'email' => 'superadmin@laravel.test',
                'roles' => 'ADMIN',
                'password' => Hash::make('superadmin'),
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@laravel.test',
                'roles' => 'ADMIN',
                'password' => Hash::make('adminadmin'),
            ],
        ];

        DB::table('users')->insert($users);
    }
}
