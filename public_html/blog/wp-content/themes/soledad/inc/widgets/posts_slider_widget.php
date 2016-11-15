<?php
/**
 * Post slider widget
 * Display recent post or popular post for each category or all posts
 *
 * @package Wordpress
 * @since 1.0
 */

add_action( 'widgets_init', 'penci_slider_posts_news_load_widget' );

function penci_slider_posts_news_load_widget() {
	register_widget( 'penci_slider_posts_news_widget' );
}

class penci_slider_posts_news_widget extends WP_Widget {

	/**
	 * Widget setup.
	 */
	function penci_slider_posts_news_widget() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'penci_slider_posts_news_widget', 'description' => esc_html__('A widget that displays your latest/popular posts from all categories or a category with a slider', 'soledad') );

		/* Widget control settings. */
		$control_ops = array( 'width' => 250, 'height' => 350, 'id_base' => 'penci_slider_posts_news_widget' );

		/* Create the widget. */
		global $wp_version;
		if( 4.3 > $wp_version ) {
			$this->WP_Widget( 'penci_slider_posts_news_widget', esc_html__('Soledad Posts Slider', 'soledad'), $widget_ops, $control_ops );
		} else {
			parent::__construct( 'penci_slider_posts_news_widget', esc_html__('Soledad Posts Slider', 'soledad'), $widget_ops, $control_ops );
		}
	}

	/**
	 * How to display the widget on the screen.
	 */
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title      = apply_filters( 'widget_title', $instance['title'] );
		$categories = isset( $instance['categories'] ) ? $instance['categories'] : '';
		$number     = isset( $instance['number'] ) ? $instance['number'] : 5;
		$type       = isset( $instance['type'] ) ? $instance['type'] : 'latest';
		$date       = isset( $instance['date'] ) ? $instance['date'] : false;


		$query = array( 'posts_per_page' => $number,
						'post_type'      => 'post',
						'cat'            => $categories
		);

		if ( $type == 'popular' ) {
			$query['meta_key'] = 'penci_post_views_count';
			$query['orderby']  = 'meta_value_num';
			$query['order']    = 'DESC';
		}

		$loop = new WP_Query($query);
		if ($loop->have_posts()) :

		/* Before widget (defined by themes). */
		echo ent2ncr( $before_widget );

		/* Display the widget title if one was input (before and after defined by themes). */
		if ( $title )
			echo ent2ncr( $before_title . $title . $after_title );

		?>
			<div class="penci-slider penci-widget-slider" data-direction="horizontal" data-auto="true" data-autotime="5000" data-speed="800">
				<ul class="slides">

				<?php while ($loop->have_posts()) : $loop->the_post(); ?>

					<li class="penci-slide-widget">
						<div class="penci-slide-content">
							<?php if ( ( function_exists( 'has_post_thumbnail' ) ) && ( has_post_thumbnail() ) ) { ?>
								<?php the_post_thumbnail( 'penci-thumb', array( 'class' => 'side-item-thumb' ) ); ?>
							<?php } else { ?>
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/no-image.jpg" alt="<?php the_title(); ?>" />
							<?php } ?>
							<a href="<?php the_permalink() ?>" class="penci-widget-slider-overlay" title="<?php the_title(); ?>"></a>
							<div class="penci-widget-slide-detail">
								<h4>
									<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php echo sanitize_text_field( wp_trim_words( get_the_title(), 6, '...') ); ?></a>
								</h4>
								<?php if ( ! $date ): ?>
									<?php
									$date_format = get_option('date_format');
									$date_format = str_replace( array( 'm', 'n', 'F' ), array( 'M', 'M', 'M' ), $date_format );
									?>
									<span class="slide-item-date"><?php the_time( $date_format ); ?></span>
								<?php endif; ?>
							</div>
						</div>
					</li>

				<?php endwhile; ?>

				</ul>
			</div>

		<?php
		endif;
		wp_reset_postdata();

		/* After widget (defined by themes). */
		echo ent2ncr( $after_widget );
	}

	/**
	 * Update the widget settings.
	 */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['categories'] = $new_instance['categories'];
		$instance['number'] = strip_tags( $new_instance['number'] );
		$instance['type'] = strip_tags( $new_instance['type'] );
		$instance['date'] = strip_tags( $new_instance['date'] );

		return $instance;
	}


	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 'title' => esc_html__('Posts Slider', 'soledad'), 'number' => 5, 'type' => 'latest', 'categories' => '', 'date' => false );
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e('Title:', 'soledad'); ?></label>
			<input  type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" value="<?php echo sanitize_text_field( $instance['title'] ); ?>"  />
		</p>

		<!-- Type -->
		<p>
			<select id="<?php echo esc_attr( $this->get_field_id( 'type' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'type' ) ); ?>" class="widefat categories" style="width:100%;">
				<option value='latest' <?php if ( 'latest' == $instance['type'] ): echo 'selected="selected"'; endif; ?>><?php esc_html_e( 'Latest', 'soledad' ); ?></option>
				<option value='popular' <?php if ( 'popular' == $instance['type'] ): echo 'selected="selected"'; endif; ?>><?php esc_html_e( 'Popular', 'soledad' ); ?></option>
			</select>
		</p>

		<!-- Category -->
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id('categories') ); ?>"><?php esc_html_e('Filter by Category:', 'soledad'); ?></label>
		<select id="<?php echo esc_attr( $this->get_field_id('categories') ); ?>" name="<?php echo esc_attr( $this->get_field_name('categories') ); ?>" class="widefat categories" style="width:100%;">
			<option value='all' <?php if ('all' == $instance['categories']) echo 'selected="selected"'; ?>><?php esc_html_e('All categories', 'soledad'); ?></option>
			<?php $categories = get_categories('hide_empty=0&depth=1&type=post'); ?>
			<?php foreach($categories as $category) { ?>
			<option value='<?php echo esc_attr( $category->term_id ); ?>' <?php if ($category->term_id == $instance['categories']) echo 'selected="selected"'; ?>><?php echo sanitize_text_field( $category->cat_name ); ?></option>
			<?php } ?>
		</select>
		</p>

		<!-- Number of posts -->
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>"><?php esc_html_e('Number of posts to show:', 'soledad'); ?></label>
			<input  type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'number' ) ); ?>" value="<?php echo esc_attr( $instance['number'] ); ?>" size="3" />
		</p>

		<!-- Display post date -->
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'date' ) ); ?>"><?php esc_html_e('Hide post date?:','soledad'); ?></label>
			<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'date' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'date' ) ); ?>" <?php checked( (bool) $instance['date'], true ); ?> />
		</p>

	<?php
	}
}
?>