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
          Amos<span>.</span>
        </a>
      </p>
      <p class="site-description"><?php bloginfo('description'); ?></p>
      <nav class="site-nav" aria-label="Primary">
        <ul>
          <li><a href="#about">About</a></li>
          <li><a href="#pillars">Mission</a></li>
          <li><a href="#businesses">Ventures</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="main">