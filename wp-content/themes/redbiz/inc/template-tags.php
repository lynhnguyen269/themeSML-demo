<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package redbiz
 */

if ( ! function_exists( 'themesflat_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time, post categories and author.
 */

function themesflat_widget_layout($columns) {
	$layout = array();
	switch ($columns) {
		case 1:
			$layout = array(12);
			break;
		case 2:
			$layout = array(6,6);
			break;
		case 3:
			$layout = array(4,4,4);
			break;
		case 4:
			$layout = array(4,3,3,2);
			break;
		case 5:
			$layout = array(2,2,2,2,2);
			break;
		default:
			$layout = array(12);
			break;
		
	}
	return $layout;
}

function themesflat_posted_on() { 
	if (  themesflat_choose_opt('show_post_meta') == 1 ) :
	?>	
	<ul class="meta-left">	
		<li class="post-author">
			<?php
			printf(
				'<span class="author vcard"><a class="url fn n" href="%s" title="%s" rel="author"> %s</a></span>',
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) )),
				esc_attr( sprintf( esc_html__( 'View all posts by %s', 'redbiz' ), get_the_author() ) ),
				get_the_author()
			);
			?>			
		</li>
	<?php

		if (get_the_tags('') != '') {
			echo '<li class="post-tags">'.esc_html__('','redbiz');
				the_tags( '' );
			echo '</li>';
		}
		?>
		
	</ul>
	<?php 
	endif;
}

endif;

if ( ! function_exists( 'themesflat_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function themesflat_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' == get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', ', ' );
		if ( $tags_list && is_single() ) {
			printf( '<div class="tags-links">Tags:' . esc_html__( ' %1$s', 'redbiz' ) . '</div>', 
				$tags_list );
		}
	}
	if ( themesflat_get_opt('show_social_share') == 1 ) {
		echo '<div class="wrap-social-share-article">';
			get_template_part('tpl/social-share');
		echo '</div>';
	}
	
	edit_post_link( esc_html__( 'Edit', 'redbiz' ), '<div class="clearboth"><span class="edit-link">', '</span></div>' );
}
endif;

if ( ! function_exists( 'themesflat_post_navigation' ) ) :
function themesflat_post_navigation() {
	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous ) {
		return;
	}
	?>
	<nav class="navigation posts-navigation" role="navigation">
		<h2 class="screen-reader-text"><?php esc_html_e( 'Post navigation', 'redbiz' ); ?></h2>
		<ul class="nav-links clearfix">
			<?php
			if ( is_attachment() ) :
				previous_post_link( '<li>%link</li>', sprintf( '<span class="meta-nav">%s</span> %%title', esc_html__( 'Published In', 'redbiz' ) ) );
			else :
				previous_post_link( '<li class="previous-post">%link</li>', sprintf( '<span class="meta-nav">%s</span> %%title', esc_html__( 'Previous Post', 'redbiz' ) ) );
				next_post_link( '<li class="next-post">%link</li>', sprintf( '<span class="meta-nav">%s</span> %%title', esc_html__( 'Next Post', 'redbiz' ) ) );
			endif;
			?>
		</ul><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;