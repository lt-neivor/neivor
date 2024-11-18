<?php
/**
 * 
 * Header.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <?php wp_head(); ?>
  <script>
    const _dittoURI_ = "<?= get_template_directory_uri() ?>",
          _dittoURL_ = "<?= get_site_url() ?>";
  </script>
</head>

<body <?php body_class(); ?>>
<div id="page"> <!-- +Page container -->
  <header id="header-wrapper">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-4">
          <?= get_custom_logo(); ?>
          <div class="close-submenu-movil"></div>
        </div>
        <div class="col-8">
          <div class="bar-menu">
            <span class="top"></span>
            <span class="center"></span>
            <span class="bottom"></span>
          </div>
          <div class="nav-contain">
            <?php get_template_part('partials/globals/nav-menu'); ?>
          </div>
        </div>
      </div>
    </div>
  </header>