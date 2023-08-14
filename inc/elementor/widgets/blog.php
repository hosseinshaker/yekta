<?php
class Yekta_Web_Blog extends \Elementor\Widget_Base {

	public function get_name() {
		return 'Yekta_Web_Blog';
	}

	public function get_title() {
		return esc_html__( 'مطالب وبلاگ', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-code';
	}

	public function get_categories() {
		return [ 'yektaweb' ];
	}

	public function get_keywords() {
		return [ 'blog', 'وبلاگ' ];
	}

	protected function register_controls() {

		// Content Tab Start

		$this->start_controls_section(
			'section_title',
			[
				'label' => esc_html__( 'تنظیمات وبلاگ', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);


        $this->add_control(
			'nummber_posts',
			[
				'label' => esc_html__( 'تعداد نمایش پست های وبلاگ', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 999,
				'step' => 1,
				'default' => 4,
			]
		);
	


		$this->add_control(
			'Description',
			[
				'label' => esc_html__( 'توضیحات', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'آخرین مقالات ما', 'textdomain' ),
				'placeholder' => esc_html__( 'Type your title here', 'textdomain' ),
			]
		);


		$this->add_control(
			'link_archive_description',
			[
				'label' => esc_html__( 'لینک آرشیو مقالات', 'textdomain' ),
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
			'image_sized_blog',
			[
				'label' => esc_html__( 'تصاویر برابر', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'no',
				'options' => [
					'no' => esc_html__( 'خیر', 'textdomain' ),
					'yes' => esc_html__( 'بله', 'textdomain' ),
				]				
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
      $count_nums_post=$settings['nummber_posts'];
      $Description_post=$settings['Description'];
      $link_archive_post=$settings['link_archive_description']['url'];
      $image_sized_blog=$settings['image_sized_blog'];
		?>
<!--Blog-->
<section class="container my-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex align-items-center justify-content-between mt-4">
                <h2>وبلاگ</h2>                    
                <a class="d-flex align-items-center a-button radius55 py-2 px-4" href="<?php echo $link_archive_post; ?>">
                    <span class="ml-2">همه مقالات</span>
                    <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.8019 6.17453H2.56566C2.00285 6.17453 1.53613 5.70782 1.53613 5.14501C1.53613 4.5822 2.00285 4.11548 2.56566 4.11548H10.8019C11.3647 4.11548 11.8314 4.5822 11.8314 5.14501C11.8314 5.70782 11.3647 6.17453 10.8019 6.17453Z" fill="#fff"/>
                        <path d="M5.31096 10.2918C5.05014 10.2918 4.78933 10.1958 4.58342 9.98985L0.465311 5.87174C0.067227 5.47366 0.067227 4.81476 0.465311 4.41667L4.58342 0.298563C4.98151 -0.099521 5.64041 -0.099521 6.03849 0.298563C6.43657 0.696647 6.43657 1.35554 6.03849 1.75363L2.64791 5.14421L6.03849 8.53479C6.43657 8.93287 6.43657 9.59177 6.03849 9.98985C5.83258 10.1958 5.57177 10.2918 5.31096 10.2918Z" fill="#fff"/>
                    </svg>
                        
                </a>
            </div>
            <p class="mb-5">
			<?php echo $Description_post; ?>
		</p>
            <div class="row">

              
<?php


$args = array(
    'post_type' => 'post', // نوع پست‌هایی که می‌خواهید به دست آورید
    'posts_per_page' => $count_nums_post, // تعداد پست‌هایی که می‌خواهید نمایش داده شوند
);

$query = new WP_Query( $args );

if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
        $query->the_post();
        ?>
            <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card p-3 mb-3 carding-blog overlyblog">
                        <a href="<?php the_permalink('small');?>">
   <img src="<?php echo get_the_post_thumbnail_url();  ?>" alt="Card image" class="<?php if($image_sized_blog=='yes'){
								echo 'image-blog'; 
							} ?>" style="border-radius:15px 15px 0px 0px;">
                        </a>
                        <div class="p_relative">
                            <h5 class="mt-5 YekanBakhFaNum-Bold"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
                            <div class="d-flex justify-content-center">
                                <p class="cateblog d-flex justify-content-center align-items-center">
                                       <span class="mr-2 YekanBakhFaNum-SemiBold"><?php 
                                       
                                       $categories = get_the_category();
                        if (!empty($categories)) {
                                    foreach ($categories as $category) {
                                  echo $category->name . ' ';
                                                }
                                            }
                                       
                                       ?></span>
                                </p>
                          
                            </div>
                                                <p><?php echo wp_trim_words(get_the_excerpt(),9); ?></p>
                            <div class="d-flex align-items-center justify-content-end mt-3 px-2">
                                <a class="d-flex justify-content-center align-items-center" href="<?php the_permalink();?>">
                                    <span class="ml-2 show-more">ادامه مطلب</span>
                                    <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.8019 6.17453H2.56566C2.00285 6.17453 1.53613 5.70782 1.53613 5.14501C1.53613 4.5822 2.00285 4.11548 2.56566 4.11548H10.8019C11.3647 4.11548 11.8314 4.5822 11.8314 5.14501C11.8314 5.70782 11.3647 6.17453 10.8019 6.17453Z" fill="#FFAA00"/>
                                        <path d="M5.31096 10.2918C5.05014 10.2918 4.78933 10.1958 4.58342 9.98985L0.465311 5.87174C0.067227 5.47366 0.067227 4.81476 0.465311 4.41667L4.58342 0.298563C4.98151 -0.099521 5.64041 -0.099521 6.03849 0.298563C6.43657 0.696647 6.43657 1.35554 6.03849 1.75363L2.64791 5.14421L6.03849 8.53479C6.43657 8.93287 6.43657 9.59177 6.03849 9.98985C5.83258 10.1958 5.57177 10.2918 5.31096 10.2918Z" fill="#FFAA00"/>
                                    </svg>    
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            
            <?php
    }
} else {
    // در صورتی که پستی یافت نشود، پیامی نمایش داده شود
    echo 'مطلبی یافت نشد.';
}

// بازگرداندن متغیرهای global به حالت پیش‌فرض
wp_reset_postdata();

?>

        </div>
    </div>
        </section>
<!--End-Blog-->



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