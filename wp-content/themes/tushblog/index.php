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
<section>
	<div class="headline-container">
		<?php 
			$the_query = new WP_Query(array(
			'category_name' => 'Home Slider', 
			'posts_per_page' => 1 
			)); 
			while ( $the_query->have_posts() ) : 
			$the_query->the_post();
			?>
		<div class="headline">
			<div class="headline-image">
				<!-- <a href=""><img src="<?php bloginfo('template_directory');?>/assets/img/omotola.png"></a> -->
				<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('large');?></a>
			</div>
			<div class="headline-content">
				<div class="headline-content-inner">
					<h4><?php //the_title();?>Headline</h4>
					<p><?php the_excerpt();?></p>
				</div>
			</div>
		</div>
		<?php 
		endwhile; 
		wp_reset_postdata();
		?>
	</div>
</section>
<section>
	<div class="popular-posts">
		<?php 
	    	$featured = new wp_query(['showposts' => $breaking_num, 'cat' => $breaking_cat]);
	    	
	      	while ($featured->have_posts()) : $featured->the_post();
	    ?>
		<div class="popular-post">
			<a href="<?php the_permalink() ?>"><img src="<?php echo get_post_meta($post->ID, 'thumbnail',true) ?>"></a>
			<title><?php the_title(); ?></title>
		</div>
		<?php endwhile; 
			wp_reset_query();
		?>
	</div>
</section>
<section>
	<div class="feature">
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
			<div class="feature-content">
				<a href="<?php the_permalink() ?>">
					<div class="feature-content-inner">
						<h4><?php the_title(); ?></h4>
						<p><?php the_content(); ?></p>
					</div>
				</a>
			</div>
			<div class="feature-image">
				<a href="<?php the_permalink() ?>"><?php the_post_thumbnail();?></a>
			</div>
		<?php
			endwhile;
			wp_reset_query();
		?>
	</div>
</section>
<section>
	<div class="posts">
		<?php if(have_posts()):?>
			<?php while(have_posts()): the_post();?>
				<div class="post">
					<div class="post-content">
						<a href="<?php the_permalink() ?>">
							<div class="post-content-inner">
								<h4><?php the_title(); ?></h4>
								<p><?php the_content(); ?></p>
							</div>
						</a>
					</div>
					<div class="post-image">
						<a href="<?php the_permalink() ?>"><?php the_post_thumbnail();?></a>
					</div>
				</div>
				<?php endwhile; ?>
				<a class="load-more next-nav button" href="<?php echo get_site_url('','all-posts'); ?>">Next <i class="fa fa-chevron-right"></i></a>
				<?php else : ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>

	</div>
	<?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>