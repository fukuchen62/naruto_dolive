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


//headが出力される直前に実行される
// add_favicon_fontの読み込み
add_action('wp_head', 'add_favicon_font');

// headに出力 Googleフォント,ファビコンの読み込み
// ヘッダーに出力されます
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



// add_common_scriptsの読み込み
add_action('wp_enqueue_scripts', 'add_common_scripts');

// 共通のcssとjsの読み込み
// ヘッダーに出力されます
function add_common_scripts()
{
    // Reset.css
    wp_enqueue_style('reset-style', get_template_directory_uri() . '/assets/css/reset.css');
    // Common.css
    wp_enqueue_style('common-style', get_template_directory_uri() . '/assets/css/common.css');
    // Index.css
    wp_enqueue_style('index-style', get_template_directory_uri() . '/assets/css/index.css');

    // jQuery未検証
    // jQueryの読み込みむ
    wp_enqueue_script('jquery');
}



// add_individual_scriptsの読み込み
add_action('wp_enqueue_scripts', 'add_individual_scripts');

function add_individual_scripts()
{
    // 各singleページの時読み込むcss
    if (is_singular('column')) {
        wp_enqueue_style(
            's_column_style',
            get_template_directory_uri() . '/assets/css/s_column.css',
            array(),
            false
        );

        wp_enqueue_script(
            's_column_script',
            get_template_directory_uri() . '/assets/js/s_column.js',
            '',
            '',
            true
        );
    }
    if (is_archive('eat')) {
        wp_enqueue_style(
            'archive_purpose',
            get_template_directory_uri() . '/assets/css/a_purpose.css',
            array(),
            false
        );
    }
    if (is_archive('column')) {
        wp_enqueue_style(
            'archive_column',
            get_template_directory_uri() . '/assets/css/a_column.css',
            array(),
            false
        );
    }
}
