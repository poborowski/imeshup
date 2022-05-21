<?php
/**
 * Template Name: blog
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

	<div class="blog" id="content">


		<?php get_template_part( 'pages/blog-page/main-blog-wrap' ); ?>

        <?php 
        // the query
        $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
        
        <ul>
            <!-- the loop -->
            <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; ?>
        </ul>    
        <?php wp_reset_postdata(); ?>

	</div><!-- #content -->
    <?php get_template_part( 'pages/sing-up' ); ?>
</div><!-- #page-wrapper -->

<?php
get_footer();


