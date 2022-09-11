<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Sign up</title>
        <link rel="icon" type="image/png" href="/frontend/images/favicon(3).ico">
        <link rel="stylesheet" href="{{url('frontend/css/log_in.css')}}">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
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
                        <p>" Music is the best friend "</p>
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
                    <div class="title">Create Account</div>
                    <div class="sign-up-content">
						<form action="{{url('/sign_up')}}" method="POST">
							@csrf
							<div class="user-details">
								<div class="input-box">
									<span class="details">Username</span>
									<input type="text" name="username" placeholder="Enter your username" required>
								</div>

								<div class="input-box">
									<span class="details">Email</span>
									<input type="text" name="email" placeholder="Enter your email" required>
								</div>
								
								<div class="input-box">
									<span class="details">Password</span>
									<input type="password" name="password" placeholder="Enter your password" required id="password">
									<span class="material-icons-round" id="show-hide-pass" onclick="show_pass()">visibility_off</span>
								</div>

								<div class="input-box">
									<span class="details">Confirm Password</span>
									<input type="password" name="cpassword" placeholder="Confirm your password" required id="cpassword">
									<span class="material-icons-round" id="show-hide-cpass" onclick="show_cpass()">visibility_off</span>
								</div>
							</div>
							<div class="gender-details">
								<input type="radio" name="gender" value="male" id="dot-1" required>
								<input type="radio" name="gender" value="female" id="dot-2" required>
								<input type="radio" name="gender" value="others" id="dot-3" required>
								<span class="gender-title">Gender</span>
								<div class="category">
									<label for="dot-1">
									<span class="dot one"></span>
									<span class="gender">Male</span>
								</label>
								<label for="dot-2">
									<span class="dot two"></span>
									<span class="gender">Female</span>
								</label>
								<label for="dot-3">
									<span class="dot three"></span>
									<span class="gender">Others</span>
									</label>
								</div>
							</div>
							<div class="button">
								<input type="submit" value="Sign up">
							</div>
							<div class="log-in">
								<label>
									<span>Already have an account?</span>
									<a href="{{route('log_in')}}">Log in.</a>
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
