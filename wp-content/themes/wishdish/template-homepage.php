<?php /* Template Name: The Homepage */ ?>
<!DOCTYPE html>
<html>
    <body class="full-body-tan">
        <?php get_header(); ?>
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
                           
                            <?php while (have_posts()) : the_post(); ?>
                            <?php query_posts('cat=2'); ?>
                            <div class="w-dyn-item w-col w-col-6 featuredthumbnail" >

                                <a data-ix="featured-wrapper" class="w-inline-block featured-wrapper">
                                    <div>
                                        <div class="tag-name-large"><?php single_cat_title(); ?></div>
                                        <div class="featured-image" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>);" ></div>
                                    </div>
                                    <div class="w-clearfix author-featured">
                                        <img class="author-img featured">
                                    </div>
                                    <div class="featured-text">
                                        <div class="featured-title entry-title"><?php single_post_title(); ?> </div>
                                    </div>

                                </a>
                            </div>
                            <div class="w-dyn-item w-col w-col-6 featuredthumbnail">
                                <a data-ix="featured-wrapper" class="w-inline-block featured-wrapper">
                                    <div>
                                        <div class="tag-name-large"><?php single_cat_title(); ?></div>
                                        <div class="featured-image" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>);"></div>
                                    </div>
                                    <div class="w-clearfix author-featured">
                                        <img class="author-img featured">
                                    </div>
                                    <div class="featured-text">
                                        <div class="featured-title entry-title"><?php single_post_title(); ?> </div>
                                    </div>

                                </a>
                                <?php endwhile; ?>
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

                    </div>
                </div>
            </div>
            <?php get_footer(); ?>

    </body>
</html>
