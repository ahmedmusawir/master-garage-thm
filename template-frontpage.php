<?php
/**
 * The main template file.
 * Template Name: Home Page Template
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

			<h2 class="headline"><?php the_field('optin_left_headline'); ?></h2>
			<h4 class="subheadline"><?php the_field('optin_left_subheadline'); ?></h4>
			
		</div>
		<div class="col-md-4 col-lg-4 text-center">
			
			<a class="btn btn-primary btn-lg" href="<?php the_field('optin_right_button_url'); ?>"><?php the_field('optin_right_button_text'); ?></a>

		</div>

	</main>
	
	<!-- <img class="img-responsive wow lightSpeedIn" src="/wp-content/uploads/2016/10/page-header-2000-B.jpg" data-wow-duration="1s" data-wow-delay="0s" alt=""> -->
	<!-- <img class="img-responsive wow zoomInUp center-block" src="/wp-content/uploads/2016/06/TianaNEWJuneTextBlock1.png" data-wow-duration="1s" data-wow-delay="0s" alt=""> -->
	
</section>

<section class="above-blog-block-2">

	<div class="wrapper container">
		
		<h2 class="headline"><?php the_field('roadmap_headline_text'); ?></h2>

		<p class="text-only text-center">
			<?php the_field('roadmap_subtext'); ?>
		</p>

		<div class="icon-content">

			<figure class="col-sm-4 col-md-4 col-md-lg">

				<!-- <a class="responsive" href="<?php the_field('roadmap_left_image'); ?>" data-rel="lightbox-0" title=""> -->
				<a class="responsive" href="<?php the_field('roadmap_left_image_link'); ?>" >
					<img class="img-responsive center-block img-left wow bounceInLeft" src="<?php the_field('roadmap_left_image'); ?>" data-wow-duration="1s" data-wow-delay="0s" alt="">
				</a>
				<article class="text-content"><br>

					<h3 class="subheadline"><?php the_field('roadmap_left_headline_text'); ?></h3>

					<p class="subtext-only text-center">
						<?php the_field('roadmap_left_subtext'); ?>
					</p>						

				</article>

			</figure>
			<figure class="col-sm-4 col-md-4 col-md-lg">

				<!-- <a class="responsive" href="<?php the_field('roadmap_middle_image'); ?>" data-rel="lightbox-0" title=""> -->
				<a class="responsive" href="<?php the_field('roadmap_middle_image_link'); ?>" >
					<img class="img-responsive center-block img-middle wow zoomIn" src="<?php the_field('roadmap_middle_image'); ?>" data-wow-duration="1s" data-wow-delay="0s" alt="">
				</a>
				<article class="text-content"><br>

					<h3 class="subheadline"><?php the_field('roadmap_middle_headline_text'); ?></h3>

					<p class="subtext-only text-center">
						<?php the_field('roadmap_middle_subtext'); ?>
					</p>						

				</article>

			</figure>
			<figure class="col-sm-4 col-md-4 col-md-lg">
				<!-- <a class="responsive" href="<?php the_field('roadmap_right_image'); ?>" data-rel="lightbox-0" title=""> -->
				<a class="responsive" href="<?php the_field('roadmap_right_image_link'); ?>" >
					<img class="img-responsive center-block img-right wow bounceInRight" src="<?php the_field('roadmap_right_image'); ?>" data-wow-duration="1s" data-wow-delay="0s" alt="">
				</a>
				<article class="text-content"><br>

					<h3 class="subheadline"><?php the_field('roadmap_right_headline_text'); ?></h3>

					<p class="subtext-only text-center">
						<?php the_field('roadmap_right_subtext'); ?>
					</p>						

				</article>

			</figure>						

		</div>

		<div class="row text-center">
			
			<a class="btn btn-primary btn-lg" href="<?php the_field('roadmap_bottom_button_url'); ?>"><?php the_field('roadmap_bottom_button_text'); ?></a>

		</div>		

	</div> <!-- END CONTAINER -->
	
</section>

<!-- BLOG BLOCK -->

<section class="below-blog-block-1">

	<div class="wrapper container-fluid">

		<div class="container">
		
			<h2 class="headline text-center"><?php the_field('recent_project_headline'); ?></h2>

			<p class="text-only text-center">
				<?php the_field('recent_project_subtext'); ?>
			</p>

		</div>

		<div class="icon-content">
			<?php 
			
			$args = array(
				'post_type' => 'portfolio',
				'posts_per_page' => 4,
			);	
			
			$front_page_post_items = new WP_Query($args);		
			
				if ( $front_page_post_items->have_posts() ) :
			
					/* Start the Loop */
					while ( $front_page_post_items->have_posts() ) : $front_page_post_items->the_post(); ?>

					<figure class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						
						<a class="responsive" href="<?php the_post_thumbnail_url( 'full' ); ?> " data-rel="lightbox-0" title="">
							<?php the_post_thumbnail('medium', array('class' => 'img-responsive center-block')); ?>
							<h5 class="item-headline"><?php the_title(); ?></h5>	
						</a>	

					</figure>
	
				<?php 
		
				endwhile;
		
				else :
		
					get_template_part( 'template-parts/content', 'none' );
		
				endif; 

					wp_reset_postdata();

				?>
		</div>

	</div> <!-- END CONTAINER -->


</section>


<?php

get_footer();
