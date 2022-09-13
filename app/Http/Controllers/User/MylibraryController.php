<?php

namespace App\Http\Controllers\User;

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

        return view(
            'frontend.pages.mylibrary_playlists',
            compact('myplaylists')
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
