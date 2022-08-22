<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/frontend/images/favicon(3).ico">
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{url('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/category.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/liked.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/createplaylist.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/artists_view.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/albums_view.css')}}">
    <title>Stereo</title> 
</head>
<body>
    <!--========= Nav ==========-->
    @include('layout.nav')
    
    <!--======== Section =======-->
    <section class="dashboard">
        <!--==== Top Bar =====-->
        @include('layout.dashboard_top')
        <!--===== Dashboard content ====-->
        @yield('dash_content')
    </section> 
    <!--===== Footer player ====-->
    @include('layout.footer_player')


    <!--======== Nav active script =======
    <script src="{{url('frontend/js/nav_active.js')}}"></script> -->
    <!--======= Nav script =======-->
    <script src="{{url('frontend/js/nav.js')}}"></script>
</body>
</html>