<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\Category;
use App\Models\Country;
use App\Models\Album;
use App\Models\Track;
use Illuminate\Support\Facades\File;

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
        return view(
            'admin.pages.subPages.artist.add_artist',
            compact(
                'categories',
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
        if ($request->hasFile('pf_artist')) {
            $destination_path = 'public/uploads/artists';
            $image = $request->file('pf_artist');

            $image_name = $image->getClientOriginalName();
            $image->storeAs($destination_path, $image_name);

            $input['pf_artist'] = $image_name;
        }
        Artist::create($input);
        return redirect('/admin_stereo/artist')
            ->with('alert', 'Artist is added to list !');
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
    public function edit_artist($name_artist)
    {
        $artist = Artist::where('name_artist', $name_artist)->first();
        $img_artist = $artist->pf_artist;
        $idCategory = $artist->id_category; // Get id_category that selected when add artist
        $idCountry = $artist->id_country;   // Get id_country that selected when add artist
        $selected_cate = Category::where('id', $idCategory)->first(); // find id_category in Category
        $selected_coun = Country::where('id', $idCountry)->first(); // find id_country in Country

        $categories = Category::orderBY('id')->get();
        $countries = Country::orderBY('id')->get();

        return view(
            'admin.pages.subPages.artist.edit_artist',
            compact(
                'artist',
                'img_artist',
                'selected_cate',
                'selected_coun',
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
    public function update_artist(Request $request, $name_artist)
    {

        $update_artist = Artist::where('name_artist', $name_artist)->first();
        $img_artist = $update_artist->pf_artist;

        $update_artist->name_artist = $request->input('name_artist');
        $update_artist->id_category = $request->input('id_category');
        $update_artist->id_country = $request->input('id_country');

        if ($request->hasFile('pf_artist')) {
            $img_path = 'public/uploads/artists/' . $img_artist;
            if (File::exists($img_path)) {
                File::delete($img_path);
            }

            $destination_path = 'public/uploads/artists/';
            $image = $request->file('pf_artist');
            $image_name = $image->getClientOriginalName();
            $image->storeAs($destination_path, $image_name);

            $update_artist['pf_artist'] = $image_name;
        }

        $update_artist->update();

        return redirect('/admin_stereo/artist')
            ->with(
                'alert',
                'Artist ' . '"' . $name_artist . '"' . ' is updated successfully!'
            );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_artist($name_artist)
    {
        $delete_artist = artist::where('name_artist', $name_artist)->first();

        $delete_artist->delete();

        return redirect('/admin_stereo/artist')
            ->with(
                'alert',
                'Artist ' . '"' . $name_artist . '"' .
                    ' is deleted successfully !'
            );
    }

    public function search_artist()
    {
        $search_text = $_GET['search'];
        $search_artist = Artist::where('name_artist', 'LIKE', '%' . $search_text . '%')->get();
        $count = 1;
        return view(
            'admin.pages.subPages.artist.search_artist',
            compact(
                'count',
                'search_artist',
                'search_text'
            )
        );
    }
}
