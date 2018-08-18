<?php
/**
 * Register filter for append custom class name
 * that generated from visual-composer
 */
add_filter( 'themesflat/shortcode/themesflat_progressbar_class', 'themesflat_progressbar_shortcodes_class', 10, 3 );

/**
 * Register shortcode into Visual Composer
 */
add_action( 'vc_before_init', 'themesflat_progressbar_shortcode_params' );

/**
 * Register parameters for counter shortcode
 * 
 * @return  void
 */
$icons_type = array();

function themesflat_progressbar_shortcodes_class($atts) {
	$class[] = 'themesflat_progressbar';
	$class[] = $atts['class'];
	if (function_exists('vc_shortcode_custom_css_class')) {
		$vcclass = vc_shortcode_custom_css_class( $atts['css'], ' ' );
	}
	$class[] =$vcclass;
	return $class;
}

function themesflat_progressbar_shortcode_params() {
	$params = array_merge(
		 array(

			array(
				'type'             => 'textfield',
				'heading'          => esc_html__( 'Title', 'redbiz' ),
				'param_name'       => 'title'
				),

			array(
				'type'             => 'textfield',
				'heading'          => esc_html__( 'Number Percent (1 - 100)', 'redbiz' ),
				'param_name'       => 'perc',
				'value'            => '0'
				),

			array(
				'type'             => 'textfield',
				'heading'          => esc_html__( 'Duration', 'redbiz' ),
				'param_name'       => 'duration',
				'value'            => 2000
				),

			array(
				'type'       => 'textfield',
				'heading'    => esc_html__( 'Height Progress Bar', 'redbiz' ),
				'param_name' => 'height',
				'value'	     => '5px',
				),

			array(
				'type'       => 'textfield',
				'heading'    => esc_html__( 'Extra Class', 'redbiz' ),
				'param_name' => 'class',
				'description' => esc_html__( 'Enter class: left right font-size-60', 'redbiz' ),
				),

			array(
				'type' => 'css_editor',
				'param_name' => 'css',
				'group' => esc_html__( 'Design Options', 'redbiz' )
				)
			)
		);

	vc_map( array(
		'base'        => 'themesflat_progressbar',
		'name'        => esc_html__( 'Themesflat: Progress Bar', 'redbiz' ),
		'icon'        => THEMESFLAT_ICON,
		'category'    => esc_html__( 'redbiz', 'redbiz' ),
		'params'      => $params
		) );
}

add_shortcode( 'themesflat_progressbar', 'themesflat_shortcode_progressbar' );
/**
 * progressbar shortcode handle
 * 
 * @param   array  $atts  Shortcode attributes
 * @return  void
 */
function themesflat_shortcode_progressbar( $atts, $content = null ) {
	$atts = vc_map_get_attributes( 'themesflat_progressbar', $atts );
	extract (apply_filters( 'themesflat/shortcode/themesflat_progressbar_atts',$atts));

	$class = apply_filters( 'themesflat/shortcode/themesflat_progressbar_class', $atts );
	$_perc = '';
	if ($perc != null) {
		$_perc = $perc;
		if ($perc >= 100) {
			$_perc = 100;
		}
		if ($perc <= 0) {
			$_perc = 0;
		}
	}
	$title_html='';
	if (!empty($title)) {
		$title_html = '<div class="title">'.$title.'</div>';
	}
	$_duration = '';
	if (!empty($duration)) {
		$_duration = 'data-duration="'.$duration.'"';
	}


	$allow = array(
		'div' => array(
			'class' => array(),
			)
		);

	$themesflat_client = sprintf( '
		<div class="progress-item %6$s">
				%s
			<div class="perc">
				<span>%2$s%5$s</span>
			</div>
			<div class="progres-bar" style="height : %4$s; border-radius: %4$s" data-percent="%2$s" data-waypoint-active="yes">
				<div class="progress-animate" style="height: %4$s" %3$s></div>
			</div>
		</div>', wp_kses_post($title_html), $_perc, $_duration, $height, wp_kses_post('%'), esc_attr( implode( ' ', $class ) ));

	// Enqueue shortcode assets		
	wp_enqueue_script( 'themesflat-progressbar' );	

	return $themesflat_client ;
}