/**** Custom Logo ****/

function custom_admin_logo() {
echo "
<style>
body.login #login h1 a {
background: url('".get_stylesheet_directory_uri()."/img/admin_logo.png') 8px 0 no-repeat transparent;
height:61px;
width:320px; }
</style>
";
}
add_action("login_head", "custom_admin_logo");

/**** Custom Logo URL ****/

function custom_admin_logo_url() {
    return 'VARIABLE_2';
}
add_filter( 'login_headerurl', 'custom_admin_logo_url' );

/**** Custom Logo URL Title ****/

function custom_admin_logo_url_title() {
    return 'Need Support?';
}
add_action("login_headertitle", "custom_admin_logo_url_title");
