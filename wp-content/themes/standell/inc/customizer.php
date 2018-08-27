<?php

/**
 * standell Theme Customizer
 *
 * @package standell
 */
function themesflat_customize_register($wp_customize) {
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    $wp_customize->get_section('header_image')->title = esc_html('Backgound PageTitle', 'standell');
    $wp_customize->get_section('header_image')->priority = '22';
    $wp_customize->get_section('title_tagline')->priority = '1';
    $wp_customize->get_section('title_tagline')->title = esc_html('General', 'standell');
    $wp_customize->get_section('colors')->title = esc_html('Layout Style', 'standell');
    $wp_customize->remove_control('display_header_text');
    $wp_customize->remove_control('header_textcolor');
    $wp_customize->remove_control('background_color');
    remove_theme_support('custom-header');

    //Heading
    class themesflat_Info extends WP_Customize_Control {

        public $type = 'heading';
        public $label = '';

        public function render_content() {
            ?>
            <h3 class="themesflat-title-control"><?php echo esc_html($this->label); ?></h3>
            <?php
        }

    }

    //Title
    class themesflat_Title_Info extends WP_Customize_Control {

        public $type = 'title';
        public $label = '';

        public function render_content() {
            ?>
            <h4><?php echo esc_html($this->label); ?></h4>
            <?php
        }

    }

    //Info
    class themesflat_Theme_Info extends WP_Customize_Control {

        public $type = 'info';
        public $label = '';

        public function render_content() {
            ?>
            <h3><?php echo esc_html($this->label); ?></h3>
            <?php
        }

    }

    //Desc
    class themesflat_Desc_Info extends WP_Customize_Control {

        public $type = 'desc';
        public $label = '';

        public function render_content() {
            ?>
            <p class="themesflat-desc-control"><?php echo esc_html($this->label); ?></p>
            <?php
        }

    }

    //___General___//
    $wp_customize->add_setting('themesflat_options[info]', array(
        'type' => 'info_control',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
            )
    );

    // Heading site infomation
    $wp_customize->add_control(new themesflat_Info($wp_customize, 'custom-stie-infomation', array(
        'label' => esc_html('SITE INFORMATION', 'standell'),
        'section' => 'title_tagline',
        'settings' => 'themesflat_options[info]',
        'priority' => 1
            ))
    );

    // Desc site infomaton
    $wp_customize->add_control(new themesflat_Desc_Info($wp_customize, 'desc_customizer_siteinfomation', array(
        'label' => esc_html('This section have basic information of your site, just change it to match with you need.', 'standell'),
        'section' => 'title_tagline',
        'settings' => 'themesflat_options[info]',
        'priority' => 2
            ))
    );

    // Enable Smooth Scroll
    $wp_customize->add_setting(
            'enable_smooth_scroll', array(
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => themesflat_customize_default('enable_smooth_scroll'),
            )
    );
    $wp_customize->add_control(new themesflat_Checkbox($wp_customize, 'enable_smooth_scroll', array(
        'type' => 'checkbox',
        'label' => esc_html('Enable Smooth Scroll', 'standell'),
        'section' => 'title_tagline',
        'priority' => 10,
            ))
    );

    // Enable Preload
    $wp_customize->add_setting(
            'enable_preload', array(
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => themesflat_customize_default('enable_preload'),
            )
    );
    $wp_customize->add_control(new themesflat_Checkbox($wp_customize, 'enable_preload', array(
        'type' => 'checkbox',
        'label' => esc_html('Enable Preload', 'standell'),
        'section' => 'title_tagline',
        'priority' => 10,
            ))
    );

    // Show Social Share
    $wp_customize->add_setting(
            'show_social_share', array(
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => themesflat_customize_default('show_social_share'),
            )
    );
    $wp_customize->add_control(new themesflat_Checkbox($wp_customize, 'show_social_share', array(
        'type' => 'checkbox',
        'label' => esc_html('Show Social Share', 'standell'),
        'section' => 'title_tagline',
        'priority' => 11,
            ))
    );

    // Comming Soon Time
    $wp_customize->add_setting(
            'comming_soon_time', array(
        'default' => themesflat_customize_default('comming_soon_time'),
        'sanitize_callback' => 'themesflat_sanitize_text',
            )
    );
    $wp_customize->add_control(
            'comming_soon_time', array(
        'label' => esc_html('Comming Soon Set Time', 'standell'),
        'section' => 'title_tagline',
        'type' => 'text',
        'description' => esc_html('Year/Month/Day', 'standell'),
        'priority' => 12
            )
    );

    // Google Font Api Key 
    $wp_customize->add_setting(
            'key_google_api', array(
        'default' => themesflat_customize_default('key_google_api'),
        'sanitize_callback' => 'themesflat_sanitize_text',
            )
    );
    $wp_customize->add_control(
            'key_google_api', array(
        'label' => esc_html('Google Font Api Key', 'standell'),
        'section' => 'title_tagline',
        'type' => 'text',
        'priority' => 12
            )
    );

    // Google Map Api Key 
    $wp_customize->add_setting(
            'key_google_map_api', array(
        'default' => '',
        'sanitize_callback' => 'themesflat_sanitize_text',
            )
    );
    $wp_customize->add_control(
            'key_google_map_api', array(
        'label' => esc_html('Google Map Api Key', 'standell'),
        'section' => 'title_tagline',
        'type' => 'text',
        'priority' => 12
            )
    );

    // Heading custom logo
    $wp_customize->add_control(new themesflat_Info($wp_customize, 'custom-site-info', array(
        'label' => esc_html('OUR PERTNER', 'standell'),
        'section' => 'title_tagline',
        'settings' => 'themesflat_options[info]',
        'priority' => 13
            ))
    );

    // Show Client
    $wp_customize->add_setting(
            'enable_slide_client', array(
        'default' => themesflat_customize_default('enable_slide_client'),
        'sanitize_callback' => 'themesflat_sanitize_text',
            )
    );

    $wp_customize->add_control(new themesflat_Checkbox($wp_customize, 'enable_slide_client', array(
        'type' => 'checkbox',
        'label' => esc_html('Enable Slide Out Pertner', 'standell'),
        'section' => 'title_tagline',
        'priority' => 14
            ))
    );

    // Image Client
    $wp_customize->add_setting(
            'images_clients', array(
        'default' => themesflat_customize_default('images_clients'),
        'sanitize_callback' => 'themesflat_sanitize_text'
            )
    );
    $wp_customize->add_control(
            'images_clients', array(
        'label' => esc_html('Image Out Pertner', 'standell'),
        'section' => 'title_tagline',
        'type' => 'textarea',
        'priority' => 15
            )
    );

    // Number Enable Logo
    $wp_customize->add_setting(
            'show_logo', array(
        'default' => themesflat_customize_default('show_logo'),
        'sanitize_callback' => 'themesflat_sanitize_text',
            )
    );

    $wp_customize->add_control(
            'show_logo', array(
        'label' => esc_html('Number Show Item', 'standell'),
        'section' => 'title_tagline',
        'type' => 'text',
        'priority' => 16
            )
    );

    // Top Content right
    $wp_customize->add_setting(
            'autoplay', array(
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => themesflat_customize_default('autoplay'),
            )
    );

    $wp_customize->add_control(new themesflat_Checkbox($wp_customize, 'autoplay', array(
        'type' => 'checkbox',
        'label' => esc_html('Autoplay', 'standell'),
        'section' => 'title_tagline',
        'priority' => 17
            ))
    );

    // Show Navigation
    $wp_customize->add_setting(
            'show_nav', array(
        'default' => themesflat_customize_default('show_nav'),
        'sanitize_callback' => 'themesflat_sanitize_text',
            )
    );

    $wp_customize->add_control(new themesflat_Checkbox($wp_customize, 'show_nav', array(
        'type' => 'checkbox',
        'label' => esc_html('Show Navigation', 'standell'),
        'section' => 'title_tagline',
        'priority' => 18
            ))
    );

    // Show Dots
    $wp_customize->add_setting(
            'show_dot', array(
        'default' => themesflat_customize_default('show_dot'),
        'sanitize_callback' => 'themesflat_sanitize_text',
            )
    );

    $wp_customize->add_control(new themesflat_Checkbox($wp_customize, 'show_dot', array(
        'type' => 'checkbox',
        'label' => esc_html('Show Dots', 'standell'),
        'section' => 'title_tagline',
        'priority' => 19
            ))
    );

    // Client background color    
    $wp_customize->add_setting(
            'client_bg_color', array(
        'default' => themesflat_customize_default('client_bg_color'),
        'sanitize_callback' => 'esc_attr',
            )
    );
    $wp_customize->add_control(new themesflat_ColorOverlay(
            $wp_customize, 'client_bg_color', array(
        'label' => esc_html__('Client Backgound', 'standell'),
        'description' => esc_html__(' Opacity =1 for Background Color', 'standell'),
        'section' => 'title_tagline',
        'priority' => 20
            )
            )
    );

    // Heading custom logo
    $wp_customize->add_control(new themesflat_Info($wp_customize, 'custom-page-template-default', array(
        'label' => esc_html('CUSTOM PAGE TEMPLATE DEFAULT', 'standell'),
        'section' => 'title_tagline',
        'settings' => 'themesflat_options[info]',
        'priority' => 21
            ))
    );

    // Show Header Content
    $wp_customize->add_setting(
            'show_header_title_content', array(
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => themesflat_customize_default('show_header_title_content'),
            )
    );
    $wp_customize->add_control(new themesflat_Checkbox($wp_customize, 'show_header_title_content', array(
        'type' => 'checkbox',
        'label' => esc_html('Show Heading Content Page Default', 'standell'),
        'section' => 'title_tagline',
        'priority' => 22
            ))
    );

    //Socials
    $wp_customize->add_section(
            'themesflat_socials', array(
        'title' => esc_html('Socials', 'standell'),
        'priority' => 2,
        'sanitize_callback' => 'themesflat_sanitize_text',
            )
    );

    //__social links__//
    $wp_customize->add_setting(
            'social_links', array(
        'sanitize_callback' => 'esc_attr',
        'default' => themesflat_customize_default('social_links'),
            )
    );

    $wp_customize->add_control(new themesflat_SocialIcons($wp_customize, 'social_links', array(
        'type' => 'social-icons',
        'label' => esc_html('Social', 'standell'),
        'section' => 'themesflat_socials',
        'priority' => 1,
            ))
    );

    //___Header___//
    $wp_customize->add_section(
            'themesflat_header', array(
        'title' => esc_html('Header', 'standell'),
        'priority' => 2,
            )
    );

    // Heading custom logo
    $wp_customize->add_control(new themesflat_Info($wp_customize, 'custom-logo', array(
        'label' => esc_html('Custom Logo', 'standell'),
        'section' => 'themesflat_header',
        'settings' => 'themesflat_options[info]',
        'priority' => 2
            ))
    );

    // Desc custon logo
    $wp_customize->add_control(new themesflat_Desc_Info($wp_customize, 'desc_customizer_logo', array(
        'label' => esc_html('In this section You can upload your own custom logo, change the way your logo can be displayed', 'standell'),
        'section' => 'themesflat_header',
        'settings' => 'themesflat_options[info]',
        'priority' => 3
            ))
    );

    //Logo
    $wp_customize->add_setting(
            'site_logo', array(
        'default' => themesflat_customize_default('site_logo'),
        'sanitize_callback' => 'esc_url_raw',
            )
    );
    $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'site_logo', array(
        'label' => esc_html('Upload your logo ', 'standell'),
        'description' => esc_html('The best size is 190x51px ( If you don\'t display logo please remove it your website display 
                Site Title default in General )', 'standell'),
        'type' => 'image',
        'section' => 'themesflat_header',
        'priority' => 5,
            )
            )
    );

    // Logo Retina
    $wp_customize->add_setting(
            'site_retina_logo', array(
        'default' => themesflat_customize_default('site_retina_logo'),
        'sanitize_callback' => 'esc_url_raw',
            )
    );
    $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'site_retina_logo', array(
        'label' => esc_html('Upload your logo retina', 'standell'),
        'description' => esc_html('The best size is 372x90px', 'standell'),
        'type' => 'image',
        'section' => 'themesflat_header',
        'priority' => 6,
            )
            )
    );

    // Logo Size
    $wp_customize->add_control(new themesflat_Title_Info($wp_customize, 'logo-size', array(
        'label' => esc_html('Logo Size', 'standell'),
        'section' => 'themesflat_header',
        'settings' => 'themesflat_options[info]',
        'priority' => 7
            ))
    );

    // Width
    $wp_customize->add_setting(
            'logo_width', array(
        'default' => themesflat_customize_default('logo_width'),
        'sanitize_callback' => 'themesflat_sanitize_text',
            )
    );
    $wp_customize->add_control(
            'logo_width', array(
        'label' => esc_html('Width (px)', 'standell'),
        'section' => 'themesflat_header',
        'type' => 'text',
        'priority' => 9
            )
    );

    // Height
    $wp_customize->add_setting(
            'logo_height', array(
        'default' => themesflat_customize_default('logo_height'),
        'sanitize_callback' => 'themesflat_sanitize_text',
            )
    );
    $wp_customize->add_control(
            'logo_height', array(
        'label' => esc_html('Height (px)', 'standell'),
        'section' => 'themesflat_header',
        'type' => 'text',
        'priority' => 9
            )
    );

    // Box control
    $wp_customize->add_setting(
            'logo_controls', array(
        'default' => themesflat_customize_default('logo_controls'),
        'sanitize_callback' => 'themesflat_sanitize_text',
            )
    );
    $wp_customize->add_control(new themesflat_BoxControls($wp_customize, 'logo_controls', array(
        'label' => esc_html('Logo Box Controls (px)', 'standell'),
        'section' => 'themesflat_header',
        'type' => 'box-controls',
        'priority' => 10
            ))
    );

    // Show search 
    $wp_customize->add_setting(
            'header_searchbox', array(
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => themesflat_customize_default('header_searchbox'),
            )
    );
    $wp_customize->add_control(new themesflat_Checkbox($wp_customize, 'header_searchbox', array(
        'type' => 'checkbox',
        'label' => esc_html('Show Search Header', 'standell'),
        'section' => 'themesflat_header',
        'priority' => 16,
            ))
    );

    // Header Sticky
    $wp_customize->add_setting(
            'header_sticky', array(
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => themesflat_customize_default('header_sticky'),
            )
    );
    $wp_customize->add_control(new themesflat_Checkbox($wp_customize, 'header_sticky', array(
        'type' => 'checkbox',
        'label' => esc_html('Enable Sticky Header', 'standell'),
        'section' => 'themesflat_header',
        'priority' => 17,
            ))
    );

    // Enable Icon Login Shop Cart
    $wp_customize->add_setting(
            'enable_login_cart', array(
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => themesflat_customize_default('enable_login_cart'),
            )
    );
    $wp_customize->add_control(new themesflat_Checkbox($wp_customize, 'enable_login_cart', array(
        'type' => 'checkbox',
        'label' => esc_html('Enable Icon Login Shop Cart', 'standell'),
        'section' => 'themesflat_header',
        'priority' => 18,
            ))
    );

    // Heading Top Bar 
    $wp_customize->add_control(new themesflat_Info($wp_customize, 'top-bar', array(
        'label' => esc_html('Top Bar', 'standell'),
        'section' => 'themesflat_header',
        'settings' => 'themesflat_options[info]',
        'priority' => 19
            ))
    );

    // Desc Top Bar 
    $wp_customize->add_control(new themesflat_Desc_Info($wp_customize, 'desc', array(
        'label' => esc_html('Turn on/off the top bar and change it styles', 'standell'),
        'section' => 'themesflat_header',
        'settings' => 'themesflat_options[info]',
        'priority' => 20
            ))
    );

    // Top bar
    $wp_customize->add_setting(
            'topbar_enabled', array(
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => themesflat_customize_default('topbar_enabled'),
            )
    );
    $wp_customize->add_control(new themesflat_Checkbox($wp_customize, 'topbar_enabled', array(
        'type' => 'checkbox',
        'label' => esc_html('Enable Topbar', 'standell'),
        'section' => 'themesflat_header',
        'priority' => 21,
            ))
    );

    // Enable Socials Top
    $wp_customize->add_setting(
            'enable_social_link_top', array(
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => themesflat_customize_default('enable_social_link_top'),
            )
    );
    $wp_customize->add_control(new themesflat_Checkbox($wp_customize, 'enable_social_link_top', array(
        'type' => 'checkbox',
        'label' => esc_html('Enable Socials Top', 'standell'),
        'section' => 'themesflat_header',
        'priority' => 22,
            ))
    );

    // Top Content
    $wp_customize->add_setting(
            'top_content', array(
        'default' => themesflat_customize_default('top_content'),
        'sanitize_callback' => 'themesflat_sanitize_text'
            )
    );
    $wp_customize->add_control(
            'top_content', array(
        'label' => esc_html('Content Left', 'standell'),
        'section' => 'themesflat_header',
        'type' => 'textarea',
        'priority' => 26
            )
    );

    // Heading Top Bar 
    $wp_customize->add_control(new themesflat_Info($wp_customize, 'header-menu-banner', array(
        'label' => esc_html('Header', 'standell'),
        'section' => 'themesflat_header',
        'settings' => 'themesflat_options[info]',
        'priority' => 27
            ))
    );

    // Header Banner
    $wp_customize->add_setting(
            'header-banner', array(
        'default' => themesflat_customize_default('header-banner'),
        'sanitize_callback' => 'esc_url_raw',
            )
    );
    $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'header-banner', array(
        'label' => esc_html('Upload header banner ', 'standell'),
        'description' => esc_html('The best size is 1920x850px ( If you don\'t display logo please remove it your website display background mainnav color )', 'standell'),
        'type' => 'image',
        'section' => 'themesflat_header',
        'priority' => 29,
            )
            )
    );

    // Caption Banner
    $wp_customize->add_setting(
            'header-banner-caption', array(
        'default' => themesflat_customize_default('header-banner-caption'),
        'sanitize_callback' => 'themesflat_sanitize_text',
            )
    );
    $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'header-banner-caption', array(
        'label' => esc_html('Caption Banner Slider', 'standell'),
        'description' => esc_html('Place the shortcode of Slider Revolution', 'standell'),
        'section' => 'themesflat_header',
        'type' => 'text',
        'priority' => 30
            )
            )
    );
    
    // Header CallOut
    $wp_customize->add_control(new themesflat_Info($wp_customize, 'header-callout', array(
        'label' => esc_html('PAGE CALL OUT', 'standell'),
        'section' => 'themesflat_header',
        'settings' => 'themesflat_options[info]',
        'priority' => 31
            ))
    );

    // Header Text Page CallOut
    $wp_customize->add_setting(
            'header_text_call_back', array(
        'default' => themesflat_customize_default('header_text_call_back'),
        'sanitize_callback' => 'themesflat_sanitize_text'
            )
    );
    $wp_customize->add_control(
            'header_text_call_back', array(
        'label' => esc_html('Text Page Call Out', 'standell'),
        'section' => 'themesflat_header',
        'type' => 'textarea',
        'priority' => 31
            )
    );

    $wp_customize->add_setting(
            'header_text_button_call_back', array(
        'default' => themesflat_customize_default('header_text_button_call_back'),
        'sanitize_callback' => 'themesflat_sanitize_text'
            )
    );
    $wp_customize->add_control(
            'header_text_button_call_back', array(
        'label' => esc_html('Text Button Call Out', 'standell'),
        'section' => 'themesflat_header',
        'type' => 'text',
        'priority' => 31
            )
    );

    $wp_customize->add_setting(
            'header_link_button_call_back', array(
        'default' => themesflat_customize_default('header_link_button_call_back'),
        'sanitize_callback' => 'themesflat_sanitize_text'
            )
    );
    $wp_customize->add_control(
            'header_link_button_call_back', array(
        'label' => esc_html('Link Button Call Out', 'standell'),
        'section' => 'themesflat_header',
        'type' => 'text',
        'priority' => 31
            )
    );

    // Header Call Back background color
    $wp_customize->add_setting(
            'header_call_back_bg_color', array(
        'default' => themesflat_customize_default('header_call_back_bg_color'),
        'sanitize_callback' => 'esc_attr',
            )
    );
    $wp_customize->add_control(
            new themesflat_ColorOverlay(
            $wp_customize, 'header_call_back_bg_color', array(
        'label' => esc_html('Call Back Backgound Color', 'standell'),
        'description' => esc_html__(' Opacity =1 for Background Color', 'standell'),
        'section' => 'themesflat_header',
        'settings' => 'header_call_back_bg_color',
        'priority' => 32
            )
            )
    );


    //___Footer___//
    $wp_customize->add_section(
            'flat_footer', array(
        'title' => esc_html('Footer', 'standell'),
        'priority' => 4,
            )
    );

    $wp_customize->remove_control('display_header_text');
    $wp_customize->remove_control('header_textcolor');
    
    // Footer title
    $wp_customize->add_control(new themesflat_Info($wp_customize, 'custom-footer-callout', array(
        'label' => esc_html('PAGE CALL OUT', 'standell'),
        'section' => 'flat_footer',
        'settings' => 'themesflat_options[info]',
        'priority' => 5
            ))
    );

    // Text Page CallOut
    $wp_customize->add_setting(
            'text_call_back', array(
        'default' => themesflat_customize_default('text_call_back'),
        'sanitize_callback' => 'themesflat_sanitize_text'
            )
    );
    $wp_customize->add_control(
            'text_call_back', array(
        'label' => esc_html('Text Page Call Out', 'standell'),
        'section' => 'flat_footer',
        'type' => 'textarea',
        'priority' => 5
            )
    );

    $wp_customize->add_setting(
            'text_button_call_out', array(
        'default' => themesflat_customize_default('text_button_call_out'),
        'sanitize_callback' => 'themesflat_sanitize_text'
            )
    );
    $wp_customize->add_control(
            'text_button_call_out', array(
        'label' => esc_html('Text Button Call Out', 'standell'),
        'section' => 'flat_footer',
        'type' => 'text',
        'priority' => 5
            )
    );

    $wp_customize->add_setting(
            'link_button_call_out', array(
        'default' => themesflat_customize_default('link_button_call_out'),
        'sanitize_callback' => 'themesflat_sanitize_text'
            )
    );
    $wp_customize->add_control(
            'link_button_call_out', array(
        'label' => esc_html('Link Button Call Out', 'standell'),
        'section' => 'flat_footer',
        'type' => 'text',
        'priority' => 5
            )
    );

    // Top bar background color
    $wp_customize->add_setting(
            'call_back_bg_color', array(
        'default' => themesflat_customize_default('call_back_bg_color'),
        'sanitize_callback' => 'esc_attr',
            )
    );
    $wp_customize->add_control(
            new themesflat_ColorOverlay(
            $wp_customize, 'call_back_bg_color', array(
        'label' => esc_html('Call Back Backgound Color', 'standell'),
        'description' => esc_html__(' Opacity =1 for Background Color', 'standell'),
        'section' => 'flat_footer',
        'settings' => 'call_back_bg_color',
        'priority' => 6
            )
            )
    );

    // Footer widget
    $wp_customize->add_control(new themesflat_Info($wp_customize, 'custom-widget-footer', array(
        'label' => esc_html('footer widgets', 'standell'),
        'section' => 'flat_footer',
        'settings' => 'themesflat_options[info]',
        'priority' => 9
            ))
    );

    // Desc
    $wp_customize->add_control(new themesflat_Desc_Info($wp_customize, 'desc_customizer_widget_footer', array(
        'label' => esc_html('This section allow to change the layout and styles of footer widgets to match as you need', 'standell'),
        'section' => 'flat_footer',
        'settings' => 'themesflat_options[info]',
        'priority' => 10
            ))
    );

    // Gird columns Related Posts
    $wp_customize->add_setting(
            'footer_widget_areas', array(
        'default' => themesflat_customize_default('footer_widget_areas'),
        'sanitize_callback' => 'themesflat_sanitize_grid_post_related',
            )
    );

    $wp_customize->add_control(
            'footer_widget_areas', array(
        'type' => 'select',
        'section' => 'flat_footer',
        'priority' => 11,
        'label' => esc_html('Columns  Footer', 'standell'),
        'choices' => array(
            1 => esc_html('1 Columns', 'standell'),
            2 => esc_html('2 Columns', 'standell'),
            3 => esc_html('3 Columns', 'standell'),
            4 => esc_html('4 Columns', 'standell'),
            5 => esc_html('5 Columns', 'standell'),
        )
            )
    );

    // Footer title
    $wp_customize->add_control(new themesflat_Info($wp_customize, 'custom-footer-content', array(
        'label' => esc_html('CUSTOM FOOTER', 'standell'),
        'section' => 'flat_footer',
        'settings' => 'themesflat_options[info]',
        'priority' => 12
            ))
    );

    // Desc
    $wp_customize->add_control(new themesflat_Desc_Info($wp_customize, 'desc_customizer_footer', array(
        'label' => esc_html('You can change the copyright text, show/hide the social icons on the footer.', 'standell'),
        'section' => 'flat_footer',
        'settings' => 'themesflat_options[info]',
        'priority' => 13
            ))
    );

    // Show Footer
    $wp_customize->add_setting(
            'show_footer', array(
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => themesflat_customize_default('show_footer'),
            )
    );

    $wp_customize->add_control(new themesflat_Checkbox($wp_customize, 'show_footer', array(
        'type' => 'checkbox',
        'label' => esc_html('Show Footer', 'standell'),
        'section' => 'flat_footer',
        'priority' => 14
            ))
    );

    // Box control
    $wp_customize->add_setting(
            'footer_controls', array(
        'default' => themesflat_customize_default('footer_controls'),
        'sanitize_callback' => 'themesflat_sanitize_text',
            )
    );
    $wp_customize->add_control(new themesflat_BoxControls($wp_customize, 'footer_controls', array(
        'label' => esc_html('Footer Controls (px)', 'standell'),
        'section' => 'flat_footer',
        'type' => 'box-controls',
        'priority' => 15
            ))
    );

    // Show Bottom
    $wp_customize->add_setting(
            'show_bottom', array(
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => themesflat_customize_default('show_bottom'),
            )
    );
    $wp_customize->add_control(new themesflat_Checkbox($wp_customize, 'show_bottom', array(
        'type' => 'checkbox',
        'label' => esc_html('Show Bottom', 'standell'),
        'section' => 'flat_footer',
        'priority' => 16
            ))
    );

    // Footer Content
    $wp_customize->add_setting(
            'footer__copyright', array(
        'default' => themesflat_customize_default('footer__copyright'),
        'sanitize_callback' => 'themesflat_sanitize_text',
            )
    );
    $wp_customize->add_control(
            'footer__copyright', array(
        'label' => esc_html('Copyright', 'standell'),
        'section' => 'flat_footer',
        'type' => 'textarea',
        'priority' => 17
            )
    );

    // Enable Socials Top
    $wp_customize->add_setting(
            'enable_social_link_footer', array(
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => themesflat_customize_default('enable_social_link_footer'),
            )
    );
    $wp_customize->add_control(new themesflat_Checkbox($wp_customize, 'enable_social_link_footer', array(
        'type' => 'checkbox',
        'label' => esc_html('Enable Socials footer', 'standell'),
        'section' => 'flat_footer',
        'priority' => 18,
            ))
    );



    //__Color__//
    $wp_customize->add_panel('color_panel', array(
        'title' => 'Color',
        'description' => 'This is panel Description',
        'priority' => 10,
    ));

    // ADD SECTION GENERAL
    $wp_customize->add_section('color_general', array(
        'title' => 'General',
        'priority' => 10,
        'panel' => 'color_panel',
    ));

    // Heading Color Scheme
    $wp_customize->add_control(new themesflat_Info($wp_customize, 'color_scheme', array(
        'label' => esc_html('SCHEME COLOR', 'standell'),
        'section' => 'color_general',
        'settings' => 'themesflat_options[info]',
        'priority' => 1
            ))
    );

    // Desc color scheme
    $wp_customize->add_control(new themesflat_Desc_Info($wp_customize, 'desc_color_schemer', array(
        'label' => esc_html('Select the color that will be used for theme color.', 'standell'),
        'section' => 'color_general',
        'settings' => 'themesflat_options[info]',
        'priority' => 2
            ))
    );

    $wp_customize->add_setting(
            'scheme_color', array(
        'default' => themesflat_customize_default('scheme_color'),
        'sanitize_callback' => 'sanitize_hex_color',
            )
    );
    $wp_customize->add_control(
            new WP_Customize_Color_Control(
            $wp_customize, 'scheme_color', array(
        'label' => esc_html('Scheme color', 'standell'),
        'section' => 'color_general',
        'settings' => 'scheme_color',
        'priority' => 3
            )
            )
    );

    // Body Color
    $wp_customize->add_setting(
            'body_text_color', array(
        'default' => themesflat_customize_default('body_text_color'),
        'sanitize_callback' => 'sanitize_hex_color',
            )
    );
    $wp_customize->add_control(
            new WP_Customize_Color_Control(
            $wp_customize, 'body_text_color', array(
        'label' => esc_html('Body Color', 'standell'),
        'section' => 'color_general',
        'settings' => 'body_text_color',
        'priority' => 4
            )
            )
    );

    // Hover Body Color
    $wp_customize->add_setting(
            'hover_body_color', array(
        'default' => themesflat_customize_default('hover_body_color'),
        'sanitize_callback' => 'sanitize_hex_color',
            )
    );
    $wp_customize->add_control(
            new WP_Customize_Color_Control(
            $wp_customize, 'hover_body_color', array(
        'label' => esc_html('Hover, Focus, Active Body Color', 'standell'),
        'section' => 'color_general',
        'settings' => 'hover_body_color',
        'priority' => 5
            )
            )
    );

    // ADD SECTION HEADER COLOR
    $wp_customize->add_section('color_header', array(
        'title' => 'Header',
        'priority' => 11,
        'panel' => 'color_panel',
    ));

    // Title section portfolio
    $wp_customize->add_setting('themesflat_options[info]', array(
        'type' => 'info_control',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
            )
    );
    $wp_customize->add_control(new themesflat_Info($wp_customize, 'topbar_color', array(
        'label' => esc_html('Top Color', 'standell'),
        'section' => 'color_header',
        'settings' => 'themesflat_options[info]',
        'priority' => 1
            ))
    );

    // ADD SECTION HEADER COLOR
    $wp_customize->add_section('color_header', array(
        'title' => 'Header',
        'priority' => 11,
        'panel' => 'color_panel',
    ));

    // Title section portfolio
    $wp_customize->add_setting('themesflat_options[info]', array(
        'type' => 'info_control',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
            )
    );
    $wp_customize->add_control(new themesflat_Info($wp_customize, 'topbar_color', array(
        'label' => esc_html('Top Color', 'standell'),
        'section' => 'color_header',
        'settings' => 'themesflat_options[info]',
        'priority' => 1
            ))
    );

    // Top bar background color
    $wp_customize->add_setting(
            'top_background_color', array(
        'default' => themesflat_customize_default('top_background_color'),
        'sanitize_callback' => 'esc_attr',
            )
    );
    $wp_customize->add_control(
            new themesflat_ColorOverlay(
            $wp_customize, 'top_background_color', array(
        'label' => esc_html('Topbar Backgound', 'standell'),
        'description' => esc_html__(' Opacity =1 for Background Color', 'standell'),
        'section' => 'color_header',
        'settings' => 'top_background_color',
        'priority' => 2
            )
            )
    );

    // Top bar text color
    $wp_customize->add_setting(
            'topbar_textcolor', array(
        'default' => themesflat_customize_default('topbar_textcolor'),
        'sanitize_callback' => 'sanitize_hex_color',
            )
    );
    $wp_customize->add_control(
            new WP_Customize_Color_Control(
            $wp_customize, 'topbar_textcolor', array(
        'label' => esc_html('Topbar Text Color', 'standell'),
        'section' => 'color_header',
        'settings' => 'topbar_textcolor',
        'priority' => 3
            )
            )
    );

    // MENU COLOR
    $wp_customize->add_control(new themesflat_Info($wp_customize, 'menu_color', array(
        'label' => esc_html('MENU COLOR', 'standell'),
        'section' => 'color_header',
        'settings' => 'themesflat_options[info]',
        'priority' => 3
            ))
    );

    // Desc
    $wp_customize->add_control(new themesflat_Desc_Info($wp_customize, 'desc_menu_color', array(
        'label' => esc_html('Select color for background menu, background submenu color menu a, color menu a:hover, background menu a:hover...', 'standell'),
        'section' => 'color_header',
        'settings' => 'themesflat_options[info]',
        'priority' => 4
            ))
    );

    // Menu Background
    $wp_customize->add_setting(
            'mainnav_backgroundcolor', array(
        'default' => themesflat_customize_default('mainnav_backgroundcolor'),
        'sanitize_callback' => 'esc_attr',
            )
    );
    $wp_customize->add_control(new themesflat_ColorOverlay(
            $wp_customize, 'mainnav_backgroundcolor', array(
        'label' => esc_html__('Mainnav Background', 'standell'),
        'description' => esc_html__(' Opacity =1 for Background Color', 'standell'),
        'section' => 'color_header',
        'priority' => 5
            )
            )
    );

    // Menu a color
    $wp_customize->add_setting(
            'mainnav_color', array(
        'default' => themesflat_customize_default('mainnav_color'),
        'sanitize_callback' => 'sanitize_hex_color'
            )
    );
    $wp_customize->add_control(
            new WP_Customize_Color_Control(
            $wp_customize, 'mainnav_color', array(
        'label' => esc_html('Mainnav a color', 'standell'),
        'section' => 'color_header',
        'priority' => 6
            )
            )
    );

    // Menu Hover Background color
    $wp_customize->add_setting(
            'mainnav_hover_background', array(
        'default' => themesflat_customize_default('mainnav_hover_background'),
        'sanitize_callback' => 'sanitize_hex_color'
            )
    );
    $wp_customize->add_control(
            new themesflat_ColorOverlay(
            $wp_customize, 'mainnav_hover_background', array(
        'label' => esc_html('Mainnav Hover Background', 'standell'),
        'section' => 'color_header',
        'priority' => 6
            )
            )
    );

    // Menu a:hover color
    $wp_customize->add_setting(
            'mainnav_hover_color', array(
        'default' => themesflat_customize_default('mainnav_hover_color'),
        'sanitize_callback' => 'sanitize_hex_color'
            )
    );
    $wp_customize->add_control(
            new WP_Customize_Color_Control(
            $wp_customize, 'mainnav_hover_color', array(
        'label' => esc_html('Mainnav a:hover color', 'standell'),
        'section' => 'color_header',
        'priority' => 7
            )
            )
    );

    // Sub menu a color
    $wp_customize->add_setting(
            'sub_nav_color', array(
        'default' => themesflat_customize_default('sub_nav_color'),
        'sanitize_callback' => 'sanitize_hex_color'
            )
    );
    $wp_customize->add_control(
            new WP_Customize_Color_Control(
            $wp_customize, 'sub_nav_color', array(
        'label' => esc_html('Sub nav a color', 'standell'),
        'section' => 'color_header',
        'priority' => 8
            )
            )
    );

    // Sub nav background
    $wp_customize->add_setting(
            'sub_nav_background', array(
        'default' => themesflat_customize_default('sub_nav_background'),
        'sanitize_callback' => 'sanitize_hex_color',
            )
    );
    $wp_customize->add_control(
            new WP_Customize_Color_Control(
            $wp_customize, 'sub_nav_background', array(
        'label' => esc_html('Sub nav background color', 'standell'),
        'section' => 'color_header',
        'priority' => 9
            )
            )
    );

    // Border color li sub nav
    $wp_customize->add_setting(
            'border_color_sub_nav', array(
        'default' => themesflat_customize_default('border_color_sub_nav'),
        'sanitize_callback' => 'sanitize_hex_color',
            )
    );
    $wp_customize->add_control(
            new WP_Customize_Color_Control(
            $wp_customize, 'border_color_sub_nav', array(
        'label' => esc_html('Border color sub nav', 'standell'),
        'section' => 'color_header',
        'priority' => 10
            )
            )
    );

    // Sub nav background hover
    $wp_customize->add_setting(
            'sub_nav_background_hover', array(
        'default' => themesflat_customize_default('sub_nav_background_hover'),
        'sanitize_callback' => 'sanitize_hex_color',
            )
    );
    $wp_customize->add_control(
            new WP_Customize_Color_Control(
            $wp_customize, 'sub_nav_background_hover', array(
        'label' => esc_html('Sub-menu color hover', 'standell'),
        'section' => 'color_header',
        'priority' => 11
            )
            )
    );

    // ADD SECTION COLOR FOOTER
    $wp_customize->add_section('color_footer', array(
        'title' => 'Footer',
        'priority' => 12,
        'panel' => 'color_panel',
    ));

    //Page Title Background
    $wp_customize->add_setting(
            'footer_background_image', array(
        'default' => themesflat_customize_default('footer_background_image'),
        'sanitize_callback' => 'esc_url_raw',
            )
    );
    $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'footer_background_image', array(
        'label' => esc_html('Upload your image footer backgound', 'standell'),
        'type' => 'image',
        'section' => 'color_footer',
        'priority' => 11,
            )
            )
    );

    // Footer background color    
    $wp_customize->add_setting(
            'footer_background_color', array(
        'default' => themesflat_customize_default('footer_background_color'),
        'sanitize_callback' => 'esc_attr',
            )
    );
    $wp_customize->add_control(new themesflat_ColorOverlay(
            $wp_customize, 'footer_background_color', array(
        'label' => esc_html__('Footer Backgound', 'standell'),
        'description' => esc_html__(' Opacity =1 for Background Color', 'standell'),
        'section' => 'color_footer',
        'priority' => 12
            )
            )
    );

    // Footer text color
    $wp_customize->add_setting(
            'footer_text_color', array(
        'default' => themesflat_customize_default('footer_text_color'),
        'sanitize_callback' => 'sanitize_hex_color',
            )
    );
    $wp_customize->add_control(
            new WP_Customize_Color_Control(
            $wp_customize, 'footer_text_color', array(
        'label' => esc_html('Footer Text Color', 'standell'),
        'section' => 'color_footer',
        'settings' => 'footer_text_color',
        'priority' => 13
            )
            )
    );

    // Footer text color
    $wp_customize->add_setting(
            'footer_background_color_blocks', array(
        'default' => themesflat_customize_default('footer_background_color_blocks'),
        'sanitize_callback' => 'sanitize_hex_color',
            )
    );
    $wp_customize->add_control(
            new WP_Customize_Color_Control(
            $wp_customize, 'footer_background_color_blocks', array(
        'label' => esc_html('Footer Background Color Blocks', 'standell'),
        'section' => 'color_footer',
        'settings' => 'footer_background_color_blocks',
        'priority' => 14
            )
            )
    );

    // bottom background color
    $wp_customize->add_setting(
            'bottom__background_color', array(
        'default' => themesflat_customize_default('bottom__background_color'),
        'sanitize_callback' => 'esc_attr',
            )
    );
    $wp_customize->add_control(
            new themesflat_ColorOverlay(
            $wp_customize, 'bottom__background_color', array(
        'label' => esc_html('Bottom Backgound', 'standell'),
        'description' => esc_html__(' Opacity =1 for Background Color', 'standell'),
        'section' => 'color_footer',
        'priority' => 18
            )
            )
    );

    // Bottom text color
    $wp_customize->add_setting(
            'bottom_text_color', array(
        'default' => themesflat_customize_default('bottom_text_color'),
        'sanitize_callback' => 'sanitize_hex_color',
            )
    );
    $wp_customize->add_control(
            new WP_Customize_Color_Control(
            $wp_customize, 'bottom_text_color', array(
        'label' => esc_html('Bottom Text Color', 'standell'),
        'section' => 'color_footer',
        'settings' => 'bottom_text_color',
        'priority' => 19
            )
            )
    );

    //___Footer___//
    $wp_customize->add_section(
            'themesflat_footer', array(
        'title' => esc_html('Footer', 'standell'),
        'priority' => 4,
            )
    );

    // Section Blog
    $wp_customize->add_section(
            'blog_options', array(
        'title' => esc_html('Post', 'standell'),
        'priority' => 13,
            )
    );

    // Heading Blog
    $wp_customize->add_control(new themesflat_Info($wp_customize, 'bloglist', array(
        'label' => esc_html('Blog List', 'standell'),
        'section' => 'blog_options',
        'settings' => 'themesflat_options[info]',
        'priority' => 1
            ))
    );

    // Desc blog
    $wp_customize->add_control(new themesflat_Desc_Info($wp_customize, 'desc_customizer_bloglist', array(
        'label' => esc_html('All options in this section will be used to make style for blog page.', 'standell'),
        'section' => 'blog_options',
        'settings' => 'themesflat_options[info]',
        'priority' => 2
            ))
    );

    $wp_customize->add_setting(
            'blog_layout', array(
        'default' => themesflat_customize_default('blog_layout'),
        'sanitize_callback' => 'esc_attr',
            )
    );
    $wp_customize->add_control(
            'blog_layout', array(
        'type' => 'select',
        'section' => 'blog_options',
        'priority' => 3,
        'label' => esc_html('Sidebar Position', 'standell'),
        'choices' => array(
            'sidebar-right' => esc_html('Sidebar Right', 'standell'),
            'sidebar-left' => esc_html('Sidebar Left', 'standell'),
            'fullwidth' => esc_html('Full Width', 'standell')
        ),
            )
    );

    $wp_customize->add_setting(
            'blog_archive_layout', array(
        'default' => themesflat_customize_default('blog_archive_layout'),
        'sanitize_callback' => 'esc_attr',
            )
    );

    $wp_customize->add_control(
            'blog_archive_layout', array(
        'type' => 'select',
        'section' => 'blog_options',
        'priority' => 3,
        'label' => esc_html('Blog Layout', 'standell'),
        'choices' => array(
            'blog-list-small' => esc_html('Blog List Small', 'standell'),
            'blog-list' => esc_html('Blog List', 'standell'),
            'blog-grid' => esc_html('Blog Grid', 'standell'),
            'blog-grid-style2' => esc_html('Blog Grid No Image', 'standell'),
        )
            )
    );

    // Gird columns Related Posts
    $wp_customize->add_setting(
            'blog_grid_columns', array(
        'default' => themesflat_customize_default('blog_grid_columns'),
        'sanitize_callback' => 'themesflat_sanitize_grid_post_related',
            )
    );

    $wp_customize->add_control(
            'blog_grid_columns', array(
        'type' => 'select',
        'section' => 'blog_options',
        'priority' => 4,
        'label' => esc_html('Post Grid Columns', 'standell'),
        'choices' => array(
            3 => esc_html('3 Columns', 'standell'),
            4 => esc_html('4 Columns', 'standell'),
        )
            )
    );

    $wp_customize->add_setting(
            'blog_sidebar_list', array(
        'default' => themesflat_customize_default('blog_sidebar_list'),
        'sanitize_callback' => 'esc_html',
            )
    );

    $wp_customize->add_control(new themesflat_DropdownSidebars($wp_customize, 'blog_sidebar_list', array(
        'type' => 'dropdown',
        'section' => 'blog_options',
        'priority' => 3,
        'label' => esc_html('List Sidebar Position', 'standell'),
            ))
    );

    // Excerpt
    $wp_customize->add_setting(
            'blog_archive_post_excepts_length', array(
        'sanitize_callback' => 'absint',
        'default' => themesflat_customize_default('blog_archive_post_excepts_length'),
            )
    );
    $wp_customize->add_control('blog_archive_post_excepts_length', array(
        'type' => 'text',
        'priority' => 4,
        'section' => 'blog_options',
        'label' => esc_html('Post Excepts Length', 'standell'),
        'input_attrs' => array(
            'min' => 10,
            'max' => 200,
            'step' => 5
        ),
    ));

    // Show Read More
    $wp_customize->add_setting(
            'blog_archive_readmore', array(
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => themesflat_customize_default('blog_archive_readmore'),
            )
    );
    $wp_customize->add_control(new themesflat_Checkbox($wp_customize, 'blog_archive_readmore', array(
        'type' => 'checkbox',
        'label' => esc_html('Show Read More', 'standell'),
        'section' => 'blog_options',
        'priority' => 6,
            ))
    );

    // Read More Text
    $wp_customize->add_setting(
            'blog_archive_readmore_text', array(
        'default' => themesflat_customize_default('blog_archive_readmore_text'),
        'sanitize_callback' => 'themesflat_sanitize_text'
            )
    );

    $wp_customize->add_control(
            'blog_archive_readmore_text', array(
        'type' => 'text',
        'label' => esc_html('Read More Text', 'standell'),
        'section' => 'blog_options',
        'priority' => 7
            )
    );

    // Show Read More
    $wp_customize->add_setting(
            'show_post_meta', array(
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => themesflat_customize_default('show_post_meta'),
            )
    );
    $wp_customize->add_control(new themesflat_Checkbox($wp_customize, 'show_post_meta', array(
        'type' => 'checkbox',
        'label' => esc_html('Show Post Meta', 'standell'),
        'section' => 'blog_options',
        'priority' => 7,
            ))
    );

    // Pagination
    $wp_customize->add_setting(
            'blog_archive_pagination_style', array(
        'default' => themesflat_customize_default('blog_archive_pagination_style'),
        'sanitize_callback' => 'esc_attr',
            )
    );
    $wp_customize->add_control(
            'blog_archive_pagination_style', array(
        'type' => 'select',
        'section' => 'blog_options',
        'priority' => 8,
        'label' => esc_html('Pagination Style', 'standell'),
        'choices' => array(
            'pager' => esc_html('Pager', 'standell'),
            'numeric' => esc_html('Numeric', 'standell'),
            'pager-numeric' => esc_html('Pager & Numeric', 'standell'),
            'loadmore' => esc_html__('Load More', 'standell')
        ),
            )
    );

    // Header Blog Single    
    $wp_customize->add_control(new themesflat_Info($wp_customize, 'blogsingle', array(
        'label' => esc_html('Blog Single', 'standell'),
        'section' => 'blog_options',
        'settings' => 'themesflat_options[info]',
        'priority' => 9
            ))
    );

    // Desc Blog Single
    $wp_customize->add_control(new themesflat_Desc_Info($wp_customize, 'desc_customizer_blogsingle', array(
        'label' => esc_html('Also, you can change the style for blog single to make your site unique.', 'standell'),
        'section' => 'blog_options',
        'settings' => 'themesflat_options[info]',
        'priority' => 10
            ))
    );

    // Show Post Navigator
    $wp_customize->add_setting(
            'show_post_navigator', array(
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => themesflat_customize_default('show_post_navigator'),
            )
    );

    $wp_customize->add_control(new themesflat_Checkbox($wp_customize, 'show_post_navigator', array(
        'type' => 'checkbox',
        'label' => esc_html('Show Post Navigator', 'standell'),
        'section' => 'blog_options',
        'priority' => 12
            ))
    );

    // Show Related Posts
    $wp_customize->add_setting(
            'show_related_post', array(
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => 0,
            )
    );

    $wp_customize->add_control(new themesflat_Checkbox($wp_customize, 'show_related_post', array(
        'type' => 'checkbox',
        'label' => esc_html('Show Related Posts', 'standell'),
        'section' => 'blog_options',
        'priority' => 15
            ))
    );

    //Related Posts Style
    $wp_customize->add_setting(
            'related_post_style', array(
        'default' => themesflat_customize_default('related_post_style'),
        'sanitize_callback' => 'esc_attr',
            )
    );
    $wp_customize->add_control(
            'related_post_style', array(
        'type' => 'select',
        'section' => 'blog_options',
        'priority' => 16,
        'label' => esc_html('Related Posts Style', 'standell'),
        'choices' => array(
            'blog-grid' => esc_html('Blog Grid', 'standell'),
            'blog-list-small' => esc_html('Blog List Small', 'standell'),
        ))
    );

    // Gird columns Related Posts
    $wp_customize->add_setting(
            'grid_columns_post_related', array(
        'default' => 2,
        'sanitize_callback' => 'themesflat_sanitize_grid_post_related',
            )
    );

    $wp_customize->add_control(
            'grid_columns_post_related', array(
        'type' => 'select',
        'section' => 'blog_options',
        'priority' => 17,
        'label' => esc_html('Columns Of Related Posts', 'standell'),
        'choices' => array(
            2 => esc_html('2 Columns', 'standell'),
            3 => esc_html('3 Columns', 'standell'),
            4 => esc_html('4 Columns', 'standell'),
        )
            )
    );

    // Number Of Related Posts
    $wp_customize->add_setting(
            'number_related_post', array(
        'default' => esc_html('2', 'standell'),
        'sanitize_callback' => 'themesflat_sanitize_text'
            )
    );

    $wp_customize->add_control(
            'number_related_post', array(
        'type' => 'text',
        'label' => esc_html('Number Of Related Posts', 'standell'),
        'section' => 'blog_options',
        'priority' => 18
            )
    );

    // Section portfolio
    $wp_customize->add_section(
            'portfolio_options', array(
        'title' => esc_html('Portfolio', 'standell'),
        'priority' => 14,
            )
    );

    // Heading portfolio
    $wp_customize->add_control(new themesflat_Info($wp_customize, 'portfoliolist', array(
        'label' => esc_html('Portfolio List', 'standell'),
        'section' => 'portfolio_options',
        'settings' => 'themesflat_options[info]',
        'priority' => 1
            ))
    );

    // Desc portfolio
    $wp_customize->add_control(new themesflat_Desc_Info($wp_customize, 'desc_customizer_portfoliolist', array(
        'label' => esc_html('Change options in this section to custom style for Portfolio listing page.', 'standell'),
        'section' => 'portfolio_options',
        'settings' => 'themesflat_options[info]',
        'priority' => 2
            ))
    );

    // Show filter portfolio
    $wp_customize->add_setting(
            'show_filter_portfolio', array(
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => themesflat_customize_default('show_filter_portfolio'),
            )
    );

    $wp_customize->add_control(new themesflat_Checkbox($wp_customize, 'show_filter_portfolio', array(
        'type' => 'checkbox',
        'label' => esc_html('Show filter ', 'standell'),
        'section' => 'portfolio_options',
        'priority' => 3
            ))
    );

    // Portfolios Style
    $wp_customize->add_setting(
            'portfolio_style', array(
        'default' => 'masonry',
        'sanitize_callback' => 'esc_attr',
            )
    );

    $wp_customize->add_control(
            'portfolio_style', array(
        'type' => 'select',
        'section' => 'portfolio_options',
        'priority' => 4,
        'label' => esc_html('Portfolio Style', 'standell'),
        'choices' => array(
            'grid' => esc_html('Grid', 'standell'),
            'masonry' => esc_html('Masonry', 'standell'),
        ))
    );

    // Gird columns portfolio
    $wp_customize->add_setting(
            'portfolio_grid_columns', array(
        'default' => themesflat_customize_default('portfolio_grid_columns'),
        'sanitize_callback' => 'esc_attr',
            )
    );

    $wp_customize->add_control(
            'portfolio_grid_columns', array(
        'type' => 'select',
        'section' => 'portfolio_options',
        'priority' => 5,
        'label' => esc_html('Grid Or Masonry Columns', 'standell'),
        'choices' => array(
            'one-three' => esc_html('3 Columns', 'standell'),
            'one-four' => esc_html('4 Columns', 'standell'),
        )
            )
    );

    // Show Pagination
    $wp_customize->add_setting(
            'show_pagination_portfolio', array(
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => themesflat_customize_default('show_pagination_portfolio'),
            )
    );

    $wp_customize->add_control(new themesflat_Checkbox($wp_customize, 'show_pagination_portfolio', array(
        'type' => 'checkbox',
        'label' => esc_html('Show Pagination', 'standell'),
        'section' => 'portfolio_options',
        'priority' => 6
            ))
    );

    // Pagination portfolio
    $wp_customize->add_setting(
            'portfolio_archive_pagination_style', array(
        'default' => themesflat_customize_default('portfolio_archive_pagination_style'),
        'sanitize_callback' => 'esc_attr',
            )
    );
    $wp_customize->add_control(
            'portfolio_archive_pagination_style', array(
        'type' => 'select',
        'section' => 'portfolio_options',
        'priority' => 7,
        'label' => esc_html('Pagination Style', 'standell'),
        'choices' => array(
            'pager-numeric' => esc_html('Pager & Numeric', 'standell'),
            'loadmore' => esc_html('Load More', 'standell'),
        ))
    );

    // post per page portfolio
    $wp_customize->add_setting(
            'portfolio_post_perpage', array(
        'default' => esc_html('9', 'standell'),
        'sanitize_callback' => 'themesflat_sanitize_text'
            )
    );

    $wp_customize->add_control(
            'portfolio_post_perpage', array(
        'type' => 'text',
        'label' => esc_html('Posts Per Page', 'standell'),
        'section' => 'portfolio_options',
        'priority' => 8
            )
    );

    // Order By portfolio
    $wp_customize->add_setting(
            'portfolio_order_by', array(
        'default' => 'date',
        'sanitize_callback' => 'themesflat_sanitize_portfolio_order',
            )
    );

    $wp_customize->add_control(
            'portfolio_order_by', array(
        'type' => 'select',
        'label' => esc_html('Order By', 'standell'),
        'section' => 'portfolio_options',
        'priority' => 9,
        'choices' => array(
            'date' => esc_html('Date', 'standell'),
            'id' => esc_html('Id', 'standell'),
            'author' => esc_html('Author', 'standell'),
            'title' => esc_html('Title', 'standell'),
            'modified' => esc_html('Modified', 'standell'),
            'comment_count' => esc_html('Comment Count', 'standell'),
            'menu_order' => esc_html('Menu Order', 'standell')
        )
            )
    );

    // Order Direction portfolio
    $wp_customize->add_setting(
            'portfolio_order_direction', array(
        'default' => 'ASC',
        'sanitize_callback' => 'themesflat_sanitize_portfolio_order_direction',
            )
    );

    $wp_customize->add_control(
            'portfolio_order_direction', array(
        'type' => 'select',
        'label' => esc_html('Order Direction', 'standell'),
        'section' => 'portfolio_options',
        'priority' => 10,
        'choices' => array(
            'DESC' => esc_html('Descending', 'standell'),
            'ASC' => esc_html('Assending', 'standell')
        )
            )
    );

    // Header Portfolio Single    
    $wp_customize->add_control(new themesflat_Info($wp_customize, 'portfoliosingle', array(
        'label' => esc_html('SINGLE PORTFOLIO', 'standell'),
        'section' => 'portfolio_options',
        'settings' => 'themesflat_options[info]',
        'priority' => 10
            ))
    );

    // Desc Portfolio Single
    $wp_customize->add_control(new themesflat_Desc_Info($wp_customize, 'desc_customizer_portfoliosingle', array(
        'label' => esc_html('Also, you can change the style for blog single to make your site unique.', 'standell'),
        'section' => 'portfolio_options',
        'settings' => 'themesflat_options[info]',
        'priority' => 11
            ))
    );

    // Portfolios Single Style
    $wp_customize->add_setting(
            'portfolio_single_style', array(
        'default' => themesflat_customize_default('portfolio_single_style'),
        'sanitize_callback' => 'esc_attr',
            )
    );

    $wp_customize->add_control(
            'portfolio_single_style', array(
        'type' => 'select',
        'section' => 'portfolio_options',
        'priority' => 12,
        'label' => esc_html('Portfolio Single style', 'standell'),
        'choices' => array(
            'full_content' => esc_html('Full Content', 'standell'),
            'left_content' => esc_html('Left Content', 'standell'),
        ))
    );

    // Show Related Portfolios
    $wp_customize->add_setting(
            'show_related_portfolio', array(
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => 0,
            )
    );

    $wp_customize->add_control(new themesflat_Checkbox($wp_customize, 'show_related_portfolio', array(
        'type' => 'checkbox',
        'label' => esc_html('Show Related Portfolios', 'standell'),
        'section' => 'portfolio_options',
        'priority' => 13
            ))
    );

    // Title widget reated
    $wp_customize->add_setting(
            'title_related_portfolio', array(
        'default' => esc_html('Related Portfolio', 'standell'),
        'sanitize_callback' => 'themesflat_sanitize_text'
            )
    );

    $wp_customize->add_control(
            'title_related_portfolio', array(
        'type' => 'text',
        'label' => esc_html('Related Portfolio title', 'standell'),
        'section' => 'portfolio_options',
        'priority' => 14
            )
    );

    // Gird columns portfolio related
    $wp_customize->add_setting(
            'related_portfolio_style', array(
        'default' => themesflat_customize_default('related_portfolio_style'),
        'sanitize_callback' => 'esc_attr',
            )
    );

    $wp_customize->add_control(
            'related_portfolio_style', array(
        'type' => 'select',
        'section' => 'portfolio_options',
        'priority' => 16,
        'label' => esc_html('Related Portfolio Style', 'standell'),
        'choices' => array(
            'grid' => esc_html('Grid', 'standell'),
            'carousel' => esc_html('Carousel', 'standell')
        )
            )
    );

    // Gird columns portfolio related
    $wp_customize->add_setting(
            'grid_columns_portfolio_related', array(
        'default' => themesflat_customize_default('grid_columns_portfolio_related'),
        'sanitize_callback' => 'esc_attr',
            )
    );

    $wp_customize->add_control(
            'grid_columns_portfolio_related', array(
        'type' => 'select',
        'section' => 'portfolio_options',
        'priority' => 16,
        'label' => esc_html('Related Columns', 'standell'),
        'choices' => array(
            'one-three' => esc_html('3 Columns', 'standell'),
            'one-four' => esc_html('4 Columns', 'standell'),
        )
            )
    );

    // Number Of Related Portfolios
    $wp_customize->add_setting(
            'number_related_portfolio', array(
        'default' => 3,
        'sanitize_callback' => 'themesflat_sanitize_text'
            )
    );

    $wp_customize->add_control(
            'number_related_portfolio', array(
        'type' => 'text',
        'label' => esc_html('Number Of Related Portfolios', 'standell'),
        'section' => 'portfolio_options',
        'priority' => 17
            )
    );

    // Section Typography
    $wp_customize->add_section(
            'flat_typography', array(
        'title' => esc_html('Typography', 'standell'),
        'priority' => 6,
            )
    );

    // Heading Typography
    $wp_customize->add_control(new themesflat_Info($wp_customize, 'custom-typography', array(
        'label' => esc_html('BODY FONT', 'standell'),
        'section' => 'flat_typography',
        'settings' => 'themesflat_options[info]',
        'priority' => 2
            ))
    );

    // Desc Typography
    $wp_customize->add_control(new themesflat_Desc_Info($wp_customize, 'desc_customizer_logo', array(
        'label' => esc_html('You can modify the font family, size, color, ... for global content.', 'standell'),
        'section' => 'flat_typography',
        'settings' => 'themesflat_options[info]',
        'priority' => 3
            ))
    );


    //__Page title and breadcrumb__//
    $wp_customize->add_panel('page_title_panel', array(
        'title' => esc_html__('Page Title & Breadcrumb', 'standell'),
        'description' => 'This is panel Description',
        'priority' => 10,
    ));

    // ADD SECTION PAGE TITLE
    $wp_customize->add_section('page_title_style', array(
        'title' => esc_html__('Page Title Style', 'standell'),
        'priority' => 10,
        'panel' => 'page_title_panel',
    ));

    // Heading Color Scheme
    $wp_customize->add_control(new themesflat_Info($wp_customize, 'page_title_style', array(
        'label' => esc_html__('Page Title Style', 'standell'),
        'section' => 'page_title_style',
        'settings' => 'themesflat_options[info]',
        'priority' => 1
            ))
    );

    // Show page title
    $wp_customize->add_setting(
            'show_page_title', array(
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => themesflat_customize_default('show_page_title'),
            )
    );

    $wp_customize->add_control(new themesflat_Checkbox($wp_customize, 'show_page_title', array(
        'type' => 'checkbox',
        'label' => esc_html('Show page title', 'standell'),
        'section' => 'page_title_style',
        'priority' => 15,
            ))
    );

    // Show page heading
    $wp_customize->add_setting(
            'show_page_title_heading', array(
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => themesflat_customize_default('show_page_title_heading'),
            )
    );

    $wp_customize->add_control(new themesflat_Checkbox($wp_customize, 'show_page_title_heading', array(
        'type' => 'checkbox',
        'label' => esc_html('Show page title heading', 'standell'),
        'section' => 'page_title_style',
        'priority' => 16,
            ))
    );

    // Box control
    $wp_customize->add_setting(
            'page_title_controls', array(
        'default' => themesflat_customize_default('page_title_controls'),
        'sanitize_callback' => 'themesflat_sanitize_text',
            )
    );
    $wp_customize->add_control(new themesflat_BoxControls($wp_customize, 'page_title_controls', array(
        'label' => esc_html('Page Title Controls (px)', 'standell'),
        'section' => 'page_title_style',
        'type' => 'box-controls',
        'priority' => 10
            ))
    );

    //Page Title Background
    $wp_customize->add_setting(
            'page_title_background_image', array(
        'default' => themesflat_customize_default('page_title_background_image'),
        'sanitize_callback' => 'esc_url_raw',
            )
    );
    $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'page_title_background_image', array(
        'label' => esc_html('Upload your page title image ', 'standell'),
        'type' => 'image',
        'section' => 'page_title_style',
        'priority' => 5,
            )
            )
    );

    // Page Title Color
    $wp_customize->add_setting(
            'page_title_text_color', array(
        'default' => themesflat_customize_default('page_title_text_color'),
        'sanitize_callback' => 'sanitize_hex_color',
            )
    );
    $wp_customize->add_control(
            new WP_Customize_Color_Control(
            $wp_customize, 'page_title_text_color', array(
        'label' => esc_html('Page Heading Text Color', 'standell'),
        'section' => 'page_title_style',
        'priority' => 6
            )
            )
    );

    // Page Title Link Color
    $wp_customize->add_setting(
            'page_title_link_color', array(
        'default' => themesflat_customize_default('page_title_link_color'),
        'sanitize_callback' => 'sanitize_hex_color',
            )
    );
    $wp_customize->add_control(
            new WP_Customize_Color_Control(
            $wp_customize, 'page_title_link_color', array(
        'label' => esc_html('Breadcrumb Text Color', 'standell'),
        'section' => 'page_title_style',
        'priority' => 7
            )
            )
    );

    // Overlay
    $wp_customize->add_setting(
            'page_title_overlay_color', array(
        'default' => themesflat_customize_default('page_title_overlay_color'),
        'sanitize_callback' => 'esc_attr',
            )
    );
    $wp_customize->add_control(new themesflat_ColorOverlay(
            $wp_customize, 'page_title_overlay_color', array(
        'label' => esc_html__('Page Title Overlay Color', 'standell'),
        'description' => esc_html__(' Opacity =1 for Background Color', 'standell'),
        'section' => 'page_title_style',
        'priority' => 8
            )
            )
    );

    // ADD SECTION BREADCRUMB
    $wp_customize->add_section('page_break_crumb_section', array(
        'title' => esc_html__('Page Breadcrumb', 'standell'),
        'priority' => 10,
        'panel' => 'page_title_panel',
    ));

    // Breadcrumb section
    $wp_customize->add_control(new themesflat_Info($wp_customize, 'page_break_crumb_section', array(
        'label' => esc_html__('Page Breadcrumb', 'standell'),
        'section' => 'page_break_crumb_section',
        'settings' => 'themesflat_options[info]',
        'priority' => 1
            ))
    );

    // Breadcrumb
    $wp_customize->add_setting(
            'breadcrumb_enabled', array(
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => themesflat_customize_default('breadcrumb_enabled'),
            )
    );

    $wp_customize->add_control(new themesflat_Checkbox($wp_customize, 'breadcrumb_enabled', array(
        'type' => 'checkbox',
        'label' => esc_html('Enable Breadcrumb', 'standell'),
        'section' => 'page_break_crumb_section',
        'priority' => 14,
            ))
    );

    $wp_customize->add_setting(
            'bread_crumb_prefix', array(
        'default' => themesflat_customize_default('bread_crumb_prefix'),
        'sanitize_callback' => 'themesflat_sanitize_text'
            )
    );

    $wp_customize->add_control(
            'bread_crumb_prefix', array(
        'type' => 'text',
        'label' => esc_html('Breadcrumb Prefix', 'standell'),
        'section' => 'page_break_crumb_section',
        'priority' => 15
            )
    );

    $wp_customize->add_setting(
            'breadcrumb_separator', array(
        'default' => themesflat_customize_default('breadcrumb_separator'),
        'sanitize_callback' => 'themesflat_sanitize_text'
            )
    );

    $wp_customize->add_control(
            'breadcrumb_separator', array(
        'type' => 'text',
        'label' => esc_html('Breadcrumb Separator', 'standell'),
        'section' => 'page_break_crumb_section',
        'priority' => 16
            )
    );

    // Body fonts
    $wp_customize->add_setting(
            'body_font_name', array(
        'default' => themesflat_customize_default('body_font_name'),
        'sanitize_callback' => 'esc_html',
            )
    );
    $wp_customize->add_control(new themesflat_Typography($wp_customize, 'body_font_name', array(
        'label' => esc_html('Font name/style/sets', 'standell'),
        'section' => 'flat_typography',
        'type' => 'typography',
        'fields' => array('family', 'style', 'line_height', 'size'),
        'priority' => 4
            ))
    );

    // Headings fonts
    $wp_customize->add_control(new themesflat_Info($wp_customize, 'custom-heading-font', array(
        'label' => esc_html('Headings fonts', 'standell'),
        'section' => 'flat_typography',
        'settings' => 'themesflat_options[info]',
        'priority' => 8
            ))
    );

    // Desc font
    $wp_customize->add_control(new themesflat_Desc_Info($wp_customize, 'desc_customizer_heading-font', array(
        'label' => esc_html('You can modify the font options for your headings. h1, h2, h3, h4, ...', 'standell'),
        'section' => 'flat_typography',
        'settings' => 'themesflat_options[info]',
        'priority' => 9
            ))
    );

    $wp_customize->add_setting(
            'headings_font_name', array(
        'default' => themesflat_customize_default('headings_font_name'),
        'sanitize_callback' => 'esc_html',
            )
    );
    $wp_customize->add_control(new themesflat_Typography($wp_customize, 'headings_font_name', array(
        'label' => esc_html('Font name/style/sets', 'standell'),
        'section' => 'flat_typography',
        'type' => 'typography',
        'fields' => array('family', 'style'),
        'priority' => 11
            ))
    );

    // H1 size
    $wp_customize->add_setting(
            'h1_size', array(
        'sanitize_callback' => 'absint',
        'default' => themesflat_customize_default('h1_size'),
            )
    );
    $wp_customize->add_control('h1_size', array(
        'type' => 'number',
        'priority' => 13,
        'section' => 'flat_typography',
        'label' => esc_html('H1 font size (px)', 'standell'),
        'input_attrs' => array(
            'min' => 10,
            'max' => 60,
            'step' => 1,
            'style' => 'margin-bottom: 15px; padding: 10px;',
        ),
    ));

    // H2 size
    $wp_customize->add_setting(
            'h2_size', array(
        'sanitize_callback' => 'absint',
        'default' => themesflat_customize_default('h2_size'),
            )
    );
    $wp_customize->add_control('h2_size', array(
        'type' => 'number',
        'priority' => 14,
        'section' => 'flat_typography',
        'label' => esc_html('H2 font size (px)', 'standell'),
        'input_attrs' => array(
            'min' => 10,
            'max' => 60,
            'step' => 1,
            'style' => 'margin-bottom: 15px; padding: 10px;',
        ),
    ));

    // H3 size
    $wp_customize->add_setting(
            'h3_size', array(
        'sanitize_callback' => 'absint',
        'default' => themesflat_customize_default('h3_size'),
            )
    );
    $wp_customize->add_control('h3_size', array(
        'type' => 'number',
        'priority' => 15,
        'section' => 'flat_typography',
        'label' => esc_html('H3 font size (px)', 'standell'),
        'input_attrs' => array(
            'min' => 10,
            'max' => 60,
            'step' => 1,
            'style' => 'margin-bottom: 15px; padding: 10px;',
        ),
    ));

    // H4 size
    $wp_customize->add_setting(
            'h4_size', array(
        'sanitize_callback' => 'absint',
        'default' => themesflat_customize_default('h4_size'),
            )
    );
    $wp_customize->add_control('h4_size', array(
        'type' => 'number',
        'priority' => 16,
        'section' => 'flat_typography',
        'label' => esc_html('H4 font size (px)', 'standell'),
        'input_attrs' => array(
            'min' => 10,
            'max' => 60,
            'step' => 1,
            'style' => 'margin-bottom: 15px; padding: 10px;',
        ),
    ));

    // H5 size
    $wp_customize->add_setting(
            'h5_size', array(
        'sanitize_callback' => 'absint',
        'default' => themesflat_customize_default('h5_size'),
            )
    );
    $wp_customize->add_control('h5_size', array(
        'type' => 'number',
        'priority' => 17,
        'section' => 'flat_typography',
        'label' => esc_html('H5 font size (px)', 'standell'),
        'input_attrs' => array(
            'min' => 10,
            'max' => 60,
            'step' => 1,
            'style' => 'margin-bottom: 15px; padding: 10px;',
        ),
    ));

    // H6 size
    $wp_customize->add_setting(
            'h6_size', array(
        'sanitize_callback' => 'absint',
        'default' => themesflat_customize_default('h6_size'),
            )
    );
    $wp_customize->add_control('h6_size', array(
        'type' => 'number',
        'priority' => 18,
        'section' => 'flat_typography',
        'label' => esc_html('H6 font size (px)', 'standell'),
        'input_attrs' => array(
            'min' => 10,
            'max' => 60,
            'step' => 1,
            'style' => 'margin-bottom: 15px; padding: 10px;',
        ),
    ));

    // Heading Menu fonts
    $wp_customize->add_setting('themesflat_options[info]', array(
        'type' => 'info_control',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
            )
    );
    $wp_customize->add_control(new themesflat_Info($wp_customize, 'menu_fonts', array(
        'label' => esc_html('Menu fonts', 'standell'),
        'section' => 'flat_typography',
        'settings' => 'themesflat_options[info]',
        'priority' => 19
            ))
    );

    $wp_customize->add_setting(
            'menu_font_name', array(
        'default' => themesflat_customize_default('menu_font_name'),
        'sanitize_callback' => 'esc_html',
            )
    );
    $wp_customize->add_control(new themesflat_Typography($wp_customize, 'menu_font_name', array(
        'label' => esc_html('Font name/style/sets', 'standell'),
        'section' => 'flat_typography',
        'type' => 'typography',
        'fields' => array('family', 'style', 'size', 'line_height'),
        'priority' => 20
            ))
    );

    $wp_customize->add_setting(
            'layout_version', array(
        'default' => themesflat_customize_default('layout_version'),
        'sanitize_callback' => 'esc_attr',
            )
    );
    $wp_customize->add_control(
            'layout_version', array(
        'type' => 'select',
        'section' => 'colors',
        'priority' => 7,
        'label' => esc_html('Layout version', 'standell'),
        'choices' => array(
            'wide' => esc_html('Wide', 'standell'),
            'boxed' => esc_html('Boxed', 'standell'),
        ))
    );

    // body background color
    $wp_customize->add_setting(
            'body_background_color', array(
        'default' => themesflat_customize_default('body_background_color'),
        'sanitize_callback' => 'esc_attr',
            )
    );
    $wp_customize->add_control(
            new themesflat_ColorOverlay(
            $wp_customize, 'body_background_color', array(
        'label' => esc_html('Body Background Color', 'standell'),
        'description' => esc_html__(' Opacity =1 for Background Color', 'standell'),
        'section' => 'colors',
        'priority' => 8
            )
            )
    );

    // Sidebars
    $wp_customize->add_control(new themesflat_Info($wp_customize, 'layout_body', array(
        'label' => esc_html('SIDEBAR', 'standell'),
        'section' => 'colors',
        'settings' => 'themesflat_options[info]',
        'priority' => 10
            ))
    );

    // Desc
    $wp_customize->add_control(new themesflat_Desc_Info($wp_customize, 'desc_color_scheme', array(
        'label' => esc_html('Select the position of sidebar that you wish to display.', 'standell'),
        'section' => 'colors',
        'settings' => 'themesflat_options[info]',
        'priority' => 11
            ))
    );

    $wp_customize->add_setting(
            'page_layout', array(
        'default' => themesflat_customize_default('page_layout'),
        'sanitize_callback' => 'esc_attr',
            )
    );

    $wp_customize->add_control(
            'page_layout', array(
        'type' => 'select',
        'section' => 'colors',
        'priority' => 12,
        'label' => esc_html('Sidebar Position', 'standell'),
        'choices' => array(
            'sidebar-right' => esc_html('Sidebar Right', 'standell'),
            'sidebar-left' => esc_html('Sidebar Left', 'standell'),
            'fullwidth' => esc_html('Full Width', 'standell'),
        ))
    );

    $wp_customize->add_setting(
            'page_sidebar_list', array(
        'default' => themesflat_customize_default('page_sidebar_list'),
        'sanitize_callback' => 'esc_html',
            )
    );

    $wp_customize->add_control(new themesflat_DropdownSidebars($wp_customize, 'page_sidebar_list', array(
        'type' => 'dropdown',
        'section' => 'colors',
        'priority' => 13,
        'label' => esc_html('List Sidebar Position', 'standell'),
            ))
    );

    // Section product
    $wp_customize->add_section(
            'product_options', array(
        'title' => esc_html('Shop', 'standell'),
        'priority' => 15,
            )
    );

    // Heading product
    $wp_customize->add_control(new themesflat_Info($wp_customize, 'product', array(
        'label' => esc_html('Product', 'standell'),
        'section' => 'product_options',
        'settings' => 'themesflat_options[info]',
        'priority' => 1
            ))
    );

    // Desc product
    $wp_customize->add_control(new themesflat_Desc_Info($wp_customize, 'desc_customizer_portfoliolist', array(
        'label' => esc_html('This section is designed for only Woocommerce, it will be applied for page that listing all products.', 'standell'),
        'section' => 'product_options',
        'settings' => 'themesflat_options[info]',
        'priority' => 2
            ))
    );

    // Product layout
    $wp_customize->add_setting(
            'product_layout', array(
        'default' => themesflat_customize_default('product_layout'),
        'sanitize_callback' => 'themesflat_sanitize_text',
            )
    );
    $wp_customize->add_control(
            'product_layout', array(
        'type' => 'select',
        'section' => 'product_options',
        'priority' => 3,
        'label' => esc_html('Sidebar Position', 'standell'),
        'choices' => array(
            'fullwidth' => esc_html('Full Width', 'standell'),
            'sidebar-left' => esc_html('Sidebar Left', 'standell'),
            'sidebar-right' => esc_html('Sidebar Right', 'standell')
        ))
    );

    // Product per page product 
    $wp_customize->add_setting(
            'woo_products_per_page', array(
        'default' => 6,
        'sanitize_callback' => 'themesflat_sanitize_text'
            )
    );
    $wp_customize->add_control(
            'woo_products_per_page', array(
        'type' => 'text',
        'label' => esc_html('Products Per Page', 'standell'),
        'section' => 'product_options',
        'priority' => 4
            )
    );

    // Product Columns
    $wp_customize->add_setting(
            'product_columns', array(
        'default' => themesflat_customize_default('product_columns'),
        'sanitize_callback' => 'themesflat_sanitize_text',
            )
    );
    $wp_customize->add_control(
            'product_columns', array(
        'type' => 'select',
        'section' => 'product_options',
        'priority' => 5,
        'label' => esc_html('Product Columns', 'standell'),
        'choices' => array(
            'three-columns' => esc_html('3 Columns', 'standell'),
            'four-columns' => esc_html('4 Columns', 'standell'),
        )
            )
    );

    // Product Style
    $wp_customize->add_setting(
            'product_style', array(
        'default' => themesflat_customize_default('product_style'),
        'sanitize_callback' => 'themesflat_sanitize_text',
            )
    );
    $wp_customize->add_control(
            'product_style', array(
        'type' => 'select',
        'section' => 'product_options',
        'priority' => 5,
        'label' => esc_html('Product Style', 'standell'),
        'choices' => array(
            'product-style1' => esc_html('Style 1', 'standell'),
            'product-style2' => esc_html('Style 2', 'standell'),
        )
            )
    );

    // Heading product Single
    $wp_customize->add_control(new themesflat_Info($wp_customize, 'productlist', array(
        'label' => esc_html('Product Single', 'standell'),
        'section' => 'product_options',
        'settings' => 'themesflat_options[info]',
        'priority' => 6
            ))
    );

    // Product Related Per Page 
    $wp_customize->add_setting(
            'woo_products_related_per_page', array(
        'default' => themesflat_customize_default('woo_products_related_per_page'),
        'sanitize_callback' => 'themesflat_sanitize_text'
            )
    );
    $wp_customize->add_control(
            'woo_products_related_per_page', array(
        'type' => 'text',
        'label' => esc_html('Related Per Page', 'standell'),
        'section' => 'product_options',
        'priority' => 7
            )
    );

    // Related Columns
    $wp_customize->add_setting(
            'woo_products_related_columns', array(
        'default' => themesflat_customize_default('woo_products_related_columns'),
        'sanitize_callback' => 'themesflat_sanitize_text',
            )
    );
    $wp_customize->add_control(
            'woo_products_related_columns', array(
        'type' => 'select',
        'section' => 'product_options',
        'priority' => 8,
        'label' => esc_html('Related Columns', 'standell'),
        'choices' => array(
            'three-columns' => esc_html('3 Columns', 'standell'),
            'four-columns' => esc_html('4 Columns', 'standell'),
        )
            )
    );
}

add_action('customize_register', 'themesflat_customize_register');

/**
 * Sanitize
 */
// Text
function themesflat_sanitize_text($input) {
    return wp_kses_post($input);
}

// Background size
function themesflat_sanitize_bg_size($input) {
    $valid = array(
        'cover' => esc_html('Cover', 'standell'),
        'contain' => esc_html('Contain', 'standell'),
    );
    if (array_key_exists($input, $valid)) {
        return $input;
    } else {
        return '';
    }
}

// Blog Layout
function themesflat_sanitize_blog($input) {
    $valid = array(
        'sidebar-right' => esc_html('Sidebar right', 'standell'),
        'sidebar-left' => esc_html('Sidebar left', 'standell'),
        'fullwidth' => esc_html('Full width (no sidebar)', 'standell')
    );
    if (array_key_exists($input, $valid)) {
        return $input;
    } else {
        return '';
    }
}

// themesflat_sanitize_pagination
function themesflat_sanitize_pagination($input) {
    $valid = array(
        'pager' => esc_html__('Pager', 'standell'),
        'numeric' => esc_html__('Numeric', 'standell'),
        'page_numeric' => esc_html__('Pager & Numeric', 'standell')
    );
    if (array_key_exists($input, $valid)) {
        return $input;
    } else {
        return '';
    }
}

// themesflat_sanitize_pagination
function themesflat_sanitize_layout_version($input) {
    $valid = array(
        'boxed' => esc_html__('Boxed', 'standell'),
        'wide' => esc_html__('Wide', 'standell')
    );
    if (array_key_exists($input, $valid)) {
        return $input;
    } else {
        return '';
    }
}

// themesflat_sanitize_related_post
function themesflat_sanitize_related_post($input) {
    $valid = array(
        'simple_list' => esc_html__('Simple List', 'standell'),
        'grid' => esc_html__('Grid', 'standell')
    );
    if (array_key_exists($input, $valid)) {
        return $input;
    } else {
        return '';
    }
}

// Footer widget areas
function themesflat_sanitize_fw($input) {
    $valid = array(
        '0' => esc_html__('footer_default', 'standell'),
        '1' => esc_html__('One', 'standell'),
        '2' => esc_html__('Two', 'standell'),
        '3' => esc_html__('Three', 'standell'),
        '4' => esc_html__('Four', 'standell')
    );
    if (array_key_exists($input, $valid)) {
        return $input;
    } else {
        return '';
    }
}

// Header style sanitize
function themesflat_sanitize_headerstyle($input) {
    $valid = themesflat_predefined_header_styles();
    if (array_key_exists($input, $valid)) {
        return $input;
    } else {
        return '';
    }
}

// Checkboxes
function themesflat_sanitize_checkbox($input) {
    if ($input == 1) {
        return 1;
    } else {
        return '';
    }
}

// Themesflat_sanitize_related_portfolio
function themesflat_sanitize_related_portfolio($input) {
    $valid = array(
        'grid' => esc_html('Grid', 'standell'),
        'grid_masonry' => esc_html('Grid Masonry', 'standell'),
        'grid_nomargin' => esc_html('Grid Masonry No Margin', 'standell'),
        'carosuel' => esc_html('Carosuel', 'standell'),
        'carosuel_nomargin' => esc_html('Carosuel No Margin', 'standell')
    );
    if (array_key_exists($input, $valid)) {
        return $input;
    } else {
        return '';
    }
}

// Themesflat_sanitize_portfolio_pagination
function themesflat_sanitize_portfolio_pagination($input) {
    $valid = array(
        'page_numeric' => esc_html('Pager & Numeric', 'standell'),
        'load_more' => esc_html('Load More', 'standell')
    );
    if (array_key_exists($input, $valid)) {
        return $input;
    } else {
        return '';
    }
}

// Themesflat_sanitize_portfolio_order
function themesflat_sanitize_portfolio_order($input) {
    $valid = array(
        'date' => esc_html('Date', 'standell'),
        'id' => esc_html('Id', 'standell'),
        'author' => esc_html('Author', 'standell'),
        'title' => esc_html('Title', 'standell'),
        'modified' => esc_html('Modified', 'standell'),
        'comment_count' => esc_html('Comment Count', 'standell'),
        'menu_order' => esc_html('Menu Order', 'standell')
    );
    if (array_key_exists($input, $valid)) {
        return $input;
    } else {
        return '';
    }
}

// Themesflat_sanitize_portfolio_order_direction
function themesflat_sanitize_portfolio_order_direction($input) {
    $valid = array(
        'DESC' => esc_html('Descending', 'standell'),
        'ASC' => esc_html('Assending', 'standell')
    );
    if (array_key_exists($input, $valid)) {
        return $input;
    } else {
        return '';
    }
}

// Themesflat_sanitize_grid_portfolio
function themesflat_sanitize_grid_portfolio($input) {
    $valid = array(
        'portfolio-two-columns' => esc_html('2 Columns', 'standell'),
        'portfolio-three-columns' => esc_html('3 Columns', 'standell'),
        'portfolio-four-columns' => esc_html('4 Columns', 'standell'),
        'portfolio-five-columns' => esc_html('5 Columns', 'standell')
    );
    if (array_key_exists($input, $valid)) {
        return $input;
    } else {
        return '';
    }
}

// themesflat_sanitize_grid_portfolio_related
function themesflat_sanitize_grid_portfolio_related($input) {
    $valid = array(
        'portfolio-one-columns' => esc_html('1 Columns', 'standell'),
        'portfolio-two-columns' => esc_html('2 Columns', 'standell'),
        'portfolio-three-columns' => esc_html('3 Columns', 'standell'),
        'portfolio-four-columns' => esc_html('4 Columns', 'standell'),
        'portfolio-five-columns' => esc_html('5 Columns', 'standell')
    );
    if (array_key_exists($input, $valid)) {
        return $input;
    } else {
        return '';
    }
}

// Themesflat_sanitize_grid_post_related
function themesflat_sanitize_grid_post_related($input) {
    $valid = array(
        2 => esc_html('2 Columns', 'standell'),
        3 => esc_html('3 Columns', 'standell'),
        4 => esc_html('4 Columns', 'standell'),
        5 => esc_html('5 Columns', 'standell'),
    );
    if (array_key_exists($input, $valid)) {
        return $input;
    } else {
        return '';
    }
}
