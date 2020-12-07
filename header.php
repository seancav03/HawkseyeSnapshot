<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head();?>

</head>
<body>
    <div class="container-scroller">
        <div class="main-panel">
        <header id="header">
            <div class="container">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="d-flex justify-content-between align-items-center navbar-top">
                <ul class="navbar-left">
                    <?php
                            wp_nav_menu(
                                array(
                                    'menu' => 'primary',
                                    'menu_class' => 'main-header-menu-2',
                                    'container' => '',
                                    'container_class' => '',
                                    'theme_location' => 'primary'
                                )
                            );
                        ?>
                </ul>
                <div>
                    <a class="navbar-brand" href="<?php echo get_home_url();?>">
                        <?php
                        if(function_exists('the_custom_logo')){
                            $custom_logo_id = get_theme_mod('custom_logo');
                            $logo = wp_get_attachment_image_src($custom_logo_id);
                            $height = 100;
                            $WHratio = $logo[1]/$logo[2];
                        }
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="mdi mdi-magnify"></i></a>
                        </li>
                        <img src="<?php echo $logo[0] ?>" width="<?php echo ($height*$WHratio) ?>" height="<?php echo $height ?>" alt=""/>
                    </a>
                </div>
                <div class="d-flex">
                    <ul class="social-media">
                    <li>
                        <a href="#">
                        <i class="mdi mdi-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <i class="mdi mdi-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <i class="mdi mdi-youtube"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <i class="mdi mdi-linkedin"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <i class="mdi mdi-twitter"></i>
                        </a>
                    </li>
                    </ul>
                </div>
                </div>
                <div class="navbar-bottom-menu">
                <button
                    class="navbar-toggler"
                    type="button"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- <div class="navbar-collapse justify-content-center collapse" 
                id="navbarSupportedContent">
                    <ul class="navbar-nav d-lg-flex justify-content-between align-items-center">
                        <li>
                            <button class="navbar-close">
                            <i class="mdi mdi-close"></i>
                            </button>
                        </li>
                    </ul>
                </div> -->
                </div>
            </nav>

            <!-- partial -->
            </div>
        </header>