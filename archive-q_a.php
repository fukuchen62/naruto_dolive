<?php get_header(); ?>

<main>
    <section id="toparea" class="toparea">
        <h2>Q&A</h2>
    </section>
    <div class="main_wrap">
        <!---- パンくずリスト ---->

        <?php get_template_part('template-parts/breadcrumb'); ?>
        <div class="content_wrap">
            <section class="menu_wrap">
                <!-- <aside class="aside_wrap aside_top">
                </aside> -->
            </section>

            <div class="center_title">
                <h3 class="h3_center">よくある質問</h3>
            </div>
            <div class="accordion">
                <section>
                    <div class="container">
                        <div>
                            <!-- ここに地図とボタンが入る -->
                        </div>
                        <div>
                            <!-- ここに一覧が入る -->
                            <!-- 記事があればある分だけループさせる -->
                            <?php if (have_posts()) : ?>
                                <?php while (have_posts()) : the_post(); ?>
                                    <div>
                                        <div class="option">
                                            <?php $toggle_id = 'toggle-' . $post->ID;
                                            ?>
                                            <input type="checkbox" id="<?php echo $toggle_id; ?>" class="toggle">
                                            <label class="title" for="<?php echo $toggle_id; ?>">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/q.png" alt="q" class="q_aimg">
                                                <span class="question_span">
                                                    <?php the_field('question'); ?>
                                                </span>
                                            </label>

                                            <div class="content">
                                                <div class="answer_wrap">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/a.png" alt="a" class="q_aimg">
                                                    <p><?php the_field('answer'); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif ?>

                        </div><!-- sec_header -->
                    </div><!-- container -->
                </section>
            </div>


            <section class="archive_col">
                <!-- <h3>test</h3> -->
            </section>




        </div><!-- content_wrap -->
    </div><!-- main_wrap -->
</main>
<?php get_footer(); ?>
