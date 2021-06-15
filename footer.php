<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package burnt-shake
 */

?>

	</div><!-- #content -->

	<?php
	if ( is_customize_preview() ) {
		echo '<div id="burnt-shake-footer-control" style="margin-top:-30px;position:absolute;"></div>';
	}
	?>

	<footer id="colophon" class="site-footer container-fluid" role="contentinfo">

		<div class="site-info">
			<?php
				printf(
					'<a %s href="%s">%s</a>',
					is_customize_preview() ? 'id="burnt-shake-footer-copy-control"' : '',
					esc_url( __( 'https://github.com/Alecaddd/burnt-shake', 'burnt-shake' ) ),
					esc_html( BurntShake\Api\Customizer::text( 'burnt-shake_footer_copy_text' ) )
				);
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
