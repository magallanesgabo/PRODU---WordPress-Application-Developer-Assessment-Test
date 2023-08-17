<?php wp_head(); 
$current_url = home_url(add_query_arg(array(), $wp->request));
$post_id = url_to_postid($current_url);

// WP_Query Arguments
$args = array(
    'post_type' => 'authors_cpt',
    'p' => $post_id,
	'posts_per_page' => 1,
);

// Main WP_Query
$query = new WP_Query($args);

while ($query->have_posts()) : $query->the_post();

    $biography = get_field('biography');
    $author_image = get_field('author_image');
    
?>
 
    <?php get_header(); ?>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/body-back-1.webp" class="background-authors">
    <div style="height: 100%;display: flex;align-items: center;justify-content: center;">    
            <div style="width: 50%;">
                <div class="author-card-blur">
                    <div style="display: flex;">
                        <img src="<?php echo $author_image; ?>" class="author-image">
                        <div style="width: 50%;padding-left: 2em;">
                            <h1 class="author-title"><?php the_title(); ?></h1> 
                            <p class="author-biography">
                            <?php echo $biography; ?></p>
                        </div>
                    </div>        
                    <div>
                        <h3 class="latest-books-author">Related Books</h3>
                    </div>
                    <div>
                        <?php get_template_part( 'template-parts/author_books' );?> 
                    </div>
                </div>
            </div>
        <div style="justify-content: center;display: flex; width: 25%;padding-left: 40px;">
            <img src="<?php bloginfo ('template_directory'); ?>/assets/img/books.png" width="80%" height="auto">
        </div>
    </div>
<?php endwhile;
wp_reset_postdata(); 
wp_footer();?>