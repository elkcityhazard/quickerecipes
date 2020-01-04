<!DOCTYPE html>
<html charset="iso-8859-7" lang="en">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php if ( get_header_image() ) : ?>
      <div id="site-header">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
              <img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
          </a>
      </div>
  <?php endif;?>
    <?php the_custom_header_markup(); ?>
