<?php get_header(); ?>
<h1>========『食べる』========</h1>
<!-- パンくずリスト -->
<?php get_template_part('template-parts/breadcrumb'); ?>
<main class="main">
    <section class="sec">
        <!-- 記事があればある分だけループさせる -->
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="container">
                    <!-- 店名の表示 -->
                    <h2><?php the_title(); ?></h2>


                    <!-- いいねボタン表示 -->
                    <div class="favorite_wrapper">
                        <?php
                        echo get_favorites_button(get_the_ID());
                        ?>
                        <img style="display: none;" class="favorite_icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/hammenu_icon1.png" alt="お気に入り前ボタン">
                        <img style="display: none;" class="favorited_icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/favorite_flag.png" alt="お気に入り後ボタン">
                    </div>

                    <div class="main_pic">
                        <!-- 画像1の表示  ※必須 -->
                        <?php
                        $pic1 = get_field('pic1');
                        //大サイズ画像のURL
                        $pic1_url = $pic1['sizes']['large'];
                        ?>
                        <img src="<?php echo $pic1_url; ?>" alt="">

                        <!-- 記事の本文の表示 -->
                        <?php the_content(); ?>

                        <?php
                        $eat_types = get_field('eat_type');
                        foreach ($eat_types as $eat_type) : ?>

                            <a href="<?php echo home_url(); ?>?s=<?php echo $eat_type; ?>"><span style="border: 1px solid black;"><?php echo $eat_type; ?></span></a>

                        <?php endforeach ?>


                    </div><!-- main_pic -->

                    <!-- キャッチフレーズの表示 -->
                    <?php if (get_field('catch_phrase')) : ?>
                        <?php the_field('catch_phrase'); ?>
                    <?php endif; ?>

                    <div class="sub_pic">
                        <!-- 画像2の表示 -->
                        <?php if (get_field('pic2')) : ?>
                            <?php
                            $pic2 = get_field('pic2');
                            //小サイズ画像のURL
                            $pic2_url = $pic2['sizes']['thumbnail'];
                            ?>
                            <img src="<?php echo $pic2_url; ?>" alt="">
                        <?php endif; ?>

                        <!-- 画像3の表示 -->
                        <?php if (get_field('pic3')) : ?>
                            <?php
                            $pic3 = get_field('pic3');
                            //小サイズ画像のURL
                            $pic3_url = $pic3['sizes']['thumbnail'];
                            ?>
                            <img src="<?php echo $pic3_url; ?>" alt="">
                        <?php endif; ?>

                        <!-- 画像4の表示 -->
                        <?php if (get_field('pic4')) : ?>
                            <?php
                            $pic4 = get_field('pic4');
                            //小サイズ画像のURL
                            $pic4_url = $pic4['sizes']['thumbnail'];
                            ?>
                            <img src="<?php echo $pic4_url; ?>" alt="">
                        <?php endif; ?>
                    </div><!-- sub_pic -->


                    <span>[ここにタグが5つ入ります]</span>




                </div><!-- container -->

                <p>==============================================================</p>
                <div class="info">
                    <div class="container">
                        <h2>詳細情報</h2>
                        <ul class="info_list">
                            <li>
                                <b>住所</b><!-- 必須 -->
                                <span><?php the_field('address'); ?></span>
                            </li>
                            <li>
                                <b>電話番号</b><!-- 必須 -->
                                <span><?php the_field('tel'); ?></span>
                            </li>

                            <!-- リンク先がある場合に表示する -->
                            <span><?php if (get_field('url')) //リンク先の入力があれば
                                    {
                                        echo ('<li><b>ホームページ</b><a href="');
                                        the_field('url');
                                        echo ('">');
                                    } else { //なければ何も表示しない
                                        echo ('');
                                    } ?>

                                <!--リンク先ページがある場合の閉じタグ  -->
                                <?php if (get_field('url')) { ?> <!-- 取得出来たら閉じタグを表示する -->
                                    <p><?php the_field('url'); ?></p>
                                <?php echo ('</a>');
                                    echo ('</li>');
                                } else { //なければ何も表示しない
                                    echo ('');
                                } ?>
                                </li>

                                <?php if (get_field('sns')) : ?>
                                    <li>
                                        <b>SNS</b>
                                        <span><?php the_field('sns'); ?></span>
                                    </li>
                                <?php endif; ?>

                                <li>
                                    <b>営業時間</b><!-- 必須 -->
                                    <span><?php the_field('business_hours'); ?></span>
                                </li>
                                <li>
                                    <b>定休日</b><!-- 必須 -->
                                    <span><?php the_field('close'); ?></span>
                                </li>

                                <?php if (get_field('takeout')) : ?>
                                    <li>
                                        <b>テイクアウト</b>
                                        <?php if (get_field('takeout')) : ?>
                                            <span>あり</span>
                                        <?php else : ?>
                                            <span>なし</span>
                                        <?php endif; ?>
                                    </li>
                                <?php endif; ?>

                                <?php if (get_field('reservation')) : ?>
                                    <li>
                                        <b>予約</b>
                                        <?php if (get_field('reservation')) : ?>
                                            <span>可能</span>
                                        <?php else : ?>
                                            <span>不可</span>
                                        <?php endif; ?>
                                    </li>
                                <?php endif; ?>

                                <?php if (get_field('smoking')) : ?>
                                    <li>
                                        <b>喫煙</b>
                                        <span><?php the_field('smoking'); ?></span>
                                    </li>
                                <?php endif; ?>

                                <?php if (get_field('parking')) : ?>
                                    <li>
                                        <b>駐車場</b>
                                        <?php if (get_field('parking')) : ?>
                                            <span>あり</span>
                                        <?php else : ?>
                                            <span>なし</span>
                                        <?php endif; ?>
                                    </li>
                                <?php endif; ?>

                                <?php if (get_field('parking_area')) : ?>
                                    <li>
                                        <b>駐車場詳細</b>
                                        <span><?php the_field('parking_area'); ?></span>
                                    </li>
                                <?php endif; ?>

                                <?php if (get_field('barrier_free')) : ?>
                                    <li>
                                        <b>バリアフリー対応</b>
                                        <span><?php the_field('barrier_free'); ?></span>
                                    </li>
                                <?php endif; ?>

                                <?php if (get_field('payment')) : ?>
                                    <li>
                                        <b>決済方法</b>
                                        <span>
                                            <?php
                                            $payment = get_field('payment');
                                            foreach ($payment as $key => $pay) {
                                                echo $pay;
                                                if ($pay !== end($payment)) {
                                                    echo '、';
                                                }
                                            }
                                            ?>
                                        </span>
                                    </li>
                                <?php endif; ?>

                                <li>
                                    <b>経度</b><!-- 必須 -->
                                    <span><?php the_field('longitude'); ?></span>
                                </li>
                                <li>
                                    <b>緯度</b><!-- 必須 -->
                                    <span><?php the_field('latitude'); ?></span>
                                </li>

                                <?php if (get_field('recommend')) : ?>
                                    <li>
                                        <b>おすすめメニュー</b>
                                        <span><?php the_field('recommend'); ?></span>
                                    </li>
                                <?php endif; ?>

                                <?php if (get_field('cource_id')) : ?>
                                    <li>
                                        <b>コースリンク</b>
                                        <span><?php the_field('cource_id'); ?></span>
                                    </li>
                                <?php endif; ?>

                                <?php if (get_field('memo')) : ?>
                                    <li>
                                        <b>備考</b>
                                        <span><?php the_field('memo'); ?></span>
                                    </li>
                                <?php endif; ?>

                                <li><!-- 地図    必須 -->
                                    <span><?php the_field('iframe'); ?></span>
                                </li>
                        </ul>
                    </div><!-- container -->
                </div><!-- info -->
                <p>==============================================================</p>
                <div class="other">
                    <!-- 現在のページのタクソノミーのおすすめ記事を3件表示する -->
                    <h4>その他おすすめ</h4>

                    <?php
                    $taxonomy = 'eat_type'; // タクソノミーのスラッグ名
                    $terms = get_the_terms(get_the_ID(), $taxonomy);

                    if ($terms && !is_wp_error($terms)) {
                        $term_slugs = array();
                        foreach ($terms as $term) {
                            $term_slugs[] = $term->slug;
                        }

                        $sub_query = new WP_Query(array(
                            'post_type' => 'eat', // 呼び出す記事のカスタム投稿指定
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
                            <p>start---------------------------------------------------</p>
                            <!-- 投稿の個別ページのURLを表示し、以下の内容をリンクにする-->
                            <a href="<?php the_permalink(); ?>">

                                <!-- アイキャッチ画像の表示 -->
                                <figure class="pic">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('medium'); ?>
                                    <?php endif; ?>
                                </figure>

                                <!-- 店名の表示 -->
                                <h3 class="title"><?php the_title(); ?></h3>
                            </a>

                            <!-- 抜粋の表示 -->
                            <p><?php the_field('excerpt'); ?></p>

                            <!-- ここにアイコンを表示する -->

                            <!-- 営業時間のアイコンの出力 -->
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

                            <p>---------------------------------------------------end</p>
                        <?php endwhile; ?>

                        <!-- 取得した情報をリセットする -->
                    <?php wp_reset_postdata();
                    } ?>

                </div><!-- other -->
            <?php endwhile; ?>
        <?php endif; ?>

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

</main>
<?php get_footer() ?>