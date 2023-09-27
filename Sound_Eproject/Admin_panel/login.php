<!DOCTYPE html>
<html class=" ">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Ultra Admin : Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" /> <!-- Favicon -->
    <link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-57-precomposed.png">
    <!-- For iPhone -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/apple-touch-icon-114-precomposed.png">
    <!-- For iPhone 4 Retina display -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/apple-touch-icon-72-precomposed.png">
    <!-- For iPad -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/apple-touch-icon-144-precomposed.png">
    
    <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
   
    <link href="assets/plugins/icheck/skins/square/orange.css" rel="stylesheet" type="text/css" media="screen" />
   
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

</head>




<body class=" login_page" >
<style>
    
    
    body {
    
    font-family: Arial, sans-serif;
    color: #ffffff;
  }
        
</style>
    <?php
require("connection/config.php");
session_start();

// if(isset($_SESSION["users_name"]))
// {
//    header("location:index-music.php");
// }

if(isset($_POST['submit']))
{

    $name = $_POST['uname'];
    $urid = $_POST['pwd'];

    $queryy = "SELECT * FROM `users` WHERE users_name = '$name' AND users_password = '$urid' AND  users_role_id='1'";
    $run = mysqli_query($conn, $queryy);
    $row = mysqli_fetch_assoc($run);
    
    $count = mysqli_num_rows($run);
    if($count==0){
      echo "<script>alert('Log In failed');</script>";
    
    }
    else{
      $_SESSION['ADMIN_NAME']=$name;
      $_SESSION['ADMIN_IMAGE']=$row['user_image'];
      echo "<script>alert('Succesfully Logged in'); window.location.href='index-music.php'</script>";
    }
    
   
}
?>


    <div class="login-wrapper" style="background: url('data/bg.jpg');
    background-size:  cover;">
        <div id="login"
            class="login loginpage col-lg-offset-4 col-lg-4 col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-offset-0 col-xs-12">
            <h1><a href="#" title="Login Page" tabindex="-1">Ultra Admin</a></h1>

            <form name="loginform" id="loginform" 
                method="post">
                <p>
                    <label for="user_login">Username<br />
                        <input type="text" name="uname" id="user_login" class="input"  size="20" /></label>
                </p>
                <p>
                    <label for="user_pass">Password<br />
                        <input type="password" name="pwd" id="user_pass" class="input"  size="20" /></label>
                </p>
                <p class="forgetmenot">
                    <label class="icheck-label form-label" for="rememberme"><input name="rememberme" type="checkbox"
                            id="rememberme" value="forever" class="skin-square-orange" checked> Remember me</label>
                </p>



                <p class="submit">
                    <input type="submit" name="submit"  class="btn btn-orange btn-block"
                        value="Sign In" />
                </p>
            </form>

            <p id="nav">
                <a class="pull-left" href="404.php" title="Password Lost and Found">Forgot password?</a>
                <!-- <a class="pull-right" href="register.php" title="Sign Up">Sign Up</a> -->
            </p>


        </div>
    </div>





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
    <script src="assets/plugins/icheck/icheck.min.js" type="text/javascript"></script>
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

<!-- Mirrored from jaybabani.com/ultra-admin-html/preview/ui-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Sep 2023 23:05:43 GMT -->

</html>