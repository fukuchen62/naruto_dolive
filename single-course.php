<?php get_header(); ?>

<!-- パンくずリスト -->
<?php get_template_part('template-parts/breadcrumb'); ?>

<main>
    <h2 id="toparea" class="toparea_course">ドライブコース</h2>
    <div class="main_wrap">
        <h3><?php the_title() ?></h3>

        <div class="course_map">
            <!-- googlemap -->
            <div class="map">
                <p>GoogleMAP</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d154140.7141983337!2d134.48998549788942!3d34.18674494036548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35537004b8db8063%3A0xbfd0dc7e9484a6ae!2z5b6z5bO255yM6bO06ZaA5biC!5e0!3m2!1sja!2sjp!4v1700445370859!5m2!1sja!2sjp" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <hr />

        <section class="course_text">
            <h3>コース説明</h3>
            <p>
                <?php the_content(); ?>
            </p>
        </section>

        <div class="course_wrap">
            <div class="travel_time_content">
                <div class="coordinate">
                    <div class="car_wrap">
                        <img class="car" src="<?php echo get_template_directory_uri(); ?>/assets/img/car.png" alt="所要時間" />
                        <h4 class="req_time">スタート</h4>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg_course_road.png" alt="コース道路" />
                </div>
            </div>

            <div class="course_details course_a">
                <!-- ←ここでcourse名追記 -->

                <!-- 1枚目のカード -->

                <a href="<?php echo get_field('page_link'); ?>">
                    <div class="course_details_card">
                        <div>
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

                <a href="<?php echo get_field('page_link2'); ?>">
                    <div class="course_details_card">
                        <div>
                            <?php
                            $pic2 = get_field('spot2_thum');
                            //大サイズ画像のURL
                            $pic2_url = $pic2['sizes']['medium'];
                            ?>
                            <img src="<?php echo $pic2_url ?>" alt="掲載写真">
                        </div>
                        <div>
                            <p class="course_facility"><?php the_field('spot2_title'); ?></p>
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

                if ($page_link3 && $spot3_thum && $spot3_title && $spot3_excerpt) {
                    $pic3_url = $spot3_thum['sizes']['medium'];
                ?>
                    <a href="<?php echo $page_link3 ?>">
                        <div class="course_details_card">
                            <div>
                                <img src="<?php echo $pic3_url ?>" alt="掲載写真">
                            </div>
                            <div>
                                <p class="course_facility"><?php echo $spot3_title ?></p>
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

                if ($page_link4 && $spot4_thum && $spot4_title && $spot4_excerpt) {
                    $pic1_url = $spot4_thum['sizes']['medium'];
                ?>
                    <a href="<?php echo $page_link4 ?>">
                        <div class="course_details_card">
                            <div>
                                <img src="<?php echo $pic1_url ?>" alt="掲載写真">
                            </div>
                            <div>
                                <p class="course_facility"><?php echo $spot4_title ?></p>
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

                if ($page_link5 && $spot5_thum && $spot5_title && $spot5_excerpt) {
                    $pic5_url = $spot5_thum['sizes']['medium'];
                ?>
                    <a href="<?php echo $page_link5 ?>">
                        <div class="course_details_card">
                            <div>
                                <img src="<?php echo $pic5_url ?>" alt="掲載写真">
                            </div>
                            <div>
                                <p class="course_facility"><?php echo $spot5_title ?></p>
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

                if ($page_link6 && $spot6_thum && $spot6_title && $spot6_excerpt) {
                    $pic6_url = $spot6_thum['sizes']['medium'];
                ?>
                    <a href="<?php echo $page_link6 ?>">
                        <div class="course_details_card">
                            <div>
                                <img src="<?php echo $pic6_url ?>" alt="掲載写真">
                            </div>
                            <div>
                                <p class="course_facility"><?php echo $spot6_title ?></p>
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

                if ($page_link7 && $spot7_thum && $spot7_title && $spot7_excerpt) {
                    $pic7_url = $spot7_thum['sizes']['medium'];
                ?>
                    <a href="<?php echo $page_link7 ?>">
                        <div class="course_details_card">
                            <div>
                                <img src="<?php echo $pic7_url ?>" alt="掲載写真">
                            </div>
                            <div>
                                <p class="course_facility"><?php echo $spot7_title ?></p>
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

                if ($page_link8 && $spot8_thum && $spot8_title && $spot8_excerpt) {
                    $pic8_url = $spot8_thum['sizes']['medium'];
                ?>
                    <a href="<?php echo $page_link8 ?>">
                        <div class="course_details_card">
                            <div>
                                <img src="<?php echo $pic8_url ?>" alt="掲載写真">
                            </div>
                            <div>
                                <p class="course_facility"><?php echo $spot8_title ?></p>
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

                if ($page_link9 && $spot9_thum && $spot9_title && $spot9_excerpt) {
                    $pic9_url = $spot9_thum['sizes']['medium'];
                ?>
                    <a href="<?php echo $page_link9 ?>">
                        <div class="course_details_card">
                            <div>
                                <img src="<?php echo $pic9_url ?>" alt="掲載写真">
                            </div>
                            <div>
                                <p class="course_facility"><?php echo $spot9_title ?></p>
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
            <div class="recommend_flex">
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
                ?>

                    <?php
                    while ($related_posts->have_posts()) {
                        $related_posts->the_post();
                    ?>
                        <div class="recommend_flex_box">
                            <a href="<?php echo the_permalink(); ?>">
                                <div class="card1_wrap course_b">
                                    <!-- ←ここでcourse名追記 -->
                                    <div class="card1_content">
                                        <h4><?php the_title() ?></h4>
                                        <div class="card1_img">
                                            <img src="../assets/img/sample6.jpg" alt="サムネイル" />
                                        </div>
                                        <div class="card1_text">
                                            <p>
                                                <?php the_content(); ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php
                    }
                    ?>

                <?php
                    wp_reset_postdata();
                }
                ?>
            </div>
        </section>
    </div>
</main>

<?php get_footer() ?>