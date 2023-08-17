<?php

// Register Custom Post Type / Books

function books_cpt()
{

	$labels = array(
		'name'                  => _x('Books', 'Post Type General Name', 'books_domain'),
		'singular_name'         => _x('Book', 'Post Type Singular Name', 'books_domain'),
		'menu_name'             => __('Books', 'books_domain'),
		'name_admin_bar'        => __('Books', 'books_domain'),
		'archives'              => __('Book Archives', 'books_domain'),
		'attributes'            => __('Book Attributes', 'books_domain'),
		'parent_item_colon'     => __('Parent Book:', 'books_domain'),
		'all_items'             => __('All Books', 'books_domain'),
		'add_new_item'          => __('Add New Book', 'books_domain'),
		'add_new'               => __('Add New', 'books_domain'),
		'new_item'              => __('New Book', 'books_domain'),
		'edit_item'             => __('Edit Book', 'books_domain'),
		'update_item'           => __('Update Book', 'books_domain'),
		'view_item'             => __('View Book', 'books_domain'),
		'view_items'            => __('View Books', 'books_domain'),
		'search_items'          => __('Search Book', 'books_domain'),
		'not_found'             => __('Not found', 'books_domain'),
		'not_found_in_trash'    => __('Not found in Trash', 'books_domain'),
		'featured_image'        => __('Featured Image', 'books_domain'),
		'set_featured_image'    => __('Set featured image', 'books_domain'),
		'remove_featured_image' => __('Remove featured image', 'books_domain'),
		'use_featured_image'    => __('Use as featured image', 'books_domain'),
		'insert_into_item'      => __('Insert into item', 'books_domain'),
		'uploaded_to_this_item' => __('Uploaded to this item', 'books_domain'),
		'items_list'            => __('Items list', 'books_domain'),
		'items_list_navigation' => __('Items list navigation', 'books_domain'),
		'filter_items_list'     => __('Filter items list', 'books_domain'),
	);
	$rewrite = array(
		'slug'                  => 'books',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __('Book', 'books_domain'),
		'description'           => __('Books', 'books_domain'),
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'custom-fields'),
		'taxonomies'            => array('Genders'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-book-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
		'show_in_rest'          => false,
	);
	register_post_type('books_cpt', $args);
}
add_action('init', 'books_cpt', 0);
