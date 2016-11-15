<?php
/**
 * Hook to create meta box in categories edit screen
 *
 * @since 1.0
 */

// Create markup
if ( ! function_exists( 'penci_category_fields_meta' ) ) {
	add_action( 'edit_category_form_fields', 'penci_category_fields_meta' );
	function penci_category_fields_meta( $tag ) {
		$t_id             = $tag->term_id;
		$penci_categories = get_option( "category_$t_id" );
		$mag_layout = isset( $penci_categories['mag_layout'] ) ? $penci_categories['mag_layout'] : 'style-1';
		$mag_ads = isset( $penci_categories['mag_ads'] ) ? $penci_categories['mag_ads'] : '';
		?>
		<tr class="form-field">
			<th scope="row" valign="top">
				<label for="mag_layout"><?php esc_html_e( 'Select Featured Layout', 'soledad' ); ?></label>
			</th>
			<td>
				<select name="penci_categories[mag_layout]" id="penci_categories[mag_layout]">
					<option value="style-1" <?php selected( $mag_layout, 'style-1' );?>><?php esc_html_e( 'Style 1', 'soledad' ); ?></option>
					<option value="style-2" <?php selected( $mag_layout, 'style-2' );?>><?php esc_html_e( 'Style 2', 'soledad' ); ?></option>
					<option value="style-3" <?php selected( $mag_layout, 'style-3' );?>><?php esc_html_e( 'Style 3', 'soledad' ); ?></option>
					<option value="style-4" <?php selected( $mag_layout, 'style-4' );?>><?php esc_html_e( 'Style 4 - Single Slider', 'soledad' ); ?></option>
					<option value="style-5" <?php selected( $mag_layout, 'style-5' );?>><?php esc_html_e( 'Style 5 - Slider 2 Columns', 'soledad' ); ?></option>
					<option value="style-6" <?php selected( $mag_layout, 'style-6' );?>><?php esc_html_e( 'Style 6', 'soledad' ); ?></option>
				</select>
				<p class="description"><?php esc_html_e( 'When you chose HomePage layout is Magazine Layout, this options for change featured layout for categories display featured', 'soledad' ); ?></p>
			</td>
		</tr>
		<tr class="form-field">
			<th scope="row" valign="top">
				<label for="mag_ads"><?php esc_html_e( 'Add Google Adsense Code/Custom HTML below this category', 'soledad' ); ?></label>
			</th>
			<td>
				<textarea name="penci_categories[mag_ads]" id="penci_categories[mag_ads]" rows="5" cols="50"><?php echo stripslashes( $mag_ads ); ?></textarea>
				<p class="description"><?php esc_html_e( 'Note: If you are using featured layout style 2, you should not use google adsense code here', 'soledad' ); ?></p>
			</td>
		</tr>
	<?php
	}
}

// Save data
if ( ! function_exists( 'penci_save_category_fileds_meta' ) ) {
	add_action( 'edited_category', 'penci_save_category_fileds_meta' );
	function penci_save_category_fileds_meta( $term_id ) {
		if ( isset( $_POST['penci_categories'] ) ) {
			$t_id             = $term_id;
			$penci_categories = get_option( "category_$t_id" );
			$cat_keys         = array_keys( $_POST['penci_categories'] );
			foreach ( $cat_keys as $key ) {
				if ( isset( $_POST['penci_categories'][$key] ) ) {
					$penci_categories[$key] = $_POST['penci_categories'][$key];
				}
			}
			//save the option array
			update_option( "category_$t_id", $penci_categories );
		}
	}
}