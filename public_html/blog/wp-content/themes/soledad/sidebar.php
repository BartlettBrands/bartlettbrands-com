<?php
/**
 * Main sidebar of Soledad theme
 * Display all widgets on right sidebar
 *
 * @package Wordpress
 * @since   1.0
 */

$sidebar_home = get_theme_mod( 'penci_sidebar_name_home' );
if ( ! isset( $sidebar_home ) || empty( $sidebar_home ) ):  $sidebar_home = 'main-sidebar'; endif;

$sidebar_single = get_theme_mod( 'penci_sidebar_name_single' );
if ( ! isset( $sidebar_single ) || empty( $sidebar_single ) ):  $sidebar_single = 'main-sidebar'; endif;

$sidebar_pages = get_theme_mod( 'penci_sidebar_name_pages' );
if ( ! isset( $sidebar_pages ) || empty( $sidebar_pages ) ):  $sidebar_pages = 'main-sidebar'; endif;

if( is_page() ) {
	$custom_sidebar_pages = get_post_meta( get_the_ID(), 'penci_custom_sidebar_page_display', true );
	if ( $custom_sidebar_pages ): $sidebar_pages = $custom_sidebar_pages; endif;
} elseif( is_single() ) {
	$custom_sidebar_post = get_post_meta( get_the_ID(), 'penci_custom_sidebar_page_display', true );
	if ( $custom_sidebar_post ): $sidebar_single = $custom_sidebar_post; endif;
}
?>

<div id="sidebar"<?php if ( get_theme_mod( 'penci_sidebar_sticky' ) ): echo ' class="penci-sticky-sidebar"'; endif; ?>>
	<div class="theiaStickySidebar">
		<?php /* Display sidebar */
		if( function_exists( 'is_shop' ) && function_exists( 'is_product_category' ) && function_exists( 'is_product_tag' ) && function_exists( 'is_product' ) ) {
			if( ( is_shop() || is_product_category() || is_product_tag() ) && is_active_sidebar( 'penci-shop-sidebar' ) ) {
				dynamic_sidebar( 'penci-shop-sidebar' );
			} else if( is_product() && is_active_sidebar( 'penci-shop-single' ) ) {
				dynamic_sidebar( 'penci-shop-single' );
			} else {
				if ( ( is_home() || is_front_page() ) && is_active_sidebar( $sidebar_home ) ) {
					dynamic_sidebar( $sidebar_home );
				}
				elseif ( is_single() && is_active_sidebar( $sidebar_single ) ) {
					dynamic_sidebar( $sidebar_single );
				}
				elseif ( is_page() && is_active_sidebar( $sidebar_pages )  ) {
					dynamic_sidebar( $sidebar_pages );
				}
				else {
					dynamic_sidebar( 'main-sidebar' );
				}
			}
		}
		else if ( ( is_home() || is_front_page() ) && is_active_sidebar( $sidebar_home ) ) {
			dynamic_sidebar( $sidebar_home );
		}
		elseif ( is_single() && is_active_sidebar( $sidebar_single ) ) {
			dynamic_sidebar( $sidebar_single );
		}
		elseif ( is_page() && is_active_sidebar( $sidebar_pages )  ) {
			dynamic_sidebar( $sidebar_pages );
		}
		else {
			dynamic_sidebar( 'main-sidebar' );
		}
		?>
	</div>
</div>