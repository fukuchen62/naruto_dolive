<?php get_header(); ?>
<main>
    <!---- トップエリアタイトル ---->
    <section id="toparea" class="toparea">
        <h2>目的別一覧：遊ぶ</h2>
    </section><!-- id="toparea" class="toparea" -->

    <div class="main_wrap">
        <!---- パンくずリスト ---->

        <?php get_template_part('template-parts/breadcrumb'); ?>
        <!---- カテゴリタイトル ---->
        <div class="center_title">
            <h3 class="middle_title">遊ぶ</h3>
        </div><!-- center_title -->

        <!---- 地図とカテゴリ別サイドバー ---->
        <div class="menu_wrap">
            <!---- 地図 ---->
            <div class="map_content" id="map">

            </div><!-- map_content-->

            <!---- pc版カテゴリ別サイドバー ---->
            <aside class="aside_wrap aside_top">
                <div class="aside_title">━━ カテゴリ別 ━━
                </div><!-- aside_title-->
                <ul>
                    <li>
                        <a href="<?php echo home_url('/eat') ?>">食べる(
                            <?php
                            $count_custom = wp_count_posts('eat');
                            $num = $count_custom->publish;
                            echo $num; ?>
                            )
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/enjoy') ?>">遊ぶ(
                            <?php
                            $count_custom = wp_count_posts('enjoy');
                            $num = $count_custom->publish;
                            echo $num; ?>
                            )
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/tour') ?>">観光(
                            <?php
                            $count_custom = wp_count_posts('tour');
                            $num = $count_custom->publish;
                            echo $num; ?>
                            )
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('/stay') ?>">宿泊(
                            <?php
                            $count_custom = wp_count_posts('stay');
                            $num = $count_custom->publish;
                            echo $num; ?>
                            )
                        </a>
                    </li>
                </ul>
            </aside><!-- aside_wrap aside_top-->
        </div><!-- menu_wrap -->

        <!---- 記事一覧 ---->
        <section class="archive_col sec01">
            <!---- 記事を３件まで並べる ---->
            <div class="card_3col">
                <!-- 記事があればある分だけループさせる -->
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <!---- １件ずつカード型で表示 ---->
                        <?php get_template_part('template-parts/loop', 'content'); ?>
                        <!-- 緯度経度を取得してマップに表示 -->
                        <?php
                        $latitude = get_post_meta(get_the_ID(), 'latitude', true);
                        $longitude = get_post_meta(get_the_ID(), 'longitude', true);
                        $facilityName = get_the_title();

                        $place[] = array(
                            'lat' => $latitude,
                            'lng' => $longitude,
                            'facilityName' => $facilityName
                        );
                        ?>

                    <?php endwhile; ?>
                <?php endif ?>
            </div><!-- card_3col -->

            <!---- moreボタン ---->
            <div class="more_btn more01">
                <div class="more_link">
                    <span class="more">more</span>
                </div><!-- more_link -->
            </div><!-- more_btn more01 -->

            <!---- closeボタン ---->
            <div class="close_btn close01">
                <div class="close_link">
                    <span class="close">close</span>
                </div><!-- close_link -->
            </div><!-- close_btn close01 -->

        </section><!-- archive_col sec01 -->

        <!-- スマホ版カテゴリ別リンク -->
        <aside class="aside_wrap aside_bottom">
            <div class="aside_title">━━ カテゴリ別 ━━
            </div><!-- aside_title -->
            <ul>
                <li>
                    <a href="<?php echo home_url('/eat') ?>">食べる(
                        <?php
                        $count_custom = wp_count_posts('eat');
                        $num = $count_custom->publish;
                        echo $num; ?>
                        )
                    </a>
                </li>
                <li>
                    <a href="<?php echo home_url('/enjoy') ?>">遊ぶ(
                        <?php
                        $count_custom = wp_count_posts('enjoy');
                        $num = $count_custom->publish;
                        echo $num; ?>
                        )
                    </a>
                </li>
                <li>
                    <a href="<?php echo home_url('/tour') ?>">観光(
                        <?php
                        $count_custom = wp_count_posts('tour');
                        $num = $count_custom->publish;
                        echo $num; ?>
                        )
                    </a>
                </li>
                <li>
                    <a href="<?php echo home_url('/stay') ?>">宿泊(
                        <?php
                        $count_custom = wp_count_posts('stay');
                        $num = $count_custom->publish;
                        echo $num; ?>
                        )
                    </a>
                </li>
            </ul>
        </aside><!-- aside_wrap aside_bottom -->
    </div><!-- main_wrap -->
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

    // ページ遷移後も表示されるように
    window.onload = function() {
        initMap();
    };
</script>

<?php get_footer(); ?>
