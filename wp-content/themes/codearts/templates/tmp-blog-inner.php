<?php

/**

 * Template Name: Blog Inner

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post

 *

 * @package WordPress

 * @subpackage codearts

 */

get_header(); 

while ( have_posts() ) :

  the_post();

?>


<section class="blog-inner blog-start custom-pad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 px-4">
                    <div class="blog-box">
                        <div class="blog-box-main-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/images/blog-1.webp" alt="blog-1">
                        </div>
                        <div class="blog-box-content">
                            <h5>Diversity In Image, Google New Image Ranking Signal, Inclusive Schema</h5>
                            <ul class="blog-list">
                                <li><span><i class="fas fa-user"></i> <a href="#">Admin</a></span></li>
                                <li><span><i class="fas fa-file"></i> <a href="#">Blog</a></span></li>
                                <li><span><i class="fas fa-comments"></i> <a href="#">0</a></span></li>
                            </ul>
                            <div class="custom-paragraph">
                                <p class="demo">Diversity In Image , Google New Ranking Signal System Seeing a
                                    reflection of yourself in the world around you in real life, media, or online is
                                    essential to how you perceive yourself. We know that image-based technologies on the
                                    web have historically left people of colour feeling overlooked and misrepresented.
                                    Last year, we announced as […]</p>
                            </div>
                            <div class="custom-paragraph">
                                <p class="demo">Diversity In Image. We know that image-based technologies on the
                                    web have historically left people of colour feeling overlooked and misrepresented.
                                    Last year, we announced as […]</p>
                            </div>
                            <div class="custom-paragraph">
                                <p class="demo">Diversity In Image , Google New Ranking Signal System Seeing a
                                    reflection of yourself in the world around you in real life, media, or online is
                                    essential to how you perceive yourself. We know that image-based technologies on the
                                    web have historically.We know that image-based technologies on the
                                    web have historically.overlooked and misrepresented.
                                    Last year, we announced as […]</p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-inner-extra">
                        <div class="blog-box">
                            <div class="blog-client">
                                <span><i class="fas fa-quote-left"></i></span>
                                <div class="custom-paragraph">
                                    <p class="demo">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore
                                        perferendis vero animi eum iste. Ex. Lorem, ipsum dolor sit amet consectetur
                                        adipisicing elit. Reprehenderit voluptatibus, quos at quaerat repudiandae
                                        dignissimos adipisci incidunt! Commodi eligendi ratione sit illo qui ab at! </p>
                                </div>
                            </div>
                            <div class="blog-inner-comment">
                                <div class="custom-heading ms-md-0 ">
                                    <h3 class="main-heading ms-md-0">Leave A Comment</h3>
                                </div>
                                <form>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="formGroupExampleInput"
                                            placeholder="Your Name">
                                    </div>
                                    <div class="mb-3">
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="Your Email">
                                    </div>
                                    <div class="mb-3">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                            placeholder="Write your comment"></textarea>
                                    </div>
                                    <div class="blog-inner-btn">
                                        <input class="custom-button" type="button" value="Post Comment">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 px-4">
                    <div class="blog-categories">
                        <h4>Categories</h4>
                        <ul>
                            <li><a href="#">App Design</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Logo Design</a></li>
                            <li><a href="#">Poster Design</a></li>
                            <li><a href="#">Website Design</a></li>
                            <li><a href="#">Website Development</a></li>
                        </ul>
                    </div>
                    <div class="blog-news">
                        <h3>Recent News</h3>
                        <h4>Diversity In Image, Google New Image, Ranking Signal, Inclusive Schema</h4>
                        <h5>May 28,2022 by admin</h5>
                    </div>
                    <div class="other-blogs">
                        <h4>Other Blogs</h4>
                        <div class="other-blogs-content">
                            <div class="other-blogs-content-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/delhi-service-1.webp" alt="delhi-service-1">
                                <div class="other-blogs-btn">
                                    <a class="custom-button" href="javascript:void(0)">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="other-blogs-content other-blogs-img-2">
                            <div class="other-blogs-content-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/delhi-service-2.webp" alt="delhi-service-3">
                                <div class="other-blogs-btn">
                                    <a class="custom-button" href="javascript:void(0)">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="other-blogs-content">
                            <div class="other-blogs-content-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/delhi-service-3.webp" alt="delhi-service-3">
                                <div class="other-blogs-btn">
                                    <a class="custom-button" href="javascript:void(0)">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




<?php

endwhile; // End of the loop.

get_footer();