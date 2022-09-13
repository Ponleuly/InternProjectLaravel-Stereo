@extends('admin.index')
@section('content')
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Open+Sans:ital,wght@1,300&family=Roboto:ital,wght@0,300;0,500;1,400&display=swap" rel="stylesheet">
<style>
	.box-user-container{
		display: flex;
		flex-direction: column;
		font-family: 'Roboto', sans-serif;
  	}
	.box-user-container .message{
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
  	.box-user-container .box-top{
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
	.box-top .add-user-link{
		width: 150px;
		height: 50px;
		background: DodgerBlue;
		text-align: center;
		padding: 10px 0;
		border-radius: 5px;
		border: 2px solid DodgerBlue;
	}
	.add-user-link a{
		font-size: 18px;
		font-weight: 600;
		color: white;
		text-decoration: none;
		font-family: 'Roboto', sans-serif;
	}
	.add-user-link:hover{
		background: white;
	}
	.add-user-link:hover a{
		color: DodgerBlue;
	}
	.box-user-container .user-table{
		width: calc(100% - 40px);
		margin: 0 auto;
		font-family: 'Roboto', sans-serif;
	}
	.box-user-container .user-table table{
		border-collapse: collapse;
		width: 100%;
		text-transform: capitalize;
	}
	.user-table td:nth-child(1) {
		width: 5%;
		text-align: center;
	}
	.user-table td:nth-child(2) {
		width: 10%;
		text-align: center;
	}
	.user-table td:nth-child(3) {
		width: 30%;
		text-align: start;
	}
	.user-table td:nth-child(4) {
		width: 5%;
		text-align: center;
	}
	.user-table td:nth-child(5) {
		width: 30%;
		text-align: center;
	}
	.user-table td:nth-child(6) {
		text-align: center;
	}
	.user-table th:nth-child(2){
		text-align: center;
	}
	.user-table th:nth-child(3){
		text-align: start;
	}
	.user-table th{
		border-bottom: 1px solid #ddd;
		padding: 13px;
	}
	.user-table td{
		border-bottom: 1px solid #ddd;
		font-size: 18px;
		padding-top: 5px;
		padding-bottom: 2px;
	}
	.user-table th {
		padding-top: 12px;
		padding-bottom: 12px;
		text-align: center;
		background-color: #0d3073;
		color: white;
		font-family: 'Roboto', sans-serif;
		font-size: 18px;
		font-weight: 500;
	}
	.user-table tr:hover {
		background-color: #ddd;}
	.user-table a{
		text-decoration: none;
	}
	.user-table .edit{
		color: white;
		background:  DodgerBlue;
		padding: 5px 15px;
		border-radius: 5px;
		font-size: 16px;
		border: 1px solid DodgerBlue;
	}
	.user-table .delete{
		color: white;
		background: ;
		padding: 5px 15px;
		border-radius: 5px;
		background:  red;
		font-size: 16px;
		border: 1px solid red;
	}
	.user-table .edit:hover{
		color: DodgerBlue;
		background: white;
	}
	.user-table .delete:hover{
		color: red;
		background: white;
	}
	.user-table .user-img img{
		width: 60px;
		height: 60px;
		object-fit: cover;
		margin-top: 4px;
		background-image: url("/frontend/images/avatar.jpg");
        background-repeat: no-repeat;
        background-size: cover;
	}
</style>

<div class="box-user-container">
	@if(Session::has('alert'))
		<div class="message">
			{{Session::get('alert')}}
		</div>
	@endif
  	<div class="box-top">
		<div class="search-box">
			<form action="/admin_stereo/search_user">
				<input type="text"  placeholder="search here..." name="search">
				<button type="submit">Search</button>
			</form>
		</div>
	</div>
  	<div class="user-table">
		<table>
			<tr>
			<th>#</th>
			<th>Avatar</th>
			<th>Username</th>
			<th>Email</th>
			<th>Date Registered</th>
			<th>
				<span class="material-icons-round link-icon">edit</span>
				<span class="material-icons-round link-icon">delete</span>
			</td> 
			</tr>
			@foreach($users as $row)
				<tr>
					<td>{{$count++}}</td>
					<td>
						<div class="user-img">
							<img src="/storage/uploads/avatars/{{$row->avatar}}" alt="">
						</div>
					</td>
					<td>{{$row->username}}</td>
					<td>{{$row->email}}</td>
					<td>{{$row->created_at->diffForHumans()}}</td>
					<td>
						<a href="{{url('/admin_stereo/remove_user/'.$row->id)}}">
							<span class="delete">Delete</span>
						</a>
					</td>
				</tr>
			@endforeach()
		</table>
  	</div>
</div>
@endsection()