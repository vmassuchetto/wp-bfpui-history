<?php // suprime a funcionalidade do show_on_front
add_filter( 'option_show_on_front', array( $this, 'filter_show_on_front' ) );
function filter_show_on_front($value) {
    return ( is_home() && get_query_var( 'force_home' ) == 1 ) ? 'force' : 'value';
}
