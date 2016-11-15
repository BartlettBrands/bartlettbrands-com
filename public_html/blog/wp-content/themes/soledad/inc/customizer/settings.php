<?php
/**
 * All settings in customizer go here
 *
 * @package Wordpress
 * @param object $wp_customize
 * @since   1.0
 */
function pencidesign_register_theme_customizer( $wp_customize ) {

	// Add Sections
	$wp_customize->add_section( 'pencidesign_new_section_custom_css', array(
		'title'       => 'Custom CSS',
		'description' => 'Add your custom CSS which will overwrite the theme CSS',
		'priority'    => 80,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_color_posts', array(
		'title'       => 'Colors for Single',
		'description' => '',
		'priority'    => 75,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_color_footer', array(
		'title'       => 'Colors for Footer',
		'description' => '',
		'priority'    => 70,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_color_sidebar', array(
		'title'       => 'Colors for Sidebar',
		'description' => '',
		'priority'    => 65,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_grid_masonry_layout', array(
		'title'       => 'Colors for Other Post Layouts',
		'description' => 'All options here for Grid Layout, List Layout, Masonry Layout, Boxed Layout, Magazine & Photography Layout',
		'priority'    => 62,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_standard_layout', array(
		'title'       => 'Colors for Standard & Classic Post Layouts',
		'description' => 'All options here for Standard Layout, Classic Layout and 1st Posts of 1st Standard & 1st Classic',
		'priority'    => 61,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_color_featured_slider', array(
		'title'       => 'Colors for Featured Slider',
		'description' => 'With Penci Slider Style, Please choose colors when you add new a slide',
		'priority'    => 60,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_vertical_nav', array(
		'title'       => 'Color for Mobile Nav',
		'description' => 'Resize browser width smaller to see change',
		'priority'    => 57,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_signup_header', array(
		'title'       => 'Colors for Header Sign-Up Form',
		'description' => 'All options here only for MailChimp Sign-Up Form on header. If you do not use MailChimp Sign-Up Form in header let ignore it',
		'priority'    => 56,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_color_topbar', array(
		'title'       => 'Colors for Header',
		'description' => '',
		'priority'    => 55,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_color_top_bar', array(
		'title'       => 'Colors for Top Bar',
		'description' => '',
		'priority'    => 52,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_color_home', array(
		'title'       => 'Colors for Homepage',
		'description' => '',
		'priority'    => 51,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_color_general', array(
		'title'       => 'Colors General',
		'description' => '',
		'priority'    => 50,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_woocommerce', array(
		'title'       => 'Woocommerce Options',
		'description' => 'If you do not use Woocommerce plugin, skip these options',
		'priority'    => 48,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_portfolio', array(
		'title'       => 'Portfolio Options',
		'description' => '',
		'priority'    => 47,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_not_found', array(
		'title'       => '404 Page Options',
		'description' => '',
		'priority'    => 46,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_footer', array(
		'title'       => 'Footer Options',
		'description' => '',
		'priority'    => 45,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_social', array(
		'title'       => 'Social Media Options',
		'description' => 'Enter full your social link ( include http:// or https:// on your link ), Icons will not show if left blank.',
		'priority'    => 40,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_page', array(
		'title'       => 'Page Options',
		'description' => '',
		'priority'    => 35,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_post', array(
		'title'       => 'Single Options',
		'description' => '',
		'priority'    => 30,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_grid', array(
		'title'       => 'Other Layouts Options',
		'description' => 'All options here for Grid Layout, Masonry Layout, List Layout and List Boxed Layout',
		'priority'    => 25,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_standard', array(
		'title'       => 'Standard & Classic Layouts Options',
		'description' => '',
		'priority'    => 20,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_featured_video', array(
		'title'       => 'Featured Video Background Options',
		'description' => '',
		'priority'    => 16,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_featured', array(
		'title'       => 'Featured Slider Options',
		'description' => '',
		'priority'    => 15,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_homepage', array(
		'title'       => 'Homepage Options',
		'description' => '',
		'priority'    => 10,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_logo_header', array(
		'title'       => 'Logo and Header Options',
		'description' => '',
		'priority'    => 5,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_topbar', array(
		'title'       => 'Topbar Options',
		'description' => '',
		'priority'    => 2,
	) );
	$wp_customize->add_section( 'pencidesign_new_section_general', array(
		'title'       => 'General Options',
		'description' => 'Before do anything with this theme, please check <a href="http://pencidesign.com/soledad/soledad-document/" target="_blank">the documentation</a> for this theme <a href="http://pencidesign.com/soledad/soledad-document/" target="_blank">here</a> to understand how to config this theme. It is short and easy to understand.',
		'priority'    => 1,
	) );


	/**
	 * Add settings
	 *
	 * @package Wordpress
	 */

	// General
	$wp_customize->add_setting( 'penci_favicon', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_setting( 'penci_body_boxed_layout', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_body_boxed_bg_color', array(
		'default'           => '#F5F5F5',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_body_boxed_bg_image', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_setting( 'penci_body_boxed_bg_repeat', array(
		'default'           => 'no-repeat',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_body_boxed_bg_attachment', array(
		'default'           => 'fixed',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_body_boxed_bg_size', array(
		'default'           => 'cover',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_home_layout', array(
		'default'           => 'standard',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_archive_layout', array(
		'default'           => 'standard',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_general_post_orderby', array(
		'default'           => 'date',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_general_post_order', array(
		'default'           => 'DESC',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_disable_breadcrumb', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_hide_latest_post_homepage', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_enable_smooth_scroll', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_page_navigation_numbers', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_page_navigation_align', array(
		'default'           => 'align-left',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_sidebar_sticky', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_sidebar_home', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_sidebar_posts', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_sidebar_archive', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_left_sidebar_home', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_left_sidebar_posts', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_left_sidebar_archive', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_remove_cat_words', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_font_for_title', array(
		'default'           => '"Raleway", "100:200:300:regular:500:600:700:800:900", sans-serif',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_font_weight_title', array(
		'default'           => 'normal',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_font_for_body', array(
		'default'           => '"PT Serif", "regular:italic:700:700italic", serif',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_font_for_size_body', array(
		'default'           => '14',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_sidebar_name_home', array(
		'default'           => 'main-sidebar',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_sidebar_name_single', array(
		'default'           => 'main-sidebar',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_sidebar_name_pages', array(
		'default'           => 'main-sidebar',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_enable_retina', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );

	// Top bar
	$wp_customize->add_setting( 'penci_top_bar_show', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_top_bar_custom_text', array(
		'default'           => esc_html__( 'Top Posts', 'soledad' ),
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_top_bar_category', array(
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_top_bar_posts_autoplay', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_top_bar_auto_time', array(
		'default'           => '3000',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_top_bar_auto_speed', array(
		'default'           => '300',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_top_bar_posts_per_page', array(
		'default'           => '10',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_top_bar_enable_menu', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_top_bar_off_uppercase', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_top_bar_off_uppercase_menu', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_top_bar_hide_social', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );

	// Header and logo
	$wp_customize->add_setting( 'penci_logo', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_setting( 'penci_logo_retina', array(
		'sanitize_callback' => 'esc_url_raw'
	) );

	$wp_customize->add_setting( 'penci_mobile_nav_logo', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_setting( 'penci_mobile_nav_logo_retina', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_setting( 'penci_header_padding', array(
		'default'           => '40',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_header_layout', array(
		'default'           => 'header-1',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_header_slogan_text', array(
		'default'           => 'keep your memories alive',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_header_3_banner', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_setting( 'penci_header_3_banner_url', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_setting( 'penci_header_3_adsense', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_textarea_field'
	) );
	$wp_customize->add_setting( 'penci_header_social_check', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_topbar_search_check', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_topbar_mega_date', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_off_uppercase_cat_mega', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_font_size_title_cat_mega', array(
		'default'           => '12',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_topbar_menu_uppercase', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_topbar_mega_hide_alltab', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_topbar_mega_icons', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_topbar_mega_category', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_header_logo_vertical', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_header_social_vertical', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );

	// Homepage
	$wp_customize->add_setting( 'penci_home_hide_boxes', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_home_box_style_2', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_home_box_img1', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_setting( 'penci_home_box_text1', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_home_box_url1', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_setting( 'penci_home_box_img2', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_setting( 'penci_home_box_text2', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_home_box_url2', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_setting( 'penci_home_box_img3', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_setting( 'penci_home_box_text3', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_home_box_url3', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_setting( 'penci_home_title', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_enable_home_popular_posts', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_lowcase_popular_posts', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_enable_home_popular_icons', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_home_featured_cat', array(
		'default'           => '',
		'sanitize_callback' => 'esc_textarea'
	) );
	$wp_customize->add_setting( 'penci_home_exclude_cat', array(
		'default'           => '',
		'sanitize_callback' => 'esc_textarea'
	) );
	$wp_customize->add_setting( 'penci_home_featured_cat_lowcase', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_home_featured_cat_author', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_home_featured_cat_date', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_home_featured_cat_icons', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_home_lastest_posts_numbers', array(
		'default'           => '10',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_home_featured_posts_numbers_1', array(
		'default'           => '5',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_home_featured_posts_numbers_2', array(
		'default'           => '4',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_home_featured_posts_numbers_3', array(
		'default'           => '4',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_home_featured_posts_numbers_4', array(
		'default'           => '6',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_home_featured_posts_numbers_5', array(
		'default'           => '6',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_home_featured_posts_numbers_6', array(
		'default'           => '5',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );

	// Featured slider
	$wp_customize->add_setting( 'penci_featured_slider', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_all_page', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_style', array(
		'default'           => 'style-1',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_featured_autoplay', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_auto_time', array(
		'default'           => '4000',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_auto_speed', array(
		'default'           => '600',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_featured_penci_slider_height', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_color_overlay_opacity', array(
		'default'           => '0',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_color_overlay', array(
		'default'           => '#000000',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_partent_overlay_opacity', array(
		'default'           => '0.05',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_featured_cat', array(
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_featured_cat_hide', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_exclude_featured_cat', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_featured_center_box', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_featured_hide_categories', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_featured_meta_comment', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_featured_meta_date', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_featured_meta_author', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_icons', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_slides', array(
		'default'           => '6',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );

	// Featured Video Background
	$wp_customize->add_setting( 'penci_enable_featured_video_bg', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_featured_video_img_mobile', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_setting( 'penci_featured_video_url', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_setting( 'penci_featured_video_height', array(
		'default'           => '600',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_featured_video_start', array(
		'default'           => '0',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_featured_video_audio', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_featured_video_image', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_setting( 'penci_featured_video_text_heading', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_featured_video_sub_heading', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_featured_video_heading_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_featured_video_sub_heading_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );

	// Standard Settings
	$wp_customize->add_setting( 'penci_standard_thumbnail', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_standard_off_uppercase_title', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_standard_share_box', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_standard_cat', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_standard_author', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_standard_date', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_standard_comment', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_standard_auto_excerpt', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_standard_effect_button', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );

	// Grid Settings
	$wp_customize->add_setting( 'penci_grid_icon_format', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_grid_off_title_uppercase', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_grid_share_box', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_grid_cat', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_grid_author', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_grid_date', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_grid_comment', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_post_excerpt_length', array(
		'default'           => 30,
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );


	// Single Settings
	$wp_customize->add_setting( 'penci_post_tags', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_post_author', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_post_related', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_post_related_text', array(
		'default'           => 'You may also like',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_post_related_icons', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_off_uppercase_post_title_related', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_hide_date_related', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_post_related_autoplay', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_post_related_dots', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_post_related_arrows', array(
		'default'           => true,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_numbers_related_post', array(
		'default'           => '10',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_post_hide_comments', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_image_height_gallery', array(
		'default'           => '150',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_post_adsense_one', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_textarea_field'
	) );
	$wp_customize->add_setting( 'penci_post_adsense_two', array(
		'default'           => '',
		'sanitize_callback' => 'penci_sanitize_textarea_field'
	) );
	$wp_customize->add_setting( 'penci_post_share', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_post_thumb', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_post_nav', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_post_nav_thumbnail', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_off_uppercase_post_title_nav', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_enable_single_style2', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_move_title_bellow', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_disable_lightbox_single', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_post_cat', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_off_uppercase_post_title', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_align_left_post_title', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_single_meta_author', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_single_meta_date', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_single_meta_comment', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );

	// Page Settings
	$wp_customize->add_setting( 'penci_page_comments', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_page_share', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_page_under_construction_time', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );

	// Social Media

	$wp_customize->add_setting( 'penci_facebook', array(
		'default'           => 'soledad',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_twitter', array(
		'default'           => 'soledad',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_instagram', array(
		'default'           => 'soledad',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_pinterest', array(
		'default'           => 'soledad',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_tumblr', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_tumblr', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_google', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_linkedin', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_flickr', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_behance', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_youtube', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_email_me', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_vk', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_bloglovin', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_setting( 'penci_rss', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );

	// Footer Options
	$wp_customize->add_setting( 'penci_footer_widget_area', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_footer_widget_title_center', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_footer_widget_padding', array(
		'default'           => '60',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_go_to_top', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_footer_social', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_hide_footer_logo', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_footer_logo', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_setting( 'penci_footer_copyright', array(
		'default'           => '@2016 - PenciDesign. All Right Reserved. Designed and Developed by PenciDesign',
		'sanitize_callback' => 'penci_sanitize_textarea_field'
	) );

	// 404 Page Options
	$wp_customize->add_setting( 'penci_not_found_image', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_setting( 'penci_not_found_sub_heading', array(
		'default'           => "OOPS! Page you're looking for doesn't exist. Please use search for help",
		'sanitize_callback' => 'penci_sanitize_textarea_field'
	) );
	$wp_customize->add_setting( 'penci_not_found_hide_search', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_not_found_hide_backhome', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );

	// Portfolio options
	$wp_customize->add_setting( 'penci_portfolio_cat_enable_sidebar', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_portfolio_layout', array(
		'default'           => 'masonry',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_portfolio_overlay_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_portfolio_overlay_opacity', array(
		'default'           => '0.85',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_portfolio_title_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_portfolio_cate_color', array(
		'default'           => '#888888',
		'sanitize_callback' => 'sanitize_hex_color'
	) );

	// Woocommerce options
	$wp_customize->add_setting( 'penci_woo_shop_hide_cart_icon', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_woo_shop_enable_sidebar', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_woo_cat_enable_sidebar', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_woo_single_enable_sidebar', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_woo_left_sidebar', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_woo_disable_breadcrumb', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_woo_paging_align', array(
		'default'           => 'center',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_woo_post_per_page', array(
		'default'           => '24',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_woo_number_related_products', array(
		'default'           => '4',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );


	// Color Options

	// Color general
	$wp_customize->add_setting( 'penci_color_accent', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );

	// Color Homepage
	$wp_customize->add_setting( 'penci_home_boxes_overlay', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_home_boxes_title_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_home_boxes_accent_hover_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_home_popular_label_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_home_popular_post_title_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_home_popular_post_title_hover_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_home_popular_post_date_color', array(
		'default'           => '#888888',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_home_title_box_bg', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_home_title_box_outer_bg', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_home_title_box_border_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_home_title_box_border_inner_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_home_title_box_text_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_home_remove_border_outer', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_home_remove_arrow_down', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_home_featured_title_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_home_featured_title_hover_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_home_featured_accent_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_home_featured3_overlay_color', array(
		'default'           => '#000000',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_home_featured3_overlay_opacity', array(
		'default'           => '0.15',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_home_featured3_overlay_hover_opacity', array(
		'default'           => '0.7',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_home_featured3_title_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_home_featured3_title_hover_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_home_featured3_meta_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );

	// Color Top Bar
	$wp_customize->add_setting( 'penci_top_bar_bg', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_top_bar_top_posts_bg', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_top_bar_top_posts_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_top_bar_button_color', array(
		'default'           => '#999999',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_top_bar_button_hover_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_top_bar_title_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_top_bar_title_hover_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_top_bar_menu_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_top_bar_menu_hover_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_top_bar_menu_border', array(
		'default'           => '#414141',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_top_bar_menu_dropdown_bg', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_top_bar_social_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_top_bar_social_hover_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );

	// Color Header
	$wp_customize->add_setting( 'penci_header_background_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_header_background_image', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_setting( 'penci_header_slogan_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_header_slogan_line_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_header_social_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_header_social_color_hover', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_main_bar_bg', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_main_bar_border_color', array(
		'default'           => '#ECECEC',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_main_bar_nav_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_main_bar_color_active', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_drop_bg_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_drop_items_border', array(
		'default'           => '#E0E0E0',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_drop_text_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_drop_text_hover_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_mega_bg_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_mega_child_cat_bg_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_mega_post_date_color', array(
		'default'           => '#999999',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_mega_post_category_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_mega_accent_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_main_bar_search_magnify', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_main_bar_close_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );

	// Header sign-up form
	$wp_customize->add_setting( 'penci_header_signup_padding', array(
		'default'           => '20',
		'sanitize_callback' => 'penci_sanitize_number_field'
	) );
	$wp_customize->add_setting( 'penci_header_signup_bg', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_header_signup_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_header_signup_input_border', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_header_signup_input_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_header_signup_submit_bg', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_header_signup_submit_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_header_signup_submit_bg_hover', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_header_signup_submit_color_hover', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );

	// Vertical Menu & Mobile Menu Color
	$wp_customize->add_setting( 'penci_ver_nav_overlay_color', array(
		'default'           => '#000000',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_ver_nav_close_bg', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_ver_nav_close_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_ver_nav_bg', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_ver_nav_accent_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_ver_nav_accent_hover_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_ver_nav_items_border', array(
		'default'           => '#DEDEDE',
		'sanitize_callback' => 'sanitize_hex_color'
	) );


	// Featured Slider
	$wp_customize->add_setting( 'penci_featured_slider_overlay_bg', array(
		'default'           => '#000000',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_overlay_bg_opacity', array(
		'default'           => '0',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_overlay_pattern_opacity', array(
		'default'           => '0',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_featured_mag2_overlay_opacity', array(
		'default'           => '0.05',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_featured_mag2_overlay_hover_opacity', array(
		'default'           => '0.7',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_box_bg_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_box_border_color', array(
		'default'           => '#DEDEDE',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_date_bg', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_date_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_cat_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_cat_hover_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_title_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_title_hover_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_meta_color', array(
		'default'           => '#888888',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_accent_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_featured_slider_arrows_accent', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_featured_slider4_line', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_magazine_slider_overlay_bg', array(
		'default'           => '#000000',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_magazine_slider_overlay_bg_opacity', array(
		'default'           => '0.6',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_magazine_slider_overlay_bg_hover_opacity', array(
		'default'           => '0.8',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );

	// Standard Layout Color
	$wp_customize->add_setting( 'penci_standard_categories_action_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_standard_title_post_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_standard_title_post_hover_color', array(
		'default'           => '#888888',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_standard_share_icon_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_standard_share_icon_hover_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_standard_accent_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );

	// Grid & Masonry Layout Color
	$wp_customize->add_setting( 'penci_masonry_categories_accent_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_masonry_title_post_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_masonry_title_post_hover_color', array(
		'default'           => '#888888',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_masonry_box_icon', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_masonry_box_icon_hover', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_masonry_accent_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_photography_overlay_color', array(
		'default'           => '#000000',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_photography_overlay_opacity', array(
		'default'           => '0.3',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_photography_overlay_hover_opacity', array(
		'default'           => '0.7',
		'sanitize_callback' => 'penci_sanitize_choices_field'
	) );
	$wp_customize->add_setting( 'penci_photography_categories_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_photography_title_post_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_photography_title_post_hover_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_photography_meta_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_photography_accent_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_overlay_title_post_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_overlay_title_post_hover_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_overlay_cat_post_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_overlay_cat_hover_post_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_overlay_author_post_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );

	// Footer
	$wp_customize->add_setting( 'penci_footer_widget_area_bg', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_widget_area_text_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_widget_area_list_border', array(
		'default'           => '#E0E0E0',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_widget_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_widget_title_border_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_widget_title_border_below_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_widget_accent_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_widget_accent_hover_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_icon_color', array(
		'default'           => '#999999',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_icon_hover_icon_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_icon_hover_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_social_text_color', array(
		'default'           => '#999999',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_social_hover_text_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_social_border_color', array(
		'default'           => '#4A4A4A',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_copyright_bg_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_copyright_bg_image', array(
		'sanitize_callback' => 'esc_url_raw'
	) );
	$wp_customize->add_setting( 'penci_footer_go_top_color', array(
		'default'           => '#999999',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_go_top_hover_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_copyright_text_color', array(
		'default'           => '#999999',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_footer_copyright_accent_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );

	// Sidebar color
	$wp_customize->add_setting( 'penci_sidebar_heading_lowcase', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_sidebar_heading_bg', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_sidebar_heading_outer_bg', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_sidebar_heading_border_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_sidebar_heading_border_inner_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_sidebar_heading_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_sidebar_remove_border_outer', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_sidebar_remove_arrow_down', array(
		'default'           => false,
		'sanitize_callback' => 'penci_sanitize_checkbox_field'
	) );
	$wp_customize->add_setting( 'penci_sidebar_accent_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_sidebar_accent_hover_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );

	// Single color
	$wp_customize->add_setting( 'penci_single_cat_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_single_title_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_single_share_icon_color', array(
		'default'           => '#313131',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_single_share_icon_hover_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_single_number_like_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
	$wp_customize->add_setting( 'penci_single_accent_color', array(
		'default'           => '#6eb48c',
		'sanitize_callback' => 'sanitize_hex_color'
	) );

	// Custom CSS
	$wp_customize->add_setting( 'penci_custom_css', array(
		'sanitize_callback' => 'penci_sanitize_textarea_field'
	) );


	/*= Add Control
	--------------------------------------------------------------------*/
	// General
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'upload_favicon', array(
		'label'    => 'Upload Favicon',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_favicon',
		'priority' => 1
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'body_boxed_layout', array(
		'label'    => 'Enable Body Boxed Layout',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_body_boxed_layout',
		'type'     => 'checkbox',
		'priority' => 2
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'body_boxed_bg_color', array(
		'label'    => 'Background Color for Body Boxed',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_body_boxed_bg_color',
		'priority' => 3
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'body_boxed_bg_image', array(
		'label'    => 'Background Image for Body Boxed',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_body_boxed_bg_image',
		'priority' => 4
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'body_boxed_bg_repeat', array(
		'label'    => 'Background Body Boxed Repeat',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_body_boxed_bg_repeat',
		'type'     => 'select',
		'priority' => 5,
		'choices'  => array(
			'no-repeat' => 'No Repeat',
			'repeat'    => 'Repeat'
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'body_boxed_bg_attachment', array(
		'label'    => 'Background Body Boxed Attachment',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_body_boxed_bg_attachment',
		'type'     => 'select',
		'priority' => 6,
		'choices'  => array(
			'fixed'  => 'Fixed',
			'scroll' => 'Scroll',
			'local'  => 'Local'
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'body_boxed_bg_size', array(
		'label'    => 'Background Body Boxed Size',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_body_boxed_bg_size',
		'type'     => 'select',
		'priority' => 7,
		'choices'  => array(
			'cover' => 'Cover',
			'auto'  => 'Auto',
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_layout', array(
		'label'    => 'Homepage Layout',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_home_layout',
		'type'     => 'radio',
		'priority' => 10,
		'choices'  => array(
			'standard'         => 'Standard Posts',
			'classic'          => 'Classic Posts',
			'overlay'          => 'Overlay Posts',
			'grid'             => 'Grid Posts',
			'grid-2'           => 'Grid 2 Columns Posts',
			'masonry'          => 'Grid Masonry Posts',
			'masonry-2'        => 'Grid Masonry 2 Columns Posts',
			'list'             => 'List Posts',
			'boxed-1'          => 'Boxed Posts Style 1',
			'boxed-2'          => 'Boxed Posts Style 2',
			'mixed'            => 'Mixed Posts',
			'mixed-2'          => 'Mixed Posts Style 2',
			'photography'      => 'Photography Posts',
			'magazine-1'       => 'Magazine Style 1',
			'magazine-2'       => 'Magazine Style 2',
			'standard-grid'    => '1st Standard Then Grid',
			'standard-grid-2'  => '1st Standard Then Grid 2 Columns',
			'standard-list'    => '1st Standard Then List',
			'standard-boxed-1' => '1st Standard Then Boxed',
			'classic-grid'     => '1st Classic Then Grid',
			'classic-grid-2'   => '1st Classic Then Grid 2 Columns',
			'classic-list'     => '1st Classic Then List',
			'classic-boxed-1'  => '1st Classic Then Boxed',
			'overlay-grid'     => '1st Overlay Then Grid',
			'overlay-list'     => '1st Overlay Then List'
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'archive_layout', array(
		'label'    => 'Category, Tag, Search, Archive Layout',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_archive_layout',
		'type'     => 'radio',
		'priority' => 15,
		'choices'  => array(
			'standard'         => 'Standard Posts',
			'classic'          => 'Classic Posts',
			'overlay'          => 'Overlay Posts',
			'grid'             => 'Grid Posts',
			'grid-2'           => 'Grid 2 Columns Posts',
			'masonry'          => 'Grid Masonry Posts',
			'masonry-2'        => 'Grid Masonry 2 Columns Posts',
			'list'             => 'List Posts',
			'boxed-1'          => 'Boxed Posts Style 1',
			'boxed-2'          => 'Boxed Posts Style 2',
			'mixed'            => 'Mixed Posts',
			'mixed-2'          => 'Mixed Posts Style 2',
			'photography'      => 'Photography Posts',
			'standard-grid'    => '1st Standard Then Grid',
			'standard-grid-2'  => '1st Standard Then Grid 2 Columns',
			'standard-list'    => '1st Standard Then List',
			'standard-boxed-1' => '1st Standard Then Boxed',
			'classic-grid'     => '1st Classic Then Grid',
			'classic-grid-2'   => '1st Classic Then Grid 2 Columns',
			'classic-list'     => '1st Classic Then List',
			'classic-boxed-1'  => '1st Classic Then Boxed',
			'overlay-grid'     => '1st Overlay Then Grid',
			'overlay-list'     => '1st Overlay Then List'
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'general_post_orderby', array(
		'label'    => 'Sort Posts By',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_general_post_orderby',
		'type'     => 'select',
		'priority' => 20,
		'choices'  => array(
			'date'    => 'Post Date',
			'ID' 	  => 'Post ID',
			'title'   => 'Post Title',
			'rand'    => 'Random Posts'
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'general_post_order', array(
		'label'    => 'Sort Order',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_general_post_order',
		'type'     => 'select',
		'priority' => 25,
		'choices'  => array(
			'DESC' => 'Descending',
			'ASC'  => 'Ascending '
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'enable_smooth_scroll', array(
		'label'    => 'Enable Smooth Scroll',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_enable_smooth_scroll',
		'type'     => 'checkbox',
		'priority' => 26
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hide_latest_post_homepage', array(
		'label'    => 'Hide Latest Posts On Homepage',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_hide_latest_post_homepage',
		'type'     => 'checkbox',
		'priority' => 26
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'disable_breadcrumb', array(
		'label'    => 'Disable Breadcrumb',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_disable_breadcrumb',
		'type'     => 'checkbox',
		'priority' => 26
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_navigation_numbers', array(
		'label'    => 'Enable Page Navigation Numbers',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_page_navigation_numbers',
		'type'     => 'checkbox',
		'priority' => 27
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_navigation_align', array(
		'label'    => 'Page Navigation Numbers Alignment',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_page_navigation_align',
		'type'     => 'select',
		'priority' => 28,
		'choices'  => array(
			'align-left'   => 'Left',
			'align-right'  => 'Right',
			'align-center' => 'Center',
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_sticky', array(
		'label'    => 'Enable Sticky Sidebar',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_sidebar_sticky',
		'type'     => 'checkbox',
		'priority' => 29
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_home', array(
		'label'    => 'Enable Sidebar On Homepage',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_sidebar_home',
		'type'     => 'checkbox',
		'priority' => 30
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_posts', array(
		'label'    => 'Enable Sidebar On Single',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_sidebar_posts',
		'type'     => 'checkbox',
		'priority' => 31
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_archive', array(
		'label'    => 'Enable Sidebar On Archives',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_sidebar_archive',
		'type'     => 'checkbox',
		'priority' => 32
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'left_sidebar_home', array(
		'label'    => 'Enable Left Sidebar On Homepage',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_left_sidebar_home',
		'type'     => 'checkbox',
		'priority' => 33
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'left_sidebar_posts', array(
		'label'    => 'Enable Left Sidebar On Single',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_left_sidebar_posts',
		'type'     => 'checkbox',
		'priority' => 34
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'left_sidebar_archive', array(
		'label'    => 'Enable Left Sidebar On Archives',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_left_sidebar_archive',
		'type'     => 'checkbox',
		'priority' => 35
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'remove_cat_words', array(
		'label'    => 'Remove "Category:" Words on Category Page',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_remove_cat_words',
		'type'     => 'checkbox',
		'priority' => 40
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'font_for_title', array(
		'label'       => 'Font For Title',
		'section'     => 'pencidesign_new_section_general',
		'settings'    => 'penci_font_for_title',
		'description' => 'Default font is "Raleway"',
		'type'        => 'select',
		'priority'    => 41,
		'choices'     => penci_all_fonts()
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'font_weight_title', array(
		'label'       => 'Font Weight For Title',
		'section'     => 'pencidesign_new_section_general',
		'settings'    => 'penci_font_weight_title',
		'type'        => 'select',
		'priority'    => 42,
		'choices'     => array(
			'normal'  => 'Normal',
			'bold'    => 'Bold',
			'bolder'  => 'Bolder',
			'lighter' => 'Lighter',
			'100'     => '100',
			'200'     => '200',
			'300'     => '300',
			'400'     => '400',
			'500'     => '500',
			'600'     => '600',
			'700'     => '700',
			'800'     => '800',
			'900'     => '900'
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'font_for_body', array(
		'label'       => 'Font For Body Text',
		'section'     => 'pencidesign_new_section_general',
		'settings'    => 'penci_font_for_body',
		'description' => 'Default font is "PT Serif"',
		'type'        => 'select',
		'priority'    => 43,
		'choices'     => penci_all_fonts()
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'font_for_size_body', array(
		'label'    => 'Custom Size Of Fonts in Posts (Numeric value only, unit is pixel)',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_font_for_size_body',
		'type'     => 'number',
		'priority' => 44
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_name_home', array(
		'label'       => 'Sidebar for Homepage',
		'section'     => 'pencidesign_new_section_general',
		'settings'    => 'penci_sidebar_name_home',
		'description' => 'If sidebar your choice is empty, will display Main Sidebar',
		'type'        => 'select',
		'priority'    => 45,
		'choices'     => array(
			'main-sidebar'     => 'Main Sidebar',
			'custom-sidebar-1' => 'Custom Sidebar 1',
			'custom-sidebar-2' => 'Custom Sidebar 2',
			'custom-sidebar-3' => 'Custom Sidebar 3',
			'custom-sidebar-4' => 'Custom Sidebar 4',
			'custom-sidebar-5' => 'Custom Sidebar 5',
			'custom-sidebar-6' => 'Custom Sidebar 6'
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_name_single', array(
		'label'       => 'Sidebar for Single',
		'section'     => 'pencidesign_new_section_general',
		'settings'    => 'penci_sidebar_name_single',
		'description' => 'If sidebar your choice is empty, will display Main Sidebar',
		'type'        => 'select',
		'priority'    => 50,
		'choices'     => array(
			'main-sidebar'     => 'Main Sidebar',
			'custom-sidebar-1' => 'Custom Sidebar 1',
			'custom-sidebar-2' => 'Custom Sidebar 2',
			'custom-sidebar-3' => 'Custom Sidebar 3',
			'custom-sidebar-4' => 'Custom Sidebar 4',
			'custom-sidebar-5' => 'Custom Sidebar 5',
			'custom-sidebar-6' => 'Custom Sidebar 6'
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_name_pages', array(
		'label'       => 'Sidebar for Pages',
		'section'     => 'pencidesign_new_section_general',
		'settings'    => 'penci_sidebar_name_pages',
		'description' => 'If sidebar your choice is empty, will display Main Sidebar',
		'type'        => 'select',
		'priority'    => 55,
		'choices'     => array(
			'main-sidebar'     => 'Main Sidebar',
			'custom-sidebar-1' => 'Custom Sidebar 1',
			'custom-sidebar-2' => 'Custom Sidebar 2',
			'custom-sidebar-3' => 'Custom Sidebar 3',
			'custom-sidebar-4' => 'Custom Sidebar 4',
			'custom-sidebar-5' => 'Custom Sidebar 5',
			'custom-sidebar-6' => 'Custom Sidebar 6'
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'enable_retina', array(
		'label'    => 'Enable Retina',
		'section'  => 'pencidesign_new_section_general',
		'settings' => 'penci_enable_retina',
		'type'     => 'checkbox',
		'priority' => 60
	) ) );

	// Top bar options
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'top_bar_show', array(
		'label'    => 'Enable Top Bar',
		'section'  => 'pencidesign_new_section_topbar',
		'settings' => 'penci_top_bar_show',
		'type'     => 'checkbox',
		'priority' => 1
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'top_bar_custom_text', array(
		'label'       => 'Custom "Top Posts" Text',
		'section'     => 'pencidesign_new_section_topbar',
		'settings'    => 'penci_top_bar_custom_text',
		'description' => 'If you want hide Top Posts text, let empty this',
		'type'        => 'text',
		'priority'    => 4
	) ) );
	$wp_customize->add_control( new WP_Customize_Category_Control( $wp_customize, 'top_bar_category', array(
		'label'    => 'Select "Top Posts" Category',
		'section'  => 'pencidesign_new_section_topbar',
		'settings' => 'penci_top_bar_category',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'top_bar_posts_autoplay', array(
		'label'    => 'Disable Auto Play Posts on Top Bar',
		'section'  => 'pencidesign_new_section_topbar',
		'settings' => 'penci_top_bar_posts_autoplay',
		'type'     => 'checkbox',
		'priority' => 6
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'top_bar_auto_time', array(
		'label'       => 'Custom Auto Time Play Posts',
		'section'     => 'pencidesign_new_section_topbar',
		'settings'    => 'penci_top_bar_auto_time',
		'description' => 'Numeric value only, 1000 = 1 second',
		'type'        => 'number',
		'priority'    => 7
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'top_bar_auto_speed', array(
		'label'       => 'Custom Auto Time Auto Speed',
		'section'     => 'pencidesign_new_section_topbar',
		'settings'    => 'penci_top_bar_auto_speed',
		'description' => 'Numeric value only, 1000 = 1 second',
		'type'        => 'number',
		'priority'    => 8
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'top_bar_posts_per_page', array(
		'label'    => 'Amount of Posts Display on Top Bar',
		'section'  => 'pencidesign_new_section_topbar',
		'settings' => 'penci_top_bar_posts_per_page',
		'type'     => 'number',
		'priority' => 10
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'top_bar_enable_menu', array(
		'label'    => 'Enable Topbar Menu',
		'section'  => 'pencidesign_new_section_topbar',
		'settings' => 'penci_top_bar_enable_menu',
		'type'     => 'checkbox',
		'priority' => 11
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'top_bar_off_uppercase', array(
		'label'    => 'Turn Off Uppercase Posts Title in Top Bar',
		'section'  => 'pencidesign_new_section_topbar',
		'settings' => 'penci_top_bar_off_uppercase',
		'type'     => 'checkbox',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'top_bar_off_uppercase_menu', array(
		'label'    => 'Turn Off Uppercase on Topbar Menu',
		'section'  => 'pencidesign_new_section_topbar',
		'settings' => 'penci_top_bar_off_uppercase_menu',
		'type'     => 'checkbox',
		'priority' => 16
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'top_bar_hide_social', array(
		'label'    => 'Hide Social Icons in Top Bar',
		'section'  => 'pencidesign_new_section_topbar',
		'settings' => 'penci_top_bar_hide_social',
		'type'     => 'checkbox',
		'priority' => 20
	) ) );

	// Header and Logo
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'upload_logo', array(
		'label'    => 'Upload Logo',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_logo',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'upload_logo_retina', array(
		'label'    => 'Upload Logo (Retina Version)',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_logo_retina',
		'priority' => 10
	) ) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'upload_mobile_nav_logo', array(
		'label'    => 'Logo for Vertical & Mobile Nav',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_mobile_nav_logo',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'upload_mobile_nav_logo_retina', array(
		'label'    => 'Logo for Vertical & Mobile Nav (Retina Version)',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_mobile_nav_logo_retina',
		'priority' => 20
	) ) );

	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'header_padding', array(
		'label'    => 'Logo Header Padding Top & Bottom',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_header_padding',
		'type'     => 'number',
		'priority' => 25
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'topbar_layout', array(
		'label'    => 'Header Layout',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_header_layout',
		'type'     => 'radio',
		'priority' => 30,
		'choices'  => array(
			'header-1' => 'Header 1',
			'header-2' => 'Header 2',
			'header-3' => 'Header 3',
			'header-4' => 'Header 4',
			'header-5' => 'Header 5',
			'header-6' => 'Header 6',
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_slogan_text', array(
		'label'       => 'Header Slogan Text',
		'section'     => 'pencidesign_new_section_logo_header',
		'settings'    => 'penci_header_slogan_text',
		'description' => 'If you want hide heading, let empty this',
		'type'        => 'text',
		'priority'    => 32
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_3_banner', array(
		'label'       => 'Banner Header Right For Header 3',
		'section'     => 'pencidesign_new_section_logo_header',
		'settings'    => 'penci_header_3_banner',
		'description' => 'You should choose banner with 728px width and 90px - 100px height for the best result',
		'priority'    => 33
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_3_banner_url', array(
		'label'       => 'Link When Click Banner Header Right For Header 3',
		'section'     => 'pencidesign_new_section_logo_header',
		'settings'    => 'penci_header_3_banner_url',
		'description' => '',
		'type'        => 'text',
		'priority'    => 34
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_3_adsense', array(
		'label'       => 'Google adsense code to display in header 3',
		'section'     => 'pencidesign_new_section_logo_header',
		'settings'    => 'penci_header_3_adsense',
		'description' => 'If you want use google adsense code in header style 3, paste your google adsense code here',
		'type'        => 'textarea',
		'priority'    => 34
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'topbar_social_check', array(
		'label'    => 'Disable Header Social Icons',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_header_social_check',
		'type'     => 'checkbox',
		'priority' => 35
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'topbar_menu_uppercase', array(
		'label'    => 'Turn Off Uppercase on Menu items',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_topbar_menu_uppercase',
		'type'     => 'checkbox',
		'priority' => 36
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'topbar_mega_hide_alltab', array(
		'label'    => 'Hide "All" tab in Category Mega Menu',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_topbar_mega_hide_alltab',
		'type'     => 'checkbox',
		'priority' => 36
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'topbar_mega_icons', array(
		'label'    => 'Enable Post Format Icons on Category Mega Menu',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_topbar_mega_icons',
		'type'     => 'checkbox',
		'priority' => 36
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'topbar_mega_category', array(
		'label'    => 'Hide Post Category On Top Left Thumbnail Of Mega Menu',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_topbar_mega_category',
		'type'     => 'checkbox',
		'priority' => 36
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'topbar_mega_date', array(
		'label'    => 'Hide Post Date On Mega Menu',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_topbar_mega_date',
		'type'     => 'checkbox',
		'priority' => 37
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'off_uppercase_cat_mega', array(
		'label'    => 'Turn Off Uppercase Posts Title On Category Mega Menu',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_off_uppercase_cat_mega',
		'type'     => 'checkbox',
		'priority' => 38
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'font_size_title_cat_mega', array(
		'label'    => 'Custom Font Size for Posts Title On Category Mega Menu',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_font_size_title_cat_mega',
		'type'     => 'number',
		'priority' => 39
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'topbar_search_check', array(
		'label'    => 'Disable Header Search',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_topbar_search_check',
		'type'     => 'checkbox',
		'priority' => 40
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_logo_vertical', array(
		'label'    => 'Disable Logo on Mobile Nav',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_header_logo_vertical',
		'type'     => 'checkbox',
		'priority' => 45
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_social_vertical', array(
		'label'    => 'Disable Social Icons on Mobile Nav',
		'section'  => 'pencidesign_new_section_logo_header',
		'settings' => 'penci_header_social_vertical',
		'type'     => 'checkbox',
		'priority' => 50
	) ) );

	// Homepage Options
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_hide_boxes', array(
		'label'    => 'Hide Home Featured Boxes',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_hide_boxes',
		'type'     => 'checkbox',
		'priority' => 1
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_box_style_2', array(
		'label'    => 'Enable Home Featured Box Style 2',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_box_style_2',
		'type'     => 'checkbox',
		'priority' => 2
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'home_box_img1', array(
		'label'       => 'Homepage Featured Box 1st Image',
		'section'     => 'pencidesign_new_section_homepage',
		'description' => 'You just need choose image for this option with the width is 500px',
		'settings'    => 'penci_home_box_img1',
		'priority'    => 3
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_box_text1', array(
		'label'    => 'Homepage Featured Box 1st Text',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_box_text1',
		'type'     => 'text',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_box_url1', array(
		'label'    => 'Homepage Featured Box 1st URL',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_box_url1',
		'type'     => 'text',
		'priority' => 10
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'home_box_img2', array(
		'label'       => 'Homepage Featured Box 2nd Image',
		'section'     => 'pencidesign_new_section_homepage',
		'settings'    => 'penci_home_box_img2',
		'description' => 'You just need choose image for this option with the width is 500px',
		'priority'    => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_box_text2', array(
		'label'    => 'Homepage Featured Box 2nd Text',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_box_text2',
		'type'     => 'text',
		'priority' => 20
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_box_url2', array(
		'label'    => 'Homepage Featured Box 2nd URL',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_box_url2',
		'type'     => 'text',
		'priority' => 25
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'home_box_img3', array(
		'label'       => 'Homepage Featured Box 3rd Image',
		'section'     => 'pencidesign_new_section_homepage',
		'settings'    => 'penci_home_box_img3',
		'description' => 'You just need choose image for this option with the width is 500px',
		'priority'    => 30
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_box_text3', array(
		'label'    => 'Homepage Featured Box 3rd Text',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_box_text3',
		'type'     => 'text',
		'priority' => 35
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_box_url3', array(
		'label'    => 'Homepage Featured Box 3rd URL',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_box_url3',
		'type'     => 'text',
		'priority' => 40
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'grid_title', array(
		'label'       => 'Heading Latest Post for Homepage',
		'section'     => 'pencidesign_new_section_homepage',
		'settings'    => 'penci_home_title',
		'description' => 'If you want hide slogan, let empty this',
		'type'        => 'text',
		'priority'    => 45
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'enable_home_popular_posts', array(
		'label'    => 'Enable Popular Posts on HomePage',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_enable_home_popular_posts',
		'type'     => 'checkbox',
		'priority' => 46
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'lowcase_popular_posts', array(
		'label'    => 'Turn Off Uppercase Posts Title for Popular Posts on HomePage',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_lowcase_popular_posts',
		'type'     => 'checkbox',
		'priority' => 47
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'enable_home_popular_icons', array(
		'label'    => 'Enable Post Format Icons on Homepage Popular Posts',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_enable_home_popular_icons',
		'type'     => 'checkbox',
		'priority' => 48
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_exclude_cat', array(
		'label'       => 'Exclude specific categories from latest posts on Homepage',
		'section'     => 'pencidesign_new_section_homepage',
		'settings'    => 'penci_home_exclude_cat',
		'description' => 'Example: if you do not want all posts in categories: Fashion, Life Style show on your latest posts on homepage. You can fill slug of the categories here: fashion, life-style. You can see <a href="http://pencidesign.com/soledad/soledad-document/assets/images/magazine-2.png" target="_blank">this image</a> to understand what is slug',
		'type'        => 'textarea',
		'priority'    => 49
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_featured_cat', array(
		'label'       => 'List Featured Categories for Magazine Layouts',
		'section'     => 'pencidesign_new_section_homepage',
		'settings'    => 'penci_home_featured_cat',
		'description' => 'This option only for Homepage Magazine(style 1 and style 2) layout, copy and paste categories slug you want display above Latest Posts here. Example: You want display categories "Life Style, Travel, Music" above Latest Posts, fill categories slug like "life-style, travel, music"',
		'type'        => 'textarea',
		'priority'    => 50
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_featured_cat_lowcase', array(
		'label'    => 'Turn Off Uppercase for Heading Latest Posts & Featured Categories Heading',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_featured_cat_lowcase',
		'type'     => 'checkbox',
		'priority' => 51
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_featured_cat_author', array(
		'label'    => 'Hide Post Author on Featured Categories on Magazine Layouts',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_featured_cat_author',
		'type'     => 'checkbox',
		'priority' => 55
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_featured_cat_date', array(
		'label'    => 'Hide Post Date on Featured Categories on Magazine Layouts',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_featured_cat_date',
		'type'     => 'checkbox',
		'priority' => 56
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_featured_cat_icons', array(
		'label'    => 'Enable Post Format Icons on Featured Categories in Magazine Layouts',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_featured_cat_icons',
		'type'     => 'checkbox',
		'priority' => 60
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'home_lastest_posts_numbers', array(
		'label'    => 'Custom Amount of Posts Shown Per Page on Homepage',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_lastest_posts_numbers',
		'type'     => 'number',
		'priority' => 61
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'home_featured_posts_numbers_1', array(
		'label'    => 'Amount of Posts Display on Featured Categories Style 1 with Magazine Layout',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_featured_posts_numbers_1',
		'type'     => 'number',
		'priority' => 65
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'home_featured_posts_numbers_2', array(
		'label'    => 'Amount of Posts Display on Featured Categories Style 2 with Magazine Layout',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_featured_posts_numbers_2',
		'type'     => 'number',
		'priority' => 70
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'home_featured_posts_numbers_3', array(
		'label'    => 'Amount of Posts Display on Featured Categories Style 3 with Magazine Layout',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_featured_posts_numbers_3',
		'type'     => 'number',
		'priority' => 75
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'home_featured_posts_numbers_4', array(
		'label'    => 'Amount of Posts Display on Featured Categories Single Slider Style with Magazine Layout',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_featured_posts_numbers_4',
		'type'     => 'number',
		'priority' => 80
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'home_featured_posts_numbers_5', array(
		'label'    => 'Amount of Posts Display on Featured Categories Slider 2 Columns Style with Magazine Layout',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_featured_posts_numbers_5',
		'type'     => 'number',
		'priority' => 85
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'home_featured_posts_numbers_6', array(
		'label'    => 'Amount of Posts Display on Featured Categories Style 6 with Magazine Layout',
		'section'  => 'pencidesign_new_section_homepage',
		'settings' => 'penci_home_featured_posts_numbers_6',
		'type'     => 'number',
		'priority' => 85
	) ) );

	// Featured slider
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_slider', array(
		'label'    => 'Enable Featured Slider',
		'section'  => 'pencidesign_new_section_featured',
		'settings' => 'penci_featured_slider',
		'type'     => 'checkbox',
		'priority' => 1
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_slider_all_page', array(
		'label'    => 'Enable Featured Slider on All Page',
		'section'  => 'pencidesign_new_section_featured',
		'settings' => 'penci_featured_slider_all_page',
		'type'     => 'checkbox',
		'priority' => 2
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_slider_style', array(
		'label'       => 'Featured Slider Style',
		'section'     => 'pencidesign_new_section_featured',
		'settings'    => 'penci_featured_slider_style',
		'description' => 'If you choose Penci Slider, you need have posts in "Penci Slider" post type',
		'type'        => 'radio',
		'priority'    => 5,
		'choices'     => array(
			'style-1' => 'Posts Featured Slider Style 1',
			'style-2' => 'Posts Featured Slider Style 2',
			'style-3' => 'Posts Featured Slider Style 3',
			'style-7' => 'Posts Featured Slider Style 4',
			'style-4' => 'Penci Slider Style 1',
			'style-5' => 'Penci Slider Style 2',
			'style-6' => 'Magazine Slider Style',
			'style-8' => 'Magazine Slider Style 2',
			'style-9' => 'Magazine Slider Style 3'
		)
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'featured_slider_slides', array(
		'label'    => 'Amount of Slides',
		'section'  => 'pencidesign_new_section_featured',
		'settings' => 'penci_featured_slider_slides',
		'type'     => 'number',
		'priority' => 6
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_autoplay', array(
		'label'    => 'Enable Auto Play Slider',
		'section'  => 'pencidesign_new_section_featured',
		'settings' => 'penci_featured_autoplay',
		'type'     => 'checkbox',
		'priority' => 10
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'featured_slider_auto_time', array(
		'label'    => 'Featured Slider Auto Time',
		'section'  => 'pencidesign_new_section_featured',
		'settings' => 'penci_featured_slider_auto_time',
		'description' => 'Numeric value only, 1000 = 1 second',
		'type'     => 'number',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'featured_slider_auto_speed', array(
		'label'    => 'Featured Slider Auto Speed',
		'section'  => 'pencidesign_new_section_featured',
		'settings' => 'penci_featured_slider_auto_speed',
		'description' => 'Numeric value only, 1000 = 1 second',
		'type'     => 'number',
		'priority' => 20
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'featured_penci_slider_height', array(
		'label'    => 'Featured Penci Slider Height',
		'section'  => 'pencidesign_new_section_featured',
		'settings' => 'penci_featured_penci_slider_height',
		'description' => 'Numeric value only, unit is pixel, if you not want fixed height, let empty or fill "0" for it',
		'type'     => 'number',
		'priority' => 25
	) ) );
	$wp_customize->add_control( new WP_Customize_Category_Control( $wp_customize, 'featured_cat', array(
		'label'    => 'Select Featured Category',
		'settings' => 'penci_featured_cat',
		'section'  => 'pencidesign_new_section_featured',
		'priority' => 30
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_cat_hide', array(
		'label'    => 'Hide Featured Category',
		'section'  => 'pencidesign_new_section_featured',
		'settings' => 'penci_featured_cat_hide',
		'description' => 'Check this if you want the featured category to be hide on all pages.',
		'type'     => 'checkbox',
		'priority' => 35
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'exclude_featured_cat', array(
		'label'    => 'Exclude All Posts In Featured Category In Latest Posts on Homepage',
		'section'  => 'pencidesign_new_section_featured',
		'settings' => 'penci_exclude_featured_cat',
		'type'     => 'checkbox',
		'priority' => 36
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_center_box', array(
		'label'    => 'Hide Center Box on Featured Slider',
		'section'  => 'pencidesign_new_section_featured',
		'settings' => 'penci_featured_center_box',
		'type'     => 'checkbox',
		'priority' => 40
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_meta_date', array(
		'label'    => 'Hide Post Date',
		'section'  => 'pencidesign_new_section_featured',
		'settings' => 'penci_featured_meta_date',
		'type'     => 'checkbox',
		'priority' => 41
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_hide_categories', array(
		'label'    => 'Hide Categories Of Post',
		'section'  => 'pencidesign_new_section_featured',
		'settings' => 'penci_featured_hide_categories',
		'description' => '',
		'type'     => 'checkbox',
		'priority' => 42
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_meta_comment', array(
		'label'    => 'Hide Post Number Comments',
		'section'  => 'pencidesign_new_section_featured',
		'settings' => 'penci_featured_meta_comment',
		'type'     => 'checkbox',
		'priority' => 45
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_meta_author', array(
		'label'    => 'Hide Post Author',
		'section'  => 'pencidesign_new_section_featured',
		'settings' => 'penci_featured_meta_author',
		'type'     => 'checkbox',
		'priority' => 55
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_slider_icons', array(
		'label'    => 'Hide Post Format Icon on Magazine Slider Style 2',
		'section'  => 'pencidesign_new_section_featured',
		'settings' => 'penci_featured_slider_icons',
		'type'     => 'checkbox',
		'priority' => 56
	) ) );

	// Video background
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'enable_featured_video_bg', array(
		'label'    => 'Enable Featured Video Background',
		'section'  => 'pencidesign_new_section_featured_video',
		'settings' => 'penci_enable_featured_video_bg',
		'type'     => 'checkbox',
		'priority' => 1
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'featured_video_img_mobile', array(
		'label'       => 'Background Image Display Replace Video On Tablet & Mobile',
		'section'     => 'pencidesign_new_section_featured_video',
		'settings'    => 'penci_featured_video_img_mobile',
		'description' => 'Video background not support play on tablet & mobile. So, you should choose an image to display replace video background when your site is on tablet & mobile',
		'priority'    => 2
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_video_url', array(
		'label'    => 'Video Youtube URL',
		'section'  => 'pencidesign_new_section_featured_video',
		'settings' => 'penci_featured_video_url',
		'type'     => 'text',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'featured_video_height', array(
		'label'    => 'Featured Video Background Height',
		'section'  => 'pencidesign_new_section_featured_video',
		'settings' => 'penci_featured_video_height',
		'type'     => 'number',
		'priority' => 7
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'featured_video_start', array(
		'label'    => 'Start Video At (Unit is second)',
		'section'  => 'pencidesign_new_section_featured_video',
		'settings' => 'penci_featured_video_start',
		'type'     => 'number',
		'priority' => 8
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_video_audio', array(
		'label'    => 'Enable Audio of Video',
		'section'  => 'pencidesign_new_section_featured_video',
		'settings' => 'penci_featured_video_audio',
		'type'     => 'checkbox',
		'priority' => 10
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'featured_video_image', array(
		'label'    => 'Add Custom Image on Video Background',
		'section'  => 'pencidesign_new_section_featured_video',
		'settings' => 'penci_featured_video_image',
		'priority' => 12
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_video_text_heading', array(
		'label'    => 'Heading Text On Video Background',
		'section'  => 'pencidesign_new_section_featured_video',
		'settings' => 'penci_featured_video_text_heading',
		'type'     => 'text',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_video_sub_heading', array(
		'label'    => 'Sub Heading Text On Video Background',
		'section'  => 'pencidesign_new_section_featured_video',
		'settings' => 'penci_featured_video_sub_heading',
		'type'     => 'textarea',
		'priority' => 20
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'featured_video_heading_color', array(
		'label'    => 'Heading Text Color',
		'section'  => 'pencidesign_new_section_featured_video',
		'settings' => 'penci_featured_video_heading_color',
		'priority' => 25
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'featured_video_sub_heading_color', array(
		'label'    => 'Sub Heading Text Color',
		'section'  => 'pencidesign_new_section_featured_video',
		'settings' => 'penci_featured_video_sub_heading_color',
		'priority' => 30
	) ) );

	// Standard Post Layout Settings
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'standard_thumbnail', array(
		'label'    => 'Hide Post Thumbnail',
		'section'  => 'pencidesign_new_section_standard',
		'settings' => 'penci_standard_thumbnail',
		'type'     => 'checkbox',
		'priority' => 2
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'standard_off_uppercase_title', array(
		'label'    => 'Turn Off Uppercase in Post Title',
		'section'  => 'pencidesign_new_section_standard',
		'settings' => 'penci_standard_off_uppercase_title',
		'type'     => 'checkbox',
		'priority' => 3
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'standard_share_box', array(
		'label'    => 'Hide Share Icons',
		'section'  => 'pencidesign_new_section_standard',
		'settings' => 'penci_standard_share_box',
		'type'     => 'checkbox',
		'priority' => 4
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'standard_cat', array(
		'label'    => 'Hide Category',
		'section'  => 'pencidesign_new_section_standard',
		'settings' => 'penci_standard_cat',
		'type'     => 'checkbox',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'standard_author', array(
		'label'    => 'Hide Post Author',
		'section'  => 'pencidesign_new_section_standard',
		'settings' => 'penci_standard_author',
		'type'     => 'checkbox',
		'priority' => 10
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'standard_date', array(
		'label'    => 'Hide Post Date',
		'section'  => 'pencidesign_new_section_standard',
		'settings' => 'penci_standard_date',
		'type'     => 'checkbox',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'standard_comment', array(
		'label'    => 'Hide Comment Count',
		'section'  => 'pencidesign_new_section_standard',
		'settings' => 'penci_standard_comment',
		'type'     => 'checkbox',
		'priority' => 20
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'standard_auto_excerpt', array(
		'label'    => 'Auto Render Post Excerpt',
		'section'  => 'pencidesign_new_section_standard',
		'settings' => 'penci_standard_auto_excerpt',
		'type'     => 'checkbox',
		'priority' => 25
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'standard_effect_button', array(
		'label'    => 'Disable Hover Effect Button "Continue Reading"',
		'section'  => 'pencidesign_new_section_standard',
		'settings' => 'penci_standard_effect_button',
		'type'     => 'checkbox',
		'priority' => 30
	) ) );

	// Grid & Masonry Post Layout Settings
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'grid_icon_format', array(
		'label'    => 'Hide Icon Post Format',
		'section'  => 'pencidesign_new_section_grid',
		'settings' => 'penci_grid_icon_format',
		'type'     => 'checkbox',
		'priority' => 1
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'grid_off_title_uppercase', array(
		'label'    => 'Turn Off Uppercase in Post Title',
		'section'  => 'pencidesign_new_section_grid',
		'settings' => 'penci_grid_off_title_uppercase',
		'type'     => 'checkbox',
		'priority' => 2
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'grid_share_box', array(
		'label'    => 'Hide Share Box',
		'section'  => 'pencidesign_new_section_grid',
		'settings' => 'penci_grid_share_box',
		'type'     => 'checkbox',
		'priority' => 3
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'grid_cat', array(
		'label'    => 'Hide Category',
		'section'  => 'pencidesign_new_section_grid',
		'settings' => 'penci_grid_cat',
		'type'     => 'checkbox',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'grid_author', array(
		'label'    => 'Hide Post Author',
		'section'  => 'pencidesign_new_section_grid',
		'settings' => 'penci_grid_author',
		'type'     => 'checkbox',
		'priority' => 10
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'grid_date', array(
		'label'    => 'Hide Post Date',
		'section'  => 'pencidesign_new_section_grid',
		'settings' => 'penci_grid_date',
		'type'     => 'checkbox',
		'priority' => 11
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'grid_comment', array(
		'label'    => 'Hide Comment Count',
		'section'  => 'pencidesign_new_section_grid',
		'settings' => 'penci_grid_comment',
		'type'     => 'checkbox',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'post_excerpt_length', array(
		'label'    => 'Custom Excerpt Length',
		'section'  => 'pencidesign_new_section_grid',
		'settings' => 'penci_post_excerpt_length',
		'type'     => 'number',
		'priority' => 55
	) ) );


	// Post Settings
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'enable_single_style2', array(
		'label'    => 'Enable Single Style 2',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_enable_single_style2',
		'type'     => 'checkbox',
		'priority' => 1
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'move_title_bellow', array(
		'label'    => 'Move Categories, Post Title, Post Meta To Bellow Featured Image',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_move_title_bellow',
		'type'     => 'checkbox',
		'priority' => 2
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'disable_lightbox_single', array(
		'label'    => 'Disable Lightbox in Single',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_disable_lightbox_single',
		'type'     => 'checkbox',
		'priority' => 2
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_cat', array(
		'label'    => 'Hide Category',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_post_cat',
		'type'     => 'checkbox',
		'priority' => 3
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'off_uppercase_post_title', array(
		'label'    => 'Turn Off Uppercase in Post Title',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_off_uppercase_post_title',
		'type'     => 'checkbox',
		'priority' => 4
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'align_left_post_title', array(
		'label'    => 'Enable Align Left Post Title',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_align_left_post_title',
		'type'     => 'checkbox',
		'priority' => 4
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'single_meta_author', array(
		'label'    => 'Hide Post Author',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_single_meta_author',
		'type'     => 'checkbox',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'single_meta_date', array(
		'label'    => 'Hide Post Date',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_single_meta_date',
		'type'     => 'checkbox',
		'priority' => 6
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'single_meta_comment', array(
		'label'    => 'Hide Comment Count',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_single_meta_comment',
		'type'     => 'checkbox',
		'priority' => 7
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_thumb', array(
		'label'    => 'Hide Featured Image on Top',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_post_thumb',
		'description' => 'This option not apply for Video format, Gallery format',
		'type'     => 'checkbox',
		'priority' => 8
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_tags', array(
		'label'    => 'Hide Tags',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_post_tags',
		'type'     => 'checkbox',
		'priority' => 10
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_share', array(
		'label'    => 'Hide Like Count & Social Share',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_post_share',
		'type'     => 'checkbox',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_author', array(
		'label'    => 'Hide Author Box',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_post_author',
		'type'     => 'checkbox',
		'priority' => 25
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_nav', array(
		'label'    => 'Hide Next/Prev Post Navigation',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_post_nav',
		'type'     => 'checkbox',
		'priority' => 26
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_nav_thumbnail', array(
		'label'    => 'Enable Post Thumbnail for Next/Prev Post Navigation',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_post_nav_thumbnail',
		'type'     => 'checkbox',
		'priority' => 26
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'off_uppercase_post_title_nav', array(
		'label'    => 'Turn Off Uppercase in Post Title Next/Prev Post Navigation',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_off_uppercase_post_title_nav',
		'type'     => 'checkbox',
		'priority' => 27
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_related', array(
		'label'    => 'Hide Related Posts Box',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_post_related',
		'type'     => 'checkbox',
		'priority' => 30
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_related_text', array(
		'label'    => 'Related Posts Custom Text',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_post_related_text',
		'type'     => 'text',
		'priority' => 35
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_related_icons', array(
		'label'    => 'Enable Posts Format Icons in Related Posts',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_post_related_icons',
		'type'     => 'checkbox',
		'priority' => 35
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'off_uppercase_post_title_related', array(
		'label'    => 'Turn Off Uppercase in Posts Title Related Posts',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_off_uppercase_post_title_related',
		'type'     => 'checkbox',
		'priority' => 36
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hide_date_related', array(
		'label'    => 'Hide Post Date on Related Posts',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_hide_date_related',
		'type'     => 'checkbox',
		'priority' => 36
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_related_autoplay', array(
		'label'    => 'Related Posts Carousel Auto Play',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_post_related_autoplay',
		'type'     => 'checkbox',
		'priority' => 37
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_related_dots', array(
		'label'    => 'Hide Dots On Carousel Related Posts',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_post_related_dots',
		'type'     => 'checkbox',
		'priority' => 38
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_related_arrows', array(
		'label'    => 'Hide Next/Prev Button On Carousel Related Posts',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_post_related_arrows',
		'type'     => 'checkbox',
		'priority' => 39
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'numbers_related_post', array(
		'label'    => 'Amount of Related Posts',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_numbers_related_post',
		'type'     => 'number',
		'priority' => 40
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_hide_comments', array(
		'label'    => 'Hide Post Comments',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_post_hide_comments',
		'type'     => 'checkbox',
		'priority' => 45
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'image_height_gallery', array(
		'label'    => 'Custom the height of images on gallery images (unit is pixel)',
		'section'  => 'pencidesign_new_section_post',
		'settings' => 'penci_image_height_gallery',
		'type'     => 'number',
		'priority' => 46
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_adsense_one', array(
		'label'       => 'Add Google Adsense code below post description',
		'section'     => 'pencidesign_new_section_post',
		'settings'    => 'penci_post_adsense_one',
		'description' => '',
		'type'        => 'textarea',
		'priority'    => 50
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'post_adsense_two', array(
		'label'       => 'Add Google Adsense code in the end of content posts',
		'section'     => 'pencidesign_new_section_post',
		'settings'    => 'penci_post_adsense_two',
		'description' => '',
		'type'        => 'textarea',
		'priority'    => 55
	) ) );

	// Page settings
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_share', array(
		'label'    => 'Hide Share Buttons',
		'section'  => 'pencidesign_new_section_page',
		'settings' => 'penci_page_share',
		'type'     => 'checkbox',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_comments', array(
		'label'    => 'Hide Comments',
		'section'  => 'pencidesign_new_section_page',
		'settings' => 'penci_page_comments',
		'type'     => 'checkbox',
		'priority' => 10
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'page_under_construction_time', array(
		'label'       => 'Given Time To Count Down on Page Under Construction',
		'section'     => 'pencidesign_new_section_page',
		'settings'    => 'penci_page_under_construction_time',
		'description' => 'Fill the countdown below with your given time. For example, you want to countdown to: "31th October 2016" then full the text input with "2016/10/31"',
		'type'        => 'text',
		'priority'    => 15
	) ) );

	// Social Media
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'facebook', array(
		'label'    => 'Facebook',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_facebook',
		'type'     => 'text',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'twitter', array(
		'label'    => 'Twitter',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_twitter',
		'type'     => 'text',
		'priority' => 10
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'instagram', array(
		'label'    => 'Instagram',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_instagram',
		'type'     => 'text',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pinterest', array(
		'label'    => 'Pinterest',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_pinterest',
		'type'     => 'text',
		'priority' => 20
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'google', array(
		'label'    => 'Google Plus',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_google',
		'type'     => 'text',
		'priority' => 25
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'linkedin', array(
		'label'    => 'LinkedIn',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_linkedin',
		'type'     => 'text',
		'priority' => 26
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'flickr', array(
		'label'    => 'Flickr',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_flickr',
		'type'     => 'text',
		'priority' => 27
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'behance', array(
		'label'    => 'Behance',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_behance',
		'type'     => 'text',
		'priority' => 28
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'tumblr', array(
		'label'    => 'Tumblr',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_tumblr',
		'type'     => 'text',
		'priority' => 30
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'youtube', array(
		'label'    => 'Youtube',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_youtube',
		'type'     => 'text',
		'priority' => 35
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'email_me', array(
		'label'       => 'Email',
		'section'     => 'pencidesign_new_section_social',
		'description' => 'If you want to click email icon to link to your mail, please fill: mailto:yourmail@hostmail. Change yourmail@hostmail.com to your mail. You also can fill your contact link page here',
		'settings'    => 'penci_email_me',
		'type'        => 'text',
		'priority'    => 36
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'vk', array(
		'label'    => 'VK',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_vk',
		'type'     => 'text',
		'priority' => 37
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bloglovin', array(
		'label'    => 'Bloglovin',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_bloglovin',
		'type'     => 'text',
		'priority' => 38
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'rss', array(
		'label'    => 'RSS Link',
		'section'  => 'pencidesign_new_section_social',
		'settings' => 'penci_rss',
		'type'     => 'text',
		'priority' => 40
	) ) );

	// Footer Settings
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_widget_area', array(
		'label'    => 'Disable Footer Widget Area',
		'section'  => 'pencidesign_new_section_footer',
		'settings' => 'penci_footer_widget_area',
		'type'     => 'checkbox',
		'priority' => 1
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_widget_title_center', array(
		'label'    => 'Align Center Footer Widget Title',
		'section'  => 'pencidesign_new_section_footer',
		'settings' => 'penci_footer_widget_title_center',
		'type'     => 'checkbox',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'footer_widget_padding', array(
		'label'    => 'Footer Widget Area Padding Top & Bottom',
		'section'  => 'pencidesign_new_section_footer',
		'settings' => 'penci_footer_widget_padding',
		'type'     => 'number',
		'priority' => 10
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_social', array(
		'label'    => 'Disable Footer Socials',
		'section'  => 'pencidesign_new_section_footer',
		'settings' => 'penci_footer_social',
		'type'     => 'checkbox',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hide_footer_logo', array(
		'label'    => 'Disable Footer Logo',
		'section'  => 'pencidesign_new_section_footer',
		'settings' => 'penci_hide_footer_logo',
		'type'     => 'checkbox',
		'priority' => 16
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_logo', array(
		'label'    => 'Footer Logo',
		'section'  => 'pencidesign_new_section_footer',
		'settings' => 'penci_footer_logo',
		'priority' => 20
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_go_to_top', array(
		'label'    => 'Disable Go to top button',
		'section'  => 'pencidesign_new_section_footer',
		'settings' => 'penci_go_to_top',
		'type'     => 'checkbox',
		'priority' => 22
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_copyright', array(
		'label'    => 'Footer Copyright Text',
		'section'  => 'pencidesign_new_section_footer',
		'settings' => 'penci_footer_copyright',
		'type'     => 'textarea',
		'priority' => 25
	) ) );

	// 404 Page Settings
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'not_found_image', array(
		'label'    => '404 Custom Main Image',
		'section'  => 'pencidesign_new_section_not_found',
		'settings' => 'penci_not_found_image',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'not_found_sub_heading', array(
		'label'    => '404 Custom Message Text',
		'section'  => 'pencidesign_new_section_not_found',
		'settings' => 'penci_not_found_sub_heading',
		'type'     => 'textarea',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'not_found_hide_search', array(
		'label'    => 'Hide Search Form',
		'section'  => 'pencidesign_new_section_not_found',
		'settings' => 'penci_not_found_hide_search',
		'type'     => 'checkbox',
		'priority' => 20
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'not_found_hide_backhome', array(
		'label'    => 'Hide "BACK TO HOME PAGE"',
		'section'  => 'pencidesign_new_section_not_found',
		'settings' => 'penci_not_found_hide_backhome',
		'type'     => 'checkbox',
		'priority' => 25
	) ) );

	// Portfolio Options
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'portfolio_cat_enable_sidebar', array(
		'label'    => 'Enable Sidebar On Portfolio Categories',
		'section'  => 'pencidesign_new_section_portfolio',
		'settings' => 'penci_portfolio_cat_enable_sidebar',
		'type'     => 'checkbox',
		'priority' => 1
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'portfolio_layout', array(
		'label'    => 'Portfolio Category Layout',
		'section'  => 'pencidesign_new_section_portfolio',
		'settings' => 'penci_portfolio_layout',
		'type'     => 'radio',
		'priority' => 5,
		'choices'  => array(
			'masonry' => 'Masonry Layout',
			'grid'    => 'Grid Layout'
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'portfolio_overlay_color', array(
		'label'    => 'Portfolio Overlay Hover Color',
		'section'  => 'pencidesign_new_section_portfolio',
		'settings' => 'penci_portfolio_overlay_color',
		'priority' => 10
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'portfolio_overlay_opacity', array(
		'label'    => 'Portfolio Overlay Hover Opacity',
		'section'  => 'pencidesign_new_section_portfolio',
		'settings' => 'penci_portfolio_overlay_opacity',
		'type'     => 'select',
		'priority' => 15,
		'choices'  => array(
			'0.05' => '0.05',
			'0.1'  => '0.1',
			'0.15' => '0.15',
			'0.2'  => '0.2',
			'0.25' => '0.25',
			'0.3'  => '0.3',
			'0.35' => '0.35',
			'0.4'  => '0.4',
			'0.45' => '0.45',
			'0.5'  => '0.5',
			'0.55' => '0.55',
			'0.6'  => '0.6',
			'0.65' => '0.65',
			'0.7'  => '0.7',
			'0.75' => '0.75',
			'0.8'  => '0.8',
			'0.85' => '0.85',
			'0.9'  => '0.9',
			'0.95' => '0.95',
			'1'    => '1',
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'portfolio_title_color', array(
		'label'    => 'Portfolio Post Title Color',
		'section'  => 'pencidesign_new_section_portfolio',
		'settings' => 'penci_portfolio_title_color',
		'priority' => 20
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'portfolio_cate_color', array(
		'label'    => 'Portfolio Post Categories Color',
		'section'  => 'pencidesign_new_section_portfolio',
		'settings' => 'penci_portfolio_cate_color',
		'priority' => 25
	) ) );


	// Woocommerce options
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woo_shop_hide_cart_icon', array(
		'label'    => 'Hide Shopping Cart Icon on Header',
		'section'  => 'pencidesign_new_section_woocommerce',
		'settings' => 'penci_woo_shop_hide_cart_icon',
		'type'     => 'checkbox',
		'priority' => 1
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woo_shop_enable_sidebar', array(
		'label'    => 'Enable Sidebar On Shop Page',
		'section'  => 'pencidesign_new_section_woocommerce',
		'settings' => 'penci_woo_shop_enable_sidebar',
		'type'     => 'checkbox',
		'priority' => 2
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woo_cat_enable_sidebar', array(
		'label'    => 'Enable Sidebar On Archive',
		'section'  => 'pencidesign_new_section_woocommerce',
		'settings' => 'penci_woo_cat_enable_sidebar',
		'type'     => 'checkbox',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woo_single_enable_sidebar', array(
		'label'    => 'Enable Sidebar On Single Product',
		'section'  => 'pencidesign_new_section_woocommerce',
		'settings' => 'penci_woo_single_enable_sidebar',
		'type'     => 'checkbox',
		'priority' => 10
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woo_left_sidebar', array(
		'label'    => 'Enable Left Sidebar',
		'section'  => 'pencidesign_new_section_woocommerce',
		'settings' => 'penci_woo_left_sidebar',
		'type'     => 'checkbox',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woo_disable_breadcrumb', array(
		'label'    => 'Disable Breadcrumb',
		'section'  => 'pencidesign_new_section_woocommerce',
		'settings' => 'penci_woo_disable_breadcrumb',
		'type'     => 'checkbox',
		'priority' => 20
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'woo_paging_align', array(
		'label'    => 'Page Navigation Alignment',
		'section'  => 'pencidesign_new_section_woocommerce',
		'settings' => 'penci_woo_paging_align',
		'type'     => 'select',
		'priority' => 22,
		'choices'  => array(
			'center' => 'Center',
			'left'   => 'Left',
			'right'  => 'Right'
		)
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'woo_post_per_page', array(
		'label'    => 'Custom Amount of Products Shown Per Page on Shop page & Categories page',
		'section'  => 'pencidesign_new_section_woocommerce',
		'settings' => 'penci_woo_post_per_page',
		'type'     => 'number',
		'priority' => 25
	) ) );
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'woo_number_related_products', array(
		'label'    => 'Custom Amount of Related Products',
		'section'  => 'pencidesign_new_section_woocommerce',
		'settings' => 'penci_woo_number_related_products',
		'type'     => 'number',
		'priority' => 30
	) ) );


	/* = Color Settings
	-------------------------------------------------------------- */
	// Colors general
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'color_accent', array(
		'label'    => 'Accent Colors',
		'section'  => 'pencidesign_new_section_color_general',
		'settings' => 'penci_color_accent',
		'priority' => 5
	) ) );

	// Color homepage
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_boxes_overlay', array(
		'label'    => 'Homepage Featured Boxes Border & Background Color',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_home_boxes_overlay',
		'priority' => 1
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_boxes_title_color', array(
		'label'    => 'Homepage Featured Boxes Title Color',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_home_boxes_title_color',
		'priority' => 3
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_boxes_accent_hover_color', array(
		'label'    => 'Homepage Featured Boxes Accent Hover Color',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_home_boxes_accent_hover_color',
		'priority' => 4
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_popular_label_color', array(
		'label'    => 'Homepage Popular Post Label Color',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_home_popular_label_color',
		'priority' => 4
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_popular_post_title_color', array(
		'label'    => 'Homepage Popular Post Title Post Color',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_home_popular_post_title_color',
		'priority' => 4
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_popular_post_title_hover_color', array(
		'label'    => 'Homepage Popular Post Title Post Hover Color',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_home_popular_post_title_hover_color',
		'priority' => 4
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_popular_post_date_color', array(
		'label'    => 'Homepage Popular Post Date Color',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_home_popular_post_date_color',
		'priority' => 4
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_title_box_bg', array(
		'label'       => 'Homepage Title Box Background Color',
		'section'     => 'pencidesign_new_section_color_home',
		'settings'    => 'penci_home_title_box_bg',
		'description' => 'Homepage title box is "Latest Posts" box and featured categories title box in Magazine Layout',
		'priority'    => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_title_box_outer_bg', array(
		'label'       => 'Homepage Title Box Background Outer Color',
		'section'     => 'pencidesign_new_section_color_home',
		'settings'    => 'penci_home_title_box_outer_bg',
		'priority'    => 6
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_title_box_border_color', array(
		'label'    => 'Homepage Title Box Border Color',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_home_title_box_border_color',
		'priority' => 10
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_title_box_border_inner_color', array(
		'label'    => 'Homepage Title Box Border Outer Color',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_home_title_box_border_inner_color',
		'priority' => 11
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_title_box_text_color', array(
		'label'    => 'Homepage Title Box Text Color',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_home_title_box_text_color',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_remove_border_outer', array(
		'label'    => 'Remove Border Outer on Title Box',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_home_remove_border_outer',
		'type'     => 'checkbox',
		'priority' => 16
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_remove_arrow_down', array(
		'label'    => 'Remove Arrow Down on Title Box',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_home_remove_arrow_down',
		'type'     => 'checkbox',
		'priority' => 17
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_featured_title_color', array(
		'label'       => 'Featured Posts Title Color',
		'section'     => 'pencidesign_new_section_color_home',
		'settings'    => 'penci_home_featured_title_color',
		'description' => 'Featured posts is posts in featured categories of magazine layouts',
		'priority'    => 20
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_featured_title_hover_color', array(
		'label'    => 'Featured Posts Title Hover Color',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_home_featured_title_hover_color',
		'priority' => 25
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_featured_accent_color', array(
		'label'    => 'Featured Posts Accent Color',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_home_featured_accent_color',
		'priority' => 30
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_featured3_overlay_color', array(
		'label'       => 'Featured Posts Overlay Background Color For Style 3',
		'section'     => 'pencidesign_new_section_color_home',
		'settings'    => 'penci_home_featured3_overlay_color',
		'description' => 'This option and options bellow for featured categories style 3 in magazine layouts ( style 3 is the style of the featured categories are selected in a category edit screen )',
		'priority'    => 35
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_featured3_overlay_opacity', array(
		'label'    => 'Featured Posts Overlay Opacity For Style 3',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_home_featured3_overlay_opacity',
		'type'     => 'select',
		'priority' => 40,
		'choices'  => array(
			'0'    => '0',
			'0.05' => '0.05',
			'0.1'  => '0.1',
			'0.15' => '0.15',
			'0.2'  => '0.2',
			'0.25' => '0.25',
			'0.3'  => '0.3',
			'0.35' => '0.35',
			'0.4'  => '0.4',
			'0.45' => '0.45',
			'0.5'  => '0.5',
			'0.55' => '0.55',
			'0.6'  => '0.6',
			'0.65' => '0.65',
			'0.7'  => '0.7',
			'0.75' => '0.75',
			'0.8'  => '0.8',
			'0.85' => '0.85',
			'0.9'  => '0.9',
			'0.95' => '0.95',
			'1'    => '1',
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_featured3_overlay_hover_opacity', array(
		'label'    => 'Featured Posts Overlay Hover Opacity For Style 3',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_home_featured3_overlay_hover_opacity',
		'type'     => 'select',
		'priority' => 41,
		'choices'  => array(
			'0'    => '0',
			'0.05' => '0.05',
			'0.1'  => '0.1',
			'0.15' => '0.15',
			'0.2'  => '0.2',
			'0.25' => '0.25',
			'0.3'  => '0.3',
			'0.35' => '0.35',
			'0.4'  => '0.4',
			'0.45' => '0.45',
			'0.5'  => '0.5',
			'0.55' => '0.55',
			'0.6'  => '0.6',
			'0.65' => '0.65',
			'0.7'  => '0.7',
			'0.75' => '0.75',
			'0.8'  => '0.8',
			'0.85' => '0.85',
			'0.9'  => '0.9',
			'0.95' => '0.95',
			'1'    => '1',
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_featured3_title_color', array(
		'label'    => 'Featured Posts Title Color For Style 3 & Single Slider',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_home_featured3_title_color',
		'priority' => 45
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_featured3_title_hover_color', array(
		'label'    => 'Featured Posts Title Hover Color For Style 3 & Single Slider',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_home_featured3_title_hover_color',
		'priority' => 50
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_featured3_meta_color', array(
		'label'    => 'Featured Posts Meta Color For Style 3 & Single Slider',
		'section'  => 'pencidesign_new_section_color_home',
		'settings' => 'penci_home_featured3_meta_color',
		'priority' => 55
	) ) );

	// Top Bar Color
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_bar_bg', array(
		'label'    => 'Top Bar Background Color',
		'section'  => 'pencidesign_new_section_color_top_bar',
		'settings' => 'penci_top_bar_bg',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_bar_top_posts_bg', array(
		'label'    => '"Top Posts" Background Color',
		'section'  => 'pencidesign_new_section_color_top_bar',
		'settings' => 'penci_top_bar_top_posts_bg',
		'priority' => 10
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_bar_top_posts_color', array(
		'label'    => '"Top Posts" Text Color',
		'section'  => 'pencidesign_new_section_color_top_bar',
		'settings' => 'penci_top_bar_top_posts_color',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_bar_button_color', array(
		'label'    => 'Next/Prev Posts Top Bar Button Color',
		'section'  => 'pencidesign_new_section_color_top_bar',
		'settings' => 'penci_top_bar_button_color',
		'priority' => 20
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_bar_button_hover_color', array(
		'label'    => 'Next/Prev Posts Top Bar Button Hover Color',
		'section'  => 'pencidesign_new_section_color_top_bar',
		'settings' => 'penci_top_bar_button_hover_color',
		'priority' => 25
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_bar_title_color', array(
		'label'    => 'Top Bar Posts Title Color',
		'section'  => 'pencidesign_new_section_color_top_bar',
		'settings' => 'penci_top_bar_title_color',
		'priority' => 30
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_bar_title_hover_color', array(
		'label'    => 'Top Bar Posts Title Hover Color',
		'section'  => 'pencidesign_new_section_color_top_bar',
		'settings' => 'penci_top_bar_title_hover_color',
		'priority' => 35
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_bar_menu_color', array(
		'label'    => 'Top Bar Menu Text Color',
		'section'  => 'pencidesign_new_section_color_top_bar',
		'settings' => 'penci_top_bar_menu_color',
		'priority' => 36
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_bar_menu_hover_color', array(
		'label'    => 'Top Bar Menu Text Hover Color',
		'section'  => 'pencidesign_new_section_color_top_bar',
		'settings' => 'penci_top_bar_menu_hover_color',
		'priority' => 37
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_bar_menu_border', array(
		'label'    => 'Top Bar Menu Border Color',
		'section'  => 'pencidesign_new_section_color_top_bar',
		'settings' => 'penci_top_bar_menu_border',
		'priority' => 38
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_bar_menu_dropdown_bg', array(
		'label'    => 'Top Bar Menu Dropdown Background Color',
		'section'  => 'pencidesign_new_section_color_top_bar',
		'settings' => 'penci_top_bar_menu_dropdown_bg',
		'priority' => 38
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_bar_social_color', array(
		'label'    => 'Top Bar Social Icons Color',
		'section'  => 'pencidesign_new_section_color_top_bar',
		'settings' => 'penci_top_bar_social_color',
		'priority' => 40
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_bar_social_hover_color', array(
		'label'    => 'Top Bar Social Icons Hover Color',
		'section'  => 'pencidesign_new_section_color_top_bar',
		'settings' => 'penci_top_bar_social_hover_color',
		'priority' => 45
	) ) );

	// Header Color
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_background_color', array(
		'label'    => 'Header Background Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_header_background_color',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_background_image', array(
		'label'       => 'Header Background Image',
		'section'     => 'pencidesign_new_section_color_topbar',
		'description' => 'You should use image with minimum width 1920px and minimum height 300px',
		'settings'    => 'penci_header_background_image',
		'priority'    => 10
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_slogan_color', array(
		'label'    => 'Header Slogan Text Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_header_slogan_color',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_slogan_line_color', array(
		'label'    => 'Header Slogan Line Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_header_slogan_line_color',
		'priority' => 20
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_social_color', array(
		'label'    => 'Header Social Icons Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_header_social_color',
		'priority' => 25
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_social_color_hover', array(
		'label'    => 'Header Social Icons Color Hover',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_header_social_color_hover',
		'priority' => 30
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_bar_bg', array(
		'label'    => 'Main Bar Background',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_main_bar_bg',
		'priority' => 35
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_bar_border_color', array(
		'label'    => 'Main Bar Border Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_main_bar_border_color',
		'priority' => 36
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_bar_nav_color', array(
		'label'    => 'Main Bar Menu Text Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_main_bar_nav_color',
		'priority' => 40
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_bar_color_active', array(
		'label'    => 'Main Bar Menu Text Hover & Active Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_main_bar_color_active',
		'priority' => 45
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'drop_bg_color', array(
		'label'    => 'Dropdown Background Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_drop_bg_color',
		'priority' => 50
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'drop_items_border', array(
		'label'    => 'Dropdown Menu Items Border Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_drop_items_border',
		'priority' => 60
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'drop_text_color', array(
		'label'    => 'Dropdown Text Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_drop_text_color',
		'priority' => 65
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'drop_text_hover_color', array(
		'label'    => 'Dropdown Text Hover Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_drop_text_hover_color',
		'priority' => 70
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mega_bg_color', array(
		'label'    => 'Category Mega Menu Background Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_mega_bg_color',
		'priority' => 75
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mega_child_cat_bg_color', array(
		'label'    => 'Category Mega Menu List Child Categories Background Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_mega_child_cat_bg_color',
		'priority' => 80
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mega_post_date_color', array(
		'label'    => 'Category Mega Menu Post Date Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_mega_post_date_color',
		'priority' => 85
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mega_post_category_color', array(
		'label'    => 'Mega Menu Post Category Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_mega_post_category_color',
		'priority' => 85
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mega_accent_color', array(
		'label'    => 'Category Mega Menu Accent Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_mega_accent_color',
		'priority' => 86
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_bar_search_magnify', array(
		'label'    => 'Main Bar Search Icon Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_main_bar_search_magnify',
		'priority' => 90
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_bar_close_color', array(
		'label'    => 'Main Bar Icon Close Search Color',
		'section'  => 'pencidesign_new_section_color_topbar',
		'settings' => 'penci_main_bar_close_color',
		'priority' => 95
	) ) );

	// Header sign-up form area
	$wp_customize->add_control( new Customize_Number_Control( $wp_customize, 'header_signup_padding', array(
		'label'    => 'Footer Widget Area Padding Top & Bottom (Unit is pixel)',
		'section'  => 'pencidesign_new_section_signup_header',
		'settings' => 'penci_header_signup_padding',
		'type'     => 'number',
		'priority' => 1
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_signup_bg', array(
		'label'    => 'Header Sign-Up Form Area Background Color',
		'section'  => 'pencidesign_new_section_signup_header',
		'settings' => 'penci_header_signup_bg',
		'priority' => 2
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_signup_color', array(
		'label'    => 'Text Color',
		'section'  => 'pencidesign_new_section_signup_header',
		'settings' => 'penci_header_signup_color',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_signup_input_border', array(
		'label'    => 'Input Border Color',
		'section'  => 'pencidesign_new_section_signup_header',
		'settings' => 'penci_header_signup_input_border',
		'priority' => 10
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_signup_input_color', array(
		'label'    => 'Input Text Color',
		'section'  => 'pencidesign_new_section_signup_header',
		'settings' => 'penci_header_signup_input_color',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_signup_submit_bg', array(
		'label'    => 'Submit Button Background Color',
		'section'  => 'pencidesign_new_section_signup_header',
		'settings' => 'penci_header_signup_submit_bg',
		'priority' => 20
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_signup_submit_color', array(
		'label'    => 'Submit Button Text Color',
		'section'  => 'pencidesign_new_section_signup_header',
		'settings' => 'penci_header_signup_submit_color',
		'priority' => 25
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_signup_submit_bg_hover', array(
		'label'    => 'Submit Button Hover Background Color',
		'section'  => 'pencidesign_new_section_signup_header',
		'settings' => 'penci_header_signup_submit_bg_hover',
		'priority' => 30
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_signup_submit_color_hover', array(
		'label'    => 'Submit Button Hover Text Color',
		'section'  => 'pencidesign_new_section_signup_header',
		'settings' => 'penci_header_signup_submit_color_hover',
		'priority' => 35
	) ) );

	// Vertical Nav & Mobile Main Nav Color
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ver_nav_overlay_color', array(
		'label'    => 'Mobile Nav Close Overlay Color',
		'section'  => 'pencidesign_new_section_vertical_nav',
		'settings' => 'penci_ver_nav_overlay_color',
		'priority' => 1
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ver_nav_close_bg', array(
		'label'    => 'Mobile Nav Close Button Background',
		'section'  => 'pencidesign_new_section_vertical_nav',
		'settings' => 'penci_ver_nav_close_bg',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ver_nav_close_color', array(
		'label'    => 'Mobile Nav Close Button Icon Color',
		'section'  => 'pencidesign_new_section_vertical_nav',
		'settings' => 'penci_ver_nav_close_color',
		'priority' => 10
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ver_nav_bg', array(
		'label'    => 'Mobile Nav Background',
		'section'  => 'pencidesign_new_section_vertical_nav',
		'settings' => 'penci_ver_nav_bg',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ver_nav_accent_color', array(
		'label'    => 'Mobile Nav Accent Color',
		'section'  => 'pencidesign_new_section_vertical_nav',
		'settings' => 'penci_ver_nav_accent_color',
		'priority' => 20
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ver_nav_accent_hover_color', array(
		'label'    => 'Mobile Nav Accent Hover Color',
		'section'  => 'pencidesign_new_section_vertical_nav',
		'settings' => 'penci_ver_nav_accent_hover_color',
		'priority' => 25
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ver_nav_items_border', array(
		'label'    => 'Mobile Nav Menu Items Border Color',
		'section'  => 'pencidesign_new_section_vertical_nav',
		'settings' => 'penci_ver_nav_items_border',
		'priority' => 30
	) ) );


	// Featured colors
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'featured_slider_overlay_bg', array(
		'label'    => 'Featured Slider Overlay Color',
		'section'  => 'pencidesign_new_section_color_featured_slider',
		'settings' => 'penci_featured_slider_overlay_bg',
		'priority' => 1
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_slider_overlay_bg_opacity', array(
		'label'    => 'Featured Slider Overlay Color Opacity',
		'section'  => 'pencidesign_new_section_color_featured_slider',
		'settings' => 'penci_featured_slider_overlay_bg_opacity',
		'type'     => 'select',
		'priority' => 2,
		'choices'  => array(
			'0'    => '0',
			'0.05' => '0.05',
			'0.1'  => '0.1',
			'0.15' => '0.15',
			'0.2'  => '0.2',
			'0.25' => '0.25',
			'0.3'  => '0.3',
			'0.35' => '0.35',
			'0.4'  => '0.4',
			'0.45' => '0.45',
			'0.5'  => '0.5',
			'0.55' => '0.55',
			'0.6'  => '0.6',
			'0.65' => '0.65',
			'0.7'  => '0.7',
			'0.75' => '0.75',
			'0.8'  => '0.8',
			'0.85' => '0.85',
			'0.9'  => '0.9',
			'0.95' => '0.95',
			'1'    => '1',
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_slider_overlay_pattern_opacity', array(
		'label'    => 'Featured Slider Overlay Pattern Opacity',
		'section'  => 'pencidesign_new_section_color_featured_slider',
		'settings' => 'penci_featured_slider_overlay_pattern_opacity',
		'type'     => 'select',
		'priority' => 3,
		'choices'  => array(
			'0'    => '0',
			'0.05' => '0.05',
			'0.1'  => '0.1',
			'0.15' => '0.15',
			'0.2'  => '0.2',
			'0.25' => '0.25',
			'0.3'  => '0.3',
			'0.35' => '0.35',
			'0.4'  => '0.4',
			'0.45' => '0.45',
			'0.5'  => '0.5',
			'0.55' => '0.55',
			'0.6'  => '0.6',
			'0.65' => '0.65',
			'0.7'  => '0.7',
			'0.75' => '0.75',
			'0.8'  => '0.8',
			'0.85' => '0.85',
			'0.9'  => '0.9',
			'0.95' => '0.95',
			'1'    => '1',
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_mag2_overlay_opacity', array(
		'label'    => 'Magazine Slider 2 Overlay Opacity',
		'section'  => 'pencidesign_new_section_color_featured_slider',
		'settings' => 'penci_featured_mag2_overlay_opacity',
		'type'     => 'select',
		'priority' => 4,
		'choices'  => array(
			'0'    => '0',
			'0.05' => '0.05',
			'0.1'  => '0.1',
			'0.15' => '0.15',
			'0.2'  => '0.2',
			'0.25' => '0.25',
			'0.3'  => '0.3',
			'0.35' => '0.35',
			'0.4'  => '0.4',
			'0.45' => '0.45',
			'0.5'  => '0.5',
			'0.55' => '0.55',
			'0.6'  => '0.6',
			'0.65' => '0.65',
			'0.7'  => '0.7',
			'0.75' => '0.75',
			'0.8'  => '0.8',
			'0.85' => '0.85',
			'0.9'  => '0.9',
			'0.95' => '0.95',
			'1'    => '1',
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_mag2_overlay_hover_opacity', array(
		'label'    => 'Magazine Slider 2 Overlay Hover Opacity',
		'section'  => 'pencidesign_new_section_color_featured_slider',
		'settings' => 'penci_featured_mag2_overlay_hover_opacity',
		'type'     => 'select',
		'priority' => 5,
		'choices'  => array(
			'0'    => '0',
			'0.05' => '0.05',
			'0.1'  => '0.1',
			'0.15' => '0.15',
			'0.2'  => '0.2',
			'0.25' => '0.25',
			'0.3'  => '0.3',
			'0.35' => '0.35',
			'0.4'  => '0.4',
			'0.45' => '0.45',
			'0.5'  => '0.5',
			'0.55' => '0.55',
			'0.6'  => '0.6',
			'0.65' => '0.65',
			'0.7'  => '0.7',
			'0.75' => '0.75',
			'0.8'  => '0.8',
			'0.85' => '0.85',
			'0.9'  => '0.9',
			'0.95' => '0.95',
			'1'    => '1',
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'featured_slider_box_bg_color', array(
		'label'    => 'Center Box Background Color',
		'section'  => 'pencidesign_new_section_color_featured_slider',
		'settings' => 'penci_featured_slider_box_bg_color',
		'priority' => 10
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'featured_slider_box_border_color', array(
		'label'    => 'Center Box Border Color',
		'section'  => 'pencidesign_new_section_color_featured_slider',
		'settings' => 'penci_featured_slider_box_border_color',
		'priority' => 11
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'featured_slider_date_bg', array(
		'label'    => 'Post Date Background Color',
		'section'  => 'pencidesign_new_section_color_featured_slider',
		'settings' => 'penci_featured_slider_date_bg',
		'priority' => 12
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'featured_slider_date_color', array(
		'label'    => 'Post Date Text Color',
		'section'  => 'pencidesign_new_section_color_featured_slider',
		'settings' => 'penci_featured_slider_date_color',
		'priority' => 13
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'featured_slider_cat_color', array(
		'label'    => 'Post Category Color',
		'section'  => 'pencidesign_new_section_color_featured_slider',
		'settings' => 'penci_featured_slider_cat_color',
		'priority' => 16
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'featured_slider_cat_hover_color', array(
		'label'    => 'Post Category Hover Color',
		'section'  => 'pencidesign_new_section_color_featured_slider',
		'settings' => 'penci_featured_slider_cat_hover_color',
		'priority' => 17
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'featured_slider_title_color', array(
		'label'    => 'Title Post Color',
		'section'  => 'pencidesign_new_section_color_featured_slider',
		'settings' => 'penci_featured_slider_title_color',
		'priority' => 20
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'featured_slider_title_hover_color', array(
		'label'    => 'Title Post Hover Color',
		'section'  => 'pencidesign_new_section_color_featured_slider',
		'settings' => 'penci_featured_slider_title_hover_color',
		'priority' => 25
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'featured_slider_meta_color', array(
		'label'    => 'Post Meta Color',
		'section'  => 'pencidesign_new_section_color_featured_slider',
		'settings' => 'penci_featured_slider_meta_color',
		'priority' => 30
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'featured_slider_accent_color', array(
		'label'    => 'Post Author Name Color',
		'section'  => 'pencidesign_new_section_color_featured_slider',
		'settings' => 'penci_featured_slider_accent_color',
		'priority' => 31
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'featured_slider_arrows_accent', array(
		'label'    => 'Featured Slider Accent Hover Color',
		'section'  => 'pencidesign_new_section_color_featured_slider',
		'settings' => 'penci_featured_slider_arrows_accent',
		'priority' => 31
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'featured_slider4_line', array(
		'label'    => 'Title Post Lines Color for Featured Slider 4',
		'section'  => 'pencidesign_new_section_color_featured_slider',
		'settings' => 'penci_featured_slider4_line',
		'priority' => 32
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'magazine_slider_overlay_bg', array(
		'label'    => 'Overlay Color For Magazine Slider',
		'section'  => 'pencidesign_new_section_color_featured_slider',
		'settings' => 'penci_magazine_slider_overlay_bg',
		'priority' => 32
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'magazine_slider_overlay_bg_opacity', array(
		'label'    => 'Overlay Color Opacity For Magazine Slider',
		'section'  => 'pencidesign_new_section_color_featured_slider',
		'settings' => 'penci_magazine_slider_overlay_bg_opacity',
		'type'     => 'select',
		'priority' => 33,
		'choices'  => array(
			'0'    => '0',
			'0.05' => '0.05',
			'0.1'  => '0.1',
			'0.15' => '0.15',
			'0.2'  => '0.2',
			'0.25' => '0.25',
			'0.3'  => '0.3',
			'0.35' => '0.35',
			'0.4'  => '0.4',
			'0.45' => '0.45',
			'0.5'  => '0.5',
			'0.55' => '0.55',
			'0.6'  => '0.6',
			'0.65' => '0.65',
			'0.7'  => '0.7',
			'0.75' => '0.75',
			'0.8'  => '0.8',
			'0.85' => '0.85',
			'0.9'  => '0.9',
			'0.95' => '0.95',
			'1'    => '1',
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'magazine_slider_overlay_bg_hover_opacity', array(
		'label'    => 'Overlay Color Hover Opacity For Magazine Slider',
		'section'  => 'pencidesign_new_section_color_featured_slider',
		'settings' => 'penci_magazine_slider_overlay_bg_hover_opacity',
		'type'     => 'select',
		'priority' => 34,
		'choices'  => array(
			'0'    => '0',
			'0.05' => '0.05',
			'0.1'  => '0.1',
			'0.15' => '0.15',
			'0.2'  => '0.2',
			'0.25' => '0.25',
			'0.3'  => '0.3',
			'0.35' => '0.35',
			'0.4'  => '0.4',
			'0.45' => '0.45',
			'0.5'  => '0.5',
			'0.55' => '0.55',
			'0.6'  => '0.6',
			'0.65' => '0.65',
			'0.7'  => '0.7',
			'0.75' => '0.75',
			'0.8'  => '0.8',
			'0.85' => '0.85',
			'0.9'  => '0.9',
			'0.95' => '0.95',
			'1'    => '1',
		)
	) ) );

	// Standard layout colors
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'standard_categories_action_color', array(
		'label'    => 'Categories Accent Color',
		'section'  => 'pencidesign_new_section_standard_layout',
		'settings' => 'penci_standard_categories_action_color',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'standard_title_post_color', array(
		'label'    => 'Title Post Color',
		'section'  => 'pencidesign_new_section_standard_layout',
		'settings' => 'penci_standard_title_post_color',
		'priority' => 10
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'standard_title_post_hover_color', array(
		'label'    => 'Title Post Hover Color',
		'section'  => 'pencidesign_new_section_standard_layout',
		'settings' => 'penci_standard_title_post_hover_color',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'standard_share_icon_color', array(
		'label'    => 'Share Box Icon Color',
		'section'  => 'pencidesign_new_section_standard_layout',
		'settings' => 'penci_standard_share_icon_color',
		'priority' => 20
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'standard_share_icon_hover_color', array(
		'label'    => 'Share Box Icon Hover Color',
		'section'  => 'pencidesign_new_section_standard_layout',
		'settings' => 'penci_standard_share_icon_hover_color',
		'priority' => 25
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'standard_accent_color', array(
		'label'    => 'Accent Color',
		'section'  => 'pencidesign_new_section_standard_layout',
		'settings' => 'penci_standard_accent_color',
		'priority' => 30
	) ) );

	// Color for Other Post Layout
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'masonry_categories_accent_color', array(
		'label'    => 'Categories Accent Color',
		'section'  => 'pencidesign_new_section_grid_masonry_layout',
		'settings' => 'penci_masonry_categories_accent_color',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'masonry_title_post_color', array(
		'label'    => 'Title Post Color',
		'section'  => 'pencidesign_new_section_grid_masonry_layout',
		'settings' => 'penci_masonry_title_post_color',
		'priority' => 10
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'masonry_title_post_hover_color', array(
		'label'    => 'Title Post Hover Color',
		'section'  => 'pencidesign_new_section_grid_masonry_layout',
		'settings' => 'penci_masonry_title_post_hover_color',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'masonry_box_icon', array(
		'label'    => 'Share Box Icon Color',
		'section'  => 'pencidesign_new_section_grid_masonry_layout',
		'settings' => 'penci_masonry_box_icon',
		'priority' => 20
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'masonry_box_icon_hover', array(
		'label'    => 'Share Box Icon Color Hover',
		'section'  => 'pencidesign_new_section_grid_masonry_layout',
		'settings' => 'penci_masonry_box_icon_hover',
		'priority' => 25
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'masonry_accent_color', array(
		'label'    => 'Accent Color',
		'section'  => 'pencidesign_new_section_grid_masonry_layout',
		'settings' => 'penci_masonry_accent_color',
		'priority' => 30
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'photography_overlay_color', array(
		'label'    => 'Background Overlay Color For Photography Layout',
		'section'  => 'pencidesign_new_section_grid_masonry_layout',
		'settings' => 'penci_photography_overlay_color',
		'priority' => 35
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'photography_overlay_opacity', array(
		'label'    => 'Background Overlay Opacity For Photography Layout',
		'section'  => 'pencidesign_new_section_grid_masonry_layout',
		'settings' => 'penci_photography_overlay_opacity',
		'type'     => 'select',
		'priority' => 36,
		'choices'  => array(
			'0'    => '0',
			'0.05' => '0.05',
			'0.1'  => '0.1',
			'0.15' => '0.15',
			'0.2'  => '0.2',
			'0.25' => '0.25',
			'0.3'  => '0.3',
			'0.35' => '0.35',
			'0.4'  => '0.4',
			'0.45' => '0.45',
			'0.5'  => '0.5',
			'0.55' => '0.55',
			'0.6'  => '0.6',
			'0.65' => '0.65',
			'0.7'  => '0.7',
			'0.75' => '0.75',
			'0.8'  => '0.8',
			'0.85' => '0.85',
			'0.9'  => '0.9',
			'0.95' => '0.95',
			'1'    => '1',
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'photography_overlay_hover_opacity', array(
		'label'    => 'Background Overlay Hover Opacity For Photography Layout',
		'section'  => 'pencidesign_new_section_grid_masonry_layout',
		'settings' => 'penci_photography_overlay_hover_opacity',
		'type'     => 'select',
		'priority' => 37,
		'choices'  => array(
			'0'    => '0',
			'0.05' => '0.05',
			'0.1'  => '0.1',
			'0.15' => '0.15',
			'0.2'  => '0.2',
			'0.25' => '0.25',
			'0.3'  => '0.3',
			'0.35' => '0.35',
			'0.4'  => '0.4',
			'0.45' => '0.45',
			'0.5'  => '0.5',
			'0.55' => '0.55',
			'0.6'  => '0.6',
			'0.65' => '0.65',
			'0.7'  => '0.7',
			'0.75' => '0.75',
			'0.8'  => '0.8',
			'0.85' => '0.85',
			'0.9'  => '0.9',
			'0.95' => '0.95',
			'1'    => '1',
		)
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'photography_categories_color', array(
		'label'    => 'Categories Color For Photography Layout',
		'section'  => 'pencidesign_new_section_grid_masonry_layout',
		'settings' => 'penci_photography_categories_color',
		'priority' => 40
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'photography_title_post_color', array(
		'label'    => 'Title Post Color For Photography Layout',
		'section'  => 'pencidesign_new_section_grid_masonry_layout',
		'settings' => 'penci_photography_title_post_color',
		'priority' => 45
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'photography_title_post_hover_color', array(
		'label'    => 'Title Post Hover Color For Photography Layout',
		'section'  => 'pencidesign_new_section_grid_masonry_layout',
		'settings' => 'penci_photography_title_post_hover_color',
		'priority' => 50
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'photography_meta_color', array(
		'label'    => 'Meta Color For Photography Layout',
		'section'  => 'pencidesign_new_section_grid_masonry_layout',
		'settings' => 'penci_photography_meta_color',
		'priority' => 55
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'photography_accent_color', array(
		'label'    => 'Accent Color For Photography Layout',
		'section'  => 'pencidesign_new_section_grid_masonry_layout',
		'settings' => 'penci_photography_accent_color',
		'priority' => 60
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'overlay_title_post_color', array(
		'label'    => 'Title Post Color For Overlay Layout',
		'section'  => 'pencidesign_new_section_grid_masonry_layout',
		'settings' => 'penci_overlay_title_post_color',
		'priority' => 65
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'overlay_title_post_hover_color', array(
		'label'    => 'Title Post Hover Color For Overlay Layout',
		'section'  => 'pencidesign_new_section_grid_masonry_layout',
		'settings' => 'penci_overlay_title_post_hover_color',
		'priority' => 70
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'overlay_cat_post_color', array(
		'label'    => 'Categories Post Color For Overlay Layout',
		'section'  => 'pencidesign_new_section_grid_masonry_layout',
		'settings' => 'penci_overlay_cat_post_color',
		'priority' => 75
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'overlay_cat_hover_post_color', array(
		'label'    => 'Categories Post Hover Color For Overlay Layout',
		'section'  => 'pencidesign_new_section_grid_masonry_layout',
		'settings' => 'penci_overlay_cat_hover_post_color',
		'priority' => 80
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'overlay_author_post_color', array(
		'label'    => 'Post Author Color For Overlay Layout',
		'section'  => 'pencidesign_new_section_grid_masonry_layout',
		'settings' => 'penci_overlay_author_post_color',
		'priority' => 85
	) ) );

	// Footer colors
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_widget_area_bg', array(
		'label'    => 'Footer Widget Area Background',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_widget_area_bg',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_widget_area_text_color', array(
		'label'    => 'Footer Widget Area Text Color',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_widget_area_text_color',
		'priority' => 6
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_widget_area_list_border', array(
		'label'    => 'Footer Widget Area List Border Color',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_widget_area_list_border',
		'priority' => 6
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_widget_color', array(
		'label'    => 'Footer Widget Title Text Color',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_widget_color',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_widget_title_border_color', array(
		'label'    => 'Footer Widget Title Border Above Color',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_widget_title_border_color',
		'priority' => 16
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_widget_title_border_below_color', array(
		'label'    => 'Footer Widget Title Border Below Color',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_widget_title_border_below_color',
		'priority' => 17
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_widget_accent_color', array(
		'label'    => 'Footer Widget Accent Color',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_widget_accent_color',
		'priority' => 18
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_widget_accent_hover_color', array(
		'label'    => 'Footer Widget Accent Hover Color',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_widget_accent_hover_color',
		'priority' => 20
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_copyright_bg_color', array(
		'label'    => 'Footer Section Background Color',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_copyright_bg_color',
		'priority' => 21
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_copyright_bg_image', array(
		'label'    => 'Footer Section Background Image',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_copyright_bg_image',
		'priority' => 30
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_icon_color', array(
		'label'    => 'Footer Social Icons Border & Color',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_icon_color',
		'priority' => 35
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_icon_hover_icon_color', array(
		'label'    => 'Footer Social Icons Hover Icons Color',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_icon_hover_icon_color',
		'priority' => 36
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_icon_hover_color', array(
		'label'    => 'Footer Social Icons Hover Border & Background Color',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_icon_hover_color',
		'priority' => 40
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_social_text_color', array(
		'label'    => 'Footer Social Text Color',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_social_text_color',
		'priority' => 45
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_social_hover_text_color', array(
		'label'    => 'Footer Social Hover Text Color',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_social_hover_text_color',
		'priority' => 50
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_social_border_color', array(
		'label'    => 'Footer Section Social Border Bottom Color',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_social_border_color',
		'priority' => 55
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_copyright_text_color', array(
		'label'    => 'Footer Copyright Text Color',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_copyright_text_color',
		'priority' => 60
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_copyright_accent_color', array(
		'label'    => 'Footer Copyright Accent Color',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_copyright_accent_color',
		'priority' => 65
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_go_top_color', array(
		'label'    => 'Go To Top Text & Icon Color',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_go_top_color',
		'priority' => 70
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_go_top_hover_color', array(
		'label'    => 'Go To Top Text & Icon Hover Color',
		'section'  => 'pencidesign_new_section_color_footer',
		'settings' => 'penci_footer_go_top_hover_color',
		'priority' => 75
	) ) );

	// Sidebar Color
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_heading_lowcase', array(
		'label'    => 'Turn Off Uppercase Widget Heading',
		'section'  => 'pencidesign_new_section_color_sidebar',
		'settings' => 'penci_sidebar_heading_lowcase',
		'type'     => 'checkbox',
		'priority' => 1
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_heading_bg', array(
		'label'    => 'Sidebar Widget Heading Background Color',
		'section'  => 'pencidesign_new_section_color_sidebar',
		'settings' => 'penci_sidebar_heading_bg',
		'priority' => 2
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_heading_outer_bg', array(
		'label'    => 'Sidebar Widget Heading Background Outer Color',
		'section'  => 'pencidesign_new_section_color_sidebar',
		'settings' => 'penci_sidebar_heading_outer_bg',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_heading_border_color', array(
		'label'    => 'Sidebar Widget Heading Border Color',
		'section'  => 'pencidesign_new_section_color_sidebar',
		'settings' => 'penci_sidebar_heading_border_color',
		'priority' => 6
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_heading_border_inner_color', array(
		'label'    => 'Sidebar Widget Heading Border Outer Color',
		'section'  => 'pencidesign_new_section_color_sidebar',
		'settings' => 'penci_sidebar_heading_border_inner_color',
		'priority' => 7
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_heading_color', array(
		'label'    => 'Sidebar Widget Heading Text Color',
		'section'  => 'pencidesign_new_section_color_sidebar',
		'settings' => 'penci_sidebar_heading_color',
		'priority' => 10
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_remove_border_outer', array(
		'label'    => 'Remove Border Outer on Widget Heading',
		'section'  => 'pencidesign_new_section_color_sidebar',
		'settings' => 'penci_sidebar_remove_border_outer',
		'type'     => 'checkbox',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_remove_arrow_down', array(
		'label'    => 'Remove Arrow Down on Widget Heading',
		'section'  => 'pencidesign_new_section_color_sidebar',
		'settings' => 'penci_sidebar_remove_arrow_down',
		'type'     => 'checkbox',
		'priority' => 20
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_accent_color', array(
		'label'    => 'Accent Color',
		'section'  => 'pencidesign_new_section_color_sidebar',
		'settings' => 'penci_sidebar_accent_color',
		'priority' => 40
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_accent_hover_color', array(
		'label'    => 'Accent Hover Color',
		'section'  => 'pencidesign_new_section_color_sidebar',
		'settings' => 'penci_sidebar_accent_hover_color',
		'priority' => 45
	) ) );

	// Single Color
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'single_cat_color', array(
		'label'    => 'Single Categories Accent Color',
		'section'  => 'pencidesign_new_section_color_posts',
		'settings' => 'penci_single_cat_color',
		'priority' => 1
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'single_title_color', array(
		'label'    => 'Single Title Color',
		'section'  => 'pencidesign_new_section_color_posts',
		'settings' => 'penci_single_title_color',
		'priority' => 5
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'single_share_icon_color', array(
		'label'    => 'Share Box Icon Color',
		'section'  => 'pencidesign_new_section_color_posts',
		'settings' => 'penci_single_share_icon_color',
		'priority' => 15
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'single_share_icon_hover_color', array(
		'label'    => 'Share Box Icon Hover Color',
		'section'  => 'pencidesign_new_section_color_posts',
		'settings' => 'penci_single_share_icon_hover_color',
		'priority' => 20
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'single_number_like_color', array(
		'label'    => 'Numbers Like Of Post Color',
		'section'  => 'pencidesign_new_section_color_posts',
		'settings' => 'penci_single_number_like_color',
		'priority' => 21
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'single_accent_color', array(
		'label'    => 'Accent Color',
		'section'  => 'pencidesign_new_section_color_posts',
		'settings' => 'penci_single_accent_color',
		'priority' => 25
	) ) );

	// Custom CSS
	$wp_customize->add_control( new Customize_CustomCss_Control( $wp_customize, 'custom_css', array(
		'label'    => 'Custom CSS',
		'section'  => 'pencidesign_new_section_custom_css',
		'settings' => 'penci_custom_css',
		'type'     => 'custom_css',
		'priority' => 5
	) ) );


	// Remove Sections
	$wp_customize->remove_section( 'title_tagline' );
	$wp_customize->remove_section( 'nav' );
	$wp_customize->remove_section( 'static_front_page' );
	$wp_customize->remove_section( 'colors' );
	$wp_customize->remove_section( 'background_image' );

}

/**
 * Callback function for sanitizing radio settings.
 * Use for PenciDesign
 *
 * @param $input , $setting
 * @return $input
 */
function penci_sanitize_choices_field( $input ) {
	return $input;
}

/**
 * Callback function for sanitizing textarea settings
 * Use for PenciDesign
 *
 * @param $input , $setting
 * @return $input
 */
function penci_sanitize_textarea_field( $input ) {
	return $input;
}

/**
 * Callback function for sanitizing checkbox settings.
 * Use for PenciDesign
 *
 * @param $input
 * @return string default value if type is not exists
 */
function penci_sanitize_checkbox_field( $input ) {
	if ( $input == 1 ) {
		return true;
	}
	else {
		return false;
	}
}

/**
 * Callback function for sanitizing checkbox settings.
 * Use for PenciDesign
 *
 * @param $input
 * @return a number
 */
function penci_sanitize_number_field( $input ) {
	return absint( $input );
}

add_action( 'customize_register', 'pencidesign_register_theme_customizer' );
?>