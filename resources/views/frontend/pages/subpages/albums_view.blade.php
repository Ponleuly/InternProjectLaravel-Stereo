@extends('index')
@section('dash_content')

<!--========== Albums content ===============-->
<div class="dash-content">
    <div class="album-wrapper">
        <div class="album-header">
            <div class="album-header-container">
                <div class="album-img">
                    <img src="/frontend/images/ed_sheeran.jpg" alt="ed_sheeran">
                </div>
                <div class="album-text">
                    <span class="album-name">Romance</span>
                    <span class="album-song">5 songs</span>
                    <div class="album-text-icon">
                        <span class="material-icons-round icon-1">play_arrow</span>
                        <span class="material-icons-round icon-2">favorite_border</span>
                        <span class="material-icons-round icon-3">more_horiz</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="album-dash">
            <div class="album-dash-content">
                <div class="album-content-container">
                    <div class="album-container-row">
                        <div class="album-row-header">
                            <div class="title">
                                <span>#</span>
                                <span>Title</span>
                            </div>
                            
                            <div class="icon">
                                <span class="material-icons-round">access_time</span>
                            </div>
                        </div>

                        <div class="album-row-content">
                            <table>
                                <tr>
                                    <td>
                                        <ul>
                                            <li>
                                                <div class="td-1-1">
                                                    <span class="order">1</span>
                                                    <span class="material-icons-round play-up">play_arrow</span>
                                                </div>                                         
                                            </li>
                                            <li class="text-overflow">
                                                <div class="td-1-3">
                                                    <span class="song-title">Perfect</span>
                                                    <a href="{{route('artists_view')}}"  class="artist-link">
                                                        <span class="artist-name">Ed Sheeran</span>
                                                    </a>
                                                </div>   
                                            </li>
                                        </ul>
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
                                                    <span class="order">2</span>
                                                    <span class="material-icons-round play-up">play_arrow</span>
                                                </div>  
                                            </li>
                                            
                                            <li class="text-overflow">
                                                <div class="td-1-3">
                                                    <span class="song-title">Thinking out loud</span>
                                                    <a href="{{route('artists_view')}}"  class="artist-link">
                                                        <span class="artist-name">Ed Sheeran</span>
                                                    </a>
                                                </div>  
                                            </li>
                                        </ul>
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
                                                    <span class="order">3</span>
                                                    <span class="material-icons-round play-up">play_arrow</span>
                                                </div>  
                                            </li>
                                            
                                            <li class="text-overflow">
                                                <div class="td-1-3">
                                                    <span class="song-title">Photograph</span>
                                                    <a href="{{route('artists_view')}}"  class="artist-link">
                                                        <span class="artist-name">Ed Sheeran</span>
                                                    </a>
                                                </div>        
                                            </li>
                                        </ul>
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
                                                    <span class="order">4</span>
                                                    <span class="material-icons-round play-up">play_arrow</span>
                                                </div>  
                                            </li>
                                            
                                            <li class="text-overflow">
                                                <div class="td-1-3">
                                                    <span class="song-title">Sharp of you</span>
                                                    <a href="{{route('artists_view')}}"  class="artist-link">
                                                        <span class="artist-name">Ed Sheeran</span>
                                                    </a>
                                                </div>                                                
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <div class="td-3">
                                            <span class="material-icons-round">favorite</span>
                                                <p>3:41</p>
                                                <span class="material-icons-round more-option">more_horiz</span>
                                            </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <ul>
                                            <li>
                                                <div class="td-1-1">
                                                    <span class="order">5</span>
                                                    <span class="material-icons-round play-up">play_arrow</span>
                                                </div>  
                                            </li>
                                            
                                            <li class="text-overflow">
                                                <div class="td-1-3">
                                                    <span class="song-title">Happier</span>
                                                    <a href="{{route('artists_view')}}"  class="artist-link">
                                                        <span class="artist-name">Ed Sheeran</span>
                                                    </a>
                                                </div>         
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <div class="td-3">
                                            <span class="material-icons-round">favorite</span>
                                                <p>3:40</p>
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