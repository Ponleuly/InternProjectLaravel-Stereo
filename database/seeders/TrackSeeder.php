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
                'name_track' => 'Bạc Phận',
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
                'name_track' => 'Sóng Gió',
                'pf_track' => 'song_gio_jack.jpg',
                'audio_track' => 'SÓNG GIÓ _ K-ICM x JACK.mp3',
                'id_category' => 9,
                'id_artist' => 6,
                'id_album' => 15,
                'id_country' => 3,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 16,
                'name_track' => 'Sao Em Vô Tình',
                'pf_track' => 'Sao_em_vo_tinh.jpg',
                'audio_track' => 'SAO EM VÔ TÌNH _ JACK x K-ICM.mp3',
                'id_category' => 9,
                'id_artist' => 6,
                'id_album' => 15,
                'id_country' => 3,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 17,
                'name_track' => 'My Way',
                'pf_track' => 'my_way_kmeng_khmer.jpg',
                'audio_track' => 'KmengKhmer-My Way.mp3',
                'id_category' => 4,
                'id_artist' => 17,
                'id_album' => 17,
                'id_country' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 18,
                'name_track' => 'បុណ្យភូមិ​ (Bun Phumi)',
                'pf_track' => 'bun_phum_kmeng_khmer.jpg',
                'audio_track' => 'KmengKhmer -Bun-Phum.mp3',
                'id_category' => 7,
                'id_artist' => 17,
                'id_album' => 19,
                'id_country' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 19,
                'name_track' => "កុំបារម្ភ​​ (Don't Worry)",
                'pf_track' => 'dont_worry_kmeng_khmer.jpg',
                'audio_track' => "KmengKhmer - Don't Worry.mp3",
                'id_category' => 4,
                'id_artist' => 17,
                'id_album' => 17,
                'id_country' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 20,
                'name_track' => 'ឆ្ងាយតែកាយ​ (Far Away)',
                'pf_track' => 'far_away_kmeng_khmer.jpg',
                'audio_track' => 'kmengkhmer-far-away.mp3',
                'id_category' => 2,
                'id_artist' => 17,
                'id_album' => 17,
                'id_country' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 21,
                'name_track' => 'កូនត្រូវចាំ​ (Kon Trov Jam)',
                'pf_track' => 'kon_trov_jam_kmeng_khmer.jpg',
                'audio_track' => 'kmengkhmer-kon-trov-jam.mp3',
                'id_category' => 4,
                'id_artist' => 17,
                'id_album' => 17,
                'id_country' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 22,
                'name_track' => 'ជីវិតក្មេងកំព្រា​ (Life of Orphan)',
                'pf_track' => 'life_of_orphan_kmeng_khmer.jpg',
                'audio_track' => 'KmengKhmer -Jivit-kmeng-kom-prea.mp3',
                'id_category' => 4,
                'id_artist' => 17,
                'id_album' => 17,
                'id_country' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 23,
                'name_track' => 'វង្វេង​ (Lost)',
                'pf_track' => 'lost_kmeng_khmer.jpg',
                'audio_track' => 'KmengKhmer-Lost.mp3',
                'id_category' => 4,
                'id_artist' => 17,
                'id_album' => 17,
                'id_country' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 24,
                'name_track' => 'សៀវភៅកំណត់ហេតុស្នេហ៍​ ​(Love diary)',
                'pf_track' => 'love_diary_kmeng_khmer.jpg',
                'audio_track' => 'KmengKhmer-Socheat-Love-diary.mp3',
                'id_category' => 2,
                'id_artist' => 17,
                'id_album' => 17,
                'id_country' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 25,
                'name_track' => 'Miss Kiss',
                'pf_track' => 'miss_kiss_kmeng_khmer.jpg',
                'audio_track' => 'kmengkhmer-miss-kiss.mp3',
                'id_category' => 2,
                'id_artist' => 17,
                'id_album' => 17,
                'id_country' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 26,
                'name_track' => 'មិនដួល​ (Min Dourl)',
                'pf_track' => 'min_doul_khmeng_khmer.jpg',
                'audio_track' => 'KmengKhmer - MIN DOURL.mp3',
                'id_category' => 4,
                'id_artist' => 17,
                'id_album' => 17,
                'id_country' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 27,
                'name_track' => 'អូនកុំយំ (Oun Kom Yum)',
                'pf_track' => 'oun_kom_yum_kmeng_khmer.jpg',
                'audio_track' => 'KmengKhmer -oun-kom-yum.mp3',
                'id_category' => 2,
                'id_artist' => 17,
                'id_album' => 17,
                'id_country' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 28,
                'name_track' => 'Black Rose',
                'pf_track' => 'black_rose_vanda.jpg',
                'audio_track' => 'VANNDA - BLACK ROSE.mp3',
                'id_category' => 10,
                'id_artist' => 18,
                'id_album' => 18,
                'id_country' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 29,
                'name_track' => 'Born this way',
                'pf_track' => 'born_this_way_vanda.jpg',
                'audio_track' => 'VANNDA - BORN THIS WAY.mp3',
                'id_category' => 10,
                'id_artist' => 18,
                'id_album' => 18,
                'id_country' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 30,
                'name_track' => 'Catch me if you can',
                'pf_track' => 'catch_me_if_you_can_vanda.jpg',
                'audio_track' => 'VANNDA - CATCH ME IF YOU CAN.mp3',
                'id_category' => 10,
                'id_artist' => 18,
                'id_album' => 18,
                'id_country' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 31,
                'name_track' => 'ឈឺទេ​ (Chhir Te)',
                'pf_track' => 'chhir_te_vanda.jpg',
                'audio_track' => 'VANNDA - Chher Te.mp3',
                'id_category' => 3,
                'id_artist' => 18,
                'id_album' => 20,
                'id_country' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 32,
                'name_track' => 'Hit the road',
                'pf_track' => 'hit_the_road_vanda.jpeg',
                'audio_track' => 'VANNDA - HIT THE ROAD.mp3',
                'id_category' => 10,
                'id_artist' => 18,
                'id_album' => 18,
                'id_country' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 33,
                'name_track' => 'Hot boy',
                'pf_track' => 'hot_boy_vanda.jpg',
                'audio_track' => 'VANNDA - HOT BOY.mp3',
                'id_category' => 10,
                'id_artist' => 18,
                'id_album' => 18,
                'id_country' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 34,
                'name_track' => 'J+O',
                'pf_track' => 'jo_vanda.jpg',
                'audio_track' => 'VANNDA - J+O.mp3',
                'id_category' => 10,
                'id_artist' => 18,
                'id_album' => 18,
                'id_country' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 35,
                'name_track' => 'អ្នកម្ដាយ (Mama)',
                'pf_track' => 'mama_vanda.jpg',
                'audio_track' => 'VANNDA - MAMA FEAT. KMENGKHMER.mp3',
                'id_category' => 3,
                'id_artist' => 18,
                'id_album' => 20,
                'id_country' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 36,
                'name_track' => 'Move on',
                'pf_track' => 'move_on_vanda.jpg',
                'audio_track' => 'VANNDA - MOVE ON.mp3',
                'id_category' => 3,
                'id_artist' => 18,
                'id_album' => 20,
                'id_country' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 37,
                'name_track' => 'នារីជឿនលឿន​ (Queen Bee)',
                'pf_track' => 'queen_bee_vanda.jpg',
                'audio_track' => 'VANNDA - QUEEN BEE.mp3',
                'id_category' => 10,
                'id_artist' => 18,
                'id_album' => 18,
                'id_country' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 38,
                'name_track' => 'Solo again',
                'pf_track' => 'solo_again_vanda.jpg',
                'audio_track' => 'VANNDA - SOLO AGAIN.mp3',
                'id_category' => 10,
                'id_artist' => 18,
                'id_album' => 18,
                'id_country' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 39,
                'name_track' => 'Solo',
                'pf_track' => 'solo_vanda.jpg',
                'audio_track' => 'VANNDA - SOLO.mp3',
                'id_category' => 10,
                'id_artist' => 18,
                'id_album' => 18,
                'id_country' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 40,
                'name_track' => 'ស្រណោះ​ (Sorrow)',
                'pf_track' => 'sronos_vanda.jpg',
                'audio_track' => 'VANNDA-Sorrow.mp3',
                'id_category' => 10,
                'id_artist' => 18,
                'id_album' => 18,
                'id_country' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 41,
                'name_track' => 'ចាំផ្ដើម និង​ បញ្ចប់ (Start and Stop)',
                'pf_track' => 'start_finish_vanda.jpg',
                'audio_track' => 'VANNDA-Start-and-Stop.mp3',
                'id_category' => 3,
                'id_artist' => 18,
                'id_album' => 20,
                'id_country' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 42,
                'name_track' => 'Time to rise',
                'pf_track' => 'time_to_rise_vanda.jpg',
                'audio_track' => 'VANNDA - Time To Rise feat. Master Kong Nay.mp3',
                'id_category' => 10,
                'id_artist' => 18,
                'id_album' => 18,
                'id_country' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 43,
                'name_track' => 'Y.O.U',
                'pf_track' => 'you_vanda.jpg',
                'audio_track' => 'VANNDA-YOU.mp3',
                'id_category' => 3,
                'id_artist' => 18,
                'id_album' => 20,
                'id_country' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 44,
                'name_track' => 'Alone',
                'pf_track' => 'alone_alan_walker.jpg',
                'audio_track' => 'Alan Walker - Alone.mp3',
                'id_category' => 9,
                'id_artist' => 3,
                'id_album' => 3,
                'id_country' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 45,
                'name_track' => 'Darkside',
                'pf_track' => 'darkside_alan_walker.jpg',
                'audio_track' => 'Alan Walker - Darkside.mp3',
                'id_category' => 9,
                'id_artist' => 3,
                'id_album' => 3,
                'id_country' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 46,
                'name_track' => 'Sing Me To sleep',
                'pf_track' => 'darkside_alan_walker.jpg',
                'audio_track' => 'Alan Walker - Sing-me-to-sleep.mp3',
                'id_category' => 9,
                'id_artist' => 3,
                'id_album' => 3,
                'id_country' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 47,
                'name_track' => 'The Spectre',
                'pf_track' => 'alone_alan_walker.jpg',
                'audio_track' => 'Alan Walker - The-spectre.mp3',
                'id_category' => 9,
                'id_artist' => 3,
                'id_album' => 3,
                'id_country' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 48,
                'name_track' => 'How long',
                'pf_track' => 'how_long_charlie_puth.jpg',
                'audio_track' => 'Charlie Puth - How-long.mp3',
                'id_category' => 1,
                'id_artist' => 2,
                'id_album' => 10,
                'id_country' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 49,
                'name_track' => 'Photograph',
                'pf_track' => 'photograph_ed_sheeran.jpg',
                'audio_track' => 'Ed Sheeran-Photograph.mp3',
                'id_category' => 1,
                'id_artist' => 1,
                'id_album' => 11,
                'id_country' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 50,
                'name_track' => 'Thinking out loud',
                'pf_track' => 'thinking_out_loud.jpg',
                'audio_track' => 'Ed Sheeran - Thinking-out-loud.mp3',
                'id_category' => 1,
                'id_artist' => 1,
                'id_album' => 11,
                'id_country' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 51,
                'name_track' => 'Baby',
                'pf_track' => 'baby_justin_bieber.jpg',
                'audio_track' => 'Justin - Bieber-baby-ft-ludacris.mp3',
                'id_category' => 2,
                'id_artist' => 7,
                'id_album' => 12,
                'id_country' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 52,
                'name_track' => 'What do you mean ?',
                'pf_track' => 'what_do_you_mean_justin_bieber.jpg',
                'audio_track' => 'Justin - Bieber-what-do-you-mean.mp3',
                'id_category' => 2,
                'id_artist' => 7,
                'id_album' => 12,
                'id_country' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 53,
                'name_track' => 'Love yourself',
                'pf_track' => 'love_yourself_justin.jpg',
                'audio_track' => 'Justin - Bieber-love-yourself.mp3',
                'id_category' => 2,
                'id_artist' => 7,
                'id_album' => 12,
                'id_country' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 54,
                'name_track' => 'Sorry',
                'pf_track' => 'sorry_justin.jpg',
                'audio_track' => 'Justin - Bieber-sorry.mp3',
                'id_category' => 2,
                'id_artist' => 7,
                'id_album' => 12,
                'id_country' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 55,
                'name_track' => 'That should be me',
                'pf_track' => 'that_should_be_me_justin.jpg',
                'audio_track' => 'Justin - Bieber-that-should-be-me.mp3',
                'id_category' => 2,
                'id_artist' => 7,
                'id_album' => 12,
                'id_country' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 56,
                'name_track' => 'Cuộc vui cô đơn',
                'pf_track' => 'cuoc_vui_co_don.jpg',
                'audio_track' => 'Cuoc-vui-co-don - Le-bao-binh.mp3',
                'id_category' => 3,
                'id_artist' => 8,
                'id_album' => 5,
                'id_country' => 3,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 57,
                'name_track' => 'Níu duyên',
                'pf_track' => 'niu_duyen.jpg',
                'audio_track' => 'Niu-duyen - Le-bao-binh.mp3',
                'id_category' => 3,
                'id_artist' => 8,
                'id_album' => 5,
                'id_country' => 3,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 58,
                'name_track' => 'Sai cách yêu',
                'pf_track' => 'sai_cach_yeu.jpg',
                'audio_track' => 'Sai-cach-yeu - Le-bao-binh.mp3',
                'id_category' => 3,
                'id_artist' => 8,
                'id_album' => 5,
                'id_country' => 3,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 59,
                'name_track' => 'Bước qua đời nhau',
                'pf_track' => 'buoc_qua_doi_nhau.jpg',
                'audio_track' => 'Buoc-qua-doi-nhau - Le-bao-binh.mp3',
                'id_category' => 3,
                'id_artist' => 8,
                'id_album' => 5,
                'id_country' => 3,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 60,
                'name_track' => 'Thích thì đến',
                'pf_track' => 'thich_thi_den_le_bao_binh.jpeg',
                'audio_track' => 'Thich-thi-den - Le-bao-binh.mp3',
                'id_category' => 3,
                'id_artist' => 8,
                'id_album' => 5,
                'id_country' => 3,
                'created_at' => Carbon::now()
            ],
            /*
            [
                'id' => 57,
                'name_track' => '',
                'pf_track' => '',
                'audio_track' => '',
                'id_category' => ,
                'id_artist' => ,
                'id_album' => ,
                'id_country' => ,
                'created_at' => Carbon::now()
            ],
            */
        ]);
    }
}
