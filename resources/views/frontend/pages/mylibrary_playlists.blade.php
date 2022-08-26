@extends('index')

@section('dash_content')
<!--========= My Library content ==========-->
<div class="dash-content" id="mylibrary">
    <div class="mylibrary-menu">
        <a href="{{route('mylibrary/playlists')}}" 
            class="tabcontent {{Request::is('mylibrary/playlists') ? 'active-tab':''}}">Playlists</a>
        <a href="{{route('mylibrary/artists')}}" 
            class="tabcontent {{Request::is('mylibrary/artists') ? 'active-tab':''}}">Artists</a>
        <a href="{{route('mylibrary/albums')}}" 
            class="tabcontent {{Request::is('mylibrary/albums') ? 'active-tab':''}}">Albums</a>
    </div>
    
    <div class="title-bar">
        <span class="text">Playlists</span>
    </div>
    <div class="box">
        <div class="box-container">
            <!--=================Liked box=========================-->
            <div class="box-content" style="grid-column: 1 / span 2;">
                <div class="liked-box-container">
                    <a href="{{route('liked')}}">
                        <div class="liked-box-songs">
                            <ul>
                                <li>We don't talk anymore</li>
                                <li>Perfect</li>
                                <li>Sharp of you</li>
                                <li>Take me to your heart</li>
                                <li>We don't talk anymore</li>
                                <li>Perfect</li>
                                <li>Sharp of you</li>
                                <li>Take me to your heart</li>
                                <li>We don't talk anymore</li>
                            </ul>
                        </div>
                        <div class="liked-box-text">
                            <div class="liked-box-pop-up-button">
                                <a href="#">
                                    <i class="fa fa-play" aria-hidden="true"></i>
                                </a>
                            </div>
                            <h2>Liked Songs</h2>
                            <span>4 Liked songs</span>
                        </div>
                    </a>
                </div>
            </div> 

            <!---=================Playlist==============================-->
            <div class="box-content">
                <div class="box-single">
                    <div class="img-popup-container">
                        <a href="#">
                            <img src="/frontend/images/profile.jpg" alt="">
                        </a>
                        <a href="">
                            <div class="play-button-pop-up">
                                <i class="fa fa-play" aria-hidden="true"></i>
                            </div>
                        </a>
                    </div>
                    <a href="{{route('createplaylist')}}">
                        <span class="song-title">Playlist #1</span>
                    </a>
                    <a href="{{route('createplaylist')}}">
                        <span class="singer-name">By ponleu</span>
                    </a>
                </div>
            </div>    

            <div class="box-content">
                <div class="box-single">
                    <div class="img-popup-container">
                        <a href="#">
                            <img src="/frontend/images/profile.jpg" alt="">
                        </a>
                        <a href="">
                            <div class="play-button-pop-up">
                                <i class="fa fa-play" aria-hidden="true"></i>
                            </div>
                        </a>
                    </div>
                    <a href="">
                        <span class="song-title">We don't talk anymore</span>
                    </a>
                    <a href="">
                        <span class="singer-name">charlie puth</span>
                    </a>
                </div>
            </div>    
        </div>
    </div>
</div>
@endsection()