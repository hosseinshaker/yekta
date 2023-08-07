<?php
function register_yektaweb_widget( $widgets_manager ) {
	  /*
  * Widgets
  */
	require_once( __DIR__ . '/widgets/skill.php' );
  /*
  * Register
  */

	$widgets_manager->register( new \Profile_Man_Skill() );
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