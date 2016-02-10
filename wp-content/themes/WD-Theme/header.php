<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title>Wish Dish | Share Your Story</title>
        <meta name="description" content="Wish Dish is an authentic outlet where quality stories make a meaningful impact on the lives of others. Join the tribe.">
        <meta property="og:title" content="Wish Dish | Share Your Story">
        <meta property="og:description" content="Wish Dish is an authentic outlet where your story can make a meaningful impact in the lives of others. Join the tribe.">
        <meta property="og:image" content="http://i.imgur.com/aelHisF.jpg">
        <meta name="twitter:card" content="summary">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/webflow.css">
        <link rel="stylesheet" type="text/css" href="css/wishdish.css">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
        <script>
            WebFont.load({
                google: {
                    families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic", "Oswald:300,400,700", "Montserrat:400,700", "Varela Round:400", "Lora:regular,italic,700", "Oxygen:300,regular,700"]
                }
            });
        </script>
        <script type="text/javascript" src="js/modernizr.js"></script>
        <link rel="shortcut icon" type="image/x-icon" href="images/fav2.jpg">
        <link rel="apple-touch-icon" href="images/fav1.jpg">
        <style>
            .category {
                position: relative;
                top: 50%;
                transform: translateY(-50%);
            }
        </style>
        <!--[if lt IE 9]>
        <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/html5.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="hfeed site">
            <a class="skip-link screen-reader-text" href="#content"><?php _e('Skip to content', 'twentyfifteen'); ?></a>

            <div id="sidebar" class="sidebar">
                <header id="masthead" class="site-header" role="banner">
                    <div class="site-branding">
                        <?php if (is_front_page() && is_home()) : ?>
                            <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                        <?php else : ?>
                            <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
                        <?php
                        endif;

                        $description = get_bloginfo('description', 'display');
                        if ($description || is_customize_preview()) :
                            ?>
                            <p class="site-description"><?php echo $description; ?></p>
                        <?php endif;
                        ?>
                        <button class="secondary-toggle"><?php _e('Menu and widgets', 'twentyfifteen'); ?></button>
                    </div><!-- .site-branding -->
                </header><!-- .site-header -->

                <?php get_sidebar(); ?>
            </div><!-- .sidebar -->

            <div id="content" class="site-content">
