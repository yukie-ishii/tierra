<?php
// 現在のテーマパスを出力
function the_path(){
    echo get_template_directory_uri();
}

// titleタグ用
function nendebcom_title_separator( $sep ){
    $sep = '|';
    return $sep;
}
add_filter( 'document_title_separator', 'nendebcom_title_separator' );

//アイキャッチ画像の有効化
add_theme_support('post-thumbnails');

// カスタム投稿タイプ(コレクションページ用)
register_post_type("collection", [
    "label" => "コレクション投稿",
    "public" => true,
    "supports" => ["title", "thumbnail", "editor"]
    ]);

// 管理用ログイン画面の設定
function login_css()
{
echo '<link rel="stylesheet"
href="' . get_stylesheet_directory_uri() . '/css/login.css">';
}
add_action('login_enqueue_scripts', 'login_css');
function login_logo_url() {
return home_url();
}
add_filter( 'login_headerurl', 'login_logo_url' );