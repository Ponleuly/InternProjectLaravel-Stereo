<div class="bottom-player">
    <div class="player-row">
        <div class="player-col">
            <div class="player-col-1">

                <div class="img-area">
                    <a href="">
                        <img src="/frontend/images/alan_walker.jpg" alt="">
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
                    <span class="material-icons-round">favorite_border</span>
                    <span class="material-icons-round">more_horiz</span>
                </div>
            </div>

            <div class="player-col-2">
                <div class="col-2-player-icon">
                    <span  class="material-icons-round">shuffle</span>
                    <span id="prev" class="material-icons-round">skip_previous</span>
                    <div class="play-pause">
                        <span class="material-icons-round play">play_arrow</span>
                    </div>               
                    <span id="next" class="material-icons-round">skip_next</span>
                    <span id="repeat-list" title="Playlist looped" class="material-icons-round">repeat</span>
                </div>
                <div class="col-2-player-container">
                        <div class="current-time" id="current-time">
                            <span>0:00</span>
                        </div>
                        <div class="progress-area">
                            <div class="progress-bar">
                              <audio id="main-audio" src=""></audio>
                            </div>
                        </div>
                        <div class="max-duration" id="max-duration">
                            <span>0:00</span>
                        </div>
                </div>  
            </div>

            <div class="player-col-3">
                <div class="sound-container">
                    <div class="sound-icon">
                        <span class="material-icons-round">volume_up</span>
                    </div>
                    <div class="sound-bar">
                        <input type="range" id="seek" min="0" value="0" max="100" class="slider-sound">
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <audio id="mySong">
        <source src="/frontend/audio/Alan Walker - Faded.mp3" type="audio/mp3">
    </audio>
</div>
<!--==== Music play script =====-->
<script src="{{url('frontend/js/playPause.js')}}"></script>