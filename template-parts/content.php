<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ranti
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php ranti_post_thumbnail(); ?>

	<div class="container mt-4">
		<div class="row justify-content-center">
			<div class="col col-sm-8">
				<header class="entry-header">
					<?php
					the_title( '<h1 class="entry-title">', '</h1>' );

					if ( 'post' === get_post_type() ) :
						?>
						<div class="entry-meta text-muted small">
							<?php
							ranti_posted_on();
							ranti_posted_by();
							?>
						</div><!-- .entry-meta -->
					<?php endif; ?>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php
					the_content(
						sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'ranti' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							wp_kses_post( get_the_title() )
						)
					);

					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ranti' ),
							'after'  => '</div>',
						)
					);
					?>
				</div><!-- .entry-content -->

				<!-- <footer class="entry-footer">
					<?php //ranti_entry_footer(); ?>
				</footer> -->
				<!-- .entry-footer -->

			</div>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
