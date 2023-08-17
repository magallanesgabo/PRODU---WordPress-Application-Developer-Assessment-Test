<?php
$current_url = home_url(add_query_arg(array(), $wp->request));
$post_id = url_to_postid($current_url);

// WP_Query Arguments
$args = array(
	'post_type' => 'books_cpt',
	'p' => $post_id,
	'posts_per_page' => 1,
);

$query = new WP_Query($args);

while ($query->have_posts()) : $query->the_post();

	$authors = get_field('authors');

	// Get author data from post objects
	$authors_data = array();
	if (is_array($authors)) {
		foreach ($authors as $author) {
			$authors_data[] = array(
				'name' => $author->post_title,
				'id' => $author->ID
			);
		}
	} else {
		$authors_data[] = array(
			'name' => $authors->post_title,
			'id' => $authors->ID
		);
	}

	$author_links = array();
	foreach ($authors_data as $author) {
		$author_links[] = '<a href="' . get_permalink($author['id']) . '" class="subtitle">' . $author['name'] . '</a>';
	}
	echo implode('<span class="subtitle">, </span>', $author_links);

endwhile;
wp_reset_postdata();
