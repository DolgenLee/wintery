<?php 
/*
Template Name: 说说
author: ainy
url: http://www.tang1314.com/shuoshuo
*/


get_header(); ?>

	<div id="container">
			<div id="index-note" >
				<span class="note-icon"><i class="fa fa-bell-o" aria-hidden="true"></i></span>
				<span class="note-text">背影会解释我所有的去向,今后我与自己流浪</span>
			</div>
			

			<?php query_posts("post_type=shuoshuo&post_status=publish&posts_per_page=-1");if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<div class="post-text">

							<div class="shuoshuo-entry">
								<h4 class="entry-title"><?php the_title(); ?></h4>

								<div class="entry-content"><?php the_excerpt(); ?></div>

							</div>
					
							<div class="metadata">

									<li><i class="fa fa-clock-o "></i><?php the_time('n月j日G:i'); ?></li>
								
							</div>
					
			</div>
					<?php endwhile;endif; ?>
		<?php get_footer();?>

	</div>

		
		


<?php get_sidebar(); ?>
</body>
</html>


