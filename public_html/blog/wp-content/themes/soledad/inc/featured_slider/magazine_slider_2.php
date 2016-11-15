<?php
/**
 * Magazine slider style
 *
 * @since 2.4
 */

$data_auto = 'true';
$auto = get_theme_mod( 'penci_featured_autoplay' );
if( $auto == false ): $data_auto = 'false'; endif;
$auto_time = get_theme_mod( 'penci_featured_slider_auto_time' );
if( !is_numeric( $auto_time ) ): $auto_time = '4000'; endif;
$auto_speed = get_theme_mod( 'penci_featured_slider_auto_speed' );
if( !is_numeric( $auto_speed ) ): $auto_speed = '600'; endif;

?>
<div class="featured-area magazine-slider-2">
	<div class="penci-mag2-carousel">
		<?php
		$featured_cat = get_theme_mod( 'penci_featured_cat' );
		$number       = get_theme_mod( 'penci_featured_slider_slides' );
		if ( ! $number ) {
			$number = 12;
		}
		$featured_args = array( 'posts_per_page' => $number );
		if ( $featured_cat ):
			$featured_args['cat'] = $featured_cat;
		endif;

		$feat_query = new WP_Query( $featured_args );
		?>
		<div class="penci-mag2-carousel-content" data-auto="<?php echo esc_attr( $data_auto ); ?>" data-autotime="<?php echo esc_attr( $auto_time ); ?>" data-speed="<?php echo esc_attr( $auto_speed ); ?>">
			<?php if ( $feat_query->have_posts() ) {
				$i    = 0;
				$flag = 0;
				while ( $feat_query->have_posts() ): $feat_query->the_post();
					$i ++;
					if ( $i % 7 == 2 ) {
						echo '<div class="mag2-item mag2-even">';
						$flag = 1;
					}
					if ( $i % 7 == 4 || $i % 7 == 6 ) {
						echo '</div><div class="mag2-item mag2-even">';
						$flag = 1;
					}
					if ( $i % 7 == 1 && $i > 7 ) {
						echo '</div>';
						$flag = 0;
					}
					?>
					<div class="mag2-item">
						<div class="mag2-thumbnail">
							<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
								<?php
								if ( has_post_thumbnail() ) {
									if ( ! $flag ) {
										the_post_thumbnail( 'penci-magazine-slider' );
									}
									else {
										the_post_thumbnail( 'penci-thumb' );
									}
								}
								else {
									if ( ! $flag ) {
										echo '<img src="' . get_template_directory_uri() . '/images/no-image2.jpg" alt="No image"/>';
									}
									else {
										echo '<img src="' . get_template_directory_uri() . '/images/no-image.jpg" alt="No image"/>';
									}
								}
								?>
								<div class="mag2slider-overlay">
									<?php if( ! get_theme_mod( 'penci_featured_slider_icons' ) ): ?>
										<?php if ( has_post_format( 'video' ) ) : ?>
											<i class="fa fa-play"></i>
										<?php endif; ?>
										<?php if ( has_post_format( 'audio' ) ) : ?>
											<i class="fa fa-music"></i>
										<?php endif; ?>
										<?php if ( has_post_format( 'link' ) ) : ?>
											<i class="fa fa-link"></i>
										<?php endif; ?>
										<?php if ( has_post_format( 'quote' ) ) : ?>
											<i class="fa fa-quote-left"></i>
										<?php endif; ?>
										<?php if ( has_post_format( 'gallery' ) ) : ?>
											<i class="fa fa-picture-o"></i>
										<?php endif; ?>
									<?php endif; ?>
								</div>
							</a>
							<div class="mag2-header">
								<?php if ( ! $flag && ! get_theme_mod( 'penci_featured_hide_categories' ) ) { ?>
									<div class="cat mag-cat"><?php penci_category( '' ); ?></div>
								<?php } ?>
								<h3>
									<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
								</h3>
							</div>
						</div>
					</div>
					<?php
					if ( $i == $feat_query->post_count && $flag ) {
						echo '</div>';
					}
				endwhile;
				wp_reset_postdata();
			} ?>
		</div>
		<div class="penci-mag2-button">
			<a href="#" class="penci-magazine2-prev"><i class="fa fa-angle-left"></i></a>
			<a href="#" class="penci-magazine2-next"><i class="fa fa-angle-right"></i></a>
		</div>
	</div>
</div>