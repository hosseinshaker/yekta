<?php
class Yekta_Web_box_category extends \Elementor\Widget_Base {

	public function get_name() {
		return 'Yekta_Web_box_category';
	}

	public function get_title() {
		return esc_html__( 'انتخاب دسته/جعبه عکس', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-code';
	}

	public function get_categories() {
		return [ 'yektaweb' ];
	}

	public function get_keywords() {
		return [ 'جعبه', 'دسته' ];
	}

	protected function register_controls() {

		// Content Tab Start

		$this->start_controls_section(
			'section_title',
			[
				'label' => esc_html__( 'انتخاب دسته/ جعبه یکتاوب', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'box_category_title',
			[
				'label' => esc_html__( 'عنوان', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'عنوان پیشفرض', 'textdomain' ),
				'placeholder' => esc_html__( 'عنوان خود را اینجا وارد کنید', 'textdomain' ),
			]
		);
        $this->add_control(
			'box_category_url',
			[
				'label' => esc_html__( 'لینک', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::URL,
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
					// 'custom_attributes' => '',
				],
				'label_block' => true,
			]
		);
        $this->add_control(
			'box_category_image',
			[
				'label' => esc_html__( 'انتخاب عکس', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
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

<h2 class="title">
			<?php echo $settings['widget_title']; ?>
		</h2>

		<?php
	}

}