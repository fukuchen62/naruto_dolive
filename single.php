<?php
get_header();

?>
<?php get_template_part('template-parts/breadcrumb'); ?>
<h2>single.html</h2>
<?php the_title();
the_content(); ?>

<a href="<?php echo home_url(''); ?>">ホームへ</a>


<?php
get_footer();
