@extends('admin.index')
@section('content')
<style>
.box-add-category-container{
  display: flex;
  flex-direction: column;
  background: #fff;
  width: 40%;
  margin: 0 auto;
  font-family: 'Roboto', sans-serif;
  border: 1px solid #ccc;
}
.box-add-category-container .title-header{ 
  font-size: 25px;
  font-weight: 500;
  font-family: 'Roboto', sans-serif;
  color: black;
  text-align: center;
  padding: 15px;
  height: 70px;
  width: 100%;
  background: #f5f5f5;
}
.box-add-category-container .form-fill{
  display: flex;
  flex-direction: column;
  padding: 15px;
}
.form-fill .input-box{
  display: flex;
  flex-direction: column;
  width: calc(100% - 50px);
  margin: 0 auto;
  color: black;
}
.input-box span.detail{
  align-self: flex-start;
  font-size: 18px;
  font-weight: 500;
  margin-bottom: 5px;
}
.input-box input{
  width: 100%;
  height: 50px;
  padding: 0 15px;
  font-size: 18px;
  font-weight: 500;
  margin: 10px 0;
  border: 1px solid #ccc;
  border-radius: 5px;
}
.form-fill input:focus{
  border: none;
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
}
.form-fill button:hover{
  background: white;
  color: #0d3073;
}

</style>
  <div class="box-add-category-container">
    <div class="title-header">
      <span>Add Category</span>
    </div>
    <div class="form-fill">
      <form action="add_category" method="POST" enctype="multipart/form-data">
        @csrf <!-- to make form active -->
        <div class="input-box">
          <span class="detail">Name</span>
          <input type="text" placeholder="Enter here..." name="name_category" id="" required>
        </div>
        <button type="submit" href="{{url('/admin_stereo/category')}}">Add</button>
      </form>
    </div>
  </div>
@endsection()