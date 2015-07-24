<?php
/*
Template Name: About-Us Template
*/
?>

<?php get_header('about'); ?>

	<div class="aboutSection2" style="background-image:url(' <?php the_field('section2_image') ?> ')">
		
		<div class="greyBar">
			<p> <span><?php the_field('grey_bar_1') ?> </span> <?php the_field('grey_bar_2') ?> </p>
			<img src="<?php the_field('triangle') ?>  " alt="">
		</div>
		

		<div class="contentContainer">

		    <div id="primary" role="main">





			</div>
		</div> <!-- end .aboutSection2 -->    
		</div> <!-- end #primary -->
	</div>

	<div class="aboutSection3">  
	  <div class="contentContainer">
	      <div id="primary" role="main">

	      <img src="<?php the_field('section3_image') ?>" alt="">
	      <h2> <?php the_field('section3_title') ?> </h2>
	      <div class="dividerLineBlue"></div>

	      <p> <?php the_field('section3_p') ?> </p>

	      	
	      </div>	
	  </div>

	</div>      

	<?php get_footer(); ?>
    
 

