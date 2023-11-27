<aside class="archive">
    <div class="aside_title">━━アーカイブ━━</div>
    <ul class="archive_list">
        <?php
        $args = array(
            'type' => 'daily',
        );
        wp_get_archives($args);
        ?>
    </ul>
</aside>
