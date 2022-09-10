<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlaylistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('table_playlist')->insert([
            [
                'id' => 1,
                'name_playlist' => 'This is alan walker',
                'pf_playlist' => 'this_in_alan_walker.jpg',
                'id_user' => 1,
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
