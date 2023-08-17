<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title><?php bloginfo('name');
            echo " | ";
            bloginfo('description'); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Poppins|Roboto" rel="stylesheet">
    <link rel="stylesheet" src="style.css">
</head>

<body>
    <header>
        <div style="display: flex; justify-content: space-between;">
            <div><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo.png" alt=""></a></div>
            <div class="man"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/man.webp" alt="" width="40%"></div>
        </div>
    </header>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-background.webp" class="home-banner-background">
    <div style="justify-content: center;height: 100vh;width: 100%;display: flex;align-items: center;">
        <!-- Random Shortcode Banner -->
        <div style="display: flex; justify-content: center;">
            <?php echo do_shortcode('[random_banner]'); ?>
        </div>
        <!-- Random Shortcode Banner -->
    </div>
    <div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gradient-back-1.webp" class="body-background">
        <div>
            <h1 class="gradient">Most Recent Books</h1>
            <hr class="latest-books-2" style="margin: 40px auto 0px;">
            <div class="grid-container">
                <?php get_template_part('template-parts/book-card'); ?>
            </div>
            <div style="margin: 0px 0px 29px;">
                <h1 class="latest-books">Latest Books reviews</h1>
                <hr class="latest-books-2">
            </div>
        </div>

    </div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/body-back-1.webp" class="background-widget">
    <div style="height: 100%;display: flex;align-items: center;justify-content: center; margin: 91px 0px 61px;">
        <div style="height: 100%;display: flex;align-items: center;justify-content: center;">
        <!-- Most Recent List Widget -->
            <div class="card-blur">
                <?php the_widget('Books_Widget'); ?>
            </div>
        <!-- Most Recent List Widget -->
        </div>
        <div style="justify-content: center;display: flex;width: 25%;padding-left: 40px;">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/books.png" width="80%" height="auto">
        </div>
    </div>
    <footer>
        <div style="background-color: #E2E2E2;width: 100%;height: 84px;display: flex;justify-content: space-around;background-color: #E2E2E2;align-items: center;">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo-footer.png" style="width: 10%;">
            <p style="text-align: center;">PRODU - Web Assesstment Test</p>
            <p style="text-align: center;">Gmail: magallanesgabo@gmail.com</p>
        </div>
    </footer>
</body>
<?php wp_footer(); ?>

</html>