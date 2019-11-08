	<div id="sidebar">
			<ul>

				<li class="tag_cloud">
				<h3><i class="fa fa-tags" aria-hidden="true"></i>TAGS</h3>
				<?php wp_tag_cloud('number=30&orderby=count&order=DESC&smallest=14&largest=18&unit=px'); ?>
				</li>
				<li class="links">
				<h3><i class="fa fa-link" aria-hidden="true"></i>LINKS</h3>
					<?php wp_nav_menu(array( 'theme_location'   =>'links_menu')); ?>
				</li>
			</ul>
			
	</div>