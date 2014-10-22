<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package Cryout Creations
 * @subpackage parabola
 * @since parabola 0.5
 */
?>	<div style="clear:both;"></div>
	</div> <!-- #forbottom -->
	</div><!-- #main -->


	<footer id="footer" role="contentinfo">
		<div id="colophon">
		
			<?php get_sidebar( 'footer' );?>
			
		</div><!-- #colophon -->

		<div id="footer2">
		
			<?php cryout_footer_hook(); ?>
			
		</div><!-- #footer2 -->

	</footer><!-- #footer -->

</div><!-- #wrapper -->

<?php	wp_footer(); ?>

</body>
</html>
<!-- JiaThis Button BEGIN -->
<?php if(!is_mobile()){?>
<script type="text/javascript" src="http://v3.jiathis.com/code/jiathis_r.js?uid=1406646562457216&move=0&amp;btn=r2.gif" charset="utf-8"></script>
<?php }?>
<!-- JiaThis Button END -->