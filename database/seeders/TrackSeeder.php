<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TrackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_track')->insert([
            [
                'id' => 1,
                'name_track' => 'Perfect',
                'pf_track' => 'perfect.jpg',
                'audio_track' => 'Perfect - Ed Sheeran.mp3',
                'id_category' => 1,
                'id_artist' => 1,
                'id_album' => 1,
                'id_country' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 2,
                'name_track' => 'Attention',
                'pf_track' => 'Attention.jpg',
                'audio_track' => 'Attention - Charlie Puth.mp3',
                'id_category' => 1,
                'id_artist' => 2,
                'id_album' => 2,
                'id_country' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 3,
                'name_track' => 'Back To December',
                'pf_track' => 'Back_To_December.jpg',
                'audio_track' => 'Taylor Swift - Back To December.mp3',
                'id_category' => 1,
                'id_artist' => 16,
                'id_album' => 9,
                'id_country' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 4,
                'name_track' => 'One Call Away',
                'pf_track' => 'One_Call_Away.jpg',
                'audio_track' => 'Charlie Puth - One Call Away.mp3',
                'id_category' => 1,
                'id_artist' => 2,
                'id_album' => 2,
                'id_country' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 5,
                'name_track' => 'Mavin Gaye',
                'pf_track' => 'Mavin_Gaye.jpg',
                'audio_track' => 'Charlie Puth - Marvin Gaye ft. Meghan.mp3',
                'id_category' => 1,
                'id_artist' => 2,
                'id_album' => 2,
                'id_country' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 6,
                'name_track' => 'Never Say Never',
                'pf_track' => 'Nerver_Say_Never.jpg',
                'audio_track' => 'Justin Bieber - Never Say Never.mp3',
                'id_category' => 4,
                'id_artist' => 7,
                'id_album' => 12,
                'id_country' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 7,
                'name_track' => 'See You Again',
                'pf_track' => 'See_You_Again.jpeg',
                'audio_track' => 'Wiz Khalifa - See You Again ft. Charlie Puth.mp3',
                'id_category' => 4,
                'id_artist' => 2,
                'id_album' => 2,
                'id_country' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 8,
                'name_track' => 'Sharp Of You',
                'pf_track' => 'Sharp_Of_You.jpg',
                'audio_track' => 'Ed Sheeran - Shape of you.mp3',
                'id_category' => 2,
                'id_artist' => 1,
                'id_album' => 11,
                'id_country' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 9,
                'name_track' => 'Take Me To Your Heart',
                'pf_track' => 'Take_Me_To_Your_Heart.jpg',
                'audio_track' => 'Take me to your heart.mp3',
                'id_category' => 3,
                'id_artist' => 9,
                'id_album' => 13,
                'id_country' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 10,
                'name_track' => "We Don't Talk Anymore",
                'pf_track' => "We_Don't_Talk_Anymore.jpg",
                'audio_track' => "Charlie Puth - We Don't Talk Anymore (feat. Selena Gomez)",
                'id_category' => 3,
                'id_artist' => 2,
                'id_album' => 10,
                'id_country' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 11,
                'name_track' => 'All I Ever Need',
                'pf_track' => 'All_I_Ever_Need.jpg',
                'audio_track' => 'Austin Mahone - All I Ever Need.mp3',
                'id_category' => 2,
                'id_artist' => 4,
                'id_album' => 14,
                'id_country' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 12,
                'name_track' => 'Faded',
                'pf_track' => 'Faded.jpg',
                'audio_track' => 'Alan Walker - Faded.mp3',
                'id_category' => 9,
                'id_artist' => 3,
                'id_album' => 3,
                'id_country' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 13,
                'name_track' => 'Home',
                'pf_track' => 'Home.jpg',
                'audio_track' => 'Michael Bublé - Home.mp3',
                'id_category' => 4,
                'id_artist' => 10,
                'id_album' => 13,
                'id_country' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 14,
                'name_track' => 'Bac Phan',
                'pf_track' => 'Bac_phan.jpg',
                'audio_track' => 'BẠC PHẬN _ K-ICM ft. JACK.mp3',
                'id_category' => 9,
                'id_artist' => 6,
                'id_album' => 15,
                'id_country' => 3,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 15,
                'name_track' => 'Song Gio',
                'pf_track' => 'Song_gio.jpg',
                'audio_track' => 'SÓNG GIÓ _ K-ICM x JACK.mp3',
                'id_category' => 9,
                'id_artist' => 6,
                'id_album' => 15,
                'id_country' => 3,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 16,
                'name_track' => 'Sao Em Vo Tinh',
                'pf_track' => 'Sao_em_vo_tinh.jpg',
                'audio_track' => 'SAO EM VÔ TÌNH _ JACK x K-ICM.mp3',
                'id_category' => 9,
                'id_artist' => 6,
                'id_album' => 15,
                'id_country' => 3,
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
