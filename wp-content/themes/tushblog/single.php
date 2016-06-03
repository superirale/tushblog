<?php get_header(); ?>

<?php while ( have_posts() ) : the_post();?>
<section>
	<article class="post-view">
		<div class="post-header">
			<!-- <h1>New Look! Lupita Nyong’o Rocks Crown Braids To Sag Awards 2015</h1> -->
			<!-- <img src="img/lupi-post.png"> -->
			<?php the_post_thumbnail();?>
		</div>
		<div class="post-body">
			<?php if(the_excerpt()):?>
			<p class="post-caption"><?php the_excerpt(); ?></p>
			<?php endif; ?>
			<p class="post-content">
				<?php the_content(); ?>
			</p>
		</div>
	</article>
<?php endwhile;?>
	<?php get_sidebar(); ?>			
</section>
		<section>
			<div class="popular-posts related-posts">
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
					
					if($my_query->have_posts()):
				 ?> 

				<h4>Related Posts</h4>
				<?php endif;?>
				<?php
					while( $my_query->have_posts() ) {
						$my_query->the_post();
				?>
				<div class="popular-post">
					<?php the_post_thumbnail();?>
					<title><?php the_title(); ?></title>
				</div>
				<?php
						}
					}
					$post = $orig_post;
					wp_reset_query();
				?>
			</div>
	</section>
<?php get_footer(); ?>