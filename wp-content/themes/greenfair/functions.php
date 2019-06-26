<?php 
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
function add_theme_scripts() {

  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800', false );
  wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
  wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/css/animate.min.css');
  wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css');
  wp_enqueue_style( 'carousel-css', get_template_directory_uri() . '/css/carousel.css');
  wp_enqueue_style( 'isotope-style', get_template_directory_uri() . '/css/isotope/style.css');
  wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css');
  wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css');
  wp_enqueue_style( 'style', get_stylesheet_uri() );

  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-1.12.3.min.js');
  wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/waypoints.min.js');
  wp_enqueue_script( 'counterup', get_template_directory_uri() . '/js/jquery.counterup.min.js');
  wp_enqueue_script( 'gmaps', get_template_directory_uri() . '/js/gmaps.min.js');
  wp_enqueue_script( 'google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBjxvF9oTfcziZWw--3phPVx1ztAsyhXL4');
  wp_enqueue_script( 'isotope-script', get_template_directory_uri() . '/js/isotope/min/scripts-min.js');
  wp_enqueue_script( 'isotope-cells-by-row', get_template_directory_uri() . '/js/isotope/cells-by-row.js');
  wp_enqueue_script( 'isotope-pkgd', get_template_directory_uri() . '/js/isotope/isotope.pkgd.min.js');
  wp_enqueue_script( 'isotope-packery-mode', get_template_directory_uri() . '/js/isotope/packery-mode.pkgd.min.js');
  wp_enqueue_script( 'isotope-scripts', get_template_directory_uri() . '/js/isotope/scripts.js');
  wp_enqueue_script( 'backtotop', get_template_directory_uri() . '/js/backtotop.js');
  wp_enqueue_script( 'localScroll', get_template_directory_uri() . '/js/jquery.localScroll.min.js');
  wp_enqueue_script( 'scrollTo', get_template_directory_uri() . '/js/jquery.scrollTo.min.js');
  wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.min.js');
  wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js');
  wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js');

}

//Create the option page
if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(array(
    'page_title'  => __('Настройки', 'greenfair'),
    'menu_title'  => __('Настройки', 'greenfair'),
    'menu_slug'   => 'greenfair-settings',
    'capability'  => 'edit_posts',
    'redirect'      => false
  ));
}

add_theme_support('menus');

add_theme_support('post-thumbnails');

add_theme_support( 'custom-logo' );

add_image_size( 'custom-thumbnail', 360, 230, true );

function register_menus() {
  register_nav_menus(
    array(
      'header-menu' => __('Главное меню', 'greenfair')
    )
  );
}

add_action( 'init', 'register_menus' );

add_filter( 'excerpt_length', function(){
  return 30;
} );

add_filter('excerpt_more', function($more) {
  return '...';
});

 ?>