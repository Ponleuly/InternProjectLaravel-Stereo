@extends('admin.index')
@section('content')
<style>
.box-add-track-container{
  display: flex;
  flex-direction: column;
  background: #fff;
  width: 40%;
  margin: 0 auto;
  font-family: 'Roboto', sans-serif;
  border: 1px solid #ccc;
  border-top: 5px solid #0d3073;
}
.box-add-track-container .title-header{ 
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
.box-add-track-container .form-fill{
  display: flex;
  flex-direction: column;
  padding: 15px;
  margin-bottom: 15px;
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
  font-size: 20px;
  font-weight: 500;
  margin-bottom: 5px;
}
.input-box input[type=text]{
  width: 100%;
  height: 50px;
  padding: 0 15px;
  font-size: 18px;
  font-weight: 500;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  text-transform: capitalize;
}
.form-fill input:focus{
  border: none;
}
.form-fill a{
    text-decoration: none;
    margin: 10px 25px;
    width: 500px;
}
.form-fill .back-button{
    margin-left: 25px;
    width: 120px;
    height: 50px;
    padding: 10px 15px;
    font-size: 18px;
    font-weight: 500;
    color: white;
    background: #f44336;
    text-align: center;
    border-radius: 5px;
    border: 1px solid #f44336;
    float: left;
    margin-top: 15px;
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
  margin-top: 15px;
}
.form-fill button:hover{
  background: white;
  color: #0d3073;
}
.input-box .select-box select{
    width: 100%;
    height: 50px;
    padding: 0 10px;
    font-size: 18px;
    font-weight: 500;
    margin-bottom: 20px;
    border-radius: 5px;
    border: 1px solid #ccc;
    color: black;
    background: white;
    text-transform: capitalize;
}
.select-box select option{
    color: black;
}
.form-fill .img-upload{
  width: 100%;
  height: 50px;
  /*
  padding: 5px 10px;*/
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background: white;
  display: flex;

}
.img-upload input[type=file]::file-selector-button{
  height: 100%;
  width: 200px;
  font-size: 18px;
  border: none;
  background: #ddffdd;
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
  cursor: pointer;
}
.img-upload:hover{
  border: 2px solid green;
}
</style>
  <div class="box-add-track-container">
    <div class="title-header">
      <span>Add Track</span>
    </div>
    <div class="form-fill">
      <form action="{{url('/admin_stereo/add_track')}}" method="POST" enctype="multipart/form-data">
        @csrf <!-- to make form active -->
        <div class="input-box">
            <span class="detail">Name</span>
            <input type="text" placeholder="Enter here..." value="" name="name_track" required>

            <span class="detail">Artist</span>
            <div class="select-box">
                <select name="id_artist"><!--is a string colum will insert in table_album-->
                    <option disabled selected>Choose artists</option>
                    @foreach($artists as $row)
                        <option value="{{$row->id}}">{{$row->name_artist}}</option>
                        <!--is a string value will insert in colum name_track-->
                    @endforeach
                </select>
            </div>

            <span class="detail">Album</span>
            <div class="select-box">
                <select name="id_album"><!--is a string colum will insert in table_album-->
                    <option disabled selected>Choose albums</option>
                    @foreach($albums as $row)
                        <option value="{{$row->id}}">{{$row->name_album}}</option>
                        <!--is a string value will insert in colum name_track-->
                    @endforeach
                </select>
            </div>
          
            <span class="detail">Category</span>
            <div class="select-box">
                <select name="id_category">
                    <option disabled selected>Choose Categories</option>
                    @foreach($categories as $row)
                        <option value="{{$row->id}}">{{$row->name_category}}</option>
                    @endforeach
                </select>
            </div>

            <span class="detail">Country</span>
            <div class="select-box">
                <select name="id_country"><!--is a string colum will insert in table_album-->
                    <option disabled selected>Choose Countries</option>
                    @foreach($countries as $row)
                        <option value="{{$row->id}}">{{$row->name_country}}</option>
                        <!--is a string value will insert in colum name_track-->
                    @endforeach
                </select>
            </div>

            <span class="detail">Track Image</span>
            <div class="img-upload">
                <input type="file" name="pf_track" accept="image/png, image/jpeg, image/jpg">
            </div>

            <span class="detail">Track Audio</span>
            <div class="img-upload">
                <input type="file" name="audio_track" accept="audio/mp3">
            </div>

        </div>
        <div class="back-button">
            <a href="{{url('/admin_stereo/track')}}"><span>Back</span></a>
        </div>
        <button type="submit">Add</button>
      </form>
    </div>
  </div>
@endsection()