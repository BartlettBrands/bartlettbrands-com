<?php
/**
 * Related post template
 * Render list related posts
 *
 * @since 1.0
 */
$data_auto = 'true';
$auto = get_theme_mod( 'penci_post_related_autoplay' );
if( $auto == false ): $data_auto = 'false'; endif;

$orig_post = $post;
global $post;
$numbers_related = get_theme_mod('penci_numbers_related_post');
if ( !isset( $numbers_related ) || $numbers_related < 1 ): $numbers_related = 10; endif;

$categories = get_the_category( $post->ID );
if ( $categories ) {
	$category_ids = array();
	foreach ( $categories as $individual_category ) {
		$category_ids[] = $individual_category->term_id;
	}

	$args = array(
		'category__in'        => $category_ids,
		'post__not_in'        => array( $post->ID ),
		'posts_per_page'      => $numbers_related, // Number of related posts that will be shown.
		'ignore_sticky_posts' => 1,
		'orderby'             => 'rand'
	);

	$my_query = new wp_query( $args );
	if ( $my_query->have_posts() ) {
		$related_title = get_theme_mod('penci_post_related_text');
		$related_title = ( isset( $related_title ) && ! empty( $related_title ) ) ? $related_title : esc_html__( 'You may also like', 'soledad' );
		?>
		<div class="post-related">
		<div class="post-title-box"><h4 class="post-box-title"><?php echo esc_attr( $related_title ); ?></h4></div>
		<div class="penci-carousel penci-related-carousel" data-auto="<?php echo esc_attr( $data_auto ); ?>" data-dots="<?php if( ! get_theme_mod('penci_post_related_dots') ){ echo 'true'; } else { echo 'false'; } ?>" data-arrows="<?php if( ! get_theme_mod('penci_post_related_arrows') ){ echo 'true'; } else { echo 'false'; } ?>">
		<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
				<div class="item-related">
					<?php if ( ( function_exists( 'has_post_thumbnail' ) ) && ( has_post_thumbnail() ) ) : ?>
						<a class="related-thumb" href="<?php the_permalink() ?>">
							<?php if( has_post_thumbnail() && get_theme_mod('penci_post_related_icons') ): ?>
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
					<?php if( ! get_theme_mod('penci_hide_date_related') ): ?>
					<span class="date"><?php the_time( get_option( 'date_format' ) ); ?></span>
					<?php endif; ?>
				</div>
		<?php
		endwhile;
		echo '</div></div>';
	}
}
$post = $orig_post;
wp_reset_postdata();
?>