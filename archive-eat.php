<?php get_header(); ?>

<!-- パンくずリスト -->
<?php get_template_part('template-parts/breadcrumb'); ?>


<main>
    <h1>【食べる】</h1>

    <!-- タクソノミーを指定して配列のターム情報を取得する -->
    <!-- タクソノミーのタイトルの取得 -->
    <?php
    $eat_types = get_terms(array('taxonomy' => 'eat_type'));
    if (!empty($eat_types)) :
    ?>
        <?php foreach ($eat_types as $eat_type) : ?>

            <h2><?php echo $eat_type->name ?></h2>



            <section>
                <div class="container">
                    <div class="map_sideber">
                        <!-- ここに地図とボタンが入る -->
                    </div><!-- map_sideber -->
                    <div class="contents">
                        <!-- ここに一覧が入る -->


                        <?php
                        //食べるの投稿タイプ
                        $args = array(
                            'post_type' => 'eat',
                            'post_per_page' => 3,
                        );
                        //料理の種類で絞り込む
                        $eattax = array('relation' => 'AND');
                        $eattax[] = array(
                            'taxonomy' => 'eat_type',
                            'terms' => $eat_type->slug,
                            'field' => 'slug',
                        );
                        $args['tax_query'] = $eattax;

                        $the_query = new WP_Query($args);

                        //記事があればある分だけループさせる
                        if ($the_query->have_posts()) :
                        ?>
                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                                <div>
                                    <!-- ここに内容を表示させる -->
                                    <?php get_template_part('template-parts/loop', 'eat'); ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif ?>
                    </div><!-- contents -->
                </div><!-- container -->
            </section>

        <?php endforeach; ?>
    <?php endif; ?>

</main>

<?php get_footer(); ?>
