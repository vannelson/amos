<?php
if (!defined('ABSPATH')) {
  exit;
}
get_header();

$assets_url = get_stylesheet_directory_uri() . '/assets/images/';
?>

<!-- ═══════════════════════════════════════════════
     1. HERO
═══════════════════════════════════════════════ -->
<section class="hero-section" id="home">
  <div class="hero-inner">

    <h1 class="hero-tagline">
      <span>BUILD<span class="dot">.</span></span>
      <span>LEAD<span class="dot">.</span></span>
      <span>PROTECT<span class="dot">.</span></span>
    </h1>

    <div class="hero-divider"></div>

    <p class="hero-name">Amos Greenwood Jr.</p>
    <p class="hero-roles">Entrepreneur&nbsp;&nbsp;·&nbsp;&nbsp;Mentor&nbsp;&nbsp;·&nbsp;&nbsp;Operator</p>

    <a href="https://www.youtube.com/@amosgreenwood_jr" target="_blank" rel="noopener" class="hero-cta"
      id="hero-youtube-cta">
      <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M23.5 6.19a3.02 3.02 0 0 0-2.12-2.14C19.54 3.5 12 3.5 12 3.5s-7.54 0-9.38.55A3.02 3.02 0 0 0 .5 6.19C0 8.04 0 12 0 12s0 3.96.5 5.81a3.02 3.02 0 0 0 2.12 2.14C4.46 20.5 12 20.5 12 20.5s7.54 0 9.38-.55a3.02 3.02 0 0 0 2.12-2.14C24 15.96 24 12 24 12s0-3.96-.5-5.81zM9.75 15.5v-7l6.5 3.5-6.5 3.5z" />
      </svg>
      Watch on YouTube
    </a>

  </div>
</section>

<hr class="ag-rule">

<!-- ═══════════════════════════════════════════════
     2. ABOUT
═══════════════════════════════════════════════ -->
<section class="about-section" id="about">
  <div class="ag-section">

    <div class="about-grid">

      <!-- Photo — 14.jpeg is the largest/real portrait -->
      <div class="about-photo-wrap">
        <img src="<?php echo esc_url($assets_url . 'profile.jpeg'); ?>" alt="Amos Greenwood Jr." class="about-photo"
          loading="eager">
        <div class="about-photo-accent"></div>
      </div>

      <!-- Bio -->
      <div class="about-content">
        <span class="section-label">About</span>
        <h2 class="about-title">Built from the<br>ground up.</h2>
        <p class="about-bio">
          <strong>Built multiple companies from the ground up.</strong> Husband. Father.
          Focused on discipline, leadership, and responsibility.
          Helping the next generation build without a blueprint.
        </p>
        <p class="about-bio" style="margin-top:16px;">
          After years of managing a large business, Amos kept seeing the same two problems everywhere: inconsistency and
          disorganization. He asked himself,
          <em>"Why isn't there a simpler, more reliable way to give people a great experience every time?"</em>
          That question built everything.
        </p>
      </div>

    </div>
  </div>
</section>

<hr class="ag-rule">

<!-- ═══════════════════════════════════════════════
     3. PILLARS
═══════════════════════════════════════════════ -->
<section class="pillars-section" id="pillars">
  <div class="ag-section">

    <div class="pillars-header">
      <span class="section-label">What I Stand For</span>
      <h2 class="pillars-title">Three pillars. One direction.</h2>
    </div>

    <div class="pillars-grid">

      <div class="pillar-card">
        
        <h3 class="pillar-word">Build</h3>
        <p class="pillar-items">Entrepreneurship<br>Execution<br>Ownership</p>
      </div>

      <div class="pillar-card">
        
        <h3 class="pillar-word">Lead</h3>
        <p class="pillar-items">Mentorship<br>Standards<br>Discipline</p>
      </div>

      <div class="pillar-card">
        
        <h3 class="pillar-word">Protect</h3>
        <p class="pillar-items">Preparedness<br>Responsibility<br>Real-world leadership</p>
      </div>

    </div>
  </div>
</section>

<hr class="ag-rule">

<!-- ═══════════════════════════════════════════════
     4. BUSINESSES
═══════════════════════════════════════════════ -->
<section class="businesses-section" id="businesses">
  <div class="ag-section">

    <div class="businesses-header">
      <span class="section-label">Ventures</span>
      <h2 class="pillars-title" style="text-align:left;">Founder of.</h2>
    </div>

    <div class="businesses-grid">

      <!-- My Party Rental Guys -->
      <div class="business-card" id="mprg-card" style="display:flex;flex-direction:column;align-items:stretch;">
        <div class="business-logo-wrap" style="width:100%;aspect-ratio:3/2;overflow:hidden;display:flex;align-items:center;justify-content:center;background:#fff;">
          <img src="<?php echo esc_url($assets_url . 'myparty.jpeg'); ?>" alt="My Party Rental Guys logo"
            style="width:100%;height:100%;object-fit:cover;display:block;">
        </div>

        <span class="business-label">Founder · Coachella Valley, CA</span>
        <h3 class="business-name">My Party Rental Guys</h3>
        <p class="business-tagline">"Your party, our passion."</p>
        <p class="business-desc">
          Premier event rental company serving the Greater Palm Springs area. Tents, tables, chairs, jumpers, lighting,
          dance floors, AV, photo booths, mobile bartenders, and more — making events easy and unforgettable across the
          Coachella Valley.
        </p>

        <div class="business-services">
          <span class="biz-tag">Tents &amp; Canopies</span>
          <span class="biz-tag">Tables &amp; Chairs</span>
          <span class="biz-tag">Jumpers</span>
          <span class="biz-tag">Lighting</span>
          <span class="biz-tag">Dance Floors</span>
          <span class="biz-tag">AV Rentals</span>
          <span class="biz-tag">Photo Booths</span>
          <span class="biz-tag">Mobile Bartenders</span>
          <span class="biz-tag">Portable Restrooms</span>
          <span class="biz-tag">Valet</span>
        </div>

        <div class="business-events">
          <span class="event-type">Community Events</span>
          <span class="event-type">Corporate Events</span>
          <span class="event-type">Special Events</span>
        </div>

        <div class="biz-meta">
          <span class="biz-meta-item">
            <strong>Locations:</strong> Cathedral City &amp; Indio, CA
          </span>
          <span class="biz-meta-item">
            <strong>Phone:</strong> <a href="tel:7605373027">(760) 537-3027</a>
          </span>
        </div>

        <a href="https://mypartyrentalguys.com/" target="_blank" rel="noopener" class="business-link"
          id="mprg-site-link">
          Visit site
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round">
            <line x1="5" y1="12" x2="19" y2="12" />
            <polyline points="12 5 19 12 12 19" />
          </svg>
        </a>
      </div>

      <!-- TinyPest -->
      <div class="business-card" id="tinypest-card" style="display:flex;flex-direction:column;align-items:stretch;">
        <div class="business-logo-wrap" style="width:100%;aspect-ratio:3/2;overflow:hidden;display:flex;align-items:center;justify-content:center;background:#fff;">
          <img src="<?php echo esc_url($assets_url . 'tinyPest.jpeg'); ?>" alt="TinyPest logo"
            style="width:100%;height:100%;object-fit:cover;display:block;">
        </div>
        <span class="business-label">Founder · Termite &amp; Pest Control</span>
        <h3 class="business-name">TinyPest</h3>
        <p class="business-tagline">"Small problems. Big results."</p>
        <p class="business-desc">
          Termite &amp; pest control protecting homes and businesses. Built on the same standards of consistency and
          accountability that drive every Greenwood venture.
        </p>

        <div class="business-events">
          <span class="event-type">Termite Control</span>
          <span class="event-type">Pest Control</span>
          <span class="event-type">Residential &amp; Commercial</span>
        </div>

        <a href="https://www.tinypest.com/" target="_blank" rel="noopener" class="business-link"
          id="tinypest-site-link">
          Visit site
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round">
            <line x1="5" y1="12" x2="19" y2="12" />
            <polyline points="12 5 19 12 12 19" />
          </svg>
        </a>
      </div>

    </div>
  </div>
</section>

<hr class="ag-rule">

<!-- ═══════════════════════════════════════════════
     5. SOCIAL
═══════════════════════════════════════════════ -->
<section class="social-section" id="social">
  <div class="ag-section">

    <span class="section-label">Follow Along</span>
    <h2 class="social-title">Stay connected.</h2>

    <div class="social-links">

      <a href="https://www.youtube.com/@amosgreenwood_jr" target="_blank" rel="noopener" class="social-link"
        id="social-youtube">
        <svg width="20" height="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M23.5 6.19a3.02 3.02 0 0 0-2.12-2.14C19.54 3.5 12 3.5 12 3.5s-7.54 0-9.38.55A3.02 3.02 0 0 0 .5 6.19C0 8.04 0 12 0 12s0 3.96.5 5.81a3.02 3.02 0 0 0 2.12 2.14C4.46 20.5 12 20.5 12 20.5s7.54 0 9.38-.55a3.02 3.02 0 0 0 2.12-2.14C24 15.96 24 12 24 12s0-3.96-.5-5.81zM9.75 15.5v-7l6.5 3.5-6.5 3.5z" />
        </svg>
        YouTube
      </a>

      <a href="https://x.com/amosgreenwood_jr" target="_blank" rel="noopener" class="social-link" id="social-x">
        <svg width="20" height="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.746l7.73-8.835L1.254 2.25H8.08l4.253 5.622zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
        </svg>
        X (Twitter)
      </a>

      <a href="https://www.instagram.com/amosgreenwood_jr" target="_blank" rel="noopener" class="social-link"
        id="social-instagram">
        <svg width="20" height="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z" />
        </svg>
        Instagram
      </a>

    </div>
  </div>
</section>

<hr class="ag-rule">

<!-- ═══════════════════════════════════════════════
     6. CONTACT — Contact Form 7
═══════════════════════════════════════════════ -->
<section class="contact-section" id="contact">
  <div class="ag-section">

    <div class="contact-layout">

      <!-- Left: copy -->
      <div class="contact-copy">
        <span class="section-label">Contact</span>
        <h2 class="contact-title">Let's connect.</h2>
        <p class="contact-sub">
          Whether you're planning an event, looking to connect on business, or want to reach out — the door is open.
        </p>

        <div class="contact-meta">
          <p class="contact-meta-item">
            <span class="contact-meta-label">Phone</span>
            <a href="tel:7605373027">(760) 537-3027</a>
          </p>
          <p class="contact-meta-item">
            <span class="contact-meta-label">Location</span>
            <span>Coachella Valley, CA</span>
          </p>
        </div>
      </div>

      <!-- Right: CF7 form -->
      <div class="contact-form-wrap">
        <?php
        if (function_exists('wpcf7_contact_form')) {
          // Replace the ID below with your actual CF7 form ID from WP Admin → Contact → Contact Forms
          echo do_shortcode('[contact-form-7 id="1" title="Contact form 1"]');
        } else {
          echo '<p class="cf7-fallback">Install &amp; activate <strong>Contact Form 7</strong> plugin, then this form will appear automatically.</p>';
        }
        ?>
      </div>

    </div>
  </div>
</section>

<style>
  /* Prevent images in the contact section from scaling */
  .contact-section img {
    width: auto !important;
    max-width: none !important;
    height: auto !important;
    object-fit: unset !important;
  }
</style>

<?php get_footer(); ?>