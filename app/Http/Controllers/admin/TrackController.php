<?php

namespace App\Http\Controllers\admin;

use App\Models\Album;
use App\Models\Track;
use App\Models\Artist;
use App\Models\Country;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function track()
    {
        return view('admin.pages.track', $this->show());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_track()
    {
        $categories = Category::orderBy('id')->get();
        $artists = Artist::orderBy('id')->get();
        $albums = Album::orderBy('id')->get();
        $countries = Country::orderBy('id')->get();

        return view(
            'admin.pages.subPages.track.add_track',
            compact(
                'categories',
                'artists',
                'albums',
                'countries'
            )
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        if ($request->hasFile('pf_track')) {
            $destination_path = 'public/uploads/tracks';
            $image = $request->file('pf_track');

            $image_name = $image->getClientOriginalName();
            $image->storeAs($destination_path, $image_name);

            $input['pf_track'] = $image_name;
        }
        if ($request->hasFile('audio_track')) {
            $destination_path = 'public/uploads/audios';
            $audio = $request->file('audio_track');

            $audio_name = $audio->getClientOriginalName();
            $audio->storeAs($destination_path, $audio_name);

            $input['audio_track'] = $audio_name;
        }

        Track::create($input);
        return redirect('/admin_stereo/track')
            ->with('alert', 'Track is added to list !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // Use with('artist_track', 'album_track') to get relation between tables in Models
        //$tracks = track::orderByDesc('id')->with('artist_track', 'album_track')->get();
        // Can use like albow or below
        $tracks = track::orderByDesc('id')->get();
        $count = 1;

        return compact('count', 'tracks');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_track($id_track)
    {
        $track = Track::where('id', $id_track)->first();

        $idArtist = $track->id_artist;
        $idAlbum = $track->id_album;
        $idCategory = $track->id_category; // Get id_category that selected when add track
        $idCountry = $track->id_country;   // Get id_country that selected when add track
        $img_track = $track->pf_track;
        $audio_track = $track->audio_track;

        $selected_art = Artist::where('id', $idArtist)->first();
        $selected_alb = Album::where('id', $idAlbum)->first();
        $selected_cate = Category::where('id', $idCategory)->first(); // find id_category in Category
        $selected_coun = Country::where('id', $idCountry)->first(); // find id_country in Country

        $artists = Artist::orderBY('id')->get();
        $albums = Album::orderBY('id')->get();
        $categories = Category::orderBY('id')->get();
        $countries = Country::orderBY('id')->get();

        return view(
            'admin.pages.subPages.track.edit_track',
            compact(
                'track',
                'selected_art',
                'selected_alb',
                'selected_cate',
                'selected_coun',
                'img_track',
                'audio_track',
                'artists',
                'albums',
                'categories',
                'countries'
            )
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_track(Request $request, $id_track)
    {
        $update_track = Track::where('id', $id_track)->first();
        $update_track->name_track = $request->input('name_track');
        $update_track->id_artist = $request->input('id_artist');
        $update_track->id_album = $request->input('id_album');
        $update_track->id_category = $request->input('id_category');
        $update_track->id_country = $request->input('id_country');

        $img_track = $update_track->pf_track;
        $audio_track = $update_track->audio_track;
        if ($request->hasFile('pf_track')) {
            $img_path = 'public/uploads/tracks/' . $img_track;
            if (File::exists($img_path)) {
                File::delete($img_path);
            }

            $destination_path = 'public/uploads/tracks/';
            $image = $request->file('pf_track');
            $image_name = $image->getClientOriginalName();
            $image->storeAs($destination_path, $image_name);

            $update_track['pf_track'] = $image_name;
        }
        if ($request->hasFile('audio_track')) {
            $audio_path = 'public/uploads/audios/' . $audio_track;
            if (File::exists(public_path($audio_path))) {
                File::delete(public_path($audio_path));
            }

            $destination_path = 'public/uploads/audios';
            $audio = $request->file('audio_track');
            $audio_name = $audio->getClientOriginalName();
            $audio->storeAs($destination_path, $audio_name);

            $update_track['audio_track'] = $audio_name;
        }
        $update_track->update();

        return redirect('/admin_stereo/track')
            ->with(
                'alert',
                'Track ' . '"' . $update_track->name_track . '"' . ' is updated successfully!'
            );
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_track($id_track)
    {
        $delete_track = Track::where('id', $id_track)->first();
        $delete_track->delete();

        return redirect('/admin_stereo/track')
            ->with(
                'alert',
                'Track ' . '"' . $delete_track->name_track . '"' .
                    ' is deleted successfully !'
            );
    }

    public function search_track()
    {
        $search_text = $_GET['search'];
        $search_track = Track::where('name_track', 'LIKE', '%' . $search_text . '%')->get();
        $count = 1;
        return view(
            'admin.pages.subPages.track.search_track',
            compact(
                'count',
                'search_track',
                'search_text'
            )
        );
    }
}
