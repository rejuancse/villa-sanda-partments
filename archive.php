<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Coalition_Technologies
 */
get_header();

/**
* Subheader
*/
get_template_part('templates/sections/sub', 'header'); ?>

<main id="primary" class="site-main">
	<div class="blog-list">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<?php
						if ( have_posts() ) :
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();

								get_template_part( 'templates/partials/content', get_post_type() );
							endwhile;
						else :

							get_template_part( 'templates/partials/content', 'none' );
						endif;
					?>

					<div class="row">
						<div class="col-md-12">
							<?php
								$page_numb = max( 1, get_query_var('paged') );
								$max_page = $wp_query->max_num_pages;
								echo villa_pagination( $page_numb, $max_page );
							?>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<?php dynamic_sidebar( 'sidebar' ); ?>
				</div>
			</div>
		</div>
	</div>
</main><!-- #main -->

<?php
get_footer();
