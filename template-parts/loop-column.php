<div class="news_meta">
    <?php the_category();  ?>
</div>



<!-- 投稿の個別ページのURLを表示し、以下の内容をリンクにする-->
<a href="<?php the_permalink(); ?>">
    <div class="">
        <div class="">
            <!-- アイキャッチ画像の表示 -->
            <div class="card1_img">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('medium'); ?>
                <?php endif; ?>
            </div>

            <!-- 店名の表示 -->
            <h4><?php the_title(); ?></h4>

            <!-- 抜粋の表示 -->
            <div class="card1_text"><?php the_field('excerpt'); ?>
            </div>


        </div>
    </div>
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
