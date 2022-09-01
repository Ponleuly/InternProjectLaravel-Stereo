<?php
  use App\Models\Track;
?>
@extends('admin.index')
@section('content')
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Roboto:ital,wght@0,300;0,500;1,400&display=swap" rel="stylesheet">
<style>
.box-category-container{
  display: flex;
  flex-direction: column;
  font-family: 'Roboto', sans-serif;
}
.box-category-container .box-top{
  display: flex;
  flex-direction: row;
  margin: 20px;
}
.box-top .search-box form{
  display: flex;
  flex-direction: row;
  width: 500px;
  text-transform: capitalize;
}
.search-box input{
  width: 100%;
  height: 50px;
  border: 2px solid #ccc;
  padding: 0 10px;
  font-size: 18px;
  font-weight: 500;
  font-family: 'Roboto', sans-serif;
  text-transform: capitalize;
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
.box-top .add-category-link{
  width: 150px;
  height: 50px;
  background: #0d3073;
  margin-left: 30px;
  text-align: center;
  padding: 13px 0;
  border-radius: 5px;
  border: 1px solid #0d3073;
}
.add-category-link a{
  font-size: 16px;
  font-weight: 500;
  color: white;
  text-decoration: none;
  font-family: 'Roboto', sans-serif;
}
.add-category-link:hover{
  background: white;
}
.add-category-link:hover a{
  color: #0d3073;
}
.box-category-container .category-table{
  width: calc(100% - 40px);
  margin: 0 auto;
  font-family: 'Roboto', sans-serif;
}
.box-category-container .category-table table{
  border-collapse: collapse;
  width: 100%;
  text-transform: capitalize;
}
.category-table td:nth-child(1) {
  width: 5%;
  text-align: center;
}
.category-table td:nth-child(2) {
  width: 30%;
  text-align: start;
}
.category-table td:nth-child(3) {
  width: 20%;
  text-align: center;
}
.category-table td:nth-child(4) {
  text-align: center;
  width: 15%;
}
.category-table td:nth-child(5) {
  text-align: center;
  width: 30%;
}
.category-table th, td{
  border-bottom: 1px solid #ddd;
  padding: 13px;
}
.category-table td{
  font-size: 18px;
}
.category-table th:nth-child(2){
  text-align: start;
}
.category-table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #0d3073;
  color: white;
  font-family: 'Roboto', sans-serif;
  font-size: 18px;
  font-weight: 500;
}
.category-table tr:hover {background-color: #ddd;}
.category-table a{
  text-decoration: none;
}
.category-table .edit{
  color: white;
  background:  DodgerBlue;
  padding: 5px 15px;
  border-radius: 5px;
  font-size: 16px;
  border: 1px solid DodgerBlue;
}
.category-table .delete{
  color: white;
  background: ;
  padding: 5px 15px;
  border-radius: 5px;
  background:  red;
  font-size: 16px;
  border: 1px solid red;
}
.category-table .edit:hover{
  color: DodgerBlue;
  background: white;
}
.category-table .delete:hover{
  color: red;
  background: white;
}
</style>
  <div class="box-category-container">
    <div class="box-top">
      <div class="search-box">
        <form action="">
          <input type="text"  placeholder="search here..." name="search" id="">
          <button type="submit">Search</button>
        </form>
      </div>
      <div class="add-category-link">
          <a href="{{url('/admin_stereo/add_category')}}">
            <span>+Add Category</span>
          </a>
      </div>
    </div>
    <div class="category-table">
      <table>
          <tr>
            <th>#</th>
            <th>Categories</th>
            <th>Tracks</th>
            <th>Date Created</th>
            <th> 
              <span class="material-icons-round link-icon">edit</span>
              <span class="material-icons-round link-icon">delete</span>
            </th>
          </tr>
    
          @foreach($categories as $row)
          <tr>
            <td>{{$count++}}</td>
            <td>{{$row->name_category}}</td>
            @php
                $track_count = Track::where('id_category', $row->id)->count(); 
            @endphp
            <td>{{$track_count}}</td>
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