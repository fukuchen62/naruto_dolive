<article id="post-<?php the_ID(); ?>" <?php post_class('news'); ?>>
    <div class="news_pic">
        <a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium'); ?>
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage_600x400.png" alt="">
            <?php endif; ?>
        </a>
    </div>
    <div class="news_meta">
        <?php the_category();  ?>
        <ul class="post-categories">
        </ul>
        <time class="news_time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
    </div>
    <h2 class="news_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="news_desc">
        <p><?php the_excerpt(); ?></p>
        <h2><?php the_field('eat_type'); ?></h2>
        <h2><?php the_field('tour_type'); ?></h2>
        <p><a href="<?php the_permalink(); ?>">[続きを読む]</a></p>
    </div>
</article>