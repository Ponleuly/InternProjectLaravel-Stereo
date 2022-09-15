@extends('index')
@section('dash_content')

<div class="dash-content">
    <div class="artist-wrapper">
        @foreach ($artists_view as $row)
        <!--========= Header =================-->
        <div class="artist-header"
                style="background-image: url('/storage/uploads/artists/{{$row->pf_artist}}');">
            <div class="artist-header-container">    
                <span class="artist-name">{{$row->name_artist}}</span>
                <span class="artist-follower">1,120,222 follower</span>        
            </div>
        </div>
        @endforeach

        <!--========= Dashboard ========-->       
        <div class="artist-dash">
         <!--========= top of dashboard ========-->
         <div class="artist-dash-top">
            <div class="dash-top-1">
                <span class="material-icons-round">play_arrow</span>
            </div>
            <div class="dash-top-2">
                <span>FOLLOW</span>
            </div>
            <div class="dash-top-3">
                <span class="material-icons-round">more_horiz</span>
            </div>    
        </div>
        <!--========= dashboard content 1 ========-->
        <div class="artist-title-bar">
            <span class="text">Songs</span>
        </div>
        <div class="artist-dash-content-1">
            <div class="content-container-1">
                <div class="container-row-1">
                    <div class="row-header-table">
                        <div class="title-artist">
                            <span>#</span>
                            <span>Title</span>
                        </div>
                        <div class="album-artist">
                            <span>Albums</span>
                        </div>
                        <div class="icon">
                            <span class="material-icons-round">access_time</span>
                        </div>
                    </div>
                    <!--========= Table of dashboard content 1 ========-->
                    <div class="row-content-table">
                        <table>
                            @foreach ($artists_track as $row)

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
                                                    <img src="/storage/uploads/tracks/{{$row->pf_track}}" alt="">
                                                </div>
                                            </li> 
                                            <li class="text-overflow">
                                                <div class="song-title">
                                                    <span>{{$row->name_track}}</span>
                                                </div>   
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <div class="song-album">
                                            <a href="{{url('/albums/albums_view/'.$row->id_album)}}">
                                                <span>{{$row->album_track->name_album}}</span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="song-duration">
                                            <a href="">
                                                <span class="material-icons-round">favorite_border</span>
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

        <!--========= dashboard content 2 ========-->
        <div class="artist-title-bar">
            <span class="text">Albums</span>
        </div>
        <div class="artist-dash-content-2">
            <div class="content-container-2">
                <div class="box">
                    <div class="box-container">
                        @foreach($artists_album as $row)
                            <div class="box-content">
                                <div class="box-single">
                                    <div class="img-popup-container">
                                        <a href="{{url('/albums/albums_view/'.$row->id)}}">
                                            <img src="/storage/uploads/albums/{{$row->pf_album}}" alt="">
                                        </a>
                                        <a href="">
                                            <div class="play-button-pop-up">
                                                <span class="material-icons-round">play_arrow</span>
                                            </div>
                                        </a>
                                    </div>
                                    <a href="{{url('/albums/albums_view/'.$row->id)}}">
                                        <span class="song-title">{{$row->name_album}}</span>
                                        <span class="singer-name">Album</span>
                                    </a>
                                </div>
                            </div>  
                        @endforeach 
                    </div>
                </div>   
            </div>
        </div> 
    </div>
</div>
@endsection()