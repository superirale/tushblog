<?php 
/*
	Template Name: All Posts
*/
?>
<?php get_header(); ?>
	<section class="search-banner">
	   <div class="container">
		   <center><h2>All Posts</h2></center> 
	   </div>
   	</section>
   	<section class="featured-posts">
		<div class="container">
			<div class="col-md-12 fit-pad20">
				<div class="row">
					<div class="col-md-9 col-sm-6 col-xs-12 full-featured-row">
						<?php // Display blog posts on any page @ http://m0n.co/l
						$temp = $wp_query; $wp_query= null;
						$wp_query = new WP_Query(); $wp_query->query('showposts=2' . '&paged='.$paged);
						while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
							<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
								<div class="row full-featured">
									<div class="col-md-6">
										<h3><?php the_title(); ?></h3>
										<p> <?php the_excerpt(); ?></p>
									</div>
									<div class="col-md-6">
										<?php the_post_thumbnail();?>
									</div>
								</div>
							</a>
						<?php endwhile; ?>
						<?php if ($paged > 1) { ?>
						<div class="col-md-12">
							<div class="row">
								<!-- Add the pagination functions here. -->
								<div class="pull-left"><?php next_posts_link( '<span class="fa fa-chevron-left"></span> Prev' ); ?></div>
								<div class="pull-right"><?php previous_posts_link( 'Next <span class="fa fa-chevron-right"></span>' ); ?></div>
							</div>
						</div>
						<?php } else { ?>
						<div class="col-md-12">
							<div class="row">
								<div class="pull-left"><?php next_posts_link( '<span class="fa fa-chevron-left"></span> Prev' ); ?></div>
							</div>
						</div>
						<?php } ?>
						<?php wp_reset_postdata(); ?>
					</div>
					<?php get_sidebar(); ?>
				</div>
			</div>
		</section>
<?php get_footer(); ?>