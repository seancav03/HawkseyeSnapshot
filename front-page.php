<?php get_header();?>
<!-- QWERTY FRONT-PAGE.PHP TEMPLATE QWERTY -->

<div class="container">
    <!-- Headeer Bar -->
    <div class="row m-3">
        <?php
        //Query for posts. Replace 'any' with post type name to specialize 
        $argsSticky = array (
            'post_type' => 'any',
            'tag' => 'top-banner'
        );
        $the_querySticky = new WP_Query($argsSticky);
        while( $the_querySticky->have_posts() ) : $the_querySticky->the_post();
        ?>
        <div class="col-md-1 col-lg-1 col-sm-2 mt-2">
            <div>
                <img
                src="<?php echo the_post_thumbnail_url();?>"
                alt=""
                class="top-banner-img"
                />
            </div>
        </div>
        <div class="col-md-2 col-lg-2 col-sm-4 mt-2">
            <h5 class="m-0 font-weight-bold">
                <?php the_title();?>
            </h5>
        </div>
        <?php endwhile; ?>
    </div>
    <!-- Main Section -->
</div>


<?php get_footer();?>