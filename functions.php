/**** Remove comments from for all but admin dash ****/

function remove_dash_comments() {
	if ( !current_user_can('manage_options') ) {
		remove_menu_page('edit-comments.php');
	}  
}
add_action( 'admin_menu', 'remove_dash_comments' );

/**** Remove post type menu item for all but admin dash ****/

function remove_dash_menu_item() {
	if ( !current_user_can('manage_options') ) {
		remove_menu_page('edit.php?post_type=menu_item');
	}  
}
add_action( 'admin_menu', 'remove_dash_menu_item' );
