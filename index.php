<?php get_header(); ?>

<div id="container">

		

		<div class="post-wrapper">

				<div id="index-note" class="post-text">
					<p class="note-icon"><i class="fa fa-bell-o" aria-hidden="true"></i></p>
					<p class="note-text">
						背影会解释我所有的取向，今后我与自己流浪
				</p>
				</div>

			<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>	

				<div class="post" id="post-<?php the_ID(); ?>">
						


						<div class="post-text">
							<h2>
								<a href="<?php the_permalink();?>" title="<?php the_title(); ?>"> 
									<?php the_title(); ?>
								 </a>
							</h2>
								



							<div class="entry">
								<?php the_excerpt(); ?>
								

							</div>
							<div class="post-img">
								<a href="<?php the_permalink();?>" title="<?php the_title(); ?>"> 
									<?php if ( has_post_thumbnail() ) { the_post_thumbnail(array(800,300),array('alt'=> trim(strip_tags( $post->post_title ))));} else {?><img src="<?php echo get_first_image(); ?>" alt="<?php the_title(); ?>" width="800" height="auto"/><?php }?>
								</a>
							</div>
							<ul class="metadata-bottom">
									<li class="auther">
										<a href='<?php the_author_posts_link(); ?>' target="_blanket" > 
											<?php echo get_avatar( get_the_author_email(), '60' );?>
											<?php the_author(); ?>
										</a>
									</li>
									<li class="post-category">
										<i class="fa fa-folder-o"></i><?php the_category('or') ?>
									</li>
									<li><i class="fa fa-clock-o "></i><?php the_time('Y年n月j日'); ?></li>

									<li>
										<?php edit_post_link('<i class="fa fa-pencil-square-o" aria-hidden="true"></i>编辑此文', '', ''); ?>
									</li>	
							</ul>
							<div class="metadata-bottom">
										<li>
											<i class="fa fa-comment-o"></i><?php comments_popup_link('暂无评论', '1 条评论', '% 条评论'); ?>
										</li>
										<li>
											<i class="fa fa-pencil-square-o" aria-hidden="true"></i><?php echo zm_count_words($text); ?>
										</li>
										<li>
											<i class="fa fa-paper-plane-o"></i><a href="<?php the_permalink() ?>">继续阅读 </a>
										</li>
										
							</div>
							
						</div>
						
				</div>

				<?php endwhile; ?>

				<div class="post-text">
					<?php
						the_posts_pagination( array(
						    'mid_size'  => 6,
						    'prev_text' => __( '<i class="fa fa-chevron-up" aria-hidden="true"></i>', 'textdomain' ),
						    'next_text' => __( '<i class="fa fa-chevron-down" aria-hidden="true"></i>', 'textdomain' ),
						) );
					?>
				</div>

				<?php endif; ?>

				<?php get_footer();?>

		</div>
</div>
			

<?php get_sidebar(); ?>

</body>
</html>


