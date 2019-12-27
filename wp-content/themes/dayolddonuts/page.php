<?php get_header(); ?>
<div class="wrapper">
<?php get_sidebar(); ?>
<div class="page-container">
<h1><?php bloginfo( 'name' ); ?></h1>
<h2><?php bloginfo( 'description' ); ?></h2>
<figure>
    <?php if ( has_post_thumbnail()) : ?>
    <a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail('large'); ?>
    </a>
<?php endif; ?></figure>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h3><?php the_title(); ?></h3>
<p id="by"><strong>By:</strong></p> <?php the_author_posts_link(); ?> on <?php the_time('F jS, Y'); ?>  in <?php the_category(', '); ?> <?php edit_post_link(__('Edit'), ''); ?>

<section id="content-section"><?php the_content(); ?></section>

<?php wp_link_pages(); ?>
<?php edit_post_link(); ?>

<?php endwhile; ?>

<?php
if ( get_next_posts_link() ) {
next_posts_link();
}
?>
<?php
if ( get_previous_posts_link() ) {
previous_posts_link();
}
?>

<?php else: ?>

<p>No posts found. :(</p>

<?php endif; ?>
</div>
</div>
<?php get_footer(); ?>
</body>
</html>
