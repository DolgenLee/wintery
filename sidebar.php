	<div id="sidebar">
			<ul>

				<li class="tag_cloud">
				<h4><i class="fa fa-tags" aria-hidden="true"></i>TAGS</h4>
				<?php wp_tag_cloud('number=30&orderby=count&order=DESC&smallest=10&largest=14&unit=px'); ?>
				</li>
				<li class="links">
				<h4><i class="fa fa-link" aria-hidden="true"></i>LINKS</h4>
					<?php wp_nav_menu(array( 'theme_location'   =>'links_menu')); ?>
				</li>
				<li class="wintery-post">

				</li>
			</ul>
			
	</div>


	<script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.js"></script>

<script>
								$(function(){
								        //当滚动条的位置处于距顶部100像素以下时，跳转链接出现，否则消失
								        $(function () {
								            $(window).scroll(function(){
								                if ($(window).scrollTop()>100){
								                    $("#back-to-top").fadeIn(500);
								                }
								                else
								                {
								                    $("#back-to-top").fadeOut(500);
								                }
								            });

								            //当点击跳转链接后，回到页面顶部位置
								            $("#back-to-top").click(function(){
								                //$('body,html').animate({scrollTop:0},1000);
								        if ($('html').scrollTop()) {
								                $('html').animate({ scrollTop: 0 }, 500);
								                return false;
								            }
								            $('body').animate({ scrollTop: 0 }, 500);
								                 return false;            
								           });       
								     });    
								});
</script>



	<script type="text/javascript">
		$(document).ready(function(){
		  $("#moon").click(function(){
		  $("#moon").hide();
		  $("#sun").show();
		  });
		  $("#sun").click(function(){
		  $("#moon").show();
		  $("#sun").hide();
		  });
		});
	</script>

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

	<script type="text/javascript">
		//夜间模式
	(function(){
		if(document.cookie.replace(/(?:(?:^|.*;\s*)night\s*\=\s*([^;]*).*$)|^.*$/, "$1") === ''){
			if(new Date().getHours() > 22 || new Date().getHours() < 6){
				document.body.classList.add('night');
				document.cookie = "night=1;path=/";
				console.log('夜间模式开启');
			}else{
				document.body.classList.remove('night');
				document.cookie = "night=0;path=/";
				console.log('夜间模式关闭');
			}
		}else{
			var night = document.cookie.replace(/(?:(?:^|.*;\s*)night\s*\=\s*([^;]*).*$)|^.*$/, "$1") || '0';
			if(night == '0'){
				document.body.classList.remove('night');
			}else if(night == '1'){
				document.body.classList.add('night');
			}
		}
	})();
	//夜间模式切换
	function switchNightMode(){
		var night = document.cookie.replace(/(?:(?:^|.*;\s*)night\s*\=\s*([^;]*).*$)|^.*$/, "$1") || '0';
		if(night == '0'){
			document.body.classList.add('night');
			document.cookie = "night=1;path=/"
			console.log('夜间模式开启');
		}else{
			document.body.classList.remove('night');
			document.cookie = "night=0;path=/"
			console.log('夜间模式关闭');
		}
	}
	</script>