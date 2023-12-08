<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="「鳴門DoLive！」は鳴門を走るドライバーたちに魅力あるスポットの提案を効率的に探すことができるサイトです。">
    <meta name="keywords" content="徳島 鳴門 ドライブ 渦 四国 関西 観光 車 阿波踊り 食 グルメ 穴場 釣り場 大塚 デート バイク コース 地図">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="stkr" class="sp_none">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/maincar_icon.png" alt="" class="car_img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/exhaust_fumes.gif" alt="" class="gas">
    </div>

    <header>
        <nav class="sp_nav pc_none">
            <div class="container">
                <div class="header_inner" id="headerInner">
                    <div class="sp_nav_logo">
                        <a href="<?php echo home_url('/') ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/nav_logo.png" alt="logo">
                        </a>
                    </div>
                    <div class="header_menu">
                        <div class="search_box_wrap">
                            <div class="search_box">
                                <?php get_search_form(); ?>
                                <i class="fas fa-search fa-fw" style="color: white;"></i>
                            </div>
                        </div>
                        <div class="link_wrap">
                            <h3 class="overlaymenu_title_course">コースで探す</h3>
                            <ul class="overlaymenu_list_course">
                                <li><a href="<?php echo get_permalink(324); ?>">A:鳴門海峡満喫旅</a></li>
                                <li><a href="<?php echo get_permalink(329); ?>">B:歴史・文化の鳴門旅</a></li>
                                <li><a href="<?php echo get_permalink(812); ?>">C:ぐるっと一周鳴門旅</a></li>
                                <li><a href="<?php echo get_permalink(817); ?>">D:鳴門おおそと一周旅</a></li>
                                <li><a href="<?php echo get_permalink(822); ?>">E:キッズが主役旅</a></li>
                            </ul>
                            <h3 class="overlaymenu_title_purpose">目的で探す</h3>
                            <ul class="overlaymenu_list_purpose">
                                <li><a href="<?php echo home_url('/eat'); ?>">食べる</a></li>
                                <li><a href="<?php echo home_url('/enjoy'); ?>">遊ぶ</a></li>
                                <li><a href="<?php echo home_url('/tour'); ?>">観光</a></li>
                                <li><a href="<?php echo home_url('/stay'); ?>">宿泊</a></li>
                            </ul>

                            <div class="overlaymenu_list_icon">
                                <div class="overlaymenu_list_icon_text">
                                    <p>他ページもご利用ください！</p>
                                </div>
                                <ul class="overlaymenu_list_icon_list">
                                    <li class="overlaymenu_list_icon_item">
                                        <!-- 新着情報一覧へのリンク取得 -->
                                        <?php
                                        $news = get_term_by('slug', 'news', 'category');
                                        $news_link = get_term_link($news, 'category');
                                        ?>
                                        <a href="<?php echo $news_link; ?>">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/news_icon.svg" width="45" height="45" alt="新着情報一覧へのリンク" decoding="async" loading="lazy" />News
                                        </a>
                                    </li>
                                    <li class="overlaymenu_list_icon_item">
                                        <a href="<?php echo home_url('/column'); ?>">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/column_icon.svg" width="45" height="45" alt="コラム一覧へのリンク" decoding="async" loading="lazy" />Column
                                        </a>
                                    </li>
                                    <li class="overlaymenu_list_icon_item">
                                        <a href="<?php if (is_front_page()) : ?>#instagram<?php else : ?><?php echo esc_url(home_url('/')); ?>#instagram<?php endif; ?>">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram_icon.svg" width="45" height="45" alt="インスタへのリンク" decoding="async" loading="lazy" />Insta
                                        </a>
                                    </li>
                                    <li class="overlaymenu_list_icon_item">
                                        <a href="<?php echo get_permalink(239) ?>">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mypage_icon.svg" width="45" height="45" alt="マイページへのリンク" decoding="async" loading="lazy" />MyPage
                                        </a>
                                    </li>
                                    <li class="overlaymenu_list_icon_item">
                                        <a href="<?php echo home_url('/q_a') ?>">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/q&a_icon.svg" width="45" height="45" alt="Q&Aへのリンク" decoding="async" loading="lazy" />Q&A
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="header_menu_btn" id="spMenuBtn">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span>MENU</span>
                    </div>
                </div>
            </div>
        </nav>

        <nav class="pc_nav sp_none">
            <div class="pc_nav_logo">
                <a href="<?php echo home_url('/'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/nav_logo.png" alt="logo">
                </a>
            </div>
            <ul class="pc_navmenu">
                <!-- ページ内リンク？ -->
                <li class="has_child"><a href="#">コース別一覧</a>
                    <ul class="child_wrap">
                        <li><a href="<?php echo get_permalink(324); ?>">
                                <dl>
                                    <dt><img src="<?php echo get_template_directory_uri(); ?>/assets/img/nav_sea.jpg" alt="鳴門海峡満喫旅"></dt>
                                    <dd>鳴門海峡満喫旅</dd>
                                </dl>
                            </a></li>
                        <li><a href="<?php echo get_permalink(329); ?>">
                                <dl>
                                    <dt><img src="<?php echo get_template_directory_uri(); ?>/assets/img/nav_culture.jpg" alt="歴史・文化の鳴門旅"></dt>
                                    <dd>歴史･文化の鳴門旅</dd>
                                </dl>
                            </a></li>
                        <li><a href="<?php echo get_permalink(812); ?>">
                                <dl>
                                    <dt><img src="<?php echo get_template_directory_uri(); ?>/assets/img/nav_round.jpg" alt="ぐるっと一周鳴門旅"></dt>
                                    <dd>ぐるっと一周鳴門旅</dd>
                                </dl>
                            </a></li>
                        <li><a href="<?php echo get_permalink(817); ?>">
                                <dl>
                                    <dt><img src="<?php echo get_template_directory_uri(); ?>/assets/img/nav_largeround.jpg" alt="鳴門おおそと一周旅"></dt>
                                    <dd>鳴門おおそと一周旅</dd>
                                </dl>
                            </a></li>
                        <li><a href="<?php echo get_permalink(822); ?>">
                                <dl>
                                    <dt><img src="<?php echo get_template_directory_uri(); ?>/assets/img/nav_kids.jpg" alt="キッズが主役旅"></dt>
                                    <dd>キッズが主役旅</dd>
                                </dl>
                            </a></li>
                    </ul>
                </li>
                <!-- ページ内リンク？ -->
                <li class="has_child"><a href="#">目的別一覧</a>
                    <ul class="child_wrap">
                        <li><a href="<?php echo home_url('/eat'); ?>">
                                <dl>
                                    <dt><img src="<?php echo get_template_directory_uri(); ?>/assets/img/nav_eat.jpg" alt="食べる"></dt>
                                    <dd>食べる</dd>
                                </dl>
                            </a></li>
                        <li><a href="<?php echo home_url('/enjoy'); ?>">
                                <dl>
                                    <dt><img src="<?php echo get_template_directory_uri(); ?>/assets/img/nav_enjoy.jpg" alt="遊ぶ"></dt>
                                    <dd>遊ぶ</dd>
                                </dl>
                            </a></li>
                        <li><a href="<?php echo home_url('/tour'); ?>">
                                <dl>
                                    <dt><img src="<?php echo get_template_directory_uri(); ?>/assets/img/nav_tourism.jpg" alt="観光"></dt>
                                    <dd>観光</dd>
                                </dl>
                            </a></li>
                        <li><a href="<?php echo home_url('/stay'); ?>">
                                <dl>
                                    <dt><img src="<?php echo get_template_directory_uri(); ?>/assets/img/nav_lodging.jpg" alt="宿泊"></dt>
                                    <dd>宿泊</dd>
                                </dl>
                            </a></li>
                    </ul>
                </li>
                <li><a href="<?php echo $news_link; ?>">新着情報</a></li>
                <li class="has_child"><a href="<?php echo home_url('/column'); ?>">コラム</a>
                    <ul class="child_wrap">
                        <li><a href="<?php echo get_term_link('about_naruto', 'column_type'); ?>">
                                <dl>
                                    <dt><img src="<?php echo get_template_directory_uri(); ?>/assets/img/nav_aboutnaruto.jpg" alt="鳴門について"></dt>
                                    <dd>鳴門について</dd>
                                </dl>
                            </a></li>
                        <li><a href="<?php echo get_term_link('life_style', 'column_type'); ?>">
                                <dl>
                                    <dt><img src="<?php echo get_template_directory_uri(); ?>/assets/img/nav_spend.jpg" alt="過ごし方"></dt>
                                    <dd>過ごし方</dd>
                                </dl>
                            </a></li>
                        <li><a href="<?php echo get_term_link('products', 'column_type'); ?>">
                                <dl>
                                    <dt><img src="<?php echo get_template_directory_uri(); ?>/assets/img/nav_specialty.jpg" alt="名物"></dt>
                                    <dd>名物</dd>
                                </dl>
                            </a></li>
                        <li><a href="<?php echo get_term_link('others', 'column_type'); ?>">
                                <dl>
                                    <dt><img src="<?php echo get_template_directory_uri(); ?>/assets/img/nav_other.jpg" alt="その他"></dt>
                                    <dd>その他</dd>
                                </dl>
                            </a></li>
                    </ul>
                </li>
                <li><a href="<?php if (is_front_page()) : ?>#instagram<?php else : ?><?php echo esc_url(home_url('/')); ?>#instagram<?php endif; ?>">インスタグラム</a></li>
                <li><a href="<?php echo get_permalink(239) ?>">マイページ</a></li>
                <li><a href="<?php echo home_url('/q_a') ?>">Q&A</a></li>
                <li class="search_box_li">
                    <?php get_search_form(); ?>
                </li>
            </ul>
        </nav>
    </header>