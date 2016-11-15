<?php
/**
 * The template for displaying archive pages
 *
 * @package Wordpress
 * @since 1.0
 */
get_header();

/* Sidebar position */
$sidebar_position = 'right-sidebar';
if( get_theme_mod( "penci_left_sidebar_archive" ) ) { $sidebar_position = 'left-sidebar'; }

/* Archive layout */
$layout_this = get_theme_mod( 'penci_archive_layout' );
if ( ! isset( $layout_this ) || empty( $layout_this ) ): $layout_this = 'standard'; endif;
$class_layout = '';
if( $layout_this == 'classic' ): $class_layout = ' classic-layout'; endif;
?>

		<?php if( ! get_theme_mod( 'penci_disable_breadcrumb' ) ): ?>
			<div class="container penci-breadcrumb">
				<span><a class="crumb" href="<?php echo esc_url( home_url('/') ); ?>"><?php esc_html_e( 'Home', 'soledad' ); ?></a></span><i class="fa fa-angle-right"></i>
				<?php
				if ( is_day() ) :
					echo '<span>';
					esc_html_e( 'Daily Archives', 'soledad' );
					echo '</span>';
				elseif ( is_month() ) :
					echo '<span>';
					esc_html_e( 'Monthly Archives', 'soledad' );
					echo '</span>';
				elseif ( is_year() ) :
					echo '<span>';
					esc_html_e( 'Yearly Archives', 'soledad' );
					echo '</span>';
				elseif ( is_author() ) :
					echo '<span>';
					esc_html_e( 'Authors', 'soledad' );
					echo '</span><i class="fa fa-angle-right"></i>';
					printf( wp_kses ( __( '<span>All posts by %s</span>', 'soledad' ), penci_allow_html() ), get_userdata( get_query_var('author') )->display_name );
				else :
					echo '<span>';
					esc_html_e( 'Archives', 'soledad' );
					echo '</span>';
				endif;
				?>
			</div>
		<?php endif; ?>

		<div class="container<?php echo esc_attr( $class_layout ); if ( get_theme_mod( 'penci_sidebar_archive' ) ) : ?> penci_sidebar <?php echo esc_attr( $sidebar_position ); ?><?php endif; ?>">
			<div id="main" class="penci-layout-<?php echo esc_attr( $layout_this ); ?><?php if ( get_theme_mod( 'penci_sidebar_sticky' ) ): ?> penci-main-sticky-sidebar<?php endif; ?>">
				<div class="theiaStickySidebar">
					<div class="archive-box">
						<div class="title-bar">
							<?php
							if ( is_day() ) :
								echo '<span>';
								esc_html_e( 'Daily Archives', 'soledad' );
								echo '</span>';
								printf( wp_kses ( __( '<h1>%s</h1>', 'soledad' ), penci_allow_html() ), get_the_date() );
							elseif ( is_month() ) :
								echo '<span>';
								esc_html_e( 'Monthly Archives', 'soledad' );
								echo '</span>';
								printf( wp_kses ( __( '<h1>%s</h1>', 'soledad' ), penci_allow_html() ), get_the_date( _x( 'F Y', 'monthly archives date format', 'soledad' ) ) );
							elseif ( is_year() ) :
								echo '<span>';
								esc_html_e( 'Yearly Archives', 'soledad' );
								echo '</span>';
								printf( wp_kses ( __( '<h1>%s</h1>', 'soledad' ), penci_allow_html() ), get_the_date( _x( 'Y', 'yearly archives date format', 'soledad' ) ) );
							elseif ( is_author() ) :
								echo '<span>';
								esc_html_e( 'Author', 'soledad' );
								echo '</span>';
								printf( wp_kses ( __( '<h1>%s</h1>', 'soledad' ), penci_allow_html() ), get_userdata( get_query_var('author') )->display_name );
							else :
								echo '<h1>';
								esc_html_e( 'Archives', 'soledad' );
								echo '</h1>';
							endif;
							?>
						</div>
					</div>

					<?php if ( have_posts() ) : ?>
						<?php if( in_array( $layout_this, array( 'mixed', 'mixed-2', 'overlay-grid', 'overlay-list', 'photography', 'grid', 'grid-2', 'list', 'boxed-1', 'boxed-2', 'boxed-3', 'standard-grid', 'standard-grid-2', 'standard-list', 'standard-boxed-1', 'classic-grid', 'classic-grid-2', 'classic-list', 'classic-boxed-1', 'magazine-1', 'magazine-2' ) ) ) : ?><ul class="penci-grid"><?php endif; ?>
						<?php if( in_array( $layout_this, array( 'masonry', 'masonry-2' ) ) ) : ?><div class="penci-wrap-masonry"><div class="masonry penci-masonry"><?php endif; ?>

						<?php /* The loop */
						while ( have_posts() ) : the_post();
							include( locate_template( 'content-' . $layout_this . '.php' ) );
						endwhile;
						?>

						<?php if( in_array( $layout_this, array( 'masonry', 'masonry-2' ) ) ) : ?></div></div><?php endif; ?>
						<?php if( in_array( $layout_this, array( 'mixed', 'mixed-2', 'overlay-grid', 'overlay-list', 'photography', 'grid', 'grid-2', 'list', 'boxed-1', 'boxed-2', 'boxed-3', 'standard-grid', 'standard-grid-2', 'standard-list', 'standard-boxed-1', 'classic-grid', 'classic-grid-2', 'classic-list', 'classic-boxed-1', 'magazine-1', 'magazine-2' ) ) ) : ?></ul><?php endif; ?>

						<?php penci_soledad_pagination(); ?>
					<?php endif; wp_reset_postdata(); /* End if of the loop */ ?>
				</div>
			</div>

		<?php if ( get_theme_mod( 'penci_sidebar_archive' ) ) : ?><?php get_sidebar(); ?><?php endif; ?>
<?php get_footer(); ?>