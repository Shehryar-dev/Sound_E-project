<?php
include("Connection/header.php");
require("Connection/config.php");

// $add = "SELECT * FROM `roles`";
// $res = mysqli_query($conn, $add);

$insert = "SELECT * FROM `users`";
$result = mysqli_query($conn, $insert);






?>
<!-- END TOPBAR -->
<!-- START CONTAINER -->
<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">


<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap");

    /*=============== VARIABLES CSS ===============*/
    :root {
        /*========== Colors ==========*/
        /*Color mode HSL(hue, saturation, lightness)*/
        --first-color: hsl(29, 80%, 58%);
        --first-color-light: hsl(29, 80%, 70%);
        --black-color: hsl(29, 16%, 10%);
        --text-color: hsl(29, 8%, 65%);
        --body-color: hsl(29, 100%, 99%);
        /*========== Font and typography ==========*/
        /*.5rem = 8px | 1rem = 16px ...*/
        --body-font: "Poppins", sans-serif;
        --h3-font-size: 1.125rem;
        --smaller-font-size: .75rem;
    }

    /*=============== BASE ===============*/
    /* *{
  box-sizing: border-box;
  padding: 0;
  margin: 0;
} */

    a {
        text-decoration: none;
    }

    ul {
        list-style: none;
    }

    img {
        max-width: 100%;
        height: auto;
    }

    .card {
        margin: auto;
        position: relative;
        width: 256px;
        background-color: var(--black-color);
        padding: 1.25rem 2rem 3rem;
        border-radius: 1.5rem;
        text-align: center;
        box-shadow: 0 4px 16px hsla(29, 75%, 8%, 0.2);
    }

    .card__img {
        width: 96px;
        border-radius: 50%;
    }

    .card__border {
        width: 110px;
        height: 110px;
        border: 2px solid var(--first-color);
        border-radius: 50%;
        display: grid;
        place-items: center;
        margin: 0 auto 0.75rem;
    }

    .card__name {
        color: var(--first-color);
        font-size: var(--h3-font-size);
        font-weight: 500;
    }

    .card__profession {
        color: var(--text-color);
        font-size: var(--smaller-font-size);
        font-weight: 500;
    }

    .card__social {
        width: 200px;
        background-color: var(--first-color);
        padding: 0.75rem;
        border-radius: 3rem;
        text-align: initial;
        box-shadow: 0 8px 24px hsla(29, 75%, 56%, 0.3);
        position: absolute;
        left: 0;
        right: 0;
        bottom: -1.75rem;
        margin: 0 auto;
        overflow: hidden;
        transform-origin: 18px 17px;
    }

    .card__social-control {
        position: relative;
        transform-origin: 18px 18px;
        transition: transform 0.45s ease;
        transform: rotate(0);
    }

    .card__social-toggle {
        display: inline-flex;
        background-color: var(--black-color);
        color: var(--first-color);
        font-size: 1.25rem;
        padding: 0.5rem;
        border-radius: 50%;
        cursor: pointer;
        position: relative;
        z-index: 10;
    }

    .card__social-text {
        display: block;
        color: var(--black-color);
        font-size: var(--smaller-font-size);
        font-weight: 500;
    }

    .card__social-list {
        display: inline-flex;
        column-gap: 0.75rem;
        transform: rotate(135deg);
        transform-origin: 18px 17px;
    }

    .card__social-link {
        display: inline-flex;
        background-color: var(--first-color-light);
        color: var(--black-color);
        font-size: 1.25rem;
        padding: 6px;
        border-radius: 50%;
    }

    .card__social-text,
    .card__social-list {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        padding-left: 3.1rem;
    }

    .card__social-text {
        top: 0.5rem;
    }

    /* Rotate social */
    .animation .card__social-control {
        transform: rotate(-135deg);
    }

    /* Up animation */
    .card__social.animation {
        animation: up-animation 1s ease-in-out forwards;
    }

    @keyframes up-animation {

        0%,
        100% {
            transform: rotate(0);
        }

        50%,
        60% {
            transform: rotate(-3deg);
        }

        88% {
            transform: rotate(1deg);
        }
    }

    /* Down animation */
    .card__social.down-animation {
        animation: down-animation 1s ease-in-out forwards;
    }

    @keyframes down-animation {

        0%,
        100% {
            transform: rotate(0);
        }

        50%,
        60% {
            transform: rotate(6deg);
        }

        88% {
            transform: rotate(-1deg);
        }
    }
</style>
<?php
include("Connection/sidebar.php");
?>




<!-- MAIN MENU - END -->




<!--  SIDEBAR - END -->
<!-- START CONTENT -->
<section id="main-content">
    <section class="wrapper main-wrapper">


        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
            <div class="page-title">

                <div class="pull-left">
                    <h1 class="title" style="color:#ffffff;">Users</h1>
                </div>

                <div class="pull-right hidden-xs">
                    <ol class="breadcrumb" style="color:#ffffff;">
                        <li>
                            <a href="index-music.html" style="color:#ffffff;"><i class="fa fa-home"></i>Home</a>
                        </li>
                        <li class="active">
                            <a href="mus-user.php" style="color:#ffffff;">All Users</a>
                        </li>
                        <!-- <li >
                            <strong>Grids</strong>
                        </li> -->
                    </ol>
                </div>

            </div>
        </div>
        <div class="clearfix"></div>


        <div class="col-lg-12 col-md-12 col-sm-12">
            <section class="box ">
                <header class="panel_header">
                    <h2 class="title pull-left">All Users</h2>
                    <div class="actions panel_actions pull-right">
                        <i class="box_toggle fa fa-chevron-down"></i>
                        <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                        <i class="box_close fa fa-times"></i>
                    </div>
                </header>
                <div class="content-body">
                    <div class="row ui-grids">
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
                                                        <th class=" text-center">User Name</th>
                                                        <th class=" text-center">User Email</th>
                                                        <th class=" text-center">User Password</th>
                                                        <th class=" text-center">User Role</th>
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
                                                            <?php echo $data['users_id']?>
                                                        </td>
                                                        <td>
                                                            <?php echo $data['users_name']?>
                                                        </td>
                                                        <td>
                                                            <?php echo $data['users_email']?>
                                                        </td>
                                                        <td>
                                                            <?php echo $data['users_password']?>
                                                        </td>
                                                        <?php
                                                            $roleQuery = "SELECT role_name FROM `roles` WHERE role_id = " . $data['users_role_id'];
                                                            $roleResult = mysqli_query($conn, $roleQuery);
                                                            if ($roleResult) {
                                                               $roleData = mysqli_fetch_assoc($roleResult);
                                                               $roleName = $roleData['role_name'];
                                                            } else {
                                                                $roleName = "N/A";
                                                            }
                                                        ?>
                                                        <td>
                                                            <?php echo $roleName ?>
                                                        </td>
                                                        <td> <a href="mus-user-edit.php?updateId=<?php echo $data['users_id']?>"
                                                                class="btn btn-success"><i class="fa fa-pencil"></i></a>
                                                        </td>
                                                        <td> <a href="mus-user-del.php?deleteId=<?php echo $data['users_id']?> "
                                                                class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                                                        </td>

                                                    </tr>
                                                    <?php }?>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 h-100">




                            <div class="row ">
                                <?php
                                $insert = "SELECT * FROM `users`";
                                $result = mysqli_query($conn, $insert);
                                while($data = mysqli_fetch_assoc($result)){
                                                              
                             ?>
                                <div class="col-lg-4 col-md-4 col-sm-6 " style="margin-top:5%;">


                                    <!-- <h3 class="card__name"></h3> -->
                                    <div class="card ">
                                        <!-- Card content -->
                                        <div class="card__border">
                                            <?php
                                            $user_image_url = !empty($data['user_image']) ? "data/profile/" . $data['user_image'] : "data/us-icon.png";
                                        ?>
                                            <img src="<?php echo $user_image_url; ?>" alt="" class="card__img">
                                        </div>
                                        <h3 class="card__name">
                                            <?php echo $data['users_name']?>
                                        </h3>

                                        <?php
                                            $roleQuery = "SELECT role_name FROM `roles` WHERE role_id = " . $data['users_role_id'];
                                            $roleResult = mysqli_query($conn, $roleQuery);
                                            if ($roleResult) {
                                                $roleData = mysqli_fetch_assoc($roleResult);
                                                $roleName = $roleData['role_name'];
                                            } else {
                                                $roleName = "N/A";
                                            }
                                        ?>

                                        <span class="card__profession">
                                            <?php echo $roleName ?>
                                        </span>


                                        <!-- Card social -->
                                        <div class="card__social" id="card-social">
                                            <div class="card__social-control">
                                                <!-- Toggle button -->
                                                <div class="card__social-toggle" id="card-toggle">
                                                    <i class="ri-add-line"></i>
                                                </div>

                                                <span class="card__social-text">My social networks</span>

                                                <!-- Social links -->
                                                <ul class="card__social-list">
                                                    <a href="https://www.facebook.com/" target="_blank"
                                                        class="card__social-link">
                                                        <i class="ri-facebook-line"></i>
                                                    </a>
                                                    <a href="https://www.instagram.com/" target="_blank"
                                                        class="card__social-link">
                                                        <i class="ri-instagram-line"></i>
                                                    </a>
                                                    <a href="https://twitter.com/" target="_blank"
                                                        class="card__social-link">
                                                        <i class="ri-twitter-line"></i>
                                                    </a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <?php } ?>
                            </div>


                        </div>
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


<div class="chatapi-windows ">


</div>
</div>



<script src="assets/js/jquery-3.6.0.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        function showSocial() {
            // Select all card containers
            const cardContainers = $('.card');

            cardContainers.each(function () {
                const toggle = $(this).find('.card__social-toggle');
                const social = $(this).find('.card__social');

                toggle.on('click', function () {
                    if (social.hasClass('animation')) {
                        social.addClass('down-animation');
                        setTimeout(function () {
                            social.removeClass('down-animation');
                        }, 1000);
                    }
                    social.toggleClass('animation');
                });
            });
        }

        // Call the function to initialize it
        showSocial();
    });
</script>

<!-- CORE JS FRAMEWORK - START -->

<script src="assets/js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.easing.min.js" type="text/javascript"></script>
<script src="assets/js/scripts.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script>
<script src="assets/plugins/viewport/viewportchecker.js" type="text/javascript"></script>


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


</html>