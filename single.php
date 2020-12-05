<?php get_header();?>
<!-- QWERTY SINGLE.PHP TEMPLATE QWERTY -->

<div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="news-post-wrapper">
            <div class="news-post-wrapper-sm ">
              <h1 class="text-center">
                <?php the_title(); ?>
              </h1>
                <?php if (have_posts()) : while(have_posts()) : the_post();?>
                    <?php the_post_thumbnail();?>
                    <?php the_content();?>
                <?php endwhile; endif;?>
            </div>
        </div>
    </div>
</div>
<?php
if (comments_open()){
  comments_template();
}
?>

<?php get_footer();?>