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
                'name_playlist' => 'Ed sheeran equal & the complete collection',
                'pf_playlist' => 'ed_sheeran_equal_and_collection.jpg',
                'id_user' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 2,
                'name_playlist' => 'This is charlie puth',
                'pf_playlist' => 'this_is_charlie_puth.jpg',
                'id_user' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 3,
                'name_playlist' => "Charlie's mixtape favourite",
                'pf_playlist' => "charlie's_mixtape_favourite.jpg",
                'id_user' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 4,
                'name_playlist' => 'This is alan walker',
                'pf_playlist' => 'this_in_alan_walker.jpg',
                'id_user' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 5,
                'name_playlist' => 'Music Video jack',
                'pf_playlist' => 'collections_Jack.jpg',
                'id_user' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 6,
                'name_playlist' => 'Best of justin bieber',
                'pf_playlist' => 'best_of_justin_bieber.jpg',
                'id_user' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 7,
                'name_playlist' => 'This is le bao binh',
                'pf_playlist' => 'this_is_le_bao_binh.jpg',
                'id_user' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 8,
                'name_playlist' => 'My Way - KmengKhmer',
                'pf_playlist' => 'my_way_kmeng_khmer.jpg',
                'id_user' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 9,
                'name_playlist' => 'skull - Vannda',
                'pf_playlist' => 'skull_album_vanda.jpg',
                'id_user' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 10,
                'name_playlist' => 'All of Vannda',
                'pf_playlist' => 'vanda_pf.jpg',
                'id_user' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 11,
                'name_playlist' => 'My Playlist #1',
                'pf_playlist' => null,
                'id_user' => 4,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 12,
                'name_playlist' =>  'My Playlist #2',
                'pf_playlist' => null,
                'id_user' => 4,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 13,
                'name_playlist' => 'My Playlist #3',
                'pf_playlist' => null,
                'id_user' => 4,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 14,
                'name_playlist' => 'My Playlist #4',
                'pf_playlist' => null,
                'id_user' => 4,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 15,
                'name_playlist' => 'My Playlist #1',
                'pf_playlist' => null,
                'id_user' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 16,
                'name_playlist' => 'My Playlist #2',
                'pf_playlist' => 'collection.jpg',
                'id_user' => 2,
                'created_at' => Carbon::now()
            ],
            /*
            [
                'id' => 3,
                'name_playlist' => '',
                'pf_playlist' => '',
                'id_user' => 1,
                'created_at' => Carbon::now()
            ],
            */
        ]);
    }
}
