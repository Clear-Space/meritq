<?php
/**
 * The Page template
 *
 * This is the template that displays all pages by default.
 *
 * @package Starter_Theme
 */

get_header('home'); ?>

    

    <section class="whyMerit contentContainer clearfix">
        <h2> <?php the_field('why_use') ?>   </h2>

        <div class="whyBlock clearfix">
            <div class="number numberOne" style="background-image:url('<?php the_field('number1flag') ?>')"></div>           
            <img src=" <?php the_field('reason_1_image') ?> " alt="">
            <h2> <?php the_field('reason_1_title') ?> </h2>
            <p> <?php the_field('reason_1_body') ?> </p>
        </div> <!-- end .whyBlock -->

        <div class="whyBlock clearfix">
            <div class="number numberTwo" style="background-image:url(' <?php the_field('number2flag') ?> ')"></div>
            <img src="<?php the_field('reason_2_image') ?>" alt="Reason 2">
            <h2> <?php the_field('reason_2_title') ?> </h2>
            <p> <?php the_field('reason_2_body') ?> </p>
        </div> <!-- end .whyBlock -->

        <div class="whyBlock clearfix">
            <div class="number numberThree" style="background-image:url(' <?php the_field('number3flag') ?> ')"></div>
            <img src="<?php the_field('reason_3_image') ?>" alt="Reason 3">
            <h2> <?php the_field('reason_3_title') ?> </h2>
            <p> <?php the_field('reason_3_body') ?> </p>
        </div> <!-- end .whyBlock -->

        <div class="whyBlock clearfix">
            <div class="number numberFour" style="background-image:url(' <?php the_field('number4flag') ?> ')"></div>
            <img src="<?php the_field('reason_4_image') ?>" alt="Reason 4">
            <h2> <?php the_field('reason_4_title') ?> </h2>
            <p> <?php the_field('reason_4_body') ?> </p>
        </div> <!-- end .whyBlock -->
    

    </section> <!-- end .whyMerit -->

    <section class="video contentContainer">
        ~~~~~A video will go here~~~~
    </section>

    <section class="howMerit contentContainer">
        <h2><?php the_field('how_title') ?></h2>

        <h3> <?php the_field('how_image_head_1') ?> </h3>
        <img src="<?php the_field('howImage1') ?>" alt="1. Workforce Profile. 2. Compensation Structure. 3. Performance Reviews 4. 360 Degree Feedback">
        <img src=" <?php the_field('arrow') ?> " alt="" class="arrow">

        <h3> <?php the_field('how_header_2') ?> </h3>
        <img src="<?php the_field('howImage2') ?>" alt="1. Workforce Decisions. 2. Messages 3. MeritBook. 4. Review Meeting">
        <img src=" <?php the_field('arrow') ?> " alt="" class="arrow">

        <h3> <?php the_field('how_header_3') ?> </h3>
        <img src="<?php the_field('howImage3') ?>" alt="1. Enact Compensation. 2. Follow up 3. Workforce Report.">
    </section>

    <section class="inputExplained clearfix">
        <div class="contentContainer">
            <h2><?php the_field('input_title') ?></h2>
            <p><?php the_field('input_body') ?> </p>
        </div>
    </section>

    <section class="outputExplained clearfix">
        <div class="contentContainer">
            <h2><?php the_field('output_title') ?></h2>
            <p><?php the_field('output_body') ?> </p>
        </div>
    </section>

    <section class="actionExplained clearfix">
        <div class="contentContainer">
            <h2><?php the_field('action_title') ?></h2>
            <p><?php the_field('action_body') ?> </p>
        </div>
    </section>

    <section class="testimonial" style="background-image: url(<?php echo the_field('testimonial_image') ?>); background-repeat:no-repeat; background-size:cover;">
        <div class="contentContainer testimonialType">
            <h2> <?php the_field('testimonial_type') ?> </h2>
            <p> <?php the_field('testimonial_author') ?> </p>
        </div>
    </section>

    <section class="freeDemo">
        <div class="contentContainer">
        free demo section
        </div>
    </section>
        

        

        

    
   

<?php get_footer(); ?>