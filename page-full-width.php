<?php
/**
 * Template Name: Page Full Width
 */

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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

<div id="primary" class="content-villa">
	<main id="main" class="site-main full-width-content">
		<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'templates/partials/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
		?>
	</main>
</div><!-- #primary -->

<?php get_footer();
