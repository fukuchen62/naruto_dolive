<div class="article_wrap">

    <!-- カテゴリーの出力 -->
    <div class="news_tab">
        <?php
        $categories = get_the_category();
        if ($categories) {
            foreach ($categories as $category) {
                echo esc_html($category->name); // カテゴリー名のみ出力
            }
        }
        ?>
    </div>

    <div class="news_title">
        <p>
            <!-- 投稿日時表示 -->
            <?php the_time('Y年m月d日'); ?>
        </p>

        <!-- タイトルの出力 -->
        <p><?php the_title(); ?></p>
    </div>
    <!-- 抜粋の出力 -->
    <div class="card1_text">

        <p><?php echo mb_substr(get_the_excerpt(), 0, 60); ?></p>

    </div>

</div>