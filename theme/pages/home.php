<?php
/**
 * Template Name: home
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

	<div class="home" id="content">

		<div class="row">
		<?php get_template_part( 'pages/home-page/home-main-wrap' ); ?>
		<?php get_template_part( 'pages/home-page/second-home-wrap' ); ?>
		<?php get_template_part( 'pages/home-page/home-three-wrap' ); ?>
		<?php get_template_part( 'pages/home-page/fourth-home-wrap' ); ?>
		<?php get_template_part( 'pages/home-page/fifth-home-wrap' ); ?>
		<?php get_template_part( 'pages/home-page/collaboration' ); ?>
		<?php get_template_part( 'pages/sing-up' ); ?>


	


		
		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();
