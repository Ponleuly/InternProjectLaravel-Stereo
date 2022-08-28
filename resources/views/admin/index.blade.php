<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <title>Stereo Admin</title>
  <link rel="stylesheet" href="style.css">
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{url('admin/css/style.css')}}">
  
</head>
<body>
  @include('admin.layout.sidebar')
  <section class="display-section">
    @include('admin.layout.nav')

    <div class="display-content">
      <div class="content-box">
        @yield('content')
      </div>
    </div>
  </section>
  <script src="{{url('admin/js/script.js')}}"></script>
</body>
</html>
