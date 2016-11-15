<?php
/**
 * The Template for displaying all single posts
 *
 * @package Wordpress
 * @since   1.0
 */
get_header();

$sidebar_position = 'right-sidebar';
if( get_theme_mod( "penci_left_sidebar_posts" ) ) { $sidebar_position = 'left-sidebar'; }
?>

	<?php if( ! get_theme_mod( 'penci_disable_breadcrumb' ) ): ?>
		<div class="container penci-breadcrumb single-breadcrumb">
			<span><a class="crumb" href="<?php echo esc_url( home_url('/') ); ?>"><?php esc_html_e( 'Home', 'soledad' ); ?></a></span><i class="fa fa-angle-right"></i>
				<span>
					<?php
					$penci_cats = get_the_category( get_the_ID() );
					$penci_cat  = array_shift( $penci_cats );
					echo '<a href="' . esc_url( get_category_link( $penci_cat->term_id ) ) . '">' . $penci_cat->name . '</a>';
					?>
				</span><i class="fa fa-angle-right"></i>
			<span><?php the_title(); ?></span>
		</div>
	<?php endif; ?>

	<?php if ( get_theme_mod( 'penci_enable_single_style2' ) ) : ?>
		<div class="container container-single<?php if( get_theme_mod( 'penci_home_layout' ) == 'magazine-1' || get_theme_mod( 'penci_home_layout' ) == 'magazine-2' ): ?> container-single-magazine<?php endif;?> container-single-fullwidth">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'single-full' ); ?>
		<?php endwhile; endif; ?>
		</div>
	<?php endif; ?>

	<div class="container container-single<?php if( get_theme_mod( 'penci_home_layout' ) == 'magazine-1' || get_theme_mod( 'penci_home_layout' ) == 'magazine-2' ): ?> container-single-magazine<?php endif;?><?php if ( get_theme_mod( 'penci_sidebar_posts' ) ) : ?> penci_sidebar <?php echo esc_attr( $sidebar_position ); ?><?php endif; ?><?php if( ! get_theme_mod( 'penci_disable_lightbox_single' ) ): ?> penci-enable-lightbox<?php endif; ?>">
		<div id="main"<?php if ( get_theme_mod( 'penci_sidebar_sticky' ) ): ?> class="penci-main-sticky-sidebar"<?php endif; ?>>
			<div class="theiaStickySidebar">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php /* Count viewed posts */ penci_set_post_views( $post->ID ); ?>
					<?php get_template_part( 'content', 'single' ); ?>
				<?php endwhile; endif; ?>
			</div>
		</div>
		<?php if ( get_theme_mod( 'penci_sidebar_posts' ) ) : ?>
			<?php get_sidebar(); ?>
		<?php endif; ?>

<?php get_footer(); ?>