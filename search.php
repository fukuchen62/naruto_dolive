<?php get_header(); ?>

<body>
    <div id="stkr" class="sp_none"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/maincar_icon.png" alt="" class="car_img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/exhaust_fumes.gif" alt="" class="gas"></div>
    <main>
        <?php $search_term = get_search_query(); ?>
        <section id="toparea" class="toparea">
            <h2> 『 <?= $search_term ?> 』 の検索結果</h2>
        </section>
        <div class="main_wrap">
            <div class="breadcrumb"><?php get_template_part('template-parts/breadcrumb'); ?></div>

            <!-- ここから食べるです -->
            <div class="archive_col">
                <div class="center_title">
                    <?php
                    $search_term = get_search_query();
                    $eat_post_types = array('eat');
                    $eat_found_posts = false;
                    $eat_total_hits = 0;
                    foreach ($eat_post_types as $eat_post_type) {
                        $args = array(
                            'post_type' => $eat_post_type,
                            's' => $search_term,
                            'posts_per_page' => -1
                        );
                        $eat_query = new WP_Query($args);
                        $eat_hits = $eat_query->found_posts;
                        $eat_total_hits += $eat_hits;
                        $eat_post_type_obj = get_post_type_object($eat_post_type); ?>
                        <h3 class="middle_title">食べるの結果 ( <?= $eat_hits ?> )</h3>
                </div><!-- center_title -->
                <div class="card_3col">
                    <?php if ($eat_query->have_posts()) {
                            $eat_found_posts = true;
                            while ($eat_query->have_posts()) {
                                $eat_query->the_post();
                                get_template_part('template-parts/loop', 'content'); ?>
                    <?php
                            }
                        }
                        wp_reset_postdata();
                    ?>
                <?php
                    }
                ?>
                </div><!-- card_3col -->
            </div><!-- archive_col -->


            <!-- ここから遊ぶです -->
            <div class="archive_col">
                <div class="center_title">
                    <?php
                    $search_term = get_search_query();
                    $enjoy_post_types = array('enjoy');
                    $found_posts = false;
                    $total_enjoy_hits = 0;
                    foreach ($enjoy_post_types as $enjoy_post_type) {
                        $args = array(
                            'post_type' => $enjoy_post_type,
                            's' => $search_term,
                            'posts_per_page' => -1
                        );
                        $enjoy_query = new WP_Query($args);
                        $enjoy_hits = $enjoy_query->found_posts;
                        $total_enjoy_hits += $enjoy_hits;
                        $enjoy_post_type_obj = get_post_type_object($enjoy_post_type); ?>
                        <h3 class="middle_title">遊ぶの結果 ( <?= $enjoy_hits ?> )</h3>
                </div><!-- center_title -->
                <div class="card_3col">
                    <?php if ($enjoy_query->have_posts()) {
                            $found_posts = true;
                            while ($enjoy_query->have_posts()) {
                                $enjoy_query->the_post();
                                get_template_part('template-parts/loop', 'content'); ?>
                    <?php }
                        }
                        wp_reset_postdata(); ?>
                <?php } ?>
                </div><!-- card_3col -->
            </div><!-- archive_col -->


            <!-- ここから観光です -->
            <div class="archive_col">
                <div class="center_title">
                    <?php
                    $search_term = get_search_query();
                    $tour_post_types = array('tour');
                    $tour_found_posts = false;
                    $tour_total_hits = 0;
                    foreach ($tour_post_types as $tour_post_type) {
                        $args = array(
                            'post_type' => $tour_post_type,
                            's' => $search_term,
                            'posts_per_page' => -1
                        );
                        $tour_query = new WP_Query($args);
                        $tour_hits = $tour_query->found_posts;
                        $tour_total_hits += $tour_hits;
                        $tour_post_type_obj = get_post_type_object($tour_post_type); ?>
                        <h3 class="middle_title">観光の結果 ( <?= $tour_hits ?> )</h3>
                </div><!-- center_title -->
                <div class="card_3col">
                    <?php if ($tour_query->have_posts()) {
                            $tour_found_posts = true;
                            while ($tour_query->have_posts()) {
                                $tour_query->the_post();
                                get_template_part('template-parts/loop', 'content'); ?>
                    <?php
                            }
                        }
                        wp_reset_postdata();
                    ?>
                <?php
                    }
                ?>
                </div><!-- card_3col -->
            </div><!-- archive_col -->


            <!-- ここから宿泊です -->
            <div class="archive_col">
                <div class="center_title">
                    <?php
                    $search_term = get_search_query();
                    $stay_post_types = array('stay');
                    $stay_found_posts = false;
                    $stay_total_hits = 0;
                    foreach ($stay_post_types as $stay_post_type) {
                        $args = array(
                            'post_type' => $stay_post_type,
                            's' => $search_term,
                            'posts_per_page' => -1
                        );
                        $stay_query = new WP_Query($args);
                        $stay_hits = $stay_query->found_posts;
                        $stay_total_hits += $stay_hits;
                        $stay_post_type_obj = get_post_type_object($stay_post_type); ?>
                        <h3 class="middle_title">宿泊の結果 ( <?= $stay_hits ?> )</h3>
                </div><!-- center_title -->
                <div class="card_3col">
                    <?php if ($stay_query->have_posts()) {
                            $stay_found_posts = true;
                            while ($stay_query->have_posts()) {
                                $stay_query->the_post();
                                get_template_part('template-parts/loop', 'content'); ?>
                    <?php
                            }
                        }
                        wp_reset_postdata();
                    ?>
                <?php
                    }
                ?>
                </div><!-- card_3col -->
            </div><!-- archive_col -->

    </main>
    <!-- <script src="../assets/js/common.js"></script> -->
</body>

</html>
<?php wp_reset_postdata();
?>

<?php get_footer(); ?>