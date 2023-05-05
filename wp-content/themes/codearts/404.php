<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage codearts
 */

get_header();
?>

<section class="error">
    <div class="container">
        <div class="row">
            <div class="col-md-12 align-self-center">
                <div class="error-wrap">
                    <div class="error-content">
                        <h2>404</h2>
                        <h3>Oops!</h3>
                        <div class="custom-paragraph">
                            <p class="demo">We're sorry,The page you were looking for doesn't exist anymore.</p>
                        </div>
                        <div class="error-btn">
                            <a class="custom-button" href="<?php echo site_url(); ?>">Back to home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
