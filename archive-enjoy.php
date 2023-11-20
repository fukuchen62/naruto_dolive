<?php get_header(); ?>
<main>
    <h1>========『目的別一覧』========</h1>
    <!-- パンくずリスト -->
    <?php get_template_part('template-parts/breadcrumb'); ?>
    <h1>【遊ぶ】</h1>

    <p>[ここに地図が入ります]</p>
    <p>カテゴリ別</p>
    <h3><a href="<?php echo home_url('/eat') ?>">食べる(10件)</a></h3>
    <h3><a href="<?php echo home_url('/enjoy') ?>">遊ぶ(10件)</a></h3>
    <h3><a href="<?php echo home_url('/tour') ?>">観光(10件)</a></h3>
    <h3><a href="<?php echo home_url('/stay') ?>">宿泊(10件)</a></h3>

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