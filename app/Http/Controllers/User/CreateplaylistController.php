<?php

namespace App\Http\Controllers\User;

use App\Models\Playlist;
use Illuminate\Http\Request;
use App\Models\Playlist_Track;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CreateplaylistController extends Controller
{
    public function createplaylist()
    {
        // get id of user if loged in
        $id_user = Auth::user()->id;
        // get amount of playlists that user has been created
        $playlist_count = Playlist::where('id_user', $id_user)->count();
        // input craeteplaylist name with increasing number of playlist and id_user
        $input['name_playlist'] = 'My Playlist #' . ++$playlist_count;
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
        $track_count = Playlist_Track::where('id_playlist', $id_playlist)->count();

        return view(
            'frontend.pages.createplaylist.createplaylist',
            compact(
                'createplaylist',
                'track_count'
            )
        );
    }
    public function edit_createplaylist(Request $request, $id_playlist)
    {
        $update_playlist = Playlist::where('id', $id_playlist)->first();
        $update_playlist->name_playlist = $request->input('name_playlist');

        $img_playlist = $update_playlist->pf_playlist;
        if ($request->hasFile('pf_playlist')) {
            $img_path = 'public/uploads/playlists/' . $img_playlist;
            if (File::exists($img_path)) {
                File::delete($img_path);
            }

            $destination_path = 'public/uploads/playlists/';
            $image = $request->file('pf_playlist');
            $image_name = $image->getClientOriginalName();
            $image->storeAs($destination_path, $image_name);

            $update_playlist->pf_playlist = $image_name;
        }
        $update_playlist->update();
        return redirect('createplaylist/' . $id_playlist);
    }
}
