$('#search').keyup(function(){
	var _text = $(this).val();
    var _pageURL = $(location).attr("href"); //get current url of page
    if(_text){
        $('#table-1').hide();
        $('#table-2').show();
    }else{
        $('#table-1').show();
        $('#table-2').hide();
    }
    $.ajax({
        type:'get',
        //url:'{{route('search')}}',
        url:_pageURL, //url by the route where ajax is searching and send request to controller by that route
        data:{'search':_text},//search is a variable to pass in request and _text is input text
        success:function(data){
            //console.log(data.tracks); // uncommend to see responed data in console       
            $('#table-2').html(data.tracks); // display data respone for view in tbody name seach-table
            $('#box-container-2').html(data.artists); // display data respone for view in tbody name seach-table
            $('#box-container-3').html(data.albums); // display data respone for view in tbody name seach-table
            $('#box-container-4').html(data.playlists); // display data respone for view in tbody name seach-table
        } 
    });   
});     