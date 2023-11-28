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
    echo '<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital@1&display=swap" rel="stylesheet">';
}



// add_common_scriptsの読み込み
add_action('wp_enqueue_scripts', 'add_common_scripts');

// 共通のcssとjsの読み込み
// ヘッダーに出力されます
function add_common_scripts()
{
    // Reset.css
    wp_enqueue_style(
        'reset-style',
        get_template_directory_uri() . '/assets/css/reset.css',
        array(),
        false
    );

    // Common.css
    wp_enqueue_style(
        'common-style',
        get_template_directory_uri() . '/assets/css/common.css',
        array('reset-style'),
        false
    );
}



// add_individual_scriptsの読み込み(各ページのcss/jsの読み込み)
add_action('wp_enqueue_scripts', 'add_individual_scripts');
function add_individual_scripts()
{

    //----------------------
    //  トップページ
    //----------------------
    if (is_home()) {

        //トップページのCSS（index.css）を読み込む
        wp_enqueue_style(
            'front_page_style',
            get_template_directory_uri() . '/assets/css/index.css',
            array(),
            false
        );
    } elseif (is_category()) {
        // Index.css
        wp_enqueue_style(
            'index-style',
            get_template_directory_uri() . '/assets/css/a_news_news.css',
            array(),
            false
        );
    }

    //----------------------
    //  コラム詳細ページ
    //----------------------
    elseif (is_singular('column')) {

        //コラム詳細ページのCSSとJSを読み込む
        wp_enqueue_style(
            's_column_style',
            get_template_directory_uri() . '/assets/css/s_column.css',
            array(),
            false
        );

        wp_enqueue_script(
            's_column_script',
            get_template_directory_uri() . '/assets/js/color.js',
            '',
            '',
            true
        );
    }
    //----------------------
    //  食べる・遊ぶ・宿泊・観光の一覧ページ
    //----------------------
    elseif (is_post_type_archive('eat') || is_post_type_archive('enjoy') || is_post_type_archive('stay') || is_post_type_archive('tour') || is_tax()) {

        //目的別一覧ページのCSSを読み込む
        wp_enqueue_style(
            'archive_purpose',
            get_template_directory_uri() . '/assets/css/a_purpose.css',
            array('common-style'),
            false // headタグ内に出力
        );
    }

    // 食べる詳細ページのcss
    elseif (is_singular('eat')) {
        wp_enqueue_style(
            's_style',
            get_template_directory_uri() . '/assets/css/single.css',
            array(),
            false
        );
    }
    //----------------------
    // コラムの一覧ページ
    //----------------------
    elseif (is_post_type_archive('column')) {

        //コラム一覧ページのCSSを読み込む
        wp_enqueue_style(
            'archive_column',
            get_template_directory_uri() . '/assets/css/a_column.css',
            array(),
            false
        );
    }
    // Q&AのCSSの読み込み
    elseif (is_post_type_archive('q_a')) {
        wp_enqueue_style(
            'archive_q_a',
            get_template_directory_uri() . '/assets/css/q_a.css',
            array(),
            false
        );
    }
    // マイページのcssの読み込み
    elseif (is_page('mypage')) {
        wp_enqueue_style(
            'mypage_atyle',
            get_template_directory_uri() . '/assets/css/mypage.css',
            array(),
            false
        );
    }
}

function my_theme_enqueue_scripts()
{
    // jQueryを登録解除
    wp_deregister_script('jquery');

    // jQueryをCDNから読み込む
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.7.1.min.js', array(), null, true);

    // 一つ目のスクリプトを読み込む
    wp_enqueue_script('my-script', get_template_directory_uri() . '/assets/js/common.js', array('jquery'), null, true);

    // 二つ目のスクリプトを読み込む
    wp_enqueue_script('my-script2', get_template_directory_uri() . '/assets/js/a_purpose.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');

/**
 * メインクエリの内容を変更する
 */
add_action('pre_get_posts', 'my_pre_get_posts');
function my_pre_get_posts($query)
{

    //トップページの場合
    if ($query->is_category()) {
        $query->set('posts_per_page', 3);
        return;
    } elseif ($query->is_archive()) {
        $query->set('posts_per_page', 6);
        return;
    }
}
