<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Track;
use Illuminate\Http\Request;

class LikedtrackController extends Controller
{
    public function liked_track()
    {
        return view('admin.pages.subPages.liked.liked', $this->show());
    }
    public function show()
    {
        $tracks = Track::orderBy('name_track')->get();
        $count = 1;

        return compact(
            'count',
            'tracks'
        );
    }
    public function liked_search()
    {
        $search_text = $_GET['search'];
        $search_track = Track::where('name_track', 'LIKE', '%' . $search_text . '%')->get();
        $count = 1;
        return view(
            'admin.pages.subPages.liked.liked_search',
            compact(
                'count',
                'search_track',
                'search_text'
            )
        );
    }
}
