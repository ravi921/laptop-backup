<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	

</div><!-- #page -->

<div class="step-form-sec">
  <div class="container">
    <?php dynamic_sidebar( 'sidebar-11' ); ?>
  </div>
</div>

    <!-- footer start  -->
    <footer>
      <div class="footer">
        <div class="logo_footer">
          <h2 class="section_heading"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header_logo"><img src="<?php header_image(); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" /></a></h2>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-3 footer-col-1">
              <?php dynamic_sidebar( 'sidebar-12' ); ?>
            </div>
            <div class="col-md-3 ">
              <?php dynamic_sidebar( 'sidebar-13' ); ?>
            </div>
            <div class="col-md-3">
              <?php dynamic_sidebar( 'sidebar-14' ); ?>
            </div>
            <div class="col-md-3">
              <?php dynamic_sidebar( 'sidebar-15' ); ?>
            </div>
          </div>
        </div>
        <?php dynamic_sidebar( 'sidebar-17' ); ?>
      </div>
    </footer>
    <!-- footer End  -->


<div id="sidebar" class="sidebar-offcanvas-menu">
    <div id="sidebar-wrapper" class="sidebar-wrapper">    	
        <div class="outer">
	        <div class="sidebar-top-header">				
				<div class="sidebar-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header_logo"><img src="<?php header_image(); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" /></a>
				</div>   
				<div class="sidebar-close-btn">
					<a class="close-sidebar"><img src="/viable/wp-content/uploads/2021/07/close-icon.png"></a>
				</div>         		
			</div>  
      <div class="inner">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'menu_class'     => 'sidebar-menu',
						)
					);
				?>
        <?php dynamic_sidebar( 'sidebar-16' ); ?>
      </div>
      </div>
    </div>
</div>


<?php wp_footer(); ?>

  <!-- jQuery Link -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/foundation.min.js"></script>

  <!-- Custom Js -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
</body>
</html>
