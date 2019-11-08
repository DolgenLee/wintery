<?php 
/*
Template Name: 说说
author: ainy
url: http://www.tang1314.com/shuoshuo
*/


get_header(); ?>

	<div id="container">
			<div id="index-note" class="post-text">
				<p class="note-icon"><i class="fa fa-bell-o" aria-hidden="true"></i></p>
				<p class="note-text">背影会解释我所有的去向,今后我与自己流浪</p>
			</div>
			

			<?php query_posts("post_type=shuoshuo&post_status=publish&posts_per_page=-1");if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<div class="post-text">

							<div class="shuoshuo-entry">
								<h4 class="entry-title"><?php the_title(); ?></h4>

								<div class="entry-content"><?php the_excerpt(); ?></div>

							</div>
					
							<div class="metadata-bottom">
									<li class="auther">
										<a href='<?php the_author_posts_link(); ?>' target="_blanket" > 
											<?php echo get_avatar( get_the_author_email(), '60' );?>
											<?php the_author(); ?>
										</a>
									</li>
									<i class="fa fa-clock-o "></i><?php the_time('n月j日G:i'); ?>
									<li>
										<?php edit_post_link('<i class="fa fa-pencil-square-o" aria-hidden="true"></i>编辑此文', '', ''); ?>
									</li>	
								
							</div>
					
			</div>
					<?php endwhile;endif; ?>
		<?php get_footer();?>

	</div>

		
		


<?php get_sidebar(); ?>
</body>
</html>


