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
    .box-add-track-container{
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
    .box-add-track-container .title-header{ 
        font-size: 25px; 
        font-weight: 500;
        font-family: 'Source Sans Pro', sans-serif;
        color: #fff;
        text-align: center;
        padding: 15px;
        height: 70px;
        width: 100%;
        background: #DC143C;
        border-radius: 5px;
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
        font-family: 'Source Sans Pro', sans-serif;
        font-size: 16px;
        font-weight: 500;
        padding: 5px 0;
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
<div class="box-add-track-container">
    <div class="title-header">
        <span>Add Track</span>
    </div>
    <div class="form-fill">
        <form action="{{url('/admin_stereo/add_track')}}" method="POST" enctype="multipart/form-data">
            @csrf <!-- to make form active -->
            <div class="input-box">
                <div class="box-fill">
                    <span class="detail">Track Title</span>
                    <input type="text" placeholder="Enter here..." value="" name="name_track" required>
                </div>
                
                <div class="box-fill">
                    <span class="detail">Artist</span>
                    <div class="select-box">
                        <select name="id_artist"  required><!--is a string colum will insert in table_album-->
                                <option disabled selected>Choose artists</option>
                            @foreach($artists as $row)
                                <option value="{{$row->id}}">{{$row->name_artist}}</option>
                                <!--is a string value will insert in colum name_track-->
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="box-fill">
                    <span class="detail">Album</span>
                    <div class="select-box">
                        <select name="id_album"  required><!--is a string colum will insert in table_album-->
                            <option disabled selected>Choose albums</option>
                            @foreach($albums as $row)
                                <option value="{{$row->id}}">
                                    {{$row->name_album}} --by-- {{$row->artist_album->name_artist}}
                                </option>
                                <!--is a string value will insert in colum name_track-->
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="box-fill">
                    <span class="detail">Category</span>
                    <div class="select-box">
                        <select name="id_category"  required>
                            <option disabled selected>Choose Categories</option>
                            @foreach($categories as $row)
                                <option value="{{$row->id}}">{{$row->name_category}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
              
                <div class="box-fill">
                    <span class="detail">Country</span>
                    <div class="select-box">
                        <select name="id_country"  required><!--is a string colum will insert in table_album-->
                            <option disabled selected>Choose Countries</option>
                            @foreach($countries as $row)
                                <option value="{{$row->id}}">{{$row->name_country}}</option>
                                <!--is a string value will insert in colum name_track-->
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="box-fill">
                    <span class="detail">Track Image</span>
                    <div class="img-upload">
                        <input type="file" name="pf_track" accept="image/png, image/jpeg, image/jpg" required>
                    </div>
                </div>

                <div class="box-fill">
                    <span class="detail">Track Audio</span>
                    <div class="img-upload">
                        <input type="file" name="audio_track" accept="audio/mp3" required>
                    </div>
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