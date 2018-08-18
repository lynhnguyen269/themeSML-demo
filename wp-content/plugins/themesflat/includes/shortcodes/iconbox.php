<?php
if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
	/**
	 * Extended class to integrate testimonial slider with
	 * visual composer
	 */
    class WPBakeryShortCode_themesflat_iconbox_slider extends WPBakeryShortCodesContainer {
    }
}

/**
 * Register shortcode into Visual Composer
 */
add_action( 'vc_before_init', 'themesflat_iconbox_shortcode_params' );

/**
 * Register parameters for iconbox shortcode
 * 
 * @return  void
 */
function themesflat_iconbox_shortcode_params() {
	$icons_params = themesflat_map_icons('icon','Icon for box');
	$icons_params2 = themesflat_map_icons('readmore','Icon for readmore');
	$readmore = array (
		array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Read More Link', 'redbiz' ),
				'icon'        => THEMESFLAT_ICON,
				'param_name' => 'link',
				'description' => esc_html__( 'Enter custom url for read more button', 'redbiz' )
				),

			array(
				'type' => 'textfield',
				'icon'        => 'themesflat-shortcode',
				'heading' => esc_html__( 'Read More Text', 'redbiz' ),
				'param_name' => 'text',
				'description' => esc_html__( 'Enter custom text for read more button', 'redbiz' ),
				'value' => esc_html__( 'MORE DETAILS', 'redbiz' )
				),	
		);
	
		vc_map( array(
		'name'                    => esc_html__( 'Themesflat: Iconbox Slider', 'redbiz' ),
		'base'                    => 'themesflat_iconbox_slider',
		'as_parent'               => array( 'only' => 'themesflat_iconbox' ), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
		'icon'        => THEMESFLAT_ICON,
		'content_element'         => true,
		'show_settings_on_create' => false,
		'category'                => esc_html__( 'redbiz', 'redbiz' ),
		'params'                  => array(			
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Margin', 'redbiz' ),
				'param_name' => 'margin',
				'value' => '30',
				'description' => esc_html__( 'Margin item for slide', 'redbiz' )
			),

			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Slides Per View', 'redbiz' ),
				'param_name' => 'slides_per_view',
				'value' => '2',
				'description' => esc_html__( 'The number of items you want to see on the screen.', 'redbiz' )
			),

			array(
				'type' => 'checkbox',
				'heading' => esc_html__( 'Autoplay', 'redbiz' ),
				'param_name' => 'autoplay',
				'value' => array( esc_html__( 'Yes, Please', 'redbiz' ) => 1 )
			),

			array(
				'type' => 'checkbox',
				'heading' => esc_html__( 'Show Pagination Control', 'redbiz' ),
				'param_name' => 'show_control',
				'value' => array( esc_html__( 'Yes, Please', 'redbiz' ) => 1 )
			),

			array(
				'type' => 'checkbox',
				'heading' => esc_html__( 'Show prev/next buttons', 'redbiz' ),
				'param_name' => 'show_direction',
				'value' => array( esc_html__( 'Yes, Please', 'redbiz' ) => 1 )
			),	

			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Extra Class Name', 'redbiz' ),
				'param_name' => 'class',
				'description' => esc_html__( 'Your Custom Class', 'redbiz' )
			),
		
		),
		'js_view' => 'VcColumnView'
	) );


	vc_map( array(
		'base'        => 'themesflat_iconbox',
		'name'        => esc_html__( 'Themesflat: Icon Box', 'redbiz' ),
		'icon'        => THEMESFLAT_ICON,
		'category'    => esc_html__( 'redbiz', 'redbiz' ),
		'params'      => array_merge($icons_params,$icons_params2,$readmore,array(
			// Title
			array(
				'type'             => 'textfield',
				'heading'          => esc_html__( 'Title', 'redbiz' ),
				'param_name'       => 'title',
				'edit_field_class' => 'vc_col-md-6 vc_column'
				),

			// Sub Title
			array(
				'type'             => 'textfield',
				'heading'          => esc_html__( 'Sub Title', 'redbiz' ),
				'param_name'       => 'subd',
				'edit_field_class' => 'vc_col-md-6 vc_column'
				),

			array(
				'type'       => 'textfield',
				'heading'    => esc_html__( 'Number Text', 'redbiz' ),
				'description' => esc_html__( 'Number Text Ex: 01, 02, 03', 'redbiz' ),
				'param_name' => 'number_text'
				),

			array(
				'type'       => 'textarea_html',
				'heading'    => esc_html__( 'Content', 'redbiz' ),
				'param_name' => 'content'
				),

			array(
				'type'       => 'attach_image',
				'heading'    => esc_html__( 'Image', 'redbiz' ),
				'param_name' => 'image',
				'description' => esc_html__( 'Select image to replace the icon', 'redbiz' )
				),

			array(
				'type' => 'checkbox',
				'heading' => esc_html__( 'Use Image as Icon', 'redbiz' ),
				'param_name' => 'as_icon',
				'description' => esc_html__( 'Replace Icon font with image', 'redbiz' ),
				'value' => array( esc_html__( 'Yes, Please', 'redbiz' ) => 'yes' )
			),

			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Style', 'redbiz' ),
				'param_name' => 'style',
				'value' => array(
					esc_html__( 'Style 1', 'redbiz' ) => 'style1',
					esc_html__( 'Style 2', 'redbiz' ) => 'style2',
					esc_html__( 'Style 3', 'redbiz' ) => 'style3',
					esc_html__( 'Style 4', 'redbiz' ) => 'style4',
					esc_html__( 'Style 5', 'redbiz' ) => 'style5',
					)
				),

			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Icon Position', 'redbiz' ),
				'param_name' => 'icon_position',
				'value' => array(
					esc_html__( 'Top', 'redbiz' ) => 'top',
					esc_html__( 'Left', 'redbiz' ) => 'left',
					esc_html__( 'Left Inline', 'redbiz' ) => 'inline-left',
					esc_html__( 'Right Inline', 'redbiz' ) => 'inline-right',
					esc_html__( 'Right', 'redbiz' ) => 'right'
					)
				),

			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Icon Style', 'redbiz' ),
				'param_name' => 'icon_style',
				'value' => array(
					esc_html__( 'Default', 'redbiz' )         => 'transparent',
					esc_html__( 'Circle', 'redbiz' )          => 'circle',
					esc_html__( 'Circle Outline', 'redbiz' )  => 'circle-outlined',
					esc_html__( 'Square', 'redbiz' )          => 'square',
					esc_html__( 'Square Outline', 'redbiz' )  => 'square-outlined'
					)
				),

			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Content Position', 'redbiz' ),
				'param_name' => 'content_position',
				'value' => array(
					esc_html__( 'Default', 'redbiz' )         => 'unset',
					esc_html__( 'Left', 'redbiz' )          => 'left',
					esc_html__( 'Center', 'redbiz' )  => 'center',
					esc_html__( 'Right', 'redbiz' )          => 'right'
					)
				),

			array(
				'type'       => 'textfield',
				'heading'    => esc_html__( 'Extra Class', 'redbiz' ),
				'description' => esc_html__( 'Enter Class Ex: icon-image-style1 bg-color-white', 'redbiz' ),
				'param_name' => 'class'
				),

			array(
				'type' => 'colorpicker',
				'heading'    => esc_html__( 'Icon Background Color', 'redbiz' ),
				'param_name' => 'icon-background',
				'group' => esc_html__( 'Design Options', 'redbiz' ),
				'std' => 'transparent',
				),

			array(
				'type' => 'colorpicker',
				'heading'    => esc_html__( 'Icon Color', 'redbiz' ),
				'param_name' => 'icon-color',
				'group' => esc_html__( 'Design Options', 'redbiz' ),
				'std' => '#d21e2b',
				),

			array(
				'type' => 'textfield',
				'heading'    => esc_html__( 'Icon Font Size', 'redbiz' ),
				'param_name' => 'icon-font-size',
				'group' => esc_html__( 'Design Options', 'redbiz' ),
				'std' => '36px',
				),
		
			array(
				'type' => 'textfield',
				'heading'    => esc_html__( 'Icon Size', 'redbiz' ),
				'param_name' => 'icon-size',
				'group' => esc_html__( 'Design Options', 'redbiz' ),
				'description' => esc_html__('Icon Size In px','redbiz'),
				'std' => '70px',
				),

			array(
				'type' => 'textfield',
				'heading'    => esc_html__( 'Title Font Size', 'redbiz' ),
				'param_name' => 'title-font-size',
				'group' => esc_html__( 'Design Options', 'redbiz' ),
				'std' => '20px',
				),

			array(
				'type' => 'textfield',
				'heading'    => esc_html__( 'Title Font Weight', 'redbiz' ),
				'param_name' => 'title-font-weight',
				'group' => esc_html__( 'Design Options', 'redbiz' ),
				'std' => '500',
				),

			array(
				'type' => 'colorpicker',
				'heading'    => esc_html__( 'Title Color', 'redbiz' ),
				'param_name' => 'title-color',
				'std' => '#111',
				'group' => esc_html__( 'Design Options', 'redbiz' )
				),

			array(
				'type' => 'css_editor',
				'param_name' => 'css',
				'group' => esc_html__( 'Design Options', 'redbiz' )
				),

			array(
				'type'       => 'textfield',
				'param_name' => 'default_id',
				'group' => esc_html__( 'Design Options', 'redbiz' ),
				'value' => 'themesflat_'.current_time('timestamp'),
				'std' => 'themesflat_'.current_time('timestamp')
				)
			))
		) );

}

function themesflat_iconbox_css($atts) {
	$style[] = $atts['css'];
	if (!empty($atts['css'])) {
		if (function_exists('vc_shortcode_custom_css_class')) {
			$vcclass = vc_shortcode_custom_css_class( $atts['css'], '' );
		}
	}
	else {
		$vcclass = $atts['default_id']; 
	}
	$style[] = sprintf('
		.%1$s.themesflat_iconbox .iconbox-icon {
			width: %1$spx;
			height: %1$spx;
			background-color: %2$s;
		}',$vcclass,str_replace('px','',str_replace('px','',$atts['icon-size'])),$atts['icon-background']);
	$style['iconbox-icon'] = sprintf('
			width: %1$spx;
			height: %1$spx;
			background-color: %2$s;
		',str_replace('px','',str_replace('px','',$atts['icon-size'])),$atts['icon-background']);
	$style['iconbox_title'] = sprintf('
			font-size: %1$spx;
			font-weight: %2$s;
			color: %3$s;
		',str_replace('px','',$atts['title-font-size']),$atts['title-font-weight'],$atts['title-color']);
	$style['icon_span'] = sprintf('
			line-height: %1$spx;
			color: %2$s;
			font-size: %3$spx;
		',str_replace('px','',str_replace('px','',$atts['icon-size'])),$atts['icon-color'],str_replace('px','',$atts['icon-font-size']));
	$style['position_content'] = sprintf('
			text-align: %1$s;
		',$atts['content_position']);
	return $style;
}

add_filter( 'themesflat/shortcode/themesflat_iconbox_class', 'themesflat_iconbox_shortcode_class', 10, 3 );

function themesflat_iconbox_shortcode_class( $classes, $atts ) {
	$classes[] = $atts['icon_position'];
	$classes[] = $atts['style'];
	$classes[] = $atts['icon_style'];	
	if (!empty($atts['css'])) {
		if (function_exists('vc_shortcode_custom_css_class')) {
			$vcclass = vc_shortcode_custom_css_class( $atts['css'], ' ' );
		}
	}
	else {
		$date = date_create(); 
		$vcclass = $atts['default_id']; 
	}
	$classes[] =$vcclass;
	return $classes;
}

add_shortcode( 'themesflat_iconbox_slider', 'themesflat_shortcode_iconbox_slider' );
add_shortcode( 'themesflat_iconbox', 'themesflat_shortcode_iconbox' );

/**
 * Iconbox shortcode handle
 * 
 * @param   array  $atts  Shortcode attributes
 * @return  void
 */
function themesflat_shortcode_iconbox( $atts, $content = null ) {
	$atts = vc_map_get_attributes( 'themesflat_iconbox', $atts );
	extract (apply_filters( 'themesflat/shortcode/themesflat_iconbox_atts',$atts));
	$icon_name = themesflat_shortcode_icon_name('icon_',$icon_type);
	$icon_name2 = themesflat_shortcode_icon_name('readmore_',$readmore_type);
	$icon_value = !empty($icon_name) ? $atts[$icon_name] : '';
	$icon_value2 = !empty($icon_name2) ? $atts[$icon_name2] : '';
	$style = themesflat_iconbox_css($atts);
	$class = apply_filters( 'themesflat/shortcode/themesflat_iconbox_class', array( 'themesflat_iconbox themesflat_hover', $atts['class'] ), $atts );
	$icon_inner = false;
		$image_html = '';
	
	if ( ! empty( $image ) ) {
		$image_html = '';
		if (is_numeric( $image ) && $image_src = wp_get_attachment_image_src( $image, 'full' ) ) {
				$img_src = array_shift( $image_src );
				$alt  = (! empty($title)) ? $title : basename($image);
			if ( $as_icon != 'yes') {
				$image_html = sprintf( '<div class="iconbox-image"><img src="%s" alt="%s" /></div>', esc_url( $img_src ), esc_attr( $alt ) );
				if ($icon_type != 'none') {
					$icon_inner = sprintf( '<span class="%s"></span>', $icon_value);
				}
			}
			else {
				$icon_inner = sprintf( '<span><img src="%s" alt="%s" /></span>', esc_url( $img_src ), esc_attr( $alt ));
			}
		}
		
	}
	elseif ( $icon_type != 'none' ) {

		$icon_inner = sprintf( '<span class="%s" style="%s"></span>', $icon_value,esc_attr($style['icon_span']));
	}
	else {
		$icon_inner = false;
	}

	$box_icon = $icon_inner ? sprintf( '<div class="iconbox-icon" style="%2$s"><div class="icon" style="%2$s">%1$s</div></div>', $icon_inner,esc_attr($style['iconbox-icon']) ) : '';
	$box_readmore = '';

	if ( ! empty( $link ) && ! empty( $text ) ) {
		$box_readmore = sprintf( '
				<p><a class="themesflat-button no-background" href="%1$s">%2$s<i class="readmore-icon %3$s"></i></a></p>', esc_url( $link ),  $text,$icon_value2);
	}
	$numbertext = '';
	if ( ! empty( $number_text ) ) {
		$numbertext = sprintf( '
				<div class="number-text">%s</div>', esc_attr( $number_text ));
	}

	$d = ! empty ($link) ? sprintf( '
				<a href="%s" style="%3$s">%s</a>
			', esc_url( $link ), esc_html( $title ),esc_attr($style['iconbox_title']) ) : $title;


	if ( ! empty( $subd ) ) {
		$subd = sprintf( '
			<div class="sub-title">
				%s
			</div>', esc_html( $subd ) );
	}

	$tag = 'h4';

	if (! empty ($title)) {
		$title_html = sprintf('<%2$s class="title" style="%3$s">%1$s</%2$s>', wp_kses_post($d),esc_attr($tag),esc_attr($style['iconbox_title']));
	}
	
	return sprintf( '<div class="%2$s" >
		%8$s
		%1$s
		%10$s
		<div class="iconbox-content" style="%9$s">
			%3$s
			%7$s
			%5$s
			%6$s
		</div>
	</div>', wp_kses_post($box_icon), esc_attr( implode( ' ', $class ) ),  wp_kses_post($title_html), $tag, wpb_js_remove_wpautop ($content,true), wp_kses_post($box_readmore), wp_kses_post($subd),wp_kses_post($image_html),esc_attr($style['position_content']),  $numbertext);
}


/**
 * This function will be use to handle imagebox slider
 * shortcode
 * 
 * @param   string  $atts     Shortcode attributes
 * @param   string  $content  Shortcode content
 * @return  string
 */
function themesflat_shortcode_iconbox_slider( $atts, $content = null,$attss ) {
	$atts = vc_map_get_attributes( 'themesflat_iconbox_slider', $atts );	
	extract (apply_filters( 'themesflat/shortcode/themesflat_iconbox_slider_atts',$atts));
	$config = $atts;

	unset( $config['class'] );
	unset( $config['css'] );

	$class = apply_filters( 'themesflat/shortcode/themesflat_iconbox_slider_class', array( 'themesflat-icon-slider','themesflat_enable_slider', $atts['class'] ), $atts );

	// Enqueue shortcode assets
	wp_enqueue_script( 'themesflat-carousel' );
	
	return sprintf( '
		<div class="%s" data-margin="%s" data-slides_per_view="%s" data-autoplay="%s" data-show_control="%s" data-show_direction="%s">			
			%s				
		</div>
	', implode( ' ', $class ), esc_attr( $atts['margin'] ) , esc_attr( $atts['slides_per_view'] ), esc_attr( $atts['autoplay'] ), esc_attr( $atts['show_control'] ), esc_attr( $atts['show_direction'] ),  do_shortcode( $content ) );
}