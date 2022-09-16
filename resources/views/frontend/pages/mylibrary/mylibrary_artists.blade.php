@extends('index')

@section('dash_content')
    <div class="dash-content" id="mylibrary">
        <div class="mylibrary-menu">
            <a href="{{route('mylibrary/my_playlists')}}" 
                class="tabcontent {{Request::is('mylibrary/my_playlists') ? 'active-tab':''}}">Playlists</a>
            <a href="{{route('mylibrary/my_artists')}}" 
                class="tabcontent {{Request::is('mylibrary/my_artists') ? 'active-tab':''}}">Artists</a>
            <a href="{{route('mylibrary/my_albums')}}" 
                class="tabcontent {{Request::is('mylibrary/my_albums') ? 'active-tab':''}}">Albums</a>
        </div>
        <!--============= artists ===============-->
        <div class="title-bar">
            <span class="text">Artists</span>
        </div>
        <div class="box">
            <div class="box-container">
                @foreach($follower_artist as $row)
                    <div class="box-content">
                        <div class="box-single">
                            <div class="img-popup-container">
                                <a href="">
                                    <img src="/storage/uploads/artists/{{$row->follower_artist->pf_artist}}"
                                        alt="{{$row->follower_artist->name_artist}}" class="img-circle" > 
                                    <span class="song-title">{{$row->follower_artist->name_artist}}</span>
                                    <span class="singer-name">Artist</span>
                                </a>
                            </div> 
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection()