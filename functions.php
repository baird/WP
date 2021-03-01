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

/**** debug menu keys ****/

if (!function_exists('debug_menu_keys')):
function debug_menu_keys() {
if ( !is_admin())
        return;
    global $submenu, $menu, $pagenow;
    if ( current_user_can('manage_options') ) {
        if( $pagenow == 'index.php' ) {
            echo '<pre>'; print_r( $menu ); echo '</pre>';
            echo '<pre>'; print_r( $submenu ); echo '</pre>';
        }
    }
}
add_action( 'admin_notices', 'debug_menu_keys' );
endif;
