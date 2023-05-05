<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage codearts */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();?>
<!--Legendary Copied Code From Header.php-->
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
              <li class="breadcrumb-item">
              	<a href="<?php
                              if('post' == get_post_type())
                                {
                                echo site_url('blogs');
                                }
                                else if('all_portfolios' == get_post_type())
                                {
                                echo site_url('portfolios');
                                }
                                ?>">
                        <?php
                        if('post' == get_post_type())
                        {
                          echo "Blogs";
                        }
                        else if('all_portfolios' == get_post_type())
                        {
                          echo "Portfolios";
                        }
                  ?>
                  </a></li>
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

<?php

	get_template_part( 'template-parts/content/content-single' );

	if ( is_attachment() ) {
		// Parent post navigation.
		the_post_navigation(
			array(
				/* translators: %s: Parent post link. */
				'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'codearts' ), '%title' ),
			)
		);
	}

	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}

	// Previous/next post navigation.
	$codearts_next = is_rtl() ? codearts_get_icon_svg( 'ui', 'arrow_left' ) : codearts_get_icon_svg( 'ui', 'arrow_right' );
	$codearts_prev = is_rtl() ? codearts_get_icon_svg( 'ui', 'arrow_right' ) : codearts_get_icon_svg( 'ui', 'arrow_left' );

	$codearts_next_label     = esc_html__( 'Next post', 'codearts' );
	$codearts_previous_label = esc_html__( 'Previous post', 'codearts' );

	the_post_navigation(
		array(
			'next_text' => '<p class="meta-nav">' . $codearts_next_label . $codearts_next . '</p><p class="post-title">%title</p>',
			'prev_text' => '<p class="meta-nav">' . $codearts_prev . $codearts_previous_label . '</p><p class="post-title">%title</p>',
		)
	);
endwhile; // End of the loop.

get_footer();
