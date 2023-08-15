<?php
function yekta_prodocut_setup_theme(){
    add_theme_support( 'post-thumbnails' );//register image support
    add_theme_support( 'woocommerce' );//register woocommerce support
    add_theme_support( 'wc-product-gallery-zoom' );//zoom prodouct
    add_theme_support( 'wc-product-gallery-lightbox' );//lightbox register
    add_theme_support( 'wc-product-gallery-slider' );//slider gallery products
}
add_action('after_setup_theme','yekta_prodocut_setup_theme');

get_template_part('inc/front/styled');//styled front load
get_template_part('inc/front/scripted');//scripts front load
get_template_part('inc/options');//scripts front load
get_template_part('inc/elementor/widget-register');//elementor register widgets
get_template_part('rudix');//theme options
get_template_part('inc/menu');//Register menu
?>