<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'username' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123456'),
                'role' => '1',
                'avatar' => 'admin.jpg',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'username' => 'Ponleu',
                'email' => 'ponleu@gmail.com',
                'password' => bcrypt('123456'),
                'role' => '0',
                'avatar' => 'admin.jpg',
                'created_at' => Carbon::now(),
            ],

        ]);
    }
}
