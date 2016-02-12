<?php /* Template Name: Tag Page */ ?>
<!DOCTYPE html>
<html>
    <body class="full-body-tan">
        <?php get_header(); ?>
        <div class="inner-hero">
            <div class="w-container hero-wrapper">
                <h1 class="hero-header tags"></h1>
            </div>
            <div class="dark-overlay"></div>
        </div>
        <div class="w-section main-section">
            <div class="body">
                <div class="section-heading">
                    <div class="med-divider divide-test"></div>
                    <h2 class="section-title">STORIES ABOUT</h2>
                    <h2 class="section-title tag-title"></h2>
                    <div class="med-divider"></div>
                </div>
                <div class="w-dyn-list"_CONTEXT">
                     <div class="w-dyn-items w-row w-clearfix">
                        <div class="w-dyn-item w-col w-col-3 blog-thumbnail">
                            <a data-ix="blog-thumbnail" class="w-clearfix w-inline-block thumbnail-wrapper">
                                <div class="image-wrapper">
                                    <div class="thumbnail-image"></div>
                                </div>
                                <div class="thumbnail-text">
                                    <div class="blog-title"></div>
                                    <div class="preview-text"></div>
                                </div>
                                <div class="w-clearfix thumb-details">
                                    <img class="author-img">
                                    <div class="author-title"></div>
                                    <div class="thumbnail-date"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="w-dyn-empty w-clearfix empty-state">
                        <p class="empty-state-text">No stories about this (<em data-new-link="true">yet!</em>)</p>
                    </div>
                </div>
            </div>
            <div class="body">
                <div class="section-heading">
                    <div class="med-divider divide-test"></div>
                    <h2 class="section-title">PEOPLE WHO KNOW ABOUT</h2>
                    <h2 class="section-title tag-title"></h2>
                    <div class="med-divider"></div>
                    <div class="w-dyn-list"_CONTEXT">
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
