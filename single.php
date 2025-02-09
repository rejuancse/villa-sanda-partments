<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Coalition_Technologies
 */
get_header();

/**
* Subheader
*/
get_template_part('templates/sections/sub', 'header'); ?>

<main id="primary" class="site-main">
	<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'templates/partials/content', get_post_type() );
		endwhile; // End of the loop.
	?>
</main><!-- #main -->

<!-- Related Post -->
<?php get_template_part( 'templates/partials/related-post' ); ?>

<?php get_footer();
