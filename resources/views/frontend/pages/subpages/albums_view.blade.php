<?php
  	use App\Models\Track;
  	use App\Models\Liked;
  	use App\Models\Mylibrary_Album;
?>
@extends('index')
@section('dash_content')

<!--========== Albums content ===============-->
<div class="dash-content">
    <div class="album-wrapper">
        <div class="album-header">
            <div class="album-header-container">
                @foreach ($albums_view as $row)
                    <div class="album-img">
                        <img src="/storage/uploads/albums/{{$row->pf_album}}" alt="{{$row->pf_album}}">
                    </div>
                    <div class="album-text">
                        <span class="album-name">{{$row->name_album}}</span>
                        @php
						    $track_count = Track::where('id_album', $row->id)->count(); 
                            
                            $id_user = Auth::user()->id;
                            $album_status = Mylibrary_Album::where('id_user', $id_user)->where('id_album', $row->id)->first();
                            if ($album_status) {
                                $liked = 1;
                                } else {
                                $liked = 0;
                            }
					    @endphp
                        <span class="album-song">Album - {{$track_count}} Songs</span>
                        <div class="album-text-icon">
                            <span class="material-icons-round icon-1">play_arrow</span>
                            <a href="{{url('liked_album/'.Auth::user()->id.'/'.$row->id)}}">
                                <!--Liked status for each album-->
                                @if ($liked == 1)
                                    <span class="material-icons-round icon-2" title="Remove from liked">favorite</span>
                                    @elseif($liked == 0)
                                        <span class="material-icons-round icon-2" title="Add to liked">favorite_border</span>
                                @endif
                            </a>
                            <span class="material-icons-round icon-3">more_horiz</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="album-dash">
            <div class="album-dash-content">
                <div class="album-content-container">
                    <div class="album-container-row">
                        <div class="album-row-header">
                            <div class="title">
                                <span>#</span>
                                <span>Title</span>
                            </div>
                            
                            <div class="icon">
                                <span class="material-icons-round">access_time</span>
                            </div>
                        </div>

                        <div class="row-content-table-album">
                            <table>
                                @foreach ($albums_track as $row)
                                    <tr>
                                        <td>
                                            <ul>
                                                <li>
                                                    <div class="num-order">
                                                        <span class="number">{{$count++}}</span>
                                                        <span class="material-icons-round play-up">play_arrow</span>
                                                    </div>                                         
                                                </li>
                                                <li class="text-overflow">
                                                    <div class="song-details">
                                                        <span class="song-title">{{$row->name_track}}</span>
                                                        <a href="{{url('/artists/artists_view/'.$row->id_artist)}}">
                                                            <span class="artist-name">{{$row->artist_track->name_artist}}</span>
                                                        </a>
                                                    </div>   
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="song-duration">
                                                <!--Liked status for each track-->
                                                @php
                                                    $id_user = Auth::user()->id;
                                                    $liked_status = Liked::where('id_user', $id_user)->where('id_track', $row->id)->first();
                                                    if ($liked_status) {
                                                        $liked = 1;
                                                    } else {
                                                        $liked = 0;
                                                    }
                                                @endphp
                                                <a href="{{url('add_liked/'.Auth::user()->id).'/'.$row->id}}">
                                                    <!--Liked status for each track-->
                                                    @if ($liked == 1)
                                                        <span class="material-icons-round" title="Remove from liked">favorite</span>
                                                        @elseif($liked == 0)
                                                            <span class="material-icons-round" title="Add to liked">favorite_border</span>
                                                    @endif
                                                </a>
                                                <p>3:45</p>
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
@endsection()