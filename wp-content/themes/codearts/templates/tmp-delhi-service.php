<?php
/**
 * Template Name: Service In Delhi
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage codearts
 */
get_header(); 
?>

<section class="delhi-service custom-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center">
                    <div id="delhi-bangalore-carousel" class="owl-carousel owl-theme">
                        <?php $all_blogs= get_field('loc_featured_blogs'); foreach ($all_blogs as $each_blogs) { ?>
                        <div class="item">
                            <div class="places-service-carousel">
                                <div class="places-service-content">
                                    <img src="<?php echo get_the_post_thumbnail_url($each_blogs); ?>" alt="<?php echo get_the_title($each_blogs); ?>">
                                    <h3><?php echo get_the_title($each_blogs); ?></h3>
                                    <div class="custom-paragraph">
                                        <p class="demo"><?php 
                                        $content_post = get_post($each_blogs);
                                        $content = $content_post->post_content;
                                        $content = apply_filters('the_content', $content);
                                        $content = str_replace(']]>', ']]&gt;', $content);
                                        echo wp_trim_words( $content, 60, '...'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php $loc_service= get_field('loc_service'); ?>
    <section class="digital-service custom-pad">
        <div class="container">
            <div class="row">
                <div class="custom-heading">
                    <h3 class="main-heading"><?php echo $loc_service['loc_titles']; ?></h3>
                </div>
                <?php
                $cat_service_ids = $loc_service['loc_featured_service']; //print_r($cat_service);
                $cat_dm_ids = $loc_service['featured_digital_marketing']; //print_r($cat_dm_ids);
                //$all_keys = array_merge($cat_service_ids, $cat_dm_ids);  // print_r($c);
                $all_keys = (object) array_merge((array) $cat_service_ids, (array) $cat_dm_ids);  //print_r($all_keys);



                foreach ($all_keys as $key) {
                       $term_id =  $key->term_id; // print_r($term_id);
                       $taxonomy = $key->taxonomy;  //print_r($taxonomy);
                       
                       $image = get_field('post_service_logo', $taxonomy . '_' . $term_id);  //print_r($image);
                       
                    
                ?>
                <div class="col-lg-3 col-md-6 px-4 align-self-center">
                    <div class="digital-service-box">
                        <div class="digital-service-content">
                            <img src="<?php  echo $image; ?>" alt="<?php echo $key->name; ?>">
                            <h4><?php echo $key->name; ?></h4>
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
                        <h5 class="sub-heading ms-md-0"><?php echo $contact_us['contact_title']; ?></h5>
                        <h3 class="main-heading ms-md-0"><?php echo $contact_us['contact_sub_title']; ?></h3>
                    </div>
                </div>
                <div class="col-lg-7 align-self-center">
                    <div class="contact-top-right">
                        <p class="paragraph"><?php echo $contact_us['contact_detail']; ?></p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="contact-form">
                         <?php $contact_form= $contact_us['contact_shortcode']; echo do_shortcode($contact_form);  ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php

get_footer();