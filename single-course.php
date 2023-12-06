<?php get_header(); ?>


<main>
    <h2 id="toparea" class="toparea_course">ドライブコース</h2>
    <div class="main_wrap">
        <h3 class="course_title"><?php the_title() ?></h3>

        <div class="course_map">
            <!-- googlemap -->
            <div class="map">
                <?php the_field('iframe'); ?>
            </div>
        </div>

        <hr />

        <section class="course_text">
            <h3>コース説明</h3>
            <p>
                <?php the_field('excerpt'); ?>
            </p>
        </section>

        <div class="course_wrap">
            <div class="travel_time_content">
                <div class="coordinate">
                    <div class="car_wrap">
                        <img class="car" src="<?php echo get_template_directory_uri(); ?>/assets/img/car.png" alt="所要時間" />
                        <h4 class="req_time"></h4>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg_course_road.png" alt="コース道路" />
                </div>
            </div>

            <div class="course_details course_a">
                <!-- ←ここでcourse名追記 -->

                <!-- 1枚目のカード -->
                <?php
                $start_time = get_field('start_time');
                $stay_time1 = get_field('stay_time1');
                ?>
                <a href="<?php echo get_field('page_link'); ?>">
                    <div class="course_details_card">
                        <div class="course_imgbox">
                            <?php
                            $pic1 = get_field('spot1_thum');
                            //大サイズ画像のURL
                            $pic1_url = $pic1['sizes']['medium'];
                            ?>
                            <img src="<?php echo $pic1_url ?>" alt="掲載写真">
                        </div>
                        <div>
                            <p class="course_facility"><?php the_field('spot1_title'); ?></p>
                            <p class="course_facility_info"><?php the_field('spot1_excerpt'); ?></p>
                        </div>
                    </div>
                </a>

                <!-- 2枚目のカード -->
                <?php
                $move_time2 = get_field('move_time2');
                $stay_time2 = get_field('stay_time2');
                ?>
                <a href="<?php echo get_field('page_link2'); ?>">
                    <div class="course_details_card">
                        <div class="course_imgbox">
                            <?php
                            $pic2 = get_field('spot2_thum');
                            //大サイズ画像のURL
                            $pic2_url = $pic2['sizes']['medium'];
                            ?>
                            <img src="<?php echo $pic2_url ?>" alt="掲載写真">
                        </div>
                        <div>
                            <p class="course_facility"><?php the_field('spot2_title');
                                                        echo '：' . $stay_time2; ?></p>
                            <p class="course_facility_info"><?php the_field('spot2_excerpt'); ?></p>
                        </div>
                    </div>
                </a>

                <!-- 3枚目からはあれば出力 -->
                <?php
                $page_link3 = get_field('page_link3');
                $spot3_thum = get_field('spot3_thum');
                $spot3_title = get_field('spot3_title');
                $spot3_excerpt = get_field('spot3_excerpt');
                $move_time3 = get_field('move_time3');
                $stay_time3 = get_field('stay_time3');


                if ($page_link3 && $spot3_thum && $spot3_title && $spot3_excerpt) {
                    $pic3_url = $spot3_thum['sizes']['medium'];
                ?>
                    <a href="<?php echo $page_link3 ?>">
                        <div class="course_details_card">
                            <div class="course_imgbox">
                                <img src="<?php echo $pic3_url ?>" alt="掲載写真">
                            </div>
                            <div>
                                <p class="course_facility"><?php the_field('spot3_title');
                                                            echo '：' . $stay_time3; ?></p>
                                <p class="course_facility_info"><?php echo $spot3_excerpt ?></p>
                            </div>
                        </div>
                    </a>
                <?php
                }
                ?>

                <!-- 4枚目のカード -->
                <?php
                $page_link4 = get_field('page_link4');
                $spot4_thum = get_field('spot4_thum');
                $spot4_title = get_field('spot4_title');
                $spot4_excerpt = get_field('spot4_excerpt');
                $move_time4 = get_field('move_time4');
                $stay_time4 = get_field('stay_time4');

                if ($page_link4 && $spot4_thum && $spot4_title && $spot4_excerpt) {
                    $pic1_url = $spot4_thum['sizes']['medium'];
                ?>
                    <a href="<?php echo $page_link4 ?>">
                        <div class="course_details_card">
                            <div class="course_imgbox">
                                <img src="<?php echo $pic1_url ?>" alt="掲載写真">
                            </div>
                            <div>
                                <p class="course_facility"><?php the_field('spot4_title');
                                                            echo '：' . $stay_time4; ?></p>
                                <p class="course_facility_info"><?php echo $spot4_excerpt ?></p>
                            </div>
                        </div>
                    </a>
                <?php
                }
                ?>
                <!-- 5枚目のカード -->

                <?php
                $page_link5 = get_field('page_link5');
                $spot5_thum = get_field('spot5_thum');
                $spot5_title = get_field('spot5_title');
                $spot5_excerpt = get_field('spot5_excerpt');
                $move_time5 = get_field('move_time5');
                $stay_time5 = get_field('stay_time5');

                if ($page_link5 && $spot5_thum && $spot5_title && $spot5_excerpt) {
                    $pic5_url = $spot5_thum['sizes']['medium'];
                ?>
                    <a href="<?php echo $page_link5 ?>">
                        <div class="course_details_card">
                            <div class="course_imgbox">
                                <img src="<?php echo $pic5_url ?>" alt="掲載写真">
                            </div>
                            <div>
                                <p class="course_facility"><?php the_field('spot5_title');
                                                            echo '：' . $stay_time5; ?></p>
                                <p class="course_facility_info"><?php echo $spot5_excerpt ?></p>
                            </div>
                        </div>
                    </a>
                <?php
                }
                ?>

                <!-- 6枚目のカード -->
                <?php
                $page_link6 = get_field('page_link6');
                $spot6_thum = get_field('spot6_thum');
                $spot6_title = get_field('spot6_title');
                $spot6_excerpt = get_field('spot6_excerpt');
                $move_time6 = get_field('move_time6');
                $stay_time6 = get_field('stay_time6');

                if ($page_link6 && $spot6_thum && $spot6_title && $spot6_excerpt) {
                    $pic6_url = $spot6_thum['sizes']['medium'];
                ?>
                    <a href="<?php echo $page_link6 ?>">
                        <div class="course_details_card">
                            <div class="course_imgbox">
                                <img src="<?php echo $pic6_url ?>" alt="掲載写真">
                            </div>
                            <div>
                                <p class="course_facility"><?php the_field('spot6_title');
                                                            echo '：' . $stay_time6; ?></p>
                                <p class="course_facility_info"><?php echo $spot6_excerpt ?></p>
                            </div>
                        </div>
                    </a>
                <?php
                }
                ?>

                <!-- 7枚目のカード -->
                <?php
                $page_link7 = get_field('page_link7');
                $spot7_thum = get_field('spot7_thum');
                $spot7_title = get_field('spot7_title');
                $spot7_excerpt = get_field('spot7_excerpt');
                $move_time7 = get_field('move_time7');
                $stay_time7 = get_field('stay_time7');

                if ($page_link7 && $spot7_thum && $spot7_title && $spot7_excerpt) {
                    $pic7_url = $spot7_thum['sizes']['medium'];
                ?>
                    <a href="<?php echo $page_link7 ?>">
                        <div class="course_details_card">
                            <div class="course_imgbox">
                                <img src="<?php echo $pic7_url ?>" alt="掲載写真">
                            </div>
                            <div>
                                <p class="course_facility"><?php the_field('spot7_title');
                                                            echo '：' . $stay_time7; ?></p>
                                <p class="course_facility_info"><?php echo $spot7_excerpt ?></p>
                            </div>
                        </div>
                    </a>
                <?php
                }
                ?>
                <!-- 8枚目のカード -->
                <?php
                $page_link8 = get_field('page_link8');
                $spot8_thum = get_field('spot8_thum');
                $spot8_title = get_field('spot8_title');
                $spot8_excerpt = get_field('spot8_excerpt');
                $move_time8 = get_field('move_time8');
                $stay_time8 = get_field('stay_time8');

                if ($page_link8 && $spot8_thum && $spot8_title && $spot8_excerpt) {
                    $pic8_url = $spot8_thum['sizes']['medium'];
                ?>
                    <a href="<?php echo $page_link8 ?>">
                        <div class="course_details_card">
                            <div class="course_imgbox">
                                <img src="<?php echo $pic8_url ?>" alt="掲載写真">
                            </div>
                            <div>
                                <p class="course_facility"><?php the_field('spot8_title');
                                                            echo '：' . $stay_time8; ?></p>
                                <p class="course_facility_info"><?php echo $spot8_excerpt ?></p>
                            </div>
                        </div>
                    </a>
                <?php
                }
                ?>

                <!-- 9枚目のカード -->
                <?php
                $page_link9 = get_field('page_link9');
                $spot9_thum = get_field('spot9_thum');
                $spot9_title = get_field('spot9_title');
                $spot9_excerpt = get_field('spot9_excerpt');
                $move_time9 = get_field('move_time9');
                $stay_time9 = get_field('stay_time9');

                if ($page_link9 && $spot9_thum && $spot9_title && $spot9_excerpt) {
                    $pic9_url = $spot9_thum['sizes']['medium'];
                ?>
                    <a href="<?php echo $page_link9 ?>">
                        <div class="course_details_card">
                            <div class="course_imgbox">
                                <img src="<?php echo $pic9_url ?>" alt="掲載写真">
                            </div>
                            <div>
                                <p class="course_facility"><?php the_field('spot9_title');
                                                            echo '：' . $stay_time9; ?></p>
                                <p class="course_facility_info"><?php echo $spot9_excerpt ?></p>
                            </div>
                        </div>
                    </a>
                <?php
                }
                ?>
            </div>
        </div>

        <!-- 線2 -->
        <hr />
        <section class="recommend_noflex">
            <!-- タイトル -->
            <h3>他のおすすめコース</h3>

            <?php
            // 現在の投稿のIDを取得
            $current_post_id = get_the_ID();

            // 同じ投稿タイプの投稿を取得
            $args = array(
                'post_type'      => 'course', // カスタム投稿タイプのスラッグを指定
                'posts_per_page' => 4, // 表示する投稿の数を指定
                'post__not_in'   => array($current_post_id) // 現在の投稿を除外
            );
            $related_posts = new WP_Query($args);
            // 関連する投稿がある場合にのみ表示
            if ($related_posts->have_posts()) {
                $count = 0; // ループ回数のカウンター
            ?>
                <div class="recommend_flex">
                    <?php
                    while ($related_posts->have_posts()) {
                        $related_posts->the_post();
                        $count++;
                    ?>
                        <a href="<?php echo the_permalink(); ?>">
                            <div class="card1_wrap course_b">
                                <!-- ←ここでcourse名追記 -->
                                <div class="card1_content
                        <?php
                        if (get_the_title() === "キッズが主役旅") {
                            echo 'course_kids';
                        } else if (get_the_title() === "鳴門海峡満喫旅") {
                            echo 'course_sea';
                        } else if (get_the_title() === "鳴門おおそと一周旅") {
                            echo 'course_around';
                        } else if (get_the_title() === "ぐるっと一周鳴門旅") {
                            echo 'course_gurutto';
                        } else if (get_the_title() === "歴史・文化の鳴門旅") {
                            echo 'course_history';
                        }
                        ?>
                        ">
                                    <h4 class="rec_title"><?php the_title(); ?></h4>
                                    <div class="card1_img">
                                        <?php
                                        $thum = get_field('thumnail');
                                        //大サイズ画像のURL
                                        $thum_url = $thum['sizes']['medium'];
                                        ?>
                                        <img src="<?php echo $thum_url ?>" alt="サムネイル">
                                    </div>
                                    <div class="card1_text">
                                        <p>
                                            <?php the_field('excerpt'); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php
                        if ($count === 2) {
                            echo '</div><div class="recommend_flex2">';
                        }
                    }
                    ?>
                </div>
            <?php
                wp_reset_postdata();
            }
            ?>

        </section>

</main>

<script>
    // PHPの変数をJavaScriptに渡す
    const start_time = <?php echo json_encode($start_time); ?>;
    const move_time2 = <?php echo json_encode($move_time2); ?>;
    const move_time3 = <?php echo json_encode($move_time3); ?>;
    const move_time4 = <?php echo json_encode($move_time4); ?>;
    const move_time5 = <?php echo json_encode($move_time5); ?>;
    const move_time6 = <?php echo json_encode($move_time6); ?>;
    const move_time7 = <?php echo json_encode($move_time7); ?>;
    const move_time8 = <?php echo json_encode($move_time8); ?>;
    const move_time9 = <?php echo json_encode($move_time9); ?>;
    const stay_time1 = <?php echo json_encode($stay_time1); ?>;
    const stay_time2 = <?php echo json_encode($stay_time2); ?>;
    const stay_time3 = <?php echo json_encode($stay_time3); ?>;
    const stay_time4 = <?php echo json_encode($stay_time4); ?>;
    const stay_time5 = <?php echo json_encode($stay_time5); ?>;
    const stay_time6 = <?php echo json_encode($stay_time6); ?>;
    const stay_time7 = <?php echo json_encode($stay_time7); ?>;
    const stay_time8 = <?php echo json_encode($stay_time8); ?>;
    const stay_time9 = <?php echo json_encode($stay_time9); ?>;
</script>

<?php get_footer() ?>

<a href="https://www.naruto-mon.jp/" target="_blank"></a>
