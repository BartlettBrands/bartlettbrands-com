<?php
/**
 * The template for displaying single pages.
 *
 * @since 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if( ! get_theme_mod( 'penci_enable_single_style2' ) ): ?>

	<?php if( ! get_theme_mod( 'penci_move_title_bellow' ) ): ?>

	<div class="header-standard header-classic single-header">
		<?php if ( ! get_theme_mod( 'penci_post_cat' ) ) : ?>
			<div class="penci-standard-cat"><span class="cat"><?php penci_category( '' ); ?></span></div>
		<?php endif; ?>

		<h1 class="post-title single-post-title"><?php the_title(); ?></h1>

		<?php if ( ! get_theme_mod( 'penci_single_meta_author' ) || ! get_theme_mod( 'penci_single_meta_date' ) || ! get_theme_mod( 'penci_single_meta_comment' ) ) : ?>
			<div class="post-box-meta-single">
				<?php if ( ! get_theme_mod( 'penci_single_meta_author' ) ) : ?>
					<span class="author-post"><span><?php esc_html_e( 'written by ', 'soledad' ); ?><a class="author-url" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></span></span>
				<?php endif; ?>
				<?php if ( ! get_theme_mod( 'penci_single_meta_date' ) ) : ?>
					<span><?php the_time( get_option('date_format') ); ?></span>
				<?php endif; ?>
			</div>
		<?php endif; ?>
	</div>

	<?php if( get_theme_mod( 'penci_post_adsense_one' ) ): ?>
		<div class="penci-google-adsense-1">
		<?php echo get_theme_mod( 'penci_post_adsense_one' ); ?>
		</div>
	<?php endif; ?>

	<?php endif; /* End check if not move title bellow featured image */ ?>

	<?php if ( has_post_format( 'link' ) || has_post_format( 'quote' ) ) : ?>
		<div class="standard-post-special post-image<?php if ( has_post_format( 'quote' ) ): ?> penci-special-format-quote<?php endif; ?><?php if ( ! has_post_thumbnail() || get_theme_mod( 'penci_standard_thumbnail' ) ) : echo ' no-thumbnail'; endif; ?>">
			<?php if ( has_post_thumbnail() && ! get_theme_mod( 'penci_standard_thumbnail' ) ) : ?><?php the_post_thumbnail( 'penci-full-thumb' ); ?><?php endif; ?>
			<div class="standard-content-special">
				<div class="format-post-box<?php if ( has_post_format( 'quote' ) ) { echo ' penci-format-quote'; } else { echo ' penci-format-link'; } ?>">
					<span class="post-format-icon"><i class="fa fa-<?php if ( has_post_format( 'quote' ) ) { echo 'quote-left'; } else { echo 'link'; } ?>"></i></span>
					<p class="dt-special">
						<?php
						if ( has_post_format( 'quote' ) ) {
							$dt_content = get_post_meta( $post->ID, '_format_quote_source_name', true );
							if ( ! empty( $dt_content ) ): echo sanitize_text_field( $dt_content ); endif;
						}
						else {
							$dt_content = get_post_meta( $post->ID, '_format_link_url', true );
							if ( ! empty( $dt_content ) ):
								echo '<a href="'. esc_url( $dt_content ) .'" target="_blank">'. sanitize_text_field( $dt_content ) .'</a>';
							endif;
						}
						?>
					</p>
					<?php
					if ( has_post_format( 'quote' ) ):
						$quote_author = get_post_meta( $post->ID, '_format_quote_source_url', true );
						if ( ! empty( $quote_author ) ):
							echo '<div class="author-quote"><span>' . sanitize_text_field( $quote_author ) . '</span></div>';
						endif;
					endif; ?>
				</div>
			</div>
		</div>

	<?php elseif ( has_post_format( 'gallery' ) ) : ?>

		<?php $images = get_post_meta( $post->ID, '_format_gallery_images', true ); ?>

		<?php if ( $images ) : ?>
			<div class="post-image">
				<div class="penci-slick-slider" data-auto-height="true">
					<?php foreach ( $images as $image ) : ?>

						<?php $the_image = wp_get_attachment_image_src( $image, 'penci-full-thumb' ); ?>
						<?php $the_caption = get_post_field( 'post_excerpt', $image ); ?>
						<figure>
							<img src="<?php echo esc_url( $the_image[0] ); ?>"<?php if ($the_caption) : ?>title="<?php echo esc_attr( $the_caption ); ?>"<?php endif; ?> />
						</figure>

					<?php endforeach; ?>
				</div>
			</div>
		<?php endif; ?>

	<?php elseif ( has_post_format( 'video' ) ) : ?>

		<div class="post-image">
			<?php $penci_video = get_post_meta( $post->ID, '_format_video_embed', true ); ?>
			<?php if ( wp_oembed_get( $penci_video ) ) : ?>
				<?php echo wp_oembed_get( $penci_video ); ?>
			<?php else : ?>
				<?php echo sanitize_text_field( $penci_video ); ?>
			<?php endif; ?>
		</div>

	<?php elseif ( has_post_format( 'audio' ) ) : ?>

		<div class="standard-post-image post-image audio<?php if ( ! has_post_thumbnail() || get_theme_mod( 'penci_post_thumb' ) ) : echo ' no-thumbnail'; endif; ?>">
			<?php if ( has_post_thumbnail() && ! get_theme_mod( 'penci_post_thumb' ) ) : ?><?php the_post_thumbnail( 'penci-full-thumb' ); ?><?php endif; ?>
			<div class="audio-iframe">
				<?php $penci_audio = get_post_meta( $post->ID, '_format_audio_embed', true );
				$penci_audio_str = substr( $penci_audio, -4 ); ?>
				<?php if ( wp_oembed_get( $penci_audio ) ) : ?>
					<?php echo wp_oembed_get( $penci_audio ); ?>
				<?php elseif( $penci_audio_str == '.mp3' ) : ?>
					<?php echo do_shortcode('[audio src="'. esc_url( $penci_audio ) .'"]'); ?>
				<?php else : ?>
					<?php echo sanitize_text_field( $penci_audio ); ?>
				<?php endif; ?>
			</div>
		</div>

	<?php else : ?>

		<?php if ( has_post_thumbnail() ) : ?>
			<?php if ( ! get_theme_mod( 'penci_post_thumb' ) ) : ?>
				<div class="post-image">
					<?php
					if ( ! get_theme_mod( 'penci_disable_lightbox_single' ) ) {
						$thumb_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
						echo '<a href="'. esc_url( $thumb_url ) .'" data-rel="penci-gallery-image-content">';
						the_post_thumbnail( 'penci-full-thumb' );
						echo '</a>';
					} else {
						the_post_thumbnail( 'penci-full-thumb' );
					}
					?>
				</div>
			<?php endif; ?>
		<?php endif; ?>

	<?php endif; ?>

	<?php endif; /* End check if single style 2 is enable */ ?>

	<?php if( get_theme_mod( 'penci_enable_single_style2' ) ): ?>
		<?php if( get_theme_mod( 'penci_post_adsense_one' ) ): ?>
			<div class="penci-google-adsense-1">
				<?php echo get_theme_mod( 'penci_post_adsense_one' ); ?>
			</div>
		<?php endif; ?>
	<?php endif; ?>

	<?php if( get_theme_mod( 'penci_move_title_bellow' ) && ! get_theme_mod( 'penci_enable_single_style2' ) ): ?>

		<div class="header-standard header-classic single-header">
			<?php if ( ! get_theme_mod( 'penci_post_cat' ) ) : ?>
				<div class="penci-standard-cat"><span class="cat"><?php penci_category( '' ); ?></span></div>
			<?php endif; ?>

			<h1 class="post-title single-post-title"><?php the_title(); ?></h1>

			<?php if ( ! get_theme_mod( 'penci_single_meta_author' ) || ! get_theme_mod( 'penci_single_meta_date' ) || ! get_theme_mod( 'penci_single_meta_comment' ) ) : ?>
				<div class="post-box-meta-single">
					<?php if ( ! get_theme_mod( 'penci_single_meta_author' ) ) : ?>
						<span class="author-post"><span><?php esc_html_e( 'written by ', 'soledad' ); ?><a class="author-url" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></span></span>
					<?php endif; ?>
					<?php if ( ! get_theme_mod( 'penci_single_meta_date' ) ) : ?>
						<span><?php the_time( get_option('date_format') ); ?></span>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		</div>

		<?php if( get_theme_mod( 'penci_post_adsense_one' ) ): ?>
			<div class="penci-google-adsense-1">
				<?php echo get_theme_mod( 'penci_post_adsense_one' ); ?>
			</div>
		<?php endif; ?>

	<?php endif; /* End check if not move title bellow featured image */ ?>

	<div class="post-entry">
		<div class="inner-post-entry">
			<?php the_content(); ?>
			<?php wp_link_pages(); ?>
			<?php if ( ! get_theme_mod( 'penci_post_tags' ) && has_tag() ) : ?>
				<?php if ( is_single() ) : ?>
					<div class="post-tags">
						<?php the_tags( wp_kses( __( '', 'soledad' ), penci_allow_html() ), "", "" ); ?>
					</div>
				<?php endif; ?>
			<?php endif; ?>
		</div>
	</div>

	<?php if( get_theme_mod( 'penci_post_adsense_two' ) ): ?>
		<div class="penci-google-adsense-2">
			<?php echo get_theme_mod( 'penci_post_adsense_two' ); ?>
		</div>
	<?php endif; ?>

	<?php if( ! get_theme_mod( 'penci_single_meta_comment' ) || ! get_theme_mod( 'penci_post_share' ) ): ?>
		<div class="tags-share-box center-box">

			<?php if ( ! get_theme_mod( 'penci_single_meta_comment' ) ) : ?>
				<span class="single-comment-o<?php if ( get_theme_mod( 'penci_post_share' ) ) : echo ' hide-comments-o'; endif; ?>"><i class="fa fa-comment-o"></i><?php comments_number( esc_html__( '0 comment', 'soledad' ), esc_html__( '1 comment', 'soledad' ), '% ' . esc_html__( 'comments', 'soledad' ) ); ?></span>
			<?php endif; ?>

			<?php if ( ! get_theme_mod( 'penci_post_share' ) ) : ?>
				<div class="post-share">
					<?php echo penci_single_getPostLikeLink( get_the_ID() ); ?>
					<div class="list-posts-share">
						<?php
						$facebook_share  = 'https://www.facebook.com/sharer/sharer.php?u=' . get_the_permalink();
						$twitter_share   = 'https://twitter.com/home?status=Check%20out%20this%20article:%20' . get_the_title() . '%20-%20' . get_the_permalink();
						$google_share    = 'https://plus.google.com/share?url=' . get_the_permalink();
						$pinterest_image = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
						$pinterest_share = 'https://pinterest.com/pin/create/button/?url=' . get_the_permalink() . '&media=' . $pinterest_image . '&description=' . get_the_title();
						?>
						<a target="_blank" href="<?php echo esc_url( $facebook_share ); ?>"><i class="fa fa-facebook"></i><span class="dt-share"><?php esc_html_e( 'Facebook', 'soledad' ); ?></span></a>
						<a target="_blank" href="<?php echo esc_url( $twitter_share ); ?>"><i class="fa fa-twitter"></i><span class="dt-share"><?php esc_html_e( 'Twitter', 'soledad' ); ?></span></a>
						<a target="_blank" href="<?php echo esc_url( $google_share ); ?>"><i class="fa fa-google-plus"></i><span class="dt-share"><?php esc_html_e( 'Google +', 'soledad' ); ?></span></a>
						<a target="_blank" href="<?php echo esc_url( $pinterest_share ); ?>"><i class="fa fa-pinterest"></i><span class="dt-share"><?php esc_html_e( 'Pinterest', 'soledad' ); ?></span></a>
					</div>
				</div>
			<?php endif; ?>
		</div>
	<?php endif; ?>

	<?php if ( ! get_theme_mod( 'penci_post_author' ) ) : ?>
		<?php get_template_part( 'inc/templates/about_author' ); ?>
	<?php endif; ?>

	<?php if ( ! get_theme_mod( 'penci_post_nav' ) ) : ?>
		<?php get_template_part( 'inc/templates/post_pagination' ); ?>
	<?php endif; ?>

	<?php if ( ! get_theme_mod( 'penci_post_related' ) ) : ?>
		<?php get_template_part( 'inc/templates/related_posts' ); ?>
	<?php endif; ?>

	<?php if ( ! get_theme_mod( 'penci_post_hide_comments' ) ) : ?>
		<?php comments_template( '', true ); ?>
	<?php endif; ?>

</article>