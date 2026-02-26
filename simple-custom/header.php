<?php
if (!defined('ABSPATH')) {
  exit;
}
?><!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description"
    content="Amos Greenwood Jr. — Entrepreneur, Mentor, and Operator. Built multiple companies from the ground up. Helping the next generation build without a blueprint.">
  <?php wp_head(); ?>
</head>

<body <?php body_class('ag-body'); ?>>
  <?php wp_body_open(); ?>

  <header class="site-header" id="site-header">
    <div class="header-inner">
      <p class="site-title">
        <a href="<?php echo esc_url(home_url('/')); ?>"> 
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" width="40" height="40" alt="<?php bloginfo('name'); ?>">
        </a>
      </p>
      <p class="site-description"><?php bloginfo('description'); ?></p>
      <div class="nav-actions">
        <nav class="site-nav" id="primary-nav" aria-label="Primary">
          <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#pillars">Mission</a></li>
            <li><a href="#businesses">Ventures</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </nav>
        <button class="theme-toggle" type="button" aria-pressed="false">
          <span class="sr-only">Toggle light mode</span>
          <svg class="icon-moon" viewBox="0 0 24 24" aria-hidden="true">
            <path d="M21 14.5A8.5 8.5 0 0 1 9.5 3a8.5 8.5 0 1 0 11.5 11.5z" fill="currentColor" />
          </svg>
          <svg class="icon-sun" viewBox="0 0 24 24" aria-hidden="true">
            <path d="M12 7a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm0-5v3m0 14v3m10-10h-3M5 12H2m16.95-6.95-2.12 2.12M7.17 16.83l-2.12 2.12m0-11.78 2.12 2.12m11.66 11.66 2.12 2.12" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
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
