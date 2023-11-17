<?php
get_header();

?>

<!-- パンくずリスト -->
<?php get_template_part('template-parts/breadcrumb'); ?>

<h2>mypage.php</h2>

<h2>マイページです</h2>

<?php get_sidebar('categories'); ?>

<?php the_content(); ?>


<div>
    <?php
    $favorites = get_user_favorites();
    $args = array(
        'post__in' => $favorites,
        'post_type' => 'tour',
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
                <p><?php echo get_the_content(); ?></p>
                <p><?php the_field('address'); ?></p>

                <?php
                // 緯度と経度の値を取得する
                $latitude = get_post_meta(get_the_ID(), 'latitude', true);
                $longitude = get_post_meta(get_the_ID(), 'longitude', true);
                $facilityName = get_the_title();

                $marker_locations[] = array('lat' => $latitude, 'lng' => $longitude, 'facilityName' => $facilityName);
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpvX7RaM_ofrk2WWXrnydT9156PzLJBuA&callback=initMap" async defer></script>
<script>
    function initMap() {
        var map = new google.maps.Map(document.getElementById("map"), {
            zoom: 12,
            center: {
                lat: <?php echo $latitude; ?>,
                lng: <?php echo $longitude; ?>
            }
        });

        var markerLocations = <?php echo json_encode($marker_locations); ?>;
        console.log(markerLocations);

        // マーカーを表示するループ
        for (var i = 0; i < markerLocations.length; i++) {
            var location = markerLocations[i];

            var marker = new google.maps.Marker({
                position: {
                    lat: parseFloat(location.lat),
                    lng: parseFloat(location.lng)
                },
                map: map,
                title: 'test'
            });

            // インフォウィンドウを作成してマーカーに設定
            var infowindow = new google.maps.InfoWindow({
                content: location.facilityName
            });

            // マーカー上でインフォウィンドウを開く
            infowindow.open(map, marker);
        }
    }
</script>





<a href="<?php echo home_url(''); ?>">ホームへ</a><br>







<?php
get_footer();
?>