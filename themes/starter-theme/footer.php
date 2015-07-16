<?php
/**
 * The footer template
 *
 * Contains the closing of <div id="main"> and all content after.
 *
 * @package Starter_Theme
 */
?>


 
<footer role="contentinfo" class="contentWrapper">
		
	<div id="copyright" class="contentContainer">

	
			&copy; <?php echo date("Y"); ?> <?php echo bloginfo( "name" ); ?>
			This is inside the footer!

			<?php the_field('contact_details') ?>

	</div><!-- / #copyright .contentContainer -->

</footer><!-- #colophon -->

<?php wp_footer(); ?> 
</body>
</html>