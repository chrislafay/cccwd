<!DOCTYPE html>

<html>


    <body class="full-body-tan">
        <?php
    /**
     * Template Name: wd-front-page
     */
    get_header();
    ?>
        <div class="w-section header-section">
            <div id="top" data-collapse="small" data-animation="default" data-duration="300" data-easing2="ease-out-cubic" data-easing="ease-in-quad" class="w-nav navbar">
                <div class="white-pane sign-up-pane">
                    <div class="sign-in-pane">
                        <div data-ix="prompt-pane-close" class="x close">X</div>
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
                    <a href="index.html" class="w-nav-brand logo"></a>
                    <a data-ix="tags-menu" class="w-hidden-small w-hidden-tiny navigation-link about">Explore</a>
                    <a href="http://wishdish.webflow.io/blog/about" class="w-hidden-small w-hidden-tiny navigation-link about">About Us</a>
                    <div class="w-nav-button mobile-menu">
                        <div class="w-icon-nav-menu"></div>
                    </div>
                    <a href="http://wishdish.webflow.io/authors/christopher" class="w-hidden-medium w-hidden-small w-hidden-tiny w-button sleek-button account loggedin">&nbsp;</a>
                    <a data-ix="sign-in-appear" class="w-hidden-main w-hidden-small w-hidden-tiny w-button sleek-button align-sleek sign-up-button loggedout">Sign In</a>
                    <a data-ix="sign-in-appear" class="w-hidden-medium w-hidden-small w-hidden-tiny w-button sleek-button align-sleek sign-up-button loggedout">Sign In / Sign Up</a>
                    <a href="share.html" class="w-hidden-small w-hidden-tiny w-button sleek-button align-sleek">Share a story</a>
                    <a href="#" data-ix="search-click" class="w-hidden-small w-hidden-tiny w-button sleek-button search_icon">&nbsp;</a>
                    <div class="w-form w-hidden-small w-hidden-tiny w-clearfix">
                        <form id="cse" name="wf-form-cse" data-name="cse" data-ix="hide-search" class="w-hidden-small w-hidden-tiny searchbox_demo">
                            <input id="Search" type="text" placeholder="Search..." name="Search" data-name="Search" required="required" autofocus="autofocus" class="w-input searchbar">
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
                    <a href="index.html" class="w-nav-link nav-link">Home</a>
                    <a href="tags.html" class="w-nav-link nav-link">Explore</a>
                    <a href="share.html" class="w-nav-link nav-link">Write</a>
                    <a href="http://wishdish.webflow.io/blog/about" class="w-nav-link nav-link">About Us</a>
                    <a href="join.html" class="w-nav-link nav-link">Sign Up</a>
                </nav>
            </div>
        </div>
        <div data-ix="tags-menu-origin" class="w-hidden-small w-hidden-tiny tags-drop">
            <div class="drop-div">
                <h1 class="drop-header">Explore Tags</h1>
                <a href="tags.html" class="see-all-tags">See all Tags</a>
                <div class="w-clearfix facebook-div">
                    <img width="60" src="images/567ef0471a7aef7170724cb6_WD.jpg" class="wish-dish-icon">
                    <div class="w-embed facebook-like">
                        <div class="fb-like" data-href="https://www.facebook.com/thewishdish" data-width="500" data-layout="standard" data-action="like" data-show-faces="true" data-share="false"></div>
                    </div>
                </div>
            </div>
            <div class="w-dyn-list communities-list">
                <div class="w-dyn-items w-row w-clearfix">
                    <div class="w-dyn-item w-col w-col-3 tags-link">
                        <a class="tags-link"></a>
                    </div>
                </div>
                <div class="w-dyn-empty w-clearfix empty-state">
                    <p class="empty-state-text">No items found.</p>
                </div>
            </div>
        </div>
        <div>
            <div class="w-clearfix tagline-box">
                <a href="#" data-ix="close-tagline" class="w-inline-block close-tagline">
                    <div class="x taglinex">X</div>
                </a>
                <h1 class="tagline">Welcome to Wish Dish, where your words matter.</h1>
            </div>
            <div id="posts" class="w-section main-section bottom-padding">
                <div class="body">
                    <div class="w-clearfix section-heading">
                        <div class="med-divider divide-test"></div>
                        <h2 class="section-title">TRENDING STORIES</h2>
                        <div class="med-divider"></div>
                    </div>
                    <div class="w-dyn-list">
                        <div class="w-dyn-items w-row w-clearfix">
                            <div class="w-dyn-item w-col w-col-6 featuredthumbnail">
                                <a data-ix="featured-wrapper" class="w-inline-block featured-wrapper">
                                    <div>
                                        <div class="tag-name-large"></div>
                                        <div class="featured-image"></div>
                                    </div>
                                    <div class="w-clearfix author-featured">
                                        <img class="author-img featured">
                                    </div>
                                    <div class="featured-text">
                                        <div class="featured-title"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="w-dyn-empty">
                            <p>No items found.</p>
                        </div>
                    </div>
                </div>
                <div class="email-newsletter-2 loggedout">
                    <div class="w-form email-newsletter-form-2">
                        <form id="email-form" name="email-form" data-name="Email Form" class="w-clearfix form-2">
                            <label for="email" class="newsletter-header-2">Everyone loves a quality story. &nbsp;Join the tribe:</label>
                            <input id="email" type="email" placeholder="Enter your email" name="email" data-name="Email" required="required" class="w-input newsletter-email-2">
                            <input type="submit" value="Submit" data-wait=". . ." wait=". . ." class="w-button sleek-button newsletter-2 submit">
                        </form>
                        <div class="w-form-done submission-bg">
                            <p class="submission">Awesome. We will send you a quality story from time to time.</p>
                        </div>
                        <div class="w-form-fail error-bg">Oops... we didn't get your email. Try again?</div>
                    </div>
                </div>
                <div class="body">
                    <div class="w-clearfix section-heading">
                        <div class="med-divider divide-test"></div>
                        <h2 class="section-title">LATEST STORIES</h2>
                        <div class="med-divider"></div>
                    </div>
                    <div class="w-dyn-list">
                        <div class="w-dyn-items w-row w-clearfix">
                            <div divtest="1" data-ix="scroll-fade" class="w-dyn-item w-col w-col-3 blog-thumbnail">
                                <a data-ix="blog-thumbnail" class="w-inline-block thumbnail-wrapper">
                                    <div class="image-wrapper">
                                        <div class="thumbnail-image"></div>
                                        <div class="tag-name"></div>
                                    </div>
                                    <div class="thumbnail-text">
                                        <div class="break-word">
                                            <div class="blog-title"></div>
                                            <div class="w-embed">
                                                <style>
                                                    .break-word {
                                                        word-wrap: break-word;
                                                    }
                                                </style>
                                            </div>
                                            <div class="preview-text break-word"></div>
                                        </div>
                                    </div>
                                    <div class="w-clearfix thumb-details break-text">
                                        <img class="author-img">
                                        <div class="author-title"></div>
                                        <div class="thumbnail-date"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="w-dyn-empty">
                            <p>No items found.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-section main-section dark">
                <div class="bottom-bar">
                    <a href="#top" class="bottom-link">Top</a>
                    <a href="http://wishdish.webflow.io/blog/help" class="bottom-link">Help</a>
                    <a href="contact.html" class="bottom-link">Contact</a>
                    <a href="http://wishdish.webflow.io/categories/blog" class="bottom-link">Blog</a>
                    <a href="http://wishdish.webflow.io/legal/terms" class="bottom-link">Terms</a>
                    <a href="http://wishdish.webflow.io/legal/privacy" class="bottom-link">Privacy</a>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/webflow.js"></script>
        <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
        <div id="fb-root"></div>
        <script>
            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>







        <div class="clearall"></div>
        <?php get_footer(); ?>
    </body>
</html>