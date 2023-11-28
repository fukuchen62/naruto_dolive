<article id="post-<?php the_ID(); ?>" <?php post_class('news'); ?>>
    <div>
        <!-- サムネあれば出力 -->
        <a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium'); ?>
            <?php else : ?>
                <!-- 実装するか未定 -->

            <?php endif; ?>
        </a>
    </div>

    <!-- カテゴリーの出力 -->
    <div class="news_tab"><?php the_category(); ?> </div>
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

        <p><a href="<?php the_permalink(); ?>"><?php echo mb_substr(get_the_excerpt(), 0, 55) . '･･･' . '[続きを読む]'; ?></a></p>

    </div>


</article>
