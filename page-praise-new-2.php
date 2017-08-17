<?php
/**
 * The template for displaying all pages.
 *	Template Name: Praise New 2
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

get_header(); ?>

<style type="text/css" media="screen">

	#mobile {
			padding-top: 3rem;
			margin-bottom: -1.5rem;
			/*border: 1px solid red;*/
	}	

	@media screen and (min-width: 768px) {

		#main {
			padding-top: 60rem;
		}
		
	    
	}
			
</style>		

<section class="container">
<!-- <h1>I am real praise</h1> -->
	<div id="primary" class="content-area col-md-12 col-lg-12">
		<article class="genbook">
			
			<div id="mobile" class="mobile text-center hidden-sm hidden-md hidden-lg">
				
			<!-- begin Genbook badge -->
				<script src="https://www.genbook.com/bookings/booknowjstag.action?id=30315492&size=large"></script>
				<noscript><a href="https://www.genbook.com/bookings/slot/reservation/30315492?bookingSourceId=1000"><img src="https://www.genbook.com/bookings/images/booknow-button-large.png" width="150" height="50" alt="Make an Online Appointment" border="0"/></a> <br/><a href="http://www.genbook.com" style="font-size:10px;">Online appointment scheduling for Professionals/Business</a></noscript>
			<!-- end Genbook badge -->
			</div>

			<div class="desktop hidden-xs">
					<iframe src ="http://www.genbook.com/bookings/slot/reservation/30315492/1650771796/1650771800/1454475600000?bookingContactId=1650778814" 
					scrolling="no" frameborder="0" width="100%" height="720px" style="position:absolute; clip:rect(190px,1100px,1000px,0px);
		            top:-160px; left: 0px;">
					  <p>Your browser does not support iframes.</p>
					</iframe>
			</div>
			
		</article>



		<main id="main" class="site-main" role="main">

		<?php


// echo 'Client Des: <h1>' . $client_designation . '</h1>';	
		 
		$args = array(
		    // 'category_name' => 'news',
			'post_type'      => 'praises',
		    'posts_per_page' => -1
		);
		 
		$my_query = new WP_Query( $args );

		?>
		 
		<?php if ( $my_query->have_posts() ) : ?>
		 
		    <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
		 

		 	<?php 

		 		$client_designation = get_field( 'client_designation' ); 
		 		$client_url = get_field( 'client_url' );
		 		$client_name = get_field( 'client_name' );

		  	?>
		       
		        <section class="praise-block clearfix">
			     	<?php if ( has_post_thumbnail() ) : ?>


				        <div class="col-md-2 col-lg-2">
			    				<?php the_post_thumbnail('thumbnail', array('class' => 'img-circle')); ?>
				        </div>

			         	<div class="col-md-10 col-md-10">

		         	<?php else : ; ?>
		         	
		         		<div class="col-md-12 col-md-12 no-image">

					<?php endif; ?>


		         		<article class="praise-text">
		         		<!-- // Post data goes here. -->
			         		<span class="icon-praise"><i class="fa fa-quote-left fa-2x"></i></span>
			         		<h3><?php the_title(); ?></h3>
				        		<?php the_content(); ?>
			         		<span class="icon-praise pull-right"><i class="fa fa-quote-right fa-2x"></i></span>

			         	</article>
			         	<aside class="praise-title">
			         		<a href="<?php echo $client_url; ?>" title="Tiana Praise" target="_blank"><?php echo $client_name; ?></a> | <?php echo $client_designation; ?>
			         	</aside>
		         	</div>



		        	
		        </section>
		 
		    <?php endwhile; ?>
		 
		<?php endif; ?>
		 
		<!-- // Reset the `$post` data to the current post in main query. -->
		<?php wp_reset_postdata(); ?>
 

		</main><!-- #main -->
	</div><!-- #primary -->
	<!-- <div class="sidebar col-md-4 col-md-4"> -->

		<?php //get_sidebar();  ?>
		
	<!-- </div> -->
</section> <!-- End Container -->	
<?php
get_footer();
