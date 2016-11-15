<?php
/**
 * Magazine slider style
 *
 * @since 1.0
 */

$data_auto = 'true';
$auto = get_theme_mod( 'penci_featured_autoplay' );
if( $auto == false ): $data_auto = 'false'; endif;
$auto_time = get_theme_mod( 'penci_featured_slider_auto_time' );
if( !is_numeric( $auto_time ) ): $auto_time = '4000'; endif;
$auto_speed = get_theme_mod( 'penci_featured_slider_auto_speed' );
if( !is_numeric( $auto_speed ) ): $auto_speed = '600'; endif;

?>
<div class="featured-area magazine-slider mag3-slider">
	<div class="penci-magazine-slider penci-mag3-slider penci-loading" data-direction="horizontal" data-auto="<?php echo esc_attr( $data_auto ); ?>" data-autotime="<?php echo esc_attr( $auto_time ); ?>" data-speed="<?php echo esc_attr( $auto_speed ); ?>">
		<?php
		$featured_cat = get_theme_mod( 'penci_featured_cat' );
		$number       = get_theme_mod( 'penci_featured_slider_slides' );
		if( ! $number ) { $number = 10; }
		$featured_args = array( 'posts_per_page' => $number );
		if( $featured_cat ):
			$featured_args['cat'] = $featured_cat;
		endif;

		$feat_query = new WP_Query( $featured_args );
		?>
		<ul class="slides">
			<?php $i = 1; if ( $feat_query->have_posts() ) : while ( $feat_query->have_posts() ) : $feat_query->the_post(); ?>
				<?php $count = 1; if( $i%5 == 2 ){ $count = 2; } elseif( $i%5 == 3 ){ $count = 3; } elseif( $i%5 == 4 ){ $count = 4; } elseif( $i%5 == 0 ){ $count = 5; } ?>
				<?php if( $i == 1 ): ?><li class="penci-mag-item"><ul class="mag-wrap"><?php endif; ?>
				<?php $thumb = 'penci-thumb'; if( $i%5 == 3 ) { $thumb = 'penci-magazine-slider'; } ?>
				<?php if( $count == 1 ): ?>
				<li class="mag-item-<?php echo esc_attr( $count ); ?>">
				<?php endif; ?>
					<div class="mag-content">
						<a href="<?php the_permalink(); ?>" class="mag-overlay"></a>
						<div class="mag-img"><?php the_post_thumbnail( $thumb ); ?></div>
						<?php if ( ! get_theme_mod( 'penci_featured_center_box' ) ): ?>
							<div class="mag-meta">
								<?php if ( ! get_theme_mod( 'penci_featured_hide_categories') && ( $count == 3 ) ): ?>
									<div class="cat mag-cat"><?php penci_category( '' ); ?></div>
								<?php endif; ?>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							</div>
						<?php endif; ?>
					</div>
				<?php if( $count == 2 || $count == 3 ): ?>
				</li><li class="mag-item-<?php echo esc_attr( $count ); ?>">
				<?php endif; ?>
				<?php if( $i == $number || $i == $feat_query->post_count ): ?>
				</li>
				<?php endif; ?>
				<?php if( ( $i%5 == 0 ) && ( $i < $number ) ): ?></ul></li><li class="penci-mag-item"><ul class="mag-wrap"><?php endif; ?>

			<?php if( $i == $number || $i == $feat_query->post_count ): ?></ul></li><?php endif; ?>
			<?php $i++; endwhile; wp_reset_postdata(); endif; ?>
		</ul>
	</div>
</div>