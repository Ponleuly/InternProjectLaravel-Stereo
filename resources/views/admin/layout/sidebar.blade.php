<div class="sidebar">
    <div class="logo-details">
        <span class="material-icons-round logo-icon">headphones</span>
        <div class="logo_name">
            <h1>Stereo</h1>
        </div>
    </div>
    <ul class="nav-links">
		<li>
			<a href="{{route('dashboard')}}" 
				class="{{ Request::is('admin_stereo/dashboard')? 'active':''}}">
				<span class="material-icons-round link-icon">dashboard</span>
				<span class="links_name">Dashboard</span>
			</a>
		</li>
		<li>
			<a href="{{route('track')}}"
				class="{{ Request::is('admin_stereo/track')||
						Request::is('admin_stereo/add_track')||
						Request::is('admin_stereo/edit_track/*')||
						Request::is('admin_stereo/search_track')? 'active':''}}">
				<span class="material-icons-round link-icon">audiotrack</span>
				<span class="links_name">Tracks</span>
			</a>
		</li>
		<li>
			<a href="{{route('artist')}}" 
				class="{{ Request::is('admin_stereo/artist')||
						Request::is('admin_stereo/add_artist')||
						Request::is('admin_stereo/edit_artist/*')||
						Request::is('admin_stereo/search_artist')? 'active':''}}">
				<span class="material-icons-round link-icon">people</span>
				<span class="links_name">Artists</span>
			</a>
		</li>
		<li>
			<a href="{{route('album')}}" 
				class="{{ Request::is('admin_stereo/album')||
						Request::is('admin_stereo/add_album')||
						Request::is('admin_stereo/edit_album/*')||
						Request::is('admin_stereo/search_album')? 'active':''}}">
				<span class="material-icons-round link-icon">album</span>
				<span class="links_name">Albums</span>
			</a>
		</li>
		<li>
			<a href="{{route('category')}}" 
				class="{{ Request::is('admin_stereo/category')||
						Request::is('admin_stereo/add_category')||
						Request::is('admin_stereo/edit_category/*')||
						Request::is('admin_stereo/search_category')? 'active':''}}">
						<!--add /* becaue this route contain the dynamic variable after /edit_category/[variable]-->
				<span class="material-icons-round link-icon">category</span>
				<span class="links_name">Category</span>
			</a>
		</li>
     	<li>
			<a href="{{route('playlist')}}" class="{{ Request::is('admin_stereo/playlist')? 'active':''}}">
				<span class="material-icons-round link-icon">queue_music</span>
				<span class="links_name">Playlists</span>
			</a>
      	</li>
		<li>
			<a href="{{route('country')}}" 
				class="{{ Request::is('admin_stereo/country')||
						Request::is('admin_stereo/add_country')||
						Request::is('admin_stereo/edit_country/*')||
						Request::is('admin_stereo/search_country')? 'active':''}}">
				<span class="material-icons-round link-icon">flag</span>
				<span class="links_name">Country</span>
			</a>
		</li>
		<li>
			<a href="{{route('user')}}" class="{{ Request::is('admin_stereo/user')? 'active':''}}">
				<span class="material-icons-round link-icon">person</span>
				<span class="links_name">Users</span>
			</a>
		</li>
		<li class="log_out">
			<a href="#">
				<span class="material-icons-round link-icon">logout</span>
				<span class="links_name">Log out</span>
			</a>
		</li>
    </ul>
</div>