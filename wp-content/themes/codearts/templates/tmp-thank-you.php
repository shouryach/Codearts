<?php
/**
 * Template Name: Thank You
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

<?php
$thank_you= get_field('thanks-you-page');
$text_lines= $thank_you['thanks_text_lines']; ?>
?>
<section style="background-image:url(<?php echo $thank_you['thanks_bg_image']; ?>)" alt="thank-you-bg" class="thank-you custom-pad">
    <div class="container">
        <div class="row">
            <div class="thank-you-box">
                <div class="box-wrap">
                    <div class="thank-you-content">
                        <span><i class="fas fa-envelope"></i></span>
                        <h2><?php echo $text_lines['thanks_title']; ?></h2>
                        <div class="custom-paragraph">
                            <p class="demo"><?php echo $text_lines['thanks_details']; ?></p>
                        </div>
                        <?php dynamic_sidebar('social-link'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
endwhile; // End of the loop.
get_footer();