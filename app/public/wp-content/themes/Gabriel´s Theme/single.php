<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Gabriel´s_Theme
 */
wp_head();
?>

<main id="primary" class="site-main">

	<?php
	while (have_posts()) :
		the_post();

		get_template_part('template-parts/content', get_post_type());


	endwhile; // End of the loop.
	?>

</main><!-- #main -->

<?php
wp_footer();
