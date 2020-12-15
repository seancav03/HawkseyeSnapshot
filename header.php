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
            <div id="headercontainer" class="container">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="d-flex justify-content-between align-items-center navbar-top">
                <!--
                <ul class="navbar-left">
                    <li><?php echo date('l jS \of F Y');?></li>
                </ul>
                -->
                <!--
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
                -->
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

                <div class="navbar-collapse justify-content-center collapse" 
                id="navbarSupportedContent">
                    <!-- <ul class="navbar-nav d-lg-flex justify-content-between align-items-center"> -->
                    <ul class="navbar-left justify-content-left">
                        <li>
                        <a class="navbar-brand" href="<?php echo get_home_url();?>">
                            <?php
                            $custom_logo_id = get_theme_mod('custom_logo');
                            $logo = wp_get_attachment_image_src($custom_logo_id);
                            ?>
                            <img id="logoheader" class="disappear" src="<?php echo $logo[0];?>" alt="" height="30" width="auto">
                        </a>
                        </li>
                        <li>
                            <button class="navbar-close">
                            <i class="mdi mdi-close"></i>
                            </button>
                        </li>
                        <!-- Dynamic Wordpress Header Menu -->
                        <?php
                            wp_nav_menu(
                                array(
                                    'menu' => 'primary',
                                    'menu_class' => 'main-header-menu',
                                    'container' => '',
                                    'container_class' => '',
                                    'theme_location' => 'primary'
                                )
                            );
                        ?>
                        <li>
                        </ul>
                        <img id="logowordsheader" class="disappear" src="<?php echo get_template_directory_uri()?>/assets/images/logowords.png">
                        <ul  class="navbar-right justify-content-right">
                        <div>
                        </li>
                        <?php
                            wp_nav_menu(
                                array(
                                    'menu' => 'right-header',
                                    'menu_class' => 'main-header-menu',
                                    'container' => '',
                                    'container_class' => '',
                                    'theme_location' => 'right-header'
                                )
                            );
                        ?>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#"><i class="mdi mdi-magnify"></i></a>
                        </li> -->
                    </ul>
                </div>
                </div>
            </nav>
            <div class="image_container">
                <div class="imageOne image">
                    <a class="navbar-brand" href="<?php echo get_home_url();?>">
                        <?php
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id);
                        ?>
                        <img id="logo" src="<?php echo $logo[0];?>" alt="" height="100" width="auto">
                    </a>
                </div>
                <div class="imageTwo image">
                    <img id="logowords" class="navbar-collapse" src="<?php echo get_template_directory_uri()?>/assets/images/logowords.png" width="100" height="40">
                </div>
            </div>

            <!-- partial -->
            </div>
        </header>

        <script>
        jQuery(document).ready(function($) {
            $(window).scroll(function () {
                if ($(window).scrollTop() > 100) { 
                    $('#logowordsheader').removeClass('disappear');
                    $('#logoheader').removeClass('disappear');
                }
                else{
                    $('#logowordsheader').addClass('disappear');
                    $('#logoheader').addClass('disappear');
                }
            });
        });
        </script>

        <?php 