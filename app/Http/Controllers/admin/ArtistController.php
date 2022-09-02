<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\Category;
use App\Models\Country;
use App\Models\Album;
use App\Models\Track;



class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function artist()
    {
        return view('admin.pages.artist', $this->show());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_artist()
    {
        $categories = Category::orderBy('id')->get();
        $countries = Country::orderBy('id')->get();
        return view('admin.pages.subPages.artist.add_artist', compact('categories', 'countries'));
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
        if ($request->hasFile('pf_artist')) {
            $destination_path = 'public/uploads/artists';
            $image = $request->file('pf_artist');

            $image_name = $image->getClientOriginalName();
            $image->storeAs($destination_path, $image_name);

            $input['pf_artist'] = $image_name;
        }

        Artist::create($input);
        return redirect('/admin_stereo/artist')->with('alert', 'Artist is added to list !');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $artists = Artist::orderByDesc('id')->get();
        $count = 1;

        return compact('count', 'artists');
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
