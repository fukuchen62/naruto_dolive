<?php
function my_theme_setup()
{
    // <title>タグを出力する
    add_theme_support('title-tag');
    // アイキャッチ画像を使用可能にする
    add_theme_support('post-thumbnails');
    // カスタムメニュー機能を使用可能にする
    add_theme_support('menus');
}
add_action('after_setup_theme', 'my_theme_setup');



// headに出力 Googleフォント,ファビコンの読み込み
function add_favicon_font()
{
    // ファビコン
    echo '<link rel="shortcut icon" href="' . get_template_directory_uri() . '/assets/img/icon.ico">';
    // fontawesome
    echo '<link href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" rel="stylesheet">';
    // グーグルフォント
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
    echo '<link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=DotGothic16&family=Zen+Maru+Gothic&display=swap" rel="stylesheet">';
}
//headが出力される直前に実行される
add_action('wp_head', 'add_favicon_font');



// cssとjsの読み込み

function add_my_files()
{
    // Reset.css
    wp_enqueue_style('reset-style', get_template_directory_uri() . '/assets/css/reset.css');
    // Common.css
    wp_enqueue_style('common-style', get_template_directory_uri() . '/assets/css/common.css');
    // Index.css
    wp_enqueue_style('index-style', get_template_directory_uri() . '/assets/css/index.css');

    // jQuery未検証
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.7.1.min.js', array(), '3.7.1', true);
}

// add_action('wp_enqueue_scripts', 'add_my_files');
