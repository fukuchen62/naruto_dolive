<?php


get_header();

?>



<main>
    <h2>サイトマップ</h2>
    </section>
    <div class="main_wrap">
        <div class="breadcrumb"><?php get_template_part('template-parts/breadcrumb'); ?></div>
        <div class="content_wrap">
            <div class="menu_wrap">
                <h3 class="sitemap_btn"> <a href="<?php echo home_url('/') ?>">TOP</a></h3>
                <h4 class="sitemap_table">コース別一覧</h4>
                <ul class="sitemap_list">
                    <?php
                    $args = array(
                        'post_type' => 'course',
                        'posts_per_page' => -1,
                        'orderby' => 'name', 'order' => 'asc'
                    );

                    // WP_Queryインスタンスを作成
                    $course_query = new WP_Query($args);

                    // ループ開始
                    if ($course_query->have_posts()) :
                        while ($course_query->have_posts()) :
                            $course_query->the_post();
                    ?>
                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> <!-- タイトルをリンクとして表示 -->
                    <?php
                        endwhile;
                    endif;

                    // ポストデータをリセット
                    wp_reset_postdata();
                    ?>
                </ul>
                <h4 class="sitemap_table">目的別一覧</h4>
                <h5><a href="<?php echo home_url('/eat') ?>">食べる</a></h5>
                <?php $eat_types = get_terms(array('taxonomy' => 'eat_type'));
                if (!empty($eat_types)) : ?>
                    <ul class="sitemap_list">
                        <?php foreach ($eat_types as $eat_type) : ?>
                            <li><a href="<?php echo esc_url(get_term_link($eat_type)); ?>"><?php echo esc_html($eat_type->name); ?></a></li>


                            <!-- <li><a href="#">洋食</a></li>
                        <li><a href="#">中華</a></li>
                        <li><a href="#">スイーツ</a></li>
                        <li><a href="#">その他</a></li> -->
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                </ul>
                <h5><a href="<?php echo home_url('/enjoy') ?>">遊ぶ</a></h5>
                <h5><a href="<?php echo home_url('/tour') ?>">観光</a></h5>
                <ul class="sitemap_list">
                    <?php $tour_types = get_terms(array('taxonomy' => 'tour_type'));
                    if (!empty($tour_types)) : ?>
                        <?php foreach ($tour_types as $tour_type) : ?>
                            <li><a href="<?php echo esc_url(get_term_link($tour_type)); ?>"><?php echo esc_html($tour_type->name); ?></a></li>



                        <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <h5><a href="<?php echo home_url('/stay') ?>">宿泊</a></h5>
            <!-- <li><a href="#">自然</a></li>
                <li><a href="#">アート・カルチャー</a></li>
                <li><a href="#">歴史・文化</a></li>
                <li><a href="#">寺院・神社</a></li>
                <li><a href="#">公園</a></li> -->
            </ul>
            <h3 class="sitemap_btn"> <?php
                                        $news = get_term_by('slug', 'news', 'category');
                                        $news_link = get_term_link($news, 'category');
                                        ?>
                <a href="<?php echo $news_link; ?>">新着情報</a>
            </h3>
            <ul class="sitemap_list">
                <?php
                $categories = get_categories(array(
                    'type'      => 'post',
                    'orderby'   => 'name',
                    'order'     => 'ASC'
                ));

                if (!empty($categories)) :

                    foreach ($categories as $category) : ?>
                        <li><a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"><?php echo esc_html($category->name); ?></a></li>

                    <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <h3 class="sitemap_btn"><a href="<?php echo home_url('/column') ?>">コラム</a></h3>
        <ul class="sitemap_list">

            <?php $column_types = get_terms(array('taxonomy' => 'column_type', 'orderby' => 'name', 'order' => 'desc'));
            if (!empty($column_types)) : ?>

                <?php foreach ($column_types as $column_type) : ?>
                    <li><a href="<?php echo esc_url(get_term_link($column_type)); ?>"><?php echo esc_html($column_type->name); ?></a></li>



                <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <hr>

    <ul class="sitemap_list u_content">
        <li><a href="https://www.instagram.com/narutodolive/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA%3D%3D" target="_blank">インスタ</a></li>
        <li><a href="<?php echo home_url('/mypage') ?>">マイページ</a></li>
        <li><a href="<?php echo home_url('/q_a') ?>">Q &amp; A</a></li>
    </ul>
            </div>

        </div>
    </div>
</main>
<div class="button">
</div>
</body>

</html>


<?php
get_footer();
