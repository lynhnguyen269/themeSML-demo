<?php
if ( ! class_exists('themesflat_VCExtend') ) {
	class themesflat_VCExtend {
		function __construct() {
			// We safely integrate with VC with this hook
			add_action( 'init', array( $this, 'integrateWithVC' ) );

			// Use this when creating a shortcode addon
			$shortcodes = 'themesflat_portfolio,themesflat_posts';
			$shortcodes = explode(",", $shortcodes);
			$shortcodes = array_map("trim", $shortcodes);
			foreach ( $shortcodes as $shortcode ) {
				add_shortcode($shortcode, array( $this, $shortcode ) );
			} 
		}

		public function integrateWithVC() {
	        // Check if Visual Composer is installed
			if ( ! defined( 'WPB_VC_VERSION' ) ) {
	            // Display notice that Visual Compser is required
				add_action('admin_notices', array( $this, 'showVcVersionNotice' ));
				return;
			}		
			
			//portfolio option
			$category_portfolio = get_terms( 'portfolios_category','orderby=name&hide_empty=0' );
			$category_portfolio_name[] = 'All';
			$category_order = array();

			foreach ( $category_portfolio as $category ) {
				
				$category_portfolio_name[$category->name] = $category->slug;
				$category_order[] = $category->slug;		
			}

			$category_order = implode(',', $category_order);			

			vc_map( array(
				'base'        => 'themesflat_portfolio',
				'icon'        => THEMESFLAT_ICON,
				'name'        => esc_html__( 'Themesflat: Portfolio', 'redbiz' ),
				'category'    => esc_html__( 'redbiz', 'redbiz' ),
				'params'      => array(
					array(
						"type"        => "dropdown",
						"heading" => esc_html__("Category", 'redbiz'),
						"param_name" => "category",
						"value"       => $category_portfolio_name,
						"description" => esc_html__("Display Posts From Some Categories.", 'redbiz'),
						),	

					array(
						'type'       => 'dropdown',
						'heading'    => esc_html__( 'Style', 'redbiz' ),
						'param_name' => 'style',
						'value' => array(
							esc_html__( 'Grid', 'redbiz' )              => 'grid',
							esc_html__( 'Masonry', 'redbiz' )           => 'masonry'
							)
						),

					array(
						'type'       => 'dropdown',
						'heading'    => esc_html__( 'Grid Columns', 'redbiz' ),
						'param_name' => 'columns',
						'value'      => array(
							esc_html__( '3 Columns', 'redbiz' ) => 'one-three',						
							esc_html__( '4 Columns', 'redbiz' ) => 'one-four',
							)
						),

					array(
						'type'       => 'textfield',
						'heading'    => esc_html__( 'Number Of Items', 'redbiz' ),
						'param_name' => 'limit',
						'value'      => 6
						),

					array(
						'type'        => 'textfield',
						'heading'     => esc_html__( 'Exclude', 'redbiz' ),
						'param_name'  => 'exclude',
						'description' => esc_html__( 'Not Show These Portfolios By IDs EX:1,2,3', 'redbiz' ),
						),	

					array(
						'type' => 'checkbox',
						'heading' => esc_html__( 'Enable Carousel Mode', 'redbiz' ),
						'param_name' => 'enable_carousel',
						'value' => array( esc_html__( 'Yes, Please', 'redbiz' ) => 'yes' )
						),

					array(
						'type' => 'checkbox',
						'heading' => esc_html__( 'Hide Title Portfolio', 'redbiz' ),
						'param_name' => 'hide_title',
						'value' => array( esc_html__( 'Yes, Please', 'redbiz' ) => 'yes' ),
						),

					array(
						'type' => 'checkbox',
						'heading' => esc_html__( 'Hide Category Portfolio', 'redbiz' ),
						'param_name' => 'hide_category',
						'value' => array( esc_html__( 'Yes, Please', 'redbiz' ) => 'yes' )
						),

					array(
						'type' => 'checkbox',
						'heading' => esc_html__( 'Hide Tags Portfolio', 'redbiz' ),
						'param_name' => 'hide_tags',
						'value' => array( esc_html__( 'Yes, Please', 'redbiz' ) => 'yes' )
						),

					array(
						'type'       => 'checkbox',
						'heading'    => esc_html__( 'Show Portfolio Content', 'redbiz' ),
						'param_name' => 'show_content',
						'value'      => array(
							esc_html__( 'Yes, please', 'redbiz' ) => 'yes'
							)
						),

					array(
						'type'       => 'checkbox',
						'heading'    => esc_html__( 'Show Date', 'redbiz' ),
						'param_name' => 'show_date_portfolio',
						'value'      => array(
							esc_html__( 'Yes, please', 'redbiz' ) => 'yes'
							)
						),

					array(
						'type'       => 'textfield',
						'heading'    => esc_html__( 'Portfolio Status', 'redbiz' ),
						'param_name' => 'portfolio_status',
						'value'      => ''
						),

					array(
						'type' => 'dropdown',
						'heading' => esc_html__( 'Show Filter', 'redbiz' ),
						'param_name' => 'show_filter',
						'description' => esc_html__( 'If "YES" Portfolio Filter Will Be Shown.', 'redbiz' ),
						'value' => array(
							esc_html__( 'No', 'redbiz' ) => 'no',
							esc_html__( 'Yes, Please', 'redbiz' ) => 'yes'							
							),
						'dependency' => array(
							'element' => 'enable_carousel',
							'is_empty' => true)
						),

					array(
						'type'       => 'textfield',
						'heading'    => esc_html__( 'Categories Order', 'redbiz' ),
						'param_name' => 'cat_order',
						'dependency' => array(
							'element' => 'show_filter',
							'value'	=> 'yes'
							),
						'description'=> 'Categories Order Split By ","',
						'value'      => $category_order
						),					

					array(
						'type'       => 'textfield',
						'heading'    => esc_html__( 'Portfolio Content Length', 'redbiz' ),
						'param_name' => 'content_length',
						'value'      => 150
						),

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

			));    
			
			/**
			 * Map the post shortcode
			 */
			$category_posts = get_terms( 'category' );
			$category_posts_name[] = 'All';
			foreach ( $category_posts as $category_post ) {
				$category_posts_name[$category_post->name] = $category_post->slug;		
			}

			vc_map( array(
				'name'                    => esc_html__( 'Themesflat: Blog Posts', 'redbiz' ),
				'base'                    => 'themesflat_posts',
				'icon'        => THEMESFLAT_ICON,
				'category'    => esc_html__( 'redbiz', 'redbiz' ),
				'params'                  => array(
					array(
						'type'        => 'textfield',
						'heading'     => esc_html__( 'Widget Title', 'redbiz' ),
						'param_name'  => 'title',
						'description' => esc_html__( 'Enter text which will be used as widget title. Leave blank if no title is needed.', 'redbiz' )
						),

					array(
						"type"        => "dropdown",
						"heading" => esc_html__("Category", 'redbiz'),
						"param_name" => "category_post",
						"value"       => $category_posts_name,
						"description" => esc_html__("Display Posts From Some Categories.", 'redbiz'),
						),

					array(
						'type'       => 'dropdown',
						'heading'    => esc_html__( 'Layout', 'redbiz' ),
						'param_name' => 'layout',
						'value'      => array(
							esc_html__( 'List small', 'redbiz' ) => 'blog-list-small',
							esc_html__( 'List', 'redbiz' ) => 'blog-list',	
							esc_html__( 'Grid', 'redbiz' ) => 'blog-grid',
							esc_html__( 'Grid No Image', 'redbiz' )   => 'blog-grid-style2',
							)
						),

					array(
						'type'        => 'dropdown',
						'heading'     => esc_html__( 'Grid Columns', 'redbiz' ),
						'param_name'  => 'grid_columns',
						'description' => esc_html__( 'The number of columns for grid and grid masonry layout', 'redbiz' ),
						'dependency' => array(
							'element' => 'layout',
							'value'	=> array('blog-grid','blog-grid-style2'),
							),
						'value'       => array(							
							esc_html__( '3 Columns', 'redbiz' ) => 3,	
							esc_html__( '2 Columns', 'redbiz' ) => 2,						
							esc_html__( '4 Columns', 'redbiz' ) => 4
							)
						),

					array(
						'type'        => 'textfield',
						'heading'     => esc_html__( 'Limit', 'redbiz' ),
						'param_name'  => 'limit',
						'description' => esc_html__( 'The Number Of Posts Will Be Shown', 'redbiz' ),
						'value'       => 9
						),

					array(
						'type'        => 'textfield',
						'heading'     => esc_html__( 'Post Ids Will Be Inorged. Ex: 1,2,3', 'redbiz' ),
						'param_name'  => 'exclude',
						),

					array(
						'type'       => 'checkbox',
						'heading'    => esc_html__( 'Hide Post Content', 'redbiz' ),
						'param_name' => 'hide_content',
						'value'      => array(
							esc_html__( 'Yes, please', 'redbiz' ) => 1
							)
						),

					array(
						'type'       => 'checkbox',
						'heading'    => esc_html__( 'Enable Carousel', 'redbiz' ),
						'param_name' => 'blog_carousel',
						'value'      => array(
							esc_html__( 'Yes, please', 'redbiz' ) => 'yes'
							)
						),

					array(
						'type'       => 'checkbox',
						'heading'    => esc_html__( 'Show Dots', 'redbiz' ),
						'param_name' => 'show_dot',
						'value'      => array(
							esc_html__( 'Yes, please', 'redbiz' ) => 1
							)
						),

					array(
						'type'       => 'checkbox',
						'heading'    => esc_html__( 'Show Navigation', 'redbiz' ),
						'param_name' => 'show_nav',
						'value'      => array(
							esc_html__( 'Yes, please', 'redbiz' ) => 1
							)
						),

					array(
						'type'       => 'checkbox',
						'heading'    => esc_html__( 'Show Post Meta', 'redbiz' ),
						'param_name' => 'show_post_meta',
						'value'      => array(
							esc_html__( 'Yes, please', 'redbiz' ) => 1
							),
						'std'		=> 1
						),

					array(
						'type'       => 'checkbox',
						'heading'    => esc_html__( 'Autoplay', 'redbiz' ),
						'param_name' => 'autoplay',
						'value'      => array(
							esc_html__( 'Yes, please', 'redbiz' ) => 1
							)
						),

					array(
						'type'       => 'checkbox',
						'heading'    => esc_html__( 'Show Post Meta Tags', 'redbiz' ),
						'param_name' => 'show_post_meta_tags',
						'value'      => array(
							esc_html__( 'Yes, please', 'redbiz' ) => 1
							)
						),

					array(
						'type'       => 'checkbox',
						'heading'    => esc_html__( 'Show Post Meta Author', 'redbiz' ),
						'param_name' => 'show_post_meta_author',
						'value'      => array(
							esc_html__( 'Yes, please', 'redbiz' ) => 1
							)
						),

					array(
						'type'       => 'textfield',
						'heading'    => esc_html__( 'Post Content Length', 'redbiz' ),
						'param_name' => 'content_length',
						'value'      => 150
						),

					array(
						'type'       => 'checkbox',
						'heading'    => esc_html__( 'Hide Read More', 'redbiz' ),
						'param_name' => 'hide_readmore',
						'value'      => array(
							esc_html__( 'Yes, please', 'redbiz' ) => 'yes'
							)
						),

					array(
						'type'       => 'textfield',
						'heading'    => esc_html__( 'Read More Text', 'redbiz' ),
						'param_name' => 'readmore_text',
						'value'      => htmlspecialchars_decode(esc_html__( 'Read More', 'redbiz' )),
						),

					array(
						'type'       => 'checkbox',
						'heading'    => esc_html__( 'Enable Pagination', 'redbiz' ),
						'param_name' => 'blog_pagination',
						'value'      => array(
							esc_html__( 'Yes, please', 'redbiz' ) => 'yes'
							)
						),

					array(
						'type'        => 'textfield',
						'heading'     => esc_html__( 'Extra Class Name', 'redbiz' ),
						'param_name'  => 'class',
						'description' => esc_html__( 'Your Custom Class Ex: center right padding-right-40', 'redbiz' )
						),

					array(
						'type'       => 'css_editor',
						'param_name' => 'css',
						'group'      => esc_html__( 'Design Options', 'redbiz' )
						)
					)
			) );		
			
		}

		// Portfolio render
		public static function themesflat_portfolio( $atts, $content = null ) {
			$atts = vc_map_get_attributes( 'themesflat_portfolio', $atts );
			extract (apply_filters( 'themesflat/shortcode/themesflat_portfolio_atts',$atts));

			if ( empty( $atts['enable_carousel'] ) ) $atts['enable_carousel'] = 'no';
			if ( empty( $atts['show_filter'] ) ) $atts['show_filter'] = 'no';
			if ( empty( $atts['show_content'] ) ) $atts['show_content'] = 'no';

			ob_start();
			$content = wpb_js_remove_wpautop($content, true); // fix unclosed/unwanted paragraph tags in $content

			$limit = intval( $limit );		
			$terms_slug = wp_list_pluck( get_terms( 'portfolios_category','orderby=name&hide_empty=0'), 'slug' );
			$filters 	= wp_list_pluck( get_terms( 'portfolios_category','orderby=name&hide_empty=0'), 'name','slug' ); 

			$tax =  $terms_slug;

			if ( get_query_var('paged') ) {
				$paged = get_query_var('paged');
			} elseif ( get_query_var('page') ) {
				$paged = get_query_var('page');
			} else {
				$paged = 1;
			}    

			$query_args = array(
				'post_type' => 'portfolios',
				'posts_per_page' => $limit,
				'paged' => $paged,          
				'order' => themesflat_choose_opt('portfolio_order_direction'),
				'orderby' => themesflat_choose_opt('portfolio_order_by'),
				);
			if ( $category != 'All' ) {            
				$tax = $category;
				$query_args['tax_query'] = array(
					array(
						'taxonomy' => 'portfolios_category',   
						'field'    => 'slug',                   
						'terms'    => $tax,
						),
					);
			}		

			if ( ! empty( $atts['exclude'] ) ) {
				$exclude = $atts['exclude'];				
				if ( ! is_array( $exclude ) )
					$exclude = explode( ',', $exclude );

				$query_args['post__not_in'] = $exclude;
			}

			$query = new WP_Query( $query_args );
			$GLOBALS['wp_query']->max_num_pages = $query->max_num_pages; 

			if ( ! $query->have_posts() )
				return;
			$enable_carousel_class ='';
			if ($atts['enable_carousel'] == 'yes') {
				$enable_carousel_class = 'themesflat_enable_carousel';
			}

			echo '<div class="themesflat-portfolio clearfix '.esc_attr($enable_carousel_class).' '.esc_attr( $style ).'">'; 
			$show_filter_portfolio = '';

			//Build the filter navigation
			if ( $show_filter == 'yes' && $enable_carousel != 1) {	
				$show_filter_portfolio = 'show_filter_portfolio';     	
					echo '<ul class="portfolio-filter '.esc_attr( $class ).'"><li class="active"><a data-filter="*" href="#">' . esc_html__( 'All', 'redbiz' ) . '</a></li>'; 
					if ($cat_order == '') { 

						foreach ($filters as $key => $value) {
							echo '<li><a data-filter=".' . esc_attr( strtolower($key)) . '" href="#" title="' . esc_attr( $value ) . '">' . esc_html( $value ) . '</a></li>'; 
						}
					
					}
					else {
						$cat_order = explode(",", $cat_order);
						foreach ($cat_order as $key) {
							$key = trim($key);
							echo '<li><a data-filter=".' . esc_attr( strtolower($key)) . '" href="#" title="' . esc_attr( $filters[$key] ) . '">' . esc_html( $filters[$key] ) . '</a></li>'; 
						}
					}
	                echo '</ul>'; //portfolio-filter
	        } 

	        if (!empty($columns)) {
	        	if ($columns == 'one-half') {
	        		$data_item = 2;
	        	}elseif ($columns == 'one-three') {
	        		$data_item = 3;
	        	}elseif ($columns == 'one-four') {
	        		$data_item = 4;
	        	}elseif ($columns == 'one-five') {
	        		$data_item = 5;
	        	}elseif ($columns == 'one-six') {
	        		$data_item = 6;
	        	}

	        }
	        echo '<div class="portfolio-container '.esc_attr( $class ).' '.esc_attr( $style ).' '.esc_attr( $columns ).' '.esc_attr( $show_filter_portfolio ).'" data-item="'.esc_attr($data_item).'">'; 
	        while ( $query->have_posts() ) : $query->the_post();
	        global $post;
	        $id = $post->ID;
	        $termsArray = get_the_terms( $id, 'portfolios_category' );
	        $termsString = "";

	        if ( $termsArray ) {
	        	foreach ( $termsArray as $term ) {
	        		$itemname = strtolower( $term->slug ); 
	        		$itemname = str_replace( ' ', '-', $itemname );
	        		$termsString .= $itemname.' ';
	        	}
	        }

	        $imgs = array(
	        	'grid' => 'themesflat-portfolio-grid',
	        	'masonry' => 'themesflat-case-masonry',
	        	'related' => 'themesflat-portfolio-related',
	        	);
	        $img_portfolio = $imgs[$style];

	        $link_img = ($style == "grid" || $style == "grid-no-padding") ? themesflat_thumbnail_url( $img_portfolio ) : get_the_permalink();
	        $popup_gallery = ($style == "grid" || $style == "grid-no-padding") ? 'popup-gallery' : '';
	       
	        if ( has_post_thumbnail() ):	

	        // Enqueue shortcode assets
	        echo '<div class="item ' . $termsString . '">';
	        echo '<div class="wrap-border">';
	        echo '<div class="featured-post "><a href="'. get_the_permalink() .'">';
	        	the_post_thumbnail( $img_portfolio );	        			                                                                   
	        echo '</a></div>';
	        $portfolio_hide ='';
	        if ($hide_category == 'yes' && $hide_title == 'yes' && $atts['show_content'] == 'no') {
	        	$portfolio_hide = 'hide';
	        }

	        echo '<div class="portfolio-details '.esc_attr($portfolio_hide).'"><div class="portfolio-details-content">';

	        if ( $hide_tags != 'yes' ) {	
	        	echo '<div class="portfolio-tags">';
	        	echo the_terms( get_the_ID(), 'portfolios_tag', 
	        		'', ' , ', '' );                        
	        	echo '</div>';     
	        }

        	

	        if ( $hide_category != 'yes' ) {	
	        	echo '<div class="portfolio-category">';
	        	echo the_terms( get_the_ID(), 'portfolios_category', 
	        		'', ' , ', '' );                        
	        	echo '</div>';     
	        }

	        if ( $hide_title != 'yes' ) {
	        	echo '<div class="title-post"><a title="' . get_the_title() . '" href="' . get_the_permalink() . '">' . get_the_title() . '</a></div>';
	        }

	        if ( $show_date_portfolio == 'yes' ) {
	        	echo '<div class="date"><a href="'. get_the_permalink() .'">';
	        	echo esc_attr( get_the_date() ); 
	        	echo '</a></div>';
	        }  
	        

	        if ( $atts['show_content'] != 'no' ):
	        	?>
	        
	        <div class="entry-content">

	        	<?php
	        	$content = get_the_content();
	        	$content = trim( strip_tags( $content ) );
	        	$length  = intval( '0' . $atts['content_length'] );
	        	$length  = max( $length, 1 );

	        	if ( mb_strlen( $content ) > $length ) {
	        		$content = mb_substr( $content, 0, $length );
	        		$content.= '...';
	        	}

	        	echo wp_kses_post( $content );
	        	?>					

	        </div>   		
    		
	        <?php 
        	if ( $show_readmore_portfolio == 'yes' ) {
        		echo '<div class="themesflat-button-container"><a class="themesflat-button" href="' . get_the_permalink() . '">READ MORE <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>';
	        }
	        ?>	        

		    <?php endif;  

		    echo '</div>';
		    echo '</div>';
		    echo '<div class="portfolio-status">';
        	echo themesflat_meta('status');       
        	echo '</div>';  
		    echo '</div>';
		    echo '</div>';

		    endif;
		    endwhile;	
		    wp_reset_postdata();

		    echo "</div>";
		    echo "</div>";
		    $out_put = ob_get_clean();
		    return $out_put;
		}	

		// Blog post render
		public static function themesflat_posts( $atts, $content = null ) {
			$atts = vc_map_get_attributes( 'themesflat_posts', $atts );
			extract (apply_filters( 'themesflat/shortcode/themesflat_posts_atts',$atts));
			ob_start();
				$content = wpb_js_remove_wpautop($content, true); // fix unclosed/unwanted paragraph tags in $content	

				if ( get_query_var('paged') ) {
					$paged = get_query_var('paged');
				} elseif ( get_query_var('page') ) {
					$paged = get_query_var('page');
				} else {
					$paged = 1;
				}     				

				$query_args = array(					
					'post_status'         => 'publish',
					'post_type'           => 'post',
					'paged' => $paged,
					'ignore_sticky_posts' => true,
					);  

				if ( is_numeric( $atts['limit'] ) && $atts['limit'] >= 0 ) {
					$query_args['posts_per_page'] = $atts['limit'];
				}

				if ( ! empty( $atts['exclude'] ) ) {
					$exclude = $atts['exclude'];

					if ( ! is_array( $exclude ) )
						$exclude = explode( ',', $exclude );

					$query_args['post__not_in'] = $exclude;
				}
				
				if ( $atts['category_post'] != 'All' )
					$query_args['category_name'] = $atts['category_post'];

				$query = new WP_Query( $query_args );	
				$GLOBALS['wp_query']->max_num_pages = $query->max_num_pages; 

				$class_names = array(
					1 => 'blog-one-column',
					2 => 'blog-two-columns',
					3 => 'blog-three-columns',
					4 => 'blog-four-columns',
					);		

				if ( ! $query->have_posts() )
					return;

				$class = apply_filters( 'themesflat/shortcode/posts_class', array( 'blog-shortcode', $atts['class'],  $atts['layout'] ), $atts );

				if ( isset( $class_names[$atts['grid_columns']] ) && in_array( $atts['layout'], array( 'blog-grid', 'blog-grid-style2' ) ) ) {
					$class[] = $class_names[$atts['grid_columns']];
				}

				if ( $atts['hide_content'] != 'yes' ) {
					$class[] = 'has-post-content';
				}	

				if ( $atts['blog_carousel'] == 'yes' ) {
					$class[] = 'has-carousel';
				}

				if ($show_nav == 1) {
					$show_nav = "true";
				} else {
					$show_nav = "false";
				}

				if ($show_dot == 1) {
					$show_dot = "true";
				} else {
					$show_dot = "false";
				}

				if ($autoplay == 1) {
					$autoplay = "true";
				} else {
					$autoplay = "false";
				}
				$blog_archive_show_post_meta = 1;
				$imgs = array(
					'blog-list' => 'themesflat-blog-full-width',
					'blog-grid' => 'themesflat-blog-grid',
					'blog-list-small' => 'themesflat-blog-listsmall',
					'blog-grid-style2' => 'themesflat-blog-listsmall'
					);			
				global $themesflat_thumbnail;
				$themesflat_thumbnail = $imgs[$atts['layout']];
				$items = $atts['layout'] == 'blog-grid' ? $atts['grid_columns'] : 1;
				?>
				<?php if ( ! empty( $atts['title'] ) ): ?>
					<h2 class="blog-shortcode-title"><?php esc_html_e( $atts['title'] ) ?></h2>
				<?php endif ?>

				<div class="<?php esc_attr_e( implode( ' ', $class ) ) ?>" data-items ="<?php themesflat_esc_attr($grid_columns);?>" data-nav= "<?php echo $show_nav; ?>" data-dot= "<?php echo $show_dot; ?>" data-auto= "<?php echo $autoplay; ?>">
					
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
						<article class="entry format-<?php echo esc_attr(get_post_format()); ?>">
							<div class="entry-border">
								<?php if ($layout == 'blog-grid' || $layout == 'blog-list' || $layout == 'blog-list-small') : ?>

								<?php get_template_part('tpl/feature-post'); ?>

								<?php endif; ?>

								<div class="content-post">
									<?php if ($layout == 'blog-grid' || $layout == 'blog-list-small') : ?>		
										<?php echo '<div class="post-categories">'.esc_html__("",'redbiz');
											the_category( ', ' );
										echo '</div>';
										?>
									<?php endif; ?>
									<h2 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
									<?php if ($layout == 'blog-list-small' && $show_post_meta == 1) : ?>
									<div class="entry-meta meta-on clearfix">
										<ul class="meta-left">
											<?php if ( $blog_archive_show_post_meta == 1 ): ?>
													<li class="post-mail">														
														<a href="mailto:<?php echo get_the_author_meta('user_email'); ?>"><?php echo get_the_author_meta('user_email'); ?></a>
													</li>
													<li class="post-time">
														<?php the_time(); ?>		
													</li>													
											<?php endif;?>
										</ul>
									</div>
											<?php 

											elseif ($layout == 'blog-list' && $show_post_meta == 1):	
												?>
												<div class="entry-meta meta-on clearfix">
													<ul class="meta-left">
														<?php if ( $blog_archive_show_post_meta == 1 ): ?>
															<li class="post-author">
																<?php			
																printf(
																	'<span class="author vcard"><a class="url fn n" href="%s" title="%s" rel="author"> %s</a></span>',
																	esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) )),
																	esc_attr( sprintf( esc_html__( 'View all posts by %s', 'redbiz' ), get_the_author() ) ),get_the_author());
																?>
															</li>															<li class="post-tags">
																<a href="<?php ; ?>"><?php the_tags( '' ); ?></a>			
															</li>
															<li class="post-date">
																<?php echo get_the_date(); ?>
															</li>
														<?php endif;?>	
													</ul>
												</div>
												<?php
											
											endif;?>													
									
									<?php if ( $layout == 'blog-grid' && $show_post_meta == 1 ) : ?>
										<div class="entry-meta meta-below clearfix">
											<ul class="meta-left">
												<?php if ( $blog_archive_show_post_meta == 1 ): ?>
												<li class="post-date">
													<?php echo get_the_date(); ?>
												</li>
												<li class="post-tags">
													<a href="<?php ; ?>"><?php the_tags( '' ); ?></a>			
												</li>
												
											<?php endif;?>		
											</ul>									
										</div><!-- /.entry-meta -->
									<?php endif; ?>

									<?php $hide_content_class = '';
										if ( $atts['hide_content'] == 'yes' && $atts['hide_readmore'] == 'yes' ) {
											$hide_content_class = 'hide';										
										}
									 ?>
									 <?php if ($layout == 'blog-grid' || $layout == 'blog-list' || $layout == 'blog-list-small') : ?>						
									<div class="entry-content <?php echo esc_attr($hide_content_class);?>">


										<?php										
										$readmore = $atts['hide_readmore'] != 'yes'  ? wp_kses_post( $atts['readmore_text'] ) : '[...]';
										if ($hide_content != 1) {
											themesflat_render_post($atts['layout'],$readmore,$atts['content_length']);
										}
										?>
										
									</div>
								<?php endif; ?>
									<?php if ($layout == 'blog-grid-style2') : ?>
										<div class="entry-content <?php echo esc_attr($hide_content_class);?>">
											<div class="entry-meta meta-below clearfix">
												
												<?php $readmore = $atts['hide_readmore'] != 'yes'  ? wp_kses_post( $atts['readmore_text'] ) : '[...]'; ?>								
											
											<?php if ($hide_content != 1) {
												themesflat_render_post($atts['layout'],$readmore,$atts['content_length']);
											};
											?>
											<?php if ( $blog_archive_show_post_meta == 1 ):?>
											<ul>										
												<li class="post-date">
													<?php echo get_the_date(); ?>
												</li>	
											<ul>
											<?php endif; ?>
											</div><!-- /.entry-meta -->
										</div>
									<?php endif; ?>

									
								</div>

							</div>
						</article><!-- /.entry -->

						<?php
						endwhile;

						echo '</div>';
						if ( $blog_pagination == 'yes' ):?>
						<div>
							<?php  get_template_part( 'tpl/pagination' ); ?>
						</div>
					<?php endif;
						$out_put = ob_get_clean();
						wp_reset_query();
					    ?> 


					    <?php 
						return $out_put;		
						?>
				        
						<?php 				
		}

	}	

}

// Finally initialize code
new themesflat_VCExtend();