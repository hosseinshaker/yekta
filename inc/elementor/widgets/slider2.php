<?php
class Yekta_Web_Slider2 extends \Elementor\Widget_Base {

	public function get_name() {
		return 'Yekta_Web_Slider2';
	}

	public function get_title() {
		return esc_html__( '2 اسلایدر یکتاوب', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-code';
	}

	public function get_categories() {
		return [ 'yektaweb' ];
	}

	public function get_keywords() {
		return [ 'اسلایدر', 'slider' ];
	}

	protected function register_controls() {

		// Content Tab Start

		$this->start_controls_section(
			'section_title',
			[
				'label' => esc_html__( 'اسلایدر یکتاوب2', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);


		$this->add_control(
			'slideryektaweb2',
			[
				'label' => esc_html__( 'اسلایدر یکتاوب2', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'link_slider2',
						'label' => esc_html__( 'لینک اسلاید', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'label_block' => true,
					],
					[	'name' => 'image_slider_yektaweb2',
						'label' => esc_html__( 'انتخاب عکس اسلاید', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::MEDIA,
						'default' => [
							'url' => \Elementor\Utils::get_placeholder_image_src(),
						],
					],
				],

			]
		);
		$this->end_controls_section();

		// Content Tab End


		// Style Tab Start

		$this->start_controls_section(
			'section_title_style',
			[
				'label' => esc_html__( 'Title', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->end_controls_section();

		// Style Tab End

	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		?>
        <nav class="row">
        <nav class="container">
       <!--Slider-->
       <div class="slider-yektaweb">
<?php
if ( $settings['slideryektaweb2'] ) {
	foreach (  $settings['slideryektaweb2'] as $item ) {
		//echo $item['link_slider'];
		$image_slider=$item['image_slider_yektaweb2']['url'];

        echo '<div><img src="'.$image_slider.'" alt="تصویر ۱"></div>';

	}
}

?>
                </div>
<nav>
    
</nav>>
       <!--End--Slider-->


		<?php
	}

	protected function content_template() {
		?>
 <section class="container">
        <div class="row">

            <div class="col-lg-12 p-0 mb-3">
                <div id="owl-mainslider" class="owl-carousel owl-theme text-center">
<# if ( settings.slideryektaweb.length ) { #>
      
        <# _.each( settings.slideryektaweb, function( item ) { #>
			<img src="{{{ item.image_slider_yektaweb.url }}}">
        <# }); #>

<# } #>

</div>
            </div>
        </div>
    </section>
		<?php
	}

}