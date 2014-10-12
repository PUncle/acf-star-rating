<?php

/*
Plugin Name: Advanced Custom Fields: Star Rating
Plugin URI: https://github.com/kevdotbadger/acf-star-rating
Description: A simple star rating field for ACF.
Version: 0.5.0
Author: Kevin Ruscoe
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/




// 1. set text domain
// Reference: https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
load_plugin_textdomain( 'acf-star_rating', false, dirname( plugin_basename(__FILE__) ) . '/lang/' ); 




// 2. Include field type for ACF5
// $version = 5 and can be ignored until ACF6 exists
function include_field_types_star_rating( $version ) {
	
	include_once('acf-star_rating-v5.php');
	
}

add_action('acf/include_field_types', 'include_field_types_star_rating');	




// 3. Include field type for ACF4
function register_fields_star_rating() {
	
	include_once('acf-star_rating-v4.php');
	
}

add_action('acf/register_fields', 'register_fields_star_rating');	



	
?>