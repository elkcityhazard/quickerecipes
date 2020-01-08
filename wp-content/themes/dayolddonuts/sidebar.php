<<<<<<< HEAD
<aside class="sidebar">
  <button class="button-hover">Menu</button>
  <?php  wp_nav_menu( array(
      'menu' => 'Primary'
  ) ); ?>

  <section>
    <?php  wp_nav_menu( array(
        'menu' => 'Social Links Menu'
    ) ); ?>
  </section>
=======

<aside class="sidebar"><?php if ( function_exists( 'the_custom_logo' ) ) {
 the_custom_logo();
} ?>
<?php  wp_nav_menu( array(
      'menu' => 'Primary'
  ) ); ?>
>>>>>>> e5a9fccff1110b8772de17afbdf40f53dd172b57
</aside>
