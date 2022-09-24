<?php

namespace App\Http\Controllers\admin;

use App\Models\Artist;
use App\Models\Follower;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FollowerController extends Controller
{
    public function follower()
    {
        return view('admin.pages.subPages.follower.follower', $this->show());
    }
    public function show()
    {
        $artists = Artist::orderBy('name_artist')->get();
        $count = 1;

        return compact(
            'count',
            'artists'
        );
    }
    public function follower_search()
    {
        $search_text = $_GET['search'];
        $search_artist = Artist::where('name_artist', 'LIKE', '%' . $search_text . '%')->get();
        $count = 1;
        return view(
            'admin.pages.subPages.follower.search_artist',
            compact(
                'count',
                'search_artist',
                'search_text'
            )
        );
    }
}
