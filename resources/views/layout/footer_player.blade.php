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
                    <span id="repeat" title="Playlist looped" class="material-icons-round">repeat</span>
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
                            <audio id="audio" src="" preload="metadata"></audio>
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
    <!--
    <audio id="mySong">
        <source src="/frontend/audio/Alan Walker - Faded.mp3" type="audio/mp3">
    </audio>
    -->
</div>
<!--<script src="{{url('frontend/js/playPause.js')}}"></script>-->
<script>    
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);

    const imgArea = $('#img-area');
    const songTitle = $('.title');
    const artistName = $('.artist');
    const audio = $('#audio');
    const playPause = $('.play-pause');
    const playBtn = $('.playing');
    const songProgress = $('.song-progress');
    const progressTime = $('#current-time');
    const durationTime = $('#duration-time');
    const nextIcon = $('#next');
    const prevIcon = $('#prev');
    const randomIcon = $('#random');
    const repeatIcon = $('#repeat');
    // bien app ->object
    const app = {
        isPlaying: false,
        isRandom: false,
        isRepeat: false,
        // phan tu dau tien trong songs
        currentIndex: 0,
        // songs->property (thuoc tinh)
        songs: [
            {
            title: "Faded",
            name: "Alan Walker",
            path: "/frontend/audio/Faded.mp3",
            image: "/frontend/images/alan_walker.jpg"
            },
            {
            title: "Perfect",
            name: "Ed Sheeran",
            path: "/frontend/audio/Perfect.mp3",
            image: "/frontend/images/ed_sheeran.jpg"
            },
            {
            title: "All i ever need",
            name: "Austin Mahone",
            path: "/frontend/audio/All-I-Ever-Need.mp3",
            image: "/frontend/images/Austin_mahone.jpg"
            },
            {
            title: "Attention",
            name: "Charlie Puth",
            path: "/frontend/audio/Charlie-Puth.mp3",
            image: "/frontend/images/charlie_puth.jpg"
            },
            {
            title: "Sharp of you",
            name: "Ed Sheeran",
            path: "/frontend/audio/Shape-of-you.mp3",
            image: "/frontend/images/ed_sheeran_1.jpg"
            },
            {
            title: "Hello Viet Nam",
            name: "Vn",
            path: "/frontend/audio/Hello-vn.mp3",
            image: "/frontend/images/music-6.jpg"
            }    
        ],
        //show image title and singer 
        /*
        render: function () {
            const htmls = this.songs.map(song => {
            return `
                    <div class="song">
                        <div class="thumb">
                            <img src="${song.image}" alt="" style="width: 200px; height: 200px"; display:>
                        </div>
                        <div class="song-details">
                            <h3 class="title">${song.name}</h3>
                            <p class="author">${song.singer}</p>
                        </div>
                    </div>
                `;
            })
            $('.overview').innerHTML = htmls.join("");
        },
        */
        handleEvents: function(){
            // để lưu cái this ở bên ngoài cho cái _this để sử dụng trong function ở bên dưới
            const _this = this; 

            // Xử lý img quay / dừng
            // Handle img spins / stops
            const imgSpin = imgArea.animate([{ transform: "rotate(360deg)" }], {
                duration: 10000, // 10 seconds
                iterations: Infinity
            });
            imgSpin.pause(); // not to spin when not playing song yet
            // Xử lý khi click play
            playPause.onclick = function(){
                if ( _this.isPlaying){  
                    audio.pause();
                } else {
                    audio.play();
                }            
            }
            // When the song is played
            audio.onplay = function () {
                _this.isPlaying = true;
                playBtn.textContent = "pause";
                imgSpin.play(); // img spin when playing song
                imgArea.style.borderRadius = "50%";
            };

            // When the song is pause
            audio.onpause = function () {
                _this.isPlaying = false;
                playBtn.textContent = "play_arrow";
                imgSpin.pause(); // img no spin when pause song
                
            };
             
            // Khi tiến độ bài hát thay đổi và thay đổi thời gian 
            // When the song progress changes and current time is progressing  
            audio.ontimeupdate = function(){
                // when slide on progress input
                if (audio.duration){
                    const progressPercent = Math.floor(audio.currentTime / audio.duration * 100);
                    songProgress.value = progressPercent;
                } 
                // update playing song current time
                const audioProgressTime = audio.currentTime;
                let currentMin = Math.floor(audioProgressTime / 60);
                let currentSec = Math.floor(audioProgressTime % 60);
                if(currentSec < 10){ //if sec is less than 10 then add 0 before it
                    currentSec = `0${currentSec}`;
                }
                progressTime.innerText = `${currentMin}:${currentSec}`;
            }
            
            // Duration of song
            // load audio to return value of duartion in number ( fixed problem that return value in Nan)
            audio.onloadedmetadata = function(){
                // update song total duration
                const audioDuration = audio.duration;
                const totalMin = Math.floor(audioDuration / 60);
                const totalSec = Math.floor(audioDuration % 60);
                if(totalSec < 10){ //if sec is less than 10 then add 0 before it
                    totalSec = `0${totalSec}`;
                }
                durationTime.innerText = `${totalMin}:${totalSec}`;

            }
            
            // Xử lý khi tua song
            // Handling when seek
            songProgress.onchange = function (e) {
                const seekTime = (audio.duration / 100) * e.target.value;
                audio.currentTime = seekTime;
            };
            
            // when click on next icon
            nextIcon.onclick = function() {
                if(_this.isRandom) {
                    _this.randomSong();
                } else {
                    _this.nextSong();
                }
                audio.play();
            }
            // when click on prev icon
            prevIcon.onclick = function() {
                if(_this.isRandom) {
                    _this.randomSong();
                } else {
                    _this.prevSong();
                }
                audio.play();
            }
            
            // when click on Shuffle icon
            // Xử lý bật / tắt random song
            // Handling on / off random song
            randomIcon.onclick = function (e) {
                _this.isRandom = !_this.isRandom;
                //_this.setConfig("isRandom", _this.isRandom);
                randomIcon.classList.toggle("active-icon", _this.isRandom); // add and remove class active-icon
            }
        
            // Xử lý lặp lại một song
            // Single-parallel repeat processing
            repeatIcon.onclick = function (e) {
                _this.isRepeat = !_this.isRepeat;
                //_this.setConfig("isRepeat", _this.isRepeat);
                repeatIcon.classList.toggle("active-icon", _this.isRepeat);
            };

            // Xử lý next song khi audio ended
            // Handle next song when audio ended
            audio.onended = function () {
            if (_this.isRepeat) {
                audio.play();
            } else {
                nextIcon.click();
            }
            }; 
        },
        // Lay phan tu dau tien cua bai hat trong property->songs
        defineProperties: function () {
            Object.defineProperty(this, "currentSong", {
                get: function () {
                    return this.songs[this.currentIndex];
                }
            });
        },
        loadCurrentSong: function () {
            imgArea.src = this.currentSong.image;
            songTitle.textContent = this.currentSong.title;
            artistName.textContent = this.currentSong.name;
            audio.src = this.currentSong.path;

            // Tu test o tren console cua web
            //console.log(imgArea, songTitle, artistName, audio)

        },
        nextSong: function () {
            this.currentIndex++;
            if (this.currentIndex >= this.songs.length) {
                this.currentIndex = 0;
            }
            this.loadCurrentSong();
        },
        prevSong: function () {
            this.currentIndex--;
            if (this.currentIndex < 0 ) {
                this.currentIndex = this.songs.length - 1;
            }
            this.loadCurrentSong();
        },
        randomSong: function(){
            let newIndex;
            do {
                newIndex = Math.floor(Math.random() * this.songs.length);
            } while (newIndex === this.currentIndex);

            this.currentIndex = newIndex;
            this.loadCurrentSong();
        },
        // start->method (phuong thuc)
        start: function(){
            //show cac thong ve bai hat image title singer
            //this.render();

            // Định nghĩa các thuộc tính cho object
            // Defines properties for the object
            this.defineProperties();

            // Tải thông tin bài hát đầu tiên vào UI khi chạy ứng dụng
            // Load the first song information into the UI when running the app-> footer-player
            this.loadCurrentSong();

            // Lắng nghe / xử lý các sự kiện (DOM events)
            // Listening / handling events (DOM events)
            this.handleEvents();
        },
    }
    // doi tuong app truy cap vao phuong thuc start() khi chuay script nay
    // cac chuc nang kha se nam trong start()
    app.start();
</script> 