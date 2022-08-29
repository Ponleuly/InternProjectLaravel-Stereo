@extends('admin.index')
@section('content')
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Open+Sans:ital,wght@1,300&family=Roboto:ital,wght@0,300;0,500;1,400&display=swap" rel="stylesheet">
<style>
  .box-artist-container{
    display: flex;
    flex-direction: column;
    font-family: 'Roboto', sans-serif;
  }
  .box-artist-container .box-top{
    display: flex;
    flex-direction: row;
    margin: 20px;
  }
  .box-top .search-box form{
    display: flex;
    flex-direction: row;
    width: 500px;
  }
  .search-box input{
    width: 100%;
    height: 50px;
    border: 2px solid #ccc;
    padding: 0 10px;
    font-size: 18px;
    font-weight: 500;
    font-family: 'Roboto', sans-serif;
  }
  .search-box button{
    color: white;
    background: #71b7e6;
    font-size: 16px;
    width: 100px;
    margin-left: -100px;
    height: 50px;
    padding: 0 20px;
    border: none;
    border-left: none;
    cursor: pointer;
    font-family: 'Roboto', sans-serif;
  }
  .search-box input:focus, button{
    border: none;
  }
  .box-top .add-artist-link{
    width: 150px;
    height: 50px;
    background: #0d3073;
    margin-left: 30px;
    text-align: center;
    padding: 13px 0;
    border-radius: 5px;
    border: 1px solid #0d3073;
  }
  .add-artist-link a{
    font-size: 16px;
    font-weight: 500;
    color: white;
    text-decoration: none;
    font-family: 'Roboto', sans-serif;
  }
  .add-artist-link:hover{
    background: white;
  }
  .add-artist-link:hover a{
    color: #0d3073;
  }
  .box-top .message{
      width: calc(100% - 700px);
      height: 50px;
      margin-left: 30px;
      float: right;
      color: #000;
      background: #ddffdd;
      padding: 5px 15px;
      border-radius: 5px;
      font-size: 25px;
      font-family: 'Open Sans', sans-serif;
    }
    .box-artist-container .artist-table{
      width: calc(100% - 40px);
      margin: 0 auto;
      font-family: 'Roboto', sans-serif;
    }
    .box-artist-container .artist-table table{
      border-collapse: collapse;
      width: 100%;
      text-transform: capitalize;
    }
    .artist-table td:nth-child(1) {
      width: 5%;
      text-align: center;
    }
    .artist-table td:nth-child(2) {
      width: 10%;
      text-align: center;
    }
    .artist-table td:nth-child(3) {
      width: 30%;
      text-align: start;
    }
    .artist-table td:nth-child(4) {
        width: 5%;
        text-align: center;
    }
    .artist-table td:nth-child(5) {
        width: 30%;
        text-align: center;
    }
    .artist-table td:nth-child(6) {
        text-align: center;
    }
    .artist-table th:nth-child(2){
        text-align: center;
    }
    .artist-table th:nth-child(3){
        text-align: start;
    }
    .artist-table th{
      border-bottom: 1px solid #ddd;
      padding: 13px;
    }
    .artist-table td{
      border-bottom: 1px solid #ddd;
      font-size: 18px;
      padding-top: 5px;
      padding-bottom: 2px;
    }
    
    .artist-table th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: center;
      background-color: #0d3073;
      color: white;
      font-family: 'Roboto', sans-serif;
      font-size: 18px;
      font-weight: 500;
    }
    .artist-table tr:hover {background-color: #ddd;}
    .artist-table a{
      text-decoration: none;
    }
    .artist-table .edit{
      color: white;
      background:  DodgerBlue;
      padding: 5px 15px;
      border-radius: 5px;
      font-size: 16px;
      border: 1px solid DodgerBlue;
    }
    .artist-table .delete{
      color: white;
      background: ;
      padding: 5px 15px;
      border-radius: 5px;
      background:  red;
      font-size: 16px;
      border: 1px solid red;
    }
    .artist-table .edit:hover{
      color: DodgerBlue;
      background: white;
    }
    .artist-table .delete:hover{
      color: red;
      background: white;
    }
    .artist-table .artist-img{
      width: 60px;
      height: 60px;
      object-fit: cover;
      margin-top: 4px;
     
    }
</style>
<div class="box-artist-container">
  <div class="box-top">
    <div class="search-box">
      <form action="">
        <input type="text"  placeholder="search here..." name="search" id="">
        <button type="submit">Search</button>
      </form>
    </div>
    <div class="add-artist-link">
        <a href="{{url('/admin_stereo/add_artist')}}">
          <span>+Add Artist</span>
        </a>
    </div>
    @if(Session::has('alert'))
            <div class="message">
                {{Session::get('alert')}}
            </div>
    @endif
  </div>
  <div class="artist-table">
    <table>
        <tr>
          <th>#</th>
          <th>Image</th>
          <th>Artists</th>
          <th>Tracks</th>
          <th>Date Created</th>
          <th>
            <span class="material-icons-round link-icon">edit</span>
            <span class="material-icons-round link-icon">delete</span>
          </td> 
        </tr>
        @foreach($artists as $row)
          <tr>
            <td>{{$count++}}</td>
            <td>
              <img src="/storage/uploads/artists/{{$row->pf_artist}}" class="artist-img">
            </td>
            <td>{{$row->name_artist}}</td>
            <td>0</td>
            <td>{{$row->created_at->diffForHumans()}}</td>
            <td>
              <a href="{{url('/admin_stereo/edit_category/'.$row->name_category)}}"><span class="edit">Edit</span></a>
              <a href=""><span class="delete">Delete</span></a>
            </td>
        @endforeach()
    </table>
  </div>
</div>
@endsection()