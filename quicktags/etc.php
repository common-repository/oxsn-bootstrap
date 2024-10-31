<?php


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


if ( ! function_exists ( 'oxsn_bootstrap_quicktags' ) ) {

	add_action( 'admin_print_footer_scripts', 'oxsn_bootstrap_quicktags' );
	function oxsn_bootstrap_quicktags() {

		if ( wp_script_is( 'quicktags' ) ) {

		?>

			<script type="text/javascript">
				QTags.addButton( 'oxsn_bootstrap_container_fluid_quicktag', '[oxsn_bootstrap_container_fluid]', '[oxsn_bootstrap_container_fluid class=""]', '[/oxsn_bootstrap_container_fluid]', 'oxsn_bootstrap_container_fluid', 'Container Fluid', 201 );
				QTags.addButton( 'oxsn_bootstrap_container_quicktag', '[oxsn_bootstrap_container]', '[oxsn_bootstrap_container class=""]', '[/oxsn_bootstrap_container]', 'oxsn_bootstrap_container', 'Container', 202 );
				QTags.addButton( 'oxsn_bootstrap_row_quicktag', '[oxsn_bootstrap_row]', '[oxsn_bootstrap_row class=""]', '[/oxsn_bootstrap_row]', 'row', 'Row', 203 );
				QTags.addButton( 'oxsn_bootstrap_column_quicktag', '[oxsn_bootstrap_column]', '[oxsn_bootstrap_column xs="" sm="" md="" lg="" class=""]', '[/oxsn_bootstrap_column]', 'oxsn_bootstrap_column', 'Column', 204 );
			</script>

		<?php

		}

	}

}


?>