<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wandervale
 */

?>


<div class="footer-container">

	<footer id="footer-main" class="footer-main">

	<section class="footer-body  container">
		
		<div class="row">
		

			<article class="img-box col-md-5 col-lg-5">

				<aside id="text-2" class="widget-footer-container widget_text">

					<?php 
						if ( ! is_active_sidebar( 'footer-sidebar-1' ) ) {
							return;
						}

						dynamic_sidebar( 'footer-sidebar-1' ); 

					?>

			   	</aside>

			
			</article>

			<article class="img-box col-md-7 col-lg-7">

				<aside id="nav_menu-2" class="widget-footer-container widget_nav_menu">

					<?php 

						if ( ! is_active_sidebar( 'footer-sidebar-2' ) ) {
							return;
						}

						dynamic_sidebar( 'footer-sidebar-2' ); 

					?>


<!-- <section id="text-3" class="widget-footer widget_text">			
	<div class="textwidget">
		<section class="footer-form row">
		
			<h3>Get PAID To be YOU!</h3>
			<h4>GET INTO ACTION EVERY WEEK WITH TIANA</h4>
			
				
			<p>
				Join THOUSANDS of others upping their online marketing game every week.
			</p>
			

		</section>
	</div> -->
	<div class="container-fluid">
		<ul class="footer-social">
			<li class=""><span class="icon-container"><a href="https://www.facebook.com/tianagustafson/?fref=ts" target="_blank"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/footer/footer_facebook.png" alt=""></a></span></li>
			<li class=""><span class="icon-container"><a href="https://www.instagram.com/freedom_planner/" target="_blank"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/footer/footer_instagram.png" alt=""></a></span></li>
			<li class=""><span class="icon-container"><a href="https://www.pinterest.com/tianastar/" target="_blank"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/footer/footer_pinterest.png" alt=""></a></span></li>
			<li class=""><span class="icon-container"><a href="https://www.periscope.tv/tianagustafson" target="_blank"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/footer/footer_periscope.png" alt=""></a></span></li>
			<li class=""><span class="icon-container"><a href="https://www.youtube.com/user/coffeeshopgrrrl " target="_blank"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/footer/footer_youtube.png" alt=""></a></span></li>
			<li class=""><span class="icon-container"><a href="https://www.linkedin.com/in/tianastar" target="_blank"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/footer/footer_linkedin.png" alt=""></a></span></li>
		</ul>
	</div>	
<!-- </section> -->


			      
			    </aside>

			</article>
 

	</div> <!-- TOP 2 FOOTER WIDGET CONTAINER -->
	<hr>
	<div id="footer-menu" class="row">
					<article class="img-box col-md-12">

			    <aside id="recent-posts-2" class="widget-footer-container widget_recent_entries">

			    	<?php 

						if ( ! is_active_sidebar( 'footer-sidebar-3' ) ) {
							return;
						}

						dynamic_sidebar( 'footer-sidebar-3' ); 

					?>
			      
			   	</aside>
			
			</article>
	</div> <!-- FOOTER MENU ENDS -->

	</section> <!-- FOOTER BODY ENDS -->
	<div id="copyright" class="copyright">
		<p class="text-center">All Rights Reserved TianaGustafson.com &copy; <?php echo date('Y'); ?>. Development by <a href="www.htmlfivedev.com">HTMLfiveDev.com</a></p>
	</div>

</footer>
</div> <!-- FOOTER CONTAINER ENDED -->

	</div> <!-- End of id="content" class="site-content" -->
</div> <!-- End of id="page" class="site" -->

<?php wp_footer(); ?>
</body>
</html>