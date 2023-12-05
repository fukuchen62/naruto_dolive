<?php



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
    // Reset.cssの読み込み
    wp_enqueue_style(
        'reset-style',
        get_template_directory_uri() . '/assets/css/reset.css',
        array(),
        false
    );

    // 2番目にCommon.cssの読み込み
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

        // トップページ専用のjsの読み込み
        wp_enqueue_script(
            'top_script',
            get_template_directory_uri() . '/assets/js/top.js',
            array('my-script'),
            '',
            true
        );

        //----------------------
        //  ニュース一覧ページ
        //----------------------
    } elseif (is_category()) {
        // Index.cssの読み込み
        wp_enqueue_style(
            'index-style',
            get_template_directory_uri() . '/assets/css/a_news_news.css',
            array(),
            false
        );
    }
    //----------------------
    //  コース詳細ページ
    //----------------------
    elseif (is_singular('course')) {

        //コースのCSSの読み込み
        wp_enqueue_style(
            'course_style',
            get_template_directory_uri() . '/assets/css/course.css',
            array(),
            false
        );
        // コースのscriptの読み込み
        wp_enqueue_script(
            'course_script',
            get_template_directory_uri() . '/assets/js/course.js',
            '',
            '',
            true
        );
        // コースの色変更
        wp_enqueue_script(
            'course_color_script',
            get_template_directory_uri() . '/assets/js/course_color.js',
            '',
            '',
            true
        );
    }
    //----------------------
    //  コラム詳細ページ
    //----------------------
    elseif (is_singular('column')) {

        //コラム詳細ページ専用のCSSの読み込み
        wp_enqueue_style(
            's_column_style',
            get_template_directory_uri() . '/assets/css/s_column.css',
            array(),
            false
        );

        // トップエリアの色の変更
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
    elseif (is_post_type_archive('eat') || is_post_type_archive('enjoy') || is_post_type_archive('stay') || is_post_type_archive('tour')) {

        //食べる・遊ぶ・宿泊・観光の一覧ページ専用のcssの読み込み
        wp_enqueue_style(
            'archive_purpose',
            get_template_directory_uri() . '/assets/css/a_purpose.css',
            array('common-style'),
            false // headタグ内に出力
        );
        // トップエリアの色の変更
        wp_enqueue_script(
            's_column_script',
            get_template_directory_uri() . '/assets/js/color.js',
            '',
            '',
            true
        );
        // マップのjsの読み込み
        wp_enqueue_script(
            'map_script',
            get_template_directory_uri() . '/assets/js/map.js',
            '',
            '',
            true
        );
        // a_purpose.jsを読み込む
        wp_enqueue_script(
            'a_purpose_script',
            get_template_directory_uri() . '/assets/js/a_purpose.js',
            array('jquery'),
            null,
            true
        );
    }
    //----------------------
    //  食べる・遊ぶ・宿泊・観光のタクソノミーページ
    //------------is_tax----------
    elseif (is_tax('eat_type') || is_tax('tour_type')) {
        //食べる・遊ぶ・宿泊・観光の一覧ページ専用のcssの読み込み
        wp_enqueue_style(
            'archive_purpose',
            get_template_directory_uri() . '/assets/css/a_purpose.css',
            array('common-style'),
            false // headタグ内に出力
        );
        // トップエリアの色の変更
        wp_enqueue_script(
            's_column_script',
            get_template_directory_uri() . '/assets/js/color.js',
            '',
            '',
            true
        );
        // マップのjsの読み込み
        wp_enqueue_script(
            'map_script',
            get_template_directory_uri() . '/assets/js/map.js',
            '',
            '',
            true
        );
    }
    //------------------------------------
    // 食べる・遊ぶ・宿泊・観光の詳細ページ
    //------------------------------------
    elseif (is_singular('eat') || is_singular('enjoy') || is_singular('tour') || is_singular('stay')) {
        // 食べる・遊ぶ・宿泊・観光の詳細ページ専用のcssの読み込み
        wp_enqueue_style(
            's_style',
            get_template_directory_uri() . '/assets/css/single_purpose.css',
            array(),
            false
        );
        // トップエリアの色の変更
        wp_enqueue_script(
            's_column_script',
            get_template_directory_uri() . '/assets/js/color.js',
            '',
            '',
            true
        );
        // single.jsの読み込み
        wp_enqueue_script(
            'my-script2',
            get_template_directory_uri() . '/assets/js/single.js',
            array('jquery'),
            null,
            true
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
        //----------------------
        // タクソノミーコラムページ
        //----------------------
    } elseif (is_tax('column_type')) {

        //コラムタクソノミーページ専用のCSSの読み込み
        wp_enqueue_style(
            'a_column.css',
            get_template_directory_uri() . '/assets/css/a_column.css',
            array(),
            false
        );
        // トップエリアの色の変更
        wp_enqueue_script(
            'color_script',
            get_template_directory_uri() . '/assets/js/color.js',
            '',
            '',
            true
        );
    }

    //----------------------
    // Q&AのCSSの読み込み
    //----------------------
    elseif (is_post_type_archive('q_a')) {
        wp_enqueue_style(
            'archive_q_a',
            get_template_directory_uri() . '/assets/css/q_a.css',
            array(),
            false
        );
    }
    //----------------------
    // マイページのcssの読み込み
    //----------------------
    elseif (is_page('mypage')) {
        wp_enqueue_style(
            'favorite_style',
            get_template_directory_uri() . '/assets/css/archive_favorite.css',
            array(),
            false
        );
    }
    //----------------------
    // プライバシーポリシーのcssの読み込み
    //----------------------
    elseif (is_page('privacy-policy')) {
        wp_enqueue_style(
            'privacy_style',
            get_template_directory_uri() . '/assets/css/privacy_policy.css',
            array(),
            false
        );
        //----------------------
        //  このサイトについてページにcssの読み込み
        //----------------------
    } elseif (is_page('naruto_dolive')) {
        wp_enqueue_style(
            'about_style',
            get_template_directory_uri() . '/assets/css/about.css',
            array(),
            false
        );

        //----------------------
        //  ニュース詳細ページにcssの読み込み
        //----------------------
    } elseif (is_single()) {
        // Index.css
        wp_enqueue_style(
            'single-style',
            get_template_directory_uri() . '/assets/css/s_news.css',
            array(),
            false
        );

        // トップエリアの色の変更
        wp_enqueue_script(
            's_column_script',
            get_template_directory_uri() . '/assets/js/color.js',
            '',
            '',
            true
        );

        //----------------------
        //  サイトマップページのcssの読み込み
        //----------------------
    } elseif (is_page('sitemap')) {
        wp_enqueue_style(
            'sitemap_atyle',
            get_template_directory_uri() . '/assets/css/sitemap.css',
            array(),
            false
        );
        //----------------------
        // not-foundページのcssの読み込み
        //----------------------
    } elseif (is_404()) {
        wp_enqueue_style(
            'not_found-style',
            get_template_directory_uri() . '/assets/css/not_found.css'
        );

        //----------------------
        //  ニュース詳細ページのcssの読み込み
        //----------------------
    } elseif (is_search()) {
        wp_enqueue_style(
            'search-style',
            get_template_directory_uri() . '/assets/css/search.css'
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
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');


add_action('pre_get_posts', 'my_pre_get_posts');
function my_pre_get_posts($query)
{

    if ($query->is_category()) {
        $query->set('posts_per_page', 3);
        return;
    } elseif ($query->is_front_page('column')) {
        $query->set('posts_per_page', 3);
        return;
    } elseif ($query->is_post_type_archive('column') || is_tax('column_type')) {
        $query->set('posts_per_page', 4);
        return;
    }
}



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



// サイト内検索でカスタムフィールドの内容も検索結果に含める
add_filter('posts_search', 'custom_search', 10, 2);

function custom_search($search, $wp_query)
{
    global $wpdb;

    if (!$wp_query->is_search)
        return $search;

    if (!isset($wp_query->query_vars))
        return $search;

    $search_words = explode(' ', isset($wp_query->query_vars['s']) ? $wp_query->query_vars['s'] : '');

    if (count($search_words) > 0) {
        $search = '';
        $search .= "AND (post_type = 'eat' OR post_type = 'tour' OR post_type = 'enjoy' OR post_type = 'stay')";

        foreach ($search_words as $word) {
            if (!empty($word)) {
                $search_word = '%' . esc_sql($word) . '%';
                $search .= " AND (
                    {$wpdb->posts}.post_title LIKE '{$search_word}'
                    OR {$wpdb->posts}.post_content LIKE '{$search_word}'
                    OR {$wpdb->posts}.ID IN (
                        SELECT distinct post_id
                        FROM {$wpdb->postmeta}
                        WHERE meta_value LIKE '{$search_word}'
                    )
                ) ";
            }
        }
    }

    return $search;
}
