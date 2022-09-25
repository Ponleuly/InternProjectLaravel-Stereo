<?php
	use App\Models\Follower;
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
		<div class="search-box">
			<form action="{{url('/admin_stereo/follower_search')}}">
				<input type="text"  placeholder="search here..." name="search">
				<button type="submit">Search</button>
			</form>
		</div>
	</div>
  	<div class="artist-table">
		<table>
			<tr>
			<th style="width: 5%">#</th>
			<th style="width: 15%">Image</th>
			<th style="width: 30%">Artists</th>
			<th style="width: 25%">Date Created</th>
			<th style="width: 25%">Following by (user)</th>
			</tr>
			@foreach($artists as $row)
				<tr>
					<td>{{$count++}}</td>
					<td>
						<img src="/storage/uploads/artists/{{$row->pf_artist}}" class="artist-img">
					</td>
					<td>{{$row->name_artist}}</td>
					<td>{{$row->created_at->diffForHumans()}}</td>
                    @php
                        $follower_count = Follower::where('id_artist', $row->id)->count();
                    @endphp
					<td>{{$follower_count}}</td>					
				</tr>
			@endforeach()
		</table>
  	</div>
</div>
@endsection()