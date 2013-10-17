<?php // campo no admin
if ( is_admin() ) {
    add_action( 'admin_init', array( $this, 'admin_init' ) );
}
function admin_init() {
    add_settings_field( self::$option_name, __( 'Post Home Page', 'better_front_page_ui' ), array( $this, 'output_setting_form' ), 'permalink', 'optional' );
}
function output_setting_form() {
    ?>
    <!-- html do campo aqui -->
    <?php
}
