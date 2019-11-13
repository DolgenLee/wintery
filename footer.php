			<div id="footer">
				
				<div id="back-to-top"><a href="#top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
				</div>

				<small class="copy"> 
					<a href="http://beian.miitbeian.gov.cn/" target="_blank"><?php echo wintery('icp-number')?></a></br>
					copyright © 2019 <a href="<?php bloginfo('url');?>" ><?php bloginfo('name'); ?> </a>
				</small>
				</br>
				<small class="themeinfo">
					themed by <a href="https://doopee.cn/356.html">wintery </a> dolgenlee<br>
				<?php echo wintery('bloginfo-birthdate-text')?><span id="bloginfobirth"></span>天
				<?php echo wintery('bloginfo-post-text')?><?php $count_posts = wp_count_posts(); echo $published_posts =$count_posts->publish;?>篇  
				<?php echo wintery('bloginfo-lastpost-text')?><?php $last = $wpdb->get_results("SELECT MAX(post_modified) AS MAX_m FROM $wpdb->posts WHERE (post_type = 'post' OR post_type = 'page') AND (post_status = 'publish' OR post_status = 'private')");$last = date('Y年n月j日', strtotime($last[0]->MAX_m));echo $last; ?>
				</small>

			</div>