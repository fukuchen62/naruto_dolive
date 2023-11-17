<article id="post-<?php the_ID(); ?>" <?php post_class('news'); ?>>
    <div class="news_meta">
        <?php the_category();  ?>
    </div>





    <!-- 投稿の個別ページのURLを表示する -->
    <a href="<?php the_permalink(); ?>">
        <!-- アイキャッチ画像の表示 -->
        <figure class="pic">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium'); ?>
            <?php endif; ?>
        </figure>
    </a>
    <!-- タイトルの表示 -->
    <h3 class="title"><?php the_title(); ?></h3>

    <!-- 抜粋の表示 -->
    <span><?php the_field('excerpt'); ?></span>



    <!-- ここにアイコンが入ります -->



</article>
