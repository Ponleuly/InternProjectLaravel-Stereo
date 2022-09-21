<?php
	use App\Models\Track;
	use App\Models\Artist;
?>
@extends('admin.index')
@section('content') 
<div class="box-country-container">
	@if(Session::has('alert'))
		<div class="message">
			{{Session::get('alert')}}
		</div>
	@endif
	<div class="box-top">
		<div class="add-country-link">
			<a href="{{url('/admin_stereo/add_country')}}">
				<span>+Add Country</span>
			</a>
		</div>
		<div class="search-box">
			<form action="{{url('/admin_stereo/search_country/')}}">
				<input type="text"  placeholder="Search here..." name="search" >
				<button type="submit">Search</button>
			</form>
		</div>
	</div>
	<div class="country-table">
		<table>
				<tr>
					<th>#</th>
					<th>Countries</th>
					<th>Tracks</th>
					<th>Artists</th>
					<th>Date Created</th>
					<th>
						<span class="material-icons-round link-icon">edit</span>
						<span class="material-icons-round link-icon">delete</span>
					</td>  
				</tr>
			@foreach ($countries as $row)
				<tr>
					<td>{{$count++}}</td>
					<td>{{$row->name_country}}</td>
						@php
							$track_count = Track::where('id_country', $row->id)->count();
							$artist_count = Artist::where('id_country', $row->id)->count(); 
						@endphp
					<td>{{$track_count}}</td>
					<td>{{$artist_count}}</td>
					<td>{{$row->created_at->diffForHumans()}}</td>
					<td>
						<a href="{{url('/admin_stereo/edit_country/'.$row->id)}}"><span class="edit">Edit</span></a>
						<a href="{{url('/admin_stereo/delete_country/'.$row->id)}}"><span class="delete">Delete</span></a>
					</td>  
				</tr>
			@endforeach
		</table>
	</div>
</div>
@endsection()