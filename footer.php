<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @author Andrea Musso
 *
 * @package foundry
 */

?>

</div><!-- #content -->

	<footer class="site-footer">
		<div class="site-footer__inner content-block">
			<div class="site-footer__left">
				<div class="site-footer__logo">
					<img src="<?php echo get_template_directory_uri() ?>/dist/images/yoga-footer.jpg" alt="yoga alliance logo">
					<div class="site-footer__mobile">
						<a href="https://twitter.com/helengeorghiou" rel="noopener noreferrer" to target="_blank" class="social"> <?php echo get_template_part( 'svg-template/svg', 'twitter' ) ?> </a>
					</div>
				</div>
				<div class="site-footer__info">
					<p>Helen Georghiou is a registered teacher with Yoga Alliance Professionals. This accreditation demonstrates excellent standards as set by Yoga Alliance Professionals.</p>
					<div class="nav-footer">
						<?php get_template_part( 'components/navigation/footer-nav' ); ?>
					</div>
				</div>
			</div>
			<div class="site-footer__right">
				<a href="https://twitter.com/helengeorghiou" rel="noopener noreferrer" to target="_blank" class="social"> <?php echo get_template_part( 'svg-template/svg', 'twitter' ) ?> </a>
			</div>
		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php get_template_part( 'components/footer/banner' ) ?>

<?php wp_footer(); ?>

</body>
</html>
