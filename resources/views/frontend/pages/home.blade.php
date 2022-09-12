@extends('index')

@section('dash_content')
<div class="dash-content" id="home">
    <!--============================= Songs View  =====================================-->
    <div class="overview">
        <div class="title-bar">
            <a href="#">
                <span class="text">Song Collections</span>
            </a>
        </div>
        <div class="box">
            <div class="box-container">
                @foreach ($tracks as $row)
                    <div class="box-content">
                        <div class="box-single">
                            <div class="img-popup-container">
                                <a href="#">
                                    <img src="/storage/uploads/tracks/{{$row->pf_track}}" alt="">
                                </a>
                                <a href="">
                                    <div class="play-button-pop-up">
                                        <span class="material-icons-round">play_arrow</span>
                                    </div>
                                </a>
                            </div>
                            <a href="">
                                <span class="song-title">{{$row->name_track}}</span>
                            </a>
                            <a href="{{url('/artists/artists_view/'.$row->id_artist)}}">
                                <span class="singer-name">{{$row->artist_track->name_artist}}</span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
   <!--============================= Playlist View  =====================================-->
    <div class="overview">
        <div class="title-bar">
            <a href="#">
                <span class="text">Playlists</span>
            </a>
        </div>
        <div class="box">
            <div class="box-container">
                @foreach ($playlists as $row)
                    <div class="box-content">
                        <div class="box-single">
                            <div class="img-popup-container">
                                <a href="{{url('/playlists/playlist_view/'.$row->id)}}">
                                    <img src="/storage/uploads/playlists/{{$row->pf_playlist}}" alt="">
                                </a>
                                <a href="">
                                    <div class="play-button-pop-up">
                                        <span class="material-icons-round">play_arrow</span>
                                    </div>
                                </a>
                            </div>
                            <a href="{{url('/playlists/playlist_view/'.$row->id)}}">
                                <span class="song-title">{{$row->name_playlist}}</span>
                            </a>
                            <a href="{{url('/playlists/playlist_view/'.$row->id)}}">
                                <span class="singer-name">Playlist</span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--============================= Artists View ======================================-->            
    <div class="overview">
        <div class="title-bar">
            <a href="#">
                <span class="text">Artists</span>
            </a>
        </div>

        <div class="box">
            <div class="box-container">
                @foreach ($artists as $row)
                    <div class="box-content">
                        <div class="box-single">
                            <div class="img-popup-container">
                                <a href="{{url('/artists/artists_view/'.$row->id)}}">
                                    <img src="/storage/uploads/artists/{{$row->pf_artist}}" alt="" class="img-circle">
                                </a>
                                <a href="">
                                    <div class="play-button-pop-up">
                                        <span class="material-icons-round">play_arrow</span>
                                    </div>
                                </a>
                            </div>
                            <a href="{{url('/artists/artists_view/'.$row->id)}}">
                                <span class="song-title">{{$row->name_artist}}</span>
                            </a>
                            <a href="{{url('/artists/artists_view/'.$row->id)}}">
                                <span class="singer-name">Artist</span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

     <!--============================= Album View ======================================-->            
    <div class="overview">
        <div class="title-bar">
            <a href="#">
                <span class="text">Album Collections</span>
            </a>
        </div>
        <div class="box">
            <div class="box-container">
                @foreach ($albums as $row)
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
                            </a>
                            <a href="{{url('/artists/artists_view/'.$row->id_artist)}}">
                                <span class="singer-name">{{$row->artist_album->name_artist}}</span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection()