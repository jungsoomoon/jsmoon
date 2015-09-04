<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="page" class="hfeed site">
        <header id="masthead" class="site-header" role="banner">
            <img id="header-background" src="<?php echo esc_url( home_url( '/wp-content/uploads/2015/09/elamayllattaa-banneri-no-text.png' ) ); ?>">
            <a class="home-link" href="<?php echo esc_url( home_url( '/lahjoita/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
                <div id="header-text">
                    <span id="header-text-first">&nbsp;elämä&nbsp;</span>
                    <span id="header-text-second">yllättää</span>
                </div>
                <span id="button-header" class="animated-pulse infinite pulse hvr-bounce-to-top"><span id="button-filling">Lahjoita nyt</span></span>
            </a>

            <div id="navbar" class="navbar">
                <nav id="site-navigation" class="navigation main-navigation" role="navigation">
                    <button class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></button>
                    <a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
                    <?php get_search_form(); ?>
                </nav><!-- #site-navigation -->
            </div><!-- #navbar -->
        </header><!-- #masthead -->

        <div id="main" class="site-main">
