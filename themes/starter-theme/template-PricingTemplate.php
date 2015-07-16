<?php
/*
Template Name: Pricing Template
*/
?>

<?php get_header('other'); ?>

<section class="howMerit contentContainer">
    <h2><?php the_field('testfield') ?></h2>
</section>

<div class="contentContainer">
    <div id="primary" role="main">

   <?php if ( have_posts() ) : // display the content _if_ there are posts ?>

        <?php // check if we're on an archive page
        if ( is_archive() ) :
            // if so, print the archive title before the loop begins
            get_template_part( 'inc/archive-header' );
        endif; ?>

        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part('content'); ?>

        <?php endwhile; ?>

        
        
    <?php else : // no content here! ?>

        <article id="post-0" class="hentry post no-results not-found">
            <header class="entry-header">
                <h1><?php _e( "Oops!", "starter-theme" ); ?></h1>
            </header><!-- .entry-header -->

            <p><?php _e( "We can&#039;t find content for this page!", "starter-theme" ); ?></p>
        </article><!-- #post-0 -->

    <?php endif; ?>
    </div>
    </div>

<?php get_footer(); ?>