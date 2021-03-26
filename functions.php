<?php
/**
* テーマのセットアップ
* 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support#HTML5
**/
function my_setup()
{
add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
add_theme_support('title-tag'); // タイトルタグ自動生成
add_theme_support(
'html5',
array( //HTML5でマークアップ
'search-form',
'comment-form',
'comment-list',
'gallery',
'caption',
)
);
}

add_action('after_setup_theme', 'my_setup');
// セットアップの書き方の型
// function custom_theme_setup() {
// add_theme_support( $feature, $arguments );
// }
// add_action( 'after_setup_theme', 'custom_theme_setup' );

function my_script_init()
{
wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css', array(), '1.0.0', 'all');
wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css', array(), '5.8.2', 'all');
wp_enqueue_style('scroll-hint-css', get_template_directory_uri() . '/css/scroll-hint.css', array(), '1.0.0', 'all');
wp_enqueue_script('scroll-hint-js', get_template_directory_uri() . '/js/scroll-hint.min.js', array( 'jquery' ), '1.0.0', true);
wp_enqueue_style('my', get_template_directory_uri() . '/css/style.min.css', array(), '1.0.0', 'all');
wp_enqueue_script('my', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');



/**
* カテゴリーを1つだけ表示
*
* @param boolean $anchor aタグで出力するかどうか.
* @param integer $id 投稿id.
* @return void
*/

function my_the_post_category( $anchor = true, $id = 0 ) {
global $post;
//引数が渡されなければ投稿IDを見るように設定
if ( 0 === $id ) {
$id = $post->ID;
}

//カテゴリー一覧を取得
$this_categories = get_the_category( $id );
if ( $this_categories[0] ) {
if ( $anchor ) { //引数がtrueならリンク付きで出力
echo '<a href="' . esc_url( get_category_link( $this_categories[0]->term_id ) ) . '">' . esc_html( $this_categories[0]->cat_name ) . '</a>';
} else { //引数がfalseならカテゴリー名のみ出力
echo esc_html( $this_categories[0]->cat_name );
}
}
}

/**
* メニューの登録
*
* 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
*/
function my_menu_init()
{
register_nav_menus(
array(
'global' => 'グローバルメニュー',
'footer' => 'フッターメニュー',
)
);
}
add_action('init', 'my_menu_init');

// mw-wp-formというpost_typeがあればビジュアルエディタをOFFにする。
function my_off_ve_in_page(){
    global $typenow;
    if( $typenow =='mw-wp-form' ){
        add_filter('user_can_richedit', 'my_off_ve_filter');
    }
}
function my_off_ve_filter(){
    return false;
}
add_action( 'load-post.php', 'my_off_ve_in_page' );
add_action( 'load-post-new.php', 'my_off_ve_in_page' );


// 自動挿入されるpタグ、brタグを削除する。
remove_filter('the_content', 'wpautop');