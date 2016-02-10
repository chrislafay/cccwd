<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Velociteach - Microsite</title>
    <?php wp_head(); ?>
  </head>
  <body>
    <!-- HEADER -->
    <div class="header">
      <div class="header-spacer">&nbsp;</div>
      <div class="header-content">
        <div class="row">
          <div class="column medium-4 logo"><img src="<?php echo get_bloginfo("template_directory"); ?>/images/logo.jpg" alt="Insite by Velociteach Logo"></div>
          <div class="column medium-4 buttons">
            <a href="#" class="button primary rounded-large caps large">Shopping Cart</a>
            <a href="#" class="button secondary rounded-large caps large">Sign Up</a>
          </div>
          <div class="column medium-4 contact">
            Ready to advance your career?
            <span>1.888.568.2527</span>
          </div>
        </div>
      </div>
      <div class="header-banner" style="background-image: url(<?php echo get_bloginfo("template_directory"); ?>/images/header.jpg);">
        <div class="header-banner-overlay row column">
          <h1>Title</h1>
          <h3>Subtitle</h3>
        </div>
      </div>
    </div>
    <!-- (end) HEADER -->

    <!-- CONTENT -->
    <div class="container">
      
    </div>
    <!-- (end) CONTENT -->


    <?php wp_footer(); ?>
  </body>
</html>
