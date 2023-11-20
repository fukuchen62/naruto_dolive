<?php
get_header();

?>

<h2>コラム一覧</h2>
<p></p>
<?php get_template_part('template-parts/breadcrumb'); ?>
<main>
    <div>
        <div>
            <div>


                <div>

                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <div>
                                <?php get_template_part('template-parts/loop', 'news'); ?>
                                <?php if (has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>"></a>

                                <?php else : ?>
                                    <img src="<?php echo esc_url(home_url('/')); ?>img/ファイル名" alt="<?php the_title(); ?>">

                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
                <?php if (function_exists('wp_pagenavi')) {
                    wp_pagenavi();
                } ?>
            </div>


            <!-- サイドバー -->
            <h2>以下サイドバーです</h2>
            <div>
                <?php get_sidebar('archives'); ?>
            </div>
        </div>

        <aside>
            <div>
                <h3>カテゴリー一覧</h3>
                <ul>
                    <?php
                    $categories = get_categories(array(
                        'taxonomy' => 'column_type',
                        'orderby' => 'name',
                        'order' => 'ASC',
                        'hide_empty' => false,
                    ));

                    foreach ($categories as $category) {
                        echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
                    }
                    ?>
                </ul>
            </div>


        </aside>



    </div>
</main>

<?php
get_footer(); ?>