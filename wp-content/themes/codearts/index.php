<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage codearts
 */

get_header();
if ( have_posts() ) { ?>

<section class="blog-start custom-pad">
        <div class="container">
            <div class="row">
                 <div class="col-lg-8 col-md-12 px-4 align-self-center">
                	<?php
                            $published_posts = new WP_Query([
                              'post_type' => 'post',
                              'posts_per_page' => 2,
                              'orderby' => 'date',
                              'order' => 'DESC',
                              'paged' => 1,
                            ]);
                        $i=1;
                        if($published_posts->have_posts()): ?>
                        <div class="publication-list">
                        <?php
                        while ($published_posts->have_posts()) : $published_posts->the_post();
				        ?>
                    <div class="blog-box">
                        <div class="blog-box-content <?php if($i != 1){ echo 'second-blog-box'; } ?>">
                            <h5><?php echo get_the_title(); ?></h5>
                            <ul class="blog-list">
                                <li><span><i class="fas fa-user"></i> <a href="#"><?php echo get_the_author(); ?></a></span></li>
                                <li><span><i class="fas fa-calendar-alt"></i> <a href="#"><?php echo get_the_date( 'F j, Y g:i a' ); ?></a></span></li>
                                <li><span><i class="fas fa-file"></i> <a href="#">Blog</a></span></li>
                                <li><span><i class="fas fa-comments"></i> <a href="#">0</a></span></li>
                            </ul>
                            <div class="custom-paragraph">
                                <p class="demo">
                                	<?php $my_content = apply_filters( 'the_content', get_the_content() );
											echo wp_trim_words( $my_content, 40); ?>
								</p>
                            </div>
                            <div class="blog-btn">
                                <a class="custom-button" href="<?php echo get_the_permalink(); ?>">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <?php $i++;
		                endwhile;?>
                    </div>
                        <?php
                        endif;
		        		wp_reset_postdata();
			        ?>
			        <div class="btn__wrapper">
                      <a href="#!" class="btn btn__primary custom-button" id="load-more">Load more</a>
                    </div>
                    </div>
                
                <div class="col-lg-4 col-12 px-4">
                    <div class="blog-categories">
                        <h4>Categories</h4>
                        <ul>
                        	<?php
                        	$taxonomy = 'service-type';
                        	$terms = get_terms([
							    'taxonomy' => $taxonomy,
							    'hide_empty' => false,
							]);
							foreach ($terms as $term){
                        	?>
                            <li><a href="<?php echo get_term_link($term); ?>" alt="<?php echo $term->slug; ?>"><?php echo $term->name; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="blog-news">
                        <h3>Recent News</h3>
                        <h4>Diversity In Image, Google New Image, Ranking Signal, Inclusive Schema</h4>
                        <h5>May 28,2022 by admin</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="latest-blog custom-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center">
                    <div class="custom-heading ms-md-0 ">
                        <h3 class="main-heading ms-md-0">Latest Blogs</h3>
                    </div>
                </div>
            </div>
            <div class="blog-content-carousel">
                <div class="row">
                    <div class="col-md-12 align-self-center">
                        <div id="blog-carousel" class="owl-carousel owl-theme">
                        	<?php
				                    $args = array(
				                     'numberposts' => 8,
				                     'offset' => 0,
				                     'orderby' => 'post_date',
				                     'order' => 'DESC',
				                     'post_type' => 'post',
				                     'post_status' => 'publish',
				                     'suppress_filters' => true
				                    );
				                    $all_posts = wp_get_recent_posts( $args, ARRAY_A );
				                    foreach ( $all_posts as $each_post ) {
				                     $image = wp_get_attachment_image_src( get_post_thumbnail_id( $each_post[ 'ID' ] ), 'single-post-thumbnail' );
				                        //print_r($each_post);
				               ?>
                            <div class="item">
                                <div class="latest-blog-box">
                                    <div class="latest-blog-content">
                                        <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title($each_post['ID']); ?>">
                                        <h4><?php echo get_the_title($each_post['ID']); ?></h4>
                                        <ul class="blog-list">
                                            <li><span><i class="fas fa-user"></i> <a href="#">Admin</a></span></li>
                                            <li><span><i class="fas fa-file"></i> <a href="#">Blog</a></span></li>
                                            <li><span><i class="fas fa-comments"></i> <a href="#">12</a></span></li>
                                        </ul>
                                        <div class="custom-paragraph">
                                            <p class="demo"><?php $my_content1 = apply_filters( 'the_content', get_the_content($each_post['ID']) );
											echo wp_trim_words( $my_content1, 20); ?></p>
                                        </div>
                                        <div class="blog-btn">
                                            <a class="custom-button" href="<?php echo get_the_permalink($each_post['ID']); ?>">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
				                 }
				            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



<?php
}
get_footer();
