<?php
/**
 * Template Name: Contact Business Template
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
  <div class="contact-page-sec wow fadeInUp" data-wow-duration="3s">
    <div class="col-lft">
      <div class="step-form-2">
        <?php //echo do_shortcode('[formidable id=4]'); ?>
        <?php echo do_shortcode('[formidable id="'.get_field('form_id').'"]'); ?>
      </div>
    </div>
    <div class="col-rgt">
      <div class="get-in-touch">
        <h5><?php the_field('get_in_touch_heading');?></h5>
        <p><?php the_field('get_in_touch_heading_description');?></p>
        <?php 
        $link = get_field('get_in_touch_button'); 
        $link_url = $link['url'];
        $link_title = $link['title'];
        ?>
        <p><a href="<?php echo $link_url = $link['url'];?>"><?php echo $link_title = $link['title']; ?></a></p>
      </div>
      <div class="social-icons">
        <ul class="hero_socal-links">
          <!-- <li><a href="javascript:void(0)"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
          <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li> -->
          <?php the_field('social_media');?>
        </ul>
      </div>
    </div>
  </div>
  <!-- Contact End -->

<?php get_footer(); ?>
