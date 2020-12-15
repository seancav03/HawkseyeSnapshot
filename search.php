<?php get_header();?>
<!-- QWERTY SEARCH.PHP TEMPLATE QWERTY -->

<div class="container">
    <div class="world-news">
        <h1 class="text-center mb-5">
        Search Results
        </h1>
        <?php
        //loop through the posts
        while(have_posts() ) : the_post();
        ?>
        <div class="row">
            <?php
                $get_author_id = get_the_author_meta('ID');
                $get_author_gravatar = get_avatar_url($get_author_id, array('size' => 450));
            ?>
                <div class="mx-5 col-md-7">
                    <div class="d-flex align-items-center pb-2">
                        <img
                        src="<?php echo $get_author_gravatar;?>"
                        class="img-xs img-rounded mr-2"
                        alt="A"
                        />
                        <span class="fs-12 text-muted"><?php the_author();?></span>
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
                <div class="col-md-2">
                    <?php if(has_post_thumbnail()): ?>
                        <div class="position-relative image-hover">
                            <a href="<?php the_permalink();?>">
                            <img
                            src="<?php echo the_post_thumbnail_url();?>"
                            class="img-fluid width:50%"
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
                            class="img-fluid"
                            alt="Error"
                            />
                            <span class="thumb-title">READ</span>
                            </a>
                        </div>  
                    <?php endif; ?>
                </div>
        </div>
        <div class="py-1 border-bottom">
        </div>
        <br></br>
        <?php endwhile; wp_reset_postdata();?>
    </div>
</div> 
<?php
if (comments_open()){
  comments_template();
}
?>

<?php get_footer();?>
