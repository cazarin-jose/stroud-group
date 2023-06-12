<?php
/**
 *
 * The Header for our theme
 * @since 1.0.0
 * @version 1.0.0
 *
 */
?><!DOCTYPE html>
<!--[if IE 6]><html class="ie ie6 no-js" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 7]><html class="ie ie7 no-js" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="ie ie8 no-js" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->
  <head>
<!-- 	  <link rel="stylesheet" href="flexslider.css" type="text/css">      -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <?php if( ! cs_get_option( 'non_responsive' ) ) { ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php } else { ?>
    <meta name="viewport" content="width=1200">
    <?php } ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_search() || is_404() ) { echo '<meta name="robots" content="noindex, nofollow" />'; } ?>
    <?php if ( cs_get_option( 'favicon' ) ) { echo '<link rel="shortcut icon" href="'. cs_get_option( 'favicon' ) .'" />'; } ?>
    <?php wp_head(); ?>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </head>
  <body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <?php echo cs_header_before(); ?>

    <div id="page" class="hfeed site">

      <?php echo cs_top_bar(); ?>

      <?php get_template_part( 'templates/header', cs_get_option( 'header_style' ) ); ?>

      <?php if( ! cs_get_option( 'non_responsive' ) ) { ?>
        <div id="navigation-mobile">
          <div class="container">

            <?php echo cs_site_mobile_menu(); ?><!-- site-mobile-menu -->

            <?php
            $cs_menu_search = cs_get_option( 'menu_search' );
            if( ! empty( $cs_menu_search ) ) { ?>
            <form id="mobile-search" action="<?php echo home_url( '/' ); ?>" method="get">
              <input type="text" name="s" placeholder="<?php _e( 'Search', 'route' ); ?>" />
              <button type="submit" class="fa fa-search"></button>
            </form>
            <?php } ?>

            <?php echo cs_site_mobile_languages(); ?>

          </div>
        </div><!-- /navigation-mobile -->
      <?php } ?>

      <div id="main">

        <div id="content" class="site-content">