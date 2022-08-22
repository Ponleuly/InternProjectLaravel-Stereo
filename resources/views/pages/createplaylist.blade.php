@extends('index')

@section('dash_content')
<!--======= Create playlist content ========-->
<div class="dash-content" id="playlist">
            <div class="liked-wrapper">
                <div class="liked-header">
                    <div class="liked-header-container">
                        <div class="liked-icon">
                            <span class="material-icons-round">music_note</span>
                        </div>

                        <div class="liked-text">
                            <span>PLAYLIST</span>
                            <h1>Create Playlist #1</h1>
                            <div>
                                <span>Account</span>
                                <span>5 songs</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="liked-dash">
                    <div class="dash-top">
                        <div class="dash-top-1">
                            <span class="material-icons-round">play_arrow</span>
                        </div>
                        <div class="dash-top-2">
                            <span class="material-icons-round">more_horiz</span>
                        </div>    
                    </div>
                    
                    <div class="liked-dash-content">
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
                                                            <p>Ed Sheeran</p>
                                                        </div>   
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <div class="td-2">
                                                    <span>Perfect</span>
                                                </div>
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
                                                            <span>We don't talk anymore</span>
                                                            <p>charlie puth</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <div class="td-2">
                                                    <span>sad song</span>
                                                </div>
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
                                                            <img src="/frontend/images/laylor_swift.jpg" alt="ed_sheeran">
                                                        </div>
                                                    </li> 
                                                    <li class="text-overflow">
                                                        <div class="td-1-3">
                                                            <span>Back to december</span>
                                                            <p>Taylor Swift</p>
                                                        </div>        
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <div class="td-2">
                                                    <span>Winter</span>
                                                </div>
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
                                                            <span>What do you mean ?</span>
                                                            <p>justin Bieber</p>
                                                        </div>        
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <div class="td-2">
                                                    <span>Justin</span>
                                                </div>
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
                                                            <span>Sing me to sleep</span>
                                                            <p>Alan Walker</p>
                                                        </div>        
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <div class="td-2">
                                                    <span>Remix</span>
                                                </div>
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