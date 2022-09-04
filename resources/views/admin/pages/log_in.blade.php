<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="icon" type="image/png" href="/frontend/images/favicon(3).ico">
    <!--<link rel="stylesheet" href="{{url('frontend/css/log_in.css')}}">-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap');
        @import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins',sans-serif;
        }
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url("/frontend/images/login.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
        .form-container{
            width: 1000px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.15);
            height: 800px;
            background-color: rgb(209 203 203 / 23%);
            -webkit-backdrop-filter: blur(10px); 
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); 
            border-radius: 5px;
        }
        .form-container .container-row{
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            width: 100%;
        } 
        .container-row .container-col {    
            width: 50%;
            margin: 0 auto;
        }
        .container-row .header-logo{
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            margin: 30px 0 15px;
        }
        .header-logo .logo-text{
            font-size: 70px;
            font-weight: 500;
            color: white;
            margin-left: 20px;
            font-family: 'Fredoka One', cursive;
        }
        .header-logo .logo-icon{
            font-size: 40px;
            font-weight: 500;
            height: 60px;
            width: 60px;
            line-height: 60px;
            text-align: center;
            align-items: center;
            border-radius: 50%;
            color: #71b7e6;
            background-color: white;
        }
        .container-col .sign-up-container {
            max-width: 500px;
            width: 100%;
            padding: 25px 30px ;
            border-radius: 5px;
        }
        .sign-up-container .title{
            font-size: 30px;
            font-weight: 500;
            position: relative;
            margin-top: 10px;
            color: white;
        }
        .sign-up-container .title::before{
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            height: 3px;
            width: 90px;
            border-radius: 5px;
            /*background: linear-gradient(135deg, #71b7e6, #9b59b6);*/
            background-color: #71b7e6;
        }
        .sign-up-container .sign-up-content form .user-details{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 20px 0 12px 0;
            color: white;
        }
        form .user-details .input-box{
            margin-bottom: 15px;
            width: 100%;
        }
        form .input-box span.details{
            display: block;
            font-weight: 500;
            margin-bottom: 5px;
            color: white;
        }
        .user-details .input-box input{
            height: 45px;
            width: 100%;
            outline: none;
            font-size: 16px;
            border-radius: 5px;
            padding-left: 15px;
            border: 1px solid #ccc;
            border-bottom-width: 2px;
            transition: all 0.3s ease;
            /**/
            color: white;
            background-color: transparent;
        }
        .user-details .input-box input:focus{ 
            background-color: transparent; 
        }
        .user-details .input-box input::placeholder { 
            /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: #d9d5d5 !important; opacity: 1; /* Firefox */ 
        }
        .user-details .input-box input:-ms-input-placeholder {
            /* Internet Explorer 10-11 */
            color: #d9d5d5 !important; 
        }
        .user-details .input-box input::-ms-input-placeholder{ 
            /* Microsoft Edge */
            color: #d9d5d5 !important;
        }
        .input-box #show-hide-pass{
            position: relative;
            font-size: 18px;
            /*color: #919191;*/
            color: white;
            cursor: pointer;
            padding: 13px;
            margin-left: -45px;
            float: right;
        }
        .input-box #show-hide-cpass{
            position: relative;
            font-size: 18px;
            /*color: #919191;*/
            color: white;
            cursor: pointer;
            padding: 13px;
            margin-left: -45px;
            float: right;
        }
        .user-details .input-box input:focus,
        .user-details .input-box input:valid{
            /*border-color: #9b59b6;*/
            border-color: #71b7e6;
        }
        form .category label{
            display: flex;
            align-items: center;
            cursor: pointer;
        }
        form .button{
            height: 45px;
            margin: 35px 0;
        }
        form .button input{
            height: 100%;
            width: 100%;
            border-radius: 5px;
            border: none;
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
            /*background: linear-gradient(135deg, #71b7e6, #9b59b6);*/
            background-color: #71b7e6;
        }
        form .button input:hover{
            /* transform: scale(0.99); */
            background: linear-gradient(-135deg, #71b7e6, #9b59b6);
        }
        form .log-in{
            text-align: center;
            color: white;
        }
        form .log-in a{
            color: #71b7e6;
        }
        form .input-box a{
            color: #71b7e6;
        }
        @media(max-width: 600px){
            .container-row .header-logo{
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <div class="container-row">
            <div class="header-logo">
                <span class="material-icons-round logo-icon">headphones</span>
                <span class="logo-text">Stereo Admin</span>
            </div>

            <div class="container-col">
                <div class="sign-up-container">
                    <div class="title">Log in</div>
                    <div class="sign-up-content">
                        <form action="{{route('dashboard')}}">
                            <div class="user-details">
                                <div class="input-box">
                                    <span class="details">Email</span>
                                    <input type="text" placeholder="Enter your email" required>
                                </div>
                                <div class="input-box">
                                    <span class="details">Password</span>
                                    <input type="password" placeholder="Enter your password" required id="password">
                                    <span class="material-icons-round" id="show-hide-pass" onclick="show_pass()">visibility_off</span>
                                </div>
                            </div>
                            <div class="button">
                                <input type="submit" value="Log in">
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
