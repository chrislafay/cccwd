<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <?php
    /**
     * Template Name: our-story
     */
    get_header();
    ?>
    <body class="problem-header">

        <div id="inner-main" class="hero-inner" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>); background-position: center center;" >

        </div>
        <div class="clearall"></div>
        <!-- problem top content block -->
        <div  class="solution-container our-story">
            <h1 class="history-title title-our-story">Our <strong>Story</strong></h1> 
            <div id="detail-container" class="our-story-wrap">
                <div class="column twothirds">
                    <div class="">
                        <div class="about-wrap">
                            <h2>It started with a vision.</h2>
                            <br>
                            <p> Our founders envisioned a company that would excel providing custom
                                software solutions and project management support for businesses seeking an 
                                alternative to high-priced consulting firms. They would merge strong 
                                business expertise and technical proficiency with exceptional project management 
                                skills to ensure that clients received high quality solutions.
                            </p>
                            <br>
                            <h2>Today our vision has come to fruition.</h2>
                            <br>
                            <p>As experts in technology, our SOLTECH consultants have a unique understanding 
                                of what it takes to successfully deliver on time and on budget. We create
                                strong partnerships with our clients to learn their technology issues. 
                                These partnerships enable us to deliver the support and resources our 
                                clients demand to accomplish their goals. From high level IT guidance 
                                and strategy, to recruiting high-qualified technology candidates for 
                                your business, our customized approach delivers proven results.

                            </p>
                            <br>
                            <p>At SOLTECH, we are a game changer in the technology industry with an extensive 
                                focus on custom software development, mobile applications and staffing. 
                                We provide technology solutions that attract, convert, and connect you with 
                                prospects. <br><br>

                                In 1998 when the company was founded, we wanted our organization 
                                to:
                            </p>
                            <div class="core-values">
                                <ul style="padding-left: 2rem !important;">
                                    <li>Personify our passion for technology</li>
                                    <li>Demonstrate innovative and forward-thinking ideas</li>
                                    <li>Create a tangible value for our clients</li>
                                    <li>Inspire and reward our employees</li>
                                    <li>Garner the respect of our industry peers and partners</li>
                                </ul>
                            </div>
                            <!-- end of about wrap -->

                        </div>
                        <!-- middle image container -->

                        <div class="clearall"></div>
                        <div class="navwrapper">
                            <div class="column full core-values">
                                <h2>Our Core Values</h2>
                                <br>
                                <p>We operate following some simple principles:</p>
                                <ul style="padding-left: 2rem !important;">
                                    <li><strong>Respect</strong> - We respect the individual, & believe that individuals who are treated with respect & responsibility respond by giving their best.</li>

                                    <li><strong>Commitment</strong> - We make commitments with care, and then live up to them. In all things, we do what we say we are going to do</li>

                                    <li><strong>Vision</strong> - Clarity in understanding our mission, goals, and what we expect from each other is critical to our success.</li>

                                    <li><strong>Integrity</strong> - We require complete honesty and integrity in everything we do.</li>

                                    <li><strong>Fun</strong> - Work is an important part of life, and it should be fun.</li>

                                    <li><strong>Effort</strong> - We insist on giving our best effort in everything we undertake. </li>

                                    <li><strong>Golden Rule</strong> - We are believers of the Golden Rule. In all our dealings, we still strive to be friendly and courteous, as well as fair and compassionate.</li>

                                    <li><strong>Driven</strong> - We feel a sense of urgency on any matters related to our customers. We own problems and we are always responsive. We are customer drive.</li>
                                </ul>
                            </div>
                            <div class="clearall"></div>
                        </div>
                    </div>


                </div>
                
                    <?php get_sidebar(); ?>
               
            </div>
            <div class="clearall"></div>

            <div class="center-bar">
                <div class="wrapper">
                    <div class="column full">
                        <h2>Focus on technology.</h2>
                        <p>We create powerful, beautiful and intuitive digital products. We don't blindly follow trends. We take our understanding of the latest technologies and build the best solutions for our enterprise clients.</p>
                    </div>
                </div>
            </div>

            <!-- end of blue center -->
            <div class="">
                <div class="">
                    <div class="photo-container">
                        <h2>Our environment</h2>
                        <br>
                        <!-- bottom image container -->



                        <div class="">
                            <div class="image-wrapper-2">
                                <div class="column half nospace">
                                    <img src="/wp-content/themes/twentythirteen-child/img/about/group-office.jpg">
                                </div>
                                <div class="column half nospace">
                                    <img src="/wp-content/themes/twentythirteen-child/img/about/jeff-brandt.jpg">
                                </div>

                            </div>
                            <div class="image-wrapper-2">
                                <div class="column half nospace">
                                    <img src="/wp-content/themes/twentythirteen-child/img/about/staff-meeting.jpg">
                                </div>
                                <div class="column half nospace">
                                    <img src="/wp-content/themes/twentythirteen-child/img/about/corn-hole-2.jpg">
                                </div>
                            </div>
                            <div class="image-wrapper">
                                <div class="clearall"></div>
                                <div class="column half nospace">
                                    <img src="/wp-content/themes/twentythirteen-child/img/about/corn-hole-1.jpg">
                                </div>
                                <div class="column half nospace">
                                    <img src="/wp-content/themes/twentythirteen-child/img/about/james-prince.jpg">
                                </div>

                            </div>
                        </div>

                        <!-- end of about wrap -->

                    </div>
                </div>
            </div>
        </div>
        <div class="clearall"></div>
        <div class="call-out-bottom white-background">
            <div class="column full  white-background nospace">
                <h3>Bring your Idea to Life <br><a href="contact">Learn More</a></h3>
            </div>

        </div>
        <?php include("inc_blog_footer.php"); ?>
        <div class="clearall"></div>
        <?php get_footer(); ?>


    </body>
</html>