<?php
include("Connection/header.php");
?>
<!-- END TOPBAR -->
<!-- START CONTAINER -->
<?php
include("Connection/sidebar.php");
?>



<!-- MAIN MENU - END -->




<!--  SIDEBAR - END -->
<!-- START CONTENT -->
<section id="main-content" class=" ">
    <section class="wrapper main-wrapper" style=''>

        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
            <div class="page-title">

                <div class="pull-left">
                    <h1 class="title" style="color:#ffffff;">Dashboard</h1>
                </div>


            </div>
        </div>
        <div class="clearfix"></div>


        <div class="col-lg-12">
            <section class="box ">
                <header class="panel_header">
                    <h2 class="title pull-left">Trending Albums</h2>
                    <div class="actions panel_actions pull-right">
                        <i class="box_toggle fa fa-chevron-down"></i>
                        <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                        <i class="box_close fa fa-times"></i>
                    </div>
                </header>
                <div class="content-body">
                    <div class="row">


                        <?php
                            $insert1 = "SELECT * FROM `albums`";
                            $results = mysqli_query($conn, $insert1);
                            while ($data2 = mysqli_fetch_assoc($results)) {
                        ?>
                        <div class="col-lg-3 col-sm-6 col-md-4 music_genre" style="margin-top:4%;">
                            <div class="team-member ">
                                <div class="thumb">
                                    <img class="img-responsive"
                                        src="data/mus-albums/<?php echo $data2['albums_image'] ?>">
                                    <div class="overlay">
                                        <!-- <a href="mus-album-view.php"><i class="fa fa-play"></i></a> -->
                                    </div>
                                </div>
                                <div class="team-info ">
                                    <h4>
                                        <a href="mus-album-view.php">
                                            <?php echo $data2['albums_name'] ?>
                                        </a>
                                    </h4>
                                    <span class='team-member-edit'>
                                        <a href="mus-album-edit.php"><i class='fa fa-pencil icon-xs'></i></a>
                                    </span>

                                    <?php
                                        if (isset($data2['albums_artist_id']) && $data2['albums_artist_id'] != 0) {
                                            $art_data = "SELECT artist_name FROM `artist` WHERE artist_id = " . $data2['albums_artist_id'];
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
                                    <span><a style="text-decoration: none;">
                                            <?php echo $artist_name ?>
                                        </a>
                                    </span>

                                    
                                </div>
                                <p>
                            </div>
                        </div>
                        <?php } ?>

                    </div>
                </div>
            </section>
        </div>


        <div class="col-lg-12">
            <section class="box ">
                <header class="panel_header">
                    <h2 class="title pull-left">All Artist</h2>
                    <div class="actions panel_actions pull-right">
                        <i class="box_toggle fa fa-chevron-down"></i>
                        <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                        <i class="box_close fa fa-times"></i>
                    </div>
                </header>
                <div class="content-body">
                    <div class="row">

                        <?php
                            $insert1 = "SELECT * FROM `artist`";
                            $results = mysqli_query($conn, $insert1);
                            while ($data2 = mysqli_fetch_assoc($results)) {
                        ?>
                        <div class="col-lg-3 col-sm-6 col-md-4 music_genre" style="margin-top: 4%;">
                            <div class="team-member">
                                <div class="team-img">
                                    <img class="img-responsive"
                                        src="data/mus-artists/<?php echo $data2['artist_image'] ?>" alt="">
                                </div>
                                <div class="team-info">
                                    <h4>
                                        <a style="text-decoration: none;">
                                            <?php echo $data2['artist_name'] ?>
                                        </a>
                                    </h4>
                                    <span class='team-member-edit'><i
                                            class='fa fa-pencil icon-xs text-success'></i></span>
                                    <?php
                                        $query3 = "SELECT * FROM `genre`";
                                        $result = mysqli_query($conn, $query3);

                                        // Assuming you want to display genre_name from the genre table, fetch the appropriate data
                                        $genre_data = mysqli_fetch_assoc($result);
                                    ?>

                                    <span>
                                        <?php echo $genre_data['genre_name'] ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <?php } ?>


                    </div>

                </div>
            </section>
        </div>





    </section>
</section>
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
<script src="assets/plugins/jquery-ui/smoothness/jquery-ui.min.js" type="text/javascript"></script>
<script src="assets/plugins/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="assets/js/mus-dashboard.js" type="text/javascript"></script>
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
</body>

</html>





<script type="text/javascript">


</script>