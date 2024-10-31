<?php


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


if ( ! function_exists ( 'oxsn_bootstrap_inc_css' ) ) {

	add_action( 'wp_enqueue_scripts', 'oxsn_bootstrap_inc_css' );
	function oxsn_bootstrap_inc_css() {

		wp_enqueue_style( 'oxsn_bootstrap_bootstrap_min_css', oxsn_bootstrap_plugin_dir_url . 'inc/css/bootstrap.min.css', array(), '3.3.6', 'all' ); 

	}

}

if ( ! function_exists ( 'oxsn_bootstrap_inc_js' ) ) {

	add_action( 'wp_enqueue_scripts', 'oxsn_bootstrap_inc_js' );
	function oxsn_bootstrap_inc_js() {

		wp_enqueue_script( 'oxsn_bootstrap_bootstrap_min_js', oxsn_bootstrap_plugin_dir_url . 'inc/js/bootstrap.min.js', array('jquery'), '3.3.6', true );

	}

}


?>