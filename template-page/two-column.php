<?php
/**
 * Template Name: Two Column page
 *
 * The template for displaying the user account page.
 * 
 * Template Post Type: page
 *
 * @package Strapped
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main class="two-column-main content-block">
    <h1><?php echo get_the_title() ?></h1>
    <div class="two-column-container">
        <div class="two-column__content">
            <?php the_content() ?>
        </div>

        <div class="two-column__image">
            <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php echo get_the_title() ?> picture">
        </div>
    </div>
</main>

<?php get_footer(); ?>