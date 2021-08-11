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
              <h1 class="hero_heading"><?php the_field('banner_heading');?></h1>
              <p class="hero_text">
                <?php the_field('banner_heading_description');?>
                
              </p>
              <!-- <a href="javascript:void(0)" class="button button_hover-primary">CTA Button</a> -->
              <div class="button-wrap">
                <?php $link = get_field('banner_cta_button'); 
                      $link_url = $link['url'];
                      $link_title = $link['title']; 

                ?>
                <a href="<?php echo $link_url;?>" class="button-cta"><?php echo $link_title;?></a>
              </div>

              	<div class="hero_img-wrapper mobile-home-hero">
	              <img src="<?php the_field('banner_image');?>" alt="" />
	          	</div>

              <!-- <ul class="hero_socal-links">
                <li><a href="jvascript:void(0)"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="jvascript:void(0)"><i class="fa fa-instagram"></i></a></li>
                <li><a href="jvascript:void(0)"><i class="fa fa-twitter"></i></a></li>
              </ul> -->
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
            <div class="trusted_img-row">
              <?php if( have_rows('tusted_images') ): ?>
                  
                  <?php while( have_rows('tusted_images') ): the_row(); 
                      ?>
                      <div class="trusted_img-wrapper">
                      <img src="<?php the_sub_field('images'); ?>" alt="">
                      </div>
                  <?php endwhile; ?>
                  
              <?php endif; ?>
              <!-- <div class="trusted_img-wrapper">
                <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/google-svg.png" alt="">
              </div>
              <div class="trusted_img-wrapper">
                <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/google-svg.png" alt="">
              </div>
              <div class="trusted_img-wrapper">
                <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/google-svg.png" alt="">
              </div>
              <div class="trusted_img-wrapper">
                <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/google-svg.png" alt="">
              </div>
              <div class="trusted_img-wrapper">
                <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/google-svg.png" alt="">
              </div> -->
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
                              <img src="<?php the_sub_field('image_2'); ?>" class="service-top-icon">
                              <img src="<?php the_sub_field('image_3'); ?>" class="service-red-icon">
                              <img src="<?php the_sub_field('image_4'); ?>" class="service-green-icon">
                              <span class="link"><?php the_sub_field('view_button_text'); ?></span>
                          </div>
                          <div class="service-box-overlay"></div>
                          <a href="<?php the_sub_field('current_service_link'); ?>" class="service-link"></a>
                      </div>
                  </div>
              <?php endwhile; ?>
              
          <?php endif; ?>
        	<!-- <div class="col-md-6 col-lg-4">
        		<div class="service-box">
	                <div class="service-boxin">
	                    <h3> Growth Marketing </h3>
	                    <p> Προτιμάται ενεργά από Tier 4/5 <br> τράπεζες. Αποτελεί τον κύριο <br>πάροχο τραπεζικού λογισμικού για..</p>
	                    <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/Idea.gif" class="img-responsive show-icon">
	                    <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/redEllipse-top.png" class="service-top-icon">
	                    <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/redEllipse.png" class="service-red-icon">
	                    <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/greenElipse.png" class="service-green-icon">
	                    <span class="link">View</span>
	                </div>
	                <div class="service-box-overlay"></div>
	                <a href="#" class="service-link"></a>
	            </div>
        	</div>
          	<div class="col-md-6 col-lg-4">
        		<div class="service-box">
	                <div class="service-boxin">
	                    <h3> Inbound Marketing </h3>
	                    <p> Προτιμάται ενεργά από Tier 4/5 τράπεζες. Αποτελεί τον κύριο πάροχο τραπεζικού λογισμικού για </p>
	                    <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/Gift.gif" class="img-responsive show-icon">
	                    <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/redEllipse-top.png" class="service-top-icon">
	                    <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/redEllipse.png" class="service-red-icon">
	                    <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/greenElipse.png" class="service-green-icon">
	                    <span class="link">View</span>
	                </div>
	                <div class="service-box-overlay"></div>
	                <a href="#" class="service-link"></a>
	            </div>
        	</div>
          	<div class="col-md-6 col-lg-4">
	          	<div class="service-box">
	                <div class="service-boxin">
	                    <h3> B2B Marketing </h3>
	                    <p> Προτιμάται ενεργά από Tier 4/5 τράπεζες. Αποτελεί τον κύριο πάροχο τραπεζικού λογισμικού για</p>
	                    <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/Call-to-Action.gif" class="img-responsive show-icon">
	                    <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/redEllipse-top.png" class="service-top-icon">
	                    <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/redEllipse.png" class="service-red-icon">
	                    <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/greenElipse.png" class="service-green-icon">
	                    <span class="link">View</span>
	                </div>
	                <div class="service-box-overlay"></div>
	                <a href="#" class="service-link"></a>
	            </div>
          	</div>
          	<div class="col-md-6 col-lg-4">
	          	<div class="service-box">
	                <div class="service-boxin">
	                    <h3> Lead Generation </h3>
	                    <p> Προτιμάται ενεργά από Tier 4/5 τράπεζες. Αποτελεί τον κύριο πάροχο τραπεζικού λογισμικού για</p>
	                    <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/Mailbox.gif" class="img-responsive show-icon">
	                    <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/redEllipse-top.png" class="service-top-icon">
	                    <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/redEllipse.png" class="service-red-icon">
	                    <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/greenElipse.png" class="service-green-icon">
	                    <span class="link">View</span>
	                </div>
	                <div class="service-box-overlay"></div>
	                <a href="#" class="service-link"></a>
	            </div>
          	</div>
          	<div class="col-md-6 col-lg-4">
	          	<div class="service-box">
	                <div class="service-boxin">
	                    <h3> Content Marketing </h3>
	                    <p> Προτιμάται ενεργά από Tier 4/5 τράπεζες. Αποτελεί τον κύριο πάροχο τραπεζικού λογισμικού για</p>
	                    <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/Chat.gif" class="img-responsive show-icon">
	                    <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/redEllipse-top.png" class="service-top-icon">
	                    <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/redEllipse.png" class="service-red-icon">
	                    <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/greenElipse.png" class="service-green-icon">
	                    <span class="link">View</span>
	                </div>
	                <div class="service-box-overlay"></div>
	                <a href="#" class="service-link"></a>
	            </div>
          	</div>
          	<div class="col-md-6 col-lg-4">
	          	<div class="service-box">
	                <div class="service-boxin">
	                    <h3> Web Design &amp; Develpment</h3>
	                    <p> Προτιμάται ενεργά από Tier 4/5 τράπεζες. Αποτελεί τον κύριο πάροχο τραπεζικού λογισμικού για</p>
	                    <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/Mobile-Notifications.gif" class="img-responsive show-icon">
	                    <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/redEllipse-top.png" class="service-top-icon">
	                    <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/redEllipse.png" class="service-red-icon">
	                    <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/greenElipse.png" class="service-green-icon">
	                    <span class="link">View</span>
	                </div>
	                <div class="service-box-overlay"></div>
	                <a href="#" class="service-link"></a>
	            </div>
          	</div> -->
        </div>
        <div class="service-btns">
	        <div class="container">
		        <div class="button-wrap">
              <?php $link = get_field('load_more_button'); 
                    $link_url = $link['url'];
                    $link_title = $link['title']; 

              ?>
		          	<a href="<?php echo $link_url; ?>" class="button-cta"><?php echo $link_title; ?></a>
		            <!-- <a href="#" class="button-cta">CTA button</a> -->

              <?php $link = get_field('load_more_button_2'); 
                    $link_url = $link['url'];
                    $link_title = $link['title']; 

              ?>
                <a href="<?php echo $link_url; ?>" class="button-cta"><?php echo $link_title; ?></a>
		        </div>
		    </div>
		</div>
      </div>
    </section>
    <!-- Services end -->

    <!-- project start-->
    <section class="project_section">
      <div class="container">
        <h2 class="section_heading">Featured Projects</h2>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="all_tab" data-toggle="tab" href="#all" role="tab" aria-controls="all"
              aria-selected="true">All</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="inbound_tab" data-toggle="tab" href="#inbound_marketing" role="tab"
              aria-controls="inbound_marketin" aria-selected="false">Inbound Marketing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="social_tab" data-toggle="tab" href="#social_media" role="tab"
              aria-controls="social_media" aria-selected="false">Social Media</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="website_tab" data-toggle="tab" href="#websites" role="tab" aria-controls="websites"
              aria-selected="false">Websites</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all_tab">
            <div class="project">
               <a href="#" class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project1x.png" alt="project"><span>Syndeseas Website</span> </a>
              <a href="#" class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project2x.jpg" alt="project"><span>Syndeseas Website</span> </a>
              <a href="#" class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project3x.png" alt="project"><span>Syndeseas Website</span> </a>
              <a href="#" class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project1x.png" alt="project"><span>Syndeseas Website</span> </a>
              <a href="#" class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project2x.jpg" alt="project"><span>Syndeseas Website</span> </a>
              <a href="#" class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project3x.png" alt="project"><span>Syndeseas Website</span> </a>
            </div>
          </div>
          <div class="tab-pane fade" id="inbound_marketing" role="tabpanel" aria-labelledby="inbound_tab">
            <div class="project">
               <a href="#" class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project1x.png" alt="project"><span>Syndeseas Website</span> </a>
              <a href="#" class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project2x.jpg" alt="project"><span>Syndeseas Website</span> </a>
              <a href="#" class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project3x.png" alt="project"><span>Syndeseas Website</span> </a>
              <a href="#" class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project1x.png" alt="project"><span>Syndeseas Website</span> </a>
              <a href="#" class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project2x.jpg" alt="project"><span>Syndeseas Website</span> </a>
              <a href="#" class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project3x.png" alt="project"><span>Syndeseas Website</span> </a>
            </div>
          </div>
          <div class="tab-pane fade" id="social_media" role="tabpanel" aria-labelledby="social_tab">
            <div class="project">
               <a href="#" class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project1x.png" alt="project"><span>Syndeseas Website</span> </a>
              <a href="#" class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project2x.jpg" alt="project"><span>Syndeseas Website</span> </a>
              <a href="#" class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project3x.png" alt="project"><span>Syndeseas Website</span> </a>
              <a href="#" class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project1x.png" alt="project"><span>Syndeseas Website</span> </a>
              <a href="#" class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project2x.jpg" alt="project"><span>Syndeseas Website</span> </a>
              <a href="#" class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project3x.png" alt="project"><span>Syndeseas Website</span> </a>
            </div>
          </div>
          <div class="tab-pane fade" id="websites" role="tabpanel" aria-labelledby="website_tab">
            <div class="project">
             <a href="#" class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project1x.png" alt="project"><span>Syndeseas Website</span> </a>
              <a href="#" class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project2x.jpg" alt="project"><span>Syndeseas Website</span> </a>
              <a href="#" class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project3x.png" alt="project"><span>Syndeseas Website</span> </a>
              <a href="#" class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project1x.png" alt="project"><span>Syndeseas Website</span> </a>
              <a href="#" class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project2x.jpg" alt="project"><span>Syndeseas Website</span> </a>
              <a href="#" class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project3x.png" alt="project"><span>Syndeseas Website</span> </a>
            </div>
          </div>
        </div>
      </div>

      	<div class="project-btns">
	        <div class="container">
		        <a href="#" class="button-cta">CTA button</a>
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
	              <!-- <div class="client-img-wrapper">
	                <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/google-svg.png" alt="">
	              </div>
	              <div class="client-img-wrapper">
	                <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/google-svg.png" alt="">
	              </div>
	              <div class="client-img-wrapper">
	                <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/google-svg.png" alt="">
	              </div>
	              <div class="client-img-wrapper">
	                <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/google-svg.png" alt="">
	              </div>
	              <div class="client-img-wrapper">
	                <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/google-svg.png" alt="">
	              </div>
	              <div class="client-img-wrapper">
	                <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/google-svg.png" alt="">
	              </div>
	              <div class="client-img-wrapper">
	                <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/google-svg.png" alt="">
	              </div>
	              <div class="client-img-wrapper">
	                <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/google-svg.png" alt="">
	              </div>
	              <div class="client-img-wrapper">
	                <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/google-svg.png" alt="">
	              </div>
	              <div class="client-img-wrapper">
	                <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/google-svg.png" alt="">
	              </div>
	              <div class="client-img-wrapper">
	                <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/google-svg.png" alt="">
	              </div>
	              <div class="client-img-wrapper">
	                <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/google-svg.png" alt="">
	              </div>
	              <div class="client-img-wrapper">
	                <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/google-svg.png" alt="">
	              </div>
	              <div class="client-img-wrapper">
	                <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/google-svg.png" alt="">
	              </div>
	              <div class="client-img-wrapper">
	                <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/google-svg.png" alt="">
	              </div> -->
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
	          <a href="<?php echo $link_url;?>" class="button-cta"><?php echo $link_title;?></a>
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
	<!-- <div class="step-form-sec">
	  <div class="container">
	    <div class="row">
	      <div class="steps-form">
	        <?php //echo do_shortcode('[formidable id=2]'); ?>
	      </div>
	    </div>
	  </div>
	</div> -->


<?php get_footer(); ?>
