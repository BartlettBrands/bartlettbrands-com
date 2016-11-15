<?php
/**
 * Template display for featured category style 1
 *
 * @since 1.0
 */
?>
<?php if ( $m == 1 ): ?><div class="cat-left"><?php endif; ?>
<div class="mag-post-box<?php if ( $m == 1 ): echo ' first-post'; endif; ?>">
	<div class="magcat-thumb">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'penci-thumb' ); ?></a>
		<?php if( has_post_thumbnail() && get_theme_mod('penci_home_featured_cat_icons') ): ?>
			<?php if ( has_post_format( 'video' ) ) : ?>
				<a href="<?php the_permalink() ?>" class="icon-post-format"><i class="fa fa-play"></i></a>
			<?php endif; ?>
			<?php if ( has_post_format( 'audio' ) ) : ?>
				<a href="<?php the_permalink() ?>" class="icon-post-format"><i class="fa fa-music"></i></a>
			<?php endif; ?>
			<?php if ( has_post_format( 'link' ) ) : ?>
				<a href="<?php the_permalink() ?>" class="icon-post-format"><i class="fa fa-link"></i></a>
			<?php endif; ?>
			<?php if ( has_post_format( 'quote' ) ) : ?>
				<a href="<?php the_permalink() ?>" class="icon-post-format"><i class="fa fa-quote-left"></i></a>
			<?php endif; ?>
			<?php if ( has_post_format( 'gallery' ) ) : ?>
				<a href="<?php the_permalink() ?>" class="icon-post-format"><i class="fa fa-picture-o"></i></a>
			<?php endif; ?>
		<?php endif; ?>
	</div>
	<div class="magcat-detail">
		<?php if ( $m == 1 ): ?><div class="mag-header"><?php endif; ?>
		<h3 class="magcat-titlte"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<?php if ( ( $m == 1 && ! get_theme_mod( 'penci_home_featured_cat_author' ) ) || ! get_theme_mod( 'penci_home_featured_cat_date' ) ): ?>
				<div class="grid-post-box-meta mag-meta">
					<?php if ( $m == 1 && ! get_theme_mod( 'penci_home_featured_cat_author' ) ) : ?>
						<span class="author-italic"><?php esc_html_e( 'by ', 'soledad' ); ?><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a></span>
					<?php endif; ?>
					<?php if ( ! get_theme_mod( 'penci_home_featured_cat_date' ) ) : ?>
						<span><?php the_time( get_option('date_format') ); ?></span>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		<?php if ( $m == 1 ): ?></div><?php endif; ?>
		<?php if ( $m == 1 ): ?>
			<div class="mag-excerpt">
				<?php the_excerpt(); ?>
			</div>
		<?php endif; ?>
	</div>
</div>
<?php if ( $m == 1 ): ?></div><div class="cat-right"><?php endif; ?>
<?php if ( $m == $numers_results ): ?></div><?php endif; ?>