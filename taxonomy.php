<?php get_header(); ?>

<!-- パンくずリスト -->
<?php get_template_part('template-parts/breadcrumb'); ?>

<main>
    <!-- 開いているページの情報を取得 -->
    <?php
    //メインクエリが持つクエリ変数を取得(eat_type=食べるの種類)
    $eat_type_slug = get_query_var('eat_type');
    //タクソノミーが'eat_type'のうち、slugが$eat_type_slugを取得する
    $eat_type = get_term_by('slug', $eat_type_slug, 'eat_type');
    ?>

    <section>
        <!-- 選択したタクソノミーを表示 -->
        <h2><?php single_term_title(''); ?>の一覧ページ（タクソノミーごとに全表示されます）</h2>

        <!-- 記事がある分表示させる -->
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div>
                    <!-- ここに内容を表示させる -->
                    <?php get_template_part('template-parts/loop', 'content'); ?>
                </div>
            <?php endwhile; ?>
        <?php endif ?>
    </section>
</main>
<?php get_footer(); ?>
