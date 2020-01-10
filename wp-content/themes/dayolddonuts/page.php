<?php get_header(); ?>
<div class="wrapper">
  <?php get_sidebar(); ?>
  <main id="main-content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h1><?php the_title(); ?></h1>
<figure <?php post_class(); ?>>
<?php if ( has_post_thumbnail() ) : ?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail(); ?>
        </a>
        <figcaption><?php the_post_thumbnail_caption(); ?></figcaption>
<?php endif; ?></figure>
  <?php the_content(); ?>

<?php endwhile; else: ?>

  <?php_e("nothing to see here.", "dayolddonuts"); ?>

<?php endif; ?>

</main>
</div>
<?php get_footer(); ?>
