<?php /*404 page template */ ?>
<?php get_header(); ?>
<div class="wrapper">
<?php get_sidebar(); ?>
<div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">

            <header class="page-header">
                <h1 class="page-title"><?php _e( 'Not Found', 'dayolddonuts' ); ?></h1>
            </header>

            <div class="page-wrapper">
                <div class="page-content">
                    <h2><?php _e( 'It is dangerous to go alone, Link.', 'dayolddonuts' ); ?></h2>
                    <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentythirteen' ); ?></p>

                    <?php get_search_form(); ?>
                </div><!-- .page-content -->
            </div><!-- .page-wrapper -->

        </div><!-- #content -->
    </div><!-- #primary -->
  </div>
                    <?php get_footer(); ?>
