<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Models\Admin;
use App\Models\Album;
use App\Models\Track;
use App\Models\Artist;
use App\Models\Country;
use App\Models\Category;
use App\Models\Playlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Follower;
use App\Models\Liked;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        if (Auth::check()) {
            $artists = Artist::all()->count();
            $albums = Album::all()->count();
            $tracks = Track::all()->count();
            $categories = Category::all()->count();
            $countries = Country::all()->count();
            $playlists = Playlist::all()->count();
            $users = User::where('role', '0')->count();
            //The most follower asrtist
            //$following_count = Follower::groupBy('id_artist')->distinct()->count();
            //$most_following = Follower::distinct()->first();
            //$following_artist = Artist::where('id', $most_following['id_artist'])->first();
            //$name_artist = $following_artist['name_artist'];
            $most_following = Follower::orderBy('id')->get();
            //for ($i = 0; $i < count($most_following); $i++) {
            foreach ($most_following as $row) {
                $idArtist = $row->id_artist;
                $following_count = Follower::where('id_artist', $idArtist)->count();
            }
            //}
            $artist = Artist::where('id', $idArtist)->first();
            $name_artist = $artist['name_artist'];
            //The most liked song
            //$liked_count = Liked::groupBy('id_track')->distinct()->count();
            $most_liked = Liked::orderBy('id')->get();
            for ($j = 0; $j < count($most_liked); $j++) {
                foreach ($most_liked as $row) {
                    $idTrack = $row->id_track;
                    $liked_count = Liked::where('id_track', $idTrack)->count();
                }
            }
            $liked_track = Track::where('id', $idTrack)->first();
            $name_track = $liked_track['name_track'];
            return view(
                'admin.pages.dashboard',
                compact(
                    'artists',
                    'albums',
                    'tracks',
                    'categories',
                    'countries',
                    'playlists',
                    'users',
                    'following_count',
                    'name_artist',
                    'liked_count',
                    'name_track'
                )
            );
            //return dd($name_track);
        }
        return redirect('/admin_stereo');
    }
}
