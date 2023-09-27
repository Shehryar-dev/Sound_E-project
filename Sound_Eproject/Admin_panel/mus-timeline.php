<?php
include("Connection/header.php");
require("Connection/config.php");
 
$feed_get = "SELECT * FROM `feedback`";
$feed_res =  mysqli_query($conn, $feed_get);


?>
<?php
include("Connection/sidebar.php");
?> 
<section id="main-content" >
                <section class="wrapper main-wrapper" style=''>

                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <div class="page-title">

                            <div class="pull-left">
                                <h1 class="title" style="color:#ffffff;">Timeline</h1>
                            </div>

                            <div class="pull-right hidden-xs">
                                <ol class="breadcrumb" style="color:#ffffff;">
                                    <li>
                                        <a href="index-music.php" style="color:#ffffff;"><i class="fa fa-home"></i>Dashboard</a>
                                    </li>
                                    <li>
                                        <a  style="color:#ffffff;">Report</a>
                                    </li>
                                    <li class="active" style="color:#ffffff;">
                                        <strong>Timeline</strong>
                                    </li>
                                </ol>
                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>


                    <div class="col-lg-12">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title pull-left">User Feedback</h2>
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
                                                        <th class=" text-center">Feedback Id</th>
                                                        <th class=" text-center">User Name</th>
                                                        <th class=" text-center">User Email</th>
                                                        <th class=" text-center">Feedback Message</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    while($feed_data = mysqli_fetch_assoc($feed_res)){
                                                ?>
                                                    <tr>

                                                        <td>
                                                        <?php echo $feed_data['feedback_id']?>
                                                        </td>
                                                        <td>
                                                        <?php echo $feed_data['feedback_name']?>
                                                    </td>
                                                    <td>
                                                            <?php echo $feed_data['feedback_email']?>

                                                        </td>
                                                        <td  >
                                                        <?php echo $feed_data['feedback_message']?>

                                                        </td>

                                                    </tr>
                                                    <?php } 
                                                    ?>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                
                            <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">

                                        <!-- start -->

                                        <div class="timeline2-centered">
                                        <?php
                                        $feed = "SELECT * FROM `feedback`";
                                        $feed_result =  mysqli_query($conn, $feed);
                                            while($feed_card = mysqli_fetch_assoc($feed_result)){
                                        ?>

                                            <article class="timeline2-entry">

                                                <div class="timeline2-entry-inner">

                                                    <div class="timeline2-icon bg-success">
                                                        <i class="fa fa-envelope-o"></i>
                                                    </div>

                                                    <div class="timeline2-label">
                                                        <h2><a href="#"><strong><?php echo $feed_card['feedback_name']?></strong></a> <span>posted a status update</span></h2>
                                                        <p><?php echo $feed_card['feedback_message']?></p>
                                                    </div>
                                                </div>

                                            </article>
                                            <?php } ?>


                                            


                                           
                                        </div>
                                        <!-- end -->
                                    </div>
                                </div>
                            </div>
                        </section></div>
                </section>
            </section>

            
            

<?php
include("Connection/end.php");
?>
<script src="assets/js/jquery-1.11.2.min.js" type="text/javascript"></script> 
        <script src="assets/js/jquery.easing.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
        <script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/viewport/viewportchecker.js" type="text/javascript"></script>  
        <!-- CORE JS FRAMEWORK - END --> 

        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <script src="assets/plugins/datepicker/js/datepicker.js" type="text/javascript"></script> <script src="assets/plugins/autosize/autosize.min.js" type="text/javascript"></script><script src="assets/plugins/inputmask/min/jquery.inputmask.bundle.min.js" type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 

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

<!-- Mirrored from jaybabani.com/ultra-admin-html/preview/mus-song-add.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Sep 2023 23:07:25 GMT -->
</html>