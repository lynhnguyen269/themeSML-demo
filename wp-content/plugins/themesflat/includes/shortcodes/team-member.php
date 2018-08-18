<?php
if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
	/**
	 * Extended class to integrate testimonial slider with
	 * visual composer
	 */
    class WPBakeryShortCode_themesflat_teammember_slider extends WPBakeryShortCodesContainer {
    }
}

/**
 * Register filter for append custom class name
 * that generated from visual-composer
 */
add_filter( 'themesflat/shortcode/themesflat_teammember_class', 'themesflat_teammember_shortcodes_class', 10, 3 );
add_action( 'vc_before_init', 'themesflat_team_member_shortcode_params' );
add_filter( 'themesflat/shortcode/themesflat_teammember_atts', 'themesflat_teammember_shortcode_atts' );

function themesflat_teammember_shortcodes_class($atts) {
	if (function_exists('vc_shortcode_custom_css_class')) {
		$vcclass = vc_shortcode_custom_css_class( $atts['css'], ' ' );
	}
	$class[] = 'themesflat-team';
	$class[] =$vcclass;
	$class[] = $atts['style'];
	$class[] = $atts['class'];
	return $class;
}

function themesflat_teammember_shortcode_atts( $atts ) {
	$icons_params = themesflat_available_icons('icon');
	$atts = array_merge($atts,$icons_params);
	return $atts;
}

function themesflat_team_member_shortcode_params() {
	/**
	 * Map the testimonial slider shortcode
	 */
	vc_map( array(
		'name'                    => esc_html__( 'Themesflat: Team Member Slider', 'redbiz' ),
		'base'                    => 'themesflat_teammember_slider',
		'as_parent'               => array( 'only' => 'themesflat_member' ), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
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
				'description' => esc_html__( 'Margin Item For Slide', 'redbiz' )
			),

			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Slides Per View', 'redbiz' ),
				'param_name' => 'slides_per_view',
				'value' => '1',
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
				'heading' => esc_html__( 'Show Prev/Next Buttons', 'redbiz' ),
				'param_name' => 'show_direction',
				'value' => array( esc_html__( 'Yes, Please', 'redbiz' ) => 1 )
			),	

			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Extra Class Name', 'redbiz' ),
				'param_name' => 'class',
				'description' => esc_html__( 'Your Custom Class', 'redbiz' )
			),

			array(
				'type' => 'css_editor',
				'param_name' => 'css',
				'group' => esc_html__( 'Design Options', 'redbiz' )
			)
		),
		'js_view' => 'VcColumnView'
	) );

	/**
	 * Map the member item
	 */
	$icons_params = themesflat_map_icons('icon','Icon for readmore');
	vc_map( array(
		'base'        => 'themesflat_member',
		'name'        => esc_html__( 'Themesflat: Team Member', 'redbiz' ),
		'icon'        => THEMESFLAT_ICON,
		'category'    => esc_html__( 'redbiz', 'redbiz' ),
		'params'      => array_merge(
			array(
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'Name', 'redbiz' ),
					'param_name'  => 'name'
				),

				array(
					'type'       => 'attach_image',
					'heading'    => esc_html__( 'Image', 'redbiz' ),
					'param_name' => 'image'
				),

				array(
					'type'       => 'textfield',
					'heading'    => esc_html__( 'Image Size', 'redbiz' ),
					'description'    => esc_html__( '( Enter your image size Ex: medium,small,... Default: Full ). Alternatively enter size in pixels (Example: 200x100 (Width x Height)).', 'redbiz' ),
					'param_name' => 'image_size',
					'std'		 => 'full'
				),

				array(
					'type'       => 'dropdown',
					'heading'    => esc_html__( 'Image Align', 'redbiz' ),
					'param_name' => 'stand',
					'value' => array(
						esc_html__( 'Left', 'redbiz' ) => 'left',
						esc_html__( 'Left Inline', 'redbiz' ) => 'inline-left',
						esc_html__( 'Right Inline', 'redbiz' ) => 'inline-right',
						esc_html__( 'Right', 'redbiz' ) => 'right'
					)
				),

				array(
					'type'             => 'textfield',
					'heading'          => esc_html__( 'Position', 'redbiz' ),
					'param_name'       => 'position',
				),

				array(
					'type'       => 'textarea_html',
					'heading'    => esc_html__( 'Content', 'redbiz' ),
					'param_name' => 'content'
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
					'type'       => 'dropdown',
					'heading'    => esc_html__( 'Style', 'redbiz' ),
					'param_name' => 'style',
					'value'		=> array(
							'Grid Style 1'	=> 'grid-style1',
							'Grid Style 2'	=> 'grid-style2',
							'Grid Style 3'	=> 'grid-style3',
							'Detail Style'	=> 'detail-style'
						),
					'std'	=> 'grid-style1'
				),

				array(
					'type' => 'checkbox',
					'heading' => esc_html__( 'Show Line Bottom Team Info', 'redbiz' ),
					'param_name' => 'show_line',
					'value' => array( esc_html__( 'Yes, Please', 'redbiz' ) => 1 )
				),

				array(
					'type'       => 'textfield',
					'heading'    => esc_html__( 'Link Detail Member', 'redbiz' ),
					'param_name' => 'link', 
					'std'	=> '#'
				),

				array(
					'type'       => 'textfield',
					'heading'    => esc_html__( 'Phone', 'redbiz' ),
					'param_name' => 'phone'
				),

				array(
					'type'       => 'textfield',
					'heading'    => esc_html__( 'Email', 'redbiz' ),
					'param_name' => 'email'
				),

				array(
					'type'       => 'textfield',
					'heading'    => esc_html__( 'Experience', 'redbiz' ),
					'param_name' => 'experience'
				),

				array(
					'type'       => 'textfield',
					'heading'    => esc_html__( 'Facebook URL', 'redbiz' ),
					'param_name' => 'facebook'
				),

				array(
					'type'       => 'textfield',
					'heading'    => esc_html__( 'Twitter URL', 'redbiz' ),
					'param_name' => 'twitter'
				),

				array(
					'type'       => 'textfield',
					'heading'    => esc_html__( 'Google URL', 'redbiz' ),
					'param_name' => 'google'
				),

				array(
					'type'       => 'textfield',
					'heading'    => esc_html__( 'LikeIn URL', 'redbiz' ),
					'param_name' => 'likedin'
				),

				array(
					'type'       => 'textfield',
					'heading'    => esc_html__( 'Skype URL', 'redbiz' ),
					'param_name' => 'skype'
				),

				array(
					'type'       => 'textfield',
					'heading'    => esc_html__( 'Instagram URL', 'redbiz' ),
					'param_name' => 'instagram'
				),

				array(
					'type'       => 'textfield',
					'heading'    => esc_html__( 'Vimeo URL', 'redbiz' ),
					'param_name' => 'vimeo'
				),

				array(
					'type'       => 'dropdown',
					'heading'    => esc_html__( 'Text Align', 'redbiz' ),
					'param_name' => 'text_align',
					'value'		=> array(
							'Default'	=> 'default',
							'Left'	=> 'left',
							'Center'	=> 'center',
							'Right'	=> 'right'
						),
					'std'	=> 'default'
				),

				array(
					'type' => 'textfield',
					'heading' => esc_html__( 'Read More Link', 'redbiz' ),
					'param_name' => 'link',
					'description' => esc_html__( 'Enter custom url for read more button', 'redbiz' )
				),

				array(
					'type' => 'textfield',
					'heading' => esc_html__( 'Read More Text', 'redbiz' ),
					'param_name' => 'text',
					'description' => esc_html__( 'Enter custom text for read more button', 'redbiz' ),
					'value' => esc_html__( 'View Profile', 'redbiz' )
				)),
			$icons_params,
			array(

				array(
					'type'       => 'textfield',
					'heading'    => esc_html__( 'Extra Class', 'redbiz' ),
					'param_name' => 'class'
				),

				array(
					'type' => 'css_editor',
					'param_name' => 'css',
					'group' => esc_html__( 'Design Options', 'redbiz' )
				)
			)
		)
	) );
}

add_shortcode( 'themesflat_member', 'themesflat_shortcode_member' );
add_shortcode( 'themesflat_teammember_slider', 'themesflat_shortcode_teammember_slider' );

/**
 * Testimonial shortcode handle
 * 
 * @param   string  $atts  Shortcode attributes
 * @return  void
 */
function themesflat_shortcode_member( $atts, $content = null ) {
	$atts = vc_map_get_attributes( 'themesflat_member', $atts );
	extract (apply_filters( 'themesflat/shortcode/themesflat_member_atts',$atts));
	$icon_name = themesflat_shortcode_icon_name('icon_',$icon_type);
	$icon_value = !empty($icon_name) ? $atts[$icon_name] : '';

	$member_image = '';
	$name ='';
	$position ='';
	$link = '#';
	$class = apply_filters( 'themesflat/shortcode/themesflat_teammember_class',  $atts );
	$name .= sprintf( '<h4 class="team-name"><a href="%s" title="">%s</a></h4>', esc_url( $atts['link'] ), wp_kses_post( $atts['name'] ) );
	if ( ! empty( $atts['position'] ) )
	$position.= sprintf( '<div class="team-position">%s</div>', wp_kses_post( $atts['position'] ) );
	
	$member_extra_info = '';
	$extra_info = array('phone' => esc_html__('Phone'),'email' => esc_html__('Gmail'),'experience' => esc_html__('Experience'));
	if ( !empty($phone) || !empty($email) || !empty($experience)) {
		$member_extra_info = '<ul class="themesflat_member_extra_info">';
		foreach ($extra_info as $key => $value) {
			if(!empty($atts[$key])) {
				$member_extra_info .= "<li><span>".esc_html($value)."</span>".esc_html__($atts[$key])."</li>";
			}
		}
		$member_extra_info .= '</ul>';
	}

	$social_links = '';

	if ( ! empty( $atts['facebook'] ) )
		$social_links.= sprintf( ' <a href="%s" data-title="Facebook" class="facebook"><i class="fa fa-facebook"></i></a>', esc_url( $atts['facebook'] ) );

	if ( ! empty( $atts['twitter'] ) )
		$social_links.= sprintf( ' <a href="%s" data-title="Twitter" class="twitter"><i class="fa fa-twitter"></i></a>', esc_url( $atts['twitter'] ) );

	if ( ! empty( $atts['vimeo'] ) )
		$social_links.= sprintf( ' <a href="%s" data-title="vimeo" class="vimeo"><i class="fa fa-vimeo"></i></a>', esc_url( $atts['vimeo'] ) );

	if ( ! empty( $atts['google'] ) )
		$social_links.= sprintf( ' <a href="%s" data-title="google" class="google"><i class="fa fa-google-plus"></i></a>', esc_url( $atts['google'] ) );

	if ( ! empty( $atts['likedin'] ) )
		$social_links.= sprintf( ' <a href="%s" data-title="likedin" class="likedin"><i class="fa fa-linkedin"></i></a>', esc_url( $atts['likedin'] ) );

	if ( ! empty( $atts['instagram'] ) )
		$social_links.= sprintf( ' <a href="%s" data-title="Instagram" class="instagram"><i class="fa fa-instagram"></i></a>', esc_url( $atts['instagram'] ) );

	if ( ! empty( $atts['skype'] ) )
		$social_links.= sprintf( ' <a href="%s" data-title="skype" class="skype"><i class="fa fa-skype"></i></a>', esc_url( $atts['skype'] ) );
	

	$box_readmore = '';
	$button_class = ($atts['style'] == 'grid-style1'? 'no-background' :'');

	if ( ! empty( $atts['link'] ) && ! empty( $atts['text'] ) ) {
		$box_readmore = sprintf( '
				<a class="themesflat-button %3$s" href="%1$s">%2$s<i class="readmore-icon %4$s"></i></a>
			', esc_url( $atts['link'] ), esc_html( $atts['text'] ),esc_attr($button_class),esc_attr($icon_value ));
	}
	$box_social_links = '';
	if ( ! empty( $social_links ) )
		$social_links = sprintf( '<div class="social-links"><span>%s</span>%s</div>',esc_html__(''), $social_links);
		$box_social_links = sprintf( '<div class="box-social-links %s">%s %s</div>', wp_kses_post( $atts['text_align']), $social_links,$box_readmore );

	

	if ( ! empty( $atts['image'] ) ) {
		if ( is_numeric( $atts['image'] ) && $atts['image'] != '') {
		  	$image = wpb_getImageBySize( array( 'attach_id' => $atts['image'], 'thumb_size' => $atts['image_size'] ) );
		  	$image = $image['thumbnail'];
		}
		elseif ( filter_var( $atts['image'], FILTER_VALIDATE_URL ) ) {
		  	$image = sprintf( '<img src="%s" alt="imagebox-image"  />', esc_url( $atts['image'] ) );
		}

		$class[] = 'has-image';
		$member_image = sprintf( '
			<div class="team-image item-hover">				
				%1$s				
			</div>
		', $image );
	}
	$team_line='';
	if ($show_line == 1) {
		$team_line = sprintf('<div class="team-line"></div>');
	}

	$class_content = '';
	if (! empty($content)) {
		$class_content = 'team-desc';
	}


	if($atts['style'] == 'grid-style1') {
		return sprintf( '
			<div class="%s themesflat-hover %11$s">
				%s			
				<div class="team-info %9$s %12$s">
					<div class="box-info">	
					%s
					%s
					</div>
					%10$s
					<div class="%8$s">%s</div>
					%s
					%s
				</div>
			</div>
		', esc_attr( implode( ' ', $class ) ), wp_kses_post($member_image), wp_kses_post($name), wp_kses_post($position), wp_kses_post($content),wp_kses_post($member_extra_info) ,wp_kses_post($box_social_links), $class_content, $text_align, $team_line, $stand, $content_position
		 );
	};
	
	return sprintf( '
		<div class="%s themesflat-hover %11$s">
			%s			
			<div class="team-info %9$s %12$s">
				<div class="box-info">	
				%s
				%s
				</div>
				%10$s
				%s
				<div class="%8$s">%s</div>
				%s
			</div>
		</div>
	', esc_attr( implode( ' ', $class ) ), wp_kses_post($member_image),  wp_kses_post($position), wp_kses_post($name), wp_kses_post($member_extra_info), wp_kses_post($content), wp_kses_post($box_social_links), $class_content, $text_align, $team_line, $stand, $content_position
	 );
	
	
}

/**
 * This function will be use to handle testimonial slider
 * shortcode
 * 
 * @param   string  $atts     Shortcode attributes
 * @param   string  $content  Shortcode content
 * @return  string
 */
function themesflat_shortcode_teammember_slider( $atts, $content = null ) {
	$atts = vc_map_get_attributes( 'themesflat_teammember_slider', $atts );
	extract (apply_filters( 'themesflat/shortcode/themesflat_teammember_slider_atts',$atts));
	$config = $atts;

	unset( $config['class'] );
	unset( $config['css'] );

	$class = apply_filters( 'themesflat/shortcode/themesflat_testimonial_slider_class', array( 'testimonial-slider','themesflat_enable_slider', $atts['class'] ), $atts );

	// Enqueue shortcode assets
	wp_enqueue_script( 'themesflat-carousel' );
	
	return sprintf( '
		<div class="%s" data-margin="%s" data-slides_per_view="%s" data-autoplay="%s" data-show_control="%s" data-show_direction="%s">			
			%s				
		</div>
	', implode( ' ', $class ), esc_attr( $margin ) , esc_attr( $slides_per_view ), esc_attr( $autoplay ), esc_attr( $show_control ), esc_attr( $show_direction ),  do_shortcode( $content ) );
}