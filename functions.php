<?php
/**
* サムネイル画像を使用可能にする
*/
add_theme_support('post-thumbnails');

/**
* カスタムメニュー機能を使用可能にする
*/
add_theme_support('menus');

/**
 * メニュー
 */
function register_my_menus() {
	register_nav_menus(
		array(
			'header - menu' => 'ヘッダーメニュー',
		)
	);
}
add_action( 'after_setup_theme', 'register_my_menus' );

/**
* グローバルメニューの<li> に .header-item を付ける
*/
add_filter('nav_menu_css_class', 'custom_nav_menu_classes', 100, 2);
function custom_nav_menu_classes($classes, $item) {
    $new_classes = array('header-item');
    if (in_array('current-menu-item', $classes)) {
        $new_classes[] = 'current-menu-item';
    }
    return $new_classes;
};

/**
 * ブロックエディタにCSS適応
 */
function my_editor_suport() {
	add_theme_support( 'editor-styles' );
	add_editor_style( 'css/editor-style.css' );
}
add_action( 'after_setup_theme', 'my_editor_suport' );

/**
* セキュリティ対策
*/
remove_action( 'wp_head', 'wp_generator' ); // WordPressのバージョン
remove_action( 'wp_head', 'wp_shortlink_wp_head' ); // 短縮URLのlink
remove_action( 'wp_head', 'wlwmanifest_link' ); // ブログエディターのマニフェストファイル
remove_action( 'wp_head', 'rsd_link' ); // 外部から編集するためのAPI
remove_action( 'wp_head', 'feed_links_extra', 3 ); // フィードへのリンク
remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); // 絵文字に関するJavaScript
remove_action( 'wp_head', 'rel_canonical' ); // カノニカル
remove_action( 'wp_print_styles', 'print_emoji_styles' ); // 絵文字に関するCSS
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' ); // 絵文字に関するJavaScript
remove_action( 'admin_print_styles', 'print_emoji_styles' ); // 絵文字に関するCSS