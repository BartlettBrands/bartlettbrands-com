<?php
/**
 * Comments template
 *
 * @package Wordpress
 * @since 1.0
 */

// Get numbers comments
$comment_numbers = get_comments_number();
?>
<div class="post-comments<?php if( $comment_numbers == 0 ): echo ' no-comment-yet'; endif;?>" id="comments">
	<?php
	if ( comments_open() && ( $comment_numbers > 0 ) ) :
		echo '<div class="post-title-box"><h4 class="post-box-title">';
		comments_number( esc_html__( '0 comment', 'soledad' ), esc_html__( '1 comment', 'soledad' ), '% ' . esc_html__( 'comments', 'soledad' ) );
		echo '</h4></div>';

		echo "<div class='comments'>";
		wp_list_comments( array(
			'avatar_size' => 100,
			'max_depth'   => 5,
			'style'       => 'div',
			'callback'    => 'penci_comments_template',
			'type'        => 'all'
		) );
		echo "</div>";

	endif;

	echo "<div id='comments_pagination'>";
	paginate_comments_links( array( 'prev_text' => '&laquo;', 'next_text' => '&raquo;' ) );
	echo "</div>";

	/* Custom field */
	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );

	$fields =  array(
		'author' => '<p class="comment-form-author"><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" placeholder="' . esc_html__( 'Name*', 'soledad' ) . '" size="30"' . $aria_req . ' /></p>',

		'email' => '<p class="comment-form-email"><input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" placeholder="' . esc_html__( 'Email*', 'soledad' ) . '" size="30"' . $aria_req . ' /></p>',

		'url' => '<p class="comment-form-url"><input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" placeholder="' . esc_html__( 'Website', 'soledad' ) . '" size="30" /></p>',
	);
	$custom_comment_field = '<p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="8" placeholder="' . esc_html__( 'Your Comment', 'soledad' ) . '" aria-required="true"></textarea></p>';  //label removed for cleaner layout


	comment_form( array(
		'comment_field'        => $custom_comment_field,
		'comment_notes_after'  => '',
		'logged_in_as'         => '',
		'comment_notes_before' => '',
		'title_reply'          => '<span>' . esc_html__( 'Leave a Comment', 'soledad' ) . '</span>',
		'cancel_reply_link'    => esc_html__( 'Cancel Reply', 'soledad' ),
		'label_submit'         => esc_html__( 'Submit', 'soledad' ),
		'fields'               => apply_filters( 'comment_form_default_fields', $fields ),
	) );
	?>
</div> <!-- end comments div -->
