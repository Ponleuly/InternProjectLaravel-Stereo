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
            <span class="text">Albums</span>
        </div>
        <div class="box">
            <div class="box-container">
                <div class="box-content">
                    <div class="box-single">
                        <div class="img-popup-container">
                            <a href="">
                                <img src="/frontend/images/ed_sheeran.jpg" alt="">
                            </a>
                            <a href="">
                                <div class="play-button-pop-up">
                                    <i class="fa fa-play" aria-hidden="true"></i>
                                </div>
                            </a>
                        </div>
                        <a href="">
                            <span class="song-title">Romance</span>
                            <span class="singer-name">album</span>
                        </a>
                    </div>
                </div>          
            </div>
        </div>
    </div>
@endsection()