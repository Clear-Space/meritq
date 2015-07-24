<?php
/*
Template Name: Pricing Template
*/
?>

<?php get_header('pricing'); ?>

<div class="pricingSection2">
	<div class="contentContainer">
	    <div id="primary" role="main">

    	

		    <div class="pricingBlock">

		    	<h3 id="rokkitt"> <?php the_field('section2_title1') ?> </h3>

		    	<p><?php the_field('section2_p1') ?></p>

		    	<img src="<?php the_field('arrow') ?>" alt="">

		    </div>

		    <div class="pricingBlock">

		    	<h3 id="rokkitt"> <?php the_field('section2_title2') ?> </h3>

		    	<p><?php the_field('section2_p2') ?></p>

		    	<img src="<?php the_field('arrow') ?>" alt="">
		    </div>

		    <div class="pricingBlock">

		    	<h3 id="rokkitt"> <?php the_field('section2_title3') ?> </h3>

		    	<p><?php the_field('section2_p3') ?></p>

		    </div>
		</div> <!-- end .pricingSection2 -->    
	</div> <!-- end #primary -->
  </div>

<div class="pricingSection3">  
  <div class="contentContainer">
      <div id="primary" role="main">

      	

        <?php the_field('body') ?>
        
        <div class="requestaDemo">
        	<a href="#"><?php the_field('requestDemo') ?></a>

        <p><?php the_field('pricing_tag') ?></p> 
        </div>	

        </div>
    </div>
</div>        
    
 

<?php get_footer(); ?>