<?php
if (!defined('ABSPATH')) {
  exit;
}

/* ─── Theme Setup ───────────────────────────────────────────── */
function simple_custom_theme_setup()
{
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));
  register_nav_menus(array(
    'primary' => __('Primary Menu', 'simple-custom'),
  ));
}
add_action('after_setup_theme', 'simple_custom_theme_setup');

/* ─── Enqueue Assets ────────────────────────────────────────── */
function simple_custom_enqueue_assets()
{
  // Google Fonts — Inter
  wp_enqueue_style(
    'ag-fonts',
    'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap',
    array(),
    null
  );

  // Main stylesheet
  wp_enqueue_style(
    'simple-custom-style',
    get_stylesheet_uri(),
    array('ag-fonts'),
    '2.0.0'
  );
}
add_action('wp_enqueue_scripts', 'simple_custom_enqueue_assets');

/* ─── Remove emoji scripts ──────────────────────────────────── */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
