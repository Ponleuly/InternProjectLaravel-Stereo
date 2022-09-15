<?php
  	use App\Models\Playlist_Track;
  	use App\Models\Artist;
  	use App\Models\Track;
?>
@extends('index')
@section('dash_content')
<style>   
    .playlist-wrapper {
        margin-top: 20px;
        width: 100%;
        height: auto;
        background-color: var(--box-color);
        overflow: hidden;
    }
    .playlist-wrapper .playlist-header{
        width: 100%;
        min-height: 280px;
        background-color: var(--box-color);
    }
    .playlist-header .playlist-header-container{
        display: flex;
        flex-direction: row;
    }
    .playlist-header-container .playlist-img img{
        margin: 30px;
        width: 220px;
        height: 220px;
        object-fit: cover;
    }
    .playlist-header-container .playlist-text{
        padding-top: 20px;
        min-width: 500px;
        display: flex;
        flex-direction: column;
    }
    .playlist-text .playlist-name{
        font-size: 60px;
        font-weight: bold;
        color: var(--text-color);
        margin: 15px 0;
        height: 90px;
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
    }
    .playlist-text .playlist-name:hover{
        overflow: visible;
    }
    .playlist-text .playlist-song{
        font-size: 20px;
        font-weight: 500;
        color: var(--white-dark-color);
        margin: 10px 0;
    }
    .playlist-text .playlist-text-icon{
        display: flex;
        flex-direction: row;
        margin: 15px 0;
    }
    .playlist-text-icon .icon-1{
        margin-right: 20px;
        color: var(--text-color);
        background-color: var(--black-color);
        cursor: pointer;
        font-size: 30px;
        font-weight: 500;
        height: 45px;
        width: 45px;
        line-height: 45px;
        border-radius: 50%;
        justify-content: center;
        text-align: center;
    }
    .playlist-text-icon .icon-2{
        margin-right: 20px;
        color: var(--white-dark-color);
        cursor: pointer;
        font-size: 30px;
        font-weight: 500;
        line-height: 45px;
        justify-content: center;
        text-align: center;
    }
    .playlist-text-icon .icon-3{
        margin-right: 20px;
        color: var(--white-dark-color);
        cursor: pointer;
        font-size: 30px;
        font-weight: 500;
        line-height: 45px;
        justify-content: center;
        text-align: center;
    }
    .playlist-text-icon .icon-1:hover{
        background-color: var(--nav-color);
    }
    .playlist-text-icon .icon-2:hover, .icon-3:hover {
        color: var(--text-color);
    }
    .playlist-wrapper .playlist-dash {
        width: 100%;
    }
    .playlist-dash .playlist-dash-content {
    width: 100%;
    }
    .playlist-dash-content .playlist-content-container{
        max-width: 100%;
        margin: 0;
        padding: 20px 30px;
    }
    .playlist-content-container .playlist-container-row{
        display: flex;
        flex-direction: column;
        width: 100%;
    }
    /*=================================================*/
    .playlist-container-row .playlist-row-header {
        display: flex;
        flex-direction: row;
        border-bottom: 1px solid var(--border-color);
        padding-bottom: 10px;
    }
    .playlist-row-header .title {
        width: calc(40% - 15px);
        margin-left: 15px;
    }
    .playlist-row-header .album {
        width: 40%;
        text-align: center;
    }
    .playlist-row-header .icon{
        width: calc(20% - 45px);
        margin-right: 45px;
    }
    .playlist-row-header .title, .icon{
        color: var(--text-color);
        font-size: 18px;
        font-weight: 500;
        text-transform: uppercase;
    }
    .playlist-row-header .title span{
        margin-right: 10px;
    }
    .playlist-row-header .icon span{
        float: right;
    }
    /*==================================================*/
    /*=================== Table Content ==================*/
    .container-row .row-content-table-playlist {
        padding: 15px 0;
    }
    .row-content-table-playlist table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    .row-content-table-playlist td {
        padding: 10px 0;
    }
    .row-content-table-playlist td:nth-child(1) {
        width: 40%;
    }
    .row-content-table-playlist td:nth-child(2) {
        width: 40%;
        text-align: center;
    }
    .row-content-table-playlist td:nth-child(3) {
        width: 20%;
    }
    .row-content-table-playlist td ul {
        list-style: none;
        display: flex;
        flex-direction: row;
        text-transform: capitalize;
        padding-left: 15px;
        margin-bottom: 0;
    }
    .row-content-table-playlist td ul li {
        margin-right: 15px;
        color: var(--white-dark-color);
    }
    .row-content-table-playlist td ul li .num-order {
        width: 20px;
        padding: 12px 0;
    }
    .row-content-table-playlist td ul li span.number {
        font-size: 16px;
        font-weight: 500;
        color: var(--white-dark-color);
        display: block;
        padding: 0 5px;
    }

    .row-content-table-playlist td ul li span.play-up {
        font-size: 22px;
        font-weight: 500;
        color: var(--white-dark-color);
        display: none;
        position: relative;
        padding: 0;
    }
    .row-content-table-playlist td ul li .img img {
        width: 50px;
        height: 50px;
        object-fit: cover;
    }
    .row-content-table-playlist td ul li.text-overflow {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .row-content-table-playlist td ul li .song-details{
        display: flex;
        flex-direction: column;
    }
    .song-details span.song-title{
        font-size: 18px;
        font-weight: 500;
        color: var(--text-color);
        align-items: center;
    }
    .song-details a {
        text-decoration: none;
        text-transform: capitalize;
    }
    .song-details a span.artist-name{
        font-size: 14px;
        font-weight: 500;
        color: var(--white-dark-color);
    }
    .row-content-table-playlist td .song-album a{
        text-decoration: none;
        text-transform: capitalize;
    }
    .row-content-table-playlist td .song-album a span{
        font-size: 16px;
        font-weight: 500;
        color: var(--white-dark-color);
    }
    .row-content-table-playlist td .song-duration{
        float: right;
        display: flex;
        flex-direction: row;
        margin-right: 15px;
        align-items: center;
    }
    .row-content-table-playlist td .song-duration a{
        text-decoration: none;
    }
    .row-content-table-playlist td .song-duration a span{
        font-size: 18px;
        font-weight: 500;
        padding: 15px 15px;
        color: #71b7e6;
        border: none;
    }
    .row-content-table-playlist td .song-duration p{
        font-size: 14px;
        font-weight: 500;
        color: var(--white-dark-color);
        margin: 15px 0;
    }
    .row-content-table-playlist td .song-duration .more-option {
        font-size: 20px;
        font-weight: 500;
        color: var(--white-dark-color);
        cursor: pointer;
        padding-right: 0;
        padding-left: 15px;
        opacity: 0;
    }
    .row-content-table-playlist tr:hover {
        background-color: var(--box-hover-color);
    }
    .row-content-table-playlist tr:hover td:nth-child(1) {
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
    }
    .row-content-table-playlist tr:hover td .song-details a span.artist-name{
        color: var(--text-color);
    }
    .song-details a:hover span.artist-name {
        text-decoration: underline;
    }
    .row-content-table-playlist tr:hover td .song-album span{
        color: var(--text-color);
        text-decoration: underline;
    }
    .row-content-table-playlist tr:hover .number {
        display: none;
    }
    .row-content-table-playlist tr:hover .play-up {
        display: block;
        color: var(--text-color);
    }

    .row-content-table-playlist tr:hover .song-duration .more-option{
        opacity: 1;
        color: var(--text-color);
    }
    @media screen and (max-width: 1200px) {
        .playlist-row-header .title {
            width: 80%;
        }
        .playlist-row-header .icon{
            width: 20%;
        }
        .playlist-row-content table td:nth-child(1){
            width: 80%;
        }
        .playlist-row-content table td:nth-child(2){
            width: 20%;  
        }
        .playlist-row-content td ul li.text-overflow{
            width: 500px;
            white-space: nowrap;  
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .playlist-row-content td ul li .td-1-3 span {
            width: 300px;
        }
    }
    @media screen and (max-width: 900px) {
        .playlist-row-header .title {
            width: 80%;
        }
        .playlist-row-header .icon{
            width: 20%;
        }
        .playlist-row-content table td:nth-child(1){
            width: 80%;
        }
        .playlist-row-content table td:nth-child(2){
            width: 20%;  
        }
        .playlist-row-content td ul li.text-overflow{
            width: 300px;
            white-space: nowrap;  
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .playlist-row-content td ul li .td-1-3 span {
            width: 300px;
        }
    }
    @media screen and (max-width: 700px) {
        .playlist-row-content table td:nth-child(1){
            width: 100%;
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px; 
        }
        .playlist-row-content table td:nth-child(2){
            display: none;
        }
        .playlist-row-content td ul li.text-overflow{
            width: 100px;
            white-space: nowrap;  
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .playlist-row-header .icon{
            display: none;
        }
        .playlist-row-content td ul li .td-1-3 span {
            width: 200px;
        }
    }
</style>
<!--========== playlists content ===============-->
<div class="dash-content">
    <div class="playlist-wrapper">
        <div class="playlist-header">
            <div class="playlist-header-container">
                @foreach ($playlists_view as $row)
                    <div class="playlist-img">
                        <img src="/storage/uploads/playlists/{{$row->pf_playlist}}" alt="{{$row->pf_playlist}}">
                    </div>
                    <div class="playlist-text">
                        <span class="playlist-name">{{$row->name_playlist}}</span>
                        @php
                        /*
						    $track_count = Track::where('id_playlist', $row->id)->count(); 
                            */
					    @endphp
                        <span class="playlist-song">Playlist - {{$track_count}} Songs</span>
                        <div class="playlist-text-icon">
                            <span class="material-icons-round icon-1">play_arrow</span>
                            <span class="material-icons-round icon-2">favorite_border</span>
                            <span class="material-icons-round icon-3">more_horiz</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="playlist-dash">
            <div class="playlist-dash-content">
                <div class="playlist-content-container">
                    <div class="playlist-container-row">
                        <div class="playlist-row-header">
                            <div class="title">
                                <span>#</span>
                                <span>Title</span>
                            </div>
                            <div class="album">
                                <span>Album</span>
                            </div>
                            <div class="icon">
                                <span class="material-icons-round">access_time</span>
                            </div>
                        </div>

                        <div class="row-content-table-playlist">
                            <table>
                                @foreach ($playlists_track as $row)
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
                                                        <img src="/storage/uploads/tracks/{{$row->playlist_track->pf_track}}" alt="">
                                                    </div>                                          
                                                </li>
                                                <li class="text-overflow">
                                                    <div class="song-details">
                                                        <span class="song-title">{{$row->playlist_track->name_track}}</span>
                                                        @php
                                                            $artist_track = Track::where('id', $row->id_track)->first();
                                                        @endphp
                                                        <a href="{{url('/artists/artists_view/'.$artist_track->id_artist)}}">
                                                            <span class="artist-name">
                                                                {{$artist_track->artist_track->name_artist}}
                                                            </span>
                                                        </a>
                                                    </div>   
                                                </li>
                                            </ul>
                                        </td>

                                        <td> 
                                            <div class="song-album">
                                                <a href="{{url('/albums/albums_view/'.$artist_track->id_album)}}">
                                                    <span>{{$artist_track->album_track->name_album}}</span>
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
    </div>
</div>
@endsection()