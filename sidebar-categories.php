<aside class="archive">
    <h2 class="archive_title">カテゴリー別</h2>
    <ul class="archive_list">
        <?php
        $args = array(
            'title_li' => '',
        );
        wp_list_categories($args); ?>
    </ul>
</aside>