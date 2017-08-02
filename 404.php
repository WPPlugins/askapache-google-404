<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 *
 * created by AskApache.com for http://www.askapache.com/seo/404-google-wordpress-plugin.html
 */

ob_start();

get_header();

if ( function_exists( 'aa_google_404' ) ) {
	aa_google_404();
}

get_sidebar();


get_footer();


exit;

exit();


// EOF
