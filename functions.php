<?php

function hawkseye_theme_support() {
    add_theme_support('custom-logo');
    add_theme_support('align-wide');
    add_theme_support('post-thumbnails') ;
}
add_action('after_setup_theme', 'hawkseye_theme_support');

//shorten the auto-generated post excerpts
add_filter( 'excerpt_length', function($length) {
    return 35;
} );

function hawkseye_setup_menus() {

    $locations = array(
        'primary' => 'primary header items',
        'footer' => 'footer menu items'
    );
    register_nav_menus($locations);
}
add_action('init', 'hawkseye_setup_menus');

function hawkseye_load_css() {

    //repeat for all scripts (name can be whatever I want)
    wp_register_style('icons', get_template_directory_uri() . '/assets/vendors/mdi/css/materialdesignicons.min.css', array(), false, 'all');
    wp_enqueue_style('icons');
    wp_register_style('aos', get_template_directory_uri() . '/assets/vendors/aos/dist/aos.css/aos.css', array(), false, 'all');
    wp_enqueue_style('aos');
    wp_register_style('owl1', get_template_directory_uri() . '/assets/vendors/owl.carousel/dist/assets/owl.carousel.min.css', array(), false, 'all');
    wp_enqueue_style('owl1');
    wp_register_style('owl2', get_template_directory_uri() . '/assets/vendors/owl.carousel/dist/assets/owl.theme.default.min.css', array(), false, 'all');
    wp_enqueue_style('owl2');
    wp_register_style('mainStyle', get_template_directory_uri() . '/assets/css/style.css', array(), false, 'all');
    wp_enqueue_style('mainStyle');
    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style');
    wp_register_style('custom', get_template_directory_uri() . '/assets/css/custom.css', array(), false, 'all');
    wp_enqueue_style('custom');

}
add_action('wp_enqueue_scripts', 'hawkseye_load_css');

function hawkseye_load_js() {
    //enqueue so wordpress adds already installed jquery
    wp_enqueue_script('jquery');

    //jquery is the dependency for bootstrap scripts. Just name as wordpress ships it for me.
    //final parameter: true=putInFooter, false=putInHeader
    wp_register_script('js-base', get_template_directory_uri() . '/assets/vendors/js/vendor.bundle.base.js', 'jquery', false, true);
    wp_enqueue_script('js-base');
    wp_register_script('owl-js', get_template_directory_uri() . '/assets/vendors/owl.carousel/dist/owl.carousel.min.js', 'jquery', false, true);
    wp_enqueue_script('owl-js');
    wp_register_script('demo-js', get_template_directory_uri() . '/assets/js/demo.js', 'jquery', false, true);
    wp_enqueue_script('demo-js');

}
add_action('wp_enqueue_scripts', 'hawkseye_load_js');


//START CUSTOM COMMENTS SECTION
// Custom Callback
function hawkseye_comments($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
	    
		<div class="comment-wrap">
			<div class="comment-img">
				<?php echo get_avatar($comment,$args['avatar_size'],null,null,array('class' => array('img-responsive', 'img-circle') )); ?>
			</div>
			<div class="comment-body">
				<h4 class="comment-author"><?php echo get_comment_author_link(); ?></h4>
				<span class="comment-date"><?php printf(__('%1$s at %2$s', 'hawkseye'), get_comment_date(),  get_comment_time()) ?></span>
				<?php if ($comment->comment_approved == '0') { ?><em><i class="fa fa-spinner fa-spin" aria-hidden="true"></i> <?php _e('Comment awaiting approval', 'hawkseye'); ?></em><br /><?php } ?>
				<?php comment_text(); ?>
				<span class="comment-reply"> <?php comment_reply_link(array_merge( $args, array('reply_text' => __('Reply', 'hawkseye'), 'depth' => $depth, 'max_depth' => $args['max_depth'])), $comment->comment_ID); ?></span>
			</div>
		</div>
    <?php 
}

// Enqueue comment-reply
add_action('wp_enqueue_scripts', 'hawkseye_public_scripts');

function hawkseye_public_scripts() {
    if (!is_admin()) {
        if (is_singular() && get_option('thread_comments')) { wp_enqueue_script('comment-reply'); }
    }
}

// Enqueue fontawesome
add_action('wp_enqueue_scripts', 'hawkseye_public_styles');

function hawkseye_public_styles() {
        wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '4.7.0', 'all');
}
//END CUSTOM COMMENTS SECTION


//Block Templates
function hawkseye_block_templates( $args, $post_type) {
    if( 'name-of-post-type' === $post_type) {
        // $args[ 'template_lock' ] = 'all';   //prevent template modification
        $args[ 'template' ] = [
            [
                //INSERT TEMPLATE CONTENT HERE
            ]
        ];
    }
    return $args;
}
add_filter( 'register_post_type_args', 'hawkseye_block_templates', 20, 2);

// //Register Post Types with Block Templates
// function hawkseye_register_posts() {
//     //register a post type called "Article" and give default template
//     $args = array(
//         'public' => true,
//         'has_archive' => true,
//         'label' => 'Article',
//         'show_in_rest' => true,
//         'supports' => array('title','editor','author','excerpt','comments','revisions', 'thumbnail'),
//         'template' => array(
//             // array( 'core/heading', array(
//             //     'placeholder' => 'Insert Date/Author',
//             //     'align' => 'center'
//             // ) ),
//             // array( 'core/image', array(
//             //     'align' => 'center',
//             // ) ),
//             array( 'core/paragraph', array(
//                 'placeholder' => 'Add Article Text...',
//             ) ),
//         )
//     );
//     register_post_type('article', $args);
// }
// add_action( 'init', 'hawkseye_register_posts');
    