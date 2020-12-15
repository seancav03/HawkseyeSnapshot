        <footer>
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="border-top"></div>
              </div>
              <!-- Dynamic Wordpress Footer Menu -->
              <?php
                wp_nav_menu(
                  array(
                      'menu' => 'footer',
                      'container' => '',
                      'theme_location' => 'footer',
                      'items_wrap' => '<div class="col-sm-3 col-lg-3"><ul class="footer-vertical-nav">
                      %3$s
                      </ul></div>'
                    )
                );
              ?>

              <!-- Static Top -->
              <!-- <div class="col-sm-3 col-lg-3">
                <ul class="footer-vertical-nav">
                  <li class="menu-title"><a href="pages/news-post.html">News</a></li>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="pages/world.html">World</a></li>
                  <li><a href="pages/author.html">Magazine</a></li>
                  <li><a href="pages/business.html">Business</a></li>
                  <li><a href="pages/politics.html">Politics</a></li>
                </ul>
              </div>
              <div class="col-sm-3 col-lg-3">
                <ul class="footer-vertical-nav">
                  <li class="menu-title"><a href="pages/world.html">World</a></li>
                  <li><a href="pages/sports.html">Sports</a></li>
                  <li><a href="pages/art.html">Art</a></li>
                  <li><a href="#">Magazine</a></li>
                  <li><a href="pages/real-estate.html">Real estate</a></li>
                  <li><a href="pages/travel.html">Travel</a></li>
                  <li><a href="pages/author.html">Author</a></li>
                </ul>
              </div>
              <div class="col-sm-3 col-lg-3">
                <ul class="footer-vertical-nav">
                  <li class="menu-title"><a href="#">Features</a></li>
                  <li><a href="#">Photography</a></li>
                  <li><a href="#">Video</a></li>
                  <li><a href="pages/news-post.html">Newsletters</a></li>
                  <li><a href="#">Live Events</a></li>
                  <li><a href="#">Stores</a></li>
                  <li><a href="#">Jobs</a></li>
                </ul>
              </div>
              <div class="col-sm-3 col-lg-3">
                <ul class="footer-vertical-nav">
                  <li class="menu-title"><a href="#">More</a></li>
                  <li><a href="#">RSS</a></li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">User Agreement</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="pages/aboutus.html">About us</a></li>
                  <li><a href="pages/contactus.html">Contact</a></li>
                </ul>
              </div> -->
              <!-- Static Bottom -->
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="d-flex justify-content-between">
                  <?php
                    if(function_exists('the_custom_logo')){
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id);
                        $height = 50;
                        $WHratio = $logo[1]/$logo[2];
                    }
                  ?>
                  <img src="<?php echo $logo[0] ?>" width="<?php echo ($height*$WHratio) ?>" height="<?php echo $height ?>" alt=""/>

                  <div class="d-flex justify-content-end footer-social">
                    <h5 class="m-0 font-weight-600 mr-3 d-none d-lg-flex">Follow on</h5>
                    <ul class="social-media">
                      <li>
                        <a href="https://www.instagram.com/hrshawkseye/">
                          <i class="mdi mdi-instagram"></i>
                        </a>
                      </li>
                      <!-- <li>
                        <a href="#">
                          <i class="mdi mdi-facebook"></i>
                        </a>
                      </li> -->
                      <li>
                        <a href="https://www.youtube.com/user/Hrshawkseye">
                          <i class="mdi mdi-youtube"></i>
                        </a>
                      </li>
                      <!-- <li>
                        <a href="#">
                          <i class="mdi mdi-linkedin"></i>
                        </a>
                      </li> -->
                      <li>
                        <a href="https://twitter.com/hrsnews">
                          <i class="mdi mdi-twitter"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div
                  class="d-lg-flex justify-content-between align-items-center border-top mt-5 footer-bottom"
                >
                  <!--  Below: Add items below for a very bottom menu -->
                  <!-- <ul class="footer-horizontal-menu">
                    <li><a href="#">Terms of Use.</a></li>
                    <li><a href="#">Privacy Policy.</a></li>
                    <li><a href="#">Accessibility & CC.</a></li>
                    <li><a href="#">AdChoices.</a></li>
                    <li><a href="#">Advertise with us Transcripts.</a></li>
                    <li><a href="#">License.</a></li>
                    <li><a href="#">Sitemap</a></li>
                  </ul> -->
                  <p class="font-weight-medium">
                    © 2020 <a href="https://www.bootstrapdash.com/" target="_blank" class="text-dark">@ BootstrapDash</a>, Inc.All Rights Reserved.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </footer>

        <!-- partial -->
      </div>
    </div>

<?php wp_footer();?>
</body>
</html>