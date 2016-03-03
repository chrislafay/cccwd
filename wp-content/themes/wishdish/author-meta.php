<?php

  function author_meta_tags() {
    $final = array();
    $meta_prefix = meta_prefix();

    $final[] = $meta_prefix."hashtag_1";
    $final[] = $meta_prefix."hashtag_2";
    $final[] = $meta_prefix."hashtag_3";
    $final[] = $meta_prefix."website";
    $final[] = $meta_prefix."twitter";
    $final[] = $meta_prefix."facebook";
    $final[] = $meta_prefix."instagram";

  }





  add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
  add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );

  function my_show_extra_profile_fields( $user ) { ?>

  	<h3>Extra profile information</h3>

  	<table class="form-table">

      <?php foreach(author_meta_tags() as $meta) { ?>

  		<tr>
  			<th><label for="twitter">Twitter</label></th>

  			<td>
  				<input type="text" name="twitter" id="twitter" value="<?php echo esc_attr( get_the_author_meta( 'twitter', $user->ID ) ); ?>" class="regular-text" /><br />
  				<span class="description">Please enter your Twitter username.</span>
  			</td>
  		</tr>

      <?php } ?>

  	</table>
  <?php }


?>
