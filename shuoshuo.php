<?php 
/*
Template Name: 说说
author: ainy
url: http://www.tang1314.com/shuoshuo
*/


get_header(); ?>
<?php include 'index-note.php';?>
<div class="clearfix"></div>
	<div id="container" >
		<div class="shuoshuo-wrapper">
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
	</div>

<?php get_sidebar(); ?>
</body>
</html>


