<?php
add_action( 'admin_init', 'themesflat_page_options_init' );

function themesflat_page_options_init() {   

    new themesflat_meta_boxes(array(
    	// Portfolio
    	'id'	 => 'portfolio-options',
		'label'  => esc_html__( 'Causes Settings', 'redbiz' ),
		'post_types'  => 'portfolios',
	    'context'     => 'normal',
        'priority'    => 'default',
		'sections' => array(
            'general'   => array( 'title' => esc_html__( 'General', 'redbiz' ) ),
			),
		'options' => themesflat_portfolio_options_fields()
	));	

	new themesflat_meta_boxes(array( 
        'id'          => 'page-options',
        'label'       => esc_html__( 'Page Options', 'redbiz' ),
        'post_types'  => 'page',
        'context'     => 'normal',
        'priority'    => 'default',       

        'sections' => array(
            'general'   => array( 'title' => esc_html__( 'General', 'redbiz' ) ),
            'header'    => array( 'title' => esc_html__( 'Header', 'redbiz' ) ),
            'footer'    => array( 'title' => esc_html__( 'Footer', 'redbiz' ) ),
            'portfolio' => array( 'title' => esc_html__( 'Portfolio', 'redbiz' ) ),
            'service'   => array( 'title' => esc_html__( 'Service', 'redbiz' ) ),
            'blog'      => array( 'title' => esc_html__( 'Blog', 'redbiz' ) )
        ),

        'options' => themesflat_page_options_fields()
    ) );

    new themesflat_meta_boxes(array(
		// event
		'id' 	=> 'blog-options',
		'label'	=> esc_html__( 'Post settings', 'redbiz' ),
		'post_types'	=> array('post','faq'),
		'context'     => 'normal',
        'priority'    => 'default',
		'sections' => array(
            'blog'   => array( 'title' => esc_html__( 'Blog', 'redbiz' ) ),
			),
		'options' => themesflat_post_options_fields()
	));

    new themesflat_meta_boxes(array(
        // event
        'id'    => 'testimonial-options',
        'label' => esc_html__( 'Testimonial Details', 'redbiz' ),
        'post_types'    => 'testimonial',
        'context'     => 'normal',
        'priority'    => 'default',
        'sections' => array(
            'testimonial_details'   => array( 'title' => esc_html__( 'Testimonial Details', 'redbiz' ) ),
            ),
        'options' => themesflat_testimonial_options_fields()
    ));
}

