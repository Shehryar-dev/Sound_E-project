<?php
include("Connection/header.php");
require("Connection/config.php");

$insert = "SELECT * FROM `audio`";
$result = mysqli_query($conn, $insert);
$audio = "SELECT * FROM `audio`";
$aud_result = mysqli_query($conn, $audio);
?>
<!-- END TOPBAR -->
<!-- START CONTAINER -->
<?php
include("Connection/sidebar.php");
?>
<!-- MAIN MENU - END -->
<style>
  body {
    background: url("data/bg.jpg");
    background-size: 50% auto;
  }



  .player {
    /* position: relative; */
    width: 350px;
    background: #f1f3f4;
    box-shadow: 0 50px 80px rgba(0, 0, 0, 0.25);
  }

  .player .imgbx {
    position: relative;
    width: 100%;
    height: 350px;
  }

  .player .imgbx img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .player audio {
    width: 100%;
    outline: none;
  }
</style>




<!--  SIDEBAR - END -->
<!-- START CONTENT -->
<section id="main-content" class=" ">
  <section class="wrapper main-wrapper" style=''>

    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
      <div class="page-title">

        <div class="pull-left">
          <h1 class="title" style="color:#ffffff;">Songs</h1>
        </div>

        <div class="pull-right hidden-xs">
          <ol class="breadcrumb text-light">
            <li >
              <a style="color:#ffffff;" href="index-music.php"><i class="fa fa-home"></i>Home</a>
            </li>
            <li >
              <a href="mus-albums.php" style="color:#ffffff;">Songs</a>
            </li>
            <li class="active text-light" style="color:#ffffff;">
              <strong>All Songs</strong>
            </li>
          </ol>
        </div>

      </div>
    </div>
    <div class="clearfix"></div>

    <div class="col-lg-12">
      <section class="box ">
        <header class="panel_header">
          <h2 class="title pull-left">All Songs</h2>
          <div class="actions panel_actions pull-right">
            <i class="box_toggle fa fa-chevron-down"></i>
            <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
            <i class="box_close fa fa-times"></i>
          </div>
        </header>
        <div class="content-body">
          <div class="row">
            <div class="col-lg-12">
              <section class="box ">
                <header class="panel_header">
                  <!-- <h2 class="title pull-left">Bordered Table</h2> -->
                  <div class="actions panel_actions pull-right">
                    <i class="box_toggle fa fa-chevron-down"></i>
                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                    <i class="box_close fa fa-times"></i>
                  </div>
                </header>
                <div class="content-body">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <table class="table table-bordered text-center">
                        <thead>
                          <tr>
                            <th class=" text-center">ID</th>
                            <th class=" text-center">Audio Name</th>
                            <th class=" text-center">Audio File</th>
                            <th class=" text-center">Audio Genre Id</th>
                            <th class=" text-center">Audio Artist Id</th>
                            <th class=" text-center">Audio Album Id</th>
                            <th class=" text-center">Update</th>
                            <th class=" text-center">Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                              while($datarun = mysqli_fetch_assoc($result)){
                          ?>

                          <tr>

                            <td>
                              <?php echo $datarun['audio_id']?>
                            </td>

                            <td>
                              <?php echo $datarun['audio_name']?>
                            </td>


                            <td>
                              <?php echo $datarun['audio_file']?>
                            </td>

                            <?php
                                // Fetch genre name for this audio
                                $genreQuery = "SELECT genre_name FROM `genre` WHERE genre_id = " . $datarun['audio_genre_id'];
                                $genreResult = mysqli_query($conn, $genreQuery);
                                if ($genreResult) {
                                    $genreData = mysqli_fetch_assoc($genreResult);
                                    $genreName = $genreData['genre_name'];
                                } else {
                                    $genreName = "N/A";
                                }
                            ?>
                            <td>
                              <?php echo $genreName ?>
                            </td>



                            <?php
                                // Fetch artist name for this audio
                                $artistQuery = "SELECT artist_name FROM `artist` WHERE artist_id = " . $datarun['audio_artist_id'];
                                $artistResult = mysqli_query($conn, $artistQuery);
                                if ($artistResult) {
                                    $artistData = mysqli_fetch_assoc($artistResult);
                                    $artistName = $artistData['artist_name'];
                                } else {
                                    $artistName = "N/A";
                                }
                            ?>

                            <td>
                              <?php echo $artistName ?>
                            </td>

                            <?php
                                 if (isset($datarun['audio_albums_id']) && $datarun['audio_albums_id'] != 0) {
                                     $albQuery = "SELECT albums_name FROM `albums` WHERE albums_id = " . $datarun['audio_albums_id'];
                                     $albResult = mysqli_query($conn, $albQuery);
                                     if ($albResult) {
                                         $albdata = mysqli_fetch_assoc($albResult);
                                         $albumName = $albdata['albums_name'];
                                     } else {
                                         $albumName = "N/A";
                                     }
                                 } else {
                                     $albumName = "N/A";
                                 }
                             ?>

                            <td>
                              <?php echo $albumName ?>
                            </td>

                            <td> <a href="mus-song-edit.php?updateId=<?php echo $datarun['audio_id']?>"
                                class="btn btn-success"><i class="fa fa-pencil"></i></a>
                            </td>
                            <td> <a href="mus-song-del.php?deleteId=<?php echo $datarun['audio_id']?>"
                                class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                            </td>

                          </tr>
                          <?php } ?>



                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="row m-auto">
                    <?php
                      $card = "SELECT * FROM `audio`";
                      $card_result = mysqli_query($conn, $card);
                      while($card_data=mysqli_fetch_assoc($card_result)){
                    ?>
                    <div class="col col-sm-6 col-md-6 col-xs-4 " style="margin-top:20px;">
                      <div class="player">
                        <div class="imgbx">
                          <img src="data/mus-audio/<?php echo $card_data['audio_image'] ?>">
                        </div>
                        <audio controls>
                          <source src="data/audios/<?php echo $card_data['audio_file'] ?>">
                        </audio>
                      </div>
                    </div>
                    <?php } 
                    ?>
                  </div>

                </div>

              </section>
            </div>
          </div>
        </div>

      </section>
    </div>
  </section>
  
</section>
<script src="assets/js/jquery-3.6.0.min.js" type="text/javascript"></script>

<!-- END CONTENT -->
<?php
include("Connection/end.php");
?>



<!-- END CONTAINER -->
<!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->


<!-- CORE JS FRAMEWORK - START -->
<script src="assets/js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.easing.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script>
<script src="assets/plugins/viewport/viewportchecker.js" type="text/javascript"></script>
<!-- CORE JS FRAMEWORK - END -->


<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->


<!-- CORE TEMPLATE JS - START -->
<script src="assets/js/scripts.js" type="text/javascript"></script>
<!-- END CORE TEMPLATE JS - END -->

<!-- Sidebar Graph - START -->
<script src="assets/plugins/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="assets/js/chart-sparkline.js" type="text/javascript"></script>
<!-- Sidebar Graph - END -->













<!-- General section box modal start -->
<div class="modal" id="section-settings" tabindex="-1" role="dialog" aria-labelledby="ultraModal-Label"
  aria-hidden="true">
  <div class="modal-dialog animated bounceInDown">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Section Settings</h4>
      </div>
      <div class="modal-body">

        Body goes here...

      </div>
      <div class="modal-footer">
        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
        <button class="btn btn-success" type="button">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- modal end -->
</body>

<!-- Mirrored from jaybabani.com/ultra-admin-html/preview/mus-albums.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Sep 2023 23:06:33 GMT -->

</html>