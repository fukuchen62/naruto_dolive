<?php get_header(); ?>

<!-- パンくずリスト -->
<?php get_template_part('template-parts/breadcrumb'); ?>


<main>

    <?php
    $kinds = get_terms(array('taxonomy' => 'kind'));
    if (!empty($kinds)) :
    ?>
        <?php foreach ($kinds as $kind) : ?>

            <section>
                <div class="container">
                    <div class="sec_header">
                        <!-- ここに地図とボタンが入る -->
                    </div>
                    <div>
                        <!-- ここに一覧が入る -->
                        <!-- 記事があればある分だけループさせる -->
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>





                                <div>
                                    <!-- ここに内容を表示させる -->
                                    <?php get_template_part('template-parts/loop', 'eat'); ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif ?>
                    </div><!-- sec_header -->
                </div><!-- container -->
            </section>

        <?php endforeach; ?>
    <?php endif; ?>

</main>

<?php get_footer(); ?>