<?php /* Template Name: The Homepage */ ?>
<!DOCTYPE html>
<html>
    <body class="full-body-tan">
        <?php get_header(); ?>
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
                            <?php
                              // Get all Sticky Posts
                              $sticky = get_option( 'sticky_posts' );

                              //Sort Sticky Posts, newest at the top
                              rsort( $sticky );

                              // Get top 5 Sticky Posts
                              $sticky = array_slice( $sticky, 0, 2 );

                              $args = array(
                                  'ignore_sticky_posts' => 1,
                                  'post__in'        => $sticky,
                              );
                              $query = new WP_Query($args);
                              while ($query->have_posts()) : $query->the_post();
                              $cat_meta = get_category_meta($post->ID);
                            ?>
                            <div class="w-dyn-item w-col w-col-6 featuredthumbnail" >

                                <a href="<?php the_permalink(); ?>" data-ix="featured-wrapper" class="w-inline-block featured-wrapper">
                                    <div>
                                        <?php if(is_array($cat_meta)) { ?>
                                        <div class="tag-name-large" style="background-color:<?=$cat_meta['cat_color']?>"><?=get_cat_name($cat_meta['cat_id'])?></div>
                                        <?php } ?>
                                        <div class="featured-image" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>);" ></div>
                                    </div>
                                    <div class="w-clearfix author-featured">
                                        <img class="author-img featured">
                                    </div>
                                    <div class="featured-text">
                                        <div class="featured-title entry-title"><?php the_title(); ?> </div>
                                    </div>

                                </a>
                            </div>
                          <?php endwhile; wp_reset_postdata(); ?>
                        </div>

                        <!--div class="w-dyn-empty">
                            <p>No items found.</p>
                        </div>-->
                    </div>
                </div>
                <div class="email-newsletter-2 loggedout">
                    <div class="w-form email-newsletter-form-2">
                        <form id="email-form" name="email-form" data-name="Email Form" class="w-clearfix form-2">
                            <label for="email" class="newsletter-header-2">Be part of something bigger than yourself. Join the tribe:</label>
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
                            <?php
                              $args = array(
                                  'ignore_sticky_posts' => 1,
                                  'posts_per_page'      => 16,
                              );
                              $recent_posts = new WP_Query($args);
                              while ($recent_posts->have_posts()) : $recent_posts->the_post();

                                $cat_meta = get_category_meta($post->ID);

                                // Get author meta information
                                $full_name = get_author_fullname($post->post_author);

                            ?>
                              <div divtest="1" data-ix="scroll-fade" class="w-dyn-item w-col w-col-3 blog-thumbnail">
                                  <a href="<?php the_permalink(); ?>" data-ix="blog-thumbnail" class="w-inline-block thumbnail-wrapper">
                                      <div class="image-wrapper">
                                          <div class="thumbnail-image" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>);"></div>
                                          <?php if(is_array($cat_meta)) { ?>
                                          <div class="tag-name" style="background-color:<?=$cat_meta['cat_color']?>"><?=get_cat_name($cat_meta['cat_id'])?></div>
                                          <?php } ?>
                                      </div>
                                      <div class="thumbnail-text">
                                          <div class="break-word">
                                              <div class="blog-title"><?php the_title(); ?></div>
                                              <div class="w-embed">
                                                  <style>
                                                      .break-word {
                                                          word-wrap: break-word;
                                                      }
                                                  </style>
                                              </div>
                                              <div class="preview-text break-word"><?=get_the_excerpt()?></div>
                                          </div>
                                      </div>
                                      <div class="w-clearfix thumb-details break-text">
                                          <img class="author-img">
                                          <div class="author-title"><?=$full_name?></div>
                                          <div class="thumbnail-date"></div>
                                      </div>
                                  </a>
                              </div>
                            <?php endwhile; wp_reset_postdata(); ?>
                        </div>

                    </div>
                </div>
            </div>
            <?php get_footer(); ?>

    </body>
</html>
