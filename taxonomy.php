<?php get_header(); ?>

<!-- パンくずリスト -->
<?php get_template_part('template-parts/breadcrumb'); ?>

<main>
    <section>
        <!-- 選択したタクソノミーを表示 -->
        <h2><?php single_term_title(''); ?>の一覧ページ（全表示）</h2>

        <!-- 記事がある分表示させる -->
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div>
                    <!-- ここに内容を表示させる -->
                    <?php get_template_part('template-parts/loop', 'eat'); ?>
                </div>
            <?php endwhile; ?>
        <?php endif ?>
    </section>
</main>
<?php get_footer(); ?>