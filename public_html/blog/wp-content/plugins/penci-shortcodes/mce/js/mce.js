/* ----------------------------------------------------- */
/* This file for register button insert shortcode to TinyMCE
 /* ----------------------------------------------------- */
(function () {
	tinymce.create( 'tinymce.plugins.penci_pre_shortcodes_button', {
		init         : function ( ed, url ) {
			title = 'penci_pre_shortcodes_button';
			tinymce.plugins.penci_pre_shortcodes_button.theurl = url;
			ed.addButton( 'penci_pre_shortcodes_button', {
				title: 'Select Shortcode',
				icon : 'wp_code',
				type : 'menubutton',
				/* List Button */
				menu : [

					/* --- Blockquote --- */
					{
						text   : 'Blockquote',
						value  : 'Blockquote',
						onclick: function () {
							ed.windowManager.open( {
								title   : 'Blockquote',
								body    : [
									{ type    : 'listbox', name    : 'align', label   : 'Quote Align', 'values': [{ text: 'None', value: 'none' }, { text: 'Aligh Left', value: 'left' }, { text: 'Aligh Right', value: 'right' }] },
									{ type: 'textbox', name: 'author', label: 'Quote Author', value: '' },
								],
								onsubmit: function ( e ) {
									content = ed.selection.getContent();
									ed.insertContent( '[blockquote align="' + e.data.align + '" author="' + e.data.author + '"]' + content + '[/blockquote]' );
								}
							} );
						}
					},

					/* -----------	Columns Simple	-----------	*/
					{
						text   : 'Columns',
						value  : 'Columns',
						onclick: function () {
							ed.windowManager.open( {
								title   : 'Column',
								body    : [
									{ type    : 'listbox', name    : 'size', label   : 'Select type of column', 'values': [{ text: '1/2', value: '1/2' }, { text: '1/3', value: '1/3' }, { text: '2/3', value: '2/3' }, { text: '1/4', value: '1/4' }, { text: '3/4', value: '3/4' },] },
									{ type: 'checkbox', name: 'last', label: 'Last column?', checked: false, }
								],
								onsubmit: function ( e ) {
									content = ed.selection.getContent();
									ed.insertContent( '[columns size="' + e.data.size + '" last="' + e.data.last + '"]' + content + '[/columns]' );
								}
							} );
						}

					},
					
					/* --- Portfolio--- */
					{
						text   : 'Portfolio',
						value  : 'Portfolio',
						onclick: function () {
							ed.windowManager.open( {
								title   : 'Portfolio',
								body    : [
									{ type    : 'listbox', name    : 'style', label   : 'Portfolio Style', 'values': [{ text: 'Masonry', value: 'masonry' }, { text: 'Grid', value: 'grid' }] },
									{ type : 'textbox', name : 'number', label: 'Numbers Post to Show? If you want display all, fill -1', value: '-1' },
									{ type    : 'listbox', name    : 'filter', label   : 'Display Filter?', 'values': [{ text: 'Yes', value: 'true' }, { text: 'No', value: 'false' }] },
									{ type    : 'listbox', name    : 'column', label   : 'Number Columns?', 'values': [{ text: '3 Columns', value: '3' }, { text: '2 Columns', value: '2' }] },
									{ type: 'textbox', name: 'all_text', label: 'All text', value: 'All' },
								],
								onsubmit: function ( e ) {
									ed.insertContent( '[portfolio style="' + e.data.style + '" number="' + e.data.number + '" filter="' + e.data.filter + '" column="' + e.data.column + '" all_text="' + e.data.all_text + '" /]' );
								}
							} );
						}
					},

				]
			} );

		},
		createControl: function ( n, cm ) {
			return null;
		}
	} );

	tinymce.PluginManager.add( 'penci_pre_shortcodes_button', tinymce.plugins.penci_pre_shortcodes_button );

})();