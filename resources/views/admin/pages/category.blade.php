@extends('admin.index')
@section('content')
<style>
.home-section .category-content{
  position: relative;
  padding-top: 104px;
}
.category-content .category-box{
  margin:0 20px;
  width: calc(100% - 40px);
  min-width: 1000px;
  height: calc(100% - 124px);
  min-height: 500px;
  background: #fff;
  padding: 15px;
  border-radius: 12px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.1);
  margin-bottom: 20px;
} 
.category-box .box-top{
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
  border-radius: 2px;
  border: 1px solid #0d3073;
}
.add-category-link a{
  font-size: 16px;
  font-weight: 500;
  color: white;
  text-decoration: none;
}
.add-category-link:hover{
  background: white;
}
.add-category-link:hover a{
  color: #0d3073;
}
.category-box .box-table{
  width: calc(100% - 40px);
  margin: 0 auto;
}
.category-box .box-table table{
  border-collapse: collapse;
  width: 100%

}
.box-table table tr:nth-child(even) {
  background-color: #dddddd;
}
.box-table table td{
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
.category-box .add-category{
  width: calc(100% - 40px);
  background: #dddddd;
  margin: 50px auto;
  height: 200px;
  display: flex;
  flex-direction: column;
}
.add-category span{
  font-size: 18px;
  font-weight: 500;
  margin:15px 0 0 15px;
}
.add-category form{
  margin: 15px 15px;
}
.add-category form input{
  width: 200px;
  height: 40px;
  margin: 15px 0;
  font-size: 16px;
  font-weight: 500px;
  padding: 0 15px;
}
.add-category form input:focus{
  border: none;
}
.add-category form button{
  width: 50px;
  height: 40px;
  color: white;
  background: #0d3073;
  text-align: center;
  border-radius: 2px;
  border: 1px solid #0d3073;
  cursor: pointer;
}
.add-category form button:hover{
  background: white;
  color: #0d3073;
}
.box-table img{
  width: 50px;
  height: 50px;
  object-fit: cover;
}
</style>
<div class="category-content">
  <div class="category-box">
    <div class="box-top">
      <div class="search-box">
        <form action="">
          <input type="text"  placeholder="search here..." name="search" id="">
          <button type="submit">Search</button>
        </form>
      </div>
      <div class="add-category-link">
          <a href="#">
            <span>+Add Category</span>
          </a>
      </div>
    </div>
    <div class="box-table">
      <table>
          <tr>
            <td>Title</td>
            <td>Tracks</td>
            <td><span class="material-icons-outlined">edit</span></td>
          </tr>
          @foreach($data as $row)
          <tr>
            <td>{{$row->name_category}}</td>
            <td><img src="/frontend/images/{{$row->img}}" alt=""></td>
            <td>Delete/Edit</td>
          </tr>
          @endforeach()
      </table>
    </div>

    <div class="add-category">
      <span>Category name</span>
      <form action="category" method="POST">
        @csrf <!-- to make form active -->
        <input type="text" placeholder="Enter here..." name="name_category" id="" required>
        <input type="file" name="img">
        <button type="submit">Add</button>
      </form>
    </div>
  </div>
</div>
@endsection()