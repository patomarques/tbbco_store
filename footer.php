<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper bg-black" id="wrapper-footer">

    <div class="<?php echo esc_attr( $container ); ?>">

        <div class="row">

            <div class="col-md-12">

                <footer class="site-footer" id="colophon">

                    <div class="site-info">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <a href="/" class="c-pink">The Boom Bap Co <?= date('Y') ?></a>
                                    <span class="c-white">&#9398;</span> <span class="c-pink">Todos os direitos reservados</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- .site-info -->

                </footer><!-- #colophon -->

            </div><!--col end -->

        </div><!-- row end -->

    </div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

