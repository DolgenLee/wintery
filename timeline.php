<?php
/**
 * The main template file
Template Name:时间线
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

					<div class="archives">
						<?php
							$previous_year = $year = 0;
							$previous_month = $month = 0;
							$ul_open = false;
							$myposts = get_posts("numberposts=-1&orderby=post_date&order=DESC");
								foreach($myposts as $post) :
								setup_postdata($post);
							$year = mysql2date('Y', $post->post_date);
							$month = mysql2date('n', $post->post_date);
							$day = mysql2date('j', $post->post_date);
								if($year != $previous_year || $month != $previous_month) :
								if($ul_open == true) :
								echo '</ul>';
								endif;
								echo '<h4 class="m-title">'; echo the_time('Y-m'); echo '</h4>';
								echo '<ul class="archives-monthlisting">';
								$ul_open = true;
								endif;
							$previous_year = $year; $previous_month = $month;?>
							<li>
							<a href="<?php the_permalink(); ?>"><span><?php the_time('Y-m-j'); ?></span>
							<div class="atitle"><?php the_title(); ?></div></a>
							</li>
							<?php endforeach; ?>
							</ul>
					</div>

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