<?php
/**
 * The main template file
Template Name:说说
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 *
 * @package wintery_pro
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		
			<article>

			<?php query_posts("post_type=shuoshuo&post_status=publish&posts_per_page=-1");if (have_posts()) : while (have_posts()) : the_post(); ?>

							<div class="shuoshuo-entry">
								<?php the_content(); ?>

							</div>
							<div class="shuoshuo-meta">
								<div>		
									<?php 
									wintery_pro_posted_by();
									?>
								</div>
							<span class="icon-clock"><?php the_time('n月j日G:i'); ?></span>
							</div>
							<div class="clearfix"></div>
				<?php endwhile;endif; ?>
			</article>


		</main><!-- #main -->
		<?php
	get_sidebar();
	get_footer();?>
	</div><!-- #primary -->

</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>