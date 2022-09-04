<?php
  	use App\Models\Track;
?>
@extends('admin.index')
@section('content')
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Open+Sans:ital,wght@1,300&family=Roboto:ital,wght@0,300;0,500;1,400&display=swap" rel="stylesheet">
<style>
	.box-album-container{
		display: flex;
		flex-direction: column;
		font-family: 'Roboto', sans-serif;
	}
  	.box-album-container .message{
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
	.box-album-container .box-top{
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
	.search-box input:focus, button{
		border: none;
	}
	.search-box button:hover{
		background: #fff;
		color: #0d3073;
	}
	.search-box input:focus, button{
		border: none;
	}
	.box-top .add-album-link{
		width: 150px;
		height: 50px;
		background: #0d3073;
		text-align: center;
		padding: 10px 0;
		border-radius: 5px;
		border: 2px solid #0d3073;
	}
	.add-album-link a{
		font-size: 18px;
		font-weight: 600;
		color: white;
		text-decoration: none;
		font-family: 'Roboto', sans-serif;
	}
	.add-album-link:hover{
		background: white;
	}
	.add-album-link:hover a{
		color: #0d3073;
	}
	
	.box-album-container .album-table{
		width: calc(100% - 40px);
		margin: 0 auto;
		font-family: 'Roboto', sans-serif;
	}
	.box-album-container .album-table table{
		border-collapse: collapse;
		width: 100%;
		text-transform: capitalize;
	}
	.album-table th:nth-child(1), td:nth-child(1){
		width: 5%;
		text-align: center;
	}
	.album-table th:nth-child(2), td:nth-child(2) {
		width: 10%;
		text-align: center;
	}
	.album-table th:nth-child(3), td:nth-child(3) {
		width: 20%;
		text-align: start;
	}
	.album-table th:nth-child(4), td:nth-child(4) {
		width: 15%;
		text-align: center;
	}
	.album-table th:nth-child(5), td:nth-child(5) {
		width: 5%;
		text-align: center;
	}
	.album-table th:nth-child(6), td:nth-child(6) {
		width: 20%;
		text-align: center;
	}
	.album-table th:nth-child(7), td:nth-child(7) {
		text-align: center;
	}
	.album-table th{
		border-bottom: 1px solid #ddd;
		padding: 13px;
	}
	.album-table td{
		border-bottom: 1px solid #ddd;
		font-size: 18px;
		padding-top: 5px;
		padding-bottom: 2px;
	}
	.album-table th {
		padding-top: 12px;
		padding-bottom: 12px;
		text-align: center;
		background-color: #0d3073;
		color: white;
		font-family: 'Roboto', sans-serif;
		font-size: 18px;
		font-weight: 500;
	}
	.album-table tr:hover {
		background-color: #ddd;
	}
	.album-table a{
		text-decoration: none;
	}
	.album-table .edit{
		color: white;
		background:  DodgerBlue;
		padding: 5px 15px;
		border-radius: 5px;
		font-size: 16px;
		border: 1px solid DodgerBlue;
	}
	.album-table .delete{
		color: white;
		background: ;
		padding: 5px 15px;
		border-radius: 5px;
		background:  red;
		font-size: 16px;
		border: 1px solid red;
    }
    .album-table .edit:hover{
		color: DodgerBlue;
		background: white;
    }
    .album-table .delete:hover{
		color: red;
		background: white;
    }
    .album-table .album-img{
		width: 60px;
		height: 60px;
		object-fit: cover;
		margin-top: 4px;	
    }
</style>
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
			<form action="{{url('/admin_stereo/search_album')}}">
				<input type="text"  placeholder="search here..." name="search" value="{{$search_text}}">
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
        	@foreach($search_album as $row)
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
					<a href="{{url('/admin_stereo/edit_album/'.$row->name_album)}}"><span class="edit">Edit</span></a>
					<a href="{{url('/admin_stereo/delete_album/'.$row->name_album)}}"><span class="delete">Delete</span></a>
				</td>
			</tr>
        	@endforeach()
    	</table>
  	</div>
</div>
@endsection()