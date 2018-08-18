<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package redbiz
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php get_template_part( 'tpl/feature-post'); ?>

	<?php if ( themesflat_get_opt('show_header_title_content') == 1 && is_page_template( 'default' ) ): ?>
		<?php if( is_page() ): ?>
		 	<header class="entry-header">
		  		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		 	</header><!-- .entry-header -->
		<?php endif; ?>
	<?php endif ?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'redbiz' ),
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
		?>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'redbiz' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->