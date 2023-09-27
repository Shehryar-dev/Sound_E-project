<?php
require("connection/config.php");

$dis_id = $_GET['album_get_id'];
$album_dis = "SELECT * FROM `audio` INNER JOIN `albums`
ON `audio`.`audio_albums_id` = `albums`.`albums_id` WHERE `albums_id` = '$dis_id'";

$album_rslt = mysqli_query($conn,$album_dis);

?>
<div class="container">
        <div class="close-btn"></div>
        <div class="voffset90"></div>
        <div class="row">
          <div class="col-md-4">
          <div class="info-album">
          <?php
    // Assuming you have a database connection established and an album ID $dis_id
    $album_query = "SELECT * FROM `albums` WHERE `albums_id` = $dis_id";
    $album_result = mysqli_query($conn, $album_query);
    
    if ($album_result && mysqli_num_rows($album_result) > 0) {
        $album_data = mysqli_fetch_assoc($album_result);
        $album_name = $album_data['albums_name'];

        // Fetch artist name for this album
        $artist = "N/A"; // Default value
        if (isset($album_data['albums_artist_id']) && $album_data['albums_artist_id'] != 0) {
            $artist_query = "SELECT artist_name FROM `artist` WHERE artist_id = " . $album_data['albums_artist_id'];
            $artist_result = mysqli_query($conn, $artist_query);
            if ($artist_result) {
                $artist_data = mysqli_fetch_assoc($artist_result);
                $artist = $artist_data['artist_name'];
            }
        }

        $album_description = $album_data['albums_des'];
        $album_image = $album_data['albums_image'];
        ?>
        <div class="cover">
            <img src="data/mus-albums/<?php echo $album_image; ?>" alt="<?php echo $album_name; ?>">
        </div>
        <p class="album album-list"><?php echo $album_name; ?></p>
        <p class="artist"><?php echo $artist; ?></p>
        <div class="voffset20"></div>
        <p class="description"><?php echo $album_description; ?></p>
        <p class="buyalbum">
            <a href="404.php" class="btn rounded icon"><i class="fa fa-cart-plus"></i> Buy Album</a>
        </p>
        <?php
    } else {
        echo "Album not found.";
    }
?>

  <ul class="links">
    <li><a href="404.php">itunes</a></li>
    <li><a href="404.php">spotify</a></li>
    <li><a href="404.php">beatport</a></li>
  </ul>
  <div class="voffset80"></div>
  
</div>

          </div>
          <div class="col-md-8">
            <div class="disc-tracklist ">


              <div class="audiojs " id="audiojs_wrapper1">
                <audio preload id="playlist0"></audio>
                <div class="play-pause">
                  <p class="play"></p>
                  <p class="pause"></p>
                  <p class="loading"></p>
                  <p class="error"></p>
                </div>
                <div class="scrubber">
                  <div class="progress" style="width: 0px;"></div>
                  <div class="loaded" style="width: 0px;"></div>
                </div>
                <div class="time"> <em class="played"></em>/<strong class="duration"></strong> </div>
                <div class="error-message"></div>
              </div>



              <ol class="playlist0">
                <?php
                while ($row = mysqli_fetch_assoc($album_rslt)) {
                  if (isset($row['audio_albums_id']) && $row['audio_albums_id'] != 0) {
                    $albQuery = "SELECT * FROM `albums` WHERE albums_id = " . $row['audio_albums_id'];
                    $albResult = mysqli_query($conn, $albQuery);
                    if ($albResult) {
                        $albdata = mysqli_fetch_assoc($albResult);
                        $albumName = $albdata['albums_name'];
                        $albumimg = $albdata['albums_image'];
                        $albumdesc = $albdata['albums_des'];
                    } else {
                        $albumName = "N/A";
                    }
                } else {
                    $albumName = "N/A";
                }
              ?>
                <li>
                  <a href="404.php" data-src="data/audios/<?php echo $row['audio_file']; ?>">
                    <div class="track-info">
                      <p class="track-title">
                        <?php echo $row['audio_name']; ?>
                      </p>

                      <div class="track-album">
                        <?php echo $albumName ?>
                      </div>
                    </div>
                  </a>
                </li>
                <?php } ?>

              </ol>
            </div>
          </div>
        </div>
      </div>