<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Yathu',
                'email' => 'yathu@gmail.com',
                'password'=>bcrypt('11111111'),
                'role' => 'admin'
            ],
            [
                'name' => 'Nanthan',
                'email' => 'nanthan@gmail.com',
                'password'=>bcrypt('11111111'),
                'role' => 'customer'
            ],
            [
                'name' => 'looser',
                'email' => 'looser@gmail.com',
                'password'=>bcrypt('11111111'),
                'role' => 'vendor'
            ],
        ]);
    }
}
