<?php
/**
 * Template Name: Projects Template
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
                  <p class="hero_text"><?php the_field('banner_heading_description');?> </p>
                  <div class="button-wrap">
                    <?php $link = get_field('banner_cta_button'); 
                      $link_url = $link['url'];
                      $link_title = $link['title']; 
                    ?>
                    <a href="<?php echo $link_url;?>" class="button-cta"><span><?php echo $link_title;?></span></a>
                  </div>
                </div>
                <div class="hero_content-in">
                  <h1 class="hero_heading"><?php the_field('banner_heading');?></h1>
                  <p class="hero_text"><?php the_field('banner_heading_description');?> </p>
                  <div class="button-wrap">
                    <?php $link = get_field('banner_cta_button'); 
                      $link_url = $link['url'];
                      $link_title = $link['title']; 
                    ?>
                    <a href="<?php echo $link_url;?>" class="button-cta"><span><?php echo $link_title;?></span></a>
                  </div>
                </div>
              </div>

              <div class="hero_img-wrapper mobile-home-hero">
                <img src="<?php the_field('banner_image');?>" alt="" />
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
      <div class="container">
        <div class="row">
          <div class="text-center w-100 d-block explore-btn">
            <a href="#waysec"><?php the_field('social_connect');?></a>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero end -->

    <div id="waysec" class="way-map-sec">
      <div class="container">
        <div class="row">
          <div class="explore-text">
            <p><?php the_field('explore_text');?></p>
          </div>
        </div>
      </div>
      <div class="viable-sitemap hide-mobile">
        <div class="container">
          <div class="row">
            <div class="sitemap-head">
              <h3><?php the_field('viable_section_heading');?></h3>
            </div>
            <div class="sitemap-structure">
              <?php if( have_rows('sitemap_content') ): ?>
                
                  <?php while( have_rows('sitemap_content') ): the_row(); ?>
                    <div class="col-md-6">
                  <div class="sitemap-structure-content">
                          <p><?php the_sub_field('enter_content_here'); ?></p>
                           </div>
                </div>
                  <?php endwhile; ?>
                 
              <?php endif; ?>
              <div class="d-block text-center">
                <?php $link = get_field('cta_button'); 
                      $link_url = $link['url'];
                      $link_title = $link['title']; 

                ?>
                <a class="button-cta text-center" href="<?php echo $link_url = $link['url'];?>"><span><?php echo $link_url = $link['title'];?></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="viable-sitemap show-mobile">
        <div class="container">
          <div class="row">
            <div class="sitemap-head">
              <h3><?php the_field('viable_section_heading_mobile');?></h3>
            </div>
            <div class="sitemap-structure">
              <?php if( have_rows('sitemap_tabs') ): ?>
                 <ul class="nav nav-tabs responsive-tabs">
                 <?php $k=0;
                 while( have_rows('sitemap_tabs') ): the_row(); ?>
                     <li <?php if($k==0){ ?>  class="active" <?php } ?> >
                       <a href="#<?php the_sub_field('href'); ?>"><?php the_sub_field('title'); ?></a>
                   </li>
                 <?php 
                     $k++;
                 endwhile; ?>
                 </ul>
              <?php endif; ?>

              <div class="tab-content">
                <?php if( have_rows('sitemap_content_mobile') ): 
                    $jk=0;
                  ?>
                  
                    <?php while( have_rows('sitemap_content_mobile') ): the_row(); ?>
                      <div class="sitemap-structure-content tab-pane <?php if($jk==0){ ?> active <?php }?>" id="<?php the_sub_field('enter_id_here'); ?>">
                            <?php the_sub_field('enter_content_here'); ?>
                      </div>
                    <?php 
                    $jk++;
                     endwhile; ?>
                   
                <?php endif; ?>
              </div>
              
              <div class="d-block text-center">
                <?php $link = get_field('cta_button'); 
                      $link_url = $link['url'];
                      $link_title = $link['title']; 

                ?>
                <a class="button-cta text-center" href="<?php echo $link_url = $link['url'];?>"><span><?php echo $link_url = $link['title'];?></span></a>
              </div>


              <!-- <div class="project-acc">
                <div class="tab-content">
                  <div class="acc-item">
                    <h4><a class="accordion-link">Attract</a></h4>
                    <div class="sitemap-structure-content">
                      <p>Attracting prospect leads is the first stage in the inbound marketing methodology. It’s very crucial here to be where your prospect is.</p>
                      <p>To do that, you have to understand your customer persona and their customer journey thoroughly.</p> 
                      <p>The next step is to organize and create valuable content to provide them with proper placement via SEO, blogging, and social media marketing at the right time.</p>
                    </div>
                  </div>
                  <div class="acc-item">
                    <h4><a class="accordion-link">Engage</a></h4>
                    <div class="sitemap-structure-content">
                      <p>Engage</p>
                      <p>Once you attract exemplary visitors to the site, the goal is to convert them into leads by obtaining their contact information(Form GDPR Complied) on a landing page. In order to receive this extremey valuable information from them, they need to get something in return its a win-win situation. Here is when you should deliver them high-quality and premium content that is targeting to aid in their decision-making journey. This content helps give them the information they are looking for while providing you, the marketer, with their contact information to market to them in the future effectively.</p>
                      <p>The stage is where leads go into customers called close stage. Close stage uses specific marketing tools include email marketing, marketing automation, lead nurturing, and social media monitoring,tailord made ads. Those tools utilized to ensure that the correct leads are handed to sales at the right time (if you are B2B), so they can connect with the prospect and close the deal. So If you are B2C, you are using these channels to educate your chance to a point where they are ready to purchase.</p>
                    </div>
                  </div>
                  <div class="acc-item">
                    <h4><a class="accordion-link">Delight</a></h4>
                    <div class="sitemap-structure-content">
                      <p>Inbound marketing revolves around providing remarkable content to both your leads suchyour customers. Based on that, even after a lead becomes a customer, they must still be engaged through dynamic content, social media, and trigger marketing.</p>
                      <p>Our main goal of delighting customers is to solve their issues,conflicts and turn them into promoters of your business. You always need to think about the customer because they can be the mostprominent advocates for your brand or the most significant detractors.</p>
                    </div>
                  </div>
                </div>
              </div> -->

            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- project start-->
    <section class="project_section">
      <div class="container">
        <h2 class="section_heading"><?php the_field('project_section_heading'); ?></h2>
        <?php if( have_rows('project_section_filter') ): ?>
            <ul class="nav nav-tabs nav-tab-projects" id="myTab" role="tablist">
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

        <div class="tab-content tab-content-project" id="myTabContent">
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
    </section>
    <!-- project End -->


<?php get_footer(); ?>
