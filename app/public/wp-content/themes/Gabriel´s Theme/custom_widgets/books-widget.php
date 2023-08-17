<?php
class Books_Widget extends WP_Widget
{
    public function __construct()
    {
        parent::__construct(
            'books_widget',
            'Books Widget',
            array('description' => 'A widget that displays a list of books.')
        );
    }

    public function widget($args, $instance)
    {
        extract($args);
        $title = apply_filters('widget_title', $instance['title'] ?? '');

        echo $before_widget;
        if (!empty($title))
            echo $before_title . $title . $after_title;

        // WP_Query Arguments
        $args = array(
            'post_type' => 'books_cpt',
            'orderby'   => 'date',
            'posts_per_page' => 4,
        );

        $query = new WP_Query($args);

        while ($query->have_posts()) : $query->the_post();

            $authors = get_field('authors');
            $star_rating = get_field('star_rating');
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
                    <?php
                    $author_links = array();
                    foreach ($authors_data as $author) {
                        $author_links[] = '<a href="' . get_permalink($author['id']) . '" class="author-widget">' . $author['name'] . '</a>';
                    }
                    echo implode('<span class="author-widget">, </span>', $author_links);
                    ?>
                </div>
                <p class="p-widget"><?php echo esc_html($truncated_text); ?></p>
                <hr>
            </li>
        <?php
        endwhile;
        wp_reset_postdata();

        echo $after_widget;
    }

    public function update($new_instance, $old_instance)
    {
        return array(
            'title' => sanitize_text_field(stripslashes($new_instance['title'])),
        );
    }

    public function form($instance)
    {
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php _e('Title:'); ?></label>
            <input type="text" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" value="<?php echo esc_attr(isset($instance['title']) ? $instance['title'] : ''); ?>" class="widefat" />
        </p>
<?php
    }
}

add_action('widgets_init', function () {
    register_widget('Books_Widget');
});
