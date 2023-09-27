<?php
include("Connection/header.php");
require("Connection/config.php");

$update_id = $_GET['updateId'];
$query = "SELECT * FROM `artist` WHERE `artist_id` = '$update_id'";
$run = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($run);

if(isset($_POST['submit']))
{
    $artist = mysqli_real_escape_string($conn, $_POST['artist_name']);
    $genre = mysqli_real_escape_string($conn, $_POST['opt']);
    $imgname = $_FILES['artist_img']['name'];
    $imgpath = $_FILES['artist_img']['tmp_name'];
    move_uploaded_file($imgpath,'data/mus-artists/'.$imgname);
   
    $query = "UPDATE `artist` SET `artist_name`='$artist',`artist_image`='$imgname',`artist_genre_id`='$genre' WHERE `artist_id` = '$update_id'";
    $run = mysqli_query($conn, $query);

    
}

?>

<!-- END TOPBAR -->
<!-- START CONTAINER -->
<?php
            include("Connection/sidebar.php");
        ?>

<!-- MAIN MENU - END -->
<!--  SIDEBAR - END -->
<!-- START CONTENT -->
<section id="main-content" >
    <section class="wrapper main-wrapper" >

        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
            <div class="page-title">

                <div class="pull-left">
                    <h1 class="title" style="color:#ffffff;">Update Artist</h1>
                </div>

                <div class="pull-right hidden-xs">
                    <ol class="breadcrumb" style="color:#ffffff;">
                        <li>
                            <a href="index-music.php" style="color:#ffffff;"><i class="fa fa-home"></i>Home</a>
                        </li>
                        <li>
                            <a href="mus-artists.php" style="color:#ffffff;">Artists</a>
                        </li>
                        <li class="active" style="color:#ffffff;">
                            <strong>Update Artist</strong>
                        </li>
                    </ol>
                </div>

            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <section class="box ">
                <header class="panel_header">
                    <h2 class="title pull-left">Artists</h2>
                    <div class="actions panel_actions pull-right">
                        <i class="box_toggle fa fa-chevron-down"></i>
                        <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                        <i class="box_close fa fa-times"></i>
                    </div>
                </header>
                <div class="content-body">
                    <div class="row">
                        <form action="#" method="POST" enctype="multipart/form-data">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                <div class="form-group">
                                    <label class="form-label" for="field-1" style="font-weight: bold;">Artist
                                        Name</label>
                                    <span class="desc"></span>
                                    <div class="controls">
                                        <input type="text" value="<?php echo $data['artist_name']?>"
                                            class="form-control" name="artist_name" id="field-1">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" style="font-weight: bold;" for="field-2">Select
                                        Genre</label>
                                    <!-- <span class="desc">e.g. "Cre@t!v!ty"</span> -->
                                    <select class="form-control input-sm m-bot15" name="opt">
                                        <?php
                                    $query ="SELECT * FROM `genre`";
                                    $result = mysqli_query($conn,$query);
                                    while ($data=mysqli_fetch_assoc($result))
                                    {
                                ?>
                                        <option value="<?php echo $data['genre_id']?>">
                                            <?php echo $data['genre_name'] ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="field-1" style="font-weight: bold;">Artist
                                        Image</label>
                                    <span class="desc"></span>
                                    <div class="controls">
                                        <input type="file" class="form-control" name="artist_img" id="field-5 "
                                            value="<?php echo $data['artist_image']?>">
                                    </div>
                                </div>




                            </div>

                            <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12 padding-bottom-30">
                                <div class="text-left">
                                    <button type="submit" class="btn btn-primary" name="submit">Save</button>
                                    <button type="button" class="btn">Cancel</button>
                                </div>
                            </div>
                        </form>
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
<script src="assets/plugins/datepicker/js/datepicker.js" type="text/javascript"></script>
<script src="assets/plugins/autosize/autosize.min.js" type="text/javascript"></script>
<script src="assets/plugins/inputmask/min/jquery.inputmask.bundle.min.js" type="text/javascript"></script>
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

<!-- Mirrored from jaybabani.com/ultra-admin-html/preview/mus-artist-add.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Sep 2023 23:07:24 GMT -->

</html>