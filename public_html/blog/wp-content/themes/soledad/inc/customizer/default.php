<?php
/**
 * Set some value default when theme is activated
 *
 * @since 1.0
 */

$penci_mod_defaults = array(
	'penci_top_bar_posts_per_page'        => '10',
	'penci_top_bar_custom_text'           => esc_html__( 'Top Posts', 'soledad' ),
	'penci_header_slogan_text'            => esc_html__( 'keep your memories alive', 'soledad' ),
	'penci_header_3_banner'               => get_stylesheet_directory_uri() . '/images/banner-770x90.jpg',
	'penci_header_3_banner_url'           => '#',
	'penci_sidebar_home'                  => true,
	'penci_sidebar_posts'                 => true,
	'penci_sidebar_archive'               => true,
	'penci_featured_slider_slides'        => '12',
	'penci_home_featured_posts_numbers_1' => '5',
	'penci_home_featured_posts_numbers_2' => '4',
	'penci_home_featured_posts_numbers_3' => '4',
	'penci_post_related_arrows'           => true,
	'penci_featured_slider_style'         => 'style-2',
	'penci_facebook'                      => '#',
	'penci_twitter'                       => '#',
	'penci_instagram'                     => '#',
	'penci_pinterest'                     => '#',
	'penci_footer_logo'                   => get_stylesheet_directory_uri() . '/images/footer-logo.png',
	'penci_footer_copyright'              => '@2016 - PenciDesign. All Right Reserved. Designed and Developed by <a href="http://themeforest.net/item/soledad-multiconcept-blogmagazine-wp-theme/12945398?ref=PenciDesign" target="_blank">PenciDesign</a>',
);


if ( ! get_option( 'penci_soledad_flag' ) ) {
	add_option( 'penci_soledad_flag', 'loaded' );

	$penci_mod_options       = get_option( 'theme_mods_soledad' );
	$penci_mod_options_child = get_option( 'theme_mods_soledad-child' );

	foreach ( $penci_mod_defaults as $k_mod => $v_mod ) {
		if ( ! isset( $penci_mod_options[$k_mod] ) ) {
			set_theme_mod( $k_mod, $v_mod );
		}
		if ( ! isset( $penci_mod_options_child[$k_mod] ) ) {
			set_theme_mod( $k_mod, $v_mod );
		}
	}
}