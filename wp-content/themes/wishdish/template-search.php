<?php /* Template Name: Search Page */ ?>
<!DOCTYPE html>
<html>
    <body class="full-body-tan">
        <?php get_header(); ?>
        <div class="body">
            
            <div class="section-heading">
                <div class="med-divider divide-test"></div>
                <h2 class="section-title">SEARCH RESULTS FOR</h2>
                <h2 class="section-title keyword">PUT_WORD_HERE</h2>
                <div class="med-divider"></div>
            </div>
            <div class="w-dyn-list">
                <div class="w-dyn-items">
                    <div class="w-dyn-item search-contain">
                        <div class="search-thumb"></div>
                        <a class="w-inline-block search-title">
                            <div class="search-title"></div>
                            <div class="search-subtitle"></div>
                        </a>
                    </div>
                </div>
                <div class="w-dyn-empty">
                    <p>No items found.</p>
                </div>
            </div>
        </div>
        <?php get_footer(); ?>

    </body>
</html>
