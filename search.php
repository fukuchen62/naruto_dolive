<?php get_header(); ?>
<?php get_search_form(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php
        $search_term = get_search_query();
        $post_types = array('course', 'eat', 'enjoy', 'tour', 'stay', 'column', 'q_a');
        $found_posts = false;

        foreach ($post_types as $post_type) {
            $args = array(
                'post_type' => $post_type,
                's' => $search_term,
                'posts_per_page' => -1
            );
            $query = new WP_Query($args);

            $post_type_obj = get_post_type_object($post_type);
            echo '<h2>' . $post_type_obj->labels->singular_name . ' (' . $query->found_posts . '件)</h2>';

            if ($query->have_posts()) {
                $found_posts = true;
                while ($query->have_posts()) {
                    $query->the_post();

                    echo '<a href="' . get_permalink() . '">' . get_the_title() . '</a>';
                    if (has_post_thumbnail()) {
                        echo '<a href="' . get_permalink() . '">';
                        the_post_thumbnail('thumbnail');
                        echo '</a>';
                    }
                }
            }
        }



        if (!$found_posts && !have_posts()) {
            echo '<p>該当する結果がありませんでした。</p>';
            echo '<p><a href="' . get_home_url() . '">トップページに戻る</a></p>';
        }
        ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
