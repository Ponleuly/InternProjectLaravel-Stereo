<?php
	use App\Models\Track;
	use App\Models\Artist;
?>
@extends('index')

@section('dash_content')
<!--================================= Category content ======================================-->
<div class="dash-content" id="category">
    <!--=============== Country Box ================-->
    <div class="overview">
        <div class="title-bar">
            <a href="#">
                <span class="text">Country</span>
            </a>
        </div>
        <div class="box-country">
            <div class="box-country-container">
                @foreach($countries as $row)
                    <div class="box-country-content">
                        <div class="content"> 
                            <div class="text-header">
                                <div class="img">
                                    <img src="/storage/uploads/countries/{{$row->pf_country}}" alt="">
                                </div>
                                <h1>{{$row->name_country}}</h1>
                                @php
									$track_count = Track::where('id_country', $row->id)->count();
									$artist_count = Artist::where('id_country', $row->id)->count(); 
								@endphp
                                <ul>
                                    <li>{{$track_count}} Songs</li>
                                    <li>{{$artist_count}} Artists</li>
                                    <!--<li>2 Albums</li>-->
                                </ul>   
                            </div>
                        </div>       
                    </div> 
                @endforeach  
            </div>
        </div>
    </div>
    <!--===============================================-->
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
                                    <span class="material-icons-round">play_arrow</span>
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