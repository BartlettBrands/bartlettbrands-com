<?php
/**
 * Lastest post widget
 * Get recent posts and display in widget
 *
 * @package Wordpress
 * @since 1.0
 */

add_action( 'widgets_init', 'penci_latest_news_load_widget' );

function penci_latest_news_load_widget() {
	register_widget( 'penci_latest_news_widget' );
}

class penci_latest_news_widget extends WP_Widget {

	/**
	 * Widget setup.
	 */
	function penci_latest_news_widget() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'penci_latest_news_widget', 'description' => esc_html__('A widget that displays your recent posts from all categories or a category', 'soledad') );

		/* Widget control settings. */
		$control_ops = array( 'id_base' => 'penci_latest_news_widget' );

		/* Create the widget. */
		global $wp_version;
		if( 4.3 > $wp_version ) {
			$this->WP_Widget( 'penci_latest_news_widget', esc_html__('Soledad Recent Posts', 'soledad'), $widget_ops, $control_ops );
		} else {
			parent::__construct( 'penci_latest_news_widget', esc_html__( 'Soledad Recent Posts', 'soledad' ), $widget_ops, $control_ops );
		}
	}

	/**
	 * How to display the widget on the screen.
	 */
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$categories = isset( $instance['categories'] ) ? $instance['categories'] : '';
		$number = isset( $instance['number'] ) ? $instance['number'] : '';
		$featured = isset( $instance['featured'] ) ? $instance['featured'] : false;
		$allfeatured = isset( $instance['allfeatured'] ) ? $instance['allfeatured'] : false;
		$thumbright = isset( $instance['thumbright'] ) ? $instance['thumbright'] : false;
		$postdate = isset( $instance['postdate'] ) ? $instance['postdate'] : false;


		$query = array( 'showposts'           => $number,
						'cat'                 => $categories
		);

		$loop = new WP_Query($query);
		if ($loop->have_posts()) :

		/* Before widget (defined by themes). */
		echo ent2ncr( $before_widget );

		/* Display the widget title if one was input (before and after defined by themes). */
		if ( $title )
			echo ent2ncr( $before_title . $title . $after_title );

		?>
			<ul class="side-newsfeed">

			<?php $num = 1; while ($loop->have_posts()) : $loop->the_post(); ?>

			<li class="penci-feed<?php if( ( ( $num == 1 ) && $featured ) || $allfeatured ): echo ' featured-news'; endif;  ?><?php if( $allfeatured ): echo ' all-featured-news'; endif;  ?>">
					<div class="side-item">

						<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) : ?>
						<div class="side-image<?php if( $thumbright ): echo ' thumbnail-right'; endif;  ?>">
							<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_post_thumbnail('penci-thumb', array('class' => 'side-item-thumb')); ?></a>
						</div>
						<?php endif; ?>
						<div class="side-item-text">
							<h4><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
							<?php if( ! $postdate ): ?>
							<span class="side-item-meta"><?php the_time( get_option('date_format') ); ?></span>
							<?php endif; ?>
						</div>
					</div>
				</li>

			<?php $num++; endwhile; ?>

			</ul>

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
		$instance['featured'] = strip_tags( $new_instance['featured'] );
		$instance['allfeatured'] = strip_tags( $new_instance['allfeatured'] );
		$instance['thumbright'] = strip_tags( $new_instance['thumbright'] );
		$instance['postdate'] = strip_tags( $new_instance['postdate'] );

		return $instance;
	}


	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 'title' => esc_html__('Recent Posts', 'soledad'), 'number' => 5, 'categories' => '', 'featured' => false, 'allfeatured' => false, 'thumbright' => false, 'postdate' => false );
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e('Title:', 'soledad'); ?></label>
			<input  type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" value="<?php echo sanitize_text_field( $instance['title'] ); ?>"  />
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

		<!-- Display thumbnail right -->
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'thumbright' ) ); ?>"><?php esc_html_e('Display thumbnail on right?:','soledad'); ?></label>
			<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'thumbright' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'thumbright' ) ); ?>" <?php checked( (bool) $instance['thumbright'], true ); ?> />
		</p>

		<!-- Display latest post featured -->
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'featured' ) ); ?>"><?php esc_html_e('Display 1st post featured?:','soledad'); ?></label>
			<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'featured' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'featured' ) ); ?>" <?php checked( (bool) $instance['featured'], true ); ?> />
		</p>

		<!-- Display big post -->
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'allfeatured' ) ); ?>"><?php esc_html_e('Display all post featured?:','soledad'); ?></label>
			<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'allfeatured' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'allfeatured' ) ); ?>" <?php checked( (bool) $instance['allfeatured'], true ); ?> />
		</p>

		<!-- Hide post date -->
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'postdate' ) ); ?>"><?php esc_html_e('Hide post date?:','soledad'); ?></label>
			<input type="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'postdate' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'postdate' ) ); ?>" <?php checked( (bool) $instance['postdate'], true ); ?> />
		</p>

	<?php
	}
}

?>