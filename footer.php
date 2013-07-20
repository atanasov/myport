<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package My port
 */
?>

	</div><!-- #main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'my_port_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'my_port' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'my_port' ), 'WordPress' ); ?></a>
			<span class="sep">  </span><br>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'my_port' ), 'My port', '<a href="http://www.twitter.com/nasko7" rel="designer">Atanas Atanasov</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>