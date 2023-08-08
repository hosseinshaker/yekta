<?php
function register_scripted_yektaweb(){
wp_enqueue_script('bootstrap',get_template_directory_uri().'/Js/bootstrap.min.js',array(),'1.0',true);
wp_enqueue_script('custom',get_template_directory_uri().'/Js/custom.js',array(),'1.0',true);
wp_enqueue_script('grid-gallery.min',get_template_directory_uri().'/Js/grid-gallery.min.js',array(),'1.0',true);
wp_enqueue_script('jquery.min',get_template_directory_uri().'/Js/jquery.min.js',array(),'1.0',false);
wp_enqueue_script('my-script',get_template_directory_uri().'/Js/my-script.js',array(),'1.0',true);
wp_enqueue_script('owl.carousel',get_template_directory_uri().'/Js/owl.carousel.js',array(),'1.0',true);
}


add_action( 'wp_enqueue_scripts', 'register_scripted_yektaweb' );
?>