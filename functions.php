<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Register Theme Scripts
 * https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/
 */
function ditto_scripts() {
  wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'main-styles', get_template_directory_uri() . '/css/main.bundle.css' );
  wp_enqueue_style('bootstrap.css', get_template_directory_uri() . '/css/bootstrap.min.css');
  wp_enqueue_style('owl-carousel.css', get_template_directory_uri() . '/css/owl.carousel.min.css');

  wp_enqueue_script( 'main-scripts', get_template_directory_uri() . '/js/main.bundle.js', array( 'jquery' ), '', true );
  wp_enqueue_script('jquery.js', get_template_directory_uri() . '/js/jquery-3.5.1.min.js', true);
  wp_enqueue_script('bootstrap.js',  get_template_directory_uri() . '/js/bootstrap.min.js');
  wp_enqueue_script('owl-carousel.js', get_template_directory_uri() . '/js/owl.carousel.min.js');
  wp_enqueue_script('font-awesome.js', get_template_directory_uri() . '/js/font-awesome.js');
  wp_register_script('custom.js', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1', true);
  wp_enqueue_script('custom.js');
}
add_action( 'wp_enqueue_scripts', 'ditto_scripts');

/**
 * Register Navigation Menus
 * https://developer.wordpress.org/reference/functions/register_nav_menus/
 */
function ditto_navigation_menus() {
  $locations = array(
    'main_menu' => __( 'Main Menu', 'text_domain' )
  );
  register_nav_menus( $locations );
}
add_action( 'init', 'ditto_navigation_menus' );

/**
 * Theme support
 * https://developer.wordpress.org/reference/functions/add_theme_support/
 */
add_theme_support( 'custom-logo' );

/**
 * Login Styles
 */
function ditto_login_styles() { ?>
  <style type="text/css">
    body {
      background-color: #222 !important;
    }
    #login h1 a, .login h1 a {
      display: none;
    }
    #login h1 img {
      width: 100%;
      max-width: 240px;
      max-height: 180px;
    }
  </style>
  <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function(event) { 
      let loginImg = document.createElement("img");
        loginImg.src = "<?= get_template_directory_uri() ?>/images/pipe-code-logo.svg";
        loginImg.alt = "WordPress login image";
        document.querySelector('#login h1').appendChild(loginImg);
    });
  </script>
<?php }
add_action( 'login_enqueue_scripts', 'ditto_login_styles' );

/**
 * Install latest jQuery version 3.5.1
 */
if (!is_admin()) {
	wp_deregister_script('jquery');
	wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"), false);
	wp_enqueue_script('jquery');
}

/**
 * Disable Gutenberg
 */
add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('use_block_editor_for_post_type', '__return_false', 10);
/*
*  Options
*/
if (function_exists('acf_add_options_page')) {
  acf_add_options_page(array(
	  'page_title'    => 'Options theme',
	  'menu_title'    => 'Options theme',
	  'menu_slug'     => 'theme-settings',
	  'capability'    => 'edit_posts',
	  'redirect'      =>  true
	));
  acf_add_options_sub_page(array(
    'page_title'     => 'Footer',
    'menu_title'     => 'Footer',
    'parent_slug'   => 'theme-settings',
  ));
  acf_add_options_sub_page(array(
    'page_title'     => 'Header',
    'menu_title'     => 'Header',
    'parent_slug'   => 'theme-settings',
  ));
  acf_add_options_sub_page(array(
    'page_title'     => 'News',
    'menu_title'     => 'News',
    'parent_slug'   => 'theme-settings',
  ));
  acf_add_options_sub_page(array(
    'page_title'     => 'Allies',
    'menu_title'     => 'Allies',
    'parent_slug'   => 'theme-settings',
  ));
  acf_add_options_sub_page(array(
    'page_title'     => 'How to hire it',
    'menu_title'     => 'How to hire it',
    'parent_slug'   => 'theme-settings',
  ));
}
/*=================== Comprehensive protection ===================*/
add_theme_support('post-thumbnails');
add_post_type_support( 'comprehensive_protection', 'thumbnail' );
function comprehensive_protection_post(){
  /*====== Argument post type =====*/
  $arg = array(
    'public' => true,
    'has_archive' => true,
    'label'  => 'Protección integral',
    'menu_icon' => 'dashicons-building',
    'supports' => ['title', 'editor', 'thumbnail']
  );
  /*============ Register post type ============*/
  register_post_type('protection_post', $arg);
}
add_action('init', 'comprehensive_protection_post', 3);
function is_mobile() {
  return preg_match('/(android|iphone|ipad|ipod|windows phone|blackberry|iemobile|opera mini|mobile)/i', $_SERVER['HTTP_USER_AGENT']);
}
/*=================== FQAs ===================*/
add_theme_support('post-thumbnails');
add_post_type_support( 'fqas', 'thumbnail' );
function fqas_posts(){
  /*====== Argument post type =====*/
  $arg = array(
    'public' => true,
    'has_archive' => true,
    'label'  => 'Preguntas frecuentes',
    'menu_icon' => 'dashicons-excerpt-view',
    'supports' => ['title', 'editor', 'thumbnail']
  );
  /*============ Register post type ============*/
  register_post_type('fqas_post', $arg);
}
add_action('init', 'fqas_posts', 4);
/*=================== FQAs ===================*/
add_theme_support('post-thumbnails');
add_post_type_support( 'blogs', 'thumbnail' );
function blog_posts(){
  /*====== Argument post type =====*/
  $arg = array(
    'public' => true,
    'has_archive' => true,
    'label'  => 'Blog',
    'menu_icon' => 'dashicons-book',
    'supports' => ['title', 'editor', 'thumbnail'],
    'taxonomies' => array('blog_cat')
  );
  /*============ Register post type ============*/
  register_post_type('blogs', $arg);
  /*============ Categories ============*/
  $category = array(
    'name' => _x('Categoria', 'taxonomy general name'),
    'singular_name' => _x('Categoria', 'taxonomy singular name'),
    'search_items' =>  __('Search Categoria'),
    'all_items' => __('All Categoria'),
    'parent_item' => __('Parent Categoria'),
    'parent_item_colon' => __('Parent Categoria:'),
    'edit_item' => __('Edit Categoria'),
    'update_item' => __('Update Categoria'),
    'add_new_item' => __('Add New Categoria'),
    'new_item_name' => __('New Categoria Name'),
    'menu_name' => __('Categoria'),
  );
  /*========== Register taxonomy ==========*/
  register_taxonomy('blog_cat', array('blogs'), array(
    'hierarchical' => true,
    'labels' => $category,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'blog_cat'),
  ));
}
add_action('init', 'blog_posts', 5);