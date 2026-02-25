<?php
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

function simple_custom_theme_setup() {
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  register_nav_menus(
    array(
      'primary' => __( 'Primary Menu', 'simple-custom' )
    )
  );
}
add_action( 'after_setup_theme', 'simple_custom_theme_setup' );

function simple_custom_enqueue_assets() {
  wp_enqueue_style( 'simple-custom-style', get_stylesheet_uri(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'simple_custom_enqueue_assets' );
