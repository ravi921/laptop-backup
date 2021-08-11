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

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="entry-page-image">
						<?php the_post_thumbnail(); ?>
					</div><!-- .entry-page-image -->
				<?php endif; ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<!-- Hero start -->
    <section class="hero_section inner-hero">
      <div class="container">
        <div class="row align-content-center">
          <div class="col-md-6">
            <div class="hero_content">
              <h1 class="hero_heading">Services</h1>
              <p class="hero_text">Spin up a complete growth marketing department on-demand for extend your existing team with the specific service packages you need. Spin up a complete growth marketing department on-demand or extend your existing team with the specific service packages you need.</p>

              <div class="hero_img-wrapper mobile-home-hero">
	              <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/Alarm-Clock.gif" alt="" />
	          	</div>
            </div>

          </div>
          <div class="col-md-6 col-sm-6 hero_img-wrapper">
          	<div class="hero_img-wrapper-in">
              <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/Alarm-Clock.gif" alt="" />
          	</div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="text-center w-100 d-block explore-btn">
            <a href="#waysec">Explore</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero end -->

    <div id="waysec" class="way-map-sec">
      <div class="container">
        <div class="row">
          <div class="explore-text">
            <p>As we mention, our goal is to attract, engage and delight people with our products or services.</p>
          </div>
        </div>
      </div>
      <div class="viable-sitemap hide-mobile">
        <div class="container">
          <div class="row">
            <div class="sitemap-head">
              <h3>Viable Way</h3>
            </div>
            <div class="sitemap-structure">
              <div class="col-md-6">
                <div class="sitemap-structure-content">
                  <p>Attracting prospect leads is the first stage in the inbound marketing methodology. It's very crucial here to be where your prospect is.</p>
                  <p>To do that, you have to understand your customer persona and their customer journey thoroughly.</p>
                  <p>The next step is to organize and create valuable content to provide them with proper placement via SEO, blogging, and social media marketing at the right time.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="sitemap-structure-content">
                  <p>Engage</p>
                  <p>Once you attract exemplary visitors to the site, the goal is to convert them into leads by obtaining their contact information(Form GDPR Complied) on a landing page. In order to receive this extremey valuable information from them, they need to get something in return its a win-win situation. Here is when you should deliver them high-quality and premium content that is targeting to aid in their decision-making journey. This content helps give them the information they are looking for while providing you, the marketer, with their contact information to market to them in the future effectively.</p>
                  <p>The stage is where leads go into customers called close stage. Close stage uses specific marketing tools include email marketing, marketing automation, lead nurturing, and social media monitoring,tailord made ads. Those tools utilized to ensure that the correct leads are handed to sales at the right time (if you are B2B), so they can connect with the prospect and close the deal. So If you are B2C, you are using these channels to educate your chance to a point where they are ready to purchase.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="sitemap-structure-content">
                  <p>Inbound marketing revolves around providing remarkable content to both your leads suchyour customers. Based on that, even after a lead becomes a customer, they must still be engaged through dynamic content, social media, and trigger marketing.</p>
                  <p>Our main goal of delighting customers is to solve their issues,conflicts and turn them into promoters of your business. You always need to think about the customer because they can be the mostprominent advocates for your brand or the most significant detractors.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="viable-sitemap show-mobile">
        <div class="container">
          <div class="row">
            <div class="sitemap-head">
              <h3>Viable Way</h3>
            </div>
            <div class="sitemap-structure">
              <ul class="nav nav-tabs responsive-tabs">
                <li class="active"><a href="#attract">Attract</a></li>
                <li><a href="#engage">Engage</a></li>
                <li><a href="#delight">Delight</a></li>
              </ul>

              <div class="tab-content">
                <div class="sitemap-structure-content tab-pane active" id="attract">
                  <p>Attracting prospect leads is the first stage in the inbound marketing methodology. It's very crucial here to be where your prospect is.</p>
                  <p>To do that, you have to understand your customer persona and their customer journey thoroughly.</p>
                  <p>The next step is to organize and create valuable content to provide them with proper placement via SEO, blogging, and social media marketing at the right time.</p>
                </div>
                <div class="sitemap-structure-content tab-pane" id="engage">
                  <p>Once you attract exemplary visitors to the site, the goal is to convert them into leads by obtaining their contact information(Form GDPR Complied) on a landing page. In order to receive this extremey valuable information from them, they need to get something in return its a win-win situation. Here is when you should deliver them high-quality and premium content that is targeting to aid in their decision-making journey. This content helps give them the information they are looking for while providing you, the marketer, with their contact information to market to them in the future effectively.</p>
                  <p>The stage is where leads go into customers called close stage. Close stage uses specific marketing tools include email marketing, marketing automation, lead nurturing, and social media monitoring,tailord made ads. Those tools utilized to ensure that the correct leads are handed to sales at the right time (if you are B2B), so they can connect with the prospect and close the deal. So If you are B2C, you are using these channels to educate your chance to a point where they are ready to purchase.</p>
                </div>
                <div class="sitemap-structure-content tab-pane" id="delight">
                  <p>Inbound marketing revolves around providing remarkable content to both your leads suchyour customers. Based on that, even after a lead becomes a customer, they must still be engaged through dynamic content, social media, and trigger marketing.</p>
                  <p>Our main goal of delighting customers is to solve their issues,conflicts and turn them into promoters of your business. You always need to think about the customer because they can be the mostprominent advocates for your brand or the most significant detractors.</p>
                </div>
              </div>
            </div>
            <!-- <div class="sitemap-structure">
              <div class="col-md-6">
                <div class="sitemap-structure-content">
                  <p>Attracting prospect leads is the first stage in the inbound marketing methodology. It's very crucial here to be where your prospect is.</p>
                  <p>To do that, you have to understand your customer persona and their customer journey thoroughly.</p>
                  <p>The next step is to organize and create valuable content to provide them with proper placement via SEO, blogging, and social media marketing at the right time.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="sitemap-structure-content">
                  <p>Once you attract exemplary visitors to the site, the goal is to convert them into leads by obtaining their contact information(Form GDPR Complied) on a landing page. In order to receive this extremey valuable information from them, they need to get something in return its a win-win situation. Here is when you should deliver them high-quality and premium content that is targeting to aid in their decision-making journey. This content helps give them the information they are looking for while providing you, the marketer, with their contact information to market to them in the future effectively.</p>
                  <p>The stage is where leads go into customers called close stage. Close stage uses specific marketing tools include email marketing, marketing automation, lead nurturing, and social media monitoring,tailord made ads. Those tools utilized to ensure that the correct leads are handed to sales at the right time (if you are B2B), so they can connect with the prospect and close the deal. So If you are B2C, you are using these channels to educate your chance to a point where they are ready to purchase.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="sitemap-structure-content">
                  <p>Inbound marketing revolves around providing remarkable content to both your leads suchyour customers. Based on that, even after a lead becomes a customer, they must still be engaged through dynamic content, social media, and trigger marketing.</p>
                  <p>Our main goal of delighting customers is to solve their issues,conflicts and turn them into promoters of your business. You always need to think about the customer because they can be the mostprominent advocates for your brand or the most significant detractors.</p>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>

    <!-- project start-->
    <section class="project_section">
      <div class="container">
        <h2 class="section_heading">Case Studies</h2>
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
              <div class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project1.png" alt="project"><span>Syndeseas Website</span> </div>
              <div class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project2.png" alt="project"><span>Syndeseas Website</span> </div>
              <div class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project3.png" alt="project"><span>Syndeseas Website</span> </div>
              <div class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project1.png" alt="project"><span>Syndeseas Website</span> </div>
              <div class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project2.png" alt="project"><span>Syndeseas Website</span> </div>
              <div class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project3.png" alt="project"><span>Syndeseas Website</span> </div>
            </div>
          </div>
          <div class="tab-pane fade" id="inbound_marketing" role="tabpanel" aria-labelledby="inbound_tab">
            <div class="project">
              <div class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project1.png" alt="project"><span>Syndeseas Website</span> </div>
              <div class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project2.png" alt="project"><span>Syndeseas Website</span> </div>
              <div class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project3.png" alt="project"><span>Syndeseas Website</span> </div>
              <div class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project1.png" alt="project"><span>Syndeseas Website</span> </div>
              <div class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project2.png" alt="project"><span>Syndeseas Website</span> </div>
              <div class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project3.png" alt="project"><span>Syndeseas Website</span> </div>
            </div>
          </div>
          <div class="tab-pane fade" id="social_media" role="tabpanel" aria-labelledby="social_tab">
            <div class="project">
              <div class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project1.png" alt="project"><span>Syndeseas Website</span> </div>
              <div class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project2.png" alt="project"><span>Syndeseas Website</span> </div>
              <div class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project3.png" alt="project"><span>Syndeseas Website</span> </div>
              <div class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project1.png" alt="project"><span>Syndeseas Website</span> </div>
              <div class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project2.png" alt="project"><span>Syndeseas Website</span> </div>
              <div class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project3.png" alt="project"><span>Syndeseas Website</span> </div>
            </div>
          </div>
          <div class="tab-pane fade" id="websites" role="tabpanel" aria-labelledby="website_tab">
            <div class="project">
              <div class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project1.png" alt="project"><span>Syndeseas Website</span> </div>
              <div class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project2.png" alt="project"><span>Syndeseas Website</span> </div>
              <div class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project3.png" alt="project"><span>Syndeseas Website</span> </div>
              <div class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project1.png" alt="project"><span>Syndeseas Website</span> </div>
              <div class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project2.png" alt="project"><span>Syndeseas Website</span> </div>
              <div class=""><img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/project3.png" alt="project"><span>Syndeseas Website</span> </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- project End -->


<?php get_footer(); ?>
