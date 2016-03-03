<?php
/**
 * The template for displaying 404 pages (not found)
 */
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

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
        <div class="main-div">
            <div id="posts" class="w-section main-section _404">
                <h1 class="_404-header">404</h1>
                <div class="page-not-found">Page not found. Go <a class="-wfp-hover home-link" href="index.html">home.</a>
                </div>
            </div>
        </div>

    </main><!-- .site-main -->

    <?php get_sidebar('content-bottom'); ?>

</div><!-- .content-area -->

<?php get_footer(); ?>
