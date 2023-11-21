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
                                <?php get_template_part('template-parts/loop', 'content'); ?>
                                <?php if (has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>"></a>

                                <?php else : ?>
                                    <img src="<?php echo esc_url(home_url('/')); ?>img/ファイル名" alt="<?php the_title(); ?>">

                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
                <?php if (function_exists('wp_pagenavi')) : ?>
                    <div class="pagination">
                        <?php wp_pagenavi(); ?>
                    </div>

                <?php endif ?>
            </div>

            <!-- ページナビゲーションの設定 -->


            <!-- サイドバー -->
            <h2>以下サイドバーです</h2>

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
                        $category_link = get_category_link($category->term_id);
                        $post_count = $category->count;
                        echo '<li><a href="' . $category_link . '">' . $category->name . '</a> (' . $post_count . ')</li>';
                    }
                    ?>
                </ul>
            </div>


        </aside>



    </div>
</main>

<?php
get_footer(); ?>