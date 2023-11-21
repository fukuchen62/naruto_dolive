<?php
get_header();

?>

<h2>front.html</h2>

<a href="<?php echo get_permalink(1); ?>">hello world</a>


<h2><a href="<?php echo home_url('/eat') ?>">食べる一覧へ</a></h2>
<h2><a href="<?php echo home_url('/tour') ?>">観光一覧へ</a></h2>
<h2><a href="<?php echo home_url('/stay') ?>">宿泊一覧へ</a></h2>
<h2><a href="<?php echo home_url('/enjoy') ?>">遊ぶ一覧へ</a></h2>
<h2><a href="<?php echo home_url('/column') ?>">コラム一覧へ</a></h2>
<h2><a href="<?php echo home_url('/q_a') ?>">Q&A一覧へ</a></h2>
<h2><a href="<?php echo get_permalink(239) ?>">マイページへ</a></h2>

<?php get_search_form(); ?>
<hr>


<!-- おすすめキーワードを出す関数、第一引数にulを囲むタグ、第二引数に閉じタグ、第さん引数に表示数 -->
<h2>おすすめキーワード</h2>
<?php sm_list_popular_searches('<div class="test">', '</div>', 3); ?>

<h2>ドライブコース</h2>
<p><a href="<?php echo get_permalink(324); ?>">コース1</a></p>
<p><a href="<?php echo get_permalink(329); ?>">コース2</a></p>
<p><a href="<?php echo get_permalink(520); ?>">コース3</a></p>
<p><a href="">コース4</a></p>
<p><a href="">コース5</a></p>
<hr>

<!-- 新着情報のループ -->
<div>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div>
                <?php get_template_part('template-parts/loop', 'news'); ?>
            </div>
            <hr>
        <?php endwhile; ?>
    <?php endif; ?>
</div>


<?php
$news = get_term_by('slug', 'news', 'category');
$news_link = get_term_link($news, 'category');
?>
<a href="<?php echo $news_link; ?>" class="btn btn-default" ?>一覧へ</a>


<section>
    <h2>コラム記事</h2>
    <!-- カスタム投稿タイプの指定と、表示件数の指定=3件 -->
    <?php $loop_topics = new wp_Query(array('post_type' => 'column', 'posts_per_page' => 3)); ?>
    <div class="">
        <!-- 3件まで投稿記事があれば表示していく -->
        <?php while ($loop_topics->have_posts()) : $loop_topics->the_post(); ?>
            <div>

                <!-- 投稿の個別のページのURLを表示する -->
                <a href="<?php the_permalink(); ?>">
                    <!-- サムネイルの表示 -->

                    <!-- サムネイルがあれば、ある分だけ中サイズでループして表示する -->
                    <?php if (has_post_thumbnail()) : ?>
                        <figure class="column-pic">
                            <?php the_post_thumbnail('medium'); ?>

                        </figure>
                    <?php endif; ?>
                </a>

                <!-- タイトルの取得 -->
                <p><span><?php echo get_the_title(); ?></span></p>

                <div class="news_desc">
                    <p><?php echo mb_substr(get_the_excerpt(), 0, 25) . '…'; ?></p>
                    <p><a href="<?php the_permalink(); ?>">[続きを読む]</a></p>
                </div>
            </div>

        <?php endwhile; ?>
    </div>

    <div class="button">
        <p class="more"><a href="<?php echo home_url('/column') ?>">すべてのコラムを見る</a></p>
    </div>
</section>
<hr>

<div class="instagram-article">
    <?php echo do_shortcode('[]'); ?>
</div>

<hr>

<?php
get_footer();
?>