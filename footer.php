			<div id="footer">
				
				<div id="back-to-top"><a href="#top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
				</div>

				<small class="copy"> 
					<a href="http://beian.miitbeian.gov.cn/" target="_blank">浙ICP备19037817号-1</a></br>
					copyright © 2019 <a href="<?php bloginfo('url');?>" ><?php bloginfo('name'); ?> </a>
				</small>
				</br>
				<small class="themeinfo">
					themed by <a href="https://doopee.cn/356.html">wintery2.8</a> dolgenlee<br>
				来到地球<?php echo floor((time()-strtotime("2017-10-01"))/86400); ?>天    
				生产文章<?php $count_posts = wp_count_posts(); echo $published_posts =$count_posts->publish;?>篇  
				最后更新于<?php $last = $wpdb->get_results("SELECT MAX(post_modified) AS MAX_m FROM $wpdb->posts WHERE (post_type = 'post' OR post_type = 'page') AND (post_status = 'publish' OR post_status = 'private')");$last = date('Y年n月j日', strtotime($last[0]->MAX_m));echo $last; ?>
				</small>

			</div>
			