<?php get_header(); ?>
	<?php while ( have_posts() ) : the_post();?>
		<section class="search-banner">
	   <div class="container">
		   <center><h2><?php the_title(); ?></h2></center> 
	   </div>
</section>
	
<section class="featured-posts">
	
	<div class="container">
		
		<div class="col-md-12 fit-pad20 single-post">
			<div class="row">
				<figure>
					<!-- <img src="/assests/images/posts/post-2.png" title="24 street style photos from London men’s: day 1 & 2" class="single-post-img" /> -->
					<?php the_post_thumbnail();?>
				</figure>
				
				<div class="col-md-9 col-sm-6 col-xs-12 no-padding">
					
					<?php if(the_excerpt()):?>
					<div class="col-md-12 post-quote">
						<blockquote>
							<?php the_excerpt(); ?>
						</blockquote>
					</div>
					<?php endif; ?>
					
					<div class="full-featured-row">
						<?php the_content(); ?>
					</div>
					
				</div>
				
				<?php get_sidebar(); ?>
			</div>
		</div>
		<?php endwhile;?>
		
		<div class="col-md-12 no-padding">
			<h3 class="related-title">Related Posts</h3>
		</div>

<?php
	$orig_post = $post;
	global $post;

	$tags = wp_get_post_tags($post->ID);
	
	if ($tags) {
		$tag_ids = array();
		foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
		$args = array(
			'tag__in' => $tag_ids, 
			'post__not_in' => array($post->ID),
			'posts_per_page'=>3, // Number of related posts to display.
			'caller_get_posts'=>1
		);

	$my_query = new wp_query( $args );
	
	while( $my_query->have_posts() ) {
		$my_query->the_post();
    ?> 
	<div class="single-featured col-md-4 col-sm-6 col-xs-12">
			<a rel="external" href="<?php the_permalink()?>" title="<?php the_title_attribute(); ?>">
				<figure>
					<?php the_post_thumbnail();?>
					<h5><?php the_title(); ?></h5>
				</figure>
			</a>
		</div>
	<?php
		}
	}
	$post = $orig_post;
	wp_reset_query();
	?>
</div>
		<div class="col-md-12 margtop20"></div>
		
	</div>
	
</section>

<?php get_footer(); ?>