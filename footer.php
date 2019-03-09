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

    <div class="wrapper-footer bg-black" id="wrapper-footer">
        <div class="container">
<!--            <div class="row">-->
<!--                <div class="col-12 col-md-6">-->
<!--                    teste-->
<!--                </div>-->
<!--                <div class="col-12 col-md-6">-->
<!--testes-->
<!--                </div>-->
<!--            </div>-->
            <div class="row">
                <div class="col-12 text-center footer-copyfight">
                    <a href="/" class="c-pink">The Boom Bap Co <?= date('Y') ?></a>
                    <span class="c-white">&#9398;</span> <span class="c-green">Todos os direitos reservados</span>
                </div>
            </div>
        </div>
    </div>

</div>

<?php wp_footer(); ?>

</body>

</html>

