<?php
/**
 * Prevent direct access to this file
 */

add_action( 'wp_enqueue_scripts', 'themesflat_portfolios_scripts' );

/**
  * Load the scripts
*/
function themesflat_portfolios_scripts() {  
    wp_enqueue_script( 'themesflat-isotope', plugin_dir_url( __FILE__ ) . '/lib/js/isotope.min.js', array('jquery'), true );
    wp_enqueue_script( 'imagesloaded');
}

add_action('init', 'themesflat_register_portfolio_post_type');


/**
  * Register Portfolios post type
*/
function themesflat_register_portfolio_post_type() {

    $labels = array(
        'name'                  => esc_html__( 'Portfolios', 'redbiz' ),
        'singular_name'         => esc_html__( 'Portfolios', 'redbiz' ),
        'rewrite'               => array( 'slug' => esc_html__( 'portfolios' ) ),
        'menu_name'             => esc_html__( 'Portfolios', 'redbiz' ),
        'add_new'               => esc_html__( 'New Portfolios', 'redbiz' ),
        'add_new_item'          => esc_html__( 'Add New Portfolios', 'redbiz' ),
        'new_item'              => esc_html__( 'New Portfolios Item', 'redbiz' ),
        'edit_item'             => esc_html__( 'Edit Portfolios Item', 'redbiz' ),
        'view_item'             => esc_html__( 'View Portfolios', 'redbiz' ),
        'all_items'             => esc_html__( 'All Portfolios', 'redbiz' ),
        'search_items'          => esc_html__( 'Search Portfolios', 'redbiz' ),
        'not_found'             => esc_html__( 'No Portfolios Items Found', 'redbiz' ),
        'not_found_in_trash'    => esc_html__( 'No Portfolios Items Found In Trash', 'redbiz' ),
        'parent_item_colon'     => esc_html__( 'Parent Portfolios:', 'redbiz' ),
        'not_found'             => esc_html__( 'No portfolios found', 'redbiz' ),
        'not_found_in_trash'    => esc_html__( 'No portfolios found in Trash', 'redbiz' )

    );
    $args = array(
        'labels'      => $labels,
        'supports'    => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'public'      => true,
        'has_archive' => true,
        'rewrite'     => array('slug' => get_theme_mod('portfolios_slug','portfolios')),
        'menu_icon'   => 'dashicons-portfolio',
    );
    register_post_type( 'portfolios', $args );

    $labels = array(
        'name'                  => esc_html__( 'Testimonial', 'redbiz' ),
        'singular_name'         => esc_html__( 'Testimonial', 'redbiz' ),
        'rewrite'               => array( 'slug' => esc_html__( 'testimonial' ) ),
        'menu_name'             => esc_html__( 'Testimonial', 'redbiz' ),
        'add_new'               => esc_html__( 'New Testimonial', 'redbiz' ),
        'add_new_item'          => esc_html__( 'Add New Testimonial', 'redbiz' ),
        'new_item'              => esc_html__( 'New Testimonial Item', 'redbiz' ),
        'edit_item'             => esc_html__( 'Edit Testimonial Item', 'redbiz' ),
        'view_item'             => esc_html__( 'View Testimonial', 'redbiz' ),
        'all_items'             => esc_html__( 'All Testimonial', 'redbiz' ),
        'search_items'          => esc_html__( 'Search Testimonial', 'redbiz' ),
        'not_found'             => esc_html__( 'No Testimonial Items Found', 'redbiz' ),
        'not_found_in_trash'    => esc_html__( 'No Testimonial Items Found In Trash', 'redbiz' ),
        'parent_item_colon'     => esc_html__( 'Parent Testimonial:', 'redbiz' ),
        'not_found'             => esc_html__( 'No Testimonial found', 'redbiz' ),
        'not_found_in_trash'    => esc_html__( 'No Testimonial found in Trash', 'redbiz' )
    );
    $args = array(
        'labels'      => $labels,
        'supports'    => array( 'title', 'editor', 'thumbnail' ),
        'public'      => true,
        'has_archive' => true,
        'menu_icon'   => 'dashicons-testimonial',
    );
    register_post_type( 'testimonial', $args );

    flush_rewrite_rules();
}

add_filter( 'post_updated_messages', 'themesflat_portfolios_updated_messages' );


/**
  * Portfolios update messages.
*/
function themesflat_portfolios_updated_messages ( $messages ) {
    Global $post, $post_ID;
    $messages[esc_html__( 'portfolios' )] = array(
        0  => '',
        1  => sprintf( esc_html__( 'Portfolios Updated. <a href="%s">View portfolios</a>', 'redbiz' ), esc_url( get_permalink( $post_ID ) ) ),
        2  => esc_html__( 'Custom Field Updated.', 'redbiz' ),
        3  => esc_html__( 'Custom Field Deleted.', 'redbiz' ),
        4  => esc_html__( 'Portfolios Updated.', 'redbiz' ),
        5  => isset( $_GET['revision']) ? sprintf( esc_html__( 'Portfolios Restored To Revision From %s', 'redbiz' ), wp_post_revision_title((int)$_GET['revision'], false)) : false,
        6  => sprintf( esc_html__( 'Portfolios Published. <a href="%s">View Portfolios</a>', 'redbiz' ), esc_url( get_permalink( $post_ID ) ) ),
        7  => esc_html__( 'Portfolios Saved.', 'redbiz' ),
        8  => sprintf( esc_html__('Portfolios Submitted. <a target="_blank" href="%s">Preview Portfolios</a>', 'redbiz' ), esc_url( add_query_arg( 'preview', 'true', get_permalink( $post_ID ) ) ) ),
        9  => sprintf( esc_html__( 'Portfolios Scheduled For: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Portfolios</a>', 'redbiz' ),date_i18n( esc_html__( 'M j, Y @ G:i', 'redbiz' ), strtotime( $post->post_date ) ), esc_url( get_permalink( $post_ID ) ) ),
        10 => sprintf( esc_html__( 'Portfolios Draft Updated. <a target="_blank" href="%s">Preview Portfolios</a>', 'redbiz' ), esc_url( add_query_arg( 'preview', 'true', get_permalink( $post_ID ) ) ) ),
    );
    return $messages;
}

add_action( 'init', 'themesflat_register_portfolios_taxonomy' );

/**
  * Register portfolios taxonomy
*/
function themesflat_register_portfolios_taxonomy() {
    $labels = array(
        'name'                       => esc_html__( 'Categories', 'redbiz' ),
        'singular_name'              => esc_html__( 'Categories', 'redbiz' ),
        'search_items'               => esc_html__( 'Search Categories', 'redbiz' ),
        'menu_name'                  => esc_html__( 'Categories', 'redbiz' ),
        'all_items'                  => esc_html__( 'All Categories', 'redbiz' ),
        'parent_item'                => esc_html__( 'Parent Categories', 'redbiz' ),
        'parent_item_colon'          => esc_html__( 'Parent Categories:', 'redbiz' ),
        'new_item_name'              => esc_html__( 'New Categories Name', 'redbiz' ),
        'add_new_item'               => esc_html__( 'Add New Categories', 'redbiz' ),
        'edit_item'                  => esc_html__( 'Edit Categories', 'redbiz' ),
        'update_item'                => esc_html__( 'Update Categories', 'redbiz' ),
        'add_or_remove_items'        => esc_html__( 'Add or remove Categories', 'redbiz' ),
        'choose_from_most_used'      => esc_html__( 'Choose from the most used Categories', 'redbiz' ),
        'not_found'                  => esc_html__( 'No Categories found.' ),
        'menu_name'                  => esc_html__( 'Categories' ),
    );
    $args = array(
        'labels'       => $labels,
        'hierarchical' => true,
    );
    register_taxonomy( 'portfolios_category', 'portfolios', $args );

    $labels = array(
        'name'                       => esc_html__( 'Categories', 'redbiz' ),
        'singular_name'              => esc_html__( 'Categories', 'redbiz' ),
        'search_items'               => esc_html__( 'Search Categories', 'redbiz' ),
        'menu_name'                  => esc_html__( 'Categories', 'redbiz' ),
        'all_items'                  => esc_html__( 'All Categories', 'redbiz' ),
        'parent_item'                => esc_html__( 'Parent Categories', 'redbiz' ),
        'parent_item_colon'          => esc_html__( 'Parent Categories:', 'redbiz' ),
        'new_item_name'              => esc_html__( 'New Categories Name', 'redbiz' ),
        'add_new_item'               => esc_html__( 'Add New Categories', 'redbiz' ),
        'edit_item'                  => esc_html__( 'Edit Categories', 'redbiz' ),
        'update_item'                => esc_html__( 'Update Categories', 'redbiz' ),
        'add_or_remove_items'        => esc_html__( 'Add or remove Categories', 'redbiz' ),
        'choose_from_most_used'      => esc_html__( 'Choose from the most used Categories', 'redbiz' ),
        'not_found'                  => esc_html__( 'No Categories found.' ),
        'menu_name'                  => esc_html__( 'Categories' ),
    );

    $args = array(
        'labels'       => $labels,
        'hierarchical' => true,
    );

    register_taxonomy( 'services_category', 'services', $args );
    flush_rewrite_rules();
}

add_action( 'init', 'themesflat_register_portfolios_tag' );

/**
 * Register tag taxonomy
 */
function themesflat_register_portfolios_tag() {
    $labels = array(
        'name'                       => esc_html__( 'Portfolio Tags', 'redbiz' ),
        'singular_name'              => esc_html__( 'Portfolio Tags', 'redbiz' ),
        'search_items'               => esc_html__( 'Search Tags', 'redbiz' ),        
        'all_items'                  => esc_html__( 'All Tags', 'redbiz' ),
        'new_item_name'              => esc_html__( 'Add New Tag', 'redbiz' ),
        'add_new_item'               => esc_html__( 'New Tag Name', 'redbiz' ),
        'edit_item'                  => esc_html__( 'Edit Tag', 'redbiz' ),
        'update_item'                => esc_html__( 'Update Tag', 'redbiz' ),
        'menu_name'                  => esc_html__( 'Tags' ),
    );
    $args = array(
        'labels'       => $labels,
        'hierarchical' => true,
    );
    register_taxonomy( 'portfolios_tag', 'portfolios', $args );
    flush_rewrite_rules();
}
