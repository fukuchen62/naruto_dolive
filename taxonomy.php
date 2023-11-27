<?php get_header(); ?>
<main>
    <!---- トップエリアタイトル ---->
    <section id="toparea" class="toparea">
        <h2>カテゴリ別：<?php single_term_title(''); ?></h2>
    </section><!-- id="toparea" class="toparea" -->

    <div class="main_wrap">
        <!-- パンくずリスト -->
        <?php get_template_part('template-parts/breadcrumb'); ?>

        <!-- 選択したタクソノミーをタイトルで表示 -->
        <div class="center_title">
            <h3 class="middle_title"><?php single_term_title(''); ?></h3>
        </div><!-- center_title -->

        <!---- 地図とカテゴリ別サイドバー ---->
        <div class="menu_wrap">
            <!---- 地図 ---->
            <div class="map_content" id="map">

            </div><!-- class="map_content" id="map"-->

            <!---- pc版カテゴリ別サイドバー ---->
            <aside class="aside_wrap aside_top">
                <div class="aside_title">━━ カテゴリ別 ━━
                </div><!-- aside_title-->
                <ul>
                    <?php if (is_tax('eat_type', 'japanese_food') || is_tax('eat_type', 'west_food') || is_tax('eat_type', 'chinese_food') || is_tax('eat_type', 'sweet_food') || is_tax('eat_type', 'others_food') || is_tax('tour_type', 'art') || is_tax('tour_type', 'park') || is_tax('tour_type', 'temple') || is_tax('tour_type', 'history') || is_tax('tour_type', 'nature')) : { ?>
                            <li>
                                <a href="<?php echo home_url('/eat') ?>">食べる(
                                    <?php
                                    $count_custom = wp_count_posts('eat');
                                    $num = $count_custom->publish;
                                    echo $num; ?>
                                    )
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo home_url('/enjoy') ?>">遊ぶ(
                                    <?php
                                    $count_custom = wp_count_posts('enjoy');
                                    $num = $count_custom->publish;
                                    echo $num; ?>
                                    )
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo home_url('/tour') ?>">観光(
                                    <?php
                                    $count_custom = wp_count_posts('tour');
                                    $num = $count_custom->publish;
                                    echo $num; ?>
                                    )
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo home_url('/stay') ?>">宿泊(
                                    <?php
                                    $count_custom = wp_count_posts('stay');
                                    $num = $count_custom->publish;
                                    echo $num; ?>
                                    )
                                </a>
                            </li>
                    <?php }
                    elseif (is_tax('column_type', 'others') || is_tax('column_type', 'products') || is_tax('column_type', 'life_style') || is_tax('column_type', 'about_naruto')) : {

                            $categories = get_categories(array(
                                'taxonomy' => 'column_type',
                                'orderby' => 'name',
                                'order' => 'ASC',
                                'hide_empty' => false,
                            ));

                            foreach ($categories as $category) {
                                $category_link = get_category_link($category->term_id);
                                $post_count = $category->count;
                                echo '<li><a href="' . $category_link . '">' . $category->name . ' (' . $post_count . ')</a></li>';
                            }
                        }
                    endif; ?>
                </ul>
            </aside><!-- aside_wrap aside_top-->
        </div><!-- menu_wrap -->

        <div class="archive_col">
            <div class="card_3col">


                <!-- 記事がある分表示させる -->
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <!-- ここに内容を表示させる -->
                        <!-- 目的別ページの場合 -->
                        <?php if (
                            is_tax('eat_type', 'japanese_food') || is_tax('eat_type', 'west_food')
                            || is_tax('eat_type', 'chinese_food') || is_tax('eat_type', 'sweet_food')
                            || is_tax('eat_type', 'others_food') || is_tax('tour_type', 'art')
                            || is_tax('tour_type', 'park') || is_tax('tour_type', 'temple')
                            || is_tax('tour_type', 'history') || is_tax('tour_type', 'nature')
                        ) : { ?>

                                <?php get_template_part('template-parts/loop', 'content'); ?>

                            <?php } ?>
                            <!-- コラムページの場合 -->
                            <?php elseif (
                            is_tax('column_type', 'others') || is_tax('column_type', 'products')
                            || is_tax('column_type', 'life_style') || is_tax('column_type', 'about_naruto')
                        ) : { ?>
                                <div class="card1_wrap">
                                <?php get_template_part('template-parts/loop', 'column');
                            } ?>
                                </div><!-- card1_wrap -->
                            <?php endif; ?><!-- 目的別・コラム分岐条件 -->
                        <?php endwhile; ?>
                    <?php endif ?>


            </div><!-- card_3col -->
            <div class="close_btn">
                <!-- 前のページに戻るボタンの分岐条件 -->

                <!-- 目的別ページの場合 -->
                <?php if (
                    is_tax('eat_type', 'japanese_food') || is_tax('eat_type', 'west_food')
                    || is_tax('eat_type', 'chinese_food') || is_tax('eat_type', 'sweet_food')
                    || is_tax('eat_type', 'others_food') || is_tax('tour_type', 'art')
                    || is_tax('tour_type', 'park') || is_tax('tour_type', 'temple')
                    || is_tax('tour_type', 'history') || is_tax('tour_type', 'nature')
                ) : { ?>


                        <!-- 目的別ページの場合 -->
                        <?php if (!empty($_SERVER['HTTP_REFERER'])) : ?>
                            <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">
                                <div class="close_link">
                                    <span class="close">back</span>
                                </div><!-- close_link -->
                            </a>
                        <?php endif; ?>

                    <?php } ?>
                    <!-- コラムページの場合 -->
                    <?php elseif (
                    is_tax('column_type', 'others') || is_tax('column_type', 'products')
                    || is_tax('column_type', 'life_style') || is_tax('column_type', 'about_naruto')
                ) : { ?>


                        <a href="<?php echo home_url('/column') ?>">
                            <div class="close_link">
                                <span class="close">back</span>
                            </div><!-- close_link -->
                        </a>


                <?php }
                endif; ?><!-- 目的別・コラム分岐条件 -->












            </div><!-- close_btn -->
        </div><!-- archive_col -->
        <!-- スマホ版カテゴリ別サイドバー -->
        <aside class="aside_wrap aside_bottom">
            <div class="aside_title">━━ カテゴリ別 ━━
            </div><!-- aside_title -->
            <ul>
                <li>
                    <a href="<?php echo home_url('/eat') ?>">食べる(
                        <?php
                        $count_custom = wp_count_posts('eat');
                        $num = $count_custom->publish;
                        echo $num; ?>
                        )
                    </a>
                </li>
                <li>
                    <a href="<?php echo home_url('/enjoy') ?>">遊ぶ(
                        <?php
                        $count_custom = wp_count_posts('enjoy');
                        $num = $count_custom->publish;
                        echo $num; ?>
                        )
                    </a>
                </li>
                <li>
                    <a href="<?php echo home_url('/tour') ?>">観光(
                        <?php
                        $count_custom = wp_count_posts('tour');
                        $num = $count_custom->publish;
                        echo $num; ?>
                        )
                    </a>
                </li>
                <li>
                    <a href="<?php echo home_url('/stay') ?>">宿泊(
                        <?php
                        $count_custom = wp_count_posts('stay');
                        $num = $count_custom->publish;
                        echo $num; ?>
                        )
                    </a>
                </li>
            </ul>
        </aside><!-- aside_wrap aside_bottom -->


    </div><!-- main_wrap -->
</main>
<?php get_footer(); ?>
