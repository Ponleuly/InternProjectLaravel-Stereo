<?php

namespace App\Http\Controllers\User;

use App\Models\Track;
use App\Models\Artist;
use App\Models\Playlist;
use Illuminate\Http\Request;
use App\Models\Playlist_Track;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CreateplaylistController extends Controller
{
    public function store_createplaylist()
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
        $track_playlist = Playlist_Track::where('id_playlist', $id_playlist)->get();
        $all_tracks = Track::orderBy('name_track')->paginate(20);
        $count = 1;
        $cnt = 1;

        return view(
            'frontend.pages.createplaylist.createplaylist',
            compact(
                'count',
                'cnt',
                'createplaylist',
                'track_count',
                'track_playlist',
                'all_tracks',
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
    public function delete_createplaylist($id_playlist)
    {
        $delete_createplaylist = Playlist::where('id', $id_playlist)->first();
        $delete_createplaylist->delete();
        return redirect('/mylibrary/my_playlists');
    }
    public function add_track($id_playlist, $id_track)
    {
        $add_track['id_playlist'] = $id_playlist;
        $add_track['id_track'] = $id_track;
        Playlist_Track::create($add_track);
        return redirect('createplaylist/' . $id_playlist);
    }
    public function remove_track($id_playlist, $id_track)
    {
        $remove_track = Playlist_Track::where('id_playlist', $id_playlist)->where('id_track', $id_track)->first();
        $remove_track->delete();
        return redirect('createplaylist/' . $id_playlist);
    }
    public function search_track(Request $request)
    {
    }
}
