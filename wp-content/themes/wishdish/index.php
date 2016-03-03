<?php /* Template Name: Blog Page */ ?>
<!DOCTYPE html>
<html>
    <custom-code-wrapper>
        <style>
            .category {
                position: relative;
                top: 50%;
                transform: translateY(-50%);
            }
        </style>
    </custom-code-wrapper>
    <custom-code-wrapper>
        <style>
            .mini {
                position: relative;
                top: 50%;
                transform: translateY(-50%);
            }
        </style>
    </custom-code-wrapper>
    <body class="full-body-tan">
        <?php get_header(); ?>
        <div data-ix="newsletter-initially-hidden" class="w-hidden-small w-hidden-tiny email-newsletter">
            <div class="w-form email-newsletter-form">
                <form id="wf-form-Newsletter-Form" name="wf-form-Newsletter-Form" data-name="Newsletter Form" class="w-clearfix">
                    <label for="email" class="newsletter-header">Be part of something bigger than yourself. Join the tribe:</label>
                    <input id="email" type="email" placeholder="Enter your email" name="email" data-name="Email" required="required" autofocus="autofocus" class="w-input newsletter-email">
                    <input type="submit" value="Go" data-wait="Please wait..." class="w-button sleek-button newsletter">
                </form>
                <div class="w-form-done">
                    <p>Thank you! Your submission has been received!</p>
                </div>
                <div class="w-form-fail">
                    <p>Oops! Something went wrong while submitting the form</p>
                </div>
            </div>
        </div>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php
          // Get author meta information
          $full_name = get_author_fullname($post->post_author);
          $cat_meta = get_category_meta($post->ID);
        ?>
        <div class="w-section w-hidden-small w-hidden-tiny hero-parallax-section-regular">
            <div class="hero-parallax-div-regular">
                <img class="w-hidden-small w-hidden-tiny image" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>">
            </div>
            <div data-ix="float" class="w-hidden-small w-hidden-tiny w-clearfix hover">
                <a href="#share" class="w-inline-block bottom-button">
                    <img width="19" src="/wp-content/themes/wishdish/images/share.png" class="icon share mini">
                </a>
                <a href="#author" class="w-inline-block bottom-button">
                    <img width="25" src="/wp-content/themes/wishdish/images/comment.png" class="icon comment mini">
                </a>
                <a class="author-name-alt mini"><?=$full_name?></a>
                <a class="w-clearfix w-inline-block bottom-button author">
                    <img width="34" class="author-photo mini">
                </a>
                <div class="vertical-line mini"></div>
                <a href="#top" class="top mini">Back to Top</a>
            </div>
        </div>
        <div data-w-expand="category" class="w-section w-hidden-small w-hidden-tiny hero-blog"></div>
        <div data-w-expand="category" data-parallax="scroll" class="w-section w-hidden-main w-hidden-medium hero-blog parallax-window"></div>

        <!-- MAIN CONTENT -->
        <div class="w-section main-section">
            <div class="w-container">
                <div class="section-heading">
                    <h1 class="post"><?php the_title(); ?></h1>
                    <div class="details">
                        <div class="blog-date"><?=get_the_date("F j")?></div>
                        <div class="connect">by</div>
                        <a href="<?php echo get_author_posts_url($post->post_author); ?>" class="author-name-alt"><?=$full_name?></a>
                        <div class="connect _2">in</div>
                        <a href="<?=get_category_link($cat_meta['cat_id'])?>" class="blog-category" style="color:<?=$cat_meta['cat_color']?>"><?=get_cat_name($cat_meta['cat_id'])?></a>
                        <a class="blog-category blog-category-2"></a>
                        <div class="connect _3">with</div>
                        <div class="views">13,424</div>
                        <div class="connect _4">views.</div>
                    </div>
                </div>
                <div id="share" class="share-block top-share">
                    <div data-app="share_buttons" data-app-id="22837846" class="shareaholic-canvas">
                        <div class="w-embed w-script share-links">
                            <script type='text/javascript' src='//dsms0mj1bbhn4.cloudfront.net/assets/pub/shareaholic.js' data-shr-siteid='1713c3f2f8d10a4d05788ec84d71e406' data-cfasync='false' async='async'></script>
                        </div>
                    </div>
                </div>
                <div class="w-hidden-tiny full-divide"></div>
                <div data-ix="float-trigger" class="w-richtext blog-post">
                  <?php the_content(); ?>
                </div>
                <div id="share" class="share-block">
                    <div class="full-divide social bottom"></div>
                    <div class="share">Like it? Well... spread it!</div>
                    <div data-app="share_buttons" data-app-id="22753782" class="shareaholic-canvas">
                        <div class="w-embed w-script share-links">
                            <script type='text/javascript' src='//dsms0mj1bbhn4.cloudfront.net/assets/pub/shareaholic.js' data-shr-siteid='1713c3f2f8d10a4d05788ec84d71e406' data-cfasync='false' async='async'></script>
                        </div>
                    </div>
                </div>
                <div class="author-wrapper">
                    <div class="full-divide"></div>
                    <div id="author" class="w-clearfix author-tight-wrapper">
                        <a data-w-expand="authors" class="w-clearfix w-inline-block author-link">
                            <img width="116" data-w-expand="authors" class="author-photo">
                        </a>
                        <a data-w-expand="authors" class="author-name"></a>
                        <div data-w-expand="authors" class="w-richtext author-bio"></div>
                    </div>
                </div>
                <div class="comments">
                    <div class="comment-choke">
                        <div id="comments" data-numposts="10" data-href="<?php the_permalink(); ?>" data-width="100%" class="fb-comments"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- (end) MAIN CONTENT -->

      <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; wp_reset_postdata(); ?>


        <div class="w-hidden-main w-hidden-medium email-newsletter-2 loggedout">
            <div class="w-form email-newsletter-form-2">
                <form id="email-form" name="email-form" data-name="Email Form" class="w-clearfix form-2">
                    <label for="email-2" class="newsletter-header-2">Everyone loves a quality story. &nbsp;Join the tribe:</label>
                    <input id="email-2" type="email" placeholder="Enter your email" name="email-2" data-name="Email 2" required="required" class="w-input newsletter-email-2">
                    <input type="submit" value="Submit" data-wait=". . ." wait=". . ." class="w-button sleek-button newsletter-2 submit">
                </form>
                <div class="w-form-done submission-bg">
                    <p class="submission">Awesome. We will send you a quality story from time to time.</p>
                </div>
                <div class="w-form-fail error-bg">Oops... we didn't get your email. Try again?</div>
            </div>
        </div>
        <div class="main-section gray bottom">
            <div class="w-container">
                <div data-ix="newsletter-appear" class="section-heading">
                    <div class="med-divider divide-test"></div>
                    <h2 class="section-title">UP NEXT</h2>
                    <div class="med-divider"></div>
                </div>
                <div class="w-dyn-list"_id="DYN_CONTEXT"_CONTEXT.category"_random">
                     <div class="w-dyn-items w-row w-clearfix">
                       <?php
                         $args = array(
                             'cat'               => $cat_meta['cat_id'],
                             'posts_per_page'    => 8
                         );
                         $query = new WP_Query($args);
                         while ($query->have_posts()) : $query->the_post();
                           $cat_meta = get_category_meta($post->ID);
                           $full_name = get_author_fullname($post->post_author);
                       ?>
                        <div class="w-dyn-item w-col w-col-3 blog-thumbnail">
                            <a data-ix="blog-thumbnail" class="w-inline-block thumbnail-wrapper">
                                <div class="image-wrapper">
                                    <div class="thumbnail-image" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>);"></div>
                                    <?php if(is_array($cat_meta)) { ?>
                                    <div class="tag-name" style="background-color:<?=$cat_meta['cat_color']?>"><?=get_cat_name($cat_meta['cat_id'])?></div>
                                    <?php } ?>
                                </div>
                                <div class="thumbnail-text">
                                    <div class="blog-title"><?php the_title(); ?></div>
                                    <div class="preview-text"><?=get_the_excerpt()?></div>
                                </div>
                                <div class="w-clearfix thumb-details">
                                    <img class="author-img">
                                    <div class="author-title"><?=$full_name?></div>
                                    <div class="thumbnail-date"></div>
                                </div>
                            </a>
                        </div>
                        <?php endwhile; wp_reset_postdata(); ?>
                    </div>
                    <!--<div class="w-dyn-empty empty-state">
                        <p class="empty-state-text">Nothing to see here (<em data-new-link="true">yet!</em>)</p>
                    </div>-->
                </div>
            </div>
        </div>
        <?php get_footer(); ?>

    </body>
</html>
