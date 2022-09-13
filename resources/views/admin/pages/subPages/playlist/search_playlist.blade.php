<?php
	use App\Models\Track;
	use App\Models\Playlist_Track;

?>
@extends('admin.index')
@section('content')
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Open+Sans:ital,wght@1,300&family=Roboto:ital,wght@0,300;0,500;1,400&display=swap" rel="stylesheet">
<style>
	.box-playlist-container{
		display: flex;
		flex-direction: column;
		font-family: 'Roboto', sans-serif;
  	}
	.box-playlist-container .message{
		width: calc(100% - 40px);
		height: 50px;
		margin: 20px 20px 0 20px;
		float: right;
		color: #000;
		background: #ddffdd;
		padding: 5px 15px;
		border-radius: 5px;
		font-size: 25px;
		font-family: 'Open Sans', sans-serif;
	}
  	.box-playlist-container .box-top{
		display: flex;
		flex-direction: row;
		margin: 20px;
		justify-content: space-between;
  	}
  	.box-top .search-box form{
		display: flex;
		flex-direction: row;
		width: 600px;
		text-transform: capitalize;
  	}
  	.search-box input{
		width: 100%;
		height: 50px;
		border: 2px solid #0d3073;
		padding: 0 15px;
		font-size: 18px;
		font-weight: 500;
		font-family: 'Roboto', sans-serif;
		text-transform: capitalize;
		border-radius: 5px;
  	}
  	.search-box button{
		color: white;
		background: #0d3073;
		font-size: 16px;
		width: 100px;
		height: 50px;
		padding: 0 25px;
		border: none;
		border-left: none;
		cursor: pointer;
		margin-left: 15px;
		font-family: 'Roboto', sans-serif;
		border-radius: 5px;
		border: 2px solid #0d3073;
	}
	.search-box button:hover{
		background: #fff;
		color: #0d3073;
	}
	.search-box input:focus, button{
		border: none;
	}
	.box-top .add-playlist-link{
		width: 150px;
		height: 50px;
		background: DodgerBlue;
		text-align: center;
		padding: 10px 0;
		border-radius: 5px;
		border: 2px solid DodgerBlue;
	}
	.add-playlist-link a{
		font-size: 18px;
		font-weight: 600;
		color: white;
		text-decoration: none;
		font-family: 'Roboto', sans-serif;
	}
	.add-playlist-link:hover{
		background: white;
	}
	.add-playlist-link:hover a{
		color: DodgerBlue;
	}
	.box-playlist-container .playlist-table{
		width: calc(100% - 40px);
		margin: 0 auto;
		font-family: 'Roboto', sans-serif;
	}
	.box-playlist-container .playlist-table table{
		border-collapse: collapse;
		width: 100%;
		text-transform: capitalize;
	}
	.playlist-table td:nth-child(1) {
		width: 5%;
		text-align: center;
	}
	.playlist-table td:nth-child(2) {
		width: 10%;
		text-align: center;
	}
	.playlist-table td:nth-child(3) {
		width: 30%;
		text-align: start;
	}
	.playlist-table td:nth-child(4) {
		width: 5%;
		text-align: center;
	}
	.playlist-table td:nth-child(5) {
		width: 30%;
		text-align: center;
	}
	.playlist-table td:nth-child(6) {
		text-align: center;
	}
	.playlist-table th:nth-child(2){
		text-align: center;
	}
	.playlist-table th:nth-child(3){
		text-align: start;
	}
	.playlist-table th{
		border-bottom: 1px solid #ddd;
		padding: 13px;
	}
	.playlist-table td{
		border-bottom: 1px solid #ddd;
		font-size: 18px;
		padding-top: 5px;
		padding-bottom: 2px;
	}
	.playlist-table th {
		padding-top: 12px;
		padding-bottom: 12px;
		text-align: center;
		background-color: #0d3073;
		color: white;
		font-family: 'Roboto', sans-serif;
		font-size: 18px;
		font-weight: 500;
	}
	.playlist-table tr:hover {
		background-color: #ddd;}
	.playlist-table a{
		text-decoration: none;
	}
	.playlist-table .edit{
		color: white;
		background:  DodgerBlue;
		padding: 5px 15px;
		border-radius: 5px;
		font-size: 16px;
		border: 1px solid DodgerBlue;
	}
	.playlist-table .delete{
		color: white;
		background: ;
		padding: 5px 15px;
		border-radius: 5px;
		background:  red;
		font-size: 16px;
		border: 1px solid red;
	}
	.playlist-table .edit:hover{
		color: DodgerBlue;
		background: white;
	}
	.playlist-table .delete:hover{
		color: red;
		background: white;
	}
	.playlist-table .playlist-img img{
		width: 60px;
		height: 60px;
		object-fit: cover;
		margin-top: 4px;
		background-image: url("/frontend/images/music_avatar1.jpg");
        background-repeat: no-repeat;
        background-size: cover;
	}
</style>

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
				<input type="text"  placeholder="search here..." name="search"  value="{{$search_text}}">
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
				<th>Date Created</th>
				<th>
					<span class="material-icons-round link-icon">edit</span>
					<span class="material-icons-round link-icon">delete</span>
				</td> 
			</tr>
			@foreach($search_playlist as $row)
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
