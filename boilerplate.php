<?php

/**
	*
	* @package BoilerplatePlugin
	*
	**/
	
/**
 *
 * Plugin Name: Boilerplate Plugin
 * Plugin URI: 
 * Description: Boilerplate code for a WordPress Plugin.
 * Author: José Bernal
 * Author URI: https://clickpdx.com
 * Licence: GPLv2 or later
 * Text Domain: boilerplate-plugin
 */
 
 
/**
 * See also:
 * https://stackoverflow.com/questions/3760222/how-to-include-css-and-jquery-in-my-wordpress-plugin
 */
function boilerplateScripts(){
	
	/*
	wp_register_script(
		"product-details",
		plugin_dir_url(__FILE__)."assets/js/product-details.js",
		array("jquery"),
		"0.1",
		true // include in footer
	);
	*/
	
	// Example of registering a script residing on 
	//  a remote server.
	wp_register_script(
		"product-details",
		"https://trust.ocdla.org/content/themes/highscope/js/product-details.js",
		array("jquery"),
		"0.1",
		true // include in footer
	);	
	

	wp_enqueue_script("product-details"); 
}



function boilerplateStyles() {

	wp_register_style( "hs-overrides", "https://trust.ocdla.org/content/themes/highscope/css/overrides.css" );
	
	wp_enqueue_style("hs-overrides"); 

}

add_action("init","boilerplateScripts");

// For more information, see:
// https://wordpress.stackexchange.com/questions/51234/how-do-i-queue-my-child-stylesheet-s-after-every-parent-stylesheet-statement
add_action("wp_enqueue_scripts", "boilerplateStyles", 99 );


