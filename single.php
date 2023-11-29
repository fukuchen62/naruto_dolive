<?php
get_header();

?>
<main>
    <section id="toparea" class="toparea">
        <h2 class="page_title"><?php the_category('news'); ?></h2>
    </section>
    <div class="main_wrap">
        <?php get_template_part('template-parts/breadcrumb'); ?>
        <div class="archive_col">
            <div class="card2">
                <div class="card2_wrap">
                    <div class="card2_content">
                        <div class="card2_img">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                        <div class="center_title">
                            <h3 class="middle_title"><?php the_title(); ?></h3>
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
</main>
<?php
get_footer();
