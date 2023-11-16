<aside class="archive">
    <h2 class="archive_title">日別</h2>
    <ul class="archive_list">
        <?php
        $args = array(
            'type' => 'daily',
        );
        wp_get_archives($args);
        ?>
    </ul>
</aside>