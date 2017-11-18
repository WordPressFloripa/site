<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp-floripa
 */


if ( is_front_page() ) : ?>
  <header class="fullwidth-background" style="background-image: url(<?php echo get_stylesheet_directory_uri() . '/images/1920x1080.png'; ?>);">
    <h1 class="page-title"><?php the_title(); ?></h1>
  </header>
<?php endif;
