<?php
get_header();

?>
<main>
    <h2 id="toparea" class="toparea">
        <?php $category = get_the_category();
        if (!empty($category)) {
            echo esc_html($category[0]->name);
        }
        ?>
    </h2>
    <div class="main_wrap">
        <?php get_template_part('template-parts/breadcrumb'); ?>
        <div class="content_wrap">
            <h3 class="h3_center"><?php the_title(); ?></h3>
            <div class="archive_col">
                <div class="card2">
                    <div class="card2_wrap">

                        <div class="card2_content">
                            <div class="card2_img">

                                <!-- サムネあれば出力 -->
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium'); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/running_around.png" alt="no-image">
                                <?php endif; ?>

                            </div>

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
                <aside class="aside_wrap aside_top">
                    <!-- <div class="aside_title">━━ カテゴリ別 ━━</div> -->
                    <?php get_sidebar('categories'); ?>

                </aside>

            </div>
        </div>
    </div>
</main>
<?php
get_footer();
