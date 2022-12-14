@extends('admin.index')
@section('content')
<div class="box-dashboard-container">
		<div class="content-display box8"><!-- style="width: calc((100% / 3 - 15px) * 2);"-->
			<div class="main-content">
				<div class="item-icon">
					<span class="material-icons-round">verified</span>
				</div>
				<div class="item-text">
					<div class="follower">
						<h1>{{$following_count}}</h1>
						<p>followers</p>
					</div>
					<span>{{$name_artist}}</span>
					<p>(The most followers artist)</p>
				</div>
			</div>
			<div class="bottom-link">
				<a href="/admin_stereo/follower">
					<span>More Details >></span>
				</a>
			</div>
      	</div>
		<div class="content-display box9">
			<div class="main-content">
				<div class="item-icon">
					<span class="material-icons-round">favorite</span>
				</div>
				<div class="item-text">
					<div class="follower">
						<h1>{{$liked_count}}</h1>
						<p>liked</p>
					</div>
					<span>{{$name_track}}</span>
					<p>(The most liked song)</p>
				</div>
			</div>
			<div class="bottom-link">
				<a href="/admin_stereo/liked_track">
					<span>More Details >></span>
				</a>
			</div>
      	</div>
		
		<div class="content-display box1">
			<div class="main-content">
				<div class="item-icon">
					<span class="material-icons-round">people</span>
					</div>
				<div class="item-text">
					<h1>{{$artists}}</h1>
					<span>Aritsts</span>
				</div>
			</div>
			<div class="bottom-link">
				<a href="{{url('/admin_stereo/artist')}}">
					<span>More Details >></span>
				</a>
			</div>
		</div>

      	<div class="content-display box2">
			<div class="main-content">
				<div class="item-icon">
					<span class="material-icons-round">album</span>
				</div>
				<div class="item-text">
					<h1>{{$albums}}</h1>
					<span>Albums</span>
				</div>
			</div>
			<div class="bottom-link">
				<a href="{{url('/admin_stereo/album')}}">
					<span>More Details >></span>
				</a>
			</div>
      	</div>

      	<div class="content-display box3">
			<div class="main-content">
				<div class="item-icon">
					<span class="material-icons-round">category</span>
				</div>
				<div class="item-text">
					<h1>{{$categories}}</h1>
					<span>Categories</span>
				</div>
			</div>
			<div class="bottom-link">
				<a href="{{url('/admin_stereo/category')}}">
					<span>More Details >></span>
				</a>
			</div>
      	</div>

		<div class="content-display box4">
			<div class="main-content">
				<div class="item-icon">
					<span class="material-icons-round">audiotrack</span>
				</div>
				<div class="item-text">
					<h1>{{$tracks}}</h1>
					<span>Tracks</span>
				</div>
			</div>
			<div class="bottom-link">
				<a href="{{url('/admin_stereo/track')}}">
					<span>More Details >></span>
				</a>
			</div>
		</div>

      	<div class="content-display box5">
			<div class="main-content">
				<div class="item-icon">
					<span class="material-icons-round">queue_music</span>
				</div>
				<div class="item-text">
					<h1>{{$playlists}}</h1>
					<span>Playlists</span>
				</div>
			</div>
			<div class="bottom-link">
				<a href="{{url('/admin_stereo/playlist')}}">
					<span>More Details >></span>
				</a>
			</div>
      	</div>

      	<div class="content-display box6">
			<div class="main-content">
				<div class="item-icon">
					<span class="material-icons-round">account_circle</span>
				</div>
				<div class="item-text">
					<h1>{{$users}}</h1>
					<span>Users</span>
				</div>
			</div>
			<div class="bottom-link">
				<a href="{{url('/admin_stereo/user')}}">
					<span>More Details >></span>
				</a>
			</div>
      	</div>

		<div class="content-display box7">
			<div class="main-content">
				<div class="item-icon">
					<span class="material-icons-round">flag</span>
				</div>
				<div class="item-text">
					<h1>{{$countries}}</h1>
					<span>Countries</span>
				</div>
			</div>
			<div class="bottom-link">
				<a href="/admin_stereo/country">
					<span>More Details >></span>
				</a>
			</div>
      	</div>
</div>
@endsection()