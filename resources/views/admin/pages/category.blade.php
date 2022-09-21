<?php
  use App\Models\Track;
?>
@extends('admin.index')
@section('content')
<div class="box-category-container">
		@if(Session::has('alert'))
			<div class="message">
				{{Session::get('alert')}}
			</div>
		@endif
		<div class="box-top">
			<div class="add-category-link">
				<a href="{{url('/admin_stereo/add_category')}}">
					<span>+Add Category</span>
				</a>
			</div>
			<div class="search-box">
				<form action="{{url('/admin_stereo/search_category')}}">
					<input type="text"  placeholder="Enter category name here..." name="search" id="">
					<button type="submit">Search</button>
				</form>
			</div>
		</div>
		<div class="category-table">
			<table>
				<tr>
					<th>#</th>
					<th>Categories</th>
					<th>Tracks</th>
					<th>Date Created</th>
					<th> 
						<span class="material-icons-round link-icon">edit</span>
						<span class="material-icons-round link-icon">delete</span>
					</th>
				</tr>
			
				@foreach($categories as $row)
				<tr>
					<td>{{$count++}}</td>
					<td>{{$row->name_category}}</td>
						@php
							$track_count = Track::where('id_category', $row->id)->count(); 
						@endphp
					<td>{{$track_count}}</td>
					<td>{{$row->created_at->diffForHumans()}}</td>
					<td>
						<a href="{{url('/admin_stereo/edit_category/'.$row->id)}}">
							<span class="edit">Edit</span>
						</a>
						<a href="{{url('/admin_stereo/delete_category/'.$row->id)}}">
							<span class="delete">Delete</span>
						</a>
					</td>
				@endforeach()
			</table>
		</div>
</div>
@endsection()