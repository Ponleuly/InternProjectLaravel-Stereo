<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_artist')->insert([
            [
                'id' => 1,
                'name_artist' => 'Ed Sheeran',
                'pf_artist' => 'ed_sheeran.jpg',
                'id_category' => 1,
                'id_country' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 2,
                'name_artist' => 'Charlie Puth',
                'pf_artist' => 'charlie_puth.jpg',
                'id_category' => 1,
                'id_country' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 3,
                'name_artist' => 'Alan Walker',
                'pf_artist' => 'alan_walker.jpg',
                'id_category' => 9,
                'id_country' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 4,
                'name_artist' => 'Austin Mahone',
                'pf_artist' => 'Austin_mahone.jpg',
                'id_category' => 3,
                'id_country' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 5,
                'name_artist' => 'Bot',
                'pf_artist' => 'bot.jpg',
                'id_category' => 3,
                'id_country' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 6,
                'name_artist' => 'Jack',
                'pf_artist' => 'jack.jpeg',
                'id_category' => 9,
                'id_country' => 3,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 7,
                'name_artist' => 'Justin BieBer',
                'pf_artist' => 'justin bieber.jpg',
                'id_category' => 9,
                'id_country' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 8,
                'name_artist' => 'Le Bao Binh',
                'pf_artist' => 'le_bao_binh.jpg',
                'id_category' => 3,
                'id_country' => 3,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 9,
                'name_artist' => 'Michael Learn To Rock',
                'pf_artist' => 'michael.jpg',
                'id_category' => 3,
                'id_country' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 10,
                'name_artist' => 'Michael Buble',
                'pf_artist' => 'michael_buble.jpg',
                'id_category' => 4,
                'id_country' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 11,
                'name_artist' => 'Pacharith',
                'pf_artist' => 'p-rith.jpg',
                'id_category' => 5,
                'id_country' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 12,
                'name_artist' => 'Puthika',
                'pf_artist' => 'puthika.jpg',
                'id_category' => 5,
                'id_country' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 13,
                'name_artist' => 'Quan AP',
                'pf_artist' => 'quan_ap.jpg',
                'id_category' => 3,
                'id_country' => 3,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 14,
                'name_artist' => 'Son Tung MTP',
                'pf_artist' => 'son_tung.jpg',
                'id_category' => 7,
                'id_country' => 3,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 15,
                'name_artist' => 'Den',
                'pf_artist' => 'Den.jpg',
                'id_category' => 10,
                'id_country' => 3,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 16,
                'name_artist' => 'Taylor Swift',
                'pf_artist' => 'taylor_swift.jpg',
                'id_category' => 1,
                'id_country' => 1,
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
