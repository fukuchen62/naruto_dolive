<article id="post-<?php the_ID(); ?>" <?php post_class('news'); ?>>
    <div>
        <!-- サムネあれば出力 -->
        <a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium'); ?>
            <?php else : ?>
                <!-- 実装するか未定 -->
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage_600x400.png" alt="">
            <?php endif; ?>
        </a>
    </div>

    <!-- カテゴリーの出力 -->
    <span><?php the_category(); ?> </span>

    <div>
        <!-- 投稿日時表示 -->
        <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
    </div>

    <!-- タイトル、抜粋の出力 -->
    <h2><?php the_title(); ?></h2>
    <div>
        <p><?php the_excerpt(); ?></p>
        <p><a href="<?php the_permalink(); ?>">[続きを読む]</a></p>
    </div>
</article>