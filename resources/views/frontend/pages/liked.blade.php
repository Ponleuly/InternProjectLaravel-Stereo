<?php
  	use App\Models\Artist;
  	use App\Models\Track;
  	use App\Models\Album;
?>
@extends('index')
@section('dash_content')
<!--========== Liked content ===============-->
<div class="dash-content" id="liked">
    <div class="liked-wrapper">
        <div class="liked-header">
            <div class="liked-header-container">
                <div class="liked-icon">
                    <span class="material-icons-round">favorite</span>
                </div>
                <div class="liked-text">
                    <span>PLAYLIST</span>
                    <h1>Liked Songs</h1>
                    <span>{{Auth::user()->username}}</span>
                    <span> - {{$track_count}} Songs</span>
                </div>
            </div>
        </div>
        <div class="liked-dash">
            <div class="liked-dash-top">
                <span class="material-icons-round">play_arrow</span>
            </div>

            <div class="liked-dash-content">
                <div class="liked-content-container">
                    <div class="liked-container-row">
                        <div class="liked-row-header">
                            <div class="title">
                                <span>#</span>
                                <span>Title</span>
                            </div>
                            <div class="album">
                                <span>Albums</span>
                            </div>
                            <div class="date">
                                <span>Date added</span>
                            </div>
                            <div class="icon">
                                <span class="material-icons-round">access_time</span>
                            </div>
                        </div>

                        <div class="liked-row-content">
                            <table>
                                @foreach ($liked_tracks as $row)
                                    <tr>
                                        <td>
                                            <ul>
                                                <li>
                                                    <div class="td-1-1">
                                                        <span class="number">{{$count++}}</span>
                                                        <span class="material-icons-round play-up">play_arrow</span>
                                                    </div>                                         
                                                </li>
                                                <li>
                                                    <div class="img">
                                                        <img src="/storage/uploads/tracks/{{$row->liked_track->pf_track}}" alt="{{$row->liked_track->pf_track}}">
                                                    </div>
                                                </li> 
                                                <li class="text-overflow">
                                                    <div class="td-1-3">
                                                        <span class="song-title">{{$row->liked_track->name_track}}</span>
                                                            @php
                                                                $artist = Artist::where('id', $row->liked_track->id_artist)->first();
                                                            @endphp
                                                        <a href="{{url('/artists/artists_view/'.$row->liked_track->id_artist)}}">                                                        
                                                            <span class="artist-name">{{$artist->name_artist}}</span>
                                                        </a>
                                                    </div>   
                                                </li>
                                            </ul>
                                        </td>
                        
                                        <td>
                                            @php
                                                $album = Album::where('id', $row->liked_track->id_album)->first();
                                            @endphp
                                            <a href="{{url('/albums/albums_view/'.$row->liked_track->id_album)}}">                                         
                                                <span class="td-2">{{$album->name_album}}</span>
                                            </a>
                                        </td>

                                        <td>
                                            <div class="date-added">
                                                <span>{{$row->created_at->diffForHumans()}}</span>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="td-3">
                                                <span class="material-icons-round">favorite</span>
                                                    <audio id="audio" src="/storage/uploads/audios/{{$row->liked_track->audio_track}}"
                                                        preload="metadata" type="audio/mp3">
                                                    </audio> 
                                                <p id="duration" onclick="playVid()">3:45</p>
                                                <div class="remove-liked-link">
                                                    <a href="{{url('remove_liked/'.Auth::user()->id.'/'.$row->id_track)}}">
                                                        <span title="Remove from liked">Remove</span>
                                                    </a>
                                                </div>
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