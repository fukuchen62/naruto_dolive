<?php get_header(); ?>
<main>
    <h1>========『目的別一覧』========</h1>
    <!-- パンくずリスト -->
    <?php get_template_part('template-parts/breadcrumb'); ?>
    <h1>【食べる】</h1>

    <p>[ここに地図が入ります]</p>
    <div id="map"></div>
    <p>カテゴリ別</p>
    <h3>
        <a href="<?php echo home_url('/eat') ?>">
            食べる(
            <?php
            $count_custom = wp_count_posts('eat');
            $num = $count_custom->publish;
            echo $num; ?>件 )
        </a>
    </h3>

    <h3>
        <a href="<?php echo home_url('/enjoy') ?>">
            遊ぶ(
            <?php
            $count_custom = wp_count_posts('enjoy');
            $num = $count_custom->publish;
            echo $num; ?>件 )
        </a>
    </h3>

    <h3>
        <a href="<?php echo home_url('/tour') ?>">
            観光(
            <?php
            $count_custom = wp_count_posts('tour');
            $num = $count_custom->publish;
            echo $num; ?>件 )
        </a>
    </h3>

    <h3>
        <a href="<?php echo home_url('/stay') ?>">
            宿泊(
            <?php
            $count_custom = wp_count_posts('stay');
            $num = $count_custom->publish;
            echo $num; ?>件 )
        </a>
    </h3>



    <!-- タクソノミーを指定して配列のターム情報を取得する -->
    <!-- タクソノミーのタイトルの取得 -->
    <?php
    $eat_types = get_terms(array('taxonomy' => 'eat_type'));
    if (!empty($eat_types)) :
    ?>
        <?php foreach ($eat_types as $eat_type) : ?>

            <h2>[[[<?php echo $eat_type->name ?>]]]</h2>

            <section>
                <div class="container">
                    <div class="map_sideber">
                        <!-- ここに地図とボタンが入る -->
                    </div><!-- map_sideber -->
                    <div class="contents">
                        <!-- ここに一覧が入る -->


                        <?php
                        //食べるの投稿タイプ
                        $args = array(
                            'post_type' => 'eat',
                            'post_per_page' => 3,
                        );
                        //料理の種類で絞り込む
                        $eattax = array('relation' => 'AND');
                        $eattax[] = array(
                            'taxonomy' => 'eat_type',
                            'terms' => $eat_type->slug,
                            'field' => 'slug',
                        );
                        $args['tax_query'] = $eattax;

                        $the_query = new WP_Query($args);

                        //記事があればある分だけループさせる
                        if ($the_query->have_posts()) :
                        ?>
                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
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

                                <div>
                                    <!-- ここに内容を表示させる -->
                                    <?php get_template_part('template-parts/loop', 'content'); ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif ?>
                    </div><!-- contents -->
                </div><!-- container -->
            </section>

        <?php endforeach; ?>
    <?php endif; ?>

</main>

<!-- 以下地図 -->
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
        let place = <?php echo json_encode($place); ?>;

        // マーカーを表示するループ
        for (let i = 0; i < place.length; i++) {
            let location = place[i];

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

<?php get_footer(); ?>