<?php
/**
 * Template Name: Service Inner
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage codearts
 */
get_header(); 
$term_slug= get_queried_object()->slug;
$term_id= get_queried_object()->term_id;
?>

    <section class="technology custom-pad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="technology-content">
              <div class="technology-image">
                <div class="row">
                  <div class="col-md-12">
                    <div class="owl-carousel owl-theme" id="technology-carousel">
                     <?php
                      $params = array(
                             'post_type'         => 'all_portfolios',
                             'post_status'       => 'publish',
                             'orderby'           => 'ASC',
                             'tax_query' => array(
                                                    array(
                                                        'taxonomy' => 'service-type',
                                                        'field' => 'slug',
                                                        'terms' => $term_slug,
                                                    ),
                                                ),
                        );

                        $query = new WP_Query($params);
                        if($query->have_posts()): while ($query->have_posts()): $query->the_post(); //echo $count = $query->post_count; ?>
                      <div class="item">
                        <div class="owl-images">
                          <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="card-img-top" alt="<?php echo get_the_title(); ?>">
                        </div>
                        <div class="tech-image-title-wrap">
                          <h5 class="tech-image-title"><?php echo get_the_title(); ?></h5>
                           <a href="<?php echo get_the_permalink(); ?>" class="custom-button">Learn More </a>
                        </div>
                      </div>
                      <?php endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php $grow_business= get_field('grow_business',440); ?>
    <section id="service-inner-scroll" class="service-inner-intro custom-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center">
                    <div class="custom-heading ms-md-0 ">
                        <h3 class="main-heading ms-md-0"><?php echo $grow_business['grow_main_heading']; ?></h3>
                    </div>
                    <div class="service-inner-intro-content">
                        <div class="custom-paragraph">
                           <?php echo $grow_business['grow_content']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="service-inner-highlight custom-pad">
        <div class="container">
            <div class="row">
                <?php
                      $params = array(
                             'post_type'         => 'testimonials',
                             'post_status'       => 'publish',
                             'posts_per_page'    => 1,
                             'orderby'           => 'date DESC',
                             'tax_query' => array(
                                                    array(
                                                        'taxonomy' => 'type',
                                                        'field' => 'slug',
                                                        'terms' => $term_slug,
                                                    ),
                                                ),
                        );

                        $query = new WP_Query($params);
                        if($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>
                        <div class="col-md-12 align-self-center">
                            <div class="service-inner-highlight-content">
                                <div class="custom-paragraph">
                                    <p class="demo">“<?php echo get_the_content(); ?>”<b>-<?php echo get_the_title(); ?></b></p>
                                </div>
                                <ul class="fivestar">
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                </ul>
                            </div>
                        </div>
                <?php endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>
            </div>
        </div>
    </section>

<?php $service_category= get_field('service_category',440); ?>
    <section class="faq-accordion service-inner-faq custom-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center">
                    <div class="custom-heading ms-md-0 ">
                        <h3 class="main-heading ms-md-0"><?php echo $service_category['service_main_heading']; ?></h3>
                    </div>
                    <div class="custom-paragraph">
                        <p class="demo"><?php echo $service_category['service_content']; ?></p>
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
                                          'exclude' => $term_id,
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
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body"><?php echo $term->description; ?> 
                                    <div class="faq-btn">
                                        <a href="<?php echo get_term_link($term); ?>" class="custom-button-alt">Read More
                                                <span class="demo"><i class="fas fa-long-arrow-alt-right"></i></span>
                                        </a>
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
    </section>

<?php $fast_service= get_field('fast_service',440); ?>
    <section class="service-inner-best custom-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center">
                    <div class="service-inner-best-content">
                        <div class="service-inner-top">
                            <h3><?php echo $fast_service['fast_main_heading']; ?></h3>
                            <div class="custom-paragraph">
                                <?php echo $fast_service['fast_content']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php

get_footer();