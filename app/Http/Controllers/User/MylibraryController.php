<?php

namespace App\Http\Controllers\User;

use App\Models\Liked;
use App\Models\Playlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Follower;
use App\Models\Mylibrary_Album;
use Illuminate\Support\Facades\Auth;

class MylibraryController extends Controller
{
    public function mylibrary_playlists()
    {
        $id_user = Auth::user()->id;
        $myplaylists = Playlist::where('id_user', $id_user)->get();
        $liked_tracks = Liked::orderByDesc('id')->where('id_user', $id_user)->get();
        $track_count = Liked::where('id_user', $id_user)->count();

        return view(
            'frontend.pages.mylibrary.mylibrary_playlists',
            compact(
                'myplaylists',
                'liked_tracks',
                'track_count'
            )
        );
    }
    public function mylibrary_artists()
    {
        $id_user = Auth::user()->id;
        $follower_artist = Follower::where('id_user', $id_user)->get();
        return view(
            'frontend.pages.mylibrary.mylibrary_artists',
            compact('follower_artist')
        );
    }

    public function mylibrary_albums()
    {
        $id_user = Auth::user()->id;
        $mylibrary_album = Mylibrary_Album::where('id_user', $id_user)->get();
        return view(
            'frontend.pages.mylibrary.mylibrary_albums',
            compact('mylibrary_album')
        );
    }

    public function follower_artist($id_user, $id_artist)
    {
        $follower_artist = Follower::where('id_user', $id_user)->where('id_artist', $id_artist)->first();
        if ($follower_artist) {
            $follower_artist->delete();
        } else {
            $follower_artist['id_user'] = $id_user;
            $follower_artist['id_artist'] = $id_artist;
            Follower::create($follower_artist);
        }
        return back();
    }
    public function liked_album($id_user, $id_album)
    {
        $mylibrary_album = Mylibrary_Album::where('id_user', $id_user)->where('id_album', $id_album)->first();
        if ($mylibrary_album) {
            $mylibrary_album->delete();
        } else {
            $mylibrary_album['id_user'] = $id_user;
            $mylibrary_album['id_album'] = $id_album;
            Mylibrary_Album::create($mylibrary_album);
        }
        return back();
    }
}
