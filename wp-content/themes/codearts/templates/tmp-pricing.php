<?php

/**

 * Template Name: pricing

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



<section class="pricing-content custom-pad">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="custom-heading ms-md-0 ">
                        <h3 class="main-heading ms-md-0">Get your services</h3>
                        <div class="custom-paragraph">
                            <p class="demo">We believe in building lasting partnerships with our clients based on
                                trust and deep understanding of their changing business needs. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pricing-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 px-3 align-items-center">
                        <div class="pricing-inner-box">
                            <div class="pricing-inner-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-1.webp" alt="digital-service-1">
                            </div>
                            <h3>Web Design</h3>
                            <div class="custom-paragraph">
                                <p class="demo">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa impedit
                                    voluptate eius consectetur reiciendis error, mollitia architecto, iure dolorem rem
                                    dolores neque. Fuga nobis quia autem laudantium magni eum quo earum nihil nisi,
                                    quibusdam quae.</p>
                            </div>
                            <div class="pricing-inner-btn">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">
                                    Know More
                                </button>
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                            <form>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                                        placeholder="Name">
                                                </div>
                                                <div class="mb-3">
                                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp" placeholder="Email">
                                                </div>
                                                <div class="mb-3">
                                                    <input type="password" class="form-control"
                                                        id="exampleInputPassword1" placeholder="Password">
                                                </div>
                                                <div class="mb-3">
                                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                                        rows="3" placeholder="Meassage"></textarea>
                                                </div>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Choose your pricing option</option>
                                                    <option value="1">$15</option>
                                                    <option value="2">$35</option>
                                                    <option value="3">$60</option>
                                                </select>
                                                <div class="mb-3 form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">Verify</label>
                                                </div>
                                                <div class="pricing-inner-modal-button">
                                                    <input class="custom-button" type="button" value="Submit">
                                                </div>
                                            </form>
                                            <div class="pricing-inner-related-service">
                                                <div class="related-pricing-carousel">
                                                    <h4>Related services</h4>
                                                    <div class="owl-carousel owl-theme technology-carousel"
                                                        id="pricing-inner-carousel">
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-1.webp"
                                                                    alt="digital-service-1">
                                                                <a href="#">
                                                                    <h3>Web Design</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-2.webp"
                                                                    alt="digital-service-2">
                                                                <a href="#">
                                                                    <h3>App Design</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-3.webp"
                                                                    alt="digital-service-3">
                                                                <a href="#">
                                                                    <h3>Ui/Ux Design</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-4.webp"
                                                                    alt="digital-service-4">
                                                                <a href="#">
                                                                    <h3>Web Development</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-5.webp"
                                                                    alt="digital-service-5">
                                                                <a href="#">
                                                                    <h3>Search Engine Optimization</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-6.webp"
                                                                    alt="digital-service-6">
                                                                <a href="#">
                                                                    <h3>SEM/PPC</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-7.webp"
                                                                    alt="digital-service-7">
                                                                <a href="#">
                                                                    <h3>Content Marketing</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-8.webp"
                                                                    alt="digital-service-8">
                                                                <a href="#">
                                                                    <h3>Social Ads</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 px-3 align-items-center">
                        <div class="pricing-inner-box">
                            <div class="pricing-inner-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-2.webp" alt="digital-service-2">
                            </div>
                            <h3>App Design</h3>
                            <div class="custom-paragraph">
                                <p class="demo">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa impedit
                                    voluptate eius consectetur reiciendis error, mollitia architecto, iure dolorem rem
                                    dolores neque. Fuga nobis quia autem laudantium magni eum quo earum nihil nisi,
                                    quibusdam quae.</p>
                            </div>
                            <div class="pricing-inner-btn">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">
                                    Know More
                                </button>
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                            <form>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                                        placeholder="Name">
                                                </div>
                                                <div class="mb-3">
                                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp" placeholder="Email">
                                                </div>
                                                <div class="mb-3">
                                                    <input type="password" class="form-control"
                                                        id="exampleInputPassword1" placeholder="Password">
                                                </div>
                                                <div class="mb-3">
                                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                                        rows="3" placeholder="Meassage"></textarea>
                                                </div>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Choose your pricing option</option>
                                                    <option value="1">$15</option>
                                                    <option value="2">$35</option>
                                                    <option value="3">$60</option>
                                                </select>
                                                <div class="mb-3 form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">Verify</label>
                                                </div>
                                                <div class="pricing-inner-modal-button">
                                                    <input class="custom-button" type="button" value="Submit">
                                                </div>
                                            </form>
                                            <div class="pricing-inner-related-service">
                                                <div class="related-pricing-carousel">
                                                    <h4>Related services</h4>
                                                    <div class="owl-carousel owl-theme technology-carousel"
                                                        id="pricing-inner-carousel">
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-1.webp"
                                                                    alt="digital-service-1">
                                                                <a href="#">
                                                                    <h3>Web Design</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-2.webp"
                                                                    alt="digital-service-2">
                                                                <a href="#">
                                                                    <h3>App Design</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-3.webp"
                                                                    alt="digital-service-3">
                                                                <a href="#">
                                                                    <h3>Ui/Ux Design</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-4.webp"
                                                                    alt="digital-service-4">
                                                                <a href="#">
                                                                    <h3>Web Development</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-5.webp"
                                                                    alt="digital-service-5">
                                                                <a href="#">
                                                                    <h3>Search Engine Optimization</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-6.webp"
                                                                    alt="digital-service-6">
                                                                <a href="#">
                                                                    <h3>SEM/PPC</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-7.webp"
                                                                    alt="digital-service-7">
                                                                <a href="#">
                                                                    <h3>Content Marketing</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-8.webp"
                                                                    alt="digital-service-8">
                                                                <a href="#">
                                                                    <h3>Social Ads</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 px-3 align-items-center">
                        <div class="pricing-inner-box">
                            <div class="pricing-inner-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-3.webp" alt="digital-service-3">
                            </div>
                            <h3>Ui/Ux Design</h3>
                            <div class="custom-paragraph">
                                <p class="demo">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa impedit
                                    voluptate eius consectetur reiciendis error, mollitia architecto, iure dolorem rem
                                    dolores neque. Fuga nobis quia autem laudantium magni eum quo earum nihil nisi,
                                    quibusdam quae.</p>
                            </div>
                            <div class="pricing-inner-btn">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">
                                    Know More
                                </button>
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                            <form>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                                        placeholder="Name">
                                                </div>
                                                <div class="mb-3">
                                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp" placeholder="Email">
                                                </div>
                                                <div class="mb-3">
                                                    <input type="password" class="form-control"
                                                        id="exampleInputPassword1" placeholder="Password">
                                                </div>
                                                <div class="mb-3">
                                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                                        rows="3" placeholder="Meassage"></textarea>
                                                </div>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Choose your pricing option</option>
                                                    <option value="1">$15</option>
                                                    <option value="2">$35</option>
                                                    <option value="3">$60</option>
                                                </select>
                                                <div class="mb-3 form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">Verify</label>
                                                </div>
                                                <div class="pricing-inner-modal-button">
                                                    <input class="custom-button" type="button" value="Submit">
                                                </div>
                                            </form>
                                            <div class="pricing-inner-related-service">
                                                <div class="related-pricing-carousel">
                                                    <h4>Related services</h4>
                                                    <div class="owl-carousel owl-theme technology-carousel"
                                                        id="pricing-inner-carousel">
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-1.webp"
                                                                    alt="digital-service-1">
                                                                <a href="#">
                                                                    <h3>Web Design</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-2.webp"
                                                                    alt="digital-service-2">
                                                                <a href="#">
                                                                    <h3>App Design</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-3.webp"
                                                                    alt="digital-service-3">
                                                                <a href="#">
                                                                    <h3>Ui/Ux Design</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-4.webp"
                                                                    alt="digital-service-4">
                                                                <a href="#">
                                                                    <h3>Web Development</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-5.webp"
                                                                    alt="digital-service-5">
                                                                <a href="#">
                                                                    <h3>Search Engine Optimization</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-6.webp"
                                                                    alt="digital-service-6">
                                                                <a href="#">
                                                                    <h3>SEM/PPC</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-7.webp"
                                                                    alt="digital-service-7">
                                                                <a href="#">
                                                                    <h3>Content Marketing</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-8.webp"
                                                                    alt="digital-service-8">
                                                                <a href="#">
                                                                    <h3>Social Ads</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 px-3 align-items-center">
                        <div class="pricing-inner-box">
                            <div class="pricing-inner-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-4.webp" alt="digital-service-4">
                            </div>
                            <h3>Web Development</h3>
                            <div class="custom-paragraph">
                                <p class="demo">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa impedit
                                    voluptate eius consectetur reiciendis error, mollitia architecto, iure dolorem rem
                                    dolores neque. Fuga nobis quia autem laudantium magni eum quo earum nihil nisi,
                                    quibusdam quae.</p>
                            </div>
                            <div class="pricing-inner-btn">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">
                                    Know More
                                </button>
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                            <form>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                                        placeholder="Name">
                                                </div>
                                                <div class="mb-3">
                                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp" placeholder="Email">
                                                </div>
                                                <div class="mb-3">
                                                    <input type="password" class="form-control"
                                                        id="exampleInputPassword1" placeholder="Password">
                                                </div>
                                                <div class="mb-3">
                                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                                        rows="3" placeholder="Meassage"></textarea>
                                                </div>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Choose your pricing option</option>
                                                    <option value="1">$15</option>
                                                    <option value="2">$35</option>
                                                    <option value="3">$60</option>
                                                </select>
                                                <div class="mb-3 form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">Verify</label>
                                                </div>
                                                <div class="pricing-inner-modal-button">
                                                    <input class="custom-button" type="button" value="Submit">
                                                </div>
                                            </form>
                                            <div class="pricing-inner-related-service">
                                                <div class="related-pricing-carousel">
                                                    <h4>Related services</h4>
                                                    <div class="owl-carousel owl-theme technology-carousel"
                                                        id="pricing-inner-carousel">
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-1.webp"
                                                                    alt="digital-service-1">
                                                                <a href="#">
                                                                    <h3>Web Design</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-2.webp"
                                                                    alt="digital-service-2">
                                                                <a href="#">
                                                                    <h3>App Design</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-3.webp"
                                                                    alt="digital-service-3">
                                                                <a href="#">
                                                                    <h3>Ui/Ux Design</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-4.webp"
                                                                    alt="digital-service-4">
                                                                <a href="#">
                                                                    <h3>Web Development</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-5.webp"
                                                                    alt="digital-service-5">
                                                                <a href="#">
                                                                    <h3>Search Engine Optimization</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-6.webp"
                                                                    alt="digital-service-6">
                                                                <a href="#">
                                                                    <h3>SEM/PPC</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-7.webp"
                                                                    alt="digital-service-7">
                                                                <a href="#">
                                                                    <h3>Content Marketing</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-8.webp"
                                                                    alt="digital-service-8">
                                                                <a href="#">
                                                                    <h3>Social Ads</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 px-3 align-items-center">
                        <div class="pricing-inner-box">
                            <div class="pricing-inner-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-5.webp" alt="digital-service-5">
                            </div>
                            <h3>Search Engine Optimization</h3>
                            <div class="custom-paragraph">
                                <p class="demo">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa impedit
                                    voluptate eius consectetur reiciendis error, mollitia architecto, iure dolorem rem
                                    dolores neque. Fuga nobis quia autem laudantium magni eum quo earum nihil nisi,
                                    quibusdam quae.</p>
                            </div>
                            <div class="pricing-inner-btn">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">
                                    Know More
                                </button>
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                            <form>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                                        placeholder="Name">
                                                </div>
                                                <div class="mb-3">
                                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp" placeholder="Email">
                                                </div>
                                                <div class="mb-3">
                                                    <input type="password" class="form-control"
                                                        id="exampleInputPassword1" placeholder="Password">
                                                </div>
                                                <div class="mb-3">
                                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                                        rows="3" placeholder="Meassage"></textarea>
                                                </div>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Choose your pricing option</option>
                                                    <option value="1">$15</option>
                                                    <option value="2">$35</option>
                                                    <option value="3">$60</option>
                                                </select>
                                                <div class="mb-3 form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">Verify</label>
                                                </div>
                                                <div class="pricing-inner-modal-button">
                                                    <input class="custom-button" type="button" value="Submit">
                                                </div>
                                            </form>
                                            <div class="pricing-inner-related-service">
                                                <div class="related-pricing-carousel">
                                                    <h4>Related services</h4>
                                                    <div class="owl-carousel owl-theme technology-carousel"
                                                        id="pricing-inner-carousel">
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-1.webp"
                                                                    alt="digital-service-1">
                                                                <a href="#">
                                                                    <h3>Web Design</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-2.webp"
                                                                    alt="digital-service-2">
                                                                <a href="#">
                                                                    <h3>App Design</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-3.webp"
                                                                    alt="digital-service-3">
                                                                <a href="#">
                                                                    <h3>Ui/Ux Design</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-4.webp"
                                                                    alt="digital-service-4">
                                                                <a href="#">
                                                                    <h3>Web Development</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-5.webp"
                                                                    alt="digital-service-5">
                                                                <a href="#">
                                                                    <h3>Search Engine Optimization</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-6.webp"
                                                                    alt="digital-service-6">
                                                                <a href="#">
                                                                    <h3>SEM/PPC</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-7.webp"
                                                                    alt="digital-service-7">
                                                                <a href="#">
                                                                    <h3>Content Marketing</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-8.webp"
                                                                    alt="digital-service-8">
                                                                <a href="#">
                                                                    <h3>Social Ads</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 px-3 align-items-center">
                        <div class="pricing-inner-box">
                            <div class="pricing-inner-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-6.webp" alt="digital-service-6">
                            </div>
                            <h3>SEM/PPC</h3>
                            <div class="custom-paragraph">
                                <p class="demo">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa impedit
                                    voluptate eius consectetur reiciendis error, mollitia architecto, iure dolorem rem
                                    dolores neque. Fuga nobis quia autem laudantium magni eum quo earum nihil nisi,
                                    quibusdam quae.</p>
                            </div>
                            <div class="pricing-inner-btn">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">
                                    Know More
                                </button>
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                            <form>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                                        placeholder="Name">
                                                </div>
                                                <div class="mb-3">
                                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp" placeholder="Email">
                                                </div>
                                                <div class="mb-3">
                                                    <input type="password" class="form-control"
                                                        id="exampleInputPassword1" placeholder="Password">
                                                </div>
                                                <div class="mb-3">
                                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                                        rows="3" placeholder="Meassage"></textarea>
                                                </div>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Choose your pricing option</option>
                                                    <option value="1">$15</option>
                                                    <option value="2">$35</option>
                                                    <option value="3">$60</option>
                                                </select>
                                                <div class="mb-3 form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">Verify</label>
                                                </div>
                                                <div class="pricing-inner-modal-button">
                                                    <input class="custom-button" type="button" value="Submit">
                                                </div>
                                            </form>
                                            <div class="pricing-inner-related-service">
                                                <div class="related-pricing-carousel">
                                                    <h4>Related services</h4>
                                                    <div class="owl-carousel owl-theme technology-carousel"
                                                        id="pricing-inner-carousel">
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-1.webp"
                                                                    alt="digital-service-1">
                                                                <a href="#">
                                                                    <h3>Web Design</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-2.webp"
                                                                    alt="digital-service-2">
                                                                <a href="#">
                                                                    <h3>App Design</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-3.webp"
                                                                    alt="digital-service-3">
                                                                <a href="#">
                                                                    <h3>Ui/Ux Design</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-4.webp"
                                                                    alt="digital-service-4">
                                                                <a href="#">
                                                                    <h3>Web Development</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-5.webp"
                                                                    alt="digital-service-5">
                                                                <a href="#">
                                                                    <h3>Search Engine Optimization</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-6.webp"
                                                                    alt="digital-service-6">
                                                                <a href="#">
                                                                    <h3>SEM/PPC</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-7.webp"
                                                                    alt="digital-service-7">
                                                                <a href="#">
                                                                    <h3>Content Marketing</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-8.webp"
                                                                    alt="digital-service-8">
                                                                <a href="#">
                                                                    <h3>Social Ads</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 px-3 align-items-center">
                        <div class="pricing-inner-box">
                            <div class="pricing-inner-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-7.webp" alt="digital-service-7">
                            </div>
                            <h3>Content Marketing</h3>
                            <div class="custom-paragraph">
                                <p class="demo">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa impedit
                                    voluptate eius consectetur reiciendis error, mollitia architecto, iure dolorem rem
                                    dolores neque. Fuga nobis quia autem laudantium magni eum quo earum nihil nisi,
                                    quibusdam quae.</p>
                            </div>
                            <div class="pricing-inner-btn">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">
                                    Know More
                                </button>
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                            <form>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                                        placeholder="Name">
                                                </div>
                                                <div class="mb-3">
                                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp" placeholder="Email">
                                                </div>
                                                <div class="mb-3">
                                                    <input type="password" class="form-control"
                                                        id="exampleInputPassword1" placeholder="Password">
                                                </div>
                                                <div class="mb-3">
                                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                                        rows="3" placeholder="Meassage"></textarea>
                                                </div>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Choose your pricing option</option>
                                                    <option value="1">$15</option>
                                                    <option value="2">$35</option>
                                                    <option value="3">$60</option>
                                                </select>
                                                <div class="mb-3 form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">Verify</label>
                                                </div>
                                                <div class="pricing-inner-modal-button">
                                                    <input class="custom-button" type="button" value="Submit">
                                                </div>
                                            </form>
                                            <div class="pricing-inner-related-service">
                                                <div class="related-pricing-carousel">
                                                    <h4>Related services</h4>
                                                    <div class="owl-carousel owl-theme technology-carousel"
                                                        id="pricing-inner-carousel">
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-1.webp"
                                                                    alt="digital-service-1">
                                                                <a href="#">
                                                                    <h3>Web Design</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-2.webp"
                                                                    alt="digital-service-2">
                                                                <a href="#">
                                                                    <h3>App Design</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-3.webp"
                                                                    alt="digital-service-3">
                                                                <a href="#">
                                                                    <h3>Ui/Ux Design</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-4.webp"
                                                                    alt="digital-service-4">
                                                                <a href="#">
                                                                    <h3>Web Development</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-5.webp"
                                                                    alt="digital-service-5">
                                                                <a href="#">
                                                                    <h3>Search Engine Optimization</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-6.webp"
                                                                    alt="digital-service-6">
                                                                <a href="#">
                                                                    <h3>SEM/PPC</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-7.webp"
                                                                    alt="digital-service-7">
                                                                <a href="#">
                                                                    <h3>Content Marketing</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-8.webp"
                                                                    alt="digital-service-8">
                                                                <a href="#">
                                                                    <h3>Social Ads</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 px-3 align-items-center">
                        <div class="pricing-inner-box">
                            <div class="pricing-inner-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-8.webp" alt="digital-service-8">
                            </div>
                            <h3>Social Ads</h3>
                            <div class="custom-paragraph">
                                <p class="demo">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa impedit
                                    voluptate eius consectetur reiciendis error, mollitia architecto, iure dolorem rem
                                    dolores neque. Fuga nobis quia autem laudantium magni eum quo earum nihil nisi,
                                    quibusdam quae.</p>
                            </div>
                            <div class="pricing-inner-btn">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">
                                    Know More
                                </button>
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                            <form>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                                        placeholder="Name">
                                                </div>
                                                <div class="mb-3">
                                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp" placeholder="Email">
                                                </div>
                                                <div class="mb-3">
                                                    <input type="password" class="form-control"
                                                        id="exampleInputPassword1" placeholder="Password">
                                                </div>
                                                <div class="mb-3">
                                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                                        rows="3" placeholder="Meassage"></textarea>
                                                </div>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Choose your pricing option</option>
                                                    <option value="1">$15</option>
                                                    <option value="2">$35</option>
                                                    <option value="3">$60</option>
                                                </select>
                                                <div class="mb-3 form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">Verify</label>
                                                </div>
                                                <div class="pricing-inner-modal-button">
                                                    <input class="custom-button" type="button" value="Submit">
                                                </div>
                                            </form>
                                            <div class="pricing-inner-related-service">
                                                <div class="related-pricing-carousel">
                                                    <h4>Related services</h4>
                                                    <div class="owl-carousel owl-theme technology-carousel"
                                                        id="pricing-inner-carousel">
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-1.webp"
                                                                    alt="digital-service-1">
                                                                <a href="#">
                                                                    <h3>Web Design</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-2.webp"
                                                                    alt="digital-service-2">
                                                                <a href="#">
                                                                    <h3>App Design</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-3.webp"
                                                                    alt="digital-service-3">
                                                                <a href="#">
                                                                    <h3>Ui/Ux Design</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-4.webp"
                                                                    alt="digital-service-4">
                                                                <a href="#">
                                                                    <h3>Web Development</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-5.webp"
                                                                    alt="digital-service-5">
                                                                <a href="#">
                                                                    <h3>Search Engine Optimization</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-6.webp"
                                                                    alt="digital-service-6">
                                                                <a href="#">
                                                                    <h3>SEM/PPC</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-7.webp"
                                                                    alt="digital-service-7">
                                                                <a href="#">
                                                                    <h3>Content Marketing</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="pricing-inner-carousel-content">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/digital-service-8.webp"
                                                                    alt="digital-service-8">
                                                                <a href="#">
                                                                    <h3>Social Ads</h3>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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