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
			    $siteLogo = get_field('site_logo', 6); // 1476 is post id                               
			    // $size = 'full'; // (thumbnail, medium, large, full or custom size)
			?>
		</div>

		<section class="top-header-bar">
			<div class="container">
				<article class="form-bar-content-holder">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
						<div class="form-bar-left-block text-center">
							<a href="tel:<?php the_field( 'top_info_bar_mobile_number', 6 ); ?>"><h4 class="headline"><?php the_field( 'top_info_bar_text', 6 ); ?></h4></a> 
							<!-- <img class="img-responsive center-block" src="/wp-content/uploads/2016/06/Screen-Shot-2016-06-24-at-2.43.19-PM.png" alt=""> -->
						</div>
					</div>	
				</article>
			</div>
		</section>
	
		<div class="navbar-container">
			<nav class="navbar navbar-inverse" role="navigation">
	
	  		  <div class="container-fluid">

			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			        </button>
			    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><span><img class="logo" src="<?php echo $siteLogo; ?>" alt=""></span> </a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse navbar-ex1-collapse">
					
					<ul class="header-social pull-right hide">
						<li><a target="_blank" href="https://www.facebook.com/mybestbod/?ref=bookmarks"><i class="fa fa-facebook fa-2x"></i></a></li>				
						<li><a target="_blank" href="https://www.instagram.com/mybestbod_fit/"><i class="fa fa-instagram fa-2x"></i></a></li>				
						<li><a target="_blank" href="https://pinterest.com/mybestbodever/"><i class="fa fa-pinterest fa-2x"></i></a></li>				
						<li><a target="_blank" href="https://twitter.com/mybestbod"><i class="fa fa-twitter fa-2x"></i></a></li>				
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

	<!-- <img src="/wp-content/uploads/2017/08/garage-1920x800.jpg" alt=""> -->
	
	<header id="front-pg-header">

		<?php if ( is_front_page() ) : ?>
			
			<?php echo $home_page_header_slider; ?>

			<section class="top-form-bar">
				<div class="container">
					<article class="form-bar-content-holder">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
							<div class="form-bar-left-block">
								<h2 class="form-bar-left-text">SIGN UP to receive the 7 SECRET Tips to creating your Best Bod Ever!</h2>
								<!-- <img class="img-responsive center-block" src="/wp-content/uploads/2016/06/Screen-Shot-2016-06-24-at-2.43.19-PM.png" alt=""> -->
							</div>
							<div class="form-bar-right-block">
								<div class="form-bar-right-form-holder">
									
								
									<?php echo do_shortcode( '[convertkit form=4919997]' ); ?>

								</div>
							</div>
						</div>	
					</article>
				</div>
			</section>


		<?php elseif ( is_single() || is_home() || is_archive() || is_search() || is_404() ) : ?>

			<section class="dr-nia-single-post-header">
		
				<h1><?php wp_title(); ?></h1>
				
			</section>

		<?php else : ?>

			<section class="dr-nia-page-header">
		
				<h1><?php wp_title(); ?></h1>
				
			</section>

		<?php endif; ?>
	
	

	</header>
	



















