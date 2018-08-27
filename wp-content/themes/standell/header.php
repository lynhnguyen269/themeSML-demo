<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package standell
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

        <!-- Preloader -->
        <?php if (themesflat_choose_opt('enable_preload') == 1): ?>
            <section id="loading-overlay">
                <div class="themesflat-loader"></div>
            </section>
        <?php endif; ?>

        <div id="wrapper" class="themesflat-site">	
            <?php
            get_template_part('tpl/topbar');
            get_template_part('tpl/site-header');
            
            if (themesflat_choose_opt('enable_callback_header') == 1) :
                $hd_call_back_bg_color = themesflat_get_opt('header_call_back_bg_color');
                $hd_text_call_back = themesflat_get_opt('header_text_call_back');
                $hd_link_button_call_back = themesflat_get_opt('header_link_button_call_back');
                $hd_text_button_call_back = themesflat_get_opt('header_text_button_call_back');
                ?> 
                <div class="flat-call-back" style="background-color: <?php echo esc_attr($hd_call_back_bg_color); ?>">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-between align-items-center">
                                <div class="title-callback">
                                     <?php echo wp_kses_post($hd_text_call_back); ?>
                                </div> 
                                <a href="<?php echo esc_url($hd_link_button_call_back); ?>" class="btn-sflat btn-callback"><?php echo esc_attr($hd_text_button_call_back); ?></a>                    
                            </div>           
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Page Title -->
            <?php get_template_part('tpl/page-title'); ?>	
            <div id="themesflat-content" class="page-wrap <?php echo esc_attr(themesflat_blog_layout()); ?>">
                <div class="container content-wrapper">
                    <div class="row">