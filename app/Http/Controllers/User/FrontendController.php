<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Album;
use App\Models\Liked;
use App\Models\Track;
use App\Models\Artist;
use App\Models\Country;
use App\Models\Category;
use App\Models\Follower;
use App\Models\Playlist;
use Illuminate\Http\Request;
use App\Models\Playlist_Track;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class FrontendController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function home()
    {
        $tracks = Track::orderBy('id')->paginate(14); //paginate(14) -> get 14 row of table
        //$tracks = Track::whereBetween('id', [10, 20])->paginate(5); // get track by id between id = 10 to 20 and get 5 track
        $artists = Artist::orderBy('id')->get();
        $albums = Album::orderBy('id')->get();
        $playlists = Playlist::orderBy('id')->where('id_user', '1')->get(); // get only playlist created by admin
        return view(
            'frontend.pages.home',
            compact(
                'tracks',
                'artists',
                'albums',
                'playlists'
            )
        );
    }

    public function category()
    {
        $countries = Country::orderBy('id')->get();
        $categories = Category::orderBy('id')->get();
        //$idCategory = $categories->value('id');
        //$tracks = Track::where('id_category', $idCategory)->get();
        return view(
            'frontend.pages.category',
            compact(
                'countries',
                'categories',
            )
        );
    }

    // *mylibrary Tab
    public function artists_view($id_artist)
    {
        $artists_view = Artist::where('id', $id_artist)->get();
        $idArtist = $artists_view->value('id'); // get id of name_artist to search in Track
        $artists_track = Track::where('id_artist', $idArtist)->get();
        $artists_album = Album::where('id_artist', $idArtist)->get();
        $follower_artist = Follower::where('id_artist', $id_artist)->count();
        $count = 1;
        //Following status for each user
        $id_user = Auth::user()->id;
        $follower_status = Follower::where('id_user', $id_user)->where('id_artist', $id_artist)->first();
        if ($follower_status) {
            $follow = 1;
        } else {
            $follow = 0;
        }

        return view(
            'frontend.pages.subpages.artists_view',
            compact(
                'count',
                'artists_view',
                'artists_track',
                'artists_album',
                'follower_artist',
                'follow'
            )
        );
    }
    public function albums_view($id_album)
    {
        $albums_view = Album::where('id', $id_album)->get();
        $idAlbum = $albums_view->value('id'); // get id of name_album to search in Track
        $albums_track = Track::where('id_album', $idAlbum)->get();
        $count = 1;

        return view(
            'frontend.pages.subpages.albums_view',
            compact(
                'count',
                'albums_view',
                'albums_track'
            )
        );
    }
    public function playlist_view($id_playlist)
    {
        $playlists_view = Playlist::where('id', $id_playlist)->get();
        $idPlaylist = $playlists_view->value('id');
        $playlists_track = Playlist_Track::where('id_playlist', $idPlaylist)->get();
        $track_count = Playlist_Track::where('id_playlist', $idPlaylist)->count();

        $count = 1;
        return view(
            'frontend.pages.subpages.playlist_view',
            compact(
                'count',
                'playlists_view',
                'playlists_track',
                'track_count'
            )
        );
    }
}
