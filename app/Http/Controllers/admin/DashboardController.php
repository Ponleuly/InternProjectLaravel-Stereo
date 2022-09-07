<?php

namespace App\Http\Controllers\admin;

use App\Models\Admin;
use App\Models\Album;
use App\Models\Track;
use App\Models\Artist;
use App\Models\Country;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        if (Auth::check()) {
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
        return redirect('/admin_stereo');
    }
}
