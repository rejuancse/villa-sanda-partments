<?php

add_action('widgets_init','register_villa_about_widget');

function register_villa_about_widget()
{
	register_widget('Villa_About_Widget');
}

class Villa_About_Widget extends WP_Widget{

	public function __construct() {
		parent::__construct( 'Villa_About_Widget', esc_html__("VillaAbout Us Widgets", "ct"), array('description' => esc_html__("This About Us Widgets", "ct")) );
	}

	/*-------------------------------------------------------
	*				front-end display of widget
	*-------------------------------------------------------*/
	public function widget( $args, $instance ) {
		extract( $args );
		//Our variables from the widget settings.
		echo $before_widget;
		?>

		<div class="footer-widgets-wrap">
            <?php if( !empty($instance['villa_mail_address']) || !empty($instance['villa_contact_address'])) { ?>
                <div class="villa-software-info">
					<div class="footer-title"><?php esc_html_e('Contact', 'ct'); ?></div>
                    <?php
                        if( isset($instance['villa_mail_address']) && $instance['villa_mail_address'] ) {
                            echo '<div class="mail-info">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="15.918" viewBox="0 0 21 15.918">
  								<path id="Email" d="M-1842.867-249.082a2.135,2.135,0,0,1-2.133-2.133v-10.65a2.135,2.135,0,0,1,2.133-2.133h15.734v0a2.134,2.134,0,0,1,2.133,2.133v10.651a2.134,2.134,0,0,1-2.133,2.133Zm-.987-2.133a.988.988,0,0,0,.987.987h15.734a.987.987,0,0,0,.987-.987v-10.466l-8.854,6.042-8.854-6.043Zm8.854-6.23,7.921-5.406-.054,0-15.734,0-.056,0Z" transform="translate(1845.5 264.5)" fill="#111" stroke="rgba(0,0,0,0)" stroke-width="1"/>
							</svg><a href="mailto:'.$instance['villa_mail_address'].'">
                            '.$instance['villa_mail_address'].'</a></div>';
                        }
                    ?>
                    <?php
                        if( isset($instance['villa_contact_address']) && $instance['villa_contact_address'] ) {
                            $str_value = villa_preg_replace( $instance['villa_contact_address'] );
                            echo '<div class="contact-info">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
									<path id="Phone" d="M19,20a16.159,16.159,0,0,1-6.773-1.555,21.493,21.493,0,0,1-6.256-4.416,21.816,21.816,0,0,1-4.4-6.276A16.094,16.094,0,0,1,0,1V0H5.548l1.06,5.1L3.238,8.24A27.474,27.474,0,0,0,5.01,10.949a19.863,19.863,0,0,0,1.908,2.211,16.489,16.489,0,0,0,2.261,1.963,27.545,27.545,0,0,0,2.869,1.8l3.265-3.385L20,14.483V20ZM2.652,7.067l2.615-2.4L4.544,1.25H1.258a13.756,13.756,0,0,0,.384,2.881,17.011,17.011,0,0,0,1.01,2.936M13.214,17.485a11.252,11.252,0,0,0,2.612.9,14.453,14.453,0,0,0,2.924.346V15.481l-2.985-.594-2.551,2.6" fill="#111"/>
						  		</svg><a href="tel:'.$str_value.'">'.$instance['villa_contact_address'].'</a></div>';
                        }
                    ?>
                </div>
            <?php } ?>

            <!-- Social Share -->
			<?php if( isset($instance['social_media_title']) && $instance['social_media_title'] ) { ?>
				<div class="follow-us">
					<div class="footer-title"><?php echo $instance['social_media_title']; ?></div>
					<ul class="social-share">
						<?php if( isset($instance['facebook_link']) && $instance['facebook_link'] ) { ?>
							<li>
								<a href="<?php echo $instance['facebook_link']; ?>" target="_blank" aria-label="facebook">
									<svg xmlns="http://www.w3.org/2000/svg" width="10.712" height="20" viewBox="0 0 10.712 20">
										<path id="facebook-f" d="M32.9,11.25l.555-3.62H29.982V5.282a1.81,1.81,0,0,1,2.041-1.955H33.6V.245A19.254,19.254,0,0,0,30.8,0c-2.86,0-4.73,1.734-4.73,4.872V7.63H22.89v3.62h3.179V20h3.913V11.25Z" transform="translate(-22.89)" fill="#111"/>
									</svg>
								</a>
							</li>
						<?php } ?>

                        <?php if( isset($instance['twitter_link']) && $instance['twitter_link'] ) { ?>
							<li>
								<a href="<?php echo $instance['twitter_link']; ?>" target="_blank" aria-label="Twitter">
									<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
										<path id="square-x-twitter" d="M2.857,32A2.86,2.86,0,0,0,0,34.857V49.143A2.86,2.86,0,0,0,2.857,52H17.143A2.86,2.86,0,0,0,20,49.143V34.857A2.86,2.86,0,0,0,17.143,32Zm13.263,3.75-4.634,5.295,5.451,7.205H12.67L9.33,43.879,5.5,48.25H3.384l4.955-5.665L3.112,35.75H7.487l3.022,4,3.491-4ZM14.433,46.982,6.848,36.951H5.585l7.67,10.031h1.179Z" transform="translate(0 -32)" fill="#111"/>
									</svg>
								</a>
							</li>
						<?php } ?>

						<?php if( isset($instance['instagram_link']) && $instance['instagram_link'] ) { ?>
							<li>
								<a href="<?php echo ' '.$instance['instagram_link']; ?>" target="_blank" aria-label="Trustpilot">
									<svg xmlns="http://www.w3.org/2000/svg" width="20.004" height="20" viewBox="0 0 20.004 20">
										<path id="instagram" d="M9.929,36.7a5.128,5.128,0,1,0,5.128,5.128A5.12,5.12,0,0,0,9.929,36.7Zm0,8.461a3.334,3.334,0,1,1,3.334-3.334,3.34,3.34,0,0,1-3.334,3.334Zm6.534-8.671a1.2,1.2,0,1,1-1.2-1.2A1.193,1.193,0,0,1,16.463,36.487Zm3.4,1.214a5.919,5.919,0,0,0-1.616-4.191A5.958,5.958,0,0,0,14.053,31.9c-1.651-.094-6.6-.094-8.252,0a5.949,5.949,0,0,0-4.191,1.611A5.938,5.938,0,0,0,0,37.7C-.1,39.348-.1,44.3,0,45.949a5.919,5.919,0,0,0,1.616,4.191A5.965,5.965,0,0,0,5.8,51.755c1.651.094,6.6.094,8.252,0a5.919,5.919,0,0,0,4.191-1.616,5.958,5.958,0,0,0,1.616-4.191C19.953,44.3,19.953,39.353,19.859,37.7ZM17.726,47.72a3.375,3.375,0,0,1-1.9,1.9c-1.317.522-4.44.4-5.9.4s-4.583.116-5.9-.4a3.375,3.375,0,0,1-1.9-1.9c-.522-1.317-.4-4.44-.4-5.9s-.116-4.583.4-5.9a3.375,3.375,0,0,1,1.9-1.9c1.317-.522,4.44-.4,5.9-.4s4.583-.116,5.9.4a3.375,3.375,0,0,1,1.9,1.9c.522,1.317.4,4.44.4,5.9S18.248,46.408,17.726,47.72Z" transform="translate(0.075 -31.825)" fill="#111"/>
									</svg>
								</a>
							</li>
						<?php } ?>

						<?php if( isset($instance['pinterest_link']) && $instance['pinterest_link'] ) { ?>
							<li>
								<a href="<?php echo ' '.$instance['pinterest_link']; ?>" target="_blank" aria-label="Reddit">
									<svg xmlns="http://www.w3.org/2000/svg" width="15.387" height="20" viewBox="0 0 15.387 20">
										<path id="pinterest-p" d="M8.175,6.5C4.063,6.5,0,9.241,0,13.677,0,16.5,1.587,18.1,2.549,18.1c.4,0,.625-1.106.625-1.419,0-.373-.95-1.166-.95-2.717A5.415,5.415,0,0,1,7.85,8.459c2.729,0,4.748,1.551,4.748,4.4,0,2.128-.854,6.119-3.618,6.119a1.779,1.779,0,0,1-1.851-1.755c0-1.515,1.058-2.981,1.058-4.544,0-2.653-3.763-2.172-3.763,1.034a4.708,4.708,0,0,0,.385,2.032c-.553,2.38-1.683,5.927-1.683,8.379,0,.757.108,1.5.18,2.26.136.152.068.136.276.06,2.02-2.765,1.947-3.306,2.861-6.924A3.25,3.25,0,0,0,9.22,20.962c4.256,0,6.167-4.147,6.167-7.886C15.387,9.1,11.949,6.5,8.175,6.5Z" transform="translate(0 -6.5)" fill="#111"/>
									</svg>
								</a>
							</li>
						<?php } ?>

						<?php if( isset($instance['linkedin_link']) && $instance['linkedin_link'] ) { ?>
							<li>
								<a href="<?php echo ' '.$instance['linkedin_link']; ?>" target="_blank" aria-label="LinkedIn">
									<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
										<path id="linkedin-in" d="M4.477,20.01H.33V6.657H4.477ZM2.4,4.836A2.413,2.413,0,1,1,4.8,2.411,2.422,2.422,0,0,1,2.4,4.836ZM20,20.01H15.858v-6.5c0-1.549-.031-3.536-2.156-3.536-2.156,0-2.486,1.683-2.486,3.424V20.01H7.074V6.657h3.977V8.478h.058a4.357,4.357,0,0,1,3.923-2.156c4.2,0,4.968,2.763,4.968,6.353V20.01Z" transform="translate(0 -0.01)" fill="#111"/>
									</svg>
								</a>
							</li>
						<?php } ?>
					</ul>
				</div>
			<?php } ?>

			<div class="faq">
				<div class="footer-title">FAQ</div>
			</div>
		</div>

		<?php
		echo $after_widget;
	}

	/*-------------------------------------------------------
	*				Sanitize data, save and retrive
	*-------------------------------------------------------- */
	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['villa_mail_address']      = $new_instance['villa_mail_address'];
		$instance['villa_contact_address']   = $new_instance['villa_contact_address'];

		// Social Media
		$instance['social_media_title'] 		= $new_instance['social_media_title'];
		$instance['facebook_link'] 		= $new_instance['facebook_link'];
		$instance['twitter_link'] 		= $new_instance['twitter_link'];
		$instance['instagram_link'] 		= $new_instance['instagram_link'];
		$instance['pinterest_link'] 	= $new_instance['pinterest_link'];
		$instance['linkedin_link'] 		= $new_instance['linkedin_link'];

		return $instance;
	}

	/*-------------------------------------------------------
	 *				Back-End display of widget
	*-------------------------------------------------------*/
	public function form( $instance ) {
		$defaults = array(
			'villa_mail_address' 	=> '',
			'villa_contact_address' 	=> '',

			'social_media_title' => '',
			'linkedin_link' 		=> '',
			'facebook_link' 	=> '',
			'twitter_link' 		=> '',
			'pinterest_link' 	=> '',
			'instagram_link' 	=> '',
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

        <p>
			<label for="<?php echo esc_attr($this->get_field_id( 'villa_mail_address' )); ?>"><?php esc_html_e('villa Mail Address: ', 'ct'); ?></label>
			<input id="<?php echo esc_attr($this->get_field_id( 'villa_mail_address' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'villa_mail_address' )); ?>" value="<?php echo esc_attr($instance['villa_mail_address']); ?>" style="width:100%;" />
		</p>

        <p>
			<label for="<?php echo esc_attr($this->get_field_id( 'villa_contact_address' )); ?>"><?php esc_html_e('villa Contact Address: ', 'ct'); ?></label>
			<input id="<?php echo esc_attr($this->get_field_id( 'villa_contact_address' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'villa_contact_address' )); ?>" value="<?php echo esc_attr($instance['villa_contact_address']); ?>" style="width:100%;" />
		</p>

		<!-- Social Share -->
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'social_media_title' )); ?>"><?php esc_html_e('Social Media Title: ', 'ct'); ?></label>
			<input id="<?php echo esc_attr($this->get_field_id( 'social_media_title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'social_media_title' )); ?>" value="<?php echo esc_attr($instance['social_media_title']); ?>" style="width:100%;" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'facebook_link' )); ?>"><?php esc_html_e('Facebook Link: ', 'ct'); ?></label>
			<input id="<?php echo esc_attr($this->get_field_id( 'facebook_link' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'facebook_link' )); ?>" value="<?php echo esc_attr($instance['facebook_link']); ?>" style="width:100%;" />
		</p>
        <p>
			<label for="<?php echo esc_attr($this->get_field_id( 'twitter_link' )); ?>"><?php esc_html_e('Twitter Link: ', 'ct'); ?></label>
			<input id="<?php echo esc_attr($this->get_field_id( 'twitter_link' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'twitter_link' )); ?>" value="<?php echo esc_attr($instance['twitter_link']); ?>" style="width:100%;" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'instagram_link' )); ?>"><?php esc_html_e('Instagram Link: ', 'ct'); ?></label>
			<input id="<?php echo esc_attr($this->get_field_id( 'instagram_link' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'instagram_link' )); ?>" value="<?php echo esc_attr($instance['instagram_link']); ?>" style="width:100%;" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'pinterest_link' )); ?>"><?php esc_html_e('Pinterest Link: ', 'ct'); ?></label>
			<input id="<?php echo esc_attr($this->get_field_id( 'pinterest_link' )); ?>" name="<?php echo $this->get_field_name( 'pinterest_link' ); ?>" value="<?php echo esc_attr($instance['pinterest_link']); ?>" style="width:100%;" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'linkedin_link' )); ?>"><?php esc_html_e('Linkedin Link: ', 'ct'); ?></label>
			<input id="<?php echo esc_attr($this->get_field_id( 'linkedin_link' )); ?>" name="<?php echo $this->get_field_name( 'linkedin_link' ); ?>" value="<?php echo esc_attr($instance['linkedin_link']); ?>" style="width:100%;" />
		</p>

	<?php
	}
}
