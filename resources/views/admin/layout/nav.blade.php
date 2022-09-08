<nav>
    <div class="sidebar-button">
		<i class='bx bx-menu sidebarBtn'></i>
		<span class="dashboard">Dashboard</span>
    </div>
    <div class="profile-details">
		<img src="/storage/uploads/avatars/{{Auth::user()->avatar}}" alt="">
		<span class="admin_name">{{Auth::user()->username}}</span>
		<a href="{{url('/admin_stereo/logout')}}">
			<span class="material-icons-round" title="Log out">logout</span>
		</a>
    </div>
</nav>