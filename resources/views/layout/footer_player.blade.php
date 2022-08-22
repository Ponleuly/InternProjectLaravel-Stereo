<div class="bottom-player">
    <div class="player-row">
        <div class="player-col">
            <div class="player-col-1">
                <div class="col-1-img">
                    <a href="">
                        <img src="/frontend/images/alan_walker.jpg" alt="">
                    </a>
                </div>
                <div class="col-1-text">
                    <a href="">
                        <div class="track-title">
                            <span>Faded</span>
                        </div>
                    </a>
                    <a href="">
                        <p class="track-artist">Alan Walker</p>
                    </a>   
                </div>
                <div class="col-1-icon">
                    <span class="material-icons-round">favorite_border</span>
                    <span class="material-icons-round">more_horiz</span>
                </div>
            </div>

            <div class="player-col-2">
                <div class="col-2-player-icon">
                    <span class="material-icons-round">shuffle</span>
                    <span class="material-icons-round">skip_previous</span>
                    <span class="material-icons-round" id="play-button" onclick="playPause(this)">play_arrow</span>                 
                    <span class="material-icons-round">skip_next</span>
                    <span class="material-icons-round">repeat</span>
                </div>
                <div class="col-2-player-bar">
                    <div class="col-2-player-bar-container">
                        <div class="current-time" id="current-time">
                            <span>0:00</span>
                        </div>
                        <div class="duration-bar" id="duration">
                            <input type="range" id="seek" min="0" value="0" max="100" class="play-slider">
                        </div>
                        <div class="duration-time" id="duration-time">
                            <span>0:00</span>
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