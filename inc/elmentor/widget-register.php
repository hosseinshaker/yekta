<?php
function register_yektaweb_widget( $widgets_manager ) {
    $dir_elementor=get_template_directory_uri().'/inc/elementor/';

    require_once( $dir_elementor . '/widgets/slider.php' );
    $widgets_manager->register( new \Yekta_Web_Slider() );
    
    }
    add_action( 'elementor/widgets/register', 'register_yektaweb_widget' );
    ?>