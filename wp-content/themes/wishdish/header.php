<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <head>

        <meta charset="utf-8">
        <title>Wish Dish | Share Your Story</title>
        
        <meta property="og:title" content="Wish Dish | Share Your Story">
        <meta property="og:description" content="Wish Dish is an authentic outlet where your story can make a meaningful impact in the lives of others. Join the tribe.">
        <meta property="og:image" content="http://i.imgur.com/aelHisF.jpg">
        <meta name="twitter:card" content="summary">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo("template_directory"); ?>/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo("template_directory"); ?>/css/webflow.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo("template_directory"); ?>/css/wishdish.css">
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
        <script>
            WebFont.load({
                google: {
                    families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic", "Oswald:300,400,700", "Montserrat:400,700", "Varela Round:400", "Lora:regular,italic,700", "Oxygen:300,regular,700"]
                }
            });
        </script>
        <script type="text/javascript" src="<?php echo get_bloginfo("template_directory"); ?>/js/modernizr.js"></script>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_bloginfo("template_directory"); ?>/images/fav2.jpg">
        <link rel="apple-touch-icon" href="<?php echo get_bloginfo("template_directory"); ?>/images/fav1.jpg">





    </head>

    <body <?php body_class(); ?>>

        <header>
            <div class="w-section header-section">
                <div id="top" data-collapse="small" data-animation="default" data-duration="300" data-easing2="ease-out-cubic" data-easing="ease-in-quad" class="w-nav navbar">
                    <div class="white-pane sign-up-pane">
                        <div class="sign-in-pane">
                            <div data-ix="prompt-pane-close" class="x close">X</div>
                            <?php do_action('oa_social_login'); ?>
                            <a href="#" class="w-button sign-in-button twitter">Sign in with Twitter</a>
                            <div class="pane-header">Sign in or create an account</div>
                            <a href="#" class="w-button sign-in-button facebook">Sign in with Facebook</a>
                            <a href="#" data-ix="email-sign-in-appear" class="w-button sign-in-button email-button">Sign in with Email</a>
                            <div class="disclaimer">We’ll never post to Twitter or Facebook without your permission. We take your privacy seriously.</div>
                            <a href="join.html" class="create-account-link">...or Sign up with Email</a>
                        </div>
                        <div class="email-sign-in-pane">
                            <div data-ix="email-sign-in-disappear" class="x emailx">X</div>
                            <div class="pane-header">Sign in with Email</div>
                            <div class="w-form w-clearfix">
                                <form id="email-form" name="email-form" data-name="Email Form" class="w-clearfix email-sign-in-form">
                                    <label for="Email" class="email-sign-in-text">Email Address:</label>
                                    <input id="Email" type="text" placeholder="Enter your Email" name="Email" data-name="Email" autofocus="autofocus" required="required" class="w-input email-sign-in-box">
                                    <label for="Password" class="email-sign-in-text">Password:</label>
                                    <input id="Password" type="password" placeholder="Enter your Password" name="Password" data-name="Password" required="required" class="w-input email-sign-in-box password">
                                    <input type="submit" value="Sign in" data-wait="Please wait..." class="w-button sleek-button sign-in">
                                </form>
                                <div class="w-form-done email-success"></div>
                                <div class="w-form-fail email-sign-in-error">
                                    <p class="email-error-text">&nbsp; :( Wrong information. Please try again?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nav-div">
                        <a href="/" class="w-nav-brand logo"></a>
                        <a data-ix="tags-menu" class="w-hidden-small w-hidden-tiny navigation-link about">Explore</a>
                        <a href="http://wishdish.webflow.io/blog/about" class="w-hidden-small w-hidden-tiny navigation-link about">About Us</a>
                        <div class="w-nav-button mobile-menu">
                            <div class="w-icon-nav-menu"></div>
                        </div>
                        <a href="/edit-my-profile/" class="w-hidden-medium w-hidden-small w-hidden-tiny w-button sleek-button account loggedin">&nbsp;</a>
                        <a data-ix="sign-in-appear" class="w-hidden-main w-hidden-small w-hidden-tiny w-button sleek-button align-sleek sign-up-button loggedout">Sign In</a>
                        <a data-ix="sign-in-appear" class="w-hidden-medium w-hidden-small w-hidden-tiny w-button sleek-button align-sleek sign-up-button loggedout">Sign In / Sign Up</a>
                        <a href="/share" class="w-hidden-small w-hidden-tiny w-button sleek-button align-sleek">Share a story</a>
                        <a href="#" data-ix="search-click" class="w-hidden-small w-hidden-tiny w-button sleek-button search_icon">&nbsp;</a>
                        <div class="w-form w-hidden-small w-hidden-tiny w-clearfix">
                            <form id="cse" action="/" name="wf-form-cse" data-name="cse" data-ix="hide-search" class="w-hidden-small w-hidden-tiny searchbox_demo">
                                <input id="Search" type="text" placeholder="Search..." name="s" data-name="Search" required="required" autofocus="autofocus" class="w-input searchbar">
                                <input type="submit" value="Go" class="w-button submit-search">
                            </form>
                            <div class="w-form-done search-success-hide">
                                <p class="search-success-message-hide">Thank you! Your submission has been received!</p>
                            </div>
                            <div id="wf-form-Search-2" name="wf-form-Search" data-name="Search" class="w-form-fail search-success-hide">
                                <p class="search-success-message-hide">Oops! Something went wrong while submitting the form</p>
                            </div>
                        </div>
                        <a href="#" class="w-hidden-main w-hidden-medium w-hidden-small w-hidden-tiny w-button write-small">Write</a>
                    </div>
                    <nav role="navigation" class="w-nav-menu nav">
                        <a href="/" class="w-nav-link nav-link">Home</a>
                        <a href="/categories" class="w-nav-link nav-link">Explore</a>
                        <a href="/share" class="w-nav-link nav-link">Write</a>
                        <a href="/about" class="w-nav-link nav-link">About Us</a>
                        <a href="join.html" class="w-nav-link nav-link">Sign Up</a>
                    </nav>
                </div>
            </div
        </header><!-- .site-header -->


        <div data-ix="tags-menu-origin" class="w-hidden-small w-hidden-tiny tags-drop">
            <div class="drop-div">
                <h1 class="drop-header">Explore Tags</h1>
                <a href="tags.html" class="see-all-tags">See all Tags</a>
                <div class="w-clearfix facebook-div">
                    <img width="60" src="/wp-content/themes/wishdish/images/567ef0471a7aef7170724cb6_WD.jpg" class="wish-dish-icon">
                    <div class="w-embed facebook-like">
                        <div class="fb-like" data-href="https://www.facebook.com/thewishdish" data-width="500" data-layout="standard" data-action="like" data-show-faces="true" data-share="false"></div>
                    </div>
                </div>
            </div>
            <div class="w-dyn-list communities-list">
                <div class="w-dyn-items w-row w-clearfix">
                    <?php foreach(get_categories() as $cat) { ?>
                      <div class="w-dyn-item w-col w-col-3 tags-link">
                          <a href="category/<?=$cat->slug?>" class="tags-link"><?=$cat->name?></a>
                      </div>
                    <?php } ?>
                </div>
            </div>
        </div>
