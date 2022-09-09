<?php

namespace App\Http\Controllers\Admin;

use App\Models\Track;
use App\Models\Playlist;
use Illuminate\Http\Request;
use App\Models\Playlist_Track;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class PlaylistController extends Controller
{
    public function playlist()
    {
        return view('admin.pages.playlist', $this->show());
    }
    public function add_playlist()
    {
        $tracks = Track::orderBy('id')->get();
        return view(
            'admin.pages.subPages.playlist.add_playlist',
            compact(
                'tracks',
            )
        );
    }

    public function show()
    {
        $playlists = Playlist::orderByDesc('id')->get();
        $count = 1;

        return compact('count', 'playlists');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name_playlist' => 'required',
            'pf_playlist' => 'nullable',
            'id_track[]' => 'nullable',

        ]);
        $input = $request->all();
        $user_role = Auth::user()->id;
        $input['id_user'] = $user_role;

        if ($request->hasFile('pf_playlist')) {
            $destination_path = 'public/uploads/playlists';
            $image = $request->file('pf_playlist');

            $image_name = $image->getClientOriginalName();
            $image->storeAs($destination_path, $image_name);

            $input['pf_playlist'] = $image_name;
        }
        //Storing data for Playlist insert-> id, name, img, user_role
        Playlist::create($input);

        //Storing data from playlist and track to other table
        $idTrack = $request->id_track; // Get from request
        $namePlaylist = Playlist::where('name_playlist', $request->name_playlist)->latest()->first();
        $idPlaylist = $namePlaylist->id;
        if ($idTrack != null) {
            for ($i = 0; $i < count($idTrack); $i++) {
                $save['id_playlist'] = $idPlaylist;
                $save['id_track'] = $idTrack[$i];
                Playlist_Track::create($save);
            }
        }
        return redirect('/admin_stereo/playlist')
            ->with('alert', 'Playlist is added to list !');
        /*
        return dd($idTrack);
        */
    }

    public function edit_playlist($id_playlist)
    {
        $playlist = Playlist::where('id', $id_playlist)->first();
        $img_playlist = $playlist->pf_playlist;
        $idPlaylist = $playlist->id; // Get id_category that selected when add playlist
        $selected_track = Playlist_Track::where('id_playlist', $idPlaylist)->get(); // find id_category in Category

        $tracks = Track::orderBY('id')->get();
        $count = 1;
        return view(
            'admin.pages.subPages.playlist.edit_playlist',
            compact(
                'count',
                'playlist',
                'img_playlist',
                'selected_track',
                'tracks',
            )
        );
    }

    public function update_playlist(Request $request, $id_playlist)
    {
        $update_playlist = Playlist::where('id', $id_playlist)->first();
        $img_playlist = $update_playlist->pf_playlist;
        $update_playlist->name_playlist = $request->input('name_playlist');

        if ($request->hasFile('pf_playlist')) {
            $img_path = 'public/uploads/playlists/' . $img_playlist;
            if (File::exists($img_path)) {
                File::delete($img_path);
            }
            $destination_path = 'public/uploads/playlists/';
            $image = $request->file('pf_playlist');
            $image_name = $image->getClientOriginalName();
            $image->storeAs($destination_path, $image_name);
            $update_playlist['pf_playlist'] = $image_name;
        }
        $update_playlist->update();

        //Storing data from playlist and track to other table
        $idTrack = $request->id_track; // Get from request
        $id_playlist = Playlist::where('id', $id_playlist)->first();
        $idPlaylist = $id_playlist->id;
        if ($idTrack != null) {
            for ($i = 0; $i < count($idTrack); $i++) {
                $save['id_playlist'] = $idPlaylist;
                $save['id_track'] = $idTrack[$i];
                Playlist_Track::create($save);
            }
        }

        return redirect('/admin_stereo/playlist')
            ->with(
                'alert',
                'Playlist ' . '"' .
                    $update_playlist->name_playlist . '"' . ' is updated successfully!'
            );
    }

    public function remove_track($id_playlist, $id_track)
    {
        // Get row that contain id_playlist and id_track to delete 
        $remove_track = Playlist_Track::where('id_playlist', $id_playlist)->where('id_track', $id_track)->first();
        $remove_track->delete();

        //  Get name_play that is editing to return back to route
        $playlist = Playlist::where('id', $id_playlist)->first();
        $idPlaylist = $playlist->id;
        return redirect('/admin_stereo/edit_playlist/' . $idPlaylist);
    }

    public function delete_playlist($id_playlist)
    {
        $delete_playlist = Playlist::where('id', $id_playlist)->first();

        $delete_playlist->delete();
        return redirect('/admin_stereo/playlist')
            ->with(
                'alert',
                'Playlist ' . '"' . $delete_playlist->name_playlist . '"' .
                    ' is deleted successfully !'
            );
    }
    public function search_playlist()
    {
        $search_text = $_GET['search'];
        $search_playlist = Playlist::where('name_playlist', 'LIKE', '%' . $search_text . '%')->get();
        $count = 1;
        return view(
            'admin.pages.subPages.playlist.search_playlist',
            compact(
                'count',
                'search_playlist',
                'search_text'
            )
        );
    }
}
