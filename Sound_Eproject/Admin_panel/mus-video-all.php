<?php
include("Connection/header.php");
require("Connection/config.php");

$insert = "SELECT * FROM `video`";
$result = mysqli_query($conn, $insert);
?>
<!-- END TOPBAR -->
<!-- START CONTAINER -->
<?php
include("Connection/sidebar.php");
?>

<!-- MAIN MENU - END -->
<style>
    .title {
        width: 100%;
        max-width: 854px;
        margin: 0 auto;
    }

    .caption {
        width: 100%;
        max-width: 854px;
        margin: 0 auto;
        padding: 20px 0;
    }

    .vid-main-wrapper {
        width: 100%;
        max-width: 1100px;
        min-width: 440px;
        background: #fff;
        margin: 0 auto;
    }



    .vid-container {
        position: relative;
        padding-bottom: 52%;
        padding-top: 30px;
        height: 0;
        width: 70%;
        float: left;
    }

    .vid-container iframe,
    .vid-container object,
    .vid-container embed {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        min-height: 360px;
        overflow: hidden;


    }


    /*  VIDEOS PLAYLIST 
 		############################### */
    .vid-list-container {
        width: 30%;
        height: 360px;
        overflow: hidden;
        float: right;
        background: #32323a;

    }

    .vid-list-container:hover,
    .vid-list-container:focus {
        overflow-y: auto;
    }

    ol#vid-list {
        margin: 0;
        padding: 0;
        background: #32323a;
    }

    ol#vid-list li {
        list-style: none;
    }

    ol#vid-list li a {
        text-decoration: none;
        background-color: #32323a;
        height: 55px;
        display: block;
        padding: 10px;
    }

    ol#vid-list li a:hover {
        background-color: #666666;
    }

    .vid-thumb {
        float: left;
        margin-right: 8px;
    }

    .active-vid {
        background: #32323a;
    }

    #vid-list .desc {
        color: #CACACA;
        font-size: 13px;
        margin-top: 5px;
    }


    @media (max-width: 624px) {


        .caption {
            margin-top: 40px;
        }

        .vid-list-container {
            padding-bottom: 20px;
        }

    }
</style>




<!--  SIDEBAR - END -->
<!-- START CONTENT -->
<section id="main-content" >
    <section class="wrapper main-wrapper" >

        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
            <div class="page-title">

                <div class="pull-left">
                    <h1 class="title" style="color:#ffffff;">Videos</h1>
                </div>

                <div class="pull-right hidden-xs">
                    <ol class="breadcrumb" style="color:#ffffff;">
                        <li>
                            <a href="index-music.php" style="color:#ffffff;"><i class="fa fa-home"></i>Home</a>
                        </li>
                        <li>
                            <a href="mus-video-all.php" style="color:#ffffff;"> Video</a>
                        </li>
                        <li class="active" style="color:#ffffff;">
                            <strong>All Videos</strong>
                        </li>
                    </ol>
                </div>

            </div>
        </div>
        <div class="clearfix"></div>

        <div class="col-lg-12">
            <section class="box ">
                <header class="panel_header">
                    <h2 class="title pull-left">All Videos</h2>
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
                                        <i class="box_setting fa fa-cog" data-toggle="modal"
                                            href="#section-settings"></i>
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
                                                        <th class=" text-center">Video Title</th>
                                                        <th class=" text-center">Video File</th>
                                                        <th class=" text-center">Video Genre Id</th>
                                                        <th class=" text-center">Video Artist Id</th>
                                                        <th class=" text-center">Video Album Id</th>
                                                        <th class=" text-center">Update</th>
                                                        <th class=" text-center">Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    while($data = mysqli_fetch_assoc($result)){
                                                ?>

                                                    <tr>

                                                        <td>
                                                            <?php echo $data['video_id']?>
                                                        </td>

                                                        <td>
                                                            <?php echo $data['video_title']?>
                                                        </td>


                                                        <td>
                                                            <?php echo $data['video_file']?>
                                                        </td>

                                                        <?php
                                                            $genreQuery = "SELECT genre_name FROM `genre` WHERE genre_id = " . $data['video_genre_id'];
                                                            $genreResult = mysqli_query($conn, $genreQuery);
                                                            $genreName = mysqli_fetch_assoc($genreResult)['genre_name'];
                                                            // artist
                                                            $artistQuery = "SELECT artist_name FROM `artist` WHERE artist_id = " . $data['video_artist_id'];
                                                            $artistResult = mysqli_query($conn, $artistQuery);
                                                            $artistName = mysqli_fetch_assoc($artistResult)['artist_name'];
                                                            // albums
                
                                                            $albumName = "N/A"; 
                                                            if (!empty($data['video_albums_id'])) {
                                                                 $albumQuery = "SELECT albums_name FROM `albums` WHERE albums_id = " . $data['video_albums_id'];
                                                                 $albumResult = mysqli_query($conn, $albumQuery);
                                                                 if ($albumResult) {
                                                                     $albumData = mysqli_fetch_assoc($albumResult);
                                                                     $albumName = $albumData['albums_name'];
                                                                 }
                                                            }
                                                       ?>
                                                        <td>
                                                            <?php echo $genreName ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $artistName ?>
                                                        </td>


                                                        <td>
                                                            <?php echo $albumName ?>
                                                        </td>
                                                        <td> <a href="mus-video-edit.php?updateId=<?php echo $data['video_id']?>"
                                                                class="btn btn-success"><i class="fa fa-pencil"></i></a>
                                                        </td>
                                                        <td> <a href="mus-video-del.php?deleteId=<?php echo $data['video_id']?>"
                                                                class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                                                        </td>

                                                    </tr>
                                                    <?php } ?>



                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <?php
                                                $query = "SELECT * FROM `video`";
                                                $resultA = mysqli_query($conn, $query);
                                            
                                                $data = mysqli_fetch_assoc($resultA);
                                                $videoUrl = $data['video_file'];
                                            ?>

                                            <div class="vid-main-wrapper clearfix" style="margin-top:5%;">

                                                <!-- THE YOUTUBE PLAYER -->
                                                <div class="vid-container">
                                                    <iframe id="vid_frame" src="data/videos/<?php echo $videoUrl ?>"
                                                        frameborder="0" width="560" height="315"></iframe>
                                                </div>

                                                <!-- THE PLAYLIST -->
                                                <div class="vid-list-container">
                                                    <ol id="vid-list">
                                                        <?php
                                                            $query = "SELECT * FROM `video`";
                                                            $result = mysqli_query($conn, $query);

                                                            while ($data = mysqli_fetch_assoc($result)) {
                                                                $videoUrl = $data['video_file'];
                                                        ?>
                                                        <li>
                                                            <a href="javascript:void();"
                                                                onClick="document.getElementById('vid_frame').src='data/videos/<?php echo $videoUrl ?>?autoplay=1&rel=0&showinfo=0&autohide=1'">
                                                                <span class="vid-thumb"><img width="67px"
                                                                        src="data/mus-video/<?php echo $data['video_thumbnail']?>" /></span>
                                                                <div class="desc">
                                                                    <?php echo $data['video_title'] ?>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <?php } ?>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>


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
<script>
    $(document).ready(function () {
        $('.vid-item').each(function (index) {
            $(this).on('click', function () {
                var current_index = index + 1;
                $('.vid-item .thumb').removeClass('active');
                $('.vid-item:nth-child(' + current_index + ') .thumb').addClass('active');
            });
        });
    });
</script>
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
</body>


</html>