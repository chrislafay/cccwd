<?php /* Template Name: Category List */ ?>
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
            <div class="w-section inner-hero">
                <div class="container">
                    <h1 class="hero-header">Explore WishDish</h1>
                    <div class="dark-overlay"></div>
                </div>
            </div>
            <div id="posts" class="w-section main-section">
                <div class="w-container">
                    <div class="w-clearfix section-heading">
                        <div class="med-divider divide-test"></div>
                        <h2 class="section-title">FEATURED TAGS</h2>
                        <div class="med-divider"></div>
                    </div>
                    <div class="w-dyn-list">
                        <div class="w-dyn-items w-row">
                            <div class="w-dyn-item w-col w-col-3">
                                <a class="w-inline-block tag-block">
                                    <div data-ix="category-thumbnail" class="thumbnail">
                                        <div class="tag mini"></div>
                                        <div class="dark-overlay mini"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="w-dyn-empty empty-state">
                            <p class="empty-state-text">No featured tags right now!</p>
                        </div>
                    </div>
                </div>
                <div class="w-container">
                    <div class="w-clearfix section-heading">
                        <div class="med-divider divide-test"></div>
                        <h2 class="section-title">ALL TAGS</h2>
                        <div class="med-divider"></div>
                    </div>
                    <div class="w-dyn-list">
                        <div class="w-dyn-items w-row">
                            <?php foreach(get_categories() as $cat) { ?>
                              <?php $cat_meta = get_category_meta(NULL,$cat->term_id); ?>
                              <div class="w-dyn-item w-col w-col-3">
                                  <a href="/category/<?=$cat->slug?>" class="w-inline-block tag-block">
                                      <div data-ix="category-thumbnail" class="thumbnail" <?php if( isset($cat_meta['cat_bg_image']) && !is_null($cat_meta['cat_bg_image']) ) { ?> style="background-image:url(<?=$cat_meta['cat_bg_image']?>);" <?php } ?>>
                                          <div class="tag"><?=$cat->name?></div>
                                          <div class="dark-overlay"></div>
                                      </div>
                                  </a>
                              </div>
                            <?php } ?>
                        </div>
                        <!--<div class="w-dyn-empty empty-state">
                            <p class="empty-state-text">No tags (<em data-new-link="true">yet!</em>)</p>
                        </div>-->
                    </div>
                </div>
            </div>
            <?php get_footer(); ?>

    </body>
</html>
