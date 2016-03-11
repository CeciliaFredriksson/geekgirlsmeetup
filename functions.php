<?php
add_action('after_setup_theme', 'cf_theme_setup');

function cf_theme_setup() {
	load_theme_textdomain('GGM-CeciliaFredriksson', get_template_directory_uri() . '/languages');
	add_theme_support('post-thumbnails');
	add_post_type_support( 'page', 'excerpt' );

	register_nav_menus(array(
		'main-menu' => 'Main Menu',
		'secondary-menu' => 'Secondary menu'
	));
}

add_action('wp_enqueue_scripts', 'cf_load_scripts');

function cf_load_scripts() {
	wp_enqueue_script('jquery', '//code.jquery.com/jquery-1.11.3.min.js', [], '1.11.3', true);
	wp_enqueue_script('scripts', get_template_directory_uri().'/js/script.js', [], '0.0.1', true);
	wp_enqueue_style('foundation', get_template_directory_uri().'/css/foundation.min.css');
}

// GGMs logo in wordpress-dashboard-header
function custom_admin_logo() {
	echo '
        <style type="text/css">
            #wpadminbar #wp-admin-bar-wp-logo {
				background-image: url(' . get_bloginfo('stylesheet_directory') . '/img/favicon.png) !important;
				background-size: cover;
			    width: 20px;
				height: 20px;
				top: 7px;
				left: 5px;
			}
			
			#wpadminbar #wp-admin-bar-wp-logo>.ab-item .ab-icon:before {
				content:none;
				display:none
			}
			
        </style>
    ';
}
add_action('admin_head', 'custom_admin_logo');

require 'library/cpt-team.php';
