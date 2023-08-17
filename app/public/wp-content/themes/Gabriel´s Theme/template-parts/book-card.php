<?php while (have_posts()) : the_post(); ?>

	<?php


	//WP_Query Arguments
	$args = array(
		'post_type' => 'books_cpt',
		'orderby'   => 'date',
		'posts_per_page' => 6,
	);

	$query = new WP_Query($args);


	while ($query->have_posts()) : $query->the_post();


		$title = get_field('title');
		$subtitle = get_field('subtitle');
		$authors = get_field('authors');
		$release_date = get_field('release_date');
		$star_rating = get_field('star_rating');
		$book_cover = get_field('book_cover');
		$post_id = get_the_ID();
		$permalink = get_permalink($post_id);

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

		//Truncated Text
		$description = get_field('description');
		$words = explode(' ', $description);
		$first_18_words = array_slice($words, 0, 18);
		$truncated_text = implode(' ', $first_18_words);
	?>

		<div class="card">
			<a title="Book cover" href="<?php echo esc_url($permalink); ?>"><img class="book-cover" src="<?php echo $book_cover; ?>"></a>
			<div style="padding-right: 10px;padding-bottom: 15px;">
				<a href="<?php echo esc_url($permalink); ?>">
					<h1 class="title-card"><?php the_title(); ?></h1>
				</a>
				<?php
				$author_links = array();
				foreach ($authors_data as $author) {
					$author_links[] = '<a href="' . get_permalink($author['id']) . '" class="author-card">' . $author['name'] . '</a>';
				}
				echo implode('<span class="author-card">, </span>', $author_links);
				?>
				<p class="description-card"><?php echo $truncated_text; ?></p>
				<div style="display: flex;">
					<a href="<?php echo esc_url($permalink); ?>" style="margin-top: 3px;color: #8C8C8C;font-family: Poppins;font-size: 10.472px;font-style: normal;font-weight: 600;line-height: normal;text-decoration: none;white-space: nowrap;">
						Read more</a>
					<div class="star-card">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/🦆 icon _star_.png" class="star-icon">
						<p class="star-rating"><?php echo $star_rating; ?></p>
					</div>
				</div>
			</div>
		</div>

	<?php endwhile;
	wp_reset_postdata(); ?>

<?php endwhile; ?>