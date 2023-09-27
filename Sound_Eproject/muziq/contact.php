<?php
include("connection/_header.php");
require("Connection/config.php");

if (isset($_POST['submit'])) {
    $user_name = mysqli_real_escape_string($conn, $_POST['u_name']); 
    $email =  mysqli_real_escape_string($conn, $_POST['u_email']); 
    $message = mysqli_real_escape_string($conn, $_POST['u_message']); 

    if (!empty($user_name) && !empty($email)) {
        $feed_query = "INSERT INTO `feedback`(`feedback_name`, `feedback_email`, `feedback_message`) VALUES ('$user_name','$email','$message')";
        $feed_run = mysqli_query($conn, $feed_query);

        
    } 
}
?>


    <!-- INTRO -->
    <section class="intro intro-mini full-width jIntro bg-blog" id="anchor00">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-center">
              <h1 class="primary-title">Contact</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CONTACTS -->
    <section class="section inverse-color contact" id="anchor08">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="voffset70"></div>
            <div class="separator-icon">
              <i class="fa fa fa-microphone"></i>
            </div>
            <div class="voffset30"></div>
            <p class="pretitle">get it touch</p>
            <div class="voffset20"></div>
            <h2 class="title">say hello!</h2>
            <div class="voffset80"></div>
          </div>
        </div>       
        <div class="row">
          <div class="col-sm-6 col-md-7">
            <form  method="post" id="contactform" class="contact-form">
              <div class="form-group">
                <label class="title small" for="name">Your name:</label>
                <input type="text" placeholder="Full Name" name="u_name"   class="text name" required>
              </div>
              
              <div class="form-group">
                <label class="title small" for="email">Your email:</label>
                <input type="email" placeholder="Your Email" name="u_email"   class="text email" required>
              </div>
              
              <div class="form-group">
                <label class="title small" for="message">Your message:</label>
                <textarea name="u_message" class="text area required"  placeholder="Type Message" required></textarea>
              </div>

              <!-- <div class="formSent"><p><strong>Your Message Has Been Sent!</strong> Thank you for contacting us.</p></div> -->
              <button type="submit"  name="submit" class="btn rounded" >Submit</button>
              <div class="voffset80"></div>            
            </form>
          </div>

          <div class="col-sm-6 col-md-5">
            <div class="col-contact">
              <h4 class="title small">Music studio</h4>
              <div class="voffset20"></div>
              <p>1814 NE Miami Gardens Drive Suite #1007</p>
              <p>North Miami Beach, FL, 333179</p>
              <ul class="contact">
                <li><i class="fa fa-phone"></i> 1.800.987.7890</li>
                <li><i class="fa fa-envelope"></i> booking@visionmax.com</li>
              </ul>
              <h4 class="title small">Get socialized with us</h4>
              <ul class="social-links">
                <li><a href="404.php"><i class="fa fa-facebook"></i></a></li>
                <li><a href="404.php"><i class="fa fa-twitter"></i></a></li>
                <li><a href="404.php"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="404.php"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="404.php"><i class="fa fa-pinterest"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- TWITTER -->
    <section class="section twitterfeed inverse-color full-width parallax-section" data-parallax-image="images/demo/bg-twitter.jpg">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <i class="fa fa-twitter"></i>
            <div id="twitter-feed"></div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- FOOTER -->
    <footer>
      <div class="container">
        <p class="copy">© 2016. All Rights Reserved. Designed by JellyThemes</p>
        <ul class="menu-footer">
          <li><a href="404.php">disclaimer</a></li>
          <li><a href="404.php">terms & conditions</a></li>
          <li><a href="404.php">privacy policy</a></li>
        </ul>
      </div>
    </footer>

    

    <script src="scripts/plugins.js"></script>

    <script src="scripts/main.js"></script>

    <script src="scripts/colorpicker.js"></script>

    <script src="scripts/vendor/bootstrap.js"></script>

  </body>
</html>
