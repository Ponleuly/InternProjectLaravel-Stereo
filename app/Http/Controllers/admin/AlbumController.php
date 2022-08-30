<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Category;
use App\Models\Country;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function album()
    {
        return view('admin.pages.album', $this->show());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_album()
    {
        $categories = Category::orderBy('id')->get();
        $artists = Artist::orderBy('id')->get();
        return view('admin.pages.subPages.add_album', compact('categories', 'artists'));
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

        if ($request->hasFile('pf_album')) {
            $destination_path = 'public/uploads/albums';
            $image = $request->file('pf_album');

            $image_name = $image->getClientOriginalName();
            $image->storeAs($destination_path, $image_name);

            $input['pf_album'] = $image_name;
        }

        Album::create($input);
        return redirect('/admin_stereo/album')->with('alert', 'Album is added to list !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $albums = Album::orderByDesc('id')->with('artist_album')->get();
        //with(artist_album) is a relationship between table_artist and table_album created in Model
        $count = 1;
        return compact('count', 'albums');
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
