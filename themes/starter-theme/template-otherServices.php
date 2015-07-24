<?php
/*
Template Name: Other Services Template
*/
?>

<?php get_header('otherServices'); ?>

	<div class="otherSection2">
	

		<div class="contentContainer">

		    <div id="primary" role="main">

		    <img src=" <?php the_field('section2_image') ?> " alt="">

		    <h2><?php the_field('section2_title') ?></h2>

		    <div class="dividerLineBlue"></div>

		    <div class="section2_left">
		    	<h3><?php the_field('section2_header1') ?></h3>
				<p><?php the_field('section2_p1') ?></p>
		    </div>

		    <div class="section2_right">
		    	<h3><?php the_field('section2_header2') ?></h3>
		    	<p><?php the_field('section2_p2') ?></p>

		    </div>


			</div>
		</div> <!-- end .aboutSection2 -->    
		</div> <!-- end #primary -->
	</div> <!-- end .otherSection2 -->

	<div class="otherSection3">  
	  <div class="contentContainer">
	      <div id="primary" role="main">

	      <h3><?php the_field('section3_header') ?></h3>
	      <p><?php the_field('section3_p') ?></p>

	      <img src="<?php the_field('section3_image') ?>" alt="">
	      <h2> <?php the_field('section3_title') ?> </h2>
	      <div class="dividerLineBlue"></div>

	      <p> <?php the_field('section3_p') ?> </p>

	      	
	      </div>	
	  </div>
	</div>     

	<div class="otherSection4">  
	  <div class="contentContainer">
	      <div id="primary" role="main">

			<div class="section4_left">
		      <h3><?php the_field('section4_header1') ?></h3>
		      <p><?php the_field('section4_p1') ?></p>
	      	</div> <!-- end .section4_left -->

	      	<div class="section4_right">
		      <h3><?php the_field('section4_header2') ?></h3>
		      <p><?php the_field('section4_p2') ?></p>
	      	</div> <!-- end .section4_right -->
	      </div>	
	  </div>
	</div>


	<div class="otherSection5">  
	  <div class="contentContainer">
	      <div id="primary" role="main">

			<h3><?php the_field('section5_header') ?></h3>
			<p><?php the_field('section5_p') ?></p>

			<div class="requestaDemo">
				<?php the_field('section5_button') ?>
			</div>

	      </div>	
	  </div>
	</div>

	<div class="otherSection6">  
	  <div class="contentContainer">
	      <div id="primary" role="main">

	      <img src="<?php the_field('section6_image') ?>" alt="">

	      <h2><?php the_field('section6_header') ?></h2>
	      <h2 class="section6header3"><?php the_field('section6_header3') ?></h2>

			<div class="section6_left">
		      <h3><?php the_field('section6_header1') ?></h3>
		      <p><?php the_field('section6_p1') ?></p>
	      	</div> <!-- end .section6_left -->

	      	<div class="section6_right">
		      <h3><?php the_field('section6_header4') ?></h3>
		      <p><?php the_field('section6_p4') ?></p>
	      	</div> <!-- end .section6_right -->

	      </div>	
	  </div>
	</div>   


	<div class="otherSection7">  
	  <div class="contentContainer">
	      <div id="primary" role="main">


			<div class="section6_left">
		      <h3><?php the_field('section6_header1') ?></h3>
		      <p><?php the_field('section6_p1') ?></p>
	      	</div> <!-- end .section6_left -->

	      	<div class="section6_right">
		      <h3><?php the_field('section6_header4') ?></h3>
		      <p><?php the_field('section6_p4') ?></p>
	      	</div> <!-- end .section6_right -->


	      	<div class="section6_right">
		      <h3><?php the_field('section6_header4') ?></h3>
		      <p><?php the_field('section6_p4') ?></p>
	      	</div> <!-- end .section6_right -->

	      </div>	
	  </div>
	</div>   

	<?php get_footer(); ?>
    
 

