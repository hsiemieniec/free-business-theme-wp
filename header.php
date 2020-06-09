<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package free-bussiness-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header">
        <nav class="site-nav wrapper">
            <div class="grid">
                <img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="LOGO">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'header',
                    'menu_id'        => 'links-desktop',
                    'container_class' => 'header'
                ) );
                ?>
            </div>
        </nav>
        <div class="topnav">
            <img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="LOGO">
            <!-- Navigation links (hidden by default) -->
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'header',
                    'menu_id'        => 'myLinks',
                    'container_class' => 'header'
                ) );
                ?>
            <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
            <a href="javascript:void(0);" class="icon" id="menu-mobile">
                <i class="fa fa-bars"></i>
            </a>
        </div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
