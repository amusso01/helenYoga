<?php
/**
 * Main Site Header Template
 * 
 * @author   Andrea Musso
 * 
 * @package  Foundry
 * 
 */

?>




<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta property="og:image" content="<?php echo get_template_directory_uri() ?>/dist/images/ogLogo-2.jpg" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<!--=== GMT head ===-->
	<?php  WPSeed_gtm('head') ?>
    <!--=== gmt end ===-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!--=== GMT body ===-->
<?php WPSeed_gtm('body') ?>
<!--=== gmt end ===-->

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'foundry' ); ?></a>
	<header class="site-header ">
		<div class="site-header__inner content-block">
			<?php get_template_part( 'components/header/logo' ); ?>
			<div class="site-header__block-navigation">
				<?php get_template_part( 'components/navigation/primary' ); ?>
				<a href="<?php echo site_url('/get-in-touch') ?>" class="btn">GET IN TOUCH</a>
			</div>
	
			<?php get_template_part( 'components/header/hamburger' ); ?>
		</div>

	</header><!-- .site-header -->


	<div id="content" class="site-content">
