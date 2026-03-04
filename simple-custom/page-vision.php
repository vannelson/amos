<?php
/*
 * Template Name: Vision
 * Template Post Type: page
 */
if (!defined('ABSPATH')) {
    exit;
}
get_header();
$assets_url = get_stylesheet_directory_uri() . '/assets/images/';
$crest_url = $assets_url . 'Logo%20Files/Transparent%20Logo/PNG/Logomark_1.png';
?>

<article class="vision-page">

    <!-- ── VISION HERO ───────────────────────────────────────── -->
    <section class="vision-hero">
        <img src="<?php echo esc_url($crest_url); ?>" alt="" class="ag-watermark" aria-hidden="true">
        <div class="vision-hero-inner ag-section" data-reveal>
            <span class="section-label">Vision</span>
            <h1 class="vision-headline">Built for the Long Term.</h1>
            <p class="vision-lead">I build companies and initiatives designed to outlast me.</p>
            <div class="vision-divider"></div>
            <p class="vision-body">
                Every venture is grounded in ownership, operational discipline, and long-term stewardship — not
                short-term
                attention.
            </p>
            <p class="vision-body">
                <strong>Build. Lead. Protect.</strong> is not branding. It is structure.
            </p>
            <ul class="vision-tenets">
                <li>The objective is durability.</li>
                <li>Structure over noise.</li>
                <li>Impact over hype.</li>
            </ul>
        </div>
    </section>

    <hr class="ag-rule">

    <!-- ── CELEBRATION ANGELS ─────────────────────────────────── -->
    <section class="vision-block vision-block--dark" id="celebration-angels">
        <div class="ag-section" data-reveal>
            <span class="section-label">Nonprofit Initiative</span>
            <h2 class="vision-block-title">Celebration Angels</h2>
            <p class="vision-body">
                Celebration Angels is a 501(c)(3) nonprofit initiative focused on providing milestone events —
                birthdays,
                quinceañeras, weddings, and meaningful celebrations — for individuals and families who would otherwise
                go
                without.
            </p>
            <p class="vision-body">
                I grew up without ever having a celebration of my own. Today, through collaboration with the local event
                community, we are building a system where no milestone goes unseen simply because of financial
                limitation.
            </p>
            <p class="vision-body">
                This initiative brings vendors, venues, and service providers together to create fully supported events
                for
                those in need.
            </p>
            <p class="vision-body vision-emphasis">
                It is community stewardship in action.
            </p>
        </div>
    </section>

    <hr class="ag-rule">

    <!-- ── ACQUISITION & EXPANSION ───────────────────────────── -->
    <section class="vision-block" id="acquisition">
        <div class="ag-section" data-reveal>
            <span class="section-label">Growth Strategy</span>
            <h2 class="vision-block-title">Acquisition &amp; Expansion</h2>
            <p class="vision-body">
                Through disciplined acquisition and operational integration, we are building a portfolio of
                service-based
                companies focused on stability, leadership, and long-term growth.
            </p>
            <p class="vision-body">To date:</p>
            <ul class="vision-list">
                <li>3 pest control acquisitions</li>
                <li>2 event rental acquisitions</li>
            </ul>
            <p class="vision-body vision-emphasis">
                Five total acquisitions completed. Continued expansion underway.
            </p>
            <p class="vision-body">The strategy is simple:</p>
            <ul class="vision-tenets">
                <li>Acquire strong local operators.</li>
                <li>Preserve what works.</li>
                <li>Strengthen systems.</li>
                <li>Scale responsibly.</li>
            </ul>
            <p class="vision-body" style="margin-top:32px;">
                If you are a pest control or event services operator considering transition, succession, or sale,
                acquisition
                inquiries may be directed to the executive office.
            </p>
        </div>
    </section>

    <hr class="ag-rule">

    <!-- ── THE LONG VIEW ──────────────────────────────────────── -->
    <section class="vision-block vision-block--dark" id="long-view">
        <img src="<?php echo esc_url($crest_url); ?>" alt="" class="ag-watermark" aria-hidden="true">
        <div class="ag-section" style="position:relative;z-index:1;" data-reveal>
            <span class="section-label">Purpose</span>
            <h2 class="vision-block-title">The Long View</h2>
            <p class="vision-body">This platform exists to build:</p>
            <ul class="vision-tenets">
                <li>Companies that create opportunity.</li>
                <li>Systems that develop leaders.</li>
                <li>Initiatives that serve community.</li>
            </ul>
            <div class="vision-divider"></div>
            <ul class="vision-tenets">
                <li>Growth is intentional.</li>
                <li>Stewardship is personal.</li>
                <li>Legacy is earned.</li>
            </ul>

            <!-- Back to home -->
            <div style="margin-top:48px;">
                <a href="<?php echo esc_url(home_url('#contact')); ?>" class="building-cta" id="vision-contact-cta">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" width="16" height="16">
                        <line x1="5" y1="12" x2="19" y2="12" />
                        <polyline points="12 5 19 12 12 19" />
                    </svg>
                    Get in Touch
                </a>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════════
     7. CONTACT
═══════════════════════════════════════════════ -->
    <section class="contact-section" id="contact">

        <div class="ag-section" style="position:relative;z-index:1;">

            <div class="contact-layout">

                <!-- Left: copy -->
                <div class="contact-copy" data-reveal data-reveal-delay="0">
                    <span class="section-label">Contact</span>
                    <h2 class="contact-title">Let's connect.</h2>
                    <p class="contact-sub">
                        Whether you're planning an event, looking to connect on business, or want to reach out — the
                        door is open.
                    </p>
                    <p class="contact-sub contact-acquisition" style="margin-top:16px;">
                        For acquisition inquiries or if you are interested in selling a pest control or event services
                        company,
                        please reach out directly via executive office contact.
                    </p>

                    <div class="contact-meta">
                        <p class="contact-meta-item">
                            <span class="contact-meta-label">Direct</span>
                            <a href="tel:7605373027">(760) 537-3027</a>
                        </p>
                        <p class="contact-meta-item">
                            <span class="contact-meta-label">Location</span>
                            <span>Coachella Valley, CA</span>
                        </p>
                    </div>

                    <!-- Executive Assistant Info -->
                    <div class="ea-contact-block">
                        <p class="ea-contact-title">Executive Assistant</p>
                        <div class="ea-contact-info">
                            <strong>Inquiries &amp; Scheduling</strong>
                            <p>office@amosgreenwood.com</p>
                        </div>
                    </div>
                </div>

                <!-- Right: CF7 form -->
                <div class="contact-form-wrap" data-reveal data-reveal-delay="160">
                    <?php
                    if (function_exists('wpcf7_contact_form')) {
                        echo do_shortcode('[contact-form-7 id="1" title="Contact form 1"]');
                    } else {
                        echo '<p class="cf7-fallback">Install &amp; activate <strong>Contact Form 7</strong> plugin, then this form will appear automatically.</p>';
                    }
                    ?>
                </div>

            </div>
        </div>
    </section>


</article>

<?php get_footer(); ?>