<?php
/**
 * Template Name: CommingSoon
 */

get_header(); ?>
<div class="col-md-12">

	<div id="primary" class="content-area fullwidth-comming-soon">
		<main id="main" class="site-main" role="main">
			<section class="error-comming-soon not-found">

				<div class="construction-icons">
               <i class="icon-settings" id="cons-icon-1"></i>
               <i class="icon-settings" id="cons-icon-2"></i>
            </div>

				<div class="page-content">					
					<div id="countdown" class="countdown clearfix" data-set_time="<?php echo esc_attr( themesflat_choose_opt('comming_soon_time') ); ?>">
                  <div class="square">
                     <div class="numb time-day">02</div>
                     <div class="text"><?php esc_html__( 'DAY', 'redbiz' ); ?></div>
                  </div>
                  <div class="square">
                     <div class="numb time-hours">24</div>
                     <div class="text"><?php esc_html__( 'HOUR', 'redbiz' ); ?></div>
                  </div>
                  <div class="timer">:</div>
                  <div class="square">
                     <div class="numb time-mins">35</div>
                     <div class="text"><?php esc_html__( 'MINUTE', 'redbiz' ); ?></div>
                  </div>
                  <div class="timer">:</div>
                  <div class="square">
                     <div class="numb time-secs">09</div>
                     <div class="text"><?php esc_html__( 'SECOND', 'redbiz' ); ?></div>
                  </div>
               </div>
               <div class="comming-text">
                  <h3> <?php echo esc_html__( 'We\'re getting ready to launch', 'redbiz' ) ?> </h3>
                  <h6> <?php echo esc_html__( 'We\'ll be here soon with our new awesome site, subscribe to be notified.', 'redbiz' ) ?></h6>
               </div>
				</div><!-- .page-content -->
			</section><!-- .error-comming-soon -->
		</main><!-- #main -->
	</div><!-- #primary -->

</div><!-- /.col-md-12 -->
<?php get_footer(); ?>