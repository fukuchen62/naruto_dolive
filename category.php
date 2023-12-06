<?php
get_header();

?>

<main>
    <h2 id="toparea" class="toparea page_title"><?php $cat = get_the_category();
                                                $cat = $cat[0]; {
                                                    echo $cat->cat_name;
                                                } ?>一覧</h2>

    <div class="main_wrap">
        <?php get_template_part('template-parts/breadcrumb'); ?>
        <div class="content_wrap">
            <div class="archive_col">
                <div class="card3_left">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <a href="<?php the_permalink(); ?>">
                                <div class="card3_wrap">

                                    <div class="card3_content">

                                        <div class="card3_img">

                                            <!-- サムネあれば出力 -->
                                            <?php if (has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail('thumbnail'); ?>
                                            <?php else : ?>
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/running_around.png" alt="no-image">
                                            <?php endif; ?>

                                        </div>
                                        <?php get_template_part('template-parts/loop', 'news'); ?>

                                    </div>

                                </div>
                            </a>
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
        </div>




        <!-- <h2>サイドバーです</h2> -->
        <!-- サイドバー出力 -->

    </div>
</main>

<?php
get_footer();
