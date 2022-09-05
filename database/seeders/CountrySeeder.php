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
            [
                'id' => 1,
                'name_country' => 'English',
                'pf_country' => 'United_Kingdom.jpeg',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 2,
                'name_country' => 'Cambodian',
                'pf_country' => 'Flag_of_Cambodia.jpeg',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 3,
                'pf_country' => 'Flag-Vietnam.jpeg',
                'name_country' => 'Vietnamese',
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
