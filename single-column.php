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
        <p><?php previous_post_link('<i class="fas fa-chevron-left"></i>%link'); ?> </p>
    </div>
    <div class="postLink postLink-next">
        <p><?php next_post_link('%link<i class="fas fa-chevron-right"></i>'); ?></p>
    </div>
</div>

<?php
get_footer();
