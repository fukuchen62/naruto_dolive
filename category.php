<?php
get_header();

?>

<main>
    <section id="toparea" class="toparea">
        <h2>カテゴリー別：ニュース</h2>
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
            <aside class="aside_wrap aside_top">
                <!-- <div class="aside_title">━━ カテゴリ別 ━━</div> -->
                <?php get_sidebar('categories'); ?>

            </aside>

        </div>




        <style>
            /*真ん中に設置*/
            .pagination {
                text-align: center;

            }

            .pagenation-page {
                text-align: center;

            }

            /*横並びにする*/
            .nav-links {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;

            }

            .page-numbers {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                position: relative;

            }

            /*ページタブの共通スタイル*/
            .nav-links a.page-numbers,
            .nav-links .current,
            .nav-links a.prev,
            .nav-links a.next,
            .nav-links .dots {
                width: 70px;
                height: 60px;
                text-align: center;
                line-height: 50px;
                background: #fff;
                /* color: #7090DD; */
                /* border-radius: 50%; */
                margin-right: 25px;
                font-size: 1.5rem;
                font-weight: bold;
                /* border: 1px solid #7090DD; */
                padding-top: 10px;
                text-decoration: none;
                color: #000;
            }

            .nav-links a.page-numbers,
            .nav-links .current {
                background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/pagination.png);
                background-size: 100%;
                font-family: 'Barlow Condensed', sans-serif;
            }

            .nav-links a.prev,
            .nav-links a.next,
            .nav-links .dots {
                background-image: none;
                font-size: 3rem;

            }


            /*マウスが乗った時の、ボタンの背景の色と文字の色*/
            .nav-links a.page-numbers:hover {
                color: #FFF;
                background-color: #999;
                /* border-color: #999; */
                border-radius: 50%;

            }

            /*現在のページのタブ*/
            .nav-links .current {
                /* background: #7090DD; */
                color: #000;
                padding: 0px;
                padding-top: 10px;
            }


            /*「次へ」の前の縦線位置*/
            .nav-links .next::before {
                left: -15px;
                display: none;
            }

            /*前へ」の後の縦線位置*/
            .nav-links .prev::after {
                right: -15px;
                display: none;
            }

            /*数字省略の「・・・」*/
            .nav-links .dots {
                background: transparent;
                border: none;
            }
        </style>

        <!-- <h2>サイドバーです</h2> -->
        <!-- サイドバー出力 -->


        <a href="<?php echo home_url(''); ?>">ホームへ</a>
    </div>
</main>

<?php
get_footer();
