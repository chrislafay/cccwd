<!DOCTYPE html>
<html>
    <body class="full-body-tan">
        <?php get_header(); ?>
        <div class="w-hidden-small w-hidden-tiny white-pane promptpane">
            <div class="prompt">
                <div data-ix="prompt-pane-close" class="x promptclose">X</div>
                <div class="pane-header">Wish Dish Story Prompts</div>
                <div class="prompt-subtext">Your story will have an impact on others.
                    <br>You have no limits, no boundaries.
                    <br>It’s your story, so make it you.</div>
                <div class="prompt-subtext ideas"><em data-new-link="true">Write about...</em>
                    <br>
                    <br><strong data-new-link="true">Something Serious</strong>
                    <br>...someone who is important to you, and why.
                    <br>...your single biggest accomplishment.
                    <br>...a lesson you learned the hard way.
                    <br>...something you feel strongly about.
                    <br>...a struggle or failure you overcame.
                    <br>...someone who was awful to you.
                    <br>...someone who died too soon.
                    <br>...your family and culture.
                    <br>...a challenge you faced.
                    <br>...your worldview.
                    <br>
                    <br><strong data-new-link="true">Something News-worthy</strong>
                    <br>...your organization's last major event.
                    <br>...your view on a current event.
                    <br>...something crazy you saw.
                    <br>
                    <br data-new-link="true"><strong data-new-link="true">Something Creative</strong>
                    <br>...the story behind something you created.
                    <br>...a poem and what it means to you.
                    <br>...a video you saw or made.
                    <br>...a piece of art you love.
                    <br>...a fictional tale.
                    <br>
                    <br><strong data-new-link="true">Something Fun or Funny</strong>
                    <br>...that story you have been itching to tell.
                    <br>...something everyone needs to do.
                    <br>...a long distance trip you took.
                    <br>...an organization you love.
                    <br>...your last relationship.
                    <br>...a sport you play.
                    <br>
                    <br>These are just a few of <em data-new-link="true">many</em> ideas. If
                    <br> these prompts don’t fit your liking, feel free to explore the site for inspiration.</div>
            </div>
        </div>
        <div class="w-section main-section">
            <div class="w-container">
                <div class="w-form w-hidden-small w-hidden-tiny story-form">

                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                      <?php if(isset($_GET['success'])) { ?>
                        <div class="w-form-done success-story-div">
                            <p class="success-story">Submitted!</p>
                            <img src="<?php echo get_bloginfo("template_directory"); ?>/images/eca328ad48f0de9e3a1f95f53995fd4c.png">
                            <p class="success-story sub"><strong data-new-link="true">We will send you an email</strong> when we publish your story.
                                <br>Thanks for sharing! We look forward to what you write next!</p>
                        </div>
                      <?php } else { ?>
                        <?php the_content(); ?>
                        <div class="agree-to-terms">By submitting a story, you agree to our <a class="terms-link" target="_blank" href="http://wishdish.webflow.io/legal/terms">Terms</a> and <a class="privacy-link" target="_blank" href="http://wishdish.webflow.io/legal/privacy">Privacy Policy.</a></div>
                      <?php } ?>
                    <?php endwhile; else : ?>
                      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; wp_reset_postdata(); ?>
                </div>
            </div>
            <div class="w-hidden-main w-hidden-medium mobile-write">
                <h1 class="mobile-write-header">Write for Wish Dish</h1>
                <p class="mobile-write-body">To write a story for Wish Dish, simply visit <strong data-new-link="true">thewishdish.com</strong> from your computer and sign in. We are thrilled that you are interested in sharing your story and look forward to reading it. Click the logo to return Home.
                    <br>
                    <br>Best,
                    <br>Wish Dish</p>
            </div>
        </div>
        <?php get_footer(); ?>

    </body>
</html>
