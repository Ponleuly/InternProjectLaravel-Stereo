<?php
  	use App\Models\Playlist;
?>
<div class="playlist">             
    <div class="list">
        @php
            $id_user = Auth::user()->id;
            $yourplaylists = Playlist::where('id_user', $id_user)->get();
        @endphp
        @foreach ($yourplaylists as $row)
            <a href="">
                <span class="textover">{{$row->name_playlist}}</span>
            </a>   
        @endforeach
    </div>  
</div>