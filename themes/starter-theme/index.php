<?php
/** 
*
* Main Template File  
*
* This file is used to display a page when nothing more specific matches a query. 
* Learn more: http://codex.wordpress.org/Template_Hierarchy 
*
* @package Starter_Theme 
*/

get_header('other'); ?>

<div class="contentContainer">
    <div id="primary" role="main">
   <?php if ( have_posts() ) : // display the content _if_ there are posts ?>

       

        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part('content'); ?>

        <?php endwhile; ?>

        
    <?php else : // no content here! ?>

        

    <?php endif; ?>

    </div><!-- / #primary -->
    </div>



    
</div><!-- / .contentContainer -->   
   

<?php get_footer(); ?>