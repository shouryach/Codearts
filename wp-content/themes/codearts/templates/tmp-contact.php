<?php
/**
 * Template Name: Contact
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

<section class="contact-details custom-pad">
    <div class="container">
      <div class="row">
        <?php for ($i=1; $i <=3 ; $i++) { ?>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 px-3 align-self-center">
          <div class="contact-details-box">
            <div class="contact-details-text">
              <span><i class="<?php if($i==1){ echo 'fas fa-phone'; } elseif($i==2){ echo 'fas fa-envelope'; } else{ echo 'fab fa-skype'; } ?>"></i></span>
              <ul class="contact-list <?php if($i==1){ echo ''; } else{ echo 'speacial-text'; } ?>">
                <li><a href="<?php if($i==1){ echo 'tel:'.get_theme_mod('primary_contact_number'); } elseif($i==2){ echo 'mailto:'.get_theme_mod('project_email_address'); } else{ echo 'mailto:'.get_theme_mod('primary_email_address'); } ?>"><?php if($i==1){ echo get_theme_mod('primary_contact_number'); } elseif($i==2){ echo get_theme_mod('project_email_address'); } else{ echo get_theme_mod('primary_email_address'); } ?></a></li>
                <li><a href="<?php if($i==1){ echo 'tel:'.get_theme_mod('secondary_contact_number'); } elseif($i==2){ echo 'mailto:'.get_theme_mod('primary_email_address'); } else{ echo 'mailto:'.get_theme_mod('secondary_email_address'); } ?>"><?php if($i==1){ echo get_theme_mod('secondary_contact_number'); } elseif($i==2){ echo get_theme_mod('primary_email_address'); } else{ echo get_theme_mod('secondary_email_address'); } ?></a></li>
              </ul>
            </div>
          </div>
        </div>
        <?php } ?>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 px-3 align-self-center">
          <div class="contact-details-box">
            <div class="contact-details-text">
              <span><i class="fas fa-map-marker-alt"></i></span>
              <ul class="contact-list address-list">
                <li><?php echo get_theme_mod('codearts_address'); ?></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php $contact_section= get_field('contact_form_section'); ?>
  <section class="contact-us">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-12">
          <div class="custom-heading ms-md-0 ">
            <h5 class="sub-heading ms-md-0"><?php echo $contact_section['contact_sub_heading']; ?></h5>
            <h3 class="main-heading ms-md-0"><?php echo $contact_section['contact_main_heaing']; ?></h3>
          </div>
        </div>
        <div class="col-lg-7 align-self-center">
          <div class="contact-top-right">
            <p class="paragraph"><?php echo $contact_section['contact_detail']; ?></p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="contact-form">
            <?php $contact_form= $contact_section['contact_form_shortcode']; echo do_shortcode($contact_form);  ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section style="background-color: var(--c-black-800);" class="map-area">
    <div class="container-fluid">
      <div class="row">
        <div class="conatct-map">
          <?php echo get_field('conatct_map_section'); ?>
        </div>
      </div>
    </div>
  </section>


<?php
endwhile; // End of the loop.
get_footer();