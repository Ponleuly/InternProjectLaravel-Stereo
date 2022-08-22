@extends('index')

@section('dash_content')
    <div class="dash-content" id="mylibrary">
        <div class="mylibrary-menu">
            <a href="{{route('mylibrary/playlists')}}" 
                class="tabcontent {{Request::is('mylibrary/playlists') ? 'active-tab':''}}">Playlists</a>
            <a href="{{route('mylibrary/artists')}}" 
                class="tabcontent {{Request::is('mylibrary/artists') ? 'active-tab':''}}">Artists</a>
            <a href="{{route('mylibrary/albums')}}" 
                class="tabcontent {{Request::is('mylibrary/albums') ? 'active-tab':''}}">Albums</a>
        </div>
        <!--============= artists ===============-->
        <div class="title-bar">
            <span class="text">Artists</span>
        </div>
        <div class="box">
            <div class="box-container">
                <div class="box-content">
                    <div class="box-single">
                        <div class="img-popup-container">
                            <a href="{{route('artists_view')}}">
                                <img src="/frontend/images/ed_sheeran.jpg" alt="ed sheeran" class="img-circle" > 
                                <span class="song-title">Ed Sheeran</span>
                                <span class="singer-name">artist</span>
                            </a>
                        </div> 
                    </div>
                </div>

                <div class="box-content">
                    <div class="box-single">
                        <div class="img-popup-container">
                            <a href="{{route('artists_view')}}">
                                <img src="/frontend/images/le_bao_binh.jpg" alt="Le bao binh" class="img-circle"> 
                                <span class="song-title">Le bao binh</span>
                                <span class="singer-name">artist</span>
                            </a>
                        </div> 
                    </div>
                </div>

                <div class="box-content">
                    <div class="box-single">
                        <div class="img-popup-container">
                            <a href="{{route('artists_view')}}">
                                <img src="/frontend/images/jack.jpeg" alt="jack" class="img-circle"> 
                                <span class="song-title">Jack</span>
                                <span class="singer-name">artist</span>
                            </a>
                        </div> 
                    </div>
                </div>

                <div class="box-content">
                    <div class="box-single">
                        <div class="img-popup-container">
                            <a href="{{route('artists_view')}}">
                            <img src="/frontend/images/charlie_puth.jpg" alt="Chalie puth" class="img-circle"> 
                                <span class="song-title">Charlie Puth</span>
                                <span class="singer-name">artist</span>
                            </a>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()