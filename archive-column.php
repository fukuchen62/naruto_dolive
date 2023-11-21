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
                <?php if (function_exists('wp_pagenavi')) : ?>
                    <div class="pagination">
                        <?php wp_pagenavi(); ?>
                    </div>

                <?php endif ?>
            </div>

            <!-- ページナビゲーションの設定 -->
            <style>
                /*中央に配置*/
                .wp-pagenavi {
                    text-align: center;
                }

                /*ページボタンの共通スタイル*/
                .wp-pagenavi span.current,
                .page.smaller,
                .page.larger {
                    display: inline-block;
                    width: 50px;
                    height: 50px;
                    text-align: center;
                    line-height: 50px;
                    padding: 0;
                    background: #000;
                    color: #fff;
                    /* background: none; */
                    /* 背景をクリアする */
                    /* color: transparent; */
                    /* テキストを透明にする */
                    border-radius: 50%;
                    border: none;
                }



                /*現在ページ以外のボタン*/
                /* 共通スタイル*/
                .page.smaller,
                .page.larger {
                    background: #fff;

                    color: #000;
                    border: 1px solid #000;
                    padding: 0;
                }

                /* 現在ページより前のボタン */
                .page.smaller {
                    margin-right: 25px;
                }

                /* 現在ページより後のボタン */
                .page.larger {
                    margin-left: 25px;
                }


                /*マウスが乗った時の、ボタンの背景の色と文字の色*/
                .wp-pagenavi a:hover {
                    opacity: 0.5;
                }

                /*次へ, 前へ 共通スタイル*/
                .nextpostslink,
                .previouspostslink {
                    line-height: 40px;
                    border: 1px solid #fff;
                    color: #000;
                    position: relative;
                    background: #fff;
                    color: #000;
                    top: 15px;
                    font-size: 50px;
                    /* 追加 */
                    width: 50px;
                    /* 追加 */
                    height: 50px;
                    /* 追加 */
                    text-align: center;
                    /* 追加 */
                    line-height: 50px;
                    /* 追加 */
                    border-radius: 50%;
                    /* 追加 */

                }

                /*次へ*/
                .nextpostslink {
                    left: 25px;
                }

                /*前へ*/
                .previouspostslink {
                    right: 25px;
                }

                /* 〇/〇 の部分のスタイル → 不要の場合は非表示 */
                .pages {
                    display: none;
                }

                /* 画像のスタイル */
                /* .wp-pagenavi span.current::before,
                .page.smaller::before,
                .page.larger::before {
                    content: url('/wp-content/themes/naruto_dolive/images/1.png'); */
                /* 画像を設定する */
                /* display: inline-block;
                    width: 100%;
                    height: 100%;
                } */
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
