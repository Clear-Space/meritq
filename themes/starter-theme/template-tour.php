<?php
/*
Template Name: Tour Page
*/
?>

<?php get_header('tour'); ?>
	
	<section class="tourSection2 clearfix">
		
		<div class="contentContainer clearfix">
			

			<div class="section2TextBlock clearfix">
				<h2> <?php the_field('section2_header') ?> </h2>
				<p><?php the_field('section2_body') ?></p>
				<img src=" <?php the_field('section2_image') ?> " alt="">
			</div>


		</div> <!-- end .contentContainer -->	



		
		<div class="principles clearfix">
		<div class="middleLine"></div>
			<div class="contentContainer clearfix">
			<h2 class="tourTopNumber"><span>-</span>8<span>-</span>	</h2>
			<div class="tourTop">
				<h2><?php the_field('section3_header') ?></h2>
			</div>

				<div class="tourBlock clearfix">
					<div class="number clearfix" style="background-image:url('<?php the_field('1_image') ?>')">
					</div>



					<h2> <?php the_field('1_header') ?> </h2>
					<p> <?php the_field('1_body') ?> </p>
				</div>	

				<div class="tourBlockRight clearfix">
					<div class="number clearfix" style="background-image:url('<?php the_field('2_image') ?>')">
					</div>

					<h2> <?php the_field('2_header') ?> </h2>
					<p> <?php the_field('2_body') ?> </p>
				</div>

				<div class="tourBlock clearfix">
					<div class="number clearfix" style="background-image:url('<?php the_field('3_image') ?>')">
					</div>

					<h2> <?php the_field('3_header') ?> </h2>
					<p> <?php the_field('3_body') ?> </p>
				</div>	

				<div class="tourBlockRight clearfix">
					<div class="number clearfix" style="background-image:url('<?php the_field('4_image') ?>')">
					</div>

					<h2> <?php the_field('4_header') ?> </h2>
					<p> <?php the_field('4_body') ?> </p>
				</div>

				<div class="tourBlock clearfix">
					<div class="number clearfix" style="background-image:url('<?php the_field('5_image') ?>')">
					</div>

					<h2> <?php the_field('5_header') ?> </h2>
					<p> <?php the_field('5_body') ?> </p>
				</div>	

				<div class="tourBlockRight clearfix">
					<div class="number clearfix" style="background-image:url('<?php the_field('6_image') ?>')">
					</div>

					<h2> <?php the_field('6_header') ?> </h2>
					<p> <?php the_field('6_body') ?> </p>
				</div>

				<div class="tourBlock clearfix">
					<div class="number clearfix" style="background-image:url('<?php the_field('7_image') ?>')">
					</div>

					<h2> <?php the_field('7_header') ?> </h2>
					<p> <?php the_field('7_body') ?> </p>
				</div>	

				<div class="tourBlockRight clearfix">
					<div class="number clearfix" style="background-image:url('<?php the_field('8_image') ?>')">
					</div>

					<h2> <?php the_field('8_header') ?> </h2>
					<p> <?php the_field('8_body') ?> </p>
				</div>



			</div> <!-- end .contentContainer -->	
				
			<footer role="contentinfo" class="">  
					
				<div id="copyright" class="contentContainer">

				
						&copy; <?php echo date("Y"); ?> <?php echo bloginfo( "name" ); ?>
					this is the footer this is the footer this is the footer

						<?php the_field('contact_details') ?>

				</div><!-- / #copyright .contentContainer -->
			<?php wp_footer(); ?> 
			</footer><!-- #colophon -->

				</section> <!-- end .tourSection2 -->

			</div> <!-- end .contentContainer -->
		</div> <!-- end .principles -->










</body>
</html>


	




