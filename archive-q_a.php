<?php get_header(); ?>
<h2>Q&Aです</h2>
<!-- パンくずリスト -->
<?php get_template_part('template-parts/breadcrumb'); ?>
<main>
    <section>
        <div class="container">
            <div>
                <!-- ここに地図とボタンが入る -->
            </div>
            <div>
                <!-- ここに一覧が入る -->
                <!-- 記事があればある分だけループさせる -->
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div>
                            <?php the_title(); ?>

                            <h2><?php the_field('question'); ?></h2>
                            <p><?php the_field('answer'); ?></p>


                        </div>
                    <?php endwhile; ?>
                <?php endif ?>
            </div><!-- sec_header -->
        </div><!-- container -->
    </section>

</main>
<?php get_footer(); ?>