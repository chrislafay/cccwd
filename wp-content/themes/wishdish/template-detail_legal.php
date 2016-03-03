<?php /* Template Name: Legal Page */ ?>
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
            <div class="w-section w-hidden-small w-hidden-tiny inner-hero">
                <div class="container">
                    <h1 class="hero-header"></h1>
                    <div class="dark-overlay"></div>
                </div>
            </div>
            <div class="w-section w-hidden-main w-hidden-medium inner-hero">
                <div class="container">
                    <h1 class="hero-header"></h1>
                    <div class="dark-overlay"></div>
                </div>
            </div>
            <div id="posts" class="w-section main-section">
                <div class="w-container">
                    <div class="w-richtext legal-body"></div>
                </div>
            </div>
            <?php get_footer(); ?>

    </body>
</html>
