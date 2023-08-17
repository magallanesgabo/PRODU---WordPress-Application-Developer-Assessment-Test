<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gabriel´s_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Poppins|Roboto" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<header>
	<div style="display: flex; justify-content: space-between;">
		<div><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo.png" alt=""></a></div>
		<div class="man"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/man.webp" alt="" width="40%"></div>
	</div>
</header>