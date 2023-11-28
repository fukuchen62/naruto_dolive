<?php
get_header();

?>


<main>
    <section id="toparea" class="toparea">
        <h2>マイページ</h2>
    </section>
    <div class="main_wrap">
        <div class="breadcrumb"><?php get_template_part('template-parts/breadcrumb'); ?></div>
        <section class="menu_wrap">
            <!-- <aside class="aside_wrap aside_top">
                </aside> -->
        </section>

        <div class="center_title">
            <h3>お気に入りの【食べる】</h3>
        </div>

        <?php
        // お気に入りの投稿を変数に代入
        $favorites = get_user_favorites();
        // クエリのための引数を設定するための配列 $args を作成
        $args = array(
            // 投稿のIDを取得
            'post__in' => $favorites,
            // 取得する投稿タイプの指定
            'post_type' => 'eat',
            // 1ページに表示する投稿数の指定
            'posts_per_page' => 3
        );

        ?>

        <!-- 与えられた引数で新しいwp_queryオブジェクトを作成 -->
        <?php $the_query = new WP_Query($args); ?>
        <section class="archive_col">
            <div class="card_3col">
                <?php if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

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


                        <a href="<?php the_permalink(); ?>" class="card1">
                            <div class="card1_wrap">
                                <div class="card1_content">
                                    <div class="card1_img">
                                        <?php
                                        $pic1 = get_field('pic1');
                                        //大サイズ画像のURL
                                        $pic1_url = $pic1['sizes']['medium'];
                                        ?>
                                        <img src="<?php echo $pic1_url; ?>" alt="">
                                    </div>
                                    <h4><?php echo $facilityName; ?></h4>
                                    <div class="card1_text"><?php the_field('excerpt'); ?></div>
                                </div>
                            </div>
                        </a>

                    <?php endwhile; ?>
                <?php else : ?>
                    <h4 class="no_favorite">お気に入り登録０件
                    </h4>
                <?php endif; ?>
                <div>
                    <?php wp_reset_postdata(); ?>
        </section>


        <div class="center_title">
            <h3>お気に入りの【遊ぶ】</h3>
        </div>

        <?php
        // お気に入りの投稿を変数に代入
        $favorites = get_user_favorites();
        // クエリのための引数を設定するための配列 $args を作成
        $args = array(
            // 投稿のIDを取得
            'post__in' => $favorites,
            // 取得する投稿タイプの指定
            'post_type' => 'enjoy',
            // 1ページに表示する投稿数の指定
            'posts_per_page' => 3
        );

        ?>

        <!-- 与えられた引数で新しいwp_queryオブジェクトを作成 -->
        <?php $the_query = new WP_Query($args); ?>
        <section class="archive_col">
            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

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


                    <div class="card_3col">
                        <a href="<?php the_permalink(); ?>" class="card1">
                            <div class="card1_wrap">
                                <div class="card1_content">
                                    <div class="card1_img">
                                        <?php
                                        $pic1 = get_field('pic1');
                                        //大サイズ画像のURL
                                        $pic1_url = $pic1['sizes']['medium'];
                                        ?>
                                        <img src="<?php echo $pic1_url; ?>" alt="">
                                    </div>
                                    <h4><?php echo $facilityName; ?></h4>
                                    <div class="card1_text"><?php the_field('text'); ?></div>
                                </div>
                            </div>
                        </a>
                    <?php endwhile; ?>
                <?php else : ?>
                    <h4 class="no_favorite">お気に入り登録０件
                    </h4>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>

        </section>


        <div class="center_title">
            <h3>お気に入りの【観光】</h3>
        </div>

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

        ?>

        <!-- 与えられた引数で新しいwp_queryオブジェクトを作成 -->
        <?php $the_query = new WP_Query($args); ?>
        <section class="archive_col">
            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

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


                    <div class="card_3col">
                        <a href="<?php the_permalink(); ?>" class="card1">
                            <div class="card1_wrap">
                                <div class="card1_content">
                                    <div class="card1_img">
                                        <?php
                                        $pic1 = get_field('pic1');
                                        //大サイズ画像のURL
                                        $pic1_url = $pic1['sizes']['medium'];
                                        ?>
                                        <img src="<?php echo $pic1_url; ?>" alt="">
                                    </div>
                                    <h4><?php echo $facilityName; ?></h4>
                                    <div class="card1_text"><?php the_field('text'); ?></div>
                                </div>
                            </div>
                        </a>
                    <?php endwhile; ?>
                <?php else : ?>
                    <h4 class="no_favorite">お気に入り登録０件
                    </h4>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
        </section>



        <div class="center_title">
            <h3>お気に入りの【観光】</h3>
        </div>

        <?php
        // お気に入りの投稿を変数に代入
        $favorites = get_user_favorites();
        // クエリのための引数を設定するための配列 $args を作成
        $args = array(
            // 投稿のIDを取得
            'post__in' => $favorites,
            // 取得する投稿タイプの指定
            'post_type' => 'stay',
            // 1ページに表示する投稿数の指定
            'posts_per_page' => 3
        );

        ?>

        <!-- 与えられた引数で新しいwp_queryオブジェクトを作成 -->
        <?php $the_query = new WP_Query($args); ?>
        <section class="archive_col">
            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

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


                    <div class="card_3col">
                        <a href="<?php the_permalink(); ?>" class="card1">
                            <div class="card1_wrap">
                                <div class="card1_content">
                                    <div class="card1_img">
                                        <?php
                                        $pic1 = get_field('pic1');
                                        //大サイズ画像のURL
                                        $pic1_url = $pic1['sizes']['medium'];
                                        ?>
                                        <img src="<?php echo $pic1_url; ?>" alt="">
                                    </div>
                                    <h4><?php echo $facilityName; ?></h4>
                                    <div class="card1_text"><?php the_field('text'); ?></div>
                                </div>
                            </div>
                        </a>
                    <?php endwhile; ?>
                <?php else : ?>
                    <h4 class="no_favorite">お気に入り登録０件
                    </h4>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
        </section>


        <section class="course_map">
            <!-- googlemap -->
            <div class="map" id="map">
            </div>
        </section>
    </div>
</main>


<!-- <div id="map"></div> -->
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

<?php
get_footer();
?>