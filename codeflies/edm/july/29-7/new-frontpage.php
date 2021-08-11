<?php 
/* Template Name: New Front Page */


get_header('front');
 ?>

  <!-- Content Page Piling -->
  <div class="pagepiling">

    <!-- Section Home -->
    <div class="pp-scrollable scrollable-home text-white section">
      <div class="scroll-wrap">
        <div class="section-bg" style="background-image:url(<?php the_field('background_image');?>);">
          <iframe width="100%" height="100%" src="https://www.youtube.com/embed/tgbNymZ7vqY?playlist=tgbNymZ7vqY&loop=1&autoplay=1&mute=1&controls=0" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="scrollable-content">
          <div class="vertical-centred">
            <div class="boxed boxed-inner">
              <div class="vertical-title hidden-xs hidden-sm"><span><?php the_field('side_heading');?></span></div>
              <div class="boxed">
                <div class="container">
                  <div class="intro">
                    <div class="row">
                      <div class="col-md-8 col-lg-6">
                        <h1 class="display-1 text-white"><?php the_field('section_home_heading');?></h1>
                        <p class="subtitle-top"><?php the_field('section_home_sub_heading');?></p>
                        <div class="hr-bottom"></div>
                        <!-- <a href="https://wp.localserverweb.com/edm/about-us/" class="learn-btn">Learn More</a> -->
                         <?php $link = get_field('banner_button');?>
                        <a href="<?php echo $link_url = $link['url']; ?>" class="learn-btn"><?php echo $link_url = $link['title']; ?></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Section Projects -->
    <div class="pp-scrollable scrollable-projects text-dark section">
      <div class="scroll-wrap">
        <div class="scrollable-content">
          <div class="vertical-centred">
            <div class="boxed boxed-inner">
              <div class="vertical-title hidden-xs hidden-sm"><span><?php the_field('projects_section_side_heading');?></span></div>
              <div class="boxed">
                <div class="container">
                  <div class="intro">
                    <div class="row">
                      <div class="col-md-12">
                        <h2 class="title-uppercase text-dark"><?php the_field('projects_section_heading');?></h2>
                        <p class="text-dark"><?php the_field('projects_section_sub_heading');?></p>
                        <div class="hr-bottom"></div>
                        <?php if( have_rows('project_boxes') ): ?>
                            <div class="what-sec-in">
                            <?php while( have_rows('project_boxes') ): the_row(); 
                                $link = get_sub_field('name_and_url');
                                ?> 
                                <div class="what-box">
                                  <div class="wht-img">
                                    <img src="<?php the_sub_field('image'); ?>">
                                  </div>
                                  <div class="what-box-overlay">
                                    <a href="<?php echo $link_url = $link['url']; ?>"><?php echo $link_url = $link['title']; ?></a>
                                  </div>
                                </div>
                            <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Section About -->
    <div class="section-red pp-scrollable scrollable-about section">
      <div class="scroll-wrap">
        <div class="scrollable-content">
          <div class="vertical-centred">
            <div class="boxed boxed-inner">
              <div class="vertical-title text-white hidden-xs hidden-sm"><span><?php the_field('about_section_side_heading');?></span></div>
              <div class="boxed">
                <div class="container">
                  <div class="intro">
                    <div class="row">
                      <div class="col-md-6 col-lg-6 text-white"> 
                        <h2 class="title-uppercase text-white"><span class="text-primary"><?php the_field('about_section_heading');?></h2>
                        <p><?php the_field('about_section_sub_heading');?></p>
                        <div class="white-border"></div>
                        <!-- <a href="https://wp.localserverweb.com/edm/about-us/" class="learn-btn">Learn More</a> -->
                        <?php $link = get_field('banner_button1');?>
                        <a href="<?php echo $link_url = $link['url']; ?>" class="learn-btn"><?php echo $link_url = $link['title']; ?></a>
                      </div>
                      <div class="col-md-6 col-lg-6">
                        <div class="video-sec">
                          <img src="<?php the_field('video_thumbnail');?>" class="img-responsive">
                          <a href="#" class="js-video-button" data-video-id="<?php the_field('video_id');?>"><img src="<?php the_field('video_icon');?>"></a>
                        </div> 
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Testimonials-->
    <div class="pp-scrollable scrollable-testimonials text-white section">
      <div class="scroll-wrap">
        <div class="section-bg" style="background-image:url(<?php the_field('testimonial_background_image');?>);"></div>
        <div class="scrollable-content">
          <div class="vertical-centred">
            <div class="boxed boxed-inner">
              <div class="vertical-title hidden-xs hidden-sm"><span><?php the_field('testimonial_side_heading');?></span></div>
              <div class="boxed">
                <div class="container">
                  <div class="intro">
                    <div class="row">
                      <div class="col-md-6 col-lg-5">
                        <span class="icon-quote ion-quote"></span>
                        <h2 class="title-uppercase text-white"><span class="text-primary"><?php the_field('testimonial_section_heading');?></h2>
                      </div>
                      <div class="col-md-5 col-lg-5  col-md-offset-1 col-lg-offset-2">
                        <?php if( have_rows('testimonials') ): ?>
                            <div class="review-carousel owl-carousel">
                            <?php while( have_rows('testimonials') ): the_row(); 
                                $link = get_sub_field('link');
                                ?> 
                                <div class="review-carousel-item">
                                  <div class="text">
                                  <p><?php the_sub_field('testimonial_content');?></p>
                                  </div>
                                  <div class="review-author">
                                    <div class="author-name"><?php the_sub_field('author_name');?></div>
                                    <i><?php the_sub_field('author_short_description');?></i>
                                  </div>
                                </div>
                            <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Section Blog -->
    <div class="section-dark pp-scrollable scrollable-partners section">
      <div class="scroll-wrap">
        <div class="scrollable-content">
          <div class="vertical-centred">
            <div class="boxed boxed-inner">
              <div class="vertical-title text-white hidden-xs hidden-sm"><?php the_field('partners_section_side_heading');?></div>
              <div class="boxed">
                <div class="container">
                  <div class="intro overflow-hidden">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="blog-title-sec">
                          <h2 class="title-uppercase text-white"><?php the_field('blog_heading');?></h2>
                          <p><?php the_field('blog_heading_description');?></p>
                        </div>
                          <div class="hr-bottom"></div>

                        <?php 
                        // the query
                        $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>3)); ?>
                         
                        <?php if ( $wpb_all_query->have_posts() ) : ?>
                         
                        <div class="blog-sec-in">
                         
                            <!-- the loop -->
                            <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                                <div class="blog-box">
                                  <div class="blog-img">
                                    <div class="blog-date">
                                      <span class="b-date"><!-- 17 --><?php echo get_the_date( 'd' ); ?></span>
                                      <span class="b-month"><?php echo get_the_date( 'm' ); ?></span>
                                    </div>
                                    <img src="<?php the_post_thumbnail_url(); ?>">
                                  </div>
                                  <div class="blog-heading">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                                  </div>
                                  <div class="blog-content">
                                    <div class="red-border"></div>
                                    <p><?php echo get_excerpt(140, 'the_content'); ?></p>

                                    <ul class="blog-categories">
                                      <!-- <li><a href="#" rel="category tag">Tips &amp; Tricks</a></li><li><a href="#" rel="category tag">Tips &amp; Tricks</a></li> -->

                                      <?php
                                      global $post;
                                      $categories = get_the_category();
                                          foreach ($categories as $category) :
                                             //$exclude = get_the_ID();
                                             //$posts = get_posts('posts_per_page=4&category='. $category->term_id);
                                              ?>
                                      <!-- <a href="<?php //echo esc_url( get_category_link( $category->term_id ) ); ?>" title="View all" class="btn border"><i class="i-right-double-arrow"></i> View all <?php echo $category->name; ?></a> -->
                                      <li><a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>" rel="category tag"><?php echo $category->name; ?></a></li><li><a href="#" rel="category tag"><?php echo $category->name; ?></a></li>
                                      <?php  endforeach; wp_reset_postdata(); ?>

                                    </ul>
                                  </div>
                                </div>
                            <?php endwhile; ?>
                            <!-- end of the loop -->
                         
                        </div>
                         
                            <?php wp_reset_postdata(); ?>
                         
                        <?php else : ?>
                            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                        <?php endif; ?>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Section Contacts -->
    <div class="section-white pp-scrollable scrollable-contacts section">
      <div class="scroll-wrap">
        <div class="scrollable-content">
          <div class="vertical-centred">
            <div class="boxed boxed-inner">
              <div class="vertical-title text-dark hidden-xs hidden-sm"><span><?php the_field('section_contacts_side_heading');?></span></div>
              <div class="boxed">
                <div class="container">
                  <div class="intro overflow-hidden">
                    <div class="row">
                      <div class="col-md-12">
                        <h2 class="title-uppercase"><?php the_field('section_contact_title');?></h2>
                        <div class="red-border"></div>
                      </div>
                      <div class="col-md-7 lft-sec">
                        <!-- <div id="map" class="map-2"></div> -->
                      
                        <?php the_field('section_contact_map');?>
                        <div class="contact-info">
                          <div class="contact-details">
                            <?php if( have_rows('contact_information') ): ?>
                                <ul>
                                <?php while( have_rows('contact_information') ): the_row(); 
                                    $link = get_sub_field('title_and_link');
                                    ?> 
                                    <li><img src="<?php the_sub_field('image');?>"> <a href="<?php echo $link_url = $link['url']; ?>" target="_blank"><?php echo $link_url = $link['title']; ?> <p><?php the_sub_field('para_content');?></p></a></li>
                                <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                          </div>
                          <div class="contact-social">
                            <?php if( have_rows('contact_social') ): ?>
                                <ul>
                                <?php while( have_rows('contact_social') ): the_row(); 
                                    //$link = get_sub_field('title_and_link');
                                    ?> 
                                     <li><a href="<?php the_sub_field('enter_the_url_here');?>" target="_blank"><img src="<?php the_sub_field('image');?>"></a></li>
                                <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-5 rgt-sec">
                        <div class="contact-form">
                          <h3 class="title-uppercase"><?php the_field('contact_form_title');?></h3>
                          <?php echo do_shortcode('[contact-form-7 id="1207" title="Contact form two col"]');?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- jQuery -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/smoothscroll.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.pagepiling.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/owl.carousel.min.js"></script>
  <script src="http://maps.google.com/maps/api/js?key=AIzaSyCwVuYiM-83l2IdjpT9uC0lg4jBm8-w4j8"></script> 
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/gmap.js"></script>

  <!-- Scripts -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-modal-video.min.js"></script> 
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/scripts.js"></script> 
</body>
</html>