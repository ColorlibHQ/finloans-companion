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
 * Finloans elementor about section widget.
 *
 * @since 1.0
 */
class Finloans_About extends Widget_Base {

	public function get_name() {
		return 'finloans-about';
	}

	public function get_title() {
		return __( 'About Section', 'finloans-companion' );
	}

	public function get_icon() {
		return 'eicon-slider-full-screen';
	}

	public function get_categories() {
		return [ 'finloans-elements' ];
	}

	protected function _register_controls() {

		// ----------------------------------------  About content ------------------------------
		$this->start_controls_section(
			'about_content',
			[
				'label' => __( 'About section content', 'finloans-companion' ),
			]
        );

        $this->add_control(
            'bg_img',
            [
                'label' => esc_html__( 'Bg Image', 'finloans-companion' ),
                'descripion' => esc_html__( 'Best size is 960x742', 'finloans-companion' ),
                'type' => Controls_Manager::MEDIA,
                'label_block' => true,
            ]
        );
        $this->add_control(
            'sub_title',
            [
                'label' => esc_html__( 'Sub Title', 'finloans-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => esc_html__( 'About Us', 'finloans-companion' ),
            ]
        );
        $this->add_control(
            'big_title',
            [
                'label' => esc_html__( 'Big Title', 'finloans-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => esc_html__( 'Empowering individuals', 'finloans-companion' ),
            ]
        );
        $this->add_control(
            'text',
            [
                'label' => esc_html__( 'Text', 'finloans-companion' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'   => 'Efficiently unleash cross-media tour function information without cross action media value. Quickly maximize timely deliverables for real-time schemas.<br>
                “Function information without cross action media value.',
            ]
        );
        $this->add_control(
            'btn_title',
            [
                'label' => esc_html__( 'Button Title', 'finloans-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => esc_html__( 'About Us', 'finloans-companion' ),
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
    $sub_title = !empty( $settings['sub_title'] ) ? $settings['sub_title'] : '';
    $big_title = !empty( $settings['big_title'] ) ? $settings['big_title'] : '';
    $text = !empty( $settings['text'] ) ? $settings['text'] : '';
    $btn_title = !empty( $settings['btn_title'] ) ? $settings['btn_title'] : '';
    $btn_url = !empty( $settings['btn_url']['url'] ) ? $settings['btn_url']['url'] : '';
    ?>

    <style>
        .about_area::before {
            background-image: url(<?php echo esc_url($bg_img)?>);
        }
    </style>

    <div class="about_area">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-5 offset-lg-1">
                    <div class="about_info">
                        <div class="section_title white_text">
                            <?php 
                                if ( $sub_title ) { 
                                    echo '
                                    <span class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                                        '.esc_html( $sub_title ).'
                                    </span>
                                    ';                                    
                                }
                                if ( $big_title ) { 
                                    echo '
                                    <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                                        '.esc_html( $big_title ).'
                                    </h3>
                                    ';                                    
                                }
                                if ( $text ) { 
                                    echo '
                                    <p class="mid_text wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                        '.wp_kses_post( nl2br($text) ).'
                                    </p>
                                    ';                                    
                                }
                                if ( $btn_title ) { 
                                    echo '
                                    <a class="boxed-btn3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s" href="'.esc_url( $btn_url ).'">'.esc_html( $btn_title ).'</a>
                                    ';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    } 
}