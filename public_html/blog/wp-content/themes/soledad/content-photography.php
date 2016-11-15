<?php
/**
 * Template loop for typography style
 */
?>
<li class="grid-style grid-2-style typography-style">
	<article id="post-<?php the_ID(); ?>" class="item">

		<div class="thumbnail">
			<a href="<?php the_permalink() ?>">
				<?php
				if( has_post_thumbnail() ) {
					the_post_thumbnail( 'penci-thumb' );
				} else {
					echo '<img src="'. esc_url( get_template_directory_uri() ) .'/images/no-image.jpg" alt="No Image" />';
				}
				?>
			</a>

			<div class="content-typography">
				<a href="<?php the_permalink(); ?>" class="overlay-typography"></a>
				<div class="main-typography">
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
			</div>
		</div>

	</article>
</li>