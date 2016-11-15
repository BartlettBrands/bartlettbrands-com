<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package    WordPress
 * @subpackage Soledad Theme
 * @since      1.0
 */
get_header(); ?>

<?php
if ( ! get_theme_mod( 'penci_home_hide_boxes' ) && ( get_theme_mod( 'penci_home_box_img1' ) || get_theme_mod( 'penci_home_box_img2' ) || get_theme_mod( 'penci_home_box_img3' ) ) ):
	get_template_part( 'inc/modules/home_boxes' );
endif;

/* Homepage Popular Post */
if( get_theme_mod( 'penci_enable_home_popular_posts' ) ) {
	get_template_part( 'inc/modules/home_popular' );
}

/* Home layout */
$layout_this = get_theme_mod( "penci_home_layout" );
$sidebar_position = 'right-sidebar';
if( get_theme_mod( "penci_left_sidebar_home" ) ) { $sidebar_position = 'left-sidebar'; }

if ( ! isset( $layout_this ) || empty( $layout_this ) ): $layout_this = 'standard'; endif;
$class_layout = '';
if( $layout_this == 'classic' ): $class_layout = ' classic-layout'; endif;
?>

	<div class="container<?php echo esc_attr( $class_layout ); if ( get_theme_mod( 'penci_sidebar_home' ) ) : ?> penci_sidebar <?php echo esc_attr( $sidebar_position ); ?><?php endif; ?>">
		<div id="main" class="penci-layout-<?php echo esc_attr( $layout_this ); ?><?php if ( get_theme_mod( 'penci_sidebar_sticky' ) ): ?> penci-main-sticky-sidebar<?php endif; ?>">
			<div class="theiaStickySidebar">

				<?php
				/**
				 * Featured categories for magazine layouts
				 *
				 * @since 1.0
				 */
				if( get_theme_mod( 'penci_home_featured_cat' ) && ( $layout_this == 'magazine-1' || $layout_this == 'magazine-2' ) ):
					get_template_part( 'inc/modules/featured-categories' );
				endif;
				?>

				<?php if( ! get_theme_mod( 'penci_hide_latest_post_homepage' ) ): ?>

					<?php if ( get_theme_mod( 'penci_home_title' ) ) : ?>
						<div class="penci-border-arrow penci-homepage-title">
							<h3 class="inner-arrow"><?php echo sanitize_text_field( get_theme_mod( 'penci_home_title' ) ); ?></h3>
						</div>
					<?php endif; ?>

					<?php if ( in_array( $layout_this, array( 'mixed', 'mixed-2', 'overlay-grid', 'overlay-list', 'photography', 'grid', 'grid-2', 'list', 'boxed-1', 'boxed-2', 'standard-grid', 'standard-grid-2', 'standard-list', 'standard-boxed-1', 'classic-grid', 'classic-grid-2', 'classic-list', 'classic-boxed-1', 'magazine-1', 'magazine-2' ) ) ) : ?><ul class="penci-grid"><?php endif; ?>
					<?php if( in_array( $layout_this, array( 'masonry', 'masonry-2' ) ) ) : ?><div class="penci-wrap-masonry"><div class="masonry penci-masonry"><?php endif; ?>

					<?php /* The loop */
					if (have_posts()) :
					while ( have_posts() ) : the_post();
						include( locate_template( 'content-' . $layout_this . '.php' ) );
					endwhile;
					?>

					<?php if( in_array( $layout_this, array( 'masonry', 'masonry-2' ) ) ) : ?></div></div><?php endif; ?>
					<?php if ( in_array( $layout_this, array( 'mixed', 'mixed-2', 'overlay-grid', 'overlay-list', 'photography', 'grid', 'grid-2', 'list', 'boxed-1', 'boxed-2', 'standard-grid', 'standard-grid-2', 'standard-list', 'standard-boxed-1', 'classic-grid', 'classic-grid-2', 'classic-list', 'classic-boxed-1', 'magazine-1', 'magazine-2' ) ) ) : ?></ul><?php endif; ?>

					<?php penci_soledad_pagination(); ?>
					<?php endif; wp_reset_postdata(); /* End if of the loop */ ?>

				<?php endif; /* End check if not hide latest on homepage */ ?>

			</div>
		</div>

		<?php if ( get_theme_mod( 'penci_sidebar_home' ) ) : ?>
			<?php get_sidebar(); ?>
		<?php endif; ?>

<?php get_footer(); ?>