<?php
get_header();

?>

<?php get_template_part('template-parts/breadcrumb'); ?>
<h2>index.php</h2>

<h2>新着情報一覧</h2>

<div class="row">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div>
                <?php get_template_part('template-parts/loop', 'news'); ?>
            </div>
            <hr>
        <?php endwhile; ?>
    <?php endif; ?>
</div>

<h2>サイドバーです</h2>
<!-- サイドバー出力 -->
<?php get_sidebar('categories'); ?>

<a href="<?php echo home_url(''); ?>">ホームへ</a>

<?php if (function_exists('wp_pagenavi')) {
    wp_pagenavi();
} ?>

<?php
get_footer();
