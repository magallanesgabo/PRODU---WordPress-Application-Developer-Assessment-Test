<?php while (have_posts()) : the_post();

    $author_id = get_the_ID();

    // WP_Query Arguments + meta query
    $args = array(
        'post_type' => 'books_cpt',
        'orderby'   => 'date',
        'posts_per_page' => 2,
        'meta_query' => array(
            array(
                'key' => 'authors',
                'value' => '"' . $author_id . '"',
                'compare' => 'LIKE'
            )
        )
    );

    $query = new WP_Query($args);

    while ($query->have_posts()) : $query->the_post();

        $authors = get_field('authors');
        $star_rating = get_field('star_rating');
        $post_id = get_the_ID();
        $permalink = get_permalink($post_id);

        // Truncated Text
        $description = get_field('description');
        $words = explode(' ', $description);
        $first_25_words = array_slice($words, 0, 25);
        $truncated_text = implode(' ', $first_25_words);

?>
        <li>
            <div style="display: flex; margin-top: -10px;">
                <a href="<?php echo esc_url($permalink); ?>">
                    <h1 class="title-widget"><?php the_title(); ?></h1>
                </a>
                <div class="star-card-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/🦆 icon _star_.png" class="star-icon-1">
                    <p class="star-rating-1"><?php echo esc_html($star_rating); ?></p>
                </div>
            </div>
            <p class="p-widget"><?php echo esc_html($truncated_text); ?></p>
            <hr>
        </li>
<?php
    endwhile;
    wp_reset_postdata();
endwhile; ?>