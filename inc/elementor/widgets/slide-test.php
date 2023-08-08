<?php
class Elementor_Widget_Slider extends \Elementor\Widget_Base {

	public function get_name() {
		return 'widget-slider-owl';
	}

	public function get_title() {
		return 'اسلایدر';
	}

	public function get_icon() {
		return 'eicon-slider-full-screen';
	}

	public function get_categories() {
		return [ 'basic' ];
	}

	public function get_keywords() {
        return [ 'gemplay' ];
	}

	protected function register_controls(){
		/*
		* Slides
		*/
		$this->start_controls_section(
			'slides_section',
			[
				'label'	=>	'اسلاید ها',
				'tab'		=> \Elementor\Controls_Manager::TAB_CONTENT
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'slide_title',
			[
				'label' => 'عنوان',
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'slide_subtitle',
			[
				'label' => 'زیرعنوان',
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'slide_url',
			[
				'label' => 'لینک',
				'type' => \Elementor\Controls_Manager::URL,
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'slide_image',
			[
				'label' => 'تصویر',
				'type' => \Elementor\Controls_Manager::MEDIA,
				'label_block' => true,
			]
		);

		$this->add_control(
					'list',
					[
						'label' => 'موارد',
						'type' => \Elementor\Controls_Manager::REPEATER,
						'fields' => $repeater->get_controls(),
					]
				);
		$this->add_control(
			'image_size',
			[
				'label'	=> 'اندازه تصویر',
				'type'	=> \Elementor\Controls_Manager::SELECT,
				'default'	=> 'large',
				//'options'	=> get_images_size_elementor()
			]
		);

		$this->end_controls_section();

		/*
		* Options owl Slider
		*/
		$this->start_controls_section(
			'options_slider_section',
			[
				'label'	=> 'تنظیمات',
				'tab'		=> \Elementor\Controls_Manager::TAB_CONTENT
			]
		);

		$this->add_control(
			'options_items',
			[
				'label' => 'تعداد',
				'type' => \Elementor\Controls_Manager::TEXT,
			]
		);

		$this->add_control(
			'options_margin',
			[
				'label' => 'فاصله',
				'description'	=> 'px',
				'type' => \Elementor\Controls_Manager::TEXT,
			]
		);

		$this->add_control(
			'options_loop',
			[
				'label' => 'حلقه',
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => 'فعال',
				'label_off' => 'غیرفعال',
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->add_control(
			'options_center',
			[
				'label' => 'وسط چین',
				'description' => 'با تعداد اسلاید های فرد به خوبی کار میکند',
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => 'فعال',
				'label_off' => 'غیرفعال',
				'return_value' => 'yes',
				'default' => '',
			]
		);

		$this->add_control(
			'options_touchDrag',
			[
				'label' => 'اسلاید لمسی',
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => 'فعال',
				'label_off' => 'غیرفعال',
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->add_control(
			'options_mouseDrag',
			[
				'label' => 'حرکت لمسی',
				'description'	=> 'نگه داشتن کل اسلاید ها با لمس و حرکت دادن آنها',
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => 'فعال',
				'label_off' => 'غیرفعال',
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->add_control(
			'options_stagePadding',
			[
				'label' => 'فاصله از کناره',
				'description'	=> 'px',
				'type' => \Elementor\Controls_Manager::TEXT,
			]
		);

		$this->add_control(
			'options_autoWidth',
			[
				'label' => 'عرض خودکار',
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => 'فعال',
				'label_off' => 'غیرفعال',
				'return_value' => 'yes',
				'default' => '',
			]
		);

		$this->add_control(
			'options_nav',
			[
				'label' => 'دکمه بعدی/قبلی',
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => 'فعال',
				'label_off' => 'غیرفعال',
				'return_value' => 'yes',
				'default' => '',
			]
		);

		$this->add_control(
			'options_dots',
			[
				'label' => 'ناوبری نقطه ای',
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => 'فعال',
				'label_off' => 'غیرفعال',
				'return_value' => 'yes',
				'default' => '',
			]
		);

		$this->add_control(
			'options_autoplay',
			[
				'label' => 'پخش خودکار',
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => 'فعال',
				'label_off' => 'غیرفعال',
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->add_control(
			'options_autoplaySpeed',
			[
				'label' => 'سرعت پخش',
				'description'	=> 'میلی ثانیه',
				'type' => \Elementor\Controls_Manager::TEXT,
			]
		);

		$this->add_control(
			'options_autoplayTimeout',
			[
				'label' => 'مکث در پخش',
				'description'	=> 'میلی ثانیه',
				'type' => \Elementor\Controls_Manager::TEXT,
			]
		);

		$this->add_control(
			'options_autoplayHoverPause',
			[
				'label' => 'توقف پخش خودکار',
				'description' => 'زمانی که مووس روی اسلایدر باشد پخش متوقف می شود',
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => 'فعال',
				'label_off' => 'غیرفعال',
				'return_value' => 'yes',
				'default' => '',
			]
		);

		$this->add_control(
			'options_rtl',
			[
				'label' => 'RTL',
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => 'فعال',
				'label_off' => 'غیرفعال',
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->add_control(
			'hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'options_responsive_1320',
			[
				'label' => 'تعداد',
				'description'	=> 'عرض صفحه 1320px',
				'type' => \Elementor\Controls_Manager::TEXT,
			]
		);

		$this->add_control(
			'options_responsive_1140',
			[
				'label' => 'تعداد',
				'description'	=> 'عرض صفحه 1140px',
				'type' => \Elementor\Controls_Manager::TEXT,
			]
		);

		$this->add_control(
			'options_responsive_992',
			[
				'label' => 'تعداد',
				'description'	=> 'عرض صفحه 992px',
				'type' => \Elementor\Controls_Manager::TEXT,
			]
		);

		$this->add_control(
			'options_responsive_720',
			[
				'label' => 'تعداد',
				'description'	=> 'عرض صفحه 720px',
				'type' => \Elementor\Controls_Manager::TEXT,
			]
		);

		$this->add_control(
			'options_responsive_540',
			[
				'label' => 'تعداد',
				'description'	=> 'عرض صفحه 540px',
				'type' => \Elementor\Controls_Manager::TEXT,
			]
		);

		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		if (count($settings['list']) === 0) {
			return;
		}

		// generate data owlCarousel
		$owlCarousel = [
			'items'			=> !empty($settings['options_items']) ? (int)$settings['options_items'] : 1,
			'margin'			=> !empty($settings['options_margin']) ? (int)$settings['options_margin'] : 15,
			'loop'			=> $settings['options_loop'] === 'yes' ? true : false,
			'center'			=> $settings['options_center'] === 'yes' ? true : false,
			'touchDrag'			=> $settings['options_touchDrag'] === 'yes' ? true : false,
			'mouseDrag'			=> $settings['options_mouseDrag'] === 'yes' ? true : false,
			'stagePadding'			=> !empty($settings['options_stagePadding']) ? (int)$settings['options_stagePadding'] : 0,
			'autoWidth'			=> $settings['options_autoWidth'] === 'yes' ? true : false,
			'nav'			=> $settings['options_nav'] === 'yes' ? true : false,
			'dots'			=> $settings['options_dots'] === 'yes' ? true : false,
			'autoplay'			=> $settings['options_autoplay'] === 'yes' ? true : false,
			'autoplaySpeed'			=> !empty($settings['options_autoplaySpeed']) ? (int)$settings['options_autoplaySpeed'] : 1000,
			'autoplayTimeout'			=> !empty($settings['options_autoplayTimeout']) ? (int)$settings['options_autoplayTimeout'] : 5000,
			'autoplayHoverPause'			=> $settings['options_autoplayHoverPause'] === 'yes' ? true : false,
			'rtl'			=> $settings['options_rtl'] === 'yes' ? true : false,
			'responsive'	=> [
				'1320' => [
					'items'	=> !empty($settings['options_responsive_1320']) ? (int)$settings['options_responsive_1320'] : 1,
				],
				'1140' => [
					'items'	=> !empty($settings['options_responsive_1140']) ? (int)$settings['options_responsive_1140'] : 1,
				],
				'992' => [
					'items'	=> !empty($settings['options_responsive_992']) ? (int)$settings['options_responsive_992'] : 1,
				],
				'720' => [
					'items'	=> !empty($settings['options_responsive_720']) ? (int)$settings['options_responsive_720'] : 1,
				],
				'540' => [
					'items'	=> !empty($settings['options_responsive_540']) ? (int)$settings['options_responsive_540'] : 1,
				],
			],
		];
		$owlCarousel = wp_json_encode($owlCarousel);

		echo "<div class='slider-owl owl-carousel slider-fullscreen mb' data-options='$owlCarousel'>";

		foreach ($settings['list'] as $key) {

			// generate attr anchor
			$attribute_anchor = [];
			if($key['slide_url']['is_external'] === 'on'){
				$attribute_anchor[] = 'target="_blank"';
			}
			if($key['slide_url']['nofollow'] === 'on'){
				$attribute_anchor[] = 'rel="nofollow"';
			}
			if (count($attribute_anchor) >= 1) {
				$attribute_anchor = implode(' ', $attribute_anchor);
			}else{
				$attribute_anchor = '';
			}

			echo '<div class="item">';
				echo '<a href="' . $key['slide_url']['url'] . '" ' . $attribute_anchor . '>';
					echo '<figure class="image">';
					if(!empty($key['slide_image']['id']))
						echo wp_get_attachment_image($key['slide_image']['id'], $settings['image_size']);
						echo '<div class="title">';
							echo !empty($key['slide_title']) ? '<h2>' . $key['slide_title'] . '</h2>' : '';
							echo !empty($key['slide_subtitle']) ? '<p>' . $key['slide_subtitle'] . '</p>' : '';
						echo '</div>';
						echo '<div class="glass"></div>';
					echo '</figure>';
				echo '</a>';
			echo '</div>';
		} // end foreach

		echo '</div>';
	}

	protected function content_template(){

	}
}
