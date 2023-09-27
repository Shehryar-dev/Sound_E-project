<?php
include("connection/_header.php");
require("Connection/config.php");
  $insert = "SELECT * FROM `artist`";
  $result = mysqli_query($conn, $insert);
?>
    <!-- INTRO -->
    <section class="intro intro-mini full-width jIntro bg-blog" id="anchor00">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-center">
              <h1 class="primary-title">Artist</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- FEATURED ARTIST -->
    <section class="section featured-artists" id="anchor02">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="voffset70"></div>
            <div class="separator-icon">
              <i class="fa fa-microphone"></i>
            </div>
            <div class="voffset30"></div>
            <p class="pretitle">get read for the summer 2016</p>
            <div class="voffset20"></div>
            <h2 class="title">featured Artist</h2>
            <div class="voffset80"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">           
            <div class="voffset20"></div>
            <div class="js-flickity" data-flickity-options='{ "cellAlign": "left", "wrapAround": true, "contain": true, "prevNextButtons": false }'>
            <?php  
            
            while($data = mysqli_fetch_assoc($result)){
              ?>
            <div class="gallery-cell col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="featured-artist">
                  <div class="image" >
                    <img src="..\Admin_panel\data\mus-artists/<?php echo $data['artist_image'] ?>" alt="">
                  </div>
                  <div class="rollover">
                    <ul class="social">
                      <li><a href="404.php"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="404.php"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="404.php"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                    <div class="text">
                      <h4 class="title-artist"> <?php echo $data['artist_name'] ?></h4>
                      <?php  
                      $query3 = "SELECT genre_name FROM `genre` WHERE genre_id = " . $data['artist_genre_id'];
                      $gn_rsl = mysqli_query($conn, $query3);
      
                      $genre_data = mysqli_fetch_assoc($gn_rsl);
                      ?>
                      <p><?php echo $genre_data['genre_name'] ?></p>
                    </div>
                  </div>
                </div>
              </div>
              
              <?php } ?>
            </div>
          </div>
        </div>
        <div class="voffset120"></div>
      </div>
    </section>

    <!-- CONTACTS -->
    <?php
  include("connection/_footer.php");
  ?>
