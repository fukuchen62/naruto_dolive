<?php
get_header();

?>

<h2 class="pageTitle">コラム記事タイトル</h2>
<p>コラム記事の説明コラム記事の説明コラム記事の説明</p>
<?php get_template_part('template-parts/breadcrumb'); ?>
<main class="main">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-9">


                <div class="row">

                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="col-md-4">
                                <?php get_template_part('template-parts/loop', 'news'); ?>
                                <a href="<?php the_permalink(); ?>"><?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('medium'); ?>
                                    <?php else : ?>
                                        <img src="<?php echo esc_url(home_url('/')); ?>img/ファイル名" alt="<?php the_title(); ?>"></a>
                            <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
                <?php if (function_exists('wp_pagenavi')) {
                    wp_pagenavi();
                } ?>
            </div>

            <div class="col-12 col-md-3">
                <?php get_sidebar('categories'); ?>
                <?php get_sidebar('archives'); ?>
            </div>
        </div>
    </div>
</main>

<?php
get_footer(); ?>