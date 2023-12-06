<aside class="archive">
    <div class="aside_title">━━ カテゴリ別 ━━</div>
    <ul class="archive_list">
        <?php
        $args = array(
            'title_li' => '',

        );
        $categories = get_categories();
        $categories = array_reverse($categories); // カテゴリーの順序を反転
        foreach ($categories as $category) : ?>
            <li><a href="<?php echo get_category_link($category->cat_ID); ?>"><?php echo $category->name; ?>（<?php echo $category->count; ?>）</a></li>
        <?php endforeach; ?>
        <?php
        // wp_list_categories($args);
        ?>
    </ul>
</aside>
