<?php

namespace App\Http\Controllers\admin;

use App\Models\Album;
use App\Models\Artist;

use App\Models\Country;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

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
        return view(
            'admin.pages.subPages.album.add_album',
            compact(
                'categories',
                'artists'
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

        if ($request->hasFile('pf_album')) {
            $destination_path = 'public/uploads/albums';
            $image = $request->file('pf_album');

            $image_name = $image->getClientOriginalName();
            $image->storeAs($destination_path, $image_name);

            $input['pf_album'] = $image_name;
        }

        Album::create($input);
        return redirect('/admin_stereo/album')
            ->with('alert', 'Album is added to list !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //with(artist_album) is a relationship between table_artist and table_album created in Model
        //$albums = Album::orderByDesc('id')->with('artist_album')->get();
        //in short  
        $albums = Album::orderByDesc('id')->get();
        $count = 1;
        return compact('count', 'albums');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_album($id_album)
    {
        $album = Album::where('id', $id_album)->first();
        $img_album = $album->pf_album;
        $idCategory = $album->id_category; // Get id_category that selected when add album
        $idArtist = $album->id_artist;   // Get id_country that selected when add album
        $selected_cate = Category::where('id', $idCategory)->first(); // find id_category in Category
        $selected_art = Artist::where('id', $idArtist)->first(); // find id_country in Country

        $categories = Category::orderBY('id')->get();
        $artists = Artist::orderBY('id')->get();

        return view(
            'admin.pages.subPages.album.edit_album',
            compact(
                'album',
                'img_album',
                'selected_cate',
                'selected_art',
                'categories',
                'artists'
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
    public function update_album(Request $request, $id_album)
    {

        $update_album = Album::where('id', $id_album)->first();
        $img_album = $update_album->pf_album;

        $update_album->name_album = $request->input('name_album');
        $update_album->id_category = $request->input('id_category');
        $update_album->id_artist = $request->input('id_artist');

        if ($request->hasFile('pf_album')) {
            $img_path = 'public/uploads/albums/' . $img_album;
            if (File::exists($img_path)) {
                File::delete($img_path);
            }

            $destination_path = 'public/uploads/albums/';
            $image = $request->file('pf_album');
            $image_name = $image->getClientOriginalName();
            $image->storeAs($destination_path, $image_name);

            $update_album['pf_album'] = $image_name;
        }

        $update_album->update();

        return redirect('/admin_stereo/album')
            ->with(
                'alert',
                'Album ' . '"' . $update_album->name_album . '"' . ' is updated successfully!'
            );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_album($id_album)
    {
        $delete_album = Album::where('id', $id_album)->first();

        $delete_album->delete();

        return redirect('/admin_stereo/album')
            ->with(
                'alert',
                'Album ' . '"' . $delete_album->name_album . '"' .
                    ' is deleted successfully !'
            );
    }
    public function search_album()
    {
        $search_text = $_GET['search'];
        $search_album = Album::where('name_album', 'LIKE', '%' . $search_text . '%')->get();
        $count = 1;
        return view(
            'admin.pages.subPages.album.search_album',
            compact(
                'count',
                'search_album',
                'search_text'
            )
        );
    }
}
