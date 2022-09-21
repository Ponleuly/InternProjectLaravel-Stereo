const audio = document.querySelectorAll("#audio");
const time =  document.querySelectorAll('#duration');
    for (i = 0; i < audio.length; i++) {
        let x = audio[i].duration;
        let totalMin = Math.floor(x / 60);
        let totalSec = Math.floor(x % 60);
        if(totalSec < 10){ //if sec is less than 10 then add 0 before it
            totalSec = `0${totalSec}`;
        }
        time[i].innerText = `${totalMin}:${totalSec}`;
    } 