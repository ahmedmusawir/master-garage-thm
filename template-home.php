<?php
/**
 * The main template file.
 * Template Name: Home Template
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

// $client_designation = get_field( 'client_designation' );

get_header('home'); ?>

<section class="above-blog-block-1">

	<main class="container">
		
		<div class="col-md-8 col-lg-8">

			<h2 class="headline">FREE Consultation and On-Site Estimate Available</h2>
			<h4 class="subheadline">Schedule your on-site garage estimate appointment today!</h4>
			
		</div>
		<div class="col-md-4 col-lg-4 text-center">
			
			<a class="btn btn-primary btn-lg" href="#">SCHEDULE NOW</a>

		</div>

	</main>
	
	<!-- <img class="img-responsive wow lightSpeedIn" src="/wp-content/uploads/2016/10/page-header-2000-B.jpg" data-wow-duration="1s" data-wow-delay="0s" alt=""> -->
	<!-- <img class="img-responsive wow zoomInUp center-block" src="/wp-content/uploads/2016/06/TianaNEWJuneTextBlock1.png" data-wow-duration="1s" data-wow-delay="0s" alt=""> -->
	
</section>

<section class="above-blog-block-2">

	<div class="wrapper container">
		
		<h2 class="headline">OUR UNIQUE SERVICES</h2>

		<p class="text-only text-center">
			Our garage flooring techniques can hide almost all existing floor imperfections, while preventing future ones from
			appearing in the first place. Masterpiece Garage of Tempa Bay plans, designs, and transforms ordinary garage 
			spaces, into usable, functional, multipurpose areas, the whole family can enjoy.
		</p>

		<div class="icon-content">

			<figure class="col-sm-4 col-md-4 col-md-lg">
				<!-- <a href="#" target="_blank"> -->
				<a href="#">
					<img class="img-responsive img-left wow bounceInLeft" src="/wp-content/uploads/2017/08/right-image-400x300.jpg" data-wow-duration="1s" data-wow-delay="0s" alt="">
					<article class="text-content"><br>

						<h3 class="subheadline">GARAGE FLOORING</h3>

						<p class="subtext-only text-center">
							Our garage flooring techniques can hide almost all existing floor imperfections, while preventing future ones from
							appearing in the first place. Masterpiece Garage of Tempa Bay plans, designs, and transforms ordinary garage 
							spaces, into usable, functional, multipurpose areas, the whole family can enjoy.
						</p>						

					</article>
				</a>

			</figure>
			<figure class="col-sm-4 col-md-4 col-md-lg">

				<a href="#">
					<img class="img-responsive img-middle wow zoomIn" src="/wp-content/uploads/2017/08/left-img-400x300.jpg" data-wow-duration="1s" data-wow-delay="0s" alt="">
					<article class="text-content"><br>

						<h3 class="subheadline">OVERHEAD RACKS</h3>

						<p class="subtext-only text-center">
							Our garage flooring techniques can hide almost all existing floor imperfections, while preventing future ones from
							appearing in the first place. Masterpiece Garage of Tempa Bay plans, designs, and transforms ordinary garage 
							spaces, into usable, functional, multipurpose areas, the whole family can enjoy.
						</p>						

					</article>
				</a>

			</figure>
			<figure class="col-sm-4 col-md-4 col-md-lg">

				<a href="#" target="_blank">
					<img class="img-responsive img-right wow bounceInRight" src="/wp-content/uploads/2017/08/right-image-400x300-1.jpg" data-wow-duration="1s" data-wow-delay="0s" alt="">
					<article class="text-content"><br>

						<h3 class="subheadline">GARAGE CABINETS</h3>

						<p class="subtext-only text-center">
							Our garage flooring techniques can hide almost all existing floor imperfections, while preventing future ones from
							appearing in the first place. Masterpiece Garage of Tempa Bay plans, designs, and transforms ordinary garage 
							spaces, into usable, functional, multipurpose areas, the whole family can enjoy.
						</p>						

					</article>
				</a>

			</figure>						

		</div>

		<div class="row text-center">
			
			<a class="btn btn-primary btn-lg" href="#">SCHEDULE NOW</a>

		</div>		

	</div> <!-- END CONTAINER -->
	
</section>

<!-- BLOG BLOCK -->

<section class="below-blog-block-1">

	<div class="wrapper container-fluid">

		<div class="container">
		
			<h2 class="headline text-center">RECENT PROJECTS</h2>

			<p class="text-only text-center">
				Our garage flooring techniques can hide almost all existing floor imperfections, while preventing future ones from
				appearing in the first place. Masterpiece Garage of Tempa Bay plans, designs, and transforms ordinary garage 
				spaces, into usable, functional, multipurpose areas, the whole family can enjoy.
			</p>

		</div>

		<div class="icon-content">

			<figure class="col-md-3 col-lg-3">
				<!-- <a href="#" target="_blank"> -->
				<a href="#">
					<img class="img-responsive img-left wow bounceInLeft" src="/wp-content/uploads/2017/08/right-image-400x300.jpg" data-wow-duration="1s" data-wow-delay="0s" alt="">
	
				</a>

			</figure>
			<figure class="col-md-3 col-lg-3">

				<a href="#">
					<img class="img-responsive img-middle wow zoomIn" src="/wp-content/uploads/2017/08/left-img-400x300.jpg" data-wow-duration="1s" data-wow-delay="0s" alt="">

				</a>

			</figure>
			<figure class="col-md-3 col-lg-3">

				<a href="#">
					<img class="img-responsive img-middle wow zoomIn" src="/wp-content/uploads/2017/08/left-img-400x300.jpg" data-wow-duration="1s" data-wow-delay="0s" alt="">

				</a>

			</figure>			
			<figure class="col-md-3 col-lg-3">

				<a href="#" target="_blank">
					<img class="img-responsive img-right wow bounceInRight" src="/wp-content/uploads/2017/08/right-image-400x300-1.jpg" data-wow-duration="1s" data-wow-delay="0s" alt="">
				
				</a>

			</figure>						

		</div>

	</div> <!-- END CONTAINER -->


</section>


<?php

get_footer();
