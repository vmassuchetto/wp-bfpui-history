<?php // estrutura basica
// plugins/better-front-page-ui/better-front-page-ui.php
// cabecalho
class Better_Front_Page_UI {
    function Better_Front_Page_UI() {
        /* acoes e filtros de inicializacao */
    }
    function nome_do_gancho() {
        /* codigo */
    }
}
function better_front_page_ui_init() {
    new Better_Front_Page_UI();
}
add_action( 'plugins_loaded', 'better_front_page_ui_init' );
