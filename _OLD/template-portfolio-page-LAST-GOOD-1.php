<?php
/**
 * The template for displaying all pages.
 *
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
<section class="container">
	<div id="primary" class="content-area">
	
		<main id="main" class="site-main" role="main">


			<article class="col-md-moose">

				<div id="grid-filter">

				    <select class="form-control">

				        <option value="">All</option>

				        <option value="one">City</option>

				        <option value="two">Nature</option>

				    </select>

				    <a class="btn btn-default category" data-value="">All Category</a>
				    <a class="btn btn-default category" data-value="one">Github</a>
				    <a class="btn btn-default category" data-value="two">Nature</a>

				    <br> <hr>

				</div>

				<br>

				<div id="masonry-grid">


				    <div class="grid-sizer"></div>

				    <div class="grid-item one">
				        <article class="content-block clearfix">
				            <img src="http://lorempixel.com/200/100/city/1" class="img-thumbnail img-responsive">
				            <p>
				                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				                
				            </p>
				            <a href="#" class="btn btn-info pull-right">Read More</a>
				        </article>
				    </div>

				    <div class="grid-item two">
				        <article class="content-block clearfix">
				        <img src="http://lorempixel.com/200/100/nature/2" class="img-thumbnail img-responsive">
				        <p>
				            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				        </p>
				            <a href="#" class="btn btn-info pull-right">Read More</a>
				        </article>
				    </div>

				    <div class="grid-item two">
				        <article class="content-block clearfix">
				        <img src="http://lorempixel.com/200/100/nature/3" class="img-thumbnail img-responsive">
				        <p>
				            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				            
				        </p>
				            <a href="#" class="btn btn-info pull-right">Read More</a>
				        </article>
				    </div>

				    <div class="grid-item one">
				        <article class="content-block clearfix">
				        <img src="http://lorempixel.com/200/100/city/4" class="img-thumbnail img-responsive">
				        <p>
				            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				        </p>
				        <p>
				            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				            
				            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				        </p>
				            <a href="#" class="btn btn-info pull-right">Read More</a>
				        </article>
				    </div>

				    <div class="grid-item two">
				        <article class="content-block clearfix">
				        <img src="http://lorempixel.com/200/100/nature/5" class="img-thumbnail img-responsive">
				            <a href="#" class="btn btn-info pull-right">Read More</a>
				        </article>
				    </div>

				    <div class="grid-item one">
				        <article class="content-block clearfix">
				        <img src="http://lorempixel.com/200/100/city/6" class="img-thumbnail img-responsive">
				        <p>
				            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				            
				        </p>
				            <a href="#" class="btn btn-info pull-right">Read More</a>
				        </article>
				    </div>

				    <div class="grid-item one">
				        <article class="content-block clearfix">
				        <img src="http://lorempixel.com/200/100/city/7" class="img-thumbnail img-responsive">
				            <a href="#" class="btn btn-info pull-right">Read More</a>
				        </article>
				    </div>

				    <div class="grid-item two">
				        <article class="content-block clearfix">
				        <img src="http://lorempixel.com/200/100/nature/8" class="img-thumbnail img-responsive">
				        <p>
				            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				            
				        </p>
				            <a href="#" class="btn btn-info pull-right">Read More</a>
				        </article>
				    </div>

				    <div class="grid-item two">
				        <article class="content-block clearfix">
				        <img src="http://lorempixel.com/200/100/nature/9" class="img-thumbnail img-responsive">
				        <p>
				            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				        </p>
				            <a href="#" class="btn btn-info pull-right">Read More</a>
				        </article>
				    </div>

				</div>
			<!-- End of Masonry Grid  -->
			</article>

 

		</main><!-- #main -->
	</div><!-- #primary -->
	
</section> <!-- End Container -->	
<?php
get_footer();
