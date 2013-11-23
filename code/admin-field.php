<?php // campo no admin
if ( is_admin() ) {
    add_action( 'admin_init', array( $this, 'admin_init' ) );
}
function admin_init() {
    add_settings_field( self::$option_name, __( 'Post Home Page', 'better_front_page_ui' ), array( $this, 'output_setting_form' ), 'permalink', 'optional' );
    global $pagenow;
    if ( $pagenow == 'options-permalink.php' ) {
        if ( isset( $_POST[self::$option_name] ) ) {
            $value = $this->sanitize_option( $_POST[self::$option_name] );
            update_option( self::$option_name, $value );
        } else {
            delete_option( self::$option_name );
        }
    }
}
function output_setting_form() {
    ?><!-- html do campo aqui --><?php
}
