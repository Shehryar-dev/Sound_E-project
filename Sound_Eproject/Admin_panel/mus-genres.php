<?php
include("Connection/header.php");
require("Connection/config.php");

    $insert = "SELECT * FROM `genre`";
    $result = mysqli_query($conn, $insert);
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
            <section class="wrapper main-wrapper">

                <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <h1 class="title" style="color:#ffffff;">All Genre</h1>
                        </div>

                        <div class="pull-right hidden-xs">
                            <ol class="breadcrumb" style="color:#ffffff;">
                                <li>
                                    <a href="index-music.php" style="color:#ffffff;"><i class="fa fa-home"></i>Home</a>
                                </li>
                                <li>
                                    <a href="mus-genre.php" style="color:#ffffff;">Genre</a>
                                </li>
                                <!-- <li class="active">
                                    <strong>Basic tables</strong>
                                </li> -->
                            </ol>
                        </div>

                    </div>
                </div>
                <div class="clearfix"></div>



                <div class="col-lg-12">
                    <section class="box ">
                        <header class="panel_header">
                            <h2 class="title pull-left">Genre</h2>
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
                                                        <thead >
                                                            <tr >
                                                                <th class=" text-center">ID</th>
                                                                <th class=" text-center">Genre Name</th>
                                                                <th class=" text-center">Update</th>
                                                                <th class=" text-center">Delete</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                                while($data = mysqli_fetch_assoc($result)){
                                                              
                                                            ?>
                                                                <tr>
                                                                  
                                                                  <td><?php echo $data['genre_id']?></td>
                                                                  <td><?php echo $data['genre_name']?></td>
                                                                  <td> <a href="mus-genre-edit.php?updateId=<?php echo $data['genre_id']?>" class="btn btn-success"><i class="fa fa-pencil"></i></a> </td>
                                                                  <td> <a href="mus-genre-del.php?deleteId=<?php echo $data['genre_id']?>" class="btn btn-danger"><i class="fa fa-trash-o"></i></a> </td>
                                                                  
                                                                </tr>
                                                            <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>

                            </div>
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
        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE TEMPLATE JS - START --> 
        <script src="assets/js/scripts.js" type="text/javascript"></script> 
        <!-- END CORE TEMPLATE JS - END --> 

        <!-- Sidebar Graph - START --> 
        <script src="assets/plugins/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="assets/js/chart-sparkline.js" type="text/javascript"></script>
        <!-- Sidebar Graph - END --> 













        <!-- General section box modal start -->
        <div class="modal" id="section-settings" tabindex="-1" role="dialog" aria-labelledby="ultraModal-Label" aria-hidden="true">
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

<!-- Mirrored from jaybabani.com/ultra-admin-html/preview/mus-genres.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Sep 2023 23:06:31 GMT -->
</html>



