			<div id="footer">
				<?php global $wintery_get; ?>
				<div id="back-to-top"><a href="#top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
				</div>

				<p class="copy"> 
					copyright © 2019 <a href="<?php bloginfo('url');?>" ><?php bloginfo('name'); ?> </a>
				</p>
				<p class="themeinfo">
					themed by <a href="https://doopee.cn">wintery2.0</a> dolgenlee
				</p>


								<script src="http://ajax.microsoft.com/ajax/jQuery/jquery-1.7.2.min.js"></script>
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
			</div>