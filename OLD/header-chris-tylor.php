<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Moose_Framework
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- <h1><?php //echo bloginfo( 'charset' ); ?></h1> -->
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'moose-frame' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-logo-social container-fluid">
			<?php
			    // $front_header_image = get_field('front_header_image', 6); // 1476 is post id                               
			    // $siteLogo = get_field('site_logo', 6); // 1476 is post id                               
			    // $size = 'full'; // (thumbnail, medium, large, full or custom size)
			?>
		</div>


	
		<div class="navbar-container">
			<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	
	  		  <div class="container-fluid">

			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			        </button>
			    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><span><img class="logo" src="/wp-content/uploads/2016/06/TyloreCLogoFinal-200.png" alt=""></span> </a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse navbar-ex1-collapse">
					
					<ul class="header-social pull-right">
						<li><a target="_blank" href="https://www.facebook.com/tianagustafson/?fref=ts"><i class="fa fa-facebook fa-2x"></i></a></li>				
						<li><a target="_blank" href="https://www.instagram.com/freedom_planner/"><i class="fa fa-instagram fa-2x"></i></a></li>				
						<li><a target="_blank" href="https://www.pinterest.com/tianastar/"><i class="fa fa-pinterest fa-2x"></i></a></li>				
						<li><a target="_blank" href="https://www.youtube.com/user/coffeeshopgrrrl "><i class="fa fa-twitter fa-2x"></i></a></li>				
						<!-- <li><a target="_blank" href="https://www.linkedin.com/in/tianastar"><i class="fa fa-linkedin fa-2x"></i></a></li>				 -->
					</ul>

			    	
			        <?php
				        wp_nav_menu( array(
				            'theme_location' => 'primary',
				            'depth' => 2,
				            'container' => false,
				            'menu_class' => 'nav navbar-nav navbar-right',
				            'fallback_cb' => 'wp_page_menu',
				            //Process nav menu using our custom nav walker
				            'walker' => new wp_bootstrap_navwalker())
				        );
			        ?>

			    </div><!-- /.navbar-collapse --> 


	      		

	  		  </div><!-- /.container-fluid -->

			</nav>
		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">

	
	<header id="front-pg-header">

		<?php if ( is_home() || is_single() || is_archive() || is_search() || is_404() ) : ?>
			<!-- <img class="img-responsive hidden-xs" src="<?php echo $front_header_image; ?>" alt="tiana img"> -->
			<img class="img-responsive" src="/wp-content/uploads/2016/06/TyloreCHeaderFinal-1920.jpg" alt="">

	
		<?php else : ?>
			<img class="img-responsive" src="/wp-content/uploads/2016/06/TyloreCHeaderFinal-1920.jpg" alt="">
			<!-- <img class="img-responsive" src="<?php echo $page_header_image; ?>" alt="tiana img"> -->
		<?php endif; ?>
	

	</header>
	
	<section class="top-form-bar">
		<div class="container">
			<article class="form-bar-content-holder">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
					<div class="form-bar-left-block">
						<!-- <h2 class="form-bar-left-text">Sign Up and Get my POWER PROJECT For Free</h2> -->
						<img class="img-responsive center-block" src="/wp-content/uploads/2016/06/Screen-Shot-2016-06-24-at-2.43.19-PM.png" alt="">
					</div>
					<div class="form-bar-right-block">
						<div class="form-bar-right-form-holder">
							
							<form id="header-form" class="form-inline" role="form">
								<div class="form-group">
								    <label for="name">FIRST NAME:</label>
								    <input type="text" class="form-control" id="name" placeholder="" required>
								</div>
								<div class="form-group">
								    <label for="email">EMAIL:</label>
								    <input type="email" class="form-control" id="email" placeholder="" required>
								</div>
							
								  <button id="submit" type="submit" class="btn btn-default">YES! I WANT IT!</button><br />
							</form>

						</div>
					</div>
				</div>	
			</article>
		</div>
	</section>



















