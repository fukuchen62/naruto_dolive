<?php
get_header();

?>

<!-- パンくずリスト -->
<?php get_template_part('template-parts/breadcrumb'); ?>

<h2>mypage.php</h2>

<h2>マイページです</h2>

<?php the_content(); ?>


<div>
    <?php
    $favorites = get_user_favorites();
    $args = array(
        'post__in' => $favorites,
        'post_type' => 'tour',
        'posts_per_page' => 3
    );
    $the_query = new WP_Query($args);
    ?>
    <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <article>
                <a href="<?php the_permalink(); ?>">
                    <h3><?php the_title(); ?></h3>
                </a>
                <p><?php echo get_the_content(); ?></p>
                <p><?php the_field('address'); ?></p>

            </article>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
</div>

<a href="<?php echo home_url(''); ?>">ホームへ</a><br>


<?php
get_footer();
?>