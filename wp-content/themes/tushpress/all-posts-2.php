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
						<?php
							global $currentPage;
							$currentPage = get_query_var('paged');
							query_posts( array( 'posts_per_page' => 2, 'post_status' => 'publish','paged' => $currentPage));
							if(have_posts()):
						 ?>
							<?php while(have_posts()): the_post();?>
								<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
									<div class="row full-featured">
							
										<div class="col-md-6">
											<h3><?php the_title(); ?></h3>
											<p> <?php the_content(); ?></p>
										</div>
										
										<div class="col-md-6">
											<?php the_post_thumbnail();?>
										</div>
							
									</div>
								</a>
							<?php 
								endwhile; 
								wp_reset_query();
							?>
					
						
						<div class="col-md-12">
							<div class="row">
								<!-- Add the pagination functions here. -->
								<div class="pull-left"><?php next_posts_link( '<span class="fa fa-chevron-left"></span> Prev' ); ?></div>
								<div class="pull-right"><?php previous_posts_link( 'Next <span class="fa fa-chevron-right"></span>' ); ?></div>
							
							</div>
						</div>
						<?php else : ?>
						<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
						<?php endif;
						?>
						
					</div>
					<?php get_sidebar(); ?>
				</div>
			</div>
			
		</div>
		
	</section>