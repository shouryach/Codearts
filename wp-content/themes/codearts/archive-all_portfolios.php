<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage codearts
 */

get_header();

$description = get_the_archive_description();
 if ( have_posts() ) : ?>

<section style="background-image: url(<?php echo get_theme_file_uri(); ?>/assets/images/our-work-bg.webp)" alt="our-work-bg"
        class="all-work-section custom-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="all-work-content">
                        <h4>See all our works</h4>
                        <div class="all-work-content-btn">
                            <a href="#portfolio-section" class="custom-button-alt" href="javascript:void(0)">
                                View Our Works
                                <span><i class="las la-long-arrow-alt-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="portfolio-section" class="portfolio custom-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center">
                    <div class="custom-heading ms-md-0 ">
                        <h3 class="main-heading ms-md-0">Our Best Work</h3>
                    </div>
                </div>
                <?php

                $taxonomy = 'service-type';
                $terms = get_terms([
				    'taxonomy' => $taxonomy,
				    'hide_empty' => false,
				]);
				foreach ($terms as $term){
	                    $term_id = $term->term_id;
	                    $image = get_field( 'post_service_image', $taxonomy.'_'.$term_id);
                ?>
                <div class="col-md-6 col-sm-12 px-4 align-self-center">
                    <div class="project-box">
                        <div class="project-content">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $term->name; ?>">
                            <div class="project-name">
                                <h4><?php echo $term->name; ?></h4>
                                <div class="project-name-btn">
                                    <a class="custom-button-alt" href="<?php echo get_term_link($term); ?>">
                                        View Projects
                                        <span><i class="las la-long-arrow-alt-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>


<?php endif; ?>

<?php get_footer(); ?>
