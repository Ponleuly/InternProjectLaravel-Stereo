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
                @foreach($mylibrary_album as $row)
                    <div class="box-content">
                        <div class="box-single">
                            <div class="img-popup-container">
                                <a href="{{url('/albums/albums_view/'.$row->id_album)}}">
                                    <img src="/storage/uploads/albums/{{$row->myalbum->pf_album}}" alt="{{$row->myalbum->name_album}}">
                                </a>
                                <a href="{{url('/albums/albums_view/'.$row->id_album)}}">
                                    <div class="play-button-pop-up">
                                        <span class="material-icons-round">play_arrow</span>
                                    </div>
                                </a>
                            </div>
                            <a href="{{url('/albums/albums_view/'.$row->id_album)}}">
                                <span class="song-title">{{$row->myalbum->name_album}}</span>
                                <span class="singer-name">album</span>
                            </a>
                        </div>
                    </div>  
                @endforeach     
            </div>
        </div>
    </div>
@endsection()