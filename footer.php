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
<?php wp_footer(); ?>


		<div class="footer-container">

			<footer id="footer-main" class="footer-main">

			<section class="footer-body  container">
				
				<div class="row">

					<article class="img-box col-md-4">

						<aside id="nav_menu-2" class="widget-footer-container widget_nav_menu">

							<?php 

								if ( ! is_active_sidebar( 'footer-sidebar-1' ) ) {
									echo "Please Add a Widget Here";
								}

								dynamic_sidebar( 'footer-sidebar-1' ); 

							?>
							<!-- <section class="footer-icon-block">
								
								<div class="content">
									<span class="icon"><i class="fa fa-mobile fa-5x" aria-hidden="true"></i></span>
									<div class="text-only">
										<p> <span class="top-text"><em>Call Us Today</em></span><br>
										(813).541.0002</p>
									</div>
								</div>

							</section> -->
					      
					    </aside>

					</article>
		 
					<article class="img-box col-md-4">

						<aside id="nav_menu-2" class="widget-footer-container widget_nav_menu">

							<?php 

								if ( ! is_active_sidebar( 'footer-sidebar-2' ) ) {
									echo "Please Add a Widget Here";
								}

								dynamic_sidebar( 'footer-sidebar-2' ); 

							?>

<!-- 							<section class="footer-icon-block">
								
								<div class="content">
									<span class="icon"><i class="fa fa-envelope fa-4x" aria-hidden="true"></i></span>
									<div class="text-only">
										<p> <span class="top-text"><em>E-mail Us Today</em></span><br>
										email@gmail.com</p>
									</div>
								</div>

							</section>				 -->			
					      
					    </aside>

					</article>

					<article class="img-box col-md-4">

						<aside id="nav_menu-2" class="widget-footer-container widget_nav_menu">

							<?php 

								if ( ! is_active_sidebar( 'footer-sidebar-3' ) ) {
									echo "Please Add a Widget Here";
								}

								dynamic_sidebar( 'footer-sidebar-3' ); 

							?>

<!-- 							<section class="footer-icon-block">
								
								<div class="content">
									<span class="icon"><i class="fa fa-home fa-4x" aria-hidden="true"></i></span>
									<div class="text-only">
										<p> 3433 Lithia Pinecrest Rd #126<br>
										Valrico, FL 33596</p>
									</div>
								</div>

							</section>			 -->				
					      
					    </aside>

					</article>		 

				</div> <!-- TOP 2 FOOTER WIDGET CONTAINER -->

			<hr>
			<div id="footer-menu" class="row">
				
				<article class="img-box col-md-12">

					    <aside id="recent-posts-2" class="widget-footer-container widget_recent_entries">

					    	
					      
					   	</aside>
					
				</article>

			</div> <!-- FOOTER MENU ENDS -->
			


			</section> <!-- FOOTER BODY ENDS -->


		</footer>

			<div id="copyright" class="copyright text-center">
				<!-- <p class="text-center">All Rights Reserved &copy; <?php echo date('Y'); ?>. <a target="_blank" class="" href="http://tianagustafson.com/">Designed & Developed by Tianagustafson.com</a></p> -->

						<?php 

							if ( ! is_active_sidebar( 'footer-sidebar-5' ) ) {
								return;
							}

							dynamic_sidebar( 'footer-sidebar-5' ); 

						?>				
					<!-- To learn more about our garage fransformation services and products, or to schedule a <br>
					<b>FREE, NO OBLIGATION</b> consultation please complete the form below or contact us by phone. -->
				<!--==============================================================================
				=            THIS IS FOR DEBUGGING. PLZ DISABLE WHEN READY TO PUBLISH            =
				===============================================================================-->
				
				<!-- <div style="color: white"><strong>Current template:</strong> <?php echo get_current_template( true ); ?></div> -->
				
				<!--====  End of THIS IS FOR DEBUGGING. PLZ DISABLE WHEN READY TO PUBLISH  ====-->
				
			</div>		
		</div> <!-- FOOTER CONTAINER ENDED -->


	

	</div> <!-- End of id="content" class="site-content" -->
</div> <!-- End of id="page" class="site" -->

</body>
</html>
