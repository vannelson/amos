<?php
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

get_header();
?>
<section class="hero">
  <h1><?php bloginfo( 'name' ); ?></h1>
  <p><?php bloginfo( 'description' ); ?></p>
</section>

<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <article <?php post_class( 'post-card' ); ?>>
      <h2>
        <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
      </h2>
      <p class="post-meta">
        <?php echo esc_html( get_the_date() ); ?>
        &middot;
        <?php the_author(); ?>
      </p>
      <div>
        <?php the_excerpt(); ?>
      </div>
    </article>
  <?php endwhile; ?>

  <div class="post-card">
    <?php
    the_posts_pagination(
      array(
        'mid_size' => 1,
        'prev_text' => __( 'Previous', 'simple-custom' ),
        'next_text' => __( 'Next', 'simple-custom' )
      )
    );
    ?>
  </div>
<?php else : ?>
  <article class="post-card">
    <h2><?php esc_html_e( 'No posts found', 'simple-custom' ); ?></h2>
    <p><?php esc_html_e( 'Add a post to see it here.', 'simple-custom' ); ?></p>
  </article>
<?php endif; ?>

<?php
get_footer();
