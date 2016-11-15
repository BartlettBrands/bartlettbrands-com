<?php
/**
 * Template Name: Page Under Construction
 *
 * @package Wordpress
 * @since   1.0
 */
get_header();

/* Time to countdown */
$time = get_theme_mod( 'penci_page_under_construction_time' );
if ( ! $time ): $time = '2014/01/01'; endif;
?>

	<div class="container under-construction-page">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<h1 class="under-title"><?php the_title(); ?></h1>
			<div class="sub-title-content"><?php the_content(); ?></div>
			<div class="penci-countdown" data-time="<?php echo esc_attr( $time ); ?>"></div>

		<?php endwhile; endif; ?>

<?php get_footer(); ?>