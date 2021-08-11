<?php
/**
 * The template for displaying the footer
 *
 */
?>

<!-- footer start -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="contacts">
                <div class="col-md-3 col-sm-6 columns">
                    <a href="https://www.google.co.in/maps/place/Codeflies+Technologies+Pvt.+Ltd./@28.6188012,77.3914718,19z/data=!3m1!4b1!4m5!3m4!1s0x390ceff77397f839:0x4b17cfd41c07d3ba!8m2!3d28.6188!4d77.392019" target="_blank"><i class="fa fa-map-marker"></i></a>
                    <a href="https://www.google.co.in/maps/place/Codeflies+Technologies+Pvt.+Ltd./@28.6188012,77.3914718,19z/data=!3m1!4b1!4m5!3m4!1s0x390ceff77397f839:0x4b17cfd41c07d3ba!8m2!3d28.6188!4d77.392019" target="_blank">G-159, Sector-63, Noida </a>
                </div>
                <div class="col-md-3 col-sm-6 columns">
                    <i class="fa fa-mobile"></i>
                    <div class="columns-align">
            					<img src="<?php echo get_template_directory_uri(); ?>/images/ind_flg.png" alt="">  <a href="tel:+91 120-4515124">+91 120-4515124 </a> <br/ >
            					<img src="<?php echo get_template_directory_uri(); ?>/images/usa_flg.jpg" alt=""> <a href="tel:+15052747466">+1 (505) 274-7466</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 columns">
                    <i class="fa fa-comments-o"></i>
                    <div class="columns-align1">
                      <a href="skype:codeflies?chat"><span class="fa fa-skype"></span> codeflies</a> <br />             
                      <a href="https://wa.me/919773867444" target="_blank"><span class="fa fa-whatsapp"></span> WhatsApp </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 columns">
                    <a href="mailto:info@codeflies.com"><i class="fa fa-envelope-o"></i></a>
                    <a href="mailto:info@codeflies.com">info@codeflies.com</a>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="footerlinks">
                <div class="col-md-3 col-sm-6 columns wow fadeInDown" data-wow-delay="0.5">
                    <div class="footer-text">
                        <h2>Services</h2>			
                        <div class="footer-text-inner">
                        	<?php wp_nav_menu( array('menu' => 'Our Services' )); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 columns wow fadeInDown" data-wow-delay="0.5">
                    <div class="footer-text">
                        <h2>Company</h2>			
                        <div class="footer-text-inner">
			                    <?php wp_nav_menu( array('menu' => 'Company' )); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 columns wow fadeInDown" data-wow-delay="0.5">
                    <div class="footer-text">
                        <h2>Technologies</h2>
                        <div class="footer-text-inner">
  			                  <?php wp_nav_menu( array('menu' => 'Technology Stack' )); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 columns wow fadeInDown" data-wow-delay="0.5">
                    <div class="footer-text">
                     	<h2>Latest Blogs</h2>
                    </div>
                    <div class="footer-text-inner">
                      <ul>
            						<?php 
            							$args = array( 'posts_per_page' => 3, 'orderby' => 'post_date', 'order' =>'DESC');
            							$postslist = get_posts( $args );
            							foreach ( $postslist as $post ) :
            							setup_postdata( $post ); 
            						?>      
            							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br /> <span>Posted on <?php echo get_the_date(); ?></span></li>
            						<?php
            							endforeach; 
            							wp_reset_postdata();
            						?> 
                      </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--SOCIAL LINKS -->
        <div class="social wow fadeInUp">
            <div class="row">
                <div class="columns">
                    <ul>
                      <li class="facebook"><a target="_blank" class="bb-facebook" href="https://www.facebook.com/codeflies">facebook</a></li>
                      <li class="instagram"><a target="_blank" class="bb-instagram" href="https://www.instagram.com/codeflies/">instagram</a></li>
                      <li class="twitter"><a target="_blank" class="bb-twitter" href="https://twitter.com/codeflies">twitter</a></li>
                      <li class="linkedin"><a target="_blank" class="bb-linkedin" href="https://in.linkedin.com/company/codefliestechnologiespvtltd">linkedin</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END OF SOCIAL LINKS -->
    </div>
<a href="//www.dmca.com/Protection/Status.aspx?ID=bbd448e5-6c08-4397-97a1-b8e22b5fd5eb" title="DMCA.com Protection Status" target="_blank" class="dmca-badge"> <img src="//images.dmca.com/Badges/dmca_protected_sml_120m.png?ID=bbd448e5-6c08-4397-97a1-b8e22b5fd5eb" alt="DMCA.com Protection Status"></a> <script src="//images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
	<p class="copyright"><span id="siteseal"><script async type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=Ep88eG815guBOvre4RP9hwiCqtwna6KvTgxG3zCJ2Fjq1QZWJkdaZfw5giAo"></script></span></p>
	<p class="copyright">&copy; &nbsp;<a href="javascript:;">2020-21 Codeflies Technologies Pvt. Ltd</a>, ALL RIGHT RESERVED</p>
<div class="reviews" style="
    display: inline-block;
    color: #fff;
    text-align: center;
    width: 100%;
padding-bottom: 15px;
">
Check out <a href="https://www.google.co.in/search?num=100&client=firefox-b-ab&q=www.codeflies.com&oq=www.codeflies.com&gs_l=serp.3...12662.18599.0.18931.17.17.0.0.0.0.469.2323.2-4j2j1.7.0....0...1.1.64.serp..10.5.1596...0j0i131k1j0i30k1._f9OcKJ51qk#lrd=0x390ceff77397f839:0x4b17cfd41c07d3ba,1," target="_blank">Codeflies</a> Reviews Here!

</div>
<!--popup-triger--><div class="start-project-btn">	<a href="tel:+15052747466">+1 (505) 274-7466</a></div><!--popup-triger-end-->
</footer>


<!-- Modal -->
<div id="nav-call-modal" class="nav-call-modal modal fade animated1 fadeInUp" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="flex_wrapper">
        <div class="pop-left">
          <button type="button" id="model-close-btn" class="close" data-dismiss="modal">&times;</button>
            <div class="right-head-wrapper">
                <h3>Wanna Talk? We would love to hear.</h3>
                <p class="para">For Sales Queries, Call us at: </p>
            </div>
           <div class="call-options-wrapper">
               <ul>
                   <li class="tel">
                       <span>t</span>
                       <a href="tel:+15052747466">+1 (505) 274-7466</a>
                   </li>
                   <li class="email">
                       <span>e</span>
                       <a href="mailto:sales@codeflies.com">sales@codeflies.com</a>
                   </li>
               </ul>
           </div>

           <div class="right-head-wrapper">
                <h3>Looking to be a part of our team?</h3>
                <p class="para">If you've got powerful skills, we'll pay your bills. Contact our HR at:</p>
            </div>
           <div class="call-options-wrapper">
               <ul>
                   <li class="email">
                       <span>e</span>
                       <a href="mailto:hr@codeflies.com">hr@codeflies.com</a>
                   </li>
                   <li class="tel">
                        <span>t</span>
                        <a href="tel:+91 120-4515124 ">+91 120-4515124 </a>
                    </li>
               </ul>
           </div>
        </div>
        <div class="pop-right">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
			<?php echo do_shortcode('[contact-form-7 id="2472" title="Contact Us Form In Modal"]');?>
        </div>
      </div>
    </div>

  </div>
</div>

<div id="sidebar" class="sidebar-offcanvas-menu">
    <div id="sidebar-wrapper" class="sidebar-wrapper">      
        <div class="outer">
          <div class="sidebar-top-header">        
        <div class="sidebar-logo">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_header_image(); ?>"></a>
        </div>   
        <div class="sidebar-close-btn">
          <a class="close-sidebar">✕</a>
        </div>            
      </div>  
            <div class="inner">
                  <?php wp_nav_menu( array('menu' => 'Mobile Menu', 'items_wrap' =>'<ul class="sidebar-menu">%3$s</ul>' )); ?>
            </div>
        </div>
    </div>
</div>




<!-- footer end -->
<!-- bxSlider Javascript file -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.3.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexisel.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.meanmenu.js"></script>
<!--<script src="<?php //echo get_template_directory_uri(); ?>/js/isotope-docs.min.js"></script>-->
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/local.js"></script>
<script> 

jQuery(document).ready(function(){

  jQuery('#custom-mobile-menuc').click(function(){
      
      jQuery('body').addClass('modal-open');
      jQuery('#nav-call-modal').addClass('in');
      jQuery('#nav-call-modal').css('display','block');
      jQuery('#nav-call-modal').css('z-index','9999999999');
      jQuery('#nav-call-modal').css('background','rgba(0, 0, 0, 0.8)');
  });

  jQuery('#model-close-btn').click(function(){
      
      jQuery('body').removeClass('modal-open');
      jQuery('#nav-call-modal').removeClass('in');
      jQuery('#nav-call-modal').css('display','none');
      jQuery('#nav-call-modal').css('z-index','1');
  });

jQuery(".servic_box").hover(function(){
    jQuery(this).children('img').attr("src", function(index, attr){
        return attr.replace(".png", "1.png");
    });
}, function(){
    jQuery(this).children('img').attr("src", function(index, attr){
        return attr.replace("1.png", ".png");
    });
});

});


			
			
	jQuery(document).ready(function(e) {
		jQuery(window).scroll(function(){
			if(jQuery(window).scrollTop() >= 52)
				{
				jQuery('.top_fix_header').css('background','rgba(47,48,53,1)');
				}
			else{
				jQuery('.top_fix_header').css('background','rgba(0,0,0,0)');
			}
		});
	});
	
	jQuery(document).ready(function () {    
    
            jQuery('.wpcf7-validates-as-tel').keypress(function (e) {    
    
                var charCode = (e.which) ? e.which : event.keyCode    
    
                if (String.fromCharCode(charCode).match(/[^0-9+]/g))    
    
                    return false;                        
    
            });   
		jQuery('.wpcf7-countrytext').attr('readonly', true);
    
        });
</script>
<script>
	
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.97074.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.hoverdir.js"></script>	
<script type="text/javascript">
			jQuery(function() {
			
				jQuery(' #da-thumbs > li ').each( function() { jQuery(this).hoverdir(); } );

			});
</script>
<script>
jQuery(function() {
	var selectedClass = "";
		jQuery(".fil-cat").click(function(){ 
		selectedClass = jQuery(this).attr("data-rel"); 
     jQuery("#da-thumbs").fadeTo(100, 0.1);
		jQuery("#da-thumbs li").not("."+selectedClass).fadeOut().removeClass('scale-anm');
    setTimeout(function() {
      jQuery("."+selectedClass).fadeIn().addClass('scale-anm');
      jQuery("#da-thumbs").fadeTo(300, 1);
    }, 300); 
		
	});
});
</script>
<script>
jQuery(document).ready(function(){
	jQuery('#open').click(function(){
		
		jQuery('.full-menu').css({'width' : '100%'})
		jQuery(this).parents('html').css('overflow-y','hidden');
	});
	jQuery('#close').click(function(){
		
		jQuery('.full-menu').css({'width' : '0'})
		jQuery(this).parents('html').css('overflow-y','scroll');
	});
	
	new WOW().init();

});
</script>


<script>
jQuery(document).ready(function() {
	var showChar = 0; // How many characters are shown by default
	var moretext = "<i class='fa fa-plus'></i>";
	var lesstext = "<i class='fa fa-minus'></i>";


	jQuery('.listing-box1-text > h6').each(function() {
		var content = jQuery(this).html();
		console.log(content);
		if(content.length > showChar) {

		var c = content.substr(0, showChar);
		var h = content.substr(showChar, content.length - showChar);

		var html = c + '<span class="moreellipses">' + '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

		jQuery(this).html(html);
	}

	jQuery(".morelink").click(function(){
		if(jQuery(this).hasClass("less")) {
			jQuery(this).removeClass("less");
			jQuery(this).html(moretext);
		} else {
			jQuery(this).addClass("less");
			jQuery(this).html(lesstext);
		}
		jQuery(this).parent().prev().toggle();
		jQuery(this).prev().toggle();
		return false;
		});
	});

	jQuery('.listing-box1-text .toggle-content').hide();
    jQuery('.redamorelinki').click(function () {
        jQuery(this).toggleClass('active');
        jQuery(this).parent().next().slideToggle(200);
        jQuery('.listing-box1in').toggleClass('active');
        jQuery(this).closest('.listing-box1in').toggleClass('active');
    // $('.toggle-content').slideUp(200);
    });

});
	
// 



// 	
	
$('.requirements-form-test .form-tabs input').change(function(){
    if($(this).is(":checked")) {
        $(this).parents().parents('.wpcf7-list-item').addClass('red');
    } else {
        $(this).parents().parents('.wpcf7-list-item').removeClass('red');
    }
});
</script>
<script>
  const items = document.querySelectorAll(".accordion a");
function toggleAccordion(){
  this.classList.toggle('active');
  this.nextElementSibling.classList.toggle('active');
}
items.forEach(item => item.addEventListener('click', toggleAccordion));
</script>

<linl rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.css" integrity="sha512-UzcnE2gVMx7OCuXHLNVyoElL8v2QGAOidIn6PIy0d8ciWuqMBsgpB4QfKcuj8RbHrljngft9T8remhtF992RlQ==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css" integrity="sha512-NWCafukXClS6fKch6bSMl/WvPzZrD1OGMf1oMAnFYXSSKZ7hgeswls+r4SdK4bFJauVwmvFf7HlMwji2TsjROA==" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js" type="text/javascript"></script>







	<script>
		//jQuery time
var current_fs, next_fs, previous_fs, cod; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

var counterForm = 1;
		
// array to store the id of the checked checkboxes
var checkedCheckBoxes = new Array();
var actCheckedBoxes = new Array();
var removedElement;
var liArray = ["2","3","4","5"];
var prevCounterForm;
var prevbtn3 = 0;
var graphicCheckBoxes = new Array();
var websiteCheckBoxes = new Array();
var mobileCheckBoxes = new Array();
var marketingCheckBoxes = new Array();
var name, phoneNo, email, note;
		
$(".dev-next-btn1").click(function(){
	checkedCheckBoxes = [];
	actCheckedBoxes = [];
	$("input:checkbox[class=home_form]:checked").each(function () {			
           checkedCheckBoxes.push($(this).attr("id"));
		   actCheckedBoxes.push($(this).attr("id"));
	});
		
	if (prevbtn3 == 1) {
		//alert("executed");
		//checkedCheckBoxes = actCheckedBoxes;
	}
	
	//alert(checkedCheckBoxes.length);
		
	//disable the next button if none of the checkbox is not selected
	//console.log(checkedCheckBoxes.length);
	if (checkedCheckBoxes.length == 0) {
		$(".errorMsg").css("display", "block");
	} else {
	$(".errorMsg").css("display", "none");
	//console.log(checkedCheckBoxes);
	counterForm = checkedCheckBoxes[0];
	if(animating) return false;
	animating = true;	
	
	// getting the nonactive li
	var dist = liArray.filter(x => !checkedCheckBoxes.includes(x))
	//console.log(dist);
	
	//setting the non active li to display none
	for (var j=0; j<=dist.length; j++) {
		$("#service"+dist[j]).css("display", "none");
	}	
	
	current_fs = $("#form1");
	next_fs = $("#form"+counterForm);	
	
	// removing the element at first index...
	removedElement = checkedCheckBoxes[0];
	//console.log("Removed Element = "+removedElement);
	var theRemovedElement = checkedCheckBoxes.shift();
	//console.log(checkedCheckBoxes);
			
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");	
	
	//show the next fieldset	
	next_fs.show(); 
		
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'transform': 'scale('+scale+')'});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 500, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeOutQuint'
	});
		
	}
});	
	
//hiding the nonactive li		
for (var i=0; i<checkedCheckBoxes.length; i++) {
	console.log(checkedCheckBoxes[i]);
}
		
$(".dev-next-btn2").click(function(){
	
	$("input:checkbox[class=graphic_form]:checked").each(function () {			
           graphicCheckBoxes.push($(this).attr("id"));		   
	});
	
	if (graphicCheckBoxes.length == 0) {
		$(".errorMsg").css("display", "block");
	} else {
	$(".errorMsg").css("display", "none");
	
	
	if (prevbtn3 == 1) {
		//alert("abc is executed");
		checkedCheckBoxes = actCheckedBoxes;
	}
	
	
	counterForm = checkedCheckBoxes[0];
	if(animating) return false;
	animating = true;
		
	if (checkedCheckBoxes.length == 0) {
		current_fs = $("#form"+removedElement);
		next_fs = $("#form6");	
	} else {
		current_fs = $("#form"+removedElement);
		next_fs = $("#form"+counterForm);	
		
		removedElement = checkedCheckBoxes[0];
		var theRemovedElement = checkedCheckBoxes.shift();
	}
			
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");	
	
	//show the next fieldset	
	next_fs.show(); 
		
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'transform': 'scale('+scale+')'});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 500, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeOutQuint'
	});
	} // end of else
});	
		
$(".dev-next-btn3").click(function(){
	
	$("input:checkbox[class=website_form]:checked").each(function () {			
           websiteCheckBoxes.push($(this).attr("id"));		   
	});
	
	console.log(websiteCheckBoxes);
	
	if (websiteCheckBoxes.length == 0) {
		$(".errorMsg").css("display", "block");
	} else {
	$(".errorMsg").css("display", "none");
	counterForm = checkedCheckBoxes[0];
	if(animating) return false;
	animating = true;
	
	console.log(removedElement);
	
	if (checkedCheckBoxes.length == 0) {
		current_fs = $("#form"+removedElement);
		next_fs = $("#form6");	
	} else {
		current_fs = $("#form"+removedElement);
		next_fs = $("#form"+counterForm);	
		
		removedElement = checkedCheckBoxes[0];
		var theRemovedElement = checkedCheckBoxes.shift();
	}
		
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");	
	
	//show the next fieldset	
	next_fs.show(); 
		
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'transform': 'scale('+scale+')'});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 500, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeOutQuint'
	});
	} // end of else
});	
		
$(".dev-next-btn4").click(function(){
	
	$("input:checkbox[class=mobile_form]:checked").each(function () {			
           mobileCheckBoxes.push($(this).attr("id"));		   
	});
	
	if (mobileCheckBoxes.length == 0) {
		$(".errorMsg").css("display", "block");
	} else {
	$(".errorMsg").css("display", "none");
	counterForm = checkedCheckBoxes[0];
	if(animating) return false;
	animating = true;		
	
	if (checkedCheckBoxes.length == 0) {
		current_fs = $("#form"+removedElement);
		next_fs = $("#form6");	
	} else {
		current_fs = $("#form"+removedElement);
		next_fs = $("#form"+counterForm);	
		
		removedElement = checkedCheckBoxes[0];
		var theRemovedElement = checkedCheckBoxes.shift();
	}
	
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");	
	
	//show the next fieldset	
	next_fs.show(); 
		
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'transform': 'scale('+scale+')'});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 500, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeOutQuint'
	});
	}
});	
		
$(".dev-next-btn5").click(function(){
	
	$("input:checkbox[class=marketing_form]:checked").each(function () {			
           marketingCheckBoxes.push($(this).attr("id"));		   
	});
	
	if (marketingCheckBoxes.length == 0) {
		$(".errorMsg").css("display", "block");
	} else {
	$(".errorMsg").css("display", "none");
	counterForm = checkedCheckBoxes[0];
	if(animating) return false;
	animating = true;		
	
	if (checkedCheckBoxes.length == 0) {
		current_fs = $("#form"+removedElement);
		next_fs = $("#form6");	
	} else {
		current_fs = $("#form"+removedElement);
		next_fs = $("#form6");	
		
		removedElement = checkedCheckBoxes[0];
		var theRemovedElement = checkedCheckBoxes.shift();
	}
		
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");	
	
	//show the next fieldset	
	next_fs.show(); 
		
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'transform': 'scale('+scale+')'});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 500, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeOutQuint'
	});
	} // end of else
});	
		
$(".dev-next-btn6").click(function(){
	
	counterForm = checkedCheckBoxes[0];
	if(animating) return false;
	animating = true;		
	
	if (checkedCheckBoxes.length == 0) {
		current_fs = $("#form6");
		next_fs = $("#form7");	
	} else {
		current_fs = $("#form6");
		next_fs = $("#form7");	
		
		removedElement = checkedCheckBoxes[0];
		var theRemovedElement = checkedCheckBoxes.shift();
	}
		
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");	
	
	//show the next fieldset	
	next_fs.show(); 
		
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'transform': 'scale('+scale+')'});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 500, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeOutQuint'
	});
});	
			
		

$(".dev-prev-btn2").click(function(){
	
	temp = counterForm;
	
	if(animating) return false;
	animating = true;	
	
	current_fs = $("#form2");
		
	checkedCheckBoxes.splice(0, 0, removedElement);
	console.log(checkedCheckBoxes);
	
	previous_fs = $("#form1");
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 500, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeOutQuint'
	});
});
		
$(".dev-prev-btn3").click(function(){
		
	//variable to assign the actual arry to checked array
	prevbtn3 = 1;
	
	console.log(actCheckedBoxes);
	for (var i=0; i<actCheckedBoxes.length; i++) {
		if (jQuery.inArray(counterForm, actCheckedBoxes)) {			
			var ind = actCheckedBoxes.indexOf(counterForm);
		}
		//alert(ind);
	}	
	
	previousFormIndex = ind-1;
	
	if (ind) {
		previous_fs = $("#form2");
	} else {
		previous_fs = $("#form1")
	}
	
	if(animating) return false;
	animating = true;	
	
	//alert(counterForm);
	
	current_fs = $("#form"+counterForm);
	
	//checkedCheckBoxes.splice(0, 0, removedElement);
	//console.log(checkedCheckBoxes);
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 500, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeOutQuint'
	});
});
		
$(".dev-prev-btn4").click(function(){
	
	if(animating) return false;
	animating = true;	
	
	//alert(counterForm);
	
	current_fs = $("#form"+counterForm);
	//alert(current_fs);
	console.log(current_fs);
	counterForm = counterForm-1;
	
	//checkedCheckBoxes.splice(0, 0, removedElement);
	console.log(checkedCheckBoxes);
	
	previous_fs = $("#form1");
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 500, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeOutQuint'
	});
});
		
$(".dev-prev-btn5").click(function(){
	
	if(animating) return false;
	animating = true;	
	
	//alert(counterForm);
	
	current_fs = $("#form"+counterForm);
	//alert(current_fs);
	console.log(current_fs);
	counterForm = counterForm-1;
	
	//checkedCheckBoxes.splice(0, 0, removedElement);
	//console.log(checkedCheckBoxes);
	
	previous_fs = $("#form1");
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 500, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeOutQuint'
	});
});
		
$(".dev-prev-btn6").click(function(){
	//var min_price = document.getElementById("min_price").value;
	//var max_price = document.getElementById("max_price").value;
	
	
	
	
	
	
	if(animating) return false;
	animating = true;	
	
	//alert(counterForm);
	
	current_fs = $("#form6");
	//alert(current_fs);
	//console.log(current_fs);
	//counterForm = counterForm-1;
		
	previous_fs = $("#form1");
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 500, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeOutQuint'
	});
});
		
$(".dev-prev-btn7").click(function(){
	
	if(animating) return false;
	animating = true;	
	
	//alert(counterForm);
	
	current_fs = $("#form7");
	//alert(current_fs);
	//console.log(current_fs);
	//counterForm = counterForm-1;
		
	previous_fs = $("#form6");
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 500, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeOutQuint'
	});
});
		


$(".submit").click(function(){
	//alert("submit data");
	name = $("#inputname").val();
	phoneNo = $("#inputphone").val();
	email = $("#inputemail").val();
	note = $("#exampleFormControlTextarea1").val();
	console.log(name);
	console.log(note);
	var err;
	var emailErr = "";
	var emailfilter = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	
	if (name == "") {
		$("#warningName").css("display", "block");
		err=1;
	} else {
		$("#warningName").css("display", "none");
		err=0;
	} 
	if (note == "") {
		$("#warningNote").css("display", "block");
		err=1;
	} else {
		$("#warningNote").css("display", "none");
		err=0;
	}
	if (phoneNo == "") {
		$("#warningPhone").css("display", "block");
		err=1;
	} else {
		$("#warningPhone").css("display", "none");
		err=0;
	}
	if(email === ""){
    	emailErr ="Please Enter Email";
    	document.getElementById('contact_email_err').innerHTML = emailErr;	
		err=1;
    	} else if(!emailfilter.test(email)){
    		emailErr ="Invalid email"
    		document.getElementById('contact_email_err').innerHTML = emailErr;
			err=1;
   		 }else{
    		emailErr="";
    		document.getElementById('contact_email_err').innerHTML = "";
			 err=0;
   		 }
	
	if (err==1) {
		return false;
	}
	
})
</script>



	<script>
		$(document).ready(function() {
			$(".checkbox-label").on('change', function () {
				$(this).toggleClass("checked");
			});
		});
	</script>

	<!-- new script -->
	<script>
		var $range = $(".js-range-slider"),
	    $inputFrom = $(".js-input-from"),
	    $inputTo = $(".js-input-to"),
	    instance,
	    min = 300,
	    max = 150000,
	    from = 0,
	    to = 0;

	$range.ionRangeSlider({
		skin: "round",
	    type: "double",
	    min: min,
	    max: max,
	    from: 300,
	    to: 150000,
	    onStart: updateInputs,
	    onChange: updateInputs,
	    postfix: "USD"
	});
	instance = $range.data("ionRangeSlider");

	function updateInputs (data) {
		from = data.from;
	    to = data.to;
	    
	    $inputFrom.prop("value", from);
	    $inputTo.prop("value", to);	
	}

	$inputFrom.on("input", function () {
	    var val = $(this).prop("value");
	    
	    // validate
	    if (val < min) {
	        val = min;
	    } else if (val > to) {
	        val = to;
	    }
	    
	    instance.update({
	        from: val
	    });
	});

	$inputTo.on("input", function () {
	    var val = $(this).prop("value");
	    
	    // validate
	    if (val < from) {
	        val = from;
	    } else if (val > max) {
	        val = max;
	    }
	    
	    instance.update({
	        to: val
	    });
	});
	</script>
<?php wp_footer(); ?>
<div class="tawk-towrapper">
	<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/61111b2dd6e7610a49af5130/1fcld4aqh';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</div>
</body>
</html>