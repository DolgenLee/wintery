<?php
/*
Template Name:时间轴

*/
get_header(); ?>

	<div id="container">
			<div id="index-note" >
					
						<span class="note-icon"><i class="fa fa-bell-o" aria-hidden="true"></i></span>
						<span class="note-text">背影会解释我所有去向,今后我与自己流浪</span>
					
			</div>
			<div class="poxt-text-wrapper">

				<div class="post-text">
					<h2>
						穿梭机
					</h2>
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
				</div>
			</div>
			<?php get_footer();?>
	</div>
<?php get_sidebar(); ?>
</body>
</html>


