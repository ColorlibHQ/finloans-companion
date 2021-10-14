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
 * Finloans elementor how we work section widget.
 *
 * @since 1.0
 */
class Finloans_How_We_Work extends Widget_Base {

	public function get_name() {
		return 'finloans-how-we-work';
	}

	public function get_title() {
		return __( 'How We Work Section', 'finloans-companion' );
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
			'hww_content',
			[
				'label' => __( 'How We Work content', 'finloans-companion' ),
			]
        );

        $this->add_control(
            'bg_img',
            [
                'label' => esc_html__( 'Right Image', 'finloans-companion' ),
                'descripion' => esc_html__( 'Best size is 975x700', 'finloans-companion' ),
                'type' => Controls_Manager::MEDIA,
                'label_block' => true,
            ]
        );
        $this->add_control(
            'big_title',
            [
                'label' => esc_html__( 'Big Title', 'finloans-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => esc_html__( 'How we work', 'finloans-companion' ),
            ]
        );
        $this->add_control(
            'text',
            [
                'label' => esc_html__( 'Text', 'finloans-companion' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'   => '“Function information without cross action media value. <br/> Efficiently unleash cross-media tour function information without cross action media value. Quickly maximize timely deliverables for real-time schemas.',
            ]
        );
        $this->add_control(
            'video_url',
            [
                'label' => esc_html__( 'Popup Video URL', 'finloans-companion' ),
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
    $big_title = !empty( $settings['big_title'] ) ? $settings['big_title'] : '';
    $text = !empty( $settings['text'] ) ? $settings['text'] : '';
    $video_url = !empty( $settings['video_url']['url'] ) ? $settings['video_url']['url'] : '';
    ?>

    <style>
        .how_we_work_area::before {
            background-image: url(<?php echo esc_url($bg_img)?>);
        }
    </style>

    <div class="how_we_work_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="work_info">
                        <div class="section_title">
                            <?php 
                                if ( $big_title ) { 
                                    echo '
                                    <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                                        '.esc_html( $big_title ).'
                                    </h3>
                                    ';                                    
                                }
                                if ( $text ) { 
                                    echo '
                                    <p class="mid_text wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">
                                        '.wp_kses_post( nl2br($text) ).'
                                    </p>
                                    ';                                    
                                }
                            ?>
                        </div>
                        <div class="video_watch d-flex align-items-center">
                            <div class="play_btn wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                            <?php 
                                echo '
                                <a class="video_icon popup-video" href="'.esc_url( $video_url ).'"> <i class="fa fa-play"></i> </a>
                                ';
                            ?>
                            </div>
                           <span class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".7s"> Watch Video</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    } 
}