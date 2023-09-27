<?php
  include("connection/_header.php");
  ?>

    <!-- INTRO -->
    <section class="intro intro-mini full-width jIntro bg-blog" id="anchor00">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-center">
              <h1 class="primary-title">Gallery</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- LATEST MEDIA -->
    <section class="section last-media inverse-color" id="anchor06">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="voffset90"></div>
            <div class="separator-icon">
              <i class="fa fa-picture-o "></i>
            </div>
            <div class="voffset30"></div>
            <p class="pretitle">get read for the last stuff</p>
            <div class="voffset20"></div>
            <h2 class="title">latest media</h2>
            <div class="voffset50"></div>
          </div>
        </div>
        <!-- Filters -->
        <div class="row">
          <div class="col-md-12">
            <ul class="filters">
              <li data-filter="*" class="is-checked wow fadeInUp" data-wow-delay="0.5s">All</li>
              <li data-filter=".music" class="wow fadeInUp" data-wow-delay="0.8s">Music</li>
              <li data-filter=".concert" class="wow fadeInUp" data-wow-delay="1s">Concert</li>
              <li data-filter=".video" class="wow fadeInUp" data-wow-delay="1.2s">Video</li>
              <li data-filter=".dj" class="wow fadeInUp" data-wow-delay="1.4s">Dj</li>
              <li data-filter=".events" class="wow fadeInUp" data-wow-delay="1.6s">Events</li>
              <li data-filter=".party" class="wow fadeInUp" data-wow-delay="1.8s">Party</li>
            </ul>
          </div>
        </div>
        <!-- gallery -->
        <div class="row">
          <div class="col-md-12">
            <div class="voffset50"></div>
            <div class="thumbnails">
              <div class="thumbnail video">
                <a href="https://vimeo.com/5182570" class="swipebox"> <!-- data-fancybox-type="iframe" -->
                  <img src="images/demo/gallery/gallery1.jpg" alt="">
                  <div class="rollover">
                    <i class="video"></i>
                  </div>
                </a>
              </div>
              <div class="thumbnail concert">
                <a href="images/demo/gallery/gallery2.jpg" class="swipebox">
                  <img src="images/demo/gallery/gallery2.jpg" alt="">
                  <div class="rollover">
                    <i class="plus"></i>
                  </div>
                </a>
              </div>
              <div class="thumbnail music">
                <a href="images/demo/gallery/gallery3.jpg" class="swipebox">
                  <img src="images/demo/gallery/gallery3.jpg" alt="">
                  <div class="rollover">
                    <i class="plus"></i>
                  </div>
                </a>
              </div>
              <div class="thumbnail small dj">
                <a href="images/demo/gallery/gallery4.jpg" class="swipebox">
                  <img src="images/demo/gallery/gallery4.jpg" alt="">
                  <div class="rollover">
                    <i class="plus"></i>
                  </div>
                </a>
              </div>
              <div class="thumbnail small events">
                <a href="images/demo/gallery/gallery5.jpg" class="swipebox">
                  <img src="images/demo/gallery/gallery5.jpg" alt="">
                  <div class="rollover">
                    <i class="plus"></i>
                  </div>
                </a>
              </div>
              <div class="thumbnail small party">
                <a href="images/demo/gallery/gallery6.jpg" class="swipebox">
                  <img src="images/demo/gallery/gallery6.jpg" alt="">
                  <div class="rollover">
                    <i class="plus"></i>
                  </div>
                </a>
              </div>
              <div class="thumbnail small music">
                <a href="images/demo/gallery/gallery7.jpg" class="swipebox">
                  <img src="images/demo/gallery/gallery7.jpg" alt="">
                  <div class="rollover">
                    <i class="plus"></i>
                  </div>
                </a>
              </div>
            </div>
            <div class="voffset50"></div>
            <p class="loadmore">
              <a id="append" href="404.php" class="btn rounded border">Load more</a>
            </p>
            <div id="more-items">
              <div class="thumbnail video">
                <a href="images/demo/gallery/gallery2.jpg" class="swipebox">
                  <img src="images/demo/gallery/gallery2.jpg" alt="">
                  <div class="rollover">
                    <i class="plus"></i>
                  </div>
                </a>
              </div>
              <div class="thumbnail concert">
                <a href="images/demo/gallery/gallery1.jpg" class="swipebox">
                  <img src="images/demo/gallery/gallery1.jpg" alt="">
                  <div class="rollover">
                    <i class="plus"></i>
                  </div>
                </a>
              </div>
              <div class="thumbnail small dj">
                <a href="images/demo/gallery/gallery5.jpg" class="swipebox">
                  <img src="images/demo/gallery/gallery5.jpg" alt="">
                  <div class="rollover">
                    <i class="plus"></i>
                  </div>
                </a>
              </div>
              <div class="thumbnail small events">
                <a href="images/demo/gallery/gallery4.jpg" class="swipebox">
                  <img src="images/demo/gallery/gallery4.jpg" alt="">
                  <div class="rollover">
                    <i class="plus"></i>
                  </div>
                </a>
              </div>
            </div>
            <div class="voffset80"></div>
          </div>
        </div>
      </div>
    </section>

    <!-- CONTACTS -->
    <?php
  include("connection/_footer.php");
  ?>
