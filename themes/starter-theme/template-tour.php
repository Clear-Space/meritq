<?php
/*
Template Name: Tour Page
*/
?>

<?php get_header('tour'); ?>


    <div id="primary" role="main">

	    <section class="tourSection2">
	    	<div class="contentContainer">
	    	
			<img src=" <?php the_field('section2_image') ?> " alt="">

			<div class="section2TextBlock">
				<h3><?php the_field('section2_header') ?></h3>
				<p> <?php the_field('section2_body') ?> </p>
			</div>	
			</div>
	    </section>

	  
	    	

	    </section>
	    </div>

	
	
	        <section class="tourSection3">
	        	<div class="contentContainer">

	        	<h2>
	        		<span>
	        		-
	        		</span>
	        			8
	        		<span>
	        		-
	        		</span>
	        	</h2>


	        	<h3> <?php the_field('section3_header') ?> </h3>

	        	<div class="tourBlock">
	    	    		<div class="number numberOne" style="background-image:url('<?php the_field('1_image') ?>')"></div>
	    	    		
	    	    		<h2> <?php the_field('1_header') ?> </h2>
	    	    		<p> <?php the_field('1_body') ?> </p>
	    	    	</div>	
	    		
	        	

	        	<div class="tourBlockRight">


	        		<div class="number numberOne" style="background-image:url('<?php the_field('1_image') ?>')"></div>
	        		<h2> <?php the_field('1_header') ?> </h2>
	        		<p> <?php the_field('1_body') ?> </p>
	        	
	        	</div>

	        	</div> <!-- end .contentContainer -->
		

    </div>


<?php get_footer(); ?>

