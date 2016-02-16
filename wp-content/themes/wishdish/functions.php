<?php


// Includes
require_once('inc/class-taxonomy-meta.php');
include('inc/author-meta.php');

// Version bump
function get_current_version() { return rand(0,10000); } //return '0.0.2'; }

// Add Featured Image support
add_theme_support( 'post-thumbnails' );

// Add Infinite Scroll support
add_theme_support( 'infinite-scroll', array(
    'container' => 'content',
    'footer' => 'page',
) );


// Meta Prefix
function meta_prefix() { return "wish_dish_"; }


// Print and die
function pd($mixed) {
    echo "<pre>";
    var_dump($mixed);
    echo "</pre>";
    die();
}

// Enqueue all header scripts
function vtms_enqueue_scripts() {
    wp_enqueue_style('parent', get_template_directory_uri() . '/stylesheets/styles.css', array(), get_current_version());
} add_action('wp_enqueue_scripts', 'vtms_enqueue_scripts');








/* ---------------------------------- TAXONOMY META */

  $tax_meta_prefix = meta_prefix();

  $config = array(
  	'id' 			=> 'category-meta',			     // meta box id, unique per meta box
  	'title' 		=> 'Category Meta Box',    // meta box title
  	'pages' 		=> array('category'),      // taxonomy name, accept categories, post_tag and custom taxonomies
  	'context' 		=> 'normal',             // where the meta box appear: normal (default), advanced, side; optional
  	'fields' 		=> array(),                 // list of meta fields (can be added by field arrays)
  	'local_images' 	=> false,          			// Use local or hosted images (meta box images for add/remove)
  	'use_with_theme'=> true          			//change path if used with theme set to true, false for a plugin or anything else for a custom path(default false).
  );
  $cat_meta =  new Tax_Meta_Class($config);

  // Category Color
  $cat_meta->addText($tax_meta_prefix.'color',array('name'=> __('color','tax-meta')));

  // Category Featured Image
  $cat_meta->addFile($tax_meta_prefix.'image',array('name'=> __('image','tax-meta')));


/* ---------------------------------- (end) TAXONOMY META */





/* ---------------------------------- GET CATEGORY META */

  function get_category_meta($post_id = NULL, $cat_id = NULL) {
    // Return array
    $final = array();

    // All category IDs
    $categories   = wp_get_post_categories($post_id);

    if(isset($categories[0]) || !is_null($cat_id)) {
      $has_category = true;

      // Get the TERM for the category
      if(isset($categories[0])) {
        $term = get_term_by( 'id', $categories[0], "category" );
        $final['cat_id'] = $categories[0];
      }
      else {
        $term = get_term_by( 'id', $cat_id, "category" );
        $final['cat_id'] = $cat_id;
      }

      // Get all meta data for the Category
      $getTaxMeta 	= get_tax_meta($term);

      // Grab the Category COLOR
      $cat_color 	  = $getTaxMeta['wish_dish_color'];

      // Append a # to the beginning of the color if it doesn't have one
      if(strpos($cat_color,"#") === false) $cat_color = "#".$cat_color;

      $final['cat_meta'] = $getTaxMeta;
      $final['cat_color'] = $cat_color;
      $final['cat_bg_image'] = ( isset($getTaxMeta['wish_dish_image'][0]) ) ? wp_get_attachment_url($getTaxMeta['wish_dish_image'][0]) : NULL;

      return $final;

    } else {
      return false;
    }
  }

/* ---------------------------------- (end) GET CATEGORY META */







/* ---------------------------------- GET AUTHOR NAME */

  function get_author_fullname($author_id) {
    $author_meta = get_user_meta($author_id);
    if(isset($author_meta['first_name']) && isset($author_meta['last_name']))
      $full_name = $author_meta['first_name'][0] . ' ' . $author_meta['last_name'][0];
    else $full_name = "Anonymus";

    return $full_name;
  }

/* ---------------------------------- (end) GET AUTHOR NAME */

?>
