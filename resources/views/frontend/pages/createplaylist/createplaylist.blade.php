@extends('index')
@section('dash_content')

<!--======= Create playlist content ========-->
<div class="dash-content" id="playlist">
    <!--Pop up form for editing createplaylist-->
    <input type="checkbox" id="show">   
    <div class="container">
        <label for="show" class="close-btn fas fa-times" title="close"></label>
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

    <div class="createplaylist-wrapper">
        <div class="createplaylist-header">
            <div class="createplaylist-header-container">
                <img src="/storage/uploads/playlists/{{$createplaylist->pf_playlist}}" alt="{{$createplaylist->pf_playlist}}">
                <div class="createplaylist-text">
                    <span>PLAYLIST</span>
                    <div class="edit-createplaylist">
                        <h1>{{$createplaylist->name_playlist}}</h1>
                        <label for="show" class="show-btn">
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

    <div class="createplaylist-dash">
        <div class="dash-top">
            <div class="dash-top-1">
                <span class="material-icons-round">play_arrow</span>
            </div>
            <div class="dash-top-2">
                <span class="material-icons-round">more_horiz</span>
            </div>    
        </div>    
    </div>

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
                        <div class="icon">
                            <span class="material-icons-round">access_time</span>
                        </div>
                    </div>

                    <div class="row-content-table-createplaylist">
                        <table>
                            
                                <tr>
                                    <td>
                                        <ul>
                                            <li>
                                                <div class="num-order">
                                                    <span class="number">1</span>
                                                    <span class="material-icons-round play-up">play_arrow</span>
                                                </div>                                         
                                            </li>
                                            <li>
                                                <div class="img">
                                                    <img src="/storage/uploads/users/admin.jpg" alt="">
                                                </div>                                          
                                            </li>
                                            <li class="text-overflow">
                                                <div class="song-details">
                                                    <span class="song-title">perfect</span>
                                                        @php
                                                            /*
                                                            $artist_track = Track::where('id', $row->id_track)->first();
                                                            */
                                                        @endphp
                                                    <a href="{{url('/artists/artists_view/')}}">
                                                        <span class="artist-name">
                                                            Ed Sheeran
                                                        </span>
                                                    </a>
                                                </div>   
                                            </li>
                                        </ul>
                                    </td>

                                    <td> 
                                        <div class="song-album">
                                            <a href="{{url('/albums/albums_view/')}}">
                                                <span>Multiply</span>
                                            </a>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="song-duration">
                                            <span class="material-icons-round">favorite</span>
                                            <p>3:45</p>
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
@endsection()