<?php /* Template Name: Contact Page */ ?>
<!DOCTYPE html>
<html>
    <body class="full-body-tan">
        <?php get_header(); ?>

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
            <div class="w-section inner-hero contact">
                <div class="container">
                    <h1 class="hero-header">Contact the Wish Dish Team</h1>
                    <div class="dark-overlay"></div>
                </div>
            </div>
            <div id="posts" class="w-section main-section">
                <div class="w-container">
                    <div class="form-div">
                        <h3>Chat with us!</h3>
                        <div class="w-form">
                            <form id="email-form" name="email-form" data-name="Email Form" class="contact-form">
                                <label for="name" class="field-label">Name:</label>
                                <input id="name" type="text" placeholder="Enter your name" name="name" data-name="Name" required="required" class="w-input contact-field">
                                <label for="email" class="field-label">Email Address:</label>
                                <input id="email" type="email" placeholder="Enter your email address" name="email" data-name="Email" required="required" class="w-input contact-field">
                                <label for="Message" class="field-label">Message:</label>
                                <textarea id="Message" placeholder="What's on your mind?" name="Message" data-name="Message" required="required" class="w-input contact-field message"></textarea>
                                <input type="submit" value="Submit" data-wait="Sending..." wait="Sending..." class="w-button button sleek-button mobile-contact">
                            </form>
                            <div class="w-form-done success-message">
                                <p class="success-text">Thank you! Your submission has been received!</p>
                            </div>
                            <div class="w-form-fail">
                                <p>Oops! Something went wrong while submitting the form</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php get_footer(); ?>


    </body>
</html>
