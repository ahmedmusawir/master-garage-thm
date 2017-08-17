<?php
/**
 * The main template file.
 * Template Name: Blog Template
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

get_header(); ?>

<section class="above-blog-block-1">
	
	<img class="img-responsive" src="/wp-content/uploads/2016/06/TianaMediaBlock.jpg" alt="">
	
</section>

<section class="above-blog-block-2">

	<div class="wrapper container-fluid">
		
		<h2>GET INTO ACTION! CLICK AN OPTION BELOW</h2>

		<div class="icon-content">

			<figure class="col-sm-4 col-md-4 col-md-lg">
				<img src="/wp-content/uploads/2016/06/BullseyeLaptopPlay.png" alt="">
				<article class="text-content">
					sign up for my <br>
					free online masterclass!
				</article>
			</figure>
			<figure class="col-sm-4 col-md-4 col-md-lg">
				<img src="/wp-content/uploads/2016/06/TianaBullseyeImage.png" alt="">
				<article class="text-content">
					check out <br>
					my e-courses
				</article>
			</figure>
			<figure class="col-sm-4 col-md-4 col-md-lg">
				<img src="/wp-content/uploads/2016/06/BullseyeLaptopPlay.png" alt="">
				<article class="text-content">
					join the facebook <br>
					community
				</article>
			</figure>						

		</div>

	</div>
	
</section>

<section class="container-fluid">

	<div id="primary" class="content-area col-md-8 col-lg-8">
		<main id="main" class="site-main" role="main">
		<!-- <h1><?php echo $client_designation; ?></h1>		 -->

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<div class="sidebar col-md-4 col-md-4">

		<?php get_sidebar();  ?>
		
	</div>

</section>

<section class="below-blog-block-1">

	<div class="wrapper container-fluid">
		
		<h2>Learn the Exact Step By Step Systems behind</h2>
		<h2>creating your own profitable online marketing funnel.</h2>

		<div class="icon-content">

			<figure class="col-sm-12 col-md-12 col-12">
				<img class="center-block img-responsive" src="/wp-content/uploads/2016/06/TianaBullseyeImage.png" alt="">
			</figure>

		</div>

		<h1>HEY DREAM ARCHER - TIME TO FOLLOW YOUR ARROW!</h1>

	</div>


</section>

<section class="below-blog-block-2">

		<div class="wrapper container-fluid">
		
		<h2> READY TO LEARN? LET'S DO THIS! </h2>

		<div class="icon-content">

			<figure class="col-sm-4 col-md-4 col-md-lg">
				<img src="/wp-content/uploads/2016/06/TianaNEWJuneAutomateDominate.png" alt="">
				<!-- <article class="text-content">
					sign up for my <br>
					free online masterclass!
				</article> -->
			</figure>
			<figure class="col-sm-4 col-md-4 col-md-lg">
				<img src="/wp-content/uploads/2016/06/TianaNEWJuneBullseyeFunnels.png" alt="">
				<!-- <article class="text-content">
					check out <br>
					my e-courses
				</article> -->
			</figure>
			<figure class="col-sm-4 col-md-4 col-md-lg">
				<img src="/wp-content/uploads/2016/06/TianaNEWJuneGoalswithsoul.png" alt="">
				<!-- <article class="text-content">
					join the facebook <br>
					community
				</article> -->
			</figure>						

		</div>

		<article class="btn-holder text-center col-sm-12 col-md-12 col-lg-12">
			<a class="btn btn-lg btn-danger" href="#">YES! SHOW ME MORE!</a>
		</article>

	</div>
	
</section>
<?php

get_footer();
