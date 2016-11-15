<?php
/**
 * About me widget
 * Display your information on footer or sidebar
 *
 * @package Wordpress
 * @since   1.0
 */

add_action( 'widgets_init', 'penci_about_load_widget' );

function penci_about_load_widget() {
	register_widget( 'penci_about_widget' );
}

class penci_about_widget extends WP_Widget {

	/**
	 * Widget setup.
	 */
	function penci_about_widget() {
		/* Widget settings. */
		$widget_ops = array( 'classname'   => 'penci_about_widget', 'description' => esc_html__( 'A widget that displays an About widget', 'soledad' ) );

		/* Widget control settings. */
		$control_ops = array( 'id_base' => 'penci_about_widget' );

		/* Create the widget. */
		global $wp_version;
		if( 4.3 > $wp_version ) {
			$this->WP_Widget( 'penci_about_widget', esc_html__( 'Soledad About Me', 'soledad' ), $widget_ops, $control_ops );
		} else {
			parent::__construct( 'penci_about_widget', esc_html__( 'Soledad About Me', 'soledad' ), $widget_ops, $control_ops );
		}
	}

	/**
	 * How to display the widget on the screen.
	 */
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title       = apply_filters( 'widget_title', $instance['title'] );
		$image       = $instance['image'];
		$heading      = $instance['heading'];
		$description = $instance['description'];

		/* Before widget (defined by themes). */
		echo ent2ncr( $before_widget );

		/* Display the widget title if one was input (before and after defined by themes). */
		if ( $title )
			echo ent2ncr( $before_title . $title . $after_title );

		?>

		<div class="about-widget">
			<?php if ( $image ) : ?>
				<img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $title ); ?>" />
			<?php endif; ?>

			<?php if ( $heading ) : ?>
				<h2 class="about-me-heading"><?php echo sanitize_text_field( $heading ); ?></h2>
			<?php endif; ?>

			<?php if ( $description ) : ?>
				<p><?php echo wp_kses( $description, penci_allow_html() ); ?></p>
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
		$instance['title']       = strip_tags( $new_instance['title'] );
		$instance['image']       = strip_tags( $new_instance['image'] );
		$instance['heading']      = strip_tags( $new_instance['heading'] );
		$instance['description'] = $new_instance['description'];

		return $instance;
	}


	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 'title' => 'About Me', 'image' => '', 'heading' => '', 'description' => '' );
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title:', 'soledad' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" value="<?php echo sanitize_text_field( $instance['title'] ); ?>" />
		</p>

		<!-- image url -->
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'image' ) ); ?>"><?php esc_html_e( 'Image URL:', 'soledad' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'image' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'image' ) ); ?>" value="<?php echo esc_url( $instance['image'] ); ?>" /><br />
			<small><?php esc_html_e( 'Insert your image URL. For best result use 365px width.', 'soledad' ); ?></small>
		</p>

		<!-- heading text -->
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'heading' ) ); ?>"><?php esc_html_e( 'Heading Text:', 'soledad' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'heading' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'heading' ) ); ?>" value="<?php echo sanitize_text_field( $instance['heading'] ); ?>" />
		</p>

		<!-- description -->
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'description' ) ); ?>"><?php esc_html_e( 'About me text: ( you can use HTML here )', 'soledad' ); ?></label>
			<textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'description' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'description' ) ); ?>" rows="6"><?php echo esc_textarea( $instance['description'] ); ?></textarea>
		</p>


	<?php
	}
}

?>