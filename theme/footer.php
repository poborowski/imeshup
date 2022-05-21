<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');


?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>

<section class="wrapper pt-5 footer" id="wrapper-footer">

    <footer class="<?php echo esc_attr($container); ?>">

        <div class="footer-box row">
            <div class="col-md-3 col-6">
                <p>Community</p>
                <a href="">Blog</a>
                <a href="">FAQ</a>
                <a href="">Help Center</a>
            </div>
            <div class="col-md-3 col-6">
                <p>Explore</p>
                <a href="">Features</a>
                <a href="">Pricing</a>
                <a href="">Video Tutorials</a>
            </div>
            <div class="col-md-3 col-6">
                <p>About Us</p>
                <a href="">Team</a>
                <a href="">Terms & Conditions</a>
                <a href="">Privacy Policy</a>
            </div>
            <div class="col-md-3 col-6">
                <p>Contact<p>
                <a href="">info@imeshup.com</a>
                <div class="social-box row">
                    <div class="col-md-3 col-6">
                        <a href=""><img src="<?= IMGS ?>/facebook-5.svg"></a>
                    </div>
                    <div class="col-md-3 col-6">
                        <a href=""><img src="<?= IMGS ?>/linkedin-1.svg"></a>
                    </div>
                    <div class="col-md-3 col-6">
                        <a href=""><img src="<?= IMGS ?>/twitter-logo-silhouette.svg"></a>
                    </div>
                    <div class="col-md-3 col-6">
                        <a href=""><img src="<?= IMGS ?>/youtube-1.svg"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-second-box row">
            <div class="logo col-md-6 col-12">
            <img src="<?= IMGS ?>/logowhite.svg">
            </div>
            <div class="col-md-6 col-12">
                <p>© 2018, iMeshup. All Rights Reserved.</p>
            </div>
        </div>
    </footer><!-- container end -->

</section><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?= get_template_part('components/BackToTop'); ?>
<?= get_template_part('Assets'); ?>
<?php wp_footer(); ?>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>

</html>