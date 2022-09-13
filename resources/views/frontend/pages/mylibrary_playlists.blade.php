@extends('index')
@section('dash_content')
<style>
    :root{
    /* ===== Colors ===== */
    --primary-color: #ccc;
    --panel-color: rgba(160, 20, 79 , 1); /*Chrimson => rgb (160, 20, 79) == #a0144f*/
    --nav-color: rgba(160, 20, 79 , 0.9);
    --bottom-bar: #7e103f;
    --text-color: #ffffff;
    --text-white-color: #ffffff;
    --white-dark-color: #ccc; 
    --black-light-color: #707070;
    --border-color: #e6e5e5;
    --toggle-color: #DDD;
    --box-color: rgba(126, 16, 63, 0.3);
    --box-hover-color : rgba(126, 16, 63, 1);
    --play-button-hover: rgba(0, 0, 0, 0.9);
    --title-icon-color: #ffffff;
    --logo-color: #ffffff;
    --search-box-color: #ffffff;
    --search-text-color: #3A3B3C;
    --black-color: black;
    /* ====== Transition ====== */
    --tran-05: all 0.5s ease;
    --tran-03: all 0.3s ease;
    --tran-03: all 0.2s ease;
    }
    /* ========box-playlist content =========*/
    .dash-content .box-playlist{
        --box-container-width: 100%;
        width: var(--box-container-width);
    }
    .dash-content .box-playlist .box-playlist-container{
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(210px, 1fr));
        grid-template-rows: repeat(auto-fill, minmax(300px, 300px));
        gap: 20px;
    }
    .dash-content .box-playlist .box-playlist-container .box-playlist-content{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-around;
        border-radius: 5px;
        background-color: var(--box-color);
        transition: var(--tran-05);
    }
    .box-playlist-content .liked-box-playlist-container{
        display: flex;
        flex-direction: column;
        align-self: flex-start;
        margin: 0 auto;
    }
    .liked-box-playlist-container a{
        text-decoration: none;
    }
    .liked-box-playlist-container .liked-box-playlist-songs {
        height: 180px;
        width: calc(450px - 60px);
        overflow-y: auto;
    }
    .liked-box-playlist-container .liked-box-playlist-text{
        padding-top: 15px;
        color: var(--text-color);
        cursor: pointer;
    }
    .liked-box-playlist-songs ul li{
        margin-left: 20px;
        padding: 6px 0;
        font-size: 16px;
        font-weight: 500;
        color: var(--text-color);
        text-transform: capitalize;
        word-break: break-word;
        cursor: pointer;
    }
    .liked-box-playlist-text .liked-box-playlist-pop-up-button span{
        float: right;
        margin-right: 5px;
        cursor: pointer;
        font-size: 25px;
        font-weight: 500;
        color: var(--text-color);
        background-color: var(--black-color);
        height: 50px;
        width: 50px;
        line-height: 50px;
        border-radius: 50%;
        justify-content: center;
        text-align: center;

        opacity: 0.9;
        display: none;
    }
    .box-playlist-content:hover .liked-box-playlist-pop-up-button span{
        opacity: 1;
        display: block;
    }
    .liked-box-playlist-pop-up-button span:hover {
        background-color: var(--nav-color);
    }
    .box-playlist-content .box-playlist-single {
        width: 180px;
        height: 270px;
        margin: 20px 0;
        border-radius: 5px;
    }
    .box-playlist-content .box-playlist-single a{
        text-decoration: none;
        display: flex;
        flex-direction: column;
    }
    .box-playlist-single .img-popup-container{
        position: relative;
    }
    .box-playlist-single .img-popup-container img{
        width: 180px;
        height: 180px;
        object-fit: cover;
        border-radius: 5px;
        transition: transform .2s; /* for img hover zoom time*/ 
        opacity: 1;
        display: block;
        transition: .5s ease;
        backface-visibility: hidden;

        background-image: url("/frontend/images/music_avatar1.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }
    /* ======== Play button pop-up ==========*/
    .box-playlist-single .img-popup-container .play-button-pop-up{
        transition: .5s ease;
        opacity: 0;
        position: absolute;
        top: 80%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
    }
    .box-playlist-single .img-popup-container .play-button-pop-up  span{
        font-size: 25px;
        font-weight: 500;
        color: var(--text-color);
        background-color: var(--black-color);
        height: 50px;
        width: 50px;
        border-radius: 50%;
        justify-content: center;
        line-height: 50px;
        text-align: center;
        cursor: pointer;
    }
    .box-playlist-single .img-popup-container .play-button-pop-up  span:hover{
        color: var(--text-color);
        background-color: var(--nav-color);
        opacity: 1;
        cursor: pointer;
    }
    .box-playlist-content:hover .img-popup-container .play-button-pop-up{
        opacity: 1;
    }
    .box-playlist-content .box-playlist-single .img-popup-container .img-circle{
        width: 180px;
        height: 180px;
        object-fit: cover;
        border-radius: 50%;
        transition: transform .2s; /* for img hover zoom time*/
    }
    .box-playlist-single .img-popup-container .play-button-pop-up.active-icon{
        opacity: 1;
    }
    .box-playlist-single .img-popup-container .play-button-pop-up.active-icon  span{
        background-color: var(--box-hover-color);
        cursor: pointer;
    }
    .box-playlist-single .img-popup-container .play-button-pop-up.active-icon  span:hover{
        background-color: var(--black-color);
        cursor: pointer;
    }
    .box-playlist-content.active-song{
        background-color: var(--box-hover-color); 
    }
    /* == hold box-playlist hover ==*/
    .box-playlist-content:hover {
        background-color: var(--box-hover-color); 
    }
    .box-playlist-content:hover .img-popup-container img{
        -ms-transform: scale(1.1); /* IE 9 */
        -webkit-transform: scale(1.1); /* Safari 3-8 */
        transform: scale(1.1);  /* < 1 => zoom in , > 1 => zoom out*/

    }

    /*========= Song title and singer name ======*/
    .box-playlist-content .box-playlist-single .playlist-name{
        font-size: 18px;
        font-weight: 600;
        color: var(--text-color);
        padding: 15px 0 0 0;
        text-transform: capitalize;
        white-space: nowrap; 
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .box-playlist-content .box-playlist-single .by-user{
        font-size: 16px;
        font-weight: 500;
        color: var(--white-dark-color);
        padding: 5px 0;
        text-transform: capitalize;
    }
    .box-playlist-content .box-playlist-single a:hover .playlist-name {
        color: var(--text-color);
        text-decoration: underline;
    }
    .box-playlist-content .box-playlist-single a:hover .by-user{
        color: var(--text-color);
    } 
</style>
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
                        <div class="liked-box-playlist-text">
                            <div class="liked-box-playlist-pop-up-button">
                                <a href="#">
                                    <span class="material-icons-round">play_arrow</span>
                                </a>
                            </div>
                            <h2>Liked Songs</h2>
                            <span>4 Liked songs</span>
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