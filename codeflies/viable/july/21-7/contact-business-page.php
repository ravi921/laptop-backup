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

  <!-- Contact start -->
  <div class="contact-sec">
    <div class="contact-form-left">
      <div class="step-form-sec">
        <h2 class="section_heading">Get in touch</h2>
        <div class="row">
          <div class="steps-form">
            <?php echo do_shortcode('[formidable id=4]'); ?>
          </div>
        </div>
        <div class="form-bottom-details">
          <div class="row">
            <div class="col-md-3">
              <div class="form-image">
                <img src="https://wp.localserverweb.com/viable/wp-content/uploads/2021/07/Mailbox.gif" />
              </div>
            </div>
            <div class="col-md-3">
              <div class="location-number">
                <p>Athens <span><a href="tel:+302103001608">(+30) 21 0300 1608</a></span></p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="location-number">
                <p>London <span><a href="tel:+442038686656">(+44) 20 3868 6656</a></span></p>
              </div>
            </div>
            <div class="col-md-3"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="contact-details-right">
      <div class="get-in-touch">
        <h5>Work With Us</h5>
        <p>Let us amplify your brand for a modern world.</p>
        <p><a href="javascript:void(0)">Get in touch</a></p>
      </div>
      <div class="social-icons">
        <ul class="hero_socal-links">
          <li><a href="javascript:void(0)"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
          <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Contact End -->


<?php get_footer(); ?>
