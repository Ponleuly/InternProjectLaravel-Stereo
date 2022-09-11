@extends('index')
@section('dash_content')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=IBM+Plex+Sans:wght@300&family=Open+Sans:ital,wght@1,300&family=Roboto:ital,wght@0,300;0,500;1,400&family=Source+Sans+Pro:wght@300;400;700&family=Source+Serif+Pro&display=swap" rel="stylesheet">
<style>   
    .profile-wrapper {
        margin-top: 20px;
        width: 100%;
        height: auto;
        background-color: var(--box-color);
        overflow: hidden;
    }
    .profile-wrapper .profile-header{
        width: 100%;
        min-height: 280px;
        background-color: var(--box-color);
    }
    .profile-header .profile-header-container{
        display: flex;
        flex-direction: row;
    }
    .profile-header-container .profile-img img{
        margin: 30px;
        width: 220px;
        height: 220px;
        border-radius: 50%;
        object-fit: cover;
        background-image: url("/frontend/images/avatar.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        padding: 5px;
    }
    .profile-header-container .profile-text{
        min-width: 500px;
        width: 100%;
        display: flex;
        flex-direction: row;
        align-items: center;
    }
    .profile-text .profile-name{
        font-size: 80px;
        font-weight: bold;
        color: var(--text-color);
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
        margin: 0 30px;
    }
    .profile-text .profile-name:hover{
        overflow: visible;
    }
    .profile-text .profile-edit-form{
        padding: 0 30px;
    }
    .profile-text .profile-edit-form span{
        font-size: 30px;
        font-weight: 500;
        color: #ccc;
    }
    .profile-edit-form span:hover{
        color: #fff;
    }
    .profile-wrapper .profile-dash {
        width: 100%;
    }
    .profile-dash .profile-dash-content {
        width: 100%;
    }
    .profile-dash-content .profile-border-header{
        display: flex;
        flex-direction: row;
        border-bottom: 1px solid var(--border-color);
        padding-bottom: 20px;
        margin: 10px 30px;
    }
    .profile-dash-content .profile-content-container{
        width: 60%;
        margin: 0 auto;
        padding: 20px 30px;
    }
    .profile-content-container .title-header{ 
        font-size: 25px; 
        font-weight: 500;
        font-family: 'Source Sans Pro', sans-serif;
        color: #fff;
        text-align: center;
        padding: 15px;
        height: 70px;
        width: 100%;
        min-width: 500px;
        border-radius: 5px;
    }
    .profile-content-container .details-container{
        display: flex;
        flex-direction: column;
        width: calc(100% - 100px);
        min-width: 500px;
        margin: 0 auto;
        color: #fff;
    }
    .details-container .details-info{
        display: flex;
        flex-direction: row;
        height: 70px;
        padding: 15px 0;
    }
    .details-info span.detail{
        display: flex;
        justify-content: flex-end;
        align-items: center; 
        min-width: 120px;
        margin-right: 30px;
        font-family: 'Source Sans Pro', sans-serif;
        font-size: 18px;
        font-weight: 700;   
    }
    .details-info span.info{
        display: flex;
        justify-content: flex-start;
        align-items: center; 
        width: calc(100% - 150px);
        margin-right: 30px;
        font-family: 'Source Sans Pro', sans-serif;
        font-size: 18px;
        font-weight: 500;  
        
    }
    .profile-content-container .update-profile-link{
		width: 150px;
		height: 50px;
		background-color: #71b7e6;
		text-align: center;
		padding: 10px 0;
		border-radius: 5px;
		border: 2px solid #71b7e6;
        float: right;
        margin-right: 80px;
        margin-bottom: 30px;
        margin-top: 10px;
        float: right;
	}
	.update-profile-link a{
		font-size: 18px;
		font-weight: 500;
		color: white;
		text-decoration: none;
		font-family: 'Roboto', sans-serif;
	}
	.update-profile-link:hover{
		background: white;
	}
	.update-profile-link:hover a{
		color: #71b7e6;
	}
    /*==========================================================*/
   .profile-content-container .form-fill{
        display: flex;
        flex-direction: column;
        padding: 15px;
        margin-bottom: 15px;
    }
    .form-fill .input-box{
        display: flex;
        flex-direction: column;
        width: calc(100% - 100px);
        margin: 0 auto;
        color: black;
    }
    .input-box .box-fill{
        display: flex;
        flex-direction: row;
        height: 70px;
        padding: 15px 0;
    }
    .box-fill span.detail{
        display: flex;
        justify-content: flex-end;
        align-items: center; 
        width: 120px;
        margin-right: 30px;
        font-family: 'Source Sans Pro', sans-serif;
        font-size: 18px;
        font-weight: 700;
        color: #fff;   
    }
    .box-fill p.artist-name{
        width: calc(100% - 150px);
        height: 40px;
        padding: 7px 15px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        text-transform: none;
        font-family: 'Source Sans Pro', sans-serif;
        font-size: 16px;
        font-weight: 500;
    }
    .box-fill img{
        width: 220px;
        height: 220px;
        object-fit: cover;
        border-radius: 5px;
        
    }
    .box-fill input[type=text]{
        width: calc(100% - 150px);
        height: 40px;
        padding: 0 15px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        text-transform: capitalize;
        font-family: 'Source Sans Pro', sans-serif;
        font-size: 18px;
        font-weight: 500;
    }
    .box-fill input[type=text]::placeholder{
        font-family: 'Source Sans Pro', sans-serif;
        font-size: 16px;
        font-weight: 500;
        text-transform: none;
    }
    .box-fill input:focus{
        border: none;
    }
    .box-fill .gender-details{
        width: calc(100% - 150px);
    }
    .gender-details .category{
        width: 100%;
        height: 40px;
        display: flex;
        flex-direction: row;
        align-items: center;
    }
    .gender-details .category input[type=radio]{
        font-size: 18px;
        font-weight: 500;
        height: 20px;
        width: 20px;
        border-radius: 50%;
        margin: 8px 5px 8px 5px;

    }
     .gender-details .category .gender{
        margin-right: 10px;
        text-transform: capitalize;
        font-family: 'Source Sans Pro', sans-serif;
        font-size: 16px;
        font-weight: 500;
        color: #fff;

     }
    .box-fill .img-upload{
        width: calc(100% - 150px);
        height: 40px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background: white;
        display: flex;
    }
    .img-upload input[type=file]::file-selector-button{
        height: 100%;
        width: 200px;
        border: none;
        background: #ddffdd;
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
        cursor: pointer;
        font-family: 'Source Sans Pro', sans-serif;
        font-size: 16px;
        font-weight: 500;
        text-transform: none;
    }
    .img-upload:hover{
        border: 2px solid green;
    }
    .form-fill .back-button{ 
        width: 120px;
        height: 50px;
        padding: 10px 15px;
        font-size: 18px;
        font-weight: 500;
        color: white;
        background: red;
        text-align: center;
        border-radius: 5px;
        border: 2px solid red;
        float: left;
        margin-top: 15px;
        margin-left: 200px;
    }
    .back-button:hover{
        background: white;
    }
    .back-button:hover a{
        color: #f44336;
    }
    .back-button a{
        text-decoration: none;
        color: white;
        font-family: 'Roboto', sans-serif;
    }
    .form-fill button{
        float: right;
        margin-right: 50px;
        width: 120px;
        height: 50px;
        font-size: 18px;
        font-weight: 500;
        color: white;
        background: dodgerblue;
        text-align: center;
        border-radius: 5px;
        border: 2px solid dodgerblue;
        cursor: pointer;
        margin-top: 15px;
    }
    .form-fill button:hover{
        background: white;
        color: dodgerblue;
    }
</style>
<!--========== profiles content ===============-->
<div class="dash-content">
    <div class="profile-wrapper">
        <div class="profile-header">
            <div class="profile-header-container">
                <div class="profile-img">
                    <img src="/storage/uploads/avatars/{{Auth::user()->avatar}}" alt="">
                </div>
                <div class="profile-text">
                    <span class="profile-name">{{Auth::user()->username}}</span>
                    <!--
                    <div class="profile-edit-form">
                        <a href="">
                            <span class="material-icons-round">edit</span>
                        </a>    
                    </div>  
                     -->                 
                </div>
            </div>
        </div>

        <div class="profile-dash">
            <div class="profile-dash-content">
                <div class="profile-border-header"></div>
                <div class="profile-content-container">
                        <div class="title-header">
                            <span>Edit Profile</span>
                        </div>
                
                        <div class="form-fill">
                            <form action="{{url('/update_profile'.'/'.$user->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf <!-- to make form active -->
                                @method('PUT')
                                <div class="input-box">
                                    <div class="box-fill">
                                        <span class="detail">Username</span>
                                        <input type="text" placeholder="Enter here..." value="{{$user->username}}" name="username" required>
                                    </div>
                                    
                                    <div class="box-fill">
                                        <span class="detail">Email</span>
                                        <input type="text" placeholder="Enter here..." value="{{$user->email}}" name="email" required>
                                    </div>
                                    <div class="box-fill">
                                        <span class="detail">Gender</span>
                                        <div class="gender-details">
                                            <div class="category">
                                                <input type="radio" name="gender" 
                                                    value="male" {{('male' == $user->gender)? 'checked' : ''}} required>
                                                <span class="gender">Male</span>
                        
                                                <input type="radio" name="gender" 
                                                    value="female" {{('female' == $user->gender)? 'checked' : ''}} required>
                                                <span class="gender">Female</span>
                                           
                                                <input type="radio" name="gender"
                                                    value="others" {{('others' == $user->gender)? 'checked' : ''}} required>
                                                <span class="gender">Others</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-fill">
                                        <span class="detail">Update Avatar</span>
                                        <div class="img-upload">
                                            <input type="file" name="avatar" accept="image/png, image/jpeg, image/jpg">
                                        </div>
                                    </div>
                                </div>

                                <div class="back-button">
                                    <a href="{{url('/profile')}}">
                                        <span class="material-icons-round">arrow_back</span>
                                    </a>
                                </div>
                                <button type="submit">Save</button>
                            </form>
                        </div>
                    </div>                      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection()