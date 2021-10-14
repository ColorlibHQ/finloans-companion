<?php
namespace Finloanselementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Group_Control_Background;
use Elementor\Utils;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 *
 * Finloans elementor hero section widget.
 *
 * @since 1.0
 */
class Finloans_Hero extends Widget_Base {

	public function get_name() {
		return 'finloans-hero';
	}

	public function get_title() {
		return __( 'Hero Section', 'finloans-companion' );
	}

	public function get_icon() {
		return 'eicon-slider-full-screen';
	}

	public function get_categories() {
		return [ 'finloans-elements' ];
	}

	protected function _register_controls() {

		// ----------------------------------------  Hero content ------------------------------
		$this->start_controls_section(
			'hero_content',
			[
				'label' => __( 'Hero section content', 'finloans-companion' ),
			]
        );

        $this->add_control(
            'bg_img',
            [
                'label' => esc_html__( 'Bg Image', 'finloans-companion' ),
                'description' => esc_html__( 'Best size is 1920x900', 'finloans-companion' ),
                'type' => Controls_Manager::MEDIA,
                'label_block' => true,
            ]
        );
        $this->add_control(
            'big_text',
            [
                'label' => esc_html__( 'Big Text', 'finloans-companion' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'   => esc_html__( 'Get Loan for your Business growth or startup', 'finloans-companion' ),
            ]
        );
        $this->add_control(
            'btn_title',
            [
                'label' => esc_html__( 'Button Title', 'finloans-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => esc_html__( 'How it Works', 'finloans-companion' ),
            ]
        );
        $this->add_control(
            'btn_url',
            [
                'label' => esc_html__( 'Button URL', 'finloans-companion' ),
                'type' => Controls_Manager::URL,
                'label_block' => true,
            ]
        );

        $this->end_controls_section(); // End Hero content

        // Payment Form content
        $this->start_controls_section(
			'payment_content',
			[
				'label' => __( 'Payment Form content', 'finloans-companion' ),
			]
        );
        
        
        $this->add_control(
            'payment_big_text',
            [
                'label' => esc_html__( 'Title Text', 'finloans-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => esc_html__( 'How much do you want?', 'finloans-companion' ),
            ]
        );
        $this->add_control(
            'sub_text',
            [
                'label' => esc_html__( 'Sub Text', 'finloans-companion' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'   => esc_html__( 'We provide online instant cash loans with quick', 'finloans-companion' ),
            ]
        );
        $this->add_control(
            'amounts', [
                'label' => __( 'Add Amount', 'finloans-companion' ),
                'type' => Controls_Manager::REPEATER,
                'title_field' => '{{{ amount }}}',
                'fields' => [
                    [
                        'name' => 'amount',
                        'label' => __( 'Amount', 'finloans-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default' => __( '10', 'finloans-companion' ),
                    ],
                ],
                'default'   => [
                    [
                        'amount'    => __( '10', 'finloans-companion' ),
                    ],
                    [
                        'amount'    => __( '40', 'finloans-companion' ),
                    ],
                    [
                        'amount'    => __( '50', 'finloans-companion' ),
                    ],
                ]
            ]
        );
        $this->add_control(
            'duration', [
                'label' => __( 'Add Duration', 'finloans-companion' ),
                'type' => Controls_Manager::REPEATER,
                'title_field' => '{{{ months }}}',
                'fields' => [
                    [
                        'name' => 'months',
                        'label' => __( 'Months', 'finloans-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default' => __( '3', 'finloans-companion' ),
                    ],
                ],
                'default'   => [
                    [
                        'months'    => __( '3', 'finloans-companion' ),
                    ],
                    [
                        'months'    => __( '6', 'finloans-companion' ),
                    ],
                    [
                        'months'    => __( '9', 'finloans-companion' ),
                    ],
                    [
                        'months'    => __( '12', 'finloans-companion' ),
                    ],
                ]
            ]
        );
        $this->add_control(
            'charges',
            [
                'label' => esc_html__( 'Your Charge', 'finloans-companion' ),
                'type' => Controls_Manager::NUMBER,
                'label_block' => true,
            ]
        );
        $this->add_control(
            'payment_btn_title',
            [
                'label' => esc_html__( 'Button Title', 'finloans-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => esc_html__( 'Continue', 'finloans-companion' ),
            ]
        );
        $this->add_control(
            'payment_btn_url',
            [
                'label' => esc_html__( 'Button URL', 'finloans-companion' ),
                'type' => Controls_Manager::URL,
                'label_block' => true,
            ]
        );
        $this->end_controls_section(); // End Hero content


    /**
     * Style Tab
     * ------------------------------ Style Title ------------------------------
     *
     */
        $this->start_controls_section(
			'style_title', [
				'label' => __( 'Style Hero Section', 'finloans-companion' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'title_col', [
				'label' => __( 'First Line Color', 'finloans-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .slider_area .single_slider .slider_text h3' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'sub_title_col', [
				'label' => __( 'Second Line Color', 'finloans-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .slider_area .single_slider .slider_text span' => 'color: {{VALUE}};',
				],
			]
		);
        
        $this->add_control(
            'button_col_separator',
            [
                'label'     => __( 'Button Styles', 'finloans-companion' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        ); 
		$this->add_control(
			'btn_bg_col', [
				'label' => __( 'Button BG Color', 'finloans-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .slider_area .single_slider .slider_text a.boxed-btn3-line' => 'background: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'btn_txt_col', [
				'label' => __( 'Button Text Color', 'finloans-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .slider_area .single_slider .slider_text a.boxed-btn3-line' => 'color: {{VALUE}} !important; border-color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'btn_hover_col', [
				'label' => __( 'Button Hover BG Color', 'finloans-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .slider_area .single_slider .slider_text a.boxed-btn3-line:hover' => 'background: {{VALUE}}',
				],
			]
		);
        $this->add_control(
			'btn_hover_txt_col', [
				'label' => __( 'Button Hover Text Color', 'finloans-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .slider_area .single_slider .slider_text a.boxed-btn3-line:hover' => 'color: {{VALUE}} !important; border-color: {{VALUE}};',
				],
			]
		);
		$this->end_controls_section();
	}
    
	protected function render() {
    $settings  = $this->get_settings();
    $bg_img = !empty( $settings['bg_img']['url'] ) ? $settings['bg_img']['url'] : '';
    $big_text = !empty( $settings['big_text'] ) ? $settings['big_text'] : '';
    $btn_title = !empty( $settings['btn_title'] ) ? $settings['btn_title'] : '';
    $btn_url = !empty( $settings['btn_url']['url'] ) ? $settings['btn_url']['url'] : '';
    $payment_big_text = !empty( $settings['payment_big_text'] ) ? $settings['payment_big_text'] : '';
    $sub_text = !empty( $settings['sub_text'] ) ? $settings['sub_text'] : '';
    $amounts = !empty( $settings['amounts'] ) ? $settings['amounts'] : '';
    $duration = !empty( $settings['duration'] ) ? $settings['duration'] : '';
    $charges = !empty( $settings['charges'] ) ? $settings['charges'] : 0;
    $payment_btn_title = !empty( $settings['payment_btn_title'] ) ? $settings['payment_btn_title'] : '';
    $payment_btn_url = !empty( $settings['payment_btn_url']['url'] ) ? $settings['payment_btn_url']['url'] : '';
    ?>

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center" <?php echo finloans_inline_bg_img(esc_url($bg_img))?>>
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-7 col-md-6">
                        <div class="slider_text">
                            <?php 
                                if ( $big_text ) { 
                                    echo '
                                    <h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".1s">
                                        '.esc_html( $big_text ).'
                                    </h3>
                                    ';                                    
                                }
                                if ( $btn_title ) { 
                                    echo '
                                    <div class="sldier_btn wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">
                                        <a class="boxed-btn3" href="'.esc_url( $btn_url ).'">'.esc_html( $btn_title ).'</a>
                                    </div>
                                    ';
                                }
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="payment_form white-bg wow fadeInDown" data-wow-duration="1.2s" data-wow-delay=".2s">
                            <div class="info text-center">
                                <?php 
                                    if ( $payment_big_text ) { 
                                        echo '
                                        <h4>
                                            '.esc_html( $payment_big_text ).'
                                        </h4>
                                        ';                                    
                                    }
                                    if ( $sub_text ) { 
                                        echo '<p>'.wp_kses_post( $sub_text ).'</p>';
                                    }
                                ?>
                            </div>
                            <div class="form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="single_input">
                                            <select class="wide">
                                                <option data-display="Amount">Amount</option>
                                                <?php
                                                if( is_array( $amounts ) && count( $amounts ) > 0 ){
                                                    foreach ( $amounts as $amount ) {
                                                        $amount = !empty( $amount['amount'] ) ? $amount['amount'] : '';
                                                        ?>
                                                        <option value="<?php echo esc_attr($amount)?>">$<?php echo esc_html($amount)?></option>
                                                        <?php 
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single_input">
                                            <select class="wide">
                                                <option data-display="Month">Month</option>
                                                <?php
                                                if( is_array( $duration ) && count( $duration ) > 0 ){
                                                    foreach ( $duration as $months ) {
                                                        
                                                        $months = !empty( $months['months'] ) ? $months['months'] : '';
                                                        ?>
                                                        <option value="<?php echo esc_attr($months)?>"><?php echo esc_html($months)?> months</option>
                                                        <?php 
                                                    }
                                                }
                                                ?>
                                            </select>
                                         </div>
                                    </div>
                                </div>
                            </div>
                            <p>You have to pay: <span>$<?php echo esc_html( $charges )?></span></p>
                            <div class="submit_btn">
                                <a style="display: block" class="boxed-btn3" href="<?php echo esc_url( $payment_btn_url )?>"><?php echo esc_html( $payment_btn_title )?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->
    <?php
    } 
}