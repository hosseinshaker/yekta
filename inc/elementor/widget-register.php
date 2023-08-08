<?php
function register_yektaweb_widget( $widgets_manager ) {
	  /*
  * Widgets
  */
	require_once( __DIR__ . '/widgets/slider.php' );
	require_once( __DIR__ . '/widgets/slide-test.php' );
  /*
  * Register
  */

	$widgets_manager->register( new \Yekta_Web_Slider() );
	$widgets_manager->register( new \Elementor_Widget_Slider() );

}
/*
* Widget register
*/
add_action( 'elementor/widgets/register', 'register_yektaweb_widget' );

/*
* Category register
*/
add_action( 'elementor/elements/categories_registered', 'add_elementor_widget_categories' );
function add_elementor_widget_categories( $elements_manager ) {
	$elements_manager->add_category(
		'yektaweb',
		[
			'title' => 'ویجت های اختصاصی قالب یکتا محصول',
			'icon' => 'eicon-favorite',
		]
	);
}