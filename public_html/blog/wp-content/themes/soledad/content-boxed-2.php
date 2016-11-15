<?php
/**
 * Template loop for list boxed style 2
 */
?>
<?php
if ( ! isset ( $x ) ) { $x = 1; } else { $x = $x; }
$show_sidebar = get_theme_mod( 'penci_archive_layout' );
if( is_home() ) {
	$show_sidebar = get_theme_mod( 'penci_sidebar_home' );
}
$display_val = true;
if ( ( $show_sidebar && ( $x%2 == 0 ) ) || ( ! $show_sidebar && ( $x%3 == 2 ) ) ) { $display_val = false; }
?>
<li class="list-boxed-post-2">
	<article id="post-<?php the_ID(); ?>" class="item">
		<div class="content-boxed-2 show-top<?php if ( ! has_post_thumbnail() ) : echo ' boxed-fullwidth-2'; endif; ?><?php if ( $display_val ): echo ' boxed-none'; endif;?>">
			<div class="inner-parent-boxed-2">
				<div class="inner-boxed-2">
					<?php if ( ! get_theme_mod( 'penci_grid_cat' ) ) : ?>
						<span class="cat"><?php penci_category( '' ); ?></span>
					<?php endif; ?>

					<h2 class="grid-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

					<?php if ( ! get_theme_mod( 'penci_grid_author' ) || ! get_theme_mod( 'penci_grid_date' ) ) : ?>
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
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="thumbnail<?php if ( $display_val ){ echo ' arrow-bottom'; } else { echo ' arrow-top'; } ?>">
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

		<div class="content-boxed-2 show-bottom<?php if ( ! has_post_thumbnail() ) : echo ' boxed-fullwidth-2'; endif; ?><?php if ( ! $display_val ) : echo ' boxed-none'; endif;?>">
			<div class="inner-parent-boxed-2">
				<div class="inner-boxed-2">
					<?php if ( ! get_theme_mod( 'penci_grid_cat' ) ) : ?>
						<span class="cat"><?php penci_category( '' ); ?></span>
					<?php endif; ?>

					<h2 class="grid-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

					<?php if ( ! get_theme_mod( 'penci_grid_author' ) || ! get_theme_mod( 'penci_grid_date' ) ) : ?>
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

<?php $x ++; ?>