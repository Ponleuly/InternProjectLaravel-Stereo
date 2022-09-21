$('#search_track').keyup(function(){
	var _text = $(this).val();
    if(_text){
        $('#recommend-table').hide();
        $('#search-table').show();
        $('.text-change').replaceWith('Search result :');
    }else{
        $('#recommend-table').show();
        $('#search-table').hide();
        $('.text-change').replaceWith('Recommended songs');
    }
    var _pageURL = $(location).attr("href"); //get current url of page
    $.ajax({
        type:'get',
        //url:'{{route('search')}}',
        url:_pageURL, //url by the route where ajax is searching and send request to controller by that route
        data:{'search_track':_text},//search is a variable to pass in request and _text is input text
        success:function(data){
            //console.log(data); // uncommend to see responed data in console       
            $('#search-table').html(data); // display data respone for view in tbody name seach-table
        } 
    });     
});     