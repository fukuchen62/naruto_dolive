<?php get_header(); ?>
<h1>========『遊ぶ』========</h1>
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
                    <?php echo get_favorites_button(get_the_ID()); ?>

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

                        <!-- 記事の本文の表示 -->
                        <?php if (get_field('text')) : ?>
                            <span><?php the_field('text'); ?></span>
                        <?php endif; ?>

                    </div><!-- main_pic -->

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

                            <?php if (get_field('recommend')) : ?>
                                <li>
                                    <b>おすすめポイント</b>
                                    <span><?php the_field('recommend'); ?></span>
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

                            <li>
                                <b>住所</b><!-- 必須 -->
                                <span><?php the_field('address'); ?></span>
                            </li>

                            <?php if (get_field('post_code')) : ?>
                                <li>
                                    <b>郵便番号</b>
                                    <span><?php the_field('post_code'); ?></span>
                                </li>
                            <?php endif; ?>

                            <li>
                                <b>電話番号</b><!-- 必須 -->
                                <span><?php the_field('tel'); ?></span>
                            </li>

                            <li>
                                <b>営業時間</b><!-- 必須 -->
                                <span><?php the_field('business_hours'); ?></span>
                            </li>

                            <?php if (get_field('email')) : ?>
                                <li>
                                    <b>Email</b>
                                    <span><?php the_field('email'); ?></span>
                                </li>
                            <?php endif; ?>

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

                                <?php if (get_field('toilet')) : ?>
                                    <li>
                                        <b>トイレ</b>
                                        <?php if (get_field('toilet')) : ?>
                                            <span>あり</span>
                                        <?php else : ?>
                                            <span>なし</span>
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

                                <?php if (get_field('company')) : ?>
                                    <li>
                                        <b>管理会社</b>
                                        <span><?php the_field('company'); ?></span>
                                    </li>
                                <?php endif; ?>

                                <?php if (get_field('on_site')) : ?>
                                    <li>
                                        <b>常駐管理者</b>
                                        <?php if (get_field('on_site')) : ?>
                                            <span>あり</span>
                                        <?php else : ?>
                                            <span>なし</span>
                                        <?php endif; ?>
                                    </li>
                                <?php endif; ?>


                                <?php if (get_field('fee')) : ?>
                                    <li>
                                        <b>料金</b>
                                        <span><?php the_field('fee'); ?></span>
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

                                <?php if (get_field('access')) : ?>
                                    <li>
                                        <b>アクセス</b>
                                        <span><?php the_field('access'); ?></span>
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

                    <h4>その他おすすめ</h4>

                    <!-- カテゴリIDの呼び出し -->
                    <?php if (has_category()) {
                        $cats = get_the_category();
                        $catkwds = array();
                        foreach ($cats as $cat) {
                            $catkwds[] = $cat->term_id;
                        }
                    } ?>

                    <!-- カテゴリIDを利用して記事の呼び出し -->
                    <?php $args = array(
                        'post_type' => 'enjoy', //呼び出す記事の種類の指定
                        'posts_per_page' => '3', //ループで出力する記事数
                        'post__not_in' => array($post->ID), //呼び出す記事から現在のページを除外する
                        // 'category__in' => $catkwds, //呼び出す記事のカテゴリIDを指定する（※考え中）
                        'orderby' => 'rand' //呼び出す記事の並び順をランダムにする
                    );
                    $my_query = new WP_Query($args); ?>
                    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
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
                    <?php wp_reset_postdata(); ?>
                </div><!-- other -->
            <?php endwhile; ?>
        <?php endif; ?>
    </section><!-- sec -->
</main>
<?php get_footer() ?>
