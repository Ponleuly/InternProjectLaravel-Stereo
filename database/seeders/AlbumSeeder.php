<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_album')->insert([
            [
                'id' => 1,
                'name_album' => 'Divide',
                'pf_album' => 'divide_ed_sheeran.jpg',
                'id_artist' => 1,
                'id_category' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 2,
                'name_album' => 'Nine Track Mind',
                'pf_album' => 'Nine _Track_Mind_Chalie_puth.jpg',
                'id_artist' => 2,
                'id_category' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 3,
                'name_album' => 'Different Word',
                'pf_album' => 'different_word_alan_walker.jpg',
                'id_artist' => 3,
                'id_category' => 9,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 4,
                'name_album' => 'Purpose',
                'pf_album' => 'Purpose_justin_bieber.jpg',
                'id_artist' => 7,
                'id_category' => 9,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 5,
                'name_album' => 'Top Hits of Le Bao Binh',
                'pf_album' => 'top_hits.jpg',
                'id_artist' => 8,
                'id_category' => 3,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 6,
                'name_album' => 'The Best of Quan AP',
                'pf_album' => 'bong_hoa_dep_nhat_quan_ap.jpg',
                'id_artist' => 13,
                'id_category' => 3,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 7,
                'name_album' => 'The Best of Son Tung MTP',
                'pf_album' => 'the_best_of_Son_Tung_MTP_son_tung.jpg',
                'id_artist' => 14,
                'id_category' => 7,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 8,
                'name_album' => 'Den Chill',
                'pf_album' => 'den_chill.jpg',
                'id_artist' => 15,
                'id_category' => 10,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 9,
                'name_album' => 'Red',
                'pf_album' => 'TaylorSwift_Red.jpg',
                'id_artist' => 16,
                'id_category' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 10,
                'name_album' => 'Voicenotes',
                'pf_album' => 'Voicenotes_chalie_puth.jpg',
                'id_artist' => 2,
                'id_category' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 11,
                'name_album' => 'Multiply',
                'pf_album' => 'x_multiple_ed_sheeran.jpg',
                'id_artist' => 1,
                'id_category' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 12,
                'name_album' => 'My Words',
                'pf_album' => 'my_wrods_justin_bieber.jpg',
                'id_artist' => 7,
                'id_category' => 4,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 13,
                'name_album' => 'Collections',
                'pf_album' => 'michael.jpg',
                'id_artist' => 9,
                'id_category' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 14,
                'name_album' => 'Austin Mahone Collections',
                'pf_album' => 'All_I_Ever_Need.jpg',
                'id_artist' => 4,
                'id_category' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 15,
                'name_album' => 'The Best Collections of Jack',
                'pf_album' => 'collections_jack.jpg',
                'id_artist' => 6,
                'id_category' => 9,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 16,
                'name_album' => 'Collections Of Trinh Dinh Quang',
                'pf_album' => 'collections_trinh_dinh_quang.jpg',
                'id_artist' => 19,
                'id_category' => 3,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 17,
                'name_album' => 'My Way',
                'pf_album' => 'my_way_kmeng_khmer.jpg',
                'id_artist' => 17,
                'id_category' => 4,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 18,
                'name_album' => 'Skull',
                'pf_album' => 'skull_album_vanda.jpg',
                'id_artist' => 18,
                'id_category' => 10,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 19,
                'name_album' => 'Bun Phumi',
                'pf_album' => 'kmeng_khmer.jpg',
                'id_artist' => 17,
                'id_category' => 7,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 20,
                'name_album' => 'Love collections vannda',
                'pf_album' => 'chhir_te_vanda.jpg',
                'id_artist' => 18,
                'id_category' => 3,
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
