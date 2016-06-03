<?php
global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

foreach($query_args as $key => $string) {
	$query_split = explode("=", $string);
	$search_query[$query_split[0]] = urldecode($query_split[1]);
} // foreach

$search = new WP_Query($search_query);
?>
<?php get_header(); ?>
  
   	<section class="search-banner">
	   <div class="container">
		   <center><h2><?php printf( __( 'Search Results for: %s', 'twentyfifteen' ), get_search_query() ); ?></h2></center> 
	   </div>
   	</section>
	
		<section class="featured-posts">
		
		<div class="container">
			
		
			
			<div class="col-md-12 fit-pad20">
				<div class="row">
					
					<div class="col-md-9 col-sm-6 col-xs-12 full-featured-row">
						<?php if(have_posts()):?>
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
							<?php endwhile; ?>
					
						
						<div class="col-md-12">
							<div class="row">
								<!-- Add the pagination functions here. -->
									<div class="nav-previous alignleft"><?php next_posts_link( 'Prev' ); ?></div>
									<div class="nav-next alignright"><?php previous_posts_link( 'Next' ); ?></div>
								<!-- <a class="btn btn-artist load-more"><i class="fa fa-spinner fa-pulse"></i> Load more</a> -->
							</div>
						</div>
						<?php else : ?>
						<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
						<?php endif; ?>
						
					</div>
					<?php get_sidebar(); ?>
				</div>
			</div>
			
		</div>
		
	</section>
	<?php get_footer(); ?>