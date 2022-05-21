<?php
/**
 * Template Name: team
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

	<div class="team" id="content">
  
    <?php get_template_part( 'pages/team-page/first-team-wrap' ); ?>
    <?php get_template_part( 'pages/team-page/second-team-wrap' ); ?>


	</div><!-- #content -->
    <?php get_template_part( 'pages/sing-up' ); ?>
</div><!-- #page-wrapper -->

<?php
get_footer();
