<?php
/**
 * Add customize CSS from options customizer
 * Hook to wp_head() function to render style
 *
 * @package Wordpress
 * @since 1.0
 */
function pencidesign_customizer_css() {
    ?>
    <style type="text/css">
		<?php
		if( get_theme_mod( 'penci_font_for_title' ) && '"Raleway", "100:200:300:regular:500:600:700:800:900", sans-serif' != get_theme_mod( 'penci_font_for_title' ) ) {
			$font_family_title = get_theme_mod( 'penci_font_for_title' );
			$font_family_title_end = $font_family_title;
			if( !in_array( $font_family_title, penci_font_browser() ) ) {
				$font_family_title = str_replace('"','',$font_family_title);
				$font_title_explo = explode(", ",$font_family_title);
				$font_title = $font_title_explo[0];
				$font_title_type = $font_title_explo[1];
				$font_title_serif = $font_title_explo[2];
				$font_title_type = str_replace(':',',',$font_title_type);
				$title_font_replace = str_replace( ' ', '+', $font_title );
				$font_family_title_end = "'". $font_title ."', ". $font_title_serif;
		?>
			@import url(//fonts.googleapis.com/css?family=<?php echo sanitize_text_field( $title_font_replace ); ?>:<?php echo sanitize_text_field( $font_title_type );?>);
			<?php } ?>
		h1, h2, h3, h4, h5, h6, h2.penci-heading-video, .penci-photo-2-effect figcaption h2, .headline-title, a.penci-topbar-post-title, #navigation .menu li a, #sidebar-nav .menu li a, .penci-slider .pencislider-container .pencislider-content .pencislider-title, .penci-slider .pencislider-container .pencislider-content .pencislider-button,
		.author-quote span, .penci-more-link a.more-link, .penci-post-share-box .dt-share, .post-share a .dt-share, .author-content h5, .post-pagination h5, .post-box-title, .penci-countdown .countdown-amount, .penci-countdown .countdown-period, .penci-pagination a, .penci-pagination .disable-url, ul.footer-socials li a span,
		.widget input[type="submit"], #sidebar .widget-title, #respond h3.comment-reply-title span, .widget-social.show-text a span, .footer-widget-wrapper .widget .widget-title,
		.container.penci-breadcrumb span, .container.penci-breadcrumb span a, .error-404 .go-back-home a, .post-entry .penci-portfolio-filter ul li a, .portfolio-overlay-content .portfolio-short .portfolio-title a, .home-featured-cat-content .magcat-detail h3 a, .post-entry blockquote cite,
		.post-entry blockquote .author, .tags-share-box.hide-tags.page-share .share-title, .widget ul.side-newsfeed li .side-item .side-item-text h4 a, .thecomment .comment-text span.author, .thecomment .comment-text span.author a, .post-comments span.reply a, #respond h3, #respond label, .wpcf7 label, #respond #submit, .wpcf7 input[type="submit"], .widget_wysija input[type="submit"], .archive-box span,
		.archive-box h1, .gallery .gallery-caption, .contact-form input[type=submit], ul.penci-topbar-menu > li a, div.penci-topbar-menu > ul > li a { font-family: <?php echo sanitize_text_field( $font_family_title_end ); ?>; font-weight: normal; }
		<?php
		}
		?>
		<?php
		if( get_theme_mod( 'penci_font_for_body' ) && '"PT Serif", "regular:italic:700:700italic", serif' != get_theme_mod( 'penci_font_for_body' ) ) {
			$font_family_body = get_theme_mod( 'penci_font_for_body' );
			$font_family_body_end = $font_family_body;
			if( !in_array( $font_family_body, penci_font_browser() ) ) {
				$font_family_body = str_replace('"','',$font_family_body);
				$font_body_explo = explode(", ",$font_family_body);
				$font_body = $font_body_explo[0];
				$font_body_type = $font_body_explo[1];
				$font_body_serif = $font_body_explo[2];
				$font_body_type = str_replace(':',',',$font_body_type);
				$body_font_replace = str_replace( ' ', '+', $font_body );
				$font_family_body_end = "'". $font_body ."', ". $font_body_serif;
		?>
		@import url(//fonts.googleapis.com/css?family=<?php echo sanitize_text_field( $body_font_replace ); ?>:<?php echo sanitize_text_field( $font_body_type );?>);
		<?php } ?>
		body, textarea, #respond textarea, .widget input[type="text"], .widget input[type="email"], .widget input[type="date"], .widget input[type="number"], .wpcf7 textarea, .mc4wp-form input, #respond input, .wpcf7 input, #searchform input.search-input, ul.homepage-featured-boxes .penci-fea-in h4, .widget.widget_categories ul li span.category-item-count, .header-slogan .header-slogan-text, .about-widget .about-me-heading, .widget ul.side-newsfeed li .side-item .side-item-text .side-item-meta { font-family: <?php echo sanitize_text_field( $font_family_body_end ); ?>;  }
		<?php
		}
		?>
		<?php
		$body_size = get_theme_mod('penci_font_for_size_body');
		if( is_numeric( $body_size ) && $body_size > 1 && $body_size != '14' ): ?>
		body, .widget ul li a{ font-size: <?php echo absint( $body_size ); ?>px; }
		.widget ul li, .post-entry, p, .post-entry p { font-size: <?php echo absint( $body_size ); ?>px; line-height: 1.8; }
		<?php endif; ?>
		<?php
		if( get_theme_mod('penci_font_weight_title') && ( get_theme_mod('penci_font_weight_title') != 'normal' ) ) {
		?>
		h1, h2, h3, h4, h5, h6, #navigation .menu li a, #sidebar-nav .menu li a, a.penci-topbar-post-title, .penci-slider .pencislider-container .pencislider-content .pencislider-title, .penci-slider .pencislider-container .pencislider-content .pencislider-button,
		.headline-title, .author-quote span, .penci-more-link a.more-link, .author-content h5, .post-pagination h5, .post-box-title, .penci-countdown .countdown-amount, .penci-countdown .countdown-period, .penci-pagination a, .penci-pagination .disable-url, ul.footer-socials li a span,
		#sidebar .widget-title, #respond h3.comment-reply-title span, .widget-social.show-text a span, .footer-widget-wrapper .widget .widget-title,
		.error-404 .go-back-home a, .home-featured-cat-content .magcat-detail h3 a, .post-entry blockquote cite,
		.post-entry blockquote .author, .tags-share-box.hide-tags.page-share .share-title, .widget ul.side-newsfeed li .side-item .side-item-text h4 a, .thecomment .comment-text span.author, .thecomment .comment-text span.author a, #respond h3, #respond label, .wpcf7 label, #respond #submit, .wpcf7 input[type="submit"], .widget_wysija input[type="submit"], .archive-box span,
		.archive-box h1, .gallery .gallery-caption, .widget input[type="submit"], .contact-form input[type=submit], ul.penci-topbar-menu > li a, div.penci-topbar-menu > ul > li a { font-weight: <?php echo get_theme_mod('penci_font_weight_title'); ?>; }
		<?php
		}
		?>
		<?php if(get_theme_mod('penci_body_boxed_bg_color')): ?>
		body.penci-body-boxed { background-color:<?php echo get_theme_mod( 'penci_body_boxed_bg_color' ); ?>; }
		<?php endif; ?>
		<?php if(get_theme_mod('penci_body_boxed_bg_image')): ?>
		body.penci-body-boxed { background-image: url(<?php echo get_theme_mod( 'penci_body_boxed_bg_image' ); ?>); }
		<?php endif; ?>
		<?php if(get_theme_mod('penci_body_boxed_bg_repeat')): ?>
		body.penci-body-boxed { background-repeat:<?php echo get_theme_mod( 'penci_body_boxed_bg_repeat' ); ?>; }
		<?php endif; ?>
		<?php if(get_theme_mod('penci_body_boxed_bg_attachment')): ?>
		body.penci-body-boxed { background-attachment:<?php echo get_theme_mod( 'penci_body_boxed_bg_attachment' ); ?>; }
		<?php endif; ?>
		<?php if(get_theme_mod('penci_body_boxed_bg_size')): ?>
		body.penci-body-boxed { background-size:<?php echo get_theme_mod( 'penci_body_boxed_bg_size' ); ?>; }
		<?php endif; ?>
		<?php if(get_theme_mod('penci_header_padding')): ?>
		#header .inner-header .container { padding:<?php echo get_theme_mod( 'penci_header_padding' ); ?>px 0; }
		<?php endif; ?>
		<?php if(get_theme_mod('penci_font_size_title_cat_mega') && get_theme_mod('penci_font_size_title_cat_mega') > 0 && get_theme_mod('penci_font_size_title_cat_mega') != '12' ): ?>
		#navigation .penci-megamenu .post-mega-title a { font-size:<?php echo get_theme_mod( 'penci_font_size_title_cat_mega' ); ?>px; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_color_accent' ) ): ?>
		a, .post-entry .penci-portfolio-filter ul li a:hover, .post-entry .penci-portfolio-filter ul li.active a, .penci-countdown .countdown-amount, .archive-box h1, .post-entry a, .container.penci-breadcrumb span a:hover, .post-entry blockquote:before, .post-entry blockquote cite, .post-entry blockquote .author, .penci-pagination a:hover, ul.penci-topbar-menu > li a:hover, div.penci-topbar-menu > ul > li a:hover { color: <?php echo get_theme_mod( 'penci_color_accent' ); ?>; }
		.penci-home-popular-post ul.slick-dots li button:hover, .penci-home-popular-post ul.slick-dots li.slick-active button, .archive-box:after, .archive-box:before, .penci-page-header:after, .penci-page-header:before, .post-entry blockquote .author span:after, .error-image:after, .error-404 .go-back-home a:after, .penci-header-signup-form, .woocommerce .page-title:before, .woocommerce .page-title:after, .woocommerce span.onsale, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce div.product .entry-summary div[itemprop="description"]:before, .woocommerce div.product .entry-summary div[itemprop="description"] blockquote .author span:after, .woocommerce div.product .woocommerce-tabs #tab-description blockquote .author span:after, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, #top-search.shoping-cart-icon > a > span { background-color: <?php echo get_theme_mod( 'penci_color_accent' ); ?>; }
		.penci-pagination ul.page-numbers li span.current { color: #fff; background: <?php echo get_theme_mod( 'penci_color_accent' ); ?>; border-color: <?php echo get_theme_mod( 'penci_color_accent' ); ?>; }
		.footer-instagram h4.footer-instagram-title > span:before, .woocommerce nav.woocommerce-pagination ul li span.current { border-color: <?php echo get_theme_mod( 'penci_color_accent' ); ?>; }
		.woocommerce .woocommerce-error, .woocommerce .woocommerce-info, .woocommerce .woocommerce-message { border-top-color: <?php echo get_theme_mod( 'penci_color_accent' ); ?>; }
		.penci-slider ol.penci-control-nav li a.penci-active, .penci-slider ol.penci-control-nav li a:hover{ border-color: <?php echo get_theme_mod( 'penci_color_accent' ); ?>; background-color: <?php echo get_theme_mod( 'penci_color_accent' ); ?>; }
		.woocommerce .woocommerce-message:before, .woocommerce form.checkout table.shop_table .order-total .amount, .woocommerce ul.products li.product .price ins, .woocommerce ul.products li.product .price, .woocommerce div.product p.price ins, .woocommerce div.product span.price ins, .woocommerce div.product p.price, .woocommerce div.product .entry-summary div[itemprop="description"] blockquote:before, .woocommerce div.product .woocommerce-tabs #tab-description blockquote:before, .woocommerce div.product .entry-summary div[itemprop="description"] blockquote cite, .woocommerce div.product .entry-summary div[itemprop="description"] blockquote .author, .woocommerce div.product .woocommerce-tabs #tab-description blockquote cite, .woocommerce div.product .woocommerce-tabs #tab-description blockquote .author, .woocommerce div.product .product_meta > span a:hover, .woocommerce div.product .woocommerce-tabs ul.tabs li.active, .woocommerce ul.cart_list li .amount, .woocommerce ul.product_list_widget li .amount, .woocommerce table.shop_table td.product-name a:hover, .woocommerce table.shop_table td.product-price span, .woocommerce table.shop_table td.product-subtotal span, .woocommerce-cart .cart-collaterals .cart_totals table td .amount, .woocommerce .woocommerce-info:before, .woocommerce div.product span.price { color: <?php echo get_theme_mod( 'penci_color_accent' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_top_bar_bg' ) ): ?>
		.penci-top-bar, ul.penci-topbar-menu ul.sub-menu, div.penci-topbar-menu > ul ul.sub-menu { background-color: <?php echo get_theme_mod( 'penci_top_bar_bg' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_top_bar_top_posts_bg' ) ): ?>
		.headline-title { background-color: <?php echo get_theme_mod( 'penci_top_bar_top_posts_bg' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_top_bar_top_posts_color' ) ): ?>
		.headline-title { color: <?php echo get_theme_mod( 'penci_top_bar_top_posts_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_top_bar_button_color' ) ): ?>
		.penci-headline-posts .slick-prev, .penci-headline-posts .slick-next { color: <?php echo get_theme_mod( 'penci_top_bar_button_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_top_bar_button_hover_color' ) ): ?>
		.penci-headline-posts .slick-prev:hover, .penci-headline-posts .slick-next:hover { color: <?php echo get_theme_mod( 'penci_top_bar_button_hover_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_top_bar_title_color' ) ): ?>
		a.penci-topbar-post-title { color: <?php echo get_theme_mod( 'penci_top_bar_title_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_top_bar_title_hover_color' ) ): ?>
		a.penci-topbar-post-title:hover { color: <?php echo get_theme_mod( 'penci_top_bar_title_hover_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_top_bar_off_uppercase' ) ): ?>
		a.penci-topbar-post-title { text-transform: none; letter-spacing: 0; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_top_bar_off_uppercase_menu' ) ): ?>
		ul.penci-topbar-menu > li a, div.penci-topbar-menu > ul > li a { text-transform: none; font-size: 12px; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_top_bar_menu_color' ) ): ?>
		ul.penci-topbar-menu > li a, div.penci-topbar-menu > ul > li a { color: <?php echo get_theme_mod( 'penci_top_bar_menu_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_top_bar_menu_dropdown_bg' ) ): ?>
		ul.penci-topbar-menu ul.sub-menu, div.penci-topbar-menu > ul ul.sub-menu { background-color: <?php echo get_theme_mod( 'penci_top_bar_menu_dropdown_bg' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_top_bar_menu_hover_color' ) ): ?>
		ul.penci-topbar-menu > li a:hover, div.penci-topbar-menu > ul > li a:hover { color: <?php echo get_theme_mod( 'penci_top_bar_menu_hover_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_top_bar_menu_border' ) ): ?>
		ul.penci-topbar-menu ul.sub-menu li a, div.penci-topbar-menu > ul ul.sub-menu li a, ul.penci-topbar-menu > li > ul.sub-menu > li:first-child, div.penci-topbar-menu > ul > li > ul.sub-menu > li:first-child { border-color: <?php echo get_theme_mod( 'penci_top_bar_menu_border' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_top_bar_social_color' ) ): ?>
		.penci-topbar-social a { color: <?php echo get_theme_mod( 'penci_top_bar_social_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_top_bar_social_hover_color' ) ): ?>
		.penci-topbar-social a:hover { color: <?php echo get_theme_mod( 'penci_top_bar_social_hover_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_header_background_color' ) ): ?>
		#header .inner-header { background-color: <?php echo get_theme_mod( 'penci_header_background_color' ); ?>; background-image: none; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_header_background_image' ) ): ?>
		#header .inner-header { background-image: url('<?php echo get_theme_mod( 'penci_header_background_image' ); ?>'); }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_main_bar_bg' ) ): ?>
		#navigation, .show-search { background: <?php echo get_theme_mod( 'penci_main_bar_bg' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_main_bar_border_color' ) ): ?>
		#navigation, #navigation.header-layout-bottom { border-color: <?php echo get_theme_mod( 'penci_main_bar_border_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_main_bar_nav_color' ) ): ?>
		#navigation .menu li a { color:  <?php echo get_theme_mod( 'penci_main_bar_nav_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_main_bar_color_active' ) ): ?>
		#navigation .menu li a:hover, #navigation .menu li.current-menu-item > a, #navigation .menu > li.current_page_item > a, #navigation .menu li:hover > a, #navigation .menu > li.current-menu-ancestor > a, #navigation .menu > li.current-menu-item > a { color:  <?php echo get_theme_mod( 'penci_main_bar_color_active' ); ?>; }
		#navigation ul.menu > li > a:before, #navigation .menu > ul > li > a:before { background: <?php echo get_theme_mod( 'penci_main_bar_color_active' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_drop_bg_color' ) ): ?>
		#navigation .menu .sub-menu, #navigation .menu .children, #navigation ul.menu ul li, #navigation ul.menu ul ul li, #navigation ul.menu > li.megamenu > ul.sub-menu { background-color:  <?php echo get_theme_mod( 'penci_drop_bg_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_drop_items_border' ) ): ?>
		#navigation .menu .sub-menu, #navigation .menu .children, #navigation ul.menu ul a, #navigation .menu ul ul a { border-color:  <?php echo get_theme_mod( 'penci_drop_items_border' ); ?>; }
		#navigation .penci-megamenu .penci-mega-child-categories a.cat-active { border-top-color: <?php echo get_theme_mod( 'penci_drop_items_border' ); ?>; border-bottom-color: <?php echo get_theme_mod( 'penci_drop_items_border' ); ?>; }
		#navigation ul.menu > li.megamenu > ul.sub-menu > li:before, #navigation .penci-megamenu .penci-mega-child-categories:after { background-color: <?php echo get_theme_mod( 'penci_drop_items_border' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_mega_bg_color' ) ): ?>
		#navigation .penci-megamenu, #navigation .penci-megamenu .penci-mega-child-categories a.cat-active, #navigation .penci-megamenu .penci-mega-child-categories a.cat-active:before { background-color: <?php echo get_theme_mod( 'penci_mega_bg_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_mega_child_cat_bg_color' ) ): ?>
		#navigation .penci-megamenu .penci-mega-child-categories { background-color: <?php echo get_theme_mod( 'penci_mega_child_cat_bg_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_mega_post_date_color' ) ): ?>
		#navigation .penci-megamenu .penci-mega-date { color: <?php echo get_theme_mod( 'penci_mega_post_date_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_mega_post_category_color' ) ): ?>
		#navigation .penci-megamenu .penci-mega-thumbnail .mega-cat-name { color: <?php echo get_theme_mod( 'penci_mega_post_category_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_mega_accent_color' ) ): ?>
		#navigation .penci-megamenu .penci-mega-child-categories a.cat-active, #navigation .menu .penci-megamenu .penci-mega-child-categories a:hover, #navigation .menu .penci-megamenu .penci-mega-latest-posts .penci-mega-post a:hover { color: <?php echo get_theme_mod( 'penci_mega_accent_color' ); ?>; }
		#navigation .penci-megamenu .penci-mega-thumbnail .mega-cat-name { background: <?php echo get_theme_mod( 'penci_mega_accent_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_topbar_menu_uppercase' ) ): ?>
		#navigation .menu li a { text-transform: none; letter-spacing: 0; }
		#navigation .penci-megamenu .post-mega-title a{ text-transform: uppercase; letter-spacing: 1px; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_off_uppercase_cat_mega' ) ): ?>
		#navigation .penci-megamenu .post-mega-title a { text-transform: none; letter-spacing: 0; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_header_slogan_color' ) ): ?>
		.header-slogan .header-slogan-text { color:  <?php echo get_theme_mod( 'penci_header_slogan_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_header_slogan_line_color' ) ): ?>
		.header-slogan .header-slogan-text:before, .header-slogan .header-slogan-text:after { background:  <?php echo get_theme_mod( 'penci_header_slogan_line_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_drop_text_color' ) ): ?>
		#navigation .menu .sub-menu li a { color:  <?php echo get_theme_mod( 'penci_drop_text_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_drop_text_hover_color' ) ): ?>
		#navigation .menu .sub-menu li a:hover, #navigation .menu .sub-menu li.current-menu-item > a { color:  <?php echo get_theme_mod( 'penci_drop_text_hover_color' ); ?>; }
		#navigation ul.menu ul a:before, #navigation .menu ul ul a:before { background-color: <?php echo get_theme_mod( 'penci_drop_text_hover_color' ); ?>;   -webkit-box-shadow: 5px -2px 0 <?php echo get_theme_mod( 'penci_drop_text_hover_color' ); ?>;  -moz-box-shadow: 5px -2px 0 <?php echo get_theme_mod( 'penci_drop_text_hover_color' ); ?>;  -ms-box-shadow: 5px -2px 0 <?php echo get_theme_mod( 'penci_drop_text_hover_color' ); ?>;  box-shadow: 5px -2px 0 <?php echo get_theme_mod( 'penci_drop_text_hover_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_main_bar_search_magnify' ) ): ?>
		#top-search > a, #navigation .button-menu-mobile { color: <?php echo get_theme_mod( 'penci_main_bar_search_magnify' ); ?>; }
		.show-search #searchform input.search-input::-webkit-input-placeholder{ color: <?php echo get_theme_mod( 'penci_main_bar_search_magnify' ); ?>; }
		.show-search #searchform input.search-input:-moz-placeholder { color: <?php echo get_theme_mod( 'penci_main_bar_search_magnify' ); ?>; opacity: 1;}
		.show-search #searchform input.search-input::-moz-placeholder {color: <?php echo get_theme_mod( 'penci_main_bar_search_magnify' ); ?>; opacity: 1; }
		.show-search #searchform input.search-input:-ms-input-placeholder { color: <?php echo get_theme_mod( 'penci_main_bar_search_magnify' ); ?>; }
		.show-search #searchform input.search-input{ color: <?php echo get_theme_mod( 'penci_main_bar_search_magnify' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_main_bar_close_color' ) ): ?>
		.show-search a.close-search {   color: <?php echo get_theme_mod( 'penci_main_bar_close_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_lowcase_popular_posts' ) ): ?>
		.penci-home-popular-post .item-related h3 a { text-transform: none; letter-spacing: 0; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_home_featured_cat_lowcase' ) ): ?>
		.penci-homepage-title.penci-magazine-title h3 a, .penci-border-arrow.penci-homepage-title .inner-arrow { text-transform: none; }
		<?php endif; ?>
		.penci-header-signup-form { padding: <?php echo get_theme_mod( 'penci_header_signup_padding' ); ?>px 0; }
		<?php if( get_theme_mod( 'penci_header_signup_bg' ) ): ?>
		.penci-header-signup-form { background-color: <?php echo get_theme_mod( 'penci_header_signup_bg' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_header_signup_color' ) ): ?>
		.penci-header-signup-form .mc4wp-form, .penci-header-signup-form h4.header-signup-form, .penci-header-signup-form .mc4wp-form-fields > p, .penci-header-signup-form form > p { color: <?php echo get_theme_mod( 'penci_header_signup_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_header_signup_input_border' ) ): ?>
		.penci-header-signup-form .mc4wp-form input[type="text"], .penci-header-signup-form .mc4wp-form input[type="email"] { border-color: <?php echo get_theme_mod( 'penci_header_signup_input_border' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_header_signup_input_color' ) ): ?>
		.penci-header-signup-form .mc4wp-form input[type="text"], .penci-header-signup-form .mc4wp-form input[type="email"] { color: <?php echo get_theme_mod( 'penci_header_signup_input_color' ); ?>; }
		.penci-header-signup-form .mc4wp-form input[type="text"]::-webkit-input-placeholder, .penci-header-signup-form .mc4wp-form input[type="email"]::-webkit-input-placeholder{  color: <?php echo get_theme_mod( 'penci_header_signup_input_color' ); ?>;  }
		.penci-header-signup-form .mc4wp-form input[type="text"]:-moz-placeholder, .penci-header-signup-form .mc4wp-form input[type="email"]:-moz-placeholder {  color: <?php echo get_theme_mod( 'penci_header_signup_input_color' ); ?>;  }
		.penci-header-signup-form .mc4wp-form input[type="text"]::-moz-placeholder, .penci-header-signup-form .mc4wp-form input[type="email"]::-moz-placeholder {  color: <?php echo get_theme_mod( 'penci_header_signup_input_color' ); ?>;  }
		.penci-header-signup-form .mc4wp-form input[type="text"]:-ms-input-placeholder, .penci-header-signup-form .mc4wp-form input[type="email"]:-ms-input-placeholder {  color: <?php echo get_theme_mod( 'penci_header_signup_input_color' ); ?>;  }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_header_signup_submit_bg' ) ): ?>
		.penci-header-signup-form .widget input[type="submit"] { background-color: <?php echo get_theme_mod( 'penci_header_signup_submit_bg' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_header_signup_submit_color' ) ): ?>
		.penci-header-signup-form .widget input[type="submit"] { color: <?php echo get_theme_mod( 'penci_header_signup_submit_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_header_signup_submit_bg_hover' ) ): ?>
		.penci-header-signup-form .widget input[type="submit"]:hover { background-color: <?php echo get_theme_mod( 'penci_header_signup_submit_bg_hover' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_header_signup_submit_color_hover' ) ): ?>
		.penci-header-signup-form .widget input[type="submit"]:hover { color: <?php echo get_theme_mod( 'penci_header_signup_submit_color_hover' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_header_social_color' ) ): ?>
		.header-social a i {   color: <?php echo get_theme_mod( 'penci_header_social_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_header_social_color_hover' ) ): ?>
		.header-social a:hover i {   color: <?php echo get_theme_mod( 'penci_header_social_color_hover' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_ver_nav_overlay_color' ) ): ?>
		#close-sidebar-nav { background-color: <?php echo get_theme_mod( 'penci_ver_nav_overlay_color' ); ?>; }
		.open-sidebar-nav #close-sidebar-nav { opacity: 0.85; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_ver_nav_close_bg' ) ): ?>
		#close-sidebar-nav i { background-color: <?php echo get_theme_mod( 'penci_ver_nav_close_bg' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_ver_nav_close_color' ) ): ?>
		#close-sidebar-nav i { color: <?php echo get_theme_mod( 'penci_ver_nav_close_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_ver_nav_bg' ) ): ?>
		#sidebar-nav {   background: <?php echo get_theme_mod( 'penci_ver_nav_bg' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_ver_nav_accent_color' ) ): ?>
		.header-social.sidebar-nav-social a i, #sidebar-nav .menu li a, #sidebar-nav .menu li a .indicator { color: <?php echo get_theme_mod( 'penci_ver_nav_accent_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_ver_nav_accent_hover_color' ) ): ?>
		#sidebar-nav .menu li a:hover, .header-social.sidebar-nav-social a:hover i, #sidebar-nav .menu li a .indicator:hover, #sidebar-nav .menu .sub-menu li a .indicator:hover{ color: <?php echo get_theme_mod( 'penci_ver_nav_accent_hover_color' ); ?>; }
		#sidebar-nav-logo:before{ background-color: <?php echo get_theme_mod( 'penci_ver_nav_accent_hover_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_ver_nav_items_border' ) ): ?>
		#sidebar-nav .menu li, #sidebar-nav ul.sub-menu {   border-color: <?php echo get_theme_mod( 'penci_ver_nav_items_border' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_featured_video_height' ) ): ?>
		#penci-featured-video-bg { height: <?php echo get_theme_mod( 'penci_featured_video_height' ); ?>px; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_featured_video_heading_color' ) ): ?>
		h2.penci-heading-video { color: <?php echo get_theme_mod( 'penci_featured_video_heading_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_featured_video_sub_heading_color' ) ): ?>
		p.penci-sub-heading-video { color: <?php echo get_theme_mod( 'penci_featured_video_sub_heading_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_featured_slider_overlay_bg' ) ): ?>
		.featured-overlay-color, .penci-slider ul.slides li:after, .mag2slider-overlay:after { background-color: <?php echo get_theme_mod( 'penci_featured_slider_overlay_bg' ); ?>; }
		<?php endif; ?>
		.featured-overlay-color, .penci-slider ul.slides li:after { opacity: <?php echo get_theme_mod( 'penci_featured_slider_overlay_bg_opacity' ); ?>; }
		.featured-overlay-partent, .penci-slider ul.slides li:before { opacity: <?php echo get_theme_mod( 'penci_featured_slider_overlay_pattern_opacity' ); ?>; }
		.mag2slider-overlay:after { opacity: <?php echo get_theme_mod( 'penci_featured_mag2_overlay_opacity' ); ?>; }
		.mag2-thumbnail:hover .mag2slider-overlay:after { opacity: <?php echo get_theme_mod( 'penci_featured_mag2_overlay_hover_opacity' ); ?>; }
		<?php if( get_theme_mod( 'penci_featured_slider_box_bg_color' ) ): ?>
		.featured-slider-overlay { background: <?php echo get_theme_mod( 'penci_featured_slider_box_bg_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_featured_slider_box_border_color' ) ): ?>
		.featured-slider-overlay:before { border-color: <?php echo get_theme_mod( 'penci_featured_slider_box_border_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_featured_slider_date_bg' ) ): ?>
		.featured-carousel .feat-text .feat-time { background: <?php echo get_theme_mod( 'penci_featured_slider_date_bg' ); ?>; }
		.featured-carousel .feat-text .feat-time:before { border-right-color: <?php echo get_theme_mod( 'penci_featured_slider_date_bg' ); ?>; }
		.featured-carousel .feat-text .feat-time:after { border-left-color: <?php echo get_theme_mod( 'penci_featured_slider_date_bg' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_featured_slider_date_color' ) ): ?>
		.featured-carousel .feat-text .feat-time { color: <?php echo get_theme_mod( 'penci_featured_slider_date_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_featured_slider_cat_color' ) ): ?>
		.penci-mag2-carousel .cat > a.penci-cat-name, .featured-carousel .featured-cat a, .penci-magazine-slider .mag-cat a.penci-cat-name { color: <?php echo get_theme_mod( 'penci_featured_slider_cat_color' ); ?>; }
		.penci-mag2-carousel .cat > a.penci-cat-name:after, .featured-carousel .featured-cat a:after, .penci-magazine-slider .mag-cat a.penci-cat-name:after { border-color: <?php echo get_theme_mod( 'penci_featured_slider_cat_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_featured_slider_cat_hover_color' ) ): ?>
		.penci-mag2-carousel .cat > a.penci-cat-name:hover, .featured-carousel .featured-cat a:hover, .penci-magazine-slider .mag-cat a.penci-cat-name:hover { color: <?php echo get_theme_mod( 'penci_featured_slider_cat_hover_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_featured_slider_title_color' ) ): ?>
		.penci-mag2-carousel .mag2-header h3 a, .featured-carousel .featured-content .feat-text h3 a, .penci-magazine-slider .mag-meta h3 a, .featured-carousel.style-7 .featured-content .feat-text h3 a { color: <?php echo get_theme_mod( 'penci_featured_slider_title_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_featured_slider_title_hover_color' ) ): ?>
		.penci-mag2-carousel .mag2-header h3 a:hover, .featured-carousel .featured-content .feat-text h3 a:hover, .penci-magazine-slider .mag-meta h3 a:hover, .featured-carousel.style-7 .featured-content .feat-text h3 a:hover { color: <?php echo get_theme_mod( 'penci_featured_slider_title_hover_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_featured_slider_meta_color' ) ): ?>
		.featured-carousel .carousel-meta span, .featured-carousel .carousel-meta span a, .penci-magazine-slider .mag-meta-child span, .featured-carousel.style-7 .carousel-meta span, .featured-carousel.style-7 .carousel-meta span a { color: <?php echo get_theme_mod( 'penci_featured_slider_meta_color' ); ?>; }
		.featured-carousel .carousel-meta > span:after, .penci-magazine-slider .mag-meta-child span:after, .featured-carousel.style-7 .carousel-meta > span:after { border-color: <?php echo get_theme_mod( 'penci_featured_slider_meta_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_featured_slider_accent_color' ) ): ?>
		.featured-carousel .carousel-meta span.feat-author a, .featured-carousel.style-7 .carousel-meta span.feat-author a { color: <?php echo get_theme_mod( 'penci_featured_slider_accent_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_featured_slider4_line' ) ): ?>
		.featured-carousel.style-7 .featured-content .feat-text h3 a:before, .featured-carousel.style-7 .featured-content .feat-text h3 a:after {border-color: <?php echo get_theme_mod( 'penci_featured_slider4_line' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_magazine_slider_overlay_bg' ) ): ?>
		.penci-magazine-slider .mag-overlay {background: -moz-linear-gradient(top, transparent 0%, <?php echo get_theme_mod( 'penci_magazine_slider_overlay_bg' ); ?> 100%); background: -webkit-linear-gradient(top, transparent 0%, <?php echo get_theme_mod( 'penci_magazine_slider_overlay_bg' ); ?> 100%); background: -o-linear-gradient(top, transparent 0%, <?php echo get_theme_mod( 'penci_magazine_slider_overlay_bg' ); ?> 100%); background: -ms-linear-gradient(top, transparent 0%, <?php echo get_theme_mod( 'penci_magazine_slider_overlay_bg' ); ?> 100%);background: linear-gradient(to bottom, transparent 0%, <?php echo get_theme_mod( 'penci_magazine_slider_overlay_bg' ); ?> 100%); }
		<?php endif; ?>
		.penci-magazine-slider ul.mag-wrap li .mag-overlay { opacity: <?php echo get_theme_mod( 'penci_magazine_slider_overlay_bg_opacity' ); ?>; }
		.penci-magazine-slider ul.mag-wrap .mag-content:hover .mag-overlay { opacity: <?php echo get_theme_mod( 'penci_magazine_slider_overlay_bg_hover_opacity' ); ?>; }
		<?php if( get_theme_mod( 'penci_featured_slider_arrows_accent' ) ): ?>
		.featured-area.loaded button.slick-prev:hover, .featured-area.loaded button.slick-next:hover, .penci-slider .penci-direction-nav .penci-prev:hover, .penci-slider .penci-direction-nav .penci-next:hover, .penci-magazine-slider .penci-direction-nav a:hover, .penci-magazine2-prev:hover, .penci-magazine2-next:hover { background: <?php echo get_theme_mod( 'penci_featured_slider_arrows_accent' ); ?>; }
		.featured-carousel .carousel-meta span a:hover, .featured-carousel.style-7 .carousel-meta span a:hover, .featured-carousel.style-7 .carousel-meta span.feat-author a:hover { color: <?php echo get_theme_mod( 'penci_featured_slider_arrows_accent' ); ?>; }
		<?php endif; ?>
		<?php
		$auto_speed = get_theme_mod( 'penci_featured_slider_auto_speed' );
		if( is_numeric( $auto_speed ) ):
		$auto_speed_css = $auto_speed/1000;
		?>
		.penci-slider .pencislider-container .pencislider-title{-webkit-animation-delay: <?php echo sanitize_text_field( $auto_speed_css ); ?>s;-moz-animation-delay: <?php echo sanitize_text_field( $auto_speed_css ); ?>s;-o-animation-delay: <?php echo sanitize_text_field( $auto_speed_css ); ?>s;animation-delay: <?php echo sanitize_text_field( $auto_speed_css ); ?>s;}
		.penci-slider .pencislider-container .pencislider-caption {-webkit-animation-delay: <?php echo sanitize_text_field($auto_speed_css + 0.2); ?>s;-moz-animation-delay: <?php echo sanitize_text_field($auto_speed_css + 0.2); ?>s;-o-animation-delay: <?php echo sanitize_text_field($auto_speed_css + 0.2); ?>s;animation-delay: <?php echo sanitize_text_field($auto_speed_css + 0.2); ?>s;}
		.penci-slider .pencislider-container .pencislider-content .penci-button {-webkit-animation-delay: <?php echo sanitize_text_field($auto_speed_css + 0.4); ?>s;-moz-animation-delay: <?php echo sanitize_text_field($auto_speed_css + 0.4); ?>s;-o-animation-delay: <?php echo sanitize_text_field($auto_speed_css + 0.4); ?>s;animation-delay: <?php echo sanitize_text_field($auto_speed_css + 0.4); ?>s;}
		<?php endif; ?>
		<?php
		$penci_slider_height = get_theme_mod( 'penci_featured_penci_slider_height' );
		if( !empty( $penci_slider_height ) && is_numeric( $penci_slider_height ) ): ?>
		.featured-area .penci-slider { max-height: <?php echo absint( $penci_slider_height ); ?>px; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_standard_effect_button' ) ): ?>
		.penci-more-link a.more-link:hover:before { right: 100%; margin-right: 10px; width: 60px; }
		.penci-more-link a.more-link:hover:after{ left: 100%; margin-left: 10px; width: 60px; }
		.standard-post-entry a.more-link:hover, .standard-post-entry a.more-link:hover:before, .standard-post-entry a.more-link:hover:after { opacity: 0.8; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_standard_off_uppercase_title' ) ): ?>
		.header-standard h2, .header-standard .post-title, .header-standard h2 a { text-transform: none; letter-spacing: 0; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_standard_categories_action_color' ) ): ?>
		.penci-standard-cat .cat > a.penci-cat-name { color: <?php echo get_theme_mod( 'penci_standard_categories_action_color' ); ?>; }
		.penci-standard-cat .cat:before, .penci-standard-cat .cat:after { background-color: <?php echo get_theme_mod( 'penci_standard_categories_action_color' ); ?>; }
		.penci-standard-cat .cat > a.penci-cat-name:after { border-color: <?php echo get_theme_mod( 'penci_standard_categories_action_color' ); ?> !important; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_standard_title_post_color' ) ): ?>
		.header-standard > h2 a { color: <?php echo get_theme_mod( 'penci_standard_title_post_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_standard_title_post_color' ) ): ?>
		.header-standard > h2 a { color: <?php echo get_theme_mod( 'penci_standard_title_post_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_standard_title_post_hover_color' ) ): ?>
		.header-standard > h2 a:hover { color: <?php echo get_theme_mod( 'penci_standard_title_post_hover_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_standard_share_icon_color' ) ): ?>
		.standard-content .penci-post-box-meta .penci-post-share-box a { color: <?php echo get_theme_mod( 'penci_standard_share_icon_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_standard_share_icon_hover_color' ) ): ?>
		.standard-content .penci-post-box-meta .penci-post-share-box a:hover, .standard-content .penci-post-box-meta .penci-post-share-box a.liked { color: <?php echo get_theme_mod( 'penci_standard_share_icon_hover_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_standard_accent_color' ) ): ?>
		.header-standard .post-entry a:hover, .header-standard .author-post span a:hover, .standard-content a, .standard-post-entry a.more-link:hover, .penci-post-box-meta .penci-box-meta a:hover, .standard-content .post-entry blockquote:before, .post-entry blockquote cite, .post-entry blockquote .author, .standard-content-special .author-quote span, .standard-content-special .format-post-box .post-format-icon i, .standard-content-special .format-post-box .dt-special a:hover, .standard-content .penci-more-link a.more-link { color: <?php echo get_theme_mod( 'penci_standard_accent_color' ); ?>; }
		.standard-content-special .author-quote span:before, .standard-content-special .author-quote span:after, .standard-content .post-entry ul li:before, .post-entry blockquote .author span:after, .header-standard:after { background-color: <?php echo get_theme_mod( 'penci_standard_accent_color' ); ?>; }
		.penci-more-link a.more-link:before, .penci-more-link a.more-link:after { border-color: <?php echo get_theme_mod( 'penci_standard_accent_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_grid_off_title_uppercase' ) ): ?>
		.penci-grid li .item h2 a, .penci-masonry .item-masonry h2 a, .grid-mixed .mixed-detail h2 a, .overlay-header-box .overlay-title a { text-transform: none; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_masonry_categories_accent_color' ) ): ?>
		.penci-grid .cat a.penci-cat-name, .penci-masonry .cat a.penci-cat-name { color: <?php echo get_theme_mod( 'penci_masonry_categories_accent_color' ); ?>; }
		.penci-grid .cat a.penci-cat-name:after, .penci-masonry .cat a.penci-cat-name:after { border-color: <?php echo get_theme_mod( 'penci_masonry_categories_accent_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_masonry_box_icon' ) ): ?>
		.penci-post-box-meta .penci-post-share-box a { color: <?php echo get_theme_mod( 'penci_masonry_box_icon' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_masonry_box_icon_hover' ) ): ?>
		.penci-post-share-box a.liked, .penci-post-share-box a:hover { color: <?php echo get_theme_mod( 'penci_masonry_box_icon_hover' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_masonry_title_post_color' ) ): ?>
		.penci-grid li .item h2 a, .penci-masonry .item-masonry h2 a, .grid-mixed .mixed-detail h2 a { color: <?php echo get_theme_mod( 'penci_masonry_title_post_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_masonry_title_post_hover_color' ) ): ?>
		.penci-grid li .item h2 a:hover, .penci-masonry .item-masonry h2 a:hover, .grid-mixed .mixed-detail h2 a:hover { color: <?php echo get_theme_mod( 'penci_masonry_title_post_hover_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_masonry_accent_color' ) ): ?>
		.overlay-post-box-meta .overlay-share a:hover, .overlay-author a:hover, .penci-grid .standard-content-special .format-post-box .dt-special a:hover, .grid-post-box-meta span a:hover, .grid-post-box-meta span a.comment-link:hover, .penci-grid .standard-content-special .author-quote span, .penci-grid .standard-content-special .format-post-box .post-format-icon i, .grid-mixed .penci-post-box-meta .penci-box-meta a:hover { color: <?php echo get_theme_mod( 'penci_masonry_accent_color' ); ?>; }
		.penci-grid .standard-content-special .author-quote span:before, .penci-grid .standard-content-special .author-quote span:after, .grid-header-box:after, .list-post .header-list-style:after { background-color: <?php echo get_theme_mod( 'penci_masonry_accent_color' ); ?>; }
		.penci-grid .post-box-meta span:after, .penci-masonry .post-box-meta span:after { border-color: <?php echo get_theme_mod( 'penci_masonry_accent_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_photography_overlay_color' ) ): ?>
		.penci-grid li.typography-style .overlay-typography { background-color: <?php echo get_theme_mod( 'penci_photography_overlay_color' ); ?>; }
		<?php endif; ?>
		.penci-grid li.typography-style .overlay-typography { opacity: <?php echo get_theme_mod( 'penci_photography_overlay_opacity' ); ?>; }
		.penci-grid li.typography-style:hover .overlay-typography { opacity: <?php echo get_theme_mod( 'penci_photography_overlay_hover_opacity' ); ?>; }
		<?php if( get_theme_mod( 'penci_photography_categories_color' ) ): ?>
		.penci-grid .typography-style .main-typography a.penci-cat-name, .penci-grid .typography-style .main-typography a.penci-cat-name:hover { color: <?php echo get_theme_mod( 'penci_photography_categories_color' ); ?>; }
		.typography-style .main-typography a.penci-cat-name:after { border-color: <?php echo get_theme_mod( 'penci_photography_categories_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_photography_title_post_color' ) ): ?>
		.penci-grid li.typography-style .item .main-typography h2 a { color: <?php echo get_theme_mod( 'penci_photography_title_post_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_photography_title_post_hover_color' ) ): ?>
		.penci-grid li.typography-style .item .main-typography h2 a:hover { color: <?php echo get_theme_mod( 'penci_photography_title_post_hover_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_photography_meta_color' ) ): ?>
		.penci-grid li.typography-style .grid-post-box-meta span, .penci-grid li.typography-style .grid-post-box-meta span a { color: <?php echo get_theme_mod( 'penci_photography_meta_color' ); ?>; }
		.penci-grid li.typography-style .grid-post-box-meta span:after { background-color: <?php echo get_theme_mod( 'penci_photography_meta_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_photography_accent_color' ) ): ?>
		.penci-grid li.typography-style .grid-post-box-meta span a:hover { color: <?php echo get_theme_mod( 'penci_photography_accent_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_overlay_title_post_color' ) ): ?>
		.overlay-header-box .overlay-title a { color: <?php echo get_theme_mod( 'penci_overlay_title_post_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_overlay_title_post_hover_color' ) ): ?>
		.overlay-header-box .overlay-title a:hover { color: <?php echo get_theme_mod( 'penci_overlay_title_post_hover_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_overlay_cat_post_color' ) ): ?>
		.overlay-header-box .cat > a.penci-cat-name { color: <?php echo get_theme_mod( 'penci_overlay_cat_post_color' ); ?>; }
		.overlay-header-box .cat > a.penci-cat-name:after { border-color: <?php echo get_theme_mod( 'penci_overlay_cat_post_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_overlay_cat_hover_post_color' ) ): ?>
		.overlay-header-box .cat > a.penci-cat-name:hover { color: <?php echo get_theme_mod( 'penci_overlay_cat_hover_post_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_overlay_author_post_color' ) ): ?>
		.overlay-author span, .overlay-author a { color: <?php echo get_theme_mod( 'penci_overlay_author_post_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_sidebar_heading_lowcase' ) ): ?>
		#sidebar .penci-border-arrow .inner-arrow { text-transform: none; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_sidebar_heading_bg' ) ): ?>
		#sidebar .penci-border-arrow .inner-arrow { background-color: <?php echo get_theme_mod( 'penci_sidebar_heading_bg' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_sidebar_heading_outer_bg' ) ): ?>
		#sidebar .penci-border-arrow:after { background-color: <?php echo get_theme_mod( 'penci_sidebar_heading_outer_bg' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_sidebar_heading_border_color' ) ): ?>
		#sidebar .penci-border-arrow .inner-arrow { border-color: <?php echo get_theme_mod( 'penci_sidebar_heading_border_color' ); ?>; }
		#sidebar .penci-border-arrow:before { border-top-color: <?php echo get_theme_mod( 'penci_sidebar_heading_border_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_sidebar_heading_border_inner_color' ) ): ?>
		#sidebar .penci-border-arrow:after { border-color: <?php echo get_theme_mod( 'penci_sidebar_heading_border_inner_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_sidebar_heading_color' ) ): ?>
		#sidebar .penci-border-arrow .inner-arrow { color: <?php echo get_theme_mod( 'penci_sidebar_heading_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_sidebar_remove_border_outer' ) ): ?>
		#sidebar .penci-border-arrow:after { content: none; display: none; }
		#sidebar .widget-title{ margin-left: 0; margin-right: 0; margin-top: 0; }
		#sidebar .penci-border-arrow:before{ bottom: -6px; border-width: 6px; margin-left: -6px; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_sidebar_remove_arrow_down' ) ): ?>
		#sidebar .penci-border-arrow:before { content: none; display: none; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_sidebar_accent_color' ) ): ?>
		.widget ul.side-newsfeed li .side-item .side-item-text h4 a, .widget a, .widget.widget_categories ul li, .widget.widget_archive ul li, .widget-social a i, .widget-social a span { color: <?php echo get_theme_mod( 'penci_sidebar_accent_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_sidebar_accent_hover_color' ) ): ?>
		.widget ul.side-newsfeed li .side-item .side-item-text h4 a:hover, .widget a:hover, #sidebar .widget-social a:hover span, .widget-social a:hover span, .penci-tweets-widget-content .icon-tweets, .penci-tweets-widget-content .tweet-intents a, .penci-tweets-widget-content .tweet-intents span:after { color: <?php echo get_theme_mod( 'penci_sidebar_accent_hover_color' ); ?>; }
		.widget .tagcloud a:hover, .widget-social a:hover i, .widget input[type="submit"]:hover { color: #fff; background-color: <?php echo get_theme_mod( 'penci_sidebar_accent_hover_color' ); ?>; border-color: <?php echo get_theme_mod( 'penci_sidebar_accent_hover_color' ); ?>; }
		.about-widget .about-me-heading:before { border-color: <?php echo get_theme_mod( 'penci_sidebar_accent_hover_color' ); ?>; }
		.penci-tweets-widget-content .tweet-intents-inner:before, .penci-tweets-widget-content .tweet-intents-inner:after { background-color: <?php echo get_theme_mod( 'penci_sidebar_accent_hover_color' ); ?>; }
		.penci-slider.penci-tweets-slider ol.penci-control-nav li a.penci-active, .penci-slider.penci-tweets-slider ol.penci-control-nav li a:hover { border-color: <?php echo get_theme_mod( 'penci_sidebar_accent_hover_color' ); ?>; background-color: <?php echo get_theme_mod( 'penci_sidebar_accent_hover_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_footer_widget_padding' ) ): ?>
		#widget-area { padding: <?php echo get_theme_mod( 'penci_footer_widget_padding' ); ?>px 0; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_footer_widget_area_bg' ) ): ?>
		#widget-area { background: <?php echo get_theme_mod( 'penci_footer_widget_area_bg' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_footer_widget_area_text_color' ) ): ?>
		.footer-widget-wrapper, .footer-widget-wrapper .widget.widget_categories ul li, .footer-widget-wrapper .widget.widget_archive ul li { color: <?php echo get_theme_mod( 'penci_footer_widget_area_text_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_footer_widget_area_list_border' ) ): ?>
		.footer-widget-wrapper .widget ul li { border-color: <?php echo get_theme_mod( 'penci_footer_widget_area_list_border' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_footer_widget_title_center' ) ): ?>
		.footer-widget-wrapper .widget .widget-title { text-align: center; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_footer_widget_color' ) ): ?>
		.footer-widget-wrapper .widget .widget-title { color: <?php echo get_theme_mod( 'penci_footer_widget_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_footer_widget_title_border_color' ) ): ?>
		.footer-widget-wrapper .widget .widget-title .inner-arrow { border-color: <?php echo get_theme_mod( 'penci_footer_widget_title_border_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_footer_widget_title_border_below_color' ) ): ?>
		.footer-widget-wrapper .widget .widget-title:after { border-color: <?php echo get_theme_mod( 'penci_footer_widget_title_border_below_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_footer_widget_accent_color' ) ): ?>
		.footer-widget-wrapper a, .footer-widget-wrapper .widget ul.side-newsfeed li .side-item .side-item-text h4 a, .footer-widget-wrapper .widget a, .footer-widget-wrapper .widget-social a i, .footer-widget-wrapper .widget-social a span { color: <?php echo get_theme_mod( 'penci_footer_widget_accent_color' ); ?>; }
		.footer-widget-wrapper .widget-social a:hover i{ color: #fff; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_footer_widget_accent_hover_color' ) ): ?>
		.footer-widget-wrapper .penci-tweets-widget-content .icon-tweets, .footer-widget-wrapper .penci-tweets-widget-content .tweet-intents a, .footer-widget-wrapper .penci-tweets-widget-content .tweet-intents span:after, .footer-widget-wrapper .widget ul.side-newsfeed li .side-item .side-item-text h4 a:hover, .footer-widget-wrapper .widget a:hover, .footer-widget-wrapper .widget-social a:hover span, .footer-widget-wrapper a:hover { color: <?php echo get_theme_mod( 'penci_footer_widget_accent_hover_color' ); ?>; }
		.footer-widget-wrapper .widget .tagcloud a:hover, .footer-widget-wrapper .widget-social a:hover i, .footer-widget-wrapper .mc4wp-form input[type="submit"]:hover, .footer-widget-wrapper .widget input[type="submit"]:hover { color: #fff; background-color: <?php echo get_theme_mod( 'penci_footer_widget_accent_hover_color' ); ?>; border-color: <?php echo get_theme_mod( 'penci_footer_widget_accent_hover_color' ); ?>; }
		.footer-widget-wrapper .about-widget .about-me-heading:before { border-color: <?php echo get_theme_mod( 'penci_footer_widget_accent_hover_color' ); ?>; }
		.footer-widget-wrapper .penci-tweets-widget-content .tweet-intents-inner:before, .footer-widget-wrapper .penci-tweets-widget-content .tweet-intents-inner:after { background-color: <?php echo get_theme_mod( 'penci_footer_widget_accent_hover_color' ); ?>; }
		.footer-widget-wrapper .penci-slider.penci-tweets-slider ol.penci-control-nav li a.penci-active, .footer-widget-wrapper .penci-slider.penci-tweets-slider ol.penci-control-nav li a:hover {  border-color: <?php echo get_theme_mod( 'penci_footer_widget_accent_hover_color' ); ?>;  background: <?php echo get_theme_mod( 'penci_footer_widget_accent_hover_color' ); ?>;  }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_footer_icon_color' ) ): ?>
		ul.footer-socials li a i { color: <?php echo get_theme_mod( 'penci_footer_icon_color' ); ?>; border-color: <?php echo get_theme_mod( 'penci_footer_icon_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_footer_icon_hover_color' ) ): ?>
		ul.footer-socials li a:hover i { background-color: <?php echo get_theme_mod( 'penci_footer_icon_hover_color' ); ?>; border-color: <?php echo get_theme_mod( 'penci_footer_icon_hover_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_footer_icon_hover_icon_color' ) ): ?>
		ul.footer-socials li a:hover i { color: <?php echo get_theme_mod( 'penci_footer_icon_hover_icon_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_footer_social_text_color' ) ): ?>
		ul.footer-socials li a span { color: <?php echo get_theme_mod( 'penci_footer_social_text_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_footer_social_hover_text_color' ) ): ?>
		ul.footer-socials li a:hover span { color: <?php echo get_theme_mod( 'penci_footer_social_hover_text_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_footer_social_border_color' ) ): ?>
		.footer-socials-section { border-color: <?php echo get_theme_mod( 'penci_footer_social_border_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_footer_copyright_bg_color' ) ): ?>
		#footer-section, .footer-instagram { background-color: <?php echo get_theme_mod( 'penci_footer_copyright_bg_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_footer_copyright_bg_image' ) ): ?>
		#footer-section { background-image: url(<?php echo get_theme_mod( 'penci_footer_copyright_bg_image' ); ?>); }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_footer_copyright_text_color' ) ): ?>
		#footer-section, #footer-copyright * { color: <?php echo get_theme_mod( 'penci_footer_copyright_text_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_footer_go_top_color' ) ): ?>
		#footer-section .go-to-top i, #footer-section .go-to-top-parent span { color: <?php echo get_theme_mod( 'penci_footer_go_top_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_footer_go_top_hover_color' ) ): ?>
		#footer-section .go-to-top:hover span, #footer-section .go-to-top:hover i { color: <?php echo get_theme_mod( 'penci_footer_go_top_hover_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_footer_copyright_accent_color' ) ): ?>
		#footer-section a { color: <?php echo get_theme_mod( 'penci_footer_copyright_accent_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_single_cat_color' ) ): ?>
		.container-single .penci-standard-cat .cat > a.penci-cat-name { color: <?php echo get_theme_mod( 'penci_single_cat_color' ); ?>; }
		.container-single .penci-standard-cat .cat:before, .container-single .penci-standard-cat .cat:after { background-color: <?php echo get_theme_mod( 'penci_single_cat_color' ); ?>; }
		.container-single .penci-standard-cat .cat > a.penci-cat-name:after { border-color: <?php echo get_theme_mod( 'penci_single_cat_color' ); ?> !important; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_off_uppercase_post_title' ) ): ?>
		.container-single .single-post-title { text-transform: none; letter-spacing: 1px; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_align_left_post_title' ) ): ?>
		.container-single .header-standard, .container-single .post-box-meta-single { text-align: left; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_off_uppercase_post_title_nav' ) ): ?>
		.container-single .post-pagination h5 { text-transform: none; letter-spacing: 0; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_off_uppercase_post_title_related' ) ): ?>
		.container-single .item-related h3 a { text-transform: none; letter-spacing: 0; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_single_title_color' ) ): ?>
		.container-single .header-standard .post-title { color: <?php echo get_theme_mod( 'penci_single_title_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_single_share_icon_color' ) ): ?>
		.container-single .post-share a, .page-share .post-share a { color: <?php echo get_theme_mod( 'penci_single_share_icon_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_single_share_icon_hover_color' ) ): ?>
		.container-single .post-share a:hover, .container-single .post-share a.liked, .page-share .post-share a:hover { color: <?php echo get_theme_mod( 'penci_single_share_icon_hover_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_single_number_like_color' ) ): ?>
		.post-share .count-number-like { color: <?php echo get_theme_mod( 'penci_single_number_like_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_single_accent_color' ) ): ?>
		.comment-content a, .container-single .post-entry a, .container-single .format-post-box .dt-special a:hover, .container-single .author-quote span, .container-single .author-post span a:hover, .post-entry blockquote:before, .post-entry blockquote cite, .post-entry blockquote .author, .post-pagination a:hover, .author-content h5 a:hover, .author-content .author-social:hover, .item-related h3 a:hover, .container-single .format-post-box .post-format-icon i, .container.penci-breadcrumb.single-breadcrumb span a:hover { color: <?php echo get_theme_mod( 'penci_single_accent_color' ); ?>; }
		.container-single .standard-content-special .format-post-box, ul.slick-dots li button:hover, ul.slick-dots li.slick-active button { border-color: <?php echo get_theme_mod( 'penci_single_accent_color' ); ?>; }
		ul.slick-dots li button:hover, ul.slick-dots li.slick-active button, #respond h3.comment-reply-title span:before, #respond h3.comment-reply-title span:after, .post-box-title:before, .post-box-title:after, .container-single .author-quote span:before, .container-single .author-quote span:after, .post-entry blockquote .author span:after, .post-entry blockquote .author span:before, .post-entry ul li:before, #respond #submit:hover, .wpcf7 input[type="submit"]:hover, .widget_wysija input[type="submit"]:hover { background: <?php echo get_theme_mod( 'penci_single_accent_color' ); ?>; }
		.container-single .post-entry .post-tags a:hover { color: #fff; border-color: <?php echo get_theme_mod( 'penci_single_accent_color' ); ?>; background-color: <?php echo get_theme_mod( 'penci_single_accent_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_home_boxes_overlay' ) ): ?>
		ul.homepage-featured-boxes .penci-fea-in h4 span span, ul.homepage-featured-boxes .penci-fea-in h4 span, ul.homepage-featured-boxes .penci-fea-in.boxes-style-2 h4 { background-color: <?php echo get_theme_mod( 'penci_home_boxes_overlay' ); ?>; }
		ul.homepage-featured-boxes li .penci-fea-in:before, ul.homepage-featured-boxes li .penci-fea-in:after, ul.homepage-featured-boxes .penci-fea-in h4 span span:before, ul.homepage-featured-boxes .penci-fea-in h4 > span:before, ul.homepage-featured-boxes .penci-fea-in h4 > span:after, ul.homepage-featured-boxes .penci-fea-in.boxes-style-2 h4:before { border-color: <?php echo get_theme_mod( 'penci_home_boxes_overlay' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_home_boxes_title_color' ) ): ?>
		ul.homepage-featured-boxes .penci-fea-in h4 span span { color: <?php echo get_theme_mod( 'penci_home_boxes_title_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_home_boxes_accent_hover_color' ) ): ?>
		ul.homepage-featured-boxes .penci-fea-in:hover h4 span { color: <?php echo get_theme_mod( 'penci_home_boxes_accent_hover_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_home_popular_label_color' ) ): ?>
		.home-pupular-posts-title { color: <?php echo get_theme_mod( 'penci_home_popular_label_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_home_popular_post_title_color' ) ): ?>
		.penci-home-popular-post .item-related h3 a { color: <?php echo get_theme_mod( 'penci_home_popular_post_title_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_home_popular_post_title_hover_color' ) ): ?>
		.penci-home-popular-post .item-related h3 a:hover { color: <?php echo get_theme_mod( 'penci_home_popular_post_title_hover_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_home_popular_post_date_color' ) ): ?>
		.penci-home-popular-post .item-related span.date { color: <?php echo get_theme_mod( 'penci_home_popular_post_date_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_home_title_box_bg' ) ): ?>
		.penci-homepage-title .inner-arrow{ background-color: <?php echo get_theme_mod( 'penci_home_title_box_bg' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_home_title_box_outer_bg' ) ): ?>
		.penci-border-arrow.penci-homepage-title:after { background-color: <?php echo get_theme_mod( 'penci_home_title_box_outer_bg' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_home_title_box_border_color' ) ): ?>
		.penci-border-arrow.penci-homepage-title .inner-arrow { border-color: <?php echo get_theme_mod( 'penci_home_title_box_border_color' ); ?>; }
		.penci-border-arrow.penci-homepage-title:before { border-top-color: <?php echo get_theme_mod( 'penci_home_title_box_border_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_home_title_box_border_inner_color' ) ): ?>
		.penci-border-arrow.penci-homepage-title:after { border-color: <?php echo get_theme_mod( 'penci_home_title_box_border_inner_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_home_title_box_text_color' ) ): ?>
		.penci-homepage-title .inner-arrow, .penci-homepage-title.penci-magazine-title .inner-arrow a { color: <?php echo get_theme_mod( 'penci_home_title_box_text_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_home_remove_border_outer' ) ): ?>
		.penci-homepage-title:after { content: none; display: none; }
		.penci-homepage-title { margin-left: 0; margin-right: 0; margin-top: 0; }
		.penci-homepage-title:before { bottom: -6px; border-width: 6px; margin-left: -6px; }
		.penci-homepage-title.penci-magazine-title:before{ left: 25px; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_home_remove_arrow_down' ) ): ?>
		.penci-homepage-title:before { content: none; display: none; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_home_featured_title_color' ) ): ?>
		.home-featured-cat-content .magcat-detail h3 a { color: <?php echo get_theme_mod( 'penci_home_featured_title_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_home_featured_title_hover_color' ) ): ?>
		.home-featured-cat-content .magcat-detail h3 a:hover { color: <?php echo get_theme_mod( 'penci_home_featured_title_hover_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_home_featured_accent_color' ) ): ?>
		.home-featured-cat-content .grid-post-box-meta span a:hover { color: <?php echo get_theme_mod( 'penci_home_featured_accent_color' ); ?>; }
		.home-featured-cat-content .first-post .magcat-detail .mag-header:after { background: <?php echo get_theme_mod( 'penci_home_featured_accent_color' ); ?>; }
		.penci-slider ol.penci-control-nav li a.penci-active, .penci-slider ol.penci-control-nav li a:hover { border-color: <?php echo get_theme_mod( 'penci_home_featured_accent_color' ); ?>; background: <?php echo get_theme_mod( 'penci_home_featured_accent_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_home_featured3_overlay_color' ) ): ?>
		.home-featured-cat-content .mag-photo .mag-overlay-photo { background-color: <?php echo get_theme_mod( 'penci_home_featured3_overlay_color' ); ?>; }
		<?php endif; ?>
		.home-featured-cat-content .mag-photo .mag-overlay-photo { opacity: <?php echo get_theme_mod( 'penci_home_featured3_overlay_opacity' ); ?>; }
		.home-featured-cat-content .mag-photo:hover .mag-overlay-photo { opacity: <?php echo get_theme_mod( 'penci_home_featured3_overlay_hover_opacity' ); ?>; }
		<?php if( get_theme_mod( 'penci_home_featured3_title_color' ) ): ?>
		.home-featured-cat-content .mag-photo .magcat-detail h3 a, .penci-single-mag-slider .magcat-detail .magcat-titlte a { color: <?php echo get_theme_mod( 'penci_home_featured3_title_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_home_featured3_title_hover_color' ) ): ?>
		.home-featured-cat-content .mag-photo .magcat-detail h3 a:hover, .penci-single-mag-slider .magcat-detail .magcat-titlte a:hover { color: <?php echo get_theme_mod( 'penci_home_featured3_title_hover_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_home_featured3_meta_color' ) ): ?>
		.home-featured-cat-content .mag-photo .grid-post-box-meta span, .home-featured-cat-content .mag-photo .grid-post-box-meta span a, .penci-single-mag-slider .grid-post-box-meta span, .penci-single-mag-slider .grid-post-box-meta span a { color: <?php echo get_theme_mod( 'penci_home_featured3_meta_color' ); ?>; }
		.home-featured-cat-content .mag-photo .grid-post-box-meta span:after, .home-featured-cat-content .mag-single-slider .grid-post-box-meta span:after { background-color: <?php echo get_theme_mod( 'penci_home_featured3_meta_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_portfolio_layout_title_color' ) ): ?>
		.portfolio-overlay-content .portfolio-short .portfolio-title a, .text-grid-info h3 a { color: <?php echo get_theme_mod( 'penci_portfolio_layout_title_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_portfolio_layout_title_hover' ) ): ?>
		.portfolio-overlay-content .portfolio-short .portfolio-title a:hover, .text-grid-info h3 a:hover { color: <?php echo get_theme_mod( 'penci_portfolio_layout_title_hover' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_portfolio_buttons_icon_color' ) ): ?>
		.portfolio-buttons a { color: <?php echo get_theme_mod( 'penci_portfolio_buttons_icon_color' ); ?>; border-color: <?php echo get_theme_mod( 'penci_portfolio_buttons_icon_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_portfolio_buttons_icon_hover' ) ): ?>
		.portfolio-item .portfolio-buttons a:hover { color: <?php echo get_theme_mod( 'penci_portfolio_buttons_icon_hover' ); ?>; border-color: <?php echo get_theme_mod( 'penci_portfolio_buttons_icon_hover' ); ?>; }
		.portfolio-item .portfolio-buttons a.liked > i { color: <?php echo get_theme_mod( 'penci_portfolio_buttons_icon_hover' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_portfolio_layout_overlay_color' ) ): ?>
		.portfolio-overlay-background { background: <?php echo get_theme_mod( 'penci_portfolio_layout_overlay_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_portfolio_layout_overlay_border_color' ) ): ?>
		.inner-item-portfolio:hover .portfolio-overlay-background { border-color: <?php echo get_theme_mod( 'penci_portfolio_layout_overlay_border_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_portfolio_grid_categories_color' ) ): ?>
		.text-grid-cat, .text-grid-cat a { color: <?php echo get_theme_mod( 'penci_portfolio_grid_categories_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_portfolio_grid_categories_hover' ) ): ?>
		.text-grid-cat a:hover { color: <?php echo get_theme_mod( 'penci_portfolio_grid_categories_hover' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_portfolio_overlay_color' ) ): ?>
		.penci-portfolio-thumbnail a:after { background-color: <?php echo get_theme_mod( 'penci_portfolio_overlay_color' ); ?>; }
		<?php endif; ?>
		.inner-item-portfolio:hover .penci-portfolio-thumbnail a:after { opacity: <?php echo get_theme_mod( 'penci_portfolio_overlay_opacity' ); ?>; }
		<?php if( get_theme_mod( 'penci_portfolio_title_color' ) ): ?>
		.inner-item-portfolio .portfolio-desc h3 { color: <?php echo get_theme_mod( 'penci_portfolio_title_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_portfolio_cate_color' ) ): ?>
		.inner-item-portfolio .portfolio-desc span { color: <?php echo get_theme_mod( 'penci_portfolio_cate_color' ); ?>; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_woo_paging_align' ) == 'left' ): ?>
		.woocommerce nav.woocommerce-pagination { text-align: left; }
		<?php endif; ?>
		<?php if( get_theme_mod( 'penci_woo_paging_align' ) == 'right' ): ?>
		.woocommerce nav.woocommerce-pagination { text-align: right; }
		<?php endif; ?>
		<?php if(get_theme_mod( 'penci_custom_css' )) : ?>
		<?php echo get_theme_mod( 'penci_custom_css' ); ?>
		<?php endif; ?>
    </style>
    <?php
}
add_action( 'wp_head', 'pencidesign_customizer_css' );
?>