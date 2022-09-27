
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);
    // Saving status of plyer song
    const PlAYER_STORAGE_KEY = "STEREO_PLAYER";

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
    const boxContent = $('.box-content');
    const boxSingle = $('.box-single');
    const boxContainer = $('.box-container');
    const activeBtn = $('.play-button-pop-up');
    // bien app ->object
    const app = {
        isPlaying: false,
        isRandom: false,
        isRepeat: false,
        config: {},
        // (1/2) Uncomment the line below to use localStorage
        config: JSON.parse(localStorage.getItem(PlAYER_STORAGE_KEY)) || {},
        setConfig: function (key, value) {
            this.config[key] = value;
            // (2/2) Uncomment the line below to use localStorage
            localStorage.setItem(PlAYER_STORAGE_KEY, JSON.stringify(this.config));
        },
        // phan tu dau tien trong songs
        currentIndex: 0,
        // songs->property (thuoc tinh) ke thua tu musicList 
        songs : musicList,

        //display image title and singer of music
        
        render: function () {
            const htmls = this.songs.map((song, index)=> {
            return `
                    <div class="box-content ${index === this.currentIndex ? 'active-song' : ''}" data-index="${index}">
                        <div class="box-single">
                            <div class="img-popup-container">
                                <a href="artists/artists_view">
                                    <img src="${song.image}" alt="" class="image">
                                </a>
                                <div class="play-button-pop-up ${index === this.currentIndex ? 'active-icon' : ''}">
                                    <span class="material-icons-round">play_arrow</span>
                                </div>
                                </div>
                                <a href="#">
                                    <span class="song-title">${song.title}</span>
                                </a>
                                <a href="artists/artists_view">
                                    <span class="singer-name">${song.name}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                `;
            })
            boxContainer.innerHTML = htmls.join("");
        },
        
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
            boxContent.onclick = function(){
                activeBtn.innerText ="pause";
            } 
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
                let totalMin = Math.floor(audioDuration / 60);
                let totalSec = Math.floor(audioDuration % 60);
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
                _this.render();
            }
            // when click on prev icon
            prevIcon.onclick = function() {
                if(_this.isRandom) {
                    _this.randomSong();
                } else {
                    _this.prevSong();
                }
                audio.play();
                _this.render();
            }
            
            // when click on Shuffle icon
            // Xử lý bật / tắt random song
            // Handling on / off random song
            randomIcon.onclick = function (e) {
                _this.isRandom = !_this.isRandom;
                _this.setConfig("isRandom", _this.isRandom); // save icon clicked status to local storage 
                randomIcon.classList.toggle("active-icon", _this.isRandom); // add and remove class active-icon
            }
        
            // Xử lý lặp lại một song
            // Single-parallel repeat processing
            repeatIcon.onclick = function (e) {
                _this.isRepeat = !_this.isRepeat;
                _this.setConfig("isRepeat", _this.isRepeat); // save icon clicked status to local storage 
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

            // Lắng nghe hành vi click vào song box
            // Listen when click on box song
            boxContainer.onclick = function(e) {
                const songNode = e.target.closest(".box-content:not(.active-song)");

                if (songNode || e.target.closest(".singer-name") || e.target.closest(".song-title") ||e.target.closest(".image")) {
                    // Xử lý khi click vào song
                    // Handle when clicking on the song
                    if (songNode) {
                        _this.currentIndex = Number(songNode.dataset.index); // convert song index to number
                        _this.loadCurrentSong();
                        _this.render();
                        audio.play();
                    }
                    
                    // Xử lý khi click vào song option
                    // Handle when clicking on the song option
                    if (e.target.closest(".singer-name") || e.target.closest(".image") ) {
                        audio.pause();
                    }
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
        loadConfig: function () {
            this.isRandom = this.config.isRandom;
            this.isRepeat = this.config.isRepeat;
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
            // Gán cấu hình từ config vào ứng dụng
            // Assign configuration from config to application
            this.loadConfig();

            // Định nghĩa các thuộc tính cho object
            // Defines properties for the object
            this.defineProperties();

            // Lắng nghe / xử lý các sự kiện (DOM events)
            // Listening / handling events (DOM events)
            this.handleEvents();

            // Tải thông tin bài hát đầu tiên vào UI khi chạy ứng dụng
            // Load the first song information into the UI when running the app-> footer-player
            this.loadCurrentSong();

            //show cac thong ve bai hat image title singer
            this.render();

            // Keep status of icon clicked when refresh page
            randomIcon.classList.toggle("active-icon", this.isRandom); // add and remove class active-icon
            repeatIcon.classList.toggle("active-icon", this.isRepeat);
        },
    }
    
    // doi tuong app truy cap vao phuong thuc start() khi chuay script nay
    // cac chuc nang kha se nam trong start()
    app.start();
    