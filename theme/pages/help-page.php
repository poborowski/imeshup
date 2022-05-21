<?php
/**
 * Template Name: help-page
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="page-wrapper">

	<div class="help-page" id="content">

		<div class="row">
            <?php get_template_part( 'pages/help-page/main-help-wrap' ); ?>
			<?php get_template_part( 'pages/sing-up' ); ?>
			
		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();
