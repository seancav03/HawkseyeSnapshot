<?php get_header();?>

<div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="news-post-wrapper">
            <div class="news-post-wrapper-sm ">
                <?php if (have_posts()) : while(have_posts()) : the_post();?>
                    <?php the_content();?>
                <?php endwhile; endif;?>
            </div>
        </div>
    </div>
</div>


<?php get_footer();?>