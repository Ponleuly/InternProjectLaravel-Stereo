<nav>
    <div class="logo-name">
        <div class="logo-icon">
            <span class="material-icons-round logo-icon">headphones</span>
        </div>
        <span class="logo_name">Stereo</span>
    </div>
    <!--============================== Nav Bar ======================================-->
    <div class="menu-items" id="nav-links">
        <ul class="nav-links">
            <li>
                <a href="{{url('home')}}" class="{{ Request::is('home')? 'active':''}}">
                    <span class="material-icons-round nav-icon">home</span>
                    <span class="link-name">Home</span>
                </a>
            </li>
            <li>
                <a href="{{url('mylibrary/my_playlists')}}" 
                    class="{{ Request::is('mylibrary/my_playlists')||
                              Request::is('mylibrary/my_artists')||
                              Request::is('mylibrary/my_albums') ? 'active':''}}">
                    <span class="material-icons-round nav-icon">library_music</span>
                    <span class="link-name">My Library</span>
                </a>
            </li>
            <li>    
                <a href="{{url('category')}}" class="{{ Request::is('category') ? 'active':''}}">
                    <span class="material-icons-round nav-icon">category</span>
                    <span class="link-name">Category</span>
                </a>
            </li>
            <li>
                <a href="{{url('liked')}}" class="{{ Request::is('liked') ? 'active':''}}">
                    <span class="material-icons-round nav-icon">favorite</span>
                    <span class="link-name">Liked</span>
                </a>
            </li>
            <li>
                <a href="{{url('createplaylist')}}" 
                    class="{{ Request::is('createplaylist') ? 'active':''}}">
                    <span class="material-icons-round nav-icon">playlist_add</span>
                    <span class="link-name">Create Playlist</span>
                </a>
            </li>
            <div class="list-header">
                <span>Your Playlists</span>
            </div>
            <!--===== Your Playlist ======--> 
            @include('frontend.pages.subpages.yourplaylist')
        </ul>
        <ul class="logout-mode">
            <li class="mode">
                <a href="#">
                    <span class="material-icons-round nav-icon">dark_mode</span>
                    <span class="link-name">Dark Mode</span>
                </a>
                <div class="mode-toggle">
                    <span class="switch"></span>
                </div>
            </li>
        </ul>
    </div>   
</nav>
