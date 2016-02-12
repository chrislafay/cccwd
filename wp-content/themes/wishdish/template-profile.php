<?php /* Template Name: Profile Page */ ?>
<!DOCTYPE html>
<html>
    <body class="full-body-tan">
        <?php get_header(); ?>
        <div id="posts" class="w-section main-section settings-main">
            <div class="sign-up-div">
                <div class="sign-up-email">
                    <div class="section-heading">
                        <div class="med-divider divide-test"></div>
                        <h2 class="section-title">EDIT YOUR ACCOUNT</h2>
                        <div class="med-divider"></div>
                    </div>
                </div>
                <div class="sign-up">
                    <div class="w-clearfix emaildiv">
                        <label for="Email-Address-2" class="label-title">My Email<strong data-new-link="true">*</strong>
                        </label>
                        <input id="Email-Address-2" type="email" placeholder="Email" name="Email-Address-2" autofocus="autofocus" data-name="Email Address 2" required="required" class="w-input sign-up-box email">
                    </div>
                    <div class="w-clearfix passworddiv">
                        <label for="Password-3" class="label-title"><span data-new-link="true">My Password<strong>*</strong></span>
                        </label>
                        <input id="Password-3" type="password" placeholder="Password" name="Password-3" data-name="Password 3" required="required" class="w-input sign-up-box email">
                    </div>
                    <div class="w-clearfix namediv">
                        <label for="First-Name" class="label first">My First Name<strong data-new-link="true">*</strong>
                        </label>
                        <label for="First-Name-2" class="label last">My Last Name<strong data-new-link="true">*</strong>
                        </label>
                        <input id="First-Name-2" type="text" placeholder="First" name="First-Name-2" required="required" data-name="First Name 2" class="w-input sign-up-box first">
                        <input id="Last-Name-2" type="text" placeholder="Last" name="Last-Name-2" required="required" data-name="Last Name 2" class="w-input sign-up-box last">
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
                        <textarea id="About-Me-2" placeholder="Example: I love to write about sports and current issues. I have a fluffy cat named Mittens and am pursuing a degree in Journalism at Harvard University." name="About-Me-2" data-name="About Me 2" required="required" class="w-input bio"></textarea>
                    </div>
                    <div class="tag-div">
                        <div class="primary-tag">What I am interested in (example: college, harvard, news, sports, depression, love, etc.)</div>
                        <div class="w-clearfix tag-div">
                            <div class="hashtag">#</div>
                            <input id="Tag" type="text" placeholder="Hashtag" name="Tag-1" required="required" data-name="Tag 1" class="w-input compose-tags _1">
                        </div>
                        <div class="w-clearfix tag-div">
                            <div class="hashtag">#</div>
                            <input id="Tag" type="text" placeholder="Hashtag" name="Tag-1" required="required" data-name="Tag 1" class="w-input compose-tags _1">
                        </div>
                        <div class="w-clearfix tag-div">
                            <div class="hashtag">#</div>
                            <input id="Tag" type="text" placeholder="Hashtag" name="Tag-1" required="required" data-name="Tag 1" class="w-input compose-tags _1">
                        </div>
                    </div>
                    <div class="w-clearfix socialdiv">
                        <label for="Instagram-2" class="label-title"><span data-new-link="true">My Instagram</span>
                        </label>
                        <input id="Instagram-2" type="text" placeholder="Paste link here" name="Instagram-2" data-name="Instagram 2" class="w-input sign-up-box email">
                    </div>
                    <div class="w-clearfix socialdiv">
                        <label for="Twitter-2" class="label-title"><span data-new-link="true">My Twitter</span>
                        </label>
                        <input id="Twitter-2" type="text" placeholder="Paste link here" name="Twitter-2" data-name="Twitter 2" class="w-input sign-up-box email">
                    </div>
                    <div class="w-clearfix socialdiv">
                        <label for="Facebook-2" class="label-title"><span data-new-link="true">My Facebook</span>
                        </label>
                        <input id="Facebook-2" type="text" placeholder="Paste link here" name="Facebook-2" data-name="Facebook 2" class="w-input sign-up-box email">
                    </div>
                </div>
                <input type="submit" value="Save" data-wait="Saving..." wait="Saving..." class="w-button publish">
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
