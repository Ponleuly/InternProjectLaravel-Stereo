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
    .details-info .info{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        width: calc(100% - 150px);
        height: 40px;
        padding: 0 15px;
        margin-bottom: 20px;
        border-radius: 5px;
        align-items: center; 
        margin-right: 30px;
    }
    .info p.username{
        font-family: 'Source Sans Pro', sans-serif;
        font-size: 20px;
        font-weight: 500;
        margin: 5px 0;
    }
    .info .label-btn{
        font-size: 18px;
        color: #ccc;
        margin-top: 7px;
    }
    .info .label-btn:hover{
        color: #fff;
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
		background: #fff;
	}
	.update-profile-link:hover a{
		color: #71b7e6;
	}
    /*==================================================*/
   /*=============Pop up form ==========*/
    .profile-wrapper .edit-profile-btn span{
        font-size: 40px;
        font-weight: 500;
        color: #ccc;
        margin: 30px;
        cursor: pointer;
    }
    .edit-profile-btn span:hover{
        color: #fff;
    }
    .dash-content .edit-profile-container {
        position: absolute;
        top: 65%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    input[type="checkbox"] {
        display: none;
    }
    .dash-content .edit-profile-container {
        display: none;
        background-color: grey;
        width: 550px;
        padding: 30px;
        border-radius: 5px;
        box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
    }
    #edit-profile:checked~.edit-profile-container {
        display: block;
    }
    .edit-profile-container .close-btn {
        position: absolute;
        right: 20px;
        top: 15px;
        font-size: 20px;
        cursor: pointer;
        color: #ccc;
    }
    .edit-profile-container .close-btn:hover {
        color: #fff;
    }
    .edit-profile-container .text-title {
        text-align: center;
        font-size: 25px; 
        font-weight: 500;
        font-family: 'Source Sans Pro', sans-serif;
        color: #fff;
    }
    .edit-profile-container form {
        margin-top: -30px;
    }
    .edit-profile-container form .info-edit {
        height: 40px;
        width: 100%;
        margin: 40px 0;
    }
    form .info-edit label {
        color: #fff;
        padding: 5px 0;
        font-family: 'Source Sans Pro', sans-serif;
        font-size: 18px;
        font-weight: 700;
    }
    form .info-edit input[type="text"] {
        height: 100%;
        width: 100%;
        padding-left: 10px;
        font-size: 17px;
        border: 1px solid silver;
        border-radius: 5px;
        background-color: grey;
        color: #fff;
        font-family: 'Source Sans Pro', sans-serif;
        font-size: 18px;
        font-weight: 500;
    }
    form .info-edit input[type=file]{
        height: 100%;
        width: 100%;
        border: 1px solid silver;
        border-radius: 5px;
        background-color: grey;
        color: #fff;
    }
    form .info-edit input[type=file]::file-selector-button {
        height: 100%;
        width: 200px;
        border: none;
        background: #ccc;
        color: #fff;
        cursor: pointer;
        font-family: 'Source Sans Pro', sans-serif;
        font-size: 16px;
        font-weight: 500;
        text-transform: none;
    }
    form .info-edit input:focus {
        border-color: #fff;
        border-bottom-width: 2px;
    }
    form .save-btn {
        margin-top: 30px;
        height: 45px;
        width: 100px;
        float: right;
        position: relative;
        overflow: hidden;
    }
    form .info-edit .gender-details-container{
        width: 100%;
        height: 40px;
        display: flex;
        flex-direction: row;
        align-items: center;
    }
    .gender-details-container input[type=radio]{
        font-size: 18px;
        font-weight: 500;
        height: 20px;
        width: 20px;
        border-radius: 50%;
        margin-right: 5px;
    }
    .gender-details-container .gender{
        margin-right: 15px;
        text-transform: capitalize;
        font-family: 'Source Sans Pro', sans-serif;
        font-size: 16px;
        font-weight: 500;
        color: #fff;
    }
    form .save-btn button {
        height: 100%;
        width: 100%;
        background: grey;
        border: 2px solid #ccc;
        color: #fff;
        font-family: 'Source Sans Pro', sans-serif;
        font-size: 18px;
        font-weight: 600;
        border-radius: 5px;
        cursor: pointer;
    }
    .save-btn button:hover{
        background-color: #fff;
        color: #000;
        border: none;
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
                    <div class="profile-edit-form">
                        <label for="edit-profile" class="edit-profile-btn">
                            <span class="material-icons-round">edit</span>
                        </label>
                    </div>                 
                </div>
            </div>
        </div>

        <div class="profile-dash">
            <div class="profile-dash-content">
                <div class="profile-border-header"></div>
                <div class="profile-content-container">
                        <div class="title-header">
                            <span>Profile Details</span>
                        </div>
                        <div class="details-container">
                            <div class="details-info">
                                <span class="detail">Username :</span>
                                <div class="info">
                                    <p class="username">{{Auth::user()->username}}</p>
                                    <label for="edit-profile" class="label-btn">
                                        <span class="material-icons-round">edit</span>
                                    </label>
                                </div>                           
                            </div>
                                
                            <div class="details-info">
                                <span class="detail">Email :</span>
                                <div class="info">
                                    <p class="username">{{Auth::user()->email}}</p>
                                    <label for="edit-profile" class="label-btn">
                                        <span class="material-icons-round">edit</span>
                                    </label>
                                </div>  
                            </div>
                                    
                            <div class="details-info">
                                <span class="detail">Gender :</span>
                                 <div class="info">
                                    <p class="username">{{Auth::user()->gender}}</p>
                                    <label for="edit-profile" class="label-btn">
                                        <span class="material-icons-round">edit</span>
                                    </label>
                                </div>  
                            </div>
                            <div class="details-info">
                                <span class="detail">Password :</span>
                                <div class="info">
                                    <p class="username">********</p>
                                    <label for="edit-profile" class="label-btn">
                                        <span class="material-icons-round">edit</span>
                                    </label>
                                </div>  
                            </div>
                        </div>   
                    </div>                      
                </div>
            </div>
        </div>

        <!--============================== Hidden Form ==================================-->
        <!--Pop up form for editing createplaylist-->
        <input type="checkbox" id="edit-profile">   
        <div class="edit-profile-container">
            <label for="edit-profile" class="close-btn" title="close">
                <span class="material-icons-round">clear</span>
            </label>
            <div class="text-title">
                <span>Edit profile details</span>
            </div>
            <form action="{{url('update_profile'.'/'.Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="info-edit">
                    <label>Username</label>
                    <input type="text" name="username" placeholder="Enter here..." value="{{Auth::user()->username}}">
                </div>
                <div class="info-edit">
                    <label>Email</label>
                    <input type="text" name="email" placeholder="Enter here..." value="{{Auth::user()->email}}">
                </div>
                <div class="info-edit">
                    <label>Gender</label>
                    <div class="gender-details-container">
                        <input type="radio" name="gender" 
                                value="male" {{('male' == Auth::user()->gender)? 'checked' : ''}} required>
                        <span class="gender">Male</span>
                        <input type="radio" name="gender" 
                                    value="female" {{('female' == Auth::user()->gender)? 'checked' : ''}} required>
                        <span class="gender">Female</span>             
                        <input type="radio" name="gender"
                                    value="others" {{('others' == Auth::user()->gender)? 'checked' : ''}} required>
                        <span class="gender">Others</span>
                    </div>                                                   
                </div>
                <div class="info-edit">
                    <label>Update Avatar</label>
                    <input type="file" name="avatar" accept="image/png, image/jpeg, image/jpg">
                </div>
                <div class="save-btn">
                    <button type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection()