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
                    <?php $categories = get_categories(array(
                        'taxonomy' => 'column_type',
                        'orderby' => 'name',
                        'order' => 'ASC',
                        'hide_empty' => false,
                    ));

                    foreach ($categories as $category) {
                        $category_link = get_category_link($category->term_id);
                        $post_count = $category->count;
                        echo '<li><a href="' . $category_link . '">' . $category->name . ' (' . $post_count . ')</a></li>';
                    } ?>

                </ul>
            </aside><!-- aside_wrap aside_top-->
        </div><!-- menu_wrap -->

        <div class="archive_col">
            <div class="card_3col">
                <!-- 記事がある分表示させる -->
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <!-- ここに内容を表示させる -->


                        <!-- コラムページの場合 -->

                        <div class="card1_wrap">
                            <?php get_template_part('template-parts/loop', 'column'); ?>

                        </div><!-- card1_wrap -->

                    <?php endwhile; ?>
                <?php endif ?>


            </div><!-- card_3col -->


            <div class="pagination">
                <?php the_posts_pagination(
                    array(
                        'mid_size'      => 1, // 現在ページの左右に表示するページ番号の数
                        'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
                        'prev_text'     => ('◀'), // 「前へ」リンクのテキスト
                        'next_text'     => ('▶'), // 「次へ」リンクのテキスト
                        'type'          => 'plain', // 戻り値の指定 (plain/list)
                    )

                ); ?>
            </div>

            <div class="close_btn">
                <!-- 前のページに戻るボタンの分岐条件 -->

                <a href="<?php echo home_url('/column') ?>">
                    <div class="close_link">
                        <span class="close">back</span>
                    </div><!-- close_link -->
                </a>

            </div><!-- close_btn -->
        </div><!-- archive_col -->
        <!-- スマホ版カテゴリ別サイドバー -->
        <aside class="aside_wrap aside_bottom">

            <div class="aside_title">━━ カテゴリ別 ━━</div>
            <ul>
                <?php
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
                ?>
            </ul>
        </aside>


    </div><!-- main_wrap -->
</main>
<?php get_footer(); ?>
