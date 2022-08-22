var playButton = document.getElementById("play-button");
var mySong = document.getElementById("mySong");
var currentTime = document.getElementById("current-time");
var durationTime = document.getElementById("duration-time");
var count = 0;

function playPause(){
    if  (count == 0) {
        count = 1;
        mySong.play();
        playButton.innerText = "pause"; // using innerText to change google icons span that modify by text ("play_arrow")

    } else {
        count = 0;
        mySong.pause();
        playButton.innerText = "play_arrow";
        
    }
   
}                         