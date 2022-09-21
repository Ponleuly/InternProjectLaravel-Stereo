@extends('admin.index')
@section('content')

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