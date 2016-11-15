<?php
/**
 * Display featured categories on magazine layout
 *
 * @since 1.0
 */

$featured_cats       = get_theme_mod( 'penci_home_featured_cat' );
$featured_cats       = str_replace( ' ', '', $featured_cats );
$featured_categories = explode( ',', $featured_cats );
foreach ( $featured_categories as $fea_cat ) {
	$fea_oj = get_category_by_slug( $fea_cat );
	if( ! empty ( $fea_oj ) ) {
		$fea_cat_id = $fea_oj->term_id;
		$fea_cat_name = $fea_oj->name;
		$cat_meta   = get_option( "category_$fea_cat_id" );
		$cat_layout = isset( $cat_meta['mag_layout'] ) ? $cat_meta['mag_layout'] : 'style-1';
		$cat_ads_code = isset( $cat_meta['mag_ads'] ) ? $cat_meta['mag_ads'] : '';
		$numbers_posts = get_theme_mod( 'penci_home_featured_posts_numbers_1' ) ? get_theme_mod( 'penci_home_featured_posts_numbers_1' ) : '5';
		if ( $cat_layout == 'style-2' ) {
			$numbers_posts = get_theme_mod( 'penci_home_featured_posts_numbers_2' ) ? get_theme_mod( 'penci_home_featured_posts_numbers_2' ) : '4';
		}
		elseif ( $cat_layout == 'style-3' ) {
			$numbers_posts = get_theme_mod( 'penci_home_featured_posts_numbers_3' ) ? get_theme_mod( 'penci_home_featured_posts_numbers_3' ) : '4';
		}
		elseif ( $cat_layout == 'style-4' ) {
			$numbers_posts = get_theme_mod( 'penci_home_featured_posts_numbers_4' ) ? get_theme_mod( 'penci_home_featured_posts_numbers_4' ) : '6';
		}
		elseif ( $cat_layout == 'style-5' ) {
			$numbers_posts = get_theme_mod( 'penci_home_featured_posts_numbers_5' ) ? get_theme_mod( 'penci_home_featured_posts_numbers_5' ) : '6';
		}
		elseif ( $cat_layout == 'style-6' ) {
			$numbers_posts = get_theme_mod( 'penci_home_featured_posts_numbers_6' ) ? get_theme_mod( 'penci_home_featured_posts_numbers_6' ) : '5';
		}

		$attr       = array(
			'post_type' => 'post',
			'showposts' => $numbers_posts,
			'tax_query' => array(
				array(
					'taxonomy' => 'category',
					'field'    => 'slug',
					'terms'    => $fea_cat
				)
			)
		);
		$fea_query = new WP_Query( $attr );
		$numers_results = $fea_query->post_count;

		if( $fea_query->have_posts() ) :
		?>
			<?php if( $cat_layout == 'style-2' ) { ?>
			<div class="home-featured-cat mag-cat-style-2">
			<?php } else { ?>
			<section class="home-featured-cat mag-cat-<?php echo esc_attr( $cat_layout ); ?>">
			<?php } ?>
				<div class="penci-border-arrow penci-homepage-title penci-magazine-title">
					<h3 class="inner-arrow"><a href="<?php echo esc_url( get_category_link( $fea_cat_id ) ); ?>"><?php echo sanitize_text_field( $fea_cat_name ); ?></a></h3>
				</div>
				<div class="home-featured-cat-content <?php echo esc_attr( $cat_layout ); ?>">
				<?php if( $cat_layout == 'style-4' ): ?>
					<div class="penci-slider penci-single-mag-slider" data-smooth="true" data-control="false" data-dir="true" data-auto="true" data-autotime="5000" data-speed="600">
						<ul class="slides">
				<?php endif; ?>
				<?php if( $cat_layout == 'style-5' ): ?>
					<div class="penci-carousel penci-magcat-carousel" data-auto="true" data-dots="false" data-arrows="true">
				<?php endif; ?>
					<?php
						$m = 1; while( $fea_query->have_posts() ): $fea_query->the_post();
							include( locate_template( 'inc/modules/magazine-' . $cat_layout . '.php' ) );
						$m++; endwhile;
					?>
				<?php if( $cat_layout == 'style-5' ): ?>
					</div>
				<?php endif; ?>
				<?php if( $cat_layout == 'style-4' ): ?>
						</ul>
					</div>
				<?php endif; ?>
				</div>

				<?php if( $cat_ads_code ): ?>
					<div class="penci-featured-cat-custom-ads">
						<?php echo stripslashes( $cat_ads_code ); ?>
					</div>
				<?php endif; ?>

			<?php if( $cat_layout == 'style-2' ) { ?>
			</div>
			<?php } else { ?>
			</section>
			<?php } ?>
		<?php
		endif; wp_reset_postdata();
	}
}