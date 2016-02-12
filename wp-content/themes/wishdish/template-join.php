<?php /* Template Name: Join Page */ ?>
<!DOCTYPE html>
<html>
    <body class="full-body-tan">
        <?php get_header(); ?>
        <div class="sign-up-div">
            <div class="sign-up-email">
                <div class="section-heading">
                    <div class="med-divider divide-test"></div>
                    <h2 class="section-title">30 SECOND EMAIL SIGN UP</h2>
                    <div class="med-divider"></div>
                </div>
            </div>
            <div class="w-clearfix sign-up">
                <div class="w-clearfix emaildiv">
                    <label for="Email-Address" class="label-title">Email Address&nbsp;(will never be publicly displayed)<strong data-new-link="true">*</strong>
                    </label>
                    <input id="Email-Address" type="email" placeholder="Email" name="Email-Address" autofocus="autofocus" data-name="Email Address" required="required" class="w-input sign-up-box email">
                </div>
                <div class="w-clearfix passworddiv">
                    <label for="Password-2" class="label-title"><span data-new-link="true">Password<strong>*</strong></span>
                    </label>
                    <input id="Password-2" type="password" placeholder="Password" name="Password-2" data-name="Password 2" required="required" class="w-input sign-up-box email">
                </div>
                <div class="w-clearfix namediv">
                    <label for="First-Name" class="label first">First Name<strong data-new-link="true">*</strong>
                    </label>
                    <label for="First-Name" class="label last">Last Name<strong data-new-link="true">*</strong>
                    </label>
                    <input id="First-Name" type="text" placeholder="First" name="First-Name" required="required" data-name="First Name" class="w-input sign-up-box first">
                    <input id="Last-Name" type="text" placeholder="Last" name="Last-Name" required="required" data-name="Last Name" class="w-input sign-up-box last">
                </div>
                <div class="w-clearfix imagesdiv">
                    <label for="Profile-Picture" class="label profilepiclabel">Upload a Profile Picture <em data-new-link="true">(must be a perfect square)</em>
                    </label>
                    <label for="Banner-Picture" class="label bannerpiclabel">Upload a Profile Banner Picture&nbsp;<em data-new-link="true">(at least 1000px wide)</em>
                    </label>
                    <div class="w-clearfix profile-upload-div">
                        <a href="#" class="w-button sleek-button profile">Browse...</a>
                        <div class="filename">putFilenameHere.jpg</div>
                    </div>
                    <div class="w-clearfix banner-upload-div">
                        <a href="#" class="w-button sleek-button banner">Browse...</a>
                        <div class="filename">putFilenameHere.jpg</div>
                    </div>
                </div>
                <div class="biodiv">
                    <label for="About-Me" class="label biolabel">About Me (shown at the bottom of your stories)<strong data-new-link="true">*</strong>
                    </label>
                    <textarea id="About-Me" placeholder="Example: I love to write about sports and current issues. I have a fluffy cat named Mittens and am pursuing a degree in Journalism at Harvard University." name="About-Me" data-name="About Me" required="required" class="w-input bio"></textarea>
                </div>
                <div class="primary-tag">What are you interested in? (example: college, harvard, news, sports, depression, love, etc.)</div>
                <div class="w-clearfix tag-div sign-up-tags">
                    <div class="hashtag">#</div>
                    <input id="Tag" type="text" placeholder="Hashtag" name="Tag-1" required="required" data-name="Tag 1" class="w-input compose-tags _1">
                </div>
                <div class="w-clearfix tag-div sign-up-tags">
                    <div class="hashtag">#</div>
                    <input id="Tag" type="text" placeholder="Hashtag" name="Tag-1" required="required" data-name="Tag 1" class="w-input compose-tags _1">
                </div>
                <div class="w-clearfix tag-div sign-up-tags">
                    <div class="hashtag">#</div>
                    <input id="Tag" type="text" placeholder="Hashtag" name="Tag-1" required="required" data-name="Tag 1" class="w-input compose-tags _1">
                </div>
                <div class="w-clearfix socialdiv">
                    <label for="Instagram" class="label-title"><span data-new-link="true">Your Instagram</span>
                    </label>
                    <input id="Instagram" type="text" placeholder="Paste link here" name="Instagram" data-name="Instagram" class="w-input sign-up-box email">
                </div>
                <div class="w-clearfix socialdiv">
                    <label for="Twitter" class="label-title"><span data-new-link="true">Your Twitter</span>
                    </label>
                    <input id="Twitter" type="text" placeholder="Paste link here" name="Twitter" data-name="Twitter" class="w-input sign-up-box email">
                </div>
                <div class="w-clearfix socialdiv">
                    <label for="Facebook" class="label-title"><span data-new-link="true">Your Facebook</span>
                    </label>
                    <input id="Facebook" type="text" placeholder="Paste link here" name="Facebook" data-name="Facebook" class="w-input sign-up-box email">
                </div>
            </div>
            <input type="submit" value="Done!" data-wait="Submitting..." wait="Submitting..." class="w-button publish">
        </div>
        <div class="clear"></div>
        <br>
        <br>
        <br>
        <?php get_footer(); ?>

    </body>
</html>
