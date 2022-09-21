<?php
	use App\Models\Track;
	use App\Models\Playlist_Track;
?>
@extends('admin.index')
@section('content')
<div class="box-playlist-container">
	@if(Session::has('alert'))
		<div class="message">
			{{Session::get('alert')}}
		</div>
	@endif
  	<div class="box-top">
		<div class="add-playlist-link">
			<a href="{{url('/admin_stereo/add_playlist')}}">
				<span>+Add playlist</span>
			</a>
		</div>
		<div class="search-box">
			<form action="/admin_stereo/search_playlist">
				<input type="text"  placeholder="search here..." name="search">
				<button type="submit">Search</button>
			</form>
		</div>
	</div>
  	<div class="playlist-table">
		<table>
			<tr>
				<th>#</th>
				<th>Image</th>
				<th>playlists</th>
				<th>Tracks</th>
				<th>Created By</th>
				<th>Date Created</th>
				<th>
					<span class="material-icons-round link-icon">edit</span>
					<span class="material-icons-round link-icon">delete</span>
				</td> 
			</tr>
			@foreach($playlists as $row)
				<tr>
					<td>{{$count++}}</td>
					<td>
						<div class="playlist-img">
							<img src="/storage/uploads/playlists/{{$row->pf_playlist}}" alt="{{$row->pf_playlist}}">
						</div>
					</td>
					<td>{{$row->name_playlist}}</td>
						@php
							$track_count = Playlist_Track::where('id_playlist', $row->id)->count(); 
						@endphp
					<td>{{$track_count}}</td>
					<td>{{$row->playlist_user->username}}</td>
					<td>{{$row->created_at->diffForHumans()}}</td>
					<td>
						<a href="{{url('/admin_stereo/edit_playlist/'.$row->id)}}">
							<span class="edit">Edit</span>
						</a>
						<a href="{{url('/admin_stereo/delete_playlist/'.$row->id)}}">
							<span class="delete">Delete</span>
						</a>
					</td>
				</tr>
			@endforeach()
		</table>
  	</div>
</div>
@endsection()
