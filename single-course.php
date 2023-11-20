<?php get_header(); ?>

<!-- パンくずリスト -->
<?php get_template_part('template-parts/breadcrumb'); ?>

<h1>ドライブコース</h1>

<main class="main">
    <section class="sec">
        <h2>コース詳細</h2>
        <div>
            <?php echo the_content(); ?>
        </div>
        <div class="container">
            <h2><?php the_title(); ?></h2>

            <div class="info">
                <div class="container">

                    <ul class="info_list">
                        <li>
                            <b>地図</b><!-- 必須 -->
                            <span><?php the_field('iframe'); ?></span>
                        </li>

                        <li>
                            <b>スポット</b><!-- 必須 -->
                            <?php $page_link = get_field('page_link'); ?>
                            <?php if ($page_link) : ?>
                                <?php $post_id = url_to_postid($page_link); ?>
                                <?php $post_query = new WP_Query(array(
                                    'p' => $post_id,
                                    'post_type' => 'any',
                                    'post_status' => 'publish'
                                )); ?>
                                <?php if ($post_query->have_posts()) : ?>
                                    <?php while ($post_query->have_posts()) : $post_query->the_post(); ?>
                                        <span><a href="<?php echo esc_url($page_link); ?>"></a></span>
                                        <?php get_template_part('template-parts/loop', 'content'); ?>
                                        <hr>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <?php wp_reset_postdata(); ?>
                            <?php endif; ?>
                        </li>

                        <li>
                            <b>開始時間</b><!-- 必須 -->
                            <span><?php the_field('start_time'); ?></span>
                        </li>
                        <li>
                            <b>滞在時間</b><!-- 必須 -->
                            <span><?php the_field('stay_time1'); ?></span>
                        </li>
                        <hr>
                        <?php for ($i = 2; $i <= 9; $i++) : ?>
                            <?php $page_link = get_field('page_link' . $i); ?>
                            <?php if ($page_link) : ?>
                                <li>
                                    <b>スポット</b>
                                    <a href="<?php the_field('page_link' . $i); ?>"><span>
                                            <?php
                                            $post_query = new WP_Query(array(
                                                'post_type' => 'any',
                                                'post_status' => 'publish',
                                                'p' => url_to_postid($page_link)
                                            ));

                                            if ($post_query->have_posts()) {
                                                while ($post_query->have_posts()) {
                                                    $post_query->the_post();
                                                    get_template_part('template-parts/loop', 'content');
                                                }
                                            }

                                            wp_reset_postdata();
                                            ?>
                                        </span></a>
                                </li>
                                <li>
                                    <b>移動時間</b>
                                    <span><?php the_field('move_time' . $i); ?></span>
                                </li>
                                <li>
                                    <b>滞在時間</b>
                                    <span><?php the_field('stay_time' . $i); ?></span>
                                </li>
                                <hr>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </ul>
                </div>
            </div>


        </div>

        <?php for ($i = 10; $i <= 13; $i++) : ?>
            <?php $page_link = get_field('page_link' . $i); ?>
            <?php if ($page_link) : ?>
                <div>
                    <h2><?php the_title(); ?></h2>
                    <a href="<?php the_field('page_link' . $i); ?>"><span>
                            <?php
                            $post_query = new WP_Query(array(
                                'post_type' => 'any',
                                'post_status' => 'publish',
                                'p' => url_to_postid($page_link)
                            ));

                            if ($post_query->have_posts()) {
                                while ($post_query->have_posts()) {
                                    $post_query->the_post();
                                    get_template_part('template-parts/loop', 'content');
                                }
                            }

                            wp_reset_postdata();
                            ?>
                        </span></a>
                </div>

            <?php endif; ?>
        <?php endfor; ?>

        <hr>
        <div class="button">
            <p class="more"><a href="<?php echo home_url(); ?>">TOPにもどる</a></p>
        </div>
    </section>
</main>
<?php get_footer() ?>
