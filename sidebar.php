<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wintery_pro
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<div class="clearfix"></div>
<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
<div class="social-icon">
			<a href="https://weibo.com/7313980479" target="_blanket"><i class="icon-sina-weibo"></i></a>
			<a href="http://wpa.qq.com/msgrd?v=3&uin=1103983266&site=qq&menu=yes" target="_blanket"><i class="icon-qq"></i></a>
			<a href="https://doopee.cn/feed" target="_blanket"><i class="icon-rss"></i></a>

</div>