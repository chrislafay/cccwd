<!DOCTYPE html>
<html>
    <body class="full-body-tan">
        <?php get_header(); ?>
        <?php
          $meta_prefix = meta_prefix();
          $author = get_user_by( 'slug', get_query_var( 'author_name' ) );
          $meta_fields = get_author_custom_meta($author->ID);
          //pd($meta_fields);
        ?>
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
            <div class="inner-hero"></div>
            <div class="w-section w-hidden-small w-hidden-tiny edit-profile loggedin">
                <div class="w-clearfix profile-button-container">
                    <a href="profile.html" class="w-button sleek-button edit">Edit Profile</a>
                    <a href="#" class="w-button sleek-button log-out">Log Out</a>
                </div>
            </div>
            <div class="w-section main-section">
                <div class="w-container author-container">
                    <img class="author-picture">
                    <h1 class="author-name-main"><?=$author->display_name?></h1>
                    <div class="social-wrapper">
                      <?php
                       if( strlen($meta_fields[$meta_prefix.'instagram']) > 1 ) { ?>
                        <a href="<?=$meta_fields[$meta_prefix.'instagram']?>" target="_blank" class="w-inline-block author-links">
                            <img alt="instagram" src="/wp-content/themes/wishdish/images/insta-dark.svg" class="social-icon">
                        </a>
                        <?php } ?>

                        <?php if( strlen($meta_fields[$meta_prefix.'facebook']) > 1 ) { ?>
                        <a href="<?=$meta_fields[$meta_prefix.'facebook']?>" target="_blank" class="w-inline-block author-links">
                            <img alt="facebook" src="/wp-content/themes/wishdish/images/fb-dark.svg" class="social-icon">
                        </a>
                        <?php } ?>

                        <?php if( strlen($meta_fields[$meta_prefix.'twitter']) > 1 ) { ?>
                        <a href="<?=$meta_fields[$meta_prefix.'twitter']?>" target="_blank" class="w-inline-block author-links">
                            <img alt="twitter" src="/wp-content/themes/wishdish/images/twitter-dark.svg" class="social-icon">
                        </a>
                        <?php } ?>

                        <?php if( strlen($meta_fields[$meta_prefix.'linkedin']) > 1 ) { ?>
                        <a href="<?=$meta_fields[$meta_prefix.'linkedin']?>" target="_blank" class="w-inline-block author-links">
                            <img alt="linkedin" src="/wp-content/themes/wishdish/images/linkedin-3-xxl.png" class="social-icon">
                        </a>
                        <?php } ?>

                    </div>
                    <div class="interests">
                        <?php if( strlen($meta_fields[$meta_prefix.'hashtag_1'])   > 1 ) { ?>
                        <div class="w-clearfix interests-smaller">
                            <div class="w-clearfix tag-div">
                                <div class="hashtag">#<?=$meta_fields[$meta_prefix.'hashtag_1']?></div>
                            </div>
                            <a class="author-interests"></a>
                        </div>
                        <?php } ?>

                        <?php if( strlen($meta_fields[$meta_prefix.'hashtag_2']) > 1 ) { ?>
                        <div class="w-clearfix interests-smaller _1">
                            <div class="w-clearfix tag-div">
                                <div class="hashtag">#<?=$meta_fields[$meta_prefix.'hashtag_2']?></div>
                            </div>
                            <a class="author-interests"></a>
                        </div>
                        <?php } ?>

                        <?php if( strlen($meta_fields[$meta_prefix.'hashtag_3']) > 1 ) { ?>
                        <div class="w-clearfix interests-smaller _1">
                            <div class="w-clearfix tag-div">
                                <div class="hashtag">#<?=$meta_fields[$meta_prefix.'hashtag_3']?></div>
                            </div>
                            <a class="author-interests"></a>
                        </div>
                        <?php } ?>

                    </div>
                    <div class="w-richtext authorbio"></div>
                    <div class="w-hidden-small w-hidden-tiny email-newsletter-2 profile loggedin">
                        <div class="w-form email-newsletter-form-2">
                            <form id="email-form" name="email-form" data-name="Email Form" class="form-2 resume">
                                <label for="email-3" class="newsletter-header-2">Want <strong data-new-link="true">Wish Dish</strong> on your resume? Let's chat!</label>
                                <input type="submit" value="Yes, I want Wish Dish on my resume!" data-wait=". . ." wait=". . ." class="w-button sleek-button newsletter-2">
                            </form>
                            <div class="w-form-done submission-bg">
                                <p class="submission">Good to hear! We will email you to chat.</p>
                            </div>
                            <div class="w-form-fail error-bg">Oops... that didn't work as planned. Try again?</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="w-container">
                        <div class="w-clearfix section-heading">
                            <div class="med-divider divide-test"></div>
                            <h2 class="section-title">STORIES FROM THIS WRITER</h2>
                            <div class="med-divider"></div>
                        </div>
                        <div class="w-dyn-list _CONTEXT">
                             <div class="w-dyn-items w-row w-clearfix">
                              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                <?php $full_name = get_author_fullname($post->post_author); ?>
                                <?php $cat_meta = get_category_meta($post->ID); ?>
                                <div class="w-dyn-item w-col w-col-6 featuredthumbnail">
                                    <a href="<?php the_permalink(); ?>" data-ix="featured-wrapper" class="w-inline-block featured-wrapper">
                                        <div>
                                            <?php if(is_array($cat_meta)) { ?>
                                            <div class="tag-name-large" style="background-color:<?=$cat_meta['cat_color']?>"><?=get_cat_name($cat_meta['cat_id'])?></div>
                                            <?php } ?>
                                            <div class="featured-image" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>);"></div>
                                        </div>
                                        <div class="featured-text">
                                            <div class="featured-title"><?php the_title(); ?></div>
                                        </div>
                                    </a>
                                </div>
                              <?php endwhile; else : ?>
                                <div class="w-dyn-empty empty-state">
                                    <p class="empty-state-text">Nothing to see here (<em data-new-link="true">yet!</em>)</p>
                                </div>
                              <?php endif; ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="main-section gray bottom">
                <div class="w-container">
                    <div class="w-clearfix section-heading">
                        <div class="med-divider divide-test"></div>
                        <h2 class="section-title">SIMILAR WRITERS</h2>
                        <div class="med-divider"></div>
                    </div>
                </div>
                <div class="w-container">
                    <div class="w-dyn-list" id="DYN_CONTEXT_CONTEXT.primary-community">
                         <div class="w-dyn-items w-row w-clearfix">
                            <div class="w-dyn-item w-col w-col-2 blog-thumbnail">
                                <a data-ix="blog-thumbnail" class="w-inline-block thumbnail-wrapper">
                                    <div class="image-wrapper">
                                        <div class="thumbnail-image authors"></div>
                                    </div>
                                    <div class="thumb-details">
                                        <div class="author-title similar"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="w-dyn-empty empty-state">
                            <p class="empty-state-text">No similar writers (<em data-new-link="true">yet!</em>)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php get_footer(); ?>

    </body>
</html>
