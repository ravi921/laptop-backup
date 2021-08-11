<?php
/**
 * Template Name: Front Page Template
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
    <section class="hero_section">
      <div class="container">
        <div class="row align-content-center">
          <div class="col-md-6">
            <div class="hero_content">
              <div class="hero_contentin">
                <div class="hero_content-in">
                  <h1 class="hero_heading"><span><?php the_field('banner_heading');?></span></h1>
                  <p class="hero_text"> <?php the_field('banner_heading_description');?> </p>
                  <div class="button-wrap">
                    <?php $link = get_field('banner_cta_button'); 
                          $link_url = $link['url'];
                          $link_title = $link['title']; 
                    ?>
                    <a href="<?php echo $link_url;?>" class="button-cta button-cta-red"><span><?php echo $link_title;?></span></a>
                  </div>
                </div>
                <div class="hero_content-in">
                  <h1 class="hero_heading"><span><?php the_field('banner_heading');?></span></h1>
                  <p class="hero_text"> <?php the_field('banner_heading_description');?> </p>
                  <div class="button-wrap">
                    <?php $link = get_field('banner_cta_button'); 
                          $link_url = $link['url'];
                          $link_title = $link['title']; 
                    ?>
                    <a href="<?php echo $link_url;?>" class="button-cta button-cta-red"><span><?php echo $link_title;?></span></a>
                  </div>
                </div>
              </div>

              <div class="hero_img-wrapper mobile-home-hero">
	              <img src="<?php the_field('banner_image');?>" alt="" />
	          	</div>

              <?php if( have_rows('social_connect') ): ?>
                  <ul class="hero_socal-links">
                  <?php while( have_rows('social_connect') ): the_row(); 
                      ?>
                      <li><a href="<?php the_sub_field('url'); ?>"><i class="<?php the_sub_field('icon_class'); ?>"></i></a></li>
                  <?php endwhile; ?>
                  </ul>
              <?php endif; ?>
            </div>

          </div>
          <div class="col-md-6 col-sm-6 hero_img-wrapper">
          	<div class="hero_img-wrapper-in">
              <img src="<?php the_field('banner_image');?>" alt="" />
          	</div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero end -->

    <!-- Tusted start -->
    <section class="trusted_section">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <div class="trusted_content">
              <h4 class="trusted-heading"><?php the_field('tusted_section_heading');?></h4>
            </div>
          </div>
          <div class="col-md-10">
            <div class="trusted-slider">
               <?php if( have_rows('tusted_images') ): ?>
                  
                  <?php while( have_rows('tusted_images') ): the_row(); 
                      ?>
                      <div class="trusted_img-wrapper">
                      <img src="<?php the_sub_field('images'); ?>" alt="">
                      </div>
                  <?php endwhile; ?>
                  
              <?php endif; ?> 
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Tusted end -->

    <!-- Services start -->
    <section class="services_section">
      <div class="container">
        <h2 class="section_heading"><?php the_field('services_section_heading');?></h2>
        <div class="row">
          <?php if( have_rows('services') ): ?>
              
              <?php while( have_rows('services') ): the_row(); 
                  ?>
                  <div class="col-md-6 col-lg-4">
                      <div class="service-box">
                          <div class="service-boxin">
                              <h3> <?php the_sub_field('heading'); ?></h3>
                              <p><?php the_sub_field('heading_description'); ?></p>
                              <img src="<?php the_sub_field('image_1'); ?>" class="img-responsive show-icon">
                              <img src="<?php the_sub_field('image_5'); ?>" class="img-responsive show-icon-h">
                              <img src="<?php the_sub_field('image_2'); ?>" class="service-top-icon">
                              <img src="<?php the_sub_field('image_3'); ?>" class="service-red-icon">
                              <img src="<?php the_sub_field('image_4'); ?>" class="service-green-icon">
                              <span class="link"><a href="<?php the_sub_field('current_service_link'); ?>"><?php the_sub_field('view_button_text'); ?></a></span>
                          </div>
                          <div class="service-box-overlay"></div>
                          <a href="<?php the_sub_field('current_service_link'); ?>" class="service-link"></a>
                      </div>
                  </div>
              <?php endwhile; ?>
              
          <?php endif; ?>
        </div>
        <div class="service-btns">
	        <div class="container">
		        <div class="button-wrap">
              <?php $link = get_field('load_more_button'); 
                    $link_url = $link['url'];
                    $link_title = $link['title']; 

              ?>
		          	<a href="<?php echo $link_url; ?>" class="button-cta"><span><?php echo $link_title; ?></span></a>
		            <!-- <a href="#" class="button-cta">CTA button</a> -->

              <!-- <?php $link = get_field('load_more_button_2'); 
                    $link_url = $link['url'];
                    $link_title = $link['title']; 

              ?>
                 <a href="<?php echo $link_url; ?>" class="button-cta button-cta-red"><span><?php echo $link_title; ?></span></a>  -->
		        </div>
    		    </div>
    		</div>
      </div>
    </section>
    <!-- Services end -->

    <!-- project start-->
    <section class="project_section">
      <div class="container">
        <h2 class="section_heading"><?php the_field('project_section_heading'); ?></h2>
        <?php if( have_rows('project_section_filter') ): ?>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <?php $i=0;?>
            <?php while( have_rows('project_section_filter') ): the_row(); 
                ?>
                <li class="nav-item">
                    <a class="nav-link <?php if($i==0){?>active<?php }?>" id="<?php the_sub_field('filter_id'); ?>" data-toggle="tab" href="#<?php the_sub_field('filter_href'); ?>" role="tab" aria-controls="all"
                      aria-selected="true"><?php the_sub_field('filter_name'); ?></a>
                  </li>
            <?php $i++;
                  endwhile; ?>
            </ul>
        <?php endif; ?>
        <div class="tab-content" id="myTabContent">
          <?php if( have_rows('project_section_content') ):
                  $j=0;
                  while( have_rows('project_section_content') ) : the_row();?>
                      <div class="tab-pane fade  <?php if($j==0){?>show active<?php }?>" id="<?php the_sub_field('id');?>" role="tabpanel" aria-labelledby="<?php the_sub_field('labelled_by');?>">
                        <div class="project">
                      <?php // Loop over sub repeater rows.
                      if( have_rows('images') ):
                          while( have_rows('images') ) : the_row();?>
                              <a href="<?php the_sub_field('please_enter_the_single_page_url_here'); ?>" class=""><img src="<?php the_sub_field('select_the_image_here'); ?>" alt="project"><span><?php the_sub_field('title'); ?></span> </a>
                      <?php endwhile;
                      endif;?>
                          </div>
                      </div>
                  <?php 
                  $j++;
                  endwhile;
              endif;?>
        </div>
      </div>

      	<div class="project-btns">
	        <div class="container">
		        <!-- <a href="#" class="button-cta">CTA button</a> -->
            <?php $link = get_field('project_buttons'); 
                  $link_url = $link['url'];
                  $link_title = $link['title']; 

            ?>
              <a href="<?php echo $link_url; ?>" class="button-cta"><span><?php echo $link_title; ?></span></a>
		    </div>
		</div>
    </section>
    <!-- project End -->

    <!-- Client start -->
    <section class="client_section">
      <div class="container">
        <h2 class="section_heading"><?php the_field('clients_section_heading');?></h2>
        <div class="row">
        	<div class="col-md-12">
	            <div class="client-img-row">
                <?php if( have_rows('client_images') ): ?>
                    
                    <?php while( have_rows('client_images') ): the_row(); 
                        ?>
                        <div class="client-img-wrapper">
                        <img src="<?php the_sub_field('images'); ?>" alt="">
                        </div>
                    <?php endwhile; ?>
                    
                <?php endif; ?>

	            </div>
       		</div>
        </div>
      </div>
    </section>
    <!-- Client start -->

    <section class="magnet_section">
  	  <div class="container">
  	    <div class="row">
  	      <div class="col-md-6">
  	        <h2  class="section_heading"><?php the_field('ct_section_heading');?></h2>
  	        <p><?php the_field('client_section_heading_description');?></p>
  	        <div class="services_cta-btn">
              <?php $link = get_field('download_button'); 
                    $link_url = $link['url'];
                    $link_title = $link['title']; 

              ?>
  	          <a href="<?php echo $link_url;?>" class="button-cta"><span><?php echo $link_title;?></span></a>
  	        </div>
  	      </div>
  	      <div class="col-md-3 col-sm-6 col-xs-12 magnet">
  	        <img src="<?php the_field('client_image_1');?>" alt="" srcset="" class="">
  	      </div>
  	      <div class="col-md-3 col-sm-6 col-xs-12 how_book">
  	        <img src="<?php the_field('client_image_2');?>" alt="" srcset="">
  	      </div>
  	    </div>
  	  </div>
  	</section>


<?php get_footer(); ?>
<script>

</script>
