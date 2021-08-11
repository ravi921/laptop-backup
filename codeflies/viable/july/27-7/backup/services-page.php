<?php
/**
 * Template Name: Services Template
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
    <!-- Hero start -->
    <section class="hero_section inner-hero">
      <div class="container">
        <div class="row align-content-center">
          <div class="col-md-6">
            <div class="hero_content">
              <div class="hero_contentin">
                <div class="hero_content-in">
                  <h1 class="hero_heading"><?php the_field('banner_heading');?></h1>
                  <p class="hero_text">
                    <?php the_field('banner_heading_description');?>                
                  </p> 
                    <div class="hero_img-wrapper mobile-home-hero">
                    <img src="<?php the_field('banner_image');?>" alt="" />
                  </div>
                </div>
              </div>
              <div class="hero_contentin">
                <div class="hero_content-in">
                  <h1 class="hero_heading"><?php the_field('banner_heading');?></h1>
                  <p class="hero_text">
                    <?php the_field('banner_heading_description');?>                
                  </p> 
                    <div class="hero_img-wrapper mobile-home-hero">
                    <img src="<?php the_field('banner_image');?>" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 hero_img-wrapper">
            <div class="hero_img-wrapper-in">
              <img src="<?php the_field('banner_image');?>" alt="" />
            </div>
          </div>
        </div>
      </div>
      <div class="text-center w-100 d-block explore-btn">
        <a href="#services"><?php the_field('service_connect');?></a>
      </div>
    </section>
    <!-- Hero end -->

    <div id="services" class="service-sec">
      <div class="">
        <div class="">
          <div class="service-slider">
            <div class="service-slides">
              <?php 
                  if( have_rows('services') ):
                      while( have_rows('services') ) : the_row();

                          // Get parent value.
                          $parent_title = get_sub_field('parent_title');?>
                          <div class="service-col">
                            <div class="service-col-content">
                              <h4><?php the_sub_field('heading');?></h4>
                              <p><?php the_sub_field('heading_description');?></p>

                          <?php // Loop over sub repeater rows.
                          if( have_rows('sub_lists') ):?>
                              <ul>
                             <?php while( have_rows('sub_lists') ) : the_row();

                                  // Get sub value.
                                  $child_title = get_sub_field('child_title'); ?>
                                   <li><a href="<?php the_sub_field('list_link'); ?>"><?php the_sub_field('list_content');?></a></li>
                            <?php endwhile; ?>
                              </ul>

                              <?php $link = get_sub_field('view_more_button'); 
                                    $link_url = $link['url'];
                                    $link_title = $link['title']; 
                              ?>
                                 <a href="<?php echo $link_url; ?>" class="view-btn"><?php echo $link_title; ?></a>
                                  
                              </div>
                              <div class="service-col-overlay"></div>

                         <?php endif;
                          if( have_rows('image') ):
                              while( have_rows('image') ) : the_row();
                                  // Get sub value.
                                  $child_title = get_sub_field('child_title'); ?>
                                  <img src="<?php the_sub_field('select_image_here');?>" class="<?php the_sub_field('image_class');?>">
                             <?php endwhile;
                          endif;?>


                      </div>
                     <?php endwhile;
                  endif;
               ?>
            </div>
          </div>
        </div>
      </div>
    </div>


<?php get_footer(); ?>
