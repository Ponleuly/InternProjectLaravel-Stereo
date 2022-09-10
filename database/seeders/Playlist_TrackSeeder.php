<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Playlist_TrackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_playlist_track')->insert([
            [
                'id' => 1, 'id_playlist' => 1, 'id_track' => 12, 'created_at' => Carbon::now()
            ],
            [
                'id' => 2, 'id_playlist' => 1, 'id_track' => 44, 'created_at' => Carbon::now()
            ],
            [
                'id' => 3, 'id_playlist' => 1, 'id_track' => 45, 'created_at' => Carbon::now()
            ],
            [
                'id' => 4, 'id_playlist' => 1, 'id_track' => 46, 'created_at' => Carbon::now()
            ],
            [
                'id' => 5, 'id_playlist' => 1, 'id_track' => 47, 'created_at' => Carbon::now()
            ],
        ]);
    }
}
