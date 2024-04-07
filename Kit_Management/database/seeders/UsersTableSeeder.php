<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //admin
            [
                'name' =>  'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ],

            //agent
            [
                'name' =>  'Player',
                'email' => 'Player@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'Player',
            ],

            [
                'name' =>  'President',
                'email' => 'Pres@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'President',
            ],

            [
                'name' =>  'Vice_President',
                'email' => 'VP@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'Vice_President',
            ],

            [
                'name' =>  'Treasurer',
                'email' => 'Tres@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'Treasurer',
            ],

            [
                'name' =>  'Kit_Manager',
                'email' => 'Kit@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'Kit_Manager',
            ],
            
        ]);
    }
}