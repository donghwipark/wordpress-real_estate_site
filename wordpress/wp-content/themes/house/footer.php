<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Eastlead_Global_House
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container-fluid">
			<div class="row">
                <div class="bottom-navigation col-sm-6 col-sm-push-6">
                    Menu Bottom
                </div><!-- footer right content -->
                <div class="footer-text col-sm-6 col-sm-pull-6">
                    &copy;<?php echo date( 'Y' ).' '.get_bloginfo( 'name' ); ?>
                </div><!-- footer left content -->
            </div><!-- .row -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
