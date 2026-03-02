<?php
if (!defined('ABSPATH')) {
  exit;
}
$og_image = get_stylesheet_directory_uri() . '/assets/images/og-image.jpg';
$site_url = esc_url(home_url('/'));
?><!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- ── SEO ─────────────────────────────────────────────────── -->
  <title>Amos Greenwood | Build • Lead • Protect.</title>
  <meta name="description"
    content="Entrepreneur, operator, and founder building disciplined, scalable ventures with a focus on ownership, execution, and legacy.">

  <!-- ── Open Graph ──────────────────────────────────────────── -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo $site_url; ?>">
  <meta property="og:title" content="Amos Greenwood — Build • Lead • Protect.">
  <meta property="og:description"
    content="Entrepreneur and operator documenting the build behind scalable companies and long-term vision.">
  <meta property="og:image" content="<?php echo esc_url($og_image); ?>">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">

  <!-- ── Twitter Card ────────────────────────────────────────── -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Amos Greenwood — Build • Lead • Protect.">
  <meta name="twitter:description"
    content="Entrepreneur and operator documenting the build behind scalable companies and long-term vision.">
  <meta name="twitter:image" content="<?php echo esc_url($og_image); ?>">

  <?php wp_head(); ?>
</head>

<body <?php body_class('ag-body'); ?>>
  <?php wp_body_open(); ?>

  <header class="site-header" id="site-header">
    <div class="header-inner">
      <p class="site-title">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logomark_1.png" width="40" height="40"
            alt="<?php bloginfo('name'); ?>">
        </a>
      </p>
      <p class="site-description"><?php bloginfo('description'); ?></p>

      <div class="nav-actions">
        <nav class="site-nav" id="primary-nav" aria-label="Primary">
          <ul>
            <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
            <li><a href="<?php echo esc_url(home_url('/vision/')); ?>">Vision</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </nav>

        <button class="theme-toggle" type="button" aria-pressed="false">
          <span class="sr-only">Toggle light mode</span>
          <svg class="icon-moon" viewBox="0 0 24 24" aria-hidden="true">
            <path d="M21 14.5A8.5 8.5 0 0 1 9.5 3a8.5 8.5 0 1 0 11.5 11.5z" fill="currentColor" />
          </svg>
          <svg class="icon-sun" viewBox="0 0 24 24" aria-hidden="true">
            <path
              d="M12 7a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm0-5v3m0 14v3m10-10h-3M5 12H2m16.95-6.95-2.12 2.12M7.17 16.83l-2.12 2.12m0-11.78 2.12 2.12m11.66 11.66 2.12 2.12"
              fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>

        <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="primary-nav">
          <span class="nav-toggle-icon" aria-hidden="true"></span>
          <span class="sr-only">Toggle menu</span>
        </button>
      </div>
    </div>
  </header>

  <div class="nav-backdrop" data-nav-backdrop></div>

  <main class="main">