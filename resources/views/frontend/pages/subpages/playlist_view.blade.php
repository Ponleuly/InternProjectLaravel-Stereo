<?php
  	use App\Models\Playlist_Track;
  	use App\Models\Artist;
  	use App\Models\Track;
  	use App\Models\Liked;
?>
@extends('index')
@section('dash_content')
<!--========== playlists content ===============-->
<div class="dash-content">
    <div class="playlist-wrapper">
        <div class="playlist-header">
            <div class="playlist-header-container">
                @foreach ($playlists_view as $row)
                    <div class="playlist-img">
                        <img src="/storage/uploads/playlists/{{$row->pf_playlist}}" alt="{{$row->pf_playlist}}">
                    </div>
                    <div class="playlist-text">
                        <span class="playlist-name">{{$row->name_playlist}}</span>
                        @php
                        /*
						    $track_count = Track::where('id_playlist', $row->id)->count(); 
                            */
					    @endphp
                        <span class="playlist-song">Playlist - {{$track_count}} Songs</span>
                        <div class="playlist-text-icon">
                            <span class="material-icons-round icon-1">play_arrow</span>
                            <span class="material-icons-round icon-2">favorite_border</span>
                            <span class="material-icons-round icon-3">more_horiz</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="playlist-dash">
            <div class="playlist-dash-content">
                <div class="playlist-content-container">
                    <div class="playlist-container-row">
                        <div class="playlist-row-header">
                            <div class="title">
                                <span>#</span>
                                <span>Title</span>
                            </div>
                            <div class="album">
                                <span>Album</span>
                            </div>
                            <div class="icon">
                                <span class="material-icons-round">access_time</span>
                            </div>
                        </div>

                        <div class="row-content-table-playlist">
                            <table>
                                @foreach ($playlists_track as $row)
                                    <tr>
                                        <td>
                                            <ul>
                                                <li>
                                                    <div class="num-order">
                                                        <span class="number">{{$count++}}</span>
                                                        <span class="material-icons-round play-up">play_arrow</span>
                                                    </div>                                         
                                                </li>
                                                <li>
                                                    <div class="img">
                                                        <img src="/storage/uploads/tracks/{{$row->playlist_track->pf_track}}" alt="">
                                                    </div>                                          
                                                </li>
                                                <li class="text-overflow">
                                                    <div class="song-details">
                                                        <span class="song-title">{{$row->playlist_track->name_track}}</span>
                                                        @php
                                                            $artist_track = Track::where('id', $row->id_track)->first();
                                                        @endphp
                                                        <a href="{{url('/artists/artists_view/'.$artist_track->id_artist)}}">
                                                            <span class="artist-name">
                                                                {{$artist_track->artist_track->name_artist}}
                                                            </span>
                                                        </a>
                                                    </div>   
                                                </li>
                                            </ul>
                                        </td>

                                        <td> 
                                            <div class="song-album">
                                                <a href="{{url('/albums/albums_view/'.$artist_track->id_album)}}">
                                                    <span>{{$artist_track->album_track->name_album}}</span>
                                                </a>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="song-duration">
                                                <!--Liked status for each track-->
                                                @php
                                                    $id_user = Auth::user()->id;
                                                    $liked_status = Liked::where('id_user', $id_user)->where('id_track', $row->id_track)->first();
                                                    if ($liked_status) {
                                                        $liked = 1;
                                                    } else {
                                                        $liked = 0;
                                                    }
                                                @endphp
                                                <a href="{{url('add_liked/'.Auth::user()->id.'/'.$row->id_track)}}">
                                                    <!--Liked status for each track-->
                                                    @if ($liked == 1)
                                                        <span class="material-icons-round" title="Remove from liked">favorite</span>
                                                        @elseif($liked == 0)
                                                            <span class="material-icons-round" title="Add to liked">favorite_border</span>
                                                    @endif
                                                </a>
                                                    <audio id="audio" src="/storage/uploads/audios/{{$row->playlist_track->audio_track}}"
                                                        preload="metadata" type="audio/mp3">
                                                    </audio>
                                                <p id="duration">3:45</p>
                                                <span class="material-icons-round more-option">more_horiz</span>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </div>
</div>
<script src="{{url('frontend/js/audioDuration.js')}}"></script>
@endsection()