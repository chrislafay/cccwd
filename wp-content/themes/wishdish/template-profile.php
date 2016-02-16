<?php /* Template Name: Edit My Profile */ ?>
<!DOCTYPE html>
<html>
    <body class="full-body-tan">
        <?php get_header(); ?>
        <?php
          $meta_prefix = meta_prefix();
          $author = get_user_by( 'id', get_current_user_id() );
          //pd($meta_fields);

          /* Get user info. */
          global $current_user, $wp_roles;
          //get_currentuserinfo(); //deprecated since 3.1

          /* Load the registration file. */
          //require_once( ABSPATH . WPINC . '/registration.php' ); //deprecated since 3.1
          $error = array();
          /* If profile was saved, update profile. */
          if ( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) && $_POST['action'] == 'update-user' ) {
            if ( !empty( $_POST['email'] ) ){
                if (!is_email(esc_attr( $_POST['email'] )))
                    $error[] = __('The Email you entered is not valid.  please try again.', 'profile');
                elseif(is_int(email_exists(esc_attr( $_POST['email'] ))) && email_exists(esc_attr( $_POST['email'] )) != get_current_user_id() )
                    $error[] = __('This email is already used by another user.  try a different one.', 'profile');
                else{
                    wp_update_user( array ('ID' => get_current_user_id(), 'user_email' => esc_attr( $_POST['email'] )));
                }
            }

            if ( !empty( $_POST['first-name'] ) )
                update_user_meta( get_current_user_id(), 'first_name', esc_attr( $_POST['first-name'] ) );
            if ( !empty( $_POST['last-name'] ) )
                update_user_meta(get_current_user_id(), 'last_name', esc_attr( $_POST['last-name'] ) );
            if ( !empty( $_POST['description'] ) )
                update_user_meta( get_current_user_id(), 'description', esc_attr( $_POST['description'] ) );
            if ( !empty( $_POST['hashtag_1'] ) )
                update_user_meta( get_current_user_id(), $meta_prefix.'hashtag_1', esc_attr( $_POST['hashtag_1'] ) );
            if ( !empty( $_POST['hashtag_2'] ) )
                update_user_meta( get_current_user_id(), $meta_prefix.'hashtag_2', esc_attr( $_POST['hashtag_2'] ) );
            if ( !empty( $_POST['hashtag_3'] ) )
                update_user_meta( get_current_user_id(), $meta_prefix.'hashtag_3', esc_attr( $_POST['hashtag_3'] ) );
            if ( !empty( $_POST['facebook'] ) )
                update_user_meta( get_current_user_id(), $meta_prefix.'facebook', esc_attr( $_POST['facebook'] ) );
            if ( !empty( $_POST['instagram'] ) )
                update_user_meta( get_current_user_id(), $meta_prefix.'instagram', esc_attr( $_POST['instagram'] ) );
            if ( !empty( $_POST['twitter'] ) )
                update_user_meta( get_current_user_id(), $meta_prefix.'twitter', esc_attr( $_POST['twitter'] ) );
            if ( !empty( $_POST['linkedin'] ) )
                update_user_meta( get_current_user_id(), $meta_prefix.'linkedin', esc_attr( $_POST['linkedin'] ) );

          }

          $meta_fields = get_author_custom_meta($author->ID);
        ?>
        <div id="posts" class="w-section main-section settings-main">
            <div class="sign-up-div">
                <div class="sign-up-email">
                    <div class="section-heading">
                        <div class="med-divider divide-test"></div>
                        <h2 class="section-title">EDIT YOUR ACCOUNT</h2>
                        <div class="med-divider"></div>
                    </div>
                </div>

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                  <?php if ( !is_user_logged_in() ) : ?>
                    <div class="sign-up">
                      <p class="warning">
                          <?php _e('You must be logged in to edit your profile.', 'profile'); ?>
                      </p><!-- .warning -->
                    </div>
                  <?php else : ?>
                    <?php if ( count($error) > 0 ) echo '<p class="error">' . implode("<br />", $error) . '</p>'; ?>
                    <form method="post" id="adduser" action="<?php the_permalink(); ?>">
                      <div class="sign-up">
                          <div class="w-clearfix emaildiv">
                              <label for="email" class="label-title">My Email<strong data-new-link="true">*</strong>
                              </label>
                              <input id="email" value="<?php the_author_meta( 'user_email', get_current_user_id() ); ?>" type="email" placeholder="Email" name="email" autofocus="autofocus" data-name="Email Address 2" required="required" class="w-input sign-up-box email">
                          </div>
                          <div class="w-clearfix passworddiv">
                              <label for="Password-3" class="label-title"><span data-new-link="true">My Password<strong>*</strong></span>
                              </label>
                              <input id="Password-3" type="password" placeholder="Password" name="Password-3" data-name="Password 3" class="w-input sign-up-box email">
                          </div>
                          <div class="w-clearfix namediv">
                              <label for="first-name" class="label first">My First Name<strong data-new-link="true">*</strong>
                              </label>
                              <label for="last-name" class="label last">My Last Name<strong data-new-link="true">*</strong>
                              </label>
                              <input id="first-name" type="text" placeholder="First" name="first-name" required="required" data-name="First Name 2" value="<?php the_author_meta( 'first_name', get_current_user_id() ); ?>" class="w-input sign-up-box first">
                              <input id="last-name" type="text" placeholder="Last" name="last-name" required="required" data-name="Last Name 2" value="<?php the_author_meta( 'last_name', get_current_user_id() ); ?>" class="w-input sign-up-box last">
                          </div>
                          <div class="w-clearfix imagesdiv">
                              <label for="Profile-Picture" class="label profilepiclabel">My Profile Picture <em data-new-link="true">(must be a perfect square)</em>
                              </label>
                              <label for="Banner-Picture" class="label bannerpiclabel">My Profile Banner Picture&nbsp;<em data-new-link="true">(at least 1000px wide)</em>
                              </label>
                              <div class="profile-upload-div">
                                  <a href="#" class="w-button sleek-button profile">Browse...</a>
                                  <div class="filename">putFilenameHere.jpg</div>
                              </div>
                              <div class="banner-upload-div">
                                  <a href="#" class="w-button sleek-button banner">Browse...</a>
                                  <div class="filename">putFilenameHere.jpg</div>
                              </div>
                          </div>
                          <div class="biodiv">
                              <label for="About-Me-2" class="label biolabel">About Me (shown at the bottom of your stories)<strong data-new-link="true">*</strong>
                              </label>
                              <textarea id="About-Me-2" placeholder="Example: I love to write about sports and current issues. I have a fluffy cat named Mittens and am pursuing a degree in Journalism at Harvard University." name="description" data-name="About Me 2" required="required" class="w-input bio">
                                <?php the_author_meta( 'description', get_current_user_id() ); ?>
                              </textarea>
                          </div>
                          <div class="tag-div-container">
                              <div class="primary-tag">What I am interested in (example: college, harvard, news, sports, depression, love, etc.)</div>
                              <div class="w-clearfix tag-div">
                                  <div class="hashtag">#</div>
                                  <input id="Tag" value="<?=$meta_fields[$meta_prefix.'hashtag_1']?>" type="text" placeholder="Hashtag" name="hashtag_1" data-name="Tag 1" class="w-input compose-tags _1">
                              </div>
                              <div class="w-clearfix tag-div">
                                  <div class="hashtag">#</div>
                                  <input id="Tag" value="<?=$meta_fields[$meta_prefix.'hashtag_2']?>" type="text" placeholder="Hashtag" name="hashtag_2" data-name="Tag 1" class="w-input compose-tags _1">
                              </div>
                              <div class="w-clearfix tag-div">
                                  <div class="hashtag">#</div>
                                  <input id="Tag" value="<?=$meta_fields[$meta_prefix.'hashtag_3']?>" type="text" placeholder="Hashtag" name="hashtag_3" data-name="Tag 1" class="w-input compose-tags _1">
                              </div>
                              <div class="clear"></div>
                          </div>
                          <div class="w-clearfix socialdiv">
                              <label for="Instagram-2" class="label-title"><span data-new-link="true">My Instagram</span>
                              </label>
                              <input id="Instagram-2" value="<?=$meta_fields[$meta_prefix.'instagram']?>" type="text" placeholder="Paste link here" name="Instagram-2" data-name="Instagram 2" class="w-input sign-up-box email">
                          </div>
                          <div class="w-clearfix socialdiv">
                              <label for="Twitter-2" class="label-title"><span data-new-link="true">My Twitter</span>
                              </label>
                              <input id="Twitter-2" value="<?=$meta_fields[$meta_prefix.'twitter']?>" type="text" placeholder="Paste link here" name="Twitter-2" data-name="Twitter 2" class="w-input sign-up-box email">
                          </div>
                          <div class="w-clearfix socialdiv">
                              <label for="Facebook-2" class="label-title"><span data-new-link="true">My Facebook</span>
                              </label>
                              <input id="Facebook-2" value="<?=$meta_fields[$meta_prefix.'facebook']?>" type="text" placeholder="Paste link here" name="Facebook-2" data-name="Facebook 2" class="w-input sign-up-box email">
                          </div>
                          <div class="w-clearfix socialdiv">
                              <label for="LinkedIn-2" class="label-title"><span data-new-link="true">My LinkedIn</span>
                              </label>
                              <input id="LinkedIn-2" value="<?=$meta_fields[$meta_prefix.'linkedin']?>" type="text" placeholder="Paste link here" name="LinkedIn-2" data-name="LinkedIn 2" class="w-input sign-up-box email">
                          </div>
                      </div>
                      <?php //echo $referer; ?>
                      <?php wp_nonce_field( 'update-user' ) ?>
                      <input name="action" type="hidden" id="action" value="update-user" />
                      <input name="updateuser" type="submit" value="<?php _e('Update', 'profile'); ?>" data-wait="Saving..." wait="Saving..." class="w-button publish">
                    </form>
                  <?php endif; endwhile; ?>
                  <?php else: ?>
                  <p class="no-data">
                    <?php _e('Sorry, no page matched your criteria.', 'profile'); ?>
                  </p><!-- .no-data -->
                  <?php endif; ?>
            </div>
        </div>
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
            <div class="delete-account">If you need to delete your account please email and we will help you.</div>
            <?php get_footer(); ?>

    </body>
</html>
