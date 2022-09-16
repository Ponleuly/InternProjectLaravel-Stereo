<?php
  	use App\Models\Playlist_Track;
  	use App\Models\Artist;
  	use App\Models\Track;
  	use App\Models\Liked;
?>
@extends('index')
@section('dash_content') 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<!--======= Create playlist content ========-->
<div class="dash-content" id="playlist">
    <!--============================== Header playlist ==============================-->
    <div class="createplaylist-wrapper">
        <div class="createplaylist-header">
            <div class="createplaylist-header-container">
                @if ($track_count > 0)
                    @if($createplaylist->pf_playlist == null)
                        <img src="/storage/uploads/tracks/{{$first_track->playlist_track->pf_track;}}" alt="{{$first_track->playlist_track->pf_track;}}">
                    @else 
                        <img src="/storage/uploads/playlists/{{$createplaylist->pf_playlist}}" alt="{{$createplaylist->pf_playlist}}">
                    @endif 
                @else               
                    <img src="/storage/uploads/playlists/{{$createplaylist->pf_playlist}}" alt="{{$createplaylist->pf_playlist}}">
                @endif    
                <div class="createplaylist-text">
                    <span>PLAYLIST</span>
                    <div class="edit-createplaylist">
                        <h1>{{$createplaylist->name_playlist}}</h1>
                        <label for="show-edit-details" class="show-edit-btn">
                            <span class="material-icons-round">edit</span>
                        </label>
                    </div>
                    <div>
                        <span>{{Auth::user()->username}}</span>
                        <span>- {{$track_count}} songs</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============================== Play button playlist ==================================-->
    <div class="createplaylist-dash">
        <div class="dash-top">
            <div class="dash-top-1">
                <span class="material-icons-round">play_arrow</span>
            </div>
            <div class="dash-top-2">
                <label for="show-option" class="show-option-btn">
                    <span class="material-icons-round">more_horiz</span>
                </label>
            </div>    
        </div>    
    </div>
    <!--============================== Table playlist ==================================-->
    <div class="createplaylist-dash">
        <div class="createplaylist-dash-content">
            <div class="createplaylist-content-container">
                <div class="createplaylist-container-row">
                    <div class="createplaylist-row-header">
                        <div class="title">
                            <span>#</span>
                            <span>Title</span>
                        </div>
                        <div class="album">
                            <span>Album</span>
                        </div>
                        <div class="date">
                            <span>DATE ADDED</span>
                        </div>
                        <div class="icon">
                            <span class="material-icons-round">access_time</span>
                        </div>
                    </div>

                    <div class="row-content-table-createplaylist">
                        <!--=============== Table 1 ================-->
                        <table>
                            @foreach ($track_playlist as $row)                           
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
                                                    <img src="/storage/uploads/tracks/{{$row->playlist_track->pf_track}}" 
                                                        alt="{{$row->playlist_track->pf_track}}">
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
                                        <div class="date-added">
                                            <span>{{$row->created_at->diffForHumans()}}</span>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="song-duration">
                                            <!--Liked status for each track-->
                                            @php
                                                $id_user = Auth::user()->id;
                                                $liked_status = Liked::where('id_user', $id_user)->where('id_track', $row->id_track)->first();
                                                if ($liked_status) {
                                                    $liked = 1;
                                                } else {
                                                    $liked = 0;
                                                }
                                            @endphp
                                            <div class="liked-icon-link">
                                                <a href="{{url('add_liked/'.Auth::user()->id.'/'.$row->id_track)}}">
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
                                                <a href="{{url('remove_track/'.$createplaylist->id.'/'.$row->id_track)}}">
                                                    <span title="Remove from playlist">Remove</span>
                                                </a>
                                            </div>                                         
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        <div class="table-border"></div>
                        <div class="add-song-container">
                            <div class="find-song-text">
                                <span>Find more songs to your playlist</span>
                            </div>
                            <div class="add-song-search">
                                <input type="text" name="search" id="search" placeholder="Enter name song here...">
                            </div>
                            <!--===================== Recommend Songs ==============================-->
                            <!--<div class="table-border"></div>-->
                            <div class="recommend-song-text">
                                <span class="text-change">Recommended songs</span>
                            </div>
                            <div class="recommend-songs-table">
                                <!--=============== Table 2 ================-->
                                <table>
                                    <tbody id="recommend-table">
                                        @foreach($all_tracks as $row)
                                            <tr>
                                                <td>
                                                    <ul>
                                                        <li>
                                                            <div class="num-order">
                                                                <span class="number">{{$cnt++}}</span>
                                                                <span class="material-icons-round play-up">play_arrow</span>
                                                            </div>                                         
                                                        </li>
                                                        <li>
                                                            <div class="img">
                                                                <img src="/storage/uploads/tracks/{{$row->pf_track}}" alt="">
                                                            </div>                                          
                                                        </li>
                                                        <li class="text-overflow">
                                                            <div class="song-details">
                                                                <span class="song-title">{{$row->name_track}}</span>                                       
                                                                <a href="{{url('/artists/artists_view/'.$row->id_artist)}}">
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
                                                        <div class="add-myplaylist">
                                                            <a href="{{url('add_track/'.$createplaylist->id.'/'.$row->id)}}">
                                                                <span title="Add to playlist">Add</span>
                                                            </a>
                                                        </div>                                                   
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                <!--=============== Table 3 ================-->
                                    <tbody id="search-table">   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  

    <!--============================== Hidden Form ==================================-->
    <!--Pop up form for editing createplaylist-->
    <input type="checkbox" id="show-edit-details">   
    <div class="edit-details-container">
        <label for="show-edit-details" class="close-btn" title="close">
            <span class="material-icons-round">clear</span>
        </label>
        <div class="text">Edit details</div>
        <form action="{{url('edit_createplaylist/'.$createplaylist->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="data">
                <label>Playlist name</label>
                <input type="text" name="name_playlist" value="{{$createplaylist->name_playlist}}">
            </div>
            <div class="data">
                <label>Playlist Image</label>
                <input type="file" name="pf_playlist" accept="image/png, image/jpeg, image/jpg"
                             value="{{$createplaylist->pf_playlist}}">
            </div>
            <div class="save-btn">
                <button type="submit">Save</button>
            </div>
        </form>
    </div>
    <!--Pop up form for editing createplaylist-->
    <input type="checkbox" id="show-option"> 
    <div class="show-option-container">
        <div class="more-option-items">
            <a href="{{url('delete_createplaylist/'.$createplaylist->id)}}">
                <span>Delete playlist</span>
            </a>
            <a href="">
                <span>Add more songs</span>
            </a>
        </div>
    </div> 
    <!--============= Using Ajax to make live search ==============-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="text/javascript">      
	    $('#search').keyup(function(){
	        var _text = $(this).val();
            if(_text){
                $('#recommend-table').hide();
                $('#search-table').show();
                $('.text-change').replaceWith('Search result :');
            }else{
                $('#recommend-table').show();
                $('#search-table').hide();
                $('.text-change').replaceWith('Recommended songs');
            }
            var _pageURL = $(location).attr("href"); //get current url of page
            $.ajax({
                type:'get',
                //url:'{{route('search')}}',
                url:_pageURL, //url by the route where ajax is searching and send request to controller by that route
                data:{'search':_text},//search is a variable to pass in request and _text is input text
                success:function(data){
                    //console.log(data); // uncommend to see responed data in console       
                    $('#search-table').html(data); // display data respone for view in tbody name seach-table
                } 
            });     
        });     
	</script>
</div>
@endsection()