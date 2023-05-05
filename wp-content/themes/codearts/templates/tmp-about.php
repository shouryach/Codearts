<?php
/**
 * Template Name: About
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

<?php $focus_grow= get_field('focus_grow'); ?>
<section id="focus-grow-scroll" class="focus-grow custom-pad">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-12 px-3 align-self-center">
        <div class="focus-grow-img">
          <img src="<?php echo $focus_grow['focus_left_image']; ?>" alt="about-focus">
        </div>
      </div>
      <?php $text_lines= $focus_grow['focus_right_part']; ?>
      <div class="col-lg-6 col-md-12 px-3 align-self-center">
        <div class="focus-grow-content">
          <div class="custom-heading">
            <h3 class="main-heading"><?php echo $text_lines['focus_main_heading']; ?></h3>
          </div>
          <div class="custom-paragraph">
            <p class="demo"><?php echo $text_lines['focus_details']; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php $about_counter= get_field('about_counter'); ?>
<section class="about-counter custom-pad">
  <div class="container">
    <div class="row">
      <?php for ($i=1; $i <=3 ; $i++) { ?>
      <div class="col-lg-4 col-md-6 col-sm-12 align-self-center">
        <div class="counter-content <?php if($i==3){ echo 'last-counter'; } ?>">
          <div class="count-number-and-unit secondary-font"><span class="count-number"><?php echo $about_counter['counter_number_'.$i]; ?></span><?php echo $about_counter['number_index_'.$i]; ?></div>
          <h5><?php echo $about_counter['counter_title_'.$i]; ?></h5>
          <h6><?php echo $about_counter['counter_detail_'.$i]; ?></h6>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
<?php $about_trust= get_field('about_trust'); ?>
<section class="about-culture custom-pad">
  <div class="container">
    <div class="row">
      <div class="col-md-12 align-self-center">
        <div class="about-culture-content">
          <div class="custom-heading">
            <h3 class="main-heading"><?php echo $about_trust['trust_title']; ?></h3>
          </div>
          <div class="custom-paragraph">
            <p class="demo bold-text"><?php echo $about_trust['trust_bold_text']; ?></p>
            <?php echo $about_trust['trust_details']; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php $team_members= get_field('team_members'); ?>
<section class="team custom-pad">
  <div class="container">
    <div class="row">
      <div class="col-md-12 align-self-center">
        <div class="custom-heading">
          <h3 class="main-heading"><?php echo $team_members['honorary_member_title']; ?></h3>
        </div>
      </div>
    </div>
    <div class="row">
    <?php
        $tax = array( 33, 34, 35 );
        $args = array(
        'post_type' => 'team-members',
        'tax_query' => array(
            array(
                'taxonomy' => 'designation',
                'field' => 'term_id',
                'terms' => $tax,
                'operator' => 'IN'
                ),
            ),
        );
        $query = new WP_Query($args); // print_r($query);
        if ( $query->have_posts() ):  while($query -> have_posts()) : $query -> the_post();

          $member_id = $query->ID; 
          $member_terms = get_the_terms($member_id, 'designation');
        ?>
    <div class="col-lg-6">
      <div class="col-md-12 d-flex justify-content-center align-self-center">
        <div class="ceo-img">
          <div class="ceo-circle-img">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
          </div>
        </div>
      </div>
      <div class="col-md-12 align-self-center">
        <div class="ceo-content">
          <div class="ceo-name">
            <h5><?php echo get_the_title(); ?></h5>
            <?php if ( $member_terms && !is_wp_error( $member_terms ) ) : foreach ( $member_terms as $member_term ) { ?>
            <h6><?php echo $member_term->name; ?></h6>
            <?php } endif; ?>
          </div>
          <div class="custom-paragraph">
            <p class="demo"><?php echo get_the_excerpt(); ?></p>
          </div>
        </div>
      </div>
    </div>
    <?php
    endwhile;
    endif; 
    wp_reset_query() ; 
    ?>
    </div>
  </div>
</section>
<section class="team custom-pad">
  <section class="container">
    <div class="row">
      <div class="col-md-12 align-self-center">
        <div class="custom-heading">
          <h3 class="main-heading"><?php echo $team_members['team_title']; ?></h3>
        </div>
      </div>
    </div>
    <div class="row">
      <?php
        $args = array(  
          'post_type' => 'team-members',
          'post_status' => 'publish',
          'posts_per_page' => -1,
          'post__not_in' => array(232,241), 
          'orderby' => 'title', 
          'order' => 'ASC', 
      );

      $loop = new WP_Query( $args ); 
          
      while ( $loop->have_posts() ) : $loop->the_post(); 

        $post_id = $loop->ID; 
        $terms = get_the_terms($post_id, 'designation');
      ?>
      <div class="col-lg-4 col-md-6 col-sm-12 px-3 mb-4 align-self-center">
        <div class="team-members">
          <div class="team-members-wrap">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
            <div class="team-members-detail">
              <h4><?php echo get_the_title(); ?></h4>
              <?php if ( $terms && !is_wp_error( $terms ) ) : foreach ( $terms as $term ) { ?>
              <h6><?php echo $term->name; ?></h6>
              <?php } endif; ?>
            </div>
          </div>
        </div>
      </div>
      <?php
          endwhile;
         wp_reset_postdata();
       ?>
    </div>
  </section>
</section>
<!--team section carousel from 991 to 320 screen-->
<section class="team carousel custom-pad">
  <div class="container">
    <div class="row">
      <div class="col-md-12 align-self-center">
        <div class="custom-heading">
          <h3 class="main-heading"><?php echo $team_members['team_title']; ?></h3>
        </div>
      </div>
    </div>
  </div>
  <div id="team-carousel" class="owl-carousel owl-theme">
    <?php 
      while ( $loop->have_posts() ) : $loop->the_post(); 

        $post_id = $loop->ID; 
        $terms = get_the_terms($post_id, 'designation');
      ?>
    <div class="item">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-12 px-3 mb-4 align-self-center">
            <div class="team-members">
              <div class="team-members-wrap">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
                <div class="team-members-detail">
                  <h4><?php echo get_the_title(); ?></h4>
                  <?php if ( $terms && !is_wp_error( $terms ) ) : foreach ( $terms as $term ) { ?>
                  <h6><?php echo $term->name; ?></h6>
                  <?php } endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
        endwhile;
       wp_reset_postdata();
    ?>
  </div>
</section>
<!--team section carousel from 991 to 320 screen-->

<?php $join_team= get_field('join_team'); $images= $join_team['join_images']; $content = $join_team['join_content'];  ?>
<section class="join-team custom-pad">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-12 px-5 align-self-center">
        <div class="join-team-img">
          <img src="<?php echo $images['join_image_1']; ?>" alt="join-team-2">
          <div class="join-team-img-2">
            <img src="<?php echo $images['join_image_2']; ?>" alt="join-team-1">
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 px-5 align-self-center">
        <div class="join-team-text">
          <div class="custom-heading">
            <h3 class="main-heading"><?php echo $content['join_title']; ?></h3>
          </div>
          <div class="custom-paragraph">
            <p class="demo"><?php echo $content['join_detail']; ?></p>
          </div>
          <div class="underline-button">
            <a href="<?php echo $content['join_button_link']; ?>" class="custom-button-alt cb-white"><?php echo $content['join_button_text']; ?> <span class="demo"><i
                  class="fas fa-long-arrow-alt-right"></i></span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php
endwhile; // End of the loop.
get_footer();