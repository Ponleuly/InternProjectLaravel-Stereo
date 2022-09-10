<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Track;
use App\Models\Artist;
use App\Models\Country;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function home()
    {
        $tracks = Track::orderBy('id')->paginate(14); //paginate(14) -> get 14 row of table
        $artists = Artist::orderBy('id')->get();
        $albums = Album::orderBy('id')->get();
        return view(
            'frontend.pages.home',
            compact(
                'tracks',
                'artists',
                'albums'
            )
        );
    }
    public function mylibrary_platlists()
    {
        return view('frontend.pages.mylibrary_playlists');
    }
    public function mylibrary_artists()
    {
        return view('frontend.pages.mylibrary_artists');
    }
    public function mylibrary_albums()
    {
        return view('frontend.pages.mylibrary_albums');
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
    public function liked()
    {
        return view('frontend.pages.liked');
    }
    public function createplaylist()
    {
        return view('frontend.pages.createplaylist');
    }

    // *mylibrary Tab
    public function artists_view($name_artist)
    {
        $artists_view = Artist::where('name_artist', $name_artist)->get();
        $idArtist = $artists_view->value('id'); // get id of name_artist to search in Track
        $artists_track = Track::where('id_artist', $idArtist)->get();
        $artists_album = Album::where('id_artist', $idArtist)->get();
        $count = 1;
        return view(
            'frontend.pages.subpages.artists_view',
            compact(
                'count',
                'artists_view',
                'artists_track',
                'artists_album'
            )
        );
    }
    public function albums_view($name_album)
    {
        $albums_view = Album::where('name_album', $name_album)->get();
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
}
