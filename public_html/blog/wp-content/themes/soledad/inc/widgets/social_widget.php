<?php
/**
 * Socials Widget
 * Get in touch with your clients
 *
 * @package Wordpress
 * @since 1.0
 */

add_action( 'widgets_init', 'penci_social_load_widget' );

function penci_social_load_widget() {
	register_widget( 'penci_social_widget' );
}

class penci_social_widget extends WP_Widget {

	/**
	 * Widget setup.
	 */
	function penci_social_widget() {
		/* Widget settings. */
		$widget_ops = array( 'classname'   => 'penci_social_widget', 'description' => esc_html__( 'A widget that displays your social icons', 'soledad' ) );

		/* Widget control settings. */
		$control_ops = array( 'id_base' => 'penci_social_widget' );

		/* Create the widget. */
		global $wp_version;
		if( 4.3 > $wp_version ) {
			$this->WP_Widget( 'penci_social_widget', esc_html__( 'Soledad Social Media', 'soledad' ), $widget_ops, $control_ops );
		} else {
			parent::__construct( 'penci_social_widget', esc_html__( 'Soledad Social Media', 'soledad' ), $widget_ops, $control_ops );
		}
	}

	/**
	 * How to display the widget on the screen.
	 */
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title      = apply_filters( 'widget_title', $instance['title'] );
		$text       = $instance['text'];
		$facebook   = $instance['facebook'];
		$twitter    = $instance['twitter'];
		$googleplus = $instance['googleplus'];
		$instagram  = $instance['instagram'];
		$youtube    = $instance['youtube'];
		$tumblr     = $instance['tumblr'];
		$behance    = $instance['behance'];
		$linkedin   = $instance['linkedin'];
		$flickr     = $instance['flickr'];
		$pinterest  = $instance['pinterest'];
		$email      = $instance['email'];
		$vk         = $instance['vk'];
		$bloglovin  = isset( $instance['bloglovin'] ) ? $instance['bloglovin']: '';
		$rss        = $instance['rss'];

		/* Before widget (defined by themes). */
		echo ent2ncr( $before_widget );

		/* Display the widget title if one was input (before and after defined by themes). */
		if ( $title )
			echo ent2ncr( $before_title . $title . $after_title );

		?>

		<div class="widget-social<?php if( $text ): echo ' show-text'; endif; ?>">
			<?php if ( $facebook ) : ?>
				<a href="<?php echo esc_attr( get_theme_mod( 'penci_facebook' ) ); ?>" target="_blank"><i class="fa fa-facebook"></i><span><?php esc_html_e( 'Facebook', 'soledad' ); ?></span></a>
			<?php endif; ?>

			<?php if ( $twitter ) : ?>
				<a href="<?php echo esc_attr( get_theme_mod( 'penci_twitter' ) ); ?>" target="_blank"><i class="fa fa-twitter"></i><span><?php esc_html_e( 'Twitter', 'soledad' ); ?></span></a>
			<?php endif; ?>

			<?php if ( $googleplus ) : ?>
				<a href="<?php echo esc_attr( get_theme_mod( 'penci_google' ) ); ?>" target="_blank"><i class="fa fa-google-plus"></i><span><?php esc_html_e( 'Google +', 'soledad' ); ?></span></a>
			<?php endif; ?>

			<?php if ( $instagram ) : ?>
				<a href="<?php echo esc_attr( get_theme_mod( 'penci_instagram' ) ); ?>" target="_blank"><i class="fa fa-instagram"></i><span><?php esc_html_e( 'Instagram', 'soledad' ); ?></span></a>
			<?php endif; ?>

			<?php if ( $pinterest ) : ?>
				<a href="<?php echo esc_attr( get_theme_mod( 'penci_pinterest' ) ); ?>" target="_blank"><i class="fa fa-pinterest"></i><span><?php esc_html_e( 'Pinterest', 'soledad' ); ?></span></a>
			<?php endif; ?>

			<?php if ( $linkedin ) : ?>
				<a href="<?php echo esc_url( get_theme_mod( 'penci_linkedin' ) ); ?>" target="_blank"><i class="fa fa-linkedin"></i><span><?php esc_html_e( 'Linkedin', 'soledad' ); ?></span></a>
			<?php endif; ?>

			<?php if ( $flickr ) : ?>
				<a href="<?php echo esc_attr( get_theme_mod( 'penci_flickr' ) ); ?>" target="_blank"><i class="fa fa-flickr"></i><span><?php esc_html_e( 'Flickr', 'soledad' ); ?></span></a>
			<?php endif; ?>

			<?php if ( $behance ) : ?>
				<a href="<?php echo esc_attr( get_theme_mod( 'penci_behance' ) ); ?>" target="_blank"><i class="fa fa-behance"></i><span><?php esc_html_e( 'Behance', 'soledad' ); ?></span></a>
			<?php endif; ?>

			<?php if ( $tumblr ) : ?>
				<a href="<?php echo esc_attr( get_theme_mod( 'penci_tumblr' ) ); ?>" target="_blank"><i class="fa fa-tumblr"></i><span><?php esc_html_e( 'Tumblr', 'soledad' ); ?></span></a>
			<?php endif; ?>

			<?php if ( $youtube ) : ?>
				<a href="<?php echo esc_attr( get_theme_mod( 'penci_youtube' ) ); ?>" target="_blank"><i class="fa fa-youtube-play"></i><span><?php esc_html_e( 'Youtube', 'soledad' ); ?></span></a>
			<?php endif; ?>

			<?php if ( $email ) : ?>
				<a href="<?php echo get_theme_mod( 'penci_email_me' ); ?>"><i class="fa fa-envelope-o"></i><span><?php esc_html_e( 'Email', 'soledad' ); ?></span></a>
			<?php endif; ?>

			<?php if ( $vk ) : ?>
				<a href="<?php echo esc_attr( get_theme_mod( 'penci_vk' ) ); ?>" target="_blank"><i class="fa fa-vk"></i><span><?php esc_html_e( 'Vk', 'soledad' ); ?></span></a>
			<?php endif; ?>

			<?php if ( $bloglovin ) : ?>
				<a href="<?php echo esc_attr( get_theme_mod( 'penci_bloglovin' ) ); ?>" target="_blank"><i class="fa fa-heart"></i><span><?php esc_html_e( 'Bloglovin', 'soledad' ); ?></span></a>
			<?php endif; ?>

			<?php if ( $rss ) : ?>
				<a href="<?php echo esc_url( get_theme_mod( 'penci_rss' ) ); ?>" target="_blank"><i class="fa fa-rss"></i><span><?php esc_html_e( 'RSS', 'soledad' ); ?></span></a>
			<?php endif; ?>
		</div>


		<?php

		/* After widget (defined by themes). */
		echo ent2ncr( $after_widget );
	}

	/**
	 * Update the widget settings.
	 */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title']      = strip_tags( $new_instance['title'] );
		$instance['text']       = strip_tags( $new_instance['text'] );
		$instance['facebook']   = strip_tags( $new_instance['facebook'] );
		$instance['twitter']    = strip_tags( $new_instance['twitter'] );
		$instance['googleplus'] = strip_tags( $new_instance['googleplus'] );
		$instance['instagram']  = strip_tags( $new_instance['instagram'] );
		$instance['linkedin']   = strip_tags( $new_instance['linkedin'] );
		$instance['flickr']     = strip_tags( $new_instance['flickr'] );
		$instance['behance']    = strip_tags( $new_instance['behance'] );
		$instance['youtube']    = strip_tags( $new_instance['youtube'] );
		$instance['tumblr']     = strip_tags( $new_instance['tumblr'] );
		$instance['pinterest']  = strip_tags( $new_instance['pinterest'] );
		$instance['email']      = strip_tags( $new_instance['email'] );
		$instance['vk']         = strip_tags( $new_instance['vk'] );
		$instance['bloglovin']  = strip_tags( $new_instance['bloglovin'] );
		$instance['rss']        = strip_tags( $new_instance['rss'] );

		return $instance;
	}


	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array(
			'title'      => 'Keep in touch',
			'text'       => false,
			'facebook'   => true,
			'twitter'    => 'on',
			'googleplus' => 'on',
			'instagram'  => 'on',
			'linkedin'   => '',
			'behance'    => '',
			'flickr'     => '',
			'youtube'    => '',
			'tumblr'     => '',
			'pinterest'  => 'on',
			'email'      => '',
			'vk'         => '',
			'bloglovin'  => '',
			'rss'        => '',
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e('Title:','soledad'); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" value="<?php echo sanitize_text_field( $instance['title'] ); ?>" />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>"><?php esc_html_e('Display social text on right icons?:','soledad'); ?></label>
			<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'text' ) ); ?>" <?php checked( (bool) $instance['text'], true ); ?> />
		</p>

		<p class="description"><?php esc_html_e('Note: Setup your social links in the Appearance -> Customizer','soledad'); ?></p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'facebook' ) ); ?>"><?php esc_html_e('Show Facebook:','soledad'); ?></label>
			<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'facebook' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'facebook' ) ); ?>" <?php checked( (bool) $instance['facebook'], true ); ?> />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'twitter' ) ); ?>"><?php esc_html_e('Show Twitter:','soledad'); ?></label>
			<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'twitter' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'twitter' ) ); ?>" <?php checked( (bool) $instance['twitter'], true ); ?> />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'instagram' ) ); ?>"><?php esc_html_e('Show Instagram:','soledad'); ?></label>
			<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'instagram' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'instagram' ) ); ?>" <?php checked( (bool) $instance['instagram'], true ); ?> />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'pinterest' ) ); ?>"><?php esc_html_e('Show Pinterest:','soledad'); ?></label>
			<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'pinterest' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'pinterest' ) ); ?>" <?php checked( (bool) $instance['pinterest'], true ); ?> />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'googleplus' ) ); ?>"><?php esc_html_e('Show Google Plus:','soledad'); ?></label>
			<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'googleplus' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'googleplus' ) ); ?>" <?php checked( (bool) $instance['googleplus'], true ); ?> />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'linkedin' ) ); ?>"><?php esc_html_e('Show Likedin:','soledad'); ?></label>
			<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'linkedin' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'linkedin' ) ); ?>" <?php checked( (bool) $instance['linkedin'], true ); ?> />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'behance' ) ); ?>"><?php esc_html_e('Show Behance:','soledad'); ?></label>
			<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'behance' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'behance' ) ); ?>" <?php checked( (bool) $instance['behance'], true ); ?> />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'flickr' ) ); ?>"><?php esc_html_e('Show Flickr:','soledad'); ?></label>
			<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'flickr' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'flickr' ) ); ?>" <?php checked( (bool) $instance['flickr'], true ); ?> />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'tumblr' ) ); ?>"><?php esc_html_e('Show Tumblr:','soledad'); ?></label>
			<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'tumblr' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'tumblr' ) ); ?>" <?php checked( (bool) $instance['tumblr'], true ); ?> />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'youtube' ) ); ?>"><?php esc_html_e('Show Youtube:','soledad'); ?></label>
			<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'youtube' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'youtube' ) ); ?>" <?php checked( (bool) $instance['youtube'], true ); ?> />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'email' ) ); ?>"><?php esc_html_e('Show Email:','soledad'); ?></label>
			<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'email' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'email' ) ); ?>" <?php checked( (bool) $instance['email'], true ); ?> />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'vk' ) ); ?>"><?php esc_html_e('Show Vk:','soledad'); ?></label>
			<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'vk' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'vk' ) ); ?>" <?php checked( (bool) $instance['vk'], true ); ?> />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'bloglovin' ) ); ?>"><?php esc_html_e('Show Bloglovin:','soledad'); ?></label>
			<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'bloglovin' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'bloglovin' ) ); ?>" <?php checked( (bool) $instance['bloglovin'], true ); ?> />
		</p>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'rss' ) ); ?>"><?php esc_html_e('Show RSS:','soledad'); ?></label>
			<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'rss' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'rss' ) ); ?>" <?php checked( (bool) $instance['rss'], true ); ?> />
		</p>


	<?php
	}
}

?>