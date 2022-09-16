<?php

namespace App\Http\Controllers\User;

use App\Models\Liked;
use App\Models\Playlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
            'frontend.pages.mylibrary_playlists',
            compact(
                'myplaylists',
                'liked_tracks',
                'track_count'
            )
        );
    }
    public function mylibrary_artists()
    {
        return view('frontend.pages.mylibrary_artists');
    }
    public function mylibrary_albums()
    {
        return view('frontend.pages.mylibrary_albums');
    }
}
