<div class="top">
    <span class="material-icons-round sidebar-toggle">menu</span>
    <!--
    <div class="search-box">
        <a href="#">
            <span class="material-icons-round">search</span>
        </a>
        <input type="text" placeholder="Search here...">
    </div>-->
    <div class="profile">
        <div class="profile-dropdown">
            <div class="profile-details">
                <div class="image">
                    <img src="/storage/uploads/avatars/{{Auth::user()->avatar}}" alt="">
                </div>
                <span class="profile-name">{{Auth::user()->username}}</span>
            </div>
            <div class="dropdown-content">
                <a href="{{url('/profile')}}">View profile</a>
                <a href="{{url('/log_out')}}">Log out</a>
            </div>
        </div>
    </div>
</div>