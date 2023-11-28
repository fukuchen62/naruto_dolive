<?php
get_header();

?>

<main>

    <section id="toparea" class="toparea">
        <h2>カテゴリ別：<?php the_category('news'); ?></h2>
    </section>

    <div class="main_wrap">
        <?php get_template_part('template-parts/breadcrumb'); ?>

        <div class="archive_col">
            <div class="card3_left">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="card3_wrap">
                            <div class="card3_content">
                                <?php get_template_part('template-parts/loop', 'news'); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
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

            <aside class="aside_wrap aside_top">
                <!-- <div class="aside_title">━━ カテゴリ別 ━━</div> -->
                <?php get_sidebar('categories'); ?>

            </aside>
        </div>






        <!-- <h2>サイドバーです</h2> -->
        <!-- サイドバー出力 -->

    </div>
</main>

<?php
get_footer();
