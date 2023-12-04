<?php
get_header();

?>

<main>

    <h2 id="toparea" class="toparea">
        コラム記事一覧
    </h2>
    <div class="main_wrap">
        <?php get_template_part('template-parts/breadcrumb'); ?>
        <div class="content_wrap">
            <div class="archive_col">
                <div class="card_2col">

                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="card1_wrap">

                                <?php get_template_part('template-parts/loop', 'column'); ?>

                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>


                <aside class="aside_wrap aside_top">

                    <div class="aside_title">━━ カテゴリ別 ━━</div>
                    <ul>
                        <?php
                        $categories = get_categories(array(
                            'taxonomy' => 'column_type',
                            'orderby' => 'name',
                            'order' => 'DESC',
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
            </div>

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
        </div>
        <!-- サイドバー -->
        <!-- ページナビゲーションの設定 -->
        <!-- <h2>以下サイドバーです</h2> -->
        <aside class="aside_wrap aside_bottom">

            <div class="aside_title">━━ カテゴリ別 ━━</div>
            <ul>
                <?php
                $categories = get_categories(array(
                    'taxonomy' => 'column_type',
                    'orderby' => 'name',
                    'order' => 'DESC',
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
    </div>



</main>

<?php
get_footer(); ?>
