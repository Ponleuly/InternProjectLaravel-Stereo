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
}
