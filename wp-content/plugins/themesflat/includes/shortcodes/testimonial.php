<?php
/**
 * Extended class to integrate testimonial slider with
 * visual composer
 */
 
/**
 * Register filter for append custom class name
 * that generated from visual-composer
 */
add_filter( 'themesflat/shortcode/themesflat_testimonial_class', 'themesflat_testimonial_shortcode_class', 10, 2 );
add_filter( 'themesflat/shortcode/themesflat_testimonial_slider_class', 'themesflat_custom_shortcodes_class', 10, 2 );
add_action( 'vc_before_init', 'themesflat_testimonial_shortcode_params' );

function themesflat_testimonial_shortcode_class(  $atts) {
	
	if (function_exists('vc_shortcode_custom_css_class')) {
		$vcclass = vc_shortcode_custom_css_class( $atts['css'], ' ' );
	}
	$classes[] =$vcclass;
	$classes[] = $atts['class'];
	$classes[] = $atts['style'];
	return $classes;
}

function themesflat_testimonial_shortcode_params() {
	/**
	 * Map the testimonial slider shortcode
	 */
	vc_map( array(
		'name'                    => esc_html__( 'Themesflat: Testimonial Slider', 'redbiz' ),
		'base'                    => 'themesflat_testimonial_slider',
		'icon'        => THEMESFLAT_ICON,
		'category'                => esc_html__( 'redbiz', 'redbiz' ),
		'params'                  => array(		
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Style', 'redbiz' ),
				'param_name' => 'style',
				'value' => array(
					esc_html__( 'Style 1', 'redbiz' )   => 'style1',
					esc_html__( 'Style 2', 'redbiz' )   => 'style2',
					),
				'std' => 'style1'
			),

			array(
				'type'       => 'textfield',
				'heading'    => esc_html__( 'Item margin right(px) not include unit', 'redbiz' ),
				'param_name' => 'gutter',
				'value'      => 30,
				),	

			array(
				'type' => 'checkbox',
				'heading' => esc_html__( 'Autoplay', 'redbiz' ),
				'param_name' => 'autoplay',
				'description' => esc_html__( 'Autoplay Mode.', 'redbiz' ),
				'value' => array( esc_html__( 'Yes, Please', 'redbiz' ) => true ),
				'std' => false
			),

			array(
				'type' => 'checkbox',
				'heading' => esc_html__( 'Enable Slider', 'redbiz' ),
				'param_name' => 'enable_slider',
				'value' => array( esc_html__( 'Yes, Please', 'redbiz' ) => true ),
				'std' => false
			),

			array(
				'type' => 'checkbox',
				'heading' => esc_html__( 'Show Pagination Control', 'redbiz' ),
				'param_name' => 'show_control',
				'description' => esc_html__( 'If YES pagination control will be enabled.', 'redbiz' ),
				'value' => array( esc_html__( 'Yes, Please', 'redbiz' ) => 1 ),
				'std' => 0
			),

			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Grid Columns', 'redbiz' ),
				'param_name' => 'columns_testimonial',
				'value'      => array(
					esc_html__( '1 Columns', 'redbiz' ) => 'one-column',						
					esc_html__( '2 Columns', 'redbiz' ) => 'two-column',
					esc_html__( '3 Columns', 'redbiz' ) => 'three-column'
					)
				),

			array(
				'type' => 'checkbox',
				'heading' => esc_html__( 'Show Logo', 'redbiz' ),
				'param_name' => 'show_logo',
				'description' => esc_html__( 'If YES Show Logo will be enabled.', 'redbiz' ),
				'value' => array( esc_html__( 'Yes, Please', 'redbiz' ) => 1 ),
				'std' => 0
			),

			array(
				'type'       => 'textfield',
				'heading'    => esc_html__( 'Number Of Testimonials', 'redbiz' ),
				'param_name' => 'limit',
				'value'      => 3,
				'std'	     => 3
			),

			array(
				'type'       => 'textfield',
				'heading'    => esc_html__( 'Show Item Of Testimonials', 'redbiz' ),
				'param_name' => 'show_item',
				'value'      => '',
				'std'	     => 1
			),	

			array(
				'type'       => 'checkbox',
				'heading'    => esc_html__( 'Show Image Author', 'redbiz' ),
				'param_name' => 'show_image',
				'value' => array( esc_html__( 'Yes, Please', 'redbiz' ) => 1 ),
				'std' => 0
			),		

			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'My Custom Ids', 'redbiz' ),
				'param_name'  => 'post_in',
				'value'		  => '',
				'std'		  => ' ',
				'description' => esc_html__( 'Just Show these testimonial by IDs EX:1,2,3', 'redbiz' ),
			),		

			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Exclude', 'redbiz' ),
				'param_name'  => 'exclude',
				'dependency' 	  => array(
					'element'	=> 'post_in',
					'value'		=> ' ',
					),
				'description' => esc_html__( 'Not Show these testimonial by IDs EX:1,2,3', 'redbiz' ),
			),	

			array(
				'type' => 'checkbox',
				'heading' => esc_html__( 'Show Prev/Next Buttons', 'redbiz' ),
				'param_name' => 'show_direction',
				'description' => esc_html__( 'If "YES" prev/next control will be enabled.', 'redbiz' ),
				'value' => array( esc_html__( 'Yes, Please', 'redbiz' ) => true ),
				'std'	     => false
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
	) );

	
}

add_shortcode( 'themesflat_testimonial_slider', 'themesflat_shortcode_testimonial_slider' );

/**
 * This function will be use to handle testimonial slider
 * shortcode
 * 
 * @param   string  $atts     Shortcode attributes
 * @param   string  $content  Shortcode content
 * @return  string
 */
function themesflat_shortcode_testimonial_slider( $atts, $content = null ) {
	$atts = vc_map_get_attributes( 'themesflat_testimonial_slider', $atts );
	extract (apply_filters( 'themesflat/shortcode/themesflat_testimonial_slider_atts',$atts));

	$args = array(
		'post_type' => 'testimonial',
		'posts_per_page' => $limit,
		);

	$classes = apply_filters( 'themesflat/shortcode/themesflat_testimonial_class', $atts );

	if ($exclude != '') {
		$args['post__not_in'] = explode(',',trim($exclude));
	}

	if ( trim($post_in) != '') {
		$args['post__in'] = explode(',', trim($post_in));
         $args['orderby'] = 'post__in';
	}

	$testimonial_logo = '';
	if ($show_logo == 1) {
		$testimonial_logo = '<div class="testimonial-logo"></div>';
	}

	
	$allow = array(
    'a' => array(
        'href' => array(),
        'title' => array(),
        'class' => array()
    ));

	$testimonials = new WP_Query($args);
	$nav_thumb = '';
	$testimonial_content = '';
	while ($testimonials->have_posts()) :
		$testimonials -> the_post();
		$star = themesflat_meta('testimonial_rating');
		$stars ='';
		for ( $i = 0 ; $i < $star;$i++) {
			$stars .= '<a href="#" class="fa fa-star"></a>';
		}
		$nav_thumb .= sprintf('<li>%1$s</li>',get_the_post_thumbnail(null,'themesflat-testimonial'));


		$image_author = '';
		if ( $show_image == 1) {
			$image_author .= sprintf('<div class="testimonial-image">
								%1$s
							</div>',get_the_post_thumbnail(null,'themesflat-testimonial')) ;
		}
		if( $style == 'style1') {
			$testimonial_content .= sprintf('<div class="%11$s">
				<div class="item">
					<div class="testimonial-content cd-headline clip">
					
					<div class="testimonial-author">
						
						<blockquote class="themesflat_quote">
						%8$s
							%1$s
						</blockquote>
							%4$s
						<h6 class="author-name"><a href="%6$s">%2$s</a></h6>
						<div class="wrap-stars">%5$s</div>
						<div class="author-info"><p>%7$s</p></div>
											
					</div>
				</div>	
				</div>
			</div>',
			get_the_content(),
			get_the_title(),		
			esc_attr(themesflat_meta('testimonial_subtitle')),
			$image_author,
			wp_kses($stars,$allow),
			esc_url(themesflat_meta('testimonial_link')),
			esc_html(themesflat_meta('testimonial_position')),
			$testimonial_logo,
			esc_attr(themesflat_meta('testimonial_number')),
			esc_attr(themesflat_meta('testimonial_suffix_number')),
			esc_attr( $columns_testimonial )
			);
		};

		if( $style == 'style2') {
			$testimonial_content .= sprintf('<div class="%11$s">
				<div class="item">
					%4$s
					<div class="testimonial-content cd-headline clip">
						<h6 class="author-name"><a href="%6$s">%2$s</a></h6>
						
						<div class="author-info">%7$s</div>
						<div class="wrap-stars">%5$s</div>
						
						<div class="testimonial-desc">
						%8$s
							%1$s
						</div>
					</div>
				</div>	
			</div>',
			get_the_content(),
			get_the_title(),		
			esc_attr(themesflat_meta('testimonial_subtitle')),
			$image_author,
			wp_kses($stars,$allow),
			esc_url(themesflat_meta('testimonial_link')),
			esc_html(themesflat_meta('testimonial_position')),
			$testimonial_logo,
			esc_attr(themesflat_meta('testimonial_number')),
			esc_attr(themesflat_meta('testimonial_suffix_number')), 
			esc_attr( $columns_testimonial )
			);
		};
		
	endwhile;
	wp_reset_postdata();
	$config = $atts;

	//Enqueue shortcode assets
	wp_enqueue_script( 'themesflat-carousel' );
	
	return sprintf( '
		<div class="testimonial-sliders  %11$s %8$s" data-autoplay="%3$s" data-show_control="%4$s" data-show_direction="%5$s" data-margin="%9$s" data-items="%10$s">
			<div class="testimonial-slider %12$s" >		
				%6$s			
			</div>
		</div>
	', $nav_thumb, esc_attr(implode( ' ', $classes )), esc_attr( $autoplay ), esc_attr( $show_control ), esc_attr( $show_direction ),  $testimonial_content,esc_url(THEMESFLAT_LINK.'images/testimonial.svg'),esc_attr(implode( ' ', $classes )),esc_attr($gutter),esc_attr($show_item), esc_attr( $enable_slider ), esc_attr( $columns_testimonial ) );
};