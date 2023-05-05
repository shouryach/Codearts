<?php

/**

 * Template Name: Project Listing

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



<section class="project-listing">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12 px-3">
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
                </div>
                <div class="col-lg-8 col-12 px-3">
                    <div class="show-project">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="custom-heading ms-md-0 ">
                                        <h3 class="main-heading ms-md-0">App Design</h3>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12 px-3">
                                    <div class="project-listing-content">
                                        <div class="project-listing-content-box">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project-1.webp" alt="project-1">
                                        </div>
                                        <h3 class="project-listing-title">Lorem Ipsum Dummy</h3>
                                        <div class="project-listing-content-btn">
                                            <a href="#" class="custom-button-alt" href="javascript:void(0)">
                                                See Details
                                                <span><i class="las la-long-arrow-alt-right"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12 px-3">
                                    <div class="project-listing-content">
                                        <div class="project-listing-content-box">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project-2.webp" alt="project-2">
                                        </div>
                                        <h3 class="project-listing-title">Lorem Ipsum Dummy</h3>
                                        <div class="project-listing-content-btn">
                                            <a href="#" class="custom-button-alt" href="javascript:void(0)">
                                                See Details
                                                <span><i class="las la-long-arrow-alt-right"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="project-listing-btn">
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