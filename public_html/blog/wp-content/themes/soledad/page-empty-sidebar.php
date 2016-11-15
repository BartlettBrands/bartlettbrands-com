<?php
/**
 * Template Name: Page with Sidebar Only Content
 */
get_header();

$sidebar_position = 'right-sidebar';
if( get_theme_mod( "penci_left_sidebar_posts" ) ) { $sidebar_position = 'left-sidebar'; }
?>

	<?php if( ! get_theme_mod( 'penci_disable_breadcrumb' ) ): ?>
		<div class="container penci-breadcrumb single-breadcrumb">
			<span><a class="crumb" href="<?php echo esc_url( home_url('/') ); ?>"><?php esc_html_e( 'Home', 'soledad' ); ?></a></span><i class="fa fa-angle-right"></i>
			<span><?php the_title(); ?></span>
		</div>
	<?php endif; ?>

	<div class="container penci_sidebar <?php echo esc_attr( $sidebar_position ); ?>">

		<div id="main"<?php if ( get_theme_mod( 'penci_sidebar_sticky' ) ): ?> class="penci-main-sticky-sidebar"<?php endif; ?>>
			<div class="theiaStickySidebar">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'empty-page' ); ?>
				<?php endwhile; endif; ?>
			</div>
		</div>

		<?php get_sidebar(); ?>

<?php get_footer(); ?>