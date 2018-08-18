<?php
/**
 * Return the default options of the theme
 * 
 * @return  void
 */

function themesflat_customize_default($key) {
	$default = array(
		'logo_controls' => array('padding-top' => 32,'padding-left' => 0),
		'footer_controls' => array('padding-top' => 50,'padding-bottom' => 32),
		'bread_crumb_prefix' =>'',
		'bottom_style' => 'bottom-center',
		'footer_background_image' => '',
		'breadcrumb_separator' =>  '<i class="fa fa-angle-right" aria-hidden="true"></i>',
		'footer_widget_areas'				=> 4,
		'show_post_navigator' => 0,
		'breadcrumb_prefix' => '',
		'logo_width' => 213,
		'logo_height' => 40,
		'menu_location_primary' => 'primary',
		'site_logo'	=> THEMESFLAT_LINK . 'images/logo.png',
		'site_retina_logo' => THEMESFLAT_LINK . 'images/logo@2x.png',
		'social_links'	=> array ("facebook" => '#', "twitter" => '#', "instagram" => '#', "pinterest" => '#'),
		'page_title_overlay_color' => '',
		'page_title_text_color' => '#ffffff',
		'page_title_link_color' => '#ffffff',
		'page_title_overlay_opacity' => 0.11,
		'page_title_controls' => array('padding-top' => 111, 'padding-bottom' => 107, 'margin-bottom' => 90),
		'page_title_background_image' => THEMESFLAT_LINK . 'images/page-title.jpg',
		'show_footer' => 0,
		'footer1' => 'footer-1',
		'footer2' => 'footer-2',
		'footer3' => 'footer-3',
		'footer4' => 'footer-4',
		'enable_social_link_top'  => 0,
		'logo_margin_left' 	  => 0,
		'show_page_title'	  => 1,
		'show_page_title_heading' => 0,
		'top_background_color'	=> '#2a2a2a',
		'topbar_textcolor'	=> '#fff',
		'mainnav_backgroundcolor'=>'#ffffff',
		'mainnav_color'		=> '#111111',
		'mainnav_hover_color'=>'#d21e2b',
		'mainnav_hover_background'=> 'rgba(242,194,26,0)',
		'sub_nav_color'		=>'#999',
		'sub_nav_background'=>'#ffffff',
		'border_color_sub_nav'=>'#ffffff',
		'sub_nav_background_hover'=>'#d21e2b',
		'scheme_color'=>'#d21e2b',
		'body_text_color'=>'#999999',
		'hover_body_color'	=>	'#000000',
		'body_background_color' => '#ffffff',
		'body_font_name'	=> array(
			'family' => 'Fira Sans',
			'style'  => 'regular',
			'size'   => '15',
			'line_height'=>'24'
			), 
		'header_style'	=> 'header-style1',
		'headings_font_name'	=> array(
			'family' => 'Fira Sans',
			'style'  => '500'			
			),
		'h1_size' => 36,
		'h2_size' => 30,
		'h3_size' => 24,
		'h4_size' => 18,
		'h5_size' => 15,
		'h6_size' => 13,
		'breadcrumb_enabled' => 1,
		'show_post_paginator' => 0,
		'blog_grid_columns' => 3,
		'blog_archive_exclude' => '',
		'testimonial_rating' => 0,
		'blog_layout' => 'sidebar-right',
		'page_layout' => 'sidebar-left',
		'blog_archive_layout' => 'blog-list',
		'related_post_style'	=> 'blog-grid',
		'blog_sidebar_list'		  => 'blog-sidebar',			
		'blog_archive_readmore' => 1,
		'blog_archive_post_excepts_length' => 57,
		'blog_archive_readmore_text' => 'Read Article',
		'blog_archive_pagination_style' => 'pager-numeric',
		'blog_posts_per_page'	=> 5,
		'blog_order_by'	=> 'date',
		'blog_order_direction' => 'DESC',
		'page_sidebar_list'	=> 'blog-sidebar',
		'menu_font_name'	=> array(
			'family' => 'Fira Sans',
			'style'  => '500',
			'size'   => '13',
			'line_height'=>'60',
			),
		'show_readmore'	  => 1,
		'show_filter_portfolio' => 1,
		'portfolio_style'		=>'grid',
		'grid_columns_portfolio' => 'one-three',
		'portfolio_exclude' =>'',
		'portfolio_archive_pagination_style' => 'pager-numeric',
		'portfolio_grid_columns' => 'one-three',	
		'portfolios_sidebar'		=> 'fullwidth',
		'portfolio_post_perpage'	=> 6,
		'portfolio_order_by'	=> 'date',
		'portfolio_order_direction' => 'DESC',
		'portfolio_category_order' => '',
		'portfolio_single_style'	=> 'left_content',
		'related_portfolio_style' => 'grid',
		'grid_columns_portfolio_related' => 'one-three',
		'number_related_portfolio' => 3,
		'show_related_portfolio' => 0,
		'images_clients'	=> '<a href="#"><img src="'.THEMESFLAT_LINK . 'images/partner.png'.'" alt="image" /></a>
		<a href="#"><img src="'.THEMESFLAT_LINK . 'images/partner.png'.'" alt="image" /></a>
		<a href="#"><img src="'.THEMESFLAT_LINK . 'images/partner.png'.'" alt="image" /></a>
		<a href="#"><img src="'.THEMESFLAT_LINK . 'images/partner.png'.'" alt="image" /></a>
		<a href="#"><img src="'.THEMESFLAT_LINK . 'images/partner.png'.'" alt="image" /></a>
		<a href="#"><img src="'.THEMESFLAT_LINK . 'images/partner.png'.'" alt="image" /></a>',	
		'enable_custom_topbar'  => 0,
		'enable_page_callout'	=> 0,
		'topbar_enabled' => 0,
		'header_sticky' => 0,
		'header_searchbox' => 1,	
		'footer_background_color'	=> '#111',
		'footer_text_color'			=> '#fff',
		'footer_background_color_blocks' => '#333',
		'bottom__background_color'	=> '#111',
		'bottom_text_color'			=> '#fff',
		'show_bottom'				=> 1,
		'go_top'					=> 1,
		'layout_version'			=> 'wide',		
		'footer__copyright'			=> '<p><a href="#">ThemesFlat</a> 2018. All rights reserved.</p>',
		'top_content' => '<span class="welcome">Welcome to Professional Consulting Agency</span><ul>
									<li>
										<i class="fa fa-phone" aria-hidden="true"></i>
										(+123) 456 7890
									</li>
									<li >
										<i class="fa fa-envelope" aria-hidden="true"></i>
										example@gmail.com
									</li>
								</ul>',
		'show_pagination_portfolio' => 0,
		'show_header_title_content' => 1,
		'enable_smooth_scroll'	=> 0,
		'show_social_share'	=> 0,
		'hide_content' => 'yes',
		'show_date_portfolio' => 0,
		'show_readmore_portfolio' => 0,
		'show_content_portfolio' => 0,
		'portfolio_content_length' => 150,
		'services_grid_columns' => 'one-three',
		'services_show_post_navigator' => 1,
		'services_post_perpage' => 9,
		'include_pages_list' => '',
		'comming_soon_time' => '2018/12/01',
		'key_google_api'	=> 'AIzaSyCOYt9j4gB6udRh420WRKttoGoN38pzI7w',
		'enable_preload'	=> 1,
		'portfolio_status'  => 'Complete',
		'portfolio_client'	=> '',
		'portfolio_url'		=> '',
		'enable_slide_client' => 0,
		'enable_callback'	=> 0,
		'text_call_back' => 'Looking for Professional Approach and Quality Services ?',
		'text_button_call_out'	=>	'Contact Us Today',
		'link_button_call_out'	=> '#',
		'show_nav'		=> 0,
		'autoplay'		=> 0,
		'call_back_bg_color' => '#ffffff',
		'show_logo'		=> 6,
		'show_dot'		=> 0,
		'client_bg_color'	=> '#ffffff',
		'woo_products_per_page'	=> 6,
		'product_columns'	=> 'three-columns',
		'product_layout'	=> 'fullwidth',
		'woo_products_related_per_page' => 3,
		'woo_products_related_columns' => 'three-columns',
		'product_style'	=> 	'product-style1',
		'show_post_meta'	=> 1,
	);
	return $default[$key];
}

/**
 * Return an array that used to declare options
 * for the page
 * 
 * @return  array
 */
function themesflat_portfolio_options_fields() {
	$options['cover_heading'] = array(
		'type' => 'heading',
		'section' => 'general',
		'title' => esc_html__( 'Portfolio', 'redbiz' ),
		'description' => esc_html__( 'This is an special option, it allow to set Portfolio informations.', 'redbiz' )
		);

	$options['gallery_portfolio'] = array(
		'type'    => 'image-control',
		'section' => 'general',
		'title' => esc_html__( 'Images', 'redbiz' ),
		'default' => ''
		);

	$options['status'] = array(
		'section' => 'general',
		'default' => '',
		'type'    => 'text',
		'title'   => esc_html__( 'Status Portfolio', 'redbiz' )
	);

	$options['portfolio_client'] = array(
		'section' => 'general',
		'default' => '',
		'type'    => 'text',
		'title'   => esc_html__( 'Name Client Portfolio', 'redbiz' )
	);

	$options['portfolio_url'] = array(
		'section' => 'general',
		'default' => '',
		'type'    => 'text',
		'title'   => esc_html__( 'Url Client Portfolio', 'redbiz' )
	);

	themesflat_prepare_options($options);
	return $options;
}

function themesflat_testimonial_options_fields() {
	$options['cover_heading'] = array(
		'type' => 'heading',
		'section' => 'testimonial_details',
		'title' => esc_html__( 'Testimonial Details', 'redbiz' ),
		);

	$options['testimonial_position'] = array(
		'type'    => 'text',
		'section' => 'testimonial_details',
		'title' => esc_html__( 'Position', 'redbiz' ),
		'default' => ''
		);

	$options['testimonial_rating'] = array(
		'type'    => 'select',
		'section' => 'testimonial_details',
		'title'   => esc_html__( 'Ratings', 'redbiz' ),
		'default' => themesflat_get_opt('testimonial_rating'),
		'choices'   => array(
				'5' => esc_html__('5 Stars','redbiz'),
				'4' => esc_html__('4 Stars','redbiz'),
				'3' => esc_html__('3 Stars','redbiz'),
				'2' => esc_html__('2 Stars','redbiz'),
				'1' => esc_html__('1 Stars','redbiz'),
				'0' => esc_html__('No Rating','redbiz')
			)
	);

	themesflat_prepare_options($options);
	return $options;
}

function themesflat_post_options_fields() {
	$options['blog_heading'] = array(
		'type' => 'heading',
		'section' => 'blog',
		'title' => esc_html__( 'Dear friends,', 'redbiz' ),
		'description' => esc_html__( 'Option just view if post format is gallery or video! <br/>Thanks!', 'redbiz' )
		);

	$options['gallery_images_heading'] = array(
		'type' => 'heading',
		'section' => 'blog',
		'title' => esc_html__( 'Post Format: Gallery .', 'redbiz' ),
		'description' => esc_html__( '', 'redbiz' )
		);

	$options['gallery_images'] = array(
		'type'    => 'image-control',
		'section' => 'blog',
		'title' => esc_html__( 'Images', 'redbiz' ),
		'default' => ''
		);

	$options['video_url_heading'] = array(
		'type' => 'heading',
		'section' => 'blog',
		'title' => esc_html__( 'Post Format: Video ( Embeded video from youtube, vimeo ...).', 'redbiz' ),
		'description' => esc_html__( '', 'redbiz' )
		);

	$options['video_url'] = array(
		'type'    => 'textarea',
		'section' => 'blog',
		'title' => esc_html__( 'iframe video link', 'redbiz' ),
		'default' => ''
		);
	themesflat_prepare_options($options);
	return $options;
}

function themesflat_blog_options_fields() {
	$options['position_field_heading'] = array(
		'type' => 'heading',
		'section' => 'events',
		'title' => esc_html__( 'Events', 'redbiz' ),
		'description' => esc_html__( 'This is an special option, it allow to set Causes informations.', 'redbiz' )
		);

	$options['position_field'] = array(
		'type'    => 'text',
		'section' => 'events',
		'title' => esc_html__( 'Position', 'redbiz' ),
		'default' => ''
		);

	$options['address'] = array(
		'type'    => 'textarea',
		'section' => 'events',
		'title' => esc_html__( 'Address', 'redbiz' ),
		'default' => ''
		);

	$options['event_time'] = array(
		'type'    => 'datetime',
		'section' => 'events',
		'title' => esc_html__( 'Event date time', 'redbiz' ),
		'default' => ''
		);

	$options['event_link'] = array(
		'type'    => 'text',
		'section' => 'events',
		'title' => esc_html__( 'Link to join', 'redbiz' ),
		'default' => ''
		);
	themesflat_prepare_options($options);
	return $options;
}

function themesflat_page_options_fields() {
	global $wp_registered_sidebars;

	$options  = array();
	$sidebars = array();

	// Retrieve all registered sidebars
	foreach( $wp_registered_sidebars as $params )
		$sidebars[$params['id']] = $params['name'];

	/**
	 * General
	 */	
	$options['layout_heading'] = array(
		'type' => 'heading',
		'section' => 'general',
		'title' => esc_html__( 'Layout', 'redbiz' ),
		'description' => esc_html__( 'Choose between a full or a boxed layout to set how this page layout will look like.', 'redbiz' )
		);

	$options['enable_custom_layout'] = array(
		'type'    => 'power',
		'title'   => esc_html__( 'Enable Custom Layout', 'redbiz' ),
		'section' => 'general',
		'children'=> array('layout_version','page_layout','sidebar_default','page_sidebar_list'),
		'default' => false
		);

	$options['layout_version'] = array(
		'type'    => 'select',
		'title'   => esc_html__( 'Display Style', 'redbiz' ),
		'section' => 'general',
		'default' => 'wide',
		'choices' => array(
			'wide'  =>  esc_html__( 'Wide', 'redbiz' ),
			'boxed'  =>  esc_html__( 'Boxed', 'redbiz' )
			)
		);

	$options['page_layout'] = array(
		'type'    => 'select',
		'title'   => esc_html__( 'Sidebar Position', 'redbiz' ),
		'section' => 'general',
		'default' => 'sidebar-right',
		'choices' => array(
			'fullwidth' => esc_html__( 'No Sidebar', 'redbiz' ),
			'sidebar-left' => esc_html__( 'Sidebar Left', 'redbiz' ),
			'sidebar-right' =>  esc_html__( 'Sidebar Right', 'redbiz' )
			)
		);

	$options['page_sidebar_list'] = array(
		'type'    => 'dropdown-sidebar',
		'title'   => esc_html__( 'Custom Sidebar', 'redbiz' ),
		'section' => 'general',
		'default' => 'sidebar-page'
		);

	$options['page_class_heading'] = array(
		'type' => 'heading',
		'section' => 'general',
		'title' => esc_html__( 'Custom Page Class', 'redbiz' ),
		);
	
	$options['custom_page_class'] = array(
		'type'    => 'text',
		'section' => 'general',
		);

	/**
	 * Header
	 */
	$options['topbar_heading'] = array(
		'type' => 'heading',
		'section' => 'header',
		'title' => esc_html__( 'Top Bar', 'redbiz' ),
		'description' => esc_html__( 'Turn on/off the top bar and change it styles.', 'redbiz' )
		);

	$options['enable_custom_topbar'] = array(
		'type'    => 'power',
		'title'   => esc_html__( 'Enable Custom Topbar', 'redbiz' ),
		'section' => 'header',
		'children' => array('topbar_enabled','top_background_color','topbar_textcolor','top_content','enable_social_link_top','show_addtocard_topbar'),
		'default' => false
		);

	$options['topbar_enabled'] = array(
		'type'    => 'power',
		'title'   => esc_html__( 'Display Topbar On This Page', 'redbiz' ),
		'section' => 'header',
		'default' => themesflat_customize_default( 'topbar_enabled' )
		);	

	$options['enable_social_link_top'] = array(
		'type'    => 'power',
		'title'   => esc_html__( 'Enable Social Links Topbar', 'redbiz' ),
		'section' => 'header',
		'default' => themesflat_customize_default( 'enable_social_link_top' )
		);

	$options['top_background_color'] = array(
		'type'    => 'color-picker',
		'title'   => esc_html__( 'Topbar Background', 'redbiz' ),
		'section' => 'header',
		'default' => themesflat_get_opt( 'top_background_color' )
		);

	$options['topbar_textcolor'] = array(
		'type'    => 'color-picker',
		'title'   => esc_html__( 'Topbar Text Color', 'redbiz' ),
		'section' => 'header',
		'default' => themesflat_get_opt( 'topbar_textcolor' )
		);

	$options['top_content'] = array(
		'type'    => 'textarea',
		'title'   => esc_html__( 'Content Left Topbar', 'redbiz' ),
		'section' => 'header',
		'default' => themesflat_get_opt( 'top_content' )
		);

	$options['navigator_heading'] = array(
		'type'        => 'heading',
		'section'     => 'header',
		'title'       => esc_html__( 'Navigator', 'redbiz' ),
		'description' => esc_html__( 'Just select your menu that you wish assign it to the location on the theme.', 'redbiz' )
		);

	$options['enable_custom_navigator'] = array(
		'type'    => 'power',
		'section' => 'header',
		'title'   => esc_html__( 'Enable Custom Navigator', 'redbiz' ),
		'children' => array('mainnav_color','mainnav_backgroundcolor','menu_location_primary','mainnav_hover_background','mainnav_hover_color'),
		'default' => false
		);

	// Navigator
	$menus     = wp_get_nav_menus();

	if ( $menus ) {
		$choices = array( 0 => esc_html__( '-- Select --', 'redbiz' ) );
		foreach ( $menus as $menu ) {
			$choices[ $menu->term_id ] = wp_html_excerpt( $menu->name, 40, '&hellip;' );
		}

		$options["menu_location_primary"] = array(
				'title'   => esc_html__('Choose menu for page','redbiz'),
				'section' => 'header',
				'type' 	  => 'select',
				'choices' => $choices,
				'default' => themesflat_customize_default('menu_location_primary')
			);
	}

	/**
	 * Footer
	 */	
	$options['footer_widgets_heading'] = array(
		'type'        => 'heading',
		'section'     => 'footer',
		'title'       => esc_html__( 'Footer Widgets', 'redbiz' ),
		'description' => esc_html__( 'This section allow to change the layout and styles of footer widgets to match as you need.', 'redbiz' )
		);

	$options['enable_custom_footer_widgets'] = array(
		'type'    => 'power',
		'title'   => esc_html__( 'Enable Custom Footer Widgets', 'redbiz' ),
		'section' => 'footer',
		'children'=> array('footer_background_color','footer_text_color','footer_widget_areas','footer1','footer2','footer3','footer4','footer_controls'),
		'default' => false
		);
	
	$options['footer_widget_areas'] = array(
		'type'    => 'select',
		'title'   => esc_html__( 'Footer Widget Layout', 'redbiz' ),
		'section' => 'footer',
		'choices'   => array(                
                0    => esc_html( 'None', 'redbiz' ),
                1     => esc_html( '1 Columns', 'redbiz' ),
                2     => esc_html( '2 Columns', 'redbiz' ),
                3     => esc_html( '3 Columns', 'redbiz' ),
                4     => esc_html( '4 Columns', 'redbiz' ),                
                5     => esc_html( '4 Columns Equals', 'redbiz' ),                
            ),
		'default' => themesflat_customize_default('footer_widget_areas')
		);

	$options['footer1'] = array(
		'type'    => 'dropdown-sidebar',
		'title'   => esc_html__( 'Footer Widget Area 1', 'redbiz' ),
		'section' => 'footer',
		'default' => themesflat_customize_default('footer1')
		);

	$options['footer2'] = array(
		'type'    => 'dropdown-sidebar',
		'title'   => esc_html__( 'Footer Widget Area 2', 'redbiz' ),
		'section' => 'footer',
		'default' => themesflat_customize_default('footer2')
		);

	$options['footer3'] = array(
		'type'    => 'dropdown-sidebar',
		'title'   => esc_html__( 'Footer Widget Area 3', 'redbiz' ),
		'section' => 'footer',
		'default' => themesflat_customize_default('footer3')
		);

	$options['footer4'] = array(
		'type'    => 'dropdown-sidebar',
		'title'   => esc_html__( 'Footer Widget Area 4', 'redbiz' ),
		'section' => 'footer',
		'default' => themesflat_customize_default('footer4')
		);
	
	$options['footer_heading'] = array(
		'type'        => 'heading',
		'class'       => 'no-border',
		'section'     => 'footer',
		'title'       => esc_html__( 'Custom Footer', 'redbiz' ),
		'description' => esc_html__( 'You can change the copyright text, show/hide the social icons on the footer.', 'redbiz' )
		);

	$options['enable_custom_footer'] = array(
		'type'    => 'power',
		'title'   => esc_html__( 'Enable Custom Footer Content', 'redbiz' ),
		'section' => 'footer',
		'children'=>array('bottom_text_color','show_bottom','enable_slide_client','enable_callback'),
		'default' => false
		);

	$options['enable_slide_client'] = array(
		'type'    => 'power',
		'title'   => esc_html__( 'Enable Slide Client', 'redbiz' ),
		'section' => 'footer',
		'default' => themesflat_customize_default( 'enable_slide_client' )
		);

	$options['enable_callback'] = array(
		'type'    => 'power',
		'title'   => esc_html__( 'Enable CallBack Footer', 'redbiz' ),
		'section' => 'footer',
		'default' => themesflat_customize_default( 'enable_callback' )
		);

	$options['show_bottom'] = array(
		'type'    => 'power',
		'section' => 'footer',
		'title'   => esc_html__( 'Show Bottom', 'redbiz' ),
		'default' => themesflat_get_opt('show_bottom')
		);
	

	/**
	 * Portfolio
	 */
	$options['portfolio_list_heading'] = array(
		'type'        => 'heading',
		'class'       => 'no-border',
		'section'     => 'portfolio',
		'title'       => esc_html__( 'Portfolio', 'redbiz' ),
		'description' => esc_html__( 'Change options in this section to custom style for portfolio listing page.', 'redbiz' )
		);

	$options['enable_custom_portfolio'] = array(
		'type'    => 'power',
		'title'   => esc_html__( 'Enable Custom Portfolio layout', 'redbiz' ),
		'section' => 'portfolio',
		'children'=> array('portfolio_grid_columns','show_filter_portfolio','portfolio_archive_pagination_style','portfolio_post_perpage','portfolio_order_by','portfolio_order_direction','portfolio_pagination_style','portfolio_style','portfolio_exclude','show_pagination_portfolio','show_date_portfolio','show_readmore_portfolio','show_content_portfolio','portfolio_content_length','portfolio_category_order'),		
		'default' => false
		);

	$options['portfolio_style'] = array(
		'type'    => 'select',
		'title'   => esc_html__( 'Portfolio Style', 'redbiz' ),
		'section' => 'portfolio',
		'default' => 'grid',
		'choices'   => array(
			'grid'          	=> esc_html( 'Grid', 'redbiz' ),
			'masonry'          	=> esc_html( 'Masonry', 'redbiz' ),
			)
		);

	$options['portfolio_grid_columns'] = array(
		'type'    => 'select',
		'section' => 'portfolio',
		'title'   => esc_html__( 'Grid Or Masonry', 'redbiz' ),
		'default' => themesflat_get_opt('portfolio_grid_columns'),
		'choices'   => array(
			'one-three'     => esc_html( '3 Columns', 'redbiz' ),
			'one-four'     => esc_html( '4 Columns', 'redbiz' ),
			)
		);

	$options['show_filter_portfolio'] = array(
		'type'    => 'power',
		'section' => 'portfolio',
		'title'   => esc_html__( 'Show Filter', 'redbiz' ),
		'default' => themesflat_get_opt('show_filter_portfolio')
		);

	$options['show_date_portfolio'] = array(
		'type'    => 'power',
		'section' => 'portfolio',
		'title'   => esc_html__( 'Portfolio Show Date', 'redbiz' ),
		'default' => themesflat_customize_default('show_date_portfolio')
		);

	$options['show_content_portfolio'] = array(
		'type'    => 'power',
		'section' => 'portfolio',
		'title'   => esc_html__( 'Portfolio Show Content', 'redbiz' ),
		'default' => themesflat_customize_default('show_content_portfolio')
		);

	$options['portfolio_content_length'] = array(
		'type'     => 'text',
		'section'  => 'portfolio',
		'title'    => esc_html__( 'Portfolio Content Length', 'redbiz' ),
		'default'  => themesflat_customize_default( 'portfolio_content_length' )
	);

	$options['show_readmore_portfolio'] = array(
		'type'    => 'power',
		'section' => 'portfolio',
		'title'   => esc_html__( 'Portfolio Show Read More', 'redbiz' ),
		'default' => themesflat_customize_default('show_readmore_portfolio')
		);	

	$options['portfolio_category_order'] = array(
		'type'     => 'text',
		'section'  => 'portfolio',
		'title'    => esc_html__( 'Portfolio categories order.EX:travel,aviation,business. Leave empty for auto load', 'redbiz' ),
		'default'  => themesflat_get_opt( 'portfolio_category_order' )
	);

	$options['portfolio_exclude'] = array(
		'type'     => 'text',
		'section'  => 'portfolio',
		'title'    => esc_html__( 'Not Show these portfolios by IDs EX:1,2,3', 'redbiz' ),
		'default'  => themesflat_get_opt( 'portfolio_exclude' )
		);


	$options['portfolio_post_perpage'] = array(
		'type'     => 'spinner',
		'section'  => 'portfolio',
		'title'    => esc_html__( 'Posts Per Page', 'redbiz' ),
		'default'  => themesflat_get_opt( 'portfolio_post_perpage' )
		);

	$options['portfolio_archive_pagination_style'] = array(
		'type'    => 'select',
		'title'   => esc_html__( 'Pagination Style', 'redbiz' ),
		'section' => 'portfolio',
		'default' => 'pager-numeric',
		'choices' => array(			
			'pager-numeric' =>  esc_html__( 'Numeric', 'redbiz' ),
			'loadmore' => esc_html__( 'Load More', 'redbiz' )
			)
		);
	
	$options['portfolio_order_by'] = array(
		'type'     => 'select',
		'section'  => 'portfolio',
		'title'    => esc_html__( 'Order By', 'redbiz' ),
		'default'  => 'date',
		'choices'  => array(
			'date'          => esc_html__( 'Date', 'redbiz' ),
			'ID'            => esc_html__( 'ID', 'redbiz' ),
			'author'        => esc_html__( 'Author', 'redbiz' ),
			'title'         => esc_html__( 'Title', 'redbiz' ),
			'modified'      => esc_html__( 'Modified', 'redbiz' ),
			'rand'          => esc_html__( 'Random', 'redbiz' ),
			'comment_count' => esc_html__( 'Comment count', 'redbiz' ),
			'menu_order'    => esc_html__( 'Menu order', 'redbiz' ),
			)
		);

	$options['portfolio_order_direction'] = array(
		'type'     => 'select',
		'section'  => 'portfolio',
		'title'    => esc_html__( 'Order Direction', 'redbiz' ),
		'default'  => 'DESC',
		'choices'  => array(
			'ASC'  => esc_html__( 'Ascending', 'redbiz' ),
			'DESC' => esc_html__( 'Descending', 'redbiz' )
			)
		);

	

	/**
	 * Blog Options
	 */
	$options['blog_list_heading'] = array(
		'type'        => 'heading',
		'class'       => 'no-border',
		'section'     => 'blog',
		'title'       => esc_html__( 'Blog', 'redbiz' ),
		'description' => esc_html__( 'All options in this section will be used to make style for blog page.', 'redbiz' )
		);

	$options['enable_custom_blog'] = array(
		'type'    => 'power',
		'title'   => esc_html__( 'Enable Custom Blog layout', 'redbiz' ),
		'section' => 'blog',
		'children'=> array('blog_grid_columns','blog_archive_post_excepts','blog_archive_post_excepts_length','blog_archive_readmore','blog_archive_readmore_text','blog_posts_per_page','blog_order_by','blog_order_direction','blog_archive_pagination_style','blog_show_content', 'blog_archive_layout','blog_archive_exclude','hide_content','show_post_meta'),		
		'default' => false
		);

	$options['blog_grid_columns'] = array(
		'type'    => 'select',
		'section' => 'blog',
		'title'   => esc_html__( 'Grid Columns', 'redbiz' ),
		'default' => themesflat_customize_default('blog_grid_columns'),
		'choices' => array(
			3 => esc_html__( '3 Columns', 'redbiz' ),
			2 => esc_html__( '2 Columns', 'redbiz' ),
			4 => esc_html__( '4 Columns', 'redbiz' )
			)
		);	

	$options['blog_archive_layout'] = array(
		'type'    => 'select',
		'title'   => esc_html__( 'Blog Layout', 'redbiz' ),
		'section' => 'blog',
		'default' => themesflat_customize_default('blog_archive_layout'),
		'choices' => array(			
            'blog-list-small'=>  esc_html( 'Blog List Small','redbiz' ),
            'blog-list' =>  esc_html( 'Blog List','redbiz' ),
            'blog-grid'=>   esc_html( 'Blog Grid','redbiz' ),
            'blog-grid-style2'=>   esc_html( 'Blog Grid No Image','redbiz' )
			)
		);

	$options['blog_archive_post_excepts_length'] = array(
		'type'    => 'text',
		'title'   => esc_html__( 'Post Excepts Length', 'redbiz' ),
		'section' => 'blog',
		'default' => themesflat_customize_default('blog_archive_post_excepts_length')
		);	

	$options['blog_archive_readmore'] = array(
		'type'    => 'power',
		'title'   => esc_html__( 'Show Read More', 'redbiz' ),
		'section' => 'blog',
		'default' => true,
		'children' => array ('blog_archive_readmore_text')
		);	

	$options['blog_archive_readmore_text'] = array(
		'type'    => 'text',
		'title'   => esc_html__( 'Read More Text', 'redbiz' ),
		'section' => 'blog',
		'default' => themesflat_customize_default('blog_archive_readmore_text')
		);

	$options['show_post_meta'] = array(
		'type'    => 'power',
		'title'   => esc_html__( 'Show Post Meta', 'redbiz' ),
		'section' => 'blog',
		'default' => themesflat_customize_default('show_post_meta')
		);

	$options['hide_content'] = array(
		'type'    => 'power',
		'title'   => esc_html__( 'Hide Content', 'redbiz' ),
		'section' => 'blog',
		'default' => themesflat_customize_default('hide_content')
		);

	$options['blog_archive_exclude'] = array(
		'type'    => 'text',
		'title'   => esc_html__( 'Post IDs will be inorged. Ex: 1,2,3', 'redbiz' ),
		'section' => 'blog',
		'default' =>themesflat_customize_default('blog_archive_exclude')
		);

	$options['blog_posts_per_page'] = array(
		'type'     => 'spinner',
		'section'  => 'blog',
		'title'    => esc_html__( 'Posts Per Page', 'redbiz' ),
		'default'  => get_option( 'posts_per_page' )
		);

	$options['blog_archive_pagination_style'] = array(
		'type'    => 'select',
		'title'   => esc_html__( 'Pagination Style', 'redbiz' ),
		'section' => 'blog',
		'default' => themesflat_customize_default('blog_archive_pagination_style'),
		'choices' => array(
			'pager' =>  esc_html__( 'Pager', 'redbiz' ),
			'numeric' =>  esc_html__( 'Numeric', 'redbiz' ),
			'pager-numeric' =>  esc_html__( 'Pager & Numeric', 'redbiz' ),
			'loadmore' =>  esc_html__( 'Load More', 'redbiz' )
			)
		);
	
	themesflat_prepare_options($options);
	
	return $options;
}

function themesflat_get_children($ar){
	if (isset($ar['children'])){
	 return $ar['children'];
	}
}
function themesflat_prepare_options($options) {
	$flat_data = get_option('flatopts');
	$flatopts = array();
	if(!is_array($flat_data)) $flat_data = array();
	$children = array_map('themesflat_get_children', $options);
	$children = array_filter($children);
	foreach ($children as $key => $value) {
		if (is_array($value)) {
			foreach ($value as $_key => $_value) {
				$flatopts[$_value] = $key;
			}
		}
		else {
			$flatopts[$value] = $key;
		}
	}
	$flat_data = array_merge($flat_data,$flatopts);
	update_option('flatopts',$flat_data);
}