<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ranti
 */

?>

<div class="col col-sm-4">

  <article id="post-<?php the_ID(); ?>" <?php post_class('card mb-5'); ?>>

    <div class="article-thumb-img rounded">
      <?php ranti_post_thumbnail(); ?>
    </div>

    <div class="px-3 mt-3">
      <?php
      the_title( '<h2 class="h4 entry-title"><a class="text-decoration-none" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

      if ( 'post' === get_post_type() ) :
        ?>
        <div class="text-muted small">
          <?php
          ranti_posted_on();
          ranti_posted_by();
          ?>
        </div>
      <?php endif; ?>
    </div>

    <div class="text-muted small px-3 mt-3">
      <?php the_excerpt(); ?>
    </div>

  </article><!-- #post-<?php the_ID(); ?> -->

</div>