<?php
/**
 * Post navigation in single post
 * Create next and prev button to next and prev posts
 *
 * @package Wordpress
 * @since 1.0
 */
?>
<div class="post-pagination">
	<?php
	$prev_post = get_previous_post();
	$next_post = get_next_post();
	?>
	<?php if ( ! empty( $prev_post ) ) : ?>
		<div class="prev-post">
			<?php if( has_post_thumbnail( $prev_post->ID ) && get_theme_mod( 'penci_post_nav_thumbnail' ) ): ?>
				<a class="penci-post-nav-thumb" href="<?php echo esc_url( get_the_permalink( $prev_post->ID ) ); ?>">
					<?php echo get_the_post_thumbnail($prev_post->ID, 'thumbnail' ); ?>
				</a>
			<?php endif; ?>
			<div class="prev-post-inner">
				<div class="prev-post-title">
					<span><?php esc_html_e( 'previous post', 'soledad' ); ?></span>
				</div>
				<a href="<?php echo esc_url( get_the_permalink( $prev_post->ID ) ); ?>">
					<div class="pagi-text">
						<h5 class="prev-title"><?php echo sanitize_text_field( get_the_title( $prev_post->ID ) ); ?></h5>
					</div>
				</a>
			</div>
		</div>
	<?php endif; ?>

	<?php if ( ! empty( $next_post ) ) : ?>
		<div class="next-post">
			<?php if( has_post_thumbnail( $next_post->ID ) && get_theme_mod( 'penci_post_nav_thumbnail' ) ): ?>
				<a class="penci-post-nav-thumb nav-thumb-next" href="<?php echo esc_url( get_the_permalink( $next_post->ID ) ); ?>">
					<?php echo get_the_post_thumbnail($next_post->ID, 'thumbnail' ); ?>
				</a>
			<?php endif; ?>
			<div class="next-post-inner">
				<div class="prev-post-title next-post-title">
					<span><?php esc_html_e( 'next post', 'soledad' ); ?></span>
				</div>
				<a href="<?php echo esc_url( get_the_permalink( $next_post->ID ) ); ?>">
					<div class="pagi-text">
						<h5 class="next-title"><?php echo sanitize_text_field( get_the_title( $next_post->ID ) ); ?></h5>
					</div>
				</a>
			</div>
		</div>
	<?php endif; ?>
</div>