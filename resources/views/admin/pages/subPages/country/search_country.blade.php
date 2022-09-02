<?php
  use App\Models\Track;
  use App\Models\Artist;
?>
@extends('admin.index')
@section('content')
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Open+Sans:ital,wght@1,300&family=Roboto:ital,wght@0,300;0,500;1,400&display=swap" rel="stylesheet">
<style>
    .box-country-container{
      display: flex;
      flex-direction: column;
      font-family: 'Roboto', sans-serif;
    }
    .box-country-container .message{
      width: calc(100% - 40px);
      height: 50px;
      margin: 20px 20px 0 20px;
      float: right;
      color: #000;
      background: #ddffdd;
      padding: 5px 15px;
      border-radius: 5px;
      font-size: 25px;
      font-family: 'Open Sans', sans-serif;
}
    .box-country-container .box-top{
      display: flex;
      flex-direction: row;
      margin: 20px;
      justify-content: space-between;
    }
    .box-top .search-box form{
      display: flex;
      flex-direction: row;
      width: 600px;

    }
    .search-box input{
      width: 100%;
      height: 50px;
      border: 2px solid #0d3073;
      padding: 0 10px;
      font-size: 18px;
      font-weight: 500;
      font-family: 'Roboto', sans-serif;
      text-transform: capitalize;
      border-radius: 5px;
      
    }
    .search-box input::placeholder{
      text-transform: none;
    }
    .search-box button{
      color: white;
  background: #0d3073;
  font-size: 16px;
  width: 100px;
  height: 50px;
  padding: 0 25px;
  border: none;
  border-left: none;
  cursor: pointer;
  margin-left: 15px;
  font-family: 'Roboto', sans-serif;
  border-radius: 5px;
  border: 2px solid #0d3073;
    }
    .search-box button:hover{
  background: #fff;
  color: #0d3073;
}
    .search-box input:focus, button{
      border: none;
    }
    .box-top .add-country-link{
      width: 150px;
  height: 50px;
  background: mediumseagreen;
  text-align: center;
  padding: 13px 0;
  border-radius: 5px;
  border: 2px solid mediumseagreen;
    }
    .add-country-link a{
      font-size: 16px;
      font-weight: 500;
      color: white;
      text-decoration: none;
      font-family: 'Roboto', sans-serif;
    }
    .add-country-link:hover{
  background: white;
}
.add-country-link:hover a{
  color: mediumseagreen;
}
    .box-country-container .country-table{
      width: calc(100% - 40px);
      margin: 0 auto;
      font-family: 'Roboto', sans-serif;
    }
    .box-country-container .country-table table{
      border-collapse: collapse;
      width: 100%;
      text-transform: capitalize;
    }
    .country-table td:nth-child(1) {
      width: 5%;
      text-align: center;
    }
    .country-table td:nth-child(2) {
      width: 30%;
    }
    .country-table td:nth-child(3) {
      width: 10%;
      text-align: center;
    }
    .country-table td:nth-child(4) {
        width: 10%;
        text-align: center;
    }
    .country-table td:nth-child(5) {
        width: 15%;
        text-align: center;
    }
    .country-table td:nth-child(6) {
        text-align: center;
    }
    .country-table th, td{
      border-bottom: 1px solid #ddd;
      padding: 13px;
    }
    .country-table td{
      font-size: 18px;
    }
    .country-table th:nth-child(2){
        text-align: start;
    }
    .country-table th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: center;
      background-color: #0d3073;
      color: white;
      font-family: 'Roboto', sans-serif;
      font-size: 18px;
      font-weight: 500;
    }
    .country-table tr:hover {background-color: #ddd;}
    .country-table a{
      text-decoration: none;
    }
    .country-table .edit{
      color: white;
      background:  DodgerBlue;
      padding: 5px 15px;
      border-radius: 5px;
      font-size: 16px;
      border: 1px solid DodgerBlue;
    }
    .country-table .delete{
      color: white;
      background: ;
      padding: 5px 15px;
      border-radius: 5px;
      background:  red;
      font-size: 16px;
      border: 1px solid red;
    }
    .country-table .edit:hover{
      color: DodgerBlue;
      background: white;
    }
    .country-table .delete:hover{
      color: red;
      background: white;
    }
  </style>
  <div class="box-country-container">
    @if(Session::has('alert'))
            <div class="message">
                {{Session::get('alert')}}
            </div>
    @endif
    <div class="box-top">
      <div class="add-country-link">
        <a href="{{url('/admin_stereo/add_country')}}">
          <span>+Add Country</span>
        </a>
      </div>
      <div class="search-box">
        <form action="{{url('/admin_stereo/search_country')}}">
          <input type="text"  placeholder="Search here..." name="search" value="{{$search_text}}">
          <button type="submit">Search</button>
        </form>
      </div>
    </div>
    <div class="country-table">
      <table>
        <tr>
            <th>#</th>
            <th>Countries</th>
            <th>Tracks</th>
            <th>Artists</th>
            <th>Date Created</th>
            <th>
                <span class="material-icons-round link-icon">edit</span>
                <span class="material-icons-round link-icon">delete</span>
            </td>  
        </tr>
        @foreach ($search_country as $row)
            <tr>
                <td>{{$count++}}</td>
                <td>{{$row->name_country}}</td>
                @php
                  $track_count = Track::where('id_country', $row->id)->count();
                  $artist_count = Artist::where('id_country', $row->id)->count(); 
                @endphp
                <td>{{$track_count}}</td>
                <td>{{$artist_count}}</td>
                <td>{{$row->created_at->diffForHumans()}}</td>
                <td>
                    <a href="{{url('/admin_stereo/edit_country/'.$row->name_country)}}"><span class="edit">Edit</span></a>
                    <a href="{{url('/admin_stereo/delete_country/'.$row->name_country)}}"><span class="delete">Delete</span></a>
                </td>  
            </tr>
        @endforeach
         
      </table>
    </div>
</div>

@endsection()