<?php
  require("config.php");
  session_start();
  // if($_SESSION['ADMIN']==NULL){
  //   header('location:login.php');
  // }


?>
<!doctype html>

<html lang="en">

<head>
  <title>Muziq theme</title>
  <link rel="shortcut icon" href="images/demo/logo-intro.png" type="image/x-icon" />    <!-- Favicon -->

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="stylesheet" href="styles/main.css">
  <link rel="stylesheet" href="styles/colors/color-yellow.css">
  <link rel="stylesheet" href="styles/colors/color-lightblue.css">
  <link rel="stylesheet" href="styles/colors/color-purple.css">
  <link rel="stylesheet" href="styles/colors/color-green.css">
  <link rel="stylesheet" href="styles/colors/color-militar.css">
  <link rel="stylesheet" href="styles/colors/color-caqui.css">
  <link rel="stylesheet" href="styles/colors/color-red.css">
  <link href="styles/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
  <!-- <script src="scripts/vendor/modernizr.js"></script> -->
  <style>

  </style>
</head>

<body data-spy="scroll" data-target="#navbar-muziq" data-offset="80">

  <!-- LOADER -->
  <div id="mask">
    <div class="loader">
      <div class="cssload-container">
        <div class="cssload-shaft1"></div>
        <div class="cssload-shaft2"></div>
        <div class="cssload-shaft3"></div>
        <div class="cssload-shaft4"></div>
        <div class="cssload-shaft5"></div>
        <div class="cssload-shaft6"></div>
        <div class="cssload-shaft7"></div>
        <div class="cssload-shaft8"></div>
        <div class="cssload-shaft9"></div>
        <div class="cssload-shaft10"></div>
      </div>
    </div>
  </div>

  <div class="color-picker">
    <div class="picker-btn"></div>
    <div class="pickerTitle">Style Switcher</div>
    <div class="pwrapper">
      <div class="pickersubTitle"> Color scheme </div>
      <div class="picker-original"></div>
      <div class="picker-yellow"></div>
      <div class="picker-lightblue"></div>
      <div class="picker-purple"></div>
      <div class="picker-green"></div>
      <div class="picker-militar"></div>
      <div class="picker-caqui"></div>
      <div class="picker-red"></div>
      <div class="clear nopick"></div>
    </div>
  </div>

  <!-- HEADER -->
  <header id="jHeader">
    <nav class="navbar navbar-default" role="navigation">

      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Desplegar navegación</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo" /></a>
      </div>

      <div class="collapse navbar-collapse navbar-ex1-collapse " id="navbar-muziq">
        <ul class="nav navbar-nav navbar-left" style="margin-left: 3%;">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="artists.php">Artists</a></li>
          <li><a href="albums.php">Albums</a></li>
          <li><a href="videos.php">Videos</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right" style="margin-left: 3%;">

          <?php if(!isset($_SESSION["users_name"])) 
            { ?>
          <li>
            <a href="form.php">Login</a>
          </li>
          <li>
            <a href="form.php">Register</a>
          </li>
          <?php  } else { ?>
          <li class="active" Style="font-weight:bold;">
            <a href="#!" Style="text-transform: capitalize;">
              <?php echo $_SESSION['users_name']?>
            </a>
          </li>
          <li>
            <a href="logout.php">Logout</a>
          </li>
          <?php } ?>
        </ul>



      </div>

    </nav>
  </header>