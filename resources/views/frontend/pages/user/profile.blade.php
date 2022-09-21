@extends('index')
@section('dash_content')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=IBM+Plex+Sans:wght@300&family=Open+Sans:ital,wght@1,300&family=Roboto:ital,wght@0,300;0,500;1,400&family=Source+Sans+Pro:wght@300;400;700&family=Source+Serif+Pro&display=swap" rel="stylesheet">

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
                                    <label for="change-password" class="label-btn">
                                        <span class="material-icons-round">edit</span>
                                    </label>
                                </div>  
                            </div>
                        </div>   
                    </div>                      
                </div>
            </div>
        </div>

        <!--============================== Profile Edit Form ==================================-->
        <!--Pop up form for editing profile-->
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

        <!--============================== Change Password Form ==================================-->
        <!--Pop up form for change password-->
        <input type="checkbox" id="change-password">    
        <div class="change-password-container">
            <label for="change-password" class="close-btn" title="close">
                <span class="material-icons-round">clear</span>
            </label>
            <div class="text-title">
                <span>Change password</span>
            </div>
            <form action="{{url('change_password/'.Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="info-edit">
                    <label>Current Password</label>
                    <input type="password" name="current_password" placeholder="Current password">
                </div>
                <div class="info-edit">
                    <label>New Password</label>
                    <input type="password" name="new_password" placeholder="New password">
                </div>
                <div class="info-edit">
                    <label>Comfirm Password</label>
                    <input type="password" name="comfirm_password" placeholder="Re-type new password">
                </div>
                <div class="save-btn">
                    <button type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection()