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


	<section>
		<div class="posts">
			<?php if(have_posts()):?>
			<?php while (have_posts()) : the_post(); ?>
				
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
					echo str_replace('<a ','<a class="load-more next-nav button" ', $link);
				?>

				<?php }else{?>
				<?php
					ob_start();
					next_posts_link( 'Next <i class="fa fa-chevron-right"></i> ' ); 
					$link = ob_get_clean();
					echo str_replace('<a ','<a class="load-more next-nav button" ', $link);
				?>
				<?php } ?>
			<?php else : ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		</div>
		<?php get_sidebar(); ?>	
	</section>

<?php get_footer();?>