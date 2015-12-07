<?php
/**
 * Administration Functions
 *
 * This file is deprecated, use 'wp-admin/includes/admin.php' instead.
 *
 * @deprecated 2.5
 * @package WordPress
 * @subpackage Administration
 */

_deprecated_file( basename(__FILE__), '2.5', 'wp-admin/includes/admin.php' );

/** WordPress Administration API: Includes all Administration functions. */
require_once(ABSPATH . 'wp-admin/includes/admin.php');

/** Пункт 2. */
add_action( 'admin_menu', 'my_plugin_menu' );

/** Пункт 1. */
function my_plugin_menu() {
	add_menu_page( 'My Plugin Options', 'My Plugin', 'manage_options', 'my-unique-identifier', 'my_plugin_options' );
}

/** Пункт 3. */
function my_plugin_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	echo '</pre>
<div class="wrap">';
 echo '
Here is where the form would go if I actually had options.

';
 echo '</div>
<pre>
';
}