@extends('index')

@section('dash_content')
<!--=========== Category content ===========-->
<div class="dash-content" id="category">
    <div class="overview">
        <div class="title-bar">
            <a href="#">
                <span class="text">Country</span>
            </a>
        </div>
        <div class="box-country">
            <div class="box-country-container">
                <div class="box-country-content">
                    <div class="content"> 
                        <div class="text-header">
                            <div class="img">
                                <img src="/frontend/images/Flag_of_Cambodia.jpeg" alt="">
                            </div>
                            <h1>Khmer songs</h1>
                            <ul>
                                <li>15 Songs</li>
                                <li>5 Artists</li>
                                <li>2 Albums</li>
                            </ul>   
                        </div>
                    </div>       
                </div> 
                
                <div class="box-country-content">
                    <div class="content">
                        <div class="text-header">
                            <div class="img">
                                <img src="/frontend/images/Flag-Vietnam.jpeg" alt="">
                            </div>
                            <h1>Vietnamese songs</h1>
                            <ul>
                                <li>23 songs</li>
                                <li>5 Artists</li>
                                <li>5 Albums</li>
                            </ul>   
                        </div>
                    </div>
                </div>  

                <div class="box-country-content">
                    <div class="content">
                        <div class="text-header">
                            <div class="img">
                                <img src="/frontend/images/United_Kingdom.jpeg" alt="">
                            </div>
                            <h1>English songs</h1>
                            <ul>
                                <li>36 Songs</li>
                                <li>7 Artists</li>
                                <li>9 Albums</li>
                            </ul>      
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>

    <div class="overview">
        <div class="title-bar">
            <a href="#">
                <span class="text">EDM Songs</span>
            </a>
        </div>
        <div class="box">
            <div class="box-container">
                <div class="box-content">
                    <div class="box-single">
                        <div class="img-popup-container">
                            <a href="#">
                                <img src="/frontend/images/jack.jpeg" alt="">
                            </a>
                            <a href="">
                                <div class="play-button-pop-up">
                                    <i class="fa fa-play" aria-hidden="true"></i>
                                </div>
                            </a>
                        </div>
                        <a href="">
                            <span class="song-title">We don't talk anymore</span>
                        </a>
                        <a href="">
                            <span class="singer-name">charlie puth</span>
                        </a>
                    </div>
                </div>          
            </div>
        </div>
    </div>
    <div class="overview">
        <div class="title-bar">
            <a href="#">
                <span class="text">Remix Songs</span>
            </a>
        </div>
        <div class="box">
            <div class="box-container">
                <div class="box-content">
                    <div class="box-single">
                        <div class="img-popup-container">
                            <a href="#">
                                <img src="/frontend/images/ed_sheeran.jpg" alt="">
                            </a>
                            <a href="">
                                <div class="play-button-pop-up">
                                    <i class="fa fa-play" aria-hidden="true"></i>
                                </div>
                            </a>
                        </div>
                        <a href="">
                            <span class="song-title">Sharp of you</span>
                        </a>
                        <a href="">
                            <span class="singer-name">Ed Sheeran</span>
                        </a>
                    </div>
                </div>          
            </div>
        </div>
    </div>
</div>
@endsection()