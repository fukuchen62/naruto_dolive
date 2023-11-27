<aside class="archive">
    <div class="aside_title">━━ カテゴリ別 ━━</div>
    <ul class="archive_list">
        <?php
        $args = array(
            'title_li' => '',
        );
        wp_list_categories($args); ?>
    </ul>
</aside>
