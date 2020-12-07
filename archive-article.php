<?php get_header();?>
<!-- QWERTY ARCHIVE-ARTICLE.PHP TEMPLATE QWERTY -->

<div class="container">
    <div class="world-news">
        <?php
            // Query for posts. Replace 'any' with post type name to specialize 
            $args = array (
                'post_type' => 'article',
            );
            $the_query = new WP_Query($args);
        while( $the_query->have_posts() ) : $the_query->the_post();
        ?>
        <div class="row">
        <!-- 
            <img src="<?php //echo the_post_thumbnail_url();?>" class="img-fluid" alt="Add Thumbnail" />
            "<?php //echo get_template_directory_uri()?>/assets/images/placeholder.jpeg"
            <?php //the_permalink();?>
            <h5 class="font-weight-bold mt-3">
                <?php //the_title();?>
            </h5>
            <p class="fs-10 font-weight-light">
                <i class="mdi mdi-pen"></i> <?php //the_author();?> &nbsp; &nbsp; <i class="mdi mdi-message"></i> <?php comments_number();?>
                </p>
                <p class="fs-10 font-weight-light">
                <i class="mdi mdi-calendar"></i> <?php //echo get_the_date("F j, Y, g:i a");?>
            </p>
            <p class="fs-15 font-weight-normal">
                <?php //the_excerpt();?>
            </p>
         -->
            <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2">
                
            </div>
        </div>
        <?php endwhile; wp_reset_postdata();?>
    </div>
</div>
<?php
if (comments_open()){
  comments_template();
}
?>

<?php get_footer();?>