@extends('admin.index')
@section('content')
<style>
    .box-add-artist-container{
        display: flex;
        flex-direction: column;
        background: #fff;
        width: 60%;
        margin: 20px auto;
        font-family: 'Roboto', sans-serif;
        /*
        border: 1px solid #ccc;
        border-top: 5px solid #0d3073;
        */
    }
    .box-add-artist-container .title-header{ 
        font-size: 25px;
        font-weight: 500;
        font-family: 'Roboto', sans-serif;
        color: #fff;
        text-align: center;
        padding: 15px;
        height: 70px;
        width: 100%;
        background: dodgerblue;
        border-radius: 5px;
    }
    .box-add-artist-container .form-fill{
        display: flex;
        flex-direction: column;
        padding: 15px;
        margin-bottom: 15px;
    }
    .form-fill .input-box{
        display: flex;
        flex-direction: column;
        width: calc(100% - 100px);
        margin: 0 auto;
        color: black;
    }
    .input-box .box-fill{
        display: flex;
        flex-direction: row;
        height: 70px;
        padding: 15px 0;
    }
    .box-fill span.detail{
        display: flex;
        justify-content: flex-end;
        align-items: center; 
        font-size: 18px;
        font-weight: 600;
        width: 120px;
        margin-right: 30px;
    }
    .box-fill input[type=text]{
        width: calc(100% - 150px);
        height: 40px;
        padding: 0 15px;
        font-size: 18px;
        font-weight: 500;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        text-transform: capitalize;
    }
    .box-fill input[type=text]::placeholder{
        font-size: 16px;
        font-weight: 400;
        text-transform: none;
    }
    .box-fill input:focus{
        border: none;
    }
    .box-fill .select-box{
        width: calc(100% - 150px);
    }
    .box-fill .select-box select{
        width: 100%;
        height: 40px;
        padding: 0 10px;
        font-size: 16px;
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
    .box-fill .img-upload{
        width: calc(100% - 150px);
        height: 40px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background: white;
        display: flex;
    }
    .img-upload input[type=file]::file-selector-button{
        height: 100%;
        width: 200px;
        font-size: 16px;
        border: none;
        background: #ddffdd;
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
        cursor: pointer;
    }
    .img-upload:hover{
        border: 2px solid green;
    }
    .form-fill .back-button{ 
        width: 120px;
        height: 50px;
        padding: 10px 15px;
        font-size: 18px;
        font-weight: 500;
        color: white;
        background: #f44336;
        text-align: center;
        border-radius: 5px;
        border: 2px solid #f44336;
        float: left;
        margin-top: 15px;
        margin-left: 200px;
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
        margin-right: 50px;
        width: 120px;
        height: 50px;
        font-size: 18px;
        font-weight: 500;
        color: white;
        background: #0d3073;
        text-align: center;
        border-radius: 5px;
        border: 2px solid #0d3073;
        cursor: pointer;
        margin-top: 15px;
    }
    .form-fill button:hover{
        background: white;
        color: #0d3073;
    }
    
</style>
<div class="box-add-artist-container">
    <div class="title-header">
      <span>Add Artist</span>
    </div>
    <div class="form-fill">
        <form action="{{url('/admin_stereo/add_artist')}}" method="POST" enctype="multipart/form-data">
            @csrf <!-- to make form active -->
            <div class="input-box">
                <div class="box-fill">
                    <span class="detail">Artist Name</span>
                    <input type="text" placeholder="Enter here..." value="" name="name_artist" required>
                </div>
               
                <div class="box-fill">
                    <span class="detail">Categories</span>
                    <div class="select-box">
                        <select name="id_category">
                            <option disabled selected>Choose Categories</option>
                            @foreach($categories as $row)
                                <option value="{{$row->id}}">{{$row->name_category}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
                <div class="box-fill">
                    <span class="detail">Countries</span>
                    <div class="select-box">
                        <select name="id_country">
                            <option disabled selected>Choose Countries</option>
                            @foreach($countries as $row)
                                <option value="{{$row->id}}">{{$row->name_country}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
                <div class="box-fill">
                    <span class="detail">Artist Image</span>
                    <div class="img-upload">
                        <input type="file" name="pf_artist" accept="image/png, image/jpeg, image/jpg">
                    </div>
                </div>
            </div>

            <div class="back-button">
                <a href="{{url('/admin_stereo/artist')}}"><span>Back</span></a>
            </div>
            <button type="submit">Add</button>
        </form>
    </div>
</div>
@endsection()