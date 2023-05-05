<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage codearts
 */

?>

<!doctype html>
<html <?php language_attributes(); ?> <?php codearts_the_html_classes(); ?>>

<head>
  <!-- Required meta tags -->
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

  <!-- HEADER SECTION -->
  <header class="custom-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <nav class="navbar custom-navbar">
            <a class="navbar-brand custom-navbar-brand ms-0" href="<?php echo site_url(); ?>">
              <img src="<?php echo get_theme_mod('main_logo'); ?>" alt="<?php echo bloginfo('name'); ?>">
            </a>
            <div class="custom-navbar-right d-flex align-items-center me-0">
              <a class="custom-button" href="<?php echo site_url('contact-us'); ?>">
                Get a quote
              </a>
              <span class="custom-navbar-text">Menu</span>
              <button class="navbar-toggler custom-navbar-toggle" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

              <div class="offcanvas offcanvas-top custom-offcanvas-top" tabindex="-1" id="offcanvasTop"
                aria-labelledby="offcanvasTopLabel">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-12">
                      <div class="offcanvas-header">
                      	<a class="navbar-brand custom-navbar-brand ms-0" href="<?php echo site_url(); ?>">
                        <img class="offcanvas-logo ms-0" src="<?php echo get_theme_mod('alt_main_logo'); ?>"
                          alt="<?php echo bloginfo('name'); ?>">
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="row position-relative">
                    <div class="col-xxl-9 col-xl-10 col-lg-11">
                      <div class="offcanvas-body">
                      	<?php
                                // wp_nav_menu( array(
                                //    'menu'          => 'Main Navigation',
                                //    'depth'         => 3,
                                //    'container'     => false,
                                //    'menu_class'    => 'navbar-nav custom-navbar-nav pe-lg-3',
                                //    'walker'        => new wp_bootstrap_navwalker()
                                // ) );

                      	        wp_nav_menu( array(
			                         'menu'              => "Primary Menu",
			                         'menu_class'        => "navbar-nav custom-navbar-nav pe-lg-3",
                               'depth'         => 3,
                               'container'     => false,
                               'walker'        => new wp_bootstrap_navwalker()

                      				  ) );
                            ?>
                        <div class="navbar-contact me-0">
                          <div class="navbar-contact-content">
                            <h5 class="navbar-contact-heading">Phone</h5>
                            <a class="navbar-contact-text" href="tel:<?php echo get_theme_mod('primary_contact_number'); ?>"><?php echo get_theme_mod('primary_contact_number'); ?></a>
                          </div>
                          <div class="navbar-contact-content">
                            <h5 class="navbar-contact-heading">Enquiries & Quotes</h5>
                            <a class="navbar-contact-text"
                              href="mailto:<?php echo get_theme_mod('project_email_address'); ?>"><?php echo get_theme_mod('project_email_address'); ?></a>
                          </div>
                          <div class="navbar-contact-content">
                          	<h5 class="navbar-contact-heading">Follow Us</h5>
                            <?php dynamic_sidebar('social-link'); ?>
                          </div>
                          <div class="navbar-contact-cta">
                            <a class="custom-button" href="javascript:void(0)">
                              Get in touch
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>

<?php 
  if( 'post' == get_post_type() || 'all_portfolios' == get_post_type() )
    { if(is_single()){ ?>
   
<?php } else if(is_archive() || is_home() ){  ?>
	
<?php } } else if(!is_front_page() && !is_404() ) { ?>
  <!--Unable to delete this legendary code-->
  <section class="custom-inner-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="custom-inner-banner-content-wrap">
            <nav
              style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
              aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">HOME</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo get_the_title(); ?></li>
              </ol>
            </nav>
            <?php $short_title = get_field('all_pages_sub_title'); if( $short_title != ''){ ?>
            <h2><?php echo $short_title; ?></h2>
            <?php } ?>
            <div class="inner-banner-btn">
              <a class="custom-button-alt" href="<?php echo esc_url(home_url('services')); ?>">
                Our Services
                <span><i class="las la-long-arrow-alt-right"></i></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 <?php } ?>
