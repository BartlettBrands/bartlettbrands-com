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
<div class="featured-area magazine-slider">
	<div class="penci-magazine-slider penci-loading" data-direction="horizontal" data-auto="<?php echo esc_attr( $data_auto ); ?>" data-autotime="<?php echo esc_attr( $auto_time ); ?>" data-speed="<?php echo esc_attr( $auto_speed ); ?>">
		<?php
		$featured_cat = get_theme_mod( 'penci_featured_cat' );
		$number       = get_theme_mod( 'penci_featured_slider_slides' );
		if( ! $number ) { $number = 6; }
		$featured_args = array( 'posts_per_page' => $number );
		if( $featured_cat ):
			$featured_args['cat'] = $featured_cat;
		endif;

		$feat_query = new WP_Query( $featured_args );
		?>
		<ul class="slides">
			<?php $i = 1; if ( $feat_query->have_posts() ) : while ( $feat_query->have_posts() ) : $feat_query->the_post(); ?>
				<?php $count = 1; if( $i%3 == 2 ){ $count = 2; } elseif( $i%3 == 0 ){ $count = 3; } ?>
				<?php if( $i == 1 ): ?><li class="penci-mag-item"><ul class="mag-wrap"><?php endif; ?>
				<?php $thumb = 'penci-thumb'; if( $i%3 == 1 ) { $thumb = 'penci-magazine-slider'; } ?>
				<li class="mag-item-<?php echo esc_attr( $count ); ?>">
					<div class="mag-content">
					<a href="<?php the_permalink(); ?>" class="mag-overlay"></a>
					<div class="mag-img"><?php the_post_thumbnail( $thumb ); ?></div>
					<?php if ( ! get_theme_mod( 'penci_featured_center_box' ) ): ?>
						<div class="mag-meta">
							<?php if ( ! get_theme_mod( 'penci_featured_hide_categories') && ( $i%3 == 1 ) ): ?>
								<div class="cat mag-cat"><?php penci_category( '' ); ?></div>
							<?php endif; ?>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<?php if ( ! get_theme_mod( 'penci_featured_meta_author' ) || ! get_theme_mod( 'penci_featured_meta_date' ) ): ?>
								<div class="mag-meta-child">
									<?php if ( ! get_theme_mod( 'penci_featured_meta_author' ) ): ?>
										<span class="mag-comments"><?php the_author(); ?></span>
									<?php endif; ?>
									<?php if ( ! get_theme_mod( 'penci_featured_meta_date' ) ): ?>
										<span class="mag-time"><?php the_time( get_option('date_format') ); ?></span>
									<?php endif; ?>
								</div>
							<?php endif; ?>
						</div>
					<?php endif; ?>
					<div class="mag-content">
				</li>
				<?php if( ( $i%3 == 0 ) && ( $i < $number ) ): ?></ul></li><li class="penci-mag-item"><ul class="mag-wrap"><?php endif; ?>

			<?php if( $i == $number || $i == $feat_query->post_count ): ?></ul></li><?php endif; ?>
			<?php $i++; endwhile; wp_reset_postdata(); endif; ?>
		</ul>
	</div>
</div>