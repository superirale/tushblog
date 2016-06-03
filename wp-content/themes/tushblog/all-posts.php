<?php get_header();?>

	<section>
		<div class="posts">
			<?php // Display blog posts on any page @ http://m0n.co/l
				$temp = $wp_query; $wp_query= null;
				$wp_query = new WP_Query(); $wp_query->query('showposts=2' . '&paged='.$paged);
				while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
				
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
				<?php if ($paged > 1) { ?>
				<?php 
					ob_start();
					next_posts_link( 'Next <i class="fa fa-chevron-right"></i> ' ); 
					$link = ob_get_clean();
					echo str_replace('<a ','<a class="load-more next-nav button" ', $link);
				?>
				<?php 
					ob_start();
					previous_posts_link( '<i class="fa fa-chevron-left"></i> Prev' ); 
					$link = ob_get_clean();
					echo str_replace('<a ','<a class="load-more prev-nav button" ', $link);
				?>

				<?php }else{?>
				<?php
					ob_start();
					next_posts_link( 'Next <i class="fa fa-chevron-right"></i> ' ); 
					$link = ob_get_clean();
					echo str_replace('<a ','<a class="load-more next-nav button" ', $link);
				?>
				<?php } ?>
		</div>
		<?php get_sidebar(); ?>	
	</section>

<?php get_footer();?>