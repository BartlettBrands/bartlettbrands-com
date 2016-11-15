<?php
/**
 * Template loop for mixed style
 */
?>
<?php
/**
* Create var $j to count order posts
* If $j = 1, to show mixed post, $j > 1 to show grid post
*
* @since 1.0
*/
$k = 3;
if ( ! isset ( $j ) ) { $j = 1; } else { $j = $j; }
if( ( is_home() && ! get_theme_mod( 'penci_sidebar_home' ) ) || ( is_archive() && ! get_theme_mod( 'penci_sidebar_archive' ) ) ): $k = 4; endif;

if ( ( $j % $k ) == 1 ) {
	get_template_part( 'content', 'mixed-post' );
}
else {
	get_template_part( 'content', 'grid' );
}

$j ++;
?>