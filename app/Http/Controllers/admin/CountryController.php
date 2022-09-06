<?php

namespace App\Http\Controllers\admin;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function country()
    {
        return view('admin.pages.country', $this->show());
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_country()
    {
        return view('admin.pages.subPages.country.add_country');
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
        if ($request->hasFile('pf_country')) {
            $destination_path = 'public/uploads/countries';
            $image = $request->file('pf_country');

            $image_name = $image->getClientOriginalName();
            $image->storeAs($destination_path, $image_name);

            $input['pf_country'] = $image_name;
        }
        Country::create($input);
        return redirect('/admin_stereo/country')
            ->with(
                'alert',
                'Country ' . '"' . $request->name_country . '"' .
                    ' is added to lists !'
            );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $countries = Country::orderByDesc('id')->get();
        $count = 1;
        return compact('countries', 'count');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_country($name_country)
    {
        $country = Country::where('name_country', $name_country)->first();
        $img_country = $country->pf_country;

        return view(
            'admin.pages.subPages.country.edit_country',
            compact(
                'country',
                'img_country'
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
    public function update_country(Request $request, $name_country)
    {
        $update_country = country::where('name_country', $name_country)->first();
        $img_country = $update_country->pf_country;

        $update_country->name_country = $request->input('name_country');
        if ($request->hasFile('pf_country')) {
            $img_path = 'public/uploads/countries/' . $img_country;
            if (File::exists($img_path)) {
                File::delete($img_path);
            }

            $destination_path = 'public/uploads/countries/';
            $image = $request->file('pf_country');
            $image_name = $image->getClientOriginalName();
            $image->storeAs($destination_path, $image_name);

            $update_country['pf_country'] = $image_name;
        }
        $update_country->update();

        return redirect('/admin_stereo/country')
            ->with(
                'alert',
                'Country ' . '"' . $name_country . '"' .
                    ' is updated successfully !'
            );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_country($name_country)
    {
        $delete_country = Country::where('name_country', $name_country)->first();
        $delete_country->delete();

        return redirect('/admin_stereo/country')
            ->with(
                'alert',
                'Country ' . '"' . $name_country . '"' .
                    ' is deleted successfully !'
            );
    }
    public function search_country()
    {
        $search_text = $_GET['search'];
        $search_country = Country::where('name_country', 'LIKE', '%' . $search_text . '%')->get();
        $count = 1;
        return view(
            'admin.pages.subPages.country.search_country',
            compact(
                'count',
                'search_country',
                'search_text'
            )
        );
    }
}
