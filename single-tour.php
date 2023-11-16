<?php get_header(); ?>

<!-- ここにキービジュアルが入る -->

<!-- パンくずリスト -->
<?php get_template_part('template-parts/breadcrumb'); ?>
<h1>ここは観光詳細ページです</h1>
<!-- 記事があればある分だけループさせる -->
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <main class="main">
            <section class="sec">
                <div class="container">
                    <!-- 画像の表示  必須 -->
                    <div class="article_pic">
                        <?php
                        $pic1 = get_field('pic1');
                        //大サイズ画像のURL
                        $pic1_url = $pic1['sizes']['large'];
                        ?>
                        <img src="<?php echo $pic1_url; ?>" alt="">
                    </div><!-- article_pic -->

                    <!-- 記事のタイトルの表示 -->
                    <h2 class="article_pic"><?php the_title(); ?></h2>
                    <?php echo get_favorites_button(get_the_ID()); ?>
                    <!-- 記事の本文の表示 -->
                    <div class="content">
                        <?php the_content(); ?>
                    </div><!-- content -->

                    <!-- キャッチフレーズの表示 -->
                    <?php if (get_field('catch_phrase')) : ?>
                        <?php the_field('catch_phrase'); ?>
                    <?php endif; ?>
                </div><!-- container -->

                <div class="info">
                    <div class="container">
                        <h2>お問い合わせ</h2>
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
                        </ul>
                    </div><!-- container -->
                </div><!-- info -->

                <div class="info">
                    <div class="container">
                        <h2>ご案内</h2>
                        <ul class="info_list">
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

                            <li><!-- 地図    必須 -->
                                <span><?php the_field('iframe'); ?></span>
                            </li>
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
                        </ul>
                    </div><!-- container -->
                </div><!-- info -->
            </section>
        </main>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer() ?>