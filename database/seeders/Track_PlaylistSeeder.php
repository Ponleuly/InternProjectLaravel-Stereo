<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Track_PlaylistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_playlist_track')->insert([
            ['id' => 1, 'id_playlist' => 1, 'id_track' => 1, 'created_at' => Carbon::now()],
            ['id' => 2, 'id_playlist' => 1, 'id_track' => 8, 'created_at' => Carbon::now()],
            ['id' => 3, 'id_playlist' => 1, 'id_track' => 49, 'created_at' => Carbon::now()],
            ['id' => 4, 'id_playlist' => 1, 'id_track' => 50, 'created_at' => Carbon::now()],

            ['id' => 5, 'id_playlist' => 2, 'id_track' => 2, 'created_at' => Carbon::now()],
            ['id' => 6, 'id_playlist' => 2, 'id_track' => 4, 'created_at' => Carbon::now()],
            ['id' => 7, 'id_playlist' => 2, 'id_track' => 10, 'created_at' => Carbon::now()],
            ['id' => 8, 'id_playlist' => 2, 'id_track' => 48, 'created_at' => Carbon::now()],

            ['id' => 9, 'id_playlist' => 3, 'id_track' => 5, 'created_at' => Carbon::now()],
            ['id' => 10, 'id_playlist' => 3, 'id_track' => 7, 'created_at' => Carbon::now()],

            ['id' => 11, 'id_playlist' => 4, 'id_track' => 12, 'created_at' => Carbon::now()],
            ['id' => 12, 'id_playlist' => 4, 'id_track' => 44, 'created_at' => Carbon::now()],
            ['id' => 13, 'id_playlist' => 4, 'id_track' => 45, 'created_at' => Carbon::now()],
            ['id' => 14, 'id_playlist' => 4, 'id_track' => 46, 'created_at' => Carbon::now()],
            ['id' => 15, 'id_playlist' => 4, 'id_track' => 47, 'created_at' => Carbon::now()],

            ['id' => 16, 'id_playlist' => 5, 'id_track' => 14, 'created_at' => Carbon::now()],
            ['id' => 17, 'id_playlist' => 5, 'id_track' => 15, 'created_at' => Carbon::now()],
            ['id' => 18, 'id_playlist' => 5, 'id_track' => 16, 'created_at' => Carbon::now()],


            ['id' => 19, 'id_playlist' => 6, 'id_track' => 6, 'created_at' => Carbon::now()],
            ['id' => 20, 'id_playlist' => 6, 'id_track' => 51, 'created_at' => Carbon::now()],
            ['id' => 21, 'id_playlist' => 6, 'id_track' => 52, 'created_at' => Carbon::now()],
            ['id' => 22, 'id_playlist' => 6, 'id_track' => 53, 'created_at' => Carbon::now()],
            ['id' => 23, 'id_playlist' => 6, 'id_track' => 54, 'created_at' => Carbon::now()],
            ['id' => 24, 'id_playlist' => 6, 'id_track' => 55, 'created_at' => Carbon::now()],

            ['id' => 25, 'id_playlist' => 7, 'id_track' => 56, 'created_at' => Carbon::now()],
            ['id' => 26, 'id_playlist' => 7, 'id_track' => 57, 'created_at' => Carbon::now()],
            ['id' => 27, 'id_playlist' => 7, 'id_track' => 58, 'created_at' => Carbon::now()],
            ['id' => 28, 'id_playlist' => 7, 'id_track' => 59, 'created_at' => Carbon::now()],
            ['id' => 29, 'id_playlist' => 7, 'id_track' => 60, 'created_at' => Carbon::now()],

            ['id' => 30, 'id_playlist' => 8, 'id_track' => 17, 'created_at' => Carbon::now()],
            ['id' => 31, 'id_playlist' => 8, 'id_track' => 18, 'created_at' => Carbon::now()],
            ['id' => 32, 'id_playlist' => 8, 'id_track' => 19, 'created_at' => Carbon::now()],
            ['id' => 33, 'id_playlist' => 8, 'id_track' => 20, 'created_at' => Carbon::now()],
            ['id' => 34, 'id_playlist' => 8, 'id_track' => 21, 'created_at' => Carbon::now()],
            ['id' => 35, 'id_playlist' => 8, 'id_track' => 22, 'created_at' => Carbon::now()],
            ['id' => 36, 'id_playlist' => 8, 'id_track' => 23, 'created_at' => Carbon::now()],
            ['id' => 37, 'id_playlist' => 8, 'id_track' => 24, 'created_at' => Carbon::now()],
            ['id' => 38, 'id_playlist' => 8, 'id_track' => 25, 'created_at' => Carbon::now()],
            ['id' => 39, 'id_playlist' => 8, 'id_track' => 26, 'created_at' => Carbon::now()],
            ['id' => 40, 'id_playlist' => 8, 'id_track' => 27, 'created_at' => Carbon::now()],

            ['id' => 41, 'id_playlist' => 9, 'id_track' => 29, 'created_at' => Carbon::now()],
            ['id' => 42, 'id_playlist' => 9, 'id_track' => 30, 'created_at' => Carbon::now()],
            ['id' => 43, 'id_playlist' => 9, 'id_track' => 32, 'created_at' => Carbon::now()],
            ['id' => 44, 'id_playlist' => 9, 'id_track' => 33, 'created_at' => Carbon::now()],
            ['id' => 45, 'id_playlist' => 9, 'id_track' => 34, 'created_at' => Carbon::now()],
            ['id' => 46, 'id_playlist' => 9, 'id_track' => 37, 'created_at' => Carbon::now()],
            ['id' => 47, 'id_playlist' => 9, 'id_track' => 38, 'created_at' => Carbon::now()],
            ['id' => 48, 'id_playlist' => 9, 'id_track' => 39, 'created_at' => Carbon::now()],
            ['id' => 49, 'id_playlist' => 9, 'id_track' => 42, 'created_at' => Carbon::now()],

            ['id' => 50, 'id_playlist' => 10, 'id_track' => 28, 'created_at' => Carbon::now()],
            ['id' => 51, 'id_playlist' => 10, 'id_track' => 29, 'created_at' => Carbon::now()],
            ['id' => 52, 'id_playlist' => 10, 'id_track' => 30, 'created_at' => Carbon::now()],
            ['id' => 53, 'id_playlist' => 10, 'id_track' => 31, 'created_at' => Carbon::now()],
            ['id' => 54, 'id_playlist' => 10, 'id_track' => 32, 'created_at' => Carbon::now()],
            ['id' => 55, 'id_playlist' => 10, 'id_track' => 33, 'created_at' => Carbon::now()],
            ['id' => 56, 'id_playlist' => 10, 'id_track' => 34, 'created_at' => Carbon::now()],
            ['id' => 57, 'id_playlist' => 10, 'id_track' => 35, 'created_at' => Carbon::now()],
            ['id' => 58, 'id_playlist' => 10, 'id_track' => 36, 'created_at' => Carbon::now()],
            ['id' => 59, 'id_playlist' => 10, 'id_track' => 37, 'created_at' => Carbon::now()],
            ['id' => 60, 'id_playlist' => 10, 'id_track' => 38, 'created_at' => Carbon::now()],
            ['id' => 61, 'id_playlist' => 10, 'id_track' => 39, 'created_at' => Carbon::now()],
            ['id' => 62, 'id_playlist' => 10, 'id_track' => 40, 'created_at' => Carbon::now()],
            ['id' => 63, 'id_playlist' => 10, 'id_track' => 41, 'created_at' => Carbon::now()],
            ['id' => 64, 'id_playlist' => 10, 'id_track' => 42, 'created_at' => Carbon::now()],
            ['id' => 65, 'id_playlist' => 10, 'id_track' => 43, 'created_at' => Carbon::now()],

        ]);
    }
}
