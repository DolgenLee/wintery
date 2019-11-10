<?php get_header(); ?>

	<div id="container">


			<div id="index-note" >
					
						<span class="note-icon"><i class="fa fa-bell-o" aria-hidden="true"></i></span>
						<span class="note-text">背影会解释我所有去向,今后我与自己流浪</span>
					
			</div>


		<div class="post-wrapper">
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
								<?php if ( has_post_thumbnail() ) { the_post_thumbnail(array(800,300),array('alt'=> trim(strip_tags( $post->post_title ))));} else {?><img src="<?php echo get_first_image(); ?>" alt="<?php the_title(); ?>" width="800" height="300"/><?php }?>
								</a>
							</div>
								<ul class="metadata">
							
									<li class="post-category">
										<i class="fa fa-folder-o"></i><?php the_category('or') ?>
									</li>
									<li><i class="fa fa-clock-o "></i><?php the_time('Y年n月j日'); ?></li>
									
										<li>
											<i class="fa fa-pencil-square-o" aria-hidden="true"></i><?php echo zm_count_words($text); ?>
										</li>
							</ul>
							
						</div>
						
				</div>

				<?php endwhile; ?>
			
		
			<?php
				the_posts_pagination( array(
				    'mid_size'  => 6,
				    'prev_text' => __( '<i class="fa fa-chevron-up" aria-hidden="true"></i>', 'textdomain' ),
				    'next_text' => __( '<i class="fa fa-chevron-down" aria-hidden="true"></i>', 'textdomain' ),
				) );
			?>


			<?php endif; ?>
			<?php get_footer();?>

		</div>
	</div>

</div>
<?php get_sidebar(); ?>
</body>
</html>


