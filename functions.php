<?php
/**
 * wintery pro functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wintery_pro
 */

if ( ! function_exists( 'wintery_pro_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function wintery_pro_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on wintery pro, use a find and replace
		 * to change 'wintery-pro' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'wintery-pro', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'wintery-pro' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'wintery_pro_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'wintery_pro_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wintery_pro_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'wintery_pro_content_width', 640 );
}
add_action( 'after_setup_theme', 'wintery_pro_content_width', 0 );

/**
 * Register widget area.
 *
 */
function wintery_pro_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wintery-pro' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'wintery-pro' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wintery_pro_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wintery_pro_scripts() {
	wp_enqueue_style( 'wintery-pro-style', get_stylesheet_uri() );
	wp_enqueue_script( 'flexslide_scripts', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array(), '1.0', true );
	wp_enqueue_script( 'lightgallery_scripts', get_template_directory_uri() . '/js/lightgallery-all.min.js', array(), '1.0', true );
	wp_enqueue_script( 'wintery_pro_scripts', get_template_directory_uri() . '/js/wintery.js', array(), '1.0', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wintery_pro_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
//Wordpress 5.0+ 禁用 Gutenberg 编辑器
add_filter('use_block_editor_for_post', '__return_false');
remove_action( 'wp_enqueue_scripts', 'wp_common_block_scripts_and_styles' );


//摘要
function iesay_longer_excerpts( $length ) {
  // Don't change anything inside /wp-admin/
  if ( is_admin() ) {
    return $length;
  }
  // Set excerpt length to 140 words
  return 80;
}
// "999" priority makes this run last of all the functions hooked to this filter, meaning it overrides them
add_filter( 'excerpt_length', 'iesay_longer_excerpts', 999 );

function iesay_change_and_link_excerpt( $more ) {
  if ( is_admin() ) {
    return $more;
  }
  // Change text, make it link, and return change
  return '&hellip; <a href="' . get_the_permalink() . '"></a>';
 }
 add_filter( 'excerpt_more', 'iesay_change_and_link_excerpt', 999 );

 //去掉归档页面的 分类、标签等字段
 function my_theme_archive_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    } elseif ( is_tax() ) {
        $title = single_term_title( '', false );
    }
 
    return $title;
}
add_filter( 'get_the_archive_title', 'my_theme_archive_title' );
//去掉文章版本
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
function disable_embeds_init() {
  /* @var WP $wp */
  global $wp;

  // Remove the embed query var.
  $wp->public_query_vars = array_diff( $wp->public_query_vars, array(
    'embed',
  ) );

  // Remove the REST API endpoint.
  remove_action( 'rest_api_init', 'wp_oembed_register_route' );

  // Turn off
  add_filter( 'embed_oembed_discover', '__return_false' );

  // Don't filter oEmbed results.
  remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );

  // Remove oEmbed discovery links.
  remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );

  // Remove oEmbed-specific JavaScript from the front-end and back-end.
  remove_action( 'wp_head', 'wp_oembed_add_host_js' );
  add_filter( 'tiny_mce_plugins', 'disable_embeds_tiny_mce_plugin' );

  // Remove all embeds rewrite rules.
  add_filter( 'rewrite_rules_array', 'disable_embeds_rewrites' );
}
add_action( 'init', 'disable_embeds_init', 9999 );
/**
 * Removes the 'wpembed' TinyMCE plugin.
 *
 * @since 1.0.0
 *
 * @param array $plugins List of TinyMCE plugins.
 * @return array The modified list.
 */
function disable_embeds_tiny_mce_plugin( $plugins ) {
  return array_diff( $plugins, array( 'wpembed' ) );
}
/**
 * Remove all rewrite rules related to embeds.
 *
 * @since 1.2.0
 *
 * @param array $rules WordPress rewrite rules.
 * @return array Rewrite rules without embeds rules.
 */
function disable_embeds_rewrites( $rules ) {
  foreach ( $rules as $rule => $rewrite ) {
    if ( false !== strpos( $rewrite, 'embed=true' ) ) {
      unset( $rules[ $rule ] );
    }
  }

  return $rules;
}
/**
 * Remove embeds rewrite rules on plugin activation.
 *
 * @since 1.2.0
 */
function disable_embeds_remove_rewrite_rules() {
  add_filter( 'rewrite_rules_array', 'disable_embeds_rewrites' );
  flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'disable_embeds_remove_rewrite_rules' );

/**
 * Flush rewrite rules on plugin deactivation.
 *
 * @since 1.2.0
 */
function disable_embeds_flush_rewrite_rules() {
  remove_filter( 'rewrite_rules_array', 'disable_embeds_rewrites' );
  flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'disable_embeds_flush_rewrite_rules' );
function remove_dns_prefetch( $hints, $relation_type ) {
  if ( 'dns-prefetch' === $relation_type ) {
    return array_diff( wp_dependencies_unique_hosts(), $hints );
  }

  return $hints;
}
add_filter( 'wp_resource_hints', 'remove_dns_prefetch', 10, 2 );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
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
 /**禁用博客评论功能
function disable_page_comments( $posts ) {
if ( is_page()) {
$posts[0]->comment_status = 'disabled';
$posts[0]->ping_status = 'disabled';
}
return $posts;
}
add_filter( 'the_posts', 'disable_page_comments' );*/
//引入optionframe
if (!function_exists('optionsframework_init')){
  define('OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri().'/inc/');
  require_once dirname(__FILE__).'/inc/options-framework.php';
}
add_action('optionsframework_custom_scripts', 'optionsframework_custom_scripts');
function optionsframework_custom_scripts(){ ?>
<script type="text/javascript">
	你的js代码
</script>
<?php
}
//修改登录界面地址
function Bing_crack_protection(){
$Bing_q='dolgen';//等号前的内容
$Bing_h='lee';//等号后的内容
if($_GET{$Bing_q} != $Bing_h)header('Location: https://doopee.cn/aboutme');//如果还用原来的登录地址，会自动跳转到博客首页
}
add_action('login_enqueue_scripts','Bing_crack_protection');