<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if( is_front_page() ){ ?>
<div class="banner-home">
    <a class="logo" href="/">
        <img src="<?php echo get_theme_file_uri(); ?>/custom/img/tbbc-logo-1.png" alt="" class="logo-banner img-responsive">
    </a>
    <?php if( function_exists('wd_slider') ) { wd_slider(1); } ?>
</div>
<?php } ?>

<header class="menu-top <?php if( !is_home() ){ echo 'menu-fixed'; } ; ?>">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="menu-top">
                    <div class="menu-bg"></div>
                    <div class="menu-burger">☰</div>
                    <div class="menu-items">
                        <div>ITEM 1</div>
                        <div>ITEM 2</div>
                        <div>ITEM 3</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="logo-fix text-center">
                    <img src="<?php echo get_theme_file_uri(); ?>/custom/img/tbbc-logo-2.png" alt="" class="logo-fix-img">
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <a href="<?php echo get_site_url(); ?>/carrinho" class="cart-link">
                    <img src="<?php echo get_theme_file_uri(); ?>/custom/img/icons/shopping-bags.svg" alt="Carrinho"
                         class="icon icon-cart">
                </a>
            </div>
        </div>
    </div>

</header>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar navbar-expand-md navbar-dark bg-primary">

		<?php if ( 'container' == $container ) : ?>
			<div class="container">
		<?php endif; ?>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

						<?php endif; ?>


					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
