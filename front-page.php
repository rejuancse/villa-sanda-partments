<?php
/*
 * Template Name: Homepage Default
 */
/**
 * The template for displaying the front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Coalition_Technologies
 */
get_header();

if ( function_exists( 'get_fields' ) ) :
	$fields = get_fields();
endif; ?>

<div id="primary" class="content-villa">
    <main id="main" class="site-main">
        <?php while ( have_posts() ): the_post(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                    <div class="entry-thumbnail">
                        <?php the_post_thumbnail(); ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </div>
        <?php endwhile; ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();