<?php

namespace App\Http\Controllers\User;

use App\Models\Album;
use App\Models\Liked;
use App\Models\Track;
use App\Models\Artist;
use App\Models\Playlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        if ($request->ajax()) {
            $output1 = '';
            $output2 = '';
            $output3 = '';
            $output4 = '';

            $search_tracks = Track::where('name_track', 'LIKE', '%' . $request->search . '%')->get();
            $search_artists = Artist::where('name_artist', 'LIKE', '%' . $request->search . '%')->get();
            $search_albums = Album::where('name_album', 'LIKE', '%' . $request->search . '%')->get();
            $search_playlists = Playlist::where('name_playlist', 'LIKE', '%' . $request->search . '%')
                ->where('id_user', 1)->get();
            $i = 1;
            foreach ($search_tracks as $row) {
                /*
                $output1 .=
                    '<div class="box-content">
                        <div class="box-single">
                            <div class="img-popup-container">
                                <a href="#">
                                    <img src="/storage/uploads/tracks/' . $row->pf_track . '" alt="">
                                </a>
                                <a href="">
                                    <div class="play-button-pop-up">
                                        <span class="material-icons-round">play_arrow</span>
                                    </div>
                                </a>
                            </div>
                            <a href="">
                                <span class="song-title">' . $row->name_track . '</span>
                            </a>
                            <a href="/artists/artists_view/' . $row->id_artist . '">
                                <span class="singer-name">' . $row->artist_track->name_artist . '</span>
                            </a>
                        </div>
                    </div>';
                */
                $id_user = Auth::user()->id;
                $liked_status = Liked::where('id_user', $id_user)->where('id_track', $row->id)->first();
                if ($liked_status) {
                    $liked = 1;
                } else {
                    $liked = 0;
                }
                $output1 .=
                    '<tr>
                    <td>
                        <ul>
                            <li>
                                <div class="num-order">
                                    <span class="number">' . $i++ . '</span>
                                    <span class="material-icons-round play-up">play_arrow</span>
                                </div>                                         
                            </li>
                            <li>
                                <div class="img">
                                    <img src="/storage/uploads/tracks/' . $row->pf_track . '" alt="">
                                </div>                                          
                            </li>
                            <li class="text-overflow">
                                <div class="song-details">
                                    <span class="song-title">' . $row->name_track . '</span>                                       
                                    <a href="/artists/artists_view/' . $row->id_artist . '">
                                        <span class="artist-name">
                                            ' . $row->artist_track->name_artist . '
                                        </span>
                                    </a>
                                </div>   
                            </li>
                        </ul>
                    </td>

                    <td> 
                        <div class="song-album">
                            <a href="/albums/albums_view/' . $row->id_album . '">
                                <span>' . $row->album_track->name_album . '</span>
                            </a>
                        </div>
                    </td>

                    <td>
                        <div class="song-duration">
                            <!--Liked status for each track-->
                            <div class="liked-icon-link">
                                <a href="add_liked/' . $id_user . '/' . $row->id . '">
                                    <span class="material-icons-round" title="Add to liked">favorite_border</span>
                                </a>
                            </div>
                            <audio id="audio" src="/storage/uploads/audios/' . $row->audio_track . '"
                                preload="metadata" type="audio/mp3">
                            </audio>
                            <p id="duration">3:45</p>
                            <div class="more-option">
                                <span class="material-icons-round">more_horiz</span>
                            </div>                                                     
                        </div>
                    </td>
                </tr>';
            }
            foreach ($search_artists as $row) {
                $output2 .=
                    '<div class="box-content">
                        <div class="box-single">
                            <div class="img-popup-container">
                                <a href="/artists/artists_view/' . $row->id . '">
                                    <img src="/storage/uploads/artists/' . $row->pf_artist . '" alt="" class="img-circle">
                                </a>
                                <a href="">
                                    <div class="play-button-pop-up">
                                        <span class="material-icons-round">play_arrow</span>
                                    </div>
                                </a>
                            </div>
                            <a href="/artists/artists_view/' . $row->id . '">
                                <span class="song-title">' . $row->name_artist . '</span>
                            </a>
                            <a href="/artists/artists_view/' . $row->id . '">
                                <span class="singer-name">Artist</span>
                            </a>
                        </div>
                    </div>';
            }
            foreach ($search_albums as $row) {
                $output3 .=
                    '<div class="box-content">
                        <div class="box-single">
                            <div class="img-popup-container">
                                <a href="/albums/albums_view/' . $row->id . '">
                                    <img src="/storage/uploads/albums/' . $row->pf_album . '" alt="">
                                </a>
                                <a href="">
                                    <div class="play-button-pop-up">
                                        <span class="material-icons-round">play_arrow</span>
                                    </div>
                                </a>
                            </div>
                            <a href="/albums/albums_view/' . $row->id . '">
                                <span class="song-title">' . $row->name_album . '</span>
                            </a>
                            <a href="/albums/albums_view/' . $row->id_artist . '">
                                <span class="singer-name">' . $row->artist_album->name_artist . '</span>
                            </a>
                        </div>
                    </div>';
            }
            foreach ($search_playlists as $row) {
                $output4 .=
                    '<div class="box-content">
                        <div class="box-single">
                            <div class="img-popup-container">
                                <a href="/playlists/playlist_view/' . $row->id . '">
                                    <img src="/storage/uploads/playlists/' . $row->pf_playlist . '" alt="">
                                </a>
                                <a href="">
                                    <div class="play-button-pop-up">
                                        <span class="material-icons-round">play_arrow</span>
                                    </div>
                                </a>
                            </div>
                            <a href="/playlists/playlist_view/' . $row->id . '">
                                <span class="song-title">' . $row->name_playlist . '</span>
                            </a>
                            <a href="/playlists/playlist_view/' . $row->id . '">
                                <span class="singer-name">playlist</span>
                            </a>
                        </div>
                    </div>';
            }
            //return response($output1); // responed for Ajax search route
            $respone = [
                'tracks' => $output1,
                'artists' => $output2,
                'albums' => $output3,
                'playlists' => $output4,
            ];
            return response()->json($respone);
        } else {
            //if there is no Ajax request will display all_tracks selected to view
            $tracks = Track::orderBy('name_track')->paginate(14);
            $artists = Artist::orderBy('name_artist')->get();
            $albums = Album::orderBy('name_album')->get();
            $playlists = Playlist::orderBy('name_playlist')->where('id_user', 1)->get();
            $count = 1;
        }
        return view('frontend.pages.search', compact(
            'tracks',
            'artists',
            'albums',
            'playlists',
            'count'
        ));
    }
}
