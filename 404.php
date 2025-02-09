<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Coalition_Technologies
 */

get_header(); ?>

<main id="primary" class="site-main">
	<section class="error-404 not-found">
		<div class="container">
			<div class="row">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'ct' ); ?></h1>

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'ct' ); ?></p>

					<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>" target="">
						<?php esc_attr_e('Go Homepage', 'ct'); ?>
					</a>
				</div><!-- .page-content -->
			</div>
		</div>
	</section><!-- .error-404 -->
</main><!-- #main -->

<?php
get_footer();
