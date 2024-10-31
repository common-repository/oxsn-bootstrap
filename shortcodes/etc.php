<?php


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


//[oxsn_bootstrap_container_fluid class=""]
if ( ! function_exists ( 'oxsn_bootstrap_container_fluid_shortcode' ) ) {

	add_shortcode('oxsn_bootstrap_container_fluid', 'oxsn_bootstrap_container_fluid_shortcode');
	function oxsn_bootstrap_container_fluid_shortcode( $atts, $content = null ) {
		$content = shortcode_unautop(trim($content));
		$a = shortcode_atts( array(
			'class' => '',
		), $atts );

		$oxsn_bootstrap_container_fluid_class = esc_attr($a['class']);

		return '<div class="oxsn_bootstrap_container_fluid container-fluid ' . $oxsn_bootstrap_container_fluid_class . '">' . do_shortcode($content) . '</div>';

	}

}

//[oxsn_bootstrap_container class=""]
if ( ! function_exists ( 'oxsn_bootstrap_container_shortcode' ) ) {

	add_shortcode('oxsn_bootstrap_container', 'oxsn_bootstrap_container_shortcode');
	function oxsn_bootstrap_container_shortcode( $atts, $content = null ) {
		$content = shortcode_unautop(trim($content));
		$a = shortcode_atts( array(
			'class' => '',
		), $atts );

		$oxsn_bootstrap_container_class = esc_attr($a['class']);

		return '<div class="oxsn_bootstrap_container container ' . $oxsn_bootstrap_container_class . '">' . do_shortcode($content) . '</div>';

	}

}

//[oxsn_bootstrap_row class=""]
if ( ! function_exists ( 'oxsn_bootstrap_row_shortcode' ) ) {

	add_shortcode('oxsn_bootstrap_row', 'oxsn_bootstrap_row_shortcode');
	function oxsn_bootstrap_row_shortcode( $atts, $content = null ) {
		$content = shortcode_unautop(trim($content));
		$a = shortcode_atts( array(
			'class' => '',
		), $atts );

		$oxsn_bootstrap_row_class = esc_attr($a['class']);

		return '<div class="oxsn_bootstrap_row row ' . $oxsn_bootstrap_row_class . '">' . do_shortcode($content) . '</div>';

	}

}

//[oxsn_bootstrap_column xs="" sm="" md="" lg="" class=""]
if ( ! function_exists ( 'oxsn_bootstrap_column_shortcode' ) ) {

	add_shortcode('oxsn_bootstrap_column', 'oxsn_bootstrap_column_shortcode');
	function oxsn_bootstrap_column_shortcode( $atts, $content = null ) {
		$content = shortcode_unautop(trim($content));
		$a = shortcode_atts( array(
			'class' => '',
			'xs' => '',
			'sm' => '',
			'md' => '',
			'lg' => '',
		), $atts );

		$oxsn_bootstrap_column_class = esc_attr($a['class']);

		$oxsn_bootstrap_size_class = '';

		if (esc_attr($a['xs'])) {
			$oxsn_bootstrap_size_class .= 'col-xs-' . esc_attr($a['xs']) . ' ';
		}

		if (esc_attr($a['sm'])) {
			$oxsn_bootstrap_size_class .= 'col-sm-' . esc_attr($a['sm']) . ' ';
		}

		if (esc_attr($a['md'])) {
			$oxsn_bootstrap_size_class .= 'col-md-' . esc_attr($a['md']) . ' ';
		}

		if (esc_attr($a['lg'])) {
			$oxsn_bootstrap_size_class .= 'col-lg-' . esc_attr($a['lg']) . ' ';
		}

		return '<div class="oxsn_bootstrap_column ' . $oxsn_bootstrap_size_class . ' ' . $oxsn_bootstrap_column_class . '">' . do_shortcode($content) . '</div>';
		
	}

}


?>