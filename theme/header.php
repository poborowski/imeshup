<?php

/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;


// if (!is_front_page()) {
//     wp_redirect(home_url());
//     exit;
// }


$container = get_theme_mod('understrap_container_type');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&display=swap" rel="stylesheet">
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <meta property="og:image" content=" <?= IMGS ?>/ogimage.jpg">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body <?php body_class(); ?>>
    <?php do_action('wp_body_open'); ?>
    

        <!-- ******************* The Navbar Area ******************* -->
        <div id="wrapper-navbar" class="header-site" itemscope itemtype="http://schema.org/WebSite">

            <a class="skip-link sr-only sr-only-focusable"
                href="#content"><?php esc_html_e('Skip to content', 'understrap'); ?></a>

            <nav class="navbar navbar-expand-md px-0">


                <div class="container-fluid d-flex justify-content-center">
                <a class="navbar-brand col-8 px-0 text-left  justify-content-start  col-md-6 justify-content-md-center" rel="home" href="<?php echo esc_url(home_url('/')); ?>"
                        title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" itemprop="url"><img
                            src="<?= IMGS ?>/logo.png" alt="logo"></a>
                <?php wp_nav_menu(
                            array(
                                'theme_location'  => 'primary',
                                'container_class' => 'collapse navbar-collapse menu-left col-md-6 order-3 order-md-0',
                                'container_id'    => 'navbarNavDropdown',
                                'menu_class'      => 'navbar-nav col-12 px-0',
                                'fallback_cb'     => '',
                                'menu_id'         => 'main-menu-left',
                                'depth'           => 2,
                                'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
                            )
                        ); ?>


             

                 
                        <?php wp_nav_menu(
                            array(
                                'theme_location'  => 'menu-header-right',
                                'container_class' => 'collapse navbar-collapse menu-right col-md-4 order-3 order-md-0',
                                'container_id'    => 'navbarNavDropdown',
                                'menu_class'      => 'navbar-nav col-12 px-0 justify-content-end',
                                'fallback_cb'     => '',
                                'menu_id'         => 'main-menu-right',
                                'depth'           => 2,
                                'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
                            )
                        ); ?>

                  
<button class="navbar-toggler col-3" type="button" data-toggle="collapse"
                            data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                            aria-label="<?php esc_attr_e('Toggle navigation', 'understrap'); ?>">
                            <i class="togglerIcon fa fa-bars"></i>
                        </button>


                </div><!-- .container -->


            </nav><!-- .site-navigation -->

        </div><!-- #wrapper-navbar end -->

        <div class="site" id="page">