<?php
	use App\Models\Track;
	use App\Models\Artist;
	use App\Models\Liked;
?>
@extends('index')
@section('dash_content')
<style>
        .track-table table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            min-width: 1200px;
        }
        .track-table td {
            padding: 0;
        }
        .track-table td:nth-child(1) {
            width: 40%;
        }
        .track-table td:nth-child(2) {
            width: 40%;
            text-align: center;
        }
        .track-table td:nth-child(3) {
            width: 20%;
            text-align: center;
        }
        .track-table td ul {
            list-style: none;
            display: flex;
            flex-direction: row;
            text-transform: capitalize;
            padding-left: 15px;
            margin-bottom: 0;
        } 
        .track-table td ul li {
            margin-right: 15px;
            color: var(--white-dark-color);
        }
        .track-table td ul li .num-order {
            width: 20px;
            padding: 12px 0;
        }
        .track-table td ul li span.number {
            font-size: 16px;
            font-weight: 500;
            color: var(--white-dark-color);
            display: block;
            padding: 0 5px;
        }
        .track-table td ul li span.play-up {
            font-size: 22px;
            font-weight: 500;
            color: var(--white-dark-color);
            display: none;
            position: relative;
            padding: 0;
        }
        .track-table td ul li .img img {
            width: 50px;
            height: 50px;
            object-fit: cover;
        }
        .track-table td ul li.text-overflow {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .track-table td ul li .song-details {
            display: flex;
            flex-direction: column;
        }
        .song-details span.song-title {
            font-size: 18px;
            font-weight: 500;
            color: var(--text-color);
            align-items: center;
        }
        .song-details a {
            text-decoration: none;
            text-transform: capitalize;
        }
        .song-details a span.artist-name {
            font-size: 14px;
            font-weight: 500;
            color: var(--white-dark-color);
        }
        .track-table td .song-album a {
            text-decoration: none;
            text-transform: capitalize;
        }
        .track-table td .song-album a span {
            font-size: 16px;
            font-weight: 500;
            color: var(--white-dark-color);
        }
        .track-table td .date-added span{
            font-size: 16px;
            font-weight: 500;
            color: var(--white-dark-color);
            text-align: center;
        }
        .track-table td .song-duration {
            float: right;
            display: flex;
            flex-direction: row;
            margin-right: 15px;
            align-items: center;
        }
        td .song-duration .liked-icon-link a{
           text-decoration: none;
            margin: 10px 0;
            border: none;
        }
        td .song-duration .liked-icon-link a span{
            font-size: 18px;
            font-weight: 500;
            padding: 15px 15px;
            color: #71b7e6;
        }
        .track-table td .song-duration p {
            font-size: 14px;
            font-weight: 500;
            color: var(--white-dark-color);
            margin: 10px 0;
            align-self: center;
            margin-right: 15px;
        }
        td .song-duration .more-option {
            text-decoration: none;
            margin: 10px 0;
            padding-right: 0;
            opacity: 0;
        }
        td .song-duration .more-option span{
            font-size: 18px;
            font-weight: 500;
            color: var(--text-color);
            padding: 15px 5px;
            border-radius: 25px;
        }
        .track-table tr:hover {
            background-color: var(--box-hover-color);
        }
        .track-table tr:hover td:nth-child(1) {
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
        }
        .track-table tr:hover td .song-details a span.artist-name {
            color: var(--text-color);
        }
        .song-details a:hover span.artist-name {
            text-decoration: underline;
        }
        .track-table tr:hover td .song-album span {
            color: var(--text-color);
            text-decoration: underline;
        }
        .track-table tr:hover .number {
            display: none;
        }
        .track-table tr:hover .play-up {
            display: block;
            color: var(--text-color);
        }
        .track-table tr:hover .song-duration .more-option{
            opacity: 1;
            color: var(--text-color);
        }
</style>
<div class="dash-content" id="home">
    <div class="search-box-top">
        <a href="#">
            <span class="material-icons-round">search</span>
        </a>
        <input type="text" name="search" id="search" placeholder="Find songs, artists, albums...">
    </div>

    <div class="overview">
        <!--============== Tracks =================-->
        <div class="title-bar">
            <a href="#" id="content-title">
                <span class="text">Songs</span>
            </a>
        </div>
        <!---
        <div class="box">
            <div class="box-container" id="box-container-1">
                @foreach($tracks as $row)
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
                            <a href="{{url('/artists/artists_view/')}}">
                                <span class="singer-name">{{$row->artist_track->name_artist}}</span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        -->
        <div class="track-table" id="track-table">
            <table>
                <tbody id="table-1">
                    @foreach($tracks as $row)
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
                                            <img src="/storage/uploads/tracks/{{$row->pf_track}}" 
                                                alt="{{$row->pf_track}}">
                                        </div>                                          
                                    </li>
                                    <li class="text-overflow">
                                        <div class="song-details">
                                            <span class="song-title">{{$row->name_track}}</span>
                                            <a href="{{url('/artists/artists_view/'.$row->id)}}">
                                                <span class="artist-name">
                                                    {{$row->artist_track->name_artist}}
                                                </span>
                                            </a>
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
                                    <div class="liked-icon-link">
                                        <a href="{{url('add_liked/'.Auth::user()->id.'/'.$row->id)}}">
                                            <!--Liked status for each track-->
                                            @if ($liked == 1)
                                                <span class="material-icons-round" title="Remove from liked">favorite</span>
                                                @elseif($liked == 0)
                                                    <span class="material-icons-round" title="Add to liked">favorite_border</span>
                                            @endif
                                        </a>
                                    </div>
                                    <p>3:45</p>
                                    <div class="more-option">
                                        <span class="material-icons-round">more_horiz</span>
                                    </div>                                         
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody> 

                <tbody id="table-2">
                </tbody>
            </table>            
        </div>
        <!--============== Artists =================-->
        <div class="title-bar">
            <a href="#" id="content-title">
                <span class="text">Artists</span>
            </a>
        </div>
        <div class="box">
            <div class="box-container" id="box-container-2">
                @foreach($artists as $row)
                    <div class="box-content">
                        <div class="box-single">
                            <div class="img-popup-container">
                                <a href="{{url('/artists/artists_view/'.$row->id)}}">
                                    <img src="/storage/uploads/artists/{{$row->pf_artist}}" alt="{{$row->pf_artist}}" class="img-circle">
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
        <!--============== Albums =================-->
        <div class="title-bar">
            <a href="#" id="content-title">
                <span class="text">Albums</span>
            </a>
        </div>
        <div class="box">
            <div class="box-container" id="box-container-3">
                @foreach($albums as $row)
                    <div class="box-content">
                        <div class="box-single">
                            <div class="img-popup-container">
                                <a href="{{url('/albums/albums_view/'.$row->id)}}">
                                    <img src="/storage/uploads/albums/{{$row->pf_album}}" alt="{{$row->pf_album}}">
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
                            <a href="{{url('/albums/albums_view/'.$row->id)}}">
                                <span class="singer-name">{{$row->artist_album->name_artist}}</span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!--============== Playlists =================-->
        <div class="title-bar">
            <a href="#" id="content-title">
                <span class="text">Playlists</span>
            </a>
        </div>
        <div class="box">
            <div class="box-container" id="box-container-4">
                @foreach($playlists as $row)
                    <div class="box-content">
                        <div class="box-single">
                            <div class="img-popup-container">
                                <a href="{{url('/playlists/playlist_view/'.$row->id)}}">
                                    <img src="/storage/uploads/playlists/{{$row->pf_playlist}}" alt="{{$row->pf_playlist}}">
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
                                <span class="singer-name">playlist</span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--============= Using Ajax to make live search ==============-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="{{url('frontend/js/search.js')}}"></script>
</div>
@endsection