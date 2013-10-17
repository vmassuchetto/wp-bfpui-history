<?php //rewrite rule
add_action( 'rewrite_rules_array', array( $this, 'rewrite_rules_array' ), 9999 );
function rewrite_rules_array( $rules ) {
    $option = $this->get_option();
    $new_rules = array(
        $option . '/?$' => 'index.php?force_home=1',
        $option . '/page/?([0-9]{1,})/?$' => 'index.php?force_home=1&paged=$matches[1]',
    );
    return array_merge( $new_rules, $rules );
}
add_filter( 'query_vars', array( $this, 'query_vars' ) );
function query_vars( $vars ) {
    array_push( $vars, 'force_home' );
    return $vars;
}
