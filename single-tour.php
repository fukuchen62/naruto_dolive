<?php get_header(); ?>
<main>
    <!-- タイトル -->
    <h2 id="toparea" class="toparea page_title">観光</h2>
    <!-- メイン -->
    <div class="main_wrap page_title">
        <!-- パンくずリスト -->
        <p><?php get_template_part('template-parts/breadcrumb'); ?></p>
        <!-- 施設について -->
        <div class="content_wrap">
            <!-- 施設についての画像 -->
            <section id="facility" class="section_facility">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <!-- facility=施設 -->
                        <div class="title_wrapper">
                            <div>
                                <h3 class="facility_name toparea_title"><?php the_title(); ?></h3>
                            </div>
                            <!-- お気に入りボタン -->
                            <div class="favorite_wrapper">
                                <?php
                                echo get_favorites_button(get_the_ID());
                                ?>
                                <div class="favorite_btns">
                                    <img class="favorite_icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/hammenu_icon1.png" alt="お気に入り前ボタン">
                                    <img class="favorited_icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/favorite_flag.png" alt="お気に入り後ボタン">
                                </div>
                            </div>
                        </div>
                        <!-- facilityのwrap1は写真ちゃん達、wrap2はテキストちゃんとタグちゃん達 -->
                        <div class="facility_wrap">
                            <div class="facility_wrap1">

                                <!-- メイン画像の出力 -->
                                <div class="facility_img1_box">
                                    <?php
                                    $pic1 = get_field('pic1');
                                    //大サイズ画像のURL
                                    $pic1_url = $pic1['sizes']['large'];
                                    ?>
                                    <img class="facility_img1" src="<?php echo $pic1_url; ?>" alt="">
                                </div><!-- facility_img1_box -->

                                <!-- 小さい画像３枚の出力 -->
                                <ul class="facility_img_list">
                                    <?php if (get_field('pic1')) : ?>
                                        <li>
                                            <?php
                                            $pic1 = get_field('pic1');
                                            //小サイズ画像のURL
                                            $pic1_url = $pic1['sizes']['large'];
                                            ?>
                                            <img class="facility_img2" src="<?php echo $pic1_url; ?>" alt="">
                                        <?php endif; ?>
                                        </li>

                                        <?php if (get_field('pic2')) : ?>
                                            <li>
                                                <?php
                                                $pic2 = get_field('pic2');
                                                //小サイズ画像のURL
                                                $pic2_url = $pic2['sizes']['large'];
                                                ?>
                                                <img class="facility_img2" src="<?php echo $pic2_url; ?>" alt="">
                                            <?php endif; ?>
                                            </li>

                                            <?php if (get_field('pic3')) : ?>
                                                <li>
                                                    <?php
                                                    $pic3 = get_field('pic3');
                                                    //小サイズ画像のURL
                                                    $pic3_url = $pic3['sizes']['large'];
                                                    ?>
                                                    <img class="facility_img2" src="<?php echo $pic3_url; ?>" alt="">
                                                <?php endif; ?>
                                                </li>

                                                <?php if (get_field('pic4')) : ?>
                                                    <li>
                                                        <?php
                                                        $pic4 = get_field('pic4');
                                                        //小サイズ画像のURL
                                                        $pic4_url = $pic4['sizes']['large'];
                                                        ?>
                                                        <img class="facility_img2" src="<?php echo $pic4_url; ?>" alt="">
                                                    <?php endif; ?>
                                                    </li>
                                </ul><!-- facility_img_list -->
                            </div><!-- facility_wrap1 -->

                            <!-- メインテキストの出力 -->
                            <div class="facility_wrap2">
                                <div class="facility_txt_box">
                                    <p class="facility_txt">
                                        <?php the_field('text'); ?>
                                    </p><!-- facility_txt -->
                                </div><!-- facility_txt_box -->

                                <!-- タグの出力 -->
                                <div class="facility_tag">
                                    <?php
                                    $tour_types = get_field('tour_type');
                                    foreach ($tour_types as $tour_type) : ?>

                                        <div class="facility_tag_btn">
                                            <a class="facility_tag_link" href="<?php echo home_url(); ?>?s=<?php echo $tour_type; ?>">
                                                <span class="facility_tag_name style=" border: 1px solid black;"><?php echo $tour_type; ?></span>
                                            </a>
                                        </div>
                                    <?php endforeach ?>
                                </div><!-- facility_tag -->
                            </div><!-- facility_wrap2 -->
                        </div><!-- facility_wrap -->
            </section><!-- id="facility" class="section_facility" -->


            <hr><!-- 区切りの線 -->
            <!-- 施設の詳細表示 -->
            <section id="info" class="section_info">
                <h3 class="h3_center">詳細情報</h3>
                <div class="info_wrap">
                    <table>
                        <?php if (get_field('recommend')) : ?>
                            <tr>
                                <th>おすすめポイント</th>
                                <td><?php the_field('recommend'); ?></td>
                            </tr>
                        <?php endif; ?>

                        <tr>
                            <th>住所</th><!-- 必須 -->
                            <td><?php the_field('address'); ?></td>
                        </tr>

                        <?php if (get_field('post_code')) : ?>
                            <tr>
                                <th>郵便番号</th>
                                <td><?php the_field('post_code'); ?></td>
                            </tr>
                        <?php endif; ?>

                        <tr>
                            <th>電話番号</th><!-- 必須 -->
                            <td><?php the_field('tel'); ?></td>
                        </tr>

                        <?php if (get_field('business_hours')) : ?>
                            <tr>
                                <th>営業時間</th>
                                <td><?php the_field('business_hours'); ?></td>
                            </tr>
                        <?php endif; ?>

                        <?php if (get_field('email')) : ?>
                            <tr>
                                <th>Email</th>
                                <td><?php the_field('email'); ?></td>
                            </tr>
                        <?php endif; ?>


                        <!-- リンク先がある場合に表示する -->
                        <?php if (get_field('url')) : ?>
                            <tr>
                                <th>ホームページ</th>
                                <td>
                                    <a href="<?php the_field('url'); ?>">
                                        <?php the_field('url'); ?>
                                    </a>
                                </td>
                            </tr>
                        <?php endif ?>


                        <?php if (get_field('sns')) : ?>
                            <tr>
                                <th>SNS</th>
                                <td><?php the_field('sns'); ?></td>
                            </tr>
                        <?php endif; ?>

                        <?php if (get_field('toilet')) : ?>
                            <tr>
                                <th>トイレ</th>
                                <?php if (get_field('toilet')) : ?>
                                    <td>あり</td>
                                <?php else : ?>
                                    <td>なし</td>
                                <?php endif; ?>
                            </tr>
                        <?php endif; ?>


                        <?php if (get_field('smoking')) : ?>
                            <tr>
                                <th>喫煙</th>
                                <td><?php the_field('smoking'); ?></td>
                            </tr>
                        <?php endif; ?>

                        <?php if (get_field('parking')) : ?>
                            <tr>
                                <th>駐車場</th>
                                <?php if (get_field('parking')) : ?>
                                    <td>あり</td>
                                <?php else : ?>
                                    <td>なし</td>
                                <?php endif; ?>
                            </tr>
                        <?php endif; ?>

                        <?php if (get_field('parking_area')) : ?>
                            <tr>
                                <th>駐車場詳細</b>
                                <td><?php the_field('parking_area'); ?></td>
                            </tr>
                        <?php endif; ?>


                        <?php if (get_field('barrier_free')) : ?>
                            <tr>
                                <th>バリアフリー対応</th>
                                <td><?php the_field('barrier_free'); ?></td>
                            </tr>
                        <?php endif; ?>

                        <?php if (get_field('company')) : ?>
                            <tr>
                                <th>管理会社</th>
                                <td><?php the_field('company'); ?></td>
                            </tr>
                        <?php endif; ?>

                        <?php if (get_field('on_site')) : ?>
                            <tr>
                                <th>常駐管理者</th>
                                <?php if (get_field('on_site')) : ?>
                                    <td>あり</td>
                                <?php else : ?>
                                    <td>なし</td>
                                <?php endif; ?>
                            </tr>
                        <?php endif; ?>


                        <?php if (get_field('fee')) : ?>
                            <tr>
                                <th>料金</th>
                                <td><?php the_field('fee'); ?></td>
                            </tr>
                        <?php endif; ?>

                        <?php if (get_field('payment')) : ?>
                            <tr>
                                <th>決済方法</th>
                                <td>
                                    <?php
                                    $payment = get_field('payment');
                                    foreach ($payment as $key => $pay) {
                                        echo $pay;
                                        if ($pay !== end($payment)) {
                                            echo '、';
                                        }
                                    }
                                    ?>
                                </td>
                            </tr>
                        <?php endif; ?>

                        <?php if (get_field('access')) : ?>
                            <tr>
                                <th>アクセス</th>
                                <td><?php the_field('access'); ?></td>
                            </tr>
                        <?php endif; ?>

                        <?php if (get_field('cource_id')) : ?>
                            <tr>
                                <th>コースリンク</th>
                                <td><?php the_field('cource_id'); ?></td>
                            </tr>
                        <?php endif; ?>

                        <?php if (get_field('memo')) : ?>
                            <tr>
                                <th>備考</th>
                                <td><?php the_field('memo'); ?></td>
                            </tr>
                        <?php endif; ?>
                    </table>
                </div><!-- info_wrap -->

                <!-- 地図の表示 -->
                <div class="info_map">
                    <iframe class="info_map_img" title=" google" src="<?php the_field('iframe'); ?>">
                    </iframe>
                </div><!-- info_mrap -->
            </section><!-- id="info" class="section_info" -->

            <hr><!-- 区切りの線 -->

            <!-- おすすめ施設の表示 -->
            <section id="recommend" class="section_recommend">

                <!-- 現在のページのタクソノミーのおすすめ記事を3件表示する -->
                <h3 class="h3_center">その他おすすめ</h3>
                <div class="card_3col">
                    <?php
                        $taxonomy = 'tour_type'; // タクソノミーのスラッグ名
                        $terms = get_the_terms(get_the_ID(), $taxonomy);

                        if ($terms && !is_wp_error($terms)) {
                            $term_slugs = array();
                            foreach ($terms as $term) {
                                $term_slugs[] = $term->slug;
                            }

                            $sub_query = new WP_Query(array(
                                'post_type' => 'tour', // 呼び出す記事のカスタム投稿指定
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => $taxonomy,
                                        'field' => 'slug',
                                        'terms' => $term_slugs,
                                    ),
                                ),
                                'posts_per_page' => 3, // 表示する投稿の数
                                'post__not_in' => array($post->ID), //呼び出す記事から現在のページを除外する
                            ));


                            while ($sub_query->have_posts()) : $sub_query->the_post(); ?>


                            <!-- 投稿の個別ページのURLを表示し、以下の内容をリンクにする-->
                            <a href="<?php the_permalink(); ?>" class="card1">
                                <div class="card1_wrap">
                                    <div class="card1_content">
                                        <!-- アイキャッチ画像の表示 -->
                                        <div class="card1_img">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail('medium'); ?>
                                            <?php else : ?>
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/running_around.png" alt="no-image">
                                            <?php endif; ?>
                                        </div><!-- card1_img -->

                                        <!-- 店名の表示 -->
                                        <h4><?php echo mb_substr(get_the_title(), 0, 10) . '…'; ?></h4>

                                        <!-- 抜粋の表示 -->
                                        <div class="card1_text">
                                            <!-- 字数制限24文字まで -->
                                            <?php echo mb_substr(get_field('excerpt'), 0, 24); ?>
                                        </div><!-- card1_text -- >

                                    <!-- ここにアイコンを表示する -->

                                        <!-- 営業時間のアイコンの出力 -->
                                        <div class="card1_tag">
                                            <!-- チェックボックスで選択した項目を変数へ代入する -->
                                            <?php $times = get_field('business_hour');
                                            if ($times) : ?>
                                                <!-- 取得したものを一つずつ取り出す -->
                                                <?php foreach ($times as $time) : ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo $time; ?>_ico.png" />
                                                <?php endforeach; ?>
                                            <?php endif; ?>


                                            <!-- 駐車場のアイコンの出力 -->
                                            <?php if (get_field('parking')) : ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/parking_ico.png" />
                                            <?php endif; ?>

                                            <!-- 喫煙のアイコンの出力 -->
                                            <?php if (get_field('smoking')) : ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/smoking_ico.png" />
                                            <?php endif; ?>

                                            <!-- 予約のアイコンの出力 -->
                                            <?php if (get_field('reservation')) : ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/reservation_ico.png" />
                                            <?php endif; ?>

                                        </div><!-- card1_tag -->
                                    </div><!-- card1_content -->
                                </div><!-- card1_wrap -->
                            </a><!-- card1 -->



                        <?php endwhile; ?>
                        <!-- 取得した情報をリセットする -->
                    <?php wp_reset_postdata();
                        } ?>

                <?php endwhile; ?>
            <?php endif; ?>
                </div><!-- card_3col -->

                <script>
                    // いいねボタン表示のスクリプト
                    const favorite_icon = document.querySelector(".favorite_icon");
                    const favorited_icon = document.querySelector(".favorited_icon");
                    const favorite_btn = document.querySelector(".simplefavorite-button");

                    // ロードの時にアイコンを読み込む
                    window.addEventListener("load", () => {
                        if (favorite_btn.classList.contains("active")) {
                            favorite_icon.style.display = "none";
                            favorited_icon.style.display = "inline-block";
                        } else {
                            favorite_icon.style.display = "inline-block";
                            favorited_icon.style.display = "none";
                        }
                    });

                    // クリックでアイコンを変える
                    favorite_btn.addEventListener("click", () => {
                        if (favorite_icon.style.display === "none") {
                            favorite_icon.style.display = "inline-block";
                            favorited_icon.style.display = "none";
                        } else if (favorite_icon.style.display === "inline-block") {
                            favorite_icon.style.display = "none";
                            favorited_icon.style.display = "inline-block";
                        }
                    });
                </script>
            </section><!-- id="recommend" class="section_recommend" -->
        </div><!-- content_wrap -->
    </div><!-- main_wrap -->
</main>
<?php get_footer() ?>
