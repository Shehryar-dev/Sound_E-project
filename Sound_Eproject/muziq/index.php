<?php
  include("connection/_header.php");
  require("connection/config.php");

$insert = "SELECT * FROM `audio`";
$result = mysqli_query($conn, $insert);


?>
<!-- INTRO -->
<section class="intro full-width jIntro" id="anchor00">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="slider-intro">
          <div id="slides">
            <div class="overlay"></div>
            <div class="slides-container">
              <img src="images/demo/intro/intro-slide1.jpg" alt="slide1">
              <img src="images/demo/intro/intro-slide2.jpg" alt="slide2">
              <img src="images/demo/intro/intro-slide3.jpg" alt="slide3">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="vcenter text-center text-overlay">
      <div class="logo-intro"><img src="images/demo/logo-intro.png" alt=""></div>
      <div id="owl-main-text" class="owl-carousel">
        <div class="item">
          <h1 class="primary-title">Discover Music</h1>
        </div>
        <div class="item">
          <h1 class="primary-title">Music is Life</h1>
        </div>
      </div>
      <h2 class="subtitle-text">Share & Promote your music online</h2>
      <div class="voffset50"></div>
      <a href="404.php" class="btn btn-invert">Learn more</a>
    </div>

  </div>
</section>

<!-- PLAYER -->
<div class="player horizontal">
  <div class="container">
    <div class="info-album-player">



      <div class="album-cover" id="bg-image3" style="background-image: url(images/demo/discography/disco-3.jpg);"></div>

      <p class="album-title">Albums Mix</p>
      <p class="artist-name">Artist Playlist</p>
    </div>
    <div class="player-content">
      <audio preload></audio>
      <ol class="playlist">
        <?php
        
        while ($row = mysqli_fetch_assoc($result)) {
          
          
          ?>
        <li><a href="404.php" data-src="data/audios/<?php echo $row['audio_file']; ?>">
            <?php echo $row['audio_name']; ?>
          </a></li>
        <?php
        }
        ?>
      </ol>
      <div class="nextprev">
        <span class="prev">prev</span>
        <span class="next">next</span>
      </div>
      <span class="btnloop">loop</span>
    </div>
  </div>
</div>





<!-- UPCOMING EVENTS -->
<section class="section upcomming-events" id="anchor01">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="voffset70"></div>
        <div class="separator-icon">
          <i class="fa fa-ticket"></i>
        </div>
        <div class="voffset30"></div>
        <p class="pretitle">get read for the summer 2016</p>
        <div class="voffset20"></div>
        <h2 class="title">upcoming events</h2>
        <div class="voffset80"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="upevents">
          <div class="upevent">
            <div class="contain">
              <div class="bg-image" style="background-image: url('images/demo/events/photo-event1.jpg')"></div>
              <div class="content">
                <div class="voffset80"></div>
                <div class="date">03<span>d</span> 16<span>h</span> 20<span>m</span> 10<span>s</span></div>
                <div class="separator tag"><span>featured</span></div>
                <div class="title">Beach party music</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla error reiciendis, magni fuga quod
                  quos officia fugiat.</p>
                <p class="buttons">
                  <a href="404.php" class="btn rounded icon"><i class="fa fa-ticket"></i> buy ticket</a>
                  <a href="404.php" class="btn rounded border">View details</a>
                </p>
                <div class="voffset70"></div>
                <div class="posted"><span>posted:</span> 02 november, 2016</div>
              </div>
            </div>
          </div>
          <div class="upevent">
            <div class="contain">
              <div class="bg-image" style="background-image: url('images/demo/events/photo-event2.jpg')"></div>
              <div class="content">
                <div class="voffset30"></div>
                <div class="date">03<span>d</span> 16<span>h</span> 20<span>m</span> 10<span>s</span></div>
                <div class="separator tag"><span>featured</span></div>
                <div class="title">Rock live music event</div>
                <p class="buttons">
                  <a href="404.php" class="btn rounded icon"><i class="fa fa-ticket"></i> buy ticket</a>
                  <a href="404.php" class="btn rounded border">View details</a>
                </p>
                <div class="posted"><span>posted:</span> 02 november, 2016</div>
              </div>
            </div>
          </div>
          <div class="upevent">
            <div class="contain">
              <div class="bg-image" style="background-image: url('images/demo/events/photo-event3.jpg')"></div>
              <div class="content">
                <div class="voffset80"></div>
                <div class="date">03<span>d</span> 16<span>h</span> 20<span>m</span> 10<span>s</span></div>
                <div class="separator tag"><span>popular</span></div>
                <div class="title">HIP HOP Party Music</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla error reiciendis, magni fuga quod
                  quos officia fugiat.</p>
                <p class="buttons">
                  <a href="404.php" class="btn rounded icon unactive"><i class="fa fa-ticket"></i> closed</a>
                  <a href="404.php" class="btn rounded border">View details</a>
                </p>
                <div class="voffset70"></div>
                <div class="posted"><span>posted:</span> 02 november, 2016</div>
              </div>
            </div>
          </div>
          <div class="upevent">
            <div class="contain">
              <div class="bg-image" style="background-image: url('images/demo/events/photo-event4.jpg')"></div>
              <div class="content">
                <div class="voffset80"></div>
                <div class="date">03<span>d</span> 16<span>h</span> 20<span>m</span> 10<span>s</span></div>
                <div class="separator tag"><span>featured</span></div>
                <div class="title">INDIE <br>MUSIC show</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla error reiciendis, magni fuga quod
                  quos officia fugiat.</p>
                <p class="buttons">
                  <a href="404.php" class="btn rounded icon"><i class="fa fa-ticket"></i> buy ticket</a>
                  <a href="404.php" class="btn rounded border">View details</a>
                </p>
                <div class="voffset70"></div>
                <div class="posted"><span>posted:</span> 02 november, 2016</div>
              </div>
            </div>
          </div>
          <div class="upevent">
            <div class="contain">
              <div class="bg-image" style="background-image: url('images/demo/events/photo-event5.jpg')"></div>
              <div class="content">
                <div class="voffset30"></div>
                <div class="date">03<span>d</span> 16<span>h</span> 20<span>m</span> 10<span>s</span></div>
                <div class="separator tag"><span>recent</span></div>
                <div class="title">awesome music event</div>
                <p class="buttons">
                  <a href="404.php" class="btn rounded icon"><i class="fa fa-ticket"></i> buy ticket</a>
                  <a href="404.php" class="btn rounded border">View details</a>
                </p>
                <div class="posted"><span>posted:</span> 02 november, 2016</div>
              </div>
            </div>
          </div>
          <div class="upevent">
            <div class="contain">
              <div class="bg-image" style="background-image: url('images/demo/events/photo-event6.jpg')"></div>
              <div class="content">
                <div class="voffset30"></div>
                <div class="date">03<span>d</span> 16<span>h</span> 20<span>m</span> 10<span>s</span></div>
                <div class="separator tag"><span>featured</span></div>
                <div class="title">country music</div>
                <p>Proin gravida nibh vel velit auctor aliquet.</p>
                <p class="buttons">
                  <a href="404.php" class="btn rounded icon"><i class="fa fa-ticket"></i> buy ticket</a>
                  <a href="404.php" class="btn rounded border">View details</a>
                </p>
                <div class="posted"><span>posted:</span> 02 november, 2016</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="voffset80"></div>
</section>

<!-- TWITTER -->
<section class="section twitterfeed inverse-color full-width parallax-section"
  data-parallax-image="images/demo/bg-twitter.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <i class="fa fa-twitter"></i>
        <div id="twitter-feed"></div>
      </div>
    </div>
  </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
  $(document).ready(function () {
    function initializePlayer() {
      var audio = document.getElementsByTagName('audio')[0];
      var playlist = $('.playlist a');
      var current = 0;

      // Initialize the audio player with the first track
      audio.src = playlist[0].getAttribute('data-src');
      audio.load();

      // Handle play/pause
      // Get the audio element and play/pause button
      // var audio = document.getElementById('audio');
      // / Assuming you have an <audio> element with the ID "myAudio"
      var audio = document.getElementById("myAudio");
      var audiojsElement = document.querySelector(".audiojs");

      audio.addEventListener("play", function () {
        audiojsElement.classList.add("playing");
      });

      audio.addEventListener("pause", function () {
        audiojsElement.classList.remove("playing");
      });


      // Handle track changes
      audio.addEventListener('ended', function () {
        current++;
        if (current === playlist.length) {
          current = 0;
        }
        audio.src = playlist[current].getAttribute('data-src');
        audio.load();
        audio.play();
      });

      // Handle clicking on playlist items
      playlist.click(function (e) {
        e.preventDefault();
        audio.src = $(this).attr('data-src');
        audio.load();
        audio.play();
      });
    }

    initializePlayer();
  });





</script>

<!-- CONTACTS -->
<?php
include("connection/_footer.php");
?>