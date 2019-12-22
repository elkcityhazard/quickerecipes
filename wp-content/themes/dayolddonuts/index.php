<?php get_header(); ?>
<main id="main-content">
  <?php get_sidebar(); ?>
  <article class="content-section">
<h1><?php bloginfo( 'name' ); ?></h1>
<h2><?php bloginfo( 'description' ); ?></h2>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <h1><?php the_title(); ?></h1>
  <?php the_content(); ?>

<?php endwhile; else: ?>

  <?php_e("Sorry!  There is no content found", "phpfowp"); ?>

<?php endif ?>
<div class="post-navigation">

						<?php

						$prev_post = get_previous_post();
						$next_post = get_next_post();

						if ( $prev_post ) : ?>

							<a class="post-nav-prev" href="<?php echo get_permalink( $prev_post->ID ); ?>">
								<p>&larr; <?php _e( 'Previous post', 'dayolddonuts' ); ?></p>
							</a>

							<?php
						endif;

						if ( $next_post ) : ?>

							<a class="post-nav-next" href="<?php echo get_permalink( $next_post->ID ); ?>">
								<p><?php _e( 'Next post', 'dayolddonuts' ); ?> &rarr;</p>
							</a>

							<?php
						endif;
						?>
            </article>
</main>
<?php wp_footer(); ?>
</body>
</html>
