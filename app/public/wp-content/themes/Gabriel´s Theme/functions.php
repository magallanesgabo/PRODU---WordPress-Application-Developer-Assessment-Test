<?php

/**
 * Gabriel´s Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Gabriel´s_Theme
 */


function styles()
{
    wp_enqueue_style('my-stylesheet', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'styles');


function mytheme_widgets_init()
{
    register_sidebar(array(
        'name' => 'custom_widget',
        'id' => 'custom-widget',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'mytheme_widgets_init');

/* CPT, TAXONOMIES & WIDGET */
include_once("cpt/books.php");
include_once("cpt/authors.php");
include_once("cpt/taxonomies/genders.php");
include_once("custom_widgets/books-widget.php");
/* CPT, TAXONOMIES & WIDGET */

function random_banner_shortcode()
{
    ob_start();
    include 'template-parts/random_banner.php';
    return ob_get_clean();
}

add_shortcode('random_banner', 'random_banner_shortcode');

/* SECUTITY FUNCTIONS */

// Theme & Plugin File Editor disabled
define('DISALLOW_FILE_EDIT', true);

// XMLRPC disabled
add_filter( 'xmlrpc_enabled', '__return_false' );

// REST AUTHENTICATION ON
add_filter( 'rest_authentication_errors', function( $result ) {
    if ( ! empty( $result ) ) {
        return $result;
    }
    if ( ! is_user_logged_in() ) {
        return new WP_Error( 
        	'rest_not_logged_in', 
        	'You are not currently logged in.', 
        	array( 'status' => 401 ) 
        );
    }
    return $result;
});

// Comments completely disabled
add_action('admin_init', function () {

    global $pagenow;
     
    if ($pagenow === 'edit-comments.php') {
        wp_safe_redirect(admin_url());
        exit;
    }
 
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
 
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
});
 
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);
 
add_filter('comments_array', '__return_empty_array', 10, 2);
 
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
});
 
add_action('init', function () {
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
});

/* SECUTITY FUNCTIONS */