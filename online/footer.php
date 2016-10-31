<?php
/**
 * The template for displaying the footer.
 *
 * Contains all content after the main content area and sidebar
 *
 * @package Poseidon
 */

?>
	
	</div><!-- #content -->
	
	<?php do_action( 'poseidon_before_footer' ); ?>

	<div id="footer" class="footer-wrap">
	
		<footer id="colophon" class="site-footer container clearfix" role="contentinfo">

			<div id="footer-text" class="site-info">
				<?php do_action( 'poseidon_footer_text' ); ?>
			</div><!-- .site-info -->
			
			<?php do_action( 'poseidon_footer_menu' ); ?>

		</footer><!-- #colophon -->
		
	</div>

</div><!-- #page -->

<?php wp_footer(); ?>

<script>
	var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
	document.write(unescape(
		"%3Cspan id='cnzz_stat_icon_1260618297'%3E%3C/span%3E%3Cscript src='" 
		+ cnzz_protocol + "w.cnzz.com/c.php%3Fid%3D1260618297' type='text/javascript'%3E%3C/script%3E"
	));
</script>
</body>
</html>
