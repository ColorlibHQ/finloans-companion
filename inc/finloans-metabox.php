<?php
function finloans_page_metabox( $meta_boxes ) {

	$finloans_prefix = '_finloans_';
	$meta_boxes[] = array(
		'id'        => 'finloans_metaboxes',
		'title'     => esc_html__( 'Project Options', 'finloans-companion' ),
		'post_types'=> array( 'project' ),
		'priority'  => 'high',
		'context'  => 'side',
		'autosave'  => 'false',
		'fields'    => array(
			array(
				'name'    => esc_html__( 'Gird Image Size', 'finloans-companion' ),
				'desc'    => esc_html__( 'Image size should be 730x350 or 350x350', 'finloans-companion' ),
				'id'      => $finloans_prefix . 'finloans-grid',
				'type'    => 'select',
				'options' => array(
					'0' => 'Select Size',
					'1' => 'Gird Size [730x350]',
					'2' => 'Grid Size [350x350]',
				),
				'inline' => true,
			),			
			array(
				'id'    => $finloans_prefix . 'client_name',
				'type'  => 'text',
				'name'  => esc_html__( 'Client Name', 'finloans-companion' ),
				'placeholder' => esc_html__( 'Client Name', 'finloans-companion' ),
			),			
			array(
				'id'    => $finloans_prefix . 'project_category',
				'type'  => 'text',
				'name'  => esc_html__( 'Project Category', 'finloans-companion' ),
				'placeholder' => esc_html__( 'Project Category', 'finloans-companion' ),
			),			
			array(
				'id'    => $finloans_prefix . 'project_date',
				'type'  => 'date',
				'js_options' => [
					'dateFormat' => 'M dd, yy'
				],
				'name'  => esc_html__( 'Project Date', 'finloans-companion' ),
				'placeholder' => esc_html__( 'Project Date', 'finloans-companion' ),
			),			
			array(
				'id'    => $finloans_prefix . 'project_url',
				'type'  => 'text',
				'name'  => esc_html__( 'Project URL', 'finloans-companion' ),
				'placeholder' => esc_html__( 'Project URL', 'finloans-companion' ),
			),
		),
	);


	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'finloans_page_metabox' );
