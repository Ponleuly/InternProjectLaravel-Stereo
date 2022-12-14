<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Database\Seeders\AdminSeeder;
use Database\Seeders\AlbumSeeder;
use Database\Seeders\TrackSeeder;
use Database\Seeders\ArtistSeeder;
use Database\Seeders\CountrySeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\FakeUserSeeder;
use Database\Seeders\PlaylistSeeder;
use Database\Seeders\Track_PlaylistSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            CountrySeeder::class,
            CategorySeeder::class,
            ArtistSeeder::class,
            AlbumSeeder::class,
            TrackSeeder::class,
            UserSeeder::class,
            PlaylistSeeder::class,
            Track_PlaylistSeeder::class,
            FakeUserSeeder::class,
        ]);
    }
}
