<!DOCTYPE html>
<html charset="iso-8859-7" lang="en">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php if ( get_custom_header() ) : ?>
      <div id="site-header">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
              <?php wp_title();?>
          </a>
      </div>
  <?php endif;?>
