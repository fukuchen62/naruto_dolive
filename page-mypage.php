<?php
get_header();

?>

<h2>mypage.php</h2>

<h2>マイページです</h2>

<?php the_content(); ?>
<a href="<?php echo home_url(''); ?>">ホームへ</a><br>
<?php

$json_data = '[{"site_id":1,"posts":{"1":236,"3":256,"4":262,"5":253,"6":281,"7":317},"groups":[{"group_id":1,"site_id":1,"group_name":"Default List","posts":{"1":236,"3":256,"4":262,"5":253,"6":281,"7":317}}]}]';

// JSONデータを連想配列に変換する
$array_data = json_decode($json_data, true);
echo '<pre>';
print_r($array_data);
echo '</pre>';

// 連想配列として扱う
$posts = $array_data[0]['posts'];

echo '<pre>';
print_r($posts);
echo '</pre>';


?>

<?php
get_footer();
?>