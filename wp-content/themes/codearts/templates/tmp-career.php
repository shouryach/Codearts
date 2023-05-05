<?php
/**
 * Template Name: Career
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
<?php $small_businesses= get_field('small_businesses'); ?>
<section style="background-image: url(<?php echo $small_businesses['bg_image']; ?>);" alt="career-bg" class="career-bg custom-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center">
                    <div class="custom-heading ms-md-0 ">
                        <h3 class="main-heading ms-md-0"><?php echo $small_businesses['main_heading']; ?></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 align-self-center">
                    <div class="career-bg">
                        <div class="custom-paragraph">
                            <p class="demo"><?php echo $small_businesses['small_details']; ?></p>
                        </div>
                        <div class="underline-button">
                            <a href="<?php echo $small_businesses['small_button_link']; ?>" class="custom-button-alt cb-white"><?php echo $small_businesses['small_button_text']; ?> <span class="demo"><i
                                        class="fas fa-long-arrow-alt-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php $career_opportunity= get_field('career_opportunity'); ?>
    <section class="career custom-pad">
        <div class="container">
            <div class="row">
                <?php for ($i=1; $i<=3 ; $i++) {  $opp_box= $career_opportunity['opportunity_box_'.$i];  ?>
                <div class="col-lg-4 col-md-6 col-sm-12 align-self-center">
                    <div class="career-opportunity">
                        <div class="opportunity-box">
                            <img src="<?php echo $opp_box['a_icon_'.$i]; ?>" alt="<?php echo $opp_box['a_title_'.$i]; ?>">
                            <h3><?php echo $opp_box['a_title_'.$i]; ?></h3>
                            <h5><?php echo $opp_box['a_sub_title_'.$i]; ?></h5>
                            <ul class="career-btn">
                                <li><a class="custom-button alt" href="<?php echo $opp_box['apply_button_link_'.$i]; ?>"><?php echo $opp_box['apply_button_text_'.$i]; ?></a></li>
                                <li><a class="custom-button alt" href="<?php echo $opp_box['call_button_link_'.$i]; ?>"><?php echo $opp_box['call_button_text_'.$i]; ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php $join_team= get_field('join_team'); ?>
    <section class="join-team career-section custom-pad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 px-5 align-self-center">
                    <div class="join-team-img">
                        <img src="<?php echo $join_team['join_image_1']; ?>" alt="join-team-2">
                        <div class="join-team-img-2">
                            <img src="<?php echo $join_team['join_image_2']; ?>" alt="join-team-1">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 px-5 align-self-center">
                    <div class="join-team-text">
                        <div class="custom-heading">
                            <h3 class="main-heading"><?php echo $join_team['main_heading']; ?></h3>
                        </div>
                        <div class="custom-paragraph">
                            <p class="demo"><?php echo $join_team['join_details']; ?></p>
                        </div>
                        <div class="underline-button">
                            <a href="<?php echo $join_team['apply_button_link']; ?>" class="custom-button-alt cb-white"><?php echo $join_team['apply_button_text']; ?> <span class="demo"><i
                                        class="fas fa-long-arrow-alt-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php $career_text= get_field('career_text'); ?>
    <section class="career-text custom-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center">
                    <div class="custom-heading">
                        <h3 class="main-heading"><?php echo $career_text['main_heading']; ?></h3>
                    </div>
                    <div class="custom-paragraph">
                        <p class="demo"><?php echo $career_text['career_details']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>



<?php
endwhile; // End of the loop.
get_footer();