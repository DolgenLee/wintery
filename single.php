<?php get_header(); ?>
	
	<div id="container">
			<div id="index-note" class="post-text">
				<p class="note-icon"><i class="fa fa-bell-o" aria-hidden="true"></i></p>
				<p class="note-text">背影会解释我所有去向,今后我与自己流浪</p>
			</div>

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
								

							<div class="entry">
								<?php the_content(); ?>
								<?php link_pages('
									<strong>Pages:</strong>', '', 'number'); 
									?>
							</div>
							<div class="auther-copy">
								<p>
									<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>本站内容如未特别声明均为原创，谢绝任何个人、机构抓取、转载。
								</p>
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


							</ul>
							<div class="metadata-bottom">
										<li >
											<?php
												echo get_the_tag_list('<i class="fa fa-tags" aria-hidden="true"></i>',', ','</p>');
												?>
										</li>
										<li>
											<i class="fa fa-pencil-square-o" aria-hidden="true"></i><?php echo zm_count_words($text); ?>
										</li>
										<li>
											<i class="fa fa-share-alt" aria-hidden="true"></i>
											<a rel="nofollow" href="https://service.weibo.com/share/share.php?url=<?php the_permalink(); ?>&amp;type=button&amp;language=zh_cn&amp;title=<?php the_title_attribute(); ?>&amp;searchPic=true" target="_blank"><i class="fa fa-weibo"></i></a>
											<a rel="nofollow" href="https://connect.qq.com/widget/shareqq/index.html?url=<?php the_permalink(); ?>&amp;title=<?php the_title_attribute(); ?>&amp;summary=<?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 200,"……"); ?>" target="_blank"><i class="fa fa-QQ"></i></a>
										</li>		
							</div>
						</div>	

					</div>
					<div class="metadata-bottom-single">
						<ul>
										
										<li >
											<p id="alipay"><i class="fa fa-thumbs-up" aria-hidden="true"></i>支付宝赞赏</p>
										</li>
										<li>
											<p id="wechatpay"><i class="fa fa-thumbs-up" aria-hidden="true"></i>微信赞赏</p>
										</li>
										<li style="display:none;width:50%;float:left;padding-top:40px" id="alipay-img" >
											<img src="https://doopee-1251414445.cos.ap-shanghai.myqcloud.com/wp-content/uploads/2019/11/1573130370-alipay.jpg" width="180px">
										</li>
										<li style="display:none;width:50%;float:right;padding-top:40px" id="wechatpay-img">
											<img src="https://doopee-1251414445.cos.ap-shanghai.myqcloud.com/wp-content/uploads/2019/10/1571639922-wxds-e1571639933327.jpg" width="180px">
										</li>
							
						</ul>
						
					</div>
					<div class="clearfix"></div>
					<div class="metadata-bottom-single">
						<ul>
										<?php
												$categories = get_the_category();
												        $categoryIDS = array();
												        foreach ($categories as $category) {
												            array_push($categoryIDS, $category->term_id);
												        }
												        $categoryIDS = implode(",", $categoryIDS);
												?>
										<li>
											<?php if (get_previous_post($categoryIDS)) { previous_post_link('<i class="fa fa-chevron-up" aria-hidden="true"></i> %link','%title',true);} else { echo "已是最后文章";} ?>
										</li>
										<li>
											<?php if (get_next_post($categoryIDS)) { next_post_link('<i class="fa fa-chevron-down" aria-hidden="true"></i> %link','%title',true);} else { echo "已是最新文章";} ?>
										</li>
						</ul>		
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


