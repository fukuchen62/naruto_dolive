<?php get_header(); ?>
<main>
    <h1>========『目的別一覧』========</h1>
    <!-- パンくずリスト -->
    <?php get_template_part('template-parts/breadcrumb'); ?>
    <h1>【観光】</h1>

    <p>[ここに地図が入ります]</p>
    <p>カテゴリ別</p>
    <h3>
        <a href="<?php echo home_url('/eat') ?>">
            食べる(
            <?php
            $count_custom = wp_count_posts('eat');
            $num = $count_custom->publish;
            echo $num; ?>件 )
        </a>
    </h3>

    <h3>
        <a href="<?php echo home_url('/enjoy') ?>">
            遊ぶ(
            <?php
            $count_custom = wp_count_posts('enjoy');
            $num = $count_custom->publish;
            echo $num; ?>件 )
        </a>
    </h3>

    <h3>
        <a href="<?php echo home_url('/tour') ?>">
            観光(
            <?php
            $count_custom = wp_count_posts('tour');
            $num = $count_custom->publish;
            echo $num; ?>件 )
        </a>
    </h3>

    <h3>
        <a href="<?php echo home_url('/stay') ?>">
            宿泊(
            <?php
            $count_custom = wp_count_posts('stay');
            $num = $count_custom->publish;
            echo $num; ?>件 )
        </a>
    </h3>





    <!-- タクソノミーを指定して配列のターム情報を取得する -->
    <!-- タクソノミーのタイトルの取得 -->
    <?php

    $tour_types = get_terms(array('taxonomy' => 'tour_type'));
    if ($tour_types) :
    ?>
        <?php foreach ($tour_types as $tour_type) : ?>

            <h2><?php echo $tour_type->name ?></h2>



            <section>
                <div class="container">
                    <div class="map_sideber">
                        <!-- ここに地図とボタンが入る -->
                    </div><!-- map_sideber -->
                    <div class="contents">
                        <!-- ここに一覧が入る -->


                        <?php
                        //観光の投稿タイプ
                        $args = array(
                            'post_type' => 'tour',
                            'post_per_page' => 3,
                        );
                        //観光の種類で絞り込む
                        $tourtax = array('relation' => 'AND');
                        $tourtax[] = array(
                            'taxonomy' => 'tour_type',
                            'terms' => $tour_type->slug,
                            'field' => 'slug',
                        );
                        $args['tax_query'] = $tourtax;

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

    <!-- サイドバー -->
    <h2>以下サイドバーです</h2>
    <aside>
        <div>
            <h3>カテゴリー一覧</h3>
            <ul>
                <?php
                $categories = get_categories(array(
                    'taxonomy' => 'tour_type',
                    'orderby' => 'name',
                    'order' => 'ASC',
                    'hide_empty' => false,
                ));

                foreach ($categories as $category) {
                    echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
                }
                ?>
            </ul>
        </div>


    </aside>

</main>

<?php get_footer(); ?>
