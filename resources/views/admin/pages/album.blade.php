<?php
  	use App\Models\Track;
?>
@extends('admin.index')
@section('content')
<div class="box-album-container">
  	@if(Session::has('alert'))
            <div class="message">
                {{Session::get('alert')}}
            </div>
    @endif
  	<div class="box-top">
		<div class="add-album-link">
			<a href="{{url('/admin_stereo/add_album')}}">
			<span>+Add Album</span>
			</a>
		</div>

		<div class="search-box">
			<form action="/admin_stereo/search_album">
				<input type="text"  placeholder="search here..." name="search" id="">
				<button type="submit">Search</button>
			</form>
		</div>
    
  	</div>
	<div class="album-table">
    	<table>
			<tr>
				<th>#</th>
				<th>Image</th>
				<th>Albums</th>
				<th>Artists</th>
				<th>Tracks</th>
				<th>Date Created</th>
				<th>
					<span class="material-icons-round link-icon">edit</span>
					<span class="material-icons-round link-icon">delete</span>
				</td> 
			</tr>
        	@foreach($albums as $row)
          	<tr>
				<td>{{$count++}}</td>
				<td>
					<img src="/storage/uploads/albums/{{$row->pf_album}}" class="album-img">
				</td>
				<td>{{$row->name_album}}</td>
				<td>{{$row->artist_album->name_artist}}</td>
					<!--artist_album is a relationship between table_artist and table_album-->
					@php
						$track_count = Track::where('id_album', $row->id)->count(); 
					@endphp
				<td>{{$track_count}}</td>
				<td>{{$row->created_at->diffForHumans()}}</td>
				<td>
					<a href="{{url('/admin_stereo/edit_album/'.$row->id)}}"><span class="edit">Edit</span></a>
					<a href="{{url('/admin_stereo/delete_album/'.$row->id)}}"><span class="delete">Delete</span></a>
				</td>
			</tr>
        	@endforeach()
    	</table>
  	</div>
</div>
@endsection()