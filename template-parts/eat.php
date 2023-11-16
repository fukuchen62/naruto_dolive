<article id="post-<?php the_ID(); ?>" <?php post_class('news'); ?>>
    <div class="news_meta">
        <?php the_category();  ?>

        <time class="news_time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
    </div>





    <!-- 投稿の個別ページのURLを表示する -->
    <a href="<?php the_permalink(); ?>">
        <!-- アイキャッチ画像の表示 -->
        <figure class="pic">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium'); ?>
            <?php endif; ?>
        </figure>

        <!-- タイトルの表示 -->
        <h2 class="title"><?php the_title(); ?></h2>
    </a>

    <!-- 抜粋の表示 -->
    <div class="desc">
        <p><?php the_excerpt(); ?></p>
    </div>


</article>