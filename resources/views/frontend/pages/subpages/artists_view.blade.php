@extends('index')
@section('dash_content')

<div class="dash-content">
    <div class="artist-wrapper">
        <!--========= Header =================-->
        <div class="artist-header">
            <div class="artist-header-container">    
                <span class="artist-name">Ed Sheeran</span>
                <span class="artist-follower">1,120,222 follower</span>        
            </div>
        </div>
        <!--========= Dashb0ard ========-->       
        <div class="artist-dash">
         <!--========= top of dashboard ========-->
         <div class="artist-dash-top">
            <div class="dash-top-1">
                <span class="material-icons-round">play_arrow</span>
            </div>
            <div class="dash-top-2">
                <span>FOLLOW</span>
            </div>
            <div class="dash-top-3">
                <span class="material-icons-round">more_horiz</span>
            </div>    
        </div>
        <!--========= dashboard content 1 ========-->
        <div class="artist-title-bar">
            <span class="text">Songs</span>
        </div>
        <div class="artist-dash-content">
            <div class="content-container">
                <div class="container-row">
                    <div class="row-header">
                        <div class="title">
                            <span>#</span>
                            <span>Title</span>
                        </div>
                        <div class="album">
                            <span>Albums</span>
                        </div>
                        <div class="icon">
                            <span class="material-icons-round">access_time</span>
                        </div>
                    </div>
                    <!--========= Table of dashboard content 1 ========-->
                    <div class="row-content">
                        <table>
                                <tr>
                                    <td>
                                        <ul>
                                            <li>
                                                <div class="td-1-1">
                                                    <span class="number">1</span>
                                                    <span class="material-icons-round play-up">play_arrow</span>
                                                </div>                                         
                                            </li>
                                            <li>
                                                <div class="img">
                                                    <img src="/frontend/images/ed_sheeran.jpg" alt="ed_sheeran">
                                                </div>
                                            </li> 
                                            <li class="text-overflow">
                                                <div class="td-1-3">
                                                    <span>Perfect</span>
                                                </div>   
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <a href="{{route('albums_view')}}">
                                            <span class="td-2">Romance</span>
                                        </a>
                                    </td>
                                    <td>
                                        <div class="td-3">
                                            <span class="material-icons-round">favorite</span>
                                            <p>3:45</p>
                                            <span class="material-icons-round more-option">more_horiz</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <ul>
                                            <li>
                                                <div class="td-1-1">
                                                    <span class="number">2</span>
                                                    <span class="material-icons-round play-up">play_arrow</span>
                                                </div>  
                                            </li>
                                            <li>
                                                <div class="img">
                                                    <img src="/frontend/images/ed_sheeran_1.jpg" alt="ed_sheeran">
                                                </div>
                                            </li> 
                                            <li class="text-overflow">
                                                <div class="td-1-3">
                                                    <span>Sharp of you</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <a href="{{route('albums_view')}}">
                                            <span class="td-2">Romance</span>
                                        </a>
                                    </td>
                                    <td>
                                        <div class="td-3">
                                            <span class="material-icons-round">favorite</span>
                                            <p>3:55</p>
                                            <span class="material-icons-round more-option">more_horiz</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <ul>
                                            <li>
                                                <div class="td-1-1">
                                                    <span class="number">3</span>
                                                    <span class="material-icons-round play-up">play_arrow</span>
                                                </div>  
                                            </li>
                                            <li>
                                                <div class="img">
                                                    <img src="/frontend/images/ed_sheeran_2.jpg" alt="ed_sheeran">
                                                </div>
                                            </li> 
                                            <li class="text-overflow">
                                                <div class="td-1-3">
                                                    <span>Happier</span> 
                                                </div>        
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <a href="{{route('albums_view')}}">
                                            <span class="td-2">Romance</span>
                                        </a>
                                    </td>
                                    <td>
                                        <div class="td-3">
                                            <span class="material-icons-round">favorite</span>
                                            <p>3:30</p>
                                            <span class="material-icons-round more-option">more_horiz</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <ul>
                                            <li>
                                                <div class="td-1-1">
                                                    <span class="number">4</span>
                                                    <span class="material-icons-round play-up">play_arrow</span>
                                                </div>  
                                            </li>
                                            <li>
                                                <div class="img">
                                                    <img src="/frontend/images/ed_sheeran_3.jpg" alt="ed_sheeran">
                                                </div>
                                            </li> 
                                            <li class="text-overflow">
                                                <div class="td-1-3">
                                                    <span>Photograph</span>
                                                    
                                                </div>        
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <a href="{{route('albums_view')}}">
                                            <span class="td-2">Romance</span>
                                        </a>
                                    </td>
                                    <td>
                                        <div class="td-3">
                                            <span class="material-icons-round">favorite</span>
                                            <p>3:40</p>
                                            <span class="material-icons-round more-option">more_horiz</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <ul>
                                            <li>
                                                <div class="td-1-1">
                                                    <span class="number">5</span>
                                                    <span class="material-icons-round play-up">play_arrow</span>
                                                </div>  
                                            </li>
                                            <li>
                                                <div class="img">
                                                    <img src="/frontend/images/ed_sheeran_4.jpg" alt="ed_sheeran">
                                                </div>
                                            </li> 
                                            <li class="text-overflow">
                                                <div class="td-1-3">
                                                    <span>Thinking out loud</span>
                                                    
                                                </div>        
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <a href="{{route('albums_view')}}">
                                            <span class="td-2">Romance</span>
                                        </a>
                                    </td>
                                    <td>
                                        <div class="td-3">
                                            <span class="material-icons-round">favorite</span>
                                            <p>3:25</p>
                                            <span class="material-icons-round more-option">more_horiz</span>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--========= dashboard content 2 ========-->
        <div class="artist-title-bar">
            <span class="text">Albums</span>
        </div>
        <div class="artist-dash-content-2">
            <div class="content-container-2">
                <div class="box">
                    <div class="box-container">
                        <div class="box-content">
                            <div class="box-single">
                                <div class="img-popup-container">
                                    <a href="{{route('albums_view')}}">
                                        <img src="/frontend/images/ed_sheeran.jpg" alt="">
                                    </a>
                                    <a href="">
                                        <div class="play-button-pop-up">
                                            <i class="fa fa-play" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </div>
                                <a href="{{route('albums_view')}}">
                                    <span class="song-title">Romance</span>
                                    <span class="singer-name">album</span>
                                </a>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>
@endsection()