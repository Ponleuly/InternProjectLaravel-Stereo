<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Track;
use App\Models\Album;
use App\Models\Artist;
use App\Models\Category;
use App\Models\Country;

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
            compact('categories', 'artists', 'albums', 'countries')
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
        return redirect('/admin_stereo/track')->with('alert', 'Track is added to list !');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
