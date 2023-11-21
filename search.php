<?php get_header(); ?>
<?php get_search_form(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php
        $search_term = get_search_query();
        $post_types = array('eat', 'enjoy', 'tour', 'stay', 'column');
        $found_posts = false;
        $total_hits = 0;
        foreach ($post_types as $post_type) {
            $args = array(
                'post_type' => $post_type,
                's' => $search_term,
                'posts_per_page' => -1
            );
            $query = new WP_Query($args);
            $hits = $query->found_posts;
            $total_hits += $hits;
            $post_type_obj = get_post_type_object($post_type);
            if ($hits > 0) {
                echo '<p>"<strong>' . esc_html($search_term) . '</strong>"で検索した結果、' . $post_type_obj->labels->singular_name . 'で<strong>' . $hits . '</strong>件の記事がヒットしました。</P>';
            }
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
            echo '<p>"<strong>' . esc_html($search_term) . '</strong>"で検索した結果、該当する記事がありませんでした。</p>';
            echo '<p><a href="' . get_home_url() . '">トップページに戻る</a></p>';
        }

        ?>
        <?php
        $search_term = get_search_query(); // 検索ワードを取得
        $all_taxonomies = get_taxonomies(array('public' => true), 'names');
        $tax_query = array();

        foreach ($all_taxonomies as $taxonomy) {
            $terms = get_terms(array(
                'taxonomy' => $taxonomy,
                'name__like' => $search_term,
                'hide_empty' => true,
            ));
            if (!empty($terms)) {
                $term_ids = wp_list_pluck($terms, 'term_id');
                $tax_query[] = array(
                    'taxonomy' => $taxonomy,
                    'field' => 'term_id',
                    'terms' => $term_ids,
                );
            }
        }

        // タームに基づいて関連記事を取得
        if (!empty($tax_query)) {
            $tax_query['relation'] = 'OR';
            $related_args = array(
                'post_type' => 'any', // または任意のカスタム投稿タイプ
                'posts_per_page' => 3, // 表示する記事数
                'orderby' => 'rand', // ランダムに記事を表示
                'tax_query' => $tax_query,
            );

            $related_query = new WP_Query($related_args);

            if ($related_query->have_posts()) : ?>
                <div class="related-articles">
                    <h2>関連記事</h2>
                    <ul>
                        <?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
                            <li>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            <?php else : ?>
                <p>関連する記事は見つかりませんでした</p>
            <?php endif; ?>

        <?php wp_reset_postdata();
        } ?>
    </main><!-- #main -->
</div><!-- #primary -->



<?php get_footer(); ?>
