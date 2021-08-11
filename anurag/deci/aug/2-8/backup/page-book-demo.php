<?php
/**
 * Template Name: Book Demo
 */

get_header();
the_post();
?>
<style type="text/css">
.home-trust-sec:before {display: none;}
.home-trust-sec {background-color: #fafbff;}

.trust1-wrapper {
  overflow: hidden;
}

.sliding1-background {
  height: 70px;
  width: 5076px;
  animation: slide 50s linear infinite;
      background-size: contain !important;
}

@keyframes slide{
  0%{
    transform: translate3d(0, 0, 0);
  }
  100%{
    transform: translate3d(-1692px, 0, 0);
  }
}	

</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.4/lottie.min.js"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
 -->

<div class="main--platform">
	<div class="book-hero">
		<div class="wrap">
			<div class="row">
				<div class="col-sm-6 lft-sec">
					<h1><?php echo get_field("title");?></h1>
					<p><?php echo get_field("paragraph");?></p>
				</div>
				
				<div class="col-sm-6 rgt-col" id="bookform">
					<!-- <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
					<script>
					  hbspt.forms.create({
						region: "na1",
						portalId: "6540190",
						formId: "6b2616ed-edf3-4f51-a97a-ef18aa8c5b4c"
					});
					</script> -->
					<?php echo get_field('form');?>
					<div class="hero-img">
						<img src="<?php echo get_field("book_banner")["url"]; ?>">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- banner end -->
<div class="home-trust-sec book-trust-sec">
		<div class="wrap">
			<div class="desktop-visible">
				<div class="trust1-wrapper">
					<?php 
					   $image_sliding = get_field('background_image');
					?>
				  	<div class="sliding1-background" style="background: url('<?php echo $image_sliding['url'];?>') repeat-x;"></div>
				</div>

			</div>
			<div class="mobile-visible">
				<?php if( have_rows('mobile_slider1') ): ?>
				    <div class="home-trust-logos">
				    <?php while( have_rows('mobile_slider1') ): the_row();
				        $image = get_sub_field('image');
				        ?>
				        <div class="icon">
				            <img src="<?php echo esc_url($image['url']); ?>">
				        </div>
				    <?php endwhile; ?>
				    </div>
				<?php endif; ?>
			</div>
		</div>
	</div>
<!--<div class="home-trust-sec book-trust-sec">
		<div class="wrap">

			<div class="desktop-visible">
				<?php if( have_rows('partner_logo') ): ?>
				<div class="home-trust-logos ">
					<?php while( have_rows('slider') ): the_row(); 
				        $image = get_sub_field('image1');
				        ?>
					<div class="icon"><img src="<?php echo esc_url($image1['url']); ?>"></div>
					<?php endwhile; ?>
					
				</div>
				<?php endif; ?>
			</div>
			<div class="mobile-visible">
				<?php if( have_rows('partner_logo') ): ?>
				<div class="home-trust-logos">
					<?php while( have_rows('partner_logo') ): the_row(); 
				        $image = get_sub_field('image1');
				        ?>
					<div class="icon"><img src="<?php echo esc_url($image1['url']); ?>"></div>
					<?php endwhile; ?>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>-->

	<div class="book-sec-1-shape">
		<img class="desktop-visible" src="/wp-content/uploads/2021/06/section3-shape.svg">
		<img class="mobile-visible" src="/wp-content/uploads/2021/06/book3-shape-mob-svg.png">
	</div>
	<div class="platform-sec-1 book-sec-1">
		<div class="wrap">
			<div class="sec-1-heading">
				<h2 class="mobile-custom-width-heading"><?php echo get_field("heading");?></h2>
			</div>
			<div class="book-sec-1-in">
				<div class="row">

					<?php

						// Check rows exists.
						if( have_rows('benefits') ){

							// Loop through rows.
							while( have_rows('benefits') ) : the_row();
							?>
					<div class="col-sm-4">
						<div class="sec1-box">
							<img src="<?php echo get_sub_field("icon")["url"]; ?>" />
							<h4><?php echo get_sub_field("heading1"); ?></h4>
							<p><?php echo get_sub_field("content"); ?></p>
						</div>
					</div>
					<?php	
							// End loop.
							endwhile;
						}
					?>

				</div>
			</div>
			<div class="sec-1-btns">
				<a href="<?php echo get_field("button")["url"];?>" class="btn"><?php echo get_field("button")["title"];?></a>
			</div>
		</div>
	</div>
	<!-- section 1 end -->

	<div class="book-join-sec desktop-visible">
		<div class="book-join-sec-in">
			<img src="/wp-content/uploads/2021/06/join-sec-shape.svg">
		</div>
	</div>

	<!-- section 7 start -->
	<div class="adobe-testimonial book-testimonials platform-testimonials">
	  <div class="wrap">
	  	<div class="testimonials-heading">
	  		<h2><?php echo get_field("testimonial_title"); ?></h2>
	  	</div>

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
		            <p><?php echo get_sub_field("title1"); ?></p>
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
			<a href="<?php echo the_field('button_link'); ?>" class="btn"><?php echo the_field('button_text'); ?></a>
		</div>
	  </div>
	</div>
	<!-- section 7 end -->

	<div class="home-partner-sec">
		<div class="partner-sec-shape">
			<img src="/wp-content/uploads/2021/06/partner-shape.png">
		</div>
		<div class="partner-overlay desktop-visible">
			<img src="/wp-content/uploads/2021/06/partner-overlay.svg">
		</div>
		<div class="partner-overlay mobile-visible">
			<img src="/wp-content/uploads/2021/06/partner-overlay-mob.svg">
		</div>

		<div class="wrap">
			<div class="partner-heading">
				<h2><?php echo the_field('proud_title'); ?></h2>
			</div>


			<?php if( have_rows('partner') ): ?>
			
			<div class="partner-logos">
				<?php while( have_rows('partner') ): the_row();
					        $image3 = get_sub_field('image3');
					        $url1 = get_sub_field('hasurl');
					        $url2 = get_sub_field('partner_click');
					        ?>
				<?php if($url1 == 'Yes')
				{?>
				<a href="<?php echo $url2; ?>" class="pt-logo" target="_blank"><img src="<?php echo esc_url($image3['url']); ?>"></a>
				<?php }
				else{?>
					<a class="pt-logo"><img src="<?php echo esc_url($image3['url']); ?>"></a>
				<?php }
				?>
				   <?php endwhile; ?>
			</div>
			<?php endif; ?>
		</div>

	</div>

	<!-- section 5 start -->
	<div class="book-ecosystem-shape mobile-visible">
		<div class="ecosystem-shape-in">
			<img src="/wp-content/uploads/2021/06/ecosystem-sec-before.svg">
		</div>
	</div>
	<div class="book-ecosystem-sec">
		<div class="wrap">
			<div class="ecosystem-heading">
		    	<h2><?php echo get_field('heading2'); ?></h2>
		    	<p><?php echo get_field('description1'); ?></p>
		    </div>
		    <div class="ecosystem-img">
		    	<div id="bm2" class="desktop-visible" data-json="<?php echo get_field('desktop-svg-image'); ?>"></div>

		    	<div id="bm3" class="mobile-visible" data-json="<?php echo get_field('mobile-svg'); ?>"></div>
		    </div>
		    <div class="ecosystem-btns">
				<a href="<?php echo get_field("deep_button")["url"];?>" class="btn"><?php echo get_field("deep_button")["title"];?></a>
			</div>
		</div>
	</div>
	<!-- section 5 end -->


	<div class="book-icon-txt-sec">
		<div class="wrap">
			<div class="desktop-visible">
				<div class="icon-txt-row">
					
					<?php
						// Check rows exists.
						if( have_rows('benefits2') ){
							// Loop through rows.
							while( have_rows('benefits2') ) : the_row();
						?>
					
					<div class="icon-txt-box">
						<div class="ic-txt-head desktop-visible">
							<p><?php echo get_sub_field("content1");?></p>
						</div>
						<div class="ic-txt-body">
							<?php $url1=get_sub_field('has_url');
					$url2 = get_sub_field('enter_the_url_here');
					if($url1 == 'Yes')
					{?>
					<a href="<?php echo $url2; ?>" target="_blank" class="other-logo"><img src="<?php echo get_sub_field("icon2")["url"];?>"></a>
					<?php }
					else{?>
						<a  class="other-logo"><img src="<?php echo get_sub_field("icon2")["url"];?>"></a>
					<?php }
					?>
						</div>
					</div>
					<?php	
							// End loop.
							endwhile;
						}
					?>
				</div>
			</div>
			<div class="mobile-visible">
				<div class="icon-txt-row">
					
					<?php
						// Check rows exists.
						if( have_rows('benefits2') ){
							// Loop through rows.
							while( have_rows('benefits2') ) : the_row();
						?>
					
					<div class="icon-txt-box">
						<div class="ic-txt-body">
							<?php $url1=get_sub_field('has_url');
					$url2 = get_sub_field('enter_the_url_here');
					if($url1 == 'Yes')
					{?>
					<a href="<?php echo $url2; ?>" target="_blank" class="other-logo"><img src="<?php echo get_sub_field("icon2")["url"];?>"></a>
					<?php }
					else{?>
						<a  class="other-logo"><img src="<?php echo get_sub_field("icon2")["url"];?>"></a>
					<?php }
					?>
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
	<!-- end -->

	<div class="bottom-section book-bottom-section">
		<div class="book-bottom-section-video">
			<video loop="true" autoplay="autoplay" id="vid" muted>
				<source src="<?php echo get_field('background_video'); ?>">
			</video>
		</div>
		<div class="book-bottom-section-video-content">
			<div class="wrap">
				<div class="content">
					<h2><?php echo get_field('heading_sinup'); ?></h2>
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


</script>
<script>
jQuery(document).ready(function(){
jQuery('.trust-slp li').wrapAll('<span class="ticker-items">');
  var tickerWidth = jQuery('.trust-slp').width();
  var spanWidth = jQuery('.trust-slp span').width();
  jQuery('.trust-slp span').clone().appendTo('.trust-slp');
  jQuery('.trust-slp span').wrapAll('<span class="ticker-wrapper">');
  TweenMax.set( '.ticker-wrapper' , {x: tickerWidth } );
  var tl = new TimelineMax( {repeat: -1} );
  tl.to( '.ticker-wrapper' , 1 ,
    {
      x:"-=50",
      ease: Power0.easeNone,
      onComplete: function(){
        var style = window.getComputedStyle( jQuery('.ticker-wrapper')[0] );
        var matrix = new WebKitCSSMatrix( style.webkitTransform );
        if( matrix.m41 < 0-spanWidth ){
            TweenMax.set( '.ticker-wrapper' , {x: 0} );
         }
        this.invalidate();
      },
    }
  );
});
</script>
