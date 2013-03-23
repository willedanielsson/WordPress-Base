<?php

// All settings page, only for admins
function all_settings_link() {
	add_options_page(__('All Settings'), __('All Settings'), 'administrator', 'options.php');
}
add_action('admin_menu', 'all_settings_link');


// Remove update notification for everyone, except admins
global $user_login;
get_currentuserinfo();
if(!current_user_can('update_plugins')) {
	add_action( 'init', create_function( '$a', "remove_action( 'init', 'wp_version_check' );" ), 2 );
	add_filter( 'pre_option_update_core', create_function( '$a', "return null;" ) );
}


// How long is an excerpt?
function new_excerpt_length($length) { 
return 100;
}
add_filter('excerpt_length', 'new_excerpt_length');
