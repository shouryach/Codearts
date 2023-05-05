<?php
/**
 * Template Name: Services
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

<?php $about_us= get_field('service_about_us'); ?>
<section style="background-image: url(<?php echo $about_us['service_about_bg_image']; ?>);" alt="career-bg" class="career-bg custom-pad">
        <div class="container">
            <div class="row">
              <?php $text_lines= $about_us['service_about_text_lines']; ?>
                <div class="col-md-12 align-self-center">
                    <div class="custom-heading ms-md-0 ">
                        <h3 class="main-heading ms-md-0"><?php echo $text_lines['service_about_title']; ?></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 align-self-center">
                    <div class="career-bg">
                        <div class="custom-paragraph">
                            <p class="demo"><?php echo $about_us['service_about_details']; ?></p>
                        </div>
                        <div class="underline-button">
                            <a href="<?php echo $text_lines['service_about_button_link']; ?>" class="custom-button-alt cb-white">
                              <?php echo $text_lines['service_about_button_text']; ?> <span class="demo"><i class="fas fa-long-arrow-alt-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $our_services= get_field('all_our_services'); ?>
    <section class="faq-accordion custom-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center">
                    <div class="custom-heading ms-md-0 ">
                        <h3 class="main-heading ms-md-0"><?php echo $our_services['service_main_heading']; ?></h3>
                    </div>
                    <div class="custom-paragraph">
                        <p class="demo"><?php echo $our_services['services_main_details']; ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 align-self-center">
                    <div class="faq-content">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <?php

                                    $taxonomy = 'service-type';
                                    $terms = get_terms([
                                          'taxonomy' => $taxonomy,
                                          'hide_empty' => false,
                                      ]);
                                      $i=1;
                                      foreach ($terms as $term){ // print_r($term);
                            ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading<?php echo $i; ?>">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse<?php echo $i; ?>" aria-expanded="false"
                                        aria-controls="flush-collapse<?php echo $i; ?>">
                                       <?php echo $term->name; ?>
                                    </button>
                                </h2>
                                <div id="flush-collapse<?php echo $i; ?>" class="accordion-collapse collapse"
                                    aria-labelledby="flush-heading<?php echo $i; ?>" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body"><?php echo $term->description; ?> 
                                        <div class="faq-btn"><a href="<?php echo get_term_link($term); ?>" class="custom-button-alt">Read More
                                            <span class="demo"><i class="fas fa-long-arrow-alt-right"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
<?php $service_approach= get_field('service_approach'); ?>
    <section class="service-approach custom-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="custom-heading ms-md-0 ">
                        <h5 class="sub-heading ms-md-0"><?php echo $service_approach['approach_sub_heading']; ?></h5>
                        <h3 class="main-heading ms-md-0"><?php echo $service_approach['approach_main_heading']; ?></h3>
                        <div class="custom-paragraph">
                            <p class="demo"><?php echo $service_approach['approach_details']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
              <?php for ($i=1; $i <=4 ; $i++) { ?>
                <div class="col-lg-6 col-md-12 align-self-center">
                    <div class="approach-wrap">
                        <div class="approach-content">
                            <h3><?php echo $service_approach['box_title_'.$i]; ?></h3>
                            <div class="custom-paragraph">
                                <p class="demo"><?php echo $service_approach['box_details_'.$i]; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
              <?php } ?>
            </div>
        </div>
    </section>
<?php $contact_us= get_field('service_contact_us'); ?>
    <section class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <div class="custom-heading ms-md-0 ">
                        <h3 class="main-heading ms-md-0"><?php echo $contact_us['contact_main_heading']; ?></h3>
                    </div>
                </div>
                <div class="col-lg-7 align-self-center">
                    <div class="contact-top-right">
                        <p class="paragraph"><?php echo $contact_us['contact_sub_heading']; ?></p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="contact-form">
                        <?php $contact_form= $contact_us['contact_form_shortcode']; echo do_shortcode($contact_form);  ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php
endwhile; // End of the loop.
get_footer();