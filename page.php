<?php get_header(); ?>

	<div id="container">
			<div id="index-note" class="post-text">
				<p class="note-icon"><i class="fa fa-bell-o" aria-hidden="true"></i></p>
				<p class="note-text">背影会解释我所有去向,今后我与自己流浪</p>
			</div>
		<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>	
			<div class="post" id="post-<?php the_ID(); ?>">
						<div class="post-img-single">
							<?php if ( has_post_thumbnail() ) { the_post_thumbnail(array(800,300),array('alt'=> trim(strip_tags( $post->post_title ))));} else {?><img class="post-img-single" src="<?php echo get_first_image(); ?>" alt="<?php the_title(); ?>" width="800" height="300"/><?php }?>
						</div>
					<div class="post-text">
						<h2>
							<a href="<?php the_permalink();?>" title="<?php the_title(); ?>"> 
								<?php the_title(); ?>
							 </a>
						</h2>
							


						<div class="entry">
						<?php the_content(); ?>
						<?php link_pages('

							<strong>Pages:</strong>', '

							', 'number'); 
						?>

						</div>


						
						
					</div>
					
			</div>

			<?php endwhile; ?>


			<?php endif; ?>
		
			<?php get_footer();?>
	</div>

	






</div>
<?php get_sidebar(); ?>
</body>
</html>


