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
