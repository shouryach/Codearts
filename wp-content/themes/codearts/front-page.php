<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage codearts
 */

get_header();
?>
<!-- BANNER SECTION -->
<?php
$banner_check= get_field('banner_check'); if($banner_check==1){
$hero_banner= get_field('hero_banner');
?>
<section class="banner">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="banner-content-wrap">
          <div class="banner-left">
            <img src="<?php echo $hero_banner['banner_image']; ?>" alt="banner-2">
          </div>
          <?php $banner_title = $hero_banner['banner_titles']; ?>
          <div class="banner-content">
            <h4 class="banner-sub-heading"><?php echo $banner_title['banner_small_title']; ?></h4>
            <h2 class="banner-main-heading"><?php echo $banner_title['banner_big_title']; ?></h2>
            <div class="underline-button">
              <?php $banner_buttons = $hero_banner['banner_buttons']; ?>
              <?php for ($i=1; $i <=2 ; $i++) { ?>
              <a class="custom-button-alt" href="<?php echo $banner_buttons['button_link_'.$i]; ?>">
                <?php echo $banner_buttons['button_text_'.$i]; ?>
                <span><i class="las la-long-arrow-alt-right"></i></span>
              </a>
              <?php } ?>
            </div>
          </div>
          <div class="banner-right">
            <h1 class="banner-right-heading"><?php echo $banner_title['banner_right_title']; ?></h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php } ?>
<!-- PROJEXT SECTION -->
<?php
$project_check= get_field('project_check'); if($project_check==1){
$hero_projects= get_field('hero_projects');
$all_projects = $hero_projects['featured_projects']; //print_r($all_projects);
?>
<section class="project">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-12 col-sm-12 p-0">
        <div class="all-project-1" style="background-image:url(<?php echo get_the_post_thumbnail_url($all_projects[0]); ?>)" alt="<?php echo get_the_title($all_projects[0]); ?>">
          <div class="all-project-1-content">
            <h5><a class="read-more-hover" href="<?php echo get_the_permalink($all_projects[0]); ?>">Read More</a></h5>
            <h3><a href="<?php echo get_the_permalink($all_projects[0]); ?>"><?php echo get_the_title($all_projects[0]); ?></a></h3>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-12 col-sm-12 p-0">
        <div class="all-project-2" style="background-image:url(<?php echo get_the_post_thumbnail_url($all_projects[1]); ?>)" alt="<?php echo get_the_title($all_projects[1]); ?>">
          <div class="all-project-2-content">
            <h5><a class="read-more-hover" href="<?php echo get_the_permalink($all_projects[1]); ?>">Read More</a></h5>
            <h3><a href="<?php echo get_the_permalink($all_projects[1]); ?>"><?php echo get_the_title($all_projects[1]); ?></a></h3>
          </div>
          <div class="all-project-heading">
            <h4><a class="project-link" href="<?php echo $hero_projects['project_button_link']; ?>"><?php echo $hero_projects['project_button_text']; ?></a></h4>
          </div>
        </div>
      </div>
      <div class="col-lg-5 col-md-12 col-sm-12 p-0">
        <div class="section-category-3">
          <div class="col-md-12 col-sm-12">
            <div class="inner-project-1" style="background-image:url(<?php echo get_the_post_thumbnail_url($all_projects[2]); ?>)" alt="<?php echo get_the_title($all_projects[2]); ?>">
              <div class="inner-project-1-content">
                <h5><a class="read-more-hover" href="<?php echo get_the_permalink($all_projects[2]); ?>">Read More</a></h5>
                <h3><a href="<?php echo get_the_permalink($all_projects[2]); ?>"><?php echo get_the_title($all_projects[2]); ?></a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-sm-12 d-flex flex-direction-column">
            <div class="col-md-6 col-sm-6">
              <div class="inner-project-2" style="background-image:url(<?php echo get_the_post_thumbnail_url($all_projects[3]); ?>)" alt="<?php echo get_the_title($all_projects[3]); ?>">
                <div class="inner-project-2-content">
                  <h5><a class="read-more-hover" href="<?php echo get_the_permalink($all_projects[3]); ?>">Read More</a></h5>
                  <h3><a href="<?php echo get_the_permalink($all_projects[3]); ?>"><?php echo get_the_title($all_projects[3]); ?></a></h3>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="inner-project-3" style="background-image:url(<?php echo get_the_post_thumbnail_url($all_projects[4]); ?>)" alt="<?php echo get_the_title($all_projects[4]); ?>">
                <div class="inner-project-3-content">
                  <h5><a class="read-more-hover" href="<?php echo get_the_permalink($all_projects[4]); ?>">Read More</a></h5>
                  <h3><a href="<?php echo get_the_permalink($all_projects[4]); ?>"><?php echo get_the_title($all_projects[4]); ?></a></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php } ?>
<!--Project section-2 carousel for 991px to 320px-->
<section class="project-2">
  <div id="project-carousel" class="owl-carousel owl-theme">
    <div class="item">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-12 col-sm-12 p-0">
            <div class="all-project-1" style="background-image:url(<?php echo get_the_post_thumbnail_url($all_projects[0]); ?>)">
              <div class="all-project-1-content">
                <h5><a class="read-more-hover" href="<?php echo get_the_permalink($all_projects[0]); ?>">Read More</a></h5>
                <h3><a href="<?php echo get_the_permalink($all_projects[0]); ?>"><?php echo get_the_title($all_projects[0]); ?></a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-md-12 col-sm-12 p-0">
            <div class="all-project-2" style="background-image:url(<?php echo get_the_post_thumbnail_url($all_projects[1]); ?>)">
              <div class="all-project-2-content">
                <h5><a class="read-more-hover" href="<?php echo get_the_permalink($all_projects[1]); ?>">Read More</a></h5>
                <h3><a href="<?php echo get_the_permalink($all_projects[1]); ?>"><?php echo $hero_projects['project_button_text']; ?></a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-5 col-md-12 col-sm-12 p-0">
            <div class="section-category-3">
              <div class="col-md-12 col-sm-12">
                <div class="inner-project-1" style="background-image:url(<?php echo get_the_post_thumbnail_url($all_projects[2]); ?>)">
                  <div class="inner-project-1-content">
                    <h5><a class="read-more-hover" href="<?php echo get_the_permalink($all_projects[2]); ?>">Read More</a></h5>
                    <h3><a href="<?php echo get_the_permalink($all_projects[2]); ?>"><?php echo get_the_title($all_projects[2]); ?></a></h3>
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-sm-12 d-flex flex-direction-column">
                <div class="col-md-6 col-sm-6">
                  <div class="inner-project-2" style="background-image:url(<?php echo get_the_post_thumbnail_url($all_projects[3]); ?>)">
                    <div class="inner-project-2-content">
                      <h5><a class="read-more-hover" href="<?php echo get_the_permalink($all_projects[3]); ?>">Read More</a></h5>
                      <h3><a href="<?php echo get_the_permalink($all_projects[3]); ?>"><?php echo get_the_title($all_projects[3]); ?></a></h3>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="inner-project-3" style="background-image:url(<?php echo get_the_post_thumbnail_url($all_projects[4]); ?>)">
                    <div class="inner-project-3-content">
                      <h5><a class="read-more-hover" href="<?php echo get_the_permalink($all_projects[4]); ?>">Read More</a></h5>
                      <h3><a href="<?php echo get_the_permalink($all_projects[4]); ?>"><?php echo get_the_title($all_projects[4]); ?></a></h3>
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
  <div class="container-fluid">
    <div class="row">
      <div class="project-heading">
        <h4><a class="project-link" href="<?php echo $hero_projects['project_button_link']; ?>"><?php echo $hero_projects['project_button_text']; ?></a></h4>
      </div>
    </div>
  </div>
</section>

<!--Project section-2 carousel for 991px to 320px-->

<?php
$introduction_check= get_field('introduction_check'); if($introduction_check==1){
$codearts_introduction= get_field('codearts_introduction');
$intro_left= $codearts_introduction['intro_left'];
$intro_right= $codearts_introduction['intro_right'];
?>
<section class="introduction custom-pad">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-md-9 col-sm-12 align-self-center">
        <div class="intro-left">
          <div class="custom-heading">
            <h5 class="sub-heading  ms-md-0"><?php echo $intro_left['intro_left_sub_heading']; ?></h5>
          </div>
          <div class="introduction-para">
            <p><?php echo $intro_left['intro_left_deatils']; ?></p>
          </div>
          <div class="underline-button">
            <a class="custom-button-alt" href="<?php echo $intro_left['intro_left_button_link']; ?>"><?php echo $intro_left['intro_left_button_text']; ?> <span><i
                  class="fas fa-long-arrow-alt-right"></i></span></a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-12 d-flex justify-content-center">
        <div class="intro-right">
          <?php for ($i=1; $i <=2 ; $i++) { ?>
          <ul class="website count-<?php echo $i; ?>">
            <li>
              <div class="count-number-and-unit secondary-font"><span class="count-number">
                  <h2><?php echo $intro_right['count_number_'.$i]; ?></h2>
                </span></div>
              <p class="demo"><?php echo $intro_right['count_title_'.$i]; ?></p>
            </li>
          </ul>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php } ?>
<!-- SERVICES SECTION -->
<?php
$services_check= get_field('services_check'); if($services_check==1){
$home_services= get_field('home_services');
?>
<section class="services-section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-5 col-12 p-0">
        <div class="services-content-left d-flex flex-column">
          <div class="custom-heading ms-md-0">
            <h5 class="sub-heading c-white-900"><?php echo $home_services['service_heading']; ?></h5>
          </div>
          <div class="services-content-left-text">
            <p class="demo"><?php echo $home_services['service_detail']; ?></p>
          </div>
          <div class="services-button-wrap underline-button ms-md-0">
            <?php for ($i=1; $i <=2 ; $i++) { ?>
              <a class="custom-button-alt cb-white" href="<?php echo $home_services['button_link_'.$i]; ?>">
                <?php echo $home_services['button_text_'.$i]; ?>
                <span><i class="fas fa-long-arrow-alt-right"></i></span>
              </a>
            <?php } ?>
          </div>
        </div>
      </div>
      <div class="col-lg-7 col-12 p-0">
        <div class="accordion__container" data-item-count="5">
          <div class="accordion__item-wrapper">
            <?php $terms = $home_services['featured_services']; ?>
            <?php if( $terms ): foreach ($terms as $term) { ?>
            <div class="accordion__item js-accordion__item">
              <div class="service-acc-title-wrap">
                <h4 class="service-acc-title"><?php echo esc_html( $term->name ); ?></h4>
                <div class="plus-icon">
                  <span class="bar-y"></span>
                  <span class="bar-x"></span>
                </div>
              </div>
              <div class="service-acc-content">
                <p class="service-text"><?php echo esc_html( $term->description ); ?></p>
                <a href="<?php echo esc_url( get_term_link( $term ) ); ?>" class="custom-button">Learn More </a>
              </div>
            </div>
            <?php } endif; ?>
          </div>
        </div>
      </div>
    </div>
</section>
<?php } ?>
<!-- BRANDS SECTION -->
<?php
$brand_check= get_field('brand_check'); if($brand_check==1){
$home_brands= get_field('home_brands');
?>
<section class="leading-brands custom-pad">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="brands-content">
          <div class="custom-heading">
            <h3 class="main-heading"><?php echo $home_brands['brands_main_heading']; ?></h3>
          </div>
          <div class="custom-paragraph">
            <p class="demo"><?php echo $home_brands['brands_deatils']; ?></p>
          </div>
          <?php $all_brands= $home_brands['featured_brands']; ?>
          <div class="brand-image">
             <?php foreach ($all_brands as $each_brands) { ?>
            <div class="brand-item">
              <img src="<?php echo get_the_post_thumbnail_url($each_brands); ?>" alt="<?php echo get_the_title($each_brands); ?>">
            </div>
            <?php } ?>
          </div>
          <!-- Slider Start -->
          <div class="brand-image brand-carousal-image">
            <div class="owl-carousel owl-theme" id="brand-carousel">
              <?php foreach ($all_brands as $each_brands) { ?>
              <div class="item">
                <div class="brand-item">
                  <img src="<?php echo get_the_post_thumbnail_url($each_brands); ?>" alt="<?php echo get_the_title($each_brands); ?>">
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
          <!-- Slider End -->
        </div>
      </div>
    </div>
  </div>
</section>
<?php } ?>
<!-- BLOG SECTION -->
<?php
$blogs_check= get_field('blogs_check'); if($blogs_check==1){
$all_blogs= get_field('home_blog');
?>
<section class="blog-section custom-pad">
  <div class="container">
    <div class="row">
      <?php foreach ($all_blogs as $each_blogs) { ?>
      <div class="col-lg-12">
        <div class="blog-content">
          <div class="custom-heading">
            <h5 class="sub-heading c-white-900 ms-0"><?php echo get_the_date( 'F j, Y',$each_blogs ); ?></h5>
          </div>
          <div class="blog-text">
            <p class="demo"><?php echo get_the_title($each_blogs); ?></p>
          </div>
          <div class="blog-button">
            <div class="underline-button">
              <a href="<?php echo get_the_permalink($each_blogs); ?>" class="custom-button-alt cb-white">Read More <span class="demo"><i
                    class="fas fa-long-arrow-alt-right"></i></span></a>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
<?php } ?>
<!-- TECHNOLOGY SECTION -->
<?php
$technology_check= get_field('technology_check'); if($technology_check==1){
$our_technology= get_field('our_technology');
?>
<section class="technology custom-pad">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="technology-content">
          <div class="custom-heading">
            <h3 class="main-heading"><?php echo $our_technology['technology_heading']; ?></h3>
          </div>
          <div class="custom-paragraph">
            <p class="demo"><?php echo $our_technology['technology_details']; ?></p>
          </div>
          <div class="technology-image">
            <div class="row">
              <div class="col-md-12">
                <div class="owl-carousel owl-theme technology-carousel" id="technology-carousel">
                  <?php $terms_technology= $our_technology['featured_technologies']; ?>
                  <?php if( $terms_technology ): foreach ($terms_technology as $each_technology) { ?>
                  <div class="item">
                    <div class="owl-images">
                      <img src="<?php echo get_field('technology_image', $each_technology); ?>" class="card-img-top" alt="Icon of <?php echo esc_html( $each_technology->name ); ?>">
                    </div>
                    <div class="tech-image-title-wrap">
                      <h5 class="tech-image-title"><?php echo esc_html( $each_technology->name ); ?></h5>
                    </div>
                  </div>
                  <?php } endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php } ?>
<!-- CONTACT US SECTION -->
<?php
$contact_check= get_field('contact_check'); if($contact_check==1){
$home_contact= get_field('home_contact');
?>
<section class="contact-us">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-12">
        <div class="custom-heading ms-md-0 ">
          <h5 class="sub-heading ms-md-0"><?php echo $home_contact['contact_sub_heading']; ?></h5>
          <h3 class="main-heading ms-md-0"><?php echo $home_contact['contact_main_heading']; ?></h3>
        </div>
      </div>
      <div class="col-lg-7 align-self-center">
        <div class="contact-top-right">
          <p class="paragraph"><?php echo $home_contact['contact_detail']; ?></p>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="contact-form">
          <?php $contact_form= $home_contact['contact_form_shortcode']; echo do_shortcode($contact_form);  ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php } ?>


<?php
get_footer();