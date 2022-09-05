<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_country')->insert([
            ['id' => 1, 'name_country' => 'English', 'created_at' => Carbon::now()],
            ['id' => 2, 'name_country' => 'Cambodian', 'created_at' => Carbon::now()],
            ['id' => 3, 'name_country' => 'Vietnamese', 'created_at' => Carbon::now()],
        ]);
    }
}
