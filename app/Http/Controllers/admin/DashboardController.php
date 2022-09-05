<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Track;
use App\Models\Album;
use App\Models\Artist;
use App\Models\Category;
use App\Models\Country;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $artists = Artist::all()->count();
        $albums = Album::all()->count();
        $tracks = Track::all()->count();
        $categories = Category::all()->count();
        $countries = Country::all()->count();

        return view(
            'admin.pages.dashboard',
            compact(
                'artists',
                'albums',
                'tracks',
                'categories',
                'countries'
            )
        );
    }
}
