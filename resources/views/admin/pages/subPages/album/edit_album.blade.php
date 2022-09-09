@extends('admin.index')
@section('content')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=IBM+Plex+Sans:wght@300&family=Open+Sans:ital,wght@1,300&family=Roboto:ital,wght@0,300;0,500;1,400&family=Source+Sans+Pro:wght@300;400;700&family=Source+Serif+Pro&display=swap" rel="stylesheet">
<style>
    .font{
        font-family: 'Roboto', sans-serif;
        font-family: 'Source Sans Pro', sans-serif;
    }
    .box-add-album-container{
        display: flex;
        flex-direction: column;
        background: #fff;
        width: 60%;
        margin: 20px auto;
        /*
        border: 1px solid #ccc;
        border-top: 5px solid #0d3073;
        */
    }
    .box-add-album-container .title-header{ 
        font-size: 25px; 
        font-weight: 500;
        font-family: 'Source Sans Pro', sans-serif;
        color: #fff;
        text-align: center;
        padding: 15px;
        height: 70px;
        width: 100%;
        background: #0d3073;
        border-radius: 5px;
    }
    .box-add-album-container .form-fill{
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
        width: 120px;
        margin-right: 30px;
        font-family: 'Source Sans Pro', sans-serif;
        font-size: 18px;
        font-weight: 700;
        
    }
    .box-fill p.artist-name{
        width: calc(100% - 150px);
        height: 40px;
        padding: 7px 15px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        text-transform: none;
        font-family: 'Source Sans Pro', sans-serif;
        font-size: 16px;
        font-weight: 500;
    }
    .box-fill img{
        width: 220px;
        height: 220px;
        object-fit: cover;
        border-radius: 5px;
    }
    .box-fill input[type=text]{
        width: calc(100% - 150px);
        height: 40px;
        padding: 0 15px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        text-transform: capitalize;
        font-family: 'Source Sans Pro', sans-serif;
        font-size: 18px;
        font-weight: 500;
    }
    .box-fill input[type=text]::placeholder{
        font-family: 'Source Sans Pro', sans-serif;
        font-size: 16px;
        font-weight: 500;
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
        margin-bottom: 20px;
        border-radius: 5px;
        border: 1px solid #ccc;
        color: black;
        background: white;
        text-transform: capitalize;
        font-family: 'Source Sans Pro', sans-serif;
        font-size: 16px;
        font-weight: 500;

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
        border: none;
        background: #ddffdd;
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
        cursor: pointer;
        font-family: 'Source Sans Pro', sans-serif;
        font-size: 16px;
        font-weight: 500;
        text-transform: none;
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
<div class="box-add-album-container">
    <div class="title-header">
      <span>Edit Album</span>
    </div>
    <div class="form-fill">
        <form action="{{url('/admin_stereo/edit_album/'.$album->id)}}" method="POST" enctype="multipart/form-data">
            @csrf <!-- to make form active -->
            @method('PUT')
            <div class="input-box">
                <div class="box-fill">
                    <span class="detail">Album Name</span>
                    <input type="text" placeholder="Enter here..." value="{{$album->name_album}}" name="name_album" required>
                </div>
                
                <div class="box-fill">
                    <span class="detail">Artist</span>
                    <div class="select-box">
                        <select name="id_artist"><!--is a string colum will insert in table_album-->
                            <option disabled selected>Choose Artists</option>
                            @foreach($artists as $row)
                                <option 
                                    value="{{$row->id}}"
                                    {{($row->id == $selected_art->id) ? 'selected' : ''}}>                            
                                    {{$row->name_artist}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
                <div class="box-fill">
                    <span class="detail">Category</span>
                    <div class="select-box">
                        <select name="id_category">
                            <option disabled selected>Choose Categories</option>
                            @foreach($categories as $row)
                                <option 
                                    value="{{$row->id}}"
                                    {{($row->id == $selected_cate->id) ? 'selected' : ''}}>
                                    {{$row->name_category}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="box-fill">
                    <span class="detail">Album Image</span>
                    <p class="artist-name">{{$img_album}}</p>
                </div>
                <div class="box-fill">
                    <span class="detail"></span>
                    <img src="/storage/uploads/albums/{{$img_album}}" alt="">
                </div>
                <div class="box-fill" style="margin-top: 180px">
                    <span class="detail">Update Image</span>
                    <div class="img-upload">
                        <input type="file" name="pf_album" accept="image/png, image/jpeg, image/jpg">
                    </div>
                </div>
            </div>
            <div class="back-button">
                <a href="{{url('/admin_stereo/album')}}"><span>Back</span></a>
            </div>
            <button type="submit">Update</button>
        </form>
    </div>
</div>
@endsection()