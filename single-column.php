<?php
get_header();

?>
<?php get_template_part('template-parts/breadcrumb'); ?>
<h2>コラム詳細ページ</h2>
<h2><?php the_title(); ?></h2>
<?php the_post_thumbnail('medium'); ?>
<br>
<?php the_field('text'); ?>
<br>
<a href="<?php echo home_url(''); ?>">ホームへ</a>


<div class="postLinks">
    <div class="postLink postLink-prev">
        <?php if (get_previous_post_link('%link<i class="fas fa-chevron-left"></i>')) : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/left_page.png" alt="">
        <?php endif; ?>
        <?php previous_post_link('<i class="fas fa-chevron-left"></i>%link') ?>
    </div>
    <div class="postLink postLink-next">
        <?php if (get_next_post_link('%link<i class="fas fa-chevron-right"></i>')) : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/right_page.png" alt="">
        <?php endif; ?>
        <?php next_post_link('%link<i class="fas fa-chevron-right"></i>') ?>
    </div>
</div>

<h3>カテゴリー一覧</h3>
<ul>
    <?php
    $categories = get_categories(array(
        'taxonomy' => 'column_type',
        'orderby' => 'name',
        'order' => 'ASC',
        'hide_empty' => false,
    ));

    foreach ($categories as $category) {
        $category_link = get_category_link($category->term_id);
        $post_count = $category->count;
        echo '<li><a href="' . $category_link . '">' . $category->name . '</a> (' . $post_count . ')</li>';
    }
    ?>
</ul>
</div>

<?php
get_footer();
