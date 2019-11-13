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

	// Test data
	$test_array = array(
		'one' => __( 'One', 'theme-textdomain' ),
		'two' => __( 'Two', 'theme-textdomain' ),
		'three' => __( 'Three', 'theme-textdomain' ),
		'four' => __( 'Four', 'theme-textdomain' ),
		'five' => __( 'Five', 'theme-textdomain' )
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __( 'French Toast', 'theme-textdomain' ),
		'two' => __( 'Pancake', 'theme-textdomain' ),
		'three' => __( 'Omelette', 'theme-textdomain' ),
		'four' => __( 'Crepe', 'theme-textdomain' ),
		'five' => __( 'Waffle', 'theme-textdomain' )
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}


	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages( 'sort_column=post_parent,menu_order' );
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	$options = array();



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
		'std' => '本站原创采用创作共用版权协议, 要求署名、非商业用途和保持一致。',
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
		'std' => '20171001',
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