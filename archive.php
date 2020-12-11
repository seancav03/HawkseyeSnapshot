<?php get_header();?>
<!-- QWERTY ARCHIVE.PHP TEMPLATE QWERTY -->

<div class="container">
    <div class="world-news">
      <div class="row">
          <?php
            // Query for posts. Replace 'any' with post type name to specialize 
            $args = array (
                'post_type' => 'any',
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