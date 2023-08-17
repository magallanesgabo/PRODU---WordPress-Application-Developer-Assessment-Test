<?php

// Register Custom Post Type / Authors
function authors_cpt()
{

	$labels = array(
		'name'                  => _x('Authors', 'Post Type General Name', 'authors_domain'),
		'singular_name'         => _x('Author', 'Post Type Singular Name', 'authors_domain'),
		'menu_name'             => __('Authors', 'authors_domain'),
		'name_admin_bar'        => __('Authors', 'authors_domain'),
		'archives'              => __('Author Archives', 'authors_domain'),
		'attributes'            => __('Item Attributes', 'authors_domain'),
		'parent_item_colon'     => __('Parent Item:', 'authors_domain'),
		'all_items'             => __('All Authors', 'authors_domain'),
		'add_new_item'          => __('Add New Author', 'authors_domain'),
		'add_new'               => __('Add New', 'authors_domain'),
		'new_item'              => __('New Author', 'authors_domain'),
		'edit_item'             => __('Edit Author', 'authors_domain'),
		'update_item'           => __('Update Author', 'authors_domain'),
		'view_item'             => __('View Author', 'authors_domain'),
		'view_items'            => __('View Authors', 'authors_domain'),
		'search_items'          => __('Search Author', 'authors_domain'),
		'not_found'             => __('Not found', 'authors_domain'),
		'not_found_in_trash'    => __('Not found in Trash', 'authors_domain'),
		'featured_image'        => __('Featured Image', 'authors_domain'),
		'set_featured_image'    => __('Set featured image', 'authors_domain'),
		'remove_featured_image' => __('Remove featured image', 'authors_domain'),
		'use_featured_image'    => __('Use as featured image', 'authors_domain'),
		'insert_into_item'      => __('Insert into item', 'authors_domain'),
		'uploaded_to_this_item' => __('Uploaded to this item', 'authors_domain'),
		'items_list'            => __('Items list', 'authors_domain'),
		'items_list_navigation' => __('Items list navigation', 'authors_domain'),
		'filter_items_list'     => __('Filter items list', 'authors_domain'),
	);
	$rewrite = array(
		'slug'                  => 'authors',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __('Author', 'authors_domain'),
		'description'           => __('Authors', 'authors_domain'),
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'custom-fields'),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 21,
		'menu_icon'             => 'dashicons-buddicons-buddypress-logo',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
		'show_in_rest'          => false,
	);
	register_post_type('authors_cpt', $args);
}
add_action('init', 'authors_cpt', 0);
