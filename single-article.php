<?php get_header();?>
<!-- QWERTY SINGLE-ARTCILE.PHP TEMPLATE QWERTY -->

<div class="container">
    <?php if( have_posts()): the_post(); ?>
      <div class="row">
        <div class="col-sm-12">
          <div class="news-post-wrapper">
            <div class="news-post-wrapper-sm ">
              <h1 class="text-center">
                <?php the_title(); ?>
              </h1>
              <h5 class="text-center">
                <?php
                  $get_author_id = get_the_author_meta('ID');
                  $get_author_gravatar = get_avatar_url($get_author_id, array('size' => 450));
                ?>
                <div class="text-center">
                      <img
                      src="<?php echo $get_author_gravatar;?>"
                      class="img-sm img-rounded mr-2 mb-2"
                      style="width:30px;height:30px;"
                      alt="A"
                      />
                    <span class="fs-12 text-secondary"><?php the_author();?></span>
                </div>
                <p class="fs-10 font-weight-light mb-3">
                  <i class="mdi mdi-calendar"></i> <?php echo get_the_date("F j, Y, g:i a");?> &nbsp; &nbsp; &nbsp; <i class="mdi mdi-message"></i> <?php comments_number();?>
                </p>
              </h5>
              <div class="text-center">
                <?php if(has_post_thumbnail()): ?>
                    <img
                    src="<?php echo the_post_thumbnail_url();?>"
                    class="img-sm mb-2"
                    style="width:80%;height:auto"
                    alt="A"
                    />
                <?php endif; ?>
              </div>
              <br></br>
              <?php the_content();?>
            </div>
        </div>
    </div>
  <?php endif; ?>
</div>
<br></br>
<?php
if (comments_open()){
  comments_template();
}
?>

<?php get_footer();?>