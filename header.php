<html class="borderbox">
<head>
	<title>

		<?php if (is_home())  {
			bloginfo('name'); 
			echo " - ";
			bloginfo( 'description');
		}
			else
				wp_title('|',true,'right') . bloginfo('name'); ?>

	</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" />
	<link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
	<script>
	var _hmt = _hmt || [];
	(function() {
	  var hm = document.createElement("script");
	  hm.src = "https://hm.baidu.com/hm.js?acf0a6f17c450ac7c1ccccf52677b156";
	  var s = document.getElementsByTagName("script")[0]; 
	  s.parentNode.insertBefore(hm, s);
	})();
	</script>

</head>
<body class="<?php echo($_COOKIE['night'] == '1' ? 'night' : ''); ?>">
	<?php global $wintery_get; ?>
	<div id="header-wrapper">
		<div id="header">
				<div id="logo">
					<div class="logo-img"><?php if ( function_exists( 'the_custom_logo' ) ) {the_custom_logo();};?></div>	
					<div class="logo-desc">
						<h1 ><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
						<span><?php bloginfo('description'); ?></span>
					</div>
					<div class="logo-btn">
						<a class="mobile-btn" href="#"><i id="mobile-menu-btn" class="fa fa-bars" aria-hidden="true"></i></a>
						<a class="mobile-btn" href="javascript:switchNightMode()" target="_self"><i id="moon" class="fa fa-moon-o" aria-hidden="true"></i></a> 
						<a class="mobile-btn" href="javascript:switchNightMode()" target="_self"><i id="sun" class="fa fa-sun-o" aria-hidden="true"></i></a>
					</div>

				</div>
				

				<div id="menu-box">
					<small class="menu-title"><i class="fa fa-link" aria-hidden="true"></i>MENU</small>
					<?php wp_nav_menu(array( 'theme_location'   =>'header_menu')); ?>
					<small class="menu-title"><i class="fa fa-link" aria-hidden="true"></i>PAGE</small>
					<?php wp_nav_menu(array( 'theme_location'   =>'page_menu')); ?>
					
					<div id="social-icon">
						<ul>
							<li>
								<a href="http://wpa.qq.com/msgrd?v=3&uin=1103983266&site=qq&menu=yes" target="_blank"><i class="fa fa-qq" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#"><i id="weixin-icon" class="fa fa-weixin" aria-hidden="true"></i></a>
						
							</li>
							<li>
								<a href="https://github.com/DolgenLee"><i class="fa fa-github" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-weibo" aria-hidden="true"></i></a>
							</li>
						</ul>
						<div id="weixin" style="display:none" style="clear:both;"></br></br>此处为小程序二维码</br>如有需要请qq联系</br><img src="" width="150px"/></div>

					</div>
				</div>
				

		</div>
	</div>

	