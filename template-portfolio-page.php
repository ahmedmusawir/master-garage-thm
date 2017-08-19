<?php
/**
 * The template for displaying all pages.
 * Template Name: Portfolio Template
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

		<?php 

			$custom_taxes = get_terms('product-type'); 
			// print_r($custom_taxes);	
		?>

			<article class="col-md-moose text-center">

				<div id="grid-filter" class="center-block">

				    <a class="btn btn-default category active" data-value="">ALL CATEGORY</a>
	
				  	<?php foreach ( $custom_taxes as $taxonomy ) : ?>  	

				    <a class="btn btn-default category" data-value="<?php echo $taxonomy->slug; ?>"><?php echo $taxonomy->name; ?></a>
					
					<?php endforeach; ?>



				    <!-- <a class="btn btn-default category" data-value="three">PROSCHE</a>
				    <a class="btn btn-default category" data-value="four">HONDA</a>
 -->
				    <br> <hr>

				</div> <!-- END OF GRID FILTER -->

				<br>

				<div id="masonry-grid">

				    <div class="grid-sizer"></div>

					<?php 

					$args = array(
						'post_type' => 'portfolio',
						'posts_per_page' => 15,
					);	

					$front_page_post_items = new WP_Query($args);		

					if ( $front_page_post_items->have_posts() ) :

						/* Start the Loop */
						while ( $front_page_post_items->have_posts() ) : $front_page_post_items->the_post(); ?>

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
									<?php the_content(); ?>
								</p>
							
					        </article>
					    </div>							

						<?php 

						endwhile;

						the_posts_navigation();

						wp_reset_postdata();


					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>

					<h2 class="block-title">
						<!-- <a class="btn btn-default btn-block" href="/blog/" title="">All Posts</a> -->
					</h2>					    

				</div>
			<!-- End of Masonry Grid  -->
			</article>

 

		</main><!-- #main -->
	</div><!-- #primary -->
	
</section> <!-- End Container -->	

<!-- VUE JS PORTFOLIO MENU LOOP -->
<script type="text/javascript">
Vue.config.devtools = true;

new Vue ({
  el: 				'#main',
  data: {
    ajax:           '<?php echo get_site_url(); ?>',
    posts:          '',
    catValue:       '',
  },  
  created: function() {
    this.getProductTypes();
  },
  methods: {
     getProductTypes: function() {
        var app = this;
         // axios.get( app.ajax + '/wp-json/wp/v2/posts?categories=5&per_page=100')
         // axios.get( app.ajax + '/wp-json/wp/v2/posts?per_page=100')
         // axios.get( app.ajax + '/wp-json/wp/v2/testimonials-api?per_page=100')
         axios.get( app.ajax + '/wp-json/wp/v2/product-type')
          .then(function(response) {
            app.posts = response.data;
            return app.posts;
        })
         .catch(function(error){
           console.log(error);
         });
     },
  }
});
</script>


<?php
get_footer();
