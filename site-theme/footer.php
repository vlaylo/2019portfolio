<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vincelaylo
 */

?>

	</div><!-- #content -->
	<?php
			if(is_active_sidebar('Pre-Footer')){
			dynamic_sidebar('Pre-Footer');
		}
	?>
	<footer>
		
		<?php
			if(is_active_sidebar('Footer')){
			dynamic_sidebar('Footer');
		}
	?>
	</footer>
	<!-- main-footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
