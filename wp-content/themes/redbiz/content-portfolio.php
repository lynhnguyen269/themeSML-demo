<?php
/**
 * @package redbiz
 */

$portfolio_single_style = themesflat_choose_opt('portfolio_single_style');
$portfolio_status = themesflat_choose_opt('portfolio_status');
$imgs = array(
	'full_content' => 'themesflat-case-single',
	'left_content'=> 'themesflat-case-singles'
	);
$featured_img = $imgs[$portfolio_single_style];
?>

<section class="portfolio-detail <?php echo esc_attr($portfolio_single_style);?> ">	
	<div class="container">
		<?php if($portfolio_single_style == 'full_content'){ ?>
			<div class="row">
				<div class="col-md-12">
	            	<?php $images = themesflat_decode(themesflat_meta( 'gallery_portfolio'));
	            	if ( !empty( $images ) && is_array( $images ) ):  ?> 
		            	<div class="themesflat-portfolio-single-slider">
		                    <div id="themesflat-portfolio-flexslider">
		                        <ul class="slides">
		                        <?php 

				            		$images = themesflat_decode(themesflat_meta( 'gallery_portfolio')); 
				            		echo '<li>';
				            		the_post_thumbnail($featured_img);      		;
				            		echo '</li>';
							        if ( !empty( $images ) && is_array( $images ) ) {
							           foreach ( $images as $image ) {
							              echo '<li>';             
							              echo wp_get_attachment_image($image,$featured_img);
							              echo '</li>';                                 
							           }
							        } 
				        		?>                         
		                        </ul>
		                    </div>
		                    <div id="themesflat-portfolio-carousel">
		                        <ul class="slides">
		                        <?php 
			                        echo '<li>';
				            		the_post_thumbnail($featured_img);      		;
				            		echo '</li>';
				            		$images = themesflat_decode(themesflat_meta( 'gallery_portfolio'));
							        if ( !empty( $images ) && is_array( $images ) ) {
							           foreach ( $images as $image ) {
							              echo '<li>';             
							              echo wp_get_attachment_image($image,$featured_img);
							              echo '</li>';                                 
							           }
							        } 
				        		?>                    
		                        </ul>
		                    </div>
		                </div><!-- /.themesflat-portfolio-single-slider --> 
		            <?php else: ?>
		            	<div class="themesflat-portfolio-single">
		                    <div class="themesflat-image" >
		                        <?php 			            		
				            		echo '<div>';
				            			the_post_thumbnail($featured_img);
				            		echo '</div>'; 
				        		?>       
		                    </div>	                    
		                </div><!-- /.themesflat-portfolio-single-carousel --> 
		            <?php endif; ?>
	            </div> 
			</div>
			<div class="row">
				<div class="col-md-8">
					<div class="content-portfolio-detail">
	            		<?php the_content(); ?>
	            	</div>			
	            </div> 
	            <div class="col-md-4">
	            	<h4 class="title-project"><?php echo esc_html__( 'Project Information', 'redbiz' ) ?></h4>
	            	<ul class="infomation-project">
						<li><span><?php esc_html_e( 'Category :','redbiz' ); ?></span>

				        <?php echo esc_attr ( the_terms( get_the_ID(), 'portfolios_category', 
				                              '', ', ', '' ) ); ?>
				       </li>
						<li><span>Status :</span>
							<?php $portfolio_status = get_post_meta( get_the_ID(), 'status', true ); ?>
							<?php echo esc_attr( $portfolio_status ); ?>
						<li><span><?php echo esc_html__( 'Client :', 'redbiz' ) ?></span><?php $portfolio_client = get_post_meta( get_the_ID(), 'portfolio_client', true ); ?>
							<?php echo esc_attr( $portfolio_client ); ?></li>
						<li><span><?php echo esc_html__( 'Date :', 'redbiz' ) ?></span>
						<?php echo get_the_date();?></a>
				        </li>
						<li><span><?php esc_html_e( 'Tags :','redbiz' ); ?></span>
				        <?php echo esc_attr ( the_terms( get_the_ID(), 'portfolios_tag', 
				                              '', ', ', '' ) ); ?>
				       </li>
					</ul>
	            </div>
			</div>
		<?php }; ?>
	<?php if($portfolio_single_style == 'left_content'){ ?>
			<div class="row">
				<div class="col-md-8">
	            	<?php $images = themesflat_decode(themesflat_meta( 'gallery_portfolio'));
	            	if ( !empty( $images ) && is_array( $images ) ):  ?> 
		            	 


		                <div class="themesflat-portfolio-single-slider">
		                    <div id="themesflat-portfolio-flexslider">
		                        <ul class="slides">
		                        <?php 

				            		$images = themesflat_decode(themesflat_meta( 'gallery_portfolio')); 
				            		echo '<li>';
				            		the_post_thumbnail($featured_img);      		;
				            		echo '</li>';
							        if ( !empty( $images ) && is_array( $images ) ) {
							           foreach ( $images as $image ) {
							              echo '<li>';             
							              echo wp_get_attachment_image($image,$featured_img);
							              echo '</li>';                                 
							           }
							        } 
				        		?>                         
		                        </ul>
		                    </div>
		                    <div id="themesflat-portfolio-carousel">
		                        <ul class="slides">
		                        <?php 
			                        echo '<li>';
				            		the_post_thumbnail($featured_img);      		;
				            		echo '</li>';
				            		$images = themesflat_decode(themesflat_meta( 'gallery_portfolio'));
							        if ( !empty( $images ) && is_array( $images ) ) {
							           foreach ( $images as $image ) {
							              echo '<li>';             
							              echo wp_get_attachment_image($image,$featured_img);
							              echo '</li>';                                 
							           }
							        } 
				        		?>                    
		                        </ul>
		                    </div>
		                </div><!-- /.themesflat-portfolio-single-slider --> 


		            <?php else: ?>
		            	<div class="themesflat-portfolio-single">
		                    <div class="themesflat-image" >
		                        <?php 			            		
				            		echo '<div>';
				            			the_post_thumbnail($featured_img);
				            		echo '</div>'; 
				        		?>
		                    </div>	                    
		                </div><!-- /.themesflat-portfolio-single-carousel --> 
		            <?php endif; ?>
	            </div>
	            <div class="col-md-4">
	            	<ul class="infomation-project <?php echo esc_attr($portfolio_single_style); ?>">
	            		<li class="portfolio-client"><div><?php echo esc_html__( 'Client :', 'redbiz' ) ?></div><?php $portfolio_client = get_post_meta( get_the_ID(), 'portfolio_client', true ); ?>
							<?php echo esc_attr( $portfolio_client ); ?></li>
	            		<li class="portfolio-tags"><div><?php esc_html_e( 'Tags :','redbiz' ); ?></div>
				        <?php echo esc_attr( the_terms( get_the_ID(), 'portfolios_tag', 
				                              '', ', ', '' ) ); ?>
				       </li>
						<li class="portfolio-category"><div><?php esc_html_e( 'Category :','redbiz' ); ?></div>
				        <?php echo esc_attr( the_terms( get_the_ID(), 'portfolios_category', 
				                              '', ', ', '' ) ); ?>
				       </li>
						<li class="portfolio-url"><div><?php echo esc_html__( 'Project Url :', 'redbiz' ) ?></div>
						<?php $portfolio_url = get_post_meta( get_the_ID(), 'portfolio_url', true ); ?>
							<?php echo esc_attr( $portfolio_url ); ?>
						</li>
						<li class="portfolio-date"><div><?php echo esc_html__( 'Date :', 'redbiz' ) ?></div>
				        <?php echo get_the_date(); ?>
				        </li>
						
					</ul>
	            </div> 
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="content-portfolio-detail">
	            		<?php the_content(); ?>
	            	</div>			
	            </div>
			</div>
		<?php }; ?>
	</div>
</section>
