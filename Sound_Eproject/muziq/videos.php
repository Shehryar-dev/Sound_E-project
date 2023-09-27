<?php
  include("connection/_header.php");

require("connection/config.php");

$video_querry = "SELECT * FROM `video`";
$video_result = mysqli_query($conn, $video_querry);

  ?>


<style>
    section.list {
        margin-top: 12vw
    }

    section.list ol {
        list-style: none;
        display: flex;
        flex-direction: column
    }

    @media (min-width:47.5em) {
        section.list ol {
            flex-direction: row;
            flex-wrap: wrap;
            padding-left: 8vw;
            padding-right: 8vw;
            margin-left: -1em;
            margin-right: -1em
        }
    }

    section.list ol li {
        padding-left: 2em;
        padding-right: 2em;
        width: 100%
    }

    @media (min-width:47.5em) {
        section.list ol li {
            width: 33%;
            padding-left: 1em;
            padding-right: 1em
        }
    }

    section.list ol li a {
        display: flex;
        flex-direction: column
    }

    section.list ol li a>span {
        display: inline-block;
        position: relative
    }

    section.list ol li a>span:after {
        content: "";
        display: inline-block;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-repeat: no-repeat;
        background-position: 95% 92%;
        background-size: 5vw auto
    }

    @media (min-width:47.5em) {
        section.list ol li a>span:after {
            background-size: 3vw auto
        }
    }

    section.list ol li a>span:before {
        content: "";
        display: inline-block;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        /* background-image: url(/static/img/play-over.svg); */
        background-repeat: no-repeat;
        background-position: 50% 50%;
        background-size: 8vw auto
    }

    @media (min-width:47.5em) {
        section.list ol li a>span:before {
            background-size: 5vw auto
        }
    }

    section.list ol li a>span img {
        width: 100%
    }

    /* section.list ol li a>span:hover:before {
        background-image: url(static/img/play.svg)
    } */

    section.list ol li image {
        width: 100%;
        order: 2
    }

    section.list ol li .details {
        padding: 2em 0 4em;
        order: 1
    }

    @media (min-width:47.5em) {
        section.list ol li .details {
            min-height: 15vw;
            padding: 2em 0
        }
    }

    section.list ol li .details h3 {
        font-size: 6vw;
        font-weight: 400;
        line-height: 1.2;
        letter-spacing: -.1px
    }

    @media (min-width:47.5em) {
        section.list ol li .details h3 {
            font-size: 1.8vw
        }
    }

    section.list ol li .details p {
        font-size: 4vw;
        font-weight: 400;
        line-height: 1.5;
        letter-spacing: -.1px;
        margin-top: .5em
    }

    @media (min-width:47.5em) {
        section.list ol li .details p {
            font-size: 1.15vw
        }
    }

    /* section.list ol li.private a>span:after {
        background-image: url(static/img/padlock.svg)} */


    section.list ol li.featured {
        padding-left: 0;
        padding-right: 0
    }

    @media (min-width:47.5em) {
        section.list ol li.featured {
            width: 100%;
            margin-bottom: 10vw;
            padding-left: 1em;
            padding-right: 1em
        }
    }

    section.list ol li.featured .details {
        min-height: auto;
        padding: 2em;
        display: flex;
        align-items: center;
        justify-content: center
    }

    @media (min-width:47.5em) {
        section.list ol li.featured .details {
            padding: 0 2em
        }
    }

    @media (min-width:47.5em) {
        section.list ol li.featured a {
            display: flex;
            flex-direction: row
        }
    }

    @media (min-width:47.5em) {
        section.list ol li.featured a>span {
            width: 65%
        }
    }

    @media (min-width:47.5em) {
        section.list ol li.featured .details {
            width: 35%
        }



    }

    section.list ol li.featured .details h3 {
        position: relative;
        margin-bottom: 1.5em;
        margin-left: 4px
    }

    section.list ol li.featured .details h3:after {
        content: "";
        width: 35px;
        height: 3px;
        background-color: #232323;
        position: absolute;
        bottom: -.8em;
        left: -2px
    }

    section.list ol li.featured .details p {
        margin-top: 1em
    }

    .modal-overlay .closeBtn,
    .modal .closeBtn {
        position: fixed;
        right: 5vw;
        top: 5vw;
        border: 0;
        padding: 0;
        background: none;
        width: 25px;
        height: 25px;
        outline: 0
    }

    .modal-overlay .closeBtn span,
    .modal .closeBtn span {
        -webkit-transform: translateZ(0) translateX(0) translateZ(0);
        transform: translateZ(0) translateX(0) translateZ(0);
        position: absolute;
        left: 0;
        width: 100%;
        height: 10%;
        min-height: 2px;
        display: block;
        background: #eabbbb
    }

    .modal-overlay .closeBtn .barOne,
    .modal .closeBtn .barOne {
        top: 50%;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg)
    }

    .modal-overlay .closeBtn .barTwo,
    .modal .closeBtn .barTwo {
        top: 50%;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg)
    }

    .modal {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 120;
        width: 100%;
        height: 100%;
        min-height: 100%;
        background-color: rgba(0, 0, 0, .9);
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        transition: opacity .2s linear;
        overflow: hidden;
        opacity: 0;
        pointer-events: none
    }

    .modal .video {
        width: 90%;
        padding: .5em
    }

    @media (min-width:47.5em) {
        .modal .video {
            padding: 2em
        }
    }

    .modal iframe,
    .modal video {
        width: 100%;
        height: 100%;
        min-height: 55vw;
        border: 20px solid #000;
        background-color: #000
    }

    .modal video:-webkit-full-screen {
        width: 100%;
        height: 100%;
        max-height: 100%
    }

    .modal[data-active=true] {
        opacity: 1;
        pointer-events: unset
    }

    .search {
        padding: 20px;
        /* height: 10vh; */
        margin: auto;
    }

    .inputContainer {
        width: 600px;
        /* margin: 20px 0; */
        position: relative;
    }

    .inputContainer input {
        font-size: 20px;
        width: 100%;
        height: 50px;
        outline: none;
        padding: 0 20px;
        color: whitesmoke;
        background-color: #040004;
        border-radius: 50px;
        border: 2px solid #aaa;
    }

    .inputContainer i {
        font-size: 24px;
        color: #998fc7;
        position: absolute;
        right: 20px;
        top: 50%;
        transform: translate(-50%, -50%);
        cursor: pointer;
    }

    ::placeholder {
        color: #eaeaea;
    }

    @media screen and (max-width: 620px) {
        .inputContainer {
            width: 300px;
            /* margin: 20px 0; */
            position: relative;
        }

    }
</style>

<!-- INTRO -->
<section class="intro intro-mini full-width jIntro bg-blog" id="anchor00">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <h1 class="primary-title">Song Videos</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section last-media inverse-color" id="anchor06">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="voffset90"></div>
                <div class="separator-icon">
                    <i class="fa fa-picture-o "></i>
                </div>
                <div class="voffset30"></div>
                <p class="pretitle">get read for the last stuff</p>
                <div class="voffset20"></div>
                <h2 class="title">latest Videos</h2>
                <div class="voffset50"></div>
            </div>
        </div>
        <!-- Filters -->
        <div class="row"
            style="margin:auto; display: flex;justify-content: center;flex-direction: column;align-items: center;">
            <div class="inputContainer">
                <input type="text" id="input" placeholder="Search Videos">
                <i class="fa fa-search"></i>
            </div>

        </div>

        <!-- gallery -->
        <div class="row">


            <section class="list">
                <ol class="portfolio-list">

                    <?php  while ($vid_rows=mysqli_fetch_assoc($video_result)){ 
                    ?>

                    <li data-name="<?php echo $vid_rows['video_title'] ?>"><a style="cursor: pointer;" href="#!"
                            class="playlink"
                            data-video-url="data/videos/<?php echo $vid_rows['video_file'] ?>"><span><img
                                    src="data/mus-video/<?php echo $vid_rows['video_thumbnail']?>" alt="" /></span>
                            <div class="details">
                                <div>
                                    <h3>
                                        <?php echo $vid_rows['video_title'] ?>
                                    </h3>

                                    <?php 
                  if (isset($vid_rows['video_albums_id']) && $vid_rows['video_albums_id'] != 0) {
                    $vid_data = "SELECT albums_des FROM `albums` WHERE albums_id = " . $vid_rows['video_albums_id'];
                    $vid_result = mysqli_query($conn, $vid_data);
                    if ($vid_result) {
                        $video_data = mysqli_fetch_assoc($vid_result);
                        $video_name = $video_data['albums_des'];
                    } else {
                        $video_name = "N/A";
                    }
                } else {
                    $video_name = "N/A";
                }
                ?>
                                    <p>
                                        <?php echo $video_name ?>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <?php } ?>


                </ol>
            </section>
            <div class="modal" data-active="false">
                <button class="closeBtn"><span class="barOne"></span><span class="barTwo"></span></button>
                <div class="video"></div>
            </div>
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    var modal = document.querySelector(".modal");
                    var videoContainer = document.querySelector(".video");
                    var closeBtn = document.querySelector(".closeBtn");

                    var videoPlayer;

                    var playLinks = document.querySelectorAll(".playlink");

                    playLinks.forEach(function (button) {
                        button.onclick = function () {
                            modal.setAttribute("data-active", "true");
                            const videoUrl = button.getAttribute("data-video-url");
                            videoContainer.innerHTML = "";
                            videoPlayer = document.createElement("iframe");
                            videoPlayer.src = videoUrl;
                            videoPlayer.setAttribute("frameborder", "0");
                            videoPlayer.setAttribute("allowfullscreen", "true");
                            videoContainer.appendChild(videoPlayer);

                            setTimeout(function () {
                                videoPlayer.contentWindow.postMessage(JSON.stringify({ method: "play" }), "*");
                            }, 2000);
                        };
                    });

                    closeBtn.onclick = function () {
                        modal.setAttribute("data-active", "false");
                        videoContainer.innerHTML = "";
                    };
                });

                const inputEl = document.querySelector("#input");
                const searchEl = document.querySelector(".inputContainer i");
                const imageBoxEls = document.querySelectorAll(".portfolio-list li");

                function handleSearch() {
                    const inputValue = inputEl.value.toLowerCase().trim(); // Convert to lowercase and trim whitespace

                    imageBoxEls.forEach((imageBoxEl) => {
                        const videoTitle = imageBoxEl.getAttribute("data-name").toLowerCase().trim(); // Convert to lowercase and trim whitespace
                        if (videoTitle && videoTitle.includes(inputValue)) {
                            imageBoxEl.style.display = "block";
                        } else {
                            imageBoxEl.style.display = "none";
                        }
                    });
                }

                searchEl.addEventListener("click", () => {
                    handleSearch();
                });

                inputEl.addEventListener("keyup", (event) => {
                    if (event.key === "Enter") {
                        handleSearch();
                    }
                    if (inputEl.value === "") {
                        imageBoxEls.forEach((imageBoxEl) => {
                            imageBoxEl.style.display = "block";
                        });
                    }
                });

            </script>

        </div>
</section>






<?php
  include("connection/_footer.php");
  ?>