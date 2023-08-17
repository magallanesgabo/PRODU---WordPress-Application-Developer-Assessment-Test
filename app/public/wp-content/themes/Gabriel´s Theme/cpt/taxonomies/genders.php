<?php

// Register Custom Taxonomy / Genders
function genders_taxonomy()
{

	$labels = array(
		'name'                       => _x('Genders', 'Taxonomy General Name', 'text_domain'),
		'singular_name'              => _x('Gender', 'Taxonomy Singular Name', 'text_domain'),
		'menu_name'                  => __('Genders', 'text_domain'),
		'all_items'                  => __('All Genders', 'text_domain'),
		'parent_item'                => __('Parent Gender', 'text_domain'),
		'parent_item_colon'          => __('Parent Gender:', 'text_domain'),
		'new_item_name'              => __('New Gender Name', 'text_domain'),
		'add_new_item'               => __('Add New Gender', 'text_domain'),
		'edit_item'                  => __('Edit Gender', 'text_domain'),
		'update_item'                => __('Update Gender', 'text_domain'),
		'view_item'                  => __('View Gender', 'text_domain'),
		'separate_items_with_commas' => __('Separate items with commas', 'text_domain'),
		'add_or_remove_items'        => __('Add or remove Genders', 'text_domain'),
		'choose_from_most_used'      => __('Choose from the most used', 'text_domain'),
		'popular_items'              => __('Popular Genders', 'text_domain'),
		'search_items'               => __('Search Genders', 'text_domain'),
		'not_found'                  => __('Not Found', 'text_domain'),
		'no_terms'                   => __('No items', 'text_domain'),
		'items_list'                 => __('Items list', 'text_domain'),
		'items_list_navigation'      => __('Items list navigation', 'text_domain'),
	);
	$rewrite = array(
		'slug'                       => 'Genders',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy('genders', array('books_cpt'), $args);
}
add_action('init', 'genders_taxonomy', 0);
