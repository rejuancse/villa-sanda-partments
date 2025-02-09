<div class="blog-cards-content">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="heading-info">
					<h2 class="services__title"><?php echo esc_attr_e('Related Blogs', 'ct'); ?></h2>
					<p class="services__desc"><?php echo esc_attr_e('Inmollis nunc sed id semper risus in hendrerit gravida rutrum quisque non tellus orci ac auctor augue mauris augue neque gravida in fermentum et sollicitudin ac orci phasellus egestas', 'ct'); ?></p>
				</div>
			</div>
		</div>

		<div class="row">
			<?php
				$postID = get_the_ID();
				$categories = get_the_category($postID);
				if ($categories) {
					$categoryIds = array();
					foreach($categories as $individual_category) $categoryIds[] = $individual_category->term_id;
					$args=array(
						'category__in' => $categoryIds,
						'post__not_in' => array($postID),
						'posts_per_page'=> 3, // Number of related posts that will be shown.
						'ignore_sticky_posts'=>1
					);
					$my_query = new wp_query( $args );
					if( $my_query->have_posts() ) {
						while( $my_query->have_posts() ) {
							$my_query->the_post();
							$relatedID = get_the_ID();?>

							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="blog-card-flex">
									<div class="blog-feature-image">
										<a href="<?php the_permalink(); ?>" class="blog-card-item">
											<?= get_the_post_thumbnail($relatedID, 'villa-blog'); ?>
										</a>
									</div>

									<div class="blog-content">
										<h3><a href="<?php the_permalink(); ?>" class="blog-title"><?php the_title(); ?></a></h3>
										<p><?php echo villa_excerpt_max_charlength(105); ?>...</p>
									</div>
								</div>
							</div>
						<?php
						}
					}
				}
				wp_reset_query();?>
		</div>
	</div>
</div>