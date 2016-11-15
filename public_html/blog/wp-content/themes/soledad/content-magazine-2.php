<?php
/**
 * Template loop for gird style
 */
?>
<li class="grid-style magazine-layout magazine-2">
	<article id="post-<?php the_ID(); ?>" class="item">
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="thumbnail">
				<a href="<?php the_permalink() ?>">
					<?php the_post_thumbnail( 'penci-thumb' ); ?>
				</a>
				<?php if( ! get_theme_mod('penci_grid_icon_format') ): ?>
					<?php if ( has_post_format( 'video' ) ) : ?>
						<a href="<?php the_permalink() ?>" class="icon-post-format"><i class="fa fa-play"></i></a>
					<?php endif; ?>
					<?php if ( has_post_format( 'audio' ) ) : ?>
						<a href="<?php the_permalink() ?>" class="icon-post-format"><i class="fa fa-music"></i></a>
					<?php endif; ?>
					<?php if ( has_post_format( 'gallery' ) ) : ?>
						<a href="<?php the_permalink() ?>" class="icon-post-format"><i class="fa fa-picture-o"></i></a>
					<?php endif; ?>
					<?php if ( has_post_format( 'link' ) ) : ?>
						<a href="<?php the_permalink() ?>" class="icon-post-format"><i class="fa fa-link"></i></a>
					<?php endif; ?>
					<?php if ( has_post_format( 'quote' ) ) : ?>
						<a href="<?php the_permalink() ?>" class="icon-post-format"><i class="fa fa-quote-left"></i></a>
					<?php endif; ?>
				<?php endif; ?>
			</div>
		<?php endif; ?>

		<div class="grid-header-box">

			<?php if ( ! get_theme_mod( 'penci_grid_cat' ) ) : ?>
				<span class="cat"><?php penci_category( '' ); ?></span>
			<?php endif; ?>

			<h2 class="grid-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

			<?php if ( ! get_theme_mod( 'penci_grid_date' ) || ! get_theme_mod( 'penci_grid_author' ) ) : ?>
				<div class="grid-post-box-meta">
					<?php if ( ! get_theme_mod( 'penci_grid_author' ) ) : ?>
						<span class="author-italic"><?php esc_html_e( 'by ', 'soledad' ); ?><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></span>
					<?php endif; ?>
					<?php if ( ! get_theme_mod( 'penci_grid_date' ) ) : ?>
						<span><?php the_time( get_option('date_format') ); ?></span>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		</div>

		<div class="item-content">
			<?php the_excerpt(); ?>
		</div>

	</article>
</li>