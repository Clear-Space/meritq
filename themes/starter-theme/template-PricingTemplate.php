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

        <?php the_field('body') ?>
    </div>
    </div>

<?php get_footer(); ?>