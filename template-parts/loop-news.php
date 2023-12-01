<article id="post-<?php the_ID(); ?>" <?php post_class('news'); ?>>

    <div class="article_wrap">



        <!-- カテゴリーの出力 -->
        <div class="news_tab"><?php the_category(); ?> </div>
        <a href="<?php the_permalink(); ?>">
            <div class="news_title">
                <p>
                    <!-- 投稿日時表示 -->
                    <?php the_time('Y年m月d日'); ?>
                </p>

                <!-- タイトルの出力 -->
                <p><?php the_title(); ?></p>
            </div>
            <!-- 抜粋の出力 -->
            <div class="card3_text">

                <p><?php echo mb_substr(get_the_excerpt(), 0, 55) . '･･･'; ?></p>

            </div>
        </a>
    </div>



</article>
