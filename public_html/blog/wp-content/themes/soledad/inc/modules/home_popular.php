<?php
/**
 * Popular Posts in Homepage
 */

$query = array(
	'posts_per_page' => 10,
	'post_type'      => 'post',
	'meta_key'       => 'penci_post_views_count',
	'orderby'        => 'meta_value_num',
	'order'          => 'DESC'
);

$popular = new WP_Query( $query );

if( $popular->have_posts() ) {
?>
<div class="container penci-home-popular-posts">
	<h2 class="home-pupular-posts-title"><span><?php esc_html_e( 'Popular Posts', 'soledad' ); ?></span></h2>
	<div class="penci-carousel penci-related-carousel penci-home-popular-post" data-auto="false" data-dots="true" data-arrows="false">
		<?php while ( $popular->have_posts() ) : $popular->the_post(); ?>
			<div class="item-related">
				<?php if ( ( function_exists( 'has_post_thumbnail' ) ) && ( has_post_thumbnail() ) ) : ?>
					<a class="related-thumb" href="<?php the_permalink() ?>">
						<?php if( has_post_thumbnail() && get_theme_mod('penci_enable_home_popular_icons') ): ?>
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

						<?php the_post_thumbnail( 'penci-thumb' ); ?>
					</a>
				<?php endif; ?>

				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<span class="date"><?php the_time( get_option( 'date_format' ) ); ?></span>
			</div>
		<?php
		endwhile;
		?>
	</div>
</div>
<?php
}
wp_reset_postdata();
?>

