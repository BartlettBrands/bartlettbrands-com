<?php
/**
 * Template loop for list style
 */
?>
<li class="list-post magazine-layout magazine-1">
	<article id="post-<?php the_ID(); ?>" class="item">

		<?php if ( has_post_format( 'gallery' ) ) : ?>
			<?php $images = get_post_meta( $post->ID, '_format_gallery_images', true ); ?>
			<?php if ( $images ) : ?>
				<div class="thumbnail">
					<div class="penci-slick-slider" data-auto-height="true">
						<?php foreach ( $images as $image ) : ?>

							<?php $the_image = wp_get_attachment_image_src( $image, 'penci-thumb' ); ?>
							<?php $the_caption = get_post_field( 'post_excerpt', $image ); ?>
							<figure>
								<img src="<?php echo esc_url( $the_image[0] ); ?>" alt="<?php the_title(); ?>" <?php if ($the_caption) : ?>title="<?php echo esc_attr( $the_caption ); ?>"<?php endif; ?> />
							</figure>

						<?php endforeach; ?>
					</div>
				</div>
			<?php endif; ?>

		<?php elseif ( has_post_thumbnail() ) : ?>
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
					<?php if ( has_post_format( 'link' ) ) : ?>
						<a href="<?php the_permalink() ?>" class="icon-post-format"><i class="fa fa-link"></i></a>
					<?php endif; ?>
					<?php if ( has_post_format( 'quote' ) ) : ?>
						<a href="<?php the_permalink() ?>" class="icon-post-format"><i class="fa fa-quote-left"></i></a>
					<?php endif; ?>
				<?php endif; ?>
			</div>
		<?php endif; ?>

		<div class="content-list-right<?php if ( ! has_post_thumbnail() ) : echo ' fullwidth'; endif; ?>">
			<div class="header-list-style">
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
		</div>

	</article>
</li>