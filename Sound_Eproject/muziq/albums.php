<?php
  include("connection/_header.php");
  require("connection/config.php");


  $insert = "SELECT * FROM `audio`";
  $result = mysqli_query($conn, $insert);

  ?>

<!-- INTRO -->
<section class="intro intro-mini full-width jIntro bg-blog" id="anchor00">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="text-center">
          <h1 class="primary-title">Albums</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- DISCOGRAPHY -->
<section class="section discography inverse-color" id="anchor04">
  <div id="discography"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="voffset70"></div>
        <div class="separator-icon">
          <i class="fa fa-music"></i>
        </div>
        <div class="voffset30"></div>
        <p class="pretitle">album hightlights</p>
        <div class="voffset20"></div>
        <h2 class="title">Discography</h2>
        <div class="voffset80"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <ul class="carousel-discography js-flickity"
          data-flickity-options='{ "cellAlign": "left", "wrapAround": true, "contain": true, "prevNextButtons": false }'>
          <!-- col-xlg-3 -->

          <?php
            $alb_data = "SELECT * FROM `albums`";
            $alb_result = mysqli_query($conn, $alb_data);
            while ($alb_rows=mysqli_fetch_assoc($alb_result)){
          ?>

          <li class="gallery-cell col-xs-12 col-sm-6 col-md-4">
            <div class="info-album">
              <div class="cover open-disc" data-url="get_album_details.php?album_get_id=<?php echo $alb_rows['albums_id'] ?>">
                <img src="data/mus-albums/<?php echo $alb_rows['albums_image'] ?>" alt="">
                <div class="rollover">
                  <i class="fa fa-bookmark-o"></i>
                  <p>view album</p>
                </div>
              </div>
              <p class="album">
                <?php echo $alb_rows['albums_name'] ?>
              </p>
              <?php 
                  if (isset($alb_rows['albums_artist_id']) && $alb_rows['albums_artist_id'] != 0) {
                    $art_data = "SELECT artist_name FROM `artist` WHERE artist_id = " . $alb_rows['albums_artist_id'];
                    $art_result = mysqli_query($conn, $art_data);
                    if ($art_result) {
                        $artist_data = mysqli_fetch_assoc($art_result);
                        $artist_name = $artist_data['artist_name'];
                    } else {
                        $artist_name = "N/A";
                    }
                } else {
                    $artist_name = "N/A";
                }
                ?>
              <p class="artist">
                <?php echo $artist_name ?>
              </p>
            </div>
          </li>
          <?php } 
          ?>

        </ul>
        <div class="voffset90"></div>
      </div>
    </div>
  </div>
  <!-- DETAILS DISCO -->
  <div id="project-show"></div>
  <div class="section player-album project-window">
    <div class="project-content">
    </div>
    <!-- AJAX Dinamic Content -->
  </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  $(document).ready(function () {
    function initializePlayer() {
      var audio = document.getElementById('playlist0');
      var playlist = $('.playlist0 li a');
      var current = 0;

      // Initialize the audio player with the first track
      audio.src = playlist[0].getAttribute('data-src');
      audio.load();

      // Handle play/pause
      audio.addEventListener("play", function () {
        $('.audiojs').addClass("playing");
      });

      audio.addEventListener("pause", function () {
        $('.audiojs').removeClass("playing");
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
        var clickedLi = $(this).parent(); // Get the parent li of the clicked link
        if (clickedLi.hasClass("playing")) {
          audio.pause(); // If it's already playing, pause it
        } else {
          audio.src = $(this).attr('data-src');
          audio.load();
          audio.play();
        }

        // Add/remove 'playing' class from all li elements
        $('.playlist0 li').removeClass("playing");
        if (!clickedLi.hasClass("playing")) {
          clickedLi.addClass("playing");
        }
      });
    }

    initializePlayer();
  });



</script>

<script>
  //   function opennew(a) {
  //     $.ajax({
  //       url: a.data("url"),
  //       success: function (b) {
  //         $(".news-content").html(b);
  //         $(".news-content").hide(0);
  //         $(".news-window").hide(0);
  //         closenew(a);
  //         $(a).parent().next(".news-window").show(0);
  //         $(a).parent().next(".news-window").css("height", "0");
  //         var c = $(".news-content").height();
  //         $(a).parent().next(".news-window").animate({ height: c }, 500, function () {
  //           $(a).parent().next(".news-window").css("height", "auto");
  //           $(".news-content").fadeIn("slow");
  //         });

  //         // Set display: block for project elements
  //         $(".section.player-album.project-window, .project-content").css("display", "block");
  //       }
  //     });
  //   }
</script>

<!-- CONTACTS -->
<?php
  include("connection/_footer.php");
  ?>