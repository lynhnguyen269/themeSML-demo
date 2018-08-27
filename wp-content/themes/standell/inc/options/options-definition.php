<?php

/**
 * Return the default options of the theme
 * 
 * @return  void
 */
function themesflat_customize_default($key) {
    $default = array(
        'logo_controls' => array('padding-top' => 0, 'padding-left' => 0),
        'footer_controls' => array('padding-top' => 50, 'padding-bottom' => 32),
        'bread_crumb_prefix' => '',
        'bottom_style' => 'bottom-center',
        'footer_background_image' => THEMESFLAT_LINK . 'assets/images/footer-bg.jpg',
        'breadcrumb_separator' => '/',
        'footer_widget_areas' => 4,
        'show_post_navigator' => 0,
        'breadcrumb_prefix' => '',
        'logo_width' => '',
        'logo_height' => '',
        'menu_location_primary' => 'primary',
        'site_logo' => THEMESFLAT_LINK . 'assets/images/logo.png',
        'site_retina_logo' => THEMESFLAT_LINK . 'assets/images/logo.png',
        'social_links' => array("facebook" => '#', "twitter" => '#', "instagram" => '#', "pinterest" => '#'),
        'page_title_overlay_color' => '',
        'page_title_text_color' => '#ffffff',
        'page_title_link_color' => '#ffffff',
        'page_title_overlay_opacity' => 0.11,
        'page_title_controls' => array('padding-top' => 111, 'padding-bottom' => 107, 'margin-bottom' => 90),
        'page_title_background_image' => THEMESFLAT_LINK . 'assets/images/page-title.jpg',
        'show_footer' => 0,
        'footer1' => 'footer-1',
        'footer2' => 'footer-2',
        'footer3' => 'footer-3',
        'footer4' => 'footer-4',
        'enable_social_link_top' => 0,
        'enable_social_link_footer' => 0,
        'logo_margin_left' => 0,
        'show_page_title' => 1,
        'show_page_title_heading' => 0,
        'top_background_color' => '#ffffff',
        'topbar_textcolor' => '#636363',
        'mainnav_backgroundcolor' => 'transparent',
        'mainnav_color' => '#ffffff',
        'mainnav_hover_color' => '#ffb922',
        'mainnav_hover_background' => 'rgba(242,194,26,0)',
        'sub_nav_color' => '#636363',
        'sub_nav_background' => '#ffb922',
        'border_color_sub_nav' => '#ffffff',
        'sub_nav_background_hover' => '#ffffff',
        'scheme_color' => '#ffb922',
        'body_text_color' => '#636363',
        'hover_body_color' => '#c2c2c2',
        'body_background_color' => '#ffffff',
        'body_font_name' => array(
            'family' => 'Rubik',
            'style' => 'regular',
            'size' => '14',
            'line_height' => '24'
        ),
        'header_style' => 'header-style1',
        'headings_font_name' => array(
            'family' => 'Rubik Medium',
            'style' => '400'
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
        'related_post_style' => 'blog-grid',
        'blog_sidebar_list' => 'blog-sidebar',
        'blog_archive_readmore' => 1,
        'blog_archive_post_excepts_length' => 57,
        'blog_archive_readmore_text' => 'Read Article',
        'blog_archive_pagination_style' => 'pager-numeric',
        'blog_posts_per_page' => 5,
        'blog_order_by' => 'date',
        'blog_order_direction' => 'DESC',
        'page_sidebar_list' => 'blog-sidebar',
        'menu_font_name' => array(
            'family' => 'Rubik',
            'style' => '500',
            'size' => '13',
            'line_height' => '28.8px',
        ),
        'show_readmore' => 1,
        'show_filter_portfolio' => 1,
        'portfolio_style' => 'grid',
        'grid_columns_portfolio' => 'one-three',
        'portfolio_exclude' => '',
        'portfolio_archive_pagination_style' => 'pager-numeric',
        'portfolio_grid_columns' => 'one-three',
        'portfolios_sidebar' => 'fullwidth',
        'portfolio_post_perpage' => 6,
        'portfolio_order_by' => 'date',
        'portfolio_order_direction' => 'DESC',
        'portfolio_category_order' => '',
        'portfolio_single_style' => 'left_content',
        'related_portfolio_style' => 'grid',
        'grid_columns_portfolio_related' => 'one-three',
        'number_related_portfolio' => 3,
        'show_related_portfolio' => 0,
        'images_clients' => '<a href="#"><img src="' . THEMESFLAT_LINK . 'assets/images/partner.png' . '" alt="image" /></a>
		<a href="#"><img src="' . THEMESFLAT_LINK . 'assets/images/partner.png' . '" alt="image" /></a>
		<a href="#"><img src="' . THEMESFLAT_LINK . 'assets/images/partner.png' . '" alt="image" /></a>
		<a href="#"><img src="' . THEMESFLAT_LINK . 'assets/images/partner.png' . '" alt="image" /></a>
		<a href="#"><img src="' . THEMESFLAT_LINK . 'assets/images/partner.png' . '" alt="image" /></a>
		<a href="#"><img src="' . THEMESFLAT_LINK . 'assets/images/partner.png' . '" alt="image" /></a>',
        'enable_custom_topbar' => 0,
        'enable_page_callout' => 0,
        'topbar_enabled' => 0,
        'header_sticky' => 0,
        'enable_login_cart' => 0,
        'header_searchbox' => 1,
        'enable_callback_header' => 0,
        'header-banner' => THEMESFLAT_LINK . 'assets/images/header-1.jpg',
        'header-banner-caption' => '',
        'footer_background_color' => '#0d0d0d',
        'footer_text_color' => '#c2c2c2',
        'footer_background_color_blocks' => '#333',
        'bottom__background_color' => '#00020d',
        'bottom_text_color' => '#c2c2c2',
        'show_bottom' => 1,
        'go_top' => 1,
        'layout_version' => 'wide',
        'footer__copyright' => '<p>© <a href="#">STANDELL</a> Construction & Building Business Theme 2018. All Right Reserved by Leonard_Design.</p>',
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
        'enable_smooth_scroll' => 0,
        'show_social_share' => 0,
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
        'key_google_api' => 'AIzaSyCOYt9j4gB6udRh420WRKttoGoN38pzI7w',
        'enable_preload' => 1,
        'portfolio_status' => 'Complete',
        'portfolio_client' => '',
        'portfolio_url' => '',
        'enable_slide_client' => 0,
        'enable_callback' => 0,
        'show_nav' => 0,
        'autoplay' => 0,
        'show_logo' => 6,
        'show_dot' => 0,
        'client_bg_color' => '#ffffff',
        'woo_products_per_page' => 6,
        'product_columns' => 'three-columns',
        'product_layout' => 'fullwidth',
        'woo_products_related_per_page' => 3,
        'woo_products_related_columns' => 'three-columns',
        'product_style' => 'product-style1',
        'show_post_meta' => 1,
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
        'title' => esc_html__('Portfolio', 'standell'),
        'description' => esc_html__('This is an special option, it allow to set Portfolio informations.', 'standell')
    );

    $options['gallery_portfolio'] = array(
        'type' => 'image-control',
        'section' => 'general',
        'title' => esc_html__('Images', 'standell'),
        'default' => ''
    );

    $options['status'] = array(
        'section' => 'general',
        'default' => '',
        'type' => 'text',
        'title' => esc_html__('Status Portfolio', 'standell')
    );

    $options['portfolio_client'] = array(
        'section' => 'general',
        'default' => '',
        'type' => 'text',
        'title' => esc_html__('Name Client Portfolio', 'standell')
    );

    $options['portfolio_url'] = array(
        'section' => 'general',
        'default' => '',
        'type' => 'text',
        'title' => esc_html__('Url Client Portfolio', 'standell')
    );

    themesflat_prepare_options($options);
    return $options;
}

function themesflat_testimonial_options_fields() {
    $options['cover_heading'] = array(
        'type' => 'heading',
        'section' => 'testimonial_details',
        'title' => esc_html__('Testimonial Details', 'standell'),
    );

    $options['testimonial_position'] = array(
        'type' => 'text',
        'section' => 'testimonial_details',
        'title' => esc_html__('Position', 'standell'),
        'default' => ''
    );

    $options['testimonial_rating'] = array(
        'type' => 'select',
        'section' => 'testimonial_details',
        'title' => esc_html__('Ratings', 'standell'),
        'default' => themesflat_get_opt('testimonial_rating'),
        'choices' => array(
            '5' => esc_html__('5 Stars', 'standell'),
            '4' => esc_html__('4 Stars', 'standell'),
            '3' => esc_html__('3 Stars', 'standell'),
            '2' => esc_html__('2 Stars', 'standell'),
            '1' => esc_html__('1 Stars', 'standell'),
            '0' => esc_html__('No Rating', 'standell')
        )
    );

    themesflat_prepare_options($options);
    return $options;
}

function themesflat_post_options_fields() {
    $options['blog_heading'] = array(
        'type' => 'heading',
        'section' => 'blog',
        'title' => esc_html__('Dear friends,', 'standell'),
        'description' => esc_html__('Option just view if post format is gallery or video! <br/>Thanks!', 'standell')
    );

    $options['gallery_images_heading'] = array(
        'type' => 'heading',
        'section' => 'blog',
        'title' => esc_html__('Post Format: Gallery .', 'standell'),
        'description' => esc_html__('', 'standell')
    );

    $options['gallery_images'] = array(
        'type' => 'image-control',
        'section' => 'blog',
        'title' => esc_html__('Images', 'standell'),
        'default' => ''
    );

    $options['video_url_heading'] = array(
        'type' => 'heading',
        'section' => 'blog',
        'title' => esc_html__('Post Format: Video ( Embeded video from youtube, vimeo ...).', 'standell'),
        'description' => esc_html__('', 'standell')
    );

    $options['video_url'] = array(
        'type' => 'textarea',
        'section' => 'blog',
        'title' => esc_html__('iframe video link', 'standell'),
        'default' => ''
    );
    themesflat_prepare_options($options);
    return $options;
}

function themesflat_blog_options_fields() {
    $options['position_field_heading'] = array(
        'type' => 'heading',
        'section' => 'events',
        'title' => esc_html__('Events', 'standell'),
        'description' => esc_html__('This is an special option, it allow to set Causes informations.', 'standell')
    );

    $options['position_field'] = array(
        'type' => 'text',
        'section' => 'events',
        'title' => esc_html__('Position', 'standell'),
        'default' => ''
    );

    $options['address'] = array(
        'type' => 'textarea',
        'section' => 'events',
        'title' => esc_html__('Address', 'standell'),
        'default' => ''
    );

    $options['event_time'] = array(
        'type' => 'datetime',
        'section' => 'events',
        'title' => esc_html__('Event date time', 'standell'),
        'default' => ''
    );

    $options['event_link'] = array(
        'type' => 'text',
        'section' => 'events',
        'title' => esc_html__('Link to join', 'standell'),
        'default' => ''
    );
    themesflat_prepare_options($options);
    return $options;
}

function themesflat_page_options_fields() {
    global $wp_registered_sidebars;

    $options = array();
    $sidebars = array();

    // Retrieve all registered sidebars
    foreach ($wp_registered_sidebars as $params)
        $sidebars[$params['id']] = $params['name'];

    /**
     * General
     */
    $options['layout_heading'] = array(
        'type' => 'heading',
        'section' => 'general',
        'title' => esc_html__('Layout', 'standell'),
        'description' => esc_html__('Choose between a full or a boxed layout to set how this page layout will look like.', 'standell')
    );

    $options['enable_custom_layout'] = array(
        'type' => 'power',
        'title' => esc_html__('Enable Custom Layout', 'standell'),
        'section' => 'general',
        'children' => array('layout_version', 'page_layout', 'sidebar_default', 'page_sidebar_list'),
        'default' => false
    );

    $options['layout_version'] = array(
        'type' => 'select',
        'title' => esc_html__('Display Style', 'standell'),
        'section' => 'general',
        'default' => 'wide',
        'choices' => array(
            'wide' => esc_html__('Wide', 'standell'),
            'boxed' => esc_html__('Boxed', 'standell')
        )
    );

    $options['page_layout'] = array(
        'type' => 'select',
        'title' => esc_html__('Sidebar Position', 'standell'),
        'section' => 'general',
        'default' => 'sidebar-right',
        'choices' => array(
            'fullwidth' => esc_html__('No Sidebar', 'standell'),
            'sidebar-left' => esc_html__('Sidebar Left', 'standell'),
            'sidebar-right' => esc_html__('Sidebar Right', 'standell')
        )
    );

    $options['page_sidebar_list'] = array(
        'type' => 'dropdown-sidebar',
        'title' => esc_html__('Custom Sidebar', 'standell'),
        'section' => 'general',
        'default' => 'sidebar-page'
    );

    $options['page_class_heading'] = array(
        'type' => 'heading',
        'section' => 'general',
        'title' => esc_html__('Custom Page Class', 'standell'),
    );

    $options['custom_page_class'] = array(
        'type' => 'text',
        'section' => 'general',
    );

    /**
     * Header
     */
    $options['topbar_heading'] = array(
        'type' => 'heading',
        'section' => 'header',
        'title' => esc_html__('Top Bar', 'standell'),
        'description' => esc_html__('Turn on/off the top bar and change it styles.', 'standell')
    );

    $options['enable_custom_topbar'] = array(
        'type' => 'power',
        'title' => esc_html__('Enable Custom Topbar', 'standell'),
        'section' => 'header',
        'children' => array('topbar_enabled', 'top_background_color', 'topbar_textcolor', 'top_content', 'enable_social_link_footer', 'show_addtocard_topbar'),
        'default' => false
    );

    $options['topbar_enabled'] = array(
        'type' => 'power',
        'title' => esc_html__('Display Topbar On This Page', 'standell'),
        'section' => 'header',
        'default' => themesflat_customize_default('topbar_enabled')
    );

    $options['enable_social_link_footer'] = array(
        'type' => 'power',
        'title' => esc_html__('Enable Social Links Topbar', 'standell'),
        'section' => 'header',
        'default' => themesflat_customize_default('enable_social_link_footer')
    );

    $options['top_background_color'] = array(
        'type' => 'color-picker',
        'title' => esc_html__('Topbar Background', 'standell'),
        'section' => 'header',
        'default' => themesflat_get_opt('top_background_color')
    );

    $options['topbar_textcolor'] = array(
        'type' => 'color-picker',
        'title' => esc_html__('Topbar Text Color', 'standell'),
        'section' => 'header',
        'default' => themesflat_get_opt('topbar_textcolor')
    );

    $options['top_content'] = array(
        'type' => 'textarea',
        'title' => esc_html__('Content Left Topbar', 'standell'),
        'section' => 'header',
        'default' => themesflat_get_opt('top_content')
    );

    $options['navigator_heading'] = array(
        'type' => 'heading',
        'section' => 'header',
        'title' => esc_html__('Navigator', 'standell'),
        'description' => esc_html__('Just select your menu that you wish assign it to the location on the theme.', 'standell')
    );

    $options['enable_custom_navigator'] = array(
        'type' => 'power',
        'section' => 'header',
        'title' => esc_html__('Enable Custom Navigator', 'standell'),
        'children' => array('mainnav_color', 'mainnav_backgroundcolor', 'menu_location_primary', 'mainnav_hover_background', 'mainnav_hover_color'),
        'default' => false
    );

    // Navigator
    $menus = wp_get_nav_menus();

    if ($menus) {
        $choices = array(0 => esc_html__('-- Select --', 'standell'));
        foreach ($menus as $menu) {
            $choices[$menu->term_id] = wp_html_excerpt($menu->name, 40, '&hellip;');
        }

        $options["menu_location_primary"] = array(
            'title' => esc_html__('Choose menu for page', 'standell'),
            'section' => 'header',
            'type' => 'select',
            'choices' => $choices,
            'default' => themesflat_customize_default('menu_location_primary')
        );
    }

    // Header CallBack
    $options['custom_heading'] = array(
        'type' => 'heading',
        'section' => 'header',
        'title' => esc_html__('Custum Header', 'standell'),
        'description' => esc_html__('You can show/hide the call back on the header.', 'standell')
    );

    $options['enable_custom_header'] = array(
        'type' => 'power',
        'title' => esc_html__('Enable Custom Header', 'standell'),
        'section' => 'header',
        'children' => array('callback_heading', 'enable_callback_header'),
        'default' => false
    );
    $options['callback_heading'] = array(
        'type' => 'heading',
        'section' => 'header',
        'title' => esc_html__('CallBack', 'standell'),
        'description' => esc_html__('Turn on/off the Callback and change it styles.', 'standell')
    );

    $options['enable_callback_header'] = array(
        'type' => 'power',
        'title' => esc_html__('Enable CallBack Header', 'standell'),
        'section' => 'header',
        'default' => themesflat_customize_default('enable_callback_header')
    );

    /**
     * Footer
     */
    $options['footer_widgets_heading'] = array(
        'type' => 'heading',
        'section' => 'footer',
        'title' => esc_html__('Footer Widgets', 'standell'),
        'description' => esc_html__('This section allow to change the layout and styles of footer widgets to match as you need.', 'standell')
    );

    $options['enable_custom_footer_widgets'] = array(
        'type' => 'power',
        'title' => esc_html__('Enable Custom Footer Widgets', 'standell'),
        'section' => 'footer',
        'children' => array('footer_background_color', 'footer_text_color', 'enable_social_link_footer', 'footer_widget_areas', 'footer1', 'footer2', 'footer3', 'footer4', 'footer_controls'),
        'default' => false
    );

    $options['enable_social_link_footer'] = array(
        'type' => 'power',
        'title' => esc_html__('Enable Social Links Footer', 'standell'),
        'section' => 'footer',
        'default' => themesflat_customize_default('enable_social_link_footer')
    );

    $options['footer_widget_areas'] = array(
        'type' => 'select',
        'title' => esc_html__('Footer Widget Layout', 'standell'),
        'section' => 'footer',
        'choices' => array(
            0 => esc_html('None', 'standell'),
            1 => esc_html('1 Columns', 'standell'),
            2 => esc_html('2 Columns', 'standell'),
            3 => esc_html('3 Columns', 'standell'),
            4 => esc_html('4 Columns', 'standell'),
            5 => esc_html('4 Columns Equals', 'standell'),
        ),
        'default' => themesflat_customize_default('footer_widget_areas')
    );

    $options['footer1'] = array(
        'type' => 'dropdown-sidebar',
        'title' => esc_html__('Footer Widget Area 1', 'standell'),
        'section' => 'footer',
        'default' => themesflat_customize_default('footer1')
    );

    $options['footer2'] = array(
        'type' => 'dropdown-sidebar',
        'title' => esc_html__('Footer Widget Area 2', 'standell'),
        'section' => 'footer',
        'default' => themesflat_customize_default('footer2')
    );

    $options['footer3'] = array(
        'type' => 'dropdown-sidebar',
        'title' => esc_html__('Footer Widget Area 3', 'standell'),
        'section' => 'footer',
        'default' => themesflat_customize_default('footer3')
    );

    $options['footer4'] = array(
        'type' => 'dropdown-sidebar',
        'title' => esc_html__('Footer Widget Area 4', 'standell'),
        'section' => 'footer',
        'default' => themesflat_customize_default('footer4')
    );

    $options['footer_heading'] = array(
        'type' => 'heading',
        'class' => 'no-border',
        'section' => 'footer',
        'title' => esc_html__('Custom Footer', 'standell'),
        'description' => esc_html__('You can change the copyright text, show/hide the social icons on the footer.', 'standell')
    );

    $options['enable_custom_footer'] = array(
        'type' => 'power',
        'title' => esc_html__('Enable Custom Footer Content', 'standell'),
        'section' => 'footer',
        'children' => array('bottom_text_color', 'show_bottom', 'enable_slide_client', 'enable_callback'),
        'default' => false
    );

    $options['enable_slide_client'] = array(
        'type' => 'power',
        'title' => esc_html__('Enable Slide Client', 'standell'),
        'section' => 'footer',
        'default' => themesflat_customize_default('enable_slide_client')
    );

    $options['enable_callback'] = array(
        'type' => 'power',
        'title' => esc_html__('Enable CallBack Footer', 'standell'),
        'section' => 'footer',
        'default' => themesflat_customize_default('enable_callback')
    );

    $options['show_bottom'] = array(
        'type' => 'power',
        'section' => 'footer',
        'title' => esc_html__('Show Bottom', 'standell'),
        'default' => themesflat_get_opt('show_bottom')
    );

    /**
     * Portfolio
     */
    $options['portfolio_list_heading'] = array(
        'type' => 'heading',
        'class' => 'no-border',
        'section' => 'portfolio',
        'title' => esc_html__('Portfolio', 'standell'),
        'description' => esc_html__('Change options in this section to custom style for portfolio listing page.', 'standell')
    );

    $options['enable_custom_portfolio'] = array(
        'type' => 'power',
        'title' => esc_html__('Enable Custom Portfolio layout', 'standell'),
        'section' => 'portfolio',
        'children' => array('portfolio_grid_columns', 'show_filter_portfolio', 'portfolio_archive_pagination_style', 'portfolio_post_perpage', 'portfolio_order_by', 'portfolio_order_direction', 'portfolio_pagination_style', 'portfolio_style', 'portfolio_exclude', 'show_pagination_portfolio', 'show_date_portfolio', 'show_readmore_portfolio', 'show_content_portfolio', 'portfolio_content_length', 'portfolio_category_order'),
        'default' => false
    );

    $options['portfolio_style'] = array(
        'type' => 'select',
        'title' => esc_html__('Portfolio Style', 'standell'),
        'section' => 'portfolio',
        'default' => 'grid',
        'choices' => array(
            'grid' => esc_html('Grid', 'standell'),
            'masonry' => esc_html('Masonry', 'standell'),
        )
    );

    $options['portfolio_grid_columns'] = array(
        'type' => 'select',
        'section' => 'portfolio',
        'title' => esc_html__('Grid Or Masonry', 'standell'),
        'default' => themesflat_get_opt('portfolio_grid_columns'),
        'choices' => array(
            'one-three' => esc_html('3 Columns', 'standell'),
            'one-four' => esc_html('4 Columns', 'standell'),
        )
    );

    $options['show_filter_portfolio'] = array(
        'type' => 'power',
        'section' => 'portfolio',
        'title' => esc_html__('Show Filter', 'standell'),
        'default' => themesflat_get_opt('show_filter_portfolio')
    );

    $options['show_date_portfolio'] = array(
        'type' => 'power',
        'section' => 'portfolio',
        'title' => esc_html__('Portfolio Show Date', 'standell'),
        'default' => themesflat_customize_default('show_date_portfolio')
    );

    $options['show_content_portfolio'] = array(
        'type' => 'power',
        'section' => 'portfolio',
        'title' => esc_html__('Portfolio Show Content', 'standell'),
        'default' => themesflat_customize_default('show_content_portfolio')
    );

    $options['portfolio_content_length'] = array(
        'type' => 'text',
        'section' => 'portfolio',
        'title' => esc_html__('Portfolio Content Length', 'standell'),
        'default' => themesflat_customize_default('portfolio_content_length')
    );

    $options['show_readmore_portfolio'] = array(
        'type' => 'power',
        'section' => 'portfolio',
        'title' => esc_html__('Portfolio Show Read More', 'standell'),
        'default' => themesflat_customize_default('show_readmore_portfolio')
    );

    $options['portfolio_category_order'] = array(
        'type' => 'text',
        'section' => 'portfolio',
        'title' => esc_html__('Portfolio categories order.EX:travel,aviation,business. Leave empty for auto load', 'standell'),
        'default' => themesflat_get_opt('portfolio_category_order')
    );

    $options['portfolio_exclude'] = array(
        'type' => 'text',
        'section' => 'portfolio',
        'title' => esc_html__('Not Show these portfolios by IDs EX:1,2,3', 'standell'),
        'default' => themesflat_get_opt('portfolio_exclude')
    );


    $options['portfolio_post_perpage'] = array(
        'type' => 'spinner',
        'section' => 'portfolio',
        'title' => esc_html__('Posts Per Page', 'standell'),
        'default' => themesflat_get_opt('portfolio_post_perpage')
    );

    $options['portfolio_archive_pagination_style'] = array(
        'type' => 'select',
        'title' => esc_html__('Pagination Style', 'standell'),
        'section' => 'portfolio',
        'default' => 'pager-numeric',
        'choices' => array(
            'pager-numeric' => esc_html__('Numeric', 'standell'),
            'loadmore' => esc_html__('Load More', 'standell')
        )
    );

    $options['portfolio_order_by'] = array(
        'type' => 'select',
        'section' => 'portfolio',
        'title' => esc_html__('Order By', 'standell'),
        'default' => 'date',
        'choices' => array(
            'date' => esc_html__('Date', 'standell'),
            'ID' => esc_html__('ID', 'standell'),
            'author' => esc_html__('Author', 'standell'),
            'title' => esc_html__('Title', 'standell'),
            'modified' => esc_html__('Modified', 'standell'),
            'rand' => esc_html__('Random', 'standell'),
            'comment_count' => esc_html__('Comment count', 'standell'),
            'menu_order' => esc_html__('Menu order', 'standell'),
        )
    );

    $options['portfolio_order_direction'] = array(
        'type' => 'select',
        'section' => 'portfolio',
        'title' => esc_html__('Order Direction', 'standell'),
        'default' => 'DESC',
        'choices' => array(
            'ASC' => esc_html__('Ascending', 'standell'),
            'DESC' => esc_html__('Descending', 'standell')
        )
    );



    /**
     * Blog Options
     */
    $options['blog_list_heading'] = array(
        'type' => 'heading',
        'class' => 'no-border',
        'section' => 'blog',
        'title' => esc_html__('Blog', 'standell'),
        'description' => esc_html__('All options in this section will be used to make style for blog page.', 'standell')
    );

    $options['enable_custom_blog'] = array(
        'type' => 'power',
        'title' => esc_html__('Enable Custom Blog layout', 'standell'),
        'section' => 'blog',
        'children' => array('blog_grid_columns', 'blog_archive_post_excepts', 'blog_archive_post_excepts_length', 'blog_archive_readmore', 'blog_archive_readmore_text', 'blog_posts_per_page', 'blog_order_by', 'blog_order_direction', 'blog_archive_pagination_style', 'blog_show_content', 'blog_archive_layout', 'blog_archive_exclude', 'hide_content', 'show_post_meta'),
        'default' => false
    );

    $options['blog_grid_columns'] = array(
        'type' => 'select',
        'section' => 'blog',
        'title' => esc_html__('Grid Columns', 'standell'),
        'default' => themesflat_customize_default('blog_grid_columns'),
        'choices' => array(
            3 => esc_html__('3 Columns', 'standell'),
            2 => esc_html__('2 Columns', 'standell'),
            4 => esc_html__('4 Columns', 'standell')
        )
    );

    $options['blog_archive_layout'] = array(
        'type' => 'select',
        'title' => esc_html__('Blog Layout', 'standell'),
        'section' => 'blog',
        'default' => themesflat_customize_default('blog_archive_layout'),
        'choices' => array(
            'blog-list-small' => esc_html('Blog List Small', 'standell'),
            'blog-list' => esc_html('Blog List', 'standell'),
            'blog-grid' => esc_html('Blog Grid', 'standell'),
            'blog-grid-style2' => esc_html('Blog Grid No Image', 'standell')
        )
    );

    $options['blog_archive_post_excepts_length'] = array(
        'type' => 'text',
        'title' => esc_html__('Post Excepts Length', 'standell'),
        'section' => 'blog',
        'default' => themesflat_customize_default('blog_archive_post_excepts_length')
    );

    $options['blog_archive_readmore'] = array(
        'type' => 'power',
        'title' => esc_html__('Show Read More', 'standell'),
        'section' => 'blog',
        'default' => true,
        'children' => array('blog_archive_readmore_text')
    );

    $options['blog_archive_readmore_text'] = array(
        'type' => 'text',
        'title' => esc_html__('Read More Text', 'standell'),
        'section' => 'blog',
        'default' => themesflat_customize_default('blog_archive_readmore_text')
    );

    $options['show_post_meta'] = array(
        'type' => 'power',
        'title' => esc_html__('Show Post Meta', 'standell'),
        'section' => 'blog',
        'default' => themesflat_customize_default('show_post_meta')
    );

    $options['hide_content'] = array(
        'type' => 'power',
        'title' => esc_html__('Hide Content', 'standell'),
        'section' => 'blog',
        'default' => themesflat_customize_default('hide_content')
    );

    $options['blog_archive_exclude'] = array(
        'type' => 'text',
        'title' => esc_html__('Post IDs will be inorged. Ex: 1,2,3', 'standell'),
        'section' => 'blog',
        'default' => themesflat_customize_default('blog_archive_exclude')
    );

    $options['blog_posts_per_page'] = array(
        'type' => 'spinner',
        'section' => 'blog',
        'title' => esc_html__('Posts Per Page', 'standell'),
        'default' => get_option('posts_per_page')
    );

    $options['blog_archive_pagination_style'] = array(
        'type' => 'select',
        'title' => esc_html__('Pagination Style', 'standell'),
        'section' => 'blog',
        'default' => themesflat_customize_default('blog_archive_pagination_style'),
        'choices' => array(
            'pager' => esc_html__('Pager', 'standell'),
            'numeric' => esc_html__('Numeric', 'standell'),
            'pager-numeric' => esc_html__('Pager & Numeric', 'standell'),
            'loadmore' => esc_html__('Load More', 'standell')
        )
    );

    themesflat_prepare_options($options);

    return $options;
}

function themesflat_get_children($ar) {
    if (isset($ar['children'])) {
        return $ar['children'];
    }
}

function themesflat_prepare_options($options) {
    $flat_data = get_option('flatopts');
    $flatopts = array();
    if (!is_array($flat_data))
        $flat_data = array();
    $children = array_map('themesflat_get_children', $options);
    $children = array_filter($children);
    foreach ($children as $key => $value) {
        if (is_array($value)) {
            foreach ($value as $_key => $_value) {
                $flatopts[$_value] = $key;
            }
        } else {
            $flatopts[$value] = $key;
        }
    }
    $flat_data = array_merge($flat_data, $flatopts);
    update_option('flatopts', $flat_data);
}
