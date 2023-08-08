<?php
class Yekta_Web_Comments extends \Elementor\Widget_Base {

	public function get_name() {
		return 'Yekta_Web_Comments';
	}

	public function get_title() {
		return esc_html__( 'کامنت های مشتریان', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-code';
	}

	public function get_categories() {
		return [ 'yektaweb' ];
	}

	public function get_keywords() {
		return [ 'کامنت', 'comment' ];
	}

	protected function register_controls() {

		// Content Tab Start

		$this->start_controls_section(
			'section_title',
			[
				'label' => esc_html__( 'اسلایدر کامنت', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);


		$this->add_control(
			'slider_comment_yektaweb',
			[
				'label' => esc_html__( 'اسلاید کامنت', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'name_comment_yektaweb',
						'label' => esc_html__( 'Title', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( 'List Title' , 'textdomain' ),
						'label_block' => true,
					],
					[
						'name' => 'data_comment_yektaweb',
						'label' => esc_html__( 'Content', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::WYSIWYG,
						'default' => esc_html__( 'List Content' , 'textdomain' ),
						'show_label' => false,
					],
					[	'name' => 'name_comment_yektaweb',
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

		$this->add_control(
			'title_color',
			[
				'label' => esc_html__( 'Text Color', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .hello-world' => 'color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_section();

		// Style Tab End

	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		?>

       <!--Slider-->
       <section class="container">
        <div class="row">

            <div class="col-lg-12 p-0 mb-3">
                <div id="owl-mainslider" class="owl-carousel owl-theme text-center">
<?php
if ( $settings['slideryektaweb'] ) {
	foreach (  $settings['slideryektaweb'] as $item ) {
		//echo $item['link_slider'];
		$image_slider=$item['image_slider_yektaweb']['url'];
		echo '<div class="item"><a href="'.$item['link_slider'].'"> <img  class="img-fluid radius-slide" src="'.$image_slider.'"/></a></div>';
	}
}

?>
                </div>
            </div>
        </div>
    </section>
       <!--End--Slider-->


		<?php
	}

	protected function content_template() {
		?>
		<# if ( settings.slideryektaweb.length ) { #>
			<dl>
			<# _.each( settings.slideryektaweb, function( item ) { #>
				<!--<dt class="elementor-repeater-item-{{ item._id }}">{{{ item.link_slider }}}</dt>-->
				<dd>
					<img src="{{{ item.image_slider_yektaweb.url }}}">
				</dd>
			<# }); #>
			</dl>
		<# } #>
		<?php
	}

}