<?php
/*
Plugin Name: Gravatar Favicon
Description: This plugin allows you to generate a gravatar favicon for your blog, feed logo and admin logo included Apple touch icon. <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=mypatricks@gmail.com&item_name=Donate%20to%20Patrick%20Chia&item_number=1242543308&amount=15.00&no_shipping=0&no_note=1&tax=0&currency_code=USD&bn=PP%2dDonationsBF&charset=UTF%2d8&return=http://patrick.bloggles.info/">Get a coffee to Patrick</a> (W6A4N4-L26P6-WSH)
Version: 2.8
Author: Patrick Chia
Author URI: http://patrickchia.com/
Plugin URI: http://patrick.bloggles.info/plugins/
Tags: wpmu, wordpressmu, images, avatar, avatars, gravatar, personalization, avatar, identicon, OpenAvatar, mybloglog, monsterid, Favatar, favicon, feed,
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=mypatricks@gmail.com&item_name=Donate%20to%20Patrick%20Chia&item_number=1242543308&amount=15.00&no_shipping=0&no_note=1&tax=0&currency_code=USD&bn=PP%2dDonationsBF&charset=UTF%2d8&return=http://patrick.bloggles.info/
*/

/* Get valueble MU Hosting
 * http://mu.bloggles.info/wordpress-hosting/
 * Love you forever, Esther
 */

if ( !function_exists( 'get_favicon' ) ) :
function get_favicon( $id_or_email, $size = '96', $default = '', $alt = false){
	$avatar = get_avatar($id_or_email, $size, $default, $alt);

	$openPos = strpos($avatar, 'src=\'');
	$closePos = strpos(substr($avatar, ($openPos+5)), '\'');
	$newAvatar = substr($avatar, ($openPos+5), ($closePos-($openPos+5)) );
	
	return $newAvatar;
}
endif;

function blog_favicon() {
	$apple_icon = get_favicon( get_bloginfo('admin_email'), 60 );
	$favicon_icon = get_favicon( get_bloginfo('admin_email'), 18 );

	if ( get_option('show_avatars') ) {
		echo "<link rel=\"apple-touch-icon\" href=\"$apple_icon\" />\n";
		echo "<link rel=\"shortcut icon\" type=\"image/png\" href=\"$favicon_icon\" />\n";
	}
}

function admin_logo() {
	$admin_logo = get_favicon( get_bloginfo('admin_email'), 31 );

	if ( get_option('show_avatars') ) {
	?>
	<style type="text/css">
		#header-logo{background: transparent url( <?php echo $admin_logo; ?> ) no-repeat scroll center center;
		-moz-border-radius: 5px;
		-webkit-border-bottom-left-radius: 5px;	-webkit-border-bottom-right-radius: 5px; -webkit-border-top-left-radius: 5px; -webkit-border-top-right-radius: 5px;
		-khtml-border-bottom-left-radius: 5px;-khtml-border-bottom-right-radius: 5px;-khtml-border-top-left-radius: 5px;-khtml-border-top-right-radius: 5px;
		border-bottom-left-radius: 5px;	border-bottom-right-radius: 5px;border-bottom-top-radius: 5px;border-bottom-top-radius: 5px;}
		</style>
	<?php
	}
}

function add_feed_logo() {
	$feed_logo = get_favicon( get_bloginfo('admin_email'), 48 );
	echo "
   <image>
    <title>". get_bloginfo('name')."</title>
    <url>". $feed_logo ."</url>
    <link>". get_bloginfo('siteurl') ."</link>
   </image>\n";
}

add_action( 'wp_head', "blog_favicon" );
add_action( 'admin_head', 'blog_favicon' );
add_action( 'login_head', 'blog_favicon' );
add_action( 'admin_head', 'admin_logo' );
add_action('rss_head', add_feed_logo );
add_action('rss2_head', add_feed_logo );

?>