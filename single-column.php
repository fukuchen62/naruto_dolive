<?php
get_header();
?>

<main>
    <!-- ターム取得 -->
    <?php
    $current_page_id = get_the_ID();
    $taxonomy = 'column_type';
    $terms = get_the_terms($current_page_id, $taxonomy);
    if (!empty($terms) && !is_wp_error($terms)) {
        $term = $terms[0]->name;
    }
    ?>
    <!-- h1に変わるかも  -->
    <h2 id="toparea" class="toparea page_title"><?php echo $term; ?></h2>

    <div class="main_wrap">
        <?php get_template_part('template-parts/breadcrumb'); ?>
        <div class="content_wrap">
            <h3 class="h3_center"><?php the_title(); ?></h3>
            <div class="archive_col">
                <div class="card2">
                    <div class="card2_wrap">
                        <div class="card2_content">
                            <br>

                            <div class="card2_text"><?php the_content(); ?></div>
                        </div>
                    </div>
                    <div class="pageturn">
                        <div class="p_before">
                            <?php if (get_previous_post_link()) : ?>
                                <?php $previous_post = get_previous_post(); ?>
                                <div class="p_arrow_wrapper">
                                    <a href="<?php echo get_permalink($previous_post); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/left_page.png" alt=""></a>
                                </div>
                            <?php endif; ?>
                            <?php previous_post_link('%link', '%title') ?>
                        </div>
                        <div class="p_next">
                            <?php if (get_next_post_link()) : ?>
                                <?php $next_post = get_next_post(); ?>
                                <div class="n_arrow_wrapper">
                                    <a href="<?php echo get_permalink($next_post); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/right_page.png" alt=""></a>
                                </div>
                            <?php endif; ?>

                            <?php next_post_link('%link', '%title'); ?>
                        </div>
                    </div>
                </div>

                <!-- サイドバー -->
                <aside class="aside_wrap aside_top">
                    <div class="aside_title">━━ カテゴリ別 ━━</div>
                    <ul>
                        <?php
                        $categories = get_categories(array(
                            'taxonomy' => 'column_type',
                            'orderby' => 'ID',
                            'order' => 'ASC',
                            'hide_empty' => false,
                        ));

                        foreach ($categories as $category) {
                            $category_link = get_category_link($category->term_id);
                            $post_count = $category->count;
                            echo '<li><a href="' . $category_link . '">' . $category->name . ' (' . $post_count . ')</a></li>';
                        }
                        ?>
                    </ul>
                </aside>

            </div>
        </div>
    </div>
</main>

<?php
get_footer();

?>