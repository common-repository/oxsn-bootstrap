<?php


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


if ( ! function_exists ( 'oxsn_bootstrap_plugin_nav_item' ) ) {

	add_action('admin_menu', 'oxsn_bootstrap_plugin_nav_item', 99);
	function oxsn_bootstrap_plugin_nav_item() {

		add_submenu_page('oxsn-dashboard', 'OXSN Bootstrap', 'Bootstrap', 'manage_options', 'oxsn-bootstrap', 'oxsn_bootstrap_plugin');

	}

}

if ( !function_exists('oxsn_bootstrap_plugin') ) {

	function oxsn_bootstrap_plugin() {

		if (!current_user_can('manage_options')) {

			wp_die( __('You do not have sufficient permissions to access this page.') );

		}

	?>

		<?php if( isset($_POST[ $hidden_field_name ]) && $_POST[ $hidden_field_name ] == 'Y') : ?>

			<div id="message" class="updated">

				<p><strong><?php _e('Settings saved.') ?></strong></p>

			</div>

		<?php endif; ?>
		
		<div class="wrap oxsn_settings_page">
		
			<h2>OXSN Bootstrap Plugin</h2>

			<div id="poststuff">

				<div class="oxsn_xs_float_left oxsn_xs_width_100pr">

					<div class="oxsn_xs_float_left oxsn_xs_width_100pr oxsn_sm_width_60pr oxsn_xs_padding_right_0px oxsn_sm_padding_right_10px">

						<div class="postbox">

							<h3 class="hndle cursor_initial">Information</h3>

							<div class="inside">

								<p>This plugin helps incorporate bootstrap into your page content. It provides a simple set of shortcodes that you can use anywhere for quick layout implementation.</p>

								<p><strong>Shortcodes</strong></p>

								<p>[oxsn_bootstrap_container_fluid class=""][/oxsn_bootstrap_container_fluid]</p>

								<p>This shortcode creates a container fluid wrap around your content.</p>

								<p>[oxsn_bootstrap_container class=""][/oxsn_bootstrap_container]</p>

								<p>This shortcode creates a container wrap around your content.</p>

								<p>[oxsn_bootstrap_row class=""][/oxsn_bootstrap_row]</p>

								<p>This shortcode creates a row wrap around your content.</p>

								<p>[oxsn_bootstrap_column xs="" sm="" md="" lg="" class=""][/oxsn_bootstrap_column]</p>

								<p>This shortcode creates a column wrap around your content. by placing a number between 1-12 in the xs, sm, md, lg, shortcode options you automatically create the bootstrap columns. Example: xs="3" converts to col-xs-3.</p>

							</div>
							
						</div>

					</div>

					<div class="oxsn_xs_float_left oxsn_xs_width_100pr oxsn_sm_width_40pr oxsn_xs_padding_left_0px oxsn_sm_padding_left_10px">

						<div class="postbox">

							<h3 class="hndle cursor_initial">Custom Project</h3>

							<div class="inside">

								<p>Want us to build you a custom project?</p>

								<p><a href="mailto:brief@oxsn.com?Subject=Custom%20Project%20Request%21&Body=Please%20answer%20the%20following%20questions%20to%20help%20us%20better%20understand%20your%20needs..%0A%0A1.%20What%20is%20the%20name%20of%20your%20company%3F%0A%0A2.%20What%20are%20the%20concepts%20and%20goals%20of%20your%20project%3F%0A%0A3.%20What%20is%20the%20proposed%20budget%20of%20this%20project%3F" class="button button-primary button-large">Email Us</a></p>

							</div>
							
						</div>

						<div class="postbox">

							<h3 class="hndle cursor_initial">Support</h3>

							<div class="inside">

								<p>Need help with this plugin? Visit the Wordpress plugin page for support..</p>

								<p><a href="https://wordpress.org/support/plugin/oxsn-bootstrap" target="_blank" class="button button-primary button-large">Support</a></p>

							</div>
							
						</div>

						<div class="postbox">

							<h3 class="hndle cursor_initial">Credit</h3>

							<div class="inside">

								<p>This plugin wouldn't be possible without the help of..</p>

								<p><a href="http://getbootstrap.com/" target="_blank">Bootstrap</a></p>

								<p>Thank you!</p>

							</div>
							
						</div>

					</div>

				</div>

			</div>

		</div>

	<?php 

	}

}


?>