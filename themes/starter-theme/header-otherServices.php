<?php
/**
 * The header template
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Starter_Theme
 */
?>
 
<!DOCTYPE html>
 
<!--[if lt IE 9]>
<html id="ie" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
 
<head>
    <meta charset="<?php bloginfo( "charset" ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?php wp_title( "|", true, "right" ); ?></title>
    
    <!-- favicon & links -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
    <link rel="pingback" href="<?php bloginfo( "pingback_url" ); ?>" />
 
    <!-- stylesheet -->
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( "stylesheet_url" ); ?>" />
    
    <!-- Font Awesome -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- scripts -->
    <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5shiv.min.js" type="text/javascript"></script>
    <![endif]-->

   <?php // Google Fonts ?>
   <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900|Rokkitt:400,700' rel='stylesheet' type='text/css'>

 
    <?php // Lets other plugins and files tie into our theme's <head>:
    wp_head(); ?>
</head>
 
<body <?php body_class(); ?>>



<header id="otherServicesHeader" role="banner" style="background-image: url(<?php echo the_field('header_image') ?>);">

<nav id="access notHome" role="navigation">
    <?php wp_nav_menu( array( "theme_location" => "primary", 'container' => '' ) ); ?>
</nav><!-- #access -->  

    <a href="#main" class="visuallyhidden focusable" id="skiptomain"><?php _e('Skip to content', 'starter-theme'); ?></a>
    
        <h1 class="meritLogo">
            <a href="<?php echo esc_url( home_url( "/" ) ); ?>" target="_blank">
            <img src="/wp-content/uploads/2015/07/logoWhite.svg" alt="">
            </a>
        </h1>


    <div class="tourHeaderText contentContainer">
        
        <h2 class="rokkit" id="rokkitt"> <?php the_field('page_title') ?> </h2>
        <h3> <?php the_field('header_h2') ?> </h3>

        <div class="dividerLine"></div>

        </div>

    </div>




    </header><!-- #site-header .contentContainer -->

 