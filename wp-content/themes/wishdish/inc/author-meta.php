<?php

  function author_meta_tags() {
    $final = array();
    $meta_prefix = meta_prefix();
    $i = 0;


    $final[$i]['name'] = $meta_prefix."hashtag_1";
    $final[$i]['label'] = "Hashtag #1";
    $final[$i]['description'] = "Enter your first hashtag";

    $i++;

    $final[$i]['name'] = $meta_prefix."hashtag_2";
    $final[$i]['label'] = "Hashtag #2";
    $final[$i]['description'] = "Enter your second hashtag";

    $i++;

    $final[$i]['name'] = $meta_prefix."hashtag_3";
    $final[$i]['label'] = "Hashtag #3";
    $final[$i]['description'] = "Enter your third hashtag";

    $i++;

    $final[$i]['name'] = $meta_prefix."website";
    $final[$i]['label'] = "Website Link";
    $final[$i]['description'] = "Enter a link to your personal website";

    $i++;

    $final[$i]['name'] = $meta_prefix."twitter";
    $final[$i]['label'] = "Twitter";
    $final[$i]['description'] = "Your Twitter handle";

    $i++;

    $final[$i]['name'] = $meta_prefix."facebook";
    $final[$i]['label'] = "Facebook";
    $final[$i]['description'] = "Your Facebook profile link";

    $i++;

    $final[$i]['name'] = $meta_prefix."instagram";
    $final[$i]['label'] = "Instagram";
    $final[$i]['description'] = "A link to your Instagram feed";

    $i++;

    $final[$i]['name'] = $meta_prefix."linkedin";
    $final[$i]['label'] = "LinkedIn";
    $final[$i]['description'] = "A link to your LinkedIn profile";


    return $final;

  }




  function get_author_custom_meta($author_id) {
    $final = array();

    foreach(author_meta_tags() as $meta) {
      $final[$meta['name']] = get_the_author_meta($meta['name'],$author_id);
    }

    return $final;
  }





  add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
  add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );

  function my_show_extra_profile_fields( $user ) { ?>

  	<h3>Extra profile information</h3>

  	<table class="form-table">

      <?php  foreach(author_meta_tags() as $meta) { ?>

  		<tr>
  			<th><label for="<?=$meta['name']?>"><?=$meta['label']?></label></th>

  			<td>
  				<input type="text" name="<?=$meta['name']?>" id="<?=$meta['name']?>" value="<?php echo esc_attr( get_the_author_meta( $meta['name'], $user->ID ) ); ?>" class="regular-text" /><br />
  				<span class="description"><?=$meta['description']?></span>
  			</td>
  		</tr>

      <?php } ?>

  	</table>
  <?php }




  add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
  add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );

  function my_save_extra_profile_fields( $user_id ) {

  	if ( !current_user_can( 'edit_user', $user_id ) )
  		return false;


    $meta_tags = author_meta_tags();

    foreach(author_meta_tags() as $meta) {
      update_user_meta( $user_id, $meta['name'], $_POST[$meta['name']]);
    }

  }


?>
