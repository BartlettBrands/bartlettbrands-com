<?php
/**
 * Featured slider posts on top of home page
 * We support 3 styles posts featured slider
 *
 * @since 1.0
 */

$featured_style = get_theme_mod( 'penci_featured_slider_style' );
if ( $featured_style != 'style-1' && $featured_style != 'style-3' && $featured_style != 'style-7' ) {
	$featured_style = 'style-2';
}

$img_thumb = 'penci-slider-thumb';
if( $featured_style == 'style-3' ): $img_thumb = 'penci-slider-full-thumb'; endif;

$data_auto = 'true';
$auto = get_theme_mod( 'penci_featured_autoplay' );
if( $auto == false ): $data_auto = 'false'; endif;
$auto_time = get_theme_mod( 'penci_featured_slider_auto_time' );
if( !is_numeric( $auto_time ) ): $auto_time = '4000'; endif;
$auto_speed = get_theme_mod( 'penci_featured_slider_auto_speed' );
if( !is_numeric( $auto_speed ) ): $auto_speed = '600'; endif;
$date_format = get_option('date_format');
$date_format = str_replace( array( 'm', 'n', 'F' ), array( 'M', 'M', 'M' ), $date_format );
?>
<div class="featured-area <?php echo esc_attr( $featured_style ); ?>">
	<div class="featured-carousel <?php echo esc_attr( $featured_style ); ?>" data-auto="<?php echo esc_attr( $data_auto ); ?>" data-autotime="<?php echo esc_attr( $auto_time ); ?>" data-speed="<?php echo esc_attr( $auto_speed ); ?>">
		<?php
		$featured_cat = get_theme_mod( 'penci_featured_cat' );
		$number       = get_theme_mod( 'penci_featured_slider_slides' );
		if( ! $number ): $number = 6; endif;
		$featured_args = array( 'posts_per_page' => $number );
		if( $featured_cat ):
			$featured_args['cat'] = $featured_cat;
		endif;
		?>
		<?php $feat_query = new WP_Query( $featured_args ); ?>
		<?php if ( $feat_query->have_posts() ) : while ( $feat_query->have_posts() ) : $feat_query->the_post(); ?>
			<figure class="item">
				<div class="featured-overlay featured-overlay-color"></div>
				<a class="featured-overlay featured-overlay-partent" href="<?php the_permalink(); ?>"></a>
				<?php the_post_thumbnail( $img_thumb ); ?>
				<?php if ( ! get_theme_mod( 'penci_featured_center_box' ) ): ?>
					<div class="featured-content">
						<div class="feat-text<?php if ( get_theme_mod( 'penci_featured_meta_date' ) ): echo ' slider-hide-date'; endif;?>">
							<div class="featured-slider-overlay"></div>
							<?php if ( ! get_theme_mod( 'penci_featured_meta_date' ) ): ?>
								<span class="feat-time"><?php the_time( $date_format ); ?></span>
							<?php endif; ?>
							<?php if ( ! get_theme_mod( 'penci_featured_hide_categories' ) && $featured_style != 'style-7' ): ?>
							<div class="featured-cat"><?php penci_category( '' ); ?></div>
							<?php endif; ?>
							<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
							<?php if ( ! get_theme_mod( 'penci_featured_meta_comment' ) || ! get_theme_mod( 'penci_featured_meta_author' ) ): ?>
								<div class="carousel-meta">
									<?php if ( ! get_theme_mod( 'penci_featured_meta_author' ) ): ?>
										<span class="feat-author"><?php esc_html_e( 'by ', 'soledad' ); ?><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a></span>
									<?php endif; ?>
									<?php if ( ! get_theme_mod( 'penci_featured_meta_comment' ) ): ?>
										<span class="feat-comments"><a href="<?php comments_link(); ?> "><?php comments_number( esc_html__( '0 comment', 'soledad' ), esc_html__( '1 comment', 'soledad' ), '% ' . esc_html__( 'comments', 'soledad' ) ); ?></a></span>
									<?php endif; ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
				<?php endif; ?>
			</figure>
		<?php endwhile; wp_reset_postdata(); endif; ?>
	</div>
</div>
