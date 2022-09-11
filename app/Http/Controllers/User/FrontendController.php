<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Album;
use App\Models\Track;
use App\Models\Artist;
use App\Models\Country;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
    public function user_profile()
    {
        return view('frontend.pages.user.profile');
    }
    public function edit_profile($id_user)
    {
        $user = User::where('id', $id_user)->first();

        return view(
            'frontend.pages.user.update_profile',
            compact('user')
        );
    }
    public function update_profile(Request $request, $id_user)
    {
        $update_user = User::where('id', $id_user)->first();
        $img_user = $update_user->avatar;

        $update_user->username = $request->input('username');
        $update_user->email = $request->input('email');
        $update_user->gender = $request->input('gender');

        if ($request->hasFile('avatar')) {
            $img_path = 'public/uploads/avatars/' . $img_user;
            if (File::exists($img_path)) {
                File::delete($img_path);
            }

            $destination_path = 'public/uploads/avatars/';
            $image = $request->file('avatar');
            $image_name = $image->getClientOriginalName();
            $image->storeAs($destination_path, $image_name);

            $update_user['avatar'] = $image_name;
        }
        $update_user->update();
        return redirect('/profile');
    }
}
