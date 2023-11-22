<?php
get_header();

?>

<h2>コラム一覧</h2>
<p></p>
<?php get_template_part('template-parts/breadcrumb'); ?>
<main>
    <div>
        <div>
            <div>


                <div>

                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <div>
                                <?php get_template_part('template-parts/loop', 'content'); ?>
                                <?php if (has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>"></a>

                                <?php else : ?>
                                    <img src="<?php echo esc_url(home_url('/')); ?>img/ファイル名" alt="<?php the_title(); ?>">

                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>


            </div>
            <hr>
            <?php the_posts_pagination(
                array(
                    'mid_size'      => 2, // 現在ページの左右に表示するページ番号の数
                    'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
                    'prev_text'     => ('◀'), // 「前へ」リンクのテキスト
                    'next_text'     => ('▶'), // 「次へ」リンクのテキスト
                    'type'          => 'plain', // 戻り値の指定 (plain/list)
                )

            ); ?>



        </div>
        <!-- ページナビゲーションの設定 -->


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

        <!-- サイドバー -->
        <h2>以下サイドバーです</h2>

    </div>

    <aside>
        <div>
            <h3>カテゴリー一覧</h3>
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
                    echo '<li><a href="' . $category_link . '">' . $category->name . '</a> (' . $post_count . ')</li>';
                }
                ?>
            </ul>
        </div>


    </aside>



    </div>
</main>

<?php
get_footer(); ?>
