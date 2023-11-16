<?php
get_header();

?>

<h2>front.html</h2>

<a href="<?php echo get_permalink(1); ?>">hello world</a>

<?php get_search_form(); ?>

<h2><a href="<?php echo home_url('/eat') ?>">食べる一覧へ</a></h2>
<h2><a href="<?php echo home_url('/tour') ?>">観光一覧へ</a></h2>
<h2><a href="<?php echo home_url('/eat') ?>">食べる一覧へ</a></h2>
<h2><a href="<?php echo home_url('/column') ?>">コラム一覧へ</a></h2>
<h2><a href="<?php echo get_permalink(239) ?>">マイページへ</a></h2>


<div class="row">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="col-md-4">
                <?php get_template_part('template-parts/loop', 'news'); ?>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>


<?php
$news = get_term_by('slug', 'news', 'category');
$news_link = get_term_link($news, 'category');
?>
<a href="<?php echo $news_link; ?>" class="btn btn-default" ?>一覧へ</a>



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
                <figure class="column-pic">
                    <!-- サムネイルがあれば、ある分だけ中サイズでループして表示する -->
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('medium'); ?>
                    <?php endif; ?>
                </figure>
            </a>
            <!-- 日付の取得 -->
            <?php echo get_the_date(); ?>
            <?php echo the_field('column_type'); ?>

            <!-- タイトルの取得 -->
            <p><span><?php echo get_the_title(); ?></span></p>

            <div class="news_desc">
                <p><?php the_excerpt(); ?></p>
                <p><a href="<?php the_permalink(); ?>">[続きを読む]</a></p>
            </div>
        </div>

    <?php endwhile; ?>


</div>


<div class="instagram-article">
    <?php echo do_shortcode('[]'); ?>
</div>



<?php
get_footer();
?>