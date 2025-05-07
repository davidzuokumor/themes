<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?php echo esc_url(get_template_directory_uri() . '/images/favicon.png'); ?>" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="content-wrapper">
        <!-- Preloader -->
        <div class="preloader-bg"></div>
        <div id="preloader">
            <div id="preloader-status">
                <div class="preloader-position loader"> <span></span> </div>
            </div>
        </div>
        <!-- Progress scroll totop -->
        <div class="progress-wrap cursor-pointer">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- Lines -->
        <div class="content-lines-wrapper">
            <div class="content-lines-inner">
                <div class="content-lines"></div>
            </div>
        </div>
        <!-- Menu -->
        <div class="duru-wrap">
            <div class="duru-wrap-inner">
                <nav class="duru-menu">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => '',
                        'fallback_cb' => false,
                        'items_wrap' => '<ul>%3$s</ul>',
                        'walker' => new Archsan_Menu_Walker() // Custom walker needed
                    ));
                    ?>
                </nav>
            </div>
        </div>
        <!-- Logo & Menu Burger -->
        <header class="duru-header">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-6 col-md-6 duru-logo-wrap">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="duru-logo">
                            <?php if (has_custom_logo()): ?>
                                <?php the_custom_logo(); ?>
                            <?php else: ?>
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/logo.png'); ?>" alt="<?php bloginfo('name'); ?>">
                            <?php endif; ?>
                        </a>
                    </div>
                    <!-- Menu Burger -->
                    <div class="col-6 col-md-6 text-right duru-wrap-burger-wrap"> 
                        <a href="#" class="duru-nav-toggle duru-js-duru-nav-toggle"><i></i></a> 
                    </div>
                </div>
            </div>
        </header>