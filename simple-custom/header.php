<?php
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
  <div class="header-inner">
    <div>
      <p class="site-title">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <?php bloginfo( 'name' ); ?>
        </a>
      </p>
      <p class="site-description"><?php bloginfo( 'description' ); ?></p>
    </div>
    <nav class="site-nav" aria-label="Primary">
      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'primary',
          'container' => false,
          'fallback_cb' => false,
          'menu_class' => ''
        )
      );
      ?>
    </nav>
  </div>
</header>
<main class="main">
