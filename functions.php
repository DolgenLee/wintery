<?php 

//注册一个菜单
register_nav_menu( 'header_menu', '导航' );   

register_nav_menus( array(
	'links_menu' => '友链导航',
	'page_menu' => '页面导航',
	'social_menu' => '社交导航'
) );
//文章显示摘要
function wpdocs_custom_excerpt_length( $length ) {
    return 180;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


//调用缩略图
function get_first_image() {
global $post;
$first_img = '';
ob_start();
ob_end_clean();
$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
$first_img = $matches [1] [0];
if(empty($first_img)){ //Defines a default image
$first_img = bloginfo('template_url') . "/img/post-default.jpg";
};
return $first_img;
}

//开启theme_support
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
}


//禁用古登堡
add_filter('use_block_editor_for_post', '__return_false');


//添加自定义顶部
//
add_theme_support( 'custom-logo' );
function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 100,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );


// 字数统计
function zm_count_words ($text) {
	global $post;
	if ( '' == $text ) {
		$text = $post->post_content;
		if (mb_strlen($output, 'UTF-8') < mb_strlen($text, 'UTF-8')) $output .= '<span class="word-count">' . mb_strlen(preg_replace('/\s/','',html_entity_decode(strip_tags($post->post_content))),'UTF-8') .'字</span>';
		return $output;
	}
}


//WordPress 文章分页改造
add_filter('wp_link_pages_args', 'fanly_wp_link_pages_args_next_and_number');
function fanly_wp_link_pages_args_next_and_number($args){
	global $page, $numpages, $more, $pagenow;
	if (!$args['next_or_number'] == 'next_and_number') return $args; //支持数字于上下翻页 直接返回
	$args['next_or_number'] = 'number'; //保留数字分页模式
	if (!$more) return $args;
	if($page-1) //上一页
		$args['before'] .= _wp_link_page($page-1) . $args['link_before']. $args['previouspagelink'] . $args['link_after'] . '</a>';
	if ($page<$numpages) //下一页
		$args['after'] = _wp_link_page($page+1) . $args['link_before'] . '' . $args['nextpagelink'] . $args['link_after'] . '</a>' . $args['after'];
	return $args;
}



function article_index($content) {
   $matches = array();
   $ul_li = '';
   $r = "/<h3>([^<]+)<\/h3>/im";



   if(preg_match_all($r, $content, $matches)) {
       foreach($matches[1] as $num => $title) {
           $content = str_replace($matches[0][$num], '<h4 id="title-'.$num.'">'.$title.'</h4>', $content);
           $ul_li .= '<li><a href="#title-'.$num.'" title="'.$title.'">'.$title."</a></li>\n";
       }
       $content = "\n<div id=\"article-index\">
               <strong>文章目录</strong>
               <ul id=\"index-ul\">\n" . $ul_li . "</ul>
           </div>\n" . $content;
   }
   return $content;
}
add_filter( "the_content", "article_index" );








?>


<?php

//说说
 add_action('init', 'my_custom_init');
 function my_custom_init()
 { $labels = array( 'name' => '说说',
 'singular_name' => 'singularname',
 'add_new' => '发表说说',
 'add_new_item' => '发表说说',
 'edit_item' => '编辑说说',
 'new_item' => '新说说',
 'view_item' => '查看说说',
 'search_items' => '搜索说说',
 'not_found' => '暂无说说',
 'not_found_in_trash' =>  '没有已遗弃的说说',
 'parent_item_colon' => '',
 'menu_name' => '说说' );
 $args = array( 'labels' => $labels,
 'public' => true,
 'publicly_queryable' => true,
 'show_ui' => true,
 'show_in_menu' => true,
 'query_var' => true,
 'rewrite' => true,
 'capability_type' => 'post',
 'has_archive' => true, 'hierarchical' => false,
 'menu_position' => null,
 'supports' => array('title','editor','author') );
 register_post_type('shuoshuo',$args); }

 