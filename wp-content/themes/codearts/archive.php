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
?>
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
                  ?> </a>
                  </li>
                  <?php  if(is_tax()){ printf( __( '%s', 'twentyten' ), '<li class="breadcrumb-item active" aria-current="page">Category: ' . single_cat_title( '', false ) . '</li>' ); } ?>
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


<?php if ( have_posts() ) : ?>

	<header class="page-header alignwide">
		<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
		<?php if ( $description ) : ?>
			<div class="archive-description"><?php echo wp_kses_post( wpautop( $description ) ); ?></div>
		<?php endif; ?>
	</header><!-- .page-header -->

	<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>
		<?php get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) ); ?>
	<?php endwhile; ?>

	<?php codearts_the_posts_navigation(); ?>

<?php else : ?>
	<?php get_template_part( 'template-parts/content/content-none' ); ?>
<?php endif; ?>

<?php get_footer(); ?>
