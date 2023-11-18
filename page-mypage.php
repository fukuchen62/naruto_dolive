<?php
get_header();

?>

<!-- パンくずリスト -->
<?php get_template_part('template-parts/breadcrumb'); ?>

<h2>mypage.php</h2>

<h2>マイページです</h2>


<!-- 観光のループ -->
<div>
    <h2>以下は観光</h2>
    <?php
    // お気に入りの投稿を変数に代入
    $favorites = get_user_favorites();
    // クエリのための引数を設定するための配列 $args を作成
    $args = array(
        // 投稿のIDを取得
        'post__in' => $favorites,
        // 取得する投稿タイプの指定
        'post_type' => 'tour',
        // 1ページに表示する投稿数の指定
        'posts_per_page' => 3
    );
    // 与えられた引数で新しいwp_queryオブジェクトを作成
    $the_query = new WP_Query($args);
    ?>
    <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <article>
                <!-- ループない各々の詳細ページへ -->
                <a href="<?php the_permalink(); ?>">
                    <h3><?php the_title(); ?></h3>
                </a>

                <p><?php the_post_thumbnail('medium'); ?></p>
                <p><?php the_field('address'); ?></p>

                <?php
                // 緯度と経度、タイトルを取得し、配列に代入
                $latitude = get_post_meta(get_the_ID(), 'latitude', true);
                $longitude = get_post_meta(get_the_ID(), 'longitude', true);
                $facilityName = get_the_title();

                // $argsに代入したそれぞれの施設の情報を配列に追加
                $favorite[] = array(
                    'lat' => $latitude,
                    'lng' => $longitude,
                    'facilityName' => $facilityName
                );
                ?>

                <p>Latitude: <?php echo $latitude; ?></p>
                <p>Longitude: <?php echo $longitude; ?></p>
                <p>施設名: <?php echo $facilityName; ?></p>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
</div>

<!-- 食べるのループ -->
<div>
    <h2>以下は食べる</h2>
    <?php
    $favorites = get_user_favorites();
    $args = array(
        'post__in' => $favorites,
        'post_type' => 'eat',
        'posts_per_page' => 3
    );
    $the_query = new WP_Query($args);
    ?>
    <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <article>
                <a href="<?php the_permalink(); ?>">
                    <h3><?php the_title(); ?></h3>
                </a>

                <p><?php the_post_thumbnail('medium'); ?></p>
                <p><?php the_field('address'); ?></p>

                <?php
                // 緯度と経度の値を取得する
                $latitude = get_post_meta(get_the_ID(), 'latitude', true);
                $longitude = get_post_meta(get_the_ID(), 'longitude', true);
                $facilityName = get_the_title();

                $favorite[] = array('lat' => $latitude, 'lng' => $longitude, 'facilityName' => $facilityName);
                ?>

                <p>Latitude: <?php echo $latitude; ?></p>
                <p>Longitude: <?php echo $longitude; ?></p>
                <p>施設名: <?php echo $facilityName; ?></p>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
</div>






<div id="map"></div>
<!-- Googleマップ表示URLはこれじゃないとだめ -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpvX7RaM_ofrk2WWXrnydT9156PzLJBuA&callback=initMap" async defer></script>
<script>
    // Google Maps JavaScript APIの地図を初期化するための関数 initMap
    function initMap() {
        let map = new google.maps.Map(document.getElementById("map"), {
            // 地図表示のスーむレベル
            zoom: 12,
            // 地図の初期値 これは緯度と経度を中心にしている。本番は鳴門を中心にする予定
            center: {
                lat: <?php echo $latitude; ?>,
                lng: <?php echo $longitude; ?>
            }
        });

        // 普通に変数に入れるとjsに適しておらず代入できない。そのためJSON形式にして配列を渡している
        let favorite = <?php echo json_encode($favorite); ?>;

        // マーカーを表示するループ
        for (let i = 0; i < favorite.length; i++) {
            let location = favorite[i];

            // Google Maps APIの Marker クラスを使用(マーカーを表示させるために使用される)
            let marker = new google.maps.Marker({
                // positionはマーカーを表示させる位置を指定。locationの緯度経度で生成
                position: {
                    lat: parseFloat(location.lat),
                    lng: parseFloat(location.lng)
                },
                // マーカーを表示するオブジェクトの指定
                map: map,
                // ホバーした時に表示されるもの
            });

            // Google Maps APIの InfoWindow クラス
            // インフォウィンドウを作成してマーカーに設定
            let infowindow = new google.maps.InfoWindow({
                content: location.facilityName
            });

            // マーカー上でインフォウィンドウを開く、第一引数に表示させるオブジェクト、第二引数に情報ウィンドウを表示するマーカーオブジェクト
            // これがないと店名がでない
            infowindow.open(map, marker);
        }
    }
</script>





<a href="<?php echo home_url(''); ?>">ホームへ</a><br>







<?php
get_footer();
?>