<?php

namespace App\Http\Controllers\User;

use App\Models\Playlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CreateplaylistController extends Controller
{
    public function createplaylist()
    {
        // get id of user if loged in
        $id_user = Auth::user()->id;
        // get amount of playlists that user has been created
        $playlist_count = Playlist::where('id_user', $id_user)->count();
        // input craeteplaylist name with increasing number of playlist and id_user
        $input['name_playlist'] = 'Createplaylist #' . ++$playlist_count;
        $input['id_user'] = $id_user;
        Playlist::create($input);

        // back to createplaylist_view with the lastest playlist that user has been created
        $name_playlist = Playlist::latest()->first();
        $idPlaylist = $name_playlist->id;

        return redirect('createplaylist/' . $idPlaylist);
        /*
        return dd($playlist_count);*/
    }
    public function createplaylist_view($id_playlist)
    {
        $createplaylist = Playlist::where('id', $id_playlist)->first();
        /*
        $id_user = Auth::user()->id;
        $yourplaylists = Playlist::where('id_user', $id_user)->get();
        */
        return view(
            'frontend.pages.createplaylist',
            compact(
                'createplaylist',
            )
        );
    }
}
