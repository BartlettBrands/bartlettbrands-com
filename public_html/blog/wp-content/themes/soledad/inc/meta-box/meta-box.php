<?php
/**
 * Add custom meta box for pages
 * Add custom sidebar for page go here
 * Use add_meta_box() function to hook it
 *
 * @package Wordpress
 * @since 1.0
 *
 */
function Penci_Add_Custom_Metabox() {
	new Penci_Add_Custom_Metabox_Class();
}

if ( is_admin() ) {
	add_action( 'load-post.php', 'Penci_Add_Custom_Metabox' );
	add_action( 'load-post-new.php', 'Penci_Add_Custom_Metabox' );
}

/**
 * The Class.
 */
class Penci_Add_Custom_Metabox_Class {

	/**
	 * Hook into the appropriate actions when the class is constructed.
	 */
	public function __construct() {
		add_action( 'add_meta_boxes', array( $this, 'add_meta_box' ) );
		add_action( 'save_post', array( $this, 'save' ) );
	}

	/**
	 * Adds the meta box container.
	 */
	public function add_meta_box( $post_type ) {
		$post_types = array('post', 'page');     //limit meta box to certain post types
		if ( in_array( $post_type, $post_types )) {
			add_meta_box(
				'penci_custom_sidebar_page'
				,esc_html__( 'Custom Sidebar in This Post/Page', 'soledad' )
				,array( $this, 'render_meta_box_content' )
				,$post_type
				,'advanced'
				,'high'
			);
		}
	}

	/**
	 * Save the meta when the post is saved.
	 *
	 * @param int $post_id The ID of the post being saved.
	 */
	public function save( $post_id ) {

		/*
		 * We need to verify this came from the our screen and with proper authorization,
		 * because save_post can be triggered at other times.
		 */

		// Check if our nonce is set.
		if ( ! isset( $_POST['penci_inner_custom_box_nonce'] ) )
			return $post_id;

		$nonce = $_POST['penci_inner_custom_box_nonce'];

		// Verify that the nonce is valid.
		if ( ! wp_verify_nonce( $nonce, 'penci_inner_custom_box' ) )
			return $post_id;

		// If this is an autosave, our form has not been submitted,
		//     so we don't want to do anything.
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
			return $post_id;

		// Check the user's permissions.
		if ( 'page' == $_POST['post_type'] ) {

			if ( ! current_user_can( 'edit_page', $post_id ) )
				return $post_id;

		} else {

			if ( ! current_user_can( 'edit_post', $post_id ) )
				return $post_id;
		}

		// Sanitize the user input.
		$mydata = sanitize_text_field( $_POST['penci_custom_sidebar_page_field'] );

		// Update the meta field.
		update_post_meta( $post_id, 'penci_custom_sidebar_page_display', $mydata );
	}


	/**
	 * Render Meta Box content.
	 *
	 * @param WP_Post $post The post object.
	 */
	public function render_meta_box_content( $post ) {

		// Add an nonce field so we can check for it later.
		wp_nonce_field( 'penci_inner_custom_box', 'penci_inner_custom_box_nonce' );

		// Use get_post_meta to retrieve an existing value from the database.
		$value = get_post_meta( $post->ID, 'penci_custom_sidebar_page_display', true );

		// Display the form, using the current value.
		?>
		<p class="description"><?php esc_html_e( 'Note: for page, you can choose display sidebar or no in Template "Page with Sidebar" and custom sidebar here, if sidebar you choice here is empty, will display sidebar you choice for page in customize', 'soledad' ); ?></p>
		<p>
			<select id="penci_custom_sidebar_page_field" name="penci_custom_sidebar_page_field">
				<option value=""><?php esc_html_e( "Default Sidebar( on Customize )", "pencidesign" ); ?></option>
				<option value="main-sidebar" <?php selected( $value, 'main-sidebar' ); ?>><?php esc_html_e( "Main Sidebar", "pencidesign" ); ?></option>
				<option value="custom-sidebar-1" <?php selected( $value, 'custom-sidebar-1' ); ?>><?php esc_html_e( "Custom Sidebar 1", "pencidesign" ); ?></option>
				<option value="custom-sidebar-2" <?php selected( $value, 'custom-sidebar-2' ); ?>><?php esc_html_e( "Custom Sidebar 2", "pencidesign" ); ?></option>
				<option value="custom-sidebar-3" <?php selected( $value, 'custom-sidebar-3' ); ?>><?php esc_html_e( "Custom Sidebar 3", "pencidesign" ); ?></option>
				<option value="custom-sidebar-4" <?php selected( $value, 'custom-sidebar-4' ); ?>><?php esc_html_e( "Custom Sidebar 4", "pencidesign" ); ?></option>
				<option value="custom-sidebar-5" <?php selected( $value, 'custom-sidebar-5' ); ?>><?php esc_html_e( "Custom Sidebar 5", "pencidesign" ); ?></option>
				<option value="custom-sidebar-6" <?php selected( $value, 'custom-sidebar-6' ); ?>><?php esc_html_e( "Custom Sidebar 6", "pencidesign" ); ?></option>
			</select>
		</p>
		<?php
	}
}