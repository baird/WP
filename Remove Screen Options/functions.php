//remove screen options for all but admin
 function remove_screen_options_tab() {
 	return current_user_can( 'manage_options' );
 }
 add_filter('screen_options_show_screen', 'remove_screen_options_tab');