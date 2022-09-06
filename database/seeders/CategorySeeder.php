<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_category')->insert([
            [
                'id' => 1,
                'name_category' => 'Romantic',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 2,
                'name_category' => 'Love',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 3,
                'name_category' => 'Sad Melody',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 4,
                'name_category' => 'Motivation',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 5,
                'name_category' => 'Acoustic',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 6,
                'name_category' => 'Guitar',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 7,
                'name_category' => 'Rock',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 8,
                'name_category' => 'EDM',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 9,
                'name_category' => 'Remix',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 10,
                'name_category' => 'Rap',
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
