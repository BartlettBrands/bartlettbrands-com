<?php
/**
 * Featured Penci Slider on top of home page
 * We support 2 styles penci slider
 *
 * @since 1.0
 */

$featured_style = get_theme_mod( 'penci_featured_slider_style' );
if ( $featured_style != 'style-5' ) {
	$featured_style = 'style-4';
}
$data_auto = 'true';
$auto = get_theme_mod( 'penci_featured_autoplay' );
if( $auto == false ): $data_auto = 'false'; endif;
$auto_time = get_theme_mod( 'penci_featured_slider_auto_time' );
if( !is_numeric( $auto_time ) ): $auto_time = '4000'; endif;
$auto_speed = get_theme_mod( 'penci_featured_slider_auto_speed' );
if( !is_numeric( $auto_speed ) ): $auto_speed = '600'; endif;
$data_height = '';
$class_fix_height = '';
$penci_slider_height = get_theme_mod( 'penci_featured_penci_slider_height' );
if( is_numeric( $penci_slider_height ) ):
	$data_height = ' data-height="' . esc_attr( $penci_slider_height ) . '"';
	$class_fix_height = ' fixed-height';
endif;
?>
<div class="featured-area <?php echo esc_attr( $featured_style ); ?>">
	<div class="penci-slider <?php echo esc_attr( $featured_style . $class_fix_height ); ?>" data-direction="horizontal" data-auto="<?php echo esc_attr( $data_auto ); ?>" data-autotime="<?php echo esc_attr( $auto_time ); ?>" data-speed="<?php echo esc_attr( $auto_speed ); ?>"<?php echo absint( $data_height ); ?>>
		<?php
		$number       = get_theme_mod( 'penci_featured_slider_slides' );
		if( ! $number ): $number = -1; endif;
		?>
		<?php /* Penci Slider Query */
		$slider_args = array(
			'post_type' => 'penci_slider',
			'order'     => 'ASC',
			'orderby'   => 'menu_order',
			'posts_per_page' => $number
		);

		$feat_query = new WP_Query( $slider_args ); ?>

		<ul class="slides">
			<?php if ( $feat_query->have_posts() ) : while ( $feat_query->have_posts() ) : $feat_query->the_post();
				/* Get data of this slide */
				$image_url    = get_post_meta( $post->ID, '_penci_slider_image', true ); $image_url    = ! $image_url ? '' : $image_url;
				$slider_title = get_post_meta( $post->ID, '_penci_slider_title', true ); $slider_title = ! $slider_title ? '' : $slider_title;
				$caption      = get_post_meta( $post->ID, '_penci_slider_caption', true ); $caption      = ! $caption ? '' : $caption;
				$button_text  = get_post_meta( $post->ID, '_penci_slider_button', true ); $button_text  = ! $button_text ? '' : $button_text;
				$title_color  = get_post_meta( $post->ID, '_penci_slider_title_color', true ); $title_style  = ! $title_color ? '' : ' style="color: '. $title_color .'"';
				$caption_color  = get_post_meta( $post->ID, '_penci_slider_caption_color', true ); $caption_style  = ! $caption_color ? '' : ' style="color: '. $caption_color .'"';
				$button_bg  = get_post_meta( $post->ID, '_penci_slider_button_bg', true ); $button_bg  = ! $button_bg ? '' : 'background: '. $button_bg.';';
				$button_color  = get_post_meta( $post->ID, '_penci_slider_button_text_color', true ); $button_color  = ! $button_color ? '' : 'color: '. $button_color;
				$animation  = get_post_meta( $post->ID, '_penci_slide_element_animation', true ); $animation  = ! $animation ? 'fadeInDown' : $animation;

				$style_button = '';
				if( !empty( $button_bg ) || !empty( $button_color ) ): $style_button = ' style="'. $button_bg . $button_color .'"'; endif;
				$button_html  = '';

				if ( ! empty( $button_text ) ) {
					$button_html = '<div class="penci-button"><a class="pencislider-button"'.$style_button.'>' . $button_text . '</a></div>';
					$button_url  = get_post_meta( $post->ID, '_penci_slider_button_url', true );
					$button_url  = ! $button_url ? '' : $button_url;
					if ( ! empty( $button_url ) ):
						$button_html = '<div class="penci-button"><a class="pencislider-button"'.$style_button.' href="' . esc_url( $button_url ) . '">' . sanitize_text_field( $button_text ) . '</a></div>';
					endif;
				}
				$slider_align = get_post_meta( $post->ID, '_penci_slide_alignment', true );
				$slider_align = ! $slider_align ? 'center' : $slider_align;

				$buttonlink_url  = get_post_meta( $post->ID, '_penci_slider_button_url', true );
				$open_link_html = '';
				$close_link_html = '';
				if( $buttonlink_url ) {
					$open_link_html = '<a href="'. $buttonlink_url .'">';
					$close_link_html = '</a>';
				}

				if( !empty( $image_url ) ):
					?>
					<li class="pencislider-item">
						<img src="<?php echo esc_url( $image_url ); ?>" alt="<?php esc_html_e( 'Slider item', 'soledad' ); ?>" />
						<div class="pencislider-container penci-<?php echo esc_attr( $animation );?> align-<?php echo esc_attr( $slider_align ); ?>">
							<div class="pencislider-content">
								<?php if( !empty( $slider_title ) ): ?>
									<h2 class="pencislider-title"<?php echo ( $title_style ); ?>><?php echo $open_link_html . sanitize_text_field( $slider_title ) . $close_link_html; ?></h2>
								<?php endif; ?>
								<?php if( !empty( $caption ) ): ?>
									<p class="pencislider-caption"<?php echo ( $caption_style ); ?>><?php echo sanitize_text_field( $caption ); ?></p>
								<?php endif; ?>
								<?php echo ( $button_html ); ?>
							</div>
						</div>
					</li>
				<?php endif; /* Not display slide if this no image thumbnail */ ?>
			<?php endwhile; wp_reset_postdata(); endif; ?>
		</ul>
	</div>
</div>