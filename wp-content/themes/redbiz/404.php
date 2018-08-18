<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package redbiz
 */

get_header(); ?>

	<div id="primary" class="content-area fullwidth-404">
		<main id="main" class="site-main" role="main">
			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="title-404 nothing"><?php esc_html_e( '404', 'redbiz' ); ?></h1>
				</header><!-- .page-header -->

				<div class="sub-title-404">
					<?php esc_html_e( 'Page not Found', 'redbiz' ); ?>
				</div><!-- .title-404 -->

				<div class="page-content">
					<p class="subtext-nothing">
					<?php 
					$allowed = array( 'br' => array() );
					echo wp_kses( esc_html__( "We're sorry, but the page you were looking for doesn't exist.", 'redbiz' ), 
						$allowed );
					?>
					</p>					
					<h4><a class="themesflat-button" href="<?php echo esc_url( home_url('/') ); ?>">
						</i><?php esc_html_e( 'Back Home','redbiz' ) ?></a>
					</h4>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->
	
<?php get_footer(); ?>