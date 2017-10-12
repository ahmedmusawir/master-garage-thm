<?php
/**
 * The template for displaying all pages.
 * Template Name: Gallery Template
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

get_header('portfolio'); ?>

<?php 

$paged = 0;
if ( get_query_var('paged') ) $paged = get_query_var('paged');
if ( get_query_var('page') ) $paged = get_query_var('page');
 
query_posts( '&post_type=portfolio&paged=' . $paged );
 
// require_once( 'archive-portfolio.php' );

?>
<section class="container">
	<div id="primary" class="content-area">
	
		<main id="main" class="site-main" role="main">

		<?php 

			$custom_taxes = get_terms('product-type'); 
			// print_r($custom_taxes);	
		?>

			<article class="col-md-moose text-center">

				<div id="grid-filter" class="center-block hide">

				    <a class="btn btn-default category active" data-value="">ALL CATEGORY</a>
	
				  	<?php foreach ( $custom_taxes as $taxonomy ) : ?>  	

				    <a class="btn btn-default category" data-value="<?php echo $taxonomy->slug; ?>"><?php echo $taxonomy->name; ?></a>
					
					<?php endforeach; ?>



				    <br> <hr>

				</div> <!-- END OF GRID FILTER -->

				<br>

				<div id="masonry-grid">

				    <div class="grid-sizer"></div>
					<?php 
					
					// $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$counter = 0;

					$args = array(
						'post_type' => 'portfolio',
						'posts_per_page' => 12,
						'paged' => $paged,
					);	
					
					$front_page_post_items = new WP_Query($args);		
					
						if ( $front_page_post_items->have_posts() ) :
					
							/* Start the Loop */
							while ( $front_page_post_items->have_posts() ) : $front_page_post_items->the_post(); ?>

							<?php $counter++; ?>
					
							<?php 
								$custom_taxes = wp_get_post_terms( $post->ID, array('product-type') );
								$taxonomy_names = "";
					
								foreach ( $custom_taxes as $taxonomy ) {
									$taxonomy_names .= $taxonomy->slug . " ";
								}
							?>
							
						    <div class="grid-item <?php echo $taxonomy_names; ?>">
						        <article class="content-block clearfix">
						           
									<a class="responsive" href="<?php the_post_thumbnail_url( 'full' ); ?> " data-rel="lightbox-0" title="">
										<?php the_post_thumbnail('thumbnail', array('class' => 'img-responsive')); ?>
									</a>
									
									<h3 class="headline"><?php the_title(); ?></h3>	
									
									<p class="text-only">
										<?php //the_content(); ?>
									</p>
								
						        </article>
						    </div>							
					
							<?php 
					
							endwhile;
					
							else :
					
								get_template_part( 'template-parts/content', 'none' );
					
							endif; 

								wp_reset_postdata();

							?>
					
		    

				</div>
			<!-- End of Masonry Grid  -->
				
				<h2 id="pagination">

				<?php  if(1 == $paged) : ?>

						<div class="paging-first-page"><?php next_posts_link(); ?></div>

				<?php elseif( $counter < 12 ) : ?>

					<div class="paging-text"><aside class="pull-right"><?php previous_posts_link(); ?></aside></div>
				
				<?php else: ?>
				
					<div class="paging-text"><aside class="pull-left"><?php next_posts_link(); ?></aside><aside class="pull-right"><?php previous_posts_link(); ?></aside></div>
			
				<?php endif; ?>
					

				</h2>		


			</article> <!-- END col-md-moose -->

 

		</main><!-- #main -->
	</div><!-- #primary -->
	
</section> <!-- End Container -->	

<?php
get_footer();
