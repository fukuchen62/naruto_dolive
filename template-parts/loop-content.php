<div class="news_meta">
    <?php the_category();  ?>
</div>



<!-- 投稿の個別ページのURLを表示し、以下の内容をリンクにする-->
<a href="<?php the_permalink(); ?>">
    <div class="card_wrap1">
        <div class="card_wrap2">
            <!-- アイキャッチ画像の表示 -->
            <div class="thumbnail_img">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('medium'); ?>
                <?php endif; ?>
            </div>

            <!-- 店名の表示 -->
            <h4><?php the_title(); ?></h4>

            <!-- 抜粋の表示 -->
            <div class="card_text"><?php the_field('excerpt'); ?>
            </div>

            <!-- ここにアイコン -->
            <div class="card_icon">
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
            </div><!-- card_icon -->
        </div><!-- card_wrap2 -->
    </div><!-- card_wrap1 -->
</a><!-- リンク -->

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
