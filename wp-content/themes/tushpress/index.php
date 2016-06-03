<?php get_header();
 global $more;
$more = 0;
/* ID of your 'Breaking News' Category */
$breaking_cat = "2"; 
 
/* How many posts from above category to display? Default = 3 */
$breaking_num = "3"; 
 
/* Number of recent posts to display under the Breaking News */
$latest_num = "4";
  
/* IDs of any cats you dont want to include in Recent posts.
Start each ID with a 'minus' symbol Seperate by a comma.
EG: $latest_ignore = "7,-6,-8,-1";
Posts from the 'Breaking' category are automatically excluded. */
$latest_ignore = "-1"; 
?>
<section class="featured-banner">
	   <div class="container">

	      <!-- Carousel
	      ================================================== -->

	   
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- <ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol> -->
			<div class="carousel-inner" role="listbox">
				<?php 
				$the_query = new WP_Query(array(
				'category_name' => 'Home Slider', 
				'posts_per_page' => 1 
				)); 
				while ( $the_query->have_posts() ) : 
				$the_query->the_post();
				?>
			<div class="item active">
				<div class="container">
					<?php the_post_thumbnail('large');?>
					<div class="carousel-caption">
						 <h3><?php the_title();?></h3>
						 <p><?php the_excerpt();?></p>
						 <p><a class="btn btn-sm btn-makeup" href="#" role="button">Read more</a></p>
					</div>
				</div>
			</div><!-- item active -->
			<?php 
			endwhile; 
			wp_reset_postdata();
			?>
			<?php 
			$the_query = new WP_Query(array(
			'category_name' => 'Home Slider', 
			'posts_per_page' => 5, 
			'offset' => 1 
			)); 
			while ( $the_query->have_posts() ) : 
			$the_query->the_post();
			?>
			<div class="item">
				<?php the_post_thumbnail('large');?>
					<div class="container">
						<div class="carousel-caption">
							 <h4><?php the_title();?></h4>
							 <p><?php the_excerpt();?></p>
						</div>
					</div>
			</div><!-- item -->
			<?php 
			endwhile; 
			wp_reset_postdata();
			?>
			</div><!-- carousel-inner -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		          <span class="sr-only">Previous</span>
		        </a>
		        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		          <span class="sr-only">Next</span>
		        </a>
		</div><!-- #myCarousel -->


   	</section>
	
	<section class="featured-posts">
		
		<div class="container">
			 <!-- Show x Posts from Breaking News -->
		    <?php 
		    	$featured = new wp_query(['showposts' => $breaking_num, 'cat' => $breaking_cat]);
		    	
		      	while ($featured->have_posts()) : $featured->the_post();
		    ?>
			<div class="single-featured col-md-4 col-sm-6 col-xs-12">
				<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
					<figure>
						<img src="<?php echo get_post_meta($post->ID, 'thumbnail',true) ?>" />
						<h5><?php the_title(); ?></h5>
					</figure>
				</a>
			</div>
			<?php endwhile; 
			wp_reset_query();
			?>

			<div class="col-md-12 fit-pad20">
				<?php 
					function filter_where($where = '') {
					    //posts in the last 30 days
					    $where .= " AND post_date > '" . date('Y-m-d', strtotime('-30 days')) . "'";
					    return $where;
					}
					add_filter('posts_where', 'filter_where');

				$popular_args = [	
								'post_type'=> 'post',
								'posts_per_page'=>1,
								'orderby'=> 'comment_count',
								'order'=>'DESC'
							];
				$popular = new wp_query($popular_args);
				while ($popular->have_posts()): $popular->the_post(); ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
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
			</div>
			
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
								
								<a href="<?php echo get_site_url('','all-posts'); ?>" class="btn btn-artist load-more"><i class="fa fa-spinner fa-pulse"></i> Load more</a>
						
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