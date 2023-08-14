<?php
add_theme_support( 'post-thumbnails' );//register image support
get_template_part('inc/front/styled');//styled front load
get_template_part('inc/front/scripted');//scripts front load
get_template_part('inc/options');//scripts front load
get_template_part('inc/elementor/widget-register');//elementor register widgets
get_template_part('rudix');//theme options
get_template_part('inc/menu');//Register menu
?>