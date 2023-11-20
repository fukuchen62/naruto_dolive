<?php get_header(); ?>
<h2>Q&Aです</h2>
<main>
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
                            <?php get_template_part('template-parts/loop', 'news'); ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif ?>
            </div><!-- sec_header -->
        </div><!-- container -->
    </section>

</main>
<?php get_footer(); ?>