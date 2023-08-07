<?php
class Profile_Man_Skill extends \Elementor\Widget_Base {

	public function get_name() {
		return 'Profile_Man_Skill';
	}

	public function get_title() {
		return esc_html__( 'نوار پیشرفت', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-skill-bar';
	}

	public function get_categories() {
		return [ 'yektaweb' ];
	}

	public function get_keywords() {
		return [ 'skill', 'نوار پیشرفت' ];
	}

	protected function register_controls() {

		// Content Tab Start

		$this->start_controls_section(
			'section_title',
			[
				'label' => esc_html__( 'عنوان', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

//progress Title
		$this->add_control(
			'progress_title',
			[
				'label' => esc_html__( 'عنوان', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'متن خود را وارد کنید', 'textdomain' ),
			]
		);
		//progress width
			$this->add_control(
			'progress_width',
			[
				'label' => esc_html__( 'درصد', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 0,
				'max' => 100,
				'step' => 1,
				'default' => 65,
			]
		);
		


	$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'content_typography',
				'selector' => '{{WRAPPER}} .hello-world',
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
			'progress_text_color',
			[
				'label' => esc_html__( 'رنگ متن', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .text-progress' => 'color: {{VALUE}};',
				],
			]
		);		
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background',
				'types' => [ 'classic' ],
				'selector' => '{{WRAPPER}} .progress-color-background',
			]
		);

				$this->add_control(
			'progress_color',
			[
				'label' => esc_html__( 'Text Color', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .your-class' => 'color: {{VALUE}}',
				],
			]
		);
		
				$this->end_controls_section();

		// Style Tab End

	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		?>
<p class="text-progress"><?php  echo $settings['progress_title']; ?></p>
  <div class="progress progress-color-background">
    <div class="progress-bar progress-bar-striped progress-bar-animated progress-colora" style="width:<?php  echo $settings['progress_width']; ?>%;background-color:<?php  echo $settings['progress_color']; ?>;"></div>
  </div>
		<?php
	}
}