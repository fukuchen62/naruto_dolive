<article id="post-<?php the_ID(); ?>" <?php post_class('news'); ?>>
    <div class="news_meta">
        <?php the_category();  ?>
    </div>



    <p>start---------------------------------------------------</p>

    <!-- 投稿の個別ページのURLを表示し、以下の内容をリンクにする-->
    <a href="<?php the_permalink(); ?>">

        <!-- アイキャッチ画像の表示 -->
        <figure class="pic">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium'); ?>
            <?php endif; ?>
        </figure>
    </a>
    <!-- 店名の表示 -->
    <h3 class="title"><?php the_title(); ?></h3>

    <!-- 抜粋の表示 -->
    <p><?php the_field('excerpt'); ?></p>

    <!-- ここにアイコン -->
    <!-- 営業時間のアイコンの出力 -->

    <!-- チェックボックスで選択した項目を変数へ代入する -->
    <?php if (get_field('business_hour')) : ?>
        <?php $times = get_field('business_hour');
        if ($times) : ?>
            <!-- 取得したものを一つずつ取り出す -->
            <?php foreach ($times as $time) : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo $time; ?>_ico.png" />
            <?php endforeach; ?>
        <?php endif; ?>
    <?php endif; ?>

    <!-- 支払い方法の出力 -->
    <p>
        <?php if (get_field('payment')) : ?>
            <?php
            $payments = get_field('payment');
            foreach ($payments as $payment) {
                echo $payment;
                if ($payment !== end($payments)) {
                    echo '、';
                }
            }
            ?>
        <?php endif; ?>
    </p>


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

    <?php

    // 緯度と経度の値を取得する
    $latitude = get_post_meta(get_the_ID(), 'latitude', true);
    $longitude = get_post_meta(get_the_ID(), 'longitude', true);
    $facilityName = get_the_title();

    $place[] = array(
        'lat' => $latitude,
        'lng' => $longitude,
        'facilityName' => $facilityName
    );
    ?>


    <p>---------------------------------------------------end</p>

</article>