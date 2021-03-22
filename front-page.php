<?php
/**
 * The template for displaying frontpage by default
 *
 * @author Andrea Musso
 *
 * @package foundry
 */

get_header();
?>


<main class="main homepage-main" role="main">

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); // @codingStandardsIgnoreLine ?>

			<?php the_content() ?>

		<?php endwhile; ?>

	<?php else :?>

		<?php get_template_part( 'template-parts/content', 'none' );?>

	<?php endif; ?>

</main>

<?php get_footer(); ?>
