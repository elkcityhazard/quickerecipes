<?php /*
Template Name: Single Page Template
*/ ?>

<?php get_header(); ?>
<div class="wrapper">
  <?php get_sidebar(); ?>
  <main id="main-content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article <?php post_class();?> >
      <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <footer class="author-byline">
          <p>
            Author: <a href="<?php echo get_author_posts_url($post->post_author );?>">
              <?php the_author(); ?>
            </a>  |
                  Date:
                  <?php the_time('M. j, Y'); ?> |
                  Categories:
                  <?php the_category( ',' ); ?> |
                  <?php the_tags( $before = null, $sep = ', ', $after = '' ); ?>
          </p>
        </footer>
      </article>

    <?php endwhile; else: ?>

      <?php_e("Sorry!  There is no content found", "phpfowp"); ?>

    <?php endif ?>
    <div class="post-navigation">

    						<?php

    						$prev_post = get_previous_post();
    						$next_post = get_next_post();

    						if ( $prev_post ) : ?>

    							<a class="post-nav-prev" href="<?php echo get_permalink( $prev_post->ID ); ?>">
    								<p>&larr; <?php _e( 'Previous post', '' ); ?></p>
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
    </main>
    </div>
    <?php get_footer(); ?>
