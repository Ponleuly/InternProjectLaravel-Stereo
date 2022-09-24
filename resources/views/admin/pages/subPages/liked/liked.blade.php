<?php
	use App\Models\Liked;
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
			<form action="/admin_stereo/search_artist">
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
			<th style="width: 30%">Tracks</th>
			<th style="width: 25%">Date Created</th>
			<th style="width: 25%">Liked by (user)</th>
			</tr>
			@foreach($tracks as $row)
				<tr>
					<td>{{$count++}}</td>
					<td>
						<img src="/storage/uploads/tracks/{{$row->pf_track}}" class="artist-img">
					</td>
					<td>{{$row->name_track}}</td>
					<td>{{$row->created_at->diffForHumans()}}</td>
                    @php
                        $liked_count = Liked::where('id_track', $row->id)->count();
                    @endphp
					<td>{{$liked_count}}</td>					
				</tr>
			@endforeach()
		</table>
  	</div>
</div>
@endsection()