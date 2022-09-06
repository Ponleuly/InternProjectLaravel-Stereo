<?php
	use App\Models\Track;
	use App\Models\Artist;
	use App\Models\Album;

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
    <!--=================== Category =======================-->
    @foreach ($categories as $row)
        <div class="overview">
            <div class="title-bar">
                <a href="#">
                    <span class="text">{{$row->name_category}}</span>
                </a>
            </div>
            <div class="box">
                <div class="box-container">
                    @php
						$tracks = Track::where('id_category', $row->id)->paginate(7);
						$albums = Album::where('id_category', $row->id)->paginate(7);
						$artists = Artist::where('id_category', $row->id)->paginate(7);
					@endphp

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
                                <a href="{{url('/artists/artists_view/'.$row->artist_track->name_artist)}}">
                                    <span class="singer-name">{{$row->artist_track->name_artist}}</span>
                                </a>
                            </div>
                        </div>
                    @endforeach  

                    @foreach ($albums as $row)
                        <div class="box-content">
                            <div class="box-single">
                                <div class="img-popup-container">
                                    <a href="{{url('/albums/albums_view/'.$row->name_album)}}">
                                        <img src="/storage/uploads/albums/{{$row->pf_album}}" alt="">
                                    </a>
                                    <a href="">
                                        <div class="play-button-pop-up">
                                            <span class="material-icons-round">play_arrow</span>
                                        </div>
                                    </a>
                                </div>
                                <a href="{{url('/albums/albums_view/'.$row->name_album)}}">
                                    <span class="song-title">{{$row->name_album}}</span>
                                </a>
                                <a href="{{url('/albums/albums_view/'.$row->name_album)}}">
                                    <span class="singer-name">Album</span>
                                </a>
                            </div>
                        </div>
                    @endforeach  

                    @foreach ($artists as $row)
                        <div class="box-content">
                            <div class="box-single">
                                <div class="img-popup-container">
                                    <a href="{{url('/artists/artists_view/'.$row->name_artist)}}">
                                        <img src="/storage/uploads/artists/{{$row->pf_artist}}" alt="">
                                    </a>
                                    <a href="">
                                        <div class="play-button-pop-up">
                                            <span class="material-icons-round">play_arrow</span>
                                        </div>
                                    </a>
                                </div>
                                <a href="{{url('/artists/artists_view/'.$row->name_artist)}}">
                                    <span class="song-title">{{$row->name_artist}}</span>
                                </a>
                                <a href="{{url('/artists/artists_view/'.$row->name_artist)}}">
                                    <span class="singer-name">Artist</span>
                                </a>
                            </div>
                        </div>
                    @endforeach  

                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection()