<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 */
function optionsframework_option_name() {
	// Change this to use your theme slug
	$option_name = get_option( 'stylesheet' );
    $option_name = preg_replace( "/\W/", "_", strtolower( $option_name ) );
    return $option_name;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'theme-textdomain'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */


function optionsframework_options() {
//-------------------这里开始是主题后台有关函数-----------------------
//---------------------------------------------------------------------
//---------------------------------------------------------------------
////---------------------------------------------------------------------
//---------------------------------------------------------------------
////---------------------------------------------------------------------
//---------------------------------------------------------------------
////---------------------------------------------------------------------
//---------------------------------------------------------------------

	$maincolor = array(
		'#17bf63' => __( '芳草绿', 'theme-textdomain' ),
		'#1da1f2' => __( '天空蓝', 'theme-textdomain' ),
		'#f45d22' => __( '赤火橙', 'theme-textdomain' ),
		'#794bc4' => __( '丁香紫', 'theme-textdomain' )
	);
//-------------------这里开始是主题后台自定义设置项-----------------------
//---------------------------------------------------------------------
//---------------------------------------------------------------------
////---------------------------------------------------------------------
//---------------------------------------------------------------------
////---------------------------------------------------------------------
//---------------------------------------------------------------------
////---------------------------------------------------------------------
//---------------------------------------------------------------------
	$options[] = array(
		'name' => __( '基础设置', 'theme-textdomain' ),
		'type' => 'heading'
	);
	$options[] = array(
		'name' => __( '声明', 'theme-textdomain' ),
		'desc' => __( '<a href="https://doopee.cn/356.html" target="_blanket">wintery</a>主题作者为dolgenlee，主题唯一主页为：<a href="https://doopee.cn" target="_blanket">doopee.cn</a>,售后qq：<a href="http://wpa.qq.com/msgrd?v=3&uin=1103983266&site=qq&menu=yes" target="_blanket">dolgenlee</a>。</br></br>
			其他任何渠道购买、获取的主题均为盗版。</br></br>
			使用盗版主题不享有售后服务、升级服务，且造成的任何问题与损失主题原作者均不负责，敬请悉知。</br></br>
			如有发现其他售卖本主题的情况，欢迎通知作者，可享受wintery主题75折购买价。</br></br>
			本声明长期有效  ————  2019年11月15日

			', 'theme-textdomain' ),
		'type' => 'info'
	);
	$options[] = array(
		'name' => __( '主色调', 'theme-textdomain' ),
		'desc' => __( '选择主题高亮色', 'theme-textdomain' ),
		'id' => 'main_color',
		'std' => '#17bf63',
		'type' => 'select',
		'class' => 'mini', //mini, tiny, small
		'options' => $maincolor
	);


	$options[] = array(
		'name' => __( '顶部通知', 'theme-textdomain' ),
		'desc' => __( '顶部通知内容，全站显示', 'theme-textdomain' ),
		'id' => 'index-note',
		'std' => '背影会解释我所有去向,今后我与自己流浪',
		'type' => 'text'
	);
		$options[] = array(
		'name' => __( '版权声明', 'theme-textdomain' ),
		'desc' => __( '文章下方版权声明，默认所有文章下均显示', 'theme-textdomain' ),
		'id' => 'postcopy',
		'std' => '本站原创采用创作共用版权协议, 要求署名、非商业用途和保持一致,转载请注明出处.',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( '微信二维码', 'theme-textdomain' ),
		'desc' => __( '用于左侧栏微信图标显示的二维码，也可用于显示其他图片' ),
		'id' => 'wechat_img',
		'type' => 'upload'
	);	
	$options[] = array(
		'name' => __( '支付宝赞赏二维码', 'theme-textdomain' ),
		'desc' => __( '支付宝赞赏二维码' ),
		'id' => 'alipay_qrcode',
		'type' => 'upload'
	);
		$options[] = array(
		'name' => __( '微信赞赏二维码', 'theme-textdomain' ),
		'desc' => __( '微信赞赏二维码' ),
		'id' => 'wechat_qrcode',
		'type' => 'upload'
	);




	$options[] = array(
		'name' => __( 'footer设置', 'theme-textdomain' ),
		'type' => 'heading'
	);
	$options[] = array(
		'name' => __( 'ICP备案信息', 'theme-textdomain' ),
		'desc' => __( '填写你的备案号即可，默认已链接到工信部', 'theme-textdomain' ),
		'id' => 'icp-number',
		'std' => '浙ICP备19037817号-1',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( '博客建立周期', 'theme-textdomain' ),
		'desc' => __( '填写你博客创建的时间，格式参考默认值', 'theme-textdomain' ),
		'id' => 'bloginfo-birth',
		'std' => '2017-10-01',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( '博客建立周期的提示文字', 'theme-textdomain' ),
		'desc' => __( '作用参考默认值', 'theme-textdomain' ),
		'id' => 'bloginfo-birthdate-text',
		'std' => '来到地球',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( '生产内容统计的提示性文字', 'theme-textdomain' ),
		'desc' => __( '作用参考默认值，默认单位：篇', 'theme-textdomain' ),
		'id' => 'bloginfo-post-text',
		'std' => '生产文章',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( '最后更新的提示性文字', 'theme-textdomain' ),
		'desc' => __( '作用参考默认值', 'theme-textdomain' ),
		'id' => 'bloginfo-lastpost-text',
		'std' => '最后更新于',
		'type' => 'text'
	);



	return $options;
}