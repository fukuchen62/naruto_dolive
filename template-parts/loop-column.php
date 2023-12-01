<!-- 投稿の個別ページのURLを表示し、以下の内容をリンクにする-->
<a href="<?php the_permalink(); ?>">
    <div class="card1_content">
        <!-- アイキャッチ画像の表示 -->
        <div class="card1_img">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium'); ?>
            <?php else : ?>
                <img src="<?php get_template_directory_uri() ?>/assets/img/running_around.png" alt="no-image">
            <?php endif; ?>
        </div>
        <h4><?php echo mb_substr(get_the_title(), 0, 11) . '･･･'; ?></h4>

        <div class="taxonomy_box">

            <?php
            $taxonomies = get_taxonomies(); // すべてのタクソノミーを取得

            foreach ($taxonomies as $taxonomy) {
                $terms = get_the_terms(get_the_ID(), $taxonomy);
                if ($terms && !is_wp_error($terms)) {
                    echo '<ul>';
                    foreach ($terms as $term) {
                        echo '<li><a href="' . get_term_link($term) . '">' . $term->name . '</a></li>';
                    }
                    echo '</ul>';
                }
            }
            ?>

        </div>

        <!-- 抜粋の表示 -->
        <div class="card1_text">
            <?php echo mb_substr(get_the_excerpt(), 0, 55) . '･･･'; ?>
        </div>
    </div>
</a><!-- リンク -->
