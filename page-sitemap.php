<?php


get_header();

?>



<main>
    <section id="toparea" class="toparea">
        <h2>サイトマップ</h2>
    </section>
    <div class="main_wrap">
        <div class="breadcrumb">HOME > サイトマップ</div>
        <div class="menu_wrap">
            <h3 class="sitemap_btn"><span>TOP</span></h3>
            <h3 class="sitemap_btn"><span>コースで探す</span></h3>
            <ul class="sitemap_list">
                <?php
                $args = array(
                    'post_type' => 'cource',
                    'posts_per_page' => -1 // 全ての投稿を表示
                );

                $the_query = new WP_Query($args);

                if ($the_query->have_posts()) {
                    echo '<ul>';
                    while ($the_query->have_posts()) {
                        $the_query->the_post();
                        echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
                    }
                    echo '</ul>';
                }

                ?>

                <li><a href="">Aコース</a></li>
                <li><a href="#">Bコース</a></li>
                <li><a href="#">Cコース</a></li>
                <li><a href="#">Dコース</a></li>
                <li><a href="#">Eコース</a></li>
            </ul>
            <h3 class="sitemap_btn"><span>目的で探す</span></h3>
            <h4><a href="<?php echo home_url('/eat') ?>">食べる</a></h4>
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
            <h4><a href="<?php echo home_url('/enjoy') ?>">遊ぶ</a></h4>
            <h4><a href="<?php echo home_url('/tour') ?>">観光</a></h4>
            <h4><a href="<?php echo home_url('/stay') ?>">宿泊</a></h4>
            <ul class="sitemap_list">
                <?php $tour_types = get_terms(array('taxonomy' => 'tour_type'));
                if (!empty($tour_types)) : ?>
                    <?php foreach ($tour_types as $tour_type) : ?>
                        <li><a href="<?php echo esc_url(get_term_link($tour_type)); ?>"><?php echo esc_html($tour_type->name); ?></a></li>



                    <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <!-- <li><a href="#">自然</a></li>
                <li><a href="#">アート・カルチャー</a></li>
                <li><a href="#">歴史・文化</a></li>
                <li><a href="#">寺院・神社</a></li>
                <li><a href="#">公園</a></li> -->
        </ul>
        <h3 class="sitemap_btn"><span>新着情報</span></h3>
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
    <h3 class="sitemap_btn"><span>コラム</span></h3>
    <ul class="sitemap_list">

        <?php $column_types = get_terms(array('taxonomy' => 'column_type', 'orderby' => 'name', 'order' => 'desc'));
        if (!empty($column_types)) : ?>

            <?php foreach ($column_types as $column_type) : ?>
                <li><a href="<?php echo esc_url(get_term_link($column_type)); ?>"><?php echo esc_html($column_type->name); ?></a></li>



            <?php endforeach; ?>
    </ul>
<?php endif; ?>


<ul class="sitemap_list u_content">
    <li><a href="https://www.instagram.com/narutodolive/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA%3D%3D">インスタ</a></li>
    <li><a href="<?php echo home_url('/mypage') ?>">マイページ</a></li>
    <li><a href="<?php echo home_url('/q_a') ?>">Q &amp; A</a></li>
</ul>
        </div>


    </div>
</main>
<div class="button">
</div>
<script src="../assets/js/common.js"></script>
</body>

</html>


<?php
get_footer();
