<?php // funcoes auxiliares para a URL escolhida
function get_the_posts_home_url() {
    if ( class_exists( 'Better_Front_Page_UI' ) )
        return home_url( get_option( Better_Front_Page_UI::$option_name ) );
    return false;
}
function the_posts_home_url() {
    if ( $output = get_the_posts_home_url() )
        echo $output;
}
