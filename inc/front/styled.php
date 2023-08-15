<?PHP
function register_styled_yektaweb(){
    wp_enqueue_style('owl.carousel.min',get_template_directory_uri().'/Css/owl.carousel.min.css');
wp_enqueue_style('grid-gallery.min',get_template_directory_uri().'/Css/grid-gallery.min.css');
wp_enqueue_style('main',get_template_directory_uri().'/Css/Main.css');
wp_enqueue_style('menu',get_template_directory_uri().'/Css/Menu.css');
wp_enqueue_style('style',get_template_directory_uri().'/Css/style.css');
wp_enqueue_style('style2',get_template_directory_uri().'/style.css');
wp_enqueue_style('slick',get_template_directory_uri().'/Css/slick.css');
wp_enqueue_style('owl.theme.min',get_template_directory_uri().'/Css/owl.theme.min.css');

}
add_action( 'wp_enqueue_scripts', 'register_styled_yektaweb' );

?>