<?php get_header();?>
<!-- QWERTY INDEX.PHP TEMPLATE QWERTY -->

<div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="news-post-wrapper">
            <div class="news-post-wrapper-sm ">
              <?php if(have_posts()): while( have_posts()): the_post();?>
                <h3><?php the_title();?></h3>
                <?php the_post_thumbnail();?>
                <?php the_excerpt();?>
                <a href="<?php the_permalink();?>" class="btn btn-success">Read More</a>
                <br></br>
                <br></br>
            <?php endwhile; else: endif;?>
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