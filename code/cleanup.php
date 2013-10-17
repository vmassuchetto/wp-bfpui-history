<?php // fazendo as coisas com asseio
register_activation_hook( __FILE__, array( 'Better_Front_Page_UI', 'activate' ) );
function activate() { flush_rewrite_rules(); }
register_deactivation_hook( __FILE__, array( 'Better_Front_Page_UI', 'deactivate' ) );
function deactivate() { flush_rewrite_rules(); }
register_uninstall_hook( __FILE__, array( 'Better_Front_Page_UI', 'uninstall' ) );
function uninstall() {
    delete_option( self::$option_name );
    flush_rewrite_rules();
}
