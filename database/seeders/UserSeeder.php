<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
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
                'gender' => 'male',
                'role' => 1,
                'avatar' => 'admin.jpg',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'username' => 'Ponleuly',
                'email' => 'ponleuly@gmail.com',
                'password' => bcrypt('123456'),
                'gender' => 'male',
                'role' => 0,
                'avatar' => 'admin.jpg',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'username' => 'Matin',
                'email' => 'matin@gmail.com',
                'password' => bcrypt('11223344'),
                'gender' => 'male',
                'role' => 0,
                'avatar' => 'matin.jpg',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => 4,
                'username' => 'Zara Rechard',
                'email' => 'zara@gmail.com',
                'password' => bcrypt('11223344'),
                'gender' => 'female',
                'role' => 0,
                'avatar' => 'zara.jpg',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => 5,
                'username' => 'Jack',
                'email' => 'Jack@gmail.com',
                'password' => bcrypt('123456'),
                'gender' => 'others',
                'role' => 0,
                'avatar' => 'jack.jpg',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => 6,
                'username' => 'Jonh Henderson',
                'email' => 'Jonh@gmail.com',
                'password' => bcrypt('123456'),
                'gender' => 'male',
                'role' => 0,
                'avatar' => null,
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
