<?php get_header(); ?>
<?php include 'index-note.php';?>
<div class="clearfix"></div>
<div id="container">

		<div class="post-wrapper">
		<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>	
			<div class="post" id="post-<?php the_ID(); ?>">
					<a href="<?php the_permalink();?>" title="<?php the_title(); ?>">
						<div class="post-img-single">
							<?php if ( has_post_thumbnail() ) { the_post_thumbnail(array(800,300),array('alt'=> trim(strip_tags( $post->post_title ))));} else {?><img class="post-img-single" src="<?php echo get_first_image(); ?>" alt="<?php the_title(); ?>" width="800" height="300"/><?php }?>
						</div>
					</a>

					<div class="post-text">
						<div class="post-text-single">
							<h1>
								<a href="<?php the_permalink();?>" title="<?php the_title(); ?>"> 
									<?php the_title(); ?>
								 </a>
							</h1>
							<ul class="metadata">
							
									<li class="post-category">
										<i class="fa fa-folder-o"></i><?php the_category('or') ?>
									</li>
									<li><i class="fa fa-clock-o "></i><?php the_time('Y年n月j日'); ?></li>
									
										<li>
											<i class="fa fa-pencil-square-o" aria-hidden="true"></i><?php echo zm_count_words($text); ?>
										</li>

							
							</ul>
							<ul class="post-tags">
								<small>
							<?php echo get_the_tag_list('<i class="fa fa-tags" aria-hidden="true"></i>',' / ','');?></small>
									
							</ul>
							<div class="entry">
								<?php the_content(); ?>
								<?php link_pages('
									<strong>Pages:</strong>', '', 'number'); 
									?>
							</div>
							<div class="auther-copy">
							
									<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>本站原创采用创作共用版权协议, 要求署名、非商业用途和保持一致。
							
							</div>		
						</div>	

					</div>
					<div class="metadata-bottom-single">
						
										<li >
											<small id="alipay"><i class="fa fa-thumbs-up" aria-hidden="true"></i>支付宝赞赏</small>
										</li>
										<li>
											<small id="wechatpay"><i class="fa fa-thumbs-up" aria-hidden="true"></i>微信赞赏</small>
										</li>
										<li style="display:none;width:50%;float:left;" id="alipay-img" >
											<img src="https://doopee-1251414445.cos.ap-shanghai.myqcloud.com/wp-content/uploads/2019/11/1573130370-alipay.jpg" width="180px">
										</li>
										<li style="display:none;width:50%;float:right;" id="wechatpay-img">
											<img src="https://doopee-1251414445.cos.ap-shanghai.myqcloud.com/wp-content/uploads/2019/10/1571639922-wxds-e1571639933327.jpg" width="180px">
										</li>
							
						
						
					</div>
					<div class="clearfix"></div>
					<div class="metadata-bottom-single">
						
										<?php
												$categories = get_the_category();
												        $categoryIDS = array();
												        foreach ($categories as $category) {
												            array_push($categoryIDS, $category->term_id);
												        }
												        $categoryIDS = implode(",", $categoryIDS);
												?>
										<li><small><?php if (get_previous_post($categoryIDS)) { previous_post_link('%link','<i class="fa fa-chevron-left" aria-hidden="true"></i>上一篇',true);} else { echo "已是最后文章";} ?></small></li>
										<li><small><?php if (get_next_post($categoryIDS)) { next_post_link('%link','下一篇 <i class="fa fa-chevron-right" aria-hidden="true"></i>',true);} else { echo "已是最新文章";} ?></small></li>
							
					</div>					
					<div class="comments-template">
						<?php comments_template(); ?>
					</div>
			</div>

			<?php endwhile; ?>


			<?php endif; ?>
		
			<?php get_footer();?>
	</div>
	</div>

	

<?php get_sidebar(); ?>




</div>
</body>
</html>


