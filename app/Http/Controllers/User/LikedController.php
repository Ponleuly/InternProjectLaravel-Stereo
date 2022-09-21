<?php

namespace App\Http\Controllers\User;

use App\Models\Liked;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LikedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function liked()
    {
        return view('frontend.pages.liked', $this->show());
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_liked($id_user, $id_track)
    {
        $add_liked = Liked::where('id_user', $id_user)->where('id_track', $id_track)->first();
        if ($add_liked) {
            $add_liked->delete();
        } else {
            $add_liked['id_user'] = $id_user;
            $add_liked['id_track'] = $id_track;
            Liked::create($add_liked);
        }
        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $id_user = Auth::user()->id;
        $liked_tracks = Liked::orderByDesc('id')->where('id_user', $id_user)->get();
        $track_count = Liked::where('id_user', $id_user)->count();
        $count = 1;

        return compact(
            'count',
            'liked_tracks',
            'track_count'
        );

        //return dd($path);
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
    public function remove_liked($id_user, $id_track)
    {
        $remove_liked = Liked::where('id_user', $id_user)->where('id_track', $id_track)->first();
        $remove_liked->delete();
        return redirect('/liked');
    }
}
