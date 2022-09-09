@extends('admin.index')
@section('content')
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Open+Sans:ital,wght@1,300&family=Roboto:ital,wght@0,300;0,500;1,400&display=swap" rel="stylesheet">
<style>
	.box-track-container{
		display: flex;
		flex-direction: column;
		font-family: 'Roboto', sans-serif;
	}
  	.box-track-container .message{
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
  	.box-track-container .box-top{
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
	.box-top .add-track-link{
		width: 150px;
		height: 50px;
		background: #DC143C;
		text-align: center;
		padding: 10px 0;
		border-radius: 5px;
		border: 2px solid #DC143C;
	}
	.add-track-link a{
		font-size: 18px;
		font-weight: 600;
		color: white;
		text-decoration: none;
		font-family: 'Roboto', sans-serif;
	}
	.add-track-link:hover{
		background: white;
	}
	.add-track-link:hover a{
		color: #DC143C;
	}
		
    .box-track-container .track-table{
		width: calc(100% - 40px);
		margin: 0 auto;
		font-family: 'Roboto', sans-serif;
    }
    .box-track-container .track-table table{
		border-collapse: collapse;
		width: 100%;
		text-transform: capitalize;
    }
    .track-table th:nth-child(1), td:nth-child(1){
		width: 5%;
		text-align: center;
    }
    .track-table th:nth-child(2), td:nth-child(2) {
		width: 10%;
		text-align: center;
    }
    .track-table th:nth-child(3), td:nth-child(3) {
		width: 20%;
		text-align: start;
    }
    .track-table th:nth-child(4), td:nth-child(4) {
        width: 15%;
        text-align: center;
    }
    .track-table th:nth-child(5), td:nth-child(5) {
        width: 15%;
        text-align: center;
    }
    .track-table th:nth-child(6), td:nth-child(6) {
        width: 20%;
        text-align: center;
    }
    .track-table th:nth-child(7), td:nth-child(7) {
        text-align: center;
    }
    .track-table th{
		border-bottom: 1px solid #ddd;
		padding: 13px;
    }
    .track-table td{
		border-bottom: 1px solid #ddd;
		font-size: 18px;
		padding-top: 5px;
		padding-bottom: 2px;
    }
    
    .track-table th {
		padding-top: 12px;
		padding-bottom: 12px;
		text-align: center;
		background-color: #0d3073;
		color: white;
		font-family: 'Roboto', sans-serif;
		font-size: 18px;
		font-weight: 500;
    }
    .track-table tr:hover {
		background-color: #ddd;
	}
    .track-table a{
    	  text-decoration: none;
    }
    .track-table .edit{
		color: white;
		background:  DodgerBlue;
		padding: 5px 15px;
		border-radius: 5px;
		font-size: 16px;
		border: 1px solid DodgerBlue;
    }
    .track-table .delete{
		color: white;
		background: ;
		padding: 5px 15px;
		border-radius: 5px;
		background:  red;
		font-size: 16px;
		border: 1px solid red;
    }
    .track-table .edit:hover{
		color: DodgerBlue;
		background: white;
    }
    .track-table .delete:hover{
		color: red;
		background: white;
    }
    .track-table .track-img{
		width: 60px;
		height: 60px;
		object-fit: cover;
		margin-top: 4px;	
    }
</style>
<div class="box-track-container">
    @if(Session::has('alert'))
        <div class="message">
            {{Session::get('alert')}}
        </div>
    @endif
  	<div class="box-top">
		<div class="add-track-link">
			<a href="{{url('/admin_stereo/add_track')}}">
			<span>+Add Track</span>
			</a>
		</div>

		<div class="search-box">
			<form action="{{url('/admin_stereo/search_track')}}">
				<input type="text"  placeholder="search here..." name="search" value="{{$search_text}}">
				<button type="submit">Search</button>
			</form>
		</div>
  	</div>
  	<div class="track-table">
		<table>
			<tr>
				<th>#</th>
				<th>Image</th>
				<th>tracks</th>
				<th>Artists</th>
				<th>Albums</th>
				<th>Date Created</th>
				<th>
					<span class="material-icons-round link-icon">edit</span>
					<span class="material-icons-round link-icon">delete</span>
				</td> 
			</tr>
			@foreach($search_track as $row)
			<tr>
				<td>{{$count++}}</td>
				<td>
					<img src="/storage/uploads/tracks/{{$row->pf_track}}" class="track-img">
				</td>
				<td>{{$row->name_track}}</td>
				<td>{{$row->artist_track->name_artist}}</td>
				<td>{{$row->album_track->name_album}}</td>
				<td>{{$row->created_at->diffForHumans()}}</td>
				<td>
					<a href="{{url('/admin_stereo/edit_track/'.$row->id)}}">
						<span class="edit">Edit</span>
					</a>
					<a href="{{url('/admin_stereo/delete_track/'.$row->id)}}">
						<span class="delete">Delete</span>
					</a>
				</td>
			</tr>
			@endforeach()
		</table>
  	</div>
</div>
@endsection()