jQuery(document).ready(function(){
		$(".main-header .nav-item > a").click(function () {
		  if ($(this).hasClass("active")) {
		    $(".nav-item-help > a").removeClass("active");
		  }
		   else {
		    $(".nav-item-help > a").removeClass("active");
		    $(this).addClass("active");
		  }
		});


	jQuery("#togglemenu").click(function(e){
		jQuery(this).addClass('active');
		jQuery(this).next('.main-header ul.navbar-nav').slideToggle();
	});
});