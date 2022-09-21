<?php
	use App\Models\Track;
?>
@extends('admin.index')
@section('content')
<div class="box-artist-container">
	@if(Session::has('alert'))
		<div class="message">
			{{Session::get('alert')}}
		</div>
	@endif
  	<div class="box-top">
		<div class="add-artist-link">
			<a href="{{url('/admin_stereo/add_artist')}}">
				<span>+Add Artist</span>
			</a>
		</div>
		<div class="search-box">
			<form action="/admin_stereo/search_artist">
				<input type="text"  placeholder="search here..." name="search">
				<button type="submit">Search</button>
			</form>
		</div>
	</div>
  	<div class="artist-table">
		<table>
			<tr>
			<th>#</th>
			<th>Image</th>
			<th>Artists</th>
			<th>Tracks</th>
			<th>Date Created</th>
			<th>
				<span class="material-icons-round link-icon">edit</span>
				<span class="material-icons-round link-icon">delete</span>
			</td> 
			</tr>
			@foreach($artists as $row)
				<tr>
					<td>{{$count++}}</td>
					<td>
						<img src="/storage/uploads/artists/{{$row->pf_artist}}" class="artist-img">
					</td>
					<td>{{$row->name_artist}}</td>
						@php
							$track_count = Track::where('id_artist', $row->id)->count(); 
						@endphp
					<td>{{$track_count}}</td>
					<td>{{$row->created_at->diffForHumans()}}</td>
					<td>
						<a href="{{url('/admin_stereo/edit_artist/'.$row->id)}}">
							<span class="edit">Edit</span>
						</a>
						<a href="{{url('/admin_stereo/delete_artist/'.$row->id)}}">
							<span class="delete">Delete</span>
						</a>
					</td>
				</tr>
			@endforeach()
		</table>
  	</div>
</div>
@endsection()