<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="icon" type="image/png" href="/frontend/images/favicon(3).ico">
    <link rel="stylesheet" href="{{url('frontend/css/log_in.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <style>
        
    </style>
</head>
<body>
    <div class="form-container">
        <div class="container-row">
            <div class="row-col-1">
                <div class="col-1-container">
                    <div class="header-logo">
                        <span class="material-icons-round logo-icon">headphones</span>
                        <span class="logo-text">Stereo</span>
                    </div>
                    <div class="description">
                        <p>"Music is the best friend"</p>
                    </div>
                    <div class="header-content">
                        <div class="image">
                            <img src="frontend/images/music.png" alt="">
                        </div>
                        <div class="audio">
                            <!--
                            <audio controls autoplay muted>
                                <source src="frontend/audio/Windy Hill.mp3" type="audio/mp3">
                            </audio>
                        -->
                        </div> 
                    </div>
                    <div class="header-footer">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <div class="copyright">
                        <p><i class="fa fa-copyright" aria-hidden="true"></i> 2022 Stereo</p>
                    </div>
                </div>
            </div>

            <div class="row-col-2">
                <div class="sign-up-container">
                    <div class="title">Log in</div>
                    <div class="sign-up-content">
                        <form action="{{url('/')}}" method="POST">
                            @csrf
                            <div class="user-details">
                                <div class="input-box">
                                    <span class="details">Email or username</span>
                                    <input type="text" name="email" placeholder="Enter your email" required>
                                </div>
                                <div class="input-box">
                                    <span class="details">Password</span>
                                    <input type="password" name="password" placeholder="Enter your password" required id="password">
                                    <span class="material-icons-round" id="show-hide-pass" onclick="show_pass()">visibility_off</span>
                                </div>
                                <div class="input-box">
                                    <a href=""> Forget your password ?</a>
                                </div>
                                
                            </div>
                            <div class="button">
                                <input type="submit" value="Log in">
                            </div>
                            <div class="log-in">
                                <label>
                                    <span>Don't have an account?</span>
                                    <a href="{{url('sign_up')}}" class="link-login">Sign up.</a>
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{url('frontend/js/show_password.js')}}"></script>
</body>
</html>
