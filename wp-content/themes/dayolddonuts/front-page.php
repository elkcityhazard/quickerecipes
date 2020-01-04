<?php get_header(); ?>
<div class="wrapper">
  <?php get_sidebar(); ?>
<main id="main-content">
<h1>Do you want to get in touch with me about a recipe, catering, or our products?</h1>
<a href="/wordpress/contact-us" title="Contact Me"><button class="contact-button">Click Here</button></a>
<article <?php post_class();?>>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php the_title('<h2>', '</h2>'); ?>
  <?php the_date() . ' ' . the_time(); ?>
  <?php the_content('<p>', '</p>'); ?>

</article>

<?php endwhile; endif;?>
</main>
</div>
<?php get_footer(); ?>
