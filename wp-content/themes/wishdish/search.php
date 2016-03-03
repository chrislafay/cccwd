<!DOCTYPE html>
<html>
    <body class="full-body-tan">
        <?php get_header(); ?>
        <div class="body">

            <div class="section-heading">
                <div class="med-divider divide-test"></div>
                <h2 class="section-title">SEARCH RESULTS FOR</h2>
                <h2 class="section-title keyword"><?=(isset($_GET['s'])) ? strtoupper($_GET['s']) : ""?></h2>
                <div class="med-divider"></div>
            </div>
            <div class="w-dyn-list">
                <div class="w-dyn-items w-row w-clearfix">
                    <?php
                      while (have_posts()) : the_post();

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
        <?php get_footer(); ?>

    </body>
</html>
