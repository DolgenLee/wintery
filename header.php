<html>
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
	<link href="https://cdn.bootcss.com/normalize/8.0.1/normalize.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
	<script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
	  $("#mobile-menu-btn").click(function(){
	    $("#menu-box").toggle();
	  });
	});
	</script>
	<script type="text/javascript">
	$(document).ready(function(){
	  $("#weixin-icon").click(function(){
	    $("#weixin").toggle();
	  });
	});
	</script>
	<script type="text/javascript">
	$(document).ready(function(){
	  $("#wechatpay").click(function(){
	    $("#wechatpay-img").toggle();
	  });
	});
	</script>
	<script type="text/javascript">
	$(document).ready(function(){
	  $("#alipay").click(function(){
	    $("#alipay-img").toggle();
	  });
	});
	</script>


</head>
<body>
	<?php global $wintery_get; ?>
	<div id="header">
			<div id="logo">
				<p class="logo-img"><?php if ( function_exists( 'the_custom_logo' ) ) {the_custom_logo();};?></p>

				
					
				<div class="logo-desc">
					<p><h1 ><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1></p>
					<p><?php bloginfo('description'); ?></p>
				</div>
				<a href="#"><i id="mobile-menu-btn" class="fa fa-bars" aria-hidden="true"></i></a>


			</div>
			

			<div id="menu-box">
				<?php wp_nav_menu(); ?>

				<div id="social-icon">
					<ul>

						<li>
							<a href="http://wpa.qq.com/msgrd?v=3&uin=1103983266&site=qq&menu=yes" target="_blank"><i class="fa fa-qq" aria-hidden="true"></i></a>
						</li>
						<li>
							<a href="#"><i id="weixin-icon" class="fa fa-weixin" aria-hidden="true"></i></a>
					
						</li>
						<li>
							<a href="https://github.com/DolgenLee"><i class="fa fa-github" aria-hidden="true"></i></i></a>
						</li>
						<li>
							<a href="<?php echo $wintery_get['social_icon_4_link'];?>"><i class="fa fa-twitter" aria-hidden="true"></i></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-weibo" aria-hidden="true"></i></i></a>
						</li>
					</ul>
					<div id="weixin" style="display:none"><img src="https://doopee-1251414445.cos.ap-shanghai.myqcloud.com/wp-content/uploads/2019/10/1571711661-123_%E7%9C%8B%E5%9B%BE%E7%8E%8B-e1571711670460.jpg" width="150px"/></div>

				</div>
			</div>
			

	</div>


	