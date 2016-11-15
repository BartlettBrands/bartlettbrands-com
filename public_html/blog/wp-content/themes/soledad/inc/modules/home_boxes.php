<?php
/**
 * Home boxes
 * Create 3 boxes in homepage
 * @since 1.0
 */
?>
<div class="container home-featured-boxes">
	<ul class="homepage-featured-boxes">
		<?php
		for ( $k = 1; $k < 4; $k ++ ) {
			$homepage_box_image = get_theme_mod( 'penci_home_box_img' . $k );
			$homepage_box_text  = get_theme_mod( 'penci_home_box_text' . $k );
			$homepage_box_url   = get_theme_mod( 'penci_home_box_url' . $k );
			if ( $homepage_box_image ):
				$open_url  = '';
				$close_url = '';
				if ( $homepage_box_url ) {
					$open_url  = '<a href="' . esc_url( $homepage_box_url ) . '">';
					$close_url = '</a>';
				}
				?>
				<li class="penci-featured-ct">
					<?php echo wp_kses( $open_url, penci_allow_html() ); ?>
					<div class="penci-fea-in<?php if( get_theme_mod( 'penci_home_box_style_2' ) ): echo ' boxes-style-2'; endif; ?>">
						<div class="fea-box-img" style="background-image: url(<?php echo esc_url( $homepage_box_image ); ?>);"></div>
						<?php if( $homepage_box_text ): ?>
						<h4><span class="boxes-text"><span><?php echo sanitize_text_field( $homepage_box_text ); ?></span></span></h4>
						<?php endif; ?>
					</div>
					<?php echo wp_kses( $close_url, penci_allow_html() ) ; ?>
				</li>
			<?php
			endif;
		}
		?>
	</ul>
</div>