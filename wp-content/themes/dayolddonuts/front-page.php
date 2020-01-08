<?php /*
 Template Name: Front Page Template
 */ ?>

<?php get_header(); ?>
<div class="wrapper">
  <?php get_sidebar(); ?>
<main id="front-page-main-content">
<h1>Do you want to get in touch with me about a recipe, catering, or our products?</h1>
<a href="/wordpress/contact-us" title="Contact Me"><button class="contact-button">Click Here</button></a>

<h2>Do you want to buy our products?</h2>
<a href="/wordpress/shop" alt="shop" title="shop now"><button class="contact-button">Shop Now</button></a>

<h2>Get started by reading our most recent blog posts</h2>
<a href="/wordpress/blog" alt="blog" title="Chef's Blog"><button class="contact-button">Read Now</button></a>
<article <?php post_class();?>>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php the_title(); ?>
  <?php the_content(); ?>
</article>

<?php endwhile; endif;?>
</main>
</div>
<?php get_footer(); ?>
