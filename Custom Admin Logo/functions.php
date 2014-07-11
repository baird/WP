/* Custom Logo */

function change_my_wp_login_image() {
echo "
<style>
body.login #login h1 a {
background: url('".get_bloginfo('template_url')."/images/logo.jpg') 8px 0 no-repeat transparent;
height:42px;
width:230px; }
</style>
";
}
add_action("login_head", "change_my_wp_login_image");

/* URL Title */

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Whatever here';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );