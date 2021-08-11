<?php
/**
 * Template Name: Platform Signup
 */

get_header();
the_post();
?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.4/lottie.min.js"></script>
<div class="main--platform">
	<div class="platform-hero">
		<div class="wrap">
			<div class="row">
				<div class="col-sm-5 lft-sec">
					<div class="icon-heading"><img src="<?php echo get_field("icon")["url"];?>"> <span><?php echo get_field("icon_heading");?></span></div>
					<h2><?php echo get_field("large_heading");?></h2>
					<p><?php echo get_field("paragraph");?></p>
					<div class="hero-img mobile-visible">
						<div id="bm7" data-json="<?php echo get_field('svg_image_mobile1'); ?>"></div>
					</div>
					<div class="hero-btn">
						<a href="<?php echo get_field("signup_button")["url"];?>" class="btn" target="_self"><?php echo get_field("signup_button")["title"];?></a>
					</div>
				</div>
				<div class="col-sm-7 rgt-col">
					<div class="hero-img desktop-visible">
						<div id="bmm" data-json="<?php echo get_field('svg_image_desktop1'); ?>"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Hero End -->
	<div class="platform-sec-1">
		<div class="wrap">
			<div class="columns--desktop">
				<div class="row">
					
					<?php

						// Check rows exists.
						if( have_rows('benefits') ){

							// Loop through rows.
							while( have_rows('benefits') ) : the_row();
							?>
								<div class="col-sm-4">
									<div class="sec1-box">
										<img src="<?php echo get_sub_field("image")["url"]; ?>" />
										<h4><?php echo get_sub_field("heading"); ?></h4>
										<p><?php echo get_sub_field("paragraph"); ?></p>
									</div>
								</div>

							<?php	
							// End loop.
							endwhile;
						}
					?>
				</div>
			</div>
		</div>
	</div>	
	<!-- section 1 end -->
	<!-- section 2 start -->
	<div class="platform-sec-2">
		<div class="wrap">
			<div class="sec-2-heading">
		    	<h2><?php echo get_field("title");?></h2>
		    	<p><?php echo get_field("text");?></p>
		    </div>
		    <div class="sec-2-img">
		    	<div id="bm2" class="desktop-visible" data-json="<?php echo get_field('section_1_svg_for_desktop'); ?>"></div>

		    	<div id="bm11" class="mobile-visible" data-json="<?php echo get_field('section_1_svg_for_mobile'); ?>"></div>
		    	<!-- /#bm -->
		    </div>
		    <div class="sec-2-row-2">
		    	<div class="row">
		    		<div class="col-sm-12">
		    			<div id="bm3" class="desktop-visible" data-json="<?php echo get_field('section_2_svg_for_desktop'); ?>"></div>	
		    			<div id="bm12" class="mobile-visible" data-json="<?php echo get_field('section_2_svg_for_mobile'); ?>"></div>	    			
		    		</div>
		    	</div>
		    </div>

		    <div class="sec-2-btns">
					<a href="<?php echo get_field("signup_button_copy")["url"];?>" class="btn"><?php echo get_field("signup_button_copy")["title"];?></a>
				</div>
		</div>
	</div>
	<!-- section 2 end -->
	
	<!-- section 3 start -->
	<div class="platform-sec-3">
		<div class="sec-3-row-1">
			<div class="wrap">
				<div class="row">
					<div class="col-sm-7 lft-col desktop-visible">
						<?php if(get_field('show_left_section1')) {?>
		    			<div id="bm4" class="lft-img" data-json="<?php echo get_field('svg_for_desktop2'); ?>"></div>
		    		<?php } ?>
		    			<div class="left-img-cover"><img src="<?php echo get_field('floating_image'); ?>"></div>
					</div>
					<div class="col-sm-5 rgt-col">
						<div class="icon-heading">
							<img src="<?php echo get_field("build_icon")["url"]; ?>"><span><?php echo get_field("icon_text"); ?></span>
						</div>
						<h4><?php echo get_field("build_title"); ?></h4>
						<ul>
								
							<?php

								// Check rows exists.
								if( have_rows('build_paragraph') ){
									// Loop through rows.
									while( have_rows('build_paragraph') ) : the_row();
									?>
										<li><?php echo get_sub_field("build_text"); ?></li>
									<?php	
									// End loop.
									endwhile;
								}
							?>
						</ul>
						<?php if(get_field('show_left_section1')) {?>
						<div id="bm8" class="mobile-full-img mobile-visible" data-json="<?php echo get_field('svg_for_mobile2'); ?>"></div>
					<?php } ?>
						<div class="sec-2-btns">
							<a href="<?php echo get_field("build_signup_button")["url"];?>" class="btn" target="_self"><?php echo get_field("build_signup_button")["title"];?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end -->
		<div class="sec-3-row-1 row-flip">
			<div class="wrap">
				<div class="row">
					<div class="col-sm-7 lft-col desktop-visible">
						<?php if(get_field('show_right_section2')) {?>
		    			<div id="bm5" class="lft-img" data-json="<?php echo get_field('svg_for_desktop3'); ?>"></div>
		    		<?php }?>
						<div class="left-img-cover"><img src="<?php echo get_field('floating_image2'); ?>"></div>
					</div>
					<div class="col-sm-5 rgt-col">
						<div class="icon-heading">
							<img src="<?php echo get_field("optimize_icon")["url"]; ?>"><span><?php echo get_field("optimize_icon_text"); ?></span>
						</div>
						<h4><?php echo get_field("optimize_title"); ?></h4>
						<ul>
							<?php

								// Check rows exists.
								if( have_rows('optimize_paragraph') ){
									// Loop through rows.
									while( have_rows('optimize_paragraph') ) : the_row();
									?>
										<li><?php echo get_sub_field("optimize_text"); ?></li>
									<?php	
									// End loop.
									endwhile;
								}
							?>

						</ul>
						<?php if(get_field('show_right_section2')) {?>
						<div id="bm9" class="mobile-full-img mobile-visible" data-json="<?php echo get_field('svg_for_mobile3'); ?>"></div>
					<?php } ?>
						<div class="sec-2-btns">
							<a href="<?php echo get_field("optimize_signup_button")["url"];?>" class="btn" target="_self"><?php echo get_field("optimize_signup_button")["title"];?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end -->
		<div class="sec-3-row-1">
			<div class="wrap">
				<div class="row">
					<div class="col-sm-7 lft-col desktop-visible">
						<!-- <?php if(get_field('show_left_section3')) {?>
		    			<div id="bm6" class="lft-img" data-json="<?php echo get_field('svg_for_desktop4'); ?>"></div>
		    		<?php } ?> -->
		    			<div id="bm6" class="lft-img" data-json="<?php bloginfo('template_url'); ?>/resources/js/sec3-Deploy.json?v=14"></div>
						<div class="left-img-cover"><img src="<?php echo get_field('floating_image4'); ?>"></div>
					</div>
					<div class="col-sm-5 rgt-col">
						<div class="icon-heading">
							<img src="<?php echo get_field("deploy_icon")["url"]; ?>"><span><?php echo get_field("deploy_icon_text"); ?></span>
						</div>
						<h4><?php echo get_field("deploy_title"); ?></h4>
						<ul>
							<?php

								// Check rows exists.
								if( have_rows('deploy_paragraph') ){
									// Loop through rows.
									while( have_rows('deploy_paragraph') ) : the_row();
									?>
										<li><?php echo get_sub_field("deploy_text"); ?></li>
									<?php	
									// End loop.
									endwhile;
								}
							?>
						</ul>

						<!-- <?php if(get_field('show_left_section3')) {?>
						<div id="bm10" class="mobile-full-img mobile-visible" data-json="<?php echo get_field('svg_for_mobile4'); ?>"></div>
						<?php } ?> -->

						<div id="bm10" class="mobile-full-img mobile-visible" data-json="<?php bloginfo('template_url'); ?>/resources/js/mob-Deploy.json?v=14"></div>


						<div class="sec-2-btns">
							<a href="<?php echo get_field("deploy_signup_button")["url"];?>" class="btn" target="_self"><?php echo get_field("deploy_signup_button")["title"];?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end -->
	</div>
	<!-- section 3 end -->

	<!-- section 4 start -->
	<?php $show_sectioncard = get_field('show_sectioncard'); if($show_sectioncard) { ?>
	<div class="column-section platform-columns-section">
		<div class="platform-columns-section-svg desktop-visible">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/platform/ai-developers2.svg">
		</div>
		<div class="platform-columns-section-svg mobile-visible">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/platform/mob-ai-developers.svg">
		</div>
		<div class="wrap">
			<div class="column-section__head">
				<h2><?php echo get_field("card_heading"); ?></h2>
			</div><!-- /.column-section__head -->

			<div class="columns columns--desktop">
				<!-- /.column -->
					<?php

						// Check rows exists.
						if( have_rows('card_layout') ){
							// Loop through rows.
							while( have_rows('card_layout') ) : the_row();
						?>
				
							<div class="column">
								<div class="column__inner">
									<div class="icon">
										<img src="<?php echo get_sub_field("card_icon")["url"]; ?>" class="attachment-full" alt="">
									</div><!-- /.icon -->
									<h4><?php echo get_sub_field("card_title");?></h4>
									<p><?php echo get_sub_field("card_text");?></p>
								</div><!-- /.column__inner -->
							</div>
						<?php	
							// End loop.
							endwhile;
						}
					?>
			</div>
			<!-- /.columns -->
			
			
			
			<div class="columns columns--mobile">
				<!-- /.column -->
				
				<?php

					// Check rows exists.
					if( have_rows('card_layout') ){
						// Loop through rows.
						while( have_rows('card_layout') ) : the_row();
					?>
						<div class="column">
							<div class="column__inner">
								<div class="icon">
									<img src="<?php echo get_sub_field("card_icon")["url"]; ?>" class="attachment-full size-full" alt="">
								</div><!-- /.icon -->
								<h4><?php echo get_sub_field("card_title");?></h4>
								<p><?php echo get_sub_field("card_text");?></p>
							</div><!-- /.column__inner -->
						</div>
					<?php	
						// End loop.
						endwhile;
					}
				?>
			</div><!-- /.columns -->

			<div class="platform-columns-btns">
				<a href="<?php echo get_field("card_button")["url"];?>" class="btn"><?php echo get_field("card_button")["title"];?></a>
			</div>
		</div><!-- /.wrap -->
	</div>
	<?php } ?>
	<!-- section 4 end -->

	<!-- section 6 start -->
	<div class="adobe-testimonial platform-testimonials">
	  <div class="wrap">
	    <div class="adobe_test_inner">
		    
			<?php

				// Check rows exists.
				if( have_rows('testimonials') ){
					// Loop through rows.
					while( have_rows('testimonials') ) : the_row();
				?>
				
					<div class="item">
					  <div class="testi-box">
						<div class="testi-brand"><img src="<?php echo get_sub_field("logo")["url"]; ?>"></div>
						<div class="testi-content">
						  <p><?php echo get_sub_field("review"); ?></p>
						</div>
						<div class="testi-member">
						  <div class="testi-img">
							<img src="<?php echo get_sub_field("client_image")["url"]; ?>">
						  </div>
						  <div class="testi-name-job">
							<h4><?php echo get_sub_field("name"); ?></h4>
							<p><?php echo get_sub_field("title"); ?></p>
						  </div>
						</div>
					  </div>
					</div>
			
				<?php	
					// End loop.
					endwhile;
				}
			?>
		  </div>
		<div class="testimonials-btns">
			<a href="<?php echo get_field("sign_up_button")["url"];?>" class="btn"><?php echo get_field("sign_up_button")["title"];?></a>
		</div>
	  </div>
	</div>
	<!-- section 6 end -->

	<!-- section 5 start -->
	<?php $show_sectionvideo = get_field('show_sectionvideo'); if($show_sectionvideo) { ?>
	<div class="platform-video-sec">
		<div class="wrap">
			<h1><?php echo get_field("video_title"); ?></h1>
			<button class="js-video-button" data-video-id='<?php echo get_field("video_id"); ?>' data-channel="vimeo">
				<img src="<?php echo get_field("video_button")["url"]; ?>">
			</button>
		</div>
	</div>
	<?php } ?>
	<!-- section 5 end -->
	
	<div class="bottom-section platform-bottom-section">
		<div class="platform-bottom-section-video">
			<video loop="true" autoplay="autoplay" id="vid" muted>
				<source src="<?php echo get_field('background_video'); ?>">
			</video>
		</div>
		<div class="platform-bottom-section-video-content">
			<div class="wrap">
				<div class="content">
					<h2><?php echo get_field('heading_signup'); ?></h2>
					<div class="bottom-btns">
						<a href="<?php echo get_field("link_signup")["url"];?>" class="btn"><?php echo get_field("link_signup")["title"];?></a>
					</div>
				</div><!-- /.content -->
			</div><!-- /.wrap -->
		</div>
	</div>
	<!-- /.Bottom section -->


</div><!-- /.main-/-platform -->

<?php get_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/new.js"> </script>

<script>
  var animation = bodymovin.loadAnimation({
  // animationData: { /* ... */ },
  container: document.getElementById('bm2'), // required
  // path: '/wp-content/themes/deci/resources/js/AutoNAC-Diagram-mobile.json', // required
  path: document.getElementById('bm2').getAttribute('data-json'),
  renderer: 'svg', // required
  loop: true, // optional
  autoplay: true, // optional
  name: "Demo Animation", // optional
  rendererSettings: {
    filterSize: {
      width: '200%',
      height: '200%',
      x: '-50%',
      y: '-50%',
    }
  }
});

var animation2 = bodymovin.loadAnimation({
  // animationData: { /* ... */ },
  container: document.getElementById('bmm'), // required
  // path: '/wp-content/themes/deci/resources/js/AutoNAC-Diagram-mobile.json', // required
  path: document.getElementById('bmm').getAttribute('data-json'),
  renderer: 'svg', // required
  loop: true, // optional
  autoplay: true, // optional
  name: "Demo Animation", // optional
  rendererSettings: {
    filterSize: {
      width: '200%',
      height: '200%',
      x: '-50%',
      y: '-50%',
    }
  }
});

  var animation3 = bodymovin.loadAnimation({
  // animationData: { /* ... */ },
  container: document.getElementById('bm3'), // required
  // path: '/wp-content/themes/deci/resources/js/AutoNAC-Diagram-mobile.json', // required
  path: document.getElementById('bm3').getAttribute('data-json'),
  renderer: 'svg', // required
  loop: true, // optional
  autoplay: true, // optional
  name: "Demo Animation", // optional
  rendererSettings: {
    filterSize: {
      width: '200%',
      height: '200%',
      x: '-50%',
      y: '-50%',
    }
  }
});

  var animation4 = bodymovin.loadAnimation({
  // animationData: { /* ... */ },
  container: document.getElementById('bm4'), // required
  // path: '/wp-content/themes/deci/resources/js/AutoNAC-Diagram-mobile.json', // required
  path: document.getElementById('bm4').getAttribute('data-json'),
  renderer: 'svg', // required
  loop: true, // optional
  autoplay: true, // optional
  name: "Demo Animation", // optional
  rendererSettings: {
    filterSize: {
      width: '200%',
      height: '200%',
      x: '-50%',
      y: '-50%',
    }
  }
});

  var animation5 = bodymovin.loadAnimation({
  // animationData: { /* ... */ },
  container: document.getElementById('bm5'), // required
  // path: '/wp-content/themes/deci/resources/js/AutoNAC-Diagram-mobile.json', // required
  path: document.getElementById('bm5').getAttribute('data-json'),
  renderer: 'svg', // required
  loop: true, // optional
  autoplay: true, // optional
  name: "Demo Animation", // optional
  rendererSettings: {
    filterSize: {
      width: '200%',
      height: '200%',
      x: '-50%',
      y: '-50%',
    }
  }
});


  var animation5 = bodymovin.loadAnimation({
	  // animationData: { /* ... */ },
	  container: document.getElementById('bm6'), // required
	  // path: '/wp-content/themes/deci/resources/js/AutoNAC-Diagram-mobile.json', // required
	  path: document.getElementById('bm6').getAttribute('data-json'),
	  renderer: 'svg', // required
	  loop: true, // optional
	  autoplay: true, // optional
	  name: "Demo Animation", // optional
	  rendererSettings: {
	    filterSize: {
	      width: '200%',
	      height: '200%',
	      x: '-50%',
	      y: '-50%',
	    }
  }
	});

  var animation5 = bodymovin.loadAnimation({
	  // animationData: { /* ... */ },
	  container: document.getElementById('bm7'), // required
	  // path: '/wp-content/themes/deci/resources/js/AutoNAC-Diagram-mobile.json', // required
	  path: document.getElementById('bm7').getAttribute('data-json'),
	  renderer: 'svg', // required
	  loop: true, // optional
	  autoplay: true, // optional
	  name: "Demo Animation", // optional
	  rendererSettings: {
	    filterSize: {
	      width: '200%',
	      height: '200%',
	      x: '-50%',
	      y: '-50%',
	    }
  }
	});

  var animation5 = bodymovin.loadAnimation({
	  // animationData: { /* ... */ },
	  container: document.getElementById('bm8'), // required
	  // path: '/wp-content/themes/deci/resources/js/AutoNAC-Diagram-mobile.json', // required
	  path: document.getElementById('bm8').getAttribute('data-json'),
	  renderer: 'svg', // required
	  loop: true, // optional
	  autoplay: true, // optional
	  name: "Demo Animation", // optional
	  rendererSettings: {
	    filterSize: {
	      width: '200%',
	      height: '200%',
	      x: '-50%',
	      y: '-50%',
	    }
  }
	});

  var animation5 = bodymovin.loadAnimation({
	  // animationData: { /* ... */ },
	  container: document.getElementById('bm9'), // required
	  // path: '/wp-content/themes/deci/resources/js/AutoNAC-Diagram-mobile.json', // required
	  path: document.getElementById('bm9').getAttribute('data-json'),
	  renderer: 'svg', // required
	  loop: true, // optional
	  autoplay: true, // optional
	  name: "Demo Animation", // optional
	  rendererSettings: {
	    filterSize: {
	      width: '200%',
	      height: '200%',
	      x: '-50%',
	      y: '-50%',
	    }
  }
	});

  var animation5 = bodymovin.loadAnimation({
	  // animationData: { /* ... */ },
	  container: document.getElementById('bm10'), // required
	  // path: '/wp-content/themes/deci/resources/js/AutoNAC-Diagram-mobile.json', // required
	  path: document.getElementById('bm10').getAttribute('data-json'),
	  renderer: 'svg', // required
	  loop: true, // optional
	  autoplay: true, // optional
	  name: "Demo Animation", // optional
	  rendererSettings: {
	    filterSize: {
	      width: '200%',
	      height: '200%',
	      x: '-50%',
	      y: '-50%',
	    }
	  }
	});


 	var animation5 = bodymovin.loadAnimation({
	  // animationData: { /* ... */ },
	  container: document.getElementById('bm11'), // required
	  // path: '/wp-content/themes/deci/resources/js/AutoNAC-Diagram-mobile.json', // required
	  path: document.getElementById('bm11').getAttribute('data-json'),
	  renderer: 'svg', // required
	  loop: true, // optional
	  autoplay: true, // optional
	  name: "Demo Animation", // optional
	  rendererSettings: {
	    filterSize: {
	      width: '200%',
	      height: '200%',
	      x: '-50%',
	      y: '-50%',
	    }
	  }
	});

 	var animation5 = bodymovin.loadAnimation({
	  // animationData: { /* ... */ },
	  container: document.getElementById('bm12'), // required
	  // path: '/wp-content/themes/deci/resources/js/AutoNAC-Diagram-mobile.json', // required
	  path: document.getElementById('bm12').getAttribute('data-json'),
	  renderer: 'svg', // required
	  loop: true, // optional
	  autoplay: true, // optional
	  name: "Demo Animation", // optional
	  rendererSettings: {
	    filterSize: {
	      width: '200%',
	      height: '200%',
	      x: '-50%',
	      y: '-50%',
	    }
	  }
	});


setTimeout(function(){
     document.getElementById('vid').play();
 },1000);
</script>

<?php echo get_field('enter_script_link_here'); ?>
