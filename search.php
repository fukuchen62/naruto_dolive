<?php get_header(); ?>

<body>
    <div id="stkr" class="sp_none"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/maincar_icon.png" alt="" class="car_img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/exhaust_fumes.gif" alt="" class="gas"></div>
    <main>
        <section id="toparea" class="toparea">
            <h2>文字列：の検索結果</h2>
        </section>
        <div class="main_wrap">
            <div class="breadcrumb"><?php get_template_part('template-parts/breadcrumb'); ?></div>
            <div class="archive_col">
                <div class="center_title">
                    <?php
                    $search_term = get_search_query();
                    $post_types = array('enjoy');
                    $found_posts = false;
                    $total_hits = 0;
                    foreach ($post_types as $post_type) {
                        $args = array(
                            'post_type' => $post_type,
                            's' => $search_term,
                            'posts_per_page' => -1
                        );
                        $query = new WP_Query($args);
                        $hits = $query->found_posts;
                        $total_hits += $hits;
                        $post_type_obj = get_post_type_object($post_type); ?>
                        <h3 class="middle_title">遊ぶの結果(<?= $hits ?>)</h3>
                </div>
                <div class="card_3col">
                    <?php if ($query->have_posts()) {
                            $found_posts = true;
                            while ($query->have_posts()) {
                                $query->the_post();
                                get_template_part('template-parts/loop', 'content');
                    ?>
                    <?php
                            } // while ループの終了
                        } // if ($query->have_posts()) の終了
                        wp_reset_postdata();
                    ?>
                <?php
                    }
                ?>
                <!-- <a href="single_eat.html" class="card_item">
                <div class="card_wrap1">
                    <div class="card_wrap2">
                        <div class="thumbnail_img">
                            <img src="../assets/img/eat_sample_img.jpg" alt="サムネイル">
                        </div>
                        <h4>麺王</h4>
                        <div class="card_text">600～1000円・昼夜・年齢制限なし</div>
                        <div class="card_icon">
                            <img src="../assets/img/noon_ico.png" alt="昼アイコン">
                            <img src="../assets/img/night_ico.png" alt="夜アイコン">
                            <img src="../assets/img/parking_ico.png" alt="駐車場アイコン">
                            <img src="../assets/img/smoking_ico.png" alt="喫煙所アイコン">
                            <img src="../assets/img/reservation_ico.png" alt="予約アイコン">
                        </div>
                    </div>
                </div>
            </a>
            <a href="single_eat.html" class="card_item">
                <div class="card_wrap1">
                    <div class="card_wrap2">
                        <div class="thumbnail_img">
                            <img src="../assets/img/eat_sample_img.jpg" alt="サムネイル">
                        </div>
                        <h4>麺王</h4>
                        <div class="card_text">600～1000円・昼夜・年齢制限なし</div>
                        <div class="card_icon">
                            <img src="../assets/img/noon_ico.png" alt="昼アイコン">
                            <img src="../assets/img/night_ico.png" alt="夜アイコン">
                            <img src="../assets/img/parking_ico.png" alt="駐車場アイコン">
                            <img src="../assets/img/smoking_ico.png" alt="喫煙所アイコン">
                            <img src="../assets/img/reservation_ico.png" alt="予約アイコン">
                        </div>
                    </div>
                </div>
            </div>
            </a>
            <a href="single_eat.html" class="card_item">
                <div class="card_wrap1">
                    <div class="card_wrap2">
                        <div class="thumbnail_img">
                            <img src="../assets/img/eat_sample_img.jpg" alt="サムネイル">
                        </div>
                        <h4>麺王</h4>
                        <div class="card_text">600～1000円・昼夜・年齢制限なし</div>
                        <div class="card_icon">
                            <img src="../assets/img/noon_ico.png" alt="昼アイコン">
                            <img src="../assets/img/night_ico.png" alt="夜アイコン">
                            <img src="../assets/img/parking_ico.png" alt="駐車場アイコン">
                            <img src="../assets/img/smoking_ico.png" alt="喫煙所アイコン">
                            <img src="../assets/img/reservation_ico.png" alt="予約アイコン">
                        </div>
                    </div>
            }
        }
        if (!$found_posts && !have_posts()) {
            echo '<p>"<strong>' . esc_html($search_term) . '</strong>"で検索した結果、該当する記事がありませんでした。</p>';
            echo '<p><a href="' . get_home_url() . '">トップページに戻る</a></p>';
        }
        ?>

            <a href="single_eat.html" class="card_item">
                <div class="card_wrap1">
                    <div class="card_wrap2">
                        <div class="thumbnail_img">
                            <img src="../assets/img/eat_sample_img.jpg" alt="サムネイル">
                        </div>
                        <h4>麺王</h4>
                        <div class="card_text">600～1000円・昼夜・年齢制限なし</div>
                        <div class="card_icon">
                            <img src="../assets/img/noon_ico.png" alt="昼アイコン">
                            <img src="../assets/img/night_ico.png" alt="夜アイコン">
                            <img src="../assets/img/parking_ico.png" alt="駐車場アイコン">
                            <img src="../assets/img/smoking_ico.png" alt="喫煙所アイコン">
                            <img src="../assets/img/reservation_ico.png" alt="予約アイコン">
                        </div>
                    </div>
                </div>
            </a> -->
                </div>
            </div>
            <div class="archive_col">
                <div class="center_title">
                    <?php
                    $search_term = get_search_query();
                    $post_types2 = array('eat');
                    $found_posts2 = false;
                    $total_hits2 = 0;
                    foreach ($post_types2 as $post_type2) {
                        $args = array(
                            'post_type' => $post_type2,
                            's' => $search_term,
                            'posts_per_page' => -1
                        );
                        $query2 = new WP_Query($args);
                        $eat_hits = $query2->found_posts;
                        $total_hits2 += $eat_hits;
                        $post_type_obj = get_post_type_object($post_type2);
                    ?>
                        <h3 class="middle_title">食べるの結果(<?= $eat_hits ?>)</h3>
                </div>
                <div class="card_3col">
                    <?php if ($query2->have_posts()) {
                            $found_posts2 = true;
                            while ($query2->have_posts()) {
                                $query2->the_post();
                                get_template_part('template-parts/loop', 'content');
                    ?>
                    <?php
                            } // while ループの終了
                        } // if ($query->have_posts()) の終了
                        wp_reset_postdata();
                    ?>
                <?php
                    }
                ?>
                <!-- <a href="single_eat.html" class="card_item">
                <div class="card_wrap1">
                    <div class="card_wrap2">
                        <div class="thumbnail_img">
                            <img src="../assets/img/eat_sample_img.jpg" alt="サムネイル">
                        </div>
                        <h4>麺王</h4>
                        <div class="card_text">600～1000円・昼夜・年齢制限なし</div>
                        <div class="card_icon">
                            <img src="../assets/img/noon_ico.png" alt="昼アイコン">
                            <img src="../assets/img/night_ico.png" alt="夜アイコン">
                            <img src="../assets/img/parking_ico.png" alt="駐車場アイコン">
                            <img src="../assets/img/smoking_ico.png" alt="喫煙所アイコン">
                            <img src="../assets/img/reservation_ico.png" alt="予約アイコン">
                        </div>
                    </div>
                </div>
            </a> -->
                </div>
            </div>
        </div>
    </main>
    <script src="../assets/js/common.js"></script>
</body>

</html>
<?php wp_reset_postdata();
?>

<?php get_footer(); ?>
