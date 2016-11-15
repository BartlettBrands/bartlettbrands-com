<?php

/**

 * Global content width

 *

 * @param $content_width

 *

 * @since 1.0

 * @return void

 */

if ( ! isset( $content_width ) )

	$content_width = 1170;



/**

 * Theme setup

 * Hook to action after_setup_theme

 *

 * @since 1.0

 * @return void

 */

add_action( 'after_setup_theme', 'penci_soledad_theme_setup' );

if ( ! function_exists( 'penci_soledad_theme_setup' ) ) {

	function penci_soledad_theme_setup() {



		// This theme styles the visual editor with editor-style.css to match the theme style.

		add_editor_style();



		// Register navigation menu

		register_nav_menus( array(

			'main-menu'   => 'Primary Menu',

			'topbar-menu' => 'Topbar Menu'

		) );



		// Localization support

		load_theme_textdomain( 'soledad', get_template_directory() . '/languages' );



		// Feed Links

		add_theme_support( 'automatic-feed-links' );



		// Post formats - we support 4 post format: standard, gallery, video and audio

		add_theme_support( 'post-formats', array( 'standard', 'gallery', 'video', 'audio', 'link', 'quote' ) );



		// Post thumbnails

		add_theme_support( 'post-thumbnails' );

		add_image_size( 'penci-full-thumb', 1170, 0, true );

		add_image_size( 'penci-slider-thumb', 1170, 663, true );

		add_image_size( 'penci-magazine-slider', 780, 516, true );

		add_image_size( 'penci-slider-full-thumb', 1920, 600, true );

		add_image_size( 'penci-thumb', 585, 390, true );

		add_image_size( 'penci-masonry-thumb', 585, 99999, false );

	}

}



/**

 * Enqueue styles/scripts

 * Hook to action wp_enqueue_scripts

 *

 * @since 1.0

 * @return void

 */

if ( ! function_exists( 'penci_load_scripts' ) ) {

	add_action( 'wp_enqueue_scripts', 'penci_load_scripts' );

	function penci_load_scripts() {



		// Enqueue style

		wp_enqueue_style( 'penci_style', get_stylesheet_directory_uri() . '/style.css', array(), '2.4.1' );



		// Enqueue script

		wp_enqueue_script( 'libs-js', get_template_directory_uri() . '/js/libs-script.min.js', array( 'jquery' ), '2.4.1', true );

		if ( get_theme_mod( 'penci_enable_retina' ) ) {

			wp_enqueue_script( 'penci-retina', get_template_directory_uri() . '/js/retina.min.js', array( 'jquery' ), '1.0', true );

		}

		if ( get_theme_mod( 'penci_enable_smooth_scroll' ) ) {

			wp_enqueue_script( 'penci-smoothscroll', get_template_directory_uri() . '/js/smoothscroll.js', array( 'jquery' ), '1.0', true );

		}

		wp_enqueue_script( 'main-scripts', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '2.4.1', true );

		wp_enqueue_script( 'penci_ajax_like_post', get_template_directory_uri() . '/js/post-like.js', array( 'jquery' ), '2.4.1', true );

		wp_localize_script( 'penci_ajax_like_post', 'ajax_var', array(

				'url'   => admin_url( 'admin-ajax.php' ),

				'nonce' => wp_create_nonce( 'ajax-nonce' )

			)

		);



		// js for comments

		if ( is_singular() && get_option( 'thread_comments' ) )

			wp_enqueue_script( 'comment-reply' );



	}

}





/**

 * Enqueue styles/scripts

 * Hook to action wp_enqueue_scripts

 *

 * @since 2.0

 * @return void

 */

if ( ! function_exists( 'penci_load_admin_scripts' ) ) {

	add_action( 'admin_enqueue_scripts', 'penci_load_admin_scripts' );

	function penci_load_admin_scripts() {



		wp_enqueue_style( 'admin-css', get_template_directory_uri() . '/css/admin.css' );

		wp_enqueue_script( 'opts-field-upload-js', get_template_directory_uri() . '/js/field_upload.js', array( 'jquery' ), '1.0', true );

		wp_enqueue_media();

		wp_enqueue_style('wp-color-picker');

		wp_enqueue_script( 'penci-opts-color-js', get_template_directory_uri() . '/js/field_color.js', array( 'jquery', 'wp-color-picker'), '1.0', true );

		wp_enqueue_script( 'jquery-ui-sortable', array( 'jquery' ) );

		wp_enqueue_script( 'reorder-slides', get_template_directory_uri() . '/js/reorder.js', array( 'jquery' ), false, '1.0' );

	}

}



/**

 * Fallback when menu location is not checked

 * Callback function in wp_nav_menu() on header.php

 *

 * @since 1.0

 */

if ( ! function_exists( 'penci_menu_fallback' ) ) {

	function penci_menu_fallback() {

		if ( ! current_user_can( 'manage_options' ) ) {

			wp_page_menu();

		} else {

			echo '<ul class="menu"><li class="menu-item-first"><a href="' . esc_url( home_url('/') ) . 'wp-admin/nav-menus.php?action=locations">Create or select a menu</a></li></ul>';

		}

	}

}



/**

 * Add more penci-body-boxed to body_class() function

 * This class will add more when body boxed is enable

 *

 * @package Wordpress

 * @since 1.0

 */



if ( ! function_exists( 'penci_add_more_body_boxed_class' ) ) {

	add_filter( 'body_class', 'penci_add_more_body_boxed_class' );

	function penci_add_more_body_boxed_class( $classes ) {

		if ( get_theme_mod( 'penci_body_boxed_layout' ) ){

			// add 'penci-body-boxed' to the $classes array

			$classes[] = 'penci-body-boxed';

		}

		return $classes;

	}

}



/**

 * Penci Allow HTML use in data validation wp_kses()

 *

 * @since 1.0

 * @return array HTML allow

 */

if ( ! function_exists( 'penci_allow_html' ) ) {

	function penci_allow_html() {

		$return = array(

			'a'      => array(

				'href'   => array(),

				'title'  => array(),

				'target' => array(),

				'title'  => array()

			),

			'div'    => array(

				'class' => array(),

				'id'    => array(),

			),

			'ul'     => array(

				'class' => array(),

				'id'    => array()

			),

			'ol'     => array(

				'class' => array(),

				'id'    => array()

			),

			'li'     => array(

				'class' => array(),

				'id'    => array()

			),

			'br'     => array(),

			'h1'     => array(

				'class' => array(),

				'id'    => array()

			),

			'h2'     => array(

				'class' => array(),

				'id'    => array()

			),

			'h3'     => array(

				'class' => array(),

				'id'    => array()

			),

			'h4'     => array(

				'class' => array(),

				'id'    => array()

			),

			'h5'     => array(

				'class' => array(),

				'id'    => array()

			),

			'h6'     => array(

				'class' => array(),

				'id'    => array()

			),

			'img'    => array(

				'alt'   => array(),

				'src'   => array(),

				'title' => array()

			),

			'em'     => array(),

			'b'      => array(),

			'i'      => array(

				'class' => array(),

				'id'    => array()

			),

			'strong' => array(

				'class' => array(),

				'id'    => array()

			),

			'span'   => array(

				'class' => array(),

				'id'    => array()

			),

		);



		return $return;

	}

}



/**

 * Get categories array

 *

 * @since 1.0

 * @return array $categories

 */

if ( ! function_exists( 'penci_list_categories' ) ) {

	function penci_list_categories() {

		$categories = get_categories( array(

			'hide_empty' => 0

		) );



		$return = array();

		foreach ( $categories as $cat ) {

			$return[$cat->cat_name] = $cat->term_id;

		}



		return $return;

	}

}





/**

 * Modify more tag

 *

 * @since 1.0

 * @return new markup more tags

 */

if ( ! function_exists( 'penci_modify_more_tags' ) ) {

	/**

	 * @param $link

	 *

	 * @return string

	 */

	function penci_modify_more_tags( $link ) {



		return '<div class="penci-more-link">' . $link . '</div>';

	}



	add_filter('the_content_more_link', 'penci_modify_more_tags');

}



/**

 * Include Files

 *

 * @since 1.0

 * @return void

 */



// Customizer

include( trailingslashit( get_template_directory() ). 'inc/customizer/default.php' );

include( trailingslashit( get_template_directory() ). 'inc/customizer/controller.php' );

include( trailingslashit( get_template_directory() ). 'inc/customizer/settings.php' );

include( trailingslashit( get_template_directory() ). 'inc/customizer/style.php' );

include( trailingslashit( get_template_directory() ). 'inc/fonts/fonts.php' );



// Modules

include( trailingslashit( get_template_directory() ). 'inc/modules/penci-render.php' );

include( trailingslashit( get_template_directory() ). 'inc/modules/penci-walker.php' );



// Widgets

include( trailingslashit( get_template_directory() ). 'inc/widgets/about_widget.php' );

include( trailingslashit( get_template_directory() ). 'inc/widgets/facebook_widget.php' );

include( trailingslashit( get_template_directory() ). 'inc/widgets/lastest_post_widget.php' );

include( trailingslashit( get_template_directory() ). 'inc/widgets/posts_slider_widget.php' );

include( trailingslashit( get_template_directory() ). 'inc/widgets/popular_post_widget.php' );

include( trailingslashit( get_template_directory() ). 'inc/widgets/social_widget.php' );

include( trailingslashit( get_template_directory() ). 'inc/widgets/quote_widget.php' );

include( trailingslashit( get_template_directory() ). 'inc/widgets/pinterest_widget.php' );

if ( function_exists( 'getTweets' ) ) {

	include( trailingslashit( get_template_directory() ). 'inc/widgets/latest_tweets.php' );

}



// Like post

include( trailingslashit( get_template_directory() ). 'inc/like_post/post-like.php' );



// Meta box

include( trailingslashit( get_template_directory() ). 'inc/meta-box/meta-box.php' );

include( trailingslashit( get_template_directory() ). 'inc/meta-box/categories-meta-box.php' );





/**

 * Register main sidebar and sidebars in footer

 *

 * @since 1.0

 * @return void

 */

if ( function_exists( 'register_sidebar' ) ) {

	register_sidebar( array(

		'name'          => esc_html__( 'Main Sidebar', 'soledad' ),

		'id'            => 'main-sidebar',

		'before_widget' => '<aside id="%1$s" class="widget %2$s">',

		'after_widget'  => '</aside>',

		'before_title'  => '<h4 class="widget-title penci-border-arrow"><span class="inner-arrow">',

		'after_title'   => '</span></h4>',

	) );



	register_sidebar( array(

		'name'          => esc_html__( 'Header Signup Form', 'soledad' ),

		'id'            => 'header-signup-form',

		'before_widget' => '<aside id="%1$s" class="widget %2$s">',

		'after_widget'  => '</aside>',

		'before_title'  => '<h4 class="header-signup-form">',

		'after_title'   => '</h4>',

		'description'   => 'Only use for MailChimp Sign-Up Form widget. Display your Sign-Up Form widget below the header. Please use markup we provide here: http://pencidesign.com/soledad/soledad-document/#!/widgets to display exact',

	) );



	for ( $i = 1; $i <= 3; $i ++ ) {

		register_sidebar( array(

			'name'          => sprintf( esc_html__( 'Footer Column #%s', 'soledad' ), $i ),

			'id'            => 'footer-' . $i,

			'before_widget' => '<aside id="%1$s" class="widget %2$s">',

			'after_widget'  => '</aside>',

			'before_title'  => '<h4 class="widget-title penci-border-arrow"><span class="inner-arrow">',

			'after_title'   => '</span></h4>',

		) );

	}



	register_sidebar( array(

		'name'          => esc_html__( 'Footer Instagram', 'soledad' ),

		'id'            => 'footer-instagram',

		'before_widget' => '<aside id="%1$s" class="widget %2$s">',

		'after_widget'  => '</aside>',

		'before_title'  => '<h4 class="footer-instagram-title"><span><span class="title">',

		'after_title'   => '</span></span></h4>',

		'description'   => esc_html__( 'Only use for Instagram Slider widget. Display instagram images on your website footer', 'soledad' ),

	) );



	register_sidebar( array(

		'name'          => esc_html__( 'Sidebar For Shop Page & Shop Archive', 'soledad' ),

		'id'            => 'penci-shop-sidebar',

		'before_widget' => '<aside id="%1$s" class="widget %2$s">',

		'after_widget'  => '</aside>',

		'before_title'  => '<h4 class="widget-title penci-border-arrow"><span class="inner-arrow">',

		'after_title'   => '</span></h4>',

		'description'   => 'This sidebar for Shop Page & Shop Archive, if this sidebar is empty, will display Main Sidebar',

	) );



	register_sidebar( array(

		'name'          => esc_html__( 'Sidebar For Single Product', 'soledad' ),

		'id'            => 'penci-shop-single',

		'before_widget' => '<aside id="%1$s" class="widget %2$s">',

		'after_widget'  => '</aside>',

		'before_title'  => '<h4 class="widget-title penci-border-arrow"><span class="inner-arrow">',

		'after_title'   => '</span></h4>',

		'description'   => 'This sidebar for Single Product, if this sidebar is empty, will display Main Sidebar',

	) );



	for ( $i = 1; $i <= 6; $i ++ ) {

		register_sidebar( array(

			'name'          => sprintf( esc_html__( 'Custom Sidebar %s', 'soledad' ), $i ),

			'id'            => 'custom-sidebar-' . $i,

			'before_widget' => '<aside id="%1$s" class="widget %2$s">',

			'after_widget'  => '</aside>',

			'before_title'  => '<h4 class="widget-title penci-border-arrow"><span class="inner-arrow">',

			'after_title'   => '</span></h4>',

		) );

	}

}



/**

 * Include default fonts support by browser

 *

 * @since 2.0

 * @return array list $penci_font_browser_arr

 */

if ( ! function_exists( 'penci_font_browser' ) ) {

	function penci_font_browser() {

		$penci_font_browser_arr = array();

		$penci_font_browser     = array(

			'Arial, Helvetica, sans-serif',

			'"Arial Black", Gadget, sans-serif',

			'"Comic Sans MS", cursive, sans-serif',

			'Impact, Charcoal, sans-serif',

			'"Lucida Sans Unicode", "Lucida Grande", sans-serif',

			'Tahoma, Geneva, sans-serif',

			'"Trebuchet MS", Helvetica, sans-serif',

			'Verdana, Geneva, sans-serif',

			'Georgia, serif',

			'"Palatino Linotype", "Book Antiqua", Palatino, serif',

			'"Times New Roman", Times, serif',

			'"Courier New", Courier, monospace',

			'"Lucida Console", Monaco, monospace',

		);

		foreach ( $penci_font_browser as $font ) {

			$penci_font_browser_arr[$font] = $font;

		}



		return $penci_font_browser_arr;

	}

}



/**

 * Merge 2 array fonts to one array

 *

 * @since 1.0

 * @return array fonts $penci_font_browser_arr

 */

if ( ! function_exists( 'penci_all_fonts' ) ) {

	function penci_all_fonts() {

		return array_merge( penci_font_browser(), penci_list_google_fonts_array() );

	}

}



/**

 * Modify category widget defaults

 * Hook to wp_list_categories

 *

 * @since 1.0

 */

if ( ! function_exists( 'penci_add_more_span_cat_count' ) ) {

	add_filter( 'wp_list_categories', 'penci_add_more_span_cat_count' );

	function penci_add_more_span_cat_count( $links ) {



		$links = preg_replace( '/<\/a> \(([0-9]+)\)/', ' <span class="category-item-count">(\\1)</span></a>', $links );



		return $links;

	}

}



/**

 * Custom number posts per page on homepage

 *

 * @since 1.0

 * @return void

 */

if( get_theme_mod( 'penci_home_lastest_posts_numbers' ) ) {

	if ( ! function_exists( 'penci_custom_posts_per_page_for_home' ) ) {

		function penci_custom_posts_per_page_for_home( $query ) {

			$blog_posts = get_option('posts_per_page ');

			$posts_page = get_theme_mod( 'penci_home_lastest_posts_numbers' );

			if( is_numeric( $posts_page ) && $posts_page > 0 && $posts_page != $blog_posts ) {

				if ( $query->is_home() && $query->is_main_query() ) {

					$query->set( 'posts_per_page', $posts_page );

				}

			}

		}



		add_action('pre_get_posts','penci_custom_posts_per_page_for_home');

	}

}



/**

 * Custom number posts per page on portfolio

 *

 * @since 1.0

 * @return void

 */

if ( ! function_exists( 'penci_portfolio_posts_numbers' ) ) {

	function penci_portfolio_posts_numbers( $query ) {

		$blog_posts = get_option('posts_per_page ');

		if ( $query->is_tax('portfolio-category') && $query->is_main_query() ) {

			$query->set( 'posts_per_page', $blog_posts );

		}

	}



	add_action('pre_get_posts','penci_portfolio_posts_numbers');

}



/**

 * Custom orderby & order post

 *

 * @since 1.0

 * @return void

 */

if ( ! function_exists( 'penci_custom_posts_oderby' ) ) {

	function penci_custom_posts_oderby( $query ) {

		if ( ( $query->is_home() && $query->is_main_query() ) || ( $query->is_archive() && $query->is_main_query() ) ) {

			$orderby = get_theme_mod( 'penci_general_post_orderby' );

			if( !$orderby ): $orderby = 'date'; endif;

			$order = get_theme_mod( 'penci_general_post_order' );

			if( !$order ): $order = 'DESC'; endif;



			$query->set( 'orderby', $orderby );

			$query->set( 'order', $order );

		}

	}



	add_action('pre_get_posts','penci_custom_posts_oderby');

}



/**

 * Add lightbox for single post by filter

 * Hook to the_content() function

 *

 * @since 1.0

 */

if ( ! function_exists( 'penci_filter_image_attr' ) ) {

	if ( ! get_theme_mod( 'penci_disable_lightbox_single' ) ) {

		add_filter( 'the_content', 'penci_filter_image_attr' );

		function penci_filter_image_attr( $content ) {

			global $post;



			if( !is_home() && !is_archive() ):

				$pattern     = "/<a(.*?)href=('|\")(.*?).(bmp|gif|jpeg|jpg|png)('|\")(.*?)><img/i";

				$replacement = '<a$1href=$2$3.$4$5 data-rel="penci-gallery-image-content" $6><img';

				$content     = preg_replace( $pattern, $replacement, $content );

			endif;



			return $content;

		}

	}

}



/**

 * Pagination next post and previous post

 *

 * @since 1.0

 * @return void

 */

if ( ! function_exists( 'penci_soledad_pagination' ) ) {

	function penci_soledad_pagination() {



		if( get_theme_mod( 'penci_page_navigation_numbers' ) ) {

			echo penci_pagination_numbers();

		} else {

			global $wp_query;

			if ( $wp_query->max_num_pages > 1 ) :

				?>

				<div class="penci-pagination">

					<div class="newer">

						<?php if( get_previous_posts_link() ) { ?>

							<?php previous_posts_link( wp_kses( __( '<span><i class="fa fa-angle-left"></i> Newer Posts</span>', 'soledad' ), penci_allow_html() ) ); ?>

						<?php } else { ?>

							<?php echo '<div class="disable-url">' . wp_kses( __( '<span><i class="fa fa-angle-left"></i> Newer Posts</span>', 'soledad' ), penci_allow_html() ) . '</div>'; ?>

						<?php } ?>

					</div>

					<div class="older">

						<?php if( get_next_posts_link() ) { ?>

							<?php next_posts_link( wp_kses( __( '<span>Older Posts <i class="fa fa-angle-right"></i></span>', 'soledad' ), penci_allow_html() ) ); ?>

						<?php } else { ?>

							<?php echo '<div class="disable-url">' . wp_kses( __( '<span>Older Posts <i class="fa fa-angle-right"></i></span>', 'soledad' ), penci_allow_html() ) . '</div>'; ?>

						<?php } ?>

					</div>

				</div>

			<?php

			endif;

		}

	}

}



/**

 * Pagination numbers

 *

 * @since 1.0

 * @return void

 */

if ( ! function_exists( 'penci_pagination_numbers' ) ) {

	function penci_pagination_numbers( $custom_query = false ) {

		global $wp_query;

		if ( !$custom_query ) $custom_query = $wp_query;



		$big = 999999999; // need an unlikely integer

		$pagination = paginate_links( array(

			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),

			'format' => '?paged=%#%',

			'current' => max( 1, get_query_var( 'paged' ) ),

			'total' => $custom_query->max_num_pages,

			'type'   => 'list',

			'prev_text'    => '<i class="fa fa-angle-left"></i>',

			'next_text'    => '<i class="fa fa-angle-right"></i>',

		) );



		$pagenavi_align = get_theme_mod( 'penci_page_navigation_align' );

		if( ! $pagenavi_align ): $pagenavi_align = 'align-left'; endif;



		if ( $pagination ) {

			return '<div class="penci-pagination '. esc_attr( $pagenavi_align ) .'">'. $pagination . '</div>';

		}

	}

}



/**

 * Comments template

 *

 * @since 1.0

 * @return void

 */

if ( ! function_exists( 'penci_comments_template' ) ) {

	function penci_comments_template( $comment, $args, $depth ) {

		$GLOBALS['comment'] = $comment;

		?>

		<div <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">

			<div class="thecomment">

				<div class="author-img">

					<?php echo get_avatar( $comment, $args['avatar_size'] ); ?>

				</div>

				<div class="comment-text">

					<span class="author"><?php echo get_comment_author_link(); ?></span>

					<span class="date"><i class="fa fa-calendar-o"></i><?php printf( esc_html__( '%1$s at %2$s', 'soledad' ), get_comment_date(), get_comment_time() ) ?></span>

					<?php if ( $comment->comment_approved == '0' ) : ?>

						<em><i class="icon-info-sign"></i> <?php esc_html_e( 'Your comment awaiting approval', 'soledad' ); ?></em>

					<?php endif; ?>

					<div class="comment-content"><?php comment_text(); ?></div>

					<span class="reply">

						<?php comment_reply_link( array_merge( $args, array(

							'reply_text' => esc_html__( 'Reply', 'soledad' ),

							'depth'      => $depth,

							'max_depth'  => $args['max_depth']

						) ), $comment->comment_ID ); ?>

						<?php edit_comment_link( esc_html__( 'Edit', 'soledad' ) ); ?>

					</span>

				</div>

			</div>

	<?php

	}

}



/**

 * Author socials url

 *

 * @since 1.0

 * @param array $contactmethods

 * @return new array $contactmethods

 */

if ( ! function_exists( 'penci_author_social' ) ) {

	function penci_author_social( $contactmethods ) {

		$contactmethods['twitter']   = 'Twitter Username';

		$contactmethods['facebook']  = 'Facebook Username';

		$contactmethods['google']    = 'Google Plus Username';

		$contactmethods['tumblr']    = 'Tumblr Username';

		$contactmethods['instagram'] = 'Instagram Username';

		$contactmethods['pinterest'] = 'Pinterest Username';



		return $contactmethods;

	}

	add_filter( 'user_contactmethods', 'penci_author_social', 10, 1 );

}



/**

 * This file represents an example of the code that themes would use to register

 * the required plugins.

 *

 * It is expected that theme authors would copy and paste this code into their

 * functions.php file, and amend to suit.

 *

 * @package       TGM-Plugin-Activation

 * @subpackage    Example

 * @version       2.5.0-alpha

 * @author        Thomas Griffin <thomas@thomasgriffinmedia.com>

 * @author        Gary Jones <gamajo@gamajo.com>

 * @copyright     Copyright (c) 2012, Thomas Griffin

 * @license       http://opensource.org/licenses/gpl-2.0.php GPL v2 or later

 * @link          https://github.com/thomasgriffin/TGM-Plugin-Activation

 */



/**

 * Include the TGM_Plugin_Activation class.

 */

require_once trailingslashit( get_template_directory() ) . 'class-tgm-plugin-activation.php';



add_action( 'tgmpa_register', 'penci_register_required_plugins' );

/**

 * Register the required plugins for this theme.

 *

 * In this example, we register two plugins - one included with the TGMPA library

 * and one from the .org repo.

 *

 * The variable passed to tgmpa_register_plugins() should be an array of plugin

 * arrays.

 *

 * This function is hooked into tgmpa_init, which is fired within the

 * TGM_Plugin_Activation class constructor.

 */

if ( ! function_exists( 'penci_register_required_plugins' ) ) {

	function penci_register_required_plugins() {



		/**

		 * Array of plugin arrays. Required keys are name and slug.

		 * If the source is NOT from the .org repo, then source is also required.

		 */

		$plugins = array(



			array(

				'name'               => 'Vafpress Post Formats UI', // The plugin name

				'slug'               => 'vafpress-post-formats-ui-develop', // The plugin slug (typically the folder name)

				'source'             => get_stylesheet_directory() . '/plugins/vafpress-post-formats-ui-develop.zip', // The plugin source

				'required'           => true, // If false, the plugin is only 'recommended' instead of required

				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented

				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch

				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins

				'external_url'       => '', // If set, overrides default API URL and points to an external URL

			),

			array(

				'name'               => 'Penci Shortcodes', // The plugin name

				'slug'               => 'penci-shortcodes', // The plugin slug (typically the folder name)

				'source'             => get_stylesheet_directory() . '/plugins/penci-shortcodes.zip', // The plugin source

				'required'           => true, // If false, the plugin is only 'recommended' instead of required

				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented

				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch

				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins

				'external_url'       => '', // If set, overrides default API URL and points to an external URL

			),

			array(

				'name'               => 'Penci Portfolio', // The plugin name

				'slug'               => 'penci-portfolio', // The plugin slug (typically the folder name)

				'source'             => get_stylesheet_directory() . '/plugins/penci-portfolio.zip', // The plugin source

				'required'           => false, // If false, the plugin is only 'recommended' instead of required

				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented

				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch

				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins

				'external_url'       => '', // If set, overrides default API URL and points to an external URL

			),

			array(

				'name'               => 'Penci Slider', // The plugin name

				'slug'               => 'penci-soledad-slider', // The plugin slug (typically the folder name)

				'source'             => get_stylesheet_directory() . '/plugins/penci-soledad-slider.zip', // The plugin source

				'required'           => true, // If false, the plugin is only 'recommended' instead of required

				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented

				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch

				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins

				'external_url'       => '', // If set, overrides default API URL and points to an external URL

			),

			array(

				'name'               => 'Instagram Slider Widget', // The plugin name

				'slug'               => 'instagram-slider-widget', // The plugin slug (typically the folder name)

				'required'           => false, // If false, the plugin is only 'recommended' instead of required

				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented

				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch

				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins

				'external_url'       => '', // If set, overrides default API URL and points to an external URL

			),

			array(

				'name'               => 'oAuth Twitter Feed', // The plugin name

				'slug'               => 'oauth-twitter-feed-for-developers', // The plugin slug (typically the folder name)

				'required'           => false, // If false, the plugin is only 'recommended' instead of required

				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented

				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch

				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins

				'external_url'       => '', // If set, overrides default API URL and points to an external URL

			),

			array(

				'name'               => 'Contact Form 7', // The plugin name

				'slug'               => 'contact-form-7', // The plugin slug (typically the folder name)

				'required'           => false, // If false, the plugin is only 'recommended' instead of required

				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented

				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch

				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins

				'external_url'       => '', // If set, overrides default API URL and points to an external URL

			),

			array(

				'name'               => 'MailChimp for WordPress', // The plugin name

				'slug'               => 'mailchimp-for-wp', // The plugin slug (typically the folder name)

				'required'           => false, // If false, the plugin is only 'recommended' instead of required

				'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented

				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch

				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins

				'external_url'       => '', // If set, overrides default API URL and points to an external URL

			)



		);



		/*

		 * Array of configuration settings. Amend each line as needed.

		 *

		 * TGMPA will start providing localized text strings soon. If you already have translations of our standard

		 * strings available, please help us make TGMPA even better by giving us access to these translations or by

		 * sending in a pull-request with .po file(s) with the translations.

		 *

		 * Only uncomment the strings in the config array if you want to customize the strings.

		 *

		 * Some of the strings are wrapped in a sprintf(), so see the comments at the

		 * end of each line for what each argument will be.

		 */

		$config = array(

			'id'           => 'tgmpa', // Unique ID for hashing notices for multiple instances of TGMPA.

			'default_path' => '', // Default absolute path to pre-packaged plugins.

			'menu'         => 'tgmpa-install-plugins', // Menu slug.

			'parent_slug'  => 'themes.php', // Parent menu slug.

			'capability'   => 'edit_theme_options', // Capability needed to view plugin install page, should be a capability associated with the parent menu used.

			'has_notices'  => true, // Show admin notices or not.

			'dismissable'  => true, // If false, a user cannot dismiss the nag message.

			'dismiss_msg'  => '', // If 'dismissable' is false, this message will be output at top of nag.

			'is_automatic' => false, // Automatically activate plugins after installation or not.

			'message'      => '', // Message to output right before the plugins table.

			'strings'      => array(

				'page_title'                      => esc_html__( 'Install Required Plugins', 'soledad' ),

				'menu_title'                      => esc_html__( 'Install Plugins', 'soledad' ),

				'installing'                      => esc_html__( 'Installing Plugin: %s', 'soledad' ),

				// %s = plugin name.

				'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'soledad' ),

				'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'soledad' ),

				// %1$s = plugin name(s).

				'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'soledad' ),

				// %1$s = plugin name(s).

				'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %1$s plugin.', 'Sorry, but you do not have the correct permissions to install the %1$s plugins.', 'soledad' ),

				// %1$s = plugin name(s).

				'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'soledad' ),

				// %1$s = plugin name(s).

				'notice_ask_to_update_maybe'      => _n_noop( 'There is an update available for: %1$s.', 'There are updates available for the following plugins: %1$s.', 'soledad' ),

				// %1$s = plugin name(s).

				'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %1$s plugin.', 'Sorry, but you do not have the correct permissions to update the %1$s plugins.', 'soledad' ),

				// %1$s = plugin name(s).

				'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'soledad' ),

				// %1$s = plugin name(s).

				'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'soledad' ),

				// %1$s = plugin name(s).

				'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %1$s plugin.', 'Sorry, but you do not have the correct permissions to activate the %1$s plugins.', 'soledad' ),

				// %1$s = plugin name(s).

				'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'soledad' ),

				'update_link'                     => _n_noop( 'Begin updating plugin', 'Begin updating plugins', 'soledad' ),

				'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'soledad' ),

				'return'                          => esc_html__( 'Return to Required Plugins Installer', 'soledad' ),

				'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'soledad' ),

				'activated_successfully'          => esc_html__( 'The following plugin was activated successfully:', 'soledad' ),

				'plugin_already_active'           => esc_html__( 'No action taken. Plugin %1$s was already active.', 'soledad' ),

				// %1$s = plugin name(s).

				'plugin_needs_higher_version'     => esc_html__( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'soledad' ),

				// %1$s = plugin name(s).

				'complete'                        => esc_html__( 'All plugins installed and activated successfully. %1$s', 'soledad' ),

				// %s = dashboard link.

				'contact_admin'                   => esc_html__( 'Please contact the administrator of this site for help.', 'soledad' ),

				'nag_type'                        => 'updated',

				// Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.

			)

		);



		tgmpa( $plugins, $config );



	}

}





/**

 * Featured category to display in top slider

 *

 * @since 1.0

 * @param string $separator

 * @return void

 */

if ( ! function_exists( 'penci_category' ) ) {

	function penci_category( $separator ) {

		if ( get_theme_mod( 'penci_featured_cat_hide' ) == true ) {

			$excluded_cat = get_theme_mod( 'penci_featured_cat' );

			$first_time = 1;

			foreach ( ( get_the_category() ) as $category ) {

				if ( $category->cat_ID != $excluded_cat ) {

					if ( $first_time == 1 ) {

						echo '<a class="penci-cat-name" href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( esc_html__( "View all posts in %s", "pencidesign" ), esc_attr( $category->name ) ) . '" ' . '>' . $category->name . '</a>';

						$first_time = 0;

					}

					else {

						echo wp_kses( $separator, penci_allow_html() ) . '<a class="penci-cat-name" href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( esc_html__( "View all posts in %s", "pencidesign" ), esc_attr( $category->name ) ) . '" ' . '>' . $category->name . '</a>';

					}

				}

			}

		}

		else {

			$first_time = 1;

			foreach ( ( get_the_category() ) as $category ) {

				if ( $first_time == 1 ) {

					echo '<a class="penci-cat-name" href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( esc_html__( "View all posts in %s", "pencidesign" ), esc_attr( $category->name ) ) . '" ' . '>' . $category->name . '</a>';

					$first_time = 0;

				}

				else {

					echo wp_kses( $separator, penci_allow_html() ) . '<a class="penci-cat-name" href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( esc_html__( "View all posts in %s", "pencidesign" ), esc_attr( $category->name ) ) . '" ' . '>' . $category->name . '</a>';

				}

			}

		}

	}

}



/**

 * Custom the_excerpt() length function

 *

 * @since 1.0

 * @param number $length of the_excerpt

 * @return new number excerpt length

 */

if ( ! function_exists( 'penci_custom_excerpt_length' ) ) {

	function penci_custom_excerpt_length( $length ) {

		$number_excerpt_length = get_theme_mod('penci_post_excerpt_length') ? get_theme_mod('penci_post_excerpt_length') : 30;

		return $number_excerpt_length;

	}



	add_filter( 'excerpt_length', 'penci_custom_excerpt_length', 999 );

}



/**

 * Custom the_excerpt() more string

 *

 * @since 1.0

 * @param string $more

 * @return new more string of the_excerpt() function

 */

if ( ! function_exists( 'penci_new_excerpt_more' ) ) {

	function penci_new_excerpt_more( $more ) {

		return '&hellip;';

	}



	add_filter( 'excerpt_more', 'penci_new_excerpt_more' );

}



/**

 * Exclude pages form search results page

 * Hook to init action

 *

 * @since 1.0

 * @return void

 */

if ( ! function_exists( 'penci_remove_pages_from_search' ) ) {

	function penci_remove_pages_from_search() {

		global $wp_post_types;

		$wp_post_types['page']->exclude_from_search = true;

	}



	add_action( 'init', 'penci_remove_pages_from_search' );

}



/**

 * Setup functions to count viewed posts to create popular posts

 *

 * @param string $postID - post ID of this post

 * @return numbers viewed posts

 * @since 1.0

 */

if ( ! function_exists( 'penci_get_post_views' ) ) {

	function penci_get_post_views( $postID ) {

		$count_key = 'penci_post_views_count';

		$count     = get_post_meta( $postID, $count_key, true );

		if ( $count == '' ) {

			delete_post_meta( $postID, $count_key );

			add_post_meta( $postID, $count_key, '0' );



			return "0";

		}



		return $count;

	}

}



if ( ! function_exists( 'penci_set_post_views' ) ) {

	function penci_set_post_views( $postID ) {

		$count_key = 'penci_post_views_count';

		$count     = get_post_meta( $postID, $count_key, true );

		if ( $count == '' ) {

			$count = 0;

			delete_post_meta( $postID, $count_key );

			add_post_meta( $postID, $count_key, $count );

		}

		else {

			$count ++;

			update_post_meta( $postID, $count_key, $count );

		}

	}

}



/**

 * Get custom excerpt length from the_content() function

 * Will use this function and call it in penci_add_fb_open_graph_tags() function

 *

 * @since 1.1

 * @return excerpt content from the_content

 */



if ( ! function_exists( 'penci_trim_excerpt_from_content' ) ) {

	function penci_trim_excerpt_from_content( $text, $excerpt ) {



		if ( $excerpt )

			return $excerpt;



		$text = strip_shortcodes( $text );



		$text           = apply_filters( 'the_content', $text );

		$text           = str_replace( ']]>', ']]&gt;', $text );

		$text           = strip_tags( $text );

		$excerpt_length = apply_filters( 'excerpt_length', 55 );

		$excerpt_more   = apply_filters( 'excerpt_more', ' ' . '...' );

		$words          = preg_split( "/[\n

	 ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY );

		if ( count( $words ) > $excerpt_length ) {

			array_pop( $words );

			$text = implode( ' ', $words );

			$text = $text . $excerpt_more;

		}

		else {

			$text = implode( ' ', $words );

		}



		return apply_filters( 'wp_trim_excerpt', $text, $excerpt );

	}

}



/**

 * Filter the page title.

 *

 * Creates a nicely formatted and more specific title element text for output

 * in head of document, based on current view.

 *

 * @param string $title Default title text for current view.

 * @param string $sep   Optional separator.

 * @return string The filtered title.

 * @since 1.0

 */

if ( ! function_exists( 'penci_wp_title' ) ) {

	function penci_wp_title( $title, $sep ) {

		global $paged, $page;

		if ( is_feed() )

			return $title;



		// Add the site name.

		$title .= get_bloginfo( 'name', 'display' );



		// Add the site description for the home/front page.

		$site_description = get_bloginfo( 'description', 'display' );

		if ( $site_description && ( is_home() || is_front_page() ) )

			$title = "$title $sep $site_description";



		// Add a page number if necessary.

		if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )

			$title = "$title $sep " . sprintf( esc_html__( 'Page %s', 'soledad' ), max( $paged, $page ) );



		return $title;

	}



	add_filter( 'wp_title', 'penci_wp_title', 10, 2 );

}



/**

 * Add hatom data

 *

 * @since 1.2.1

 */

if ( ! function_exists( 'penci_add_suf_hatom_data' ) ) {

	function penci_add_suf_hatom_data( $content ) {

		$t      = get_the_modified_time( 'F jS, Y' );

		$author = get_the_author();

		$title  = get_the_title();

		if ( is_home() || is_singular() || is_archive() ) {

			$content .= '<div class="hatom-extra" style="display:none !important;visibility:hidden;"><span class="entry-title">' . $title . '</span> was last modified: <span class="updated"> ' . $t . '</span> by <span class="author vcard"><span class="fn">' . $author . '</span></span></div>';

		}



		return $content;

	}



	add_filter( 'the_content', 'penci_add_suf_hatom_data' );

}



/**

 * Remove suf hatom data in call function the_excerpt

 *

 * @since 1.2.3

 */

if ( ! function_exists( 'penci_remove_excerpt_suf_hatom_data' ) ) {

	function penci_remove_excerpt_suf_hatom_data( $excerpt ) {

		$t      = get_the_modified_time( 'F jS, Y' );

		$author = get_the_author();

		$title  = get_the_title();



		$replace = $title . ' was last modified: ' . $t . ' by ' . $author;

		return str_replace( $replace, '', $excerpt );

	}



	add_filter( 'wp_trim_excerpt', 'penci_remove_excerpt_suf_hatom_data' );

}



/**

 * Exclude specific categories from latest posts on Homepage

 *

 * @since 2.4

 */

if( ! function_exists( 'penci_exclude_specific_categories_display_on_home' ) ) {

	function penci_exclude_specific_categories_display_on_home( $query ) {

		if( get_theme_mod( 'penci_home_exclude_cat' ) ) {

			$exclude_cats       = get_theme_mod( 'penci_home_exclude_cat' );

			$exclude_cats       = str_replace( ' ', '', $exclude_cats );

			$exclude_array = explode( ',', $exclude_cats );



			if ( $query->is_home() && $query->is_main_query() ) {

				$query->set( 'tax_query', array(

					array(

						'taxonomy' => 'category',

						'field'    => 'slug',

						'terms'    => $exclude_array,

						'operator' => 'NOT IN'

					),

				) );

			}

		}

	}



	add_action('pre_get_posts','penci_exclude_specific_categories_display_on_home');

}





/**

 * Anbles shortcodes in wordpress widget text

 *

 * @since 1.2.3

 */

add_filter( 'widget_text', 'do_shortcode' );



/**

 * Declare WooCommerce support

 *

 * @since 2.2

 */

if ( ! function_exists( 'penci_declare_woocommerce_support' ) ) {

	add_action( 'after_setup_theme', 'penci_declare_woocommerce_support' );

	function penci_declare_woocommerce_support() {

		add_theme_support( 'woocommerce' );

	}

}



/**

 * Exclude all posts in featured category in latest posts homepage

 *

 * @since 2.2.6

 */

if ( ! function_exists( 'penci_exclude_featured_category_for_homepage' ) ) {

	function penci_exclude_featured_category_for_homepage( $query ) {

		if ( get_theme_mod( 'penci_exclude_featured_cat' ) && get_theme_mod( 'penci_featured_cat' ) ) {

			$featured_cat = get_theme_mod( 'penci_featured_cat' );

			if ( $query->is_home() && $query->is_main_query() ) {

				$query->set( 'tax_query', array(

					array(

						'taxonomy' => 'category',

						'field'    => 'term_id',

						'terms'    => array( $featured_cat ),

						'operator' => 'NOT IN'

					),

				) );

			}

		}

	}



	add_action( 'pre_get_posts', 'penci_exclude_featured_category_for_homepage' );

}



/**

 * Hook to change markup for gallery

 *

 * @since 2.3

 */

if ( ! function_exists( 'penci_custom_markup_for_gallery' ) ) {

	add_filter( 'post_gallery', 'penci_custom_markup_for_gallery', 10, 3 );

	function penci_custom_markup_for_gallery( $string, $attr ) {



		$data_height = '150';

		if( is_numeric( get_theme_mod( 'penci_image_height_gallery' ) ) && ( 60 < get_theme_mod( 'penci_image_height_gallery' ) ) ) {

			$data_height = get_theme_mod( 'penci_image_height_gallery' );

		}



		$output = '<div class="penci-post-gallery-container" data-height="'. $data_height .'" data-margin="3">';

		$id = '';

		if( isset( $attr['ids'] ) ) {

			$id = $attr['ids'];

		}

		$posts  = get_posts( array( 'include' => $id, 'post_type' => 'attachment' ) );



		if( $posts ) {

			foreach ( $posts as $imagePost ) {

				$caption = '';

				if( $imagePost->post_excerpt ):

					$caption = $imagePost->post_excerpt;

				endif;

				

				$get_full = wp_get_attachment_image_src( $imagePost->ID, 'full' );

				$get_masonry = wp_get_attachment_image_src( $imagePost->ID, 'penci-masonry-thumb' );

				

				$output .= '<a href="'. $get_full[0] .'" title="'. $caption .'" data-rel="penci-gallery-image-content">';

				$output .= '<img src="'. $get_masonry[0] .'" alt="">';

				$output .= '</a>';

			}

		}



		$output .= '</div>';



		return $output;

	}

}





/**

 * Update cart total when products are added to the cart

 *

 * @since 2.2.4

 */

if ( ! function_exists( 'penci_woocommerce_header_add_to_cart_fragment' ) ) {

	add_filter( 'woocommerce_add_to_cart_fragments', 'penci_woocommerce_header_add_to_cart_fragment' );

	function penci_woocommerce_header_add_to_cart_fragment( $fragments ) {

		ob_start();

		?>

	<a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><i class="fa fa-shopping-cart"></i><span><?php echo sprintf( _n( '%d', '%d', WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count ); ?></span></a>

	<?php



		$fragments['.shoping-cart-icon a.cart-contents'] = ob_get_clean();



		return $fragments;

	}

}



/**

 * Unhook the WooCommerce wrappers and add new Woocommerce wrappers

 *

 * @since 2.2

 */

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);

remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);



if ( ! function_exists( 'penci_woocommerce_custom_wrapper_start' ) ) {

	add_action( 'woocommerce_before_main_content', 'penci_woocommerce_custom_wrapper_start', 10 );

	function penci_woocommerce_custom_wrapper_start() {

		$sidebar_class = '';

		$right_sidebar = '';

		if( ( is_shop() && get_theme_mod( 'penci_woo_shop_enable_sidebar' ) ) || ( ( is_product_category() || is_product_tag() ) && get_theme_mod( 'penci_woo_cat_enable_sidebar' ) ) || ( is_product() && get_theme_mod( 'penci_woo_single_enable_sidebar' ) ) ) {

			$sidebar_class = ' penci_sidebar';

			$right_sidebar = ' right-sidebar';

			if( get_theme_mod( 'penci_woo_left_sidebar' ) ):

				$right_sidebar = ' left-sidebar';

			endif;

		}

		echo '<div class="container'. $sidebar_class . $right_sidebar .'"><div id="main"><div class="theiaStickySidebar">';

	}

}



if ( ! function_exists( 'penci_woocommerce_custom_wrapper_end' ) ) {

	add_action( 'woocommerce_after_main_content', 'penci_woocommerce_custom_wrapper_end', 10 );

	function penci_woocommerce_custom_wrapper_end() {

		echo '</div></div>';

	}

}



/**

 * Hook to change products per page in shop page & categories page

 *

 * @since 2.2

 */

if ( ! function_exists( 'penci_custom_products_per_page' ) ) {

	function penci_custom_products_per_page( $options ) {

		$options = 24;

		if ( get_theme_mod( 'penci_woo_post_per_page' ) ) {

			$options = absint( get_theme_mod( 'penci_woo_post_per_page' ) );

		}



		return $options;

	}



	add_filter( 'loop_shop_per_page', 'penci_custom_products_per_page', 10, 1 );

}



/**

 * WooCommerce Unhook sidebar

 *

 * @since 2.2

 */

remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );



if ( ! function_exists( 'penci_woocommerce_add_sidebar_custom' ) && function_exists( 'is_shop' ) && function_exists( 'is_product_category' ) && function_exists( 'is_product_tag' ) && function_exists( 'is_product' ) ) {

	function penci_woocommerce_add_sidebar_custom() {

		if ( ( is_shop() && get_theme_mod( 'penci_woo_shop_enable_sidebar' ) ) || ( ( is_product_category() || is_product_tag() ) && get_theme_mod( 'penci_woo_cat_enable_sidebar' ) ) || ( is_product() && get_theme_mod( 'penci_woo_single_enable_sidebar' ) ) ):

			add_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

		endif;

	}



	add_action( 'template_redirect', 'penci_woocommerce_add_sidebar_custom' );

}



/**

 * Change default placeholder image woocommerce

 *

 * @since 2.2

 */

if ( ! function_exists( 'penci_change_placeholder_thumbnail' ) ) {

	add_action( 'init', 'penci_change_placeholder_thumbnail' );

	function penci_change_placeholder_thumbnail() {

		if ( ! function_exists( 'penci_custom_woocommerce_placeholder_img_src' ) ) {

			add_filter( 'woocommerce_placeholder_img_src', 'penci_custom_woocommerce_placeholder_img_src' );

			function penci_custom_woocommerce_placeholder_img_src( $src ) {

				$src = get_template_directory_uri() . '/images/no-image-product.jpg';



				return $src;

			}

		}

	}

}



/**

 * Define image sizes for woocommerce

 *

 * @since 2.2

 */

if ( ! function_exists( 'penci_woocommerce_image_dimensions' ) ) {

	function penci_woocommerce_image_dimensions() {

		global $pagenow;



		if ( ! isset( $_GET['activated'] ) || $pagenow != 'themes.php' ) {

			return;

		}

		$catalog   = array(

			'width'  => '600',    // px

			'height' => '732',    // px

			'crop'   => 1        // true

		);

		$single    = array(

			'width'  => '600',    // px

			'height' => '732',    // px

			'crop'   => 1        // true

		);

		$thumbnail = array(

			'width'  => '150',    // px

			'height' => '183',    // px

			'crop'   => 1        // false

		);



		// Image sizes

		update_option( 'shop_catalog_image_size', $catalog );        // Product category thumbs

		update_option( 'shop_single_image_size', $single );        // Single product image

		update_option( 'shop_thumbnail_image_size', $thumbnail );    // Image gallery thumbs

	}



	add_action( 'after_switch_theme', 'penci_woocommerce_image_dimensions', 1 );

}



/**

 * Change breadcrum markup for woocommerce

 *

 * @since 2.2

 */

if ( ! function_exists( 'penci_custom_woocommerce_breadcrumbs' ) ) {

	add_filter( 'woocommerce_breadcrumb_defaults', 'penci_custom_woocommerce_breadcrumbs' );

	function penci_custom_woocommerce_breadcrumbs() {

		return array(

			'delimiter'   => '<i class="fa fa-angle-right"></i>',

			'wrap_before' => '<div class="container penci-breadcrumb penci-woo-breadcrumb">',

			'wrap_after'  => '</div>',

			'before'      => '<span>',

			'after'       => '</span>',

			'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),

		);

	}

}



/**

 * Remove breadcrum when breadcrum is disable in customize

 *

 * @since 2.2

 */

if ( ! function_exists( 'penci_custom_remove_wc_breadcrumbs' ) ) {

	add_action( 'init', 'penci_custom_remove_wc_breadcrumbs' );

	function penci_custom_remove_wc_breadcrumbs() {

		if( get_theme_mod( 'penci_woo_disable_breadcrumb' ) ):

			remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );

		endif;

	}

}



/**

 * Custom numbers related products for Woocommerce

 *

 * @since 2.2

 */

if ( ! function_exists( 'penci_custom_number_related_products_args' ) ) {

	add_filter( 'woocommerce_output_related_products_args', 'penci_custom_number_related_products_args' );

	function penci_custom_number_related_products_args( $args ) {

		$number = 4;

		if( get_theme_mod( 'penci_woo_number_related_products' ) ):

			$number = absint( get_theme_mod( 'penci_woo_number_related_products' ) );

		endif;



		$args['posts_per_page'] = $number; // 4 related products



		return $args;

	}

}