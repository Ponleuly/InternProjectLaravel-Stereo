@extends('index')
@section('dash_content')

<!--========= My Library content ==========-->
<div class="dash-content" id="mylibrary">
    <div class="mylibrary-menu">
        <a href="{{route('mylibrary/my_playlists')}}" 
            class="tabcontent {{Request::is('mylibrary/my_playlists') ? 'active-tab':''}}">Playlists</a>
        <a href="{{route('mylibrary/my_artists')}}" 
            class="tabcontent {{Request::is('mylibrary/my_artists') ? 'active-tab':''}}">Artists</a>
        <a href="{{route('mylibrary/my_albums')}}" 
            class="tabcontent {{Request::is('mylibrary/my_albums') ? 'active-tab':''}}">Albums</a>
    </div>
    
    <div class="title-bar">
        <span class="text">Playlists</span>
    </div>
    <div class="box-playlist">
        <div class="box-playlist-container">
            <!--=================Liked box-playlist=========================-->
            <div class="box-playlist-content" style="grid-column: 1 / span 2;">
                <div class="liked-box-playlist-container">
                    <a href="{{route('liked')}}">
                        <div class="liked-box-playlist-songs">
                            <ul>
                                @foreach($liked_tracks as $row)
                                    <li>{{$row->liked_track->name_track}}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="liked-box-playlist-text">
                            <div class="liked-box-playlist-pop-up-button">
                                <a href="#">
                                    <span class="material-icons-round">play_arrow</span>
                                </a>
                            </div>
                            <h2>Liked Songs</h2>
                            <span>{{$track_count}} Liked songs</span>
                        </div>
                    </a>
                </div>
            </div> 

            <!---=================Playlist==============================-->
            @foreach ($myplaylists as $row)    
                <div class="box-playlist-content">
                    <div class="box-playlist-single">
                        <div class="img-popup-container">
                            <a href="{{url('createplaylist/'.$row->id)}}">
                                <img src="/storage/uploads/playlists/{{$row->pf_playlist}}" alt="">
                            </a>
                            <a href="">
                                <div class="play-button-pop-up">
                                    <span class="material-icons-round">play_arrow</span>
                                </div>
                            </a>
                        </div>
                        <a href="{{url('createplaylist/'.$row->id)}}">
                            <span class="playlist-name">{{$row->name_playlist}}</span>
                        </a>
                        <a href="{{url('createplaylist/'.$row->id)}}">
                            <span class="by-user">By {{$row->playlist_user->username}}</span>
                        </a>
                    </div>
                </div>    
            @endforeach
        </div>
    </div>
</div>
@endsection()