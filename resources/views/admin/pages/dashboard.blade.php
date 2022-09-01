@extends('admin.index')
@section('content')
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Open+Sans:ital,wght@1,300&family=Roboto:ital,wght@0,300;0,500;1,400&display=swap" rel="stylesheet">
<style>
  .box-dashboard-container{
    display: flex;
    flex-direction: row;
    flex-flow: wrap;
    width: calc(100% - 30px);
    height: auto;
    margin: 15px auto;
    justify-content: space-between;
  }
  .box-dashboard-container .content-display{
    width: calc(100% / 3 - 30px);
    height: 250px;
    margin: 15px 15px;
    font-family: 'Roboto', sans-serif;
    border-radius: 5px;
  }
  .content-display .main-content{
    height: calc(100% - 60px);
    display: flex;
    flex-direction: row;
    justify-content: center;
  }
  .main-content .item-icon{
    width: 40%;
    text-align: center;
    align-self: center;
  }
  .main-content .item-icon span{
    font-size: 60px;
    font-weight: 500;
    color: white;
  }
  .main-content .item-text{
    min-width: 60%;
    text-align: center;
    align-self: center;
    padding: 15px 0;
  }
  .main-content .item-text h1{
    font-size: 55px;
    color: white;
    font-family: 'Roboto', sans-serif;
    padding: 15px 0;
  }
  .main-content .item-text span{
    font-size: 25px;
    color: white;
  }
  .content-display .bottom-link{ 
    font-family: 'Roboto', sans-serif;
    color: black;
    text-align: center;
    padding: 15px;
    height: 60px;
    width: 100%;
    background: white;
    border: 1px solid #ccc;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
  }
  .bottom-link a{
    font-size: 18px;
    font-weight: 500;
    color: black;
    text-decoration: none;
  }
  .content-display.box1{
    background: DodgerBlue;
  }
  .content-display.box2{
    background: #0d3073;
  }
  .content-display.box3{
    background: #228B22;
  }
  .content-display.box4{
    background: #DC143C;
   
  }
  .content-display.box5{
    background: #4682B4;
  }
  .content-display.box6{
    background: #FF4500;
  }
  
  .bottom-link:hover{
    background: #ccc;
  }
  .bottom-link:hover a{
    text-decoration: underline;
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
    margin-right: 25px;
    width: 120px;
    height: 50px;
    font-size: 18px;
    font-weight: 500;
    color: white;
    background: #0d3073;
    text-align: center;
    border-radius: 5px;
    border: 1px solid #0d3073;
    cursor: pointer;
    margin-top: 10px;
  }
  .form-fill button:hover{
    background: white;
    color: #0d3073;
  }
  
</style>
    <div class="box-dashboard-container">
      <div class="content-display box1">
        <div class="main-content">
          <div class="item-icon">
            <span class="material-icons-round">people</span>
          </div>
          <div class="item-text">
            <h1>{{$artists}}</h1>
            <span>Aritsts</span>
          </div>
        </div>
        <div class="bottom-link">
          <a href="/admin_stereo/artist">
            <span>More Details >></span>
          </a>
        </div>
      </div>

      <div class="content-display box2">
        <div class="main-content">
          <div class="item-icon">
            <span class="material-icons-round">album</span>
          </div>
          <div class="item-text">
            <h1>6</h1>
            <span>Albums</span>
          </div>
        </div>
        <div class="bottom-link">
          <a href="/admin_stereo/album">
            <span>More Details >></span>
          </a>
        </div>
      </div>

      <div class="content-display box3">
        <div class="main-content">
          <div class="item-icon">
            <span class="material-icons-round">category</span>
          </div>
          <div class="item-text">
            <h1>{{$categories}}</h1>
            <span>Categories</span>
          </div>
        </div>
        <div class="bottom-link">
          <a href="/admin_stereo/category">
            <span>More Details >></span>
          </a>
        </div>
      </div>

      <div class="content-display box4">
        <div class="main-content">
          <div class="item-icon">
            <span class="material-icons-round">audiotrack</span>
          </div>
          <div class="item-text">
            <h1>{{$tracks}}</h1>
            <span>Tracks</span>
          </div>
        </div>
        <div class="bottom-link">
          <a href="/admin_stereo/track">
            <span>More Details >></span>
          </a>
        </div>
      </div>

      <div class="content-display box5">
        <div class="main-content">
          <div class="item-icon">
            <span class="material-icons-round">queue_music</span>
          </div>
          <div class="item-text">
            <h1>7</h1>
            <span>Playlists</span>
          </div>
        </div>
        <div class="bottom-link">
          <a href="/admin_stereo/playlist">
            <span>More Details >></span>
          </a>
        </div>
      </div>

      <div class="content-display box6">
        <div class="main-content">
          <div class="item-icon">
            <span class="material-icons-round">account_circle</span>
          </div>
          <div class="item-text">
            <h1>6</h1>
            <span>Users</span>
          </div>
        </div>
        <div class="bottom-link">
          <a href="">
            <span>More Details >></span>
          </a>
        </div>
      </div>
  </div>
@endsection()