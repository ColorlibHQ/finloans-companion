<?php
namespace Finloanselementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Utils;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 *
 * Finloans elementor testimonial section widget.
 *
 * @since 1.0
 */
class Finloans_Testimonial extends Widget_Base {

	public function get_name() {
		return 'finloans-testimonial';
	}

	public function get_title() {
		return __( 'Testimonial', 'finloans-companion' );
	}

	public function get_icon() {
		return 'eicon-gallery-grid';
	}

	public function get_categories() {
		return [ 'finloans-elements' ];
	}

	protected function _register_controls() {

		// ----------------------------------------  Testimonial content ------------------------------
		$this->start_controls_section(
			'testimonial_content',
			[
				'label' => __( 'Testimonial content', 'finloans-companion' ),
			]
        );
        $this->add_control(
            'bg_img',
            [
                'label' => esc_html__( 'BG Image', 'finloans-companion' ),
                'descripion' => esc_html__( 'Best size is 1920x615', 'finloans-companion' ),
                'type' => Controls_Manager::MEDIA,
                'label_block' => true,
            ]
        );
		$this->add_control(
            'testimonials', [
                'label' => __( 'Create New', 'finloans-companion' ),
                'type' => Controls_Manager::REPEATER,
                'title_field' => '{{{ client_name }}}',
                'fields' => [
                    [
                        'name' => 'review_text',
                        'label' => __( 'Review Text', 'finloans-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXTAREA,
                        'default'     => 'Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br> sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.  <br> Fusce ac mattis nulla. Morbi eget ornare dui.',
                    ],
                    [
                        'name' => 'client_img',
                        'label' => __( 'Client Image', 'finloans-companion' ),
                        'description' => __( 'The Image size should be 42x42', 'finloans-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::MEDIA,
                        'default'     => [
                            'url'   => Utils::get_placeholder_image_src(),
                        ]
                    ],
                    [
                        'name' => 'client_name',
                        'label' => __( 'Client Name', 'finloans-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default' => __( 'Hasan Fardous', 'finloans-companion' ),
                    ],
                    [
                        'name' => 'client_designation',
                        'label' => __( 'Client Designation', 'finloans-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default' => __( 'Business Owner', 'finloans-companion' ),
                    ],
                ],
                'default'   => [
                    [      
                        'review_text'   => 'Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br> sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.  <br> Fusce ac mattis nulla. Morbi eget ornare dui.',
                        'client_img'    => [
                            'url'       => Utils::get_placeholder_image_src(),
                        ],
                        'client_name'   => __( 'Robert Thomson', 'finloans-companion' ),
                        'client_designation' => __( 'Business Owner', 'finloans-companion' ),
                    ],
                    [      
                        'review_text'   => 'Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br> sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.  <br> Fusce ac mattis nulla. Morbi eget ornare dui.',
                        'client_img'    => [
                            'url'       => Utils::get_placeholder_image_src(),
                        ],
                        'client_name'   => __( 'Hasan Fardous', 'finloans-companion' ),
                        'client_designation' => __( 'Business Owner', 'finloans-companion' ),
                    ],
                    [      
                        'review_text'   => 'Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br> sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.  <br> Fusce ac mattis nulla. Morbi eget ornare dui.',
                        'client_img'    => [
                            'url'       => Utils::get_placeholder_image_src(),
                        ],
                        'client_name'   => __( 'John Doe', 'finloans-companion' ),
                        'client_designation' => __( 'Business Owner', 'finloans-companion' ),
                    ],
                ]
            ]
		);
		$this->end_controls_section(); // End gallery content

    /**
     * Style Tab
     * ------------------------------ Style Section ------------------------------
     *
     */

        $this->start_controls_section(
            'style_gallery_section', [
                'label' => __( 'Style Gallery Section', 'finloans-companion' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'hover_overlay_col', [
                'label' => __( 'Hover overy Color', 'finloans-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .gallery_area .single_gallery .hover_pop:before' => 'background: {{VALUE}};',
                ],
            ]
        );


        $this->add_control(
            'btn_styles_seperator',
            [
                'label' => esc_html__( 'Button Styles', 'finloans-companion' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after'
            ]
        );
        $this->add_control(
            'btn_bg_col', [
                'label' => __( 'Button BG Color', 'finloans-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .gallery_area .view_pore.boxed-btn3' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_hov_col', [
                'label' => __( 'Button Hover Color', 'finloans-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .gallery_area .view_pore.boxed-btn3:hover' => 'background: transparent; color: {{VALUE}} !important; border-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();

	}

	protected function render() {
    $settings  = $this->get_settings();
    // call load widget script
    $this->load_widget_script(); 
    $bg_img = !empty( $settings['bg_img']['url'] ) ? $settings['bg_img']['url'] : '';
    $testimonials = !empty( $settings['testimonials'] ) ? $settings['testimonials'] : '';
    $quote_img = FINLOANS_DIR_ICON_IMG_URI . 'quote.svg';
    ?>

    <!-- testimonial_area  -->
    <div class="testimonial_area" <?php echo finloans_inline_bg_img(esc_url($bg_img))?>>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <?php
                        if( is_array( $testimonials ) && count( $testimonials ) > 0 ){
                            foreach ( $testimonials as $item ) {
                                $review_text = !empty( $item['review_text'] ) ? $item['review_text'] : '';
                                $client_img = !empty( $item['client_img']['id'] ) ? wp_get_attachment_image( $item['client_img']['id'], 'finloans_testimonial_img_42x42', '', array('alt' => finloans_image_alt( $item['client_img']['url'] ) ) ) : '';
                                $client_name = !empty( $item['client_name'] ) ? $item['client_name'] : '';
                                $client_designation = !empty( $item['client_designation'] ) ? $item['client_designation'] : '';
                                ?>
                                <div class="single_carousel">
                                    <div class="single_testmonial text-center">
                                        <div class="quote">
                                            <img src="<?php echo esc_url($quote_img)?>" alt="quote image">
                                        </div>
                                        <?php
                                            if ( $review_text ) {
                                                echo '<p>'.wp_kses_post( nl2br($review_text) ).'</p>';
                                            }
                                        ?>
                                        <div class="testmonial_author">
                                            <?php
                                                if ( $client_img ) {
                                                    echo '<div class="thumb">
                                                    '.wp_kses_post( $client_img ).'</div>';
                                                }
                                                if ( $client_name ) {
                                                    echo '<h3>'.esc_html( $client_name).'</h3>';
                                                }
                                                if ( $client_designation ) {
                                                    echo '<span>'.wp_kses_post($client_designation).'</span>';
                                                }
                                            ?>
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
        </div>
    </div>
    <?php
    }

    public function load_widget_script(){
        if( \Elementor\Plugin::$instance->editor->is_edit_mode() === true  ) {
        ?>
        <script>
        ( function( $ ){
            // testmonial_active
            $('.testmonial_active').owlCarousel({
            loop:true,
            margin:0,
            items:1,
            autoplay:true,
            navText:['<i class="ti-angle-left"></i>','<i class="ti-angle-right"></i>'],
            nav:true,
            dots:false,
            autoplayHoverPause: true,
            autoplaySpeed: 800,
            responsive:{
                0:{
                    items:1,
                    dots:false,
                    nav:false,
                },
                767:{
                    items:1,
                    dots:false,
                    nav:false,
                },
                992:{
                    items:1,
                    nav:false
                },
                1200:{
                    items:1,
                    nav:false
                },
                1500:{
                    items:1
                }
            }
            });          
        })(jQuery);
        </script>
        <?php 
        }
    }	
}