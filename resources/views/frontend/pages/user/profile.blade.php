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
		background: #fff;
	}
	.update-profile-link:hover a{
		color: #71b7e6;

	}
    /*==================================================*/
   
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
                        <a href="">
                            <span class="material-icons-round">edit</span>
                        </a>    
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
                                <span class="info">{{Auth::user()->username}}</span>
                            </div>
                                
                            <div class="details-info">
                                <span class="detail">Email :</span>
                                <span class="info">{{Auth::user()->email}}</span>
                            </div>
                                    
                            <div class="details-info">
                                <span class="detail">Gender :</span>
                                <span class="info">{{Auth::user()->gender}}</span>    
                            </div>
                        </div>   
                        <div class="update-profile-link">
                            <a href="{{url('/update_profile'.'/'.Auth::user()->id)}}">
                                <span>Update profile</span>
                            </a>
                        </div>
                    </div>                      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection()