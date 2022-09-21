<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/frontend/images/favicon(3).ico">
    <title>Stereo</title> 
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{url('frontend/css/index.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/mylibrary_playlist.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/category.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/liked.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/createplaylist.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/artists_view.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/albums_view.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/playlist_view.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/search.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/user_profile.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/footer_player.css')}}">
    <!----======== js ======== -->
    

</head>
<body>
    <!--========= Nav ==========-->
    @include('frontend.layout.nav')
    <!--======== Section =======-->
    <section class="dashboard">
        <!--==== Top Bar =====-->
        @include('frontend.layout.dashboard_top')
        <!--===== Dashboard content ====-->
        @yield('dash_content')
    </section> 
    <!--===== Footer player ====-->
    @include('frontend.layout.footer_player')
    <!--======= Nav script =======-->
    <script src="{{url('frontend/js/nav.js')}}"></script>
</body>
</html>