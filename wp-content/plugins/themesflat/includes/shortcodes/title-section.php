<?php
/**
 * Register filter for append custom class name
 * that generated from visual-composer
 */

/**
 * Register shortcode into Visual Composer
 */
add_action( 'vc_before_init', 'themesflat_title_section_shortcode_params' );

/**
 * Register parameters for iconbox shortcode
 * 
 * @return  void
 */
function themesflat_title_section_shortcode_params() {
	vc_map( array(
		'base'        => 'themesflat_title_section',
		'name'        => esc_html__( 'Themesflat: Title Section', 'redbiz' ),
		'icon'        => THEMESFLAT_ICON,
		'category'    => esc_html__( 'redbiz', 'redbiz' ),
		'params'      => array(
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Title', 'redbiz' ),
				'param_name'  => 'title'
			),

			array(
				'type'       => 'textfield',
				'heading'    => esc_html__( 'Top Title', 'redbiz' ),
				'param_name' => 'top_title'
			),

			array(
				'type'       => 'textarea_html',
				'heading'    => esc_html__( 'Content', 'redbiz' ),
				'param_name' => 'content'
			),

			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Section Title Position', 'redbiz' ),
				'param_name' => 'title_position',
				'value' => array(
					esc_html__( 'Left', 'redbiz' ) => 'left',
					esc_html__( 'Center', 'redbiz' ) => 'center',
					esc_html__( 'Right', 'redbiz' ) => 'right'
				)
			),

			array(
				'type'       => 'textfield',
				'heading'    => esc_html__( 'Title Font Size', 'redbiz' ),
				'description'    => esc_html__( '( Enter Font Size Ex: 40px Default: 36px ).', 'redbiz' ),
				'param_name' => 'title_font_size',
				'std'		 => '36px'
			),

			array(
				'type'       => 'textfield',
				'heading'    => esc_html__( 'Title Font Weigth', 'redbiz' ),
				'description'    => esc_html__( '( Enter Font Weigth Ex: 700 Default: 700 ).', 'redbiz' ),
				'param_name' => 'title_font_weight',
				'std'		 => '700'
			),

			array(
				'type'       => 'textfield',
				'heading'    => esc_html__( 'Title Line Height', 'redbiz' ),
				'description'    => esc_html__( '( Enter Line Height Ex: 40px ).', 'redbiz' ),
				'param_name' => 'title_line_height',
				'std'		 => '36px'
			),

			array(
				'type'       => 'textfield',
				'heading'    => esc_html__( 'Title Letter Spacing', 'redbiz' ),
				'description'    => esc_html__( '( Enter Letter Spacing Ex: 0.5px ).', 'redbiz' ),
				'param_name' => 'title_letter_spacing',
				'std'		 => '0px'
			),

			array(
				'type'       => 'textfield',
				'heading'    => esc_html__( 'Title Margin Bottom', 'redbiz' ),
				'description'    => esc_html__( '( Enter Margin Bottom Ex: 5px ).', 'redbiz' ),
				'param_name' => 'title_margin_bottom',
				'std'		 => '2px'
			),

			array(
				'type' => 'checkbox',
				'heading' => esc_html__( 'Show Line Bottom Title', 'redbiz' ),
				'param_name' => 'show_line',
				'value' => array( esc_html__( 'Yes, Please', 'redbiz' ) => 1 )
			),

			array(
				'type'       => 'textfield',
				'heading'    => esc_html__( 'Content Font Size', 'redbiz' ),
				'description'    => esc_html__( '( Enter Font Size Ex: 20px ).', 'redbiz' ),
				'param_name' => 'content_font_size',
				'std'		 => '15px'
			),

			array(
				'type'       => 'textfield',
				'heading'    => esc_html__( 'Content Font Weigth', 'redbiz' ),
				'description'    => esc_html__( '( Enter Font Weigth Ex: 400 ).', 'redbiz' ),
				'param_name' => 'content_font_weight',
				'std'		 => '400'
			),

			array(
				'type'       => 'textfield',
				'heading'    => esc_html__( 'Content Line Height', 'redbiz' ),
				'description'    => esc_html__( '( Enter Line Height Ex: 25px ).', 'redbiz' ),
				'param_name' => 'content_line_height',
				'std'		 => '26px'
			),

			array(
				'type'       => 'textfield',
				'heading'    => esc_html__( 'Content Letter Spacing', 'redbiz' ),
				'description'    => esc_html__( '( Enter Letter Spacing Ex: 0.5px ).', 'redbiz' ),
				'param_name' => 'content_letter_spacing',
				'std'		 => '0px'
			),

			array(
				'type' => 'colorpicker',
				'heading'    => esc_html__( 'Title Color', 'redbiz' ),
				'param_name' => 'title_color',
				'std' => '#111'
				),

			array(
				'type' => 'colorpicker',
				'heading'    => esc_html__( 'Content Color', 'redbiz' ),
				'param_name' => 'content_color',
				'std' => '#999'
				),

			array(
				'type'       => 'textfield',
				'heading'    => esc_html__( 'Extra Class', 'redbiz' ),
				'description'    => esc_html__( '( Enter your class Ex: left center right ).', 'redbiz' ),
				'param_name' => 'class'
			),			

			array(
				'type' => 'css_editor',
				'param_name' => 'css',
				'group' => esc_html__( 'Design Options', 'redbiz' )
			)
		)
	) );
}

add_shortcode( 'themesflat_title_section', 'themesflat_title_section_shortcode_render' );
add_filter( 'themesflat/shortcode/title_section_class', 'themesflat_title_section_shortcode_class' );

function themesflat_title_section_css($atts) {
	$style[] = $atts['css'];
	if (!empty($atts['css'])) {
		if (function_exists('vc_shortcode_custom_css_class')) {
			$vcclass = vc_shortcode_custom_css_class( $atts['css'], '' );
		}
	}		
	$style['title'] = sprintf('
			font-size: %1$spx;
			font-weight: %2$s;
			line-height: %3$s;
			color: %4$s;
			margin-bottom: %5$s;
			letter-spacing: %6$s;
		',str_replace('px','',$atts['title_font_size']),$atts['title_font_weight'],$atts['title_line_height'],$atts['title_color'],$atts['title_margin_bottom'],$atts['title_letter_spacing']);
	$style['content'] = sprintf('
			font-size: %1$spx;
			line-height: %2$s;
			color: %3$s;
			font-weight: %4$s;
			letter-spacing: %5$s;
		',str_replace('px','',$atts['content_font_size']),$atts['content_line_height'],$atts['content_color'],$atts['content_font_weight'],$atts['content_letter_spacing']);	
	return $style;
}

function themesflat_title_section_shortcode_class(  $atts) {
	if (function_exists('vc_shortcode_custom_css_class')) {
		$vcclass = vc_shortcode_custom_css_class( $atts['css'], ' ' );
	}
	$classes[] = 'title-section';
	$classes[] = $atts['class'];
	$classes[] = $vcclass;
	return $classes;
}
// Title section render
function themesflat_title_section_shortcode_render( $atts, $content = null ) {
	$atts = vc_map_get_attributes( 'themesflat_title_section', $atts );
	extract (apply_filters( 'themesflat/shortcode/themesflat_title_section_atts',$atts));
	$style  = themesflat_title_section_css($atts);
	$class = apply_filters( 'themesflat/shortcode/title_section_class', $atts );
	$content = wpb_js_remove_wpautop($content, true); // fix unclosed/unwanted paragraph tags in $content

	$title_line = '';
	if ($show_line == 1) {
		$title_line = sprintf('<div class="title-line"></div>');
	}

	$title_content = '';
	if ( ! empty( $content ) ) {
		$title_content = sprintf( '
			<div class="title-content" style="%2$s">
				%s
			</div>', $content, esc_attr($style['content']) );
	}
	$toptitle = '';
	if ( ! empty( $top_title ) ) {
		$toptitle = sprintf( '
			<div class="top-title" >
				%s
			</div>', wp_kses_post($top_title) );
	}

	$tag = 'h2';

	return sprintf( '<div class="%1$s %8$s ">
		%7$s
		<%4$s class="title" style="%5$s">
			%2$s
		</%4$s>	
		%6$s			
		%3$s

	</div>', esc_attr( implode( ' ', $class ) ), wp_kses_post( $title ), $title_content,esc_attr($tag),esc_attr($style['title']),$title_line, wp_kses_post($toptitle), $title_position );
	
}