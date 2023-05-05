<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage codearts
 */

?>

  <!-- FOOTER SECTION -->
  <footer>
    <div class="footer-wrap">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6 d-flex justify-content-center">
            <!-- ul -> div -->
            <div class="vertical-footer">

              <!-- li -> div -->
              <div class="vertical-footer-wrap">
                <!-- footer-1 -> footer-column -->
                <div class="footer-column footer-1">
                  <?php dynamic_sidebar('quick-links'); ?>
                </div>
              </div>
              <!-- li -> div -->
              <div class="vertical-footer-wrap">
                <!-- footer 2 -> footer-column -->
                <div class="footer-column footer-2">
                  <?php dynamic_sidebar('technology'); ?>
                </div>
              </div>

            </div>
          </div>
          <div class="col-lg-5 col-md-6 col-sm-6 d-flex justify-content-center">
            <div class="vertical-footer">


              <div class="vertical-footer-wrap">
                <!-- footer-3 -> footer-column -->
                <div class="footer-column footer-3">
                  <?php dynamic_sidebar('services'); ?>
                </div>
              </div>

              <div class="vertical-footer-wrap">
                <!-- footer-4 -> footer-column -->
                <div class="footer-column footer-4">
                  <?php dynamic_sidebar('digital-marketing'); ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
            <div class="footer-column footer-5">
              <h4 class="custom-footer-heading">CONTACT</h4>
              <ul class="contact">
                <li>
                  <p><?php echo get_theme_mod('codearts_address'); ?></p>
                </li>
                <li>
                  <h4 class="custom-footer-heading custom-phone-heading">PHONE</h4>
                  <a href="tel:<?php echo get_theme_mod('primary_contact_number'); ?>"><?php echo get_theme_mod('primary_contact_number'); ?></a>
                </li>
                <li>
                  <h4 class="custom-footer-heading">FOLLOW US</h4>
                  <ul class="follow-us">
                    <?php dynamic_sidebar('social-link'); ?>
                  </ul>
                </li>
              </ul>
            </div>

          </div>
          <div class="col-lg-6 col-md-12 align-self-center">
            <div class="copyright-left">
              <p>Copyright <?php echo date('Y', strtotime('now')); ?> <?php echo get_theme_mod('copyright'); ?></p>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 align-self-center">
            <div class="copyright-right">
              <ul class="review">
                <li>
                  <h5>27 reviews</h5>
                </li>
                <li><span><i class="fas fa-star"></i></span></li>
                <li><span><i class="fas fa-star"></i></span></li>
                <li><span><i class="fas fa-star"></i></span></li>
                <li><span><i class="fas fa-star"></i></span></li>
                <li><span><i class="fas fa-star"></i></span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

<?php wp_footer(); ?>
<script type="text/javascript">
  jQuery(document).ready(function(){
    
    var ajax_url = '<?php echo admin_url('admin-ajax.php')?>'; // alert(ajax_url);   
    let currentPage = 1;
      jQuery('#load-more').on('click', function() {
        currentPage++; // Do currentPage + 1, because we want to load the next page

        jQuery.ajax({
          type: 'POST',
          url: ajax_url,
          dataType: 'html',
          data: {
            action: 'weichie_load_more',
            paged: currentPage,
          },
          success: function (res) {
            jQuery('.publication-list').append(res);
          }
        });
      });

    });
</script>

</body>

</html>
