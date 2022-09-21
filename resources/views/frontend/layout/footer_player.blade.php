<div class="bottom-player">
    <div class="player-row">
        <div class="player-col">
            <div class="player-col-1">
                <div class="img-area">
                    <a href="">
                        <img src="" alt="" id="img-area" >
                    </a>
                </div>
                <div class="song-details">
                    <a href="">
                        <span class="title">Faded</span>
                    </a>
                    <a href="">
                        <p class="artist">Alan Walker</p>
                    </a>   
                </div>
                <div class="col-1-icon">
                    <span class="material-icons-round" title="Add to liked">favorite_border</span>
                    <span class="material-icons-round" title="More options">more_horiz</span>
                </div>
            </div>

            <div class="player-col-2">
                <div class="col-2-player-icon">
                    <span id="random" title="Shuffle" class="material-icons-round">shuffle</span>
                    <span id="prev" title="Skip previous" class="material-icons-round">skip_previous</span>
                    <div class="play-pause">
                        <span class="material-icons-round playing">play_arrow</span>
                    </div>               
                    <span id="next" title="Skip next" class="material-icons-round">skip_next</span>
                    <span id="repeat" title="Repeat song" class="material-icons-round">repeat</span>
                </div>
                <div class="col-2-player-bar">
                    <div class="col-2-player-bar-container">
                        <div class="current-time" >
                            <span id="current-time">0:00</span>
                        </div>
                        <div class="duration-bar">
                            <input id="song-progress" class="song-progress" type="range" min="0" value="0" max="100">
                            <!--Add preload="metadata" to have it request the metadata for audio object,
                                if not the duration of audio will return in Nan
                            -->
                            <audio id="audio" src="" preload="metadata" type="audio/mp3"></audio>
                        </div>
                        <div class="duration-time">
                            <span id="duration-time">0:00</span>
                        </div>
                    </div>
                </div> 
            </div>

            <div class="player-col-3">
                <div class="sound-container">
                    <div class="sound-icon">
                        <span class="material-icons-round">volume_up</span>
                    </div>
                    <div class="sound-bar">
                        <input type="range" id="seek-sound" min="0" value="0" step="1" max="100" class="slider-sound">
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{url('frontend/js/musicList.js')}}"></script>
<script src="{{url('frontend/js/musicPlayer.js')}}"></script>
