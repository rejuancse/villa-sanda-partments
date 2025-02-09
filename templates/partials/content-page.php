<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Coalition_Technologies
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( is_single() ) { ?>
		<div class="entry-content single-post-content">
			<?php the_content(
				sprintf(
					__( 'Continue reading%s', 'ct' ),
					'<span class="screen-reader-text">'.get_the_title().'</span>'
				)
			); ?>
		</div><!-- .entry-content -->

		<div class="villa-blog-post">
			<div class="previous-post-link">
				<?php
					previous_post_link(
						'%link', '<svg xmlns="http://www.w3.org/2000/svg" width="28.32" height="20.313" viewBox="0 0 28.32 20.313">
						<g id="Arrow" transform="translate(-214.586 -2267.996)">
						<path id="Path_600" data-name="Path 600" d="M-16953.2-21536.943l-9.1,9.1,9.1,9.1" transform="translate(17179 23806)" fill="none" stroke="#002b6b" stroke-width="3"/>
						<path id="Path_601" data-name="Path 601" d="M-16962.293-21527.848h26.2" transform="translate(17179 23806)" fill="none" stroke="#002b6b" stroke-width="3"/>
						</g>
					</svg><div class="cls-force">Previous Blog </div>', true );
				?>
			</div>

			<div class="next-post-link">
				<?php
				next_post_link('%link', '<div class="cls-force">Next Blog </div> <svg xmlns="http://www.w3.org/2000/svg" width="28.32" height="20.313" viewBox="0 0 28.32 20.313"><g id="Arrow" transform="translate(0 1.061)">
						<path id="Path_600" data-name="Path 600" d="M-16962.295-21536.943l9.1,9.1-9.1,9.1" transform="translate(16979.398 21536.943)" fill="none" stroke="#002b6b" stroke-width="3"/>
						<path id="Path_601" data-name="Path 601" d="M-16936.094-21527.848h-26.2" transform="translate(16962.293 21536.943)" fill="none" stroke="#002b6b" stroke-width="3"/>
						</g>
					</svg>', true );
				?>
			</div>
		</div>
	<?php } else { ?>
		<div class="entry-content">
			<?php
				the_content();
				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ct' ),
						'after'  => '</div>',
					)
				);
			?>
		</div><!-- .entry-content -->
	<?php } ?>
</article><!-- #post-<?php the_ID(); ?> -->
