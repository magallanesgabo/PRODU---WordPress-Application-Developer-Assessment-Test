<?php while (have_posts()) : the_post(); ?>

	<?php
	//WP_Query Arguments
	$args = array(
		'post_type' => 'books_cpt',
		'orderby'   => 'rand',
		'posts_per_page' => 1,
	);

	$query = new WP_Query($args);
	?>

	<?php while ($query->have_posts()) : $query->the_post();


		$title = get_field('title');
		$subtitle = get_field('subtitle');
		$authors = get_field('authors');
		$description = get_field('description');
		$release_date = get_field('release_date');
		$star_rating = get_field('star_rating');
		$book_cover = get_field('book_cover');

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
	?>

		<img src="<?php echo $book_cover; ?>" width="320.4px" height="481.5px">
		<div style="width: 50%;padding-left: 2em;">
			<h1 class="title"><?php the_title(); ?></h1>
			<?php
			$author_links = array();
			foreach ($authors_data as $author) {
				$author_links[] = '<a href="' . get_permalink($author['id']) . '" class="subtitle">' . $author['name'] . '</a>';
			}
			echo implode('<span style="color: #FFF;font-family: Poppins;font-size: 19px;font-style: normal;font-weight: 500;">, </span>', $author_links);
			?>
			<p style="width:481.37px;color: rgba(255, 255, 255, 0.53);font-family: Roboto;font-size: 17.103px;font-style: normal;font-weight: 400;line-height: 27.004px; /* 157.895% */">
				<?php echo $description; ?></p>
			<div class="banner-star-card">
				<img class="banner-star-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/🦆 icon _star_.png">
				<p class="banner-star-rating"><?php echo $star_rating; ?></p>
			</div>
		</div>


	<?php endwhile;
	wp_reset_postdata(); ?>

<?php endwhile; ?>