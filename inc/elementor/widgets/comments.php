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
						'label' => esc_html__( 'نام مشتری', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( 'List Title' , 'textdomain' ),
						'label_block' => true,
					],

					[
								'name'=>'star_comment_yektaweb',
								'label' => esc_html__( 'تعداد ستاره', 'textdomain' ),
								'type' => \Elementor\Controls_Manager::NUMBER,
								'min' => 0,
								'max' => 5,
								'step' => 1,
								'default' => 5,
					],

					[
						'name' => 'data_comment_yektaweb',
						'label' => esc_html__( 'متن کامنت', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::WYSIWYG,
						'default' => esc_html__( 'List Content' , 'textdomain' ),
						'show_label' => false,
					],
					[	'name' => 'image_comment_yektaweb',
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
      


<!--Comment Slider-->
<section class="bg-question pb-3">
        <div class="m-3 question-bg">
          <section class="container p-4 radius20 mt-5 mb-2">
              <div class=" text-center mt-3">
                <h2 class="mt-5">نظرات مشتریان</h2>
                  <p class="mb-3">همواره در تلاشیم تا رضایت شمارو جلب کنیم،شما لایق بهترین ها هستید.</p>
  
              </div>
                    <div class="mx-lg-5">
                  <div>
                      <div id="owl-Story" class="owl-carousel owl-theme text-center py-2 px-md-3">
                         
					  <?php
$index=0;
//var_dump($settings['slider_comment_yektaweb'][$index]['name_comment_yektaweb']);

if ( $settings['slider_comment_yektaweb'] ) {
	foreach (  $settings['slider_comment_yektaweb'] as $item ) {
		

?>

<div class="item">
         <div class="d-flex card flex-row justify-content-center align-items-center text-right mt-3 p-6 commernt-res">
			



             <img src="<?php echo $image_slider=$item['image_comment_yektaweb']['url']; ?>" class="img-fluid pic155 p-1 rounded-circle ml-lg-5" />



               <div class="m-2">

			   <?php echo $item['data_comment_yektaweb']; ?>
                
                    <div class="pt-2">
                       <p class="text-dark bottom_p"><?php echo $item['name_comment_yektaweb']; ?></p>
					   <?php
					   $star_comment_count=$item['star_comment_yektaweb'];
					 
	
for ($i =0; $i <= $star_comment_count; $i++) {
    echo '   <span>
	<svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M7.24563 10.8425L3.38813 12.8706L4.125 8.575L1 5.53313L5.3125 4.90813L7.24125 1L9.17 4.90813L13.4825 5.53313L10.3575 8.575L11.0944 12.8706L7.24563 10.8425Z" fill="#FDC736" stroke="#FDC736" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>   
   </span> ';
}
?>
                        
                    </div>
                      </div>
					</div>
				</div>  


<?php
	}
}

?>

                      </div>
                  </div>
              </div>
          </section>
      </div>
        </section>
<!--End--Comment Slider-->





		<?php
	}

/* 	protected function content_template() {
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
	} */

}