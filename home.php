<?php get_header();?>
<!-- QWERTY HOME.PHP TEMPLATE QWERTY -->

<div class="container">
  <div class="world-news">

    <?php
      //Query for posts. Replace 'any' with post type name to specialize 
      $argsSticky = array (
          'post_type' => 'post',
          'post__in' => get_option('sticky_posts')
      );
      $the_querySticky = new WP_Query($argsSticky);
      while( $the_querySticky->have_posts() ) : $the_querySticky->the_post();
    ?>
    <div class="row mb-5 py-5 featured align-items-center justify-content-center">
      <?php
        $get_author_id = get_the_author_meta('ID');
        $get_author_gravatar = get_avatar_url($get_author_id, array('size' => 450));
      ?>
      <div class=" col-md-7">
          <div class="d-flex align-items-center pb-2">
              <img
              src="<?php echo $get_author_gravatar;?>"
              class="img-xs img-rounded mr-2"
              alt="A"
              />
              <span class="fs-12"><?php the_author();?></span>
          </div>
          <h5 class="font-weight-bold mt-3">
            <?php the_title();?>
          </h5>
          <p class="fs-14 m-0 font-weight-medium line-height-sm">
              <?php the_excerpt();?>
          </p>
          <p class="fs-10 font-weight-light">
              <i class="mdi mdi-calendar"></i> <?php echo get_the_date("F j, Y, g:i a");?> &nbsp; &nbsp; &nbsp; <i class="mdi mdi-message"></i> <?php comments_number();?>
          </p>
      </div>
      <div class="col-md-4">
          <?php if(has_post_thumbnail()): ?>
              <div class="position-relative image-hover">
                  <a href="<?php the_permalink();?>">
                  <img
                  src="<?php echo the_post_thumbnail_url();?>"
                  class="featuredImg img-fluid"
                  alt="Add Thumbnail"
                  />
                  <span class="thumb-title">READ</span>
                  </a>
              </div>  
          <?php else: ?>
              <div class="position-relative image-hover">
                  <a href="<?php the_permalink();?>">
                  <img
                  src="<?php echo get_template_directory_uri()?>/assets/images/placeholder.jpeg"
                  class="featuredImg img-fluid"
                  alt="Error"
                  />
                  <span class="thumb-title">READ</span>
                  </a>
              </div>  
          <?php endif; ?>
      </div>  
    </div>
    <?php endwhile; wp_reset_postdata();?>

    <div class="row">
      <?php
      // Query for posts. Replace 'any' with post type name to specialize 
      $args = array (
          'post_type' => 'post',
          'post__not_in' => get_option("sticky_posts")
      );
      $the_query = new WP_Query($args);
      while( $the_query->have_posts() ) : $the_query->the_post();
      ?>
      
          
          <div class="col-lg-4 col-sm-6 grid-margin mb-5 mb-sm-2">
          <?php if(has_post_thumbnail()): ?>
                <div class="position-relative image-hover">
                  <a href="<?php the_permalink();?>">
                  <img
                  src="<?php echo the_post_thumbnail_url();?>"
                  class="gridImg img-fluid"
                  alt="Add Thumbnail"
                  />
                  <span class="thumb-title">READ</span>
                  </a>
                </div>  
              <?php else: ?>
                <div class="position-relative image-hover">
                  <a href="<?php the_permalink();?>">
                  <img
                  src="<?php echo get_template_directory_uri()?>/assets/images/placeholder.jpeg"
                  class="gridImg img-fluid"
                  alt="Error"
                  />
                  <span class="thumb-title">READ</span>
                  </a>
                </div>  
              <?php endif; ?>
              <h5 class="font-weight-bold mt-3">
                  <?php the_title();?>
              </h5>
              <p class="fs-10 font-weight-light">
                <i class="mdi mdi-pen"></i> <?php the_author();?> &nbsp; &nbsp; <i class="mdi mdi-message"></i> <?php comments_number();?>
              </p>
              <p class="fs-10 font-weight-light">
                <i class="mdi mdi-calendar"></i> <?php echo get_the_date("F j, Y, g:i a");?>
              </p>
              <p class="fs-15 font-weight-normal">
                  <?php the_excerpt();?>
              </p>
              <!-- <a href="<?php the_permalink();?>" class="font-weight-bold text-dark pt-2"
                  >Read Article</a> -->
          </div>
      <?php endwhile; wp_reset_postdata();?>
    </div>
  </div>
</div>
<?php
if (comments_open()){
  comments_template();
}
?>

<?php get_footer();?>