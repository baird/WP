//remove update nag for all but admin
 function remove_wp_update_notice() {
	if ( !current_user_can('manage_options') ) {
	  remove_action( 'admin_notices', 'update_nag', 3);
	  }
}
add_action('admin_init', 'remove_wp_update_notice');