<?php
/**
 * Template Name: Contact Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?> 

  <!-- Contact start -->
  <div class="contact-sec">
    <div class="contact-form-left">
      <div class="step-form-sec">
        <h2 class="section_heading"><?php the_field('get_in_touch_section_heading');?></h2>
        <div class="row">
          <div class="steps-form">
            <?php echo do_shortcode('[formidable id="'.get_field('form_id').'"]'); ?>
          </div>
        </div>
        <div class="form-bottom-details">
          <div class="row">
            <div class="col-md-3">
              <div class="form-image">
                <img src="<?php the_field('form_image');?>" />
              </div>
            </div>
            <div class="col-md-3">
              <div class="location-number">
                <?php 
                $link = get_field('location_number_1'); 
                $link_url = $link['url'];
                $link_title = $link['title'];
                ?>
                <p><?php the_field('location_name_1');?> <span><a href="<?php echo $link_url = $link['url'];?>"><?php echo $link_url = $link['title'];?></a></span></p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="location-number">
                <?php 
                $link = get_field('location_number_2'); 
                $link_url = $link['url'];
                $link_title = $link['title'];
                ?>
                <p><?php the_field('location_name_2');?> <span><a href="<?php echo $link_url = $link['url'];?>"><?php echo $link_url = $link['title'];?></a></span></p>
              </div>
            </div>
            <div class="col-md-3"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="contact-details-right">
      <div class="get-in-touch">
        <h5><?php the_field('contact_details_right_heading');?></h5>
        <p><?php the_field('contact_details_right_heading_description');?></p>
        <?php 
        $link = get_field('contact_details_right_button'); 
        $link_url = $link['url'];
        $link_title = $link['title'];
        ?>
        <p><a href="<?php echo $link_url = $link['url'];?>"><?php echo $link_url = $link['title'];?></a></p>
      </div>
      <div class="social-icons">
        <ul class="hero_socal-links">
          <?php the_field('social_links');?>
          <!-- <li><a href="javascript:void(0)"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
          <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li> -->
        </ul>
      </div>
    </div>
  </div>
  <!-- Contact End -->


<?php get_footer(); ?>
