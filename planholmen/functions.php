<?php

function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );

function planholmen_single_title() {
    the_title( '<h1 class="product_title entry-title">', '</h1>' );
}

add_action( 'woocommerce_single_product_summary', 'planholmen_single_title', 5 );

function set_wc_column_count() {
    wc_set_loop_prop('columns', 3);
}

add_action( 'woocommerce_loaded', 'set_wc_column_count');
