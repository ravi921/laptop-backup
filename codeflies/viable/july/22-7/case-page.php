<?php
/**
 * Template Name: Case Study Template
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
          <div class="small-hero-img">
            <img src="<?php the_field('banner_image');?>" />
          </div>
          <h1 class="hero_heading"><?php the_field('banner_heading');?></h1>
          <p class="hero_text"><?php the_field('banner_heading_description');?> </p>
        </div>
      </div>
      <div class="col-md-6 hero-coutner">
      	<!-- <div class="number-item">
          <h3>600%</h3>
          <p>Traffic</p>
        </div>
        <div class="number-item">
          <h3>320%</h3>
          <p>Conversion Rate</p>
        </div>
        <div class="number-item">
          <h3>37%</h3>
          <p>MoM Growth</p>
        </div> -->
        <?php if( have_rows('hero_counter') ): ?>
            <?php while( have_rows('hero_counter') ): the_row(); 
                ?>
                <div class="number-item">
                  <h3><?php the_sub_field('percentage'); ?></h3>
                  <p><?php the_sub_field('heading'); ?></p>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="text-center w-100 d-block explore-btn">
    <a href="#waysec"><?php the_field('explore_button');?></a>
  </div>
  <div class="hero-absolute">
    <img src="<?php the_field('hero_absolute_image');?>">
  </div>
</section>
<!-- Hero end -->

<!-- Case 1 Start -->
<section id="waysec" class="case-who-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <h3><?php the_field('case_heading');?></h3>
        <?php the_field('heading_description');?>
      </div>
      <div class="col-md-7">
          <div class="client-box">
            <div class="client-text">
              <h4><?php the_field('client_text_heading');?></h4>
              <p><?php the_field('client_text_descripton');?></p>

              <img src="<?php the_field('image__1');?>" class="client-top-icon">
                <img src="<?php the_field('image__2');?>" class="client-green-icon">
              <div class="client-name">
                <div class="client-img">
                  <img src="<?php the_field('client_image');?>">
                </div>
                <div class="clinet-name-txt">
                  <h5><?php the_field('client_name');?></h5>
                  <p><?php the_field('client_designation');?></p>
                </div>
              </div>
            </div>
            <div class="client-overlay"></div>
          </div>
      </div>
    </div>
  </div>
</section>
<!-- Case 1 end -->

<!-- Case 2 Start -->
<section class="objective-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h3><?php the_field('case_2_start_heading');?></h3>
      </div>
      <div class="col-md-8">
        <p><?php the_field('case_2_start_heading_description');?></p>
      </div>
    </div>
  </div>
</section>
<!-- Case 2 end -->


<!-- Case 3 Start -->
<section class="challenges-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h3><?php the_field('case_3_start_heading');?></h3>
        <div class="challenges-img">
          <img src="<?php the_field('case_3_start_image');?>">
        </div>
      </div>
      <div class="col-md-8">
        <?php the_field('case_3_start_description');?>
      </div>
    </div>
  </div>
</section>
<!-- Case 3 end -->



<!-- Case 4 Start -->
<section class="case-services-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h3><?php the_field('case_4_start_heading');?></h3>
      </div>
      <?php if( have_rows('services_provided') ): ?>
          <?php while( have_rows('services_provided') ): the_row(); 
              ?>
              <div class="col-md-4">
                <h4><?php the_sub_field('heading'); ?></h4>
                <?php the_sub_field('list_content'); ?>
              </div>
          <?php endwhile; ?>
      <?php endif; ?>
      <!-- <div class="col-md-4">
        <h4>Services Provided by NoGood:</h4>
        <ol>
          <li>Idea validation and discovery</li>
          <li>Growth financial model</li>
          <li>Landing page building</li>
          <li>Rapid product/MVP prototyping</li>
          <li>Market and competition research</li>
          <li>Persona and UX analysis</li>
          <li>Full funnel analytics and journey tracking</li>
        </ol>
      </div>
      <div class="col-md-4">
        <h4>Media Management for:</h4>
        <ol>
          <li>Facebook and Instagram Ads</li>
          <li>Podcasts and Spotify Ads</li>
          <li>Google and Bing Ads</li>
          <li>Content Partnerships</li>
          <li>Influencer Marketing</li>
          <li>Influencer Marketing</li>
          <li>SEO</li>
        </ol>
      </div> -->
    </div>
  </div>
</section>
<!-- Case 4 end -->


<!-- Case 5 Start -->
<section class="results-sec">
  <div class="container">
      <h2 class="section_heading"><?php the_field('case_5_start_main_heading');?></h2>
      <div class="row">
        <div class="col-md-5">
          <h3><?php the_field('case_5_start_sub_heading');?></h3>
        </div>
        <div class="col-md-7">
          <?php the_field('case_5_start_heading_description');?>
        </div>
      </div>
  </div>
  <div class="results-counter">
    <!-- <div class="counter-col">
      <div class="counter-num">600%</div>
      <p class="counter-txt">Traffic</p>
    </div>
    <div class="counter-col">
      <div class="counter-num">37%</div>
      <p class="counter-txt">MoM Growth</p>
    </div>
    <div class="counter-col">
      <div class="counter-num">320%</div>
      <p class="counter-txt">Conversion Rate</p>
    </div>
    <div class="counter-col">
      <div class="counter-num">37%</div>
      <p class="counter-txt">MoM Growth</p>
    </div> -->
    <?php if( have_rows('hero_counter_copy') ): ?>
            <?php while( have_rows('hero_counter_copy') ): the_row(); 
                ?>
                <div class="counter-col">
                  <div class="counter-num"><?php the_sub_field('percentage'); ?></div>
                  <p class="counter-txt"><?php the_sub_field('heading'); ?></p>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
  </div>
</section>
<!-- Case 5 end -->




<?php get_footer(); ?>
