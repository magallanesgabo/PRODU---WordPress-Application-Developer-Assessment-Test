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

    $title = get_field('title');
    $subtitle = get_field('subtitle');
    $description = get_field('description');
    $release_date = get_field('release_date');
    $star_rating = get_field('star_rating');
    $book_cover = get_field('book_cover');

?>
    <?php get_header(); ?>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-background.webp" class="banner-background">
    <div style="height: 100%; display: flex; justify-content: center; align-items: center;">
        <div style="display: flex; justify-content: center;">
            <img src="<?php echo $book_cover; ?>" width="320.4px" height="481.5px">
            <div style="width: 50%;padding-left: 2em;">
                <h1 class="title"><?php the_title(); ?></h1>
                <?php get_template_part('template-parts/authors'); ?>
                <p class="description-book-post">
                    <?php echo $description; ?>
                </p>
                <div class="banner-star-card">
                    <img class="banner-star-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/🦆 icon _star_.png">
                    <p class="banner-star-rating"><?php echo $star_rating; ?></p>
                </div>
            </div>
        </div>
    </div>

<?php endwhile;
wp_reset_postdata(); ?>