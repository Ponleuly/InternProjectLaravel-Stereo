@extends('index')

@section('dash_content')
<!--========== Liked content ===============-->
<div class="dash-content" id="liked">
    <div class="liked-wrapper">
        <div class="liked-header">
            <div class="liked-header-container">
                <div class="liked-icon">
                    <span class="material-icons-round">favorite</span>
                </div>

                <div class="liked-text">
                    <span>PLAYLIST</span>
                    <h1>Liked Songs</h1>
                    <span>15 Songs</span>
                </div>
            </div>
        </div>
        <div class="liked-dash">
            <div class="liked-dash-top">
                <span class="material-icons-round">play_arrow</span>
            </div>

            <div class="liked-dash-content">
                <div class="liked-content-container">
                    <div class="liked-container-row">
                        <div class="liked-row-header">
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

                        <div class="liked-row-content">
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
                                                    <span class="song-title">Perfect</span>
                                                    <a href="{{route('artists_view')}}">
                                                        <span class="artist-name">Ed Sheeran</span>
                                                    </a>
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
                                                    <img src="/frontend/images/charlie_puth.jpg" alt="ed_sheeran">
                                                </div>
                                            </li> 
                                            <li class="text-overflow">
                                                <div class="td-1-3">
                                                    <span class="song-title">We don't talk anymore</span>
                                                    <a href="{{route('artists_view')}}">
                                                        <span class="artist-name">Charlie puth</span>
                                                    </a>
                                                </div>                                                 
                                            </li>
                                        </ul>
                                    </td>
                                    <td>                                 
                                        <a href="{{route('albums_view')}}">
                                            <span class="td-2">Break-up</span>
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
                                                    <img src="/frontend/images/taylor_swift.jpg" alt="taylor Swift">
                                                </div>
                                            </li> 
                                            <li class="text-overflow">
                                                <div class="td-1-3">
                                                    <span class="song-title">Back to december</span>
                                                    <a href="{{route('artists_view')}}">
                                                        <span class="artist-name">Taylor Swift</span>
                                                    </a>
                                                </div>                                                 
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <a href="{{route('albums_view')}}">
                                            <span class="td-2">Winter</span>
                                        </a>   
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
                                                    <img src="/frontend/images/justin bieber.jpg" alt="ed_sheeran">
                                                </div>
                                            </li> 
                                            <li class="text-overflow">
                                                <div class="td-1-3">
                                                    <span class="song-title">What do you mean ?</span>
                                                    <a href="{{route('artists_view')}}">
                                                        <span class="artist-name">justin Bieber</span>
                                                    </a>
                                                </div>                                         
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <a href="{{route('albums_view')}}">
                                            <span class="td-2">2020</span>
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
                                                    <img src="/frontend/images/alan_walker.jpg" alt="ed_sheeran">
                                                </div>
                                            </li> 
                                            <li class="text-overflow">
                                                <div class="td-1-3">
                                                    <span class="song-title">Sing me to sleep</span>
                                                    <a href="{{route('artists_view')}}">
                                                        <span class="artist-name">Alan Walker</span>
                                                    </a>
                                                </div>   
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <a href="{{route('albums_view')}}">
                                            <span class="td-2">Remix</span>
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
    </div>
</div>
@endsection()