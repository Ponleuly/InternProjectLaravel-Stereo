@extends('admin.index')
@section('content')

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
				<input type="text"  placeholder="search here..." name="search" id="">
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
			@foreach($tracks as $row)
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