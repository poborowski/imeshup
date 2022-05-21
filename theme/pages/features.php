<?php
/**
 * Template Name: features
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod('understrap_container_type');
?>

<div class="wrapper" id="page-wrapper">

	<div class="features" id="content">

		
    <?php get_template_part( 'pages/features-page/main-features-wrap' ); ?>
    <?php get_template_part( 'pages/features-page/second-features-wrap' ); ?>
    <?php get_template_part( 'pages/features-page/three-features-wrap' ); ?>
    <?php get_template_part( 'pages/features-page/fourth-features-wrap' ); ?>
    <?php get_template_part( 'pages/features-page/fifth-features-wrap' ); ?>
    <?php get_template_part( 'pages/features-page/six-features-wrap' ); ?>
	

	</div><!-- #content -->

    <?php get_template_part( 'pages/sing-up' ); ?>

</div><!-- #page-wrapper -->

<?php
get_footer();
