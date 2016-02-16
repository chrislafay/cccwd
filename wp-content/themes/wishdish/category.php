<!DOCTYPE html>
<html>
    <body class="full-body-tan">
        <?php get_header(); ?>
        <?php
          $cat_id = get_query_var('cat');
          $cat_meta = get_category_meta(NULL,$cat_id);
          //pd($cat_meta);
        ?>
        <div class="inner-hero" <?php if( isset($cat_meta['cat_bg_image']) && !is_null($cat_meta['cat_bg_image']) ) { ?> style="background-image:url(<?=$cat_meta['cat_bg_image']?>);" <?php } ?>>
            <div class="w-container hero-wrapper">
                <h1 class="hero-header tags"><?=get_cat_name($cat_meta['cat_id'])?></h1>
            </div>
            <div class="dark-overlay"></div>
        </div>
        <div class="w-section main-section">
            <div class="body">
                <div class="section-heading">
                    <div class="med-divider divide-test"></div>
                    <h2 class="section-title">STORIES ABOUT</h2>
                    <h2 class="section-title tag-title"><?=get_cat_name($cat_meta['cat_id'])?></h2>
                    <div class="med-divider"></div>
                </div>
                <div class="w-dyn-list _CONTEXT">
                     <div class="w-dyn-items w-row w-clearfix">

                       <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                         <?php $full_name = get_author_fullname($post->post_author); ?>
                        <div class="w-dyn-item w-col w-col-3 blog-thumbnail">
                            <a href="<?php the_permalink(); ?>" data-ix="blog-thumbnail" class="w-clearfix w-inline-block thumbnail-wrapper">
                                <div class="image-wrapper">
                                    <div class="thumbnail-image" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>);"></div>
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
                      <?php endwhile; else : ?>
                        <div class="w-dyn-empty w-clearfix empty-state">
                            <p class="empty-state-text">No stories about this (<em data-new-link="true">yet!</em>)</p>
                        </div>
                      <?php endif; ?>

                    </div>
                </div>
            </div>
            <div class="body">
                <div class="section-heading">
                    <div class="med-divider divide-test"></div>
                    <h2 class="section-title">PEOPLE WHO KNOW ABOUT <?= strtoupper(get_cat_name($cat_meta['cat_id']))?></h2>
                    <h2 class="section-title tag-title"></h2>
                    <div class="med-divider"></div>
                    <div class="w-dyn-list _CONTEXT">
                         <div class="w-dyn-items w-row w-clearfix">
                            <div class="w-dyn-item w-col w-col-2 blog-thumbnail">
                                <a data-ix="blog-thumbnail" class="w-inline-block thumbnail-wrapper">
                                    <div class="image-wrapper">
                                        <div class="thumbnail-image authors-pictures"></div>
                                    </div>
                                    <div class="thumbnail-text authors">
                                        <div class="blog-title authors-name"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="w-dyn-empty w-clearfix empty-state">
                            <p class="empty-state-text">No writers have said they know about this (<em data-new-link="true">yet!</em>)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php get_footer(); ?>

    </body>
</html>
