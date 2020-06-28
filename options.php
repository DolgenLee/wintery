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


//-------------------这里开始是主题后台自定义设置项-----------------------
//---------------------------------------------------------------------
//---------------------------------------------------------------------
////---------------------------------------------------------------------
//---------------------------------------------------------------------
	$options[] = array(
		'name' => __( '轮播', 'theme-textdomain' ),
		'type' => 'heading'
	);
	$options[] = array(
		'name' => __( '轮播图一', 'theme-textdomain' ),
		'desc' => __( '轮播图一', 'theme-textdomain' ),
		'id' => 'slider_img_1',
		'std' => '',
		'type' => 'upload'
	);
	$options[] = array(
		'name' => __( '轮播文章链接一', 'theme-textdomain' ),
		'desc' => __( '轮播文章一', 'theme-textdomain' ),
		'id' => 'slider_link_1',
		'std' => '',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( '轮播图二', 'theme-textdomain' ),
		'desc' => __( '轮播图二', 'theme-textdomain' ),
		'id' => 'slider_img_2',
		'std' => '',
		'type' => 'upload'
	);
		$options[] = array(
		'name' => __( '轮播文章链接二', 'theme-textdomain' ),
		'desc' => __( '' ),
		'id' => 'slider_link_2',
		'std' => '1366',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( '轮播图三', 'theme-textdomain' ),
		'desc' => __( '轮播图三', 'theme-textdomain' ),
		'id' => 'slider_img_3',
		'std' => '',
		'type' => 'upload'
	);
	$options[] = array(
		'name' => __( '轮播文章链接三', 'theme-textdomain' ),
		'desc' => __( '轮播文章三', 'theme-textdomain' ),
		'id' => 'slider_link_3',
		'std' => '',
		'type' => 'text'
	);


	return $options;
}